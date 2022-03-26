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
    <?php
    require_once './vender/file_extends/header.php';
    ?>
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">SẢN PHẨM</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Sản phẩm</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
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
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <?php foreach ($data_sp as $values) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
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
                                    <span class="fs-6 text <?= $values["sl_luu_kho"] > 0 ? 'text-success' : 'text-danger' ?>"><i class="fa-solid fa-check"></i><?= $values["sl_luu_kho"] > 0 ? 'còn hàng' : 'hết hàng' ?></span>
                                    <button class="btn btn-sm text-dark p-0 ">
                                        <?php
                                        $id_user = 'none';
                                        $quantity = 1;
                                        if (isset($_SESSION['user_account']['user_id'])) {
                                            $id_user = $_SESSION['user_account']['user_id'];
                                        }
                                        ?>
                                        <i class="fas fa-shopping-cart text-primary mr-1 <?= $values["sl_luu_kho"] > 0 ? 'submit' : '' ?>" type="submit" data-id="<?php echo $values['ma_san_pham'] ?>" data-user="<?= $id_user ?>" data-qty=" <?= $quantity ?>"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

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
    <script src="<?= server_port ?>du_an_1/public/js/ajax_cart_list.js"></script>
</body>

</html>