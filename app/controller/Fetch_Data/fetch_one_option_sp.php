<?php
require_once './app/models/BaseModel.php';
class fetch_one_option_sp extends BaseModel
{
    var $table = "sp_option";
    static function get_data_option_sp($id_sp, $id_option)
    {
        $model = new  static;
        $sql = "SELECT * FROM $model->table WHERE ma_san_pham=$id_sp AND ma_option=$id_option";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
$id_sp = $_GET['id_sp'];
$id_option = $_GET['id_option'];
$data_options_sp = fetch_one_option_sp::get_data_option_sp($id_sp, $id_option);
