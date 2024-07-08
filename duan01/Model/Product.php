<?php
function renderTopProduct()
{
    $sql = "SELECT * FROM products limit 8";
    $renderTopProduct = pdo_query($sql);
    return $renderTopProduct;
}

function displayPageNumbers($renderProduct, $quantityProduct, $currenPage)
{
    $totalProduct = count($renderProduct);
    $numberPage = ceil($totalProduct / $quantityProduct);
    $htmlPage = '';
    for ($i = 1; $i <= $numberPage; $i++) {
        $isActive = ($i == $currenPage) ? 'active_page' . $i : '';
        $htmlPage .= '<a class="' . $isActive . '" href="index.php?act=Product&page=' . $i . '">' . $i . '</a>';
    }
    return $htmlPage;
}

function getAllProducts()
{
    $sql = 'SELECT * FROM products order by ProductID desc';
    return pdo_query($sql);
}

function renderProduct($page, $quantityProduct)
{
    $sql = "SELECT * FROM products WHERE 1";
    if (empty($page) || $page == 0) {
        $page = 1;
    }

    $start = ($page - 1) * $quantityProduct;
    $sql .= " LIMIT " . $start . "," . $quantityProduct;
    $renderProduct = pdo_query($sql);
    return $renderProduct;
}

function selectProductDesc()
{
    $sql = "SELECT * FROM products order by ProductID  desc";
    $selectProductDesc = pdo_query($sql);
    return $selectProductDesc;
}

function selectProductAsc()
{
    $sql = "SELECT * FROM products order by ProductID  asc";
    $selectProductAsc = pdo_query($sql);
    return $selectProductAsc;
}

function renderTop()
{
    $sql = "SELECT * FROM products limit 4";
    $renderTopProduct = pdo_query($sql);
    return $renderTopProduct;
}

function renderProductCategory($kyw = "", $CategoryID = 0)
{
    $sql = "SELECT * FROM products WHERE 1";

    if ($kyw != "") {
        $sql .= " AND ProductName LIKE '%" . $kyw . "%'";
    } else {
        $sql .= " AND CategoryID LIKE '%" . $CategoryID . "%'";
    }
    $listProduct = pdo_query($sql);
    return $listProduct;
}


function searchProduct($CategoryID)
{
    if ($CategoryID > 0) {
        $sql = "SELECT * FROM categories WHERE CategoryID = " . $CategoryID;
        $cate = pdo_query_one($sql);
        extract($cate);
    } else {
        return "";
    }
}

function loadall_sanpham($kyw = "", $CategoryID = 0, $page, $quantityProduct)
{
    $sql = "SELECT * FROM products WHERE 1";

    if (empty($page) || $page == 0) {
        $page = 1;
    }

    $start = ($page - 1) * $quantityProduct;

    if ($kyw != "") {
        $sql .= " AND ProductName LIKE '%" . $kyw . "%'";
    }

    if ($CategoryID > 0) {
        $sql .= " AND CategoryID = '" . $CategoryID . "'";
    }

    $sql .= " ORDER BY ProductID DESC LIMIT " . $start . "," . $quantityProduct;

    $renderProduct = pdo_query($sql);
    return $renderProduct;
}

function renderProductDetails($ProductID)
{
    $sql = "SELECT * FROM products WHERE ProductID=" . $ProductID;
    $productDetails = pdo_query_one($sql);
    return $productDetails;
}



function deleteProduct($ProductID)
{
    $sql = "delete from products where ProductID=" . $ProductID;
    pdo_execute($sql);
}

function insert_product($ProductName, $Price, $ProductImage, $CategoryID, $Description, $ProductStatus, $OldPrice)
{
    $sql = "INSERT INTO products (ProductName, Price, ProductImage, CategoryID, Description, ProductStatus, OldPrice) VALUES ('$ProductName', '$Price', '$ProductImage', '$CategoryID', '$Description', '$ProductStatus', '$OldPrice')";
    pdo_execute($sql);
}


function loadone_product($ProductID)
{
    $sql = "SELECT * FROM products WHERE ProductID=" . $ProductID;
    $productEdit = pdo_query_one($sql);
    return $productEdit;
}


function update_sanpham($ProductID, $ProductName, $Price, $ProductImage, $CategoryID, $Description, $ProductStatus, $OldPrice)
{
    if ($ProductImage != "") {
        $sql = "UPDATE products SET ProductName ='" . $ProductName . "', Price='" . $Price . "', ProductImage='" . $ProductImage . "', CategoryID='" . $CategoryID . "', Description='" . $Description . "', ProductStatus='" . $ProductStatus . "', OldPrice='" . $OldPrice . "' WHERE ProductID=" . $ProductID;
    } else {
        $sql = "UPDATE products SET ProductName ='" . $ProductName . "', Price='" . $Price . "', CategoryID='" . $CategoryID . "', Description='" . $Description . "', ProductStatus='" . $ProductStatus . "', OldPrice='" . $OldPrice . "' WHERE ProductID=" . $ProductID;
    }
    pdo_execute($sql);
}

function renderImgProduct($ProductID)
{
    $sql = "SELECT imgproduct.*, products.*
    FROM imgproduct
    JOIN products ON imgproduct.ProductID = products.ProductID
    WHERE imgproduct.ProductID = $ProductID
    ORDER BY ImgID DESC
    ";
    $renderImgProduct = pdo_query($sql);
    return $renderImgProduct;
}

function productRelated($ProductID)
{
    $sql = "SELECT product_related.*, products.*
    FROM product_related
    JOIN products ON product_related.RelatedProductID = products.ProductID
    WHERE product_related.ProductID = $ProductID
    ORDER BY  RAND() -- Sắp xếp ngẫu nhiên
    LIMIT 4"; // Thêm điều kiện LIMIT 4
    $renderProductRelated = pdo_query($sql);
    return $renderProductRelated;
}
