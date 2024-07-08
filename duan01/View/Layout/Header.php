<style>
    a {
        text-decoration: none;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header_center {
        display: flex;
    }

    .dropbtn {
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
        display: flex;
        align-items: center;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
        color: #000;
    }

    .show {
        display: block;
    }
</style>
<div class="container">
    <div class="row" style="align-items: center;">
        <div class="col">
            <div class="site-logo">
                <a href="index.php"><img width="150px" src="View/Img/Logo.png" alt="Logo"></a>
            </div>
        </div>
        <div class="col header-contact-serarch-column d-none d-xl-block">
            <div class="header-contact-search">
                <div class="header-feature-item">
                    <div class="header-feature-icon">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>
                    <div class="header-feature-info">
                        <h6>Phone</h6>
                        <p><a style="color: #666666;" href="tel:0123456789">+0123-456-789</a></p>
                    </div>
                </div>
                <div class="header-search-2">
                    <form id="#" method="POST" action="index.php?act=ProductSearch">
                        <input type="text" name="kyw" value="" placeholder="Search here..." />
                        <button type="submit">
                            <span><ion-icon name="search-outline"></ion-icon></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="ltn__header-options">
                <ul>
                    <li>
                        <div class="mini-cart-icon mini-cart-icon-2">
                            <?php
                            if (isset($_SESSION['username'])) {
                                extract($_SESSION['username']);
                            ?>
                                <?php
                                if ($Role == 1) { ?>
                                    <div class="dropdown">
                                        <button style="background-color: #fff;"><ion-icon onclick="myFunction()" class="dropbtn" style="font-size: 25px;" name="person-outline"></ion-icon></button>
                                        <div style="width: 250px; background-color: #fff; border-top: 2px solid var(--ltn__secondary-color); top: 52px;
    left: 25px;" id="myDropdown" class="dropdown-content">
                                            <p style="margin-bottom: 0; padding: 12px 16px;">Xin chào <?= $username ?></p>
                                            <a href="Admin/index.php">Đăng nhập Admin</a>
                                            <a href="index.php?act=Logout">Đăng xuất</a>
                                        </div>
                                        <a href="index.php?act=Cart"><ion-icon style="font-size: 28px;" name="cart-outline"></ion-icon></a>
                                    </div>
                                <?php } else { ?>
                                    <?php
                                    $totalCart = $_SESSION['cart'];
                                    $productNumber = count($totalCart); ?>
                                    <div class="dropdown" style="display: flex; align-items: center;">
                                        <button style="background-color: #fff; margin-top: 8px;" onclick="myFunction()" class="dropbtn"><img style="border-radius: 50%; width: 30px; height: 30px;" src="View/Img/<?= $UserImg ?>" alt=""></button>
                                        <div style="width: 250px; background-color: #fff; border-top: 2px solid var(--ltn__secondary-color);width: 250px; background-color: #fff; border-top: 2px solid var(--ltn__secondary-color); top: 63px; left: 19px;" id="myDropdown" class="dropdown-content">
                                            <p style="margin-bottom: 0; padding: 12px 16px;">Xin chào <?= $username ?></p>
                                            <a href="index.php?act=editAccount">Cập Nhập Tài Khoản</a>
                                            <a href="index.php?act=OrderHistory">Đơn Hàng của bạn</a>
                                            <a href="index.php?act=Logout">Đăng xuất</a>
                                        </div>
                                        <a href="index.php?act=Cart">
                                            <span class="mini-cart-icon" style="margin-top: 10px;">
                                                <ion-icon style="font-size: 25px;" name="bag-outline"></ion-icon>
                                                <sup style="font-size: 12px; font-weight: 600; height: 20px; width: 20px;line-height: 20px;background-color: var(--ltn__secondary-color);color: #fff; text-align: center; border-radius: 100%; right: 8px; top: -8px;"><?= $productNumber ?></sup>
                                            </span>
                                        </a>
                                    </div>
                                <?php } ?>

                            <?php } else { ?>
                                <a href="index.php?act=Login">
                                    <span class="mini-cart-icon">
                                        <ion-icon style="font-size: 25px;" name="person-outline"></ion-icon>
                                    </span>
                                </a>
                                <a href="index.php?act=Cart">
                                    <span class="mini-cart-icon">
                                        <ion-icon style="font-size: 25px;" name="bag-outline"></ion-icon>
                                    </span>
                                </a>
                            <?php } ?>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-toggle d-lg-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="header-bottom-area ltn__border-top ltn__header-sticky  ltn__sticky-bg-white ltn__primary-bg---- menu-color-white---- d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col header-menu-column justify-content-center">
                <div class="sticky-logo">
                    <div class="site-logo">
                        <a href="index.html"><img src="View/Img/Logo.png" alt="Logo"></a>
                    </div>
                </div>
                <div class="header-menu header-menu-2">
                    <nav>
                        <div class="ltn__main-menu">
                            <ul>
                                <li class="menu-icon"><a href="index.php">Trang Chủ</a></li>
                                <li class="menu-icon"><a href="index.php?act=Product">Sản Phẩm</a></li>
                                <li class="menu-icon"><a href="#">Danh Mục</a>
                                    <ul>
                                        <?php foreach ($renderCategories as $categories) {
                                            extract($categories);
                                            $linkCatagory = "index.php?act=ProductSearch&CategoryID=" . $CategoryID;
                                            echo '
                                                <li><a href="' . $linkCatagory . '">' . $CategoryName . '</a></li>
                                                ';
                                        };

                                        ?>


                                </li>
                            </ul>
                            </li>
                            <li class="menu-icon"><a href="index.php?act=Blog">Tin Tức</a></li>
                            <li class="menu-icon"><a href="index.php?act=AboutUs">Về Chúng Tôi</a></li>
                            <li><a href="index.php?act=Contact">Liên Hệ</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="index.php"><img src="View/Img/Logo.png" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="index.php?act=ProductSearch" method="POST">
                <input type="text" placeholder="Search..." name="kyw">
                <button><i class="icon-magnifier"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=Product">Sản Phẩm</a></li>
                <li><a href="#">Danh Mục</a>
                    <ul class="sub-menu">
                        <li><a href="shop.html">Hoa hồng</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Hoa hồng 01</a>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="index.php?act=Blog">Tin Tức</a></li>
                <li><a href="index.php?act=AboutUs">Về Chúng tôi</a></li>
                <li><a href="index.php?act=Contact">Liên Hệ</a></li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="account.html" title="My Account">
                        <span class="utilize-btn-icon">
                            <i class="icon-user"></i>
                        </span>
                        My Account
                    </a>
                </li>
                <li>
                    <a href="wishlist.html" title="Wishlist">
                        <span class="utilize-btn-icon">
                            <i class="icon-heart"></i>
                            <sup>3</sup>
                        </span>
                        Wishlist
                    </a>
                </li>
                <li>
                    <a href="index.php?act=Cart" title="Shoping Cart">
                        <span class="utilize-btn-icon">
                            <i class="icon-handbag"></i>
                            <sup>5</sup>
                        </span>
                        Shoping Cart
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</header>

<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>