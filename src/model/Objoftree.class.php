<?php

class Objoftree extends lmbActiveRecord
{
    protected $_db_table_name = 'objoftree';
//    protected $_default_sort_params = array('id' => 'DESC');
//
    protected $_has_one = array(
        'tree' => array(
            'field' => 'id_sys_tree',
            'class' => 'Tree',
            'cascade_delete' => false,
            'can_be_null' => true
        ));

    protected $_many_belongs_to = array(
        'preference' => array(
            'field' => 'id_pr',
            'class' => 'Preference',
            'can_be_null' => true
        ));

//    static function createForPreference(Preference $specification)
//    {
//        $line = new Objoftree();
//        $line->setIdSysTree(0);
//        $line->setIdPr($specification);
//        $line->setValuePr('');
//        $line->setIsBranch(0);
//        return $line;
//    }

}