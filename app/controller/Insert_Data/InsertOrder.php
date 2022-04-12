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
        $status_item = "đang xử lý";
        $sql = "INSERT into $model->table (user_id,status_order) VALUES ($user,'$status_item')";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $id_order =  $model->conn->lastInsertId();
        $item_stores = $_SESSION['list_cart'];
        foreach ($item_stores as $orders => $values) {
            extract($item_stores[$orders]);
            $option_order = $ma_option == "none" ? 0 : $ma_option * 1;
            $sql = "INSERT into $model->table_order_detail (so_luong,don_gia,thanh_tien,discount,id_order,ma_san_pham,ma_option) VALUES ($quantity*1,$don_gia*1.0,$tam_tinh*1.0,$giam_gia*1.0,$id_order,$id_sp*1,$option_order)";
            $stmt = $model->conn->prepare($sql);
            $stmt->execute();
            $option_order !== 0 ? create_order::Update_sl_Sp_Option($id_sp, $quantity, $option_order) : create_order::Update_sl_Sp($id_sp, $quantity);
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
    // function update sl_Sp_Option
    static function Update_sl_Sp_Option($id, $quantity_order, $id_option)
    {
        $model = new static;
        $get_sp = create_order::get_option_luu_kho($id, $id_option);
        extract($get_sp);
        $requantity = $sl_luu_kho - $quantity_order;
        $sql = "UPDATE sp_option SET sl_luu_kho='$requantity' WHERE sp_option.ma_san_pham = $id AND sp_option.ma_option = $id_option";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
    }
    // function getdata so luong luu kho option
    static function get_option_luu_kho($id, $id_option)
    {
        $model = new static;
        $sql = "SELECT sp_option.sl_luu_kho FROM sp_option WHERE sp_option.ma_san_pham = $id AND sp_option.ma_option = $id_option";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
create_order::create_order($id_user);
