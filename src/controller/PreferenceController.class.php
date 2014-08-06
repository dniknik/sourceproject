<?php
lmb_require('limb/cms/src/controller/lmbObjectController.class.php');
lmb_require('src/model/Preference.class.php');
lmb_require('src/helper/AlphabetHelper.class.php');

class PreferenceController extends lmbObjectController
{
  protected $_object_class_name = 'preference';

  function doDisplay()
  {
  	$this->helper = new AlphabetHelper();
  	$this->useForm('search_form');
    $this->setFormDatasource($this->request);
    $this->items = Ware :: findForFront($this->_getSearchParams());
  }

  function _getSearchParams()
  {
  	$params = array();
      echo($this->request);
  	if($this->request->get('title'))
  	  $params['title'] = $this->request->getSafe('title');
    return $params;
  }
}
