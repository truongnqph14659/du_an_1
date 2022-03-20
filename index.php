<?php
require_once './app/controller/HomeController.php';
require_once './app/controller/AdminController.php';
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        HomeController::trang_chu();
        break;
        // case admin
    case 'admin':
        // code
        break;
    default:
        echo "duong dan khong ton tai";
        break;
}
