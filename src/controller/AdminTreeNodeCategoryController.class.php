<?php
/**
 * Limb Web Application Framework
 *
 * @link http://limb-project.com
 *
 * @copyright  Copyright &copy; 2004-2009 BIT
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 * @version    $Id$
 * @package    cms
 */
lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');
//lmb_require('limb/cms/src/model/lmbCmsDocument.class.php');
lmb_require('src/model/TreeNodeCategory.class.php');

lmb_require('limb/datetime/src/lmbDate.class.php');
lmb_require('limb/datetime/src/lmbDateTime.class.php');
lmb_require('limb/datetime/src/lmbDateTimeZone.class.php');



class AdminTreeNodeCategoryController extends lmbAdminObjectController
{
  protected $_object_class_name = 'TreeNodeCategory';

  function doDisplay()
  {
      echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction(). '/ ';
      //parent :: doDisplay();

//      $criteria = new lmbSQLFieldCriteria('is_branch', 0);
//      $this->items = lmbActiveRecord :: find('TreeItem', $criteria);

      //lmb_var_debug(sizeof($this->items));
      //lmb_var_debug($this->items);
      echo '<br>';
      lmb_var_debug($this->request);

    if(!$id = $this->request->getInteger('id')  ){
      $this->is_root = true;
      $criteria = new lmbSQLCriteria('parent_id > 0');
      $criteria->addAnd(new lmbSQLCriteria('level = 1'));
      //$this->item = lmbCmsDocument :: findRoot();
      $this->item = TreeNodeCategory :: findRoot();
        echo 'this->item';
        lmb_var_debug($this->item);
    }
    else {
      $this->is_root = false;
      if(!$this->item = $this->_getObjectByRequestedId())
        return $this->forwardTo404();
      $criteria = new lmbSQLCriteria('parent_id = ' . $this->item->getId());
    }

    $this->items = lmbActiveRecord :: find($this->_object_class_name, array('criteria' => $criteria, 'sort'=>array('priority'=>'ASC')));
    $this->_applySortParams();
  }

  function doPriority()
  {
    if($this->request->has('parent_id'))
      $this->_changeItemsPriority('TreeNodeCategory', 'parent_id', $this->request->get('parent_id'));
      //$this->_changeItemsPriority('lmbCmsDocument', 'parent_id', $this->request->get('parent_id'));

    $this->_endDialog();
  }

    function doCreate()
    {
        echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction(). '/ ';

        $dt = new lmbDate();
        $this->dt_cr = $dt->getStamp();
        //$this->dt_cr = 111;
        //$this->dt_up = (new lmbDate($this->dt_cr)) ->toString();
        $this->dt_up = (new lmbDate($this->dt_cr))->getIsoDate();
        //$this->dt_up = 222;
        parent :: doCreate();
    }

    protected function _validateAndSave($is_create = false)
    {
        echo '/ '. $this->getName() . '--' . $this->getCurrentAction() . ' /';

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

        //$node = new Tree();
        //$node->set('parent_id', $pars['id_sys_tree']);

        $str_uri = lmb_translit_russian(str_replace(' ', '_', $pars['title']));
        //$node->set('identifier', $str_uri); // @fixme   use node of tree
        $pars['identifier'] = $str_uri;


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
        if (is_numeric($arr_item['max']))
            echo 'max_is_numeric:('.$arr_item['max'];
        else echo 'max_NOT_is_numeric:('.$arr_item['max'];
        //$max_dode_id = new lmbSelectQuery('tree_item')

//return 0;
        $id_forSave = $cur_max_node_id+1;
        $iIsBranch = $pars['is_branch'];
        $arr_attr = array();
        foreach ($arr_specifications as $key => $value) {
            $spec_value = $pars[$value];
            echo "<br>[$key]=$value:". $spec_value;

            $spec = new TreeItem();
            $spec->set('node_id', $id_forSave);

            $spec->set('attr_id', $key);
            $spec->set('attr_value', $spec_value);

            $spec->set('is_branch', $iIsBranch);
            //$spec->save();
            //lmb_var_debug($spec);
            echo '<br>';
            array_push($arr_attr, $spec);
            lmb_var_debug($spec);
            echo '<br>';

        }
        echo '<br>arr_attr:<br>';
        lmb_var_debug($arr_attr);

        $treeItem = new TreeItem();
        //$treeItem->settreeattribute();

        $tr = new TreeNodeCategory();
        //$tr->getTree();
        $tr->initTree();
        $root = $this->tr->getRootNode();
        echo '<br>root:<br>';
        lmb_var_debug($root);

//retrun 0;
        $treeCategory = new TreeFull();
        $treeCategory->set('node_id', $id_forSave);
        //$treeCategory->set('is_branch', $iIsBranch);
        $treeCategory->set('parent_id', $pars['id_sys_tree']);

        $str_uri = lmb_translit_russian(str_replace(' ', '_', $pars['title']));
        //$node->set('identifier', $str_uri); // @fixme   use node of tree
        $pars['identifier'] = $str_uri;
        $itemTree = lmbActiveRecord :: find(
            'tee_full',
            new lmbSQLCriteria('id=' . $pars['id_sys_tree'])
        );
//
        echo '<br>item_tree:<br>';
        lmb_var_debug($itemTree);


        $parent_item = lmbCollection::toFlatArray($itemTree)[0];
        echo '<br>parent_item_:<br>';
lmb_var_debug($parent_item);


        $treeCategory->set('level', $parent_item['level'] + 1);

        $treeCategory->save();
        $treeCategory->set('path', $parent_item['path'] . $treeCategory->getId() . '/');
        //$treeCategory->save();
        //lmb_var_debug($node);
        //lmb_var_debug($node->getId());
        echo '<br>tree_category:<br>';
        lmb_var_debug($treeCategory);

    }

//  function doCreate()
//  {
//    if(!$this->parent = $this->_getObjectByRequestedId())
//      $this->forwardTo404();
//
//    $this->item = new $this->_object_class_name();
//
//    $this->_onCreate();
//
//    $this->useForm($this->_form_name);
//    $this->setFormDatasource($this->item);
//
//    if($this->request->hasPost())
//    {
//      $this->_import();
//      $this->item->setParent($this->parent);
//      $this->_validateAndSave($create = true);
//    }
//    else
//      $this->_initCreateForm();
//  }

//  protected function _onBeforeImport()
//  {
//    $this->request->set('identifier', trim($this->request->get('identifier')));
//    $this->request->set('title', trim($this->request->get('title')));
//  }

//  protected function _validateAndSave($is_create = false)
//  {
//    try
//    {
//      parent :: _validateAndSave($is_create);
//    }
//    catch (lmbException $e)
//    {
//      $this->error_list->addError('Документ(TreeNodeItem) со значением поля "Идентификатор" уже существует на данном уровне вложения');
//    }
//  }
}
