<?php

lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');
lmb_require('limb/util/system/lmbFs.class.php');

lmb_require('limb/tree/src/lmbTreeNestedCollection.class.php');
lmb_require('limb/tree/src/lmbTreeDecorator.class.php');
lmb_require('limb/tree/src/lmbMPTree.class.php');
lmb_require('limb/tree/src/lmbTreeHelper.class.php');
lmb_require('limb/tree/src/lmbTreeSortedCollection.class.php');

lmb_require('limb/datetime/src/lmbDate.class.php');
lmb_require('limb/datetime/src/lmbDateTime.class.php');
lmb_require('limb/datetime/src/lmbDateTimeZone.class.php');

//lmb_require('limb/search/src/controller/SearchController.class.php');
lmb_require('src/helper/AlphabetHelper.class.php');

lmb_require('limb/active_record/src/lmbActiveRecord.class.php');
lmb_require('limb/dbal/src/lmbDBAL.class.php');



class MainPageController extends lmbController
//class MainPageController extends lmbObjectController
{
    protected $_object_class_name = 'TreeFull'; //@todo check name

    protected $isTail = 0;
    protected $isTailBranch = 0;
    protected $isBranch = 0;


    function _getSearchParams()
    {
        $params = array();
        if ($this->request->get('title'))
            $params['title'] = $this->request->getSafe('title');
        return $params;
    }

    function  doPageitem() {
        //echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction() . '/ ';

        $this->helper = new AlphabetHelper();
        $this->useForm('search_form');
        $this->setFormDatasource($this->request);

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
            $this->records = lmbActiveRecord :: find('TreeFull', $criteria);
            $this->childrens = lmbCollection::toFlatArray(lmbActiveRecord :: find('TreeFull', $criteria));
            $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('TreeFull', $criteria));
            //$ids_childrens = array_column($records, 'id');
            // -------------------------------------------
            $criteria = new lmbSQLCriteria('is_branch = 0');//lmbSQLFieldCriteria('is_branch', 1);
            $criteria -> addAnd( new lmbSQLCriteria('node_id = 21') );
            $this->items_product = lmbActiveRecord :: find('TreeItem', $criteria);
//----------------------------------
            //$criteria = new lmbSQLFieldCriteria('id', $id);
            $this->itemsall = TreeItem :: findForFront($this->request);
            //$this->itemsall = lmbActiveRecord :: find('TreeItem', $criteria);
            $arr = lmbCollection::toFlatArray($this->itemsall);
            //lmb_var_debug($arr);
            $tmp = array();
            foreach($arr as $key => $val) {
                $tmp[ $val['node_id']][] = array(
                    'id' => $val['id'],
                    'node_id' => $val['node_id'],
                    'attr_id' => $val['attr_id'],
                    'attr_value' => $val['attr_value'],
                    'is_branch' => $val['is_branch']) ;
                //echo '<br>'.$key;
            }
            $this->arr_tovar = $tmp;
            // -----------------------------------------------
            $criteria = new lmbSQLCriteria('parent_id = '. $id);
            $this->items_child_nodes = lmbActiveRecord :: find('TreeFull', array('criteria'=>$criteria));
            // -----------------------------------------------
            $sql ='select ';
            $sql =$sql. 'it.attr_value as udate, it.node_id, it.is_branch, ';
            $sql =$sql. 'tr.path, tr.id, tr.parent_id as par_id, tr.identifier as uri, tr.level ';
            $sql =$sql. 'from tree_item it, tree_attribute pr, tree_full tr ';
            $sql =$sql. 'where it.attr_id=pr.id and it.node_id=tr.node_id ';
            $sql =$sql. 'and pr.id in (5) ';             //@fixme not use digital!
            $sql =$sql. 'and it.is_branch in (0,1) ';    //category && tovars

            $this->nodes_tree =  lmbDBAL :: fetch($sql);

            $sorted = lmbTreeHelper :: sort($this->nodes_tree, array('path' => 'ASC'));
            //$this->wood = new lmbTreeNestedCollection($this->nodes_tree);
            $this->wood = new lmbTreeNestedCollection($sorted);
            //$this->wood = new lmbTreeNestedCollection($sorted, array('udate' => 'DESC'));
            $this->wood->setChildrenField('preloaded_children');
            $this->wood->rewind();
            // ----------------------------------
        } catch (lmbARException $e) {
            $this->flashError('Wrong ...!');
        }
    }

    function  doPagecategory() {
        echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction() . '/ ';

        $this->helper = new AlphabetHelper();
        $this->useForm('search_form');
        $this->setFormDatasource($this->request);

        //echo '_getSearchParams():'; var_dump( $this->_getSearchParams() );
        //echo '<br>this->request<br>'.$this->request->toString().'<br>';

        //$this->items = Uitree :: findForFront($this->request);
        //$this->items = Uitree :: findForFront($this->_getSearchParams());

        $this->id = $this->getIdFromRequest($this->request, 'TreeFull');

        echo ' #this_id:' . $this->id; // .' #id:'.$id. '<br>';

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
            //$ids_childrens = array_column($records, 'id');

        } catch (lmbARException $e) {
            $this->flashError('Wrong ...!');
        }

        $this->itemsall = TreeItem :: findForFront($this->request);
        $arr = lmbCollection::toFlatArray($this->itemsall);
        $tmp = array();
        foreach($arr as $key => $val) {
            $tmp[ $val['node_id']][] = array(
                'id' => $val['id'],
                'node_id' => $val['node_id'],
                'attr_id' => $val['attr_id'],
                'attr_value' => $val['attr_value'],
                'is_branch' => $val['is_branch']) ;
            //echo '<br>'.$key;
        }
        $this->arr_tovar = $tmp;
// ------------------
        $criteria = new lmbSQLCriteria('parent_id = '. $id);
        $this->items_child_nodes = lmbActiveRecord :: find('TreeFull', array('criteria'=>$criteria));
// -----------------------------------------------
        $sql ='select ';
        $sql =$sql. 'it.attr_value as udate, it.node_id, it.is_branch, ';
        $sql =$sql. 'tr.path, tr.id, tr.parent_id as par_id, tr.identifier as uri, tr.level ';
        $sql =$sql. 'from tree_item it, tree_attribute pr, tree_full tr ';
        $sql =$sql. 'where it.attr_id=pr.id and it.node_id=tr.node_id ';
        $sql =$sql. 'and pr.id in (5) ';             //@fixme not use digital!
        $sql =$sql. 'and it.is_branch in (0,1) ';    //category && tovars
        //$sql =$sql. 'order by it.attr_value DESC;';

        $this->nodes_tree =  lmbDBAL :: fetch($sql);

//        $this->nodes_tovar =
//            lmbActiveRecord :: decorateRecordSet(
//                $this->nodes_tree,
//                get_class($this));

        $sorted = lmbTreeHelper :: sort($this->nodes_tree, array('path' => 'ASC'));
        //$this->wood = new lmbTreeNestedCollection($this->nodes_tree);
        $this->wood = new lmbTreeNestedCollection($sorted);
        //$this->wood = new lmbTreeNestedCollection($sorted, array('udate' => 'DESC'));
        $this->wood->setChildrenField('preloaded_children');
        $this->wood->rewind();
        // ----------------------------------
    }

    function  doNode() {
        echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction() . '/ ';
        //parent::doDisplay();
        //$this->doDisplay();
        $this->title = 'Welcome!';

        $this->helper = new AlphabetHelper();
        $this->useForm('search_form');
        $this->setFormDatasource($this->request);

        //echo '_getSearchParams():'; var_dump( $this->_getSearchParams() );
        echo '<br>this->request<br>'.$this->request->toString().'<br>';

        ////$this->items = TreeItem :: findForFront($this->request);
        //$this->items = Uitree :: findForFront($this->request);
        //$this->items = Uitree :: findForFront($this->_getSearchParams());

        $this->id = $this->getIdFromRequest($this->request, 'TreeFull');

        echo ' #this_id:' . $this->id; // .' #id:'.$id. '<br>';

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
            //$ids_childrens = array_column($records, 'id');

        } catch (lmbARException $e) {
            $this->flashError('Wrong ...!');
        }

        $this->itemsall = TreeItem :: findForFront($this->request);
        $arr = lmbCollection::toFlatArray($this->itemsall);
        $tmp = array();
        foreach($arr as $key => $val) {
            $tmp[ $val['node_id']][] = array(
                'id' => $val['id'],
                'node_id' => $val['node_id'],
                'attr_id' => $val['attr_id'],
                'attr_value' => $val['attr_value'],
                'is_branch' => $val['is_branch']) ;
            //echo '<br>'.$key;
        }
        $this->arr_tovar = $tmp;
// ------------------
        $criteria = new lmbSQLCriteria('parent_id = '. $id);
        $this->items_child_nodes = lmbActiveRecord :: find('TreeFull', array('criteria'=>$criteria));
// -----------------------------------------------
        $sql ='select ';
        $sql =$sql. 'it.attr_value as udate, it.node_id, it.is_branch, ';
        $sql =$sql. 'tr.path, tr.id, tr.parent_id as par_id, tr.identifier as uri, tr.level ';
        $sql =$sql. 'from tree_item it, tree_attribute pr, tree_full tr ';
        $sql =$sql. 'where it.attr_id=pr.id and it.node_id=tr.node_id ';
        $sql =$sql. 'and pr.id in (5) ';             //@fixme not use digital!
        $sql =$sql. 'and it.is_branch in (0,1) ';    //category && tovars
        //$sql =$sql. 'order by it.attr_value DESC;';

        $this->nodes_tree =  lmbDBAL :: fetch($sql);

//        $this->nodes_tovar =
//            lmbActiveRecord :: decorateRecordSet(
//                $this->nodes_tree,
//                get_class($this));

        $sorted = lmbTreeHelper :: sort($this->nodes_tree, array('udate' => 'DESC'));
        //$this->wood = new lmbTreeNestedCollection($this->nodes_tree);
        $this->wood = new lmbTreeNestedCollection($sorted, array('udate' => 'DESC'));
        $this->wood->setChildrenField('preloaded_children');
        $this->wood->rewind();
        // ----------------------------------
    }

    function  doDisplay()
    {
        //echo ' /' . $this->getName() . ' :: ' . $this->getCurrentAction() . '/ ';
        $this->title = 'Welcome!';

        $this->helper = new AlphabetHelper();
        $this->useForm('search_form');
        $this->setFormDatasource($this->request);

        $this->id = $this->getIdFromRequest($this->request, 'TreeFull');

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
            // ------------------
            $criteria = new lmbSQLCriteria('parent_id = '. $id);
            $this->items_child_nodes = lmbActiveRecord::find('TreeFull', array('criteria'=>$criteria));
            // -----------------------------------------------
            $sql ='select ';
            $sql =$sql. 'it.attr_value as udate, it.node_id, it.is_branch, ';
            $sql =$sql. 'tr.path, tr.id, tr.parent_id as par_id, tr.identifier as uri, tr.level ';
            $sql =$sql. 'from tree_item it, tree_attribute pr, tree_full tr ';
            $sql =$sql. 'where it.attr_id=pr.id and it.node_id=tr.node_id ';
            $sql =$sql. 'and pr.id in (5) '; //@fixme not use digital!
            $sql =$sql. 'and it.is_branch in (0,1) '; //category(1) && tovars(0)
            $sql =$sql. 'order by it.attr_value DESC;';

            $main_last = lmbDBAL :: fetch($this->_getMainSelect(0));
            $this->main_last = lmbTreeHelper :: sort($main_last, array('udate' => 'DESC'));
        } catch (lmbARException $e) {
            $this->flashError('Wrong ...!');
        }
    }


    function _getMainSelect($branch_in = '0,1') {
        $sql ='select ';
        $sql =$sql. 'it.attr_value as udate, it.node_id, it.is_branch, ';
        $sql =$sql. 'tr.path, tr.id, tr.parent_id as par_id, tr.identifier as uri, tr.level ';
        $sql =$sql. 'from tree_item it, tree_attribute pr, tree_full tr ';
        $sql =$sql. 'where it.attr_id=pr.id and it.node_id=tr.node_id ';
        $sql =$sql. 'and pr.id in ('.TreeItem::ID_UPDATE_DATE.') ';
        $sql =$sql. 'and it.is_branch in ('.$branch_in.') ;'; //category(1) && tovars(0)
        //$sql =$sql. 'order by it.attr_value DESC;';
        return $sql;
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
/*
        if (is_numeric($req_val) && intval($req_val) - $req_val == 0)
            echo ' par_is_int';
        else
            echo ' par_is_NOT_int';
*/
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
}
