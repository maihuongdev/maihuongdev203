<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<h1 class="add_title">Sửa danh mục</h1>
<div class="add_category">
    <form action="index.php?act=editAccount" method="POST">
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Email
                </label>
            </div>
            <input type="text" name="Email" value="<?php if (isset($Email) && ($Email != "")) echo $Email ?>">
        </div>
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Name
                </label>
            </div>
            <input type="text" name="name" value="<?php if (isset($name) && ($name != "")) echo $name ?>">
        </div>
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Username
                </label>
            </div>
            <input type="text" name="username" value="<?php if (isset($username) && ($username != "")) echo $username ?>">
            <div class="noti_errors">
                <?= $errors['username'] ?? '' ?>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Phone
                </label>
            </div>
            <input type="text" name="PhoneNumber" value="<?php if (isset($PhoneNumber) && ($PhoneNumber != "")) echo $PhoneNumber ?>">
            <div class="noti_errors">
                <?= $errors['PhoneNumber'] ?? '' ?>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Address
                </label>
            </div>
            <input type="text" name="Address" value="<?php if (isset($Address) && ($Address != "")) echo $Address ?>">
            <div class="noti_errors">
                <?= $errors['Address'] ?? '' ?>
            </div>
        </div>
        <div class="form_group-submit">
            <input type="hidden" name="UserID" value="<?php if (isset($UserID) && ($UserID > 0)) echo $UserID ?>">
            <input type="submit" value="Sửa" name="edit">
    </form>
</div>