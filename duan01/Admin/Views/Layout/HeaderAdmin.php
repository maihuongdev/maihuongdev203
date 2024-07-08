<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="Views/Css/Admin.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>KHL</title>
    </head>

    <body>
        <div class="container active">
            <ul class="link-items">
                <li class="link-item active">
                    <a href="index.php" class="link">
                        <ion-icon name="home-outline"></ion-icon>
                        <span style="--i: 1">Home</span>
                    </a>
                </li>
                <li class="link-item">
                    <a href="index.php?act=Product" class="link">
                        <ion-icon name="extension-puzzle-outline"></ion-icon>
                        <span style="--i: 2">Sản Phẩm</span>
                    </a>
                </li>
                <li class="link-item">
                    <a href="index.php?act=Category" class="link">
                        <ion-icon name="apps-outline"></ion-icon>
                        <span style="--i: 3">Danh Mục</span>
                    </a>
                </li>
                <li class="link-item">
                    <a href="index.php?act=Comment" class="link">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                        <span style="--i: 4">Bình Luận</span>
                    </a>
                </li>
                <li class="link-item">
                    <a href="index.php?act=Account" class="link">
                        <ion-icon name="person-outline"></ion-icon>
                        <span style="--i: 6">Khách Hàng</span>
                    </a>
                </li>
                <li class="link-item">
                    <a href="index.php?act=Statistical" class="link">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                        <span style="--i: 6">Thống Kê</span>
                    </a>
                </li>
                <li class="link-item">
                    <a href="index.php?act=Order" class="link">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                        <span style="--i: 6">Đơn Hàng</span>
                    </a>
                </li>
                <li class="link-item">
                    <a href="../index.php" class="link">
                        <ion-icon name="log-out-outline"></ion-icon>
                        <span style="--i: 6">Thoát khỏi Admin</span>
                    </a>
                </li>
            </ul>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

    </html>