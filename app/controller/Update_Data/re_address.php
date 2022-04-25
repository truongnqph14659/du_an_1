<?php
require_once './app/models/BaseModel.php';
class re_address extends BaseModel
{
    var $table = "user";
    static function Update_Data_user($re_values, $id, $rule)
    {
        $model = new static;
        $sql = "UPDATE $model->table SET $re_values WHERE $id=$rule";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
    }
}
extract($_POST);
$re_values = "user_name='$name',sdt='$sdt',dia_chi='$street',tinh_thanh='$tinh_thanh',quan_huyen='$quan_huyen',xa_phuong='$xa_phuong'";
re_address::Update_Data_user($re_values, 'user_id', $id);
