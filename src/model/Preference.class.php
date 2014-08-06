<?php

class Preference extends lmbActiveRecord
{
    protected $_default_sort_params = array('id' => 'DESC');

    protected $_has_many = array(
        'objoftree' => array(
            'field' => 'id_pr',
            'class' => 'Objoftree',
//            'cascade_delete' => false,
//            'can_be_null' => true
            'nullify' => true
        ),
        'uitree' => array(
            'field' => 'id_pr',
            'class' => 'Uitree',
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
        //$criteria = lmbSQLCriteria::equal('id', 1);
        $criteria = null;
        if (isset($params['title']))
            $criteria->addAnd(lmbSQLCriteria :: like('title', $params['title'] . '%'));
        return Product :: find($criteria);
    }

    function getImagePath()
    {
        return lmb_env_get('LIMB_HTTP_OFFSET_PATH') . '/shared/images/icons/cancel.png';
    }
}