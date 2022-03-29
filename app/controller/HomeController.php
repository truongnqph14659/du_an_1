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
        include './app/views/Home/product/shop.php';
    }
    // code ct sản phẩm
    static function product_detai()
    {
        require_once './app/controller/Fetch_Data/fetch_one_sp.php';
        include './app/views/Home/detail_product/detail_page.php';
    }
    static function contact_page()
    {
        require_once './app/views/Home/contact/contact.php';
    }
    // add to cart list
    static function add_to_cart()
    {
        require_once './app/controller/Fetch_Data/fetch_data_cart.php';
    }
    //view cart 
    static function cart()
    {
        require_once './app/views/Home/home_carts/user_cart.php';
    }
    //view cart 
    static function delete_cart_item()
    {
        require_once './app/controller/Delete_Data/delete_cart_list.php';
    }
    //re_quantity
    static function re_quantity()
    {
        require_once './app/controller/Change_Data/Re_Quantity.php';
    }
    // create order
    static function Create_Order()
    {
        require_once './app/controller/Insert_Data/InsertOrder.php';
    }
}
