<?php /* This file is generated from /home/dnn/web/webshop/template/admin_preference/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor69e01297c816bb925b3f8e9cbf65b55f', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroJSCheckboxWidget.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
class MacroTemplateExecutor69e01297c816bb925b3f8e9cbf65b55f extends lmbMacroTemplateExecutor {

function _init() {
$this->form_my_form = new lmbMacroFormWidget('my_form');
$this->form_my_form->setAttributes(array (
  'name' => 'my_form',
));
$this->js_checkbox_id001 = new lmbMacroJSCheckboxWidget('importance');
$this->js_checkbox_id001->setAttributes(array (
  'name' => 'importance',
  'id' => 'importance',
  'type' => 'checkbox',
));
$this->js_checkbox_id001->setForm($this->form_my_form);
$this->form_my_form->addChild($this->js_checkbox_id001);

}
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlerf981f95e274b044291112a38f8a24f12(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlerc97ea3a971e7b5d822605386e84cc645(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler05e926bdbf3e653d7434e0df3c5946eb(array()); ?>

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
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler1c9ee3306feaeeda0341488c6d4f194a(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandlered88f39932ed4040b6e0af76e3f700b6(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler301de5243fc9938adefb97f662624c53(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler48dcf65b624005172dc751ac68957b19(array()); ?>


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

function __slotHandlerf981f95e274b044291112a38f8a24f12($I= array()) {
if($I) extract($I);
}

function __slotHandlerc97ea3a971e7b5d822605386e84cc645($J= array()) {
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
$this->_template8538e963f20763071a46e47ddb7baee2(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template425b6698b163277a7b5de1ce6ceb1dd2(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template8538e963f20763071a46e47ddb7baee2($M= array()) {
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

function _template425b6698b163277a7b5de1ce6ceb1dd2($X= array()) {
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

function __slotHandler05e926bdbf3e653d7434e0df3c5946eb($BP= array()) {
if($BP) extract($BP); ?>

    <div id="header">
      <h1>Preference</h1>

      <div class="header_actions">
        <a href='<?php $BR = array();
$BQ = lmbArrayHelper :: explode(',',':', 'action:create');
foreach($BQ as $key => $value) $BR[trim($key)] = trim($value);
$BS = false;
echo lmbToolkit :: instance()->getRoutesUrl($BR, '', $BS);
 ?>'
           title="Create preference" class='thickbox'>
            <img src='/shared/images/icons/page_white_add.png'/> Create preference
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
            <th><?php $this->_template26d7dcce754a72f25b6cb37e9005aa33(array('template' => 'selectors_toggler',)); ?></th>
            <th>#ID</th>
            <th width='20%'>Title</th>
            <th width='40%'>is_published_for_user</th>
            <th>Actions</th>
          </tr>
          <?php } ?>

            <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
              <td><?php $CE='';
$CF = $item;
if((is_array($CF) || ($CF instanceof ArrayAccess)) && isset($CF['id'])) { $CE = $CF['id'];
}else{ $CE = '';}
$this->_template2381b6f3722af6269d222c1810cc8a1f(array('template' => 'selector','value' => $CE,)); ?></td>
              <td>#<?php $CJ='';
$CK = $item;
if((is_array($CK) || ($CK instanceof ArrayAccess)) && isset($CK['id'])) { $CJ = $CK['id'];
}else{ $CJ = '';}
echo htmlspecialchars($CJ,3); ?></td>
              <td><?php $CL='';
$CM = $item;
if((is_array($CM) || ($CM instanceof ArrayAccess)) && isset($CM['title'])) { $CL = $CM['title'];
}else{ $CL = '';}
echo htmlspecialchars($CL,3); ?></td>
              <td>
                  <?php if(isset($this->form_my_form_datasource))$this->form_my_form->setDatasource($this->form_my_form_datasource);
if(isset($this->form_my_form_error_list))$this->form_my_form->setErrorList($this->form_my_form_error_list);
 ?><form<?php $this->form_my_form->renderAttributes(); ?>>
                  <label for='importance'>(<?php $CN='';
$CO = $item;
if((is_array($CO) || ($CO instanceof ArrayAccess)) && isset($CO['importance'])) { $CN = $CO['importance'];
}else{ $CN = '';}
echo htmlspecialchars($CN,3); ?>):</label>
                  <?php $CP='';
$CQ = $item;
if((is_array($CQ) || ($CQ instanceof ArrayAccess)) && isset($CQ['importance'])) { $CP = $CQ['importance'];
}else{ $CP = '';}
$this->js_checkbox_id001->setAttribute('checked_value',$CP);
 ?><input<?php $this->js_checkbox_id001->renderAttributes(); ?> /><?php $this->js_checkbox_id001->renderHidden();
 ?>

                  <?php
                  echo ((!$item->getImportance()==0) ? 'true' : 'FALSE');
                  //echo ' :'.lmb_translit_russian( $item->getTitle() );
                  //echo ' :'. str_replace(' ', '_', $item->getTitle() );
                  echo ' :'. lmb_translit_russian(str_replace(' ', '_', $item->getTitle() ));
                  //echo ' :'.lmb_i18n(str_replace(' ', '_', $item->getTitle()));
                  ?>

                  </form>
              </td>
              <td class='actions'>
                <?php $this->_templatea68648d1d4b5219663cd6c1f03bb7d8c(array('template' => 'object_action_edit','item' => $item,'icon' => 'page_white_edit',)); ?>

                <?php $this->_templatea1bc12442dfe4a783f52b487b8b3642d(array('template' => 'object_action_delete','item' => $item,'icon' => 'page_white_delete',)); ?>

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

function _template26d7dcce754a72f25b6cb37e9005aa33($CB= array()) {
if($CB) extract($CB); ?>

  <input type='checkbox' onclick='toggle_selected(this);' name='mark_all'/>
<?php 
}

function _template2381b6f3722af6269d222c1810cc8a1f($CG= array()) {
if($CG) extract($CG); ?>

  <input type='checkbox' name="ids[]" value='<?php echo htmlspecialchars($value,3); ?>'/>
<?php 
}

function _templatea68648d1d4b5219663cd6c1f03bb7d8c($CT= array()) {
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

function _templatea1bc12442dfe4a783f52b487b8b3642d($DH= array()) {
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

function __slotHandler1c9ee3306feaeeda0341488c6d4f194a($ET= array()) {
if($ET) extract($ET);
}

function __slotHandlered88f39932ed4040b6e0af76e3f700b6($FQ= array()) {
if($FQ) extract($FQ);
}

function __slotHandler301de5243fc9938adefb97f662624c53($FR= array()) {
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

function __slotHandler48dcf65b624005172dc751ac68957b19($FS= array()) {
if($FS) extract($FS);
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
$macro_executor_class='MacroTemplateExecutor69e01297c816bb925b3f8e9cbf65b55f';