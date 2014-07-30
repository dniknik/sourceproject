<?php
lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');
lmb_require('limb/util/system/lmbFs.class.php');

//lmb_require('limb/search/src/controller/SearchController.class.php');

class AdminObjoftreeController extends lmbAdminObjectController
{
    protected $_object_class_name = 'Objoftree';
//    protected $strActons='';

//    function doEdit()
//    {
//        echo 'doEdit';
//    }
//
//    function doCreate()
//    {
//        echo 'doCreate';
//    }


//    protected function _initCreateForm() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//    protected function _initEditForm() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//
//    protected function _onBeforeSave() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//    protected function _onAfterSave() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }

//    protected function _onBeforeCreate() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//    protected function _onCreate() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//    protected function _onAfterCreate() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
    //}

//    protected function _onBeforeUpdate() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//    protected function _onUpdate() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//    protected function _onAfterUpdate() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//
//    protected function _onBeforeDelete() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//    protected function _onAfterDelete() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//
//    protected function _onBeforeValidate() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//    protected function _onAfterValidate() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//
//    protected function _onBeforeImport() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//    protected function _onAfterImport() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//
//    protected function _onBeforePublish() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//    protected function _onAfterPublish() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//
//    protected function _onBeforeUnpublish() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }
//    protected function _onAfterUnpublish() {
//        echo $this->getName() . '::'. $this->getCurrentAction();
//    }



    function doAppendlinkprefandnode()
    {
        echo '<br>';
        echo $this->getName() . ':1:'. $this->getCurrentAction();
        $req = $this->request;
        echo '<br>';
        //echo $this->getRequest;
        lmb_var_debug( $this->toolkit->getRequest() );

        $this->id = (isset($req['idnode']))?$req['idnode']:0;

        //echo ' -id-: '. $_GET['idnode'];
        //lmb_var_debug($req['id']);
        //if(isset($req['id'])) echo 'isset';
        //else echo 'not_set';


        $criteria = null;
        //$criteria = lmbSQLCriteria :: notEqual('importance', 0); // @todo Activation for production
        $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('Preference', $criteria));
        //lmb_var_debug($records);
        //$specs = $records;

        $preference = array();
        foreach ($records as $key => $val) {
            $preference[$val['id']] = $val['title'];
        }
        $this->pref = $preference;
        $this->pr = $records;
        //$this->pref = $records;
        //lmb_var_debug($preference);
        //lmb_var_debug($records);

        $this::doDisplay();

        $this::doCreate();

    }

    function doAppend()
    {
        echo 'doAppend';
        $req = $this->request;
        $this->id = (isset($req['id']))?$req['id']:0;
        //echo ' id: ';
        //lmb_var_debug($req['id']);
        //if(isset($req['id'])) echo 'isset';
        //else echo 'not_set';

        $this::doDisplay();

//        if($this->id==0) {
//            echo 'isNOL';
//            $criteria = new lmbSQLCriteria('id_sys_tree > '.$this->id);
//        }
//        else {
//            echo 'not_NOL';
//            $criteria = new lmbSQLCriteria('id_sys_tree = '.$this->id);
//        }
//
//        $items = lmbActiveRecord :: find('Tree', $criteria);

//        $sql = 'SELECT id, priority FROM ' . $info_item->getTableName() . ' WHERE ' . $where_field . '=' . $where_field_value;
//        $current_priorities_object = lmbDBAL :: fetch($sql);
//        $current_priorities_object = $current_priorities_object->getArray();

        //$st = new Tree();

        //$st = lmbActiveRecord::findById( 'Tree', 0);
//        $st = lmbActiveRecord :: find('Tree', $criteria);
        //echo ' id: ';
        //$criteria = new lmbSQLCriteria('id > 0');
        //$st = lmbActiveRecord :: find('Tree', $criteria);
        //$this->items = lmbCollection::toFlatArray(lmbActiveRecord :: find('Objoftree', $criteria));
        //lmb_var_debug($st->getArray());
        //echo $st->getId();
        //echo '<br><br>';

//        $obj = lmbActiveRecord::findById( 'Objoftree', 6);
//        //lmb_var_debug($obj);
//        $rs = $obj->getPreference();
//        $rs2 = $obj->get('preference');
//        lmb_var_debug($rs);
//        echo '<br><br>';
//        lmb_var_debug($rs2->getTitle());
//        lmb_var_debug('');

//        $obj = lmbActiveRecord::findById( 'Objoftree', 9);
//        $obj_pref = $obj->get('preference');
//        echo '<br>';
//        $obj->set('id_sys_tree', 1659);
//        $obj->set('value_pr', 1659);
//        $obj_pref->set('title', 'supre_pref_idSysTree1');
        //$obj_pref->save();
        //$obj->save();
        //$obj->delete();
//        lmb_var_debug($obj);
//        echo '<br>';
//        lmb_var_debug($obj_pref);

        //$pref = lmbActiveRecord::findById( 'Preference', 9);
        //$pref = lmbActiveRecord::findById( 'Preference', 9);
        //lmb_var_debug($pref);

        //$pr = new Preference();
        //$pr->setTitle('super_preference');
        //echo 'pr_id: '. $pr->getId();

        //$obj = new Objoftree();
        //$obj->setVaruePr('super_value_pr');

//        $OBJs = $pr->getObjoftree();
//        $OBJs->add($obj);
        //$pr->addToObjoftree($obj);
        //$pr->save();
        //echo 'pr_id: '. $pr->getId();
        //echo '<br><br>';
        //lmb_var_debug($pr->getId());
        echo '<br><br>';
//        foreach($OBJs as $item)
//            echo $item->getId();

    }

    protected function _onAfterSave()
    {
        $this->redirect(array('controller' => $this->getName(), 'action'=>'append_link_pref_and_node'));
        //$this->redirect('/' . $this->getName() . '/');
       //echo $this->getName() . '/'. $this->getCurrentAction();
    //$this->flashAndRedirect('.', array('controller' => 'admin_preference'));
    }
}
