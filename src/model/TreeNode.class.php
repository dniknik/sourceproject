<?php
/*
 * Limb PHP Framework
 *
 * @link http://limb-project.com
 * @copyright  Copyright &copy; 2004-2007 BIT(http://bit-creative.com)
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 */

//lmb_require('limb/cms/src/model/lmbActiveRecordTreeNode.class.php');
lmb_require('src/model/lmbActiveRecordMPTreeNode.class.php');

/**
 * class lmbCmsDocument.
 *
 * @package cms
 * @version $Id$
 */
class TreeNode extends lmbActiveRecordMPTreeNode
{
  protected $_db_table_name = 'sys_tree';
  //protected $_db_table_name = 'tree_node';
  //protected $_lazy_attributes = array('content');
  protected $_is_being_destroyed = false;
  /**
   * @var lmbMPTree
   */
  protected $_tree;

  function _createValidator()
  {
    $validator = new lmbValidator();

    //$validator->addRequiredRule('title', 'Поле "Заголовок" обязательно для заполнения');
    //$validator->addRequiredRule('content', 'Поле "Текст" обязательно для заполнения');
    $validator->addRequiredRule('identifier', 'Поле "Идентификатор" обязательно для заполнения');

    lmb_require('limb/cms/src/validation/rule/lmbTreeIdentifierRule.class.php');
    $validator->addRule(new lmbTreeIdentifierRule('identifier'));

    return $validator;
  }

  protected function _onBeforeSave()
  {
    $this->save();
  }

  function _onCreate()
  {
    $this->_setPriority();
  }

  protected function _setPriority()
  {
    if(!$parent_id = $this->getParentId())
      $parent_id = TreeNode :: findRoot()->getId();

    $sql = "SELECT MAX(priority) FROM " . $this->_db_table_name . " WHERE parent_id = " . $parent_id;
    $max_priority = lmbDBAL :: fetchOneValue($sql);
    $this->setPriority($max_priority + 10);
  }

  function getUri()
  {
    $uri = ($this->getParent() && !$this->getParent()->isRoot()) ? $this->getParent()->getUri() : '';
    return  $uri . '/' . $this->identifier;
  }

  /**
   * @param string $uri
   * @return lmbCmsDocument
   */
  static function findByUri($uri)
  {
    $identifiers = explode('/', rtrim($uri,'/'));
    $criteria = new lmbSQLCriteria('level = 0');
    $level = 0;
    foreach($identifiers as $identifier)
    {
    	$identifier_criteria = lmbSQLCriteria::equal('identifier', $identifier);
      $identifier_criteria->addAnd(lmbSQLCriteria::equal('level', $level));
      $criteria->addOr($identifier_criteria);
      $level++;
    }
    $nodes = lmbActiveRecord :: find('TreeNode', $criteria); //fixme name
    
    $parent_id = 0;
    foreach($identifiers as $identifier)
    {
      if(!$node = self :: _getNodeByParentIdAndIdentifier($nodes, $parent_id, $identifier))
        return false;
      $parent_id = $node->getId();
    }
    return $node;
  }
  
  static function _getNodeByParentIdAndIdentifier($nodes, $parent_id, $identifier)
  {
    foreach($nodes as $node)
    {
      if(($node->getParentId() == $parent_id) and ($node->getIdentifier() == $identifier))
        return $node;
    }
    return false;
  }
}
