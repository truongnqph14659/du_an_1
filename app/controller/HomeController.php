<?php
class HomeController
{
    static function trang_chu()
    {
        require_once './app/controller/Fetch_Data/fetch_sp.php';
        include './app/views/Home/home_page/index.php';
    }
    // code tiep cac function
    static function product_page()
    {
        require_once './app/controller/Fetch_Data/fetch_sp.php';
        // require_once './app/controller/Fetch_Data/fetch_one_sp.php';
        include './app/views/Home/product/shop.php';
    }
    // code ct sản phẩm
    static function product_detail()
    {
        // require_once './app/controller/Fetch_Data/fetch_one_sp.php';
        require_once './app/views/Home/detail_product/detail_page.php';
    }
    static function contact_page()
    {
        require_once './app/views/Home/contact/contact.php';
    }
}
