<?php
extract($_POST);
if (isset($_SESSION['list_cart'])) {
    foreach ($_SESSION['list_cart'] as $orders => $values) {
        if ($_SESSION["list_cart"][$orders]["id_sp"] == $id_sp) {
            unset($_SESSION["list_cart"][$orders]);
            break;
        }
    }
}
if (count($_SESSION['list_cart']) == 0) {
    echo '
<div class="btn border">
    <i class="fas fa-shopping-cart text-white "></i>
    <span class="badge text-white">'
        . count($_SESSION['list_cart']) .
        '</span>
</div>';
} else {
    echo '
<div class="btn border">
    <i class="fas fa-shopping-cart text-white "></i>
    <span class="badge text-white">'
        . count($_SESSION['list_cart']) .
        '</span>
</div>';
    echo '<div class="cart_list_info">
    <h4 class="header_cart-heading">sản phẩm đã thêm</h4>
    <ul class="header_cart_list-items">';
    foreach ($_SESSION['list_cart'] as $orders => $values) {
        echo '<li class="header_cart-item">';
        echo '<img  class="header_cart-img" src="' . $_SESSION["list_cart"][$orders]["images_sp"] . '">
    <div class="header_cart-info">
    <div class="header_cart_item_head">
    <h5 class="header_cart_item-name text-truncate">'
            . $_SESSION['list_cart'][$orders]['ten_sp'] .
            '</h5>' .
            '<div class="header_cart_item-price-wrap">
     <span class="header_cart_item-price">'
            . number_format($_SESSION['list_cart'][$orders]['don_gia']) .
            '</div>
     </div>' .
            '<div class="header_cart_item-body">
     <span class="header_cart_item-description">
         màu sắc: ' . $_SESSION['list_cart'][$orders]['mau_sac'] .
            '</span>
     </div>
     </div>';
        echo '</li>';
    }
    echo '</ul>';
    echo '<a href="cart" class="text-decoration-none btn-primary text-capitalize float-end rounded-0 m-1">Xem giỏ hàng</a>';
    echo '</div>';
}
