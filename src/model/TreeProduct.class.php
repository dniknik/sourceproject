<?php

lmb_require('src/model/TreeItem.class.php');

class TreeProduct extends TreeItem
{
  protected $_db_table_name = 'tree_item';
  //protected $_default_sort_params = array('title' => 'ASC');

  protected function _createValidator()
  {
    $validator = new lmbValidator();
    $validator->addRequiredRule('title');
    $validator->addRequiredRule('description');
    $validator->addRequiredRule('price');
    return $validator;
  }

  static function findForFront($params = array())
  {
  	//$criteria = lmbSQLCriteria::equal('is_available', 1);
    $criteria =  new lmbSQLCriteria('is_branch = 0');
      $str_like= '';
      if (isset($params['search']))
      {
          echo '<b>with_search</b>';
          $str_like= '%';
      }
      if (isset($params['title']))
      {
          $criteria->addAnd(lmbSQLCriteria :: like('attr_value', $str_like. $params['title'].'%'));
          //echo '<br>params_title: ';
          //lmb_var_debug($params['title']);
      }
      return TreeProduct :: find($criteria);
  	//return Product :: find($criteria);
  }

  function getImagePath()
  {
    if(($image_name = $this->getImageName()) && file_exists(lmb_env_get('PRODUCT_IMAGES_DIR') . $image_name))
      return lmb_env_get('LIMB_HTTP_OFFSET_PATH') . '/product_images/' . $image_name;
    else
      return lmb_env_get('LIMB_HTTP_OFFSET_PATH') . '/shared/images/icons/cancel.png';
  }
}