<?php
require_once './app/models/BaseModel.php';
class fetch_one_sp extends BaseModel
{
    var $table = "san_pham";
    // function update lượt xem sản phẩm
    static function Update_luot_xem($re_values, $id)
    {
        $model = new static;
        $sql = "UPDATE $model->table SET $re_values WHERE ma_san_pham=$id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
    }
}
$id_sp = $_GET['id_sp'];
$data_sp = fetch_one_sp::Get_Data_Private_Sp($id_sp);
// dành cho comment sản phẩm tiếp
echo "<pre>";
// var_dump($data_sp);
// die;
if ($data_sp) {
    extract($data_sp);
    $view_sp = $so_luot_xem + 1;
    $revalue = "so_luot_xem='$view_sp'";
    fetch_one_sp::Update_luot_xem($revalue, $id_sp);
    // $_SESSION['sp'] = [
    //     'id_sp' => $ma_san_pham,
    //     'ten_sp' => $ten_sp,
    //     'don_gia' => $don_gia,
    //     'giam_gia' => $giam_gia,
    //     'images_sp' => $images_sp,
    //     'dac_biet' => $dac_biet,
    //     'so_luot_xem' => $so_luot_xem,
    //     'ngay_nhap' => $ngay_nhap,
    //     'mo_ta_chi_tiet' => $mo_ta_chi_tiet,
    //     'ma_loai' => $ma_loai_sp
    // ];
}
