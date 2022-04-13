<?php
require_once './app/models/BaseModel.php';
class InsertOption extends BaseModel
{
    var $table = "options";
}
extract($_POST);
$data = "'$RAM','$ROM','$VGA'";
$db_values = "RAM,ROM,VGA";
InsertOption::Insert_Data($data, $db_values, "list_option");
