<?php
require_once './app/models/BaseModel.php';
require_once './vender/reuse_function.php';
if (isset($_POST['them_vao'])) {
    extract($_POST);
    $images_sp = insert_img($_FILES['images_sp']);
    $images_banner_db = "";
    if (isset($_FILES['images_sp_db'])) {
        $images_banner_db =  isset($_FILES['images_sp_db']) == true ? insert_img($_FILES['images_sp_db']) : "";
    }
    $form_value = "'$ten_sp','$don_gia','$giam_gia','$images_sp','$dac_biet','$mo_ta_chi_tiet','$sl_luu_kho','$images_banner_db','$ngay_bat_dau','$ngay_ket','$ma_loai_sp'";
    // ma_san_pham	ten_sp	don_gia	giam_gia	images_sp	dac_biet	so_luot_xem	ngay_nhap	mo_ta_chi_tiet	ma_loai_sp	
    $db_data = "ten_sp,don_gia,giam_gia,images_sp,dac_biet,mo_ta_ct,sl_luu_kho,images_banner_sp,thoi_gian_bat_dau,thoi_gian_ket_thuc,ma_loai_sp";
    class InsertSpController extends BaseModel
    {
        var $table = "san_pham";
        static function Insert_Data_SP($form_data, $db_data)
        {
            $model = new static();
            $sql = "INSERT into $model->table ($db_data) VALUES ($form_data)";
            $stmt = $model->conn->prepare($sql);
            $stmt->execute();
            $id_sp =  $model->conn->lastInsertId();
            header("location:form_ct_sp?ma_sp=$id_sp");
        }
    }
    InsertSpController::Insert_Data_SP($form_value, $db_data);
}
