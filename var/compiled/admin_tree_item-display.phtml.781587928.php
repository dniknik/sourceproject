<?php /* This file is generated from /home/dnn/web/webshop/template/admin_tree_item/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor33212f63698b4771ca1205958072c3ca', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
class MacroTemplateExecutor33212f63698b4771ca1205958072c3ca extends lmbMacroTemplateExecutor {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlerfbc3c6b13efd01e61f389a971c733203(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler00fb49048f5d8acb77e65973e6c209a3(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandlerc2955fb35c5a31b16d395f3404a94767(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $DV = 0;$DX = $this->navigation;

if(!is_array($DX) && !($DX instanceof Iterator) && !($DX instanceof IteratorAggregate)) {
$DX = array();}
$DW = $DX;
foreach($DW as $item) {if($DV == 0) { ?>

        <?php } ?>

        <dt class='<?php $DZ='';
$EA = $item;
if((is_array($EA) || ($EA instanceof ArrayAccess)) && isset($EA['id'])) { $DZ = $EA['id'];
}else{ $DZ = '';}
echo htmlspecialchars($DZ,3); ?>'><img src='<?php $EB='';
$EC = $item;
if((is_array($EC) || ($EC instanceof ArrayAccess)) && isset($EC['icon'])) { $EB = $EC['icon'];
}else{ $EB = '';}
echo htmlspecialchars($EB,3); ?>'/> <?php $ED='';
$EE = $item;
if((is_array($EE) || ($EE instanceof ArrayAccess)) && isset($EE['title'])) { $ED = $EE['title'];
}else{ $ED = '';}
echo htmlspecialchars($ED,3); ?> </dt>
        <dd>
          <?php $EF='';
$EG = $item;
if((is_array($EG) || ($EG instanceof ArrayAccess)) && isset($EG['children'])) { $EF = $EG['children'];
}else{ $EF = '';}
$EJ = 0;$EL = $EF;

if(!is_array($EL) && !($EL instanceof Iterator) && !($EL instanceof IteratorAggregate)) {
$EL = array();}
$EK = $EL;
foreach($EK as $sub_item) {if($EJ == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $EN='';
$EO = $sub_item;
if((is_array($EO) || ($EO instanceof ArrayAccess)) && isset($EO['icon'])) { $EN = $EO['icon'];
}else{ $EN = '';}
echo htmlspecialchars($EN,3); ?>'/> <a href='<?php $EP='';
$EQ = $sub_item;
if((is_array($EQ) || ($EQ instanceof ArrayAccess)) && isset($EQ['url'])) { $EP = $EQ['url'];
}else{ $EP = '';}
echo htmlspecialchars($EP,3); ?>'><?php $ER='';
$ES = $sub_item;
if((is_array($ES) || ($ES instanceof ArrayAccess)) && isset($ES['title'])) { $ER = $ES['title'];
}else{ $ER = '';}
echo htmlspecialchars($ER,3); ?></a>
              </li><?php $EJ++;}if($EJ > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $DV++;}if($DV > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandlerbf2c1ad35bf6b4b4e471e61bbce960f9(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler038f1f0bc569442ac304f0fbcf952465(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandlerf18f346d6cf81d4f8ac6612df0581f62(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler408a37f1197860bd0802a9ac0cbd1683(array()); ?>


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

function __slotHandlerfbc3c6b13efd01e61f389a971c733203($I= array()) {
if($I) extract($I);
}

function __slotHandler00fb49048f5d8acb77e65973e6c209a3($J= array()) {
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
$this->_template6034c203cdb130e1fac696fa730110bc(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template54be43597a02d9b9d1bcf739e1403b7a(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template6034c203cdb130e1fac696fa730110bc($M= array()) {
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

function _template54be43597a02d9b9d1bcf739e1403b7a($X= array()) {
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

function __slotHandlerc2955fb35c5a31b16d395f3404a94767($BP= array()) {
if($BP) extract($BP); ?>


<?php $this->__staticInclude3('_admin/selectors.phtml'); ?>

<?php $this->__staticInclude4('_admin_object/actions.phtml'); ?>



<div id="header">
    <h1>
        Preference MENU: admin_tree_item
        <?php
        echo sizeof($this->items);
        //lmb_var_debug($this->items);
        ?>
    </h1>
    <a href="<?php $BR = array();
$BQ = lmbArrayHelper :: explode(',',':', 'action:node');
foreach($BQ as $key => $value) $BR[trim($key)] = trim($value);
$BS = false;
echo lmbToolkit :: instance()->getRoutesUrl($BR, '', $BS);
 ?>">Категории</a> &nbsp;|&nbsp;
    <a href="<?php $BU = array();
$BT = lmbArrayHelper :: explode(',',':', 'action:branch');
foreach($BT as $key => $value) $BU[trim($key)] = trim($value);
$BV = false;
echo lmbToolkit :: instance()->getRoutesUrl($BU, '', $BV);
 ?>">"Ветки" дерева</a>

    <div class="header_actions">
        <a href='<?php $BX = array();
$BW = lmbArrayHelper :: explode(',',':', 'action:create');
foreach($BW as $key => $value) $BX[trim($key)] = trim($value);
$BY = false;
echo lmbToolkit :: instance()->getRoutesUrl($BX, '', $BY);
 ?>'
           title="Create preference" class='thickbox'>
            <img src='/shared/images/icons/page_white_add.png'/> Create preference
        </a>
    </div>

</div>

<div id="body">
    <?php $CD = 0;$CF = $this->items;

if(!is_array($CF) && !($CF instanceof Iterator) && !($CF instanceof IteratorAggregate)) {
$CF = array();}
$CE = $CF;
foreach($CE as $item) {$parity = (( ($CD + 1) % 2) ? "odd" : "even");if($CD == 0) { ?>

    <?php $this->__staticInclude5('_admin_object/actions.phtml'); ?>

    <div class="list">

        <table>
            <tr>
                <th><?php $this->_template9bf7325b90fa26f8aa91063adcd0e51b(array('template' => 'selectors_toggler',)); ?></th>
                <th>#ID</th>
                <th>id_sys_tree</th>
                <th>id_pr</th>
                <th>value_pr</th>
                <th>is_branch</th>

                <th>Actions</th>
            </tr>
            <?php } ?>

            <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
                <td><?php $CK='';
$CL = $item;
if((is_array($CL) || ($CL instanceof ArrayAccess)) && isset($CL['id'])) { $CK = $CL['id'];
}else{ $CK = '';}
$this->_templatef9b3b89ca0acc199f3f5f6a6aefd4d8d(array('template' => 'selector','value' => $CK,)); ?></td>
                <td>#<?php $CP='';
$CQ = $item;
if((is_array($CQ) || ($CQ instanceof ArrayAccess)) && isset($CQ['id'])) { $CP = $CQ['id'];
}else{ $CP = '';}
echo htmlspecialchars($CP,3); ?></td>
                <td>item.id_sys_tree</td>
                <td>item.id_pr</td>
                <td>item.value_pr</td>
                <td>item.is_branch</td>

                <td class='actions'>
                    <?php $this->_templatef7d27b67e41051633bfc0df451e88ef9(array('template' => 'object_action_edit','item' => $item,'icon' => 'page_white_edit',)); ?>

                    <?php $this->_templateea3056db79af874aab0169af70d606b8(array('template' => 'object_action_delete','item' => $item,'icon' => 'page_white_delete',)); ?>

                </td>
            </tr>
            <?php $CD++;}if($CD > 0) { ?>

            
        </table>
    </div>
    <?php }if($CD == 0) { ?>

            <div class="empty_list">Empty items</div>
            <?php } ?>


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

function __staticInclude5($file) {
 ?>








<?php 
}

function _template9bf7325b90fa26f8aa91063adcd0e51b($CH= array()) {
if($CH) extract($CH); ?>

  <input type='checkbox' onclick='toggle_selected(this);' name='mark_all'/>
<?php 
}

function _templatef9b3b89ca0acc199f3f5f6a6aefd4d8d($CM= array()) {
if($CM) extract($CM); ?>

  <input type='checkbox' name="ids[]" value='<?php echo htmlspecialchars($value,3); ?>'/>
<?php 
}

function _templatef7d27b67e41051633bfc0df451e88ef9($CT= array()) {
if($CT) extract($CT); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $CW='';
$CX = $item;
if((is_array($CX) || ($CX instanceof ArrayAccess)) && isset($CX['id'])) { $CW = $CX['id'];
}else{ $CW = '';}
$CZ = array();
$CY = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$CW));
foreach($CY as $key => $value) $CZ[trim($key)] = trim($value);
$DA = false;
echo lmbToolkit :: instance()->getRoutesUrl($CZ, '', $DA);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _templateea3056db79af874aab0169af70d606b8($DH= array()) {
if($DH) extract($DH); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Удалить';
    $icon = isset($icon) ? $icon : "delete";
  ?>
  <a href='#' onclick="if(confirm('Вы действительно желаете удалить выбранный объект?')) {jQuery.post('<?php $DL = array();
$DK = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:delete',$controller));
foreach($DK as $key => $value) $DL[trim($key)] = trim($value);
$DM = false;
echo lmbToolkit :: instance()->getRoutesUrl($DL, '', $DM);
 ?>', {ids:<?php $DN='';
$DO = $item;
if((is_array($DO) || ($DO instanceof ArrayAccess)) && isset($DO['id'])) { $DN = $DO['id'];
}else{ $DN = '';}
echo htmlspecialchars($DN,3); ?>}, function(){document.location.reload()})}"  title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Удалить'); ?>"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"delete"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function __slotHandlerbf2c1ad35bf6b4b4e471e61bbce960f9($ET= array()) {
if($ET) extract($ET);
}

function __slotHandler038f1f0bc569442ac304f0fbcf952465($FQ= array()) {
if($FQ) extract($FQ);
}

function __slotHandlerf18f346d6cf81d4f8ac6612df0581f62($FR= array()) {
if($FR) extract($FR); ?>

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

function __slotHandler408a37f1197860bd0802a9ac0cbd1683($FS= array()) {
if($FS) extract($FS);
}

}
}
$macro_executor_class='MacroTemplateExecutor33212f63698b4771ca1205958072c3ca';