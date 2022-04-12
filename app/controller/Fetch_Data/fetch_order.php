<?php
require_once './app/models/BaseModel.php';
class fetch_order extends BaseModel
{
    // function get data from table join to another table
    // function load 6 sp nổi bật
    static function top_products()
    {
        $model = new static;
        $sql = "SELECT user.user_name,orders.status_order,user.dia_chi,user.sdt,orders.id_order FROM orders JOIN user ON orders.user_id = user.user_id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $resual = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resual;
    }
}
$data_top_views = fetch_order::top_products();
