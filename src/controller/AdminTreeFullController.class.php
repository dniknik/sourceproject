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

class AdminTreeFullController extends lmbAdminObjectController
{
    protected $_object_class_name = 'TreeFull'; //@todo check name

    protected $isTail = 0;
    protected $isTailBranch = 0;
    protected $isBranch = 0;

    function doCreate()
    {
        echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction(). '/ ';
        $dt = new lmbDate();
        $this->dt_cr = $dt->getStamp();
        $this->dt_up = $dt->getStamp();

        $criteria = new lmbSQLFieldCriteria('is_branch', 1);
        $criteria->addAnd('attr_id = '. TreeItem::ID_TITLE );
        $this->items = lmbActiveRecord :: find('TreeItem', $criteria);

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
        $node['node_id'] = $node_id;
        $node['title'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_TITLE);
        $node['description'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_DESCR);
        $node['identifier'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_URI);
        $node['price'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_PRICE);

        $this->dt_cr = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_CREATE_DATE);
        $node['date_create'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_CREATE_DATE);
        $node['date_update'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_UPDATE_DATE);
        $node['is_branch'] = TreeItem::getIsBranchByNodeId($node_id);

        $this->setFormDatasource($node, 'object_form');

        $criteria = new lmbSQLFieldCriteria('is_branch', 1);
        $criteria->addAnd('attr_id = '. TreeItem::ID_TITLE );
        $this->items = lmbActiveRecord :: find('TreeItem', $criteria);


        if($this->request->hasPost())
        {
            $this->_validateAndSave(false);
            //$this->_onAfterSave();
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

    protected function _validateAndSave($is_create = false)
    {
        echo '/ '. $this->getName() . '--' . $this->getCurrentAction() . ' /';
        $is_editing_treeItem = (strlen($this->getCurrentAction())==4); //getCurrentAction() ~ 'edit'
        //echo '<br> validation for '. ($is_editing_treeItem)? 'EDIT': 'NO_EDIT';
        //echo '<br>request: '. $this->request->toString();

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

        //echo '<br>pars: ';  lmb_var_debug($pars);
        //echo '<br>request: '; lmb_var_debug($this->request);

        $str_uri = lmb_translit_russian(str_replace(' ', '_', $pars['title']));
        //$node->set('identifier', $str_uri); // @fixme   use node of tree
        $pars['identifier'] = $str_uri;

        $cur_max_node_id =0;
        $sql = 'select max(node_id) as max from tree_item';
        $sql_select_max_node_id = new lmbSelectQuery('tree_item');
        $sql_select_max_node_id->addField('max(node_id)');

        $cur = lmbActiveRecord::findBySql('TreeItem', $sql);
        $arr_item = lmbCollection::toFlatArray($cur)[0];
        //lmb_var_debug($arr_item);
        //lmb_var_debug($arr_item['max']);
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
            //echo  $cur_max_node_id.  ')<br>';
        }
        else echo 'max_NOT_is_numeric:('.$arr_item['max'];
        //$max_dode_id = new lmbSelectQuery('tree_item')

        //$id_forSave = $cur_max_node_id+1;
        $node_id_forSave = $cur_max_node_id + 1;
        $node_id = $this->request->get('node_id');
        echo ' <br>node_id_forSave='. $node_id_forSave. ' node_id: '. $node_id;

        $iIsBranch = $pars['is_branch'];
        foreach ($arr_specifications as $key => $value) {
            $spec_value = $pars[$value];
            //echo "<br>[$key]=$value:". $spec_value;

            $spec = $this->_getTreeItemByNodeIdAndAttrId(($is_editing_treeItem)? $node_id: $node_id_forSave, $key);

            $spec->set('attr_id', $key);
            $spec->set('attr_value', $spec_value);

            $spec->set('is_branch', $iIsBranch);
        $spec->save();
            //lmb_var_debug($spec);
            //echo '<br>';
        }
//return 0;
        $parent_req_id = $this->request->get('id_parent'); // node_id - parent nodeTree
        $tmp = lmbActiveRecord :: findOne('TreeFull',' node_id='. $parent_req_id);
        //lmbCollection::toFlatArray
        $sql = ('select id from tree_full where node_id ='. $parent_req_id);
        //$row = lmbActiveRecord::findBySql('TreeFull', $sql);
        $row = lmbDBAL::fetchOneValue($sql);

        echo '<br>(sql)'; lmb_var_debug(($row)); echo '<br>';
        //echo '<br>(sql)'; lmb_var_debug(lmbCollection::toFlatArray($row)); echo '<br>';

        //$tmp = lmbActiveRecord :: findOneBySql('TreeFull','select id from tree_full where node_id='. $parent_req_id);
        echo '<br> TMP by-node_id-parent: '; lmb_var_debug($tmp);
        if($tmp) echo ' hasTMP ';
        else echo ' notHasTMP ';
        //$par_id = $tmp['id'];
        // getPrimaryKeyName()
        //$f = $tmp->getPrimaryKeyName();
        //$par_id = $tmp->getId();
        $par_id =  (integer)$row;
        echo '<br>()id(by node_id Parent-Category)='. $par_id. '<br>';
        //echo '<br>(f)'. $f. '<br>';

        // fixme getTreeFull for create and edit

        $node = new TreeFull();
        $change_nodeTree = new TreeFull();

        $change_nodeTree->set('node_id', ($is_editing_treeItem)? $node_id: $node_id_forSave);
        $change_nodeTree->set('root_id', 0);
        $change_nodeTree->set('parent_id', $par_id);
        $change_nodeTree->set('priority', 0);
        $change_nodeTree->set('level', $tmp['level']+1);
        //$change_nodeTree->set('path', '');
        $change_nodeTree->set('children', 0);
        $change_nodeTree->set('path', rtrim($tmp['path'],'/') .'/'. 'getId' . '/');
        $change_nodeTree->set('identifier', $pars['identifier']);
        $change_nodeTree->set('is_branch', 0);

        $node->set('parent_id', $par_id);
        $node->set('identifier', $pars['identifier']);

        $itemTree = lmbActiveRecord :: find('TreeFull', new lmbSQLCriteria('id='.$par_id));
        echo '<br>double_check: ';
        lmb_var_debug(sizeof($itemTree));
        echo '<br>';
        lmb_var_debug($itemTree);
        echo '<br>';

        $parent_item = array();
        if(sizeof($itemTree)!=0)
            $parent_item = lmbCollection::toFlatArray( $itemTree)[0];
        else { //is by Root
            $parent_item['level'] = 0;
            $parent_item['path'] = '';
        }

        if(isset($parent_item) and is_numeric($parent_item['level']))
            echo '<br> CORRECT_parent_item_level <br>';
        else'<br> NOT_CORRECT_parent_item_level <br>';

        $node->set('level', $parent_item['level']+1 );
        $node->set('node_id', ($is_editing_treeItem)? $node_id: $node_id_forSave);
        //$node->save();
        $change_nodeTree->set('path', rtrim($tmp['path'],'/') .'/'. '/');
        $change_nodeTree->save();
        $sql = 'select id from tree_full where node_id ='. ($is_editing_treeItem)? $node_id: $node_id_forSave;
        echo '<br>sql: '. $sql;
        //$row = lmbActiveRecord::findBySql('TreeFull', $sql);
        $row_val_id = 111;//lmbDBAL::fetchOneValue($sql);
        $node->set('path', rtrim($parent_item['path'],'/') .'/'. $node->getId() . '/');
        $change_nodeTree->set('path', rtrim($tmp['path'],'/') .'/'. $change_nodeTree->getId() . '/');
        $change_nodeTree->save();
        //$node->save();
        echo '<br>node: '; lmb_var_debug($node); echo '<br>';
        echo '<br>change_node: '; lmb_var_debug($change_nodeTree); echo '<br>';
//return 0;
    }

    function doAppend()
    {
        echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction(). '/ ';
    }


    function  doDisplay()
    {
        //echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction(). '/ ';
        parent :: doDisplay();

        $criteria = new lmbSQLCriteria('is_branch >= 0');//lmbSQLFieldCriteria('is_branch', 1);
        $this->tree_items = lmbActiveRecord :: find('TreeItem', $criteria);
    }

    protected function  getIdFromRequest($request, $class_name = null)
    {
        $id = 0;

        $req_filed = 'identifier';
        $req_val = 0;

        if (isset($request['identifier'])) {
            $req_val = $request['identifier'];
        } else
            if (isset($request['id'])) {
                $req_val = $request['id'];
            } else {
                $req_filed = 'parent_id';
            }

        //echo '<br>';
        //if (is_numeric($req_val) && intval($req_val) - $req_val == 0)
            //echo ' par_is_int';
        //else
            //echo ' par_is_NOT_int';

        $criteria = lmbSQLCriteria :: equal($req_filed, $req_val);
        $current = lmbCollection::toFlatArray(lmbActiveRecord :: find('TreeFull', $criteria));

        if (sizeof($current) == 0) {
            if (is_numeric($req_val) && intval($req_val) - $req_val == 0) {
                $criteria = lmbSQLCriteria :: equal('id', $req_val);
                $current = lmbCollection::toFlatArray(lmbActiveRecord :: find($class_name, $criteria));
                if (sizeof($current) != 0) {
                    $id = $current[0]['id'];
                }
            }
        } else {
            $id = $current[0]['id'];
        }
        return $id;
    }

    function  doTreefull()
    {
        echo ' ' . $this->getName() . ' :: ' . $this->getCurrentAction();

        $this->helper = new AlphabetHelper();
        $this->useForm('search_form');
        $this->setFormDatasource($this->request);
        //echo '_getSearchParams()<br>this->_getSearchParams():<br>';
        //echo 'this->request<br>'.$this->request->toString().'<br>';

        $this->items = TreeItem :: findForFront($this->request);
        //$this->items = Uitree :: findForFront($this->_getSearchParams());

        $this->childrens = array();
        $this->specifications = array();
        $this->child_specs = array();
        $this->legacy_specs = array();
        $this->arr_notAdded = array();
        $this->specs = array();
        $this->pref = array();
        $this->id = 0;

        $this->id = $this->getIdFromRequest($this->request, 'TreeFull');
        //echo ' #this_id:' . $this->id; // .' #id:'.$id. '<br>';

        if ($this->id == 0) {
            $this->flash('Проверьте корректность адресной строки!');
            return 0;
        }

        try {
            $id = $this->id;
            $criteria = lmbSQLCriteria :: like('path', '%/' . $id . '/');
            $cur_node = (lmbActiveRecord :: find('TreeFull', $criteria));
            $cur_node_path = '';
            if (isset($cur_node[0]) && (array_key_exists('path', $cur_node[0]))) {
                $cur_node_path = $cur_node[0]['path'];
            }
            $criteria = lmbSQLCriteria :: like('path', $cur_node_path . '%');
            $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('TreeFull', $criteria));
            $this->childrens = $records;
            $ids_childrens = array_column($records, 'id');

            //$cur_level
            $max_level = max(array_column($records, 'level'));
            //echo ' max_level: ' . $max_level;
            $cur_level = $records[0]['level'];
            //echo ' cur_level: ' . $cur_level;
            //lmb_var_debug($cur_level);
            //echo ' : ';
            //echo($max_level - $cur_level);
            $this->isMayBe = (2 > (int)$max_level - $cur_level) ? true : false;
            $this->isTail = ($cur_level == $max_level) ? true : false;
            $this->isTailBranch = (($cur_level != $max_level) || ($cur_level + 1 == $max_level)) ? true : false;
            $this->isBranch = (($cur_level != $max_level) || ($cur_level + 1 != $max_level)) ? true : false;

            $criteria = lmbSQLCriteria :: equal('node_id', $id);
            $node = lmbCollection::toFlatArray(lmbActiveRecord :: find('TreeItem', $criteria));
            $this->specifications = $node;

            $criteria = lmbSQLCriteria :: in('node_id', $ids_childrens);
            $node = lmbCollection::toFlatArray(lmbActiveRecord :: find('TreeItem', $criteria));
            $this->child_specs = $node;

            $cur_node_path = trim($cur_node_path, '/');
            $ids_from_path = explode("/", $cur_node_path);
            $criteria = lmbSQLCriteria :: in('node_id', $ids_from_path);
            $node = lmbCollection::toFlatArray(lmbActiveRecord :: find('TreeItem', $criteria));
            $this->legacy_specs = $node; //legacy or all *@todo distinct id for cur_node

            $arr_prIds_legacy = array_column($this->legacy_specs, 'attr_id');
            $arr_prIds_child = array_column($this->child_specs, 'attr_id');
            //array_column($records, 'first_name');
            $arr_diff = array_diff($arr_prIds_legacy, $arr_prIds_child);
            //lmb_var_debug($arr_diff);
            $this->arr_notAdded = $arr_diff;

            //lmb_var_debug($ids_from_path);
            //$criteria = lmbSQLCriteria :: greaterOrEqual('id', 0);
            //$criteria->addAnd('id > '. $this->user->getId());
            $criteria = null;
            //$criteria = lmbSQLCriteria :: notEqual('importance', 0); // @todo Activation for production
            $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('TreeAttribute', $criteria));
            //lmb_var_debug($records);
            $this->specs = $records;

            $preference = array();
            foreach ($records as $key => $val) {
                $preference[$val['id']] = $val['title'];
            }
            $this->pref = $preference;
            //lmb_var_debug($this->pref);
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
