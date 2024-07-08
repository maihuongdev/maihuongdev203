<?php
session_start();
include "Model/Connect.php";
include "Model/Product.php";
include "Model/Account.php";
include "Model/Categories.php";
include "Model/Comment.php";
include "Model/Order.php";
$renderCategories = renderCategories();
include "View/Layout/Head.php";
include "View/Layout/Header.php";

$renderTopProduct = renderTopProduct();
$renderTop = renderTop();
$renderPaymentMethod = renderPaymentMethod();
$selectProductDesc = selectProductDesc();
$selectProductAsc = selectProductAsc();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'Register':
            if (isset($_POST[('register')]) && ($_POST[('register')])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $rePassword = $_POST['rePassword'];

                $pattern = '/\d/';
                $checkUser = '/[\!@#$%^&*()_+=\[\]{}|;:",.<>?\\-]/';
                $checkDistance = '/\s/';



                if (empty(trim($_POST['email']))) {
                    echo '
                    <script>
                    swal({
                        title: "Email không được để trống",
                        text: "You clicked the button!",
                        icon: "error",
                      });
                    </script>
                    ';
                } elseif (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
                    echo '
                    <script>
                    swal({
                        title: "Email không hợp lệ",
                        text: "You clicked the button!",
                        icon: "error",
                      });
                    </script>
                    ';
                } elseif (empty(trim($_POST['password']))) {
                    echo '
                    <script>
                    swal({
                        title: "Password không được để trống",
                        text: "You clicked the button!",
                        icon: "error",
                      });
                    </script>
                    ';
                } elseif (strlen(trim($_POST['password'])) < 6) {
                    echo '
                    <script>
                    swal({
                        title: "Password phải lớn hơn 6 kí tự",
                        text: "You clicked the button!",
                        icon: "error",
                      });
                    </script>
                    ';
                } elseif (empty(trim($_POST['username']))) {
                    echo '
                    <script>
                    swal({
                        title: "Username không được để trống",
                        text: "You clicked the button!",
                        icon: "error",
                      });
                    </script>
                    ';
                } elseif (strlen(trim($_POST['username'])) < 6) {
                    echo '
                    <script>
                    swal({
                        title: "Username phải lớn hơn 6 kí tự",
                        text: "You clicked the button!",
                        icon: "error",
                      });
                    </script>
                    ';
                } elseif (preg_match($checkUser, $_POST['username'])) {
                    echo '
                    <script>
                    swal({
                        title: "Username không chứa ký tự đặc biệt",
                        text: "You clicked the button!",
                        icon: "error",
                      });
                    </script>
                    ';
                } elseif (preg_match($checkDistance, $_POST['username'])) {
                    echo '
                    <script>
                    swal({
                        title: "Username không chứa khoảng cách",
                        text: "You clicked the button!",
                        icon: "error",
                      });
                    </script>
                    ';
                } elseif ($password != $rePassword) {
                    echo '
                    <script>
                    swal({
                        title: "Password không trùng nhau",
                        text: "You clicked the button!",
                        icon: "error",
                      });
                    </script>
                    ';
                } else {
                    echo ' <script>
                    swal({
                        title: "Đăng ký thành công",
                        text: "You clicked the button!",
                        icon: "warning",
                    }).then(function() {
                        window.location.href = "index.php?act=Login";
                    });
                </script>';
                    insertAccount($email, $username, $password, $rePassword);
                    include "View/Account/Login.php";
                }
            }
            include "View/Account/Register.php";
            break;
        case 'Login':
            if (isset($_POST[('login')]) && ($_POST[('login')])) {
                $username = $_POST[('username')];
                $password = $_POST[('password')];
                $checkAccount = checkAccount($username, $password);
                $checkUser = '/[\!@#$%^&*()_+=\[\]{}|;:",.<>?\\-]/';
                if (is_array($checkAccount)) {
                    $_SESSION['username'] = $checkAccount;
                    if (is_array($checkAccount)) {
                        $_SESSION['username'] = $checkAccount;
                        echo '
                        <script>
                            swal({
                                title: "Đăng nhập thành công",
                                text: "You clicked the button!",
                                icon: "success",
                            }).then(function() {
                                window.location.href = "index.php";
                            });
                        </script>
                        ';
                    } else {
                        echo '
                        <script>
                            swal({
                                title: "Đăng nhập không thành công",
                                text: "You clicked the button!",
                                icon: "error",
                            });
                        </script>
                        ';
                    }
                }
                if (empty(trim($_POST['username']))) {
                    echo '
                    <script>
                    swal({
                        title: "Username không được để trống",
                        text: "You clicked the button!",
                        icon: "error",
                      });
                    </script>
                    ';
                } else if (preg_match($checkUser, $_POST['username'])) {
                    echo '
                    <script>
                    swal({
                        title: "Email không chứa kí tự đặc biệt",
                        text: "You clicked the button!",
                        icon: "error",
                      });
                    </script>
                    ';
                }

                if (empty(trim($_POST['password']))) {
                    echo '
                    <script>
                    swal({
                        title: "Password không được để trống",
                        text: "You clicked the button!",
                        icon: "error",
                      });
                    </script>
                    ';
                }
            }
            include "View/Account/Login.php";
            break;
        case 'editAccount':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $UserID = $_POST['UserID'];
                $Email = $_POST['Email'];
                $name = $_POST['name'];
                $PhoneNumber = $_POST['PhoneNumber'];
                $username  = $_POST['username'];
                $Address = $_POST['Address'];
                $file = $_FILES['UserImg'];
                $UserImg = $file['name'];
                move_uploaded_file($file['tmp_name'], '' . $UserImg);
                updateAccount($UserID, $Email, $name, $PhoneNumber, $Address, $username, $UserImg);
                $_SESSION['username'] = checkAccount($username, $password);
                echo '
                <script>
                    swal({
                        title: "Cập nhật thành công",
                        text: "You clicked the button!",
                        icon: "success",
                    }).then(function() {
                        window.location.href = "index.php?act=editAccount";
                    });
                </script>
                ';
            }
            include "View/Account/editAccount.php";
            break;
            case "Logout":
                unset($_SESSION['username']);
                unset($_SESSION['userID']);
                
                echo '
                <script>
                    window.location.href = "index.php";
                </script>
                ';
                break;

        case 'ProductSearch':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['CategoryID']) && $_GET['CategoryID'] > 0) {
                $CategoryID = $_GET['CategoryID'];
            } else {
                $CategoryID = 0;
            }

            $listProduct = renderProductCategory($kyw, $CategoryID);
            $nameCate = searchProduct($CategoryID);
            include "View/ProductSearch.php";
            break;

        case 'ProductDesc':
            include 'View/ProductDesc.php';
            break;
        case 'ProductAsc':
            include 'View/ProductAsc.php';
            break;
        case 'ProductDetail':
            if (isset($_POST['guibinhluan'])) {
                $UserID = $_SESSION['username']['UserID'];
                $CommentText = $_POST['CommentText'];
                if (empty(trim($_POST['CommentText']))) {
                    $errors['CommentText'] = 'Vui lòng nhập bình luận';
                } else {
                    insert_binhluan($_POST['ProductID'], $UserID, $_POST['CommentText']);
                }
            }
            if (isset($_GET['idpro']) && $_GET['idpro'] > 0) {
                $productdetail = renderProductDetails($_GET['idpro']);
                $comment = loadall_binhluan($_GET['idpro']);
                $ProductID = $productdetail['ProductID'];
                $renderProductRelated = productRelated($ProductID);
                $renderImgProduct = renderImgProduct($ProductID);
            } else {
                include "View/Home.php";
            }
            include "View/ProductDetail.php";
            break;
        case 'Cart':
            include "View/Cart/Cart.php";
            break;
        case 'addToCart':
            if (isset($_POST['addToCart']) && ($_POST['addToCart'])) {
                $ProductID = $_POST['ProductID'];
                $ProductName = $_POST['ProductName'];
                $ProductImage = $_POST['ProductImage'];
                $Price = $_POST['Price'];
                $quantity = $_POST['quantity'];
                $TotalMoney = $Price * $quantity;

                $productExists = false;
                foreach ($_SESSION['cart'] as &$item) {
                    if ($item[0] == $ProductID) {
                        $item[4] += $quantity;
                        $item[5] = $Price * $item[4];
                        $productExists = true;
                        break;
                    }
                }

                if (!$productExists) {
                    $addToCart = [$ProductID, $ProductName, $ProductImage, $Price, $quantity, $TotalMoney];
                    array_push($_SESSION['cart'], $addToCart);
                }

                if (isset($_SESSION['username'])) {
                    echo ' <script>
                            swal({
                                title: "Thêm thành công",
                                text: "You clicked the button!",
                                icon: "success",
                            }).then(function() {
                                window.location.href = "index.php?act=Product";
                            });
                        </script>';
                } else {
                    echo ' <script>
                            swal({
                                title: "Bạn cần đăng nhập",
                                text: "You clicked the button!",
                                icon: "warning",
                            }).then(function() {
                                window.location.href = "index.php?act=Login";
                            });
                        </script>';
                }
            }
            break;
        case 'del':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['cart'], $_GET['idcart'], 1);
                echo '
                <script>
                swal({
                    title: "Xóa thành công",
                    text: "You clicked the button!",
                    icon: "success",
                }).then(function() {
                    window.location.href = "index.php?act=Cart";
                });
            </script>
                ';
            } else {
                $_SESSION['cart'] = [];
            }
            include 'View/Cart/Cart.php';
            break;

        case 'editCart':
            if (isset($_POST['quantity']) && isset($_POST['idcart'])) {
                $newQuantity = intval($_POST['quantity']);
                $idcart = intval($_POST['idcart']);
                if ($newQuantity > 0) {
                    $_SESSION['cart'][$idcart][4] = $newQuantity;
                    echo '
                    <script>
                    swal({
                        title: "Sửa thành công",
                        text: "You clicked the button!",
                        icon: "success",
                    }).then(function() {
                        window.location.href = "index.php?act=Cart";
                    });
                </script>
                    ';
                    include "View/Cart/Cart.php";
                    exit;
                } else {
                    echo 'Số lượng không hợp lệ';
                }
            }
            include 'View/Cart/Cart.php';
            break;
        case 'Product':

            if(!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }
            $quantityProduct = 8;
            $renderProduct = renderProduct($page, $quantityProduct);
            $totalProducts = getAllProducts();
            $renderPage = displayPageNumbers($totalProducts, $quantityProduct, $page);
            include "View/Product.php";
            break;
        case 'Order':
            if (isset($_POST['order']) && ($_POST['order'])) {
                $ProductID = $_POST['ProductID'];
                $UserID = $_POST['UserID'];
                $OrderDate = $_POST['OrderDate'];
                $StatusID = $_POST['StatusID'];
                $PaymentMethodID = $_POST['PaymentMethodID'];
                $quantity = $_POST['quantity'];
                $Address  = $_POST['Address'];
                $PhoneNumber  = $_POST['PhoneNumber'];
                insertOrder($ProductID, $UserID, $OrderDate, $StatusID, $PaymentMethodID, $quantity);
                echo '
                <script>
                swal({
                    title: "Đặt hàng thành công",
                    text: "You clicked the button!",
                    icon: "success",
                }).then(function() {
                    window.location.href = "index.php?act=OrderHistory";
                });
            </script>
                ';
                $_SESSION['cart'] = [];
            }
            include "View/Order.php";
            break;
        case 'OrderHistory':
            if (isset($_GET['OrderID']) && ($_GET['OrderID'] > 0)) {
                $orders = renderOrderID($_GET['OrderID']);
            }
            if (isset($_POST['cancel_order']) && ($_POST['cancel_order'])) {
                $OrderID = $_POST['OrderID'];
                $StatusID = $_POST['StatusID'];
                UpdateOrderPaymentMethod($OrderID, $StatusID);
                echo '
                <script>
                swal({
                    title: "Hủy thành công",
                    text: "You clicked the button!",
                    icon: "success",
                }).then(function() {
                    window.location.href = "index.php?act=OrderHistory";
                });
            </script>
                ';
            }
            $renderOrder = renderOrder();
            include "View/OrderHistory.php";
            break;

        case 'Blog':
            include "View/Blog.php";
            break;
        case 'Contact':
            include "View/Contact.php";
            break;
        case 'AboutUs':
            include "View/AboutUs.php";
            break;
    }
} else {
    include "View/Home.php";
}
include "View/Layout/Footer.php";
