<?php
require_once './app/models/BaseModel.php';
class fetch_order extends BaseModel
{
    // function get data from table join to another table
    // function load 6 sp nổi bật
    static function top_products($id)
    {
        $model = new static;
        $sql = "SELECT user.user_name,san_pham.don_gia,san_pham.ten_sp,order_details.so_luong,orders.user_id FROM san_pham JOIN order_details ON san_pham.ma_san_pham = order_details.ma_san_pham JOIN orders ON order_details.id_order = orders.id_order JOIN user ON orders.user_id = user.user_id WHERE orders.id_order = $id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $resual = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resual;
    }
}
$id = $_GET['id'];
$data_top_views = fetch_order::top_products($id);
