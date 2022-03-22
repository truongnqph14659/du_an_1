<?php
require_once './app/models/BaseModel.php';
class AdminController extends BaseModel
{
    static function admin()
    {
        include './app/views/admin/component/Dashboard/Dashboard.php';
    }
    // 
    static function list_user()
    {
        include './app/views/admin/component/user/list_user.php';
    }
    // 
    static function created_acc()
    {
        include './app/views/admin/component/user/created_user.php';
    }
    // 
    static function edit_account()
    {
        include './app/views/admin/component/user/EditCustom.php';
    }
    // 
    static function comment()
    {
        include './app/views/admin/component/Comment/Comment.php';
    }
    // 
    static function respon_comment()
    {
        include './app/views/admin/component/Comment/Feedback_User.php';
    }
    // 
    static function list_product()
    {
        include './app/views/admin/component/products/list.php';
    }
    // 
    static function add_product()
    {
        include './app/views/admin/component/products/add-form.php';
    }
    // 
    static function edit_product()
    {
        include './app/views/admin/component/products/edit-form.php';
    }
    // 
    static function list_category()
    {
        include './app/views/admin/component/Category/list.php';
    }
    // 
    static function add_category()
    {
        include './app/views/admin/component/Category/add-form.php';
    }
    // 
    static function edit_category()
    {
        include './app/views/admin/component/Category/edit-form.php';
    }
    // 
    static function orders()
    {
        include './app/views/admin/component/Order/Order.php';
    }
    // 
    static function order_details()
    {
        include './app/views/admin/component/Order/Order_detail.php';
    }
    // 
    static function statistical()
    {
        include './app/views/admin/component/Statistical/Statistical.php';
    }
    // 
    static function chart()
    {
        include './app/views/admin/component/Statistical/Show_charts.php';
    }
}
