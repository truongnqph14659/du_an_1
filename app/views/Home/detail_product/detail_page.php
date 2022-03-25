<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="<?= server_port ?>/du_an_1/public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= server_port ?>/du_an_1/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,300&display=swap");
    </style>
    <link rel="stylesheet" href="<?= server_port ?>/du_an_1/public/css2/detail_page.css">
</head>

<body>
    <?php
    require_once './vender/file_extends/header.php';
    ?>
    <div class="container">
        <h1 class="title">Chi tiết sản phẩm</h1>
        <h2>
            Laptop Acer Gaming Aspire 7 (R5 5500U/8GB RAM/256GB SSD/15.6 inch
            FHD/VGA GTX1650 /Win11 pro/Đen)
        </h2>
        <div class="product_detail">
            <div class="product_detail_img">
                <img src="<?= server_port ?>/du_an_1/public/images_stores/img_fake/250_57282_laptop_lenovo_thinkpad_e14_20ta002lva_den_8.png" class="img_main" alt="">
                <div class="img_main">
                    <img src="<?= server_port ?>/du_an_1/public/images_stores/img_fake/angle-left-solid.svg" class="img_main" alt="">
                    <img src="<?= server_port ?>/du_an_1/public/images_stores/img_fake/right.svg" class="right" alt="" />
                </div>
                <div class="img_side">
                    <img src="<?= server_port ?>/du_an_1/public/images_stores/img_fake/250_61154_laptop_lenovo_thinkpad_l13_gen_2_itl_20vh0049va_den_4.jpg" class="img_side_child" alt="" />

                    <img src="<?= server_port ?>/du_an_1/public/images_stores/img_fake/250_63743_laptop_lenovo_thinkpad_e15_gen_3_7.png" class="img_side_child" alt="" />
                </div>
            </div>
            <div class="product_detail_info">
                <h2>Thông số sản phẩm</h2>
                <p>
                    CPU: AMD R5 5500U <br />
                    RAM: 8GB <br />
                    Ổ cứng: 256GB SSD <br />
                    VGA: NVIDIA GTX1650 4G <br />
                    Màn hình: 15.6 inch FHD<br />
                    HĐH: Win 11
                </p>
                <div class="price">
                    <h1 class="price_new">18.990.000đ</h1>
                    <h1 class="price_old">20.190.000đ</h1>
                </div>
                <br />

                <label for=""> Số lượng:</label>
                <div class="buttons_added">
                    <input class="minus is-form" type="button" value="-" />
                    <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1" />
                    <input class="plus is-form" type="button" value="+" />
                </div>
                <div class="add_cart">
                    <a class="add" href="#">
                        <img src="<?= server_port ?>/du_an_1/public/images_stores/img_fake/shopping-cart-solid.svg" class="cart_icon" alt="" />
                        <label for="">Thêm vào giỏ hàng</label>
                    </a>
                </div>
                <div class="btn_pay">Đặt mua ngay</div>
            </div>
        </div>
        <div class="detail">
            <div class="product_rating">
                <h2>
                    Đánh Giá Laptop Acer Gaming Aspire 7 (R5 5500U/8GB RAM/256GB
                    SSD/15.6 inch FHD/GTX1650 4G/Win11/Đen)
                </h2>
                <h3>Thiết kế gọn gàng, hiện đại</h3>
                <p>
                    Laptop Acer Gaming Aspire 7 sở hữu ngoại hình cực thanh lịch và sang
                    trọng với logo ASUS in 3D độc đáo góp phần tạo dấu ấn riêng cho máy.
                    Các đường viền cạnh được cắt vát tỉ mỉ, tinh tế, tổng thể tạo nên
                    một thiết kế cuốn hút mọi ánh nhìn nhờ phủ sắc xanh đen huyền bí,
                    phù hợp với cả phái mạnh và phái đẹp.
                </p>
                <div class="img_rat1"></div>
                <h3>Hiệu năng mạnh mẽ cho trải nghiệm vượt trội</h3>
                <p>
                    Laptop Acer Gaming Aspire 7 được trang bị bộ vi xử lý AMD Ryzen™
                    5000 H series, kết hợp card đồ họa AMD Radeon™ Graphics tạo nên 1 hệ
                    thống ổn định để đáp ứng mọi nhu cầu học tập, làm việc, giải trí đa
                    dạng của bạn. Chính vì vậy, chiếc laptop này của nhà Asus có khả
                    năng xử lý mọi tác vụ cơ bản đến thiết kế đồ họa 2D, edit video cực
                    khỏe, chơi Dota 2, CSGO, FIFA online cực mượt. Thậm chí, trong một
                    số trường hợp, đồ họa 3D hay render video nhẹ nhàng cũng nằm trong
                    khả năng của chiếc máy này.
                </p>
                <div class="img_rat2"></div>
                <p>
                    Tổng quan đây là 1 chiếc máy gaming rất đáng mua trong năm 2022, mời
                    các bạn ghé qua shop PRELAPTOP để dùng thử và trải nghiệm
                </p>
            </div>
            <div class="parameter">
                <h2>Thông số kỹ thuật</h2>
                <div class="para">
                    <div class="para_left">
                        <h4>Thương hiệu</h4> <br>
                        <h4>Part Number</h4> <br>
                        <h4>CPU</h4> <br>
                        <h4>RAM</h4> <br>
                        <h4>ROM</h4> <br>
                        <h4>VGA</h4> <br>
                        <h4>Màu sắc</h4> <br>
                        <h4>Kích Thước Màn hình</h4> <br>

                    </div>
                    <div class="para_right">
                        <h4>Acer</h4> <br>
                        <h4>A1323G</h4> <br>
                        <h4>R5 5500U</h4> <br>
                        <h4>8Gb</h4> <br>
                        <h4>256Gb SSD</h4> <br>
                        <h4>Onbroad</h4> <br>
                        <h4>Đen</h4> <br>
                        <h4>15.6 inch</h4> <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment">
            <h2>Bình luận</h2>
            <div class="container_cmt">chưa có nhận xét</div>
            <div class="comment_add">mời bạn để lại bình luận</div>
            <div class="comment_btn">Bình luận</div>

        </div>
    </div>
    <?php
    require_once './vender/file_extends/footer.php';
    ?>

</body>

</html>