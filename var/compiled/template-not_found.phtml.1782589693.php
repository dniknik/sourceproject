<?php /* This file is generated from /home/dnn/web/webshop/template/not_found.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor10c2a68216d4f7a098809fe7cacf8d1f', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
class MacroTemplateExecutor10c2a68216d4f7a098809fe7cacf8d1f extends lmbMacroTemplateExecutor {

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
 ?><?php  $this->title = 'Not found'; ?>
<?php $this->__staticInclude1('front_page_layout.phtml', 'content_zone', 'content_zone', 'front_page_layout.phtml');
}

function __staticInclude1($file,$in,$into,$file) {
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

        <div id="limb_links">
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

            <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandlere0e25594021ede2c6f295f0524b6034c(array()); ?>

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

function __slotHandlere0e25594021ede2c6f295f0524b6034c($BN= array()) {
if($BN) extract($BN); ?>

<b>Error 404.</b>
<p>Page not found.</p>
<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor10c2a68216d4f7a098809fe7cacf8d1f';