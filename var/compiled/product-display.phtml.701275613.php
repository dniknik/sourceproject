<?php /* This file is generated from /home/dnn/web/webshop/template/product/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor463c6479419be704b18c4fefae4c47a9', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/pager/lmbMacroPagerHelper.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutor463c6479419be704b18c4fefae4c47a9 extends lmbMacroTemplateExecutor {

function _init() {
$this->pager_pager = new lmbMacroPagerHelper('pager');
$this->form_search_form = new lmbMacroFormWidget('search_form');
$this->form_search_form->setAttributes(array (
  'method' => 'GET',
  'id' => 'search_form',
  'name' => 'search_form',
  'action' => 'product',
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
$this->input_id002 = new lmbMacroInputWidget('price_greater');
$this->input_id002->setAttributes(array (
  'type' => 'text',
  'name' => 'price_greater',
  'id' => 'price_greater',
  'size' => '4',
));
$this->input_id002->setForm($this->form_search_form);
$this->form_search_form->addChild($this->input_id002);
$this->input_id003 = new lmbMacroInputWidget('price_less');
$this->input_id003->setAttributes(array (
  'type' => 'text',
  'name' => 'price_less',
  'id' => 'price_less',
  'size' => '4',
));
$this->input_id003->setForm($this->form_search_form);
$this->form_search_form->addChild($this->input_id003);

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><?php  $this->title ='Products'; ?>
<?php $this->__staticInclude1('front_page_layout.phtml', 'content_zone', 'front_page_layout.phtml'); ?>

<?php 
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
                    include file='_widgets/found.phtml' base_path='/' title="Параметры поиска"
                    display:none;
                    <span style="color: #D50000;">ПОИСКОВОЕ ПОЛЕ</span>
                </td>
                <td>
                    <?php $C='';
$D = $this->toolkit;
if((is_array($D) || ($D instanceof ArrayAccess)) && isset($D['user'])) { $C = $D['user'];
}else{ $C = '';}
$this->__staticInclude2('user/include/profile_box.phtml', $C); ?>

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

        <a  href="/product/">Products</a> |

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
            <?php $this->__staticInclude3('flash_box.phtml'); ?>

            <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler45e21c19f003ee87b2e1ec42ac0eb0b7(array()); ?>

        </div>
    </div>
</div>

</body>
</html><?php 
}

function __staticInclude2($file,$user) {
 ?><?php  if($user->is_logged_in) { ?>
<dd>
  User: <?php $E='';
$F = $user;
if((is_array($F) || ($F instanceof ArrayAccess)) && isset($F['name'])) { $E = $F['name'];
}else{ $E = '';}
echo htmlspecialchars($E,3); ?> (Login: <?php $G='';
$H = $user;
if((is_array($H) || ($H instanceof ArrayAccess)) && isset($H['login'])) { $G = $H['login'];
}else{ $G = '';}
echo htmlspecialchars($G,3); ?>)<br/>
  Email: <?php $I='';
$J = $user;
if((is_array($J) || ($J instanceof ArrayAccess)) && isset($J['email'])) { $I = $J['email'];
}else{ $I = '';}
echo htmlspecialchars($I,3); ?><br/>
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

function __staticInclude3($file) {
 ?><?php  $flash_messages = $this->toolkit->getFlashBox()->getUnifiedList(); ?>
<?php $M = 0;$O = $flash_messages;

if(!is_array($O) && !($O instanceof Iterator) && !($O instanceof IteratorAggregate)) {
$O = array();}
$N = $O;
foreach($N as $item) {if($M == 0) { ?>

<?php } ?>

<?php  if($item['is_error']){ ?><div class="error_border"><b><?php $Q='';
$R = $item;
if((is_array($R) || ($R instanceof ArrayAccess)) && isset($R['message'])) { $Q = $R['message'];
}else{ $Q = '';}
echo htmlspecialchars($Q,3); ?></b></div><?php  } ?>
<?php  if($item['is_message']){ ?><div class="border"><b><?php $S='';
$T = $item;
if((is_array($T) || ($T instanceof ArrayAccess)) && isset($T['message'])) { $S = $T['message'];
}else{ $S = '';}
echo htmlspecialchars($S,3); ?></b></div><?php  } ?>
<?php $M++;}if($M > 0) { ?>

<?php }
}

function __slotHandler45e21c19f003ee87b2e1ec42ac0eb0b7($U= array()) {
if($U) extract($U); ?>


<?php $this->__staticInclude4('_admin/pager.phtml', $this->items, '5'); ?>

<br/>
<!--
<p><strong>Search the products:</strong></p>
<?php if(isset($this->form_search_form_datasource))$this->form_search_form->setDatasource($this->form_search_form_datasource);
if(isset($this->form_search_form_error_list))$this->form_search_form->setErrorList($this->form_search_form_error_list);
 ?><form<?php $this->form_search_form->renderAttributes(); ?>>
  <label for='title'>Product title:</label>
  <input<?php $this->input_id001->renderAttributes(); ?> />

  <label for='price_greater'>Price greater:</label>
  <input<?php $this->input_id002->renderAttributes(); ?> />

  <label for='price_less'>Price less:</label>
  <input<?php $this->input_id003->renderAttributes(); ?> />

  <input type='submit' name='search' value="Search!" class='button'/><br/>
</form>
-->
<?php $CB = 0;$CD = $this->items;

if(!is_array($CD) && !($CD instanceof Iterator) && !($CD instanceof IteratorAggregate)) {
$CD = array();}
$CC = $CD;
foreach($CC as $item) {if($CB == 0) { ?>

<table cellpadding="0" cellspacing="0" class='list'>
  <?php } ?>

  <tr>
   <td>
      <dl>
        <dt>
          <b><?php $CF='';
$CG = $item;
if((is_array($CG) || ($CG instanceof ArrayAccess)) && isset($CG['title'])) { $CF = $CG['title'];
}else{ $CF = '';}
echo htmlspecialchars($CF,3); ?></b><br />
          Price: <b>$<?php $CH='';
$CI = $item;
if((is_array($CI) || ($CI instanceof ArrayAccess)) && isset($CI['price'])) { $CH = $CI['price'];
}else{ $CH = '';}
echo number_format($CH,2, '.', ' '); ?></b><br/>
          <a href="<?php $CJ='';
$CK = $item;
if((is_array($CK) || ($CK instanceof ArrayAccess)) && isset($CK['id'])) { $CJ = $CK['id'];
}else{ $CJ = '';}
$CM = array();
$CL = lmbArrayHelper :: explode(',',':', sprintf('controller:cart,action:add,id:%s',$CJ));
foreach($CL as $key => $value) $CM[trim($key)] = trim($value);
$CN = false;
echo lmbToolkit :: instance()->getRoutesUrl($CM, '', $CN);
 ?>">Add to cart</a><br/>
        </dt>
        <dd>
          <img src='<?php $CO='';
$CP = $item;
if((is_array($CP) || ($CP instanceof ArrayAccess)) && isset($CP['image_path'])) { $CO = $CP['image_path'];
}else{ $CO = '';}
echo htmlspecialchars($CO,3); ?>' class='img'/>
          <?php $CQ='';
$CR = $item;
if((is_array($CR) || ($CR instanceof ArrayAccess)) && isset($CR['description'])) { $CQ = $CR['description'];
}else{ $CQ = '';}
echo nl2br($CQ); ?>

        </dd>
      </dl>
    </td>
  </tr>
  <?php $CB++;}if($CB > 0) { ?>

</table>
<?php } ?>

<?php 
}

function __staticInclude4($file,$items,$per_page) {
 ?><?php
  $limit = intval(isset($per_page) ? $per_page : 20);
?>
<?php $this->pager_pager->setItemsPerPage($limit);
$this->pager_pager->setTotalItems($items->count());
$this->pager_pager->prepare();
$BC = $this->pager_pager->getCurrentPageBeginItem();
if($BC > 0) $BC = $BC - 1;
$items->paginate($BC, $this->pager_pager->getItemsPerPage());
 ?>


<?php $this->pager_pager->useSections();
$this->pager_pager->prepare();
$total_items = $this->pager_pager->getTotalItems();
$total_pages = $this->pager_pager->getTotalPages();
$items_per_page = $this->pager_pager->getItemsPerPage();
$begin_item_number = $this->pager_pager->getCurrentPageBeginItem();
$end_item_number = $this->pager_pager->getCurrentPageEndItem();
 ?>

  <?php  if($total_pages > 1){ ?>
    <div class='pager'>
      <?php if (!$this->pager_pager->isFirst()) {
$href = $this->pager_pager->getFirstPageUri();
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><img src="/shared/cms/images/button/arrow_first.gif"  width='18' height='17' alt='&#171;'/></a><?php }
 ?>

      <?php if ($this->pager_pager->hasPrev()) {
$href = $this->pager_pager->getPageUri($this->pager_pager->getCurrentPage() - 1 );
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><img src="/shared/cms/images/button/arrow_prev.gif"  width='18' height='17' alt='&#60;'/></a><?php }
 ?>

      <?php $BH = 0;
$BI = false;
while ($this->pager_pager->isValid()) {
if ($this->pager_pager->isDisplayedSection()) {
if (!($this->pager_pager->isFirst() && $this->pager_pager->isLast())) {
if (!$this->pager_pager->isDisplayedPage()) {
$href = $this->pager_pager->getPageUri();
$number = $this->pager_pager->getPage();
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><?php echo htmlspecialchars($number,3); ?></a><?php }
if ($this->pager_pager->isDisplayedPage()) {
$href = $this->pager_pager->getCurrentPageUri();
$number = $this->pager_pager->getPage();
 ?><b><?php echo htmlspecialchars($number,3); ?></b><?php }
}
$this->pager_pager->nextPage();
if ($this->pager_pager->isValid()){
 ?> <?php }
}
else {
if (!$this->pager_pager->isDisplayedSection()) {
$href = $this->pager_pager->getSectionUri();
$section_begin_page = $this->pager_pager->getSectionBeginPage();
$section_end_page = $this->pager_pager->getSectionEndPage();
 ?><a href="<?php echo htmlspecialchars($href,3); ?>">[<?php echo htmlspecialchars($section_begin_page,3); ?>..<?php echo htmlspecialchars($section_end_page,3); ?>]</a><?php }
$this->pager_pager->nextSection();
}
}
 ?>

      <?php if ($this->pager_pager->hasNext()) {
$href = $this->pager_pager->getPageUri($this->pager_pager->getCurrentPage() + 1 );
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><img src="/shared/cms/images/button/arrow_next.gif"  width='18' height='17' alt='&#62;'/></a><?php }
 ?>

      <?php if (!$this->pager_pager->isLast()) {
$href = $this->pager_pager->getLastPageUri();
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><img src="/shared/cms/images/button/arrow_last.gif"  width='18' height='17' alt='&#187;'/></a><?php }
 ?>

    </div>
  <?php  } ?>

<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor463c6479419be704b18c4fefae4c47a9';