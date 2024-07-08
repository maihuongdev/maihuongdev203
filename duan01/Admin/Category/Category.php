<div class="category">
    <div class="category_table">
        <h1>Danh sách danh mục</h1>
        <table border="1">
            <th class="th_cate">
                <p>Mã Loại</p>
            </th>
            <th class="th_cate">
                <p>Tên Loại</p>
            </th>
            <th class="th_cate"></th>
            <?php
            foreach ($listCategory as $category) {
                extract($category);
                $delCategory = 'index.php?act=delCategory&CategoryID=' . $CategoryID;
                $update = 'index.php?act=update&CategoryID=' . $CategoryID;
                echo '
                      <tr class="td_cate">
                      <td class="td_cate">' . $CategoryID . '</td>
                      <td class="td_cate">' . $CategoryName . '</td>
                      <td class="td_cate">
                      <a href="' . $update . '"><input class="edit_category" type="button" name="" value="Sửa"></a>
                      <a href="' . $delCategory . '"><input onclick="return confirm(\'Bạn có muốn xóa không\')" class="del_category" type="button" name="" value="Xóa"></a>
                      </td>
                      </tr>
                        ';
            }
            ?>
        </table>
        <button class="btn">
            <a href="index.php?act=addCategory">Thêm danh mục</a>
        </button>
    </div>
</div>