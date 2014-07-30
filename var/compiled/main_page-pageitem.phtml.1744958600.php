<?php /* This file is generated from /home/dnn/web/webshop/template/main_page/pageitem.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor6502942a4a872003ce61951127edd39a', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
class MacroTemplateExecutor6502942a4a872003ce61951127edd39a extends lmbMacroTemplateExecutor {

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

            <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler16d4867ad208307cd332047ae831f666(array()); ?>

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

function __slotHandler16d4867ad208307cd332047ae831f666($BN= array()) {
if($BN) extract($BN); ?>

<!-- content_begin -->
<?php $this->__staticInclude5('_admin_object/actions.phtml'); ?>


<div id="body" style="display: flex; padding: 6px">

    <div style="align-self: flex-start; width: 320px">

        <?php
        $sorted = lmbTreeHelper :: sort($this->records, array('id' => 'ASC'));
        $tree_tst = new lmbTreeNestedCollection($sorted);
        $tree_tst->setChildrenField('preloaded_children');
        $tree_tst->rewind();
        ?>

        <hr>
        <h4>wood</h4>
        <?php $this->_render_tree316a9dfdc4ff58b5b201bdc355fb5ac0($this->wood, 0,array('kids_prop' => 'preloaded_children','prefix' => '',));
 ?>


        <hr>
        <h4>tree_tst</h4>
        <?php $this->_render_tree330ac19bba0d800f98230f6910e4be08($tree_tst, 0,array('kids_prop' => 'preloaded_children','prefix' => '',));
 ?>


        <hr>
        <h4>records</h4>
        <?php $DI = 0;$DK = $this->records;

if(!is_array($DK) && !($DK instanceof Iterator) && !($DK instanceof IteratorAggregate)) {
$DK = array();}
$DJ = $DK;
foreach($DJ as $item) {$counter = $DI+1;$parity = (( ($DI + 1) % 2) ? "odd" : "even");if($DI == 0) { ?>

        <ul>
            <?php } ?>

            <li>
                <?php echo htmlspecialchars($counter,3); ?>)
                <a href="/branch/<?php $DO='';
$DP = $item;
if((is_array($DP) || ($DP instanceof ArrayAccess)) && isset($DP['id'])) { $DO = $DP['id'];
}else{ $DO = '';}
echo htmlspecialchars($DO,3); ?>">:<?php $DQ='';
$DR = $item;
if((is_array($DR) || ($DR instanceof ArrayAccess)) && isset($DR['path'])) { $DQ = $DR['path'];
}else{ $DQ = '';}
echo htmlspecialchars($DQ,3); ?></a>&nbsp;|&nbsp;
                <a href="/branch/<?php $DS='';
$DT = $item;
if((is_array($DT) || ($DT instanceof ArrayAccess)) && isset($DT['identifier'])) { $DS = $DT['identifier'];
}else{ $DS = '';}
echo htmlspecialchars($DS,3); ?>"><?php $DU='';
$DV = $item;
if((is_array($DV) || ($DV instanceof ArrayAccess)) && isset($DV['identifier'])) { $DU = $DV['identifier'];
}else{ $DU = '';}
echo htmlspecialchars($DU,3); ?></a>
            </li>
            <?php $DI++;}if($DI > 0) { ?>

            
        </ul>
        <?php }if($DI == 0) { ?>

            list is empty
            <?php } ?>


    </div>


    <div class="list" style="lign-self: flex-end; margin: 5px 5px;">
        <!-- -->

        <?php $EA = 0;$EC = $this->records;

if(!is_array($EC) && !($EC instanceof Iterator) && !($EC instanceof IteratorAggregate)) {
$EC = array();}
$EB = $EC;
foreach($EB as $item) {$parity = (( ($EA + 1) % 2) ? "odd" : "even");if($EA == 0) { ?>

        <?php $this->__staticInclude6('_admin_object/actions.phtml'); ?>

        <div class="list">

            <table>
                <tr>
                    <th>--</th>
                    <th>#ID</th>
                    <th>node_id</th>
                    <th>Характеристика</th>
                    <th>Значение_Свойства</th>


                </tr>
                <?php } ?>


                <tr class="odd">
                    <td>--</td>
                    <td>#<?php $EE='';
$EF = $item;
if((is_array($EF) || ($EF instanceof ArrayAccess)) && isset($EF['id'])) { $EE = $EF['id'];
}else{ $EE = '';}
echo htmlspecialchars($EE,3); ?></td>
                    <td>#<?php $EG='';
$EH = $item;
if((is_array($EH) || ($EH instanceof ArrayAccess)) && isset($EH['node_id'])) { $EG = $EH['node_id'];
}else{ $EG = '';}
echo htmlspecialchars($EG,3); ?>#</td>
                    <td>
                        #<?php $EI='';
$EJ = $item;
$EI = $EJ->getTitle();
echo htmlspecialchars($EI,3); ?>#
                        <?php
                        //class='{$parity}'
                        //lmb_var_debug( $item->gettreeitem());  echo '<br>';
                        //lmb_var_debug( $item->gettreeitem()->getArray());  echo '<br>';
                        //lmb_var_debug( sizeof($item->gettreeitem()->getArray()));
                        //echo '<br>:'. $item->gettreeitem()[0]->getInheritanceField();
                        //echo '<br>:'. $item->getInheritanceField();
                        //$item->setInheritanceField('node_id');
                        //echo '<br>::'. $item->gettreeitem()[0]->getPrimaryKeyName();
                        //echo '<br>::'. $item->getPrimaryKeyName();
                        //echo '<br>:'. $item->getTitle();
                        //echo $item->getTitle();
                        ?>
                    </td>
                    <td>
                        is_branch:<?php $EK='';
$EL = $item;
if((is_array($EL) || ($EL instanceof ArrayAccess)) && isset($EL['is_branch'])) { $EK = $EL['is_branch'];
}else{ $EK = '';}
echo htmlspecialchars($EK,3); ?>&nbsp;|&nbsp;
                        path:<?php $EM='';
$EN = $item;
if((is_array($EN) || ($EN instanceof ArrayAccess)) && isset($EN['path'])) { $EM = $EN['path'];
}else{ $EM = '';}
echo htmlspecialchars($EM,3); ?>

                        <!-- par:<?php $EO='';
$EP = $item;
if((is_array($EP) || ($EP instanceof ArrayAccess)) && isset($EP['parent_id'])) { $EO = $EP['parent_id'];
}else{ $EO = '';}
echo htmlspecialchars($EO,3); ?>&nbsp;|&nbsp; -->
                    </td>
                </tr>


                <?php $EQ='';
$ER = $item;
$EQ = $ER->gettreeitem();
$EW = 0;$EY = $EQ;

if(!is_array($EY) && !($EY instanceof Iterator) && !($EY instanceof IteratorAggregate)) {
$EY = array();}
$EX = $EY;
foreach($EX as $it) {$parity = (( ($EW + 1) % 2) ? "odd" : "even");if($EW == 0) { ?>

                        <?php } ?>

                        <tr>
                            <td></td>
                            <td>#<?php $FA='';
$FB = $it;
if((is_array($FB) || ($FB instanceof ArrayAccess)) && isset($FB['id'])) { $FA = $FB['id'];
}else{ $FA = '';}
echo htmlspecialchars($FA,3); ?></td>
                            <td><?php $FC='';
$FD = $it;
if((is_array($FD) || ($FD instanceof ArrayAccess)) && isset($FD['is_branch'])) { $FC = $FD['is_branch'];
}else{ $FC = '';}
echo htmlspecialchars($FC,3); ?>#<?php $FE='';
$FF = $it;
if((is_array($FF) || ($FF instanceof ArrayAccess)) && isset($FF['node_id'])) { $FE = $FF['node_id'];
}else{ $FE = '';}
echo htmlspecialchars($FE,3); ?>#</td>
                            <td><?php $FG='';
$FH = $it;
$FG = $FH->gettreeattribute();
$FG = $FG->getTitle();
echo htmlspecialchars($FG,3); ?></td>
                            <td><?php $FI='';
$FJ = $it;
if((is_array($FJ) || ($FJ instanceof ArrayAccess)) && isset($FJ['attr_id'])) { $FI = $FJ['attr_id'];
}else{ $FI = '';}
echo htmlspecialchars($FI,3); ?>/<?php $FK='';
$FL = $it;
if((is_array($FL) || ($FL instanceof ArrayAccess)) && isset($FL['attr_value'])) { $FK = $FL['attr_value'];
}else{ $FK = '';}
echo htmlspecialchars($FK,3); ?></td>
                        </tr>
                        <?php $EW++;}if($EW > 0) { ?>

                <?php } ?>


                <?php $EA++;}if($EA > 0) { ?>

                
            </table>
        </div>
        <?php }if($EA == 0) { ?>

                <div class="empty_list">Empty childrens</div>
                <?php } ?>


        <!-- -->
        <table border="2">
            <tr>
                <td>
                    <table>
                        <tr>
                            <th>#</th>
                            <th>id</th>
                            <th>id_sys_tree</th>
                            <th>id_pr</th>
                            <th>value_pr</th>
                            <th>is_branch</th>
                        </tr>

                        <?php $this->_render_tree9915b139144e7949364a6dec1363e68c($tree_tst, 0,array('kids_prop' => 'preloaded_children','prefix' => '1',));
 ?>

                    </table>
                </td>
                <td>
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
                        <?php $GP = 0;$GR = $this->childrens;

if(!is_array($GR) && !($GR instanceof Iterator) && !($GR instanceof IteratorAggregate)) {
$GR = array();}
$GQ = $GR;
foreach($GQ as $item) {$my_counter = $GP+1;if($GP == 0) { ?>

                        <?php } ?>

                        <tr>
                            <td><?php echo htmlspecialchars($my_counter,3); ?></td>
                            <td><?php $GV='';
$GW = $item;
if((is_array($GW) || ($GW instanceof ArrayAccess)) && isset($GW['id'])) { $GV = $GW['id'];
}else{ $GV = '';}
echo htmlspecialchars($GV,3); ?></td>
                            <td><?php $GX='';
$GY = $item;
if((is_array($GY) || ($GY instanceof ArrayAccess)) && isset($GY['parent_id'])) { $GX = $GY['parent_id'];
}else{ $GX = '';}
echo htmlspecialchars($GX,3); ?></td>
                            <td><?php $GZ='';
$HA = $item;
if((is_array($HA) || ($HA instanceof ArrayAccess)) && isset($HA['level'])) { $GZ = $HA['level'];
}else{ $GZ = '';}
echo htmlspecialchars($GZ,3); ?> lvl</td>
                            <td><?php $HB='';
$HC = $item;
if((is_array($HC) || ($HC instanceof ArrayAccess)) && isset($HC['identifier'])) { $HB = $HC['identifier'];
}else{ $HB = '';}
echo htmlspecialchars($HB,3); ?></td>
                            <td><?php $HD='';
$HE = $item;
if((is_array($HE) || ($HE instanceof ArrayAccess)) && isset($HE['path'])) { $HD = $HE['path'];
}else{ $HD = '';}
echo htmlspecialchars($HD,3); ?></td>
                        </tr>
                        <?php $GP++;}if($GP > 0) { ?>

                        <?php } ?>

                    </table>
                </td>
            </tr>
        </table>
    </div>

</div>

<?php
//echo '<img src="/shared/images/icons/application_view_detail.png" alt="detail" /></a>';
//echo '<img src="/shared/images/icons/cart_add.png" alt="2cart" /></a>';
?>

<!-- content_end -->
<?php 
}

function __staticInclude5($file) {
 ?>








<?php 
}

function _render_tree316a9dfdc4ff58b5b201bdc355fb5ac0($BU,$level,$BW= array()) {
if($BW) extract($BW);$BV=0;
foreach($BU as $item) {
$counter = $BV+1;
if(!$BV) {
 ?>

        <ul>
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
                <?php if(isset($item["preloaded_children"])) {$this->_render_tree316a9dfdc4ff58b5b201bdc355fb5ac0($item["preloaded_children"], $level + 1, array());
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

function _render_tree330ac19bba0d800f98230f6910e4be08($CN,$level,$CP= array()) {
if($CP) extract($CP);$CO=0;
foreach($CN as $item) {
$counter = $CO+1;
if(!$CO) {
 ?>

        <ul>
            <?php }
 ?>

            <li>
                <?php echo htmlspecialchars($counter,3); ?>)
                <a href="/branch/<?php $CS='';
$CT = $item;
if((is_array($CT) || ($CT instanceof ArrayAccess)) && isset($CT['id'])) { $CS = $CT['id'];
}else{ $CS = '';}
echo htmlspecialchars($CS,3); ?>">:<?php $CU='';
$CV = $item;
if((is_array($CV) || ($CV instanceof ArrayAccess)) && isset($CV['path'])) { $CU = $CV['path'];
}else{ $CU = '';}
echo htmlspecialchars($CU,3); ?></a>&nbsp;|&nbsp;
                <a href="/branch/<?php $CW='';
$CX = $item;
if((is_array($CX) || ($CX instanceof ArrayAccess)) && isset($CX['identifier'])) { $CW = $CX['identifier'];
}else{ $CW = '';}
echo htmlspecialchars($CW,3); ?>"><?php $CY='';
$CZ = $item;
if((is_array($CZ) || ($CZ instanceof ArrayAccess)) && isset($CZ['identifier'])) { $CY = $CZ['identifier'];
}else{ $CY = '';}
echo htmlspecialchars($CY,3); ?></a>
                <?php if(isset($item["preloaded_children"])) {$this->_render_tree330ac19bba0d800f98230f6910e4be08($item["preloaded_children"], $level + 1, array());
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

function __staticInclude6($file) {
 ?>








<?php 
}

function _render_tree9915b139144e7949364a6dec1363e68c($FS,$level,$FU= array()) {
if($FU) extract($FU);$FT=0;
foreach($FS as $item) {
$counter = $FT+1;
if(!$FT) {
 ?>


                        <?php }
 ?>

                        <tr>
                            <td colspan="6">
                                <h<?php echo $item['level'] + 1; ?>>
                                    <?php echo htmlspecialchars($prefix,3); ?>.(<?php echo htmlspecialchars($counter,3); ?>) :<?php echo $item['level'] + 1; ?>
                                    : <?php echo TreeItem :: getTitleByNodeId($item['node_id']); ?>
                                </h<?php echo $item['level'] + 1; ?>>
                                <?php $FZ='';
$GA = $item;
if((is_array($GA) || ($GA instanceof ArrayAccess)) && isset($GA['node_id'])) { $FZ = $GA['node_id'];
}else{ $FZ = '';}
echo htmlspecialchars($FZ,3); ?>&nbsp;|&nbsp;<?php $GB='';
$GC = $item;
if((is_array($GC) || ($GC instanceof ArrayAccess)) && isset($GC['path'])) { $GB = $GC['path'];
}else{ $GB = '';}
echo htmlspecialchars($GB,3); ?>&nbsp;|&nbsp;<?php $GD='';
$GE = $item;
if((is_array($GE) || ($GE instanceof ArrayAccess)) && isset($GE['identifier'])) { $GD = $GE['identifier'];
}else{ $GD = '';}
echo htmlspecialchars($GD,3); ?>&nbsp;|&nbsp;<?php $GF='';
$GG = $item;
if((is_array($GG) || ($GG instanceof ArrayAccess)) && isset($GG['level'])) { $GF = $GG['level'];
}else{ $GF = '';}
echo htmlspecialchars($GF,3); ?>

                                &nbsp;|&nbsp;
                                <?php
                                echo (TreeItem :: getIsBranchByNodeId($item['node_id']) == 0) ?
                                    '<a href="/tree_cart/add/' . $item['node_id'] . '">В Корзину</a>' : 'ВЕТКА';
                                ?>
                                
                                <?php $new_prefix = $prefix . "." . $counter;
                                $this->ind = $this->i + 1; ?>
                                <?php if(isset($item["preloaded_children"])) {$this->_render_tree9915b139144e7949364a6dec1363e68c($item["preloaded_children"], $level + 1, array('prefix' => $new_prefix,));
} ?>

                            </td>
                        </tr>
                        <?php $FT++;
}
if($FT) {
 ?>

                        <?php }

}

}
}
$macro_executor_class='MacroTemplateExecutor6502942a4a872003ce61951127edd39a';