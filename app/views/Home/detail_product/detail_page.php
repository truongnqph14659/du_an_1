<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="<?= server_port ?>/du_an_1/public/img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="<?= server_port ?>/du_an_1/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= server_port ?>/du_an_1/public/css2/detail.css" rel="stylesheet">
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
    <?php
    require_once './vender/file_extends/header.php';
    ?>
    <div class="container-fluid px-xl-5 pt-5">
        <h2>
            <?= $data_sp["ten_sp"] ?>
        </h2>
        <div class="container">
            <div class="row justify-content-lg-center content_1">
                <div class="col-7">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row" class="col-2">CPU</th>
                                <td class="col-2">
                                    <?= $data_sp["CPU"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-2">RAM</th>
                                <td class="col-2">
                                    <?= $data_sp["RAM"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-2">ROM</th>
                                <td class="col-2">
                                    <?= $data_sp["ROM"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-2">VGA</th>
                                <td class="col-2">
                                    <?= $data_sp["VGA"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-2">Giảm giá</th>
                                <td class="col-2">
                                    <?= $data_sp["giam_gia"] ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="price">
                        <h1 class="price_new"><?= number_format($data_sp["don_gia"]) ?>đ</h1>
                        <h1 class="price_old">20.190.000đ</h1>
                    </div>
                    <div class="inline-flex">
                        <?php foreach ($data_options as $values) : ?>
                            <?php
                            extract($values);
                            ?>
                            <a href="product_detail?id_sp=<?= $id_sp ?>&ma_option=<?= $values["ma_option"] ?>" class="btn btn-outline-dark m-1"><?= $values["ROM"] ?>/<?= $values['RAM'] ?></a>
                        <?php endforeach; ?>
                    </div>
                    <?php if ($data_sp["sl_luu_kho"] == 0) : ?>
                        <div class="col-12">
                            <p style="color:red">sản phẩm tạm thời hết hàng</p>
                        </div>
                    <?php endif; ?>
                    <div class="d-flex justify-content-around">
                        <div>
                            <input type="number" class="form-control outline-dark quantity_order" value="1" name="quantity_order" min="1" max="<?= $data_sp["sl_luu_kho"] ?>" id="inputGroupFile01">
                        </div>
                        <div>
                            <?php
                            $id_user = 1;
                            ?>
                            <input class="btn btn-primary <?= $data_sp["sl_luu_kho"] > 0 ? 'submit' : '' ?>" id="success" role="button" name="submit" type="submit" data-id="<?= $id_sp ?>" data-option="<?= isset($_GET['ma_option']) == true ? $_GET['ma_option'] : "none" ?>" data-user="<?= $id_user ?>" value="Thêm vào giỏ hàng">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <h4>thông tin sản phẩm</h4>
                    <p>
                        Laptop là một thiết bị không thể thiếu đối với mỗi cá nhân trong công việc, học tập và giải trí hàng ngày. Bài viết này sẽ thông tin đến bạn 9 mẫu laptop tốt nhất hiện nay trên thị trường, giúp bạn có cái nhìn tổng quan và thêm thông tin để có thể lựa chọn cho mình một mẫu laptop ưng ý.
                        MacBook là sản phẩm laptop đến từ Apple. Máy có thiết kế nhỏ gọn, mỏng và trọng lượng không lớn cùng thiết kế sang trọng với cấu hình hiện đại mang đến hiệu năng mượt mà. Ngoài ra, hệ thống bảo mật của MacBook rất cao khiến người dùng khá tin tưởng.
                        MacBook là sản phẩm laptop đến từ Apple. Máy có thiết kế nhỏ gọn, mỏng và trọng lượng không lớn cùng thiết kế sang trọng với cấu hình hiện đại mang đến hiệu năng mượt mà. Ngoài ra, hệ thống bảo mật của MacBook rất cao khiến người dùng khá tin tưởng.
                        MacBook là sản phẩm laptop đến từ Apple. Máy có thiết kế nhỏ gọn, mỏng và trọng lượng không lớn cùng thiết kế sang trọng với cấu hình hiện đại mang đến hiệu năng mượt mà. Ngoài ra, hệ thống bảo mật của MacBook rất cao khiến người dùng khá tin tưởng.
                    </p>
                    <!-- phần dành cho bình luận -->

                    <div class="container bootdey">
                        <div class="col-md-12 bootstrap snippets">
                            <div class="panel">
                                <div class="panel-body">
                                    <form action="insert_comment" method="POST" enctype="multipart/form-data" name="form_bl">
                                        <textarea class="form-control" name="content_comment" rows="2" placeholder="bình luận về sản phẩm"></textarea>
                                        <input style="display:none" name="upload" id="input-element" type="file">
                                        <input type="text" name="parent_id" value="0" hidden>
                                        <input type="text" name="user_id" value="1" hidden>
                                        <input type="text" name="ma_san_pham" value="<?= $id_sp ?>" hidden>
                                        <button class="btn btn-sm btn-primary pull-right" type="submit" id="submit_form"><i class="fa fa-pencil fa-fw"></i> Share</button>
                                    </form>
                                    <div class="mar-top clearfix">
                                        <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
                                        <button id="file-input-thing" class="btn btn-trans btn-icon fa fa-camera add-tooltip"></button>
                                        <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-body">
                                    <!-- Newsfeed Content -->
                                    <!--===================================================-->
                                    <?php
                                    require_once './app/controller/Fetch_Data/fetch_comments.php';
                                    ?>
                                    <!--===================================================-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-4">
                    <h5>thông số kỹ thuật</h5>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row" class="col-2">chủng loại</th>
                                <td class="col-2">
                                    <?= $data_sp["chung_loai"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-2">part number</th>
                                <td class="col-2">
                                    <?= $data_sp["part_number"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-2">màu sắc</th>
                                <td class="col-2">
                                    <?= $data_sp["mau_sac"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-2">CPU</th>
                                <td class="col-2">
                                    <?= $data_sp["CPU"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-2">RAM</th>
                                <td class="col-2">
                                    <?= $data_sp["RAM"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-2">ROM</th>
                                <td class="col-2">
                                    <?= $data_sp["ROM"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-2">VGA</th>
                                <td class="col-2">
                                    <?= $data_sp["VGA"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-2">Màn Hinh</th>
                                <td class="col-2">
                                    <?= $data_sp["man_hinh"] ?> inch
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- sản phẩm liên quan -->
        <div class="col-12">
            <h6>sản phẩm liên quan</h6>
            <div class="row pb-3">
                <?php foreach ($related_sp as $values) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
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
                                    $id_user = 1;
                                    $quantity = 1;
                                    // if (isset($_SESSION['user_account']['user_id'])) {
                                    //     $id_user = $_SESSION['user_account']['user_id'];
                                    // }
                                    ?>
                                    <i class="fas fa-shopping-cart text-primary mr-1 <?= $values["sl_luu_kho"] > 0 ? 'submit' : '' ?>" type="submit" data-id="<?php echo $values['ma_san_pham'] ?>" data-user="<?= $id_user ?>" data-qty=" <?= $quantity ?>"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </div>

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
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="<?= server_port ?>du_an_1/public/js/ajax_cart_list.js"></script>
    <!-- Initialize Swiper -->
    <!-- js add to cart -->
    <script>
        var quantity_order = document.querySelector('.quantity_order')
        quantity_order.addEventListener('blur', (event) => {
            var Input = event.target;
            if (isNaN(Input.value) || Input.value <= 0 || Input.value > <?= $values["sl_luu_kho"] ?>) {
                Input.value = 1;
            }
        })
        $('#file-input-thing').click(function() {
            $('#input-element').trigger('click');
        });

        $('.comment_list').each((index, add_cart) => {
            add_cart.addEventListener('click', (e) => {
                let show_form = e.target;
                show_form.nextElementSibling.classList.toggle("show_form");
            })
        })
        $('.file-input-thing').each((index, add_cart) => {
            add_cart.addEventListener('click', (e) => {
                let img = e.target;
                $(img.parentElement.previousElementSibling.querySelector('#input-element')).trigger('click');
            })
        })
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 10,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
    <!-- ajax tao don -->
    <script>
        var add_cart = document.querySelector('.submit');
        add_cart.addEventListener('click', () => {
            const id_sp = $(add_cart).data('id')
            const user_id = $(add_cart).data('user')
            const quantity = $('.quantity_order').val();
            const option = $(add_cart).data('option')
            $.ajax({
                type: "POST",
                url: "cart_lists",
                data: {
                    id_sp: id_sp,
                    user_id: user_id,
                    quantity: quantity,
                    option: option
                },
                success: function(data) {
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                    $(".cart_list").html(data);
                }
            });
        })
    </script>


</body>


</html>