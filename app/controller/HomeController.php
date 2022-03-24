<?php
require_once './app/models/BaseModel.php';
class HomeController extends BaseModel
{
    static function trang_chu()
    {
        require_once './app/controller/Fetch_Data/fetch_sp.php';
        include './app/views/Home/home_page/index.php';
    }
    // code tiep cac function
    static function product_page()
    {
        include './app/views/Home/product/shop.php';
    }
    // code ct sản phẩm
    static function product_detai()
    {
        require_once './app/controller/Fetch_Data/fetch_one_sp.php';
    }
}
