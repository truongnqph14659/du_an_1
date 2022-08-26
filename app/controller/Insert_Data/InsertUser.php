<?php
require_once './app/models/BaseModel.php';
require_once './vender/reuse_function.php';
if (isset($_POST['submit'])) {
    extract($_POST);
    $default_avatar = "public/images_stores/img/logo_user.png";
    $image_user = $_FILES['avatar']['size'] > 0 ? insert_img($_FILES['avatar']) : $default_avatar;
    $hash_pass = password_hash($password, PASSWORD_DEFAULT);
    $form_value = "'$name','$email','$hash_pass','$image_user','$sdt','$dia_chi','$xa_phuong','$quan_huyen','$tinh_thanh','$vai_tro','$status'";
    $db_data = "user_name,email,password,image,sdt,dia_chi,xa_phuong,quan_huyen,tinh_thanh,role,status";
    class CreateUser extends BaseModel
    {
        var $table = "user";
        static function Insert_User($form_data, $db_data)
        {
            $model = new static();
            $sql = "INSERT into $model->table ($db_data) VALUES ($form_data)";
            $stmt = $model->conn->prepare($sql);
            $stmt->execute();
            if (isset($_SESSION['user_account']) && $_SESSION['user_account']['user_role'] == 1) {
                header("location:list_user");
            } else {
                $_SESSION['register'] = [
                    'success' => 'register_success'
                ];
                header("location:index.php");
            }
        }
    }
    CreateUser::Insert_User($form_value, $db_data);
}
