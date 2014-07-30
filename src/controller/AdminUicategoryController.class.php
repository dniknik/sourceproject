<?php
lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');
lmb_require('limb/util/system/lmbFs.class.php');

//lmb_require('limb/search/src/controller/SearchController.class.php');

class AdminUicategoryController extends lmbAdminObjectController
{
    protected $_object_class_name = 'Uicategory';

    function doDisplay()
    {
        //echo '<br>';
        echo ' | '. $this->getName() . '::'. $this->getCurrentAction(). ' | ';
        $req = $this->request;
        //echo '<br>';
        //lmb_var_debug( $this->toolkit->getRequest() );

        $this->id = (isset($req['idnode']))?$req['idnode']:0;

        $criteria = null;
        echo((strcmp(LIMB_APP_MODE,'devel')==0)?'|:dev:|':'| not_dev |' );
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
    }

    protected function _onAfterSave()
    {
        $this->redirect(array('controller' => $this->getName(), 'action'=>'append_link_pref_and_node'));
    }
}
