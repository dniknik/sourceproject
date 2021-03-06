<?php
lmb_require('limb/toolkit/src/lmbAbstractTools.class.php');
//lmb_require('limb/tree/lmbMaterializedPathTree.class.php');

lmb_require('src/model/User.class.php');
lmb_require('src/model/TreeFull.class.php');
lmb_require('src/model/TreeItem.class.php');
lmb_require('src/model/TreeAttribute.class.php');

class ShopTools extends lmbAbstractTools
{
    protected $tree;
    protected $user;

    //function getTree()
    //{
    //    if(is_object($this->tree))
    //        return $this->tree;
    //    $this->tree = new lmbMaterializedPathTree();
    //    return $this->tree;
    //}

    function getTree($tree_name = 'tree_full') //fixme check table_name
    {
        if (isset($this->tree[$tree_name]) && is_object($this->tree[$tree_name]))
            return $this->tree[$tree_name];

        $this->tree[$tree_name] = new lmbMPTree($tree_name);

        return $this->tree[$tree_name];
    }

    function setTree($tree)
    {
        $this->tree = $tree;
    }

    function getUser()
    {
        if (is_object($this->user))
            return $this->user;

        $session = lmbToolkit :: instance()->getSession();
        if ($user_id = $session->get('user_id')) {
            try {
                $this->user = new User($user_id);
                $this->user->setIsLoggedIn(true);
            } catch (lmbARException $e) {
                $this->user = new User();
                $session->remove('user_id');
            }
        } else
            $this->user = new User();

        return $this->user;
    }

    static function getCountTreeNodes() {
        $sql = 'select count(id) as count from tree_full';
        $cur = lmbActiveRecord::findBySql('TreeFull', $sql);
        return $cur[0]['count'];
    }

    static function getCountAllNodes() {
        $sql = 'select count(distinct(node_id)) as count from tree_item where is_branch in (0,1)';
        $cur = lmbActiveRecord::findBySql('TreeItem', $sql);
        return $cur[0]['count'];
    }
}
