<?php

class TreeAttribute extends lmbActiveRecord
{
    //protected $_db_table_name = 'preference';
    protected $_db_table_name = 'tree_attribute';
    protected $_default_sort_params = array('id' => 'DESC');

    protected $_has_many = array(
        'treeitem' => array(
            'field' => 'attr_id',
            'class' => 'TreeItem',
            'nullify' => true
        )
    );

    protected function _createValidator()
    {
        $validator = new lmbValidator();
        $validator->addRequiredRule('title');
        return $validator;
    }

    static function findForFront($params = array())
    {
        $criteria = lmbSQLCriteria::equal('is_published', 1);
        if (isset($params['title']))
            $criteria->addAnd(lmbSQLCriteria :: like('attr_value', $params['title'] . '%'));
//  	if (isset($params['price_greater']))
//      $criteria->addAnd(lmbSQLCriteria :: greater('price', (int) $params['price_greater']));
//    if (isset($params['price_less']))
//      $criteria->addAnd(lmbSQLCriteria :: less('price', (int) $params['price_less']));
        return TreeItem :: find($criteria);
    }
}
