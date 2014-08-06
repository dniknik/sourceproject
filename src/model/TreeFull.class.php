<?php

class TreeFull extends lmbActiveRecord
{
    protected $ID_ATTR_TITLE = 1;

    //fixme todo !разобраться! зачем это, выборка корректно работает, но редактирование косячит
    //protected $_primary_key_name = 'node_id';

    protected $_db_table_name = 'tree_full';

    protected $_has_many = array(
        'treeitem' => array(
            'field' => 'node_id',
            'class' => 'TreeItem')
    );

    function getUriById($id= null) {
        if(is_null($id)) {
            $id = $this->get('id');
        }
        $criteria =  new lmbSQLFieldCriteria('id', $id);
        $attr = TreeFull::findFirst('TreeFull', $criteria);
        return (isset($attr['identifier'])?$attr['identifier']:'');
    }

    function getUriByNodeId($node_id= null) {
        if(is_null($node_id)) {
            $node_id = $this->get('node_id');
        }
        $criteria =  new lmbSQLFieldCriteria('node_id', $node_id);
        $attr = TreeFull::findFirst('TreeFull', $criteria);
        return (isset($attr['identifier'])?$attr['identifier']:'');
    }

    function getTitle($node_id= null) {
        if(is_null($node_id)) {
            $node_id = $this->get('node_id');
        }
        $criteria =  new lmbSQLFieldCriteria('node_id', $node_id);
        $criteria->addAnd(new lmbSQLFieldCriteria('attr_id', $this->ID_ATTR_TITLE));
        $attr = TreeItem::findFirst('TreeItem', $criteria);
        return (isset($attr['attr_value'])?$attr['attr_value']:'');
    }
    function isRoot()
    {
        if($this->isNew()) return false;
        return !((bool)$this->_getRaw('parent_id'));
    }
    function getUri()
    {
        $uri = ($this->getParent() && !$this->getParent()->isRoot()) ? $this->getParent()->getUri() : '';
        return  $uri . '/' . TreeItem::getUriByNodeId($this->getNodeId());//$this->identifier;
    }
    function getParent()
    {
        $sql = 'select parent_id from tree_full where node_id ='.$this->getNodeId();
        $parent_id = (integer)lmbDBAL::fetchOneValue($sql);
        if($parent_id==0) return null;
        $document = lmbActiveRecord :: findById('TreeFull', $parent_id);
        return $document;
    }
}
