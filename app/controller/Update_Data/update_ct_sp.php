<?php
require_once './app/models/BaseModel.php';
class Update_Ct_Sp_Controller extends BaseModel
{
    var $table = "chi_tiet_sp";
}
// ma_san_pham	ten_sp	don_gia	giam_gia	images_sp	dac_biet	so_luot_xem	ngay_nhap	mo_ta_chi_tiet	ma_loai_sp
extract($_POST);
$ma_ct_sp = $_GET['id'];
// ma_san_pham	ten_sp	don_gia	giam_gia	images_sp	dac_biet	so_luot_xem	ngay_nhap	mo_ta_chi_tiet	ma_loai_sp
$re_values = "chung_loai='$chung_loai',part_number='$part_number',mau_sac='$mau_sac',CPU='$CPU',RAM='$RAM',VGA='$VGA',ROM='$ROM',man_hinh='$man_hinh'";
Update_Ct_Sp_Controller::Update_Data($re_values, 'ma_ct_sp', $ma_ct_sp, "list_detail_sp?id=$ma_san_pham");
