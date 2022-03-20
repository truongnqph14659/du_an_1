<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="fontawesome-free-5.15.3-web/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/du_an_mau/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- sidebar -->
        <?php
        include './vendor/admin_header.php';
        ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- nav user information -->
                <?php
                include './vendor/admin_nav_info_user.php';
                ?>
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            Tổng Hợp Bình Luận
                        </div>
                    </div>
                    <div class="mx-auto col-12 py-2">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Hàng Hóa</th>
                                    <th scope="col">Số BL</th>
                                    <th scope="col">Mới Nhất</th>
                                    <th scope="col">Cũ Nhất</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_comments as $values) : ?>
                                    <tr>
                                        <td><?= $values['ten_sp'] ?></td>
                                        <td>
                                            <?= $values['tong'] ?>
                                        </td>
                                        <td>
                                            <?php
                                            $moi_nhat = date_format(date_create($values['moi_nhat']), "d-m-Y");
                                            echo "$moi_nhat"
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $cu_nhat = date_format(date_create($values['cu_nhat']), "d-m-Y");
                                            echo "$cu_nhat"
                                            ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="chi_tiet_binh_luan?id_sp=<?= $values['ma_san_pham'] ?>" role="button">Chi tiết</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
    include './vendor/admin_footer.php';
    ?>
    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootrap.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>