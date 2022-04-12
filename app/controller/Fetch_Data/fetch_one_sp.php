<?php
require_once './app/models/BaseModel.php';
class fetch_one_sp extends BaseModel
{
    var $table = "san_pham";
    var $ct_san_pham = "chi_tiet_sp";
    var $options = "options";
    var $sp_option = "sp_option";
    // function update lượt xem sản phẩm
    static function Update_luot_xem($re_values, $id)
    {
        $model = new static;
        $sql = "UPDATE $model->table SET $re_values WHERE ma_san_pham=$id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
    }
    static function get_options($id)
    {
        $model = new  static;
        $sql = "SELECT options.ROM,options.RAM,options.VGA,sp_option.don_gia,sp_option.ma_option FROM $model->table JOIN $model->sp_option ON san_pham.ma_san_pham = sp_option.ma_san_pham JOIN $model->options ON options.ma_option = sp_option.ma_option WHERE sp_option.ma_san_pham = $id AND sp_option.sl_luu_kho > 0";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // function thay đổi sp nếu có option
    static function get_options_change($id, $id_option)
    {
        $model = new  static;
        $sql = "SELECT chi_tiet_sp.CPU,chi_tiet_sp.chung_loai,chi_tiet_sp.part_number,chi_tiet_sp.mau_sac,chi_tiet_sp.man_hinh,san_pham.ten_sp,san_pham.images_sp,options.ma_option,options.RAM,options.ROM,options.VGA,sp_option.don_gia,sp_option.giam_gia,sp_option.sl_luu_kho FROM chi_tiet_sp JOIN san_pham ON chi_tiet_sp.ma_san_pham = san_pham.ma_san_pham JOIN sp_option ON san_pham.ma_san_pham =sp_option.ma_san_pham JOIN options ON options.ma_option = sp_option.ma_option WHERE sp_option.ma_san_pham = $id AND sp_option.ma_option = $id_option";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // function load 6 sp nổi bật
    static function top_products()
    {
        $model = new static;
        $sql = "SELECT * FROM $model->table JOIN $model->ct_san_pham ON san_pham.ma_san_pham = chi_tiet_sp.ma_san_pham WHERE sl_luu_kho > 0 ORDER BY so_luot_xem DESC LIMIT 8";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
$id_sp = $_GET['id_sp'];
$data_sp = isset($_GET['ma_option']) == true ? fetch_one_sp::get_options_change($id_sp, $_GET['ma_option']) : fetch_one_sp::Get_Data_Private_Sp($id_sp);
$data_options = fetch_one_sp::get_options($id_sp);
$related_sp = fetch_one_sp::top_products();
extract($data_sp);
// dành cho comment sản phẩm tiếp
if ($data_sp && !isset($_GET['ma_option'])) {
    $view_sp = $so_luot_xem + 1;
    $revalue = "so_luot_xem='$view_sp'";
    fetch_one_sp::Update_luot_xem($revalue, $id_sp);
}
