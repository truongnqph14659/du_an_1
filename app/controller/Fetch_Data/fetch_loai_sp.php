<?php
require_once './app/models/BaseModel.php';
class fetch_category extends BaseModel
{
    var $table = "loai_san_pham";
}
$data_categorys = fetch_category::Get_Data();
extract($_POST);
$output = '<option value="0">danh muc cha</option>';
foreach ($data_categorys as $value) {
    if ($value['parent_id'] == 0) {
        // selected parent_id dua vao ma sp
        $ma_loai_sp = $value['ma_loai_sp'] == $parent_id ? "selected" : "";
        $output .= '<option ' . $ma_loai_sp . ' value="' . $value['ma_loai_sp'] . '">' . $value['ten_loai'] . '</option>';
    }
}
echo $output;
