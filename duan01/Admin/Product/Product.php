<style>
    .th_product {
        padding: 10px 30px;
    }

    .page {
        display: flex;
        justify-content: center;
        gap: 5px;
        margin-bottom: 10px;
        margin-top: 30px;
    }

    .page a {
        background-color: #fff;
        color: #000;
        padding: 5px 15px;
        border: 1px solid #000;
        text-decoration: none;
    }

    a.active_page1 {
    background-color: #b8a5a5;
    color: #fff;
}

a.active_page2 {
    background-color: #b8a5a5;
    color: #fff;
}

a.active_page3 {
    background-color: #b8a5a5;
    color: #fff;
}
    
</style>
<div class="form_search">
    <form action="index.php?act=Product" method="post" style="display: flex; justify-content: center; padding-right: 50px;">
        <input type="text" name="kyw" placeholder="Tìm kiếm" style="width: 250px;
    padding: 7px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-right: 15px;
    outline: none;">
        <select name="CategoryID" id="" style="padding: 7px 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
    margin-right: 15px;">
            <option class="option" value="0" selected>Tất cả</option>
            <?php
            foreach ($listCategory as $category) {
                extract($category);
                echo '<option  value="' . $CategoryID . '">' . $CategoryName . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="search" value="Tìm kiếm" style="padding: 7px 25px;
    border: 1px solid #ccc;
    background: #fff;
    border-radius: 5px;">
    </form>
</div>
<div id="render_product">
    <div class="category_table">
        <h1 style="text-align: center; padding: 30px 0;">Danh sách sản phẩm</h1>
        <table border="1">
            <tr>
                <th class="th_product">Mã sản phẩm</th>
                <th class="th_product">Tên sản phẩm</th>
                <th class="th_product">Giá tiền</th>
                <th class="th_product">Giá cũ</th>
                <th class="th_product">Mô tả</th>
                <th class="th_product">Ảnh</th>
                <th class="th_product">trạng thái</th>
                <th class="th_product"></th>
            </tr>

            <?php
            foreach ($renderProduct as $product) {
                extract($product);
                $updatePro = 'index.php?act=updatePro&ProductID=' . $ProductID;
                $delPro = 'index.php?act=delPro&ProductID=' . $ProductID;
                echo '
       <tr>
        <td class="td_product">KHL' . $ProductID . '</td>
        <td class="td_product">' . $ProductName . '</td>
        <td class="td_product">' . number_format($Price), 'đ' . '</td>
        <td class="td_product">' . number_format($OldPrice), 'đ' . '</td>
        <td class="td_product">' . $Description . '</td>
        <td class="td_product"><img src="Views/Img/' . $ProductImage . '" alt="" width="50px"></td>
        <td class="td_product">' . $ProductStatus . '</td>
        <td class="td_product">
        <a href="' . $updatePro . '"><input class="edit_category" type="button" value="Sửa"></a>
        <a href="' . $delPro . '")"><input onclick="return confirm(\'Bạn có muốn xóa không\')" class="del_category"  type="button" value="Xóa"></a>
        </td>
       </tr>
       ';
            }
            ?>
        </table>

        <div class="page">
            <?php
            echo $renderPage;
            ?>
        </div>
        <button class="btn">
            <a href="index.php?act=addProduct">Thêm sản phẩm</a>
        </button>
    </div>

</div>