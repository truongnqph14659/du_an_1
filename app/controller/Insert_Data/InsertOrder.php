<?php
require_once './app/models/BaseModel.php';
// có thể so sánh id_user từ url va session để đối chiếu
$id_user = $_GET['id_user'];
class create_order extends BaseModel
{
    var $table = "orders";
    var $table_order_detail = "order_details";
    var $san_pham = "san_pham";
    static function create_order($id)
    {
        $model = new static;
        $user = $id * 1;
        $sql = "INSERT into $model->table (user_id) VALUES ($user)";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $id_order =  $model->conn->lastInsertId();
        $item_stores = $_SESSION['list_cart'];
        foreach ($item_stores as $orders => $values) {
            extract($item_stores[$orders]);
            $sql = "INSERT into $model->table_order_detail (so_luong,don_gia,thanh_tien,discount,id_order,ma_san_pham) VALUES ($quantity*1,$don_gia*1.0,$tam_tinh*1.0,$giam_gia*1.0,$id_order,$id_sp*1)";
            $stmt = $model->conn->prepare($sql);
            $stmt->execute();
            create_order::Update_sl_Sp($id_sp, $quantity);
            // trường hợp này để cho sau này nếu mà khách hàng chỉ muốn thanh toán những mặt hàng đã checked thì sau khi tạo đơn sẽ xóa đi những cái checked
            // unset($item_stores[$orders]);
            // header("location:index.php");
        }
        unset($_SESSION['list_cart']);
        $_SESSION['check_success'] = [
            'success' => "success"
        ];
        header("location:index.php");
    }
    // function update sl_luu_kho
    static function Update_sl_Sp($id, $quantity_order)
    {
        $model = new static;
        $get_sp = create_order::Get_Data_Private_Sp($id);
        extract($get_sp);
        $requantity = $sl_luu_kho - $quantity_order;
        $sql = "UPDATE $model->san_pham SET sl_luu_kho='$requantity' WHERE ma_san_pham=$id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
    }
}
create_order::create_order($id_user);
