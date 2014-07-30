<?php /* This file is generated from /home/dnn/web/webshop/template/admin_uicategory/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor97d602daf285a26b5be75057d33e58df', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroJSCheckboxWidget.class.php');
class MacroTemplateExecutor97d602daf285a26b5be75057d33e58df extends lmbMacroTemplateExecutor {

function _init() {
$this->form_object_form = new lmbMacroFormWidget('object_form');
$this->form_object_form->setAttributes(array (
  'id' => 'object_form',
  'name' => 'user_form',
  'method' => 'post',
  'enctype' => 'multipart/form-data',
));
$this->input_id001 = new lmbMacroInputWidget('id_sys_tree');
$this->input_id001->setAttributes(array (
  'name' => 'id_sys_tree',
  'type' => 'text',
  'title' => 'id_sys_tree',
  'disabled' => 'true',
  'style' => 'width: 100px;',
));
$this->input_id001->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id001);
$this->input_id002 = new lmbMacroInputWidget('value_pr');
$this->input_id002->setAttributes(array (
  'name' => 'value_pr',
  'type' => 'text',
  'title' => 'value_pr',
  'list' => 'value_pr',
  'style' => 'width: 100px;',
));
$this->input_id002->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id002);
$this->js_checkbox_id003 = new lmbMacroJSCheckboxWidget('is_branch');
$this->js_checkbox_id003->setAttributes(array (
  'name' => 'is_branch',
  'id' => 'is_branch',
  'type' => 'checkbox',
));
$this->js_checkbox_id003->setForm($this->form_object_form);
$this->form_object_form->addChild($this->js_checkbox_id003);

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('admin_modal_page_layout.phtml', 'admin_modal_page_layout.phtml'); ?>

--><?php 
}

function __staticInclude1($file,$file) {
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Powered by LIMB | http://www.limb-project.com/ -->
<!-- Designed by BIT | http://www.bit-creative.com/ -->
<?php  $this->static_files_version = lmb_env_get('CMS_STATIC_FILES_VERSION'); ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" />
  <!--[if IE]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" /><![endif]-->
  <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie6.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" /><![endif]-->
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler601fc0bdb7b94372d64f321bab0db2d9(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler1cf5f06865743bf2c8e5d2fb1fc5a879(array()); ?>

  </style>
</head>
<body>
  <div id="popup_wrapper">
    <?php $this->__staticInclude2('_admin/notify_zone.phtml'); ?>

    <?php if(isset($this->__slot_handlers_icon)) {foreach($this->__slot_handlers_icon as $__slot_handler_icon) {call_user_func_array($__slot_handler_icon, array(array()));}}$this->__slotHandler03aa9a28d2bb97a815cb2a2f46769484(array()); ?>

    <?php if(isset($this->__slot_handlers_title)) {foreach($this->__slot_handlers_title as $__slot_handler_title) {call_user_func_array($__slot_handler_title, array(array()));}}$this->__slotHandler38b299ffcf24ebdde642a2fbcf417313(array()); ?>

    <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler32f9b3c69a7f138f3247f1a09d5e4e6c(array()); ?>

  </div>
</body>
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
<?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler3c1465dc80399117cbd0c041c9f96778(array()); ?>


<script type="text/javascript">
  <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler07fe91fa49881b533f60d788f3bbc101(array()); ?>


  jQuery(window).ready(function()
  {
    <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler1108f43f70af99d01a507d9feca9f8e3(array()); ?>

  });
</script>
</html>



<?php 
}

function __slotHandler601fc0bdb7b94372d64f321bab0db2d9($G= array()) {
if($G) extract($G);
}

function __slotHandler1cf5f06865743bf2c8e5d2fb1fc5a879($H= array()) {
if($H) extract($H);
}

function __staticInclude2($file) {
 ?>


<?php 
  $flashbox = $this->toolkit->getFlashBox();
  if($flashbox->hasErrors() || $flashbox->hasMessages()){ ?>
    <div id="flashbox" class="flashbox">
      <ul>
        <?php $I='';
$J = $flashbox;
$I = $J->getErrors();
$this->_templatee9598cd86126fa37d5ad8ba0d0e89d36(array('template' => 'flashbox','messages' => $I,'box_class' => 'error',)); ?>

        <?php $T='';
$U = $flashbox;
$T = $U->getMessages();
$this->_template4ebaa399b307e94f9aed228deb2dc01b(array('template' => 'flashbox','messages' => $T,'box_class' => 'message',)); ?>

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

function _templatee9598cd86126fa37d5ad8ba0d0e89d36($K= array()) {
if($K) extract($K); ?>

  <?php $N = 0;$P = $messages;

if(!is_array($P) && !($P instanceof Iterator) && !($P instanceof IteratorAggregate)) {
$P = array();}
$O = $P;
foreach($O as $item) {if($N == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $N++;}if($N > 0) { ?>

  <?php } ?>

<?php 
}

function _template4ebaa399b307e94f9aed228deb2dc01b($V= array()) {
if($V) extract($V); ?>

  <?php $Y = 0;$BB = $messages;

if(!is_array($BB) && !($BB instanceof Iterator) && !($BB instanceof IteratorAggregate)) {
$BB = array();}
$Z = $BB;
foreach($Z as $item) {if($Y == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $Y++;}if($Y > 0) { ?>

  <?php } ?>

<?php 
}

function __slotHandler03aa9a28d2bb97a815cb2a2f46769484($BF= array()) {
if($BF) extract($BF);
}

function __slotHandler38b299ffcf24ebdde642a2fbcf417313($BG= array()) {
if($BG) extract($BG);
}

function __slotHandler32f9b3c69a7f138f3247f1a09d5e4e6c($BH= array()) {
if($BH) extract($BH); ?>



<!--
<?php $this->__staticInclude3('admin_page_layout.phtml', 'admin_page_layout.phtml'); ?>


<!--
<?php 
}

function __staticInclude3($file,$file) {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler9629b1d2dacece8a3d6cd3647aa933f2(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler1881cdc951308729abf2786a22717014(array()); ?>

  </style>
</head>
<body>
  <div id="wrapper">
    <?php $this->__staticInclude4('_admin/notify_zone.phtml'); ?>

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
        <li><?php $CS='';
$CT = $this->toolkit;
if((is_array($CT) || ($CT instanceof ArrayAccess)) && isset($CT['cms_user'])) { $CS = $CT['cms_user'];
if((is_array($CS) || ($CS instanceof ArrayAccess)) && isset($CS['login'])) { $CS = $CS['login'];
}else{ $CS = '';}
}else{ $CS = '';}
echo htmlspecialchars($CS,3); ?> [ <?php $CU='';
$CV = $this->toolkit;
if((is_array($CV) || ($CV instanceof ArrayAccess)) && isset($CV['cms_user'])) { $CU = $CV['cms_user'];
if((is_array($CU) || ($CU instanceof ArrayAccess)) && isset($CU['name'])) { $CU = $CU['name'];
}else{ $CU = '';}
}else{ $CU = '';}
echo htmlspecialchars($CU,3); ?> ]</li>
        <li><a href='/cms_user/logout' class='logout'><?php 
    echo lmb_i18n('Exit','cms');
         ?></a></li>
      </ul>
    </div>

    <div id='main_col'>
      <div id="main_col_content">
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandlere8606ba043f03b04affbd805450d12c4(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $GW = 0;$GY = $this->navigation;

if(!is_array($GY) && !($GY instanceof Iterator) && !($GY instanceof IteratorAggregate)) {
$GY = array();}
$GX = $GY;
foreach($GX as $item) {if($GW == 0) { ?>

        <?php } ?>

        <dt class='<?php $HA='';
$HB = $item;
if((is_array($HB) || ($HB instanceof ArrayAccess)) && isset($HB['id'])) { $HA = $HB['id'];
}else{ $HA = '';}
echo htmlspecialchars($HA,3); ?>'><img src='<?php $HC='';
$HD = $item;
if((is_array($HD) || ($HD instanceof ArrayAccess)) && isset($HD['icon'])) { $HC = $HD['icon'];
}else{ $HC = '';}
echo htmlspecialchars($HC,3); ?>'/> <?php $HE='';
$HF = $item;
if((is_array($HF) || ($HF instanceof ArrayAccess)) && isset($HF['title'])) { $HE = $HF['title'];
}else{ $HE = '';}
echo htmlspecialchars($HE,3); ?> </dt>
        <dd>
          <?php $HG='';
$HH = $item;
if((is_array($HH) || ($HH instanceof ArrayAccess)) && isset($HH['children'])) { $HG = $HH['children'];
}else{ $HG = '';}
$HK = 0;$HM = $HG;

if(!is_array($HM) && !($HM instanceof Iterator) && !($HM instanceof IteratorAggregate)) {
$HM = array();}
$HL = $HM;
foreach($HL as $sub_item) {if($HK == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $HO='';
$HP = $sub_item;
if((is_array($HP) || ($HP instanceof ArrayAccess)) && isset($HP['icon'])) { $HO = $HP['icon'];
}else{ $HO = '';}
echo htmlspecialchars($HO,3); ?>'/> <a href='<?php $HQ='';
$HR = $sub_item;
if((is_array($HR) || ($HR instanceof ArrayAccess)) && isset($HR['url'])) { $HQ = $HR['url'];
}else{ $HQ = '';}
echo htmlspecialchars($HQ,3); ?>'><?php $HS='';
$HT = $sub_item;
if((is_array($HT) || ($HT instanceof ArrayAccess)) && isset($HT['title'])) { $HS = $HT['title'];
}else{ $HS = '';}
echo htmlspecialchars($HS,3); ?></a>
              </li><?php $HK++;}if($HK > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $GW++;}if($GW > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler9cd4da4686669626788142352a9bc0db(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler22d7de3ea736becba5dbc605a0686f5d(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandlerb2f43f147759c5e7b30dbb5126e96736(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler6bfefc97b87424aa9b57ba4fa91747e2(array()); ?>


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



<?php $this->__staticInclude6('_admin/selectors.phtml'); ?>

<?php $this->__staticInclude7('_admin_object/actions.phtml'); ?>




<?php 
}

function __slotHandler9629b1d2dacece8a3d6cd3647aa933f2($BQ= array()) {
if($BQ) extract($BQ);
}

function __slotHandler1881cdc951308729abf2786a22717014($BR= array()) {
if($BR) extract($BR);
}

function __staticInclude4($file) {
 ?>


<?php 
  $flashbox = $this->toolkit->getFlashBox();
  if($flashbox->hasErrors() || $flashbox->hasMessages()){ ?>
    <div id="flashbox" class="flashbox">
      <ul>
        <?php $BS='';
$BT = $flashbox;
$BS = $BT->getErrors();
$this->_template571433b58d424043014b1896b28975c9(array('template' => 'flashbox','messages' => $BS,'box_class' => 'error',)); ?>

        <?php $CD='';
$CE = $flashbox;
$CD = $CE->getMessages();
$this->_template381c32345b420f23986986a122fb9b1c(array('template' => 'flashbox','messages' => $CD,'box_class' => 'message',)); ?>

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

function _template571433b58d424043014b1896b28975c9($BU= array()) {
if($BU) extract($BU); ?>

  <?php $BX = 0;$BZ = $messages;

if(!is_array($BZ) && !($BZ instanceof Iterator) && !($BZ instanceof IteratorAggregate)) {
$BZ = array();}
$BY = $BZ;
foreach($BY as $item) {if($BX == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $BX++;}if($BX > 0) { ?>

  <?php } ?>

<?php 
}

function _template381c32345b420f23986986a122fb9b1c($CF= array()) {
if($CF) extract($CF); ?>

  <?php $CI = 0;$CK = $messages;

if(!is_array($CK) && !($CK instanceof Iterator) && !($CK instanceof IteratorAggregate)) {
$CK = array();}
$CJ = $CK;
foreach($CJ as $item) {if($CI == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $CI++;}if($CI > 0) { ?>

  <?php } ?>

<?php 
}

function __slotHandlere8606ba043f03b04affbd805450d12c4($CW= array()) {
if($CW) extract($CW); ?>

-->

<h1>Добавление нового "узла" дерева</h1>

<div id="header">

    <div class="header_actions">
        <a href='<?php $CY = array();
$CX = lmbArrayHelper :: explode(',',':', 'action:create');
foreach($CX as $key => $value) $CY[trim($key)] = trim($value);
$CZ = false;
echo lmbToolkit :: instance()->getRoutesUrl($CY, '', $CZ);
 ?>'
           title="Create category" class='thickbox'>
            <img src='/shared/images/icons/page_white_add.png'/> Create Category!
        </a>

    </div>
</div>


<div id="body">
    <?php
    $criteria = null;
    $is_once = $this->id==0;

    if($is_once) {
        echo ' isNOL ';
        $criteria = new lmbSQLCriteria('id_sys_tree > '.$this->id);
    }
    else {
        echo ' not_NOL (show_AllRecords)';
        $criteria = lmbSQLCriteria::equal('id_sys_tree', $this->id);
    }

    $this->items = lmbActiveRecord :: find('Objoftree', $criteria);
    //$this->items = lmbCollection::toFlatArray(lmbActiveRecord :: find('Objoftree', $criteria));
    echo sizeof($this->items);

    $arr = lmbCollection::toFlatArray($this->items);
    $arr_pr_ids = array_column($arr, 'id_pr');

    ?>

    <?php if(isset($this->form_object_form_datasource))$this->form_object_form->setDatasource($this->form_object_form_datasource);
if(isset($this->form_object_form_error_list))$this->form_object_form->setErrorList($this->form_object_form_error_list);
 ?><form<?php $this->form_object_form->renderAttributes(); ?>>

    <?php $DG = 0;$DI = $this->items;

if(!is_array($DI) && !($DI instanceof Iterator) && !($DI instanceof IteratorAggregate)) {
$DI = array();}
$DH = $DI;
foreach($DH as $item) {$cnt = $DG+1;$parity = (( ($DG + 1) % 2) ? "odd" : "even");if($DG == 0) { ?>

    <?php $this->__staticInclude5('_admin_object/actions.phtml'); ?>


    <div id="vw_category">
        Список категорий:
        <br>
    </div>

    <div class="list">

        <table>
            <tr>
                <th><?php $this->_template60a95ba578e63e662dbccca44a551553(array('template' => 'selectors_toggler',)); ?></th>
                <th>(№)#ID</th>
                <th>id_sys_tree</th>
                <th>id_pr</th>
                <th>value_pr</th>
                <th>is_branch</th>

                <th>Actions</th>
            </tr>
            <?php } ?>


            <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
                <td><?php $DN='';
$DO = $item;
if((is_array($DO) || ($DO instanceof ArrayAccess)) && isset($DO['id'])) { $DN = $DO['id'];
}else{ $DN = '';}
$this->_templatea6bd897278e8c1c1909b7bd835d7c0f0(array('template' => 'selector','value' => $DN,)); ?></td>
                <td>(<?php echo htmlspecialchars($cnt,3); ?>)#<?php $DU='';
$DV = $item;
if((is_array($DV) || ($DV instanceof ArrayAccess)) && isset($DV['id'])) { $DU = $DV['id'];
}else{ $DU = '';}
echo htmlspecialchars($DU,3); ?></td>
                <td><?php $DW='';
$DX = $item;
if((is_array($DX) || ($DX instanceof ArrayAccess)) && isset($DX['id_sys_tree'])) { $DW = $DX['id_sys_tree'];
}else{ $DW = '';}
echo htmlspecialchars($DW,3); ?> / <?php $DY='';
$DZ = $item;
$DY = $DZ->getTree();
$DY = $DY->getIdentifier();
echo htmlspecialchars($DY,3); ?></td>
                <td><?php $EA='';
$EB = $item;
if((is_array($EB) || ($EB instanceof ArrayAccess)) && isset($EB['id_pr'])) { $EA = $EB['id_pr'];
}else{ $EA = '';}
echo htmlspecialchars($EA,3); ?> / <?php $EC='';
$ED = $item;
$EC = $ED->getPreference();
$EC = $EC->getTitle();
echo htmlspecialchars($EC,3); ?></td>
                <td><?php $EE='';
$EF = $item;
if((is_array($EF) || ($EF instanceof ArrayAccess)) && isset($EF['value_pr'])) { $EE = $EF['value_pr'];
}else{ $EE = '';}
echo htmlspecialchars($EE,3); ?></td>
                <td>
                    [ <?php $EG='';
$EH = $item;
if((is_array($EH) || ($EH instanceof ArrayAccess)) && isset($EH['is_branch'])) { $EG = $EH['is_branch'];
}else{ $EG = '';}
echo htmlspecialchars($EG,3); ?> ] ~
                    <?php
                    echo ((!$item->getIsBranch()==0) ? 'true-Ветка' : 'false-листок');
                    ?>
                </td>

                <td class='actions'>
                    <?php $this->_template2734766a46cf53a9a55303e35304147e(array('template' => 'object_action_edit','item' => $item,'icon' => 'page_white_edit',)); ?>

                    <?php $this->_template4d139cf9170366a0515d16b5f48efa54(array('template' => 'object_action_delete','item' => $item,'icon' => 'page_white_delete',)); ?>

                </td>
            </tr>

            <?php $DG++;}if($DG > 0) { ?>

            

            <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
                <td>&nbsp;</td>
                <td>#</td>
                <td>
                    <input type='hidden' name='id_sys_tree' value='<?php echo htmlspecialchars($this->id,3); ?>'/>
                    <?php $this->input_id001->setAttribute('value',$this->id);
 ?><input<?php $this->input_id001->renderAttributes(); ?> />
                </td>
                <td>
                    <select  id="id_pr" name="id_pr" style="width: 200px;">
                        <option value="0" prepend="true" selected="true">Укажите харектеристику ...</option>
                        <?php $FW = 0;$FY = $this->pref;

if(!is_array($FY) && !($FY instanceof Iterator) && !($FY instanceof IteratorAggregate)) {
$FY = array();}
$FX = $FY;
foreach($FX as $key => $value) {if($FW == 0) { ?>

                        <?php } ?>

                        <option <?php echo in_array($key, $arr_pr_ids)?'disabled':''; ?> value='<?php echo htmlspecialchars($key,3); ?>'><?php echo htmlspecialchars($key,3); ?> / <?php echo htmlspecialchars($value,3); ?></option>
                        <?php $FW++;}if($FW > 0) { ?>

                        <?php } ?>

                        <!-- <option value='-1' disabled>Выбранное5</option> -->
                    </select>
                </td>
                <td>
                    <input<?php $this->input_id002->renderAttributes(); ?> />
                    <datalist id="value_pr">
                        <option>Аперитивы</option>
                        <option>Горячие</option>
                        <option>Десертные</option>
                        <option>Диджестивы</option>
                        <option>Молочные</option>
                        <option>Слоистые</option>
                    </datalist>
                </td>
                <td>
                    <input<?php $this->js_checkbox_id003->renderAttributes(); ?> /><?php $this->js_checkbox_id003->renderHidden();
 ?>

                </td>

                <td class='actions'>
                    <?php $this->_template86411cc6d4ace71288d539045aaa842f(array('template' => 'object_action_edit','item' => $item,'icon' => 'page_white_link',)); ?>

                    <input id="create" type="submit" value="Save" name="create" />

                </td>
            </tr>

        </table>
    </div>
    <?php }if($DG == 0) { ?>

            <div class="empty_list">Empty</div>
            <?php } ?>


    </form>

</div>



<?php 
}

function __staticInclude5($file) {
 ?>








<?php 
}

function _template60a95ba578e63e662dbccca44a551553($DK= array()) {
if($DK) extract($DK); ?>

  <input type='checkbox' onclick='toggle_selected(this);' name='mark_all'/>
<?php 
}

function _templatea6bd897278e8c1c1909b7bd835d7c0f0($DP= array()) {
if($DP) extract($DP); ?>

  <input type='checkbox' name="ids[]" value='<?php echo htmlspecialchars($value,3); ?>'/>
<?php 
}

function _template2734766a46cf53a9a55303e35304147e($EK= array()) {
if($EK) extract($EK); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $EN='';
$EO = $item;
if((is_array($EO) || ($EO instanceof ArrayAccess)) && isset($EO['id'])) { $EN = $EO['id'];
}else{ $EN = '';}
$EQ = array();
$EP = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$EN));
foreach($EP as $key => $value) $EQ[trim($key)] = trim($value);
$ER = false;
echo lmbToolkit :: instance()->getRoutesUrl($EQ, '', $ER);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template4d139cf9170366a0515d16b5f48efa54($EY= array()) {
if($EY) extract($EY); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Удалить';
    $icon = isset($icon) ? $icon : "delete";
  ?>
  <a href='#' onclick="if(confirm('Вы действительно желаете удалить выбранный объект?')) {jQuery.post('<?php $FC = array();
$FB = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:delete',$controller));
foreach($FB as $key => $value) $FC[trim($key)] = trim($value);
$FD = false;
echo lmbToolkit :: instance()->getRoutesUrl($FC, '', $FD);
 ?>', {ids:<?php $FE='';
$FF = $item;
if((is_array($FF) || ($FF instanceof ArrayAccess)) && isset($FF['id'])) { $FE = $FF['id'];
}else{ $FE = '';}
echo htmlspecialchars($FE,3); ?>}, function(){document.location.reload()})}"  title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Удалить'); ?>"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"delete"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template86411cc6d4ace71288d539045aaa842f($GI= array()) {
if($GI) extract($GI); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $GL='';
$GM = $item;
if((is_array($GM) || ($GM instanceof ArrayAccess)) && isset($GM['id'])) { $GL = $GM['id'];
}else{ $GL = '';}
$GO = array();
$GN = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$GL));
foreach($GN as $key => $value) $GO[trim($key)] = trim($value);
$GP = false;
echo lmbToolkit :: instance()->getRoutesUrl($GO, '', $GP);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function __slotHandler9cd4da4686669626788142352a9bc0db($HU= array()) {
if($HU) extract($HU);
}

function __slotHandler22d7de3ea736becba5dbc605a0686f5d($IR= array()) {
if($IR) extract($IR);
}

function __slotHandlerb2f43f147759c5e7b30dbb5126e96736($IS= array()) {
if($IS) extract($IS); ?>

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

function __slotHandler6bfefc97b87424aa9b57ba4fa91747e2($IT= array()) {
if($IT) extract($IT);
}

function __staticInclude6($file) {
 ?>











<?php 
}

function __staticInclude7($file) {
 ?>








<?php 
}

function __slotHandler3c1465dc80399117cbd0c041c9f96778($JQ= array()) {
if($JQ) extract($JQ);
}

function __slotHandler07fe91fa49881b533f60d788f3bbc101($JR= array()) {
if($JR) extract($JR);
}

function __slotHandler1108f43f70af99d01a507d9feca9f8e3($JS= array()) {
if($JS) extract($JS);
}

}
}
$macro_executor_class='MacroTemplateExecutor97d602daf285a26b5be75057d33e58df';