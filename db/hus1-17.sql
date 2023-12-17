-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 03:09 PM
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
-- Database: `hus1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
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
-- Dumping data for table `cart`
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'kids'),
(4, 'nike'),
(5, 'adidas');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
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
-- Table structure for table `reviews`
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
-- Dumping data for table `reviews`
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
-- Table structure for table `shoe`
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
-- Dumping data for table `shoe`
--

INSERT INTO `shoe` (`id`, `name`, `price`, `sale`, `size`, `category_id`, `color`, `review`) VALUES
(7, 'áo phông Adidas', 200000, 0, 'XL, L, S, M', 1, 'Đỏ, Trắng,Đen, Xám', '4'),
(8, 'Quần áo chạy Adidas', 300000, 15, 'XL,L,S,M', 1, 'Xanh, Đen, Vàng', 'Đồ đẹp'),
(9, 'Áo khoác Adidas', 500000, 20, 'S,M,L,XL,2XL', 5, 'Xanh, Đỏ, Đen Trắng', 'áo đẹp'),
(10, 'Áo khoác quần thể thao Adidas', 400000, 0, 'X,M,L,XL, 27,28,29,30', 1, 'Xanh,Đen Trắng, Đỏ', 'Quần áo đẹp'),
(11, 'Áo khoác thể thao nữ Adidas', 300000, 30, 'S,M,L,XL', 2, 'Tím,Vàng, Đỏ', 'Áo khoác đẹp'),
(12, 'Áo polo nam Aiddas', 300000, 0, 'M,S,L,XL', 1, 'Đen Trắng, Đỏ, Xanh', 'áo đẹp'),
(13, 'Giày adidas', 400000, 30, '37,38,39,40,41', 5, 'Đen,Trắng,Đỏ', 'giày đẹp'),
(14, 'Áo phông nam Adidas', 250000, 30, 'S,M,L,XL', 1, 'Xanh,Đỏ Vàng', 'Áo đẹp'),
(15, 'Giày Adidas', 600000, 10, '38,39,40,41,42', 1, 'Đen,Xám', 'Giày cá tính'),
(16, 'Giày Adidas', 500000, 0, '38,39,40,41', 5, 'Đen, Đỏ, Trắng', 'giày chất'),
(17, 'Áo polo nam Adidas', 300000, 20, 'M,S,L,XL', 1, 'Trắng,Đỏ,Xanh', 'Áo polo đẹp'),
(18, 'Giày nữ', 500000, 0, '36,37,38,39', 2, 'Trắng Xanh, Đỏ,Đen', 'Giày nữ đẹp'),
(19, 'Giày nữ Adidas', 600000, 0, '36,37,38,39', 2, 'Trắng,Đen,Đỏ', 'Giày đẹp'),
(20, 'Áo polo nam Nike', 450000, 0, 'M,S,L,XL', 1, 'Đen, Đỏ,Trắng', 'Áo đẹp'),
(21, 'Áo polo nam Nike', 400000, 10, 'M,S,L,XL', 1, 'Xanh,Vàng', 'Áo polo đẹp'),
(22, 'Áo polo', 300000, 0, 'M,S,L,XL', 1, 'Xanh Trắng,Nâu,Xám', 'Áo đẹp'),
(23, 'Váy nữ', 300000, 0, 'S,M,XS', 2, 'Trắng Hồng,Trắng', 'Váy đẹp'),
(24, 'Áo khoác dạ nữ', 1000000, 20, 'S,M,L', 2, 'Nâu,Đen, Xám', 'Áo dạ đẹp'),
(25, 'Váy nữ', 400000, 0, 'M,S,XS', 2, 'Trắng,Đỏ,Nâu', 'Váy đẹp'),
(26, 'Giày nữ đẹp', 500000, 10, '36,37,38,39', 2, 'Cầu Vồng, Đỏ,Đen', 'Giày đẹp'),
(27, 'Giày nữ AIR', 600000, 0, '35,36,37,38', 2, 'Trắng Hồng, Đỏ Đen,Xanh', 'Giày cá tính'),
(28, 'Giày boot nữ', 400000, 10, '36,37,38,39', 2, 'Đen,Nâu,Xám', 'Giày boot'),
(29, 'Giày nữ Vogue', 500000, 0, '35,36,37,38', 2, 'Bong bóng, Đỏ,Nâu', 'Giày chất'),
(30, 'Giày Adidas nữ', 600000, 0, '35,36,37,38', 2, 'Trắng,Đỏ,Đen', 'Giày đẹp'),
(31, 'Giày Adidas nữ', 700000, 10, '36,37,39,39', 2, 'Nhiều màu,Đỏ, Xanh', 'Giày độc đáo'),
(32, 'Quần áo thể thao Nike', 300000, 0, 'M,S,L,XL', 4, 'Xanh,Đỏ,Đen', 'Quần áo thể thao'),
(33, 'Áo hoodie Nike', 400000, 0, 'M,S,L,XL', 4, 'Đen,Đỏ,Trắng', 'Áo hoodie Nike'),
(34, 'Áo khoác Nike', 500000, 0, 'S,M,L,XL', 4, 'Đen Trắng, Đỏ,Đen', 'Áo khoác thể thao'),
(35, 'Áo hoodie Nike', 350000, 0, 'S,M,L,XL', 4, 'Nâu,Đen,Đỏ', 'Áo hoodie'),
(36, 'Giày Nike', 1000000, 0, '36,37,38,39,40', 4, 'Trắng Đen,Đỏ,Nâu', 'Giày nike'),
(37, 'Giày nam Nike', 800000, 10, '37,38,39,40,41', 1, 'Trắng, Đen, Đỏ', 'Giày thể thao'),
(38, 'Giày Nike', 700000, 10, '38,39,40,41,42', 4, 'Trắng Đỏ,Đen,Xám', 'Giày nam chất'),
(39, 'Áo khoác Nike', 400000, 0, 'S,M,L,XL', 4, 'Trắng Đen, Đỏ, Vàng,Xám', 'Áo khoác nam'),
(40, 'Giày Nike', 500000, 0, '37,38,39,40', 4, 'Đen,Đỏ, Trắng', 'Giày nike đẹp'),
(41, 'Giày Nike đẹp', 900000, 0, '38,39,40,41', 4, 'Trắng Đen,Xám,Nâu', 'Giày Nike'),
(42, 'Giày Nike thời trang', 600000, 0, ',38,39,40,41', 2, 'Trắng,Đỏ,Đen', 'Giày Nike thời trang'),
(43, 'Áo khoác Nike', 400000, 0, 'M,S,L,XL', 4, 'Xanh,Đỏ,Đen', 'Áo khoác thể thao'),
(44, 'Đồ cho bé Gái', 300000, 0, '1,2,3,4', 3, 'Hồng,Đỏ,Xanh', 'Đồ trẻ em'),
(45, 'Giày bé Trai', 200000, 0, '8,9,10,11', 3, 'Xanh,Đỏ Vàng', 'Giày trẻ em'),
(46, 'Áo khoác bé Trai', 200000, 20, '13,14,15,16', 3, 'Tím,Đỏ,Đen', 'Áo khoác trẻ em'),
(47, 'Đồ bé gái', 300000, 20, '11,12,13,14', 3, 'Hồng,Đỏ,Đen', 'Đồ bé gái'),
(48, 'Giày bé Gái', 300000, 20, '12,13,14,15', 3, 'Trắng,Đỏ,Xanh', 'Giày bé gái'),
(49, 'Giày trẻ em', 200000, 0, '10,11,12,13', 3, 'Trắng,Đen,Nâu', 'Giày trẻ em'),
(50, 'Đồ dài tết bé Trai Gái', 400000, 10, '14,15,16,17', 3, 'Đỏ,Vàng,Xanh', 'Đồ tết trẻ em'),
(51, 'Quần bé Trai', 200000, 0, '14,15,16,17', 3, 'Nâu,Cam,Đỏ,Xanh', 'Quần bé trai'),
(52, 'Đồ thời trang bé Gái', 500000, 0, '13,14,15,16', 3, 'Đỏ,Đen,Nâu', 'Đồ bé gái'),
(53, 'Set đồ bé Trai', 300000, 10, '13,14,15,16', 3, 'Trắng,Đỏ,Xanh', 'Đồ bé trai'),
(54, 'Set đồ bé Gái', 300000, 10, '13,14,15,16', 3, 'Xanh,Trắng,Đỏ', 'Đồ bé gái'),
(55, 'Giày bé Trai', 400000, 10, '15,16,17,18', 3, 'Đỏ,Nâu,Xanh,Đen', 'Giày bé nam'),
(56, 'Giày bé Trai', 300000, 0, '14,15,16,17', 3, 'Xanh,Nâu,Vàng', 'Giày bé nam '),
(57, 'Quần áo bé Trai', 450000, 10, '13,14,15,16', 3, 'Xanh,Đỏ,Tím', 'Đồ bé Trai');

-- --------------------------------------------------------

--
-- Table structure for table `shoe_image`
--

CREATE TABLE `shoe_image` (
  `id` int(11) NOT NULL,
  `shoe_id` int(11) NOT NULL,
  `link_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shoe_image`
--

INSERT INTO `shoe_image` (`id`, `shoe_id`, `link_image`) VALUES
(1, 7, 'imageShoe/ad1.jpg'),
(2, 8, 'imageShoe/ad2.jpg'),
(3, 9, 'imageShoe/ad3.jpg'),
(4, 10, 'imageShoe/ad4.jpg'),
(5, 11, 'imageShoe/ad5.jpg'),
(6, 12, 'imageShoe/ad6.jpg'),
(7, 13, 'imageShoe/ad7.jpg'),
(8, 14, 'imageShoe/ad8.jpg'),
(9, 15, 'imageShoe/ad10.jpg'),
(10, 16, 'imageShoe/ad11.jpg'),
(11, 17, 'imageShoe/ad16.jpg'),
(12, 18, 'imageShoe/ad17.jpg'),
(13, 19, 'imageShoe/ad18.jpg'),
(14, 20, 'imageShoe/an.jpg'),
(15, 21, 'imageShoe/an1.jpg'),
(16, 22, 'imageShoe/an5.jpg'),
(17, 23, 'imageShoe/dn.jpg'),
(18, 24, 'imageShoe/dn1.jpg'),
(19, 25, 'imageShoe/dn2.jpg'),
(20, 26, 'imageShoe/ga9.jpg'),
(21, 27, 'imageShoe/gn.jpg'),
(22, 28, 'imageShoe/gn1.jpg'),
(23, 29, 'imageShoe/gn2.jpg'),
(24, 30, 'imageShoe/gn7.jpg'),
(25, 31, 'imageShoe/gn8.jpg'),
(26, 32, 'imageShoe/n.jpg'),
(27, 33, 'imageShoe/n2.jpg'),
(28, 34, 'imageShoe/n3.jpg'),
(29, 35, 'imageShoe/n4.jpg'),
(30, 36, 'imageShoe/n5.jpg'),
(31, 37, 'imageShoe/n6.jpg'),
(32, 38, 'imageShoe/n7.jpg'),
(33, 39, 'imageShoe/n8.jpg'),
(34, 40, 'imageShoe/n9.jpg'),
(35, 41, 'imageShoe/n15.jpg'),
(36, 42, 'imageShoe/n16.jpg'),
(37, 43, 'imageShoe/qa.jpg'),
(38, 44, 'imageShoe/t1.jpg'),
(39, 45, 'imageShoe/t2.jpg'),
(40, 46, 'imageShoe/t3.jpg'),
(41, 47, 'imageShoe/t4.jpg'),
(42, 48, 'imageShoe/t5.jpg'),
(43, 49, 'imageShoe/t6.jpg'),
(44, 50, 'imageShoe/t7.jpg'),
(45, 51, 'imageShoe/t8.jpg'),
(46, 52, 'imageShoe/t9.jpg'),
(47, 53, 'imageShoe/t10.jpg'),
(48, 54, 'imageShoe/t11.jpg'),
(49, 55, 'imageShoe/t12.jpg'),
(50, 56, 'imageShoe/t13.jpg'),
(51, 57, 'imageShoe/t14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoe_image`
--
ALTER TABLE `shoe_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `shoe`
--
ALTER TABLE `shoe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `shoe_image`
--
ALTER TABLE `shoe_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
