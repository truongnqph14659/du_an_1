<?php
require_once './app/models/BaseModel.php';
class fetch_order extends BaseModel
{
    // function get data from table join to another table
    // function load 6 sp nổi bật
    var $orders = "orders";
    static function data_order()
    {
        $model = new static;
        $sql = "SELECT user.user_name,orders.status_order,user.dia_chi,user.sdt,orders.id_order FROM orders JOIN user ON orders.user_id = user.user_id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $resual = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resual;
    }

    static function get_order($id_user)
    {
        $model = new static;
        $sql = "SELECT id_order,order_date,status_order,user_id  FROM $model->orders WHERE orders.user_id=$id_user";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    static function data_ql_orders($user_id, $id_order)
    {
        $model = new static;
        $sql = "SELECT user.user_name,orders.status_order,orders.order_date,user.dia_chi,user.sdt,orders.id_order,san_pham.ten_sp,order_details.RAM,order_details.ROM,order_details.don_gia,order_details.so_luong,san_pham.images_sp,order_details.thanh_tien FROM san_pham JOIN order_details ON san_pham.ma_san_pham = order_details.ma_san_pham JOIN orders ON order_details.id_order = orders.id_order JOIN user ON orders.user_id = user.user_id WHERE orders.user_id = $user_id AND order_details.id_order = $id_order";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
$data_orders = fetch_order::data_order();
if ($_SESSION['user_account'] && $_SESSION['user_account']['user_role'] == 0) {
    $id_user = $_SESSION['user_account']['user_id'];
    $data = fetch_order::get_order($id_user);
    $data_orders_user = array();
    foreach ($data as $value) {
        $result = fetch_order::data_ql_orders($value['user_id'], $value['id_order']);
        $data_orders_user[$value['id_order']] = $result;
    }
}
