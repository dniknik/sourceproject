<?php /* This file is generated from /home/dnn/web/webshop/template/admin_tree_product/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutord8fe71921f111c7e26e7067903af0029', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
class MacroTemplateExecutord8fe71921f111c7e26e7067903af0029 extends lmbMacroTemplateExecutor {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler8f561ed9cf2084f7c301132031520199(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler752bd293384d45b86168c8da7f6c50dd(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler1710a8e3ccc5e7b4885d57a4134080fa(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $EZ = 0;$FB = $this->navigation;

if(!is_array($FB) && !($FB instanceof Iterator) && !($FB instanceof IteratorAggregate)) {
$FB = array();}
$FA = $FB;
foreach($FA as $item) {if($EZ == 0) { ?>

        <?php } ?>

        <dt class='<?php $FD='';
$FE = $item;
if((is_array($FE) || ($FE instanceof ArrayAccess)) && isset($FE['id'])) { $FD = $FE['id'];
}else{ $FD = '';}
echo htmlspecialchars($FD,3); ?>'><img src='<?php $FF='';
$FG = $item;
if((is_array($FG) || ($FG instanceof ArrayAccess)) && isset($FG['icon'])) { $FF = $FG['icon'];
}else{ $FF = '';}
echo htmlspecialchars($FF,3); ?>'/> <?php $FH='';
$FI = $item;
if((is_array($FI) || ($FI instanceof ArrayAccess)) && isset($FI['title'])) { $FH = $FI['title'];
}else{ $FH = '';}
echo htmlspecialchars($FH,3); ?> </dt>
        <dd>
          <?php $FJ='';
$FK = $item;
if((is_array($FK) || ($FK instanceof ArrayAccess)) && isset($FK['children'])) { $FJ = $FK['children'];
}else{ $FJ = '';}
$FN = 0;$FP = $FJ;

if(!is_array($FP) && !($FP instanceof Iterator) && !($FP instanceof IteratorAggregate)) {
$FP = array();}
$FO = $FP;
foreach($FO as $sub_item) {if($FN == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $FR='';
$FS = $sub_item;
if((is_array($FS) || ($FS instanceof ArrayAccess)) && isset($FS['icon'])) { $FR = $FS['icon'];
}else{ $FR = '';}
echo htmlspecialchars($FR,3); ?>'/> <a href='<?php $FT='';
$FU = $sub_item;
if((is_array($FU) || ($FU instanceof ArrayAccess)) && isset($FU['url'])) { $FT = $FU['url'];
}else{ $FT = '';}
echo htmlspecialchars($FT,3); ?>'><?php $FV='';
$FW = $sub_item;
if((is_array($FW) || ($FW instanceof ArrayAccess)) && isset($FW['title'])) { $FV = $FW['title'];
}else{ $FV = '';}
echo htmlspecialchars($FV,3); ?></a>
              </li><?php $FN++;}if($FN > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $EZ++;}if($EZ > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler86092252051bb8ef45c6e6bff27f44cd(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandlerd7d6c4dd4a25c59d0b92f1d3c6db8a26(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandlere7a388e7486d16065c21f708283767b7(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler492a42d4ec5d7c4e873aa964317081c3(array()); ?>


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

function __slotHandler8f561ed9cf2084f7c301132031520199($I= array()) {
if($I) extract($I);
}

function __slotHandler752bd293384d45b86168c8da7f6c50dd($J= array()) {
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
$this->_templatee8224ca10faeff618476502040e082e4(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template15ff882175be8d9876489ba9d4608ff0(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _templatee8224ca10faeff618476502040e082e4($M= array()) {
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

function _template15ff882175be8d9876489ba9d4608ff0($X= array()) {
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

function __slotHandler1710a8e3ccc5e7b4885d57a4134080fa($BP= array()) {
if($BP) extract($BP); ?>


<?php $this->__staticInclude3('_admin/selectors.phtml'); ?>

<?php $this->__staticInclude4('_admin_object/actions.phtml'); ?>



<div id="header">
    <h1>
        Product MENU: admin_tree_product display
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
           title="Create product" class='thickbox'>
            <img src='/shared/images/icons/page_white_add.png'/> Create tree_product
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
                <th><?php $this->_template24a282888db9e2cf3a084bcbdc0b9c49(array('template' => 'selectors_toggler',)); ?></th>
                <th>#ID</th>
                <th>node_id</th>
                <th>Характеристика</th>
                <th>Значение_Свойства</th>
                <th>is_branch</th>

                <th>Actions</th>
            </tr>
            <?php } ?>

            <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
                <td><?php $CK='';
$CL = $item;
if((is_array($CL) || ($CL instanceof ArrayAccess)) && isset($CL['id'])) { $CK = $CL['id'];
}else{ $CK = '';}
$this->_template61942598b541ee4427eb455900d7adde(array('template' => 'selector','value' => $CK,)); ?></td>
                <td>#<?php $CP='';
$CQ = $item;
if((is_array($CQ) || ($CQ instanceof ArrayAccess)) && isset($CQ['id'])) { $CP = $CQ['id'];
}else{ $CP = '';}
echo htmlspecialchars($CP,3); ?></td>
                <td>#<?php $CR='';
$CS = $item;
if((is_array($CS) || ($CS instanceof ArrayAccess)) && isset($CS['node_id'])) { $CR = $CS['node_id'];
}else{ $CR = '';}
echo htmlspecialchars($CR,3); ?>#</td>
                <td><?php $CT='';
$CU = $item;
$CT = $CU->gettreeattribute();
$CT = $CT->getTitle();
echo htmlspecialchars($CT,3); ?></td>
                <td><?php $CV='';
$CW = $item;
if((is_array($CW) || ($CW instanceof ArrayAccess)) && isset($CW['attr_value'])) { $CV = $CW['attr_value'];
}else{ $CV = '';}
echo htmlspecialchars($CV,3); ?></td>
                <td><?php $CX='';
$CY = $item;
if((is_array($CY) || ($CY instanceof ArrayAccess)) && isset($CY['is_branch'])) { $CX = $CY['is_branch'];
}else{ $CX = '';}
echo htmlspecialchars($CX,3); ?></td>

                <td class='actions'>
                    <?php $this->_templated99c7b652aca913b62085417c6c374c6(array('template' => 'object_action_edit','item' => $item,'icon' => 'page_white_edit',)); ?>

                    <?php $this->_template0c3881e674af97149360fcd228988d1f(array('template' => 'object_action_delete','item' => $item,'icon' => 'page_white_delete',)); ?>

                </td>
            </tr>
            <?php $CD++;}if($CD > 0) { ?>

            
        </table>
    </div>
    <?php }if($CD == 0) { ?>

            <div class="empty_list">Empty items</div>
            <?php } ?>


    <?php
    //@todo this fragment to ShopTools

    $arr = lmbCollection::toFlatArray($this->items);
    //lmb_var_debug($arr);
    $tmp = array();
    foreach($arr as $key => $val) {
        //$tmp[$key][$val[$key]][]= array('id'=>$val['id'], 'title'=>$val['title']);
        $tmp[ $val['node_id']][] = array(
            'id' => $val['id'],
            'node_id' => $val['node_id'],
                'attr_id' => $val['attr_id'],
        'attr_value' => $val['attr_value'],
        'is_branch' => $val['is_branch']) ;
        //echo '<br>'.$key;
    }
    //lmb_var_debug($tmp);
    $this->arr_tovar = $tmp;
    ?>

    <?php $EF = 0;$EH = $this->arr_tovar;

if(!is_array($EH) && !($EH instanceof Iterator) && !($EH instanceof IteratorAggregate)) {
$EH = array();}
$EG = $EH;
foreach($EG as $item) {$parity = (( ($EF + 1) % 2) ? "odd" : "even");if($EF == 0) { ?>

    <?php $this->__staticInclude6('_admin_object/actions.phtml'); ?>

    <div class="list">

        <table>
            <tr>

                <th>#ID</th>
                <th>Заголовок</th>
                <th>Описание</th>
                <th>Идентификатор</th>

                <th>Дата добавления</th>
                <th>Дата обновления</th>

                <th>Цена</th>

            </tr>
            <?php } ?>

            <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
                <td>#<?php $EL='';
$EM = $item;
if((is_array($EM) || ($EM instanceof ArrayAccess)) && isset($EM['id'])) { $EL = $EM['id'];
}else{ $EL = '';}
echo htmlspecialchars($EL,3); ?></td>

                <?php
                //@todo this fragment to ShopTools
                $arr_tovar_attr = array_reverse($item);
                ?>

                <?php $ER = 0;$ET = $arr_tovar_attr;

if(!is_array($ET) && !($ET instanceof Iterator) && !($ET instanceof IteratorAggregate)) {
$ET = array();}
$ES = $ET;
foreach($ES as $tovar) {if($ER == 0) { ?>

                <?php } ?>

                <td>
                    <?php $EV='';
$EW = $tovar;
if((is_array($EW) || ($EW instanceof ArrayAccess)) && isset($EW['attr_value'])) { $EV = $EW['attr_value'];
}else{ $EV = '';}
echo htmlspecialchars($EV,3); ?>

                </td>
                <?php $ER++;}if($ER > 0) { ?>

                <?php } ?>


            </tr>
            <?php $EF++;}if($EF > 0) { ?>

            
        </table>
    </div>
    <?php }if($EF == 0) { ?>

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

function _template24a282888db9e2cf3a084bcbdc0b9c49($CH= array()) {
if($CH) extract($CH); ?>

  <input type='checkbox' onclick='toggle_selected(this);' name='mark_all'/>
<?php 
}

function _template61942598b541ee4427eb455900d7adde($CM= array()) {
if($CM) extract($CM); ?>

  <input type='checkbox' name="ids[]" value='<?php echo htmlspecialchars($value,3); ?>'/>
<?php 
}

function _templated99c7b652aca913b62085417c6c374c6($DB= array()) {
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

function _template0c3881e674af97149360fcd228988d1f($DP= array()) {
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

function __staticInclude6($file) {
 ?>








<?php 
}

function __slotHandler86092252051bb8ef45c6e6bff27f44cd($FX= array()) {
if($FX) extract($FX);
}

function __slotHandlerd7d6c4dd4a25c59d0b92f1d3c6db8a26($GU= array()) {
if($GU) extract($GU);
}

function __slotHandlere7a388e7486d16065c21f708283767b7($GV= array()) {
if($GV) extract($GV); ?>

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

function __slotHandler492a42d4ec5d7c4e873aa964317081c3($GW= array()) {
if($GW) extract($GW);
}

}
}
$macro_executor_class='MacroTemplateExecutord8fe71921f111c7e26e7067903af0029';