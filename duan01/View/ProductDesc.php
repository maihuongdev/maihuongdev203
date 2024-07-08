<style>
    a {
        color: #000;
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
</style>
<div class="container">
    <div class="row">
        <?php
        $linkProductDesc = "index.php?act=ProductDesc";
        $linkProductAsc = "index.php?act=ProductAsc";
        ?>
        <div class="col-lg-12" style="text-align: right;">
            <select style="width: 250px;
            padding: 10px 5px;
            border: 1px solid #ccc;
            border-radius: 7px;
            margin-bottom: 50px;" onchange="window.location.href=this.value">
                <option value="">Xắp xếp theo</option>
                <option value="<?= $linkProductDesc ?>&sort=newest">Mới nhất</option>
                <option value="<?= $linkProductAsc ?>&sort=oldest">Cũ nhất</option>
            </select>
        </div>
    </div>
    <div class="row">
        <?php foreach ($selectProductDesc as $products) {
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