<?php
class BaseModel
{
    var $table = "";
    // auto connect database
    function __construct()
    {
        $this->conn = new PDO("mysql:root=127.0.0.1;dbname=du_an_1;charset=utf8", "root", "");
    }
    // function insert data to table
    static function Insert_Data($form_data, $db_data, $header)
    {
        $model = new static();
        $sql = "INSERT into $model->table ($db_data) VALUES ($form_data)";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        header("location:$header");
    }
    // function get data from table
    static function Get_Data()
    {
        $model = new static;
        $sql = "SELECT * FROM " . $model->table;
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // function get data from table join to another table with condiotion
    static function Get_Data_Private_Sp($id)
    {
        $model = new static;
        $sql = "SELECT 	san_pham.so_luot_xem,san_pham.ma_san_pham,san_pham.ten_sp,san_pham.don_gia,san_pham.giam_gia,san_pham.images_sp,san_pham.sl_luu_kho,san_pham.ma_loai_sp,san_pham.thoi_gian_bat_dau,san_pham.thoi_gian_ket_thuc,san_pham.ma_option,chi_tiet_sp.ma_ct_sp,chi_tiet_sp.chung_loai,chi_tiet_sp.part_number,chi_tiet_sp.mau_sac,chi_tiet_sp.CPU,chi_tiet_sp.RAM,chi_tiet_sp.VGA,chi_tiet_sp.ROM,chi_tiet_sp.man_hinh FROM san_pham JOIN chi_tiet_sp ON san_pham.ma_san_pham = chi_tiet_sp.ma_san_pham WHERE san_pham.ma_san_pham=$id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // function get data from table join to another table with condiotion
    static function Get_Data_Edit($id, $rule)
    {
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $rule=$id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // update data
    static function Update_Data($re_values, $id, $rule, $header = "#")
    {
        $model = new static;
        $sql = "UPDATE $model->table SET $re_values WHERE $id=$rule";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        header("Location:$header");
    }
    // function get data with condition
    static function Get_One_Condition($rule, $operator, $id)
    {
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $id $operator '$rule'";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // function delete
    static function Delete($data_delete, $id, $header)
    {
        $model = new static;
        $sql = "DELETE FROM $model->table WHERE $id=$data_delete";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $msg = 'Deleted Successfully!';
        header("Location:$header&?msg=$msg");
    }
}
