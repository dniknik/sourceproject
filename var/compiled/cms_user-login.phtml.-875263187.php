<?php /* This file is generated from /home/dnn/web/webshop/template/cms_user/login.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor67cc198b4d425bf1d13361119ed93c60', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor67cc198b4d425bf1d13361119ed93c60 extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Powered by LIMB | http://www.limb-project.com/ -->
<!-- Designed by BIT | http://www.bit-creative.com/ -->
<html>
<head>
  <title><?php 
    echo lmb_i18n('Control panel :: Authorization','cms');
         ?></title>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp.css" />
  <!--[if IE]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie.css" /><![endif]-->
  <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie6.css" /><![endif]-->
</head>
<body id='login_form' onload="document.getElementById('login').focus()">
  <div id="login_form_wrapper">

    <form method="post" id='user_form'>

        <div id="logo_limb">
          <a href="http://limb-project.com"><img src="/shared/cms/images/logo.limb.png" alt='LIMB'/></a>
        </div>

        <div id="form_body">

          <h1><?php 
    echo lmb_i18n('Control panel','cms');
         ?></h1>

          <dl class='field'>
            <dt><label for='login'><?php 
    echo lmb_i18n('Login','cms');
         ?>:</label></dt>
            <dd><input tabindex="1" type="text" name="login" id="login" value="" title="Login" class='input'/></dd>
          </dl>

          <dl class='field'>
            <dt><label for='password'><?php 
    echo lmb_i18n('Password','cms');
         ?>:</label></dt>
            <dd>
              <input tabindex="2" type="password" name="password" id="password" title="Password"/>
              <input type="submit" name='submitted' value='Enter' class='button'/>
            </dd>
          </dl>

          <input type='hidden' name='redirect' value='<?php $A='';
$B = $this->request;
if((is_array($B) || ($B instanceof ArrayAccess)) && isset($B['redirect'])) { $A = $B['redirect'];
}else{ $A = '';}
echo htmlspecialchars($A,3); ?>'/>

          <a href="/cms_user/forgot_password" class="forgot_password_link"><?php 
    echo lmb_i18n('Forgot password?','cms');
         ?></a>

          <?php $this->__staticInclude1('_admin/notify_zone.phtml'); ?>


        </div>

    </form>

    <div class='shadow_bottom'><div class='left'></div><div class='center'></div><div class='right'></div></div>
    <div class='shadow_left'><div class='top'></div><div class='center'></div></div>
    <div class='shadow_right'><div class='top'></div><div class='center'></div></div>

  </div>

</body>
</html><?php 
}

function __staticInclude1($file) {
 ?>


<?php 
  $flashbox = $this->toolkit->getFlashBox();
  if($flashbox->hasErrors() || $flashbox->hasMessages()){ ?>
    <div id="flashbox" class="flashbox">
      <ul>
        <?php $C='';
$D = $flashbox;
$C = $D->getErrors();
$this->_template45ec72c29b7ea1151c3676fd45a28b25(array('template' => 'flashbox','messages' => $C,'box_class' => 'error',)); ?>

        <?php $N='';
$O = $flashbox;
$N = $O->getMessages();
$this->_template513c1fd23e7aa67cba2d1cf72601fbb9(array('template' => 'flashbox','messages' => $N,'box_class' => 'message',)); ?>

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

function _template45ec72c29b7ea1151c3676fd45a28b25($E= array()) {
if($E) extract($E); ?>

  <?php $H = 0;$J = $messages;

if(!is_array($J) && !($J instanceof Iterator) && !($J instanceof IteratorAggregate)) {
$J = array();}
$I = $J;
foreach($I as $item) {if($H == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $H++;}if($H > 0) { ?>

  <?php } ?>

<?php 
}

function _template513c1fd23e7aa67cba2d1cf72601fbb9($P= array()) {
if($P) extract($P); ?>

  <?php $S = 0;$U = $messages;

if(!is_array($U) && !($U instanceof Iterator) && !($U instanceof IteratorAggregate)) {
$U = array();}
$T = $U;
foreach($T as $item) {if($S == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $S++;}if($S > 0) { ?>

  <?php } ?>

<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor67cc198b4d425bf1d13361119ed93c60';