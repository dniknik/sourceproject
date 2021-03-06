<?php

set_include_path(implode(PATH_SEPARATOR,
  array(
    dirname(__FILE__) . '/lib/',
    dirname(__FILE__),
    get_include_path()
  )
));

require_once('limb/core/common.inc.php');

require_once('limb/cms/common.inc.php');
require_once('limb/tree/common.inc.php');

if(file_exists(dirname(__FILE__) . '/setup.override.php'))
  require_once(dirname(__FILE__) . '/setup.override.php');

lmb_package_require('cms');

lmb_env_setor('LIMB_VAR_DIR', dirname(__FILE__) . '/var/');
@define('MACRO_HTTP_BASE_PATH', "http://shoptst.ru/");
lmb_env_setor('LIMB_APP_MODE' , 'production');
lmb_env_setor('PRODUCT_IMAGES_DIR', dirname(__FILE__) . '/www/product_images/');

lmb_require('limb/web_app/src/controller/lmbController.class.php');
lmb_require('limb/active_record/src/lmbActiveRecord.class.php');
lmb_require('src/model/*.class.php');


lmb_require('src/toolkit/ShopTools.class.php');
lmbToolkit :: merge(new ShopTools());

// echo('&nbsp;<b>|</b>&nbsp;LIMB_APP_MODE<b>:</b> '.lmb_env_get('LIMB_APP_MODE').'&nbsp;<b>|</b>&nbsp;');
