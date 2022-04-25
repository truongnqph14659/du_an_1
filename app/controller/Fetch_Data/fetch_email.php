<?php
require_once './app/models/BaseModel.php';
require_once './public/Email/library.php'; // include the library file
require_once './public/Email/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class check_user extends BaseModel
{
    var $table = "user";
    static function check_user_info($email, $sdt)
    {
        $model =  new static;
        $sql = "SELECT * FROM $model->table WHERE email='$email' AND sdt='$sdt'";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            $code = '123456789qazwsxedcrfvtgbyhnujmikolp';
            $code = str_shuffle($code);
            $code = substr($code, 0, 10);

            $url_repass = "http://localhost:80/du_an_1/update_pass?email=$email&code=$code";
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                $mail->CharSet = "UTF-8";
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = SMTP_UNAME;                 // SMTP username
                $mail->Password = SMTP_PWORD;                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom(SMTP_UNAME, "Computer");
                $mail->addAddress($email, 'Tên người nhận');     // Add a recipient | name is option
                $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
                //                    $mail->addCC('CCemail@gmail.com');
                //                    $mail->addBCC('BCCemail@gmail.com');
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = "đổi mật khẩu";
                $mail->Body = $url_repass;
                $mail->AltBody = 'cảm ỏn'; //None HTML
                $result = $mail->send();
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }
            $re_values = "token='$code'";
            $sql = "UPDATE $model->table SET $re_values WHERE email='$email' AND sdt='$sdt'";
            $stmt = $model->conn->prepare($sql);
            $stmt->execute();
            header("location:notice");
        } else {
            header("location:check_forgot_pass?msg=false");
        }
    }
}
if ($_POST['check_valid']) {
    extract($_POST);
    check_user::check_user_info($email, $sdt);
}
