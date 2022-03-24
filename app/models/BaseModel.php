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
        if ($model->table == 'user') {
            $msg = "Sign_in Successfully, take 1 min to active!";
        } else {
            $msg = "Insert Successfully!";
        }
        header("location:$header?msg='$msg'");
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
        $sql = "SELECT * FROM san_pham JOIN chi_tiet_sp ON san_pham.ma_san_pham = chi_tiet_sp.ma_san_pham WHERE san_pham.ma_san_pham=$id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
