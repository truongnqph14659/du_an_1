

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= server_port ?>/du_an_1/public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= server_port ?>/du_an_1/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= server_port ?>/du_an_1/public/css1/product.css" rel="stylesheet">
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid header_bg">

        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <img src="<?= server_port ?>/du_an_1/public/images_stores/img/logo.jpg" alt="" width="120px" height="80px" srcset="">
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="tìm kiếm sản phẩm">
                        <div class="input-group-append search">
                            <button type="submit" class="input-group-text bg-transparent .text-dark">
                                <i class="fa fa-search "></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <div class="cart_list">
                    <div class="btn border">
                        <i class="fas fa-shopping-cart text-white "></i>
                        <span class="badge text-white">0</span>
                    </div>
                    <div class="cart_list_info">
                        <h4 class="header_cart-heading">sản phẩm đã thêm</h4>
                        <ul class="header_cart_list-items">
                            <li class="header_cart-item">
                                <img src="<?= server_port ?>/du_an_1/public/images_stores/img/62692_laptop_acer_gaming_nitro_5_25.jpg" class="header_cart-img" alt="" srcset="">
                                <div class="header_cart-info">
                                    <div class="header_cart_item_head">
                                        <h5 class="header_cart_item-name text-truncate">
                                            Acer Gaming Nitro 5 Acer Gaming Nitro 5 Acer Gaming Nitro 5 Acer Gaming
                                            Nitro 5
                                        </h5>
                                        <div class="header_cart_item-price-wrap">
                                            <span class="header_cart_item-price">
                                                13.230.000đ
                                            </span>
                                        </div>
                                    </div>
                                    <div class="header_cart_item-body">
                                        <span class="header_cart_item-description">
                                            màu: Đen
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="header_cart-item">
                                <img src="<?= server_port ?>/du_an_1/public/images_stores/img/62692_laptop_acer_gaming_nitro_5_25.jpg" class="header_cart-img" alt="" srcset="">
                                <div class="header_cart-info">
                                    <div class="header_cart_item_head">
                                        <h5 class="header_cart_item-name text-truncate">
                                            Acer Gaming Nitro 5
                                        </h5>
                                        <div class="header_cart_item-price-wrap">
                                            <span class="header_cart_item-price">
                                                13.230.000đ
                                            </span>
                                        </div>
                                    </div>
                                    <div class="header_cart_item-body">
                                        <span class="header_cart_item-description">
                                            màu: Đen
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="header_cart-item">
                                <img src="<?= server_port ?>/du_an_1/public/images_stores/img/62692_laptop_acer_gaming_nitro_5_25.jpg" class="header_cart-img" alt="" srcset="">
                                <div class="header_cart-info">
                                    <div class="header_cart_item_head">
                                        <h5 class="header_cart_item-name text-truncate">
                                            Acer Gaming Nitro 5
                                        </h5>
                                        <div class="header_cart_item-price-wrap">
                                            <span class="header_cart_item-price">
                                                13.230.000đ
                                            </span>
                                        </div>
                                    </div>
                                    <div class="header_cart_item-body">
                                        <span class="header_cart_item-description">
                                            màu: Đen
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="text-decoration-none bg-success text-white cart text-capitalize float-end rounded-0 mx-2">Xem
                            giỏ
                            hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">

            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="product_page" class="nav-item nav-link">Sản Phẩm</a>
                            <a href="#" class="nav-item nav-link">Tin Tức</a>

                            <a href="contact_page" class="nav-item nav-link">Liên Hệ</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <div class="pt-2">
                                <img src="<?= server_port ?>/du_an_1/public/images_stores/img/logo_user.png" alt="" width="40px" height="40px" srcset="">
                            </div>

                            <!-- <a href="" class="nav-item nav-link">Đăng nhập</a>
                            <a href="" class="nav-item nav-link">Đăng ký</a> -->

                            <div class="action_user">
                                <p style="color:red; margin-bottom: 0rem;">Tài khoản</p>
                                <span class="user_name dropdown-toggle text-dark" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Nguyễn Quang Trường
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item text-dark" href="user_info">tài khoản của tôi</a></li>
                                    <li><a class="dropdown-item text-dark" href="re_password">đổi mật khẩu</a></li>
                                    <li><a class="dropdown-item text-dark" href="logn_out">đăng xuất</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">LIÊN HỆ</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Liên hệ</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Liên hệ cho chúng tôi</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Họ và tên" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Mã sản phẩm" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Tin nhắn" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Gửi
                                tin nhắn</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">Liên lạc</h5>
                <p>PRelaptop- Đội ngũ nhân viên chất lượng, chăm sóc nhiệt tình, mang lại trải nghiệm tốt nhất cho
                    khách hàng là nhiệm vụ của chúng tôi.</p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Địa chỉ 1</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Số 129 + 131, phố Lê
                    Thanh Nghị, Phường Đồng Tâm, Quận Hai Bà Trưng, Hà Nội</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>nhom1@fpt.edu.vn</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">Địa chỉ 2</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Số 129 + 131, phố Lê
                    Thanh Nghị, Phường Đồng Tâm, Quận Hai Bà Trưng, Hà Nội</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>nhom1@fpt.edu.vn</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <!-- Footer Start -->
    <div class="container-fluid footer text-light mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold text-light"><span class="font-weight-bold border border-white px-3 mr-1">C</span>oputer</h1>
                </a>
                <p>
                    PRelaptop- Đội ngũ nhân viên chất lượng, chăm sóc nhiệt tình, mang lại trải nghiệm tốt nhất cho
                    khách hàng là nhiệm vụ của chúng tôi.
                </p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Địa chỉ: Số 129 + 131, phố Lê
                    Thanh Nghị, Phường Đồng Tâm, Quận Hai Bà Trưng, Hà Nội</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>nhom1@fpt.edu.vn</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-light mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-light mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our
                                Shop</a>
                            <a class="text-light mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop
                                Detail</a>
                            <a class="text-light mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping
                                Cart</a>
                            <a class="text-light mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-light" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact
                                Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-light mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-light mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our
                                Shop</a>
                            <a class="text-light mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop
                                Detail</a>
                            <a class="text-light mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping
                                Cart</a>
                            <a class="text-light mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-light" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact
                                Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-light mb-4">Đăng ký nhận thông tin mới</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="tên của bạn" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="email của bạn" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Đăng ký ngay
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-light">
                    &copy; <a class="text-light font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved.
                    Designed
                    by
                    nhom 1
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="<?= server_port ?>/du_an_1/public/img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= server_port ?>/du_an_1/public/lib/easing/easing.min.js"></script>
    <script src="<?= server_port ?>/du_an_1/public/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?= server_port ?>/du_an_1/public/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?= server_port ?>/du_an_1/public/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?= server_port ?>/du_an_1/public/js/main.js"></script>
</body>


</html>