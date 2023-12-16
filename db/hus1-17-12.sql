-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 16, 2023 lúc 08:06 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hus1`
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
  `shoe_size` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `shoe_id`, `shoe_color`, `shoe_size`, `status`) VALUES
(6, 2, 25, 'hồng', '23', 1),
(7, 1, 28, 'xanh', '32', 2),
(8, 19, 29, 'xanh', '32', 2),
(9, 19, 28, 'xanh', '32', 2),
(10, 1, 28, 'xanh', '32', 4),
(11, 19, 29, 'xanh', '32', 2),
(12, 19, 30, 'red', '231', 2),
(13, 19, 29, 'red', '231', 2),
(14, 19, 28, 'xanh', '32', 2),
(15, 19, 29, 'xanh', '32', 2),
(16, 19, 28, 'xanh', '32', 2),
(17, 1, 30, 'xanh', '231', 2),
(18, 1, 29, 'xanh', '231', 2),
(19, 1, 31, '321321', '213', 2),
(20, 1, 30, '321321', '213', 2),
(21, 19, 34, 'xanh', '32', 2),
(22, 19, 33, '3', '33', 2),
(23, 19, 34, '3', '33', 2),
(25, 1, 40, '2', '2', 2),
(27, 1, 40, '2', '2', 2),
(28, 1, 37, '5', '5', 2),
(29, 1, 29, '234324', '234324', 2),
(30, 1, 29, ' đỏ', '42', 2),
(32, 1, 40, '2', '2', 2),
(33, 1, 28, '5', '5', 2),
(34, 1, 31, 'xanh', '32', 2),
(36, 1, 40, '2', '2', 2),
(37, 1, 30, '5', '5', 2),
(38, 1, 29, 'xanh', '231', 2),
(40, 1, 38, '2', '2', 4),
(49, 19, 40, '2', '2', 2),
(55, 1, 39, '33', '3', 4),
(56, 1, 36, '33', '3', 3),
(57, 19, 39, '33', '3', 2),
(58, 19, 31, '33', '3', 2),
(60, 1, 42, '213', '3321', 2),
(63, 19, 40, '213', '3321', 2),
(66, 19, 40, '2123', '2123', 2),
(71, 19, 40, '2123', '2123', 2),
(72, 19, 29, '5', '5', 2),
(73, 19, 28, 'xanh', '42', 2),
(74, 19, 41, 'xanh', '32', 2),
(75, 19, 31, '2', '2', 3),
(76, 19, 30, '321321', '213', 2),
(77, 19, 34, 'xanh', '231', 2),
(83, 19, 42, '213', '3321', 2),
(84, 19, 42, '2123', '2123', 2),
(86, 19, 40, '213', '3321', 4),
(87, 19, 29, '5', '5', 2),
(88, 1, 30, 'xanh', '32', 3),
(90, 1, 36, '2', '2', 4),
(91, 1, 42, '21', '21', 2),
(92, 1, 29, '2123', '2123', 2),
(93, 1, 39, 'xanh', '32', 2),
(94, 1, 42, '2123', '2123', 2),
(97, 19, 43, 'xanh', '32', 2),
(98, 1, 30, '2', '2', 2),
(99, 19, 42, '2123', '2123', 4),
(100, 19, 43, '213', '3321', 2),
(101, 19, 43, '213', '3321', 3),
(103, 1, 42, '213', '3321', 2),
(104, 1, 40, '2123', '2123', 2),
(108, 1, 42, '2123', '2123', 2),
(109, 1, 42, '2123', '2123', 2),
(111, 1, 31, '321321', '213', 2),
(113, 1, 40, '5', '5', 2),
(114, 1, 42, '2123', '2123', 2),
(115, 1, 35, '4324', '3432', 2),
(116, 1, 40, '5', '5', 2),
(117, 1, 31, '321321', '213', 2),
(119, 1, 37, '234324', '234324', 2),
(120, 1, 42, '2123', '2123', 2),
(122, 1, 31, '321321', '213', 2),
(123, 19, 40, '5', '5', 1),
(124, 19, 31, '321321', '213', 1),
(125, 1, 34, '3', '33', 2),
(126, 1, 41, '2', '2', 2),
(129, 1, 41, '2', '2', 2),
(130, 1, 29, ' đỏ', '42', 2),
(132, 1, 42, '2123', '2123', 2),
(133, 1, 33, '4', '4', 2),
(134, 1, 42, '2123', '2123', 2),
(137, 1, 42, '2123', '2123', 2),
(140, 1, 42, '2123', '2123', 2),
(141, 1, 44, ' xám', '29', 1),
(142, 23, 44, 'đen', '28', 2),
(144, 1, 45, ' Đỏ', 'XL', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `NAME`, `email`, `message`, `created_at`) VALUES
(3, 'Tuấn Nguyễn  Anh 2', 'nguyenatuan0302@gmail.com', 'Đẹp', '2023-11-27 02:54:21'),
(4, 'Tuấn Nguyễn  Anh 2', 'nguyenatuan0302@gmail.com', 'Xấu', '2023-11-27 02:59:29'),
(5, 'Nguyễn Anh Tuấn ', 'nguyenatuan0302@gmail.com', 'Pro', '2023-11-27 04:14:13'),
(6, 'Hoàng Hữu Hiếu', 'hoanghuuhieu@gmail.com', 'Trang web rất hữu ích', '2023-11-27 04:18:41'),
(7, 'Hieu', '3323@gmail.com', '1232123', '2023-11-27 15:31:12'),
(8, 'Hiếu Hoàng', 'hieu2002@gmail.com', 'WEB đẹp', '2023-11-27 15:39:57'),
(9, 'Hiếu đẹp trai', 'hieu@gmail.com', 'Hay lắm', '2023-11-27 19:27:02'),
(10, 'hiếu', 'h@gmail.com', 'dsadnjkcnskjacjankcjnakjc ạkc ạkcnjaknckjanlcljkaaaaaaaaaaadsadnjkcnskjacjankcjnakjc ạkc ạkcnjaknckjanlcljkaaaaaaaaaaa\nscaaaaaaaaaaaaaaaaaaadsadnjkcnskjacjankcjnakjc ạkc ạkcnjaknckjanlcljkaaaaaaaaaaa\nscaaaaaaaaaaaaaaaaaaadsadnjkcnskjacjankcjnakjc ạkc ạkcnjaknckjanlcljkaaaaaaaaaaa\nscaaaaaaaaaaaaaaaaaaadsadnjkcnskjacjankcjnakjc ạkc ạkcnjaknckjanlcljkaaaaaaaaaaa\nscaaaaaaaaaaaaaaaaaaadsadnjkcnskjacjankcjnakjc ạkc ạkcnjaknckjanlcljkaaaaaaaaaaa\nscaaaaaaaaaaaaaaaaaaadsadnjkcnskjacjankcjnakjc ạkc ạkcnjaknckjanlcljkaaaaaaaaaaa\nscaaaaaaaaaaaaaaaaaaadsadnjkcnskjacjankcjnakjc ạkc ạkcnjaknckjanlcljkaaaaaaaaaaa\nscaaaaaaaaaaaaaaaaaaadsadnjkcnskjacjankcjnakjc ạkc ạkcnjaknckjanlcljkaaaaaaaaaaa\nscaaaaaaaaaaaaaaaaaaa\nscaaaaaaaaaaaaaaaaaaa', '2023-11-27 19:52:42'),
(11, '123', '12@gmail.com', 'wwell', '2023-11-28 10:52:22'),
(12, '', '', '', '2023-11-28 10:57:35'),
(13, '', '', '', '2023-11-28 10:57:40'),
(14, '', '', '', '2023-11-28 10:57:44'),
(15, '', '', '', '2023-11-28 10:57:49'),
(16, 's', 's@gmail.com', 'dd', '2023-11-28 11:03:18'),
(17, 's', 's@gmail.com', ' s', '2023-11-28 11:08:11'),
(18, 's', 's@gmail.com', ' s', '2023-11-28 11:08:28'),
(19, 's', 's@gmail.com', ' s', '2023-11-28 11:09:09'),
(20, 's', 's@gmail.com', ' s', '2023-11-28 11:09:38'),
(21, 's', 's@gmail.com', ' s', '2023-11-28 11:09:42'),
(22, 's', 's@gmail.com', ' s', '2023-11-28 11:10:17'),
(23, 'sss', 'ss@gmail.com', ' sss', '2023-11-28 11:11:18'),
(24, 'sss', 'ss@gmail.com', ' sss', '2023-11-28 11:12:00'),
(25, 'sss', 'ss@gmail.com', ' sss', '2023-11-28 11:13:02'),
(26, 'hieu', '2002@gmail.com', ' hiếu', '2023-11-28 11:13:31'),
(27, 'ss', 't@gmail.com', '222 ', '2023-11-28 11:19:01'),
(28, 'ssss', 'g@gmail.com', '2 ', '2023-11-28 11:19:40'),
(29, 'ssss', 'g@gmail.com', '2 ', '2023-11-28 11:20:30'),
(30, 's', 's@gmail.com', '2 ', '2023-11-28 11:20:47'),
(31, 's', 's@gmail.com', '2 ', '2023-11-28 11:21:07'),
(32, 's', 's@gmail.com', '2 ', '2023-11-28 11:21:39'),
(33, 's', 's@gmail.com', '2 ', '2023-11-28 11:22:52'),
(34, 'ddddd', 'd@gmail.com', 'ssasas ', '2023-11-28 11:29:29'),
(35, 'ddddd', 'd@gmail.com', 'ssasas ', '2023-11-28 11:35:08'),
(36, 'ddddd', 'd@gmail.com', 'ssasas ', '2023-11-28 11:35:22'),
(37, 'ddddd', 'd@gmail.com', 'ssasas ', '2023-11-28 11:36:07'),
(38, 'ddddd', 'd@gmail.com', 'ssasas ', '2023-11-28 11:36:15'),
(39, 'ddddd', 'd@gmail.com', 'ssasas ', '2023-11-28 11:36:30'),
(40, 'ddddd', 'd@gmail.com', 'ssasas ', '2023-11-28 11:37:18'),
(41, 'ddddd', 'd@gmail.com', 'ssasas ', '2023-11-28 11:38:39'),
(42, 'd', 'd@gmail.com', ' d', '2023-11-28 11:40:39'),
(43, 'h', 'h@gmail.com', ' sssssddssddsa', '2023-11-28 14:37:43'),
(44, 'sdasdsa', 'h@gamil.com', 'ssasdasd ', '2023-11-28 16:28:01'),
(45, 'ssdadsa', 's@gmail.com', ' sdasasa', '2023-11-29 15:59:23'),
(46, 'ssdadsa', 's@gmail.com', ' sdasasa', '2023-11-29 16:00:09'),
(47, 'ssdadsa', 's@gmail.com', ' sdasasa', '2023-11-29 16:00:27'),
(48, 'ssdadsa', 's@gmail.com', ' sdasasa', '2023-11-29 16:00:40'),
(49, 'ádsa', 'dsads@gmail.com', ' rrr@', '2023-11-29 16:03:30'),
(50, 'ádsa', 'dsads@gmail.com', ' rrr@', '2023-11-29 16:04:23'),
(51, 'ádsa', 'dsads@gmail.com', ' rrr@', '2023-11-29 16:04:36'),
(52, 'ádsa', 'dsads@gmail.com', ' rrr@', '2023-11-29 16:05:24'),
(53, 'ádsa', 'dsads@gmail.com', ' rrr@', '2023-11-29 16:05:53'),
(54, 'ádsa', 'dsads@gmail.com', ' rrr@', '2023-11-29 16:06:31'),
(55, 'sads', 'aa@gmail.com', ' sdasd', '2023-11-29 16:07:16'),
(56, 'sads', 'aa@gmail.com', ' sdasd', '2023-11-29 16:08:13'),
(57, 'sads', 'aa@gmail.com', ' sdasd', '2023-11-29 16:08:47'),
(58, 'sads', 'aa@gmail.com', ' sdasd', '2023-11-29 16:09:04'),
(59, 'đsasdsad', 'sasa@gmail.com', 'Tuyệt', '2023-12-08 20:17:58'),
(60, 'TV2H_team', 'tv2h@gmail.com', ' ', '2023-12-12 17:06:31'),
(61, 'TV2H_team', 'tv2h@gmail.com', ' ', '2023-12-12 17:07:05'),
(62, 'ư', 's@gmaill.com', ' ', '2023-12-12 17:07:21'),
(63, 'TV2H_team', 'ss@gmail.com', ' ', '2023-12-12 17:08:39'),
(64, 'TV2H_team', 'tv2h@gmail.com', 'Sản phẩm rất đẹp, tôi hy vọng sẽ được tư vấn nhiều hơn trong đợt tiếp theo', '2023-12-12 17:11:23'),
(65, 's', 's@gmail.com', ' ', '2023-12-12 17:12:04'),
(66, 'TV2H_team', 'tv2h@gmail.com', ' ', '2023-12-12 17:13:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `cart_id`, `quantity`, `date`) VALUES
(1, 1, 0, '2023-11-22'),
(2, 2, 0, '2023-11-22'),
(5, 9, 0, '2023-11-22'),
(6, 10, 0, '2023-11-22'),
(7, 11, 0, '2023-11-23'),
(8, 12, 0, '2023-11-23'),
(9, 13, 0, '2023-11-23'),
(10, 14, 0, '2023-11-23'),
(15, 15, 0, '2023-11-24'),
(16, 16, 0, '2023-11-24'),
(17, 21, 0, '2023-11-24'),
(18, 22, 0, '2023-11-24'),
(19, 23, 0, '2023-11-24'),
(27, 31, 0, '2023-11-24'),
(34, 38, 0, '2023-11-24'),
(35, 41, 0, '2023-11-24'),
(36, 42, 0, '2023-11-24'),
(37, 43, 0, '2023-11-24'),
(38, 44, 0, '2023-11-25'),
(39, 45, 0, '2023-11-25'),
(40, 48, 0, '2023-11-25'),
(41, 49, 0, '2023-11-25'),
(42, 51, 0, '2023-11-25'),
(43, 39, 0, '2023-11-25'),
(44, 40, 0, '2023-11-25'),
(45, 53, 0, '2023-11-25'),
(46, 54, 0, '2023-11-25'),
(47, 55, 0, '2023-11-25'),
(48, 56, 0, '2023-11-25'),
(49, 57, 0, '2023-11-25'),
(50, 58, 0, '2023-11-25'),
(51, 59, 0, '2023-11-25'),
(52, 60, 0, '2023-11-25'),
(53, 61, 0, '2023-11-25'),
(54, 62, 0, '2023-11-25'),
(55, 63, 0, '2023-11-25'),
(56, 64, 0, '2023-11-25'),
(57, 65, 0, '2023-11-25'),
(58, 66, 0, '2023-11-25'),
(59, 67, 0, '2023-11-25'),
(60, 70, 0, '2023-11-26'),
(61, 71, 0, '2023-11-26'),
(62, 72, 0, '2023-11-26'),
(63, 73, 0, '2023-11-26'),
(64, 74, 0, '2023-11-26'),
(65, 75, 0, '2023-11-26'),
(66, 76, 0, '2023-11-26'),
(67, 77, 0, '2023-11-26'),
(68, 78, 0, '2023-11-26'),
(69, 82, 0, '2023-11-26'),
(70, 83, 0, '2023-11-26'),
(71, 88, 0, '2023-11-26'),
(72, 89, 0, '2023-11-26'),
(73, 90, 0, '2023-11-26'),
(74, 91, 0, '2023-11-26'),
(75, 92, 0, '2023-11-26'),
(76, 93, 0, '2023-11-26'),
(77, 84, 0, '2023-11-27'),
(78, 86, 0, '2023-11-27'),
(81, 99, 0, '2023-11-28'),
(82, 100, 0, '2023-11-28'),
(83, 101, 0, '2023-11-28'),
(84, 94, 0, '2023-11-28'),
(85, 95, 0, '2023-11-28'),
(86, 96, 0, '2023-11-28'),
(87, 98, 0, '2023-11-28'),
(88, 102, 0, '2023-11-29'),
(89, 103, 0, '2023-11-29'),
(90, 104, 0, '2023-11-29'),
(91, 105, 0, '2023-11-30'),
(92, 106, 0, '2023-12-03'),
(93, 108, 5, '2023-12-06'),
(94, 109, 3, '2023-12-06'),
(95, 110, 4, '2023-12-06'),
(96, 111, 5, '2023-12-06'),
(97, 112, 1, '2023-12-06'),
(98, 113, 1, '2023-12-06'),
(99, 114, 1, '2023-12-07'),
(100, 115, 1, '2023-12-07'),
(101, 116, 1, '2023-12-07'),
(102, 117, 1, '2023-12-08'),
(103, 118, 1, '2023-12-08'),
(104, 119, 1, '2023-12-08'),
(105, 120, 1, '2023-12-08'),
(106, 121, 1, '2023-12-08'),
(107, 122, 1, '2023-12-08'),
(108, 123, 1, '2023-12-09'),
(109, 124, 1, '2023-12-09'),
(110, 125, 1, '2023-12-10'),
(111, 126, 1, '2023-12-10'),
(112, 127, 1, '2023-12-10'),
(113, 128, 1, '2023-12-10'),
(114, 129, 1, '2023-12-10'),
(115, 130, 1, '2023-12-10'),
(116, 131, 1, '2023-12-11'),
(117, 132, 1, '2023-12-11'),
(118, 133, 1, '2023-12-11'),
(119, 134, 1, '2023-12-11'),
(120, 135, 1, '2023-12-12'),
(121, 136, 5, '2023-12-12'),
(122, 137, 2, '2023-12-13'),
(123, 138, 1, '2023-12-13'),
(124, 139, 1, '2023-12-13'),
(125, 140, 1, '2023-12-13'),
(126, 141, 1, '2023-12-13'),
(127, 142, 1, '2023-12-13'),
(128, 143, 1, '2023-12-14'),
(129, 144, 1, '2023-12-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `shoe_id` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `rating`, `review`, `created_at`, `shoe_id`, `avatar`) VALUES
(51, 'TV2H_team', 'tv2h@gmail.com', 5, 'quá đẹp nha shop', '2023-12-10 17:45:47', 44, 'uploads/'),
(52, 'TV2H_team', 'tv2h@gmail.com', 1, 'tuyệt với nha', '2023-12-10 17:46:38', 44, 'uploads/14-8.jpg'),
(53, 'TV2H_team', 'tv2h@gmail.com', 5, 'oke đấy', '2023-12-10 17:47:08', 44, 'uploads/'),
(54, 'Hiếu', 'tv2h@gmail.com', 1, 'cũng ghê đấy', '2023-12-10 17:52:34', 41, 'uploads/hinh-nen-may-tinh-5k-songoku-sieu-xayda-1.jpg'),
(55, 'Hiếu', 'tv2h@gmail.com', 1, 'cũng ghê đấy', '2023-12-10 17:53:01', 41, 'uploads/hinh-nen-may-tinh-5k-songoku-sieu-xayda-1.jpg'),
(56, 'Hiếu', 'tv2h@gmail.com', 1, 'cũng ghê đấy', '2023-12-10 17:56:21', 41, 'uploads/hinh-nen-may-tinh-5k-songoku-sieu-xayda-1.jpg'),
(57, 'TV2H_team', 'tv2h@gmail.com', 1, 'ngon đấy', '2023-12-10 17:59:46', 42, 'uploads/'),
(58, 'TV2H_team', 'tv2h@gmail.com', 1, 'ngon đấy', '2023-12-10 18:01:39', 42, 'uploads/'),
(59, 'TV2H_team', 'tv2h@gmail.com', 1, 'đẹp đó', '2023-12-10 18:02:02', 41, 'uploads/canny.jpg'),
(60, 'TV2H_team', 'tv2h@gmail.com', 1, 's', '2023-12-10 18:02:48', 41, 'uploads/'),
(61, 'TV2H_team', 'tv2h@gmail.com', 5, 'sss', '2023-12-10 18:03:01', 41, 'uploads/'),
(62, 'TV2H_team', 'tv2h@gmail.com', 5, 'sss', '2023-12-10 18:04:31', 41, 'uploads/'),
(63, 'TV2H_team', 'tv2h@gmail.com', 3, 'xấu', '2023-12-11 20:27:55', 41, 'uploads/'),
(64, 'TV2H_team', 'tv2h@gmail.com', 5, 'đẹp', '2023-12-12 17:14:38', 41, 'uploads/'),
(65, 'TV2H_teamHieu', 'tv2h@gmail.com', 4, 'Quá đẹp nha shop !!!', '2023-12-13 14:44:29', 44, 'uploads/');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `shoe`
--

INSERT INTO `shoe` (`id`, `name`, `price`, `sale`, `size`, `category_id`, `color`, `review`) VALUES
(28, 'Nike air', 2000, 15, '32', 4, 'xanh, đỏ, vàng', 'Giày đẹp'),
(29, 'Jordan', 100000, 50, '32,42,33', 4, 'xanh, đỏ, vàng', 'ddd'),
(30, 'sssddd', 322, 23, '231', 2, 'xanh,do, vang', 'ssad'),
(31, 'sasasasasaassasa', 3213123, 12, '213', 1, '321321', '213321'),
(32, '33333', 323, 32, '3', 1, '3', '33'),
(33, '444444', 44, 4, '4', 1, '4', '4'),
(34, '444444444444444444444444', 3, 3, '33', 4, '3', '3'),
(35, '234234234', 23423432, 33, '3432', 2, '4324', '234'),
(36, 'dsasda', 3123, 21, '21', 1, '21', '21'),
(37, '2342424', 234242, 3, '234324', 1, '234324', '23423'),
(38, '4ewewerw', 432, 3, '324', 5, 'fe', '3'),
(39, '24333333', 234, 3, '3', 5, '33', '3'),
(40, '5555555555555555', 5, 5, '5', 4, '5', '5'),
(41, 'đsasad', 23, 2, '2', 1, '2', '2'),
(42, 'sasasasasasad', 321, 2, '2123', 4, '2123', '1231'),
(44, 'Quần KAKI', 1231231, 0, '28,29,30', 3, 'đen, đỏ, xám, xanh', 'đẹp '),
(45, 'Áo polo Nike', 1000000, 2, 'XL, L, S, M, 36, 38, 37, 40', 1, 'Xanh, Đỏ, Vàng, Nâu,', 'ÁO từ nike');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoe_image`
--

CREATE TABLE `shoe_image` (
  `id` int(11) NOT NULL,
  `shoe_id` int(11) NOT NULL,
  `link_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(29, 22, 'imageShoe/cogiaoman.png'),
(30, 25, 'imageShoe/SharedScreenshot3.jpg'),
(31, 25, 'imageShoe/SharedScreenshot4.jpg'),
(32, 25, 'imageShoe/SharedScreenshot5.jpg'),
(33, 26, 'imageShoe/SharedScreenshot.jpg'),
(34, 26, 'imageShoe/SharedScreenshot2.jpg'),
(35, 27, 'imageShoe/245073628_3091058767796051_5731964485928323993_n.jpg'),
(36, 27, 'imageShoe/245495174_2898697773716058_6691009756593589867_n.png'),
(37, 27, 'imageShoe/245642692_415139920308073_6895757974366559092_n.png'),
(38, 28, 'imageShoe/14-8.jpg'),
(39, 28, 'imageShoe/14-8.jpg'),
(40, 29, 'imageShoe/hinh-nen-may-tinh-5k-songoku-sieu-xayda-1.jpg'),
(41, 30, 'imageShoe/14-8.jpg'),
(42, 30, 'imageShoe/hinh-nen-may-tinh-5k-songoku-sieu-xayda-1.jpg'),
(43, 31, 'imageShoe/Chuyen Nganh.png'),
(45, 41, 'imageShoe/so3.png'),
(46, 42, 'imageShoe/361589311_158993533811228_2576465232391058538_n.jpg'),
(47, 43, 'imageShoe/Screenshot 2023-08-01 011907.png'),
(48, 43, 'imageShoe/Screenshot 2023-08-01 011925.png'),
(49, 43, 'imageShoe/Screenshot 2023-08-05 155335.png'),
(50, 44, 'imageShoe/chess.jpg'),
(51, 44, 'imageShoe/bancov2.jpg'),
(52, 44, 'imageShoe/chess.jpg'),
(53, 44, 'imageShoe/chess2.png'),
(54, 44, 'imageShoe/chess3.png'),
(55, 45, 'imageShoe/canny.jpg');

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
  `phone` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cardName` varchar(255) NOT NULL,
  `cardType` varchar(255) NOT NULL,
  `cardNumber` varchar(255) DEFAULT NULL,
  `cardHolder` varchar(255) NOT NULL,
  `expireDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `dob`, `address`, `role`, `gender`, `email`, `phone`, `quantity`, `img`, `cardName`, `cardType`, `cardNumber`, `cardHolder`, `expireDate`) VALUES
(1, 'admin@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'TV2H_team', '2023-12-07', 'BG, HNS', 1, 1, 'tv2h@gmail.com', '0123456789', 0, 'images/avatar/hinh-nen-may-tinh-5k-songoku-sieu-xayda-1.jpg', 'VCB bank', 'VISA Debit', '8888 8888 8888 9999', 'HOANG HUU HIEU', '06/29'),
(2, 'hieu@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Hieuhh', '2023-10-30', 'vietnam', 0, 0, 'g@gmail.com', '2132132133', 0, '', '', '', NULL, '', ''),
(19, 'Hieuhoang', 'e807f1fcf82d132f9bb018ca6738a19f', 'HieuHoangHuu', '2014-06-06', 'Vietnam', 0, 1, 'hieu02@gmail.com', '3123212312', 0, 'images/avatar/default_avatar.png', 'Techcombank', 'VISA', '123456786789888', 'HOANG HUU HIEU', '06/28'),
(20, 'hieu352', '25f9e794323b453885f5181f1b624d0b', 'HoangHieu', '2023-12-07', 'BG,VN', 0, 1, 'hoanghieu@gmail.com', '0352624327', 0, '', '', '', NULL, '', ''),
(21, 'hieudeptrai', '$2y$10$P05WCA5dtpRnk3FaYrDkqO4kVujiYyp3DJyh/rpr3dd4hMf8ktfd2', 'HoangHuuHieu', '2012-12-05', 'BG, VN', 0, 1, 'hhh@gmail.com', '3212414123', 0, '', '', '', NULL, '', ''),
(22, 'hieudeptrai35', '$2y$10$9rGe3hAAYbU8OCy37lGngO2ynl8d.I0zjHVKLDtehb/GrlA7xmCYy', 'hoanghuuhieu35', '2023-12-13', 'vietnam', 0, 1, 's@gmail.com', '3123141232', 0, '', '', '', NULL, '', ''),
(23, 'husstore', '01a7b74c135edbc50c9476fd6aac8a5c', 'HoangHuuHieu', '2023-12-05', 'VietNam', 0, 1, 'hhhieu02@gmail.com', '3441343243', 0, 'images/avatar/default_avatar.png', 'MB Bank', 'VISA Debit', '4444 4444 4444 444 ', 'HOANG HUU HIEU', '08/34'),
(24, 'hieu02020', '25f9e794323b453885f5181f1b624d0b', 'HieuHH', '2023-12-15', 'Vietnam', 0, 1, 'hieulamviec05@gmail.com', '1231242134', 0, 'images/avatar/hinh-nen-may-tinh-5k-songoku-sieu-xayda-1.jpg', '', '', NULL, '', '');

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
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `shoe`
--
ALTER TABLE `shoe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `shoe_image`
--
ALTER TABLE `shoe_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
