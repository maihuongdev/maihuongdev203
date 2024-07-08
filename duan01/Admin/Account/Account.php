<style>
    .th_acc {
        padding: 10px 20px;
    }
</style>
<h1 style="text-align: center; padding: 30px 0;">Danh sách tài khoản</h1>
<div class="render_account" style="display: flex; justify-content: center;">
<table border="1" style="text-align: center; position: relative;
    left: 60px;">
    <tr>
        <th class="th_acc"></th>
        <th class="th_acc">Email</th>
        <th class="th_acc">Name</th>
        <th class="th_acc">Username</th>
        <th class="th_acc">Password</th>
        <th class="th_acc">Phone</th>
        <th class="th_acc">Address</th>
        <th class="th_acc"></th>
    </tr>
    <?php
    foreach ($renderAccount as $account) {
        extract($account);
        $delAccount = 'index.php?act=delAccount&UserID=' . $UserID;
        $updateAcc = 'index.php?act=updateAcc&UserID=' . $UserID;
        echo '
                      <tr class="">
                      <td class="td_acc">' . $UserID . '</td>
                      <td class="td_acc">' . $Email . '</td>
                      <td class="td_acc">' . $name . '</td>
                      <td class="td_acc">' . $username . '</td>
                      <td class="td_acc">' . $password . '</td>
                      <td class="td_acc">' . $PhoneNumber . '</td>
                      <td class="td_acc"  style="max-width: 260px;">' . $Address . '</td>
                      <td class="td_acc">
                      <a href="' . $updateAcc . '"><input class="edit_category" type="button" name="" value="Sửa"></a>
                      <a href="' . $delAccount . '"><input onclick="return confirm(\'Bạn có muốn xóa không\')" class="del_category" type="button" name="" value="Xóa"></a>
                      </td>
                      </tr>
                        ';
    }
    ?>
</table>
</div>