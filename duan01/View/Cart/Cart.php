<style>
    a {
        color: #000000;
    }

    .apply:hover {
        background-color: #e55472;
    }

    .dec,
    .inc {
        cursor: pointer;
    }

    .theme-btn-1 {
        background-color: var(--ltn__secondary-color);
        color: var(--white);
        text-align: center;
        padding: 10px;
        font-size: 20px;
        font-weight: 400;
    }

    .theme-btn-1:hover {
        background-color: #fff;
        color: #000;
        border: 1px solid #000;
    }

    a:hover {
        color: #000;
    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Quicksand', sans-serif;
    }


    header {
        width: 100%;
    }

    img {
        max-width: 100%;
        display: block;
        margin: auto;
    }

    li {
        list-style: none;
    }

    a {
        text-decoration: none;
        cursor: pointer;
        color: #252a2b;
    }

    #blog {
        margin-top: 30px;
    }

    .blog-content {
        background-color: #f5f5f5;
        box-shadow: inset 0 5px 7px 1px #e9e9e9;
    }

    .title {
        display: flex;
    }

    .title li {
        padding: 10px 5px;
        font-size: 13px;
    }

    .heading-page {
        margin: 0 0 15px;
    }

    .header-pagecart h2 {
        display: inline-block;
        margin: 0;
        font-size: 25px;
        text-transform: uppercase;
        font-weight: 700;
    }

    .nav-link {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 10px;
        border: none;
    }

    #products {
        margin: 30px 0;

    }

    .tab-content {
        padding-bottom: 15px;
        border-bottom: 1px solid #e9ebee;
    }

    .nav-tabs button {
        text-transform: uppercase;
    }

    .nav-link.active {
        border: none;
    }

    .nav-tabs {
        margin-bottom: 10px;
        border: none;
        color: #495057;

    }

    #profile-tab {
        margin-left: 50px;
        color: #495057;
        text-transform: uppercase;
        font-weight: 500;
    }

    .header-pagecart span {
        font-size: 14px;
    }

    .image-products {
        width: 144px;
        height: 271px;
    }

    .image-products img {
        width: 100%;
        object-fit: cover;
    }

    .name-products {
        font-size: 15px;
        font-weight: 400;
        display: grid;
        color: #000;
        margin-bottom: 10px;
        text-decoration: none;
    }

    .remove__item {
        position: absolute;
        border: 1px solid #fff;
        background: #fff;
        font-size: 13px;
        padding: 7px 15px;
        background: red;
        color: #Fff;
    }

    .product-delete input {
        width: 60px;
        text-align: center;
        padding: 4px;
    }

    .edit {
        position: absolute;
        border: 1px solid #000;
        background: #fff;
        font-size: 13px;
        padding: 7px 15px;
        background: green;
        color: #Fff;
    }

    .price {
        font-size: 14px;
    }

    .boxRightCart {
        float: right;
        width: 500px;
        background: #f2f2f2;
        padding: 15px;
    }

    .expanded-message {
        margin-top: 20px;
    }

    .btn a {
        color: #fff;
    }

    .titleInfoCart {
        margin: 0 0 10px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 14px;
    }

    .total_price {
        float: right;
    }

    .titleOrder {
        font-size: 14px;
    }

    .rim {
        border-top: 1px solid #d0d0d0;
        margin-bottom: 10px;
    }

    .note-subtotal {
        font-size: 13px;
        font-style: italic;
    }

    .btn {
        padding: 10px 30px;
        width: 100%;
        background-color: #000;
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        font-weight: 700;
        margin: 10px 0;
    }

    .heading {
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase;
        margin: 0 30px;
    }

    .link-continue {
        margin: 10px 0;
        padding: 10px 30px;
        position: relative;
        width: 100%;
        white-space: nowrap;
        float: left;
        color: #000;
        text-align: center;
        text-transform: uppercase;
        font-weight: 700;
        border: 1px solid #000;
        background: #fff;
        border-bottom: 2px solid #000;
    }

    .row h2 {
        font-size: 28px;
        font-weight: 500;
        text-transform: uppercase;
        margin-top: 25px;
    }

    .mensshirt-image {
        overflow: hidden;
    }

    .mensshirt-image img {
        transition: all 0.3s ease-in-out;
        object-fit: cover;
    }

    .mensshirt-image:hover img {
        transform: scale(1.1);
    }

    .description-price-content {
        text-align: center;
        margin-top: 5px;
    }

    .pro-name {
        font-size: 13px;
        font-weight: 400;
        line-height: 20px;
    }

    .box-pro-prices {
        color: #000;
        font-size: 14px;
        font-weight: 700;
        padding-bottom: 10px;
    }

    .mensshirt-list {
        margin: 0 15px;
    }

    .box:hover .actionLoop {
        display: block;
    }

    .actionLoop a:hover {
        color: #fff;
    }

    .actionLoop {
        background-color: #000;
        width: 100%;
        display: none;
        position: absolute;
        left: 0;
    }

    .quickView {
        color: #fff;
        border-right: 1px solid #fff;
        width: 50%;
        text-align: center;
        padding: 7px 10px;
        background-color: #000;
        font-weight: 300;
        font-size: 13px;
    }

    .styleBtnBuy {
        color: #fff;
        float: left;
        text-align: center;
        width: 50%;
        padding: 10px 10px;
        background-color: #000;
        font-weight: 300;
        font-size: 13px;
    }

    #product h2 {
        font-size: 28px;
        font-weight: 500;
        text-transform: uppercase;
        border-bottom: 1px solid #ececec;
        padding-bottom: 10px;
        margin-top: 30px;
    }

    .boxRightCart {
        margin-top: 25px;
    }

    .cart-buttons button {
        font-size: 14px;
        font-weight: 700;
    }

    .cart-buttons a {
        font-size: 14px;
        font-weight: 700;
        border-radius: 5px;
    }

    .btn {
        background-color: #000;
        color: #fff;
        text-decoration: none;
    }

    .box:hover {
        box-shadow: 0 0 2px 0px #ccc;
    }

    .quantity {
        display: inline-flex;
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
    }

    .quantity-button {
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
        border: none;
        cursor: pointer;
        padding: 5px 10px;
        transition: background-color 0.2s;
    }

    .quantity-input {
        border: none;
        text-align: center;
        font-size: 16px;
        width: 40px;
        padding: 5px;
        outline: none;
        padding: 2px;
    }

    /* Màu nền nút số lượng khi rê chuột */
    .quantity-button:hover {
        background-color: #0056b3;
    }

    .box {
        margin-bottom: 40px;
    }

    .box {
        margin-bottom: 15px;
        padding: 20px;
        position: relative;
    }

    .card-content h4 {
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 500;
    }

    .hotline {
        font-size: 19px;
        margin-left: 10px;
    }

    .icon-footer {
        float: left;
        width: 25px;
        height: 25px;
        background: #e52c25;
        text-align: center;
        color: #fff;
        line-height: 25px;
        border-radius: 100%;
    }

    .info-content p {
        font-size: 11px;
        margin-bottom: 0;
    }

    .form-input {
        display: flex;
    }


    .info-input input {
        border: solid 1px #a7a7a7;
        padding: 5px 5px;
        width: 127px;
        font-size: 15px;
        margin-bottom: 10px;
        height: 36px;
    }

    .info-input button {
        background: #000;
        border: none;
        color: #fff;
        padding: 5px;
        height: 36px;
    }

    .info-icon {
        margin-top: -6px;
    }

    .info-icon span {
        font-size: 35px;
        padding: 0 5px;
    }

    #footer {
        background-color: #f1f1f1;
        margin-top: 37px;
    }

    #footer h4 {
        font-size: 14px;
        font-weight: 500;
        padding: 20px 0;
        text-transform: uppercase;
        font-family: 'Open Sans', sans-serif;
        ;
    }

    #footer li {
        font-size: 14px;
        margin-bottom: 15px;
    }

    #footer strong {
        font-size: 14px;
        font-weight: 600;
    }

    #footer p {
        font-size: 13px;
        margin-bottom: 11px;
        padding-bottom: 0;
        margin-top: 5px;
    }

    @media (max-width: 992px) {
        .logo {
            width: 149px;
            height: 39px;
        }

        .box {
            padding: 0;
        }

        .min {
            padding: 0;
        }

        #nav-header-list a {
            display: none;
        }

        .name-products {
            font-size: 12px;
        }

        .search input {
            display: none;
        }

        .icon-header {
            display: block;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cart-buttons button {
            font-size: 10px;
        }

        .search {
            width: 149px;
            height: 37px;
        }

        .search input {
            padding: 8px 0 8px 15px;
            width: 100%;
            height: 100%;
        }

        .menu-list ul {
            margin-top: 10px;
        }

        .menu-list li {
            font-size: 12px;
        }

        .pro-name {
            font-size: 13px;
        }

        .box:hover .actionLoop {
            display: none;
        }

        .box:hover {
            box-shadow: none;
        }

        .box {
            margin-bottom: 20px;
        }

    }

    @media (max-width: 768px) {
        #nav {
            display: none;
        }

        .box {
            padding: 0;
        }

        .info-input input {
            width: 83px;
        }

        .min {
            padding: 0;
        }

        .btn {
            font-size: 12px;
        }

        .lookbook-image img {
            width: 100%;
            object-fit: cover;
        }

        .header-account {
            display: none;
        }

        .nav-header-list {
            display: none;
        }

        .search input {
            display: none;
        }

        .icon-header {
            display: block;
        }

        .logo {
            width: 105px;
            height: 28px;
            margin: auto;
            margin-top: 10px;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #nav-header-list a {
            display: none;
        }

        .search {
            display: none;
        }

        .icon-header {
            display: block;

        }

        .box {
            margin-bottom: -10px;
        }

        .description-content h2 {
            margin: 15px 35px;
            font-weight: 500;
            font-size: 20px;
        }

        .form-input input {
            height: 36px;
        }

        #footer p {
            font-size: 14px;
        }

        .box:hover {
            box-shadow: none;
        }
    }

    @media (max-width:576px) {
        #header {
            padding: 0 15px;
        }

        .info-content {
            margin-bottom: 15px;
        }

        .count-cart {
            display: inline-block;
        }

        .box {
            padding: 0;
        }

        .cart-buttons button {
            font-size: 10px;
        }

        .min {
            padding: 0;
        }

        .name-products {
            font-size: 12px;
        }

        .mensshirt-list li:nth-child(2) {
            display: none;
        }

        .nav-link {
            padding: 0;
        }

        .icon-header span {
            font-size: 15px;
            padding: 0 1px;
        }

        #nav-header-list a {
            display: none;
        }

        .header-account {
            display: none;
        }

        .search input {
            display: none;
        }

        .icon-header {
            display: block;
        }

        .link {
            display: none;
        }


        .mensshirt-list h2 {
            font-size: 18px;
            margin: 0 7px 0 -18px;
        }

        .description-content h2 {
            font-size: 18px;
            font-weight: 700;
            margin: 15px 10px;
        }

        .info-input {
            margin-bottom: 10px;
        }

        .info-content {
            margin-bottom: 15px;
        }

        .form-input input {
            flex: 1;
        }
    }

    @media (max-width:1140px) {
        .box:hover .actionLoop {
            display: none;
            box-shadow: none;
        }

        .box {
            padding: 0;
        }

        .box {
            margin-bottom: 0px;
        }

        .pro-name {
            font-size: 13px;
        }

        .lookbook-image img {
            width: 100%;
            object-fit: cover;
        }

        .lookbook-content {
            font-size: 17px;
            font-weight: 500;
        }
    }
</style>
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 style="margin-left: 25px;" class="ltn__page-title">Giỏ Hàng</h1>
                    <ul style="display: flex;
                     justify-content: center; align-items: center; list-style: none; gap: 10px;">
                        <li><a href="index.php">Home</a></li>
                        <li style="margin-top: 21px;"><ion-icon name="chevron-forward-outline"></ion-icon></li>
                        <li>Giỏ Hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
        $totalCart = $_SESSION['cart'];
        $productNumber = count($totalCart);
        echo '
            <div class="header-pagecart mb-5">
                    <h2>Giỏ hàng của bạn</h2>
                    <span class="count-cart">(Có <b>' . $productNumber . '</b> sản phẩm trong giỏ hàng)</span>
                </div>
            ';
        ?>
        <?php
        $total = 0;
        $i = 0;
        foreach ($_SESSION['cart'] as $cart) {
            $subTotal = $cart[3] * $cart[4];
            $total += $subTotal;
            echo '
            <div class="liton__shoping-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping-cart-inner">
                            <div class="shoping-cart-table table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="cart-product-remove"><a class="remove" href="index.php?act=del&idcart=' . $i . '"><input onclick="return confirm(\'Bạn có muốn xóa không\')" style="background: #fff;
                                            border: none;
                                            font-size: 20px;" type="button" value="x"></a></td>
                                            <td class="cart-product-image">
                                                <img src="View/Img/' . $cart[2] . '" alt="#">
                                            </td>
                                            <td class="" style="width: 310px;">
                                                <h4>' . $cart[1] . '</a></h4>
                                            </td>
                                            <td class="cart-product-price">' . number_format($cart[3]), 'đ' . '</td>
                                            <td class="cart-product-quantity">
                                            <form action="index.php?act=editCart" method="post">
                                            <input type="hidden" name="idcart" value="<?php echo $i; ?>">
                                            <div class="product-delete" style="margin-top: 10px;">
                                            <input type="number" style="border: 1px solid #ebebeb;" name="quantity" value="' . $cart[4] . '" min="1">
                                            <button style="padding: 15px;
                                            border: none;" class="edit" type="submit">Sửa</button>
                                            </div>
                                            </form>
                                            </td>
                                            <td class="cart-product-subtotal">' . number_format($subTotal), 'đ' . '</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
            $i += 1;
        }
        echo '
        <div class="container">
        <div class="boxRightCart mr-4">
        <div class="titleInfoCart">Tóm tắt Đơn hàng</div>
        <div class="summary-subtotal">
            <p class="order-infor">
                <span class="titleOrder">Chưa bao gồm phí vận chuyển</span>
            </p>
            <p class="boldPrice">
                <span class="titleOrder">
                    <b>Tổng tiền:</b>
                </span>
                <span class="total_price">
                    <b style="font-weight: 700;">' . number_format($total), "đ" . '</b>
                </span>
            </p>
        </div>
        <div class="rim"></div>
        <div class="note-subtotal">
            <i>Bạn có thể nhập mã giảm giá ở trang thanh toán</i>
        </div>
        <div class="cart-buttons mt-2">
        <a href="index.php?act=Order"><input type="submit" style= " width: 100%;
        padding: 12px 0;
        text-transform: uppercase;
        font-weight: 500;
        background: #e55472;
        color: #fff;
        margin-top: 10px;
        border: none;
        border-radius: 5px;" value="Tiến Hành đặt hàng"></a>
        </div>
    </div>
</div>
        </div>
';
        ?>
    </div>
</div>

<div class="ltn__brand-logo-area  ltn__brand-logo-1 section-bg-1 pt-35 pb-35 plr--5">
    <div class="container">
        <div class="row ltn__brand-logo-active">
            <div class="col-lg-2">
                <div class="ltn__brand-logo-item">
                    <img src="View/Img/Banner_Contact.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ltn__brand-logo-item">
                    <img src="View/Img/Banner_Contact02.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ltn__brand-logo-item">
                    <img src="View/Img/Banner_Contact03.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ltn__brand-logo-item">
                    <img src="View/Img/Banner_Contact04.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ltn__brand-logo-item">
                    <img src="View/Img/Banner_Contact05.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ltn__brand-logo-item">
                    <img src="View/Img/Banner_Contact06.png" alt="Brand Logo">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
    $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });
</script>