<h1 class="add_title">Thêm danh mục</h1>
<div class="add_category">
    <form action="index.php?act=addCategory" method="POST">

        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Mã Loại
                </label>
            </div>
            <input type="text" name="CategoryID">
        </div>
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Tên Loại
                </label>
            </div>
            <input type="text" name="CategoryName">
            <div class="noti_errors">
                <?= $errors['CategoryName'] ?? '' ?>
            </div>
        </div>
        <div class="form_group-submit">
            <input type="submit" value="Thêm" name="add">
    </form>
</div>