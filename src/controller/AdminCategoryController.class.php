<?php
lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');

class AdminCategoryController extends lmbAdminObjectController
{
    protected $_object_class_name = 'Category';
    protected function _onAfterSave() {
        $this->redirect('/'. $this->getName() .'/');
    }
}