<?php

$conf = array(
   'main' => array(
      'path' => '/',
      'defaults' => array(
         'controller' => 'main_page',
      )
   ),

//    'branch' => array(
//        'path' => '/branch/:identifier',
//        'defaults' => array('controller' => 'main_page',
//                            'action' => 'display',
//                            'id'=>'')),
    'node' => array(
        'path' => '/node/:identifier',
        'defaults' => array('controller' => 'main_page',
                            'action' => 'node',
                            'id'=>'')),

    'pagecategory' => array(
        'path' => '/pagecategory/:identifier',
        'defaults' => array('controller' => 'main_page',
                            'action' => 'pagecategory',
                            'id'=>'')),

    'pageitem' => array(
        'path' => '/pageitem/:identifier',
        'defaults' => array('controller' => 'main_page',
                            'action' => 'pageitem',
                            'id'=>'')),

    'treecategory' => array(
        'path' => '/treecategory/',
        'defaults' => array('controller' => 'main_page',
                            'action' => 'display')),

    'info' => array(
        'path' => '/info/',
        'defaults' => array('controller' => 'main_page',
                            'action' => 'display')),

    'search' => array(
        'path' => '/search/',
        'defaults' => array('controller' => 'main_page',
            'action' => 'search')),


);



//$conf['ControllerActionIdentifier'] = array(
//    'path' => '/:controller/:action/:identifier',
//);

// Common routes, should be included AFTER yours
include_once('limb/web_app/settings/routes.conf.php');
