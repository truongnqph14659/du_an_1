<?php
require_once './app/models/BaseModel.php';
class fetch_one_user extends BaseModel
{
    var $table = "user";
}
$id = $_SESSION['user_account']['user_id'];
$user = fetch_one_user::Get_One_Condition($id, '=', 'user_id');
