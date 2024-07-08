<div id="render_comment" style="display: flex; justify-content: center;">
    <div class="comment_table">
        <h1 style="text-align: center; padding: 30px 0;">Danh sách bình luận</h1>
        <table border="1">
            <tr>
                <th class="th_comment"></th>
                <th class="th_comment">Tên Tài Khoản</th>
                <th class="th_comment">Tên Sản Phẩm</th>
                <th class="th_comment">Nội Dung</th>
                <th class="th_comment">Thời gian</th>
                <th class="th_comment"></th>
            </tr>

            <?php
            foreach ($listComment as $comment) {
                extract($comment);
                $delComment = 'index.php?act=delComment&CommentID=' . $CommentID;
                echo '
       <tr>
        <td class="td_comment" style="text-align: center;">' . $CommentID . '</td>
        <td class="td_comment" style="text-align: center;">' . $username . '</td>
        <td class="td_comment" style="text-align: center;">' . $ProductName . '</td>
        <td class="td_comment" style= "max-width: 550px;
        word-wrap: break-word;">' . $CommentText . '</td>
        <td class="td_comment" style="text-align: center;">' .  date("d/m/Y", strtotime($Timestamp)) . '</td>
        <td class="td_comment">
        <a href="' . $delComment . '"><input onclick="return confirm(\'Bạn có muốn xóa không\')" class="del_category" type="button" value="Xóa"></a>
        </td>
       </tr>
       ';
            }
            ?>
        </table>
    </div>
</div>