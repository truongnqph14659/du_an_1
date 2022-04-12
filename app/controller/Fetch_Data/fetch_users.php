<?php
require_once './app/models/BaseModel.php';
class fetch_users extends BaseModel
{
    var $table = "user";
}
$data_users = fetch_users::Get_Data();
