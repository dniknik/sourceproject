<?php

$conf = array(
    'main' => array(
        'path' => '/',
        'defaults' => array(
            'controller' => 'main_page',
        )),

    'pagecategory' => array(
        'path' => '/pagecategory/:identifier',
        'defaults' => array('controller' => 'main_page',
            'action' => 'pagecategory' //,            'id' => ''
        )),

    'pageitem' => array(
        'path' => '/pageitem/:identifier',
        'defaults' => array('controller' => 'main_page',
            'action' => 'pageitem',
            'id' => '')),

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
