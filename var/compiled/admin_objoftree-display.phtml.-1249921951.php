<?php /* This file is generated from /home/dnn/web/webshop/template/admin_objoftree/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor3ed3757ad9c61f11bdca35a007c7b549', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
class MacroTemplateExecutor3ed3757ad9c61f11bdca35a007c7b549 extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('admin_page_layout.phtml', 'admin_page_layout.phtml');
}

function __staticInclude1($file,$file) {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler218f0cc35f2c6cc64c82dac1e01b788a(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlerb67cc9f180783661560e5a5e5e1ff60e(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandlerf11222047f8f4115d4c9cec438410400(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $DX = 0;$DZ = $this->navigation;

if(!is_array($DZ) && !($DZ instanceof Iterator) && !($DZ instanceof IteratorAggregate)) {
$DZ = array();}
$DY = $DZ;
foreach($DY as $item) {if($DX == 0) { ?>

        <?php } ?>

        <dt class='<?php $EB='';
$EC = $item;
if((is_array($EC) || ($EC instanceof ArrayAccess)) && isset($EC['id'])) { $EB = $EC['id'];
}else{ $EB = '';}
echo htmlspecialchars($EB,3); ?>'><img src='<?php $ED='';
$EE = $item;
if((is_array($EE) || ($EE instanceof ArrayAccess)) && isset($EE['icon'])) { $ED = $EE['icon'];
}else{ $ED = '';}
echo htmlspecialchars($ED,3); ?>'/> <?php $EF='';
$EG = $item;
if((is_array($EG) || ($EG instanceof ArrayAccess)) && isset($EG['title'])) { $EF = $EG['title'];
}else{ $EF = '';}
echo htmlspecialchars($EF,3); ?> </dt>
        <dd>
          <?php $EH='';
$EI = $item;
if((is_array($EI) || ($EI instanceof ArrayAccess)) && isset($EI['children'])) { $EH = $EI['children'];
}else{ $EH = '';}
$EL = 0;$EN = $EH;

if(!is_array($EN) && !($EN instanceof Iterator) && !($EN instanceof IteratorAggregate)) {
$EN = array();}
$EM = $EN;
foreach($EM as $sub_item) {if($EL == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $EP='';
$EQ = $sub_item;
if((is_array($EQ) || ($EQ instanceof ArrayAccess)) && isset($EQ['icon'])) { $EP = $EQ['icon'];
}else{ $EP = '';}
echo htmlspecialchars($EP,3); ?>'/> <a href='<?php $ER='';
$ES = $sub_item;
if((is_array($ES) || ($ES instanceof ArrayAccess)) && isset($ES['url'])) { $ER = $ES['url'];
}else{ $ER = '';}
echo htmlspecialchars($ER,3); ?>'><?php $ET='';
$EU = $sub_item;
if((is_array($EU) || ($EU instanceof ArrayAccess)) && isset($EU['title'])) { $ET = $EU['title'];
}else{ $ET = '';}
echo htmlspecialchars($ET,3); ?></a>
              </li><?php $EL++;}if($EL > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $DX++;}if($DX > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandlerf3cbcfccaa30643da113092190a6766a(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler4775badd6799d39d956321ced3bedde5(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler6e712ca2127a4a1b5a7f00397c87e0d9(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler8b5b8349ef043e3ac90ae055f412cd81(array()); ?>


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


  <?php $this->__staticInclude4('_admin/selectors.phtml'); ?>

  <?php $this->__staticInclude5('_admin_object/actions.phtml'); ?>


  
<?php 
}

function __slotHandler218f0cc35f2c6cc64c82dac1e01b788a($I= array()) {
if($I) extract($I);
}

function __slotHandlerb67cc9f180783661560e5a5e5e1ff60e($J= array()) {
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
$this->_template9f0abd3d921a955a8f8ad2257957fc08(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template9ed7967ae1ee27d013ca1fe36ae80b46(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template9f0abd3d921a955a8f8ad2257957fc08($M= array()) {
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

function _template9ed7967ae1ee27d013ca1fe36ae80b46($X= array()) {
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

function __slotHandlerf11222047f8f4115d4c9cec438410400($BP= array()) {
if($BP) extract($BP); ?>

    <div id="header">
      <h1>Preference - value</h1>

      <div class="header_actions">
        <a href='<?php $BR = array();
$BQ = lmbArrayHelper :: explode(',',':', 'action:create');
foreach($BQ as $key => $value) $BR[trim($key)] = trim($value);
$BS = false;
echo lmbToolkit :: instance()->getRoutesUrl($BR, '', $BS);
 ?>'
           title="Create preference" class='thickbox'>
            <img src='/shared/images/icons/page_white_add.png'/> Create preference - value fot NODE!
        </a>
      </div>
    </div>

    <div id="body">
      <?php $BX = 0;$BZ = $this->items;

if(!is_array($BZ) && !($BZ instanceof Iterator) && !($BZ instanceof IteratorAggregate)) {
$BZ = array();}
$BY = $BZ;
foreach($BY as $item) {$parity = (( ($BX + 1) % 2) ? "odd" : "even");if($BX == 0) { ?>

      <?php $this->__staticInclude3('_admin_object/actions.phtml'); ?>

      <div class="list">

        <table>
          <tr>
            <th><?php $this->_templatea62870e61cda2a51d264d3469d4d21cf(array('template' => 'selectors_toggler',)); ?></th>
            <th>#ID</th>
            <th>id_sys_tree</th>
            <th>id_pr</th>
            <th>value_pr</th>
            <th>is_branch</th>

            <th>Actions</th>
          </tr>
          <?php } ?>

            <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
              <td><?php $CE='';
$CF = $item;
if((is_array($CF) || ($CF instanceof ArrayAccess)) && isset($CF['id'])) { $CE = $CF['id'];
}else{ $CE = '';}
$this->_template47030a703c7a5c4d9d7e073ff85047b7(array('template' => 'selector','value' => $CE,)); ?></td>
              <td>#<?php $CJ='';
$CK = $item;
if((is_array($CK) || ($CK instanceof ArrayAccess)) && isset($CK['id'])) { $CJ = $CK['id'];
}else{ $CJ = '';}
echo htmlspecialchars($CJ,3); ?></td>
              <td><?php $CL='';
$CM = $item;
if((is_array($CM) || ($CM instanceof ArrayAccess)) && isset($CM['id_sys_tree'])) { $CL = $CM['id_sys_tree'];
}else{ $CL = '';}
echo htmlspecialchars($CL,3); ?></td>
              <td><?php $CN='';
$CO = $item;
if((is_array($CO) || ($CO instanceof ArrayAccess)) && isset($CO['id_pr'])) { $CN = $CO['id_pr'];
}else{ $CN = '';}
echo htmlspecialchars($CN,3); ?></td>
              <td><?php $CP='';
$CQ = $item;
if((is_array($CQ) || ($CQ instanceof ArrayAccess)) && isset($CQ['value_pr'])) { $CP = $CQ['value_pr'];
}else{ $CP = '';}
echo htmlspecialchars($CP,3); ?></td>
              <td>
                  [ <?php $CR='';
$CS = $item;
if((is_array($CS) || ($CS instanceof ArrayAccess)) && isset($CS['is_branch'])) { $CR = $CS['is_branch'];
}else{ $CR = '';}
echo htmlspecialchars($CR,3); ?> ] ~
                  <?php
                  echo ((!$item->getIsBranch()==0) ? 'true-Ветка' : 'false-листок');
                  ?>
              </td>

              <td class='actions'>
                <?php $this->_template336fb0d030f3444473906c306d470ad0(array('template' => 'object_action_edit','item' => $item,'icon' => 'page_white_edit',)); ?>

                <?php $this->_template5b36efcb7283e84d1efc515dd28548b4(array('template' => 'object_action_delete','item' => $item,'icon' => 'page_white_delete',)); ?>

              </td>
            </tr>
          <?php $BX++;}if($BX > 0) { ?>

          
        </table>
      </div>
      <?php }if($BX == 0) { ?>

            <div class="empty_list">Empty</div>
          <?php } ?>

    </div>
  <?php 
}

function __staticInclude3($file) {
 ?>








<?php 
}

function _templatea62870e61cda2a51d264d3469d4d21cf($CB= array()) {
if($CB) extract($CB); ?>

  <input type='checkbox' onclick='toggle_selected(this);' name='mark_all'/>
<?php 
}

function _template47030a703c7a5c4d9d7e073ff85047b7($CG= array()) {
if($CG) extract($CG); ?>

  <input type='checkbox' name="ids[]" value='<?php echo htmlspecialchars($value,3); ?>'/>
<?php 
}

function _template336fb0d030f3444473906c306d470ad0($CV= array()) {
if($CV) extract($CV); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $CY='';
$CZ = $item;
if((is_array($CZ) || ($CZ instanceof ArrayAccess)) && isset($CZ['id'])) { $CY = $CZ['id'];
}else{ $CY = '';}
$DB = array();
$DA = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$CY));
foreach($DA as $key => $value) $DB[trim($key)] = trim($value);
$DC = false;
echo lmbToolkit :: instance()->getRoutesUrl($DB, '', $DC);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template5b36efcb7283e84d1efc515dd28548b4($DJ= array()) {
if($DJ) extract($DJ); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Удалить';
    $icon = isset($icon) ? $icon : "delete";
  ?>
  <a href='#' onclick="if(confirm('Вы действительно желаете удалить выбранный объект?')) {jQuery.post('<?php $DN = array();
$DM = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:delete',$controller));
foreach($DM as $key => $value) $DN[trim($key)] = trim($value);
$DO = false;
echo lmbToolkit :: instance()->getRoutesUrl($DN, '', $DO);
 ?>', {ids:<?php $DP='';
$DQ = $item;
if((is_array($DQ) || ($DQ instanceof ArrayAccess)) && isset($DQ['id'])) { $DP = $DQ['id'];
}else{ $DP = '';}
echo htmlspecialchars($DP,3); ?>}, function(){document.location.reload()})}"  title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Удалить'); ?>"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"delete"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function __slotHandlerf3cbcfccaa30643da113092190a6766a($EV= array()) {
if($EV) extract($EV);
}

function __slotHandler4775badd6799d39d956321ced3bedde5($FS= array()) {
if($FS) extract($FS);
}

function __slotHandler6e712ca2127a4a1b5a7f00397c87e0d9($FT= array()) {
if($FT) extract($FT); ?>

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

function __slotHandler8b5b8349ef043e3ac90ae055f412cd81($FU= array()) {
if($FU) extract($FU);
}

function __staticInclude4($file) {
 ?>











<?php 
}

function __staticInclude5($file) {
 ?>








<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor3ed3757ad9c61f11bdca35a007c7b549';