<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Quicksand', sans-serif;
    }

    li {
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    img {
        max-width: 100%;
        display: block;
        margin: auto;
    }

    #order-product {
        margin-top: 50px;
    }

    .oder-logo {
        margin-bottom: 15px;
    }



    .title {
        display: flex;
        padding: 10px 10px;
        background-color: #f5f5f5;
    }

    .oder-title li {
        padding: 0 5px;
    }

    .li-content {
        font-size: 14px;
        font-style: italic;
    }

    .li-icon {
        font-size: 10px;
    }

    .oder-contact h2 {
        font-size: 18px;
        font-weight: 500;
        margin: 40px 0 20px 0;
    }

    .oder-input {
        margin-bottom: 15px;
    }

    .oder-input input {
        padding: 5px 10px;
        width: 100%;
        border: none;
        font-size: 14px;
        background-color: #fff;
        box-shadow: 0 0 0 1px #d9d9d9;
        border-radius: 4px;
        color: #333;
        font-weight: 500;
    }

    .oder-city select {
        width: 47%;
        padding: 5px 10px;
        border: none;
        font-size: 14px;
        background-color: #fff;
        box-shadow: 0 0 0 1px #d9d9d9;
        border-radius: 4px;
        color: #333;
        font-weight: 500;
    }

    .form_select {
        float: right;
    }

    .addrest textarea {
        width: 100%;
        padding: 5px 10px;
        border: none;
        font-size: 14px;
        background-color: #fff;
        box-shadow: 0 0 0 1px #d9d9d9;
        border-radius: 4px;
        color: #333;
        font-weight: 500;
    }

    .payment h2 {
        font-size: 18px;
        font-weight: 600;
        margin: 10px 0 20px 0;
    }

    .payment-title {
        border: 1px solid #d9d9d9;
        border-radius: 4px;
    }

    .payment-primary p {
        margin: 20px;
        font-size: 14px;
        font-weight: 500;
    }

    .payment-description {
        border: 1px solid #d9d9d9;
        border-radius: 4px;
    }

    .payment-description {
        font-size: 14px;
        font-weight: 600;
        padding: 20px 0 20px 0;
    }

    .payment-description p {
        margin: 0;
    }

    .exit-cart {
        margin-top: 15px;
        margin-bottom: 30px;
    }

    .exit-cart i {
        padding: 0 5px;
    }

    .exit-cart a {
        font-size: 14px;
        color: #338dbc;
    }


    .image {
        height: 100px;
        float: left;
    }

    .image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .products-description {
        margin-left: 75px;
    }


    .products-description-title {
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .product-delete {
        margin: 10px 0;
    }

    .product-delete i {
        cursor: pointer;
    }

    .product-delete span {
        float: right;
    }

    .quanity {
        margin: -5px;
        text-align: center;
        border: none;
        background-color: #d9d9d9;
    }

    .min {
        padding: 0 10px;
        border: none;
        background-color: #fff;
    }

    .price {
        font-size: 14px;
        font-weight: 500;
        padding-bottom: 10px;
    }

    .discount {
        margin-top: 46px;
        padding-bottom: 15px;
        border-bottom: 1px solid #ccc;
    }

    .discount input {
        padding: 7px 10px;
        border: none;
        font-size: 14px;
        background-color: #fff;
        box-shadow: 0 0 0 1px #d9d9d9;
        border-radius: 4px;
        color: #333;
        font-weight: 500;
    }

    .discount span {
        background-color: rgb(51, 141, 188);
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 4px;
    }

    .ship {
        padding: 20px 0;
        border-bottom: 1px solid #ccc;
    }

    .ship p {
        font-size: 14px;
        font-weight: 600;
        margin: 0;
    }

    .button-btn a {
        color: #fff;
        text-transform: uppercase;
    }

    .ship span {
        float: right;
        color: red;
    }

    .total {
        padding-top: 15px;
    }

    .total p {
        font-size: 14px;
        font-weight: 600;
        margin: 0;
    }

    .total span {
        float: right;
        color: red;
        font-size: 24px;
    }

    .note {
        border: 1px solid red;
        margin-top: 20px;
    }

    .note p {
        font-size: 14px;
        font-weight: 600;
        padding: 5px;
    }

    .completed {
        margin-top: 15px;
        float: right;
    }

    .button-btn {
        padding: 20px 15px;
        background-color: rgb(51, 141, 188);
        color: #fff;
        font-size: 15px;
        font-weight: 500;
        border: none;
        border-radius: 4px;
    }

    @media (max-width:992px) {
        .all {
            margin: 0;
        }
    }

    @media (max-width:768px) {
        .all {
            margin: 0;
        }
    }

    @media (max-width:576px) {
        .all {
            margin: 0;
        }
    }
</style>
<form action="index.php?act=Order" method="post">
    <div class="container mt-3">
        <div class="row">
            <?php
            if (isset($_SESSION['username'])) {
                extract($_SESSION['username']);
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $currentDateTimeVietnam = date('Y-m-d H:i:s');
                if (isset($_SESSION['cart'])) {

            ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="oder-contact">
                            <h2>Thông tin giao hàng</h2>
                            <form action="index.php?act=Order" method="POST">
                                <div class="oder-input">
                                    <input type="text" name="Email" placeholder="Email" value="<?= $Email ?>">
                                </div>
                                <div class="oder-input">
                                    <input type="text" name="name" placeholder="Họ và tên" value="<?= $name ?>">
                                </div>
                                <div class="oder-input">
                                    <input type="number" name="PhoneNumber" placeholder="Số điện thoại" value="<?= $PhoneNumber ?>">
                                </div>
                                <div class="oder-input">
                                    <input type="text" name="Address" placeholder="Số điện thoại" value="<?= $Address ?>">
                                </div>
                                <div class="oder-input">
                                    <?php foreach ($_SESSION['cart'] as $cart) : ?>
                                        <input type="hidden" name="ProductID" value="<?= $cart[0] ?>">
                                        <input type="hidden" name="quantity" value="<?= $cart[4] ?>">
                                    <?php endforeach; ?>
                                    <input type="hidden" name="UserID" value="<?= $UserID ?>">
                                    <input type="hidden" name="StatusID" value="9">
                                    <input type="hidden" name="OrderDate" value="<?php echo $currentDateTimeVietnam; ?> ">
                                </div>
                            </form>
                        </div>
                        <div class="payment">
                            <h2>Phương thức thanh toán</h2>
                            <?php foreach ($renderPaymentMethod as $paymentMethod) : extract($paymentMethod) ?>
                                <p><input type="radio" name="PaymentMethodID" checked value="<?= $PaymentMethodID ?>"><?= $PaymentMethodName ?></p>
                            <?php endforeach; ?>

                        </div>
                        <div class="payment-description text-center">
                            <span>
                                <p>- Free ship cho đơn hàng >1 triệu</p>
                            </span>
                            <span>
                                <p>- Kiểm hàng thoải mái trước khi thanh toán</p>
                            </span>
                            <span>
                                <p>- Hỗ trợ đổi hàng trong vòng 3 ngày</p>
                            </span>
                        </div>
                        <div class="exit-cart">
                            <a href="index.php?act=Cart"><i class="fas fa-angle-left"></i>Giỏ hàng</a>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
            <div class="col-lg-6 col-md-12 col-sm-12" style="margin-top: 70px;">

                <?php
                $total = 0;
                $i = 0;
                foreach ($_SESSION['cart'] as $cart) {
                    $subTotal = $cart[3] * $cart[4];
                    $total += $subTotal;
                    echo '
                        <div class="all" style="margin-bottom: 50px;">
                            <div class="image">
                                <img src="View/Img/' . $cart[2] . '" alt="">
                            </div>
                            <div class="products-description" style="margin-left: 140px">
                                <span class="products-description-title">
                                ' . $cart[1] . '
                                </span>
                                <div class="product-delete">
                                    <span><input type="number" class="quanity" max="10" min="1" value="' . $cart[4] . '"></span>
                                </div>
                                <div class="price">
                                    <span>' . number_format($cart[3]), 'đ' . '</span>
                                </div>
                            </div>
                        </div>
    ';
                    $i += 1;
                }
                echo '
            <div class="ship">
                                <p>Phí vận chuyển
                                    <span>0đ</span>
                                </p>
                            </div>
            <div class="total">
            <p>Tổng cộng
                <span>' . number_format($total), "đ" . '</span>
            </p>
        </div>
        <div class="note">
            <p>KHL sẽ xác nhận đơn hàng bằng cách gọi điện thoại. Bạn vui lòng để ý điện thoại
                khi đặt hàng thành công và chờ nhận hàng. Cảm ơn bạn !</p>
        </div>
        <div class="completed">
        <input class="button-btn" type="submit" name="order" value="Hoàn tất đơn hàng">
        </div>
            ';
                ?>
            </div>
        </div>
    </div>
</form>