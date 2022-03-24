<?php
require_once './app/models/BaseModel.php';
class fetch_category extends BaseModel
{
    var $table = "loai_san_pham";
}
$data_categorys = fetch_category::Get_Data();
$output = '<option value="0">danh muc cha</option>';
foreach ($data_categorys as $value) {
    $output .= '<option value="' . $value['ma_loai_sp'] . '">' . $value['ten_loai'] . '</option>';
}
echo $output;
