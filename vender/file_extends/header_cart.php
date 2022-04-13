<div class="container-fluid header_bg">
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <img src="<?= server_port ?>du_an_1/public/images_stores/img/logo.jpg" alt="" width="120px" height="80px" srcset="">
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="product_page" method="GET" enctype="multipart/form-data">
                <div class="input-group">
                    <input type="text" class="form-control" name="key" placeholder="tìm kiếm sản phẩm">
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
                    <span class="badge text-white">
                        <?php
                        $quantity = 0;
                        if (isset($_SESSION['list_cart'])) {
                            if (count($_SESSION['list_cart']) > 0) {
                                $quantity =  count($_SESSION['list_cart']);
                            }
                        }
                        echo $quantity;
                        ?>
                    </span>
                </div>
                <?php if (isset($_SESSION['list_cart']) && count($_SESSION['list_cart']) > 0) : ?>
                    <div class="cart_list_info">
                        <h4 class="header_cart-heading">sản phẩm đã thêm</h4>
                        <ul class="header_cart_list-items">
                            <?php if (isset($_SESSION['list_cart'])) : ?>
                                <?php foreach ($_SESSION['list_cart'] as $orders => $values) : ?>
                                    <li class="header_cart-item">
                                        <img src="<?= isset($_SESSION['list_cart']) == true ? $_SESSION['list_cart'][$orders]['images_sp'] : '' ?>" class="header_cart-img" alt="" srcset="">
                                        <div class="header_cart-info">
                                            <div class="header_cart_item_head">
                                                <h5 class="header_cart_item-name text-truncate">
                                                    <?= isset($_SESSION['list_cart']) == true ? $_SESSION['list_cart'][$orders]['ten_sp'] : '' ?>
                                                </h5>
                                                <div class="header_cart_item-price-wrap">
                                                    <span class="header_cart_item-price">
                                                        <?= isset($_SESSION['list_cart']) == true ? number_format($_SESSION['list_cart'][$orders]['don_gia']) : '' ?>
                                                    </span>
                                                    <span class="quantity_style">x</span>
                                                    <span class="quantity_item quantity_style"><?= $_SESSION['list_cart'][$orders]['quantity'] ?></span>
                                                </div>
                                            </div>
                                            <div class="header_cart_item-body">
                                                <span class="header_cart_item-description">
                                                    màu sắc: <?= isset($_SESSION['list_cart']) == true ? $_SESSION['list_cart'][$orders]['mau_sac'] : '' ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        <a href="cart" class="text-decoration-none btn-primary text-capitalize float-end rounded-0 m-1">Xem giỏ hàng</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>