<?php /* This file is generated from /home/dnn/web/webshop/template/admin_tree/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor7c6d392a56e3573f7420ba6e0e40f04f', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
require_once('limb/macro/src/tags/pager/lmbMacroPagerHelper.class.php');
class MacroTemplateExecutor7c6d392a56e3573f7420ba6e0e40f04f extends lmbMacroTemplateExecutor {

function _init() {
$this->pager_pager = new lmbMacroPagerHelper('pager');

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('admin_page_layout.phtml', 'content_zone', 'content_zone', 'admin_page_layout.phtml');
}

function __staticInclude1($file,$in,$into,$file) {
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Powered by LIMB | http://www.limb-project.com/ -->
<!-- Designed by BIT | http://www.bit-creative.com/ -->
<?php  $this->static_files_version = lmb_env_get('CMS_STATIC_FILES_VERSION'); ?>
<html>
<head>
  <title><?php 
    echo lmb_i18n('Control panel','cms');
         ?></title>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
  <link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" />
  <!--[if IE]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" /><![endif]-->
  <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie6.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" /><![endif]-->
  <link rel="stylesheet" type="text/css" href="/shared/cms/styles/thickbox.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" />
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlerb5c63d343f73b8b32c4c29ee3c380b1f(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler2e59672734c3e6ff5f339e0d42c0d2f3(array()); ?>

  </style>
</head>
<body>
  <div id="wrapper">
    <?php $this->__staticInclude2('_admin/notify_zone.phtml'); ?>

    <div id='admin_panel'>
      <a href="/admin"><img src="/shared/cms/images/logo.limb.png" alt='LIMB' id='logo_project'/></a>

        <?php
        lmb_require('src/toolkit/ShopTools.class.php');
        $this->countAllNodes = ShopTools::getCountAllNodes();
        $this->countTreeNodes = ShopTools::getCountTreeNodes();
        $alfa = $this->countAllNodes - $this->countTreeNodes;
        ?>

      <ul id='user_data'>
        <li>Узлов: [<?php echo htmlspecialchars($this->countAllNodes,3); ?>]</li>
        <li>в дереве: [<?php echo htmlspecialchars($this->countTreeNodes,3); ?>]</li>
        <li><?php echo ($alfa)?'не связанных: '.$alfa:''; ?></li>
        <li> </li>
        <li><?php $BL='';
$BM = $this->toolkit;
if((is_array($BM) || ($BM instanceof ArrayAccess)) && isset($BM['cms_user'])) { $BL = $BM['cms_user'];
if((is_array($BL) || ($BL instanceof ArrayAccess)) && isset($BL['login'])) { $BL = $BL['login'];
}else{ $BL = '';}
}else{ $BL = '';}
echo htmlspecialchars($BL,3); ?> [ <?php $BN='';
$BO = $this->toolkit;
if((is_array($BO) || ($BO instanceof ArrayAccess)) && isset($BO['cms_user'])) { $BN = $BO['cms_user'];
if((is_array($BN) || ($BN instanceof ArrayAccess)) && isset($BN['name'])) { $BN = $BN['name'];
}else{ $BN = '';}
}else{ $BN = '';}
echo htmlspecialchars($BN,3); ?> ]</li>
        <li><a href='/cms_user/logout' class='logout'><?php 
    echo lmb_i18n('Exit','cms');
         ?></a></li>
      </ul>
    </div>

    <div id='main_col'>
      <div id="main_col_content">
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandlerc97b2b5b73bb0f97a7da5cab8cab634f(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $KT = 0;$KV = $this->navigation;

if(!is_array($KV) && !($KV instanceof Iterator) && !($KV instanceof IteratorAggregate)) {
$KV = array();}
$KU = $KV;
foreach($KU as $item) {if($KT == 0) { ?>

        <?php } ?>

        <dt class='<?php $KX='';
$KY = $item;
if((is_array($KY) || ($KY instanceof ArrayAccess)) && isset($KY['id'])) { $KX = $KY['id'];
}else{ $KX = '';}
echo htmlspecialchars($KX,3); ?>'><img src='<?php $KZ='';
$LA = $item;
if((is_array($LA) || ($LA instanceof ArrayAccess)) && isset($LA['icon'])) { $KZ = $LA['icon'];
}else{ $KZ = '';}
echo htmlspecialchars($KZ,3); ?>'/> <?php $LB='';
$LC = $item;
if((is_array($LC) || ($LC instanceof ArrayAccess)) && isset($LC['title'])) { $LB = $LC['title'];
}else{ $LB = '';}
echo htmlspecialchars($LB,3); ?> </dt>
        <dd>
          <?php $LD='';
$LE = $item;
if((is_array($LE) || ($LE instanceof ArrayAccess)) && isset($LE['children'])) { $LD = $LE['children'];
}else{ $LD = '';}
$LH = 0;$LJ = $LD;

if(!is_array($LJ) && !($LJ instanceof Iterator) && !($LJ instanceof IteratorAggregate)) {
$LJ = array();}
$LI = $LJ;
foreach($LI as $sub_item) {if($LH == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $LL='';
$LM = $sub_item;
if((is_array($LM) || ($LM instanceof ArrayAccess)) && isset($LM['icon'])) { $LL = $LM['icon'];
}else{ $LL = '';}
echo htmlspecialchars($LL,3); ?>'/> <a href='<?php $LN='';
$LO = $sub_item;
if((is_array($LO) || ($LO instanceof ArrayAccess)) && isset($LO['url'])) { $LN = $LO['url'];
}else{ $LN = '';}
echo htmlspecialchars($LN,3); ?>'><?php $LP='';
$LQ = $sub_item;
if((is_array($LQ) || ($LQ instanceof ArrayAccess)) && isset($LQ['title'])) { $LP = $LQ['title'];
}else{ $LP = '';}
echo htmlspecialchars($LP,3); ?></a>
              </li><?php $LH++;}if($LH > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $KT++;}if($KT > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler2ad55b58d8ffd22e49692f738756dfbe(array()); ?>

    </div>
  </div>

  <script src="<?php  echo lmb_env_get('JQUERY_FILE_URL'); ?>?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/js/js/limb.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/js/js/limb/url.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/js/js/limb/flash.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/js/js/limb/window.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/js/js/limb/forms.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/js/js/limb/form_elements.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/cms/js/tabs.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/cms/js/auto_tabs.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/cms/js/thickbox.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/cms/js/cp.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandlercbedf88a95810f2795b03966c77736bf(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler6ccce7fa36ae9b60f87d922e4d04fa2c(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler2fcdfab1ac094aa0c28f3c24feee4795(array()); ?>


      thickboxInit();

      function thickboxInit()
      {
        jQuery("a.thickbox").each(function()
        {
          if(this.href.indexOf('TB_iframe') > 0)
            return;

          var sep = (this.href.indexOf('?') > 0) ? '&' : '?';
          this.href = this.href + sep + 'TB_iframe=true&width=640&height=480';
        });

        tb_init('a.thickbox');                                    //pass where to apply thickbox
        imgLoader = new Image();                                  // preload image
        imgLoader.src = "/shared/cms/images/icons/loading.gif";
      }
    });
  </script>

</body>
</html>
<?php 
}

function __slotHandlerb5c63d343f73b8b32c4c29ee3c380b1f($I= array()) {
if($I) extract($I);
}

function __slotHandler2e59672734c3e6ff5f339e0d42c0d2f3($J= array()) {
if($J) extract($J);
}

function __staticInclude2($file) {
 ?>


<?php 
  $flashbox = $this->toolkit->getFlashBox();
  if($flashbox->hasErrors() || $flashbox->hasMessages()){ ?>
    <div id="flashbox" class="flashbox">
      <ul>
        <?php $K='';
$L = $flashbox;
$K = $L->getErrors();
$this->_templatea70363cd365021b42cf0c54eb7ea1ffe(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template88507eb04aa8501e083a86d76427252a(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

      </ul>
      <a href="javascipt:void(0)" href="javascript:void(0)" class='close' onclick="this.parentNode.style.display = 'none'; return false;">
        <?php 
    echo lmb_i18n('Close','cms');
         ?>

      </a>
    </div>
    <?php 
    $flashbox->reset();
   }
?><?php 
}

function _templatea70363cd365021b42cf0c54eb7ea1ffe($M= array()) {
if($M) extract($M); ?>

  <?php $P = 0;$R = $messages;

if(!is_array($R) && !($R instanceof Iterator) && !($R instanceof IteratorAggregate)) {
$R = array();}
$Q = $R;
foreach($Q as $item) {if($P == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $P++;}if($P > 0) { ?>

  <?php } ?>

<?php 
}

function _template88507eb04aa8501e083a86d76427252a($X= array()) {
if($X) extract($X); ?>

  <?php $BB = 0;$BD = $messages;

if(!is_array($BD) && !($BD instanceof Iterator) && !($BD instanceof IteratorAggregate)) {
$BD = array();}
$BC = $BD;
foreach($BC as $item) {if($BB == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $BB++;}if($BB > 0) { ?>

  <?php } ?>

<?php 
}

function __slotHandlerc97b2b5b73bb0f97a7da5cab8cab634f($BP= array()) {
if($BP) extract($BP); ?>


<?php $this->__staticInclude3('_admin/selectors.phtml'); ?>

<?php $this->__staticInclude4('_admin_object/actions.phtml'); ?>


<div id="header">
    <h1>Users-category-tree</h1>

    <div class="header_actions">
        <?php $this->_templatebafd82287287d343e797176b3b4e4f5d(array('template' => 'object_action','action' => 'create','is_link' => 'true','title' => 'Create user',)); ?>

    </div>

    <?php $this->__staticInclude5('_admin/pager.phtml', $this->items); ?>

</div>


<div id="body">

<?php $DP = 0;$DR = $this->items;

if(!is_array($DR) && !($DR instanceof Iterator) && !($DR instanceof IteratorAggregate)) {
$DR = array();}
$DQ = $DR;
foreach($DQ as $item) {$counter = $DP+1;$parity = (( ($DP + 1) % 2) ? "odd" : "even");if($DP == 0) { ?>


<div class='list'>
    <table>
        <tr>
            <th>#ID</th>
            <th>root_id</th>
            <th>parent_id</th>
            <th>priority</th>
            <th>level</th>
            <th>identifier</th>
            <th>path</th>
            <th>children</th>
            <th>Actions</th>
        </tr>

        <?php } ?>

        <tr class="<?php echo htmlspecialchars($parity,3); ?>">
            <td><?php $DV='';
$DW = $item;
if((is_array($DW) || ($DW instanceof ArrayAccess)) && isset($DW['id'])) { $DV = $DW['id'];
}else{ $DV = '';}
echo htmlspecialchars($DV,3); ?></td>
            <td><?php $DX='';
$DY = $item;
if((is_array($DY) || ($DY instanceof ArrayAccess)) && isset($DY['root_id'])) { $DX = $DY['root_id'];
}else{ $DX = '';}
echo htmlspecialchars($DX,3); ?></td>
            <td><?php $DZ='';
$EA = $item;
if((is_array($EA) || ($EA instanceof ArrayAccess)) && isset($EA['parent_id'])) { $DZ = $EA['parent_id'];
}else{ $DZ = '';}
echo htmlspecialchars($DZ,3); ?></td>
            <td><?php $EB='';
$EC = $item;
if((is_array($EC) || ($EC instanceof ArrayAccess)) && isset($EC['priority'])) { $EB = $EC['priority'];
}else{ $EB = '';}
echo htmlspecialchars($EB,3); ?></td>
            <td><?php $ED='';
$EE = $item;
if((is_array($EE) || ($EE instanceof ArrayAccess)) && isset($EE['level'])) { $ED = $EE['level'];
}else{ $ED = '';}
echo htmlspecialchars($ED,3); ?></td>
            <td><?php $EF='';
$EG = $item;
if((is_array($EG) || ($EG instanceof ArrayAccess)) && isset($EG['identifier'])) { $EF = $EG['identifier'];
}else{ $EF = '';}
echo htmlspecialchars($EF,3); ?></td>
            <td><?php $EH='';
$EI = $item;
if((is_array($EI) || ($EI instanceof ArrayAccess)) && isset($EI['path'])) { $EH = $EI['path'];
}else{ $EH = '';}
echo htmlspecialchars($EH,3); ?></td>
            <td><?php $EJ='';
$EK = $item;
if((is_array($EK) || ($EK instanceof ArrayAccess)) && isset($EK['children'])) { $EJ = $EK['children'];
}else{ $EJ = '';}
echo htmlspecialchars($EJ,3); ?></td>
            <td class='actions'>
                <?php $this->_templatec7983559f3603708387308f65110da4d(array('template' => 'object_action_edit','item' => $item,)); ?>

                <?php $this->_template3ba376e26c7c2f033c7f0297ea9c03ec(array('template' => 'object_action_delete','item' => $item,)); ?>

            </td>
        </tr>
        <?php $DP++;}if($DP > 0) { ?>

        
    </table>
</div>

<?php }if($DP == 0) { ?>

        <div class="empty_list">Empty</div>
        <?php } ?>


<div>
    <table border="1">
        <tr>
            <th>test_tree_out</th>
            <th>Tree_01</th>
            <th>Tree_Counter</th>
            <th>Tree_PassExtraParamsIntoTreeMethod</th>
            <th>Tree_CheckBC</th>
            <th>etc</th>
        </tr>

        <?php

        lmb_require('limb/tree/src/lmbTreeNestedCollection.class.php');
        lmb_require('limb/tree/src/lmbTreeHelper.class.php');

        lmb_require('limb/tree/src/lmbTreeDecorator.class.php');
        lmb_require('limb/tree/src/lmbMPTree.class.php');
        //lmb_require('limb/tree/src/lmbMPTree.class.php');

        $tree = 0;
        $arr = array();
        //$docs = lmbActiveRecord::find('lmbCmsDocument', lmbSQLCriteria::equal('is_published', 1)
        //  ->addAnd(new lmbSQLCriteria('level > 0')));
        //$sorted_docs = lmbTreeHelper :: sort($docs, array('id' => 'ASC'));

        //$tree = new lmbTreeNestedCollection();
        //$my_connect = lmbDBAL :: instanse() -> getDefaultDbConnection();
//        $my_connect = lmbToolkit::instance()->getDefaultDbConnection();
//
//        $tree = new lmbTreeDecorator(
//            new lmbMPTree(
//                'sys_tree',
//                $my_connect,
//                array('id' => 'id',
//                    'parent_id' => 'parent_id',
//                    'level' => 'level',
//                    'identifier' => 'identifier',
//                    'path' => 'path'
//                )));


//        lmb_require('limb/tree/src/lmbTreeNestedCollection.class.php');
//        lmb_require('limb/tree/src/lmbTreeHelper.class.php');

        $docs = lmbActiveRecord::find('Tree', lmbSQLCriteria::equal('priority', 0)
            ->addAnd(new lmbSQLCriteria('level > 0')));
        $sorted_docs = lmbTreeHelper :: sort($docs, array('id' => 'ASC'));
//echo( sizeof($docs));
        //$processed_docs = new lmbTreeNestedCollection($sorted_docs);
        $tree1 = new lmbTreeNestedCollection($sorted_docs);
        //$tree1 = new lmbTreeNestedCollection($docs);
        $tree1->setChildrenField('preloaded_children');
        $tree1->rewind();
//echo( sizeof($tree1));
//var_dump( $tree1 );

        /*
                $root = $tree->initTree();

                        $node_1 = $tree->createNode($root, array('identifier' => 'node_1'));
                        $node_2_1 = $tree->createNode($node_1, array('identifier' => 'aaa'));
                        $node_2_2 = $tree->createNode($node_1, array('identifier' => 'cccc'));
                        $node_2_3 = $tree->createNode($node_1, array('identifier' => 'bbb'));
                        $node_2_2_1 = $tree->createNode($node_2_2, array('identifier' => 'node_2_2_1'));
                        $node_2_2_2 = $tree->createNode($node_2_2, array('identifier' => 'node_2_2_2'));
                        $node_2_4 = $tree->createNode($node_1, array('identifier' => 'ddd'));
                        $node_2_tmp = $tree->createNode($node_1, array('identifier' => 'eee'));
                        $node_r_2 = $tree->createNode($root, array('identifier' => 'node_02'));
                        $node_r_2_1 = $tree->createNode($node_r_2, array('identifier' => 'node_r_2'));
                        //$tree->moveNode($node_2_tmp, $node_2_2);

                        $rc = $tree->getChildren($node_1);
                        //$rc = $tree->getChildren($root);
                        $arr = $rc->sort(array('identifier' => 'DESC'))->getArray();
                        echo 'count:' . sizeof($arr) . '<br>';
                /* */
        //$test = $tree1->getChildren($tree1->getRootNode());

        //$processed_docs = new lmbTreeNestedCollection($sorted_docs);
        //$processed_docs->setChildrenField('preloaded_children');
        //$processed_docs->rewind();

        $tree_array = array(
            array('id' => 8, 'parent_id' => 0, 'sort1' => 'cunny', 'sort2' => 4),
            array('id' => 1, 'parent_id' => 0, 'sort1' => 'bill', 'sort2' => 0),
            array('id' => 5, 'parent_id' => 1, 'sort1' => 'body', 'sort2' => 0),
            array('id' => 2, 'parent_id' => 1, 'sort1' => 'body', 'sort2' => 1),
            array('id' => 3, 'parent_id' => 2, 'sort1' => 'merfy', 'sort2' => 0),
            array('id' => 4, 'parent_id' => 2, 'sort1' => 'eddy', 'sort2' => 1),
            array('id' => 6, 'parent_id' => 0, 'sort1' => 'alfred', 'sort2' => 1),
            array('id' => 7, 'parent_id' => 6, 'sort1' => 'tom', 'sort2' => 0),
        );

        $tree01 = array(array('title' => 'foo'),
            array('title' => 'bar', 'kids' => array(array('title' => 'bar1'),
                array('title' => 'bar2'))),
            array('title' => 'hey'));


        $tree_counter = array(array('title' => 'foo'),
            array('title' => 'bar', 'kids' => array(array('title' => 'bar1'),
                array('title' => 'bar2'))),
            array('title' => 'hey'));

        $tree_PassExtraParamsIntoTreeMethod = array(array('title' => 'foo'),
            array('title' => 'bar', 'kids' => array(array('title' => 'bar1'),
                array('title' => 'bar2'))),
            array('title' => 'hey'));

        $tree_CheckBC = array(array('title' => 'foo'),
            array('title' => 'bar', 'kids' => array(array('title' => 'bar1'),
                array('title' => 'bar2'))),
            array('title' => 'hey'));

        ?>

        <tr>
            <td>
                <?php $this->_render_tree8b9a9da98e27c965414eb8a539400855($tree_array, 0,array('prefix' => '',));
 ?>



                <?php $this->_render_tree08a3fced8010648238cfc9a7c5e4769f($this->items, 0,array('prefix' => '',));
 ?>



            </td>

            <td>

                <?php $this->_render_treea16f48803db5a71f4163c63109ab0c03($tree01, 0,array('kids_prop' => 'kids',));
 ?>


                <?php $this->_render_tree143123a9eef125b4e42502716f3393c4($tree1, 0,array('kids_prop' => 'preloaded_children',));
 ?>


            </td>

            <td>

                <?php $this->_render_treea66589794fc2ca6bf9c7494868f5d360($tree_counter, 0,array('kids_prop' => 'kids',));
 ?>


                <?php $this->_render_treea9393b14036680aa17bedc46b78f6b80($tree1, 0,array('kids_prop' => 'preloaded_children',));
 ?>

            </td>

            <td>

                <?php $this->_render_tree377129f458a7593c2c47f4448fb5e694($tree_PassExtraParamsIntoTreeMethod, 0,array('kids_prop' => 'kids','prefix' => '1',));
 ?>


                <?php $this->_render_treeac69e1a01bccb5fcbd203f3937541e58($tree1, 0,array('kids_prop' => 'preloaded_children','prefix' => '1',));
 ?>

            </td>

            <td>

                <?php $this->_render_tree6807383fa0002c4fadca2296943e701a($tree_CheckBC, 0,array('kids_prop' => 'kids',));
 ?>


                <?php $this->_render_treed6c5383bf5d865eae7db4637e3949ee0($tree1, 0,array('kids_prop' => 'preloaded_children',));
 ?>

            </td>
            <td>
                etc<br>
                <?php $this->_render_tree843fb5b303e01fa1520e86b6c4ba0f1f($tree1, 0,array('kids_prop' => 'preloaded_children',));
 ?>

                <br>

                <?php $this->_render_tree0c9f37d958d7611eb2e7adddd29a962f($tree1, 0,array('kids_prop' => 'preloaded_children','prefix' => '',));
 ?>


            </td>
        </tr>
    </table>
</div>

<br>
</div>

<?php 
}

function __staticInclude3($file) {
 ?>











<?php 
}

function __staticInclude4($file) {
 ?>








<?php 
}

function _templatebafd82287287d343e797176b3b4e4f5d($BQ= array()) {
if($BQ) extract($BQ); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $item = isset($item) ? $item : false;
    $is_link = isset($is_link) ? $is_link : false;
    $icon = isset($icon) ? $icon : "add";
  ?>
  <a href='<?php $BV='';
$BW = $item;
if((is_array($BW) || ($BW instanceof ArrayAccess)) && isset($BW['id'])) { $BV = $BW['id'];
}else{ $BV = '';}
$BY = array();
$BX = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:%s,id:%s',$controller,$action,$BV));
foreach($BX as $key => $value) $BY[trim($key)] = trim($value);
$BZ = false;
echo lmbToolkit :: instance()->getRoutesUrl($BY, '', $BZ);
 ?>' title="<?php echo htmlspecialchars($title,3); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"add"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function __staticInclude5($file,$items) {
 ?><?php
  $limit = intval(isset($per_page) ? $per_page : 20);
?>
<?php $this->pager_pager->setItemsPerPage($limit);
$this->pager_pager->setTotalItems($items->count());
$this->pager_pager->prepare();
$CK = $this->pager_pager->getCurrentPageBeginItem();
if($CK > 0) $CK = $CK - 1;
$items->paginate($CK, $this->pager_pager->getItemsPerPage());
 ?>


<?php $this->pager_pager->useSections();
$this->pager_pager->prepare();
$total_items = $this->pager_pager->getTotalItems();
$total_pages = $this->pager_pager->getTotalPages();
$items_per_page = $this->pager_pager->getItemsPerPage();
$begin_item_number = $this->pager_pager->getCurrentPageBeginItem();
$end_item_number = $this->pager_pager->getCurrentPageEndItem();
 ?>

  <?php  if($total_pages > 1){ ?>
    <div class='pager'>
      <?php if (!$this->pager_pager->isFirst()) {
$href = $this->pager_pager->getFirstPageUri();
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><img src="/shared/cms/images/button/arrow_first.gif"  width='18' height='17' alt='&#171;'/></a><?php }
 ?>

      <?php if ($this->pager_pager->hasPrev()) {
$href = $this->pager_pager->getPageUri($this->pager_pager->getCurrentPage() - 1 );
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><img src="/shared/cms/images/button/arrow_prev.gif"  width='18' height='17' alt='&#60;'/></a><?php }
 ?>

      <?php $CP = 0;
$CQ = false;
while ($this->pager_pager->isValid()) {
if ($this->pager_pager->isDisplayedSection()) {
if (!($this->pager_pager->isFirst() && $this->pager_pager->isLast())) {
if (!$this->pager_pager->isDisplayedPage()) {
$href = $this->pager_pager->getPageUri();
$number = $this->pager_pager->getPage();
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><?php echo htmlspecialchars($number,3); ?></a><?php }
if ($this->pager_pager->isDisplayedPage()) {
$href = $this->pager_pager->getCurrentPageUri();
$number = $this->pager_pager->getPage();
 ?><b><?php echo htmlspecialchars($number,3); ?></b><?php }
}
$this->pager_pager->nextPage();
if ($this->pager_pager->isValid()){
 ?> <?php }
}
else {
if (!$this->pager_pager->isDisplayedSection()) {
$href = $this->pager_pager->getSectionUri();
$section_begin_page = $this->pager_pager->getSectionBeginPage();
$section_end_page = $this->pager_pager->getSectionEndPage();
 ?><a href="<?php echo htmlspecialchars($href,3); ?>">[<?php echo htmlspecialchars($section_begin_page,3); ?>..<?php echo htmlspecialchars($section_end_page,3); ?>]</a><?php }
$this->pager_pager->nextSection();
}
}
 ?>

      <?php if ($this->pager_pager->hasNext()) {
$href = $this->pager_pager->getPageUri($this->pager_pager->getCurrentPage() + 1 );
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><img src="/shared/cms/images/button/arrow_next.gif"  width='18' height='17' alt='&#62;'/></a><?php }
 ?>

      <?php if (!$this->pager_pager->isLast()) {
$href = $this->pager_pager->getLastPageUri();
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><img src="/shared/cms/images/button/arrow_last.gif"  width='18' height='17' alt='&#187;'/></a><?php }
 ?>

    </div>
  <?php  } ?>

<?php 
}

function _templatec7983559f3603708387308f65110da4d($EN= array()) {
if($EN) extract($EN); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $EQ='';
$ER = $item;
if((is_array($ER) || ($ER instanceof ArrayAccess)) && isset($ER['id'])) { $EQ = $ER['id'];
}else{ $EQ = '';}
$ET = array();
$ES = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$EQ));
foreach($ES as $key => $value) $ET[trim($key)] = trim($value);
$EU = false;
echo lmbToolkit :: instance()->getRoutesUrl($ET, '', $EU);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template3ba376e26c7c2f033c7f0297ea9c03ec($FB= array()) {
if($FB) extract($FB); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Удалить';
    $icon = isset($icon) ? $icon : "delete";
  ?>
  <a href='#' onclick="if(confirm('Вы действительно желаете удалить выбранный объект?')) {jQuery.post('<?php $FF = array();
$FE = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:delete',$controller));
foreach($FE as $key => $value) $FF[trim($key)] = trim($value);
$FG = false;
echo lmbToolkit :: instance()->getRoutesUrl($FF, '', $FG);
 ?>', {ids:<?php $FH='';
$FI = $item;
if((is_array($FI) || ($FI instanceof ArrayAccess)) && isset($FI['id'])) { $FH = $FI['id'];
}else{ $FH = '';}
echo htmlspecialchars($FH,3); ?>}, function(){document.location.reload()})}"  title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Удалить'); ?>"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"delete"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _render_tree8b9a9da98e27c965414eb8a539400855($FT,$level,$FV= array()) {
if($FV) extract($FV);$FU=0;
foreach($FT as $item) {
$counter = $FU+1;
if(!$FU) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><a href="<?php $FW='';
$FX = $item;
if((is_array($FX) || ($FX instanceof ArrayAccess)) && isset($FX['sort2'])) { $FW = $FX['sort2'];
}else{ $FW = '';}
echo htmlspecialchars($FW,3); ?>"><?php echo htmlspecialchars($counter,3); ?>-<?php $GA='';
$GB = $item;
if((is_array($GB) || ($GB instanceof ArrayAccess)) && isset($GB['sort1'])) { $GA = $GB['sort1'];
}else{ $GA = '';}
echo htmlspecialchars($GA,3); ?></a><?php if(isset($item["kids"])) {$this->_render_tree8b9a9da98e27c965414eb8a539400855($item["kids"], $level + 1, array());
} ?></li>
                    <?php $FU++;
}
if(count($FT) == 0) { ?>

                    tree is empty
                    <?php }if($FU) {
 ?>


                    
                </ul>
                <?php }

}

function _render_tree08a3fced8010648238cfc9a7c5e4769f($GI,$level,$GK= array()) {
if($GK) extract($GK);$GJ=0;
foreach($GI as $item) {
$counter = $GJ+1;
if(!$GJ) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><a href="<?php $GL='';
$GM = $item;
if((is_array($GM) || ($GM instanceof ArrayAccess)) && isset($GM['identifier'])) { $GL = $GM['identifier'];
}else{ $GL = '';}
echo htmlspecialchars($GL,3); ?>"><?php echo htmlspecialchars($counter,3); ?>-<?php $GP='';
$GQ = $item;
if((is_array($GQ) || ($GQ instanceof ArrayAccess)) && isset($GQ['id'])) { $GP = $GQ['id'];
}else{ $GP = '';}
echo htmlspecialchars($GP,3); ?></a><?php if(isset($item["kids"])) {$this->_render_tree08a3fced8010648238cfc9a7c5e4769f($item["kids"], $level + 1, array());
} ?></li>
                    <?php $GJ++;
}
if(count($GI) == 0) { ?>

                    tree is empty
                    <?php }if($GJ) {
 ?>


                    
                </ul>
                <?php }

}

function _render_treea16f48803db5a71f4163c63109ab0c03($GT,$level,$GV= array()) {
if($GV) extract($GV);$GU=0;
foreach($GT as $item) {
if(!$GU) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><?php $GW='';
$GX = $item;
if((is_array($GX) || ($GX instanceof ArrayAccess)) && isset($GX['title'])) { $GW = $GX['title'];
}else{ $GW = '';}
echo htmlspecialchars($GW,3);if(isset($item["kids"])) {$this->_render_treea16f48803db5a71f4163c63109ab0c03($item["kids"], $level + 1, array());
} ?></li>
                    <?php $GU++;
}
if($GU) {
 ?>

                </ul>
                <?php }

}

function _render_tree143123a9eef125b4e42502716f3393c4($HA,$level,$HC= array()) {
if($HC) extract($HC);$HB=0;
foreach($HA as $item) {
if(!$HB) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><?php $HD='';
$HE = $item;
if((is_array($HE) || ($HE instanceof ArrayAccess)) && isset($HE['id'])) { $HD = $HE['id'];
}else{ $HD = '';}
echo htmlspecialchars($HD,3);if(isset($item["preloaded_children"])) {$this->_render_tree143123a9eef125b4e42502716f3393c4($item["preloaded_children"], $level + 1, array());
} ?></li>
                    <?php $HB++;
}
if($HB) {
 ?>

                </ul>
                <?php }

}

function _render_treea66589794fc2ca6bf9c7494868f5d360($HJ,$level,$HL= array()) {
if($HL) extract($HL);$HK=0;
foreach($HJ as $item) {
$counter = $HK+1;
if(!$HK) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><?php echo htmlspecialchars($counter,3); ?>)<?php $HO='';
$HP = $item;
if((is_array($HP) || ($HP instanceof ArrayAccess)) && isset($HP['title'])) { $HO = $HP['title'];
}else{ $HO = '';}
echo htmlspecialchars($HO,3); ?>

                        <?php if(isset($item["kids"])) {$this->_render_treea66589794fc2ca6bf9c7494868f5d360($item["kids"], $level + 1, array());
} ?>

                    </li>
                    <?php $HK++;
}
if($HK) {
 ?>

                </ul>
                <?php }

}

function _render_treea9393b14036680aa17bedc46b78f6b80($HU,$level,$HW= array()) {
if($HW) extract($HW);$HV=0;
foreach($HU as $item) {
$counter = $HV+1;
if(!$HV) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><?php echo htmlspecialchars($counter,3); ?>)<?php $HZ='';
$IA = $item;
if((is_array($IA) || ($IA instanceof ArrayAccess)) && isset($IA['id'])) { $HZ = $IA['id'];
}else{ $HZ = '';}
echo htmlspecialchars($HZ,3); ?>

                        <?php if(isset($item["preloaded_children"])) {$this->_render_treea9393b14036680aa17bedc46b78f6b80($item["preloaded_children"], $level + 1, array());
} ?>

                    </li>
                    <?php $HV++;
}
if($HV) {
 ?>

                </ul>
                <?php }

}

function _render_tree377129f458a7593c2c47f4448fb5e694($IH,$level,$IJ= array()) {
if($IJ) extract($IJ);$II=0;
foreach($IH as $node) {
$counter = $II+1;
if(!$II) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><?php echo htmlspecialchars($prefix,3); ?>.<?php echo htmlspecialchars($counter,3); ?>)<?php $IO='';
$IP = $node;
if((is_array($IP) || ($IP instanceof ArrayAccess)) && isset($IP['title'])) { $IO = $IP['title'];
}else{ $IO = '';}
echo htmlspecialchars($IO,3); ?>

                        <?php $new_prefix = $prefix . "." . $counter; ?>
                        <?php if(isset($node["kids"])) {$this->_render_tree377129f458a7593c2c47f4448fb5e694($node["kids"], $level + 1, array('prefix' => $new_prefix,));
} ?>

                    </li>
                    <?php $II++;
}
if($II) {
 ?>

                </ul>
                <?php }

}

function _render_treeac69e1a01bccb5fcbd203f3937541e58($IY,$level,$JA= array()) {
if($JA) extract($JA);$IZ=0;
foreach($IY as $node) {
$counter = $IZ+1;
if(!$IZ) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><?php echo htmlspecialchars($prefix,3); ?>.<?php echo htmlspecialchars($counter,3); ?>)<?php $JF='';
$JG = $node;
if((is_array($JG) || ($JG instanceof ArrayAccess)) && isset($JG['id'])) { $JF = $JG['id'];
}else{ $JF = '';}
echo htmlspecialchars($JF,3); ?>

                        <?php $new_prefix = $prefix . "." . $counter; ?>
                        <?php if(isset($node["preloaded_children"])) {$this->_render_treeac69e1a01bccb5fcbd203f3937541e58($node["preloaded_children"], $level + 1, array('prefix' => $new_prefix,));
} ?>

                    </li>
                    <?php $IZ++;
}
if($IZ) {
 ?>

                </ul>
                <?php }

}

function _render_tree6807383fa0002c4fadca2296943e701a($JL,$level,$JN= array()) {
if($JN) extract($JN);$JM=0;
foreach($JL as $item) {
if(!$JM) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><?php $JO='';
$JP = $item;
if((is_array($JP) || ($JP instanceof ArrayAccess)) && isset($JP['title'])) { $JO = $JP['title'];
}else{ $JO = '';}
echo htmlspecialchars($JO,3);if(isset($item["kids"])) {$this->_render_tree6807383fa0002c4fadca2296943e701a($item["kids"], $level + 1, array());
} ?></li>
                    <?php $JM++;
}
if($JM) {
 ?>

                </ul>
                <?php }

}

function _render_treed6c5383bf5d865eae7db4637e3949ee0($JS,$level,$JU= array()) {
if($JU) extract($JU);$JT=0;
foreach($JS as $item) {
if(!$JT) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><?php $JV='';
$JW = $item;
if((is_array($JW) || ($JW instanceof ArrayAccess)) && isset($JW['id'])) { $JV = $JW['id'];
}else{ $JV = '';}
echo htmlspecialchars($JV,3);if(isset($item["preloaded_children"])) {$this->_render_treed6c5383bf5d865eae7db4637e3949ee0($item["preloaded_children"], $level + 1, array());
} ?></li>
                    <?php $JT++;
}
if($JT) {
 ?>

                </ul>
                <?php }

}

function _render_tree843fb5b303e01fa1520e86b6c4ba0f1f($JZ,$level,$KB= array()) {
if($KB) extract($KB);$KA=0;
foreach($JZ as $item) {
if(!$KA) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><?php $KC='';
$KD = $item;
if((is_array($KD) || ($KD instanceof ArrayAccess)) && isset($KD['identifier'])) { $KC = $KD['identifier'];
}else{ $KC = '';}
echo htmlspecialchars($KC,3);if(isset($item["preloaded_children"])) {$this->_render_tree843fb5b303e01fa1520e86b6c4ba0f1f($item["preloaded_children"], $level + 1, array());
} ?></li>
                    <?php $KA++;
}
if($KA) {
 ?>

                </ul>
                <?php }

}

function _render_tree0c9f37d958d7611eb2e7adddd29a962f($KK,$level,$KM= array()) {
if($KM) extract($KM);$KL=0;
foreach($KK as $item) {
$counter = $KL+1;
if(!$KL) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><?php echo htmlspecialchars($counter,3); ?>-<?php $KP='';
$KQ = $item;
if((is_array($KQ) || ($KQ instanceof ArrayAccess)) && isset($KQ['id'])) { $KP = $KQ['id'];
}else{ $KP = '';}
echo htmlspecialchars($KP,3); ?> <?php if(isset($item["preloaded_children"])) {$this->_render_tree0c9f37d958d7611eb2e7adddd29a962f($item["preloaded_children"], $level + 1, array());
} ?></li>
                    <?php $KL++;
}
if(count($KK) == 0) { ?>

                    tree_array is empty
                    <?php }if($KL) {
 ?>

                    
                </ul>
                <?php }

}

function __slotHandler2ad55b58d8ffd22e49692f738756dfbe($LR= array()) {
if($LR) extract($LR);
}

function __slotHandlercbedf88a95810f2795b03966c77736bf($MO= array()) {
if($MO) extract($MO);
}

function __slotHandler6ccce7fa36ae9b60f87d922e4d04fa2c($MP= array()) {
if($MP) extract($MP); ?>

  function openWindowForSelectors(title, url, obj)
  {
    var params = '&';
    jQuery(obj).parents('.list').find('input[checked][name="ids[]"][type="checkbox"]').each(function(){ params += this.name + '=' + this.value + '&';});
    tb_show(title, url + params + 'TB_iframe=true&width=640&height=480');
  }

  function openWindowForSavePriority(title, url, obj)
  {
    var params = '&';
    jQuery(obj).parent().parent().parent().find('.priority').each(function(){params += this.name + '=' + this.value + '&';});
    tb_show(title, url + params + 'TB_iframe=true&width=640&height=480');
  }
<?php 
}

function __slotHandler2fcdfab1ac094aa0c28f3c24feee4795($MQ= array()) {
if($MQ) extract($MQ);
}

}
}
$macro_executor_class='MacroTemplateExecutor7c6d392a56e3573f7420ba6e0e40f04f';