<?php
lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');

class AdminTreeController extends lmbAdminObjectController
{
    protected $_object_class_name = 'Tree';

    protected function _onAfterSave() {
        $this->redirect('/'. $this->getName() .'/');
    }

    function doItem()
    {
        if(!$this->item = $this->_getObjectByRequestedId())
            return $this->forwardTo404();
        else echo 'yes';
    }
}