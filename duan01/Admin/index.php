<?php
require_once "Views/Layout/HeaderAdmin.php";
include "../Model/Connect.php";
include "../Model/Categories.php";
include "../Model/Product.php";
include "../Model/Account.php";
include "../Model/Comment.php";
include "../Model/Order.php";
include "../Model/Statistical.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'Category':
            $listCategory = renderCategories();
            include "Category/Category.php";
            break;

        case 'addCategory':
            if (isset($_POST['add']) && ($_POST['add'])) {
                $CategoryName = $_POST['CategoryName'];
                $checkUser = '/[\!@#$%^&*()_+=\[\]{}|;:",.<>?\\-]/';
                if (empty(trim($_POST['CategoryName']))) {
                    $errors['CategoryName'] = "Tên loại không được để trống";
                } elseif (preg_match($checkUser, $_POST['CategoryName'])) {
                    $errors['CategoryName'] = "Tên loại không được chứ kí tự đặc biệt";
                } elseif (strlen(trim($_POST['CategoryName'])) < 6) {
                    $errors['CategoryName'] = "Tên loại không được nhỏ hơn 6 kí tự";
                } else {
                    $sql = "INSERT INTO categories (CategoryName) VALUES('$CategoryName')";
                    pdo_execute($sql);
                    header('location: index.php?act=Category');
                }
            }
            include "Category/addCategory.php";
            break;

        case 'delCategory':
            if (isset($_GET['CategoryID']) && ($_GET['CategoryID'] > 0)) {
                deleteCategory($_GET['CategoryID']);
                echo '
                <script>
                swal({
                    title: "Xóa thành công",
                    text: "You clicked the button!",
                    icon: "success",
                  });
                </script>
                ';
            }
            $listCategory  = renderCategories();
            include "Category/Category.php";
            break;

        case 'update':
            if (isset($_GET['CategoryID']) && ($_GET['CategoryID'] > 0)) {
                $dm = loadone_danhmuc($_GET['CategoryID']);
            }

            include "Category/editCategory.php";
            break;
        case 'editCategory':
            if (isset($_POST['edit']) && ($_POST['edit'])) {
                $CategoryName = $_POST['CategoryName'];
                $CategoryID = $_POST['CategoryID'];
                update_danhmuc($CategoryID, $CategoryName);
                echo '
                <script>
                swal({
                    title: "Sửa thành công",
                    text: "You clicked the button!",
                    icon: "success",
                  });
                </script>
                ';
            }
            $listCategory = renderCategories();
            include "Category/Category.php";
            break;

        case 'Product':
            if (isset($_POST['search']) && ($_POST['search'])) {
                $kyw = $_POST['kyw'];
                $CategoryID = $_POST['CategoryID'];
            } else {
                $kyw = '';
                $CategoryID = 0;
            }
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }
            $quantityProduct = 6;
            $renderProduct =  loadall_sanpham($kyw, $CategoryID, $page, $quantityProduct);
            $totalProducts = getAllProducts();
            $renderPage = displayPageNumbers($totalProducts, $quantityProduct, $page);
            $listCategory  = renderCategories();
            include "Product/Product.php";
            break;
        case 'addProduct':
            if (isset($_POST['addProduct']) && ($_POST['addProduct'])) {
                $ProductName = $_POST['ProductName'];
                $Description = $_POST['Description'];
                $Price = $_POST['Price'];
                $OldPrice = $_POST['OldPrice'];
                $ProductStatus = $_POST['ProductStatus'];
                $CategoryID = $_POST['CategoryID'];
                $file = $_FILES['ProductImage'];
                $ProductImage = $file['name'];
                $checkUser = '/[\!@#$%^&*()_+=\[\]{}|;:",.<>?\\-]/';
                if (empty(trim($_POST['ProductName'])) && empty(trim($_POST['Price'])) && empty(trim($ProductImage))) {
                    $errors['ProductName'] = "Tên không được để trống";
                    $errors['Price'] = "Gía tiền không được để trống";
                    $errors['ProductImage'] = "Ảnh không được để trống";
                    $errors['OldPrice'] = "Giá tiền không được để trống";
                    $errors['Description'] = "Mô tả không được để trống";
                    $errors['ProductStatus'] = "Trạng thái không được để trống";
                }
                if (empty(trim($_POST['ProductName']))) {
                    $errors['ProductName'] = "Tên không được để trống";
                } elseif (preg_match($checkUser, $_POST['ProductName'])) {
                    $errors['ProductName']  = "Tên không được chứ kí tự đặc biệt";
                } elseif (empty(trim($_POST['Price']))) {
                    $errors['Price'] = "Gía tiền không được để trống";
                } elseif (empty(trim($ProductImage))) {
                    $errors['ProductImage'] = "Ảnh không được để trống";
                } else {
                    move_uploaded_file($file['tmp_name'], 'Views/Img' . $ProductImage);
                    insert_product($ProductName, $Price, $ProductImage, $CategoryID, $Description, $ProductStatus, $OldPrice);
                    echo '
                    <script>
                    swal({
                        title: "Thêm thành công",
                        text: "You clicked the button!",
                        icon: "success",
                    }).then(function() {
                        window.location.href = "index.php?act=Product";
                    });
                </script>
                    ';
                }
            }
            $renderProduct = loadall_sanpham("", 0, 0, 0);
            $listCategory = renderCategories();
            include "Product/addProduct.php";
            break;
        case 'delPro':
            if (isset($_GET['ProductID']) && ($_GET['ProductID'] > 0)) {
                deleteProduct($_GET['ProductID']);
                echo '
                <script>
                swal({
                    title: "Xóa thành công",
                    text: "You clicked the button!",
                    icon: "success",
                }).then(function() {
                    window.location.href = "index.php?act=Product";
                });
            </script>
                ';
            }
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }
            $quantityProduct = 6;
            $totalProducts = getAllProducts();
            $renderPage = displayPageNumbers($totalProducts, $quantityProduct, $page);
            $renderProduct  = loadall_sanpham("", 0, 0, 0);
            $listCategory = renderCategories();
            include "Product/Product.php";
            break;
        case 'updatePro':
            if (isset($_GET['ProductID']) && ($_GET['ProductID'] > 0)) {
                $productEdit = loadone_product($_GET['ProductID']);
            }
            $listCategory = renderCategories();
            include "Product/editProduct.php";
            break;
        case 'editProduct':
            if (isset($_POST['editPro']) && ($_POST['editPro'])) {
                $ProductID = $_POST['ProductID'];
                $ProductName = $_POST['ProductName'];
                $Description = $_POST['Description'];
                $Price = $_POST['Price'];
                $OldPrice = $_POST['OldPrice'];
                $CategoryID = $_POST['CategoryID'];
                $ProductStatus = $_POST['ProductStatus'];
                $file = $_FILES['ProductImage'];
                $ProductImage = $file['name'];
                move_uploaded_file($file['tmp_name'], '.' . $ProductImage);
                update_sanpham($ProductID, $ProductName, $Price, $ProductImage, $CategoryID, $Description, $ProductStatus, $OldPrice);
                echo '
                <script>
                swal({
                    title: "Sửa thành công",
                    text: "You clicked the button!",
                    icon: "success",
                }).then(function() {
                    window.location.href = "index.php?act=Product";
                });
            </script>
                ';
            }
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }
            $quantityProduct = 6;
            $totalProducts = getAllProducts();
            $renderPage = displayPageNumbers($totalProducts, $quantityProduct, $page);
            $renderProduct  = loadall_sanpham("", 0, 0, 0);
            $listCategory = renderCategories();
            include "Product/Product.php";
            break;

        case 'Account':
            $renderAccount = renderAccount();
            include "Account/Account.php";
            break;
        case 'delAccount':
            if (isset($_GET['UserID']) && ($_GET['UserID'] > 0)) {
                deleteAccount($_GET['UserID']);
                echo '
                <script>
                swal({
                    title: "Xóa thành công",
                    text: "You clicked the button!",
                    icon: "success",
                  });
                </script>
                ';
            }
            $renderAccount = renderAccount();
            include 'Account/Account.php';
            break;
        case 'updateAcc':
            if (isset($_GET['UserID']) && ($_GET['UserID'] > 0)) {
                $dm = loadone_account($_GET['UserID']);
            }

            include "Account/editAccount.php";
            break;
        case 'editAccount':
            if (isset($_POST['edit']) && ($_POST['edit'])) {
                $name = $_POST['name'];
                $UserID = $_POST['UserID'];
                $Email = $_POST['Email'];
                $username = $_POST['username'];
                $PhoneNumber = $_POST['PhoneNumber'];
                $Address = $_POST['Address'];
                update_account($UserID, $Email, $name, $username, $PhoneNumber, $Address);
                header('Location: index.php?act=Account');
            }
            $account = loadall_account();
            include "Account/Account.php";
            break;
        case 'Comment':
            $listComment = renderComment();
            include "Comment/Comment.php";
            break;
        case 'delComment':
            if (isset($_GET['CommentID']) && ($_GET['CommentID'] > 0)) {
                $sql = 'DELETE FROM comments WHERE CommentID=' . $_GET['CommentID'];
                pdo_execute($sql);
                echo '
                <script>
                swal({
                    title: "Xóa thành công",
                    text: "You clicked the button!",
                    icon: "success",
                  });
                </script>
                ';
            }
            $listComment = renderComment();
            include "Comment/Comment.php";
            break;
        case 'Statistical':
            $listStatistical = renderStatistical();
            include "Statistical/Statistical.php";
            break;
        case "Chart":
            $listStatistical = renderStatistical();
            include "Statistical/Chart.php";
            break;
        case "Order":
            $renderOrder = renderOrder();
            include "Order/Order.php";
            break;
        case "updateOrder":
            if (isset($_GET['OrderID']) && ($_GET['OrderID'] > 0)) {
                $orders = renderOrderID($_GET['OrderID']);
            }
            $renderStatus = renderStatus();
            include "Order/editOrder.php";
            break;
        case "editOrder":
            if (isset($_POST['editOrder']) && ($_POST['editOrder'])) {
                $OrderID = $_POST['OrderID'];
                $StatusID = $_POST['StatusID'];
                UpdateOrder($OrderID, $StatusID);
                header('location: index.php?act=Order');
            }
            $renderOrder = renderOrder();
            include "Order/Order.php";
            break;
        default:
            include 'Views/Home.php';
            break;
    }
} else {
    include 'Views/Home.php';
}
