<?php
lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');
lmb_require('limb/util/system/lmbFs.class.php');

//lmb_require('limb/search/src/controller/SearchController.class.php');

class AdminObjoftreeController extends lmbAdminObjectController
{
    protected $_object_class_name = 'Objoftree';

    function doAppendlinkprefandnode()
    {
        echo '<br>';
        echo $this->getName() . ':1:'. $this->getCurrentAction();
        $req = $this->request;
        echo '<br>';
        //echo $this->getRequest;
        lmb_var_debug( $this->toolkit->getRequest() );

        $this->id = (isset($req['idnode']))?$req['idnode']:0;

        $criteria = null;
        //$criteria = lmbSQLCriteria :: notEqual('importance', 0); // @todo Activation for production
        $records = lmbCollection::toFlatArray(lmbActiveRecord :: find('Preference', $criteria));

        $preference = array();
        foreach ($records as $key => $val) {
            $preference[$val['id']] = $val['title'];
        }
        $this->pref = $preference;
        $this->pr = $records;

        $this::doDisplay();

        $this::doCreate();
    }

    function doAppend()
    {
        echo 'doAppend';
        $req = $this->request;
        $this->id = (isset($req['id']))?$req['id']:0;
        $this::doDisplay();
    }

    protected function _onAfterSave()
    {
        $this->redirect(array('controller' => $this->getName(), 'action'=>'append_link_pref_and_node'));
    }
}
