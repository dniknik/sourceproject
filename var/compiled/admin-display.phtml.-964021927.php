<?php /* This file is generated from /home/dnn/web/webshop/template/admin/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor2b8a1a516ccf7a62c6c20d3f756cdd0e', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor2b8a1a516ccf7a62c6c20d3f756cdd0e extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('admin_page_layout.phtml', 'content_zone', 'admin_page_layout.phtml'); ?>

<?php 
}

function __staticInclude1($file,$into,$file) {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler6dd7d3a33815713fe592758b6ce59f76(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler238c1745421f03048a81a1fd09ee2b6e(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler8098b46d327c05ca8500743e2c370a7a(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $BS = 0;$BU = $this->navigation;

if(!is_array($BU) && !($BU instanceof Iterator) && !($BU instanceof IteratorAggregate)) {
$BU = array();}
$BT = $BU;
foreach($BT as $item) {if($BS == 0) { ?>

        <?php } ?>

        <dt class='<?php $BW='';
$BX = $item;
if((is_array($BX) || ($BX instanceof ArrayAccess)) && isset($BX['id'])) { $BW = $BX['id'];
}else{ $BW = '';}
echo htmlspecialchars($BW,3); ?>'><img src='<?php $BY='';
$BZ = $item;
if((is_array($BZ) || ($BZ instanceof ArrayAccess)) && isset($BZ['icon'])) { $BY = $BZ['icon'];
}else{ $BY = '';}
echo htmlspecialchars($BY,3); ?>'/> <?php $CA='';
$CB = $item;
if((is_array($CB) || ($CB instanceof ArrayAccess)) && isset($CB['title'])) { $CA = $CB['title'];
}else{ $CA = '';}
echo htmlspecialchars($CA,3); ?> </dt>
        <dd>
          <?php $CC='';
$CD = $item;
if((is_array($CD) || ($CD instanceof ArrayAccess)) && isset($CD['children'])) { $CC = $CD['children'];
}else{ $CC = '';}
$CG = 0;$CI = $CC;

if(!is_array($CI) && !($CI instanceof Iterator) && !($CI instanceof IteratorAggregate)) {
$CI = array();}
$CH = $CI;
foreach($CH as $sub_item) {if($CG == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $CK='';
$CL = $sub_item;
if((is_array($CL) || ($CL instanceof ArrayAccess)) && isset($CL['icon'])) { $CK = $CL['icon'];
}else{ $CK = '';}
echo htmlspecialchars($CK,3); ?>'/> <a href='<?php $CM='';
$CN = $sub_item;
if((is_array($CN) || ($CN instanceof ArrayAccess)) && isset($CN['url'])) { $CM = $CN['url'];
}else{ $CM = '';}
echo htmlspecialchars($CM,3); ?>'><?php $CO='';
$CP = $sub_item;
if((is_array($CP) || ($CP instanceof ArrayAccess)) && isset($CP['title'])) { $CO = $CP['title'];
}else{ $CO = '';}
echo htmlspecialchars($CO,3); ?></a>
              </li><?php $CG++;}if($CG > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $BS++;}if($BS > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler77476821f797cf899468000dfbffc9db(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler7576ef135bf4ff96bd37862edb39e22b(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler05540047e5da1ea9cf3e24d09daf30cf(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler5bcc5ecab673fb988461837bbc1434f7(array()); ?>


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

function __slotHandler6dd7d3a33815713fe592758b6ce59f76($I= array()) {
if($I) extract($I);
}

function __slotHandler238c1745421f03048a81a1fd09ee2b6e($J= array()) {
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
$this->_template32713f6096937c3af08c34ab87822c72(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template4d77b387b37c4553d8c2e0479ff4864f(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template32713f6096937c3af08c34ab87822c72($M= array()) {
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

function _template4d77b387b37c4553d8c2e0479ff4864f($X= array()) {
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

function __slotHandler8098b46d327c05ca8500743e2c370a7a($BP= array()) {
if($BP) extract($BP); ?>

<div id="dashboard">
  <h1>Панель управления</h1>

  <p><b>Добро пожаловать в панель управления</b></p>

  <p><b>Выберите модуль с которым хотите работать в меню слева</b></p>
</div>
<?php 
}

function __slotHandler77476821f797cf899468000dfbffc9db($CQ= array()) {
if($CQ) extract($CQ);
}

function __slotHandler7576ef135bf4ff96bd37862edb39e22b($DN= array()) {
if($DN) extract($DN);
}

function __slotHandler05540047e5da1ea9cf3e24d09daf30cf($DO= array()) {
if($DO) extract($DO);
}

function __slotHandler5bcc5ecab673fb988461837bbc1434f7($DP= array()) {
if($DP) extract($DP);
}

}
}
$macro_executor_class='MacroTemplateExecutor2b8a1a516ccf7a62c6c20d3f756cdd0e';