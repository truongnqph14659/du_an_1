<?php
require_once './app/models/BaseModel.php';
class update_status_Controller extends BaseModel
{
    var $table = "orders";
    // update data
    static function update_status($id, $status)
    {
        // echo $id;
        // echo $status;
        $model = new static;
        $sql = "UPDATE $model->table SET status_order = '$status' WHERE id_order = $id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
    }
}
extract($_GET);
// $id_sp = $_GET['id_sp'];
// $id_option = $_GET['id_option'];
// $re_values = "don_gia='$don_gia',giam_gia='$giam_gia',thoi_gian_bat_dau='$thoi_gian_bat_dau',thoi_gian_ket_thuc='$thoi_gian_ket_thuc',sl_luu_kho='$sl_luu_kho'";
// Update_Sp_Option_Controller::Update_Sp_Option($re_values, $id_sp, $id_option, "list_option_sp?id=$id_sp");
update_status_Controller::update_status($id, $status);
