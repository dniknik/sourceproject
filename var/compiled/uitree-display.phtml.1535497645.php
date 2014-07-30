<?php /* This file is generated from /home/dnn/web/webshop/template/uitree/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor52027d06d4d8d0b5c65f7420b1b447ad', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutor52027d06d4d8d0b5c65f7420b1b447ad extends lmbMacroTemplateExecutor {

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
$this->__staticInclude1('front_page_layout.phtml', 'content_zone', 'content_zone', 'front_page_layout.phtml'); ?>

<?php 
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

            <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler87d317d3ef15a1dd06f134ed23b5a448(array()); ?>

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

function __slotHandler87d317d3ef15a1dd06f134ed23b5a448($BN= array()) {
if($BN) extract($BN); ?>


<h1>UI:Tree</h1>
<?php $BS = 0;$BU = $this->items;

if(!is_array($BU) && !($BU instanceof Iterator) && !($BU instanceof IteratorAggregate)) {
$BU = array();}
$BT = $BU;
foreach($BT as $item) {if($BS == 0) { ?>

<ul>
    <?php } ?>

    <li><a href="/user/item/<?php $BW='';
$BX = $item;
if((is_array($BX) || ($BX instanceof ArrayAccess)) && isset($BX['id'])) { $BW = $BX['id'];
}else{ $BW = '';}
echo htmlspecialchars($BW,3); ?>"><?php $BY='';
$BZ = $item;
if((is_array($BZ) || ($BZ instanceof ArrayAccess)) && isset($BZ['id'])) { $BY = $BZ['id'];
}else{ $BY = '';}
echo htmlspecialchars($BY,3); ?></a></li>
    <?php $BS++;}if($BS > 0) { ?>

</ul>
<?php } ?>

<br> Welcome ... <br>

<?php
    lmb_require('limb/tree/src/lmbTreeNestedCollection.class.php');
    lmb_require('limb/tree/src/lmbTreeHelper.class.php');

    lmb_require('limb/tree/src/lmbTreeDecorator.class.php');
    lmb_require('limb/tree/src/lmbMPTree.class.php');

    $tree = 0;
    $arr = array();

    $docs = lmbActiveRecord::find('Tree', lmbSQLCriteria::equal('priority', 0)
        ->addAnd(new lmbSQLCriteria('level > 0')));
    $sorted_docs = lmbTreeHelper :: sort($docs, array('id' => 'ASC'));

    $tree1 = new lmbTreeNestedCollection($sorted_docs);
    $tree1->setChildrenField('preloaded_children');
    $tree1->rewind();

    $docs = lmbActiveRecord::find('Tree', lmbSQLCriteria::equal('priority', 0)
        ->addAnd(new lmbSQLCriteria('level > 0')));
    $sorted_docs = lmbTreeHelper :: sort($docs, array('id' => 'ASC'));

    $uitree = new lmbTreeNestedCollection($docs);
    $uitree->setChildrenField('preloaded_children');
    $uitree->rewind();

   //lmb_var_debug($tree1->getArray()); // array 2
    //lmb_var_debug($uitree->getArray()); // 6
    //lmb_var_debug(sizeof($uitree));
    //lmb_var_debug($sorted_docs->getArray()); // 11
?>


<table style="width: 90%;" border="1">
    <th colspan="3">
        <h4>root</h4>
        +field_for_find
    </th>
    <tr>
        <td style="width: 40%">
            <div style="padding: 3px 20px; ">
                <?php $this->_render_tree731751a4de390e9c07d3ede72b80250a($tree1, 0,array('kids_prop' => 'preloaded_children','prefix' => '',));
 ?>

            </div>
        </td>

        <td>
            <b>список_характеристик текущей_категории/товара</b>

            <div style="padding: 3px 20px;">
                <?php $this->_render_treeaa4d0be430c17cacb4b8996fd8679136($uitree, 0,array('kids_prop' => 'preloaded_children',));
 ?>

            </div>
        </td>

        <td>
            <b>список последних добавленных товаров</b>

            <div>
                ..
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <a href="/cart/">Your Cart</a> Total summ is : <b>$<?php $DG='';
$DH = $this->cart;
if((is_array($DH) || ($DH instanceof ArrayAccess)) && isset($DH['total_summ'])) { $DG = $DH['total_summ'];
}else{ $DG = '';}
echo number_format($DG,2, '.', ' '); ?></b>
        </td>
    </tr>
</table>

<?php
lmb_require('limb/tree/src/lmbTreeNestedCollection.class.php');
lmb_require('limb/tree/src/lmbTreeHelper.class.php');

lmb_require('limb/tree/src/lmbTreeDecorator.class.php');
lmb_require('limb/tree/src/lmbMPTree.class.php');
lmb_require('limb/tree/src/lmbNSTree.class.php');
lmb_require('limb/dbal/src/drivers/pgsql/lmbPgsqlRecord.class.php');

$my_connect = lmbToolkit::instance()->getDefaultDbConnection();
$tree_MPTree = new lmbMPTree(
    'sys_tree',
    $my_connect
);
$tree_NSTree = new lmbNSTree(
    'sys_tree',
    $my_connect
);

$rootMP = $tree_MPTree->getRootNode();
//    $rootNS = $tree_NSTree->getRootNode();
//lmb_var_debug($rootMP);
//echo('<br><br>');
//lmb_var_debug($rootMP->export());
//    lmb_var_debug($rootNS);
//echo('<br><br>');

$treeDecor = new lmbTreeDecorator(
    new lmbMPTree(
        'sys_tree',
        $my_connect,
        array('id' => 'id',
            'parent_id' => 'parent_id',
            'level' => 'level',
            'identifier' => 'identifier',
            'path' => 'path'
        )));

//lmb_var_debug($treeDecor);
//echo('<br><br>');
//lmb_var_debug($treeDecor->getRootNode() );


$docs = lmbActiveRecord::find(
    'Tree',
    lmbSQLCriteria::equal('priority', 0)
        ->addAnd(new lmbSQLCriteria('level > 0'))
);

//$test = $tree->getChildren($tree->getRootNode());

?>

<br> see you ...
<?php 
}

function _render_tree731751a4de390e9c07d3ede72b80250a($CG,$level,$CI= array()) {
if($CI) extract($CI);$CH=0;
foreach($CG as $item) {
$counter = $CH+1;
if(!$CH) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li>
                        <?php echo htmlspecialchars($counter,3); ?>) <a href="<?php $CM = array();
$CL = lmbArrayHelper :: explode(',',':', ' action:shownode');
foreach($CL as $key => $value) $CM[trim($key)] = trim($value);
$CN = false;
echo lmbToolkit :: instance()->getRoutesUrl($CM, '', $CN);
 ?>/<?php $CO='';
$CP = $item;
if((is_array($CP) || ($CP instanceof ArrayAccess)) && isset($CP['id'])) { $CO = $CP['id'];
}else{ $CO = '';}
echo htmlspecialchars($CO,3); ?>"><?php $CQ='';
$CR = $item;
if((is_array($CR) || ($CR instanceof ArrayAccess)) && isset($CR['id'])) { $CQ = $CR['id'];
}else{ $CQ = '';}
echo htmlspecialchars($CQ,3); ?></a>
                        :<a href="<?php $CT = array();
$CS = lmbArrayHelper :: explode(',',':', ' action:shownode');
foreach($CS as $key => $value) $CT[trim($key)] = trim($value);
$CU = false;
echo lmbToolkit :: instance()->getRoutesUrl($CT, '', $CU);
 ?>/<?php $CV='';
$CW = $item;
if((is_array($CW) || ($CW instanceof ArrayAccess)) && isset($CW['identifier'])) { $CV = $CW['identifier'];
}else{ $CV = '';}
echo htmlspecialchars($CV,3); ?>"><?php $CX='';
$CY = $item;
if((is_array($CY) || ($CY instanceof ArrayAccess)) && isset($CY['path'])) { $CX = $CY['path'];
}else{ $CX = '';}
echo htmlspecialchars($CX,3); ?></a><?php if(isset($item["preloaded_children"])) {$this->_render_tree731751a4de390e9c07d3ede72b80250a($item["preloaded_children"], $level + 1, array());
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

function _render_treeaa4d0be430c17cacb4b8996fd8679136($DB,$level,$DD= array()) {
if($DD) extract($DD);$DC=0;
foreach($DB as $item) {
if(!$DC) {
 ?>

                <ul>
                    <?php }
 ?>

                    <li><?php $DE='';
$DF = $item;
if((is_array($DF) || ($DF instanceof ArrayAccess)) && isset($DF['identifier'])) { $DE = $DF['identifier'];
}else{ $DE = '';}
echo htmlspecialchars($DE,3);if(isset($item["preloaded_children"])) {$this->_render_treeaa4d0be430c17cacb4b8996fd8679136($item["preloaded_children"], $level + 1, array());
} ?></li>
                    <?php $DC++;
}
if(count($DB) == 0) { ?>

                    tree_array is empty
                    <?php }if($DC) {
 ?>

                    

                </ul>
                <?php }

}

}
}
$macro_executor_class='MacroTemplateExecutor52027d06d4d8d0b5c65f7420b1b447ad';