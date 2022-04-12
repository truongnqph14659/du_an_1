<?php
require_once './app/models/BaseModel.php';
class fetch_option extends BaseModel
{
    var $table = "options";
}
$data_options = fetch_option::Get_Data();
