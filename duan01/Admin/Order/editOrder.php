<?php
if (is_array($orders)) {
    extract($orders);
}

?>

<h1 class="add_title">Sửa danh mục</h1>
<div class="add_category">
    <form action="index.php?act=editOrder" method="POST" enctype="multipart/form-data">
        <div class="form_group">
            <div class="form_group-label">

                <label>
                    Trạng Thái
                </label>
            </div>
        </div>

        <select id="status" name="StatusID" style="padding: 7px 15px; border: 1px solid #ccc; border-radius: 5px; outline: none; margin-right: 15px; width: 62%;">
            <?php
            foreach ($renderStatus as $dm) {
                if ($orders['StatusID'] == $dm['StatusID']) {
                    echo '<option value="' . $dm['StatusID'] . '" selected>' . $dm['StatusName'] . '</option>';
                } else {
                    echo '<option value="' . $dm['StatusID'] . '">' . $dm['StatusName'] . '</option>';
                }
            }
            ?>
        </select>
        <div class="form_group-submit">
            <input type="hidden" name="OrderID" value="<?php if (isset($OrderID) && ($OrderID > 0)) echo $OrderID ?>">
            <input type="submit" value="Sửa" name="editOrder">
    </form>
</div>