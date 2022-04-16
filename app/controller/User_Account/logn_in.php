<?php
require_once './app/models/BaseModel.php';
class logn_in_form extends BaseModel
{
    var $table = "user";
}
$email = $_POST['user_name'];
$password = $_POST['user_password'];
$id_sp = isset($_POST['id_sp']) ? $_POST['id_sp'] : false;
$user = logn_in_form::Get_One_Condition("$email", '=', 'email');
if ($user) {
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_account'] = [
            'user_id' => $user['user_id'],
            'user_name' => $user['user_name'],
            'user_image' => $user['image'],
            'user_email' => $user['email'],
            'user_password' => $user['password'],
            'user_role' => $user['role']
        ];
        if (!$id_sp) {
            $user['role'] == 1 ? header("location:admin") : header("location:index.php");
            die;
        } else {
            header("location:details?id_sp=$id_sp");
            die;
        }
    }
    header("location:form_logn_in?msg=Sorry");
} else {
    header("location:form_logn_in?msg=Hold_on");
}
