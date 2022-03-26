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
        // 
        break;
    case 'edit_acount':
        AdminController::edit_account();
        break;
    case 'Comment':
        AdminController::comment();
        // 
        break;
    case 'feedback_user':
        AdminController::respon_comment();
        // 
        break;
    case 'list_product':
        AdminController::list_product();
        break;
        // 
    case 'add_product':
        AdminController::add_product();
        break;
    case 'edit_product':
        AdminController::edit_product();
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
        // case test của nguyễn quang trường
    case 'unset':
        unset($_SESSION['list_cart']);
        header('location: index.php');
        break;
    default:
        echo "duong dan khong ton tai";
        break;
}
