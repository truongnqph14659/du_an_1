<?php
require_once './app/models/BaseModel.php';
require_once './vender/reuse_function.php';
class Update_lib_img extends BaseModel
{
    var $table = "library_img_sp";
}
extract($_POST);
$images_sp = $_FILES['lib_image_sp']['size'] > 0 ? insert_img($_FILES['lib_image_sp']) : $lib_image_sp_old;
$re_values = "images='$images_sp'";
$id_sp = $_GET['id_sp'];
$id_img = $_GET['id_img'];
Update_lib_img::Update_Data($re_values, 'id_img_sp', $id_img, "list_images_sp?id=$id_sp");
