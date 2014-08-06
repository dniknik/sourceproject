<?php

class Tree extends lmbActiveRecord
{
    protected $_db_table_name = 'sys_tree';

    protected $_belongs_to = array(
        'objoftree' =>
        array(
            'field' => 'id_sys_tree',
            'class' => 'Uicategory'
        ),
        'objoftree' =>
        array(
            'field' => 'id_sys_tree',
            'class' => 'Objoftree'
        ),
        'uitree' =>
        array(
            'field' => 'id_sys_tree',
            'class' => 'Uitree'
        )
    );

    protected function _createValidator()
    {
        $validator = new lmbValidator();
        return $validator;
    }
}