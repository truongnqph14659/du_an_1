<?php
require_once './app/models/BaseModel.php';
class fetch_sp extends BaseModel
{
    // function get data from table join to another table
    static function Get_Data_Sp()
    {
        $model = new static;
        $sql = "SELECT * FROM san_pham JOIN chi_tiet_sp ON san_pham.ma_san_pham = chi_tiet_sp.ma_san_pham";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // function load 6 sp nổi bật
    static function top_products()
    {
        $model = new static;
        $sql = "SELECT * FROM san_pham JOIN chi_tiet_sp ON san_pham.ma_san_pham = chi_tiet_sp.ma_san_pham WHERE sl_luu_kho > 0 ORDER BY so_luot_xem DESC LIMIT 5";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
$data_sp = fetch_sp::Get_Data_Sp();
$data_top_views = fetch_sp::top_products();
