<?php

class TreeOrderLine extends lmbActiveRecord
{
  protected $_db_table_name = 'tree_order_line';
	protected $_many_belongs_to = array('TreeOrder' => array('field' => 'order_id',
                                                       'class' => 'TreeOrder'),
                                      'TreeProduct' => array('field' => 'node_id',
                                                         'class' => 'TreeProduct'));

  static function createForProduct(TreeProduct $product)
  {
    $line = new TreeOrderLine(); // @todo доделать!
    //$line = new OrderLine();
    $line->setProduct($product);
    $line->setQuantity(1);
    $line->setPrice(101);
    //$line->setPrice($product->getPrice());
    return $line;
  }

  function increaseQuantity($amount = 1)
  {
    $this->setQuantity($this->getQuantity() + $amount);
  }

  function getSumm()
  {
    return $this->getQuantity() * $this->getPrice();
  }
}