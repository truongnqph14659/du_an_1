<?php
require_once './app/models/BaseModel.php';
class update_pass extends BaseModel
{
    var $table = "user";
    static function update_pass($new_pass, $sub_pass, $email, $token)
    {
        if ($new_pass == $sub_pass) {
            $model = new static;
            $user = $model::Get_One_Condition("$email", '=', 'email');
            if ($user['token'] == $token) {
                $hash_pass = password_hash($new_pass, PASSWORD_DEFAULT);
                $re_values = "password='$hash_pass'";
                $id_user = $user['user_id'];
                $sql = "UPDATE $model->table SET $re_values WHERE user_id=$id_user";
                $stmt = $model->conn->prepare($sql);
                $stmt->execute();
                $_SESSION['repass'] = [
                    'repass' => 'success'
                ];
                $code = '123456789qazwsxedcrfvtgbyhnujmikolp';
                $code = str_shuffle($code);
                $code = substr($code, 0, 10);
                $re_values = "token='$code'";
                $sql = "UPDATE $model->table SET $re_values WHERE email='$email'";
                $stmt = $model->conn->prepare($sql);
                $stmt->execute();
                header("Location:index.php");
            }
        } else {
            header("Location:update_pass?email=$email&code=$token&repass=false");
        }
    }
}

if (isset($_POST['update_pass'])) {
    extract($_POST);
    update_pass::update_pass($new_password, $sub_password, $email, $code);
}
