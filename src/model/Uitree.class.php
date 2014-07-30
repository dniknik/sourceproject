<?php

//lmb_require('limb/cms/src/model/lmbActiveRecordTreeNode.class.php');

/**
 * class lmbCmsDocument.
 *
 * @package cms
 * @version $Id$
 */
//class Uitree extends lmbActiveRecordTreeNode
//{

class Uitree extends lmbActiveRecord
{
    protected $_db_table_name = 'objoftree';
    protected $_is_being_destroyed = false;
    protected $_tree;
    function _createValidator()
    {
        $validator = new lmbValidator();

//        $validator->addRequiredRule('title', 'Поле "Заголовок" обязательно для заполнения');
//        $validator->addRequiredRule('content', 'Поле "Текст" обязательно для заполнения');
//        $validator->addRequiredRule('identifier', 'Поле "Идентификатор" обязательно для заполнения');
//
//        lmb_require('limb/cms/src/validation/rule/lmbTreeIdentifierRule.class.php');
//        $validator->addRule(new lmbTreeIdentifierRule('identifier'));

        return $validator;
    }
//    protected $_default_sort_params = array('id' => 'DESC');

//    protected $_default_sort_params = array('title' => 'ASC');

//
    protected $_has_one = array(
        'tree' => array(
            'field' => 'id_sys_tree',
            'class' => 'Tree',
            'cascade_delete' => false,
            'can_be_null' => true
        )
    );

    protected $_many_belongs_to = array(
        'preference' => array(
            'field' => 'id_pr',
            'class' => 'Preference',
            'can_be_null' => true
        )
    );

    static function findForFront($params = array())
    {
        $criteria = lmbSQLCriteria::equal('is_branch', 0);
        $str_like= '';
        if (isset($params['search']))
        {
            echo '<b>with_search</b>';
            $str_like= '%';
        }
        if (isset($params['title']))
        {
            $criteria->addAnd(lmbSQLCriteria :: like('value_pr', $str_like. $params['title'].'%'));
            echo '<br>params_title: ';
            lmb_var_debug($params['title']);
        }
//        if (isset($params['title']))
//            $criteria->addAnd(lmbSQLCriteria :: like('title', $params['title'].'%'));
        return Uitree :: find($criteria);
    }

}