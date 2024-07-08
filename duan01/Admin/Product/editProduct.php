<?php
if (isset($productEdit) && is_array($productEdit)) {
    extract($productEdit);
}
?>
<h1 class="add_title">Sửa Sản Phẩm</h1>
<div class="add_category">
    <form action="index.php?act=editProduct" method="POST" enctype="multipart/form-data">
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Name
                </label>
            </div>
            <input type="text" name="ProductName" value="<?= $ProductName ?>">
        </div>
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Description
                </label>
            </div>
            <input type="text" name="Description" value="<?= $Description ?>">
        </div>
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    price
                </label>
            </div>
            <input type="number" name="Price" value="<?= $Price ?>">
        </div>
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Old Price
                </label>
            </div>
            <input type="number" name="OldPrice" value="<?= $OldPrice ?>">
        </div>
        <div class="form_group">
            <div class="form_group-label">
                <label>
                    Status
                </label>
            </div>
            <input type="text" name="ProductStatus" value="<?= $ProductStatus ?>">
        </div>
        <select name="CategoryID" id="">
            <?php
            foreach ($listCategory as $key => $category) {
                if ($CategoryID == $category['CategoryID']) {
                    echo '<option value="' . $category['CategoryID'] . '"selected>' . $category['CategoryName'] . '</option>';
                } else {
                    echo '<option value="' . $category['CategoryID'] . '">' . $category['CategoryName'] . '</option>';
                }
            }
            ?>
        </select>
        <div class="form_group">
            <div class="form_group-label" style="margin-top: 20px;">
                <label>
                    image
                </label>
            </div>
            <input type="file" name="ProductImage">
            <input type="hidden" name="ProductImage" value="<?= $ProductImage ?>">
            <div style="margin-top: 10px;">
                <img src="Views/Img/<?= $ProductImage; ?>" alt="" width="100px">
            </div>
        </div>


        <div class="form_group-submit">
            <input type="hidden" name="ProductID" value="<?= $ProductID ?>">
            <input type="submit" name="editPro" value="Sửa">
    </form>
</div>