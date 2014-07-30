<?php /* This file is generated from /home/dnn/web/webshop/template/main_page/pagecategory.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor94e718c4f9485271f5a9a8f776a1274f', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
class MacroTemplateExecutor94e718c4f9485271f5a9a8f776a1274f extends lmbMacroTemplateExecutor {

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
 ?><?php  $this->title = ($this->title)?$this->title:'Main page '; ?>

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

            <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler99135d48da47bbf269026127aa227712(array()); ?>

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

function __slotHandler99135d48da47bbf269026127aa227712($BN= array()) {
if($BN) extract($BN); ?>

<!-- content_begin -->
<?php $this->__staticInclude5('_admin_object/actions.phtml'); ?>


<div id="body" style="display: flex; padding: 6px">


<div style="align-self: flex-start; width: 320px">

    <?php

    $sorted = lmbTreeHelper :: sort($this->childrens, array('id' => 'ASC'));
    //lmb_var_debug($sorted);
    $tree_tst = new lmbTreeNestedCollection($sorted);
    $tree_tst->setChildrenField('preloaded_children');
    $tree_tst->rewind();

    $bl_mayBe = $this->isMayBe;
    $bl_access = ($this->isBranch)&&($this->isTailBranch)&&(!$this->isTail)&&($bl_mayBe);

    //<a href="{{route_url params="action:branch" skip_controller="true" /}}/{$item.identifier}"></a>

    ?>
    <hr>
    <?php $this->_render_treec2aad6f3d0ab645c5dd539a86da76829($this->wood, 0,array('kids_prop' => 'preloaded_children','prefix' => '',));
 ?>


    <hr>
    <?php $this->_render_tree30624d8cbab7f92c1cf4d9408b98dbe4($tree_tst, 0,array('kids_prop' => 'preloaded_children','prefix' => '',));
 ?>


</div>


<div class="list" style="lign-self: flex-end; margin: 5px 5px;">
<!-- -->

<div>


    <table border="1">
        <tr>
            <td>id</td>
            <td>udate</td>
            <td>node_id</td>
            <td>is_branch</td>
            <td>path</td>
            <td>par_id</td>
            <td>uri</td>
            <td>level</td>
            <td>
                all
            </td>
        </tr>
        <?php $DC = 0;$DE = $this->nodes_tree;

if(!is_array($DE) && !($DE instanceof Iterator) && !($DE instanceof IteratorAggregate)) {
$DE = array();}
$DD = $DE;
foreach($DD as $item) {if($DC == 0) { ?>

        <?php } ?>

        <tr>
            <td><?php $DG='';
$DH = $item;
if((is_array($DH) || ($DH instanceof ArrayAccess)) && isset($DH['id'])) { $DG = $DH['id'];
}else{ $DG = '';}
echo htmlspecialchars($DG,3); ?></td>
            <td><?php $DI='';
$DJ = $item;
if((is_array($DJ) || ($DJ instanceof ArrayAccess)) && isset($DJ['udate'])) { $DI = $DJ['udate'];
}else{ $DI = '';}
echo htmlspecialchars($DI,3); ?></td>
            <td><?php $DK='';
$DL = $item;
if((is_array($DL) || ($DL instanceof ArrayAccess)) && isset($DL['node_id'])) { $DK = $DL['node_id'];
}else{ $DK = '';}
echo htmlspecialchars($DK,3); ?></td>
            <td><?php $DM='';
$DN = $item;
if((is_array($DN) || ($DN instanceof ArrayAccess)) && isset($DN['is_branch'])) { $DM = $DN['is_branch'];
}else{ $DM = '';}
echo htmlspecialchars($DM,3); ?>

                <?php
                echo ($item->get('is_branch')==0)?
                    '<a href="/tree_cart/add/'. $item->get('node_id'). '">+++</a>':
                    '---';
                ?>
            </td>
            <td><?php $DO='';
$DP = $item;
if((is_array($DP) || ($DP instanceof ArrayAccess)) && isset($DP['path'])) { $DO = $DP['path'];
}else{ $DO = '';}
echo htmlspecialchars($DO,3); ?></td>
            <td><?php $DQ='';
$DR = $item;
if((is_array($DR) || ($DR instanceof ArrayAccess)) && isset($DR['par_id'])) { $DQ = $DR['par_id'];
}else{ $DQ = '';}
echo htmlspecialchars($DQ,3); ?></td>
            <td><?php $DS='';
$DT = $item;
if((is_array($DT) || ($DT instanceof ArrayAccess)) && isset($DT['uri'])) { $DS = $DT['uri'];
}else{ $DS = '';}
echo htmlspecialchars($DS,3); ?></td>
            <td><?php $DU='';
$DV = $item;
if((is_array($DV) || ($DV instanceof ArrayAccess)) && isset($DV['level'])) { $DU = $DV['level'];
}else{ $DU = '';}
echo htmlspecialchars($DU,3); ?></td>
            <td>
                <?php $DW='';
$DX = $item;
if((is_array($DX) || ($DX instanceof ArrayAccess)) && isset($DX['id'])) { $DW = $DX['id'];
}else{ $DW = '';}
echo htmlspecialchars($DW,3); ?> / <?php $DY='';
$DZ = $item;
if((is_array($DZ) || ($DZ instanceof ArrayAccess)) && isset($DZ['udate'])) { $DY = $DZ['udate'];
}else{ $DY = '';}
echo htmlspecialchars($DY,3); ?> / <?php $EA='';
$EB = $item;
if((is_array($EB) || ($EB instanceof ArrayAccess)) && isset($EB['node_id'])) { $EA = $EB['node_id'];
}else{ $EA = '';}
echo htmlspecialchars($EA,3); ?> / <?php $EC='';
$ED = $item;
if((is_array($ED) || ($ED instanceof ArrayAccess)) && isset($ED['is_branch'])) { $EC = $ED['is_branch'];
}else{ $EC = '';}
echo htmlspecialchars($EC,3); ?> / <?php $EE='';
$EF = $item;
if((is_array($EF) || ($EF instanceof ArrayAccess)) && isset($EF['path'])) { $EE = $EF['path'];
}else{ $EE = '';}
echo htmlspecialchars($EE,3); ?>  / <?php $EG='';
$EH = $item;
if((is_array($EH) || ($EH instanceof ArrayAccess)) && isset($EH['par_id'])) { $EG = $EH['par_id'];
}else{ $EG = '';}
echo htmlspecialchars($EG,3); ?> / <?php $EI='';
$EJ = $item;
if((is_array($EJ) || ($EJ instanceof ArrayAccess)) && isset($EJ['uri'])) { $EI = $EJ['uri'];
}else{ $EI = '';}
echo htmlspecialchars($EI,3); ?> / <?php $EK='';
$EL = $item;
if((is_array($EL) || ($EL instanceof ArrayAccess)) && isset($EL['level'])) { $EK = $EL['level'];
}else{ $EK = '';}
echo htmlspecialchars($EK,3); ?>

            </td>
        </tr>
        <?php $DC++;}if($DC > 0) { ?>

        <?php } ?>

    </table>


</div>

<?php $ES = 0;$EU = $this->arr_tovar;

if(!is_array($EU) && !($EU instanceof Iterator) && !($EU instanceof IteratorAggregate)) {
$EU = array();}
$ET = $EU;
foreach($ET as $key => $item) {$parity = (( ($ES + 1) % 2) ? "odd" : "even");if($ES == 0) { ?>

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
            <td>
                #<?php $EY='';
$EZ = $item;
if((is_array($EZ) || ($EZ instanceof ArrayAccess)) && isset($EZ['id'])) { $EY = $EZ['id'];
}else{ $EY = '';}
echo htmlspecialchars($EY,3); ?>(<?php echo htmlspecialchars($key,3); ?>)
                <a href="/tree_cart/add/<?php echo htmlspecialchars($key,3); ?>">+++</a>
            </td>

            <?php
            //@todo this fragment to ShopTools
            $arr_tovar_attr = array_reverse($item);
            ?>

            <?php $FI = 0;$FK = $arr_tovar_attr;

if(!is_array($FK) && !($FK instanceof Iterator) && !($FK instanceof IteratorAggregate)) {
$FK = array();}
$FJ = $FK;
foreach($FJ as $tovar) {if($FI == 0) { ?>

            <?php } ?>

            <td>
                <?php $FM='';
$FN = $tovar;
if((is_array($FN) || ($FN instanceof ArrayAccess)) && isset($FN['attr_value'])) { $FM = $FN['attr_value'];
}else{ $FM = '';}
echo htmlspecialchars($FM,3); ?>

            </td>
            <?php $FI++;}if($FI > 0) { ?>

            <?php } ?>


        </tr>
        <?php $ES++;}if($ES > 0) { ?>

        
    </table>
</div>
<?php }if($ES == 0) { ?>

        <div class="empty_list">Empty items</div>
        <?php } ?>


<!-- -->


    <table>
        <tr>
            <th>#</th>
            <th>id</th>
            <th>id_sys_tree</th>
            <th>id_pr</th>
            <th>value_pr</th>
            <th>is_branch</th>
        </tr>

        <?php $this->_render_treeffd619ef16a535d3d6e916c42e73d1fe($tree_tst, 0,array('kids_prop' => 'preloaded_children','prefix' => '1',));
 ?>

    </table>


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
        <?php $GR = 0;$GT = $this->childrens;

if(!is_array($GT) && !($GT instanceof Iterator) && !($GT instanceof IteratorAggregate)) {
$GT = array();}
$GS = $GT;
foreach($GS as $item) {$my_counter = $GR+1;if($GR == 0) { ?>

        <?php } ?>

        <tr>
            <td><?php echo htmlspecialchars($my_counter,3); ?></td>
            <td><?php $GX='';
$GY = $item;
if((is_array($GY) || ($GY instanceof ArrayAccess)) && isset($GY['id'])) { $GX = $GY['id'];
}else{ $GX = '';}
echo htmlspecialchars($GX,3); ?></td>
            <td><?php $GZ='';
$HA = $item;
if((is_array($HA) || ($HA instanceof ArrayAccess)) && isset($HA['parent_id'])) { $GZ = $HA['parent_id'];
}else{ $GZ = '';}
echo htmlspecialchars($GZ,3); ?></td>
            <td><?php $HB='';
$HC = $item;
if((is_array($HC) || ($HC instanceof ArrayAccess)) && isset($HC['level'])) { $HB = $HC['level'];
}else{ $HB = '';}
echo htmlspecialchars($HB,3); ?> lvl </td>
            <td><?php $HD='';
$HE = $item;
if((is_array($HE) || ($HE instanceof ArrayAccess)) && isset($HE['identifier'])) { $HD = $HE['identifier'];
}else{ $HD = '';}
echo htmlspecialchars($HD,3); ?></td>
            <td><?php $HF='';
$HG = $item;
if((is_array($HG) || ($HG instanceof ArrayAccess)) && isset($HG['path'])) { $HF = $HG['path'];
}else{ $HF = '';}
echo htmlspecialchars($HF,3); ?></td>
        </tr>
        <?php $GR++;}if($GR > 0) { ?>

        
        <?php }if($GR == 0) { ?>

        <tr>
            <td colspan="6">...</td>
        </tr>
        <?php } ?>


        <?php
//            echo '<img src="/shared/images/icons/application_view_detail.png" alt="detail" /></a>';
//            echo '<img src="/shared/images/icons/cart_add.png" alt="2cart" /></a>';
        ?>

    </table>
</div>

</div>
<!-- content_end -->
<?php 
}

function __staticInclude5($file) {
 ?>








<?php 
}

function _render_treec2aad6f3d0ab645c5dd539a86da76829($BU,$level,$BW= array()) {
if($BW) extract($BW);$BV=0;
foreach($BU as $item) {
$counter = $BV+1;
if(!$BV) {
 ?>

    <ul >
        <?php }
 ?>

        <li>
            <?php echo htmlspecialchars($counter,3); ?>)
            <a href="/branch/<?php $BZ='';
$CA = $item;
if((is_array($CA) || ($CA instanceof ArrayAccess)) && isset($CA['id'])) { $BZ = $CA['id'];
}else{ $BZ = '';}
echo htmlspecialchars($BZ,3); ?>">:<?php $CB='';
$CC = $item;
if((is_array($CC) || ($CC instanceof ArrayAccess)) && isset($CC['path'])) { $CB = $CC['path'];
}else{ $CB = '';}
echo htmlspecialchars($CB,3); ?></a>&nbsp;|&nbsp;
            <a href="/branch/<?php $CD='';
$CE = $item;
if((is_array($CE) || ($CE instanceof ArrayAccess)) && isset($CE['identifier'])) { $CD = $CE['identifier'];
}else{ $CD = '';}
echo htmlspecialchars($CD,3); ?>"><?php $CF='';
$CG = $item;
if((is_array($CG) || ($CG instanceof ArrayAccess)) && isset($CG['identifier'])) { $CF = $CG['identifier'];
}else{ $CF = '';}
echo htmlspecialchars($CF,3); ?></a>
            <?php if(isset($item["preloaded_children"])) {$this->_render_treec2aad6f3d0ab645c5dd539a86da76829($item["preloaded_children"], $level + 1, array());
} ?>

        </li>
        <?php $BV++;
}
if(count($BU) == 0) { ?>

        tree_array is empty
        <?php }if($BV) {
 ?>

        
    </ul>
    <?php }

}

function _render_tree30624d8cbab7f92c1cf4d9408b98dbe4($CN,$level,$CP= array()) {
if($CP) extract($CP);$CO=0;
foreach($CN as $item) {
$counter = $CO+1;
if(!$CO) {
 ?>

    <ul >
        <?php }
 ?>

        <li>
            <?php echo htmlspecialchars($counter,3); ?>)
            <!-- <a href="/branch/<?php $CS='';
$CT = $item;
if((is_array($CT) || ($CT instanceof ArrayAccess)) && isset($CT['id'])) { $CS = $CT['id'];
}else{ $CS = '';}
echo htmlspecialchars($CS,3); ?>">:<?php $CU='';
$CV = $item;
if((is_array($CV) || ($CV instanceof ArrayAccess)) && isset($CV['path'])) { $CU = $CV['path'];
}else{ $CU = '';}
echo htmlspecialchars($CU,3); ?></a>&nbsp;|&nbsp; -->
            <a href="/branch/<?php $CW='';
$CX = $item;
if((is_array($CX) || ($CX instanceof ArrayAccess)) && isset($CX['identifier'])) { $CW = $CX['identifier'];
}else{ $CW = '';}
echo htmlspecialchars($CW,3); ?>"><?php $CY='';
$CZ = $item;
if((is_array($CZ) || ($CZ instanceof ArrayAccess)) && isset($CZ['path'])) { $CY = $CZ['path'];
}else{ $CY = '';}
echo htmlspecialchars($CY,3); ?></a>
            <?php if(isset($item["preloaded_children"])) {$this->_render_tree30624d8cbab7f92c1cf4d9408b98dbe4($item["preloaded_children"], $level + 1, array());
} ?>

        </li>
        <?php $CO++;
}
if(count($CN) == 0) { ?>

        tree_array is empty
        <?php }if($CO) {
 ?>

        
    </ul>
    <?php }

}

function _render_treeffd619ef16a535d3d6e916c42e73d1fe($FU,$level,$FW= array()) {
if($FW) extract($FW);$FV=0;
foreach($FU as $item) {
$counter = $FV+1;
if(!$FV) {
 ?>


        <?php }
 ?>

        <tr>
            <td colspan="6">

                <h<?php echo $item['level']+1; ?>>
                <?php echo htmlspecialchars($prefix,3); ?>.(<?php echo htmlspecialchars($counter,3); ?>) :<?php echo $item['level']+1; ?>: <?php echo TreeItem :: getTitleByNodeId($item['node_id']); ?>
                </h<?php echo $item['level']+1; ?>>
                <?php $GB='';
$GC = $item;
if((is_array($GC) || ($GC instanceof ArrayAccess)) && isset($GC['node_id'])) { $GB = $GC['node_id'];
}else{ $GB = '';}
echo htmlspecialchars($GB,3); ?>&nbsp;|&nbsp;<?php $GD='';
$GE = $item;
if((is_array($GE) || ($GE instanceof ArrayAccess)) && isset($GE['path'])) { $GD = $GE['path'];
}else{ $GD = '';}
echo htmlspecialchars($GD,3); ?>&nbsp;|&nbsp;<?php $GF='';
$GG = $item;
if((is_array($GG) || ($GG instanceof ArrayAccess)) && isset($GG['identifier'])) { $GF = $GG['identifier'];
}else{ $GF = '';}
echo htmlspecialchars($GF,3); ?>&nbsp;|&nbsp;<?php $GH='';
$GI = $item;
if((is_array($GI) || ($GI instanceof ArrayAccess)) && isset($GI['level'])) { $GH = $GI['level'];
}else{ $GH = '';}
echo htmlspecialchars($GH,3); ?>

                &nbsp;|&nbsp;
                <?php
                echo (TreeItem :: getIsBranchByNodeId($item['node_id'])==0)?
                    '<a href="/tree_cart/add/'. $item['node_id']. '">В Корзину</a>': 'ВЕТКА';
                ?>


                
                    <?php $new_prefix = $prefix . "." . $counter; $this->ind = $this->i+1;?>
                <?php if(isset($item["preloaded_children"])) {$this->_render_treeffd619ef16a535d3d6e916c42e73d1fe($item["preloaded_children"], $level + 1, array('prefix' => $new_prefix,));
} ?>


            </td>
        </tr>
            <?php $FV++;
}
if($FV) {
 ?>

        <?php }

}

}
}
$macro_executor_class='MacroTemplateExecutor94e718c4f9485271f5a9a8f776a1274f';