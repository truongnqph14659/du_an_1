<?php
require_once './app/models/BaseModel.php';
class fetch_option_sp extends BaseModel
{
    var $table = "sp_option";
    static function get_data_option_sp($id_sp)
    {
        $model = new  static;
        $sql = "SELECT * FROM $model->table WHERE ma_san_pham=$id_sp";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
$id_sp = $_GET['id'];
$data_options_sp = fetch_option_sp::get_data_option_sp($id_sp);
