<?php

lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');
lmb_require('limb/util/system/lmbFs.class.php');

class AdminTreeAttributeController extends lmbAdminObjectController
{
    protected $_object_class_name = 'TreeAttribute';

    protected function _onAfterSave()
    {
        $this->redirect('/' . $this->getName() . '/');
    }

    function doDisplay()
    {
        echo '/' . $this->getName() . ' :: '. $this->getCurrentAction(). '/';
        parent :: doDisplay();
    }
}
