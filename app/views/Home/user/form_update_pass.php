<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="<?= server_port ?>/du_an_1/public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= server_port ?>/du_an_1/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,300&display=swap");
    </style>
    <link rel="stylesheet" href="<?= server_port ?>/du_an_1/public/css/forgot_pass.css">
</head>

<body>
    <?php
    require_once './vender/file_extends/header.php';
    ?>
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_msdmfngy.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Thay đổi password</h2>
                        <form class="register-form" id="login-form" action="change_pass" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label for="your_name"><i class="fa fa-key" aria-hidden="true"></i></label>
                                <input type="text" name="new_password" id="your_name" placeholder="mật khẩu mới" />
                                <input type="text" value="<?= isset($_GET['email']) == true ? $_GET['email'] : '' ?>" name="email" hidden />
                                <input type="text" value="<?= isset($_GET['code']) == true ? $_GET['code'] : '' ?>" name="code" hidden />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="fa fa-lock" aria-hidden="true"></i></label>
                                <input type="password" name="sub_password" id="your_phone" placeholder="nhập lại mật khẩu" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="update_pass" id="signin" class="form-submit" value="Thay đổi mật khẩu" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    require_once './vender/file_extends/footer.php';
    ?>
    <?php if (isset($_GET['repass'])) : ?>
        <script>
            swal("Thông báo!", "mật khẩu không giống nhau", "error");
        </script>
    <?php endif; ?>

</body>

</html>