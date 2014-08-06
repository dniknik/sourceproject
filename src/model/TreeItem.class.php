<?php

class TreeItem extends lmbActiveRecord
{
    protected $_db_table_name = 'tree_item';

    protected $ID_ATTR_TITLE = 1;
    const  ID_TITLE = 1;
    const  ID_DESCR = 2;
    const  ID_URI = 3;
    const  ID_CREATE_DATE = 4;
    const  ID_UPDATE_DATE = 5;
    const  ID_PRICE = 6;

    protected $_default_sort_params = array('id' => 'DESC');

    protected $_many_belongs_to = array(
        'treefull' => array(
            'field' => 'node_id',
            'class' => 'TreeFull',
            'can_be_null' => true
        ),

        'treeattribute' => array(
            'field' => 'attr_id',
            'class' => 'TreeAttribute',
            'can_be_null' => true
        ));

    static function getIsBranchByNodeId($node_id= '') {
        if ($node_id=='') {
            $node_id = 0;
        }
        $criteria =  new lmbSQLFieldCriteria('node_id', $node_id);
        $attr = TreeItem::findFirst('TreeItem', $criteria);
        return (isset($attr['is_branch'])?$attr['is_branch']:'');
    }

    static function getAttrTitleByAttrId($attr_id = null) {
        if(is_null($attr_id)) {
            return null;
        }
        $criteria = new lmbSQLFieldCriteria('id', $attr_id);
        //$criteria->addAnd(new lmbSQLFieldCriteria('is_published', 1));
            //is_published
        $attr = TreeAttribute::findFirst('TreeAttribute', $criteria);
        return (isset($attr['title'])?$attr['title']:'');
    }

    static function getAttrValueByNodeId($node_id = null, $attr_id = null) {
        if(is_null($node_id)) {
            return null;
        }
        $criteria =  new lmbSQLFieldCriteria('node_id', $node_id);
        if(!is_null($attr_id)) {
            $criteria->addAnd(new lmbSQLFieldCriteria('attr_id', $attr_id));
        }
        $attr = TreeItem::findFirst('TreeItem', $criteria);
        return (isset($attr['attr_value'])?$attr['attr_value']:'');
    }

    static function getPriceByNodeId($node_id= '') {
        if ($node_id=='') {
            $node_id = 0;
        }
        $criteria =  new lmbSQLFieldCriteria('node_id', $node_id);
        $criteria->addAnd(new lmbSQLFieldCriteria('attr_id', self :: ID_PRICE));
        $attr = TreeItem::findFirst('TreeItem', $criteria);
        return (isset($attr['attr_value'])?$attr['attr_value']:'');
    }

    static function getUriByNodeId($node_id= '') {
        if ($node_id=='') {
            $node_id = 0;
        }
        $criteria =  new lmbSQLFieldCriteria('node_id', $node_id);
        $criteria->addAnd(new lmbSQLFieldCriteria('attr_id', self :: ID_URI));
        $attr = TreeItem::findFirst('TreeItem', $criteria);
        return (isset($attr['attr_value'])?$attr['attr_value']:'');
    }

    static function getDescriptionByNodeId($node_id= '') {
        if ($node_id=='') {
            $node_id = 0;
        }
        $criteria =  new lmbSQLFieldCriteria('node_id', $node_id);
        $criteria->addAnd(new lmbSQLFieldCriteria('attr_id', self :: ID_DESCR));
        $attr = TreeItem::findFirst('TreeItem', $criteria);
        return (isset($attr['attr_value'])?$attr['attr_value']:'');
    }

    static function getTitleByNodeId($node_id= '') {
        if ($node_id=='') {
            $node_id = 0;
        }
        $criteria =  new lmbSQLFieldCriteria('node_id', $node_id);
        $criteria->addAnd(new lmbSQLFieldCriteria('attr_id', self :: ID_TITLE));
        $attr = TreeItem::findFirst('TreeItem', $criteria);
        return (isset($attr['attr_value'])?$attr['attr_value']:'');
    }

    function getTitle($node_id= '') {
        if ($node_id=='') {
            $node_id = $this->get('node_id');
        }
        if ($node_id==0) return '';
        $criteria =  new lmbSQLFieldCriteria('node_id', $node_id);
        $criteria->addAnd(new lmbSQLFieldCriteria('attr_id', $this->ID_ATTR_TITLE));
        $attr = TreeItem::findFirst('TreeItem', $criteria); //fixme
        return (isset($attr['attr_value'])?$attr['attr_value']:'');
    }

    static function findForFront($params = array(), $sql_in_branch='0')
    {
        $criteria =  new lmbSQLCriteria('is_branch in ('. $sql_in_branch. ')');
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

    static function findFromFrame($params = array(), $sql_in_branch='0')
    {
        lmb_require('limb/dbal/src/criteria/lmbSQLRawCriteria.class.php');

        $query = new lmbSelectQuery('tree_item');
        $query->addTable('tree_full');
        $query->addTable('tree_attribute');
        $query->addCriteria(new lmbSQLRawCriteria('tree_item.node_id = tree_full.node_id'));
        $query->addCriteria(new lmbSQLRawCriteria('tree_item.attr_id = tree_attribute.id'));

        $criteria = new lmbSQLFieldCriteria('tree_attribute.is_published', 1);
        $str_like= '';
        if (isset($params['search']))
        {
            $str_like= '%';
        }
        if (isset($params['title']))
        {
            $criteria->addAnd(lmbSQLCriteria :: like('attr_value', $str_like. $params['title'].'%'));
        }
        if (isset($params['node_id']))
        {
            $criteria->addAnd(lmbSQLCriteria ::equal('tree_item.node_id', $params['node_id']));
        }
        $query->addCriteria($criteria);
        return $query->fetch();
    }


  function isRoot()
  {
    if($this->isNew()) return false;
    return !((bool)$this->_getRaw('parent_id'));
  }

  function getParent()
  {
      $sql = 'select parent_id from tree_full where node_id ='.$this->getNodeId();
      $parent_id = (integer)lmbDBAL::fetchOneValue($sql);
        if($parent_id==0) return null;
        $document = lmbActiveRecord :: findById('TreeFull', $parent_id);
      return $document;
  }


    function getUri()
    {
        $uri = ($this->getParent() && !$this->getParent()->isRoot()) ? $this->getParent()->getUri() : '';
        return  $uri . '/' . TreeItem::getUriByNodeId($this->getNodeId());//$this->identifier;
    }


    static function getUriByNode($node_id) {
        $criteria =  new lmbSQLFieldCriteria('node_id', $node_id);
        $item = TreeItem::findFirst('TreeItem', $criteria);
        if(!$item) return false;
        return  $item->getUri();
    }

    static function findByUri($uri)
    {
        $selector = '/';  //'-';// '/'
        $identifiers = explode($selector, rtrim($uri, $selector));
        $criteria = new lmbSQLCriteria('level = 0');
        $level = 0;
        foreach($identifiers as $identifier)
        {
            $identifier_criteria = lmbSQLCriteria::equal('identifier', $identifier);
            $identifier_criteria->addAnd(lmbSQLCriteria::equal('level', $level));
            $criteria->addOr($identifier_criteria);
            //echo '<br>('.$identifier.':'.$level.')';
            $level++;
        }
        $documents = lmbActiveRecord :: find('TreeFull', $criteria);

        $parent_id = 0;
        foreach($identifiers as $identifier)
        {
            if(!$document = self :: _getNodeByParentIdAndIdentifier($documents, $parent_id, $identifier))
                return false;
            $parent_id = $document->getId();
        }
        return $document;
    }

    static function _getNodeByParentIdAndIdentifier($documents, $parent_id, $identifier)
    {
        foreach($documents as $document)
        {
            if(($document->getParentId() == $parent_id) and ($document->getIdentifier() == $identifier))
                return $document;
        }
        return false;
    }
}
