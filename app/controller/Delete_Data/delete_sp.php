<?php
require_once './app/models/BaseModel.php';
$ma_sp = $_GET['id'];
class Delete_Loai extends BaseModel
{
    var $table = "san_pham";
}
Delete_Loai::Delete($ma_sp, "ma_san_pham ", "list_product");
