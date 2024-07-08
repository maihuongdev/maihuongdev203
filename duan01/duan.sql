-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 03:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`) VALUES
(1, 'Hoa Hồng'),
(2, 'Hoa Cẩm Chướng'),
(3, 'Hoa Lan'),
(9, 'Hoa Cúc');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `IdProduct` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `CommentText` text NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentID`, `IdProduct`, `UserID`, `CommentText`, `Timestamp`) VALUES
(15, 1, 7, 'ok', '2023-11-25 00:48:40'),
(16, 1, 7, 's', '2023-11-27 17:00:00'),
(17, 1, 7, 'okk', '2023-12-04 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `imgproduct`
--

CREATE TABLE `imgproduct` (
  `ImgID` int(11) NOT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `ImageURL` varchar(255) NOT NULL,
  `ImgURL` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imgproduct`
--

INSERT INTO `imgproduct` (`ImgID`, `ProductID`, `ImageURL`, `ImgURL`, `Description`) VALUES
(1, 1, 'Product_02.png', 'https://i.pinimg.com/550x/b2/8c/58/b28c582e4dfa5c7c97a285487a7a0be5.jpg', 'Product_02'),
(3, 2, 'Product_03.png', 'Product_04.png', 'Product_04.png'),
(4, 2, 'Product_03.png', 'Product_04.png', 'Product_04.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `ProductID` varchar(255) DEFAULT NULL,
  `PaymentMethodID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `OrderDate` timestamp NULL DEFAULT current_timestamp(),
  `StatusID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `ProductID`, `PaymentMethodID`, `UserID`, `OrderDate`, `StatusID`) VALUES
(73, '1', 1, 7, '2023-11-30 18:50:02', 9),
(74, '1', 1, 9, '2023-11-30 21:09:13', 9),
(75, '2', 2, 9, '2023-11-30 21:10:19', 9),
(76, '2', 1, 7, '2023-11-30 21:15:57', 9),
(77, '1', 2, 9, '2023-11-30 21:16:18', 10),
(78, '1', 1, 9, '2023-12-02 01:16:45', 9),
(79, '1', 2, 9, '2023-12-02 01:17:25', 9),
(80, '2', 1, 7, '2023-12-04 16:11:17', 11),
(81, '2', 1, 7, '2023-12-05 01:48:58', 11);

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `PaymentMethodID` int(11) NOT NULL,
  `PaymentMethodName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`PaymentMethodID`, `PaymentMethodName`) VALUES
(1, 'Thanh Toán khi nhận hàng'),
(2, 'Thanh Toán bằng chuyển khoản');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL,
  `Price` decimal(10,2) NOT NULL,
  `ProductImage` varchar(255) NOT NULL,
  `ProductSlide` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `ProductStatus` varchar(255) NOT NULL,
  `OldPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Description`, `Price`, `ProductImage`, `ProductSlide`, `quantity`, `CategoryID`, `ProductStatus`, `OldPrice`) VALUES
(1, 'Hoa Hồng Ecuadors', 'Sản Phẩm 01', 100000.00, 'Product_05.jpg', 'Product_Slide.png', 1, 1, '10%', 120000),
(2, 'Hoa Hồng Spirit', 'Sản Phẩm 02', 150000.00, 'Product_04.jpg', 'ProductSlide_02.jpg', 1, 1, '13%', 170000),
(3, 'Hoa Hồng Song Hỷ', 'Sản Phẩm 03', 170000.00, 'Product_03.jpg', 'ProductSlide_03.jpg', 1, 1, '15%', 190000),
(4, 'Hoa Hồng Ohara', 'Sản Phẩm 04', 120000.00, 'Product_04.jpg', 'ProductSlide_04.jpg', 1, 1, '', 0),
(5, 'Hoa Hồng Vàng Quốc Vương', 'Sản Phẩm 05', 190000.00, 'Product_05.jpg', 'ProductSlide_05.jpg', 1, 1, '', 0),
(6, 'Hoa Lan Mokara Tím', 'Sản Phẩm 06', 120000.00, 'Product_06.jpg', 'ProductSlide_06.jpg', 1, 3, '3%', 140000),
(7, 'Hoa Lan Thái Trắng', 'Sản Phẩm 07', 130000.00, 'Product_07.jpg', 'ProductSlide_07.jpg', 1, 3, '', 0),
(8, 'Hoa Lan Mokara Đỏ', 'Sản Phẩm 08', 200000.00, 'Product_08.jpg', 'ProductSlide_08.jpg', 1, 3, '10%', 220000),
(9, 'Hoa Lan Mokara Vàng', 'Sản Phẩm 09', 150000.00, 'Product_09.jpg', 'ProductSlide_09.jpg', 1, 3, '', 0),
(10, 'Hoa Lan Vũ Nữ', 'Sản Phẩm 10', 82000.00, 'Product_10.jpg', 'ProductSlide_10.jpg', 1, 3, '', 0),
(11, 'Hoa Cẩm Chướng Vàng Đà Lạt', 'Sản Phẩm 11', 105000.00, 'Product_11.jpg', 'ProductSlide_11.jpg', 1, 2, '3%', 175000),
(12, 'Hoa Cẩm Chướng Xanh Đà Lạt', 'Sản Phẩm 12', 95000.00, 'Product_12.jpg', 'ProductSlide_12.jpg', 1, 2, '', 0),
(13, 'Hoa Cẩm Chướng Đỏ Đà Lạt', 'Sản Phẩm 13', 88000.00, 'Product_13.jpg', 'ProductSlide_13.jpg', 1, 2, '', 0),
(14, 'Hoa Cẩm Chướng Đơn Tím', 'Sản Phẩm 14', 110000.00, 'Product_14.jpg', 'ProductSlide_14.jpg', 1, 2, '', 0),
(15, 'Hoa Cẩm Chướng Đỏ Đà Lạt ', 'Sản Phẩm 15', 88000.00, 'Product_15.jpg', 'ProductSlide_15.jpg', 1, 2, '', 0),
(16, 'Hoa Cúc Tana', 'Sản Phẩm 16', 140000.00, 'Product_16.jpg', 'ProductSlide_16.jpg', 1, 9, '', 0),
(17, 'Hoa Cúc Calimero', 'Sản Phẩm 17', 52000.00, 'Product_17.jpg', 'ProductSlide_17.jpg', 1, 9, '', 0),
(18, 'Hoa Cúc Đồng Tiền', 'Sản Phẩm 18', 82000.00, 'Product_18.jpg', 'ProductSlide_18.jpg', 1, 9, '', 0),
(19, 'Hoa Cúc Rossi', 'Sản Phẩm 19', 55000.00, 'Product_19.jpg', 'ProductSlide_19.jpg', 1, 9, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_related`
--

CREATE TABLE `product_related` (
  `RelatedID` int(11) NOT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `RelatedProductID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_related`
--

INSERT INTO `product_related` (`RelatedID`, `ProductID`, `RelatedProductID`) VALUES
(9, 1, 1),
(10, 1, 2),
(11, 1, 3),
(12, 1, 4),
(13, 6, 6),
(14, 6, 7),
(15, 6, 8),
(16, 6, 9),
(17, 11, 11),
(18, 11, 12),
(19, 11, 13),
(20, 11, 14),
(21, 16, 16),
(22, 16, 17),
(23, 16, 18),
(24, 16, 19),
(25, 2, 1),
(26, 2, 2),
(27, 2, 3),
(28, 2, 4),
(29, 3, 1),
(30, 3, 2),
(31, 3, 3),
(32, 3, 4),
(33, 4, 1),
(34, 4, 2),
(35, 4, 3),
(36, 4, 4),
(37, 5, 1),
(38, 5, 2),
(39, 5, 3),
(40, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusID` int(11) NOT NULL,
  `StatusName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`StatusID`, `StatusName`) VALUES
(9, 'Chờ xác nhận'),
(10, 'Đã xác nhận'),
(11, 'Đang vận chuyển'),
(12, 'Giao hàng thành công');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `RePassword` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Role` int(11) NOT NULL,
  `UserImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `username`, `name`, `password`, `RePassword`, `Email`, `Address`, `PhoneNumber`, `Role`, `UserImg`) VALUES
(7, 'khoikhoi203', 'khôi', '123321', '123321', 'khoispeu@gmail.com', 'ninh binh', '0977742262', 1, ''),
(9, 'khoidz203', 'Nguyễn Văn Khôiiiii', '123321', '123321', 'khoispeu@gmail.com', 'Ninh Bìnhhh', '0977742262', 0, 'User.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `ProductID` (`IdProduct`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `imgproduct`
--
ALTER TABLE `imgproduct`
  ADD PRIMARY KEY (`ImgID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `StatusID` (`StatusID`),
  ADD KEY `PaymentMethodID` (`PaymentMethodID`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`PaymentMethodID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `product_related`
--
ALTER TABLE `product_related`
  ADD PRIMARY KEY (`RelatedID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `RelatedProductID` (`RelatedProductID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `imgproduct`
--
ALTER TABLE `imgproduct`
  MODIFY `ImgID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `PaymentMethodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_related`
--
ALTER TABLE `product_related`
  MODIFY `RelatedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `StatusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`IdProduct`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `imgproduct`
--
ALTER TABLE `imgproduct`
  ADD CONSTRAINT `imgproduct_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`StatusID`) REFERENCES `status` (`StatusID`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`);

--
-- Constraints for table `product_related`
--
ALTER TABLE `product_related`
  ADD CONSTRAINT `product_related_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`),
  ADD CONSTRAINT `product_related_ibfk_2` FOREIGN KEY (`RelatedProductID`) REFERENCES `products` (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
