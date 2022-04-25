<?php
require_once './app/models/BaseModel.php';
class check_token extends BaseModel
{
    var $table = "user";
    static function check_user_info($email, $token)
    {
        $model =  new static;
        $sql = "SELECT * FROM $model->table WHERE email='$email'";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $check_repass = false;
        if ($data['token'] == $token) {
            $check_repass = true;
        }
        return $check_repass;
    }
}

$token_boolean = check_token::check_user_info($_GET['email'], $_GET['code']);
