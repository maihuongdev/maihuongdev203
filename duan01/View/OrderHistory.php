<?php
// try {
//     $conn = new PDO("mysql:host=localhost; dbname=duan; charset=utf8", "root", "");
// } catch (PDOException $e) {
//     echo "Lỗi kết nối CSDL: " . $e->getMessage();
// }

// if($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $
// }

?>
<style>
    #render_product {
        display: flex;
        justify-content: center;
        margin-bottom: 50px;
    }

    .td_product {
        padding: 10px 15px;
        text-align: center;
        border: 1px solid;
        
    }

    .th_product {
        border: none;
        padding: 10px 4px;
        background-color: #000;
        color: #fff;
        text-align: center;
    }

    .edit_category {
        padding: 7px 10px;
        background: red;
        color: #fff;
        border: none;
    }
</style>
<?php
if (isset($_SESSION['username'])) {
    extract($_SESSION['username']);

?>
    <div id="render_product">
        <div class="category_table">
            <h1 style="text-align: center; padding: 30px 0;">Lịch Sử Đơn Hàng</h1>
            <table border="1">
                <tr>
                    <th class="th_product">MÃ Đơn Hàng</th>
                    <th class="th_product">Tài Khoản</th>
                    <th class="th_product">Địa chỉ</th>
                    <th class="th_product">Ngày Đặt Hàng</th>
                    <th class="th_product">Tên Sản Phẩm</th>
                    <th class="th_product">Số Lượng</th>
                    <th class="th_product">Giá Tiền</th>
                    <th class="th_product">Tổng tiền</th>
                    <th class="th_product">Phương Thức</th>
                    <th class="th_product">Trạng Thái</th>
                    <th class="th_product"></th>
                </tr>

                <?php
                foreach ($renderOrder as $order) {
                    if ($order['username'] === $username) {
                        extract($order);
                        $totalMoney = $order['quantity'] * $order['Price'];
                        if ($StatusName == "Chờ xác nhận") {
                            echo '
                            <tr>
                                <td class="td_product">KHL' . $OrderID . '</td>
                                <td class="td_product">' . $name . '</td>
                                <td class="td_product">' . $Address . '</td>
                                <td class="td_product">' . $OrderDate . '</td>
                                <td class="td_product">' . $ProductName . '</td>
                                <td class="td_product">' . $quantity . '</td>
                                <td class="td_product">' . number_format($Price) . 'đ</td>
                                <td class="td_product">' . number_format($totalMoney) . 'đ</td>
                                <td class="td_product">' . $PaymentMethodName . '</td>
                                <td class="td_product">' . $StatusName . '</td>
                                <td class="td_product" style="padding: 15px 13px">
                                <form method="post" action="Index.php?act=OrderHistory" onsubmit="return confirm(\'Bạn có chắc muốn hủy không\');">
                                <input type="hidden" name="OrderID" value="' . $OrderID . '">
                                <input type="hidden" name="StatusID" value="' . $StatusID . '">
                                <input class="edit_category" type="submit" name="cancel_order" value="Hủy">
                            </form>
                                </td>
                            </tr>
                        ';
                        } else {
                            echo '
                            <tr>
                                <td class="td_product">KHL' . $OrderID . '</td>
                                <td class="td_product">' . $name . '</td>
                                <td class="td_product">' . $Address . '</td>
                                <td class="td_product">' . $OrderDate . '</td>
                                <td class="td_product">' . $ProductName . '</td>
                                <td class="td_product">' . $quantity . '</td>
                                <td class="td_product">' . number_format($Price) . 'đ</td>
                                <td class="td_product">' . number_format($totalMoney) . 'đ</td>
                                <td class="td_product">' . $PaymentMethodName . '</td>
                                <td class="td_product">' . $StatusName . '</td>
                            </tr>
                        ';
                        }
                    }
                }
                ?>
            </table>
        </div>
    </div>

<?php } ?>

<script>

</script>