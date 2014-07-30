<?php /* This file is generated from /home/dnn/web/webshop/template/main_page/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor8efc007209c02be8d5fa56ce05a9539a', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
require_once('limb/macro/src/tags/list/lmbMacroListGlueHelper.class.php');
class MacroTemplateExecutor8efc007209c02be8d5fa56ce05a9539a extends lmbMacroTemplateExecutor {

function _init() {
$this->form_search_form = new lmbMacroFormWidget('search_form');
$this->form_search_form->setAttributes(array (
  'method' => 'GET',
  'id' => 'search_form',
  'name' => 'search_form',
  'action' => '',
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
 ?><?php  $this->title = ($this->title) ? $this->title : 'Main page '; ?>

<?php $this->__staticInclude1('front_page_layout.phtml', 'content_zone', 'front_page_layout.phtml');
}

function __staticInclude1($file,$into,$file) {
 ?><html>
<head>
    <title><?php echo htmlspecialchars($this->title,3); ?> :: Limb3 SHOP example</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <link rel=stylesheet type="text/css" href="/styles/main.css"/>
</head>
<body>

<div id="header">
    <div class="center">
        <table>
            <tr>
                <td>
                    <img src="/images/logo.limb.gif" width='384' height='46' alt='logo.limb' id='logo'/>
                </td>
                <td>
                    <?php $this->__staticInclude2('_widgets/found.phtml', '/', 'Параметры поиска'); ?>


                    <span style="display:none;color: #D50000;">ПОИСКОВОЕ ПОЛЕ</span>
                </td>
                <td>
                    <?php $U='';
$V = $this->toolkit;
if((is_array($V) || ($V instanceof ArrayAccess)) && isset($V['user'])) { $U = $V['user'];
}else{ $U = '';}
$this->__staticInclude3('user/include/profile_box.phtml', $U); ?>

                </td>
            </tr>
        </table>

        <div id="limb_links" style="display: none;">
            <a href="http://limb-project.com">limb-project.com</a>&nbsp;|&nbsp;
            <a href="http://bits.limb-project.com">bits.limb-project.com</a>
        </div>
    </div>

    <div id="top_menu">

        НАВИГАЦИОННОЕ МЕНЮ: |

        <a  href="/">*Главная страница</a> |

<!--        <a  href="/product/">Products</a> |-->

<!--        <a  href="/cart/">Корзина</a> |-->
        <a  href="/admin/">Админка</a> |

        <a  href="/tree_cart/">*Корзина</a> |
        <a  href="/pagecategory/">*Страница категори</a> |

        <a  href="/pageitem/">*Страница Одного Товара</a>

        <?php  if ($this->toolkit->getUser()->is_logged_in) { ?>
            &nbsp;|&nbsp;<a href="/user/orders/">Заказы</a>
        <?php  } ?>
    </div>

</div>

<div id="center">
    <div id="wrapper">
        <div id="container">
            <?php $this->__staticInclude4('flash_box.phtml'); ?>

            <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler1e39c4c82928f4d44826d0cad143beae(array()); ?>

        </div>
    </div>
</div>

</body>
</html><?php 
}

function __staticInclude2($file,$base_path,$title) {
 ?><div id="found" style="padding: 6px;">

    <a href="<?php echo lmb_macro_apply_default(isset($base_path) ? $base_path : null,''); ?>">[ALL]</a>&nbsp;
    <?php $E='';
$F = $this->helper;
$E = $F->getAlphabet();
$G = 0;$I = $E;

if(!is_array($I) && !($I instanceof Iterator) && !($I instanceof IteratorAggregate)) {
$I = array();}
$H = $I;
foreach($H as $item) {if($G == 0) { ?>

    <?php } ?>

        <?php  if ($this->helper->getCurrentLetter() == $item) { ?>
            <b><?php echo strtoupper($item); ?></b>
        <?php  } else { ?>
            <?php $letter_param = AlphabetHelper :: REQUEST_PARAM_NAME; ?>
            <a href='/?<?php echo htmlspecialchars($letter_param,3); ?>=<?php echo htmlspecialchars($item,3); ?>'><?php echo strtoupper($item); ?></a>
        <?php  } ?>
    <?php $G++;}if($G > 0) { ?>

    <?php } ?>


    <p><strong>Search the products:</strong></p>

    <?php if(isset($this->form_search_form_datasource))$this->form_search_form->setDatasource($this->form_search_form_datasource);
if(isset($this->form_search_form_error_list))$this->form_search_form->setErrorList($this->form_search_form_error_list);
 ?><form<?php $this->form_search_form->renderAttributes(); ?>>
        <label for='title'><?php echo htmlspecialchars($title,3); ?></label>
        <input<?php $this->input_id001->renderAttributes(); ?> />
        <input type='submit' name='search' value="Search!" class='button'/><br/>
    </form>

</div>
<?php 
}

function __staticInclude3($file,$user) {
 ?><?php  if($user->is_logged_in) { ?>
<dd>
  User: <?php $W='';
$X = $user;
if((is_array($X) || ($X instanceof ArrayAccess)) && isset($X['name'])) { $W = $X['name'];
}else{ $W = '';}
echo htmlspecialchars($W,3); ?> (Login: <?php $Y='';
$Z = $user;
if((is_array($Z) || ($Z instanceof ArrayAccess)) && isset($Z['login'])) { $Y = $Z['login'];
}else{ $Y = '';}
echo htmlspecialchars($Y,3); ?>)<br/>
  Email: <?php $BB='';
$BC = $user;
if((is_array($BC) || ($BC instanceof ArrayAccess)) && isset($BC['email'])) { $BB = $BC['email'];
}else{ $BB = '';}
echo htmlspecialchars($BB,3); ?><br/>
  <a href="/user/edit/">edit</a>
  <a href="/user/logout/">logout</a>
</dd>
<?php  } else {?>
<div style="padding: 0 2 0 0; margin: 1px;">
  <form method="POST" id='login_form' action='/user/login/'>
<table>
    <tr>
        <td><label for='login'>Log:</label></td>
        <td><input type="text" name="login" id="login" title="Login" class='input' size='8' /></td>
        <td><label for='passwd'>Pass:</label></td>
        <td><input type="text" name="password" id="password" type="password" title="Password" class='input' size='8' /></td>
    </tr>
    <tr>
        <td colspan="2"><input type='submit' name='submitted' value="Submit"/></td>
        <td colspan="2"><a href="/user/register/">Register</a></td>
    </tr>
</table>
  </form>
</div>


<?php  } ?><?php 
}

function __staticInclude4($file) {
 ?><?php  $flash_messages = $this->toolkit->getFlashBox()->getUnifiedList(); ?>
<?php $BF = 0;$BH = $flash_messages;

if(!is_array($BH) && !($BH instanceof Iterator) && !($BH instanceof IteratorAggregate)) {
$BH = array();}
$BG = $BH;
foreach($BG as $item) {if($BF == 0) { ?>

<?php } ?>

<?php  if($item['is_error']){ ?><div class="error_border"><b><?php $BJ='';
$BK = $item;
if((is_array($BK) || ($BK instanceof ArrayAccess)) && isset($BK['message'])) { $BJ = $BK['message'];
}else{ $BJ = '';}
echo htmlspecialchars($BJ,3); ?></b></div><?php  } ?>
<?php  if($item['is_message']){ ?><div class="border"><b><?php $BL='';
$BM = $item;
if((is_array($BM) || ($BM instanceof ArrayAccess)) && isset($BM['message'])) { $BL = $BM['message'];
}else{ $BL = '';}
echo htmlspecialchars($BL,3); ?></b></div><?php  } ?>
<?php $BF++;}if($BF > 0) { ?>

<?php }
}

function __slotHandler1e39c4c82928f4d44826d0cad143beae($BN= array()) {
if($BN) extract($BN); ?>

<!-- content_begin -->
<?php $this->__staticInclude5('_admin_object/actions.phtml'); ?>



<div id="body" style="display: flex; padding: 6px">


    <div style="align-self: flex-start; width: 320px">
        <hr>
        <h4 style="background-color: #add8e6;">Список категорий</h4>
        <p style="background-color: lightgray; display: none;">items_child_nodes</p>
        <?php $BU = 0;$BW = $this->items_child_nodes;

if(!is_array($BW) && !($BW instanceof Iterator) && !($BW instanceof IteratorAggregate)) {
$BW = array();}
$BV = $BW;
foreach($BV as $item) {$my_counter = $BU+1;if($BU == 0) { ?>

        <?php } ?>


        <h5> <a href="/pagecategory/<?php $BY='';
$BZ = $item;
if((is_array($BZ) || ($BZ instanceof ArrayAccess)) && isset($BZ['identifier'])) { $BY = $BZ['identifier'];
}else{ $BY = '';}
echo htmlspecialchars($BY,3); ?>"> <?php $CA='';
$CB = $item;
$CA = $CB->getTitle();
echo htmlspecialchars($CA,3); ?> </a> </h5>
        <?php $BU++;}if($BU > 0) { ?>

        <?php } ?>

        <hr>
    </div>

    

    <div class="list" style="lign-self: flex-end; margin: 5px 6px;">

        <?php $CE = 0;$CG = $this->main_last;

if(!is_array($CG) && !($CG instanceof Iterator) && !($CG instanceof IteratorAggregate)) {
$CG = array();}
$CF = array();
foreach($CG as $CI => $CH) {
$CF[$CI] = $CH;
}
if(!isset($CK)){
$CK = new lmbMacroListGlueHelper();
}
$CJ = 3;
$CK->setStep($CJ);
$CK->setTotalItems(count($CF));
foreach($CF as $item) {if($CE == 0) { ?>

        <table border="1">
            <tr>
                <?php } ?>

                <td>
                    <b>[Сортировка по дате: <?php $CL='';
$CM = $item;
if((is_array($CM) || ($CM instanceof ArrayAccess)) && isset($CM['udate'])) { $CL = $CM['udate'];
}else{ $CL = '';}
echo htmlspecialchars($CL,3); ?>]</b>
                    <?php $this->_template8c1140be411090da349ca8ec7997ec3d(array('template' => 'info_tpl','item' => $item,)); ?>

                </td>
                <?php $CK->next();
if ( $CK->shouldDisplay()){
$CK->reset();
 ?></tr><tr><?php }
 ?>

                <?php $CE++;}if($CE > 0) { ?>

                <?php $CU = 3;
$CV = count($CF);if ((0 || ($CV/$CU > 1)) && $CV) 
$CW = ceil($CV/$CU)*$CU - $CV; 
else 
$CW = 0;
if ($CW){
$items_left = $CW; ?>

                <td colspan='<?php echo htmlspecialchars($items_left,3); ?>'>&nbsp;</td>
                <?php }
 ?>

            </tr>
        </table>
        <?php } ?>

    </div>
</div>
<!-- content_end -->
<?php 
}

function __staticInclude5($file) {
 ?>








<?php 
}

function _template8c1140be411090da349ca8ec7997ec3d($CP= array()) {
if($CP) extract($CP); ?>

    <div style="margin: 2px; padding: 8px;">
        <h2>
            <?php
            $item_title = TreeItem :: getTitleByNodeId($item['node_id']);
            $item_uri = TreeItem :: getUriByNodeId($item['node_id']);
            echo '<a href="/pageitem/'.$item_uri.'">'.$item_title.'</a>';
            echo ' ';
            echo ($item->get('is_branch') == 0) ?
                '<a href="/tree_cart/add/'.$item->get('node_id').'">В корзину</a>':'';
            ?>
        </h2>

        <ul>
            <li>
            <?php
                $descr = TreeItem :: getAttrValueByNodeId($item['node_id'],TreeItem::ID_DESCR);
            ?>
            description:<br> <?php echo nl2br($descr); ?>

            </li>
        </ul>
    </div>
    <?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor8efc007209c02be8d5fa56ce05a9539a';