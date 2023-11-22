-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th5 26, 2022 lúc 07:09 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shoe_id` int(11) NOT NULL,
  `shoe_color` varchar(255) NOT NULL,
  `shoe_size` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'kids'),
(4, 'nike'),
(5, 'adidas');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoe`
--

CREATE TABLE `shoe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` bigint(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shoe`
--

INSERT INTO `shoe` (`id`, `name`, `price`, `sale`, `size`, `category_id`, `color`, `review`) VALUES
(3, 'giầy lồn', 11, 1, '1', 1, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen'),
(7, 'Mẫn Lan', 99999999999, 0, '10', 2, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(8, 'Tu Le Dang', 1111, 3, '1', 3, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(9, 'Tu Le Dang', 34332, 3, '33', 2, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(10, '44354', 45435, 4, '4', 2, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(11, 'Nguyễn Gia Trường', 34, 3, '2', 2, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(12, 'Nguyễn Gia Trường', 111, 11, '11', 2, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(13, 'Nguyễn Gia Trường', 111, 1, '2', 3, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(14, 'Nguyễn Gia Trường', 134, 2, '2', 1, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(15, 'Nguyen Gia Truong', 343, 3, '3', 4, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(16, 'Nguyễn Gia Trường', 121, 2, '2', 3, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(19, 'Lan Xing', 100000, 5, '10', 2, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(20, 'Nguyen Gia Truong', 10000, 2, '3', 1, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(21, 'Nguyễn Gia Trường', 1231, 0, '2', 3, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(22, 'Mẫn Thị Lan', 99999999999, 1, '2', 2, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', ''),
(23, 'Nguyễn Gia Trường', 1234, 1, '23,10,1,2,3,4,5,6', 1, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', 'hhh'),
(24, 'Tu Le Dang', 12, 2, '1', 1, 'hồng,xanh,vàng', 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đenxanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đenxanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đenxanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đenxanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đenxanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đenxanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen'),
(25, 'eehheeh', 2312, 22, '23,10,1,2,3,4,5,6', 2, 'hồng,xanh', 'giày như lồn'),
(26, 'giày fake', 322123, 23, '23,10,1,2,3,4,5,6', 1, 'hồng', 'giày như lồn'),
(27, 'giày như l', 23232, 22, '23,10,1,2,3,4,5,6', 1, 'hồng cánh sen,xanh nhạt', 'giày như lồn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoe_image`
--

CREATE TABLE `shoe_image` (
  `id` int(11) NOT NULL,
  `shoe_id` int(11) NOT NULL,
  `link_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shoe_image`
--

INSERT INTO `shoe_image` (`id`, `shoe_id`, `link_image`) VALUES
(1, 16, 'imageShoe/73039743_457799481516743_2944413433908428800_n.jpg'),
(2, 16, 'imageShoe/74589546_545009112982009_579124783078178816_n.jpg'),
(3, 16, 'imageShoe/146972117_2849928912001221_7521882077628797924_n.jpg'),
(4, 15, 'imageShoe/278436512_1056949608191262_6272145579401916967_n.jpg'),
(5, 15, 'imageShoe/278713399_1987770381397641_3834876700356754447_n.jpg'),
(6, 15, 'imageShoe/ao.jpg'),
(7, 19, 'imageShoe/167460640_548361456141577_4021222783376699911_n (2).jpg'),
(8, 19, 'imageShoe/167460640_548361456141577_4021222783376699911_n.jpg'),
(9, 19, 'imageShoe/186990832_2912094862453743_3770370240088288146_n.jpg'),
(10, 19, 'imageShoe/213649488_187668229973939_9155369604254683281_n.jpg'),
(21, 21, 'imageShoe/73039743_457799481516743_2944413433908428800_n.jpg'),
(24, 24, 'imageShoe/146972117_2849928912001221_7521882077628797924_n.jpg'),
(25, 24, 'imageShoe/ao.jpg'),
(26, 23, 'imageShoe/73039743_457799481516743_2944413433908428800_n.jpg'),
(27, 23, 'imageShoe/74589546_545009112982009_579124783078178816_n.jpg'),
(28, 23, 'imageShoe/146972117_2849928912001221_7521882077628797924_n.jpg'),
(29, 22, 'imageShoe/cogiaoman.png'),
(30, 25, 'imageShoe/SharedScreenshot3.jpg'),
(31, 25, 'imageShoe/SharedScreenshot4.jpg'),
(32, 25, 'imageShoe/SharedScreenshot5.jpg'),
(33, 26, 'imageShoe/SharedScreenshot.jpg'),
(34, 26, 'imageShoe/SharedScreenshot2.jpg'),
(35, 27, 'imageShoe/245073628_3091058767796051_5731964485928323993_n.jpg'),
(36, 27, 'imageShoe/245495174_2898697773716058_6691009756593589867_n.png'),
(37, 27, 'imageShoe/245642692_415139920308073_6895757974366559092_n.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `gender` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `dob`, `address`, `role`, `gender`, `email`, `phone`) VALUES
(15, 'truong', '25d55ad283aa400af464c76d713c07ad', 'Nguyễn Gia Trường', '2001-04-27', 'Bắc Ninh', 0, 1, 'truongjae@gmail.com', '0345382198');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shoe_image`
--
ALTER TABLE `shoe_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `shoe`
--
ALTER TABLE `shoe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `shoe_image`
--
ALTER TABLE `shoe_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
