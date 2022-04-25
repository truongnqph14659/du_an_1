<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= server_port ?>du_an_1/public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Libraries Stylesheet -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="<?= server_port ?>du_an_1/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= server_port ?>du_an_1/public/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php
    require_once './vender/file_extends/header_cart.php';
    ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid mb-2">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Danh mục</h6>
                </div>
                <div id="tree">
                </div>
            </div>
            <div class="col-lg-9">
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
                        <?php
                        require_once './vender/file_extends/header_acc.php';
                        ?>
                    </div>
                </nav>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($data_sp as $values) : ?>
                            <?php if ($values['images_banner_sp'] !== null && $values['images_banner_sp'] !== '') : ?>
                                <div class="swiper-slide">
                                    <img src="<?= $values['images_banner_sp'] ?>" alt="">
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Featured Start -->

    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid">
        <h2 class="px-5">Linh kiện mới nhất</h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href="" class="cat-img align-self-center position-relative overflow-hidden mb-3">
                        <img height="100px" width="200px" src="<?= server_port ?>du_an_1/public/images_stores/img/images (6).jpg" alt="">
                    </a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href="" class="cat-img align-self-center position-relative overflow-hidden mb-3">
                        <img height="100px" width="200px" src="<?= server_port ?>du_an_1/public/images_stores/img/images (3).jpg" alt="">
                    </a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href="" class="cat-img align-self-center position-relative overflow-hidden mb-3">
                        <img height="100px" width="200px" src="<?= server_port ?>du_an_1/public/images_stores/img/images (3).jpg" alt="">
                    </a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href="" class="cat-img align-self-center position-relative overflow-hidden mb-3">
                        <img height="100px" width="200px" src="<?= server_port ?>du_an_1/public/images_stores/img/images (3).jpg" alt="">
                    </a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href="" class="cat-img align-self-center position-relative overflow-hidden mb-3">
                        <img height="100px" width="200px" src="<?= server_port ?>du_an_1/public/images_stores/img/images (6).jpg" alt="">
                    </a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href="" class="cat-img align-self-center position-relative overflow-hidden mb-3">
                        <img height="100px" width="200px" src="<?= server_port ?>du_an_1/public/images_stores/img/images (6).jpg" alt="">
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->


    <!-- Offer Start -->

    <!-- Offer End -->


    <!-- Products Start -->
    <div class="container-fluid">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Sản Phẩm Bán Chạy</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php foreach ($data_sp as $values) : ?>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none"><img class="imgUNcover" src="<?= $values["images_sp"] ?>" alt=""></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none">
                                <h6 class="text-truncate mb-3">
                                    <?php
                                    $string_ten = (strlen($values["ten_sp"]) > 25) ? substr($values["ten_sp"], 0, 25) . '...' : $values["ten_sp"];
                                    echo $string_ten;
                                    ?>
                                </h6>
                            </a>
                            <ul class="ul_products list-unstyled">
                                <li>
                                    <?php
                                    $string_cpu = (strlen($values["CPU"]) > 15) ? substr($values["CPU"], 0, 15) . '...' : $values["CPU"];
                                    echo $string_cpu;
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $string_ram = (strlen($values["RAM"]) > 4) ? substr($values["RAM"], 0, 6) . '...' : $values["RAM"];
                                    $string_rom = (strlen($values["ROM"]) > 4) ? substr($values["ROM"], 0, 11) . '...' : $values["ROM"];
                                    echo $string_ram . ' / ' . $string_rom;
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $string_vga = (strlen($values["VGA"]) > 15) ? substr($values["VGA"], 0, 10) . '...' : $values["VGA"];
                                    echo $string_vga;
                                    ?>
                                </li>
                                <li>
                                    <?= $values["man_hinh"] . ' ' ?> inch
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <h6 class="price"><?= number_format($values["don_gia"]) ?>đ</h6>
                                <h6 class="text-muted ml-2"><del>15.230.000đ</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <span class="fs-6 text <?= $values["sl_luu_kho"] > 0 ? 'text-success' : 'text-danger' ?>"><i class="fa-solid fa-check"></i><?= $values["sl_luu_kho"] > 0 ? 'còn hàng' : 'hết hàng' ?></span>
                            <button class="btn btn-sm text-dark p-0 ">
                                <?php
                                $id_user = 0;
                                $quantity = 0;
                                if (isset($_SESSION['user_account'])) {
                                    $id_user = $_SESSION['user_account']['user_id'];
                                    $quantity = 1;
                                }
                                ?>
                                <i class="fas fa-shopping-cart text-primary mr-1 <?= $values["sl_luu_kho"] > 0 ? 'submit' : '' ?>" type="submit" data-id="<?php echo $values['ma_san_pham'] ?>" data-user="<?= $id_user ?>" data-qty="<?= $quantity ?>"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Products End -->


    <!-- Subscribe Start -->

    <!-- Subscribe End -->


    <!-- Products Start -->
    <div class="container-fluid">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Sản Phẩm Xem Nhiều Nhất</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php foreach ($data_top_views as $values) : ?>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none"><img class="imgUNcover" src="<?= $values["images_sp"] ?>" alt=""></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none">
                                <h6 class="text-truncate mb-3">
                                    <?php
                                    $string_ten = (strlen($values["ten_sp"]) > 25) ? substr($values["ten_sp"], 0, 25) . '...' : $values["ten_sp"];
                                    echo $string_ten;
                                    ?>
                                </h6>
                            </a>
                            <ul class="ul_products list-unstyled">
                                <li>
                                    <?php
                                    $string_cpu = (strlen($values["CPU"]) > 15) ? substr($values["CPU"], 0, 15) . '...' : $values["CPU"];
                                    echo $string_cpu;
                                    ?>
                                </li>
                                <li>
                                    <span>
                                        <?php
                                        $string_ram = (strlen($values["RAM"]) > 4) ? substr($values["RAM"], 0, 6) . '...' : $values["RAM"];
                                        $string_rom = (strlen($values["ROM"]) > 4) ? substr($values["ROM"], 0, 11) . '...' : $values["ROM"];
                                        echo $string_ram . ' / ' . $string_rom;
                                        ?>
                                </li>
                                <li>
                                    <?php
                                    $string_vga = (strlen($values["VGA"]) > 15) ? substr($values["VGA"], 0, 10) . '...' : $values["VGA"];
                                    echo $string_vga;
                                    ?>
                                </li>
                                <li>
                                    <?= $values["man_hinh"] . ' ' ?> inch
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <h6 class="price"><?= number_format($values["don_gia"]) ?>đ</h6>
                                <h6 class="text-muted ml-2"><del>15.230.000đ</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <span class="fs-6 text text-success"><i class="fa-solid fa-check"></i>còn hàng</span>
                            <button class="btn btn-sm text-dark p-0 ">
                                <?php
                                $id_user = 0;
                                $quantity = 0;
                                if (isset($_SESSION['user_account'])) {
                                    $id_user = $_SESSION['user_account']['user_id'];
                                    $quantity = 1;
                                }
                                ?>
                                <i class="fas fa-shopping-cart text-primary mr-1 <?= $values["sl_luu_kho"] > 0 ? 'submit' : '' ?>" type="submit" data-id="<?php echo $values["ma_san_pham"] ?>" data-user="<?= $id_user ?>" data-qty="<?= $quantity ?>"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Products End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item a border p-4">
                        <img src="<?= server_port ?>du_an_1/public/images_stores/img/images (1).png" alt="">
                    </div>
                    <div class="vendor-item a border p-4">
                        <img src="<?= server_port ?>du_an_1/public/images_stores/img/tải xuống (1).png" alt="">
                    </div>
                    <div class="vendor-item a border p-4">
                        <img src="<?= server_port ?>du_an_1/public/images_stores/img/dell.png" alt="">
                    </div>
                    <div class="vendor-item a border p-4">
                        <img src="<?= server_port ?>du_an_1/public/images_stores/img/apple.png" alt="">
                    </div>
                    <div class="vendor-item a border p-4">
                        <img src="<?= server_port ?>du_an_1/public/images_stores/img/lenovo.png" alt="">
                    </div>
                    <div class="vendor-item a border p-4">
                        <img src="<?= server_port ?>du_an_1/public/images_stores/img/tải xuống.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


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
                <img class="img-fluid" src="<?= server_port ?>du_an_1/public/img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= server_port ?>du_an_1/public/lib/easing/easing.min.js"></script>
    <script src="<?= server_port ?>/du_an_1/public/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="<?= server_port ?>du_an_1/public/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?= server_port ?>du_an_1/public/mail/contact.js"></script>
    <!-- Template Javascript -->
    <script src="<?= server_port ?>du_an_1/public/js/main.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="<?= server_port ?>du_an_1/public/js/ajax_cart_list.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if (isset($_SESSION["check_success"])) : ?>
        <script>
            swal("Xin chào!", "đặt hàng thành công", "success");
        </script>
        <?php
        unset($_SESSION["check_success"]);
        ?>
    <?php endif ?>
    <?php if (isset($_SESSION["register"])) : ?>
        <script>
            swal("Xin chào!", "Đăng ký tài khoản thành công, hãy đăng nhập để mua sắm", "success");
        </script>
        <?php
        unset($_SESSION["register"]);
        ?>
    <?php endif ?>
    <?php if (isset($_SESSION['repass'])) : ?>
        <script>
            swal("Xin chào!", "Thay đổi mật khẩu thành công, hãy đăng nhập để mua sắm", "success");
        </script>
        <?php
        unset($_SESSION['repass']);
        ?>
    <?php endif ?>

</body>

</html>
<!-- code cho phần treeview -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?= server_port ?>du_an_1/public/js/bstreeview.js"></script>

<script>
    $(function() {
        $.ajax({
            url: 'fetch_loai_treeview',
            dataType: "json",
            success: function(data) {
                $('#tree').bstreeview({
                    data: data,
                    expandIcon: 'fa fa-angle-down fa-fw',
                    collapseIcon: 'fa fa-angle-right fa-fw',
                    indent: 2.05,
                    parentsMarginLeft: '1.25rem',
                    openNodeLinkOnNewTab: false
                });
            }
        })
    });
</script>