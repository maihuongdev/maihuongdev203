<style>
    a {
        color: #000000;
    }

    .product-badge li {
        padding: 0 15px;
    }

    #countdown span {
        font-weight: 600;
    }

    .product-hover-action li {
        height: 50px;
        width: 86px;
        line-height: 50px;
        font-size: 14px;
        text-align: center;
        float: left;
        margin-right: 0px;
        margin-top: 0;
        list-style: none;
        border-right: 1px solid var(--border-color-7);
    }

    .input_add {
        background-color: #666666;
        color: #fff;
        border: none;
        padding: 0 25px;
    }

    .input_add:hover {
        background-color: #e55472;
    }

    img {
        display: block;
    }

    .img-display {
        overflow: hidden;
    }

    .img-item img {
        width: 125px;
    }

    .img-showcase {
        display: flex;
        width: 100%;
        transition: all 0.5s ease;
    }

    .img-showcase img {
        min-width: 100%;
        height: 500px;
        object-fit: cover;
    }

    .img-select {
        display: flex;
    }

    .img-item {
        margin: 0.3rem;
    }

    .img-item:nth-child(1),
    .img-item:nth-child(2),
    .img-item:nth-child(3) {
        margin-right: 0;
    }

    .img-item:hover {
        opacity: 0.8;
    }

    .product-content {
        padding: 2rem 1rem;
    }

    .product-title {
        font-size: 3rem;
        text-transform: capitalize;
        font-weight: 700;
        position: relative;
        color: #12263a;
        margin: 1rem 0;
    }

    .product-link {
        text-decoration: none;
        text-transform: uppercase;
        font-weight: 400;
        font-size: 0.9rem;
        display: inline-block;
        margin-bottom: 0.5rem;
        background: #256eff;
        color: #fff;
        padding: 0 0.3rem;
        transition: all 0.5s ease;
    }

    .product-link:hover {
        opacity: 0.9;
    }

    .product-rating {
        color: #ffc107;
    }

    .product-rating span {
        font-weight: 600;
        color: #252525;
    }

    .product-price {
        margin: 1rem 0;
        font-size: 1rem;
        font-weight: 700;
    }

    .product-price span {
        font-weight: 400;
    }

    .last-price span {
        color: #f64749;
        text-decoration: line-through;
    }

    .new-price span {
        color: #256eff;
    }

    .product-detail h2 {
        text-transform: capitalize;
        color: #12263a;
        padding-bottom: 0.6rem;
    }

    .product-detail p {
        font-size: 0.9rem;
        padding: 0.3rem;
        opacity: 0.8;
    }

    .product-detail ul {
        margin: 1rem 0;
        font-size: 0.9rem;
    }

    .product-detail ul li {
        margin: 0;
        list-style: none;
        background: url(shoes_images/checked.png) left center no-repeat;
        background-size: 18px;
        padding-left: 1.7rem;
        margin: 0.4rem 0;
        font-weight: 600;
        opacity: 0.9;
    }

    .product-detail ul li span {
        font-weight: 400;
    }

    .purchase-info {
        margin: 1.5rem 0;
    }

    .purchase-info input,
    .purchase-info .btn {
        border: 1.5px solid #ddd;
        border-radius: 25px;
        text-align: center;
        padding: 0.45rem 0.8rem;
        outline: 0;
        margin-right: 0.2rem;
        margin-bottom: 1rem;
    }

    .purchase-info input {
        width: 60px;
    }

    .purchase-info .btn {
        cursor: pointer;
        color: #fff;
    }

    .purchase-info .btn:first-of-type {
        background: #256eff;
    }

    .purchase-info .btn:last-of-type {
        background: #f64749;
    }

    .purchase-info .btn:hover {
        opacity: 0.9;
    }

    .social-links {
        display: flex;
        align-items: center;
    }

    .social-links a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        color: #000;
        border: 1px solid #000;
        margin: 0 0.2rem;
        border-radius: 50%;
        text-decoration: none;
        font-size: 0.8rem;
        transition: all 0.5s ease;
    }

    .social-links a:hover {
        background: #000;
        border-color: transparent;
        color: #fff;
    }

    @media screen and (min-width: 992px) {
        .card {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 1.5rem;
        }

        .card-wrapper {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-imgs {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .product-content {
            padding-top: 0;
        }
    }

    .qtybutton {
        cursor: pointer;
        background-color: #dbe2e8;
        border: none;
        padding-top: 2px;
    }

    .input_submit {
        display: flex;
    }

    .input_submit input {
        background-color: #e55472;
        color: #fff;
        border: 1px solid #fff;
    }

    .quantity {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .cart-plus-minus {
        width: 150px;
    }

    .share i {
        font-size: 25px;
        padding: 0 10px;
    }

    .share span {
        margin-top: 5px;
    }

    .comment-ipnut {
        position: relative;
    }

    .comment-ipnut i {
        padding: 10px;
    }

    #comment-input-type {
        border: 1px solid #ccc6c6;
        padding: 15px 20px;
        border-radius: 5px;
        width: 100%;
        font-size: 13px;
        outline: none;
    }

    .btn_submit {
        padding: 0 20px;
        border-radius: 5px;
        background-color: #fff;
        border: none;
        position: absolute;
        right: 10px;
        top: 4px;
        font-size: 14px;
        margin-top: 12px;
    }

    .comment_edit {
        display: flex;
        align-items: center;
        gap: 30px;
        margin-top: 10px;
    }

    .comment_render p {
        margin-bottom: 0;
        font-size: 14px;
        padding-left: 30px;

    }

    .list_comment {
        list-style: none;
        background: #000;
        color: #fff;
        border-radius: 10px;
        position: absolute;
        width: 110px;
        display: none;
        left: -5px;
        z-index: 1;
        padding: 10px 0;
    }

    .list_comment li:hover {
        background-color: #5e5959;
    }

    .list_comment a {
        padding: 0 10px;
        text-decoration: none;
        color: #fff;
    }

    .ltn__product-item {
        position: relative;
        margin-bottom: 50px;
    }

    .product-img {
        position: relative;
        overflow: hidden;
    }

    .product-img a {
        display: block;
    }

    .product-img img {
        position: relative;
        -webkit-transition: all 3.5s ease 0s;
        -o-transition: all 3.5s ease 0s;
        transition: all 3.5s ease 0s;
        z-index: -1;
    }

    .ltn__product-item:hover .product-img::before {
        opacity: 0.4;
        visibility: visible;
    }

    .product-title {
        font-size: 14px;
        margin-bottom: 5px;
        text-transform: uppercase;
        font-weight: 400;
    }
</style>
<?php extract($productdetail); ?>
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 style="margin-left: 25px;" class="ltn__page-title">Sản Phẩm</h1>
                    <ul style="display: flex;
                     justify-content: center; align-items: center; list-style: none; gap: 10px;">
                        <li><a href="index.php">Home</a></li>
                        <li style="margin-top: 21px;"><ion-icon name="chevron-forward-outline"></ion-icon></li>
                        <li><?= $ProductName ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-6">
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <img src="View/Img/<?= $ProductImage ?>" alt="shoe image">
                        <img src="View/Img/<?= $ProductSlide ?>" alt="shoe image">
                    </div>
                </div>
                <div class="img-select">
                    <div class="img-item">
                        <a href="#" data-id="1">
                            <img src="View/Img/<?= $ProductImage ?>" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="2">
                            <img src="View/Img/<?= $ProductSlide ?>" alt="shoe image">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top: 60px;">
            <div class="description-product">
                <h2 class="title-product"><?= $ProductName ?></h2>
                <p class="product-code"><?= $Description ?></b></p>
                <p class="price" style="font-weight: bold;">
                <p>Giá tiền: <span style="color: #e55472; font-weight: 300; font-size: 24px;"> <?= number_format($Price), 0, 'đ' ?></span>
                    <del style="color: #e55472;
    font-size: 21px;
    font-weight: 100;
    margin-left: 23px;"><?= number_format($OldPrice), 0, 'đ' ?></del>
                </p>


                </p>
                <div>
                </div>
                <form action="index.php?act=addToCart" method="post">
                    <div class="quantity">
                        <td class="cart-product-quantity">
                            <label class="laber-form mt-2" for="color">Số lượng : </label>
                            <div class="cart-plus-minus">
                                <input style="background-color: #dbe2e8;     border-left: 1px solid #fff;
    border-right: 1px solid #fff;" type="text" value="1" name="quantity" class="cart-plus-minus-box">
                            </div>
                        </td>
                    </div>
                    <div class="actionLoops visible-lg mb-2">
                        <input type="hidden" name="ProductID" value="<?= $ProductID ?>">
                        <input type="hidden" name="ProductName" value="<?= $ProductName ?>">
                        <input type="hidden" name="Price" value="<?= $Price ?>">
                        <input type="hidden" name="ProductImage" value="<?= $ProductImage ?>">
                        <div class="input_submit">
                            <input type="submit" style="font-size: 15px; text-transform: uppercase; padding: 9px 20px;" class="styleBtnBuy" name="addToCart" value="Thêm vào giỏ hàng">
                            <input type="submit" style="font-size: 15px; text-transform: uppercase; padding: 9px 65px;" class="styleBtnBuy" name="addToCart" value="Mua ngay">
                        </div>
                    </div>
                </form>
                <div class="share" style="margin-top: 15px;">
                    Share:
                    <span>
                        <i class="fa-brands fa-facebook"></i>
                    </span>
                    <span><i class="fa-brands fa-twitter"></i></span>
                    <span><i class="fa-brands fa-pinterest"></i></span>
                    <span><i class="fa-brands fa-instagram"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="comment">
    <?php
    if (isset($_SESSION['username'])) {
    ?>
        <div class="container">
            <div class="row">
                <div class="box_title">BÌNH LUẬN</div>
                <form action="index.php?act=ProductDetail&idpro=<?= $ProductID ?>" method="POST">
                    <div class="comment-ipnut">
                        <input type="hidden" name="ProductID" value="<?= $ProductID ?>">
                        <input name="CommentText" id="comment-input-type" placeholder="Nhập comment">
                        <div class="notification__error" style="color: red; font-size: 13px; margin-bottom: 20px;">
                            <?= $errors['CommentText'] ?? '' ?>
                        </div>
                        <input type="submit" class="btn_submit" name="guibinhluan" value="Gửi bình luận">
                    </div>
                </form>
                <div class="render__comment" style="overflow-y: scroll; height: 300px;">
                    <?php foreach ($comment as $value) : ?>
                        <p style="font-size: 14px; margin-bottom: 0;"><?php echo $value['username'] ?></p>
                        <div class="comment">
                            <p style="font-size: 15px; margin-bottom: 0; max-width: 1170px; word-wrap: break-word;"><?php echo $value['CommentText'] ?></p>
                            <div class="comment_time">
                                <p style="font-size: 12px;"><?php echo date("d/m/Y", strtotime($value['Timestamp'])) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    <?php } else { ?>
        <div class="container">
            <div class="row">
                <div class="render__comment" style="overflow-y: scroll; height: 300px;">
                    <?php foreach ($comment as $value) : ?>
                        <p style="font-size: 14px; margin-bottom: 0;"><?php echo $value['username'] ?></p>
                        <div class="comment">
                            <p style="font-size: 15px; margin-bottom: 0; max-width: 1170px; word-wrap: break-word;"><?php echo $value['CommentText'] ?></p>
                            <div class="comment_time">
                                <p style="font-size: 12px;"><?php echo date("d/m/Y", strtotime($value['Timestamp'])) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php } ?>

</div>

<div class="ltn__blog-area card-slider pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">top products</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($renderProductRelated as $products) {
                extract($products);
                $linkProduct = "index.php?act=ProductDetail&idpro=" . $ProductID;
                echo '
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item text-center">
                        <div class="product-img">
                            <a href="' . $linkProduct . '"><img src="View/Img/' . $ProductImage . '" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="badge-2">' . $ProductStatus . '</li>
                                </ul>
                            </div>
                            <div class="product-hover-action product-hover-action-2">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </li>
                                    <form action="index.php?act=addToCart" method="post">
                                    <input type="hidden" name="ProductID" value="' . $ProductID . '">
                                    <input type="hidden" name="ProductName" value="' . $ProductName . '">
                                    <input type="hidden" name="Price" value="' . $Price . '">
                                    <input type="hidden" name="ProductImage" value="' . $ProductImage . '">
                                    <input type="hidden" name="quantity" value="' . $quantity . '">
                                    <li class="add-to-cart">
                                        <input type="submit" style=  background: #666666;
                                        border: none;
                                        color: #fff;" name="addToCart" class="input_add" value="Add to Cart">
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="fa-solid fa-shuffle"></i>
                                    </a>
                                </li>
                                   </form>
                                 
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="' . $linkProduct . '">' . $ProductName . '</a></h2>
                            <div class="product-price">
                                <span>' . number_format($Price) . 'đ</span>';

                if ($OldPrice != 0) {
                    echo '<del>' . number_format($OldPrice) . 'đ</del>';
                }

                echo '</div>
                        </div>
                    </div>
                </div>';
            } ?>
        </div>
    </div>

</div>

<script>
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage();
        });
    });

    function slideImage() {
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

        document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);

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