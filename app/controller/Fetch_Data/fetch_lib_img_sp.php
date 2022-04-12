<?php
require_once './app/models/BaseModel.php';
class fetch_image_sp extends BaseModel
{
    var $table = "library_img_sp";
    static function get_image_sp($id_sp)
    {
        $model = new  static;
        $sql = "SELECT * FROM $model->table WHERE id_img_sp=$id_sp";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
$id_lib_img = $_GET['id'];
$data_lib_img = fetch_image_sp::get_image_sp($id_lib_img);
