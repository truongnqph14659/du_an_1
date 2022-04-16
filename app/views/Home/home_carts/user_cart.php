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

    <!-- Shop Start -->
    <div class="container">
        <h4 class="title_giohang">Giỏ hàng</h4>
        <form action="" method="post">
            <div class="table-responsive-xl">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col a">sản phẩm</th>
                            <th scope="col b">tên sản phẩm</th>
                            <th scope="col c">đơn giá</th>
                            <th scope="col c">số lượng</th>
                            <th scope="col c">tổng tiền</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <?php if (isset($_SESSION['list_cart'])) : ?>
                            <?php foreach ($_SESSION['list_cart'] as $orders => $values) : ?>
                                <tr class="tr_data_cart">
                                    <th class="a">
                                        <img src="<?= $_SESSION['list_cart'][$orders]['images_sp'] ?>" class="rounded mx-auto d-block">
                                    </th>
                                    <td class="b"><?= $_SESSION['list_cart'][$orders]['ten_sp'] ?></td>
                                    <td class="c price_item"><?= number_format($_SESSION['list_cart'][$orders]['don_gia']) ?></td>
                                    <td class="c">
                                        <input type="number" value="<?= $_SESSION['list_cart'][$orders]['quantity'] ?>" min="1" data-stores="<?= $_SESSION['list_cart'][$orders]['sl_luu_kho'] ?>" data-discount="<?= $_SESSION['list_cart'][$orders]['giam_gia'] ?>" data-item="<?php echo $_SESSION['list_cart'][$orders]['id_sp'] ?>" data-price="<?php echo $_SESSION['list_cart'][$orders]['don_gia'] ?>" max="<?= $_SESSION['list_cart'][$orders]['sl_luu_kho'] ?>" class="form-control quantity_order">
                                    </td>
                                    <td class="c tong_tien_item">
                                        <?php
                                        $thanh_tien = number_format($_SESSION['list_cart'][$orders]['don_gia'] * $_SESSION['list_cart'][$orders]['quantity']);
                                        echo $thanh_tien . "đ";
                                        ?>
                                    </td>
                                    <td>
                                        <div class="d-grid gap-xl-1 d-md-block">
                                            <button class="btn btn-primary delete_items" data-id="<?php echo $_SESSION['list_cart'][$orders]['id_sp'] ?>">xóa</button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="d-xl-flex justify-content-xl-between flex_payment">
                <div class="continue_purchase">
                    <div class="card-body">
                        <a href="index.php">tiếp tục mua sắm</a>
                    </div>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-borderless table_payment">
                        <tbody>
                            <tr>
                                <td class="price_text">tạm tính:</td>
                                <td class="price_number">
                                    <?php
                                    $tong_tien = 0;
                                    foreach ($_SESSION['list_cart'] as $orders => $values) {
                                        $tong_tien +=  $_SESSION['list_cart'][$orders]['don_gia'] * $_SESSION['list_cart'][$orders]['quantity'];
                                    }
                                    echo number_format($tong_tien) . "đ";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_text">giảm giá:</td>
                                <td class="giam_gia">
                                    0đ
                                </td>
                            </tr>
                            <tr>
                                <td class="price_text">tổng tiền:</td>
                                <td class="price_number_tong">
                                    <?php
                                    $tong_tien = 0;
                                    foreach ($_SESSION['list_cart'] as $orders => $values) {
                                        $tong_tien +=  $_SESSION['list_cart'][$orders]['don_gia'] * $_SESSION['list_cart'][$orders]['quantity'];
                                    }
                                    echo number_format($tong_tien) . "đ";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <!-- đang fake id_user đã đăng nhập để test chức năng đặt hàng -->
                                    <div>
                                        <a class="payment_button" href="Create_Order?id_user=1">thanh toán</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
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
    <script>
        $(function() {
            $('.delete_items').each((index, item_remove) => {
                item_remove.addEventListener('click', (evt) => {
                    evt.preventDefault();
                    item_remove.parentElement.parentElement.parentElement.remove()
                    tong_tien()
                    const id_sp = $(item_remove).data('id');
                    $.ajax({
                        type: "POST",
                        url: "delete_cart_item",
                        data: {
                            id_sp: id_sp
                        },
                        success: function(data) {
                            $("html, body").animate({
                                scrollTop: 0
                            }, "slow");
                            $(".cart_list").html(data);
                        }
                    });
                })
            })
            $('.quantity_order').each((index, item_quantity) => {
                item_quantity.addEventListener('blur', check_action)
            })
        })

        function check_action(event) {
            var Input = event.target;
            if (isNaN(Input.value) || Input.value <= 0 || Input.value > <?= $_SESSION['list_cart'][$orders]['sl_luu_kho'] ?>) {
                var newdata = Input.value = 1;
                var parent_tr = Input.parentElement.parentElement;
                parent_tr.querySelector('.tong_tien_item').innerHTML = (newdata * parent_tr.querySelector('.price_item').innerHTML.replace(/,/g, "")).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "đ"
            }
            tong_tien();
        }

        function c() {
            // chỗ này là đã có function cho sự thay đổi oninput cho quntity_order
            var get_input_value = document.getElementsByClassName('quantity_order')
            $('.tr_data_cart').each((index, item_input) => {
                item_input.addEventListener('input', (eval) => {
                    var parent = eval.target.parentElement.parentElement
                    var kq = parent.querySelector('.price_item').innerHTML.replace(/,/g, "") * eval.target.value
                    parent.querySelector('.tong_tien_item').innerHTML = kq.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "đ"
                    var input_element = parent.querySelector('.quantity_order')
                    var id_sp = $(input_element).data('item')
                    var price = $(input_element).data('price')
                    var discount = $(input_element).data('discount')
                    var quantity = $(input_element).val();
                    var sl_luu_kho = $(input_element).data('stores')
                    if (quantity !== "" && quantity <= sl_luu_kho) {
                        $.ajax({
                            type: "POST",
                            url: "re_quantity",
                            data: {
                                id_sp: id_sp,
                                quantity: quantity,
                                price: price,
                                discount: discount
                            },
                            success: function(data) {
                                $(".cart_list").html(data);
                            }
                        });
                    } else {
                        $.ajax({
                            type: "POST",
                            url: "re_quantity",
                            data: {
                                id_sp: id_sp,
                                quantity: 1,
                                price: price,
                                discount: discount
                            },
                            success: function(data) {
                                $(".cart_list").html(data);
                            }
                        });
                    }
                    tong_tien()
                })
            })

        }

        function tong_tien() {
            var tong = 0;
            var hien_thi_tt = document.querySelector('.price_number')
            var hien_thi_tt_tong = document.querySelector('.price_number_tong')
            var tong_tien = document.querySelectorAll('.tong_tien_item');
            tong_tien.forEach((price_item) => {
                tong += Number(price_item.innerHTML.toString().replace(/,|đ/g, ""))
            })
            hien_thi_tt.innerHTML = tong.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "đ";
            // phần này sẽ tính nếu có giảm giá
            hien_thi_tt_tong.innerHTML = tong.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "đ";
        }
        c()

        function removeCartItems(event) {
            var button_click = event.target;
            button_click.parentElement.parentElement.parentElement.remove()
            tong_tien()
        }
    </script>
</body>

</html>