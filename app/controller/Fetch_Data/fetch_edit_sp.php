<?php
require_once './app/models/BaseModel.php';
class fetch_edit_sp extends BaseModel
{
    var $table = "san_pham";
}
$id_sp = $_GET['id'];
$data_sp = fetch_edit_sp::Get_Data_Edit($id_sp, 'ma_san_pham');
