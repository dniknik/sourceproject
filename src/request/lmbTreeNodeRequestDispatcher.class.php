<?php
/*
 * Limb PHP Framework
 *
 * @link http://limb-project.com
 * @copyright  Copyright &copy; 2004-2007 BIT(http://bit-creative.com)
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 */
lmb_require('limb/web_app/src/request/lmbRequestDispatcher.interface.php');
lmb_require('limb/web_app/src/filter/lmbRequestDispatchingFilter.class.php');
lmb_require('limb/cms/src/model/lmbCmsDocument.class.php');
lmb_require('src/model/TreeNode.class.php');
lmb_require('src/model/TreeItem.class.php');
lmb_require('src/model/TreeFull.class.php');

lmb_require('src/toolkit/ShopTools.class.php');

/**
 * class lmbDbRequestDispatcher.
 *
 * @package web_app
 * @version $Id: lmbRoutesRequestDispatcher.class.php 7114 2008-07-12 14:59:47Z serega $
 */
class lmbTreeNodeRequestDispatcher implements lmbRequestDispatcher
{
    function dispatch($request)
    {
        $path = $request->getUriPath();
        $path = '/'.ltrim($path, '/pagecategory');
        //echo $path;
        if ($path == '/')
            return;
    //echo '<b>lmbTreeNodeRequestDispatcher</b>';
        //echo '<br>'; lmb_var_debug( lmbToolkit :: instance()->getRequest()->toString());
        //echo '<br>';

        //return 0;
        if (!$document = TreeItem::findByUri($path)) {
            //echo ' ! ';
            return;
        }
//lmb_var_debug($document);
        return array(
            'controller' => 'main_page',
            'action' => 'pagecategory',
            'id' => $document->getId()
        );
    }
}
