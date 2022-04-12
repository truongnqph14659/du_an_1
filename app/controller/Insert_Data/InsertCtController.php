<?php
require_once './app/models/BaseModel.php';
if (isset($_POST['them_vao'])) {
    extract($_POST);
    $form_value = "'$chung_loai','$part_number','$mau_sac','$CPU','$RAM','$ROM','$VGA','$man_hinh',$ma_san_pham*1";
    // ma_san_pham	ten_sp	don_gia	giam_gia	images_sp	dac_biet	so_luot_xem	ngay_nhap	mo_ta_chi_tiet	ma_loai_sp	
    $db_data = "chung_loai,part_number,mau_sac,CPU,RAM,ROM,VGA,man_hinh,ma_san_pham";
    class InsertCtController extends BaseModel
    {
        var $table = "chi_tiet_sp";
        static function Insert_Data_SP($form_data, $db_data, $id_sp)
        {
            $model = new static();
            $sql = "INSERT into $model->table ($db_data) VALUES ($form_data)";
            $stmt = $model->conn->prepare($sql);
            $stmt->execute();
            header("location:form_option_sp?ma_sp=$id_sp");
        }
    }
    InsertCtController::Insert_Data_SP($form_value, $db_data, $ma_san_pham);
}
