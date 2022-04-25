<div class="navbar-nav ml-auto py-0">
    <div class="pt-2">
        <?php
        $avatar = server_port . 'du_an_1/public/images_stores/img/logo_user.png';
        if (isset($_SESSION['user_account'])) {
            $avatar = $_SESSION['user_account']['user_image'];
        }
        ?>
        <img src="<?= $avatar ?>" alt="" width="40px" height="40px" srcset="">
    </div>
    <?php
    if (!isset($_SESSION["user_account"])) :
    ?>
        <a href="form_logn_in" class="nav-item nav-link">Đăng nhập</a>

        <a href="form_register" class="nav-item nav-link">Đăng ký</a>
    <?php
    endif;
    ?>
    <?php
    if (isset($_SESSION["user_account"])) :
    ?>
        <div class="action_user">
            <p style="color:red; margin-bottom: 0rem;">Tài khoản</p>
            <span class="user_name dropdown-toggle text-dark" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $_SESSION["user_account"]['user_name'] ?>
            </span>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <?php if ($_SESSION["user_account"]['user_role'] == 0) : ?>
                    <li><a class="dropdown-item text-dark" href="user_page">tài khoản của tôi</a></li>
                    <li><a class="dropdown-item text-dark" href="forgot_pass">đổi mật khẩu</a></li>
                <?php endif; ?>
                <li><a class="dropdown-item text-dark" href="logn_out">đăng xuất</a></li>
            </ul>
        </div>
    <?php
    endif;
    ?>
</div>