<?php
if (is_array($orders)) {
    extract($orders);
}

?>

<style>
    .form_group {
        margin-bottom: 25px;
    }

    .form_group-label {
        margin-bottom: 6px;
    }

    .form_group input {
        width: 65%;
        border: 1px solid #ccc;
        outline: none;
        padding: 7px;
        border-radius: 5px;
    }

    .form_group-submit {
        margin-top: 20px;
        text-align: center;
        margin-bottom: 50px;
    }

    .form_group-submit input {
        padding: 10px 30px;
        border: none;
        background: green;
        color: #fff;
        font-size: 14px;
        border-radius: 5px;
        cursor: pointer;
    }

    select {
        padding: 7px 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
        width: 42%;
        font-size: 13px;
        display: flex;
        margin: 0 auto;
    }

    option {
        padding: 8px;
    }

    .add_title {
        text-align: center;
        margin-top: 30px;
        margin-bottom: 50px;
    }
</style>

<h1 class="add_title">Sửa Thông Tin</h1>
<div class="add_category">
    <form action="index.php?act=editOrder" method="POST" enctype="multipart/form-data">
        <select id="status" name="PaymentMethodID">
            <?php
            foreach ($renderPaymentMethod as $dm) {
                if ($orders['PaymentMethodID'] == $dm['PaymentMethodID']) {
                    echo '<option value="' . $dm['PaymentMethodID'] . '" selected>' . $dm['PaymentMethodName'] . '</option>';
                } else {
                    echo '<option value="' . $dm['PaymentMethodID'] . '">' . $dm['PaymentMethodName'] . '</option>';
                }
            }
            ?>
        </select>
        <div class="form_group-submit">
            <input type="hidden" name="OrderID" value="<?php if (isset($OrderID) && ($OrderID > 0)) echo $OrderID ?>">
            <input type="submit" value="Sửa" name="editOrder">
    </form>
</div>