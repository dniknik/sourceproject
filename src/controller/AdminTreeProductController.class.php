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
class AdminTreeProductController extends lmbAdminObjectController
{
    protected $_object_class_name = 'TreeItem'; //@todo check name
//
    protected $isTail = 0;
    protected $isTailBranch = 0;
    protected $isBranch = 0;

    function doCreate()
    {
       // echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction() . '/ ';
        $dt = new lmbDate();
        $this->dt_cr = $dt->getStamp();
        $this->dt_up = $dt->getStamp();

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
        $this->node = $node_id;
        $product['node_id'] = $node_id;
        $product['title'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_TITLE);
        $product['description'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_DESCR);
        $product['identifier'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_URI);

        $this->dt_cr = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_CREATE_DATE);
        $product['date_create'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_CREATE_DATE);
        $product['date_update'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_UPDATE_DATE);
        $product['price'] = TreeItem::getAttrValueByNodeId($node_id, TreeItem::ID_PRICE);
        $product['is_branch'] = TreeItem::getIsBranchByNodeId($node_id);

        $this->setFormDatasource($product, 'object_form');

        if($this->request->hasPost())
        {
            $this->_validateAndSave(false);
            $this->_onAfterSave();
        }
    }

    function doProduct()
    {
        echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction() . '/ ';
        $this->items = array(
            array('id' => 1),
            array('id' => 2)
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
        echo '/ ' . $this->getName() . '--' . $this->getCurrentAction() . ' /';
        //echo '<br>request: ' . $this->request->toString();
        $is_editing_treeItem = (strlen($this->getCurrentAction())==4); //  ~ 'edit'

        $pars['title'] = $this->request->get('title');
        $pars['identifier'] = $this->request->get('identifier');
        $pars['description'] = $this->request->get('description');

        $pars['id_sys_tree'] = $this->request->get('id_sys_tree');
        $pars['is_branch'] = $this->request->get('is_branch');

        $pars['date_create'] = $this->request->get('date_create');
        $pars['date_update'] = $this->request->get('date_update');

        $arr_specifications = array( // @todo вынести в файл настроек проекта
            1 => "title", 'description', 'identifier', 'date_create', 'date_update'
        );

        if ($this->request->has('price')) {
            $pars['price'] = $this->request->get('price');
            array_push($arr_specifications, 'price');
        }

        $str_uri = lmb_translit_russian(str_replace(' ', '_', $pars['title']));
        $pars['identifier'] = $str_uri;

        $cur_max_node_id = 0;
        $sql = 'select max(node_id) as max from tree_item';
        $sql_select_max_node_id = new lmbSelectQuery('tree_item');
        $sql_select_max_node_id->addField('max(node_id)');

        $cur = lmbActiveRecord::findBySql('TreeItem', $sql);
        $arr_item = lmbCollection::toFlatArray($cur)[0];

        lmb_var_debug($arr_item);
        lmb_var_debug($arr_item['max']);

        if (isset($arr_item['max'])) {
            echo 'isset_max:(' . $arr_item['max'];
        }

        if (is_null($arr_item['max'])) {
            echo 'max_null:(' . $arr_item['max'];
            $cur_max_node_id = 0;
        }
        if (is_numeric($arr_item['max'])) {
            echo 'max_is_numeric:( ';
            $cur_max_node_id = $arr_item['max'];
            echo $cur_max_node_id . ')<br>';
        } else echo 'max_NOT_is_numeric:(' . $arr_item['max'];
        //$max_dode_id = new lmbSelectQuery('tree_item')

        ////return 0;
        $node_id_forSave = $cur_max_node_id + 1;
        $node_id = $this->request->get('node_id');
        $iIsBranch = $pars['is_branch'];
        //echo ' id_node=' . $id_forSave;
        $idNode = ($is_editing_treeItem)? $node_id: $node_id_forSave;
        foreach ($arr_specifications as $key => $value) {
            $spec_value = $pars[$value];
            //echo "<br>[$key]=$value:" . $spec_value;

            //$spec = new TreeItem($item['id']);
            //$spec->set('node_id', $id_forSave);
            $spec = $this->_getTreeItemByNodeIdAndAttrId($idNode, $key);

            $spec->set('attr_id', $key);
            $spec->set('attr_value', $spec_value);

            $spec->set('is_branch', $iIsBranch);
            $spec->save();
            //echo '<br>spec: '; lmb_var_debug($spec); echo '<br>';
        }
        if ($this->request->get('id_pr')) {
            //echo 'yes_id_pr';
            //echo 'attr_id: '. $this->request->get('id_pr');
            //echo 'attr_value: '. $this->request->get('value_pr');
            $key = $this->request->get('id_pr');
            $spec_value = $this->request->get('value_pr');
            $spec = $this->_getTreeItemByNodeIdAndAttrId($idNode, $key);

            $spec->set('attr_id', $key);
            $spec->set('attr_value', $spec_value);

            $spec->set('is_branch', $iIsBranch);
            $spec->save();
        }

        if ($is_editing_treeItem) {
            lmbActiveRecord ::updateRaw( 'TreeFull', array('identifier' => $pars['identifier']), new lmbSQLFieldCriteria('node_id', $node_id));
        }

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
//@fixme error insert one row to table tree_item with next_id and default other parameters
//        try
//        {
//            parent :: _validateAndSave($is_create);
//        }
//        catch (lmbException $e)
//        {
//            //$this->error_list->addError('Документ со значением поля "Идентификатор" уже существует на данном уровне вложения');
//            $this->error_list->addError('Ошибка проверки данных');
//        }
    }

    function  doDisplay()
    {
        //echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction() . '/ ';

        $criteria = new lmbSQLCriteria('is_branch = 0'); //todo show only Product (is_branch=0)
        $this->items = lmbActiveRecord :: find('TreeItem', $criteria);
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

    function _getSearchParams()
    {
        $params = array();
        if ($this->request->get('title'))
            $params['title'] = $this->request->getSafe('title');

        $msg = $this->getName() . '--' . $this->getCurrentAction() . ' ';
        echo '<br>msg: ' . $msg . '<br>params: '; lmb_var_debug($params);

        return $params;
    }
}
