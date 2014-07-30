<?php /* This file is generated from /home/dnn/web/webshop/template/admin_uitree/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutorca7d9303e520a6352b4676fb841eb348', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
class MacroTemplateExecutorca7d9303e520a6352b4676fb841eb348 extends lmbMacroTemplateExecutor {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler84491d2a666f45506a0f814a36dea1f4(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler6078a9b6c7113d851ee1525405a269f8(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler537ab9d6c77a0b85e3a87b1656d13aab(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $ED = 0;$EF = $this->navigation;

if(!is_array($EF) && !($EF instanceof Iterator) && !($EF instanceof IteratorAggregate)) {
$EF = array();}
$EE = $EF;
foreach($EE as $item) {if($ED == 0) { ?>

        <?php } ?>

        <dt class='<?php $EH='';
$EI = $item;
if((is_array($EI) || ($EI instanceof ArrayAccess)) && isset($EI['id'])) { $EH = $EI['id'];
}else{ $EH = '';}
echo htmlspecialchars($EH,3); ?>'><img src='<?php $EJ='';
$EK = $item;
if((is_array($EK) || ($EK instanceof ArrayAccess)) && isset($EK['icon'])) { $EJ = $EK['icon'];
}else{ $EJ = '';}
echo htmlspecialchars($EJ,3); ?>'/> <?php $EL='';
$EM = $item;
if((is_array($EM) || ($EM instanceof ArrayAccess)) && isset($EM['title'])) { $EL = $EM['title'];
}else{ $EL = '';}
echo htmlspecialchars($EL,3); ?> </dt>
        <dd>
          <?php $EN='';
$EO = $item;
if((is_array($EO) || ($EO instanceof ArrayAccess)) && isset($EO['children'])) { $EN = $EO['children'];
}else{ $EN = '';}
$ER = 0;$ET = $EN;

if(!is_array($ET) && !($ET instanceof Iterator) && !($ET instanceof IteratorAggregate)) {
$ET = array();}
$ES = $ET;
foreach($ES as $sub_item) {if($ER == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $EV='';
$EW = $sub_item;
if((is_array($EW) || ($EW instanceof ArrayAccess)) && isset($EW['icon'])) { $EV = $EW['icon'];
}else{ $EV = '';}
echo htmlspecialchars($EV,3); ?>'/> <a href='<?php $EX='';
$EY = $sub_item;
if((is_array($EY) || ($EY instanceof ArrayAccess)) && isset($EY['url'])) { $EX = $EY['url'];
}else{ $EX = '';}
echo htmlspecialchars($EX,3); ?>'><?php $EZ='';
$FA = $sub_item;
if((is_array($FA) || ($FA instanceof ArrayAccess)) && isset($FA['title'])) { $EZ = $FA['title'];
}else{ $EZ = '';}
echo htmlspecialchars($EZ,3); ?></a>
              </li><?php $ER++;}if($ER > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $ED++;}if($ED > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandlerda782220bf26e6c43ba535dcabdebac6(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler704a0f7d04c82e3b3cb39ddb5d5ee1fd(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler0112ef38447623d3ed1117ddb2f83d68(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandlerc83d31a346b15963a8a8c5ccf2577c7e(array()); ?>


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

function __slotHandler84491d2a666f45506a0f814a36dea1f4($I= array()) {
if($I) extract($I);
}

function __slotHandler6078a9b6c7113d851ee1525405a269f8($J= array()) {
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
$this->_templated3ab719c4e8e7f4c7f4be029e49d432b(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template30c5688d55b1447fd5040e198261af90(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _templated3ab719c4e8e7f4c7f4be029e49d432b($M= array()) {
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

function _template30c5688d55b1447fd5040e198261af90($X= array()) {
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

function __slotHandler537ab9d6c77a0b85e3a87b1656d13aab($BP= array()) {
if($BP) extract($BP); ?>


<?php $this->__staticInclude3('_admin/selectors.phtml'); ?>

<?php $this->__staticInclude4('_admin_object/actions.phtml'); ?>



<div id="header">
    <h1>Preference</h1>
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
                <th><?php $this->_template99853e550eb4b8f20426635f39886f86(array('template' => 'selectors_toggler',)); ?></th>
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
$this->_templatefb0b32a6b9844d9469d4f035b89bd33f(array('template' => 'selector','value' => $CK,)); ?></td>
                <td>#<?php $CP='';
$CQ = $item;
if((is_array($CQ) || ($CQ instanceof ArrayAccess)) && isset($CQ['id'])) { $CP = $CQ['id'];
}else{ $CP = '';}
echo htmlspecialchars($CP,3); ?></td>
                <td><?php $CR='';
$CS = $item;
if((is_array($CS) || ($CS instanceof ArrayAccess)) && isset($CS['id_sys_tree'])) { $CR = $CS['id_sys_tree'];
}else{ $CR = '';}
echo htmlspecialchars($CR,3); ?></td>
                <td><?php $CT='';
$CU = $item;
if((is_array($CU) || ($CU instanceof ArrayAccess)) && isset($CU['id_pr'])) { $CT = $CU['id_pr'];
}else{ $CT = '';}
echo htmlspecialchars($CT,3); ?></td>
                <td><?php $CV='';
$CW = $item;
if((is_array($CW) || ($CW instanceof ArrayAccess)) && isset($CW['value_pr'])) { $CV = $CW['value_pr'];
}else{ $CV = '';}
echo htmlspecialchars($CV,3); ?></td>
                <td><?php $CX='';
$CY = $item;
if((is_array($CY) || ($CY instanceof ArrayAccess)) && isset($CY['is_branch'])) { $CX = $CY['is_branch'];
}else{ $CX = '';}
echo htmlspecialchars($CX,3); ?></td>

                <td class='actions'>
                    <?php $this->_template9167a09bb95e6bd8bf303cfce1330ff8(array('template' => 'object_action_edit','item' => $item,'icon' => 'page_white_edit',)); ?>

                    <?php $this->_template886aa599f74ddc40063ba7651b417ac3(array('template' => 'object_action_delete','item' => $item,'icon' => 'page_white_delete',)); ?>

                </td>
            </tr>
            <?php $CD++;}if($CD > 0) { ?>

            
        </table>
    </div>
    <?php }if($CD == 0) { ?>

            <div class="empty_list">Empty</div>
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

function _template99853e550eb4b8f20426635f39886f86($CH= array()) {
if($CH) extract($CH); ?>

  <input type='checkbox' onclick='toggle_selected(this);' name='mark_all'/>
<?php 
}

function _templatefb0b32a6b9844d9469d4f035b89bd33f($CM= array()) {
if($CM) extract($CM); ?>

  <input type='checkbox' name="ids[]" value='<?php echo htmlspecialchars($value,3); ?>'/>
<?php 
}

function _template9167a09bb95e6bd8bf303cfce1330ff8($DB= array()) {
if($DB) extract($DB); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $DE='';
$DF = $item;
if((is_array($DF) || ($DF instanceof ArrayAccess)) && isset($DF['id'])) { $DE = $DF['id'];
}else{ $DE = '';}
$DH = array();
$DG = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$DE));
foreach($DG as $key => $value) $DH[trim($key)] = trim($value);
$DI = false;
echo lmbToolkit :: instance()->getRoutesUrl($DH, '', $DI);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template886aa599f74ddc40063ba7651b417ac3($DP= array()) {
if($DP) extract($DP); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Удалить';
    $icon = isset($icon) ? $icon : "delete";
  ?>
  <a href='#' onclick="if(confirm('Вы действительно желаете удалить выбранный объект?')) {jQuery.post('<?php $DT = array();
$DS = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:delete',$controller));
foreach($DS as $key => $value) $DT[trim($key)] = trim($value);
$DU = false;
echo lmbToolkit :: instance()->getRoutesUrl($DT, '', $DU);
 ?>', {ids:<?php $DV='';
$DW = $item;
if((is_array($DW) || ($DW instanceof ArrayAccess)) && isset($DW['id'])) { $DV = $DW['id'];
}else{ $DV = '';}
echo htmlspecialchars($DV,3); ?>}, function(){document.location.reload()})}"  title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Удалить'); ?>"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"delete"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function __slotHandlerda782220bf26e6c43ba535dcabdebac6($FB= array()) {
if($FB) extract($FB);
}

function __slotHandler704a0f7d04c82e3b3cb39ddb5d5ee1fd($FY= array()) {
if($FY) extract($FY);
}

function __slotHandler0112ef38447623d3ed1117ddb2f83d68($FZ= array()) {
if($FZ) extract($FZ); ?>

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

function __slotHandlerc83d31a346b15963a8a8c5ccf2577c7e($GA= array()) {
if($GA) extract($GA);
}

}
}
$macro_executor_class='MacroTemplateExecutorca7d9303e520a6352b4676fb841eb348';