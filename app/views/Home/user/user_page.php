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
    <style>
        .container-fuild {
            background-color: #efefef;
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <?php
    require_once './vender/file_extends/header.php';
    ?>
    <!-- Navbar End -->
    <!-- Page Header Start -->

    <!-- Page Header End -->
    <!-- Shop Start -->

    <!-- Main Content -->
    <!-- Sidebar -->

    <div class="container-fuild d-flex px-5">
        <div class="col-2">
            <!-- Sidebar -->
            <ul class="px-0 navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="user_info">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Thông tin cá nhân</span>
                    </a>
                </li>
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="re_password">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Đổi mật khẩu</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ql_order_user">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Quản lý đơn hàng</span></a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
        </div>
        <div class="col-10 status_list px-0">
            <p>đơn hàng của tôi</p>
            <div class="styles__StyledTab-sc-e27b7w-2 krSXKE">
                <div width="16.666666666666668%" class="styles__Tab-sc-e27b7w-3 kJvPK">Tất cả đơn</div>
                <div width="16.666666666666668%" class="styles__Tab-sc-e27b7w-3 czMhB">Đóng gói</div>
                <div width="16.666666666666668%" class="styles__Tab-sc-e27b7w-3 czMhB">Đang xử lý</div>
                <div width="16.666666666666668%" class="styles__Tab-sc-e27b7w-3 czMhB">Đang vận chuyển</div>
                <div width="16.666666666666668%" class="styles__Tab-sc-e27b7w-3 czMhB">Đã giao</div>
                <div width="16.666666666666668%" class="styles__Tab-sc-e27b7w-3 czMhB">Đã huỷ</div>
            </div>

            <form action="" method="get">
                <div class="styles__StyledInput-sc-e27b7w-4 dJmBHv"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="#808089" class="icon-left" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(128, 128, 137);">
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                    </svg><input name="search" placeholder="Tìm đơn hàng theo Mã đơn hàng, Nhà bán hoặc Tên sản phẩm" type="search" class="input with-icon-left">
                    <button class="search-right" type="submit">Tìm đơn hàng</button>
                </div>
            </form>
            <?php
            $count = 0;
            ?>
            <?php foreach ($data_orders_user as $index => $values) : ?>
                <div class="mx-auto col-12 py-2">
                    <p>đơn hàng:<?= $index ?></p>
                    <div class="styles__StyledOrder-sc-1vf2n1c-0 ekuyi">
                        <div color="#808089" class="styles__OrderHeader-sc-1vf2n1c-1 hBsvqt"><span class="main-status">
                                <!-- phần này nhận dữ liệu status từ bảng order nên qua $data -->
                                <?php
                                if ($data[$count]['status_order'] == 'x') : ?>
                                    <?php echo 'Đang xử lý'; ?>
                                <?php elseif ($data[$count]['status_order'] == 'y') : ?>
                                    <?php echo 'Đóng gói'; ?>
                                <?php elseif ($data[$count]['status_order'] == 'z') : ?>
                                    <?php echo 'Đã giao'; ?>
                                <?php elseif ($data[$count]['status_order'] == 's') : ?>
                                    <?php echo 'Đang vận chuyển'; ?>
                                <?php elseif ($data[$count]['status_order'] == 'c') : ?>
                                    <?php echo 'Đã hủy'; ?>
                                <?php endif; ?>
                            </span></div>
                        <?php
                        $count++;
                        ?>
                        <div class="styles__StyledOrderInfo-sc-1upbws9-0 hBZYMQ">
                            <div>
                                <?php foreach ($values as $values) : ?>
                                    <div class="product">
                                        <div class="detail">
                                            <div class="product-img" style="background-image: url(&quot;<?= $values['images_sp'] ?>&quot;);"><span class="quantity">x<?= $values['so_luong'] ?></span></div>
                                            <div class="product-info">
                                                <p class="product-name"><?= $values['ten_sp'] . ' ' . $values['RAM'] . '/' . $values['ROM'] ?></p>
                                                <div class="store"><span>Computer</span></div>
                                            </div>
                                        </div>
                                        <div class="price"><span><?= number_format($values['don_gia']) ?> ₫</span></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="styles__OrderFooter-sc-1vf2n1c-2 hBVEFq">
                            <div class="total-money">
                                <div class="title">Tổng tiền:</div>
                                <div class="total"><?= number_format($values['thanh_tien']) ?> ₫</div>
                            </div>
                            <div class="button-group">
                                <div> <a href="" class="text-dark text-decoration-none">Mua lại</a> </div>
                                <div> <a href="" class="text-dark text-decoration-none">Xem chi tiết</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Shop End -->


    <!-- Footer Start -->
    <?php
    require_once './vender/file_extends/footer.php';
    ?>
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
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
</body>

</html>