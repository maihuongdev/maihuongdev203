<style>
    input[type="number"] {
        background-color: var(--white-7);
        border: none;
        border-color: var(--border-color-9);
        height: 50px;
        -webkit-box-shadow: none;
        box-shadow: none;
        padding-left: 20px;
        font-size: 16px;
        color: var(--ltn__paragraph-color);
        width: 100%;
        margin-bottom: 30px;
        border-radius: 0;
        padding-right: 40px;
    }

    .input_edit {
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 5px 10px;
        font-size: 13px;
        margin-bottom: 15px;
    }
</style>
<?php
if (isset($_SESSION['username']) && (is_array($_SESSION['username']))) {
    extract($_SESSION['username']);
}
?>
<form action="index.php?act=editAccount" method="post" enctype="multipart/form-data">
    <div id="edit_account">
        <div class="container">
            <h2 style="text-align: center; margin: 20px 0 50px 0; text-transform: uppercase; font-weight: 600;">Thông tin tài khoản</h2>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-4 col-md-2">
                            <label style="font-size: 15px; margin-bottom: 10px;">Email</label>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <input style="border: 1px solid #ccc; background-color: #fff; border-radius: 5px" type="email" name="Email" class="input_edit" placeholder="Email" value="<?= $Email ?? '' ?>">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-4 col-md-2">
                            <label style="font-size: 15px; margin-bottom: 10px;">Họ Và Tên</label>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <input style="border: 1px solid #ccc; background-color: #fff; border-radius: 5px" type="text" name="name" class="input_edit" placeholder="Họ Và Tên" value="<?= $name ?? '' ?>">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-4 col-md-2">
                            <label style="font-size: 15px; margin-bottom: 10px;">Số điện thoại</label>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <input style="border: 1px solid #ccc; background-color: #fff; border-radius: 5px" type="number" name="PhoneNumber" class="input_edit" placeholder="01234512789" value="<?= $PhoneNumber ?? '' ?>">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-4 col-md-2">
                            <label style="font-size: 15px; margin-bottom: 10px;">Username</label>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <input style="border: 1px solid #ccc; background-color: #fff; border-radius: 5px" type="text" name="username" class="input_edit" placeholder="Username" value="<?= $username ?? '' ?>">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-4 col-md-2">
                            <label style="font-size: 15px; margin-bottom: 10px;">Địa chỉ</label>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <input style="border: 1px solid #ccc; background-color: #fff; border-radius: 5px" type="text" name="Address" class="input_edit" placeholder="Địa chỉ" value="<?= $Address ?? '' ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div>
                                    <img style="border-radius: 50%;" src="<?= $UserImg; ?>" alt="">
                                </div>
                                <div class="col-lg-12" style="margin-top: 20px;">
                                    <input type="file" name="UserImg">
                                    <input type="hidden" name="UserImg" value="<?= $UserImg ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <div class="form__submit-edit">
        <input type="hidden" name="UserID" value="<?= $UserID ?>">
        <input style="display: flex;
    margin: 0 auto;
    padding: 10px 29px;
    background: green;
    color: #fff;
    border: none;
    border-radius: 4px; margin-bottom: 50px;" type="submit" value="Cập nhật" name="update">
    </div>
</form>