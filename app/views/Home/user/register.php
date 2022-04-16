<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

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
    <link rel="stylesheet" href="<?= server_port ?>/du_an_1/public/css/register.css">
</head>

<body>
    <?php
    require_once './vender/file_extends/header.php';
    ?>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Đăng ký</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="fa fa-address-book" aria-hidden="true"></i></label>
                                <input type="text" name="name" id="name" placeholder="Tên người dùng" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email của bạn" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fa fa-mobile" aria-hidden="true"></i></label>
                                <input type="number" name="sdt" id="email" placeholder="Sô điện thoại của bạn" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="fa fa-lock" aria-hidden="true"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"> <i class="fa fa-street-view" aria-hidden="true"></i></label>
                                <input type="text" name="dia_chi" id="name" placeholder="Đia chỉ" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                <input type="text" name="xa_phuong" id="name" placeholder="Xã phường" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                <input type="text" name="quan_huyen" id="name" placeholder="Quận huyện" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                <input type="text" name="tinh_thanh" id="name" placeholder="Tỉnh thành" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?= server_port ?>du_an_1/public/images_stores/images/signup-image.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
        <?php
        require_once './vender/file_extends/footer.php';
        ?>

</body>

</html>