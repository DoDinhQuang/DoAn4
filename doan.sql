-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2021 lúc 09:11 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(10) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `bill_total` int(11) NOT NULL,
  `bill_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`bill_id`, `supplier_id`, `bill_total`, `bill_time`, `created_at`, `updated_at`) VALUES
(1, 1, 100000000, '2021-05-09 00:00:00', '2021-05-10 00:09:40', '2021-05-10 07:25:10'),
(2, 2, 50000000, '2021-05-01 00:00:00', '2021-05-10 07:24:57', '2021-05-10 07:24:57'),
(3, 1, 100000999, '2021-05-08 00:00:00', '2021-05-10 07:26:58', '2021-05-10 07:26:58'),
(4, 4, 50000000, '2021-05-10 00:00:00', '2021-05-10 07:27:21', '2021-05-10 07:27:21'),
(5, 5, 100000000, '2021-05-10 00:00:00', '2021-05-10 07:27:35', '2021-05-10 07:27:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `bill_details_id` int(10) UNSIGNED NOT NULL,
  `bill_id` int(10) UNSIGNED NOT NULL,
  `configuration_id` int(10) UNSIGNED NOT NULL,
  `bill_details_quantily` int(11) NOT NULL,
  `bill_details_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_details`
--

INSERT INTO `bill_details` (`bill_details_id`, `bill_id`, `configuration_id`, `bill_details_quantily`, `bill_details_price`, `created_at`, `updated_at`) VALUES
(3, 2, 3, 2, 19450000, '2021-05-10 07:31:34', '2021-05-10 07:31:34'),
(4, 5, 5, 5, 8290000, '2021-05-10 07:33:05', '2021-05-10 07:33:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `configuration`
--

CREATE TABLE `configuration` (
  `configuration_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `configuration_ram` int(11) NOT NULL,
  `configuration_interna_memory` int(11) NOT NULL,
  `configuration_price` int(11) NOT NULL,
  `configuration_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `configuration`
--

INSERT INTO `configuration` (`configuration_id`, `product_id`, `configuration_ram`, `configuration_interna_memory`, `configuration_price`, `configuration_number`, `created_at`, `updated_at`) VALUES
(2, 2, 6, 256, 28350000, 15, '2021-05-10 07:12:19', '2021-05-10 07:12:19'),
(3, 3, 4, 64, 19450000, 30, '2021-05-10 07:13:17', '2021-05-10 07:13:17'),
(4, 4, 6, 128, 4590000, 50, '2021-05-10 07:15:10', '2021-05-10 07:15:10'),
(5, 5, 8, 128, 8290000, 37, '2021-05-10 07:16:28', '2021-05-10 07:16:28'),
(6, 6, 4, 128, 3290000, 44, '2021-05-10 07:17:15', '2021-05-10 07:17:15'),
(7, 7, 8, 128, 9990000, 29, '2021-05-10 07:19:17', '2021-05-10 07:19:17'),
(8, 8, 2, 16, 790000, 23, '2021-05-11 02:59:48', '2021-05-11 02:59:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_email`, `customer_password`, `customer_name`, `customer_phone`, `customer_address`, `created_at`, `updated_at`) VALUES
(1, 'quangteo2789@gmail.com', 'quangteo', 'Quang', '0356831447', 'My Hao Hung Yen', NULL, NULL),
(2, 'oanh122789@gmail.com', 'oanh', 'Oanh', '0366661039', 'My Hao Hung Yen', NULL, NULL),
(3, 'truoong@gmail.com', '12213311', 'truong', '0463527812', 'My Hao Hung Yen', NULL, NULL),
(11, '1@gmail.com', 'quangteo', 'Quang', '0356831447', 'My Hao Hung Yen', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manufacturer_id` int(10) UNSIGNED NOT NULL,
  `manufacturer_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufacturer`
--

INSERT INTO `manufacturer` (`manufacturer_id`, `manufacturer_img`, `manufacturer_name`, `manufacturer_description`, `created_at`, `updated_at`) VALUES
(1, 'loooooo.png', 'Iphone', 'Iphone', '2021-05-10 00:08:01', '2021-05-10 01:20:58'),
(2, 'untitled-1.png', 'Xiaomi', 'Xiaomi', '2021-05-10 01:21:42', '2021-05-10 01:21:42'),
(3, 'brand (3).png', 'Oppo', 'Oppo', '2021-05-10 01:22:16', '2021-05-10 01:22:16'),
(4, 'logo-masstel-4.png', 'Masstel', 'Masstel', '2021-05-10 01:23:11', '2021-05-10 01:23:11'),
(5, 'samsung-logo-transparent.png', 'Samsung', 'Samsung', '2021-05-10 01:24:55', '2021-05-10 01:24:55'),
(6, 'brand (6).png', 'Realme', 'Realme', '2021-05-10 01:25:16', '2021-05-10 01:25:16'),
(7, 'blackberry-logo-black.png', 'BlackBerry', 'BlackBerry', '2021-05-10 01:25:39', '2021-05-10 01:25:39'),
(8, 'huaweill-logo.png', 'Huawei', 'Huawei', '2021-05-10 01:26:30', '2021-05-10 01:26:30'),
(9, 'logo-bphone.png', 'Bphone', 'Bphone', '2021-05-10 01:26:55', '2021-05-10 01:26:55'),
(10, 'brand (1).png', 'Vsmart', 'Vsmart', '2021-05-10 01:27:11', '2021-05-10 01:27:11'),
(11, 'brand (4).png', 'Nokia', 'Nokia', '2021-05-10 01:28:08', '2021-05-10 01:28:08'),
(12, 'vivo-logo.png', 'Vivo', 'Vivo', '2021-05-10 01:28:25', '2021-05-10 01:28:25'),
(13, 'section01-title.png', 'Energizer', 'Energizer', '2021-05-10 07:08:47', '2021-05-10 07:10:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2021_04_28_153151_create_bill_details_table', 1),
(30, '2021_05_10_070050_create_bill_details_table', 2),
(31, '2014_10_12_000000_create_users_table', 3),
(32, '2021_04_28_102812_create_manufacturer_table', 3),
(33, '2021_04_28_103141_create_product_table', 3),
(34, '2021_04_28_104321_create_configuration_table', 3),
(35, '2021_04_28_152340_create_phone_color_table', 3),
(36, '2021_04_28_152952_create_supplier_table', 3),
(37, '2021_04_28_153127_create_bill_table', 3),
(38, '2021_04_28_153451_create_order_table', 3),
(39, '2021_04_28_153550_create_order_details_table', 3),
(41, '2021_05_10_070316_create_bill_details_table', 4),
(42, '2021_05_10_071456_create_product_table', 4),
(43, '2021_05_15_094200_create_order_table', 5),
(44, '2021_05_15_095613_create_order_table', 6),
(45, '2021_05_15_095648_create_order_details_table', 6),
(46, '2021_05_15_153943_create_customer_table', 7),
(47, '2021_05_18_144611_create_order_details', 8),
(48, '2021_05_19_090922_create_order_table', 9),
(49, '2021_05_19_091035_create_order_details_table', 9),
(50, '2021_05_19_181959_create_shipping_table', 10),
(51, '2021_05_19_182058_create_order_table', 10),
(52, '2021_05_19_182143_create_order_details_table', 10),
(53, '2021_05_21_134528_create_order_table', 11),
(54, '2021_05_26_151229_add_coumn_oder', 12),
(55, '2021_05_26_161825_add_coumn_order', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivery` tinyint(4) NOT NULL,
  `delete` tinyint(4) NOT NULL,
  `success` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `order_name`, `order_address`, `order_email`, `order_phone`, `order_note`, `order_status`, `created_at`, `updated_at`, `delivery`, `delete`, `success`) VALUES
(9, 11, 'Quang', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'c', 1, NULL, '2021-05-26 09:34:29', 1, 0, 1),
(10, 11, 'Quang', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'ád', 0, NULL, '2021-05-26 09:55:50', 0, 1, 0),
(12, 2, 'Quang', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'giao hàng nhanh', 1, NULL, '2021-05-27 19:38:12', 0, 1, 0),
(13, 11, 'Quang', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'Giao hàng', 1, NULL, '2021-05-26 09:43:04', 1, 0, 1),
(14, 11, 'Quang', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'Chú ý', 1, NULL, '2021-05-26 09:45:04', 1, 0, 1),
(15, 11, 'Quang 1221', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'sâs', 1, NULL, '2021-05-26 09:54:46', 1, 0, 1),
(16, 11, 'vinh', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'Ngu', 1, NULL, '2021-05-26 08:40:46', 1, 0, 0),
(17, 11, 'Đạt', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'Đạt đúp', 1, NULL, '2021-05-26 09:47:32', 1, 0, 0),
(18, 1, 'quang', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'Ghi chú', 1, NULL, '2021-05-26 09:59:47', 0, 1, 0),
(19, 11, 'Quang112121', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'Ghi hh', 1, NULL, '2021-05-26 09:48:08', 1, 0, 1),
(20, 11, 'Quang', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'qqqqq', 0, NULL, '2021-05-26 09:56:51', 0, 1, 0),
(21, 11, 'Quang', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'Giao hang trong ngay', 1, NULL, '2021-05-27 18:58:45', 1, 0, 1),
(22, 11, 'Quang', 'Mỹ Hào Hưng Yên', 'quangteo2789@gmail.com', '0356831447', 'test', 1, NULL, '2021-05-27 19:37:56', 1, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantily` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `quantily`, `price`, `created_at`, `updated_at`) VALUES
(1, 9, 6, 1, 3290000, NULL, NULL),
(2, 10, 6, 1, 3290000, NULL, NULL),
(3, 10, 5, 2, 8290000, NULL, NULL),
(4, 11, 1, 1, 28350000, NULL, NULL),
(5, 11, 5, 1, 8290000, NULL, NULL),
(6, 12, 6, 1, 3290000, NULL, NULL),
(7, 12, 5, 1, 8290000, NULL, NULL),
(8, 13, 6, 1, 3290000, NULL, NULL),
(9, 13, 5, 1, 8290000, NULL, NULL),
(10, 13, 1, 1, 28350000, NULL, NULL),
(11, 14, 3, 2, 19450000, NULL, NULL),
(12, 14, 2, 2, 28350000, NULL, NULL),
(13, 15, 3, 3, 19450000, NULL, NULL),
(14, 16, 6, 1, 3290000, NULL, NULL),
(15, 17, 5, 5, 8290000, NULL, NULL),
(16, 18, 6, 1, 3290000, NULL, NULL),
(17, 19, 6, 1, 3290000, NULL, NULL),
(18, 20, 6, 1, 3290000, NULL, NULL),
(19, 21, 7, 1, 9990000, NULL, NULL),
(20, 21, 4, 1, 4590000, NULL, NULL),
(21, 22, 6, 3, 3290000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phone_color`
--

CREATE TABLE `phone_color` (
  `phone_color_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `phone_color_hue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phone_color`
--

INSERT INTO `phone_color` (`phone_color_id`, `product_id`, `phone_color_hue`, `created_at`, `updated_at`) VALUES
(2, 2, 'đỏ', '2021-05-10 07:19:39', '2021-05-10 07:19:39'),
(3, 3, 'Hồng', '2021-05-10 07:19:48', '2021-05-10 07:19:48'),
(4, 4, 'Vàng', '2021-05-10 07:20:01', '2021-05-10 07:20:01'),
(5, 5, 'đen', '2021-05-10 07:20:46', '2021-05-10 07:21:00'),
(6, 6, 'Xanh lá', '2021-05-10 07:21:13', '2021-05-10 07:21:13'),
(7, 7, 'Trắng', '2021-05-10 07:21:28', '2021-05-10 07:21:28'),
(8, 8, 'Bạc', '2021-05-11 03:00:11', '2021-05-11 03:00:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer_id` int(10) UNSIGNED NOT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_screen_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_resolution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_operating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_processor_chip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_front_camera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_rear_camera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_battery_capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_hot` int(11) NOT NULL,
  `product_new` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `manufacturer_id`, `product_img`, `product_screen_size`, `product_resolution`, `product_operating`, `product_processor_chip`, `product_front_camera`, `product_rear_camera`, `product_battery_capacity`, `product_sim`, `product_hot`, `product_new`, `created_at`, `updated_at`) VALUES
(2, 'Apple iphone 12 Pro Max - 512GB - Chính Hãng VN/A', 1, 'iphone-12-pro-max.png', '6.7 inch', '1284 x 2778 Pixels, 3 camera 12 MP, 12 MP', 'iOS 14', 'Apple A14 Bionic 6 nhân', '12 MP', '12 MP', '3687 mAh', '1 Nano SIM & 1 eSIM', 1, 0, '2021-05-10 00:36:39', '2021-05-10 01:46:05'),
(3, 'Apple iphone 12 - Chính Hãng 512GB VN/A', 1, 'apple-iphone-12-mini-5.png', '6.1 inch', '1170 x 2532 Pixels, 2 camera 12 MP, 12 MP', 'iOS 14', 'Apple A14 Bionic 6 nhân', '8 MP', '8 PM', '2815 mAh', '1 Nano SIM & 1 eSIM', 1, 0, '2021-05-10 00:39:18', '2021-05-10 10:21:10'),
(4, 'Xiaomi Redmi Note 10 6GB/128GB - Chính hãng', 2, 'image-removebg-preview-4.png', '6.43 inch', 'Full HD+ (1080 x 2400 Pixels), Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP, 13 MP', 'Android 11', 'Snapdragon 678 8 nhân', '48MP', '48MP', '5000 mAh', '2 Nano SIM', 0, 1, '2021-05-10 02:50:30', '2021-05-10 07:47:27'),
(5, 'Oppo Reno5 - 8GB/128GB - Chính hãng', 3, 'oppoa.png', '6.43 inch', 'Full HD+ (1080 x 2400 Pixels), Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP, 44 MP', 'Android 11', 'Snapdragon 720G 8 nhân', '44 PM', '44 PM', '4310 mAh', '2 Nano SIM', 1, 0, '2021-05-10 02:55:03', '2021-05-11 02:52:05'),
(6, 'Nokia 5.4 - 4GB/64GB - Chính hãng - VN/A', 11, 'image-removebg-preview.png', '6.39 inch', 'HD+ (720 x 1560 Pixels), Chính 48 MP & Phụ 5 MP, 2 MP, 2 MP, 16 MP', 'androi', 'Adreno 610', '48 MP', '48 MP', '4000 mAh', '2 Nano SIM', 1, 0, '2021-05-10 06:57:15', '2021-05-11 02:54:01'),
(7, 'Vivo V21 - 3GB/32GB - Chính hãng - VN/A', 12, 'untitled-1 (1).png', '4.6 inch', 'Full HD+ (1080 x 2400 Pixels), Chính 64 MP & Phụ 8 MP, 2 MP, 44 MP', 'Android 11', 'MediaTek Dimensity 800U 5G 8 nhân', '44 MP', '44 MP', '4000 mAh', '2 Nano SIM', 0, 1, '2021-05-10 07:01:18', '2021-05-11 02:57:06'),
(8, 'Điện thoại di động Masstel Hapi 10 - 2GB/16GB - 4G/LTE - Chính hãng', 4, 'Masstel Hapi 10_1-8.png', '5 inch', 'HD (720 x 1280 Pixels), 5 MP, 5 MP', 'Android 11', 'Snapdragon 720G 8 nhân', '20MP', '12 MP', '3687 mAh', '2 Nano SIM', 0, 0, '2021-05-11 02:59:01', '2021-05-11 02:59:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_phone`, `supplier_email`, `created_at`, `updated_at`) VALUES
(1, 'Đỗ Đình Quang', 'Mỹ Hào Hưng Yên', '0356831447', 'quangteo2789@gmail.com', '2021-05-10 00:09:23', '2021-05-10 00:09:23'),
(2, 'Đỗ Đình Trường', 'Mỹ Hào Hưng Yên', '0356831447', 'truong123@gmail.com', '2021-05-10 07:21:47', '2021-05-10 07:21:47'),
(3, 'Nguyễn Thị Hương', 'Yên Mỹ Hưng Yên', '0376339592', 'huongbeo2709@gmail.com', '2021-05-10 07:22:21', '2021-05-10 07:22:21'),
(4, 'Đỗ Thị Vân Anh', 'Yên Mỹ Hưng Yên', '0232353388', 'vananh@gmail.com', '2021-05-10 07:22:57', '2021-05-10 07:22:57'),
(5, 'Giáp Văn Hưng', 'Tuyên Quang', '0123644763', 'hungvan@gmail.com', '2021-05-10 07:24:07', '2021-05-10 07:24:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'quang', 'quangteo2789@gmail.com', NULL, '$2y$10$uyJaqAOdATChnw8erGt5Pu7qY.L/bO5JNh/vozE4xLT2wn6XqagLq', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `bill_supplier_id_foreign` (`supplier_id`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`bill_details_id`),
  ADD KEY `bill_details_bill_id_foreign` (`bill_id`),
  ADD KEY `bill_details_configuration_id_foreign` (`configuration_id`);

--
-- Chỉ mục cho bảng `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`configuration_id`),
  ADD KEY `configuration_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `phone_color`
--
ALTER TABLE `phone_color`
  ADD PRIMARY KEY (`phone_color_id`),
  ADD KEY `phone_color_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_manufacturer_id_foreign` (`manufacturer_id`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `bill_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `configuration`
--
ALTER TABLE `configuration`
  MODIFY `configuration_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufacturer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `phone_color`
--
ALTER TABLE `phone_color`
  MODIFY `phone_color_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_details_configuration_id_foreign` FOREIGN KEY (`configuration_id`) REFERENCES `configuration` (`configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `configuration`
--
ALTER TABLE `configuration`
  ADD CONSTRAINT `configuration_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phone_color`
--
ALTER TABLE `phone_color`
  ADD CONSTRAINT `phone_color_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_manufacturer_id_foreign` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`manufacturer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
