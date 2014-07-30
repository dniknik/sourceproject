<?php

lmb_require('limb/cms/src/model/lmbCmsUserRoles.class.php');

$editor = array(
    array(
        'title' => 'Контент',
        'icon' => '/shared/cms/images/icons/menu_content.png',
        'children' => array()
    ));

$conf = array(
    lmbCmsUserRoles :: EDITOR  => $editor,
    lmbCmsUserRoles :: ADMIN  => array_merge_recursive($editor)
);

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
  array(
    "title" => "Products",
    "url" => "/admin_product/",
    "icon" => "/shared/images/icons/report.png",
);

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
  array(
    "title" => "Users",
    "url" => "/admin_user/",
    "icon" => "/shared/images/icons/user.png",
);

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
  array(
    "title" => "Orders",
    "url" => "/admin_order/",
    "icon" => "/shared/images/icons/money.png",
);

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "* Категории",
        "url" => "/admin_category/",
        "icon" => "/shared/images/icons/accept.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "* Товар",
        "url" => "/admin_ware/",
        "icon" => "/shared/images/icons/accept.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "** Tree",
        "url" => "/admin_tree/",
        "icon" => "/shared/images/icons/accept.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "* preference",
        "url" => "/admin_preference/",
        "icon" => "/shared/images/icons/menu_service.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "Objoftree *",
        "url" => "/admin_objoftree/",
        "icon" => "/shared/images/icons/application_side_tree.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "Admin_UITree",
        "url" => "/admin_uitree/",
        "icon" => "/shared/images/icons/application_side_tree.png",
    );

//$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
//    array(
//        "title" => "UI::Tree",
//        "url" => "/uitree/",
//        "icon" => "/shared/images/icons/application_side_tree.png",
//    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "Admin_UI::Category",
        "url" => "/admin_uicategory/",
        "icon" => "/shared/images/icons/application_side_tree.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "|**Admin_TreeItem**|",
        "url" => "/admin_tree_item/",
        "icon" => "/shared/images/icons/application_side_tree.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "| * Tree-FULL * |",
        "url" => "/admin_tree_full/",
        "icon" => "/shared/images/icons/application_side_tree.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "|Tree-Категории|",
        "url" => "/admin_tree_category/",
        "icon" => "/shared/images/icons/application_side_tree.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "|Tree-Товары|",
        "url" => "/admin_tree_product/",
        "icon" => "/shared/images/icons/application_side_tree.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "|Tree_Характеристики|",
        "url" => "/admin_tree_attribute/",
        "icon" => "/shared/images/icons/application_side_tree.png",
    );


$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "|Админка|",
        "url" => "/admin/",
        "icon" => "/shared/images/icons/application_side_tree.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "|Корзина|",
        "url" => "/tree_cart/",
        "icon" => "/shared/images/icons/application_side_tree.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "|Страница категори|",
        "url" => "/pagecategory/",
        "icon" => "/shared/images/icons/application_side_tree.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "|Страница Одного Товара|",
        "url" => "/info/",
        "icon" => "/shared/images/icons/application_side_tree.png",
    );
