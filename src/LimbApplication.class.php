<?php

//lmb_require('limb/web_app/src/lmbWebApplication.class.php');
lmb_require('limb/cms/src/lmbCmsApplication.class.php');

class LimbApplication extends lmbCmsApplication
{
  /*function __construct()
  {
    //register your own custom filter chain here
  }
 */

    protected function _getRequestDispathingFilter()
    {
        return new lmbHandle('src/filter/lmbTreeNodeRequestDispatchingFilter');
    }

}
