<?php
require_once './app/controller/HomeController.php';
require_once './app/controller/AdminController.php';
require_once './vender/url_server.php';
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        HomeController::trang_chu();
        break;
        // 
    case 'product_page':
        HomeController::product_page();
        break;
    case 'product_detail':
        HomeController::product_detai();
        break;
    case 'cart_lists':
        HomeController::add_to_cart();
        break;
        // cart
    case 'cart':
        HomeController::cart();
        break;
        // delete cart list
    case 'delete_cart_item':
        HomeController::delete_cart_item();
        break;
        // re_quantity
    case 're_quantity':
        HomeController::re_quantity();
        break;
        // 
    case 'Create_Order':
        HomeController::Create_Order();
        break;
        // case admin
    case 'contact_page':
        HomeController::contact_page();
        break;
    case 'admin':
        AdminController::admin();
        break;
    case 'list_user':
        AdminController::list_user();
        break;
    case 'Created_account':
        AdminController::created_acc();
        break;
        // Insert_User
    case 'Insert_User':
        AdminController::Insert_User();
        break;
        // 
    case 'edit_acount':
        AdminController::edit_account();
        break;
    case 'Comment':
        AdminController::comment();
        break;
        // insert comment
    case 'insert_comment':
        HomeController::Insert_Comment();
        break;
        // tree view comment
    case 'treeview_comment':
        HomeController::treeview_comment();
        break;

    case 'feedback_user':
        AdminController::respon_comment();
        // 
        break;
    case 'list_product':
        AdminController::list_product();
        break;
        // list_option_sp
    case 'list_option_sp':
        AdminController::list_option_sp();
        break;
        // edit_option_sp
    case 'edit_option_sp':
        AdminController::edit_option_sp();
        break;
        // remove_option_sp
    case 'remove_option_sp':
        AdminController::remove_option_sp();
        break;
        // update_option_sp
    case 'update_option_sp':
        AdminController::update_option_sp();
        break;
        // list detail sp
    case 'list_detail_sp':
        AdminController::list_detail_sp();
        break;
        // list detail sp
    case 'edit_detail_sp':
        AdminController::edit_detail_sp();
        break;
        // update_ct_sp
    case 'update_ct_sp':
        AdminController::update_ct_sp();
        break;
        // list images sp
    case 'list_images_sp':
        AdminController::list_images_sp();
        break;
    case 'add_product':
        AdminController::add_product();
        break;
        // insert product to databases
    case 'insert_san_pham':
        AdminController::insert_san_pham();
        break;
    case 'edit_product':
        AdminController::edit_product();
        break;
        // remove_product
    case 'remove_product':
        AdminController::remove_product();
        break;
    case 'list_category':
        AdminController::list_category();
        break;
    case 'add_category':
        AdminController::add_category();
        break;
    case 'edit_category':
        AdminController::edit_category();
        break;
    case 'Statiscal':
        AdminController::statistical();
        break;
    case 'show_charts':
        AdminController::chart();
        break;
    case 'list_order':
        AdminController::orders();
        break;
        // 
    case 'order_detail':
        AdminController::order_details();
        break;
    case 'fill_category':
        require_once './app/controller/Fetch_Data/fetch_loai_sp.php';
        break;
        // case test của nguyễn quang trường add_loai
    case 'add_loai':
        AdminController::add_loai_sp();
        break;
        // case test của nguyễn quang trường add_loai
    case 'fetch_loai_treeview':
        AdminController::show_treeview_loai_sp();
        break;
    case 'remove_category':
        AdminController::remove_category();
        break;
    case 'form_ct_sp':
        AdminController::form_ct_sp();
        break;
        // insert_multi_images 
    case 'insert_ct_sp':
        AdminController::insert_ct_sp();
        break;
        // insert_option_sp
    case 'insert_option_sp':
        AdminController::insert_option_sp();
        break;
        // form_option_sp
    case 'form_option_sp':
        AdminController::form_option_sp();
        break;
        // form_multi_images
    case 'form_multi_images':
        AdminController::form_multi_images();
        break;
    case 'insert_multi_images':
        AdminController::insert_multi_images();
        break;
        // update_product
    case 'update_product':
        AdminController::update_product();
        break;
        // edit_lib_img
    case 'edit_lib_img':
        AdminController::edit_lib_img();
        break;
        // update_lib_image
    case 'update_lib_image':
        AdminController::update_lib_image();
        break;
    case 'unset':
        unset($_SESSION['list_cart']);
        header('location: index.php');
        break;
    case 'update_status':
        AdminController::update_status();
        break;
    default:
        echo "duong dan khong ton tai";
        break;
}
