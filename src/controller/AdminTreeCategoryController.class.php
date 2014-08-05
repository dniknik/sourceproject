<?php
lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');
lmb_require('limb/util/system/lmbFs.class.php');

lmb_require('limb/tree/src/lmbTreeDecorator.class.php');
lmb_require('limb/tree/src/lmbMPTree.class.php');

lmb_require('limb/datetime/src/lmbDate.class.php');
lmb_require('limb/datetime/src/lmbDateTime.class.php');
lmb_require('limb/datetime/src/lmbDateTimeZone.class.php');

//lmb_require('limb/search/src/controller/SearchController.class.php');
lmb_require('src/helper/AlphabetHelper.class.php');
//lmb_require('src/controller/AdminTreeItemController.class.php');


//class AdminTreeProductController extends  AdminTreeItemController
class AdminTreeCategoryController extends lmbAdminObjectController
{
    protected $_object_class_name = 'TreeItem'; //@todo check name
//
    protected $isTail = 0;
    protected $isTailBranch = 0;
    protected $isBranch = 0;

    function doCreate()
    {
        echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction(). '/ ';
        $dt = new lmbDate();
        $this->dt_cr = $dt->getStamp();
        $this->dt_up = $dt->getStamp();
        //$this->dt_up = (new lmbDate($this->dt_cr)) ->toString();
        //$this->dt_up = (new lmbDate($this->dt_cr))->getIsoDate();

        $criteria = new lmbSQLFieldCriteria('is_branch', 1);
        $criteria->addAnd('attr_id = '. TreeItem::ID_TITLE );//@fixme use coonfig value -after crated is confog:-)
        $this->items = lmbCollection::toFlatArray(lmbActiveRecord :: find('TreeItem', $criteria));
        //lmb_var_debug(sizeof($this->items));
        //lmb_var_debug($this->items);

        if($this->request->hasPost())
        {
            $this->_validateAndSave(true);
            $this->_onAfterSave();
        }
    }


    function doEdit()
    {
        // echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction() . '/ ';
        $dt = new lmbDate();
        $this->dt_up = $dt->getStamp();

        $node_id = $this->request->getInteger('id');
        $category['node_id'] = $node_id;
        $category['title'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_TITLE);
        $category['description'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_DESCR);
        $category['identifier'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_URI);

        $this->dt_cr = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_CREATE_DATE);
        $category['date_create'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_CREATE_DATE);
        $category['date_update'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_UPDATE_DATE);
        $category['is_branch'] = TreeItem::getIsBranchByNodeId($node_id);

        $this->setFormDatasource($category, 'object_form');

        if($this->request->hasPost())
        {
            $this->_validateAndSave(false);
            $this->_onAfterSave();
        }
    }


    function doProduct()
    {
        echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction(). '/ ';
        $this->items = array(
            array('id'=>1),
            array('id'=>2)
        );
    }

//    function doCreate()
//    {
//        if(!$this->parent = $this->_getObjectByRequestedId())
//            $this->forwardTo404();
//
//        $this->item = new $this->_object_class_name();
//
//        $this->_onCreate();
//
//        $this->useForm($this->_form_name);
//        $this->setFormDatasource($this->item);
//
//        if($this->request->hasPost())
//        {
//            $this->_import();
//            $this->item->setParent($this->parent);
//            $this->_validateAndSave($create = true);
//        }
//        else
//            $this->_initCreateForm();
//    }

    protected function _onAfterSave()
    {
        $this->redirect('/' . $this->getName() . '/');
    }

    protected function _getTreeItemByNodeIdAndAttrId($node_id = 0, $attr_id = TreeItem::ID_TITLE)
    {
        $node_id = (is_numeric($node_id)) ? $node_id : 0;
        if($node_id==0) {
            echo '<br><b>!node_id==0!</b><br>';
            return null;
        }
        $criteria = new lmbSQLCriteria('node_id = ' . $node_id);
        $criteria->addAnd(new lmbSQLFieldCriteria('attr_id', $attr_id));
        $item = lmbActiveRecord::findOne('TreeItem', array('criteria' => $criteria));
        if (is_null($item)) {
            $item = new TreeItem();
            $item->set('node_id', $node_id);
        }
        return $item;
    }

    protected function _getNodeTreeByNodeId($node_id = 0)
    {
        $node_id = (is_numeric($node_id)) ? $node_id : 0;
        if($node_id==0) {
            echo '<br><b>!node_id==0!</b><br>';
            return null;
        }
        $criteria = new lmbSQLCriteria('node_id = ' . $node_id);
        $item = lmbActiveRecord::findOne('TreeFull', array('criteria' => $criteria));
        //if (is_null($item)) {
            //$item = new TreeItem();
            //$item->set('node_id', $node_id);
        //}
        return $item;
    }


    protected function _validateAndSave($is_create = false)
    {
        echo '/ '. $this->getName() . '--' . $this->getCurrentAction() . ' /';
        $is_editing_treeItem = (strlen($this->getCurrentAction())==4); //getCurrentAction() ~ 'edit'

        $pars['title'] = $this->request->get('title');
        $pars['identifier'] = $this->request->get('identifier');
        $pars['description'] = $this->request->get('description');

        $pars['id_sys_tree'] = $this->request->get('id_sys_tree');
        $pars['is_branch'] = $this->request->get('is_branch');

        $pars['date_create'] = $this->request->get('date_create');
        $pars['date_update'] = $this->request->get('date_update');

        $arr_specifications = array( // @todo вынести в файл настроек проекта
            1 => "title", 'description', 'identifier', //'price',
            'date_create', 'date_update'
            //'date_create', 'date_modified'
        );

        if ($this->request->has('price')) {
            echo '<b>! HAVE_price !</b>';
            $pars['price'] = $this->request->get('price');
            array_push($arr_specifications, 'price');
        }

        //echo '<br>pars: ';         lmb_var_debug($pars);
        //echo '<br>request: ';         lmb_var_debug($this->request);

        $str_uri = lmb_translit_russian(str_replace(' ', '_', $pars['title']));
        $pars['identifier'] = $str_uri;

        //$node = new Tree();
        //$node->set('parent_id', $pars['id_sys_tree']);
        //$node->set('identifier', $str_uri); // @fixme   use node of tree

//        $itemTree = lmbActiveRecord :: find(
//            'Tree',
//            new lmbSQLCriteria('id=' . $pars['id_sys_tree'])
//        );
//
//        $parent_item = lmbCollection::toFlatArray($itemTree)[0];
//        $node->set('level', $parent_item['level'] + 1);

//echo '<br>saving node ...';
//lmb_var_debug($node);

//return 0;
        //$node->save();
        //$node->set('path', $parent_item['path'] . $node->getId() . '/');
        //$node->save();
        //lmb_var_debug($node);
        //lmb_var_debug($node->getId());

        //$id_forSave = $node->getId();
//        $itemTree = lmbActiveRecord :: find(
//            'TreeItem',
//            new lmbSQLCriteria ('id=' . $pars['id_sys_tree'])
//        );
//        $parent_item = lmbCollection::toFlatArray($itemTree)[0];
//        $node->set('level', $parent_item['level'] + 1);

        $cur_max_node_id =0;
        $sql = 'select max(node_id) as max from tree_item';
        $sql_select_max_node_id = new lmbSelectQuery('tree_item');
        $sql_select_max_node_id->addField('max(node_id)');

        $cur = lmbActiveRecord::findBySql('TreeItem', $sql);
        $arr_item = lmbCollection::toFlatArray($cur)[0];
        lmb_var_debug($arr_item);
        lmb_var_debug($arr_item['max']);
        if (isset($arr_item['max'])) {
            echo 'isset_max:('.$arr_item['max'];
        }

        if (is_null($arr_item['max'])) {
            echo 'max_null:('.$arr_item['max'];
            $cur_max_node_id = 0;
        }
        if (is_numeric($arr_item['max'])) {
            echo 'max_is_numeric:( ';
            $cur_max_node_id = $arr_item['max'];
            echo  $cur_max_node_id.  ')<br>';
        }
        else echo 'max_NOT_is_numeric:('.$arr_item['max'];

        $node_id_forSave = $cur_max_node_id + 1;
        $node_id = $this->request->get('node_id');

        $iIsBranch = $pars['is_branch'];
        $idNode = ($is_editing_treeItem)? $node_id: $node_id_forSave;
        foreach ($arr_specifications as $key => $value) {
            $spec_value = $pars[$value];
            //echo "<br>[$key]=$value:". $spec_value;

            $spec = $this->_getTreeItemByNodeIdAndAttrId($idNode, $key);

            $spec->set('attr_id', $key);
            $spec->set('attr_value', $spec_value);

            $spec->set('is_branch', $iIsBranch);
            $spec->save();
            //lmb_var_debug($spec);
            //echo '<br>';
        }
        if ($is_editing_treeItem) {
        //$nodeTree = $this->_getNodeTreeByNodeId($idNode);
        lmbActiveRecord ::updateRaw( 'TreeFull', array('identifier' => $pars['identifier']), new lmbSQLFieldCriteria('node_id', $idNode));
//        if ($nodeTree)
//        {
//            lmb_var_debug($nodeTree);
//            $nodeTree['identifier'] = $pars['identifier'];
//            echo '<br>';
//            lmb_var_debug($nodeTree);
//
//            //return 0;
//            $nodeTree->save();
//            //$nodeTree->updateRaw();
//        }
        }
//        $my_connect = lmbToolkit::instance()->getDefaultDbConnection();
//        $tree = //new lmbTreeDecorator(
//            new lmbMPTree(
//                'tree_full',
//                $my_connect,
//                array('id' => 'id',
//                    'parent_id' => 'parent_id',
//                    'level' => 'level',
//                    'identifier' => 'identifier',
//                    'path' => 'path'
//                )//)
//        );
//
//        //$root = $tree->initTree();
//
//        $node_1 = $tree->createNode($root,
//                array(
//                    'identifier' => 'node_1',
//                    'parent_id' => $id_forSave,
//                )
//        );
//        //$node_1->set('is_branch', $iIsBranch);
//        $node_1->save();
//        $tree->save();
    }

    function doAppend()
    {
        echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction(). '/ ';
    }

    function  doDisplay()
    {
        echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction(). '/ ';
//        $criteria = new lmbSQLCriteria('id > 0'); //todo show only Product (is_branch=0)
        //parent :: doDisplay();

        $criteria = new lmbSQLCriteria('is_branch = 1');//lmbSQLFieldCriteria('is_branch', 1);
        $this->items = lmbActiveRecord :: find('TreeItem', $criteria);
    }

//    static function  getUri($id) {
//        //i = l + n
//        return 0;
//    }

    protected function  getIdFromRequest($request, $class_name = null)
    {
        $id = 0;
        //echo('<br>::request:<br>');
        //lmb_var_debug($request);

        //echo('<br>::class_name:<br>');
        //lmb_var_debug($class_name);

        $req_filed = 'identifier';
        $req_val = 0;

        if (isset($request['identifier'])) {
            //echo('<br>yes_identifier<br>');
            $req_val = $request['identifier'];
        } else
            if (isset($request['id'])) {
                //echo('<br>yes_id<br>');
                $req_val = $request['id'];
            } else {
                //echo('<br>by__parent_id<br>');
                $req_filed = 'parent_id';
            }
        //echo '<br>';
        if (is_numeric($req_val) && intval($req_val) - $req_val == 0)
            echo ' par_is_int';
        else
            echo ' par_is_NOT_int';

        $criteria = lmbSQLCriteria :: equal($req_filed, $req_val);
        $current = lmbCollection::toFlatArray(lmbActiveRecord :: find('Tree', $criteria));

        if (sizeof($current) == 0) {
            //echo('<br>size_result_by_identifier=0 ..');
            if (is_numeric($req_val) && intval($req_val) - $req_val == 0) {
                //echo '<br>par_is_int';
                $criteria = lmbSQLCriteria :: equal('id', $req_val);
                $current = lmbCollection::toFlatArray(lmbActiveRecord :: find($class_name, $criteria));
//                $current = lmbCollection::toFlatArray(lmbActiveRecord :: find('Tree', $criteria));
                //echo('size_result_by_id:');
                //lmb_var_debug(sizeof($current));

                if (sizeof($current) != 0) {
                    //echo '<br>';
                    //lmb_var_debug($current);
                    //echo '<br>';
                    //lmb_var_debug($current[0]['id']);
                    $id = $current[0]['id'];
                }
            }
        } else {
            //lmb_var_debug($current);
            //lmb_var_debug($current[0]['id']);
            $id = $current[0]['id'];

        }
        return $id;
    }

    function  doNode()
    {
        echo ' ' . $this->getName() . ' :: ' . $this->getCurrentAction();

        $this->childrens = array();
        $this->specifications = array();
        $this->child_specs = array();
        $this->legacy_specs = array();
        $this->arr_notAdded = array();
        $this->specs = array();
        $this->pref = array();
        $this->id = 0;

        $this->id = $this->getIdFromRequest($this->request, 'Tree');

        //$id = $this->id;
        echo ' #this_id:' . $this->id; // .' #id:'.$id. '<br>';

        if ($this->id == 0) {
            $this->flash('Проверьте корректность адресной строки!');
            return 0;
        }

        try {
            //$node = Objoftree :: findById($id);//
            //$node = lmbActiveRecord :: findById('Tree', $id);
            //$node = Tree :: findById($id);

            //$criteria = lmbSQLCriteria :: equal($this->field_name, $value);
            //if(!$this->object->isNew())
            //    $criteria->addAnd(new lmbSQLFieldCriteria('id', $this->object->getId(), lmbSQLFieldCriteria :: NOT_EQUAL));
            //$records = lmbActiveRecord :: find($this->class, $criteria);
            //
            //$criteria = new lmbSQLFieldCriteria($this->field_name, $value);
            //if(!$this->user->isNew())
            //    $criteria->addAnd('id <> '. $this->user->getId());
            //
            //$criteria = lmbSQLCriteria :: equal($this->field_name, $value)->addAnd('parent_id = ' . ($this->parent_id ? $this->parent_id : $this->node->getParent()->getId()));
            //if(!$this->node->isNew())
            //    $criteria->addAnd('id <> '. $this->node->getId());

            //$this->items = lmbActiveRecord :: find($this->_object_class_name, array('criteria' => $criteria, 'sort'=>array('priority'=>'ASC')));

            $id = $this->id;
            $criteria = lmbSQLCriteria :: like('path', '%/' . $id . '/');
            $cur_node = (lmbActiveRecord :: find('Tree', $criteria));
            $cur_node_path = '';
            if (isset($cur_node[0]) && (array_key_exists('path', $cur_node[0]))) {
                $cur_node_path = $cur_node[0]['path'];
            }
            $criteria = lmbSQLCriteria :: like('path', $cur_node_path . '%');
            $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('Tree', $criteria));
            $this->childrens = $records;
            $ids_childrens = array_column($records, 'id');

            //$cur_level
            $max_level = max(array_column($records, 'level'));
            echo ' max_level: ' . $max_level;
            $cur_level = $records[0]['level'];
            echo ' cur_level: ' . $cur_level;
            //lmb_var_debug($cur_level);
            echo ' : ';
            echo($max_level - $cur_level);
            $this->isMayBe = (2 > (int)$max_level - $cur_level) ? true : false;
            $this->isTail = ($cur_level == $max_level) ? true : false;
            $this->isTailBranch = (($cur_level != $max_level) || ($cur_level + 1 == $max_level)) ? true : false;
            $this->isBranch = (($cur_level != $max_level) || ($cur_level + 1 != $max_level)) ? true : false;
            //$this->setIsBranch($this->isTail!=true);
            //echo $this->isBransh;
            //echo $this->getIsBranch();

            $criteria = lmbSQLCriteria :: equal('id_sys_tree', $id);
            $node = lmbCollection::toFlatArray(lmbActiveRecord :: find('Objoftree', $criteria));
            $this->specifications = $node;

            $criteria = lmbSQLCriteria :: in('id_sys_tree', $ids_childrens);
            $node = lmbCollection::toFlatArray(lmbActiveRecord :: find('Objoftree', $criteria));
            $this->child_specs = $node;

            $cur_node_path = trim($cur_node_path, '/');
            $ids_from_path = explode("/", $cur_node_path);
            $criteria = lmbSQLCriteria :: in('id_sys_tree', $ids_from_path);
            $node = lmbCollection::toFlatArray(lmbActiveRecord :: find('Objoftree', $criteria));
            $this->legacy_specs = $node; //legacy or all *@todo distinct id for cur_node

            $arr_prIds_legacy = array_column($this->legacy_specs, 'id_pr');
            $arr_prIds_child = array_column($this->child_specs, 'id_pr');
            //array_column($records, 'first_name');
            $arr_diff = array_diff($arr_prIds_legacy, $arr_prIds_child);
            //lmb_var_debug($arr_diff);
            $this->arr_notAdded = $arr_diff;

            //lmb_var_debug($ids_from_path);
            //$criteria = lmbSQLCriteria :: greaterOrEqual('id', 0);
            //$criteria->addAnd('id > '. $this->user->getId());

            $criteria = null;
            //$criteria = lmbSQLCriteria :: notEqual('importance', 0); // @todo Activation for production
            $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('Preference', $criteria));
            //lmb_var_debug($records);
            $this->specs = $records;

            $preference = array();
            foreach ($records as $key => $val) {
                $preference[$val['id']] = $val['title'];
            }
            $this->pref = $preference;
            //lmb_var_debug($this->pref);

            //$product = Product :: findById($product_id);
            //$cart = $this->_getCart();
            //$cart->addProduct($product);
            //$this->flashMessage('Product "' . $product->getTitle() . '" added to your cart!');
        } catch (lmbARException $e) {
            $this->flashError('Wrong ...!');
        }
//        if(isset($_SERVER['HTTP_REFERER']))
//            $this->redirect($_SERVER['HTTP_REFERER']);
//        else
//            $this->redirect();
//        echo $this->getName().':'.$this->getCurrentAction();
    }

    function  doBranch()
    {
        echo ' ' . $this->getName() . ' :: ' . $this->getCurrentAction();

        $this->helper = new AlphabetHelper();
        $this->useForm('search_form');
        $this->setFormDatasource($this->request);

        echo '_getSearchParams()<br>this->_getSearchParams():<br>';
        //echo 'this->request<br>'.$this->request->toString().'<br>';


        $this->items = Uitree :: findForFront($this->request);
        //$this->items = Uitree :: findForFront($this->_getSearchParams());


        $this->childrens = array();
        $this->specifications = array();
        $this->child_specs = array();
        $this->legacy_specs = array();
        $this->arr_notAdded = array();
        $this->specs = array();
        $this->pref = array();
        $this->id = 0;

        $this->id = $this->getIdFromRequest($this->request, 'Tree');

        //$id = $this->id;
        echo ' #this_id:' . $this->id; // .' #id:'.$id. '<br>';

        if ($this->id == 0) {
            $this->flash('Проверьте корректность адресной строки!');
            return 0;
        }

        try {
            //$node = Objoftree :: findById($id);//
            //$node = lmbActiveRecord :: findById('Tree', $id);
            //$node = Tree :: findById($id);

            //$criteria = lmbSQLCriteria :: equal($this->field_name, $value);
            //if(!$this->object->isNew())
            //    $criteria->addAnd(new lmbSQLFieldCriteria('id', $this->object->getId(), lmbSQLFieldCriteria :: NOT_EQUAL));
            //$records = lmbActiveRecord :: find($this->class, $criteria);
            //
            //$criteria = new lmbSQLFieldCriteria($this->field_name, $value);
            //if(!$this->user->isNew())
            //    $criteria->addAnd('id <> '. $this->user->getId());
            //
            //$criteria = lmbSQLCriteria :: equal($this->field_name, $value)->addAnd('parent_id = ' . ($this->parent_id ? $this->parent_id : $this->node->getParent()->getId()));
            //if(!$this->node->isNew())
            //    $criteria->addAnd('id <> '. $this->node->getId());

            //$this->items = lmbActiveRecord :: find($this->_object_class_name, array('criteria' => $criteria, 'sort'=>array('priority'=>'ASC')));

            $id = $this->id;
            $criteria = lmbSQLCriteria :: like('path', '%/' . $id . '/');
            $cur_node = (lmbActiveRecord :: find('Tree', $criteria));
            $cur_node_path = '';
            if (isset($cur_node[0]) && (array_key_exists('path', $cur_node[0]))) {
                $cur_node_path = $cur_node[0]['path'];
            }
            $criteria = lmbSQLCriteria :: like('path', $cur_node_path . '%');
            $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('Tree', $criteria));
            $this->childrens = $records;
            $ids_childrens = array_column($records, 'id');

            //$cur_level
            $max_level = max(array_column($records, 'level'));
            echo ' max_level: ' . $max_level;
            $cur_level = $records[0]['level'];
            echo ' cur_level: ' . $cur_level;
            //lmb_var_debug($cur_level);
            echo ' : ';
            echo($max_level - $cur_level);
            $this->isMayBe = (2 > (int)$max_level - $cur_level) ? true : false;
            $this->isTail = ($cur_level == $max_level) ? true : false;
            $this->isTailBranch = (($cur_level != $max_level) || ($cur_level + 1 == $max_level)) ? true : false;
            $this->isBranch = (($cur_level != $max_level) || ($cur_level + 1 != $max_level)) ? true : false;
            //$this->setIsBranch($this->isTail!=true);
            //echo $this->isBransh;
            //echo $this->getIsBranch();

            $criteria = lmbSQLCriteria :: equal('id_sys_tree', $id);
            $node = lmbCollection::toFlatArray(lmbActiveRecord :: find('Objoftree', $criteria));
            $this->specifications = $node;

            $criteria = lmbSQLCriteria :: in('id_sys_tree', $ids_childrens);
            $node = lmbCollection::toFlatArray(lmbActiveRecord :: find('Objoftree', $criteria));
            $this->child_specs = $node;

            $cur_node_path = trim($cur_node_path, '/');
            $ids_from_path = explode("/", $cur_node_path);
            $criteria = lmbSQLCriteria :: in('id_sys_tree', $ids_from_path);
            $node = lmbCollection::toFlatArray(lmbActiveRecord :: find('Objoftree', $criteria));
            $this->legacy_specs = $node; //legacy or all *@todo distinct id for cur_node

            $arr_prIds_legacy = array_column($this->legacy_specs, 'id_pr');
            $arr_prIds_child = array_column($this->child_specs, 'id_pr');
            //array_column($records, 'first_name');
            $arr_diff = array_diff($arr_prIds_legacy, $arr_prIds_child);
            //lmb_var_debug($arr_diff);
            $this->arr_notAdded = $arr_diff;

            //lmb_var_debug($ids_from_path);
            //$criteria = lmbSQLCriteria :: greaterOrEqual('id', 0);
            //$criteria->addAnd('id > '. $this->user->getId());

            $criteria = null;
            //$criteria = lmbSQLCriteria :: notEqual('importance', 0); // @todo Activation for production
            $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('Preference', $criteria));
            //lmb_var_debug($records);
            $this->specs = $records;

            $preference = array();
            foreach ($records as $key => $val) {
                $preference[$val['id']] = $val['title'];
            }
            $this->pref = $preference;
            //lmb_var_debug($this->pref);

            //$product = Product :: findById($product_id);
            //$cart = $this->_getCart();
            //$cart->addProduct($product);
            //$this->flashMessage('Product "' . $product->getTitle() . '" added to your cart!');
        } catch (lmbARException $e) {
            $this->flashError('Wrong ...!');
        }
//        if(isset($_SERVER['HTTP_REFERER']))
//            $this->redirect($_SERVER['HTTP_REFERER']);
//        else
//            $this->redirect();
//        echo $this->getName().':'.$this->getCurrentAction();
    }

    function _getSearchParams()
    {
        $params = array();
        if ($this->request->get('title'))
            $params['title'] = $this->request->getSafe('title');

        $msg = $this->getName() . '--' . $this->getCurrentAction() . ' ';
        echo '<br>msg: ' . $msg . '<br>params: ';
        lmb_var_debug($params);

        return $params;
    }
}
