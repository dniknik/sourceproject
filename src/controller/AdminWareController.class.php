<?php
lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');
lmb_require('limb/util/system/lmbFs.class.php');

class AdminWareController extends lmbAdminObjectController
{
  protected $_object_class_name = 'Ware';

  protected function _onAfterImport()
  {
  	return null;
  }
}
