<style>
    a {
        text-decoration: none;
        color: #000000;
    }

    .btn-wrapper input {
        background-color: #e55472;
        color: #fff;
    }

    .btn-wrapper input:hover {
        background-color: #565656;
    }
</style>
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 style="margin-left: 25px;" class="ltn__page-title">Đăng Ký</h1>
                    <ul style="display: flex;
                     justify-content: center; align-items: center; list-style: none; gap: 10px;">
                        <li><a href="index.php">Home</a></li>
                        <li style="margin-top: 21px;"><ion-icon name="chevron-forward-outline"></ion-icon></li>
                        <li>Đăng Ký</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__login-area pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1>Đăng ký tài khoản</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <form action="index.php?act=Register" method="POST" class="ltn__form-box contact-form-box">
                        <input type="email" name="email" placeholder="Email*" value="<?= $email ?? '' ?>">
                        <input type="text" name="username" placeholder="Username*" value="<?= $username ?? '' ?>">
                        <input type="password" name="password" placeholder="Password*" value="<?= $password ?? '' ?>">
                        <input type="password" name="rePassword" placeholder="Confirm Password*" value="<?= $rePassword ?? '' ?>">
                        <label class="checkbox-inline">
                            <div class="btn-wrapper">
                                <input type="submit" style="padding: 15px 40px;
    border: none;" value="ĐĂNG KÝ" name="register">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__brand-logo-area  ltn__brand-logo-1 section-bg-1 pt-35 pb-35 plr--5">
    <div class="container">
        <div class="row ltn__brand-logo-active">
            <div class="col-lg-2">
                <div class="ltn__brand-logo-item">
                    <img src="View/Img/Banner_Contact.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ltn__brand-logo-item">
                    <img src="View/Img/Banner_Contact02.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ltn__brand-logo-item">
                    <img src="View/Img/Banner_Contact03.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ltn__brand-logo-item">
                    <img src="View/Img/Banner_Contact04.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ltn__brand-logo-item">
                    <img src="View/Img/Banner_Contact05.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ltn__brand-logo-item">
                    <img src="View/Img/Banner_Contact06.png" alt="Brand Logo">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    Swal.fire("SweetAlert2 is working!");
</script>