<?php /* This file is generated from /home/dnn/web/webshop/template/main_page/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutorba939a66b6f043491990406213d09053', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
require_once('limb/macro/src/tags/list/lmbMacroListGlueHelper.class.php');
class MacroTemplateExecutorba939a66b6f043491990406213d09053 extends lmbMacroTemplateExecutor {

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

            <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler102d275b8cedca823f735cd971513aae(array()); ?>

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

function __slotHandler102d275b8cedca823f735cd971513aae($BN= array()) {
if($BN) extract($BN); ?>

<!-- content_begin -->
<?php $this->__staticInclude5('_admin_object/actions.phtml'); ?>



<div id="body" style="display: flex; padding: 6px">


    <div style="align-self: flex-start; width: 320px">

        <hr>
        <h4 style="background-color: #add8e6;">Список категорий</h4>
        <p style="background-color: lightgray;">items_child_nodes</p>
        <?php $BU = 0;$BW = $this->items_child_nodes;

if(!is_array($BW) && !($BW instanceof Iterator) && !($BW instanceof IteratorAggregate)) {
$BW = array();}
$BV = $BW;
foreach($BV as $item) {$my_counter = $BU+1;if($BU == 0) { ?>

        <?php } ?>

<!--        <h5> <a href="/pagecategory/<?php $BY='';
$BZ = $item;
if((is_array($BZ) || ($BZ instanceof ArrayAccess)) && isset($BZ['identifier'])) { $BY = $BZ['identifier'];
}else{ $BY = '';}
echo htmlspecialchars($BY,3); ?>"><?php $CA='';
$CB = $item;
if((is_array($CB) || ($CB instanceof ArrayAccess)) && isset($CB['path'])) { $CA = $CB['path'];
}else{ $CA = '';}
echo htmlspecialchars($CA,3); ?> / --><?php //echo TreeItem :: getTitleByNodeId($item['node_id']); ?><!-- </a> </h5>-->
        <h5> <a href="/pagecategory/<?php $CC='';
$CD = $item;
if((is_array($CD) || ($CD instanceof ArrayAccess)) && isset($CD['identifier'])) { $CC = $CD['identifier'];
}else{ $CC = '';}
echo htmlspecialchars($CC,3); ?>"><?php $CE='';
$CF = $item;
if((is_array($CF) || ($CF instanceof ArrayAccess)) && isset($CF['path'])) { $CE = $CF['path'];
}else{ $CE = '';}
echo htmlspecialchars($CE,3); ?> / <?php $CG='';
$CH = $item;
$CG = $CH->getTitle();
echo htmlspecialchars($CG,3); ?> </a> </h5>
        <?php $BU++;}if($BU > 0) { ?>

        <?php } ?>


        <hr>
        <div style="">
        <?php
            $sorted = lmbTreeHelper :: sort($this->childrens, array('id' => 'ASC'));
            $tree_tst = new lmbTreeNestedCollection($sorted);
            $tree_tst->setChildrenField('preloaded_children');
            $tree_tst->rewind();
        ?>
        <h4>tree_tst by #childrens</h4>

        <?php $this->_render_treeb73199e4e82f0336de1fdc83697aed69($tree_tst, 0,array('kids_prop' => 'preloaded_children','prefix' => '',));
 ?>

        </div>
    </div>

    

    <div class="list" style="lign-self: flex-end; margin: 5px 6px;">

        <?php $DD = 0;$DF = $this->main_last;

if(!is_array($DF) && !($DF instanceof Iterator) && !($DF instanceof IteratorAggregate)) {
$DF = array();}
$DE = array();
foreach($DF as $DH => $DG) {
$DE[$DH] = $DG;
}
if(!isset($DJ)){
$DJ = new lmbMacroListGlueHelper();
}
$DI = 3;
$DJ->setStep($DI);
$DJ->setTotalItems(count($DE));
foreach($DE as $item) {if($DD == 0) { ?>

        <table border="1">
            <tr>
                <?php } ?>

                <td>
                    <?php $DK='';
$DL = $item;
if((is_array($DL) || ($DL instanceof ArrayAccess)) && isset($DL['path'])) { $DK = $DL['path'];
}else{ $DK = '';}
echo htmlspecialchars($DK,3); ?> | node:<?php $DM='';
$DN = $item;
if((is_array($DN) || ($DN instanceof ArrayAccess)) && isset($DN['node_id'])) { $DM = $DN['node_id'];
}else{ $DM = '';}
echo htmlspecialchars($DM,3); ?> | <b>[<?php $DO='';
$DP = $item;
if((is_array($DP) || ($DP instanceof ArrayAccess)) && isset($DP['udate'])) { $DO = $DP['udate'];
}else{ $DO = '';}
echo htmlspecialchars($DO,3); ?>]</b>
                    <?php $this->_template1042393dc6a19fb297017f73f692341e(array('template' => 'info_tpl','item' => $item,)); ?>

                </td>
                <?php $DJ->next();
if ( $DJ->shouldDisplay()){
$DJ->reset();
 ?></tr><tr><?php }
 ?>

                <?php $DD++;}if($DD > 0) { ?>

                <?php $EL = 3;
$EM = count($DE);if ((0 || ($EM/$EL > 1)) && $EM) 
$EN = ceil($EM/$EL)*$EL - $EM; 
else 
$EN = 0;
if ($EN){
$items_left = $EN; ?>

                <td colspan='<?php echo htmlspecialchars($items_left,3); ?>'>&nbsp;</td>
                <?php }
 ?>

            </tr>
        </table>
        <?php } ?>


        <!-- for debug -->
        <div class="list">
        <?php $EW = 0;$EY = $this->arr_tovar;

if(!is_array($EY) && !($EY instanceof Iterator) && !($EY instanceof IteratorAggregate)) {
$EY = array();}
$EX = $EY;
foreach($EX as $key => $item) {$parity = (( ($EW + 1) % 2) ? "odd" : "even");if($EW == 0) { ?>

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
                        #(:<?php echo htmlspecialchars($key,3); ?>:)
                        <a href="/tree_cart/add/<?php echo htmlspecialchars($key,3); ?>">+++</a>
                    </td>

                    <?php

                    //@todo this fragment to ShopTools
                    $arr_tovar_attr = array_reverse($item);
                    ?>

                    <?php $FK = 0;$FM = $arr_tovar_attr;

if(!is_array($FM) && !($FM instanceof Iterator) && !($FM instanceof IteratorAggregate)) {
$FM = array();}
$FL = $FM;
foreach($FL as $tovar) {if($FK == 0) { ?>

                    <?php } ?>

                    <td>
                        <?php $FO='';
$FP = $tovar;
if((is_array($FP) || ($FP instanceof ArrayAccess)) && isset($FP['attr_value'])) { $FO = $FP['attr_value'];
}else{ $FO = '';}
echo htmlspecialchars($FO,3); ?>

                    </td>
                    <?php $FK++;}if($FK > 0) { ?>

                    <?php } ?>


                </tr>
                <?php $EW++;}if($EW > 0) { ?>

                
            </table>
        <?php }if($EW == 0) { ?>

                <div class="empty_list">Empty arr_tovar</div>
                <?php } ?>

        </div>

    </div>
</div>
<!-- content_end -->
<?php 
}

function __staticInclude5($file) {
 ?>








<?php 
}

function _render_treeb73199e4e82f0336de1fdc83697aed69($CO,$level,$CQ= array()) {
if($CQ) extract($CQ);$CP=0;
foreach($CO as $item) {
$counter = $CP+1;
if(!$CP) {
 ?>

        <ul>
            <?php }
 ?>

            <li>
                <?php echo htmlspecialchars($counter,3); ?>)
                <a href="/branch/<?php $CT='';
$CU = $item;
if((is_array($CU) || ($CU instanceof ArrayAccess)) && isset($CU['id'])) { $CT = $CU['id'];
}else{ $CT = '';}
echo htmlspecialchars($CT,3); ?>">:<?php $CV='';
$CW = $item;
if((is_array($CW) || ($CW instanceof ArrayAccess)) && isset($CW['path'])) { $CV = $CW['path'];
}else{ $CV = '';}
echo htmlspecialchars($CV,3); ?></a>&nbsp;|&nbsp;
                <a href="/branch/<?php $CX='';
$CY = $item;
if((is_array($CY) || ($CY instanceof ArrayAccess)) && isset($CY['identifier'])) { $CX = $CY['identifier'];
}else{ $CX = '';}
echo htmlspecialchars($CX,3); ?>"><?php $CZ='';
$DA = $item;
if((is_array($DA) || ($DA instanceof ArrayAccess)) && isset($DA['identifier'])) { $CZ = $DA['identifier'];
}else{ $CZ = '';}
echo htmlspecialchars($CZ,3); ?></a>
                <?php if(isset($item["preloaded_children"])) {$this->_render_treeb73199e4e82f0336de1fdc83697aed69($item["preloaded_children"], $level + 1, array());
} ?>

            </li>
            <?php $CP++;
}
if(count($CO) == 0) { ?>

            tree_array is empty
            <?php }if($CP) {
 ?>

            
        </ul>
        <?php }

}

function _template1042393dc6a19fb297017f73f692341e($DS= array()) {
if($DS) extract($DS); ?>

    <div style="margin: 2px; padding: 8px;">
        <h2>
            <?php
            echo TreeItem :: getTitleByNodeId($item['node_id']);
            $item_uri = TreeItem :: getUriByNodeId($item['node_id']);
            ?>
            <a href="/pageitem/<?php $DT='';
$DU = $item;
if((is_array($DU) || ($DU instanceof ArrayAccess)) && isset($DU['id'])) { $DT = $DU['id'];
}else{ $DT = '';}
echo htmlspecialchars($DT,3); ?>"> #<?php $DV='';
$DW = $item;
if((is_array($DW) || ($DW instanceof ArrayAccess)) && isset($DW['id'])) { $DV = $DW['id'];
}else{ $DV = '';}
echo htmlspecialchars($DV,3); ?></a>
            ::#::
            <a href="/pageitem/<?php echo htmlspecialchars($item_uri,3); ?>"> #byURI</a>
        </h2>
        <?php
        echo ($item->get('is_branch') == 0) ?
            '<a href="/tree_cart/add/'.$item->get('node_id').'">++ В корзину</a>':'';
        ?>

        <ul>
            <li>id: <?php $DZ='';
$EA = $item;
if((is_array($EA) || ($EA instanceof ArrayAccess)) && isset($EA['id'])) { $DZ = $EA['id'];
}else{ $DZ = '';}
echo htmlspecialchars($DZ,3); ?></li>
            <li>path: <?php $EB='';
$EC = $item;
if((is_array($EC) || ($EC instanceof ArrayAccess)) && isset($EC['path'])) { $EB = $EC['path'];
}else{ $EB = '';}
echo htmlspecialchars($EB,3); ?></li>
            <li>node: <?php $ED='';
$EE = $item;
if((is_array($EE) || ($EE instanceof ArrayAccess)) && isset($EE['node_id'])) { $ED = $EE['node_id'];
}else{ $ED = '';}
echo htmlspecialchars($ED,3); ?></li>
            <li>parent: <?php $EF='';
$EG = $item;
if((is_array($EG) || ($EG instanceof ArrayAccess)) && isset($EG['par_id'])) { $EF = $EG['par_id'];
}else{ $EF = '';}
echo htmlspecialchars($EF,3); ?> </li>
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
$macro_executor_class='MacroTemplateExecutorba939a66b6f043491990406213d09053';