<style>
    .th_statistical {
        padding: 10px 20px;
        font-size: 15px;
        background: #000;
        color: #fff;
    }

    .td_statistical {
        padding: 10px 20px;
        font-size: 15px;
        text-align: center;
    }
</style>
<div class="row2 font_title">
    <h1 style="text-align: center;
    padding: 30px 0;
    font-size: 45px;">THỐNG KÊ SẢN PHẨM</h1>
</div>
<div class="render_account" style="display: flex; justify-content: center;">
    <table border="1">
        <tr>
            <th class="th_statistical">Mã Danh mục</th>
            <th class="th_statistical">TÊN DANH MỤC</th>
            <th class="th_statistical">TỔNG SẢN PHẨM</th>
            <th class="th_statistical">GIÁ NHỎ NHẤT</th>
            <th class="th_statistical">GIÁ CAO NHẤT</th>
            <th class="th_statistical">GIÁ TRUNG BÌNH</th>
        </tr>
        <tr>
            <?php
            foreach ($listStatistical as $thongke) {
                extract($thongke);
                echo '<tr>
                        <td class="td_statistical">' . $madm . '</td>
                        <td class="td_statistical">' . $tendm . '</td>
                        <td class="td_statistical">' . $countsp . '</td>
                        <td class="td_statistical">' . number_format($minPrice), 'đ' . '</td>
                        <td class="td_statistical">' . number_format($maxPrice), 'đ' . '</td>
                        <td class="td_statistical">' . number_format($avgPrice), 'đ' . '</td>
                    </tr>';
            }
            ?>

    </table>
</div>
<div style="margin-left: 34%;">
    <a href="index.php?act=Chart"> <input style="padding: 10px 20px;
    background: #000;
    color: #fff;
    border: none;
    border-radius: 5px;
    margin-top: 15px;
" type="button" value="XEM BIỀU ĐỒ"></a>
</div>
</form>