<?php /* This file is generated from /home/dnn/web/webshop/template/admin_uitree/node.phtml*/?><?php
if(!class_exists('MacroTemplateExecutord447965aca15b9b848643736c6226153', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutord447965aca15b9b848643736c6226153 extends lmbMacroTemplateExecutor {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler7f3ccd01349ddd621fce27350f133c38(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler8fb283341aaa85fe6657c52bd77283cf(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler902b6b0ccc528c5e88fcf58be1c10f9f(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $HI = 0;$HK = $this->navigation;

if(!is_array($HK) && !($HK instanceof Iterator) && !($HK instanceof IteratorAggregate)) {
$HK = array();}
$HJ = $HK;
foreach($HJ as $item) {if($HI == 0) { ?>

        <?php } ?>

        <dt class='<?php $HM='';
$HN = $item;
if((is_array($HN) || ($HN instanceof ArrayAccess)) && isset($HN['id'])) { $HM = $HN['id'];
}else{ $HM = '';}
echo htmlspecialchars($HM,3); ?>'><img src='<?php $HO='';
$HP = $item;
if((is_array($HP) || ($HP instanceof ArrayAccess)) && isset($HP['icon'])) { $HO = $HP['icon'];
}else{ $HO = '';}
echo htmlspecialchars($HO,3); ?>'/> <?php $HQ='';
$HR = $item;
if((is_array($HR) || ($HR instanceof ArrayAccess)) && isset($HR['title'])) { $HQ = $HR['title'];
}else{ $HQ = '';}
echo htmlspecialchars($HQ,3); ?> </dt>
        <dd>
          <?php $HS='';
$HT = $item;
if((is_array($HT) || ($HT instanceof ArrayAccess)) && isset($HT['children'])) { $HS = $HT['children'];
}else{ $HS = '';}
$HW = 0;$HY = $HS;

if(!is_array($HY) && !($HY instanceof Iterator) && !($HY instanceof IteratorAggregate)) {
$HY = array();}
$HX = $HY;
foreach($HX as $sub_item) {if($HW == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $IA='';
$IB = $sub_item;
if((is_array($IB) || ($IB instanceof ArrayAccess)) && isset($IB['icon'])) { $IA = $IB['icon'];
}else{ $IA = '';}
echo htmlspecialchars($IA,3); ?>'/> <a href='<?php $IC='';
$ID = $sub_item;
if((is_array($ID) || ($ID instanceof ArrayAccess)) && isset($ID['url'])) { $IC = $ID['url'];
}else{ $IC = '';}
echo htmlspecialchars($IC,3); ?>'><?php $IE='';
$IF = $sub_item;
if((is_array($IF) || ($IF instanceof ArrayAccess)) && isset($IF['title'])) { $IE = $IF['title'];
}else{ $IE = '';}
echo htmlspecialchars($IE,3); ?></a>
              </li><?php $HW++;}if($HW > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $HI++;}if($HI > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler0c84d2914dffa35829708bfb2281f38d(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler4f522a69811e632963b273dc1faf3ab4(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler0cf4f318d9d572973e8111c06100a5f1(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler7b432c7ba367b388a4b330f836a44f62(array()); ?>


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

function __slotHandler7f3ccd01349ddd621fce27350f133c38($I= array()) {
if($I) extract($I);
}

function __slotHandler8fb283341aaa85fe6657c52bd77283cf($J= array()) {
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
$this->_template38eb7a8fb6cafa47e8bba082d4bd69ec(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_templatee6a7bd55a7fc9256c86c6f92afe9e0c2(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template38eb7a8fb6cafa47e8bba082d4bd69ec($M= array()) {
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

function _templatee6a7bd55a7fc9256c86c6f92afe9e0c2($X= array()) {
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

function __slotHandler902b6b0ccc528c5e88fcf58be1c10f9f($BP= array()) {
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
 ?>'
           title="Create preference" class='thickbox'>
            <img src='/shared/images/icons/page_white_add.png'/> Create preference
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
//    $uri = lmbToolkit::instance()->getRequest()->getUri();
//    lmb_var_debug($uri); new lmbUri()
    // self :: _getCallingClass();

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
            ?>
            <a href='<?php $BW = array();
$BV = lmbArrayHelper :: explode(',',':', 'controller:admin_uitree,action:append');
foreach($BV as $key => $value) $BW[trim($key)] = trim($value);
$BX = false;
echo lmbToolkit :: instance()->getRoutesUrl($BW, '', $BX);
 ?>/<?php echo htmlspecialchars($this->id,3); ?>'
               title="Create product" class='thickbox'>
                <img src='/shared/images/icons/page_white_add.png'/> Добавить товар
            </a>
        <?php
        }
    ?>

    <?php $this->_render_tree1c55e2436b0defcde2a54860479387db($tree_tst, 0,array('kids_prop' => 'preloaded_children','prefix' => '',));
 ?>


    <p>May be append product this Node_tree: <?php echo htmlspecialchars($this->isTail,3); ?></p>
    <?php
    echo ($bl_mayBe)? 'yes_isMayBe':'no_isMayBe';
    echo '<br>';
    echo ($bl_access)? 'yes_access':'not_access';

    ?>

</div>


<div class="list" style="lign-self: flex-end; margin: 5px 5px;">

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
            <th colspan="6">my_children</th>
        </tr>
        <?php $DE = 0;$DG = $this->childrens;

if(!is_array($DG) && !($DG instanceof Iterator) && !($DG instanceof IteratorAggregate)) {
$DG = array();}
$DF = $DG;
foreach($DF as $item) {$my_counter = $DE+1;if($DE == 0) { ?>

        <?php } ?>

        <tr>
            <td><?php echo htmlspecialchars($my_counter,3); ?></td>
            <td><?php $DK='';
$DL = $item;
if((is_array($DL) || ($DL instanceof ArrayAccess)) && isset($DL['id'])) { $DK = $DL['id'];
}else{ $DK = '';}
echo htmlspecialchars($DK,3); ?></td>
            <td><?php $DM='';
$DN = $item;
if((is_array($DN) || ($DN instanceof ArrayAccess)) && isset($DN['parent_id'])) { $DM = $DN['parent_id'];
}else{ $DM = '';}
echo htmlspecialchars($DM,3); ?></td>
            <td><?php $DO='';
$DP = $item;
if((is_array($DP) || ($DP instanceof ArrayAccess)) && isset($DP['level'])) { $DO = $DP['level'];
}else{ $DO = '';}
echo htmlspecialchars($DO,3); ?> lvl </td>
            <td><?php $DQ='';
$DR = $item;
if((is_array($DR) || ($DR instanceof ArrayAccess)) && isset($DR['identifier'])) { $DQ = $DR['identifier'];
}else{ $DQ = '';}
echo htmlspecialchars($DQ,3); ?></td>
            <td><?php $DS='';
$DT = $item;
if((is_array($DT) || ($DT instanceof ArrayAccess)) && isset($DT['path'])) { $DS = $DT['path'];
}else{ $DS = '';}
echo htmlspecialchars($DS,3); ?></td>
        </tr>
        <?php $DE++;}if($DE > 0) { ?>

        
        <?php }if($DE == 0) { ?>

        <tr>
            <td colspan="6">...</td>
        </tr>
        <?php } ?>


        <tr>
            <th colspan="6">my_specifications</th>
        </tr>
        <?php $EA = 0;$EC = $this->specifications;

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

        
        <?php }if($EA == 0) { ?>

        <tr>
            <td colspan="6">пусто :-(</td>
        </tr>
        <?php } ?>


        <tr>
            <th colspan="6">childrens_specifications</th>
        </tr>
        <?php $EW = 0;$EY = $this->child_specs;

if(!is_array($EY) && !($EY instanceof Iterator) && !($EY instanceof IteratorAggregate)) {
$EY = array();}
$EX = $EY;
foreach($EX as $item) {$my_counter = $EW+1;if($EW == 0) { ?>

        <?php } ?>

        <tr>
            <td><?php echo htmlspecialchars($my_counter,3); ?></td>
            <td>(<?php $FC='';
$FD = $item;
if((is_array($FD) || ($FD instanceof ArrayAccess)) && isset($FD['id'])) { $FC = $FD['id'];
}else{ $FC = '';}
echo htmlspecialchars($FC,3); ?>)</td>
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

                (<?php $FE='';
$FF = $item;
if((is_array($FF) || ($FF instanceof ArrayAccess)) && isset($FF['id_sys_tree'])) { $FE = $FF['id_sys_tree'];
}else{ $FE = '';}
echo htmlspecialchars($FE,3); ?>)
                <?php
                    if($item['is_branch']==0)
                    {
                        echo '<a href="/toCart/'.$item['id_sys_tree'].'">';
                        echo '<img src="/shared/images/icons/cart_add.png" alt="2cart" /></a>';
                    }
                ?>
            </td>
            <td>(<?php $FG='';
$FH = $item;
if((is_array($FH) || ($FH instanceof ArrayAccess)) && isset($FH['id_pr'])) { $FG = $FH['id_pr'];
}else{ $FG = '';}
echo htmlspecialchars($FG,3); ?>)</td>
            <td>(<?php $FI='';
$FJ = $item;
if((is_array($FJ) || ($FJ instanceof ArrayAccess)) && isset($FJ['value_pr'])) { $FI = $FJ['value_pr'];
}else{ $FI = '';}
echo htmlspecialchars($FI,3); ?>)</td>
            <td>(<?php $FK='';
$FL = $item;
if((is_array($FL) || ($FL instanceof ArrayAccess)) && isset($FL['is_branch'])) { $FK = $FL['is_branch'];
}else{ $FK = '';}
echo htmlspecialchars($FK,3); ?>): <?php echo htmlspecialchars($this->pref[$item['id_pr']],3); ?></td>
        </tr>
        <?php $EW++;}if($EW > 0) { ?>

        
        <?php }if($EW == 0) { ?>

        <tr>
            <td colspan="6">пусто :-(</td>
        </tr>
        <?php } ?>


        <tr>
            <th colspan="6">legacy_specifications</th>
        </tr>
        <?php $FU = 0;$FW = $this->legacy_specs;

if(!is_array($FW) && !($FW instanceof Iterator) && !($FW instanceof IteratorAggregate)) {
$FW = array();}
$FV = $FW;
foreach($FV as $item) {$my_counter = $FU+1;if($FU == 0) { ?>

        <?php } ?>

        <tr>
            <td><?php echo htmlspecialchars($my_counter,3); ?></td>
            <td>(<?php $GA='';
$GB = $item;
if((is_array($GB) || ($GB instanceof ArrayAccess)) && isset($GB['id'])) { $GA = $GB['id'];
}else{ $GA = '';}
echo htmlspecialchars($GA,3); ?>)</td>
            <td>(<?php $GC='';
$GD = $item;
if((is_array($GD) || ($GD instanceof ArrayAccess)) && isset($GD['id_sys_tree'])) { $GC = $GD['id_sys_tree'];
}else{ $GC = '';}
echo htmlspecialchars($GC,3); ?>)</td>
            <td>(<?php $GE='';
$GF = $item;
if((is_array($GF) || ($GF instanceof ArrayAccess)) && isset($GF['id_pr'])) { $GE = $GF['id_pr'];
}else{ $GE = '';}
echo htmlspecialchars($GE,3); ?>)</td>
            <td>(<?php $GG='';
$GH = $item;
if((is_array($GH) || ($GH instanceof ArrayAccess)) && isset($GH['value_pr'])) { $GG = $GH['value_pr'];
}else{ $GG = '';}
echo htmlspecialchars($GG,3); ?>)</td>
            <td>
                <p <?php if (in_array($item['id'], $this->arr_notAdded)) echo 'style="text-transform:uppercase;"'; ?> >
                    (<?php $GI='';
$GJ = $item;
if((is_array($GJ) || ($GJ instanceof ArrayAccess)) && isset($GJ['is_branch'])) { $GI = $GJ['is_branch'];
}else{ $GI = '';}
echo htmlspecialchars($GI,3); ?>): <?php echo htmlspecialchars($this->pref[$item['id_pr']],3); ?>

                </p>
            </td>
        </tr>
        <?php $FU++;}if($FU > 0) { ?>

        
        <?php }if($FU == 0) { ?>

        <tr>
            <td colspan="6">пусто :-(</td>
        </tr>
        <?php } ?>


        <tr>
            <th colspan="6">preference(specifications)</th>
        </tr>
        <?php $GS = 0;$GU = $this->specs;

if(!is_array($GU) && !($GU instanceof Iterator) && !($GU instanceof IteratorAggregate)) {
$GU = array();}
$GT = $GU;
foreach($GT as $item) {$my_counter = $GS+1;if($GS == 0) { ?>

        <?php } ?>

        <tr>
            <td><?php echo htmlspecialchars($my_counter,3); ?></td>
            <td>(<?php $GY='';
$GZ = $item;
if((is_array($GZ) || ($GZ instanceof ArrayAccess)) && isset($GZ['id'])) { $GY = $GZ['id'];
}else{ $GY = '';}
echo htmlspecialchars($GY,3); ?>)</td>
            <td>()</td>
            <td>()</td>
            <td>(<?php $HA='';
$HB = $item;
if((is_array($HB) || ($HB instanceof ArrayAccess)) && isset($HB['title'])) { $HA = $HB['title'];
}else{ $HA = '';}
echo htmlspecialchars($HA,3); ?>)</td>
            <td>(<?php $HC='';
$HD = $item;
if((is_array($HD) || ($HD instanceof ArrayAccess)) && isset($HD['importance'])) { $HC = $HD['importance'];
}else{ $HC = '';}
echo htmlspecialchars($HC,3); ?>): <?php echo htmlspecialchars($this->pref[$item['id']],3); ?>

                <?php /* echo $this->pref[$item['id']];*/ ?>
            </td>
        </tr>
        <?php $GS++;}if($GS > 0) { ?>

        
        <?php }if($GS == 0) { ?>

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

function _render_tree1c55e2436b0defcde2a54860479387db($CG,$level,$CI= array()) {
if($CI) extract($CI);$CH=0;
foreach($CG as $item) {
$counter = $CH+1;
if(!$CH) {
 ?>

    <ul >
        <?php }
 ?>

        <li>
            <?php echo htmlspecialchars($counter,3); ?>) <a href="<?php $CL='';
$CM = $item;
if((is_array($CM) || ($CM instanceof ArrayAccess)) && isset($CM['id'])) { $CL = $CM['id'];
}else{ $CL = '';}
echo htmlspecialchars($CL,3); ?>"><?php $CN='';
$CO = $item;
if((is_array($CO) || ($CO instanceof ArrayAccess)) && isset($CO['id'])) { $CN = $CO['id'];
}else{ $CN = '';}
echo htmlspecialchars($CN,3); ?></a>&nbsp;|&nbsp;
            <a href="<?php $CQ = array();
$CP = lmbArrayHelper :: explode(',',':', 'action:node');
foreach($CP as $key => $value) $CQ[trim($key)] = trim($value);
$CR = false;
echo lmbToolkit :: instance()->getRoutesUrl($CQ, '', $CR);
 ?>/<?php $CS='';
$CT = $item;
if((is_array($CT) || ($CT instanceof ArrayAccess)) && isset($CT['identifier'])) { $CS = $CT['identifier'];
}else{ $CS = '';}
echo htmlspecialchars($CS,3); ?>"><?php $CU='';
$CV = $item;
if((is_array($CV) || ($CV instanceof ArrayAccess)) && isset($CV['identifier'])) { $CU = $CV['identifier'];
}else{ $CU = '';}
echo htmlspecialchars($CU,3); ?></a>
            <?php if(isset($item["preloaded_children"])) {$this->_render_tree1c55e2436b0defcde2a54860479387db($item["preloaded_children"], $level + 1, array());
} ?>

        </li>
        <?php $CH++;
}
if(count($CG) == 0) { ?>

        tree_array is empty
        <?php }if($CH) {
 ?>

        
    </ul>
    <?php }

}

function __slotHandler0c84d2914dffa35829708bfb2281f38d($IG= array()) {
if($IG) extract($IG);
}

function __slotHandler4f522a69811e632963b273dc1faf3ab4($JD= array()) {
if($JD) extract($JD);
}

function __slotHandler0cf4f318d9d572973e8111c06100a5f1($JE= array()) {
if($JE) extract($JE); ?>

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

function __slotHandler7b432c7ba367b388a4b330f836a44f62($JF= array()) {
if($JF) extract($JF);
}

}
}
$macro_executor_class='MacroTemplateExecutord447965aca15b9b848643736c6226153';