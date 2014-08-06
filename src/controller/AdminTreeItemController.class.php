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


class AdminTreeItemController extends lmbAdminObjectController
{
    protected $_object_class_name = 'TreeItem';

    protected $isTail = 0;
    protected $isTailBranch = 0;
    protected $isBranch = 0;

    function doCreate()
    {
        $dt = new lmbDate();
        $this->dt_cr = $dt->getStamp();
        //$this->dt_up = (new lmbDate($this->dt_cr)) ->toString();
        $this->dt_up = (new lmbDate($this->dt_cr))->getIsoDate();
        lmbAdminObjectController :: doCreate();
    }

    function doProduct()
    {
        echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction(). '/ ';
        //lmbAdminObjectController :: doCreate();
        $this->items = array(
            array('id'=>1),
            array('id'=>2)
        );

    }

    protected function _validateAndSave($is_create = false)
    {
        $this->msg += $this->getName() . '--' . $this->getCurrentAction() . ' ';
        $msg = '01';

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

        echo '<br>pars: ';
        lmb_var_debug($pars);
        echo '<br>request: ';
        lmb_var_debug($this->request);

        $node = new Tree();
        $node->set('parent_id', $pars['id_sys_tree']);

        $str_uri = lmb_translit_russian(str_replace(' ', '_', $pars['title']));
        $node->set('identifier', $str_uri); // @fixme   use node of tree
        $pars['identifier'] = $str_uri;

        $itemTree = lmbActiveRecord :: find(
            'Tree',
            new lmbSQLCriteria('id=' . $pars['id_sys_tree'])
        );

        $parent_item = lmbCollection::toFlatArray($itemTree)[0];
        $node->set('level', $parent_item['level'] + 1);

        $node->save();
        $node->set('path', $parent_item['path'] . $node->getId() . '/');
        $node->save();

        $id_forSave = $node->getId();
        $iIsBranch = $pars['is_branch'];

        foreach ($arr_specifications as $key => $value) {
            $spec_value = $pars[$value];
            //echo "<br>[$key]=$value:". $pars[$value];

            $spec = new Objoftree();
            $spec->set('id_sys_tree', $id_forSave);

            $spec->set('id_pr', $key);
            $spec->set('value_pr', $spec_value);

            $spec->set('is_branch', $iIsBranch);
            $spec->save();
            lmb_var_debug($spec);
            echo '<br>';
        }
        //$node->addToObj

        /*
            $this->_onBeforeValidate();
            $this->item->validate($this->error_list);
            $this->_onAfterValidate();

            if($this->error_list->isValid())
            {
              if($is_create)
                $this->_onBeforeCreate();
              else
                $this->_onBeforeUpdate();

              $this->_onBeforeSave();
              $this->item->saveSkipValidation();
              $this->_onAfterSave();

              if($is_create)
                $this->_onAfterCreate();
              else
                $this->_onAfterUpdate();

              $this->_endDialog();
            }

         */
//        try
//        {
//            parent :: _validateAndSave($is_create);
//        }
//        catch (lmbException $e)
//        {
//            $this->error_list->addError('Документ со значением поля "Идентификатор" уже существует на данном уровне вложения');
//        }
    }

    function  doDisplay()
    {
        echo ' ' . $this->getName() . ' :: ' . $this->getCurrentAction();
        $my_connect = lmbToolkit::instance()->getDefaultDbConnection();
        $tree = new lmbTreeDecorator(
        new lmbMPTree(
                //'sys_tree',
                'tree_full',
                $my_connect,
                array('id' => 'id',
                    'parent_id' => 'parent_id',
                    'level' => 'level',
                    'identifier' => 'identifier',
                    'path' => 'path'
                ))
        );
        lmb_var_debug($tree); echo 'sizeof(tree)='.sizeof($tree);
        $criteria = new lmbSQLCriteria('id > 0');
        $current = lmbCollection::toFlatArray(lmbActiveRecord :: find('Tree', $criteria));
        echo 'sizeof(current)='. sizeof($current);
        $this->items = $current;
    }

//    static function  getUri($id) {
//        //i = l + n
//        return 0;
//    }

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

        $criteria = lmbSQLCriteria :: equal($req_filed, $req_val);
        $current = lmbCollection::toFlatArray(lmbActiveRecord :: find('Tree', $criteria));

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

        echo ' #this_id:' . $this->id; // .' #id:'.$id. '<br>';

        if ($this->id == 0) {
            $this->flash('Проверьте корректность адресной строки!');
            return 0;
        }

        try {
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

            $max_level = max(array_column($records, 'level'));
            $cur_level = $records[0]['level'];

            $this->isMayBe = (2 > (int)$max_level - $cur_level) ? true : false;
            $this->isTail = ($cur_level == $max_level) ? true : false;
            $this->isTailBranch = (($cur_level != $max_level) || ($cur_level + 1 == $max_level)) ? true : false;
            $this->isBranch = (($cur_level != $max_level) || ($cur_level + 1 != $max_level)) ? true : false;

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

            $criteria = null;
            $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('Preference', $criteria));
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
    }

    function  doBranch()
    {
        echo ' ' . $this->getName() . ' :: ' . $this->getCurrentAction();

        $this->helper = new AlphabetHelper();
        $this->useForm('search_form');
        $this->setFormDatasource($this->request);

        $this->items = Uitree :: findForFront($this->request);

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

            $max_level = max(array_column($records, 'level'));
            $cur_level = $records[0]['level'];

            $this->isMayBe = (2 > (int)$max_level - $cur_level) ? true : false;
            $this->isTail = ($cur_level == $max_level) ? true : false;
            $this->isTailBranch = (($cur_level != $max_level) || ($cur_level + 1 == $max_level)) ? true : false;
            $this->isBranch = (($cur_level != $max_level) || ($cur_level + 1 != $max_level)) ? true : false;

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

            $criteria = null;
            $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('Preference', $criteria));
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
    }

    function _getSearchParams()
    {
        $params = array();
        if ($this->request->get('title'))
            $params['title'] = $this->request->getSafe('title');
        return $params;
    }
}
