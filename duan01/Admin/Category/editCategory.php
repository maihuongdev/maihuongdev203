<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<h1 class="add_title">Sửa danh mục</h1>
<div class="add_category">
    <form action="index.php?act=editCategory" method="POST">

        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Mã Loại
                </label>
            </div>
            <input type="text" name="CategoryID" value="<?= $CategoryID ?>">

        </div>
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Tên Loại
                </label>
            </div>
            <input type="text" name="CategoryName" value="<?php if (isset($CategoryName) && ($CategoryName != "")) echo $CategoryName ?>">
            <div class="noti_errors">
                <?= $error['CategoryName'] ?? '' ?>
            </div>
        </div>
        <div class="form_group-submit">
            <input type="hidden" name="CategoryID" value="<?php if (isset($CategoryID) && ($CategoryID > 0)) echo $CategoryID ?>">
            <input type="submit" value="Sửa" name="edit">
    </form>
</div>