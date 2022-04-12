<?php
require_once './app/models/BaseModel.php';
class fetch_detail_sp extends BaseModel
{
    var $table = "chi_tiet_sp";
    static function get_data_detail_sp($id_sp)
    {
        $model = new  static;
        $sql = "SELECT * FROM $model->table WHERE ma_san_pham=$id_sp";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
$id_sp = $_GET['id'];
$data_detail_sp = fetch_detail_sp::get_data_detail_sp($id_sp);
