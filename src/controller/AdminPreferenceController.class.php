<?php
lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');
lmb_require('limb/util/system/lmbFs.class.php');

//lmb_require('limb/search/src/controller/SearchController.class.php');

class AdminPreferenceController extends lmbAdminObjectController
{
    protected $_object_class_name = 'Preference';


    protected function _onAfterSave()
    {
        //$this->flashAndRedirect('.', array('controller' => 'admin_preference'));
        $this->redirect('/' . $this->getName() . '/');
    }
}
