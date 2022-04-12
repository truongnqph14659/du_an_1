<?php
require_once './app/models/BaseModel.php';
require_once './vender/reuse_function.php';
class Update_Sp_Controller extends BaseModel
{
    var $table = "san_pham";
}
// ma_san_pham	ten_sp	don_gia	giam_gia	images_sp	dac_biet	so_luot_xem	ngay_nhap	mo_ta_chi_tiet	ma_loai_sp
extract($_POST);
$images_sp = $_FILES['images_sp']['size'] > 0 ? insert_img($_FILES['images_sp']) : $images_sp_old;
$check_db = isset($dac_biet) == true ? $dac_biet : '0';
$images_sp_db_banner = NULL;
if ($check_db !== "0") {
    $images_sp_db_banner = $_FILES['images_sp_db']['size'] > 0 ? insert_img($_FILES['images_sp_db']) : $images_sp_db_old;
}
$mota = $_POST['mo_ta_chi_tiet'];
// ma_san_pham	ten_sp	don_gia	giam_gia	images_sp	dac_biet	so_luot_xem	ngay_nhap	mo_ta_chi_tiet	ma_loai_sp
$re_values = "ten_sp='$ten_sp',don_gia='$don_gia',giam_gia='$giam_gia',images_sp='$images_sp',dac_biet='$dac_biet',thoi_gian_bat_dau='$ngay_bat_dau',thoi_gian_ket_thuc='$ngay_ket',sl_luu_kho='$sl_luu_kho',mo_ta_ct='$mota',images_banner_sp='$images_sp_db_banner',ma_loai_sp='$ma_loai_sp'";
Update_Sp_Controller::Update_Data($re_values, 'ma_san_pham', $ma_sp, 'list_product');
