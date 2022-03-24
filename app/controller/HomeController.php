<?php
require_once './app/models/BaseModel.php';
class HomeController extends BaseModel
{
    static function trang_chu()
    {
        require_once './app/views/Home/home_page/index.php';
    }
    // code tiep cac function
    static function product_page()
    {
        require_once './app/views/Home/product/shop.php';
    }
    static function contact_page()
    {
        require_once './app/views/Home/contact/contact.php';
    }

}
