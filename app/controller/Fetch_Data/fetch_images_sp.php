<?php
require_once './app/models/BaseModel.php';
class fetch_images_sp extends BaseModel
{
    var $table = "library_img_sp";
    static function get_images_sp($id_sp)
    {
        $model = new  static;
        $sql = "SELECT * FROM $model->table WHERE ma_san_pham=$id_sp";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
$id_sp = $_GET['id'];
$data_images_sp = fetch_images_sp::get_images_sp($id_sp);
