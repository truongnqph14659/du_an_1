<?php
require_once './app/models/BaseModel.php';
class Delete_Loai extends BaseModel
{
    var $table = "sp_option";
    // function delete
    static function Delete_Sp_Option($id_sp, $id_option, $header)
    {
        $model = new static;
        $sql = "DELETE FROM $model->table WHERE ma_san_pham = $id_sp AND ma_option=$id_option";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        header("Location: $header");
    }
}
$id_sp = $_GET['id_sp'];
$id_option = $_GET['id_option'];
Delete_Loai::Delete_Sp_Option($id_sp, $id_option, "list_option_sp?id=$id_sp");
