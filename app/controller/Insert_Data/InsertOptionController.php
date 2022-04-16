<?php
require_once './app/models/BaseModel.php';
require_once './vender/reuse_function.php';
class InsertOptionSp extends BaseModel
{
    var $table = "sp_option";
    static function InsertOptionSp($ma_sp, $option, $don_gia, $giam_gia, $sl_luu_kho, $bat_dau, $ket_thuc)
    {
        foreach ($option as $order => $option_id) {
            $giam_gia = $giam_gia[$order] == NULL ? 0 : $giam_gia[$order];
            $form_data = "$ma_sp,$option_id,$don_gia[$order],$sl_luu_kho[$order],$giam_gia,'$bat_dau[$order]','$ket_thuc[$order]'";
            // ma_san_pham	ten_sp	don_gia	giam_gia	images_sp	dac_biet	so_luot_xem	ngay_nhap	mo_ta_chi_tiet	ma_loai_sp	
            $db_data = "ma_san_pham,ma_option,don_gia,sl_luu_kho,giam_gia,thoi_gian_bat_dau,thoi_gian_ket_thuc";
            $model = new static();
            $sql = "INSERT into $model->table ($db_data) VALUES ($form_data)";
            $stmt = $model->conn->prepare($sql);
            $stmt->execute();
        }
        header("location:form_multi_images?ma_sp=$ma_sp");
    }
}
$ma_sp = $_GET['ma_sp'];
$option_sp = $_POST['option_sp'];
$don_gia = $_POST['don_gia'];
$sl_luu_kho = $_POST['sl_luu_kho'];
$giam_gia = $_POST['giam_gia'];
$bat_dau = $_POST['thoi_gian_bat_dau'];
$ket_thuc = $_POST['thoi_gian_ket_thuc'];
$data_don_gia = check_data_option($don_gia);
$data_sl_luu_kho = check_data_option($sl_luu_kho);
$data_giam_gia = check_data_option($giam_gia);
$data_bat_dau = check_data_option($bat_dau);
$data_ket_thuc = check_data_option($ket_thuc);
InsertOptionSp::InsertOptionSp($ma_sp, $option_sp, $data_don_gia, $data_giam_gia, $data_sl_luu_kho, $data_bat_dau, $data_ket_thuc);
