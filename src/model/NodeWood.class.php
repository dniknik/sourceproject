<?php
//require_once('limb/active_record/src/lmbAROneToManyCollection.class.php');
lmb_require('limb/active_record/src/lmbAROneToManyCollection.class.php');

class NodeWoodCollection extends lmbAROneToManyCollection
{
    //protected $_db_table_name = 'tree_item';

    protected $ID_ATTR_TITLE = 1;

//    protected $_default_sort_params = array('id' => 'DESC');

//    protected $_many_belongs_to = array(
//        'treefull' => array(
//            'field' => 'node_id',
//            'class' => 'TreeFull',
//            'can_be_null' => true
//        ),
//
//        'treeattribute' => array(
//            'field' => 'attr_id',
//            'class' => 'TreeAttribute',
//            'can_be_null' => true
//        ));

    function getTitle($node_id= '') {
        if ($node_id=='') {
            $node_id = $this->get('node_id');
        }
        echo 'function getTitle($node_id=';
        return '-';
        $criteria =  new lmbSQLFieldCriteria('node_id', $node_id);
        $criteria->addAnd(new lmbSQLFieldCriteria('attr_id', $this->ID_ATTR_TITLE));
        $attr = TreeItem::findFirst('TreeItem', $criteria);
        return (isset($attr['attr_value'])?$attr['attr_value']:'(emptyORnull)');
    }

    static function findForFront($params = array())
    {
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
        }
        return TreeItem :: find($criteria);
    }
}