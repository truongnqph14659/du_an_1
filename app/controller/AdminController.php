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
        require_once './app/controller/Fetch_Data/fetch_users.php';
        include './app/views/admin/component/user/list_user.php';
    }
    // created_acc
    static function created_acc()
    {
        require_once './app/views/admin/component/user/created_user.php';
    }

    // Insert_User
    static function Insert_User()
    {
        require_once './app/controller/Insert_Data/InsertUser.php';
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
        require_once './app/controller/Fetch_Data/fetch_sp.php';
        include './app/views/admin/component/products/list.php';
    }
    // 
    static function add_product()
    {
        require_once './app/controller/Fetch_Data/fetch_loai.php';
        include './app/views/admin/component/products/add-form.php';
    }
    // insert_san_pham
    static function insert_san_pham()
    {
        require_once './app/controller/Insert_Data/InsertSpController.php';
    }
    // update_product
    static function update_product()
    {
        require_once './app/controller/Update_Data/Update_Sp_Controller.php';
    }
    // remove_product
    static function remove_product()
    {
        require_once './app/controller/Delete_Data/delete_sp.php';
    }
    // insert_ct_sp
    static function insert_ct_sp()
    {
        require_once './app/controller/Insert_Data/InsertCtController.php';
    }
    // add_multi_images
    static function insert_multi_images()
    {
        require_once './app/controller/Insert_Data/InsertImagesSp.php';
    }
    // 
    static function edit_product()
    {
        require_once './app/controller/Fetch_Data/fetch_loai.php';
        require_once './app/controller/Fetch_Data/fetch_edit_sp.php';
        include './app/views/admin/component/products/edit-form.php';
    }
    // 
    static function list_category()
    {
        require_once './app/controller/Fetch_Data/fetch_loai.php';
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
        require_once './app/controller/Change_Data/ChangeLoaiController.php';
        include './app/views/admin/component/Category/edit-form.php';
    }
    // add_ct_sp
    static function form_ct_sp()
    {
        include './app/views/admin/component/products/add_ct_sp.php';
    }
    // form_option_sp
    static function form_option_sp()
    {
        require_once './app/controller/Fetch_Data/fetch_option.php';
        include './app/views/admin/component/products/add_option_sp.php';
    }
    // insert_option_sp
    static function insert_option_sp()
    {
        require_once './app/controller/Insert_Data/InsertOptionController.php';
    }
    // list_option_sp
    static function list_option_sp()
    {
        require_once './app/controller/Fetch_Data/fetch_option_sp.php';
        include './app/views/admin/component/products/show_option_sp.php';
    }
    // edit_option_sp
    static function edit_option_sp()
    {
        require_once './app/controller/Fetch_Data/fetch_one_sp_option.php';
        include './app/views/admin/component/products/edit_sp_option.php';
    }
    // update_option_sp
    static function update_option_sp()
    {
        require_once './app/controller/Update_Data/update_sp_option.php';
    }
    // remove_option_sp
    static function remove_option_sp()
    {
        require_once './app/controller/Delete_Data/delete_sp_option.php';
    }
    // list_detail_sp
    static function list_detail_sp()
    {
        require_once './app/controller/Fetch_Data/fetch_detail_sp.php';
        include './app/views/admin/component/products/show_detail_sp.php';
    }
    // edit_detail_sp
    static function edit_detail_sp()
    {
        require_once './app/controller/Fetch_Data/fetch_detail_sp.php';
        include './app/views/admin/component/products/edit_detail_sp.php';
    }
    // update_ct_sp
    static function update_ct_sp()
    {
        require_once './app/controller/Update_Data/update_ct_sp.php';
    }
    // list_images_sp
    static function list_images_sp()
    {
        require_once './app/controller/Fetch_Data/fetch_images_sp.php';
        include './app/views/admin/component/products/show_images_sp.php';
    }
    // edit_lib_img
    static function edit_lib_img()
    {
        require_once './app/controller/Fetch_Data/fetch_lib_img_sp.php';
        include './app/views/admin/component/products/edit_lib_images.php';
    }
    // update_lib_image
    static function update_lib_image()
    {
        require_once './app/controller/Update_Data/update_lib_image.php';
    }
    // treeview loai sp
    static function add_loai_sp()
    {
        require_once './app/controller/Insert_Data/InsertLoaiController.php';
    }
    // form_multi_images
    static function form_multi_images()
    {
        require_once './app/views/admin/component/products/add_images_sp.php';
    }
    // treeview loai sp remove_category
    static function show_treeview_loai_sp()
    {
        require_once './app/controller/Fetch_Data/fetch_treeview_loai.php';
    }
    // treeview loai sp remove_category
    static function remove_category()
    {
        require_once './app/controller/Delete_Data/delete_category.php';
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
