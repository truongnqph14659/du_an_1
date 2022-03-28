<?php
require_once './app/models/BaseModel.php';
extract($_POST);
class fetch_data_cart extends BaseModel
{
}
$data_sp = fetch_data_cart::Get_Data_Private_Sp($id_sp);
extract($data_sp);
$flag = false;
if (isset($_SESSION['list_cart'])) {
    foreach ($_SESSION['list_cart'] as $orders => $values) {
        if ($_SESSION["list_cart"][$orders]["id_sp"] == $id_sp) {
            $quantity += 1;
            $_SESSION["list_cart"][$orders] = [
                'id_sp' => $ma_san_pham,
                'ten_sp' => $ten_sp,
                'don_gia' => $don_gia,
                'giam_gia' => $giam_gia,
                'images_sp' => $images_sp,
                'dac_biet' => $dac_biet,
                'ngay_nhap' => $ngay_nhap,
                'sl_luu_kho' => $sl_luu_kho,
                'ma_loai' => $ma_loai_sp,
                'id_user' => $user_id,
                'quantity' => $quantity,
                'tam_tinh' => ($quantity * $don_gia) - $giam_gia,
                'thoi_gian_giam_gia' => $thoi_gian_giam_gia,
                'ma_option' => $ma_option,
                'ma_ct_sp' => $ma_ct_sp,
                'chung_loai' => $chung_loai,
                'part_number' => $part_number,
                'mau_sac' => $mau_sac,
                'CPU' => $CPU,
                'RAM' => $RAM,
                'VGA' => $VGA,
                'ROM' => $ROM,
                'man_hinh' => $man_hinh
            ];
            $flag = true;
            break;
        }
    }
}
if (!$flag) {
    if ($data_sp) {
        $_SESSION['list_cart'][] = [
            'id_sp' => $ma_san_pham,
            'ten_sp' => $ten_sp,
            'don_gia' => $don_gia,
            'giam_gia' => $giam_gia,
            'images_sp' => $images_sp,
            'dac_biet' => $dac_biet,
            'ngay_nhap' => $ngay_nhap,
            'sl_luu_kho' => $sl_luu_kho,
            'ma_loai' => $ma_loai_sp,
            'id_user' => $user_id,
            'quantity' => $quantity,
            'tam_tinh' => ($quantity * $don_gia) - $giam_gia,
            'thoi_gian_giam_gia' => $thoi_gian_giam_gia,
            'ma_option' => $ma_option,
            'ma_ct_sp' => $ma_ct_sp,
            'chung_loai' => $chung_loai,
            'part_number' => $part_number,
            'mau_sac' => $mau_sac,
            'CPU' => $CPU,
            'RAM' => $RAM,
            'VGA' => $VGA,
            'ROM' => $ROM,
            'man_hinh' => $man_hinh
        ];
    }
}

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
        . number_format($_SESSION['list_cart'][$orders]['don_gia']) . '
        <span class="quantity_style">x</span>
        <span class="quantity_item quantity_style">' . $_SESSION['list_cart'][$orders]['quantity'] . '</span>
        </div>
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
