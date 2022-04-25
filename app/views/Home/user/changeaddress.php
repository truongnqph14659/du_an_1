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
    <!--  -->
    <main style="background: rgb(245, 245, 250);">
        <div class="Container-sc-itwfbd-0 hfMLFx" style="width: 1170px;">
            <div class="AddressList__StyledAddressList-sc-lm7k31-0 jQjVjo">
                <h3 class="title">Địa chỉ giao hàng</h3>
                <h5 class="address-list-text">Chọn địa chỉ giao hàng có sẵn bên dưới:</h5>
                <div class="address-list">
                    <div class="styles__StyledAddressItem-sc-y17c35-0 bsrCjS">
                        <p class="name">
                            <?php
                            if (isset($user)) {
                                echo $user['user_name'];
                            }
                            ?>
                        </p>
                        <p class="address">
                            <?php
                            if (isset($user)) {
                                echo $user['dia_chi'] . ',' . $user['xa_phuong'] . ',' . $user['quan_huyen'] . ',' . $user['tinh_thanh'];
                            }
                            ?>
                        </p>
                        <p class="address">Việt Nam</p>
                        <p class="phone">Điện thoại:
                            <?php
                            if (isset($user)) {
                                echo $user['sdt'];
                            }
                            ?>
                        </p>
                        <p class="action"><a href="cart" class="btn saving-address">Giao đến địa chỉ này</a><button type="button" class="btn edit-address"> Sửa</button></p><span class="default">Mặc định</span>
                    </div>
                </div>
            </div>

            <div class="styles__StyledAddressForm-sc-y1ursh-1 evTjOX">
                <div class="form-container">
                    <div class="styles__FormItem-sc-y1ursh-0 kSzifj"><label>Họ tên</label><input type="text" name="full_name" id="full_name" placeholder="Nhập họ tên" maxlength="50" class="Input-sc-17i9bto-0 girQwT" value="<?= $user['user_name'] ?>"></div>
                    <div class="styles__FormItem-sc-y1ursh-0 kSzifj"><label>Điện thoại di động</label><input type="text" name="telephone" id="telephone" placeholder="Nhập số điện thoại" class="Input-sc-17i9bto-0 girQwT" value="<?= $user['sdt'] ?>"></div>
                    <div class="styles__FormItem-sc-y1ursh-0 kSzifj"><label>Tỉnh/Thành phố</label><input type="text" name="tinh_thanh" id="tinh_thanh" placeholder="Nhập Tỉnh thành" maxlength="50" class="Input-sc-17i9bto-0 girQwT" value="<?= $user['tinh_thanh'] ?>"></div>
                    <div class="styles__FormItem-sc-y1ursh-0 kSzifj"><label>Quận/Huyện</label><input type="text" name="quan_huyen" id="quan_huyen" placeholder="Nhập Quận huyện" maxlength="50" class="Input-sc-17i9bto-0 girQwT" value="<?= $user['quan_huyen'] ?>"></div>
                    <div class="styles__FormItem-sc-y1ursh-0 kSzifj"><label>Xã/Phường</label><input type="text" name="xa_phuong" id="xa_phuong" placeholder="Nhập Xã phường" maxlength="50" class="Input-sc-17i9bto-0 girQwT" value="<?= $user['xa_phuong'] ?>"></div>
                    <div class="styles__FormItem-sc-y1ursh-0 kSzifj"><label>Địa chỉ</label><textarea type="textarea" name="street" id="street" placeholder="Ví dụ: 52, đường Trần Hưng Đạo" class="Input__TextArea-sc-17i9bto-1 ekRedY"><?= $user['dia_chi'] ?></textarea></div>
                    <div class="styles__FormItem-sc-y1ursh-0 kSzifj" style="margin-bottom: 0px;"><label></label>
                        <div class="button-group"><button class="cancel">Huỷ bỏ</button><button class="create-update" data-id="<?= $user['user_id'] ?>">Cập nhật</button></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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
        var edit_address = document.querySelector('.edit-address')
        var cancel = document.querySelector('.cancel')
        var update = document.querySelector('.create-update')
        var form_input = document.querySelector('.styles__StyledAddressForm-sc-y1ursh-1')
        edit_address.addEventListener('click', () => {
            form_input.classList.remove('evTjOX')
            form_input.classList.add('dtkMQo')
        })
        cancel.addEventListener('click', () => {
            form_input.classList.remove('dtkMQo')
            form_input.classList.add('evTjOX')
        })
        update.addEventListener('click', () => {
            const id = $(update).data('id')
            const name = $("#full_name").val();
            const sdt = $("#telephone").val();
            const tinh_thanh = $("#tinh_thanh").val();
            const quan_huyen = $("#quan_huyen").val();
            const xa_phuong = $("#xa_phuong").val();
            const street = $("#street").val();
            $.ajax({
                type: "POST",
                url: "re_address",
                data: {
                    id: id,
                    name: name,
                    sdt: sdt,
                    tinh_thanh: tinh_thanh,
                    quan_huyen: quan_huyen,
                    xa_phuong: xa_phuong,
                    street: street
                },
                success: function(data) {
                    location.reload();
                }
            });
        });
    </script>
</body>

</html>