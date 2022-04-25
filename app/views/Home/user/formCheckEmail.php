<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                        <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_bvjyzebm.json" background="transparent" speed="0.5" style="width:100%;" loop autoplay></lottie-player>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Thông tin tài khoản</h2>
                        <form class="register-form" id="login-form" action="repass" name="form_checkemail" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label for="your_name"><i class="fa fa-envelope" aria-hidden="true"></i></label>
                                <input type="email" name="email" id="your_name" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="fa fa-lock" aria-hidden="true"></i></label>
                                <input type="number" name="sdt" id="your_phone" placeholder="Số điện thoại đăng ký" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="check_valid" id="signin" class="form-submit" value="Lấy lại mật khẩu" />
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
    <?php if (isset($_GET['msg'])) : ?>
        <script>
            swal("Thông báo!", "tài khoản chưa tồn tại!", "error");
        </script>
    <?php endif; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="http://localhost:80/du_an_1/public/js/form_values.js"></script>
</body>

</html>