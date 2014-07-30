<?php /* This file is generated from /home/dnn/web/webshop/template/admin_uitree/branch.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor5d243765b13f01b1091e67446fce305b', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
class MacroTemplateExecutor5d243765b13f01b1091e67446fce305b extends lmbMacroTemplateExecutor {

function _init() {
$this->form_search_form = new lmbMacroFormWidget('search_form');
$this->form_search_form->setAttributes(array (
  'method' => 'GET',
  'id' => 'search_form',
  'name' => 'search_form',
  'action' => 'branch',
));
$this->input_id001 = new lmbMacroInputWidget('product');
$this->input_id001->setAttributes(array (
  'type' => 'text',
  'name' => 'title',
  'id' => 'product',
  'size' => '10',
));
$this->input_id001->setForm($this->form_search_form);
$this->form_search_form->addChild($this->input_id001);

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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlerf5462d9c561f37f8631e7f39d1d7796a(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlerdf74f52880f6b86e06ca91fd87cdfb96(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandleredab925ca40952e1127804c41559848c(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $JA = 0;$JC = $this->navigation;

if(!is_array($JC) && !($JC instanceof Iterator) && !($JC instanceof IteratorAggregate)) {
$JC = array();}
$JB = $JC;
foreach($JB as $item) {if($JA == 0) { ?>

        <?php } ?>

        <dt class='<?php $JE='';
$JF = $item;
if((is_array($JF) || ($JF instanceof ArrayAccess)) && isset($JF['id'])) { $JE = $JF['id'];
}else{ $JE = '';}
echo htmlspecialchars($JE,3); ?>'><img src='<?php $JG='';
$JH = $item;
if((is_array($JH) || ($JH instanceof ArrayAccess)) && isset($JH['icon'])) { $JG = $JH['icon'];
}else{ $JG = '';}
echo htmlspecialchars($JG,3); ?>'/> <?php $JI='';
$JJ = $item;
if((is_array($JJ) || ($JJ instanceof ArrayAccess)) && isset($JJ['title'])) { $JI = $JJ['title'];
}else{ $JI = '';}
echo htmlspecialchars($JI,3); ?> </dt>
        <dd>
          <?php $JK='';
$JL = $item;
if((is_array($JL) || ($JL instanceof ArrayAccess)) && isset($JL['children'])) { $JK = $JL['children'];
}else{ $JK = '';}
$JO = 0;$JQ = $JK;

if(!is_array($JQ) && !($JQ instanceof Iterator) && !($JQ instanceof IteratorAggregate)) {
$JQ = array();}
$JP = $JQ;
foreach($JP as $sub_item) {if($JO == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $JS='';
$JT = $sub_item;
if((is_array($JT) || ($JT instanceof ArrayAccess)) && isset($JT['icon'])) { $JS = $JT['icon'];
}else{ $JS = '';}
echo htmlspecialchars($JS,3); ?>'/> <a href='<?php $JU='';
$JV = $sub_item;
if((is_array($JV) || ($JV instanceof ArrayAccess)) && isset($JV['url'])) { $JU = $JV['url'];
}else{ $JU = '';}
echo htmlspecialchars($JU,3); ?>'><?php $JW='';
$JX = $sub_item;
if((is_array($JX) || ($JX instanceof ArrayAccess)) && isset($JX['title'])) { $JW = $JX['title'];
}else{ $JW = '';}
echo htmlspecialchars($JW,3); ?></a>
              </li><?php $JO++;}if($JO > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $JA++;}if($JA > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler80437d8886c6408645f84466c5e68093(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler730b75df4357880d2ef764b26ebfef90(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler7644fc6de702a3bc62152b9e630eca6f(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler41660f455a429c821de87ec63c738841(array()); ?>


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

function __slotHandlerf5462d9c561f37f8631e7f39d1d7796a($I= array()) {
if($I) extract($I);
}

function __slotHandlerdf74f52880f6b86e06ca91fd87cdfb96($J= array()) {
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
$this->_templatec4467a000587b9d47cbb0510b10509b8(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template577df5e007d011e04cca915cea36b869(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _templatec4467a000587b9d47cbb0510b10509b8($M= array()) {
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

function _template577df5e007d011e04cca915cea36b869($X= array()) {
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

function __slotHandleredab925ca40952e1127804c41559848c($BP= array()) {
if($BP) extract($BP); ?>


<?php $this->__staticInclude3('_admin/selectors.phtml'); ?>

<?php $this->__staticInclude4('_admin_object/actions.phtml'); ?>



<div id="header">
    <h1>Node #<?php echo htmlspecialchars($this->id,3); ?></h1>

    <div class="header_actions">
        <a href='<?php $BT = array();
$BS = lmbArrayHelper :: explode(',',':', 'action:create');
foreach($BS as $key => $value) $BT[trim($key)] = trim($value);
$BU = false;
echo lmbToolkit :: instance()->getRoutesUrl($BT, '', $BU);
 ?>?tonode=<?php echo htmlspecialchars($this->id,3); ?>'
           title="Create preference" class='thickbox'>
            <img src='/shared/images/icons/page_white_add.png'/> Create Category
        </a>
    </div>

</div>

<div id="body" style="display: flex;">

<div style="align-self: flex-start; width: 320px">

    <?php
    lmb_require('limb/tree/src/lmbTreeNestedCollection.class.php');
    lmb_require('limb/tree/src/lmbTreeHelper.class.php');

    lmb_require('limb/tree/src/lmbTreeDecorator.class.php');
    lmb_require('limb/tree/src/lmbMPTree.class.php');


    $sorted = lmbTreeHelper :: sort($this->childrens, array('id' => 'ASC'));
    $tree_tst = new lmbTreeNestedCollection($sorted);
    $tree_tst->setChildrenField('preloaded_children');
    $tree_tst->rewind();
    //$this->tr = $tree_tst;
//    $uri = lmbToolkit::instance()->getRequest()->getUri();
//    lmb_var_debug($uri); new lmbUri()

    /*
        echo ($this->isTail)? 'is_tail':'is_not_tail';
        echo '<br>';
        echo ($this->isTailBranch)? 'is_tailBranch':'is_not_tailBranch';
        echo '<br>';
        echo ($this->isBranch)? 'is_Branch':'is_not_Branch';
        echo '<br>';
        echo (($this->isBranch)&&($this->isTailBranch)&&(!$this->isTail))? 'access_add_product':'not_access_add_tovar';
        echo '<br>';
    */
        $bl_mayBe = $this->isMayBe;
        $bl_access = ($this->isBranch)&&($this->isTailBranch)&&(!$this->isTail)&&($bl_mayBe);

        if($bl_access)
        {
            //<a href='{{route_url params="controller:admin_uitree,action:append"/}}/{$this->id}'
            //<a href='{{route_url params="controller:admin_uitree,action:сreate"/}}?ofnode={$this->id}'
            ?>
            <a href='<?php $BY = array();
$BX = lmbArrayHelper :: explode(',',':', 'action:create');
foreach($BX as $key => $value) $BY[trim($key)] = trim($value);
$BZ = false;
echo lmbToolkit :: instance()->getRoutesUrl($BY, '', $BZ);
 ?>?ofnode=<?php echo htmlspecialchars($this->id,3); ?>'
               title="Create product" class='thickbox'>
                <img src='/shared/images/icons/page_white_add.png'/> Добавить товар
            </a>
        <?php
        }
    ?>

    <?php $this->_render_tree28086b937aa64f09c0030fd148d7aa74($tree_tst, 0,array('kids_prop' => 'preloaded_children','prefix' => '',));
 ?>


    <p>May be append product this Node_tree: <?php echo htmlspecialchars($this->isTail,3); ?></p>
    <?php
    echo ($bl_mayBe)? 'yes_isMayBe':'no_isMayBe';
    echo '<br>';
    echo ($bl_access)? 'yes_access':'not_access';

    ?>

</div>


<div class="list" style="lign-self: flex-end; margin: 5px 5px;">

    <div id="found">

        <a href="<?php $DB = array();
$DA = lmbArrayHelper :: explode(',',':', 'controller:admin_uitree,action:branch');
foreach($DA as $key => $value) $DB[trim($key)] = trim($value);
$DC = false;
echo lmbToolkit :: instance()->getRoutesUrl($DB, '', $DC);
 ?>">Display all</a>
        <?php $DD='';
$DE = $this->helper;
$DD = $DE->getAlphabet();
$DF = 0;$DH = $DD;

if(!is_array($DH) && !($DH instanceof Iterator) && !($DH instanceof IteratorAggregate)) {
$DH = array();}
$DG = $DH;
foreach($DG as $item) {if($DF == 0) { ?>

        <?php } ?>

        <?php 
        //echo 'item: '. $item;
        if ($this->helper->getCurrentLetter() == $item) { ?>
            <b><?php echo strtoupper($item); ?></b>
        <?php  } else { ?>
            <?php $letter_param = AlphabetHelper :: REQUEST_PARAM_NAME; ?>
            <a href='<?php $DM = array();
$DL = lmbArrayHelper :: explode(',',':', 'controller:admin_uitree,action:branch');
foreach($DL as $key => $value) $DM[trim($key)] = trim($value);
$DN = false;
echo lmbToolkit :: instance()->getRoutesUrl($DM, '', $DN);
 ?>?<?php echo htmlspecialchars($letter_param,3); ?>=<?php echo htmlspecialchars($item,3); ?>'><?php echo strtoupper($item); ?></a>
        <?php  } ?>
        <?php $DF++;}if($DF > 0) { ?>

        <?php } ?>


        <p><strong>Search the products:</strong></p>
        <?php if(isset($this->form_search_form_datasource))$this->form_search_form->setDatasource($this->form_search_form_datasource);
if(isset($this->form_search_form_error_list))$this->form_search_form->setErrorList($this->form_search_form_error_list);
 ?><form<?php $this->form_search_form->renderAttributes(); ?>>
            <label for='title'>Product title && description:</label>
            <input<?php $this->input_id001->renderAttributes(); ?> />
            <input type='submit' name='search' value="Search!" class='button'/><br/>
        </form>

    </div>

    <table border="1">
        <tr>
            <th>#</th>
            <th>id</th>
            <th>id_sys_tree</th>
            <th>id_pr</th>
            <th>value_pr</th>
            <th>is_branch</th>
        </tr>


        <tr>
            <th colspan="6">my_children_by_found:<?php  echo sizeof($this->items); ?></th>
        </tr>
        <?php $EA = 0;$EC = $this->items;

if(!is_array($EC) && !($EC instanceof Iterator) && !($EC instanceof IteratorAggregate)) {
$EC = array();}
$EB = $EC;
foreach($EB as $item) {$my_counter = $EA+1;if($EA == 0) { ?>

        <?php } ?>

        <tr>
            <td><?php echo htmlspecialchars($my_counter,3); ?></td>
            <td>(<?php $EG='';
$EH = $item;
if((is_array($EH) || ($EH instanceof ArrayAccess)) && isset($EH['id'])) { $EG = $EH['id'];
}else{ $EG = '';}
echo htmlspecialchars($EG,3); ?>)</td>
            <td>(<?php $EI='';
$EJ = $item;
if((is_array($EJ) || ($EJ instanceof ArrayAccess)) && isset($EJ['id_sys_tree'])) { $EI = $EJ['id_sys_tree'];
}else{ $EI = '';}
echo htmlspecialchars($EI,3); ?>)</td>
            <td>(<?php $EK='';
$EL = $item;
if((is_array($EL) || ($EL instanceof ArrayAccess)) && isset($EL['id_pr'])) { $EK = $EL['id_pr'];
}else{ $EK = '';}
echo htmlspecialchars($EK,3); ?>)</td>
            <td>(<?php $EM='';
$EN = $item;
if((is_array($EN) || ($EN instanceof ArrayAccess)) && isset($EN['value_pr'])) { $EM = $EN['value_pr'];
}else{ $EM = '';}
echo htmlspecialchars($EM,3); ?>)</td>
            <td>(<?php $EO='';
$EP = $item;
if((is_array($EP) || ($EP instanceof ArrayAccess)) && isset($EP['is_branch'])) { $EO = $EP['is_branch'];
}else{ $EO = '';}
echo htmlspecialchars($EO,3); ?>)</td>
        </tr>
        <?php $EA++;}if($EA > 0) { ?>

        <?php } ?>



        <tr>
            <th colspan="6">my_children</th>
        </tr>
        <?php $EW = 0;$EY = $this->childrens;

if(!is_array($EY) && !($EY instanceof Iterator) && !($EY instanceof IteratorAggregate)) {
$EY = array();}
$EX = $EY;
foreach($EX as $item) {$my_counter = $EW+1;if($EW == 0) { ?>

        <?php } ?>

        <tr>
            <td><?php echo htmlspecialchars($my_counter,3); ?></td>
            <td><?php $FC='';
$FD = $item;
if((is_array($FD) || ($FD instanceof ArrayAccess)) && isset($FD['id'])) { $FC = $FD['id'];
}else{ $FC = '';}
echo htmlspecialchars($FC,3); ?></td>
            <td><?php $FE='';
$FF = $item;
if((is_array($FF) || ($FF instanceof ArrayAccess)) && isset($FF['parent_id'])) { $FE = $FF['parent_id'];
}else{ $FE = '';}
echo htmlspecialchars($FE,3); ?></td>
            <td><?php $FG='';
$FH = $item;
if((is_array($FH) || ($FH instanceof ArrayAccess)) && isset($FH['level'])) { $FG = $FH['level'];
}else{ $FG = '';}
echo htmlspecialchars($FG,3); ?> lvl </td>
            <td><?php $FI='';
$FJ = $item;
if((is_array($FJ) || ($FJ instanceof ArrayAccess)) && isset($FJ['identifier'])) { $FI = $FJ['identifier'];
}else{ $FI = '';}
echo htmlspecialchars($FI,3); ?></td>
            <td><?php $FK='';
$FL = $item;
if((is_array($FL) || ($FL instanceof ArrayAccess)) && isset($FL['path'])) { $FK = $FL['path'];
}else{ $FK = '';}
echo htmlspecialchars($FK,3); ?></td>
        </tr>
        <?php $EW++;}if($EW > 0) { ?>

        
        <?php }if($EW == 0) { ?>

        <tr>
            <td colspan="6">...</td>
        </tr>
        <?php } ?>


        <tr>
            <th colspan="6">my_specifications</th>
        </tr>
        <?php $FS = 0;$FU = $this->specifications;

if(!is_array($FU) && !($FU instanceof Iterator) && !($FU instanceof IteratorAggregate)) {
$FU = array();}
$FT = $FU;
foreach($FT as $item) {$my_counter = $FS+1;if($FS == 0) { ?>

        <?php } ?>

        <tr>
            <td><?php echo htmlspecialchars($my_counter,3); ?></td>
            <td>(<?php $FY='';
$FZ = $item;
if((is_array($FZ) || ($FZ instanceof ArrayAccess)) && isset($FZ['id'])) { $FY = $FZ['id'];
}else{ $FY = '';}
echo htmlspecialchars($FY,3); ?>)</td>
            <td>(<?php $GA='';
$GB = $item;
if((is_array($GB) || ($GB instanceof ArrayAccess)) && isset($GB['id_sys_tree'])) { $GA = $GB['id_sys_tree'];
}else{ $GA = '';}
echo htmlspecialchars($GA,3); ?>)</td>
            <td>(<?php $GC='';
$GD = $item;
if((is_array($GD) || ($GD instanceof ArrayAccess)) && isset($GD['id_pr'])) { $GC = $GD['id_pr'];
}else{ $GC = '';}
echo htmlspecialchars($GC,3); ?>)</td>
            <td>(<?php $GE='';
$GF = $item;
if((is_array($GF) || ($GF instanceof ArrayAccess)) && isset($GF['value_pr'])) { $GE = $GF['value_pr'];
}else{ $GE = '';}
echo htmlspecialchars($GE,3); ?>)</td>
            <td>(<?php $GG='';
$GH = $item;
if((is_array($GH) || ($GH instanceof ArrayAccess)) && isset($GH['is_branch'])) { $GG = $GH['is_branch'];
}else{ $GG = '';}
echo htmlspecialchars($GG,3); ?>)</td>
        </tr>
        <?php $FS++;}if($FS > 0) { ?>

        
        <?php }if($FS == 0) { ?>

        <tr>
            <td colspan="6">пусто :-(</td>
        </tr>
        <?php } ?>


        <tr>
            <th colspan="6">childrens_specifications</th>
        </tr>
        <?php $GO = 0;$GQ = $this->child_specs;

if(!is_array($GQ) && !($GQ instanceof Iterator) && !($GQ instanceof IteratorAggregate)) {
$GQ = array();}
$GP = $GQ;
foreach($GP as $item) {$my_counter = $GO+1;if($GO == 0) { ?>

        <?php } ?>

        <tr>
            <td><?php echo htmlspecialchars($my_counter,3); ?></td>
            <td>(<?php $GU='';
$GV = $item;
if((is_array($GV) || ($GV instanceof ArrayAccess)) && isset($GV['id'])) { $GU = $GV['id'];
}else{ $GU = '';}
echo htmlspecialchars($GU,3); ?>)</td>
            <td>
                <?php
                    if($item['is_branch']==0)
                    {
                        echo '<a href="../item/'.$item['id_sys_tree'].'">';
                        echo '<img src="/shared/images/icons/application_view_detail.png" alt="detail" /></a>';
                    }
                    else
                        echo '&nbsp;';
                ?>

                (<?php $GW='';
$GX = $item;
if((is_array($GX) || ($GX instanceof ArrayAccess)) && isset($GX['id_sys_tree'])) { $GW = $GX['id_sys_tree'];
}else{ $GW = '';}
echo htmlspecialchars($GW,3); ?>)
                <?php
                    if($item['is_branch']==0)
                    {
                        echo '<a href="/toCart/'.$item['id_sys_tree'].'">';
                        echo '<img src="/shared/images/icons/cart_add.png" alt="2cart" /></a>';
                    }
                ?>
            </td>
            <td>(<?php $GY='';
$GZ = $item;
if((is_array($GZ) || ($GZ instanceof ArrayAccess)) && isset($GZ['id_pr'])) { $GY = $GZ['id_pr'];
}else{ $GY = '';}
echo htmlspecialchars($GY,3); ?>)</td>
            <td>(<?php $HA='';
$HB = $item;
if((is_array($HB) || ($HB instanceof ArrayAccess)) && isset($HB['value_pr'])) { $HA = $HB['value_pr'];
}else{ $HA = '';}
echo htmlspecialchars($HA,3); ?>)</td>
            <td>(<?php $HC='';
$HD = $item;
if((is_array($HD) || ($HD instanceof ArrayAccess)) && isset($HD['is_branch'])) { $HC = $HD['is_branch'];
}else{ $HC = '';}
echo htmlspecialchars($HC,3); ?>): <?php echo htmlspecialchars($this->pref[$item['id_pr']],3); ?></td>
        </tr>
        <?php $GO++;}if($GO > 0) { ?>

        
        <?php }if($GO == 0) { ?>

        <tr>
            <td colspan="6">пусто :-(</td>
        </tr>
        <?php } ?>


        <tr>
            <th colspan="6">legacy_specifications</th>
        </tr>
        <?php $HM = 0;$HO = $this->legacy_specs;

if(!is_array($HO) && !($HO instanceof Iterator) && !($HO instanceof IteratorAggregate)) {
$HO = array();}
$HN = $HO;
foreach($HN as $item) {$my_counter = $HM+1;if($HM == 0) { ?>

        <?php } ?>

        <tr>
            <td><?php echo htmlspecialchars($my_counter,3); ?></td>
            <td>(<?php $HS='';
$HT = $item;
if((is_array($HT) || ($HT instanceof ArrayAccess)) && isset($HT['id'])) { $HS = $HT['id'];
}else{ $HS = '';}
echo htmlspecialchars($HS,3); ?>)</td>
            <td>(<?php $HU='';
$HV = $item;
if((is_array($HV) || ($HV instanceof ArrayAccess)) && isset($HV['id_sys_tree'])) { $HU = $HV['id_sys_tree'];
}else{ $HU = '';}
echo htmlspecialchars($HU,3); ?>)</td>
            <td>(<?php $HW='';
$HX = $item;
if((is_array($HX) || ($HX instanceof ArrayAccess)) && isset($HX['id_pr'])) { $HW = $HX['id_pr'];
}else{ $HW = '';}
echo htmlspecialchars($HW,3); ?>)</td>
            <td>(<?php $HY='';
$HZ = $item;
if((is_array($HZ) || ($HZ instanceof ArrayAccess)) && isset($HZ['value_pr'])) { $HY = $HZ['value_pr'];
}else{ $HY = '';}
echo htmlspecialchars($HY,3); ?>)</td>
            <td>
                <p <?php if (in_array($item['id'], $this->arr_notAdded)) echo 'style="text-transform:uppercase;"'; ?> >
                    (<?php $IA='';
$IB = $item;
if((is_array($IB) || ($IB instanceof ArrayAccess)) && isset($IB['is_branch'])) { $IA = $IB['is_branch'];
}else{ $IA = '';}
echo htmlspecialchars($IA,3); ?>): <?php echo htmlspecialchars($this->pref[$item['id_pr']],3); ?>

                </p>
            </td>
        </tr>
        <?php $HM++;}if($HM > 0) { ?>

        
        <?php }if($HM == 0) { ?>

        <tr>
            <td colspan="6">пусто :-(</td>
        </tr>
        <?php } ?>


        <tr>
            <th colspan="6">preference(specifications)</th>
        </tr>
        <?php $IK = 0;$IM = $this->specs;

if(!is_array($IM) && !($IM instanceof Iterator) && !($IM instanceof IteratorAggregate)) {
$IM = array();}
$IL = $IM;
foreach($IL as $item) {$my_counter = $IK+1;if($IK == 0) { ?>

        <?php } ?>

        <tr>
            <td><?php echo htmlspecialchars($my_counter,3); ?></td>
            <td>(<?php $IQ='';
$IR = $item;
if((is_array($IR) || ($IR instanceof ArrayAccess)) && isset($IR['id'])) { $IQ = $IR['id'];
}else{ $IQ = '';}
echo htmlspecialchars($IQ,3); ?>)</td>
            <td>()</td>
            <td>()</td>
            <td>(<?php $IS='';
$IT = $item;
if((is_array($IT) || ($IT instanceof ArrayAccess)) && isset($IT['title'])) { $IS = $IT['title'];
}else{ $IS = '';}
echo htmlspecialchars($IS,3); ?>)</td>
            <td>(<?php $IU='';
$IV = $item;
if((is_array($IV) || ($IV instanceof ArrayAccess)) && isset($IV['importance'])) { $IU = $IV['importance'];
}else{ $IU = '';}
echo htmlspecialchars($IU,3); ?>): <?php echo htmlspecialchars($this->pref[$item['id']],3); ?>

                <?php /* echo $this->pref[$item['id']];*/ ?>
            </td>
        </tr>
        <?php $IK++;}if($IK > 0) { ?>

        
        <?php }if($IK == 0) { ?>

        <tr>
            <td colspan="6">пусто :-(</td>
        </tr>
        <?php } ?>


    </table>
</div>

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

function _render_tree28086b937aa64f09c0030fd148d7aa74($CI,$level,$CK= array()) {
if($CK) extract($CK);$CJ=0;
foreach($CI as $item) {
$counter = $CJ+1;
if(!$CJ) {
 ?>

    <ul >
        <?php }
 ?>


        <li>
            <?php echo htmlspecialchars($counter,3); ?>) <a href="branch/<?php $CN='';
$CO = $item;
if((is_array($CO) || ($CO instanceof ArrayAccess)) && isset($CO['id'])) { $CN = $CO['id'];
}else{ $CN = '';}
echo htmlspecialchars($CN,3); ?>"><?php $CP='';
$CQ = $item;
if((is_array($CQ) || ($CQ instanceof ArrayAccess)) && isset($CQ['id'])) { $CP = $CQ['id'];
}else{ $CP = '';}
echo htmlspecialchars($CP,3); ?></a>&nbsp;|&nbsp;
            <a href="<?php $CS = array();
$CR = lmbArrayHelper :: explode(',',':', 'action:branch');
foreach($CR as $key => $value) $CS[trim($key)] = trim($value);
$CT = false;
echo lmbToolkit :: instance()->getRoutesUrl($CS, '', $CT);
 ?>/<?php $CU='';
$CV = $item;
if((is_array($CV) || ($CV instanceof ArrayAccess)) && isset($CV['identifier'])) { $CU = $CV['identifier'];
}else{ $CU = '';}
echo htmlspecialchars($CU,3); ?>"><?php $CW='';
$CX = $item;
if((is_array($CX) || ($CX instanceof ArrayAccess)) && isset($CX['identifier'])) { $CW = $CX['identifier'];
}else{ $CW = '';}
echo htmlspecialchars($CW,3); ?></a>
            <?php if(isset($item["preloaded_children"])) {$this->_render_tree28086b937aa64f09c0030fd148d7aa74($item["preloaded_children"], $level + 1, array());
} ?>

        </li>
        <?php $CJ++;
}
if(count($CI) == 0) { ?>

        tree_array is empty
        <?php }if($CJ) {
 ?>

        
    </ul>
    <?php }

}

function __slotHandler80437d8886c6408645f84466c5e68093($JY= array()) {
if($JY) extract($JY);
}

function __slotHandler730b75df4357880d2ef764b26ebfef90($KV= array()) {
if($KV) extract($KV);
}

function __slotHandler7644fc6de702a3bc62152b9e630eca6f($KW= array()) {
if($KW) extract($KW); ?>

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

function __slotHandler41660f455a429c821de87ec63c738841($KX= array()) {
if($KX) extract($KX);
}

}
}
$macro_executor_class='MacroTemplateExecutor5d243765b13f01b1091e67446fce305b';