-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 22, 2024 lúc 08:12 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `seaside_paradise_retreat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `total_price` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `id_booking`, `date`, `total_price`) VALUES
(3, 3, '2023-03-25 00:00:00', '120'),
(4, 4, '2023-04-07 00:00:00', '200'),
(5, 5, '2023-05-20 00:00:00', '50'),
(6, 15, '2024-01-06 02:29:29', '2013'),
(7, 16, '2024-01-06 05:23:51', '7013'),
(8, 17, '2024-01-06 05:26:18', '733'),
(9, 18, '2024-01-06 09:58:01', '405'),
(10, 19, '2024-01-06 17:06:34', '17013'),
(11, 20, '2024-01-07 02:30:42', '2013'),
(12, 21, '2024-01-07 02:33:28', '823'),
(13, 22, '2024-01-07 02:37:23', '253'),
(14, 23, '2024-01-07 02:47:59', '1000013'),
(15, 24, '2024-01-07 02:53:10', '480013'),
(16, 25, '2024-01-07 11:02:30', '1100013'),
(17, 26, '2024-01-08 03:06:42', '240013'),
(18, 27, '2024-01-09 15:45:47', '4950013'),
(19, 28, '2024-01-09 16:59:05', '1100013'),
(20, 29, '2024-01-09 16:59:29', '550013'),
(21, 30, '2024-01-10 06:31:06', '1600013'),
(22, 31, '2024-01-10 10:35:20', '3996013'),
(23, 32, '2024-01-12 08:22:20', '100013'),
(24, 33, '2024-01-12 14:20:05', '240013'),
(25, 34, '2024-01-12 15:05:35', '960013'),
(26, 35, '2024-01-12 15:36:14', '3600013'),
(27, 36, '2024-01-12 15:38:16', '300013'),
(28, 37, '2024-01-12 15:43:29', '100013'),
(29, 38, '2024-01-12 15:48:16', '1200013'),
(30, 39, '2024-01-12 15:52:19', '100013'),
(31, 40, '2024-01-12 15:57:29', '0'),
(32, 41, '2024-01-12 16:02:52', '100013'),
(33, 42, '2024-01-12 16:07:11', '120013'),
(34, 43, '2024-01-12 16:08:12', '100013'),
(35, 44, '2024-01-13 16:06:41', '550013'),
(36, 45, '2024-01-13 16:07:27', '1650013'),
(37, 46, '2024-01-13 16:14:33', '1650013'),
(38, 47, '2024-01-13 16:15:47', '1650013'),
(39, 48, '2024-01-13 16:30:07', '2200013'),
(40, 49, '2024-01-13 16:30:22', '1650013'),
(41, 50, '2024-01-13 17:30:39', '1100013'),
(42, 51, '2024-01-13 17:30:52', '550013'),
(43, 52, '2024-01-13 17:37:06', '550013'),
(44, 53, '2024-01-13 17:37:17', '1100013'),
(45, 54, '2024-01-13 17:56:30', '1100013'),
(46, 55, '2024-01-13 17:56:51', '550013'),
(47, 56, '2024-01-13 17:58:39', '550013'),
(48, 57, '2024-01-13 18:06:17', '550013'),
(49, 58, '2024-01-13 18:06:39', '550013'),
(50, 59, '2024-01-13 18:10:34', '550013'),
(51, 60, '2024-01-13 18:11:16', '1100013'),
(52, 61, '2024-01-13 18:16:05', '1100013'),
(53, 62, '2024-01-13 18:19:22', '550013'),
(54, 63, '2024-01-13 18:20:12', '550013'),
(55, 64, '2024-01-13 18:23:25', '550013'),
(56, 65, '2024-01-13 18:24:06', '1100013'),
(57, 66, '2024-01-13 18:27:05', '1100013'),
(58, 67, '2024-01-13 18:27:19', '550013'),
(59, 68, '2024-01-13 18:28:52', '550013'),
(60, 69, '2024-01-13 18:29:06', '1100013'),
(61, 70, '2024-01-13 18:29:20', '550013'),
(62, 71, '2024-01-13 18:30:21', '550013'),
(63, 72, '2024-01-13 18:32:49', '550013'),
(64, 73, '2024-01-13 18:40:05', '200013'),
(65, 74, '2024-01-13 18:41:06', '200013'),
(66, 75, '2024-01-13 18:41:22', '200013'),
(67, 76, '2024-01-13 18:47:12', '1100013'),
(68, 77, '2024-01-13 18:47:29', '550013'),
(69, 78, '2024-01-13 18:47:41', '550013'),
(70, 79, '2024-01-14 02:27:59', '550013'),
(71, 80, '2024-01-14 02:35:25', '550013'),
(72, 81, '2024-01-14 02:45:59', '300013'),
(73, 82, '2024-01-16 14:39:32', '200013'),
(74, 83, '2024-01-17 02:46:40', '120013'),
(75, 84, '2024-01-20 04:40:30', '100013'),
(76, 85, '2024-01-22 12:49:32', '100013'),
(77, 86, '2024-01-22 12:50:24', '200013');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `id_room` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `check_in_date` datetime DEFAULT NULL,
  `check_out_date` datetime DEFAULT NULL,
  `note` varchar(500) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`id`, `id_room`, `id_user`, `check_in_date`, `check_out_date`, `note`, `availability`) VALUES
(3, 3, 3, '2023-03-20 00:00:00', '2023-03-25 00:00:00', 'I will come on the weekend', 0),
(4, 4, 4, '2023-04-05 00:00:00', '2023-04-07 00:00:00', 'I will come on Monday', 1),
(5, 4, 4, '2023-04-05 00:00:00', '2023-04-07 00:00:00', 'I will come on Monday', 1),
(8, 1, 3, '2024-01-05 00:00:00', '2024-01-07 00:00:00', 'I will come to hotel soon', 1),
(9, 3, 4, '2024-01-06 00:00:00', '2024-01-08 12:00:00', 'Oke', 1),
(10, 4, 6, '2024-01-07 00:00:00', '2024-01-09 12:00:00', 'It is Oke', 1),
(11, 5, 8, '2024-01-08 00:00:00', '2024-01-10 12:00:00', 'Oke', 1),
(12, 6, 10, '2024-01-10 00:00:00', '2024-01-12 12:00:00', 'I will come to hotel soon', 1),
(13, 7, 11, '2024-01-06 00:00:00', '2024-01-08 12:00:00', 'Oke', 1),
(14, 5, 12, '2024-01-09 00:00:00', '2024-01-10 12:00:00', 'Oke', 1),
(15, 1, 20, '2024-01-06 09:29:00', '2024-01-08 09:29:00', 'I will come to early', 1),
(16, 4, 20, '2024-01-06 11:23:00', '2024-02-10 11:23:00', '7 triệu à mắc thế', 0),
(17, 5, 20, '2024-01-18 11:26:00', '2024-01-26 11:26:00', 'ww', 1),
(18, 20, 20, '2024-01-06 15:00:00', '2024-01-12 15:57:00', '111ew', 0),
(19, 1, 20, '2024-01-01 23:06:00', '2024-01-18 23:06:00', 'test booking', 1),
(20, 1, 20, '2024-01-08 08:30:00', '2024-01-10 08:30:00', '2 đêm', 1),
(21, 5, 20, '2024-01-08 08:33:00', '2024-01-17 08:33:00', '1111', 1),
(22, 3, 20, '2024-01-08 08:37:00', '2024-01-10 08:37:00', 'dddđ', 1),
(23, 14, 20, '2024-01-08 08:47:00', '2024-01-10 08:47:00', 'ok', 1),
(24, 3, 20, '2024-01-09 08:52:00', '2024-01-11 08:52:00', 'ggg', 1),
(25, 4, 20, '2024-01-08 17:02:00', '2024-01-10 17:02:00', 'llll', 1),
(26, 2, 20, '2024-01-09 09:06:00', '2024-01-11 09:06:00', 'hhhhh', 1),
(27, 4, 20, '2024-01-01 21:45:00', '2024-01-10 21:45:00', 'dddd', 1),
(28, 4, 20, '2024-01-09 22:58:00', '2024-01-11 22:58:00', 'dd', 1),
(29, 4, 20, '2024-01-10 22:59:00', '2024-01-11 22:59:00', 'dd', 1),
(30, 5, 20, '2024-01-12 12:30:00', '2024-01-13 12:31:00', 'vvvv', 1),
(31, 11, 20, '2024-01-16 16:35:00', '2024-01-20 16:35:00', 'ffff', 0),
(32, 1, 20, '2024-01-14 14:22:00', '2024-01-15 14:22:00', 'êr', 1),
(33, 2, 20, '2024-01-14 20:19:00', '2024-01-15 20:20:00', 'hhhh', 1),
(34, 2, 20, '2024-01-18 21:04:00', '2024-01-25 21:05:00', 'đ', 1),
(35, 7, 20, '2024-01-20 21:36:00', '2024-01-16 21:36:00', 'dd', 1),
(36, 1, 20, '2024-01-14 21:38:00', '2024-01-17 21:38:00', 'jjjj', 1),
(37, 1, 20, '2024-01-13 21:43:00', '2024-01-14 21:43:00', 'gg', 1),
(38, 2, 20, '2024-01-14 21:48:00', '2024-01-24 21:48:00', 'ssss', 1),
(39, 1, 20, '2024-01-13 21:52:00', '2024-01-14 21:52:00', 'ddd', 1),
(40, 1, 20, '2024-01-13 21:52:00', '2024-01-14 21:52:00', 'ddd', 1),
(41, 1, 20, '2024-01-13 22:02:00', '2024-01-14 22:02:00', 'mệt nha', 1),
(42, 2, 20, '2024-01-13 22:07:00', '2024-01-14 22:07:00', 'jjj', 1),
(43, 1, 20, '2024-01-13 22:08:00', '2024-01-14 22:08:00', 'kk', 1),
(44, 4, 20, '2024-01-15 22:06:00', '2024-01-16 22:06:00', 'thử nha', 1),
(45, 4, 20, '2024-01-14 22:05:00', '2024-01-16 22:07:00', 'ê', 1),
(46, 4, 20, '2024-01-14 22:14:00', '2024-01-17 22:14:00', 'hhhh', 1),
(47, 4, 20, '2024-01-14 22:15:00', '2024-01-17 22:15:00', 'fd', 1),
(48, 4, 20, '2024-01-17 22:29:00', '2024-01-21 22:29:00', 'sss', 1),
(49, 4, 20, '2024-01-17 22:30:00', '2024-01-20 22:30:00', 'ccc', 1),
(50, 4, 20, '2024-01-15 23:30:00', '2024-01-17 23:30:00', 'test', 1),
(51, 4, 20, '2024-01-15 23:30:00', '2024-01-16 23:30:00', 'ddd', 1),
(52, 4, 20, '2024-01-15 23:36:00', '2024-01-16 23:36:00', 'yyyy', 1),
(53, 4, 20, '2024-01-15 23:37:00', '2024-01-17 23:37:00', 'dd', 1),
(54, 4, 20, '2024-01-15 23:56:00', '2024-01-17 23:56:00', 'uuu', 1),
(55, 4, 20, '2024-01-15 23:56:00', '2024-01-16 23:56:00', 'fff', 1),
(56, 4, 20, '2024-01-15 23:58:00', '2024-01-16 23:58:00', 'm', 1),
(57, 4, 20, '2024-01-16 00:06:00', '2024-01-17 00:06:00', '22', 1),
(58, 4, 20, '2024-01-16 00:06:00', '2024-01-17 00:06:00', '33', 1),
(59, 4, 20, '2024-01-15 00:10:00', '2024-01-16 00:10:00', 'hhme', 1),
(60, 4, 20, '2024-01-15 00:11:00', '2024-01-17 00:11:00', 'ggg', 1),
(61, 4, 20, '2024-01-15 00:15:00', '2024-01-16 00:16:00', '55', 1),
(62, 4, 20, '2024-01-15 00:19:00', '2024-01-16 00:19:00', '45', 1),
(63, 4, 20, '2024-01-15 00:20:00', '2024-01-16 00:20:00', 'ggg', 1),
(64, 4, 20, '2024-01-15 00:23:00', '2024-01-16 00:23:00', 'dđ', 1),
(65, 4, 20, '2024-01-15 00:23:00', '2024-01-16 00:24:00', 'dđ22', 1),
(66, 4, 20, '2024-01-15 00:27:00', '2024-01-17 00:27:00', 'dd', 1),
(67, 4, 20, '2024-01-15 00:27:00', '2024-01-16 00:27:00', 'fff', 1),
(68, 4, 20, '2024-01-15 00:28:00', '2024-01-16 00:28:00', 'ddd', 1),
(69, 4, 20, '2024-01-16 00:28:00', '2024-01-17 00:29:00', 'đ', 1),
(70, 4, 20, '2024-01-16 00:29:00', '2024-01-17 00:29:00', 'dđ', 1),
(71, 4, 20, '2024-01-16 00:30:00', '2024-01-17 00:30:00', 'dd', 1),
(72, 4, 20, '2024-01-15 00:32:00', '2024-01-16 00:32:00', 'fff', 1),
(73, 6, 20, '2024-01-16 00:40:00', '2024-01-17 00:40:00', 'ggg', 1),
(74, 6, 20, '2024-01-16 00:41:00', '2024-01-17 00:41:00', 'gg', 1),
(75, 6, 20, '2024-01-16 00:41:00', '2024-01-17 00:41:00', 'dd', 1),
(76, 4, 20, '2024-01-15 00:47:00', '2024-01-17 00:47:00', 'đ', 1),
(77, 4, 20, '2024-01-15 00:47:00', '2024-01-16 00:47:00', 'dd', 1),
(78, 4, 20, '2024-01-16 00:47:00', '2024-01-17 00:47:00', 'ee', 1),
(79, 4, 20, '2024-01-15 08:27:00', '2024-01-16 08:27:00', 'gg', 1),
(80, 4, 20, '2024-01-15 08:35:00', '2024-01-16 08:35:00', 'ffff', 1),
(81, 8, 20, '2024-01-16 08:45:00', '2024-01-19 08:45:00', 'dd', 1),
(82, 1, 20, '2024-02-01 20:39:00', '2024-02-03 20:39:00', 'hhhh', 1),
(83, 2, 20, '2024-02-09 08:46:00', '2024-02-10 08:46:00', 'test bill\r\n', 1),
(84, 1, 20, '2024-01-21 10:40:00', '2024-01-22 10:40:00', 'tes', 1),
(85, 1, 20, '2024-01-24 12:49:00', '2024-01-25 12:49:00', 'fff', 1),
(86, 6, 20, '2024-01-23 12:50:00', '2024-01-24 12:50:00', 'ffff', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `convenients`
--

CREATE TABLE `convenients` (
  `id` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `convenient` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `convenients`
--

INSERT INTO `convenients` (`id`, `id_room`, `convenient`) VALUES
(1, 1, 'Air conditioning, Television, 2 bed, 1 bath, wifi'),
(2, 2, 'Television, 3 bed, 1 bath, wifi'),
(3, 3, 'Television, 3 bed, 1 bath, wifi'),
(4, 4, 'Mini fridge'),
(5, 5, 'Air conditioning, Television, 1 bed, 1 bath, wifi'),
(6, 6, 'Balcony,Air conditioning, Television, 1 bed, 1 bath, wifi'),
(7, 7, 'Television, 2 bed, 1 bath, wifi'),
(8, 8, 'Air conditioning, Television, 2 bed, 1 bath, wifi'),
(9, 9, 'Air conditioning, Television, 4 bed, 2 bath, wifi'),
(10, 10, 'Air conditioning, Television, 3 bed, 1 bath, wifi'),
(11, 11, 'Air conditioning, 2 bed, 1 bath, wifi'),
(12, 12, 'Television, 3 bed, 1 bath, wifi'),
(13, 13, 'Balcony, Television, 3 bed, 1 bath, wifi'),
(14, 14, 'Air conditioning, Television, 3 bed, 1 bath, wifi'),
(15, 15, 'Air conditioning, Television, 3 bed, 1 bath, wifi'),
(16, 16, 'Balcony, Television, 3 bed, 1 bath, wifi'),
(17, 17, 'Air conditioning, Television, 4 bed, 1 bath, wifi'),
(18, 18, 'Air conditioning, Television, 3 bed, 1 bath, wifi'),
(19, 19, 'Air conditioning, Television, 6 bed, 1 bath, wifi'),
(20, 20, 'Air conditioning, Television, 2 bed, 1 bath, wifi'),
(26, 31, '2 Bed, 1 Bath, wifi'),
(27, 32, '1bed 5 bed');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_room`
--

CREATE TABLE `detail_room` (
  `id` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `image_url` varchar(15000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detail_room`
--

INSERT INTO `detail_room` (`id`, `id_room`, `image_url`) VALUES
(1, 1, 'public/images/duluxe_room1.jpg'),
(2, 1, 'public/images/duluxe_room2.jpg'),
(3, 1, 'public/images/duluxe_room3.jpg'),
(4, 1, 'public/images/duluxe_room4.jpg'),
(5, 1, 'public/images/duluxe_room5.jpg'),
(6, 2, 'public/images/chic_lounge_oasis_room1.png'),
(7, 2, 'public/images/chic_lounge_oasis_room2.png'),
(8, 2, 'public/images/chic_lounge_oasis_room3.png'),
(9, 2, 'public/images/chic_lounge_oasis_room4.png'),
(10, 2, 'public/images/chic_lounge_oasis_room5.png'),
(11, 3, 'public/images/paradise_of_rest_room1.png'),
(12, 3, 'public/images/paradise_of_rest_room2.png'),
(13, 3, 'public/images/paradise_of_rest_room3.png'),
(14, 3, 'public/images/paradise_of_rest_room4.png'),
(15, 3, 'public/images/paradise_of_rest_room5.png'),
(16, 4, 'public/images/peaceful_room1.png'),
(17, 4, 'public/images/peaceful_room2.png'),
(18, 4, 'public/images/peaceful_room3.png'),
(19, 4, 'public/images/peaceful_room4.png'),
(20, 4, 'public/images/peaceful_room5.png'),
(21, 5, 'public/images/honeymoon_suite_room1.png'),
(22, 5, 'public/images/honeymoon_suite_room2.png'),
(23, 5, 'public/images/honeymoon_suite_room3.png'),
(24, 5, 'public/images/honeymoon_suite_room4.png'),
(25, 5, 'public/images/honeymoon_suite_room5.png'),
(26, 6, 'public/images/royal_parlor_room1.png'),
(27, 6, 'public/images/royal_parlor_room2.png'),
(28, 6, 'public/images/royal_parlor_room3.png'),
(29, 6, 'public/images/royal_parlor_room4.png'),
(30, 6, 'public/images/royal_parlor_room5.png'),
(31, 7, 'public/images/glamorous_den_room1.png'),
(32, 7, 'public/images/glamorous_den_room2.png'),
(33, 7, 'public/images/glamorous_den_room3.png'),
(34, 7, 'public/images/glamorous_den_room4.png'),
(35, 7, 'public/images/glamorous_den_room5.png'),
(36, 8, 'public/images/regal_gathering_space_room1.png'),
(37, 8, 'public/images/regal_gathering_space_room2.png'),
(38, 8, 'public/images/regal_gathering_space_room3.png'),
(39, 8, 'public/images/regal_gathering_space_room4.png'),
(40, 8, 'public/images/regal_gathering_space_room5.png'),
(41, 9, 'public/images/artistic_lounge_retreat_room1.png'),
(42, 9, 'public/images/artistic_lounge_retreat_room2.png'),
(43, 9, 'public/images/artistic_lounge_retreat_room3.png'),
(44, 9, 'public/images/artistic_lounge_retreat_room4.png'),
(45, 9, 'public/images/artistic_lounge_retreat_room5.png'),
(46, 10, 'public/images/chic_lounge_oasis_room1.png'),
(47, 10, 'public/images/chic_lounge_oasis_room2.png'),
(48, 10, 'public/images/chic_lounge_oasis_room3.png'),
(49, 10, 'public/images/chic_lounge_oasis_room4.png'),
(50, 10, 'public/images/chic_lounge_oasis_room5.png'),
(51, 11, 'public/images/glamorous_den_room1.png'),
(52, 11, 'public/images/glamorous_den_room2.png'),
(53, 11, 'public/images/glamorous_den_room3.png'),
(54, 11, 'public/images/glamorous_den_room4.png'),
(55, 11, 'public/images/glamorous_den_room5.png'),
(56, 12, 'public/images/peaceful_room1.png'),
(57, 12, 'public/images/peaceful_room2.png'),
(58, 12, 'public/images/peaceful_room3.png'),
(59, 12, 'public/images/peaceful_room4.png'),
(60, 12, 'public/images/peaceful_room5.png'),
(61, 13, 'public/images/honeymoon_suite_room1.png'),
(62, 13, 'public/images/honeymoon_suite_room2.png'),
(63, 13, 'public/images/honeymoon_suite_room3.png'),
(64, 13, 'public/images/honeymoon_suite_room4.png'),
(65, 13, 'public/images/honeymoon_suite_room5.png'),
(66, 14, 'public/images/honeymoon_suite_room1.png'),
(67, 14, 'public/images/honeymoon_suite_room2.png'),
(68, 14, 'public/images/honeymoon_suite_room3.png'),
(69, 14, 'public/images/honeymoon_suite_room4.png'),
(70, 14, 'public/images/honeymoon_suite_room5.png'),
(71, 15, 'public/images/glamorous_den_room1.png'),
(72, 15, 'public/images/glamorous_den_room2.png'),
(73, 15, 'public/images/glamorous_den_room3.png'),
(74, 15, 'public/images/glamorous_den_room4.png'),
(75, 15, 'public/images/glamorous_den_room5.png'),
(76, 16, 'public/images/honeymoon_suite_room1.png'),
(77, 16, 'public/images/honeymoon_suite_room2.png'),
(78, 16, 'public/images/honeymoon_suite_room3.png'),
(79, 16, 'public/images/honeymoon_suite_room4.png'),
(80, 16, 'public/images/honeymoon_suite_room5.png'),
(81, 17, 'public/images/glamorous_den_room1.png'),
(82, 17, 'public/images/glamorous_den_room2.png'),
(83, 17, 'public/images/glamorous_den_room3.png'),
(84, 17, 'public/images/glamorous_den_room4.png'),
(85, 17, 'public/images/glamorous_den_room5.png'),
(86, 18, 'public/images/artistic_lounge_retreat_room1.png'),
(87, 18, 'public/images/artistic_lounge_retreat_room2.png'),
(88, 18, 'public/images/artistic_lounge_retreat_room3.png'),
(89, 18, 'public/images/artistic_lounge_retreat_room4.png'),
(90, 18, 'public/images/artistic_lounge_retreat_room5.png'),
(91, 19, 'public/images/chic_lounge_oasis_room1.png'),
(92, 19, 'public/images/chic_lounge_oasis_room2.png'),
(93, 19, 'public/images/chic_lounge_oasis_room3.png'),
(94, 19, 'public/images/chic_lounge_oasis_room4.png'),
(95, 19, 'public/images/chic_lounge_oasis_room5.png'),
(96, 20, 'public/images/honeymoon_suite_room1.png'),
(97, 20, 'public/images/honeymoon_suite_room2.png'),
(98, 20, 'public/images/honeymoon_suite_room3.png'),
(99, 20, 'public/images/honeymoon_suite_room4.png'),
(100, 20, 'public/images/honeymoon_suite_room5.png'),
(122, 31, 'https://ik.imagekit.io/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10012349-2048x1233-FIT_AND_TRIM-ae0c7c0ce9f8fcbdc626271529c83049.jpeg?_src=imagekit&tr=c-at_max,h-360,q-40,w-640'),
(123, 31, 'https://ik.imagekit.io/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10012349-2048x1233-FIT_AND_TRIM-ae0c7c0ce9f8fcbdc626271529c83049.jpeg?_src=imagekit&tr=c-at_max,h-360,q-40,w-640'),
(124, 31, 'https://ik.imagekit.io/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10012349-2048x1233-FIT_AND_TRIM-ae0c7c0ce9f8fcbdc626271529c83049.jpeg?_src=imagekit&tr=c-at_max,h-360,q-40,w-640'),
(125, 31, 'https://ik.imagekit.io/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10012349-2048x1233-FIT_AND_TRIM-ae0c7c0ce9f8fcbdc626271529c83049.jpeg?_src=imagekit&tr=c-at_max,h-360,q-40,w-640'),
(126, 31, 'https://ik.imagekit.io/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10012349-2048x1233-FIT_AND_TRIM-ae0c7c0ce9f8fcbdc626271529c83049.jpeg?_src=imagekit&tr=c-at_max,h-360,q-40,w-640'),
(127, 32, 'https://s.net.vn/Ry2u'),
(128, 32, 'https://s.net.vn/Ry2u'),
(129, 32, 'https://s.net.vn/Ry2u'),
(130, 32, 'https://s.net.vn/Ry2u'),
(131, 32, 'https://s.net.vn/Ry2u');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `id_room` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `favorite`
--

INSERT INTO `favorite` (`id`, `id_room`, `id_user`) VALUES
(5, 1, 4),
(7, 6, 20),
(14, 1, 20),
(15, 4, 20),
(16, 14, 20),
(17, 1, NULL),
(19, 7, 20),
(20, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_room` int(10) NOT NULL,
  `rating` int(1) NOT NULL,
  `content` mediumtext NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `id_user`, `id_room`, `rating`, `content`, `date`) VALUES
(5, 3, 20, 5, 'This room is truly commendable! Not only is it clean and comfortable, but it also offers a very cozy and airy space. From bright colors to smart design, everything is arranged harmoniously and creates a wonderful living space.', '2023-02-15 00:00:00'),
(6, 10, 8, 5, 'This room is truly commendable! Not only is it clean and comfortable, but it also offers a very cozy and airy space. From bright colors to smart design, everything is arranged harmoniously and creates a wonderful living space.', '2023-02-15 00:00:00'),
(7, 11, 2, 5, 'This room is truly commendable! Not only is it clean and comfortable, but it also offers a very cozy and airy space. From bright colors to smart design, everything is arranged harmoniously and creates a wonderful living space.', '2023-02-15 00:00:00'),
(8, 12, 20, 5, 'This room is truly commendable! Not only is it clean and comfortable, but it also offers a very cozy and airy space. From bright colors to smart design, everything is arranged harmoniously and creates a wonderful living space.', '2023-02-15 00:00:00'),
(9, 20, 4, 4, '', '2024-01-10 10:54:39'),
(10, 20, 4, 1, '', '2024-01-10 10:55:26'),
(11, 20, 1, 3, 'tiots', '2024-01-12 14:37:29'),
(12, 20, 4, 2, 'Test feedback', '2024-01-14 02:55:07'),
(13, 20, 1, 3, 'hhhh', '2024-01-14 04:05:19'),
(14, 20, 1, 3, 'tốt', '2024-01-20 04:49:09'),
(15, 20, 1, 1, '', '2024-01-20 04:49:13'),
(16, 20, 1, 3, 'ok', '2024-01-20 04:49:20'),
(17, 20, 1, 4, 'kkkk', '2024-01-20 04:49:35'),
(18, 20, 1, 1, 'dd', '2024-01-20 04:49:44'),
(19, 20, 1, 3, 'alalla', '2024-01-20 04:58:44'),
(20, 20, 4, 3, 'ffff', '2024-01-20 05:03:57'),
(21, 20, 4, 1, 'hhhh', '2024-01-20 05:07:03'),
(22, 20, 4, 1, 'lam', '2024-01-20 05:07:12'),
(23, 20, 1, 1, 'đẹp đấy', '2024-01-20 05:10:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `description` varchar(500) NOT NULL,
  `rating` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `type`, `price`, `availability`, `description`, `rating`) VALUES
(1, 'Duluxey', 'Deluxe', '100000.00', 1, 'Deluxe Rooms are luxurious and spacious hotel accommodations, featuring modern amenities and stunning city views. Bringing visitors memorable and enjoyable experiences', 5),
(2, 'Chic Lounge Oasis', 'Deluxe', '120000.00', 1, 'Premium service along with a wide range of amenities will bring you the experience of the most fulfilling vacation.The 24-hour reception desk is always ready to serve you from check-in to check-out or any requests.', 5),
(3, 'The Prestige Parlor', 'Family room', '240000.00', 1, 'Prestige Parlor is a luxurious living room that exudes elegance and sophistication. Every aspect of this room has been carefully designed to create a feeling of prestige and sophistication.', 5),
(4, 'Paradise of Rest', 'Family room', '550000.00', 1, 'Paradise of Rest is a living room designed to create a wonderful space of relaxation and rest. It brings a feeling of peace, comfort and convenience, helping you find relaxation and refresh your spirit.', 5),
(5, 'Peaceful Room', 'Family room', '800000.00', 1, 'Peaceful Living Room: This living room creates a peaceful and relaxing space. Soft colors, dim lights and comfortable furniture can be used to create an airy and relaxing space.', 5),
(6, 'Honeymoon Suite', 'Family room', '200000.00', 1, 'Honeymoon Suite is a type of hotel room specially designed to serve newlyweds or couples who want to enjoy romantic and special moments during their honeymoon. This room is often spacious and beautifully decorated to create an ideal space for love and romance.', 5),
(7, 'Royal Parlor', 'Family room', '900000.00', 1, 'Prestige Parlor is a luxurious living room that exudes elegance and sophistication. Every aspect of this room has been carefully designed to create a feeling of prestige and sophistication', 5),
(8, 'Glamorous Den ', 'Suite', '100000.00', 1, 'Glamorous Den is a room full of charm and luxury, creating a classy and stylish resort space. With exquisite design and unique furniture, this room brings a desirable living space to customers.', 5),
(9, 'Regal Gathering Space', 'Family room', '450000.00', 1, 'Regal Gathering Space is a great space to gather and meet, giving you a luxurious and elegant space to hold special events. With its premium design and spacious space, this room creates a cozy and classy environment for important meetings and events.', 5),
(10, 'Artistic Lounge Retreat', 'View', '890000.00', 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space ', 5),
(11, 'Artistic Lounge Retreat', 'View', '999000.00', 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration.', 5),
(12, 'Artistic Lounge Retreat', 'View', '450000.00', 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable.', 5),
(13, 'Artistic Lounge Retreat', 'View', '600000.00', 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space.', 5),
(14, 'Artistic Lounge Retreat', 'View', '500000.00', 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space.', 5),
(15, 'Artistic Lounge Retreat', 'View', '459000.00', 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space ', 5),
(16, 'Stylish Sitting Area ', 'Suite', '590000.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
(17, 'Stylish Sitting Area ', 'Suite', '350000.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
(18, 'Stylish Sitting Area ', 'Suite', '650000.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
(19, 'Stylish Sitting Area ', 'Suite', '560000.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
(20, 'Stylish Sitting Area ', 'Suite', '670000.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
(21, 'Stylish Sitting Area ', 'Suite', '890000.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
(22, 'Stylish Sitting Area ', 'Suite', '670000.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
(23, 'Stylish Sitting Area ', 'Suite', '870000.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
(31, 'Livotel Hotel Kaset Nawamin Bangkok', 'Hotel small', '540000.00', 1, 'Livotel Hotel Kaset Nawamin Bangkok là một khách sạn nằm trong khu vực an ninh, toạ lạc tại Sena Nikhom.  khách sạn sở hữu vị trí đắc địa cách sân bay Sân bay quốc tế Don Mueang (DMK) 8,54 km.  khách sạn nằm cách Ratchadaphisek MRT Station 4,66 km.  Không chỉ sở hữu vị trí đắc địa, Livotel Hotel Kaset Nawamin Bangkok còn là một trong những khách sạn nằm cách Wat Mahathat chưa đầy 13,67 km và Wat Yan Nawa chưa đầy 15,53 km.', 5),
(32, 'Dexululuuu', 'family', '430000.00', 0, 'Phòng đẹp đó', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `avatar` varchar(500) NOT NULL DEFAULT 'public/images/avatar.png',
  `password` varchar(500) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(20) DEFAULT 'user',
  `availability` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `password`, `phone`, `email`, `age`, `gender`, `role`, `availability`) VALUES
(3, 'Thanh Vân Tran', 'public/avatar_hi.png', 'phamhi123', '9876543210', 'phamhi@gmail.com', 30, 'Female', 'user', 0),
(4, 'Thanh Vân Tran', 'public/avatar_linh.png', 'nguyenlinh123', '0123456789', 'nguyenlinh@gmail.com', 28, 'Female', 'user', 0),
(6, 'Thanh Vân Tran', 'public/images/avatar.png', '22446688', '0382870032', 'hung.tran25@student.passerellesnumeriques.org', 21, 'Male', 'user', 1),
(8, 'Hoàng Hữu Hùng', 'public/images/avatar.png', '2233445566', '0987664544', 'hunghoang2003@gmail.com', 20, 'Male', 'user', 1),
(10, 'lam Hồng', 'public/images/avatar.png', '$2y$10$s1V4e9E10VWhClhKULP9oOVLAWd5QqOlX5ICcNefELVvuiXnu5V6O', '0987664544', 'lamlo2003@gmail.com', 19, 'Female', 'user', 1),
(11, 'Hồ Ngân', 'public/images/avatar.png', '$2y$10$/zKmqGD2OGA5fOYEIBu/2.E83BENzGjcZA4QbQs.xBm1SHWLc2ZTy', '098735151', 'nganho@gmail.com', 20, 'Nu', 'user', 1),
(12, 'lam Hồng', 'public/images/avatar.png', '$2y$10$oL/6SejZmkUJJP.6VDNO.ecyeQ9FhpEjO4bW..8AbzcauawvHzBHW', '0987664544', 'lamlo2003@gmail.com', 23, 'Nữ', 'user', 1),
(13, 'lam Hồng', 'public/images/avatar.png', '$2y$10$u6/ovGykcjEsgbiAoRWOqOLOnChMnKgN.N/NlB0vFmprr48mdQKNq', '0987664444', 'lamlo2003@gmail.com', 23, 'Nữ', 'user', 1),
(15, 'Trần Đức Hùng', 'public/images/avatar.png', '$2y$10$uIqZNloxjgQHWO.SsFRFO.cZ5SUGBJ..n55QacbsqAaq1wcY6WPhy', '0905753333', 'seasideparadiseretreat@gmail.com', 20, 'Male', 'admin', 1),
(16, 'Dương Thị Hồng Lam', 'public/images/avatar.png', '$2y$10$ZknsRfQ.4h5xmoKFJyB0C.BvZM5BDjElvoWhkSixp6SoI3srMvwj.', '0987654444', 'lam.duong2004@gmail.com', 20, 'Nữ', 'admin', 1),
(17, 'Phạm Thị Hỉ', 'public/images/avatar.png', '$2y$10$RaeEiobq4D2JLUSAqYD46eLv98.cb.nZZgACIkaCNZKvSYBjB111u', '0987645555', 'hi.pham2004@gmail.com', 20, 'Nữ', 'admin', 1),
(20, 'Duong Hong Lam', 'public/images/avatar_linh.jpg', '$2y$10$Lm7uBb7t1N3wCvtNr3jEl.aJJip9Xrq3zEb7um/cE76D/nJDe97TG', '0347645305', 'lamhong@gmail.com', 17, 'Nu', 'user', 1),
(35, 'test5', 'public/images/avatar.png', '$2y$10$K2omoGHhFOJsFhpR3Bu.qODZdUkX.P5eSX.RU3r3AdKBZF7CheVAu', '0878879999', 'test5@gmail.com', 19, 'Female', 'user', 1),
(36, 'test1', 'public/images/avatar.png', '$2y$10$FlFb7TYr1oz.LeeEnuFoDucptdB5Rz378zOZ7A3G9f4wxEMb9jVLC', '0987652222', 'test1@gmail.com', 20, 'Female', 'user', 1),
(37, 'lamduongthi', 'public/images/avatar.png', '$2y$10$g8SJ6m3hAUkiSsGvIQ5sYuC.Os7ORpnSQT.AKA5L07qGGAEDUBauK', '0387885555', 'lam2@gmail.com', 0, 'Male', 'user', 1),
(38, 'lammy', 'public/images/avatar.png', '$2y$10$MJmkop3s1KZ4bih9PpXkcOB9FNkplUSBzqG7vawU.Gp1/zG933fie', '03878879999', 'lammy@gmail.com', 0, 'Female', 'user', 1),
(39, 'mylam', 'public/images/avatar.png', '$2y$10$jWD93adq5oYYYhGd/BbCT.uExTgxRs10P5bgCv9tzKkHX6Whkogyy', '0858873333', 'mylam@gmail.com', 0, 'Female', 'user', 1),
(40, '', 'public/images/avatar.png', '', '0', '', 0, '', 'user', 1),
(41, '', 'public/images/avatar.png', '', '0', '', 0, '', 'user', 1),
(42, '', 'public/images/avatar.png', '', '0', '', 0, '', 'user', 1),
(43, '', 'public/images/avatar.png', '', '0', '', 0, '', 'user', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_booking` (`id_booking`);

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `convenients`
--
ALTER TABLE `convenients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_room` (`id_room`);

--
-- Chỉ mục cho bảng `detail_room`
--
ALTER TABLE `detail_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_room` (`id_room`);

--
-- Chỉ mục cho bảng `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_feedback_id_user` (`id_user`),
  ADD KEY `fk_feedback_id_room` (`id_room`);

--
-- Chỉ mục cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `convenients`
--
ALTER TABLE `convenients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `detail_room`
--
ALTER TABLE `detail_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT cho bảng `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id`);

--
-- Các ràng buộc cho bảng `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `convenients`
--
ALTER TABLE `convenients`
  ADD CONSTRAINT `convenients_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`);

--
-- Các ràng buộc cho bảng `detail_room`
--
ALTER TABLE `detail_room`
  ADD CONSTRAINT `detail_room_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`);

--
-- Các ràng buộc cho bảng `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_feedback_id_room` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `fk_feedback_id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
