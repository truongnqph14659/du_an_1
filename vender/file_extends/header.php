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