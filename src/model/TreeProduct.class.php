<?php

lmb_require('src/model/TreeItem.class.php');

class TreeProduct extends TreeItem
{
  protected $_db_table_name = 'tree_item';

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
      $criteria =  new lmbSQLCriteria('is_branch = 0');
      $str_like= '';
      if (isset($params['search']))
      {
          $str_like= '%';
      }
      if (isset($params['title']))
      {
          $criteria->addAnd(lmbSQLCriteria :: like('attr_value', $str_like. $params['title'].'%'));
      }
      return TreeProduct :: find($criteria);
  }
}
