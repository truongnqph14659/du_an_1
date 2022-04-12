<?php
require_once './app/models/BaseModel.php';
require_once './vender/reuse_function.php';
$content_comment = $_POST['content_comment'];
$user_id =  $_POST['user_id'];
$parent_id = $_POST['parent_id'];
$ma_san_pham = $_POST['ma_san_pham'];
$image = insert_img($_FILES['upload']);
$form_value = "'$content_comment','$image',$parent_id*1,$ma_san_pham*1,$user_id*1";
$db_data = "noi_dung_bl,anh_bl,parent_bl,ma_san_pham,user_id";
class InsertComment extends BaseModel
{
    var $table = "binh_luan";
}

InsertComment::Insert_Data($form_value, $db_data, "product_detail?id_sp=$ma_san_pham");
