<?php
require_once './vender/file_extends/header_cart.php';
?>
<!-- Topbar End -->
<!-- Navbar Start -->
<div class="container-fluid">
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
                    <?php
                    require_once './vender/file_extends/header_acc.php';
                    ?>
                </div>
            </nav>
        </div>
    </div>
</div>