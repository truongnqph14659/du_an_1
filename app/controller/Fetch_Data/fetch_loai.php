<?php
require_once './app/models/BaseModel.php';
class fetch_category extends BaseModel
{
    var $table = "loai_san_pham";
}
$data_categorys = fetch_category::Get_Data();

$loai_cap_2 = array();
foreach ($data_categorys as $values) {
    if ($values['parent_id'] != 0) {
        $loai_cap_2[] = $values;
    }
}
