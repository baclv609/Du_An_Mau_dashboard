-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 03, 2024 lúc 05:54 PM
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
-- Cơ sở dữ liệu: `du_an_mau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `id_User` int(10) DEFAULT 0,
  `bill_adress` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_user` varchar(255) NOT NULL,
  `bill_ngayDatHang` varchar(50) NOT NULL,
  `bill_phuongThucTT` tinyint(1) NOT NULL COMMENT '1. Thanh toán khi nhận hàng\r\n2. Chuyển Khoản',
  `status` tinyint(4) DEFAULT 0 COMMENT '0. Đơn hàng mới 1.Đang xử lý \r\n2. Đang giao hàng\r\n3. Đã Giao Hàng',
  `tongDH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `id_User`, `bill_adress`, `bill_email`, `bill_tel`, `bill_user`, `bill_ngayDatHang`, `bill_phuongThucTT`, `status`, `tongDH`) VALUES
(43, 9, '[value-5]', '[value-4]', '[value-6]', 'user', '05:02:32pm 02/02/24', 1, NULL, 553),
(44, 9, '[value-5]', '[value-4]', '[value-6]', 'user', '05:04:06pm 02/02/24', 1, NULL, 0),
(45, 9, '[value-5]', '[value-4]', '[value-6]', 'user', '05:04:22pm 02/02/24', 1, NULL, 553),
(46, 9, '[value-5]', '[value-4]', '[value-6]', 'user', '05:06:42pm 02/02/24', 1, NULL, 553),
(47, 9, '[value-5]', '[value-4]', '[value-6]', 'user', '05:12:41pm 02/02/24', 1, NULL, 585),
(48, 9, '[value-5]', '[value-4]', '[value-6]', 'user', '11:26:48am 03/03/24', 1, 0, 472);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `idSp` int(10) NOT NULL,
  `idUser` int(10) NOT NULL,
  `noiDung` text NOT NULL,
  `ngayBinhLuan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `idUser` int(10) NOT NULL,
  `idSp` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `soLuong` int(10) NOT NULL,
  `thanhTien` int(10) NOT NULL,
  `idBill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `idUser`, `idSp`, `name`, `price`, `img`, `soLuong`, `thanhTien`, `idBill`) VALUES
(1, 0, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 1),
(2, 0, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 1),
(3, 0, 20, ' 10 ', 9, '1706152104thph.JPG', 1, 9, 1),
(4, 0, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 1),
(5, 0, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 1),
(6, 0, 20, ' 10 ', 9, '1706152104thph.JPG', 1, 9, 1),
(7, 0, 23, ' Áo khoác 2 lớp da lộn basic ', 801, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 801, 1),
(8, 0, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 1),
(9, 0, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 1),
(10, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 2),
(11, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 2),
(12, 9, 20, ' 10 ', 9, '1706152104thph.JPG', 1, 9, 2),
(13, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 2),
(14, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 2),
(15, 9, 20, ' 10 ', 9, '1706152104thph.JPG', 1, 9, 2),
(16, 9, 23, ' Áo khoác 2 lớp da lộn basic ', 801, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 801, 2),
(17, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 2),
(18, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 2),
(19, 0, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 3),
(20, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 4),
(21, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 4),
(22, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 4),
(23, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 5),
(24, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 5),
(25, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 5),
(26, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 5),
(27, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 6),
(28, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 6),
(29, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 6),
(30, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 6),
(31, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 7),
(32, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 7),
(33, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 7),
(34, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 7),
(35, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 8),
(36, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 8),
(37, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 8),
(38, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 8),
(39, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 9),
(40, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 9),
(41, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 9),
(42, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 9),
(43, 9, 34, ' loa vi tinh ', 9999, 'letotngiep.jpg', 1, 9999, 9),
(44, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 10),
(45, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 10),
(46, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 10),
(47, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 10),
(48, 9, 34, ' loa vi tinh ', 9999, 'letotngiep.jpg', 1, 9999, 10),
(49, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 11),
(50, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 11),
(51, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 11),
(52, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 11),
(53, 9, 34, ' loa vi tinh ', 9999, 'letotngiep.jpg', 1, 9999, 11),
(54, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 12),
(55, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 12),
(56, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 12),
(57, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 12),
(58, 9, 34, ' loa vi tinh ', 9999, 'letotngiep.jpg', 1, 9999, 12),
(59, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 13),
(60, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 13),
(61, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 13),
(62, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 13),
(63, 9, 34, ' loa vi tinh ', 9999, 'letotngiep.jpg', 1, 9999, 13),
(64, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 14),
(65, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 14),
(66, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 14),
(67, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 14),
(68, 9, 34, ' loa vi tinh ', 9999, 'letotngiep.jpg', 1, 9999, 14),
(69, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 15),
(70, 9, 32, ' áo thun ', 9999, 'benner.png', 1, 9999, 15),
(71, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 16),
(72, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 16),
(73, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 16),
(74, 9, 20, ' 10 ', 9, '1706152104thph.JPG', 1, 9, 18),
(75, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 18),
(76, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 19),
(77, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 19),
(78, 9, 34, ' loa vi tinh ', 9999, 'letotngiep.jpg', 1, 9999, 23),
(79, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 23),
(80, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 24),
(81, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 24),
(82, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 25),
(83, 9, 23, ' Áo khoác 2 lớp da lộn basic ', 801, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 801, 25),
(84, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 26),
(85, 9, 32, ' áo thun ', 9999, 'benner.png', 1, 9999, 26),
(86, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 27),
(87, 9, 32, ' áo thun ', 9999, 'benner.png', 1, 9999, 29),
(88, 9, 33, ' loa vi tinh ', 4000, 'hoinghi.jpg', 1, 4000, 29),
(89, 9, 32, ' áo thun ', 9999, 'benner.png', 1, 9999, 30),
(90, 9, 34, ' loa vi tinh ', 9999, 'letotngiep.jpg', 1, 9999, 30),
(91, 9, 34, ' loa vi tinh ', 9999, 'letotngiep.jpg', 1, 9999, 31),
(92, 9, 23, ' Áo khoác 2 lớp da lộn basic ', 801, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 801, 33),
(93, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 34),
(94, 9, 32, ' áo thun ', 9999, 'benner.png', 1, 9999, 35),
(95, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 35),
(96, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 36),
(97, 9, 32, ' áo thun ', 9999, 'benner.png', 1, 9999, 37),
(98, 9, 32, ' áo thun ', 9999, 'benner.png', 1, 9999, 39),
(99, 9, 34, ' loa vi tinh ', 9999, 'letotngiep.jpg', 1, 9999, 41),
(100, 9, 32, ' áo thun ', 9999, 'benner.png', 1, 9999, 42),
(101, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 43),
(102, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 43),
(103, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 45),
(104, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 45),
(105, 9, 24, ' Áo khoác 2 lớp da lộn phối màu color block ', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 1, 553, 46),
(106, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 46),
(107, 9, 22, ' Áo khoác 1 lớp nỉ cổ cao  ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', 1, 585, 47),
(108, 9, 25, ' Áo nỉ can phối Winterland ', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 1, 360, 47),
(109, 9, 36, ' Quần Jeans Nam Trơn.Slim Cropped ', 472, 'quan-jean-nam-26-10s23dpa108cr1_black_1__1_jpg.webp', 1, 472, 48);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `tenDanhMuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tenDanhMuc`) VALUES
(33, 'Áo khoác'),
(34, 'Bộ nỉ'),
(36, 'Quần Nam'),
(37, 'Chân Váy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuckhoahoc`
--

CREATE TABLE `danhmuckhoahoc` (
  `id_danh_muc` int(10) NOT NULL,
  `ten_danh_muc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuckhoahoc`
--

INSERT INTO `danhmuckhoahoc` (`id_danh_muc`, `ten_danh_muc`) VALUES
(1, 'Lập trình WEB'),
(2, 'Lập trình Game');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuctintuc`
--

CREATE TABLE `danhmuctintuc` (
  `id_danhmuc` int(10) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuctintuc`
--

INSERT INTO `danhmuctintuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(2, 'Tin Khuyến Mại'),
(3, 'Chính Sách Bán Hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
--

CREATE TABLE `khoahoc` (
  `id` int(10) NOT NULL,
  `ten_khoa_hoc` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) DEFAULT NULL,
  `gia` varchar(255) NOT NULL,
  `id_danhmuc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoahoc`
--

INSERT INTO `khoahoc` (`id`, `ten_khoa_hoc`, `hinh_anh`, `gia`, `id_danhmuc`) VALUES
(3, 'khoa hoc 9', '1709469320chan-vay-nu-30-10s24skiw001_blue_1__2_jpg.webp', '2006', 2),
(5, 'khoa hoc 3', '', '98', 2),
(6, 'hh', 'Stars.png', '56', 2),
(8, 'kho hoc 7', 'wallpaperbetter.jpg', '234', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `tenSanPham` varchar(255) NOT NULL,
  `price` float DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `moTa` text DEFAULT NULL,
  `luotXem` int(11) NOT NULL DEFAULT 0,
  `id_danhMuc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tenSanPham`, `price`, `image`, `moTa`, `luotXem`, `id_danhMuc`) VALUES
(22, 'Áo khoác 1 lớp nỉ cổ cao ', 585, '53247516293_71371fd343_k_0ad0f64e73c749aba417acff0af5bb16_master.webp', '1. CHÍNH SÁCH ÁP DỤNG\r\n\r\nÁp dụng từ ngày 01/09/2018.\r\n\r\nTrong vòng 30 ngày kể từ ngày mua sản phẩm với các sản phẩm TORANO.\r\n\r\nÁp dụng đối với sản phẩm nguyên giá và sản phẩm giảm giá ít hơn 50%.\r\n\r\nSản phẩm nguyên giá chỉ được đổi 01 lần duy nhất sang sản phẩm nguyên giá khác và không thấp hơn giá trị sản phẩm đã mua.\r\n\r\nSản phẩm giảm giá/khuyến mại ít hơn 50% được đổi 01 lần sang màu khác hoặc size khác trên cùng 1 mã trong điều kiện còn sản phẩm hoặc theo quy chế chương trình (nếu có). Nếu sản phẩm đổi đã hết hàng khi đó KH sẽ được đổi sang sản phẩm khác có giá trị ngang bằng hoặc cao hơn. Khách hàng sẽ thanh toán phần tiền chênh lệch nếu sản phẩm đổi có giá trị cao hơn sản phẩm đã mua.\r\n\r\nChính sách chỉ áp dụng khi sản phẩm còn hóa đơn mua hàng, còn nguyên nhãn mác, thẻ bài đính kèm sản phẩm và sản phẩm không bị dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua sản phẩm.\r\n\r\nSản phẩm đồ lót và phụ kiện không được đổi trả.\r\n\r\n2. ĐIỀU KIỆN ĐỔI SẢN PHẨM\r\n\r\nĐổi hàng trong vòng 07 ngày kể từ ngày khách hàng nhận được sản phẩm.\r\n\r\nSản phẩm còn nguyên tem, mác và chưa qua sử dụng.\r\n\r\n3. THỰC HIỆN ĐỔI SẢN PHẨM\r\n\r\nQuý khách có thể đổi hàng Online tại hệ thống cửa hàng và đại lý TORANO trên toàn quốc . Lưu ý: vui lòng mang theo sản phẩm và phiếu giao hàng.\r\n\r\nNếu tại khu vực bạn không có cửa hàng TORANO hoặc sản phẩm bạn muốn đổi thì vui lòng làm theo các bước sau:\r\n\r\nBước 1: Gọi đến Tổng đài: 0931733469 các ngày trong tuần (trừ ngày lễ), cung cấp mã đơn hàng và mã sản phẩm cần đổi.\r\n\r\nBước 2: Vui lòng gửi hàng đổi về địa chỉ : Kho Online TORANO - 1165 Giải Phóng, Thịnh Liệt, Q. Hoàng Mai, Hà Nội.\r\n\r\nBước 3: TORANO gửi đổi sản phẩm mới khi nhận được hàng. Trong trường hợp hết hàng, TORANO sẽ liên hệ xác nhận.', 0, 33),
(24, 'Áo khoác 2 lớp da lộn phối màu color block', 553, 'ewcl003-7_53376839244_o_be698d6fa9ab4f78bf2132679fc67647_master.webp', 'Chưa có mô tả cho sản phẩm này', 0, 33),
(25, 'Áo nỉ can phối Winterland', 360, '52518151694_ac853b3b1a_k_6a1a8fe9fbdb425da6692efbce108eca_master.webp', 'Chưa có mô tả cho sản phẩm này', 0, 34),
(36, 'Quần Jeans Nam Trơn.Slim Cropped', 472, 'quan-jean-nam-26-10s23dpa108cr1_black_1__1_jpg.webp', 'Giao hàng nhanh\r\nGiao hàng nhanh\r\nTừ 2 - 5 ngày\r\n\r\nFreeship toàn quốc từ 399k\r\nMiễn phí vận chuyển\r\nĐơn hàng từ 399K\r\n\r\nTheo dõi đơn hàng dễ dàng\r\nTheo dõi đơn hàng\r\nmột cách dễ dàng\r\nĐổi trả tận nơi\r\nĐổi trả linh hoạt\r\nVới sản phẩm không áp dụng khuyến mãi\r\nThanh toán dễ dàng\r\nThanh toán dễ dàng\r\nnhiều hình thức\r\nHotline hỗ trợ Routine\r\nHotline hỗ trợ\r\n039 9999 365\r\nĐẶC ĐIỂM NỔI BẬT\r\nNhóm sản phẩm\r\nQuần Jean\r\nForm dáng\r\nSlim cropped\r\nGiới tính\r\nNam\r\nChất liệu\r\nDenim', 0, 36),
(38, 'Chân váy nữ kẻ sọc', 638, 'chan-vay-nu-30-10s24skiw001_blue_1__2_jpg.webp', 'ĐẶC ĐIỂM NỔI BẬT\r\nNhóm sản phẩm\r\nVáy\r\nForm dáng\r\nLoose\r\nGiới tính\r\nNữ\r\nChất liệu\r\nCotton\r\nThiết kế\r\nPhối màu', 0, 37),
(39, 'Quần Kaki Nam', 609, 'quan-kaki-nam-16-10f22pca018r1-black-_1__1_1_jpg.webp', 'ĐẶC ĐIỂM NỔI BẬT\r\nNhóm sản phẩm\r\nQuần Kaki\r\nForm dáng\r\nWide Leg\r\nGiới tính\r\nNam\r\nChất liệu\r\nKhaki', 0, 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `adress`, `tel`, `role`) VALUES
(9, 'user', '123456', '[value-4]', '[value-5]', '[value-6]', 1),
(10, 'vanbac', '123456', 'user@gmail.com', NULL, NULL, 0),
(13, 'user2', '123456', 'luongvandon02@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(10) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) DEFAULT NULL,
  `id_danhMuc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieu_de`, `noi_dung`, `hinh_anh`, `id_danhMuc`) VALUES
(11, '3', '3', '17069764062018_06_08_11_36_4F6C2C21-B488-4C14-9C0D-9E3591356EA0.JPG', 3),
(12, '6', '5', 'victoria-prymak-UjRuoS9WYS4-unsplash.jpg', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idSp` (`idSp`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuckhoahoc`
--
ALTER TABLE `danhmuckhoahoc`
  ADD PRIMARY KEY (`id_danh_muc`);

--
-- Chỉ mục cho bảng `danhmuctintuc`
--
ALTER TABLE `danhmuctintuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danhMuc` (`id_danhMuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `danhmuckhoahoc`
--
ALTER TABLE `danhmuckhoahoc`
  MODIFY `id_danh_muc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `danhmuctintuc`
--
ALTER TABLE `danhmuctintuc`
  MODIFY `id_danhmuc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`idSp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD CONSTRAINT `khoahoc_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuckhoahoc` (`id_danh_muc`);

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`id_danhMuc`) REFERENCES `danhmuctintuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
