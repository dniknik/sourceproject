<?php

class Ware extends lmbActiveRecord
{
  protected $_default_sort_params = array('title' => 'ASC');

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
  	//$criteria = lmbSQLCriteria::equal('id', 1);
  	$criteria = null;
  	if (isset($params['title']))
  	  $criteria->addAnd(lmbSQLCriteria :: like('title', $params['title'].'%'));
  	if (isset($params['price_greater']))
      $criteria->addAnd(lmbSQLCriteria :: greater('price', (int) $params['price_greater']));
    if (isset($params['price_less']))
      $criteria->addAnd(lmbSQLCriteria :: less('price', (int) $params['price_less']));
  	return Product :: find($criteria);
  }

  function getImagePath()
  {
      return lmb_env_get('LIMB_HTTP_OFFSET_PATH') . '/shared/images/icons/cancel.png';
  }
}