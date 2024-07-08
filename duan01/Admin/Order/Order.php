<style>
    .th_product {
        padding: 10px 20px;
    }

    .td_product {
        padding: 15px 10px;
    }
</style>
<div class="form_search">
</div>
<div id="render_product">
    <div class="category_table">
        <h1 style="text-align: center; padding: 30px 0;">Danh sách đơn hàng</h1>
        <table border="1">
            <tr>
                <th class="th_product">STT</th>
                <th class="th_product">Tài Khoản</th>
                <th class="th_product">Địa chỉ</th>
                <th class="th_product">Ngày Đặt Hàng</th>
                <th class="th_product">Tên Sản Phẩm</th>
                <th class="th_product">Giá Tiền</th>
                <th class="th_product">Phương Thức</th>
                <th class="th_product">Trạng Thái</th>
                <th class="th_product"></th>
            </tr>

            <?php
            foreach ($renderOrder as $order) {
                extract($order);
                $totalMoney = $quantity * $Price;
                $updateOrder = 'index.php?act=updateOrder&OrderID=' . $OrderID;
                if($StatusName == "Đã Hủy") {
                    echo '
                    <tr>
                     <td class="td_product">' . $OrderID . '</td>
                     <td class="td_product">' . $name  . '</td>
                     <td class="td_product">' . $Address  . '</td>
                     <td class="td_product">' . $OrderDate . '</td>
                     <td class="td_product">' . $ProductName . '</td>
                     <td class="td_product">' . number_format($totalMoney), 'đ' . '</td>
                     <td class="td_product">' . $PaymentMethodName  . '</td>
                     <td class="td_product">' . $StatusName . '</td>
                    </tr>
                    ';
                } else {
                    echo '
                    <tr>
                     <td class="td_product">' . $OrderID . '</td>
                     <td class="td_product">' . $name  . '</td>
                     <td class="td_product">' . $Address  . '</td>
                     <td class="td_product">' . $OrderDate . '</td>
                     <td class="td_product">' . $ProductName . '</td>
                     <td class="td_product">' . number_format($totalMoney), 'đ' . '</td>
                     <td class="td_product">' . $PaymentMethodName  . '</td>
                     <td class="td_product">' . $StatusName . '</td>
                     <td class="td_product" style="padding: 15px 13px">
                     <a href="' . $updateOrder  . '"><input class="edit_category" type="button" name="" value="Sửa"></a>
                     </td>
                    </tr>
                    ';
                }
            }
            ?>
        </table>
    </div>

</div>