<?php
require_once './app/models/BaseModel.php';
class Update_Sp_Option_Controller extends BaseModel
{
    var $table = "sp_option";
    // update data
    static function Update_Sp_Option($re_values, $id_sp, $id_option, $header = "#")
    {
        $model = new static;
        $sql = "UPDATE $model->table SET $re_values WHERE ma_san_pham = $id_sp AND ma_option=$id_option";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        header("Location: $header");
    }
}
extract($_POST);
$id_sp = $_GET['id_sp'];
$id_option = $_GET['id_option'];
$re_values = "don_gia='$don_gia',giam_gia='$giam_gia',thoi_gian_bat_dau='$thoi_gian_bat_dau',thoi_gian_ket_thuc='$thoi_gian_ket_thuc',sl_luu_kho='$sl_luu_kho'";
Update_Sp_Option_Controller::Update_Sp_Option($re_values, $id_sp, $id_option, "list_option_sp?id=$id_sp");
