
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
    <link href="<?= server_port ?>/du_an_1/public/css/style.css" rel="stylesheet">
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
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Danh mục</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Asus <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Asus x551</a>
                                <a href="" class="dropdown-item">Asus L929</a>
                                <a href="" class="dropdown-item">Asus k234</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Dell <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Dell x551</a>
                                <a href="" class="dropdown-item">Dell L929</a>
                                <a href="" class="dropdown-item">Dell k234</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">HP <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">HP x551</a>
                                <a href="" class="dropdown-item">HP L929</a>
                                <a href="" class="dropdown-item">HP k234</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Phụ kiện <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">RAM x551</a>
                                <a href="" class="dropdown-item">VGA L929</a>
                                <a href="" class="dropdown-item">Chuột k234</a>
                            </div>
                        </div>
                    </div>
                </nav>
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
                            <a href="index.html" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="shop.php" class="nav-item nav-link">Sản Phẩm</a>
                            <a href="detail.html" class="nav-item nav-link">Tin Tức</a>

                            <a href="contact.html" class="nav-item nav-link">Liên Hệ</a>
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
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="<?= server_port ?>/du_an_1/public/images_stores/img/carousel-1.jpg" alt="Image">

                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="<?= server_port ?>/du_an_1/public/images_stores/img/carousel-2.jpg" alt="Image">

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Lọc Theo Giá</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all">Tất cả sản phẩm</label>
                            <span class="badge border font-weight-normal">98</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">5.000.000 - 10.000.000</label>
                            <span class="badge border font-weight-normal">24</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">10.000.000 - 15.000.000</label>
                            <span class="badge border font-weight-normal">36</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">15.000.000 - 20.000.000</label>
                            <span class="badge border font-weight-normal">18</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4">20.000.000 - 50.000.000</label>
                            <span class="badge border font-weight-normal">29</span>
                        </div>
                        
                    </form>
                </div>
                <!-- Price End -->
                
                <!-- CPU Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Lọc Theo CPU</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="color-all">
                            <label class="custom-control-label" for="price-all">Tất cả các sản phẩm</label>
                            <span class="badge border font-weight-normal">98</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-1">
                            <label class="custom-control-label" for="color-1">Core i3</label>
                            <span class="badge border font-weight-normal">10</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-2">
                            <label class="custom-control-label" for="color-2">Core i5</label>
                            <span class="badge border font-weight-normal">29</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-3">
                            <label class="custom-control-label" for="color-3">Core i7</label>
                            <span class="badge border font-weight-normal">24</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-4">
                            <label class="custom-control-label" for="color-4">Amd</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        
                    </form>
                </div>
                <!-- CPU End -->

                <!-- ram Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Lọc Theo Ram</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="size-all">
                            <label class="custom-control-label" for="size-all">Tất cả sản phẩm</label>
                            <span class="badge border font-weight-normal">98</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-1">
                            <label class="custom-control-label" for="size-1">4gb</label>
                            <span class="badge border font-weight-normal">15</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-2">
                            <label class="custom-control-label" for="size-2">6gb</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-3">
                            <label class="custom-control-label" for="size-3">8gb</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-4">
                            <label class="custom-control-label" for="size-4">16gb</label>
                            <span class="badge border font-weight-normal">45</span>
                        </div>
                        
                    </form>
                </div>
                <!-- Ram End -->
                <!-- inch Start -->
                <div class="mb-5">
                    <h5 class="font-weight-semi-bold mb-4">Lọc Theo Màn Hình</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="size-all">
                            <label class="custom-control-label" for="size-all">Tất cả sản phẩm</label>
                            <span class="badge border font-weight-normal">98</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-1">
                            <label class="custom-control-label" for="size-1">13.3 inch</label>
                            <span class="badge border font-weight-normal">15</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-2">
                            <label class="custom-control-label" for="size-2">14 inch</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-3">
                            <label class="custom-control-label" for="size-3">15.6 inch</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        
                        
                    </form>
                </div>
                <!-- inch End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by name">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent text-primary">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                            Sort by
                                        </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="imgUNcover" src="<?= server_port ?>/du_an_1/public/images_stores/img/62692_laptop_acer_gaming_nitro_5_25.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"> Acer Gaming Nitro 5</h6>
                                <ul class="ul_products list-unstyled">
                                    <li>
                                        Ryzen 5 5600H
                                    </li>
                                    <li>
                                        8GB Ram 512GB SSD
                                    </li>
                                    <li>
                                        GTX1650 4G
                                    </li>
                                    <li>
                                        15.6 inch FHD
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center">
                                    <h6 class="price">13.230.000đ</h6>
                                    <h6 class="text-muted ml-2"><del>15.230.000đ</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <span class="fs-6 text text-success"><i class="fa-solid fa-check"></i>còn hàng</span>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="imgUNcover" src="<?= server_port ?>/du_an_1/public/images_stores/img/62692_laptop_acer_gaming_nitro_5_25.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"> Acer Gaming Nitro 5</h6>
                                <ul class="ul_products list-unstyled">
                                    <li>
                                        Ryzen 5 5600H
                                    </li>
                                    <li>
                                        8GB Ram 512GB SSD
                                    </li>
                                    <li>
                                        GTX1650 4G
                                    </li>
                                    <li>
                                        15.6 inch FHD
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center">
                                    <h6 class="price">13.230.000đ</h6>
                                    <h6 class="text-muted ml-2"><del>15.230.000đ</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <span class="fs-6 text text-success"><i class="fa-solid fa-check"></i>còn hàng</span>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="imgUNcover" src="<?= server_port ?>/du_an_1/public/images_stores/img/62692_laptop_acer_gaming_nitro_5_25.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"> Acer Gaming Nitro 5</h6>
                                <ul class="ul_products list-unstyled">
                                    <li>
                                        Ryzen 5 5600H
                                    </li>
                                    <li>
                                        8GB Ram 512GB SSD
                                    </li>
                                    <li>
                                        GTX1650 4G
                                    </li>
                                    <li>
                                        15.6 inch FHD
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center">
                                    <h6 class="price">13.230.000đ</h6>
                                    <h6 class="text-muted ml-2"><del>15.230.000đ</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <span class="fs-6 text text-success"><i class="fa-solid fa-check"></i>còn hàng</span>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="imgUNcover" src="<?= server_port ?>/du_an_1/public/images_stores/img/62692_laptop_acer_gaming_nitro_5_25.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"> Acer Gaming Nitro 5</h6>
                                <ul class="ul_products list-unstyled">
                                    <li>
                                        Ryzen 5 5600H
                                    </li>
                                    <li>
                                        8GB Ram 512GB SSD
                                    </li>
                                    <li>
                                        GTX1650 4G
                                    </li>
                                    <li>
                                        15.6 inch FHD
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center">
                                    <h6 class="price">13.230.000đ</h6>
                                    <h6 class="text-muted ml-2"><del>15.230.000đ</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <span class="fs-6 text text-success"><i class="fa-solid fa-check"></i>còn hàng</span>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="imgUNcover" src="<?= server_port ?>/du_an_1/public/images_stores/img/62692_laptop_acer_gaming_nitro_5_25.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"> Acer Gaming Nitro 5</h6>
                                <ul class="ul_products list-unstyled">
                                    <li>
                                        Ryzen 5 5600H
                                    </li>
                                    <li>
                                        8GB Ram 512GB SSD
                                    </li>
                                    <li>
                                        GTX1650 4G
                                    </li>
                                    <li>
                                        15.6 inch FHD
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center">
                                    <h6 class="price">13.230.000đ</h6>
                                    <h6 class="text-muted ml-2"><del>15.230.000đ</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <span class="fs-6 text text-success"><i class="fa-solid fa-check"></i>còn hàng</span>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="imgUNcover" src="<?= server_port ?>/du_an_1/public/images_stores/img/62692_laptop_acer_gaming_nitro_5_25.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"> Acer Gaming Nitro 5</h6>
                                <ul class="ul_products list-unstyled">
                                    <li>
                                        Ryzen 5 5600H
                                    </li>
                                    <li>
                                        8GB Ram 512GB SSD
                                    </li>
                                    <li>
                                        GTX1650 4G
                                    </li>
                                    <li>
                                        15.6 inch FHD
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center">
                                    <h6 class="price">13.230.000đ</h6>
                                    <h6 class="text-muted ml-2"><del>15.230.000đ</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <span class="fs-6 text text-success"><i class="fa-solid fa-check"></i>còn hàng</span>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="imgUNcover" src="<?= server_port ?>/du_an_1/public/images_stores/img/62692_laptop_acer_gaming_nitro_5_25.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"> Acer Gaming Nitro 5</h6>
                                <ul class="ul_products list-unstyled">
                                    <li>
                                        Ryzen 5 5600H
                                    </li>
                                    <li>
                                        8GB Ram 512GB SSD
                                    </li>
                                    <li>
                                        GTX1650 4G
                                    </li>
                                    <li>
                                        15.6 inch FHD
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center">
                                    <h6 class="price">13.230.000đ</h6>
                                    <h6 class="text-muted ml-2"><del>15.230.000đ</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <span class="fs-6 text text-success"><i class="fa-solid fa-check"></i>còn hàng</span>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="imgUNcover" src="<?= server_port ?>/du_an_1/public/images_stores/img/62692_laptop_acer_gaming_nitro_5_25.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"> Acer Gaming Nitro 5</h6>
                                <ul class="ul_products list-unstyled">
                                    <li>
                                        Ryzen 5 5600H
                                    </li>
                                    <li>
                                        8GB Ram 512GB SSD
                                    </li>
                                    <li>
                                        GTX1650 4G
                                    </li>
                                    <li>
                                        15.6 inch FHD
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center">
                                    <h6 class="price">13.230.000đ</h6>
                                    <h6 class="text-muted ml-2"><del>15.230.000đ</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <span class="fs-6 text text-success"><i class="fa-solid fa-check"></i>còn hàng</span>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="imgUNcover" src="<?= server_port ?>/du_an_1/public/images_stores/img/62692_laptop_acer_gaming_nitro_5_25.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"> Acer Gaming Nitro 5</h6>
                                <ul class="ul_products list-unstyled">
                                    <li>
                                        Ryzen 5 5600H
                                    </li>
                                    <li>
                                        8GB Ram 512GB SSD
                                    </li>
                                    <li>
                                        GTX1650 4G
                                    </li>
                                    <li>
                                        15.6 inch FHD
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center">
                                    <h6 class="price">13.230.000đ</h6>
                                    <h6 class="text-muted ml-2"><del>15.230.000đ</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <span class="fs-6 text text-success"><i class="fa-solid fa-check"></i>còn hàng</span>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center mb-3">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


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