-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2023 at 05:48 AM
-- Server version: 10.3.38-MariaDB-log-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makaqjng_Enj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Anik Saha', '01628781323', 'sahaanik1045@gmail.com', '$2y$10$fWeiMm6R7oIML6/oI3/ma.Vp8R47shp7WXVQsxO0DPXObHuSxsIb6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `created_at`, `updated_at`) VALUES
(1, 'Polo', 'image/product/1674921353i3gUMAm0Ww.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `img` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `img`, `created_at`, `updated_at`) VALUES
(9, 'Clothing/Apparel', 'image/category/1759325842414723.jpg', NULL, NULL),
(10, 'Shelter Items', 'image/category/1759326155296515.jpg', NULL, NULL),
(11, 'Kitchen Items', 'image/category/1759326655004732.jpg', NULL, NULL),
(12, 'Commodity Items', 'image/category/1759326831691084.jpg', NULL, NULL),
(13, 'Sanitary Item', 'image/category/1759327223992954.jpg', NULL, NULL),
(14, 'Stationery Item', 'image/category/1759327210080217.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` char(36) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` char(36) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
('1010c599-3ed0-4cc8-b6bc-e2d3cbf66023', 1, 5, 'Hello', NULL, 0, '2023-03-09 09:43:39', '2023-03-09 09:43:39'),
('5b076451-ca6b-43c3-97f4-6608835bd082', 2, 2, 'hi', NULL, 0, '2023-03-09 09:47:02', '2023-03-09 09:47:02'),
('850fa181-8e5c-4691-93a7-139c3d8a423b', 1, 4, 'Hello', NULL, 0, '2023-03-09 09:43:22', '2023-03-09 09:43:22'),
('85e3ec58-c2ce-44dc-a7d9-653aba80e5c1', 2, 5, 'Hi', NULL, 0, '2023-03-09 09:46:52', '2023-03-09 09:46:52'),
('c10fcba7-ae7d-49a4-9c52-04030bf6c9fa', 2, 4, 'Helo', NULL, 0, '2023-03-09 09:47:22', '2023-03-09 09:47:22'),
('d4a8607e-d3a5-4e4b-85a3-47cf9264c8c9', 1, 2, 'HI', NULL, 0, '2023-03-09 09:43:59', '2023-03-09 09:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `codemas`
--

CREATE TABLE `codemas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hardcode` varchar(255) NOT NULL,
  `softcode` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `codemas`
--

INSERT INTO `codemas` (`id`, `hardcode`, `softcode`, `value`, `created_at`, `updated_at`) VALUES
(1, 'xx', 'page', 'page', NULL, NULL),
(2, 'xx', 'section', 'section', NULL, NULL),
(3, 'page', '001', 'Home Page', NULL, NULL),
(4, 'page', '002', 'About us', NULL, NULL),
(5, 'page', '003', 'Service Page', NULL, NULL),
(6, 'page', '004', 'FAQ', NULL, NULL),
(7, 'section', '001', 'Header', NULL, NULL),
(8, 'section', '002', 'Service Section', NULL, NULL),
(9, 'xx', 'image Link', 'image Link', NULL, NULL),
(10, 'image Link', '001', 'http://localhost/Enj-Website-Dev/public/', NULL, NULL),
(11, 'section', '003', 'Welcome Section', NULL, NULL),
(12, 'section', '004', 'About Us', NULL, NULL),
(13, 'section', '005', 'Question Section', NULL, NULL),
(14, 'section', '006', 'Team Section', NULL, NULL),
(15, 'section', '007', 'Team Memeber', NULL, NULL),
(16, 'xx', 'color', 'color', NULL, NULL),
(17, 'xx', 'size', 'size', NULL, NULL),
(18, 'color', '001', 'Blue', NULL, NULL),
(19, 'page', '005', 'red', NULL, NULL),
(20, 'size', '001', 'xl', NULL, NULL),
(21, 'page', '006', 'sm', NULL, NULL),
(22, 'color', '002', 'Black', NULL, NULL),
(23, 'color', '003', 'White', NULL, NULL),
(24, 'page', '007', 'Our Mission', NULL, NULL),
(25, 'section', '008', 'Our Mission Text', NULL, NULL),
(26, 'page', '008', 'Service & Activity', NULL, NULL),
(27, 'section', '009', 'Knitting', NULL, NULL),
(28, 'section', '010', 'Dying', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companymasters`
--

CREATE TABLE `companymasters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `NOC` varchar(255) DEFAULT NULL,
  `corporate_office` varchar(255) DEFAULT NULL,
  `telephone_1` varchar(255) DEFAULT NULL,
  `telephone_2` varchar(255) DEFAULT NULL,
  `email_1` varchar(255) DEFAULT NULL,
  `email_2` varchar(255) DEFAULT NULL,
  `ceo` varchar(255) DEFAULT NULL,
  `chairman` varchar(255) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `ceo_phone_1` varchar(255) DEFAULT NULL,
  `ceo_phone_2` varchar(255) DEFAULT NULL,
  `chairman_phone_1` varchar(255) DEFAULT NULL,
  `chairman_phone_2` varchar(255) DEFAULT NULL,
  `director_phone_1` varchar(255) DEFAULT NULL,
  `director_phone_2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companymasters`
--

INSERT INTO `companymasters` (`id`, `name`, `NOC`, `corporate_office`, `telephone_1`, `telephone_2`, `email_1`, `email_2`, `ceo`, `chairman`, `director`, `ceo_phone_1`, `ceo_phone_2`, `chairman_phone_1`, `chairman_phone_2`, `director_phone_1`, `director_phone_2`, `created_at`, `updated_at`) VALUES
(1, 'E&J Tex Bangladesh Ltd', 'Exporter, Importer, Trader, Supplier & Service Provider.', 'House: #268 (4th Floor) , Road: #03 , Avenue: #04 , DOHS , Mirpur , Dhaka-1216 , Bangladesh', '+880244806026', '+8801779174858', 'info@enjtexbd.com', 'mofizul.alom@gmail.com', 'M. Mofizul Alam', 'Md. Sahedul Islam', 'M. Maruful Alam', '8801779174858', '+8801407078200', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactinfos`
--

CREATE TABLE `contactinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `person_name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `cell_1` varchar(255) DEFAULT NULL,
  `cell_2` varchar(255) DEFAULT NULL,
  `email_1` varchar(255) DEFAULT NULL,
  `email_2` varchar(255) DEFAULT NULL,
  `email_3` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactinfos`
--

INSERT INTO `contactinfos` (`id`, `person_name`, `designation`, `cell_1`, `cell_2`, `email_1`, `email_2`, `email_3`, `address`, `created_at`, `updated_at`) VALUES
(2, 'M. Mofizul Alam', 'CEO/ Managing Director', '+8801779174858', '+8801407078200', 'info@enjtexbd.com', 'mofizul.alom@gmail.com', NULL, 'House: #268 (4th Floor), Road: #03,\r\nAvenue: #04, DOHS, Mirpur,\r\nDhaka-1216, Bangladesh', NULL, NULL),
(3, 'Kazi Jahir Hossain Tushar', 'Director (Sales & Marketing)', '+8801744795274', '+8801407478203', 'jahir@enjtexbd.com', 'tushar.enjtexled@gmail.com', NULL, 'House: #268 (4th Floor), Road: #03,\r\nAvenue: #04, DOHS, Mirpur,\r\nDhaka-1216, Bangladesh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lastlavels`
--

CREATE TABLE `lastlavels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `lastlevel` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lastlavels`
--

INSERT INTO `lastlavels` (`id`, `category_id`, `subcategory_id`, `lastlevel`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'test1', NULL, NULL),
(2, 1, 1, 'test2', NULL, NULL),
(3, 5, 5, 'stylish jeans', NULL, NULL),
(4, 9, 6, 'Jacket', NULL, NULL),
(5, 9, 8, 'Jacket', NULL, NULL),
(8, 9, 9, 'Jacket', NULL, NULL),
(9, 9, 6, 'T-Shirt', NULL, NULL),
(10, 9, 8, 'T-Shirt', NULL, NULL),
(11, 9, 9, 'T-Shirt', NULL, NULL),
(12, 9, 6, 'Polo Shirt', NULL, NULL),
(13, 9, 8, 'Polo Shirt', NULL, NULL),
(14, 9, 9, 'Polo Shirt', NULL, NULL),
(15, 9, 6, 'Sweat Shirt', NULL, NULL),
(16, 9, 8, 'Sweat Shirt', NULL, NULL),
(17, 9, 9, 'Sweat Shirt', NULL, NULL),
(18, 9, 6, 'Long Chinos Pant', NULL, NULL),
(19, 9, 8, 'Long Chinos Pant', NULL, NULL),
(20, 9, 9, 'Long Chinos Pant', NULL, NULL),
(21, 9, 6, 'Denim Pant', NULL, NULL),
(22, 9, 8, 'Denim Pant', NULL, NULL),
(23, 9, 9, 'Denim Pant', NULL, NULL),
(24, 9, 6, 'Shorts', NULL, NULL),
(25, 9, 8, 'Shorts', NULL, NULL),
(26, 9, 9, 'Shorts', NULL, NULL),
(27, 9, 6, 'Sweater', NULL, NULL),
(28, 9, 8, 'Sweater', NULL, NULL),
(29, 9, 9, 'Sweater', NULL, NULL),
(30, 9, 6, 'Tank Top', NULL, NULL),
(31, 9, 8, 'Tank Top', NULL, NULL),
(32, 9, 9, 'Tank Top', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(155, '2014_10_12_000000_create_users_table', 1),
(156, '2014_10_12_100000_create_password_resets_table', 1),
(157, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(158, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(159, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(160, '2016_06_01_000004_create_oauth_clients_table', 1),
(161, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(162, '2019_08_19_000000_create_failed_jobs_table', 1),
(163, '2021_04_12_151913_create_admins_table', 1),
(164, '2021_04_21_083936_create_categories_table', 1),
(165, '2021_04_21_084053_create_subcategories_table', 1),
(166, '2021_04_21_084054_create_lastlavels_table', 1),
(167, '2021_04_21_084314_create_brands_table', 1),
(168, '2021_05_23_160754_create_coupons_table', 1),
(169, '2021_05_24_064609_create_newslaters_table', 1),
(170, '2021_05_24_074205_create_products_table', 1),
(171, '2021_05_25_074206_create_post_category_table', 1),
(172, '2021_05_25_192619_create_posts_table', 1),
(173, '2021_06_06_072042_create_wishlists_table', 1),
(174, '2021_06_09_074948_create_settings_table', 1),
(175, '2021_06_12_071516_create_orders_table', 1),
(176, '2021_06_12_072438_create_orders_details_table', 1),
(177, '2021_06_12_072539_create_shipping_table', 1),
(178, '2023_01_22_135632_create_codemas_table', 1),
(179, '2023_01_22_135757_create_pagesetups_table', 1),
(180, '2023_02_11_170435_create_product_images_table', 2),
(181, '2023_03_09_999999_add_active_status_to_users', 3),
(182, '2023_03_09_999999_add_avatar_to_users', 3),
(183, '2023_03_09_999999_add_dark_mode_to_users', 3),
(184, '2023_03_09_999999_add_messenger_color_to_users', 3),
(185, '2023_03_09_999999_create_chatify_favorites_table', 3),
(186, '2023_03_09_999999_create_chatify_messages_table', 3),
(187, '2023_03_13_062328_create_companymasters_table', 4),
(188, '2023_03_13_062416_create_officeinfos_table', 4),
(189, '2023_03_13_062446_create_contactinfos_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `newslaters`
--

CREATE TABLE `newslaters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `officeinfos`
--

CREATE TABLE `officeinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officeinfos`
--

INSERT INTO `officeinfos` (`id`, `title`, `company_name`, `office_address`, `created_at`, `updated_at`) VALUES
(1, 'Dubai Office', 'MAHIM FASHION TRADING L.L.C', '304, SHABIB AHMAD BLDG, Dubai, United Arab Emirates', NULL, NULL),
(2, 'Chaina Vendor Office', 'NINGBD ELINK IMPORT EXPORTCO.LTD', 'Room 21, Building No.1, No-568, East Siming Road, Yinzhon District, Ningleo 315104 , China', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(225) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `paying_amount` varchar(255) DEFAULT NULL,
  `blnc_transection` varchar(255) DEFAULT NULL,
  `stripe_order_id` varchar(255) DEFAULT NULL,
  `subtotal` varchar(255) DEFAULT NULL,
  `shipping` varchar(255) DEFAULT NULL,
  `vat` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '0',
  `status_code` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `payment_id`, `payment_type`, `paying_amount`, `blnc_transection`, `stripe_order_id`, `subtotal`, `shipping`, `vat`, `total`, `status`, `status_code`, `month`, `date`, `year`, `created_at`, `updated_at`) VALUES
(32, '8562223', '1', NULL, NULL, '15000', NULL, NULL, NULL, NULL, NULL, NULL, '1', '818176', 'March', '2023-03-05', '2023', NULL, NULL),
(33, '56332656', '2', NULL, NULL, '25000', NULL, NULL, NULL, NULL, NULL, NULL, '0', '907995', 'March', '2023-03-13', '2023', NULL, NULL),
(34, '8562223', '1', NULL, NULL, '12500', NULL, NULL, NULL, NULL, NULL, NULL, '0', '613868', 'March', '2023-03-16', '2023', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `singleprice` varchar(255) DEFAULT NULL,
  `totalprice` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `color`, `size`, `quantity`, `singleprice`, `totalprice`, `created_at`, `updated_at`) VALUES
(57, 32, '1', NULL, 'Blue', 'xl', '3', '2500', '7500', NULL, NULL),
(58, 32, '2', NULL, 'Blue', 'xl', '3', '2500', '7500', NULL, NULL),
(59, 33, '1', NULL, 'Blue', 'xl', '10', '2500', '25000', NULL, NULL),
(60, 34, '2', NULL, 'Black', 'xl', '5', '2500', '12500', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pagesetups`
--

CREATE TABLE `pagesetups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` int(11) NOT NULL,
  `section_id` varchar(255) DEFAULT NULL,
  `header_text` text DEFAULT NULL,
  `sub_text` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagesetups`
--

INSERT INTO `pagesetups` (`id`, `page_id`, `section_id`, `header_text`, `sub_text`, `img`, `created_at`, `updated_at`) VALUES
(1, 3, 'Welcome Section', 'Garments buying and sourcing house in Dhaka', '<span style=\"font-family: &quot;Open Sans&quot;, sans-serif;\">E&amp;J TEX BANGLADESH LTD, is a 100% export oriented garments buying and sourcing house as well as exporter in Bangladesh. We work with some reputed associate factories who are certified by ISO, WAL-MART, WRAP, BSCI, OEKO-TEX, SEDEX, NEXT and also ACCORD &amp; ALLIANCE for all kind of garment</span><br>', 'image/page/1757017408927702.png', NULL, NULL),
(2, 3, 'Service Section', 'Our Service', '<div>E&amp;J TEX BANGLADESH LTD, is a 100% export oriented garments buying and sourcing house&nbsp;<span style=\"font-size: 0.875rem;\">as well as exporter in Bangladesh. We work with some reputed associate factories who are&nbsp;</span><span style=\"font-size: 0.875rem;\">certified by ISO, WAL-MART, WRAP, BSCI, OEKO-TEX, SEDEX, NEXT and also ACCORD &amp;&nbsp;</span><span style=\"font-size: 0.875rem;\">ALLIANCE for all kind of garments. WE supply &amp; export all kind of readymade garments for&nbsp;</span><span style=\"font-size: 0.875rem;\">Men, Women &amp; Children from our country with the best quality as well as most&nbsp;</span><span style=\"font-size: 0.875rem;\">competitive price according to present market scenario. We also provide OEM service.</span></div>', 'image/page/1757017431109243.png', NULL, NULL),
(3, 5, 'Header', 'Service', '<div>E&amp;J TEX BANGLADESH LTD, is a 100% export oriented garments buying and sourcing house&nbsp;<span style=\"font-size: 0.875rem;\">as well as exporter in Bangladesh. We work with some reputed associate factories who are&nbsp;</span><span style=\"font-size: 0.875rem;\">certified by ISO, WAL-MART, WRAP, BSCI, OEKO-TEX, SEDEX, NEXT and also ACCORD &amp;&nbsp;</span><span style=\"font-size: 0.875rem;\">ALLIANCE for all kind of garments. WE supply &amp; export all kind of readymade garments for&nbsp;</span><span style=\"font-size: 0.875rem;\">Men, Women &amp; Children from our country with the best quality as well as most&nbsp;</span><span style=\"font-size: 0.875rem;\">competitive price according to present market scenario. We also provide OEM service.</span></div>', 'image/page/1757017534133919.png', NULL, NULL),
(4, 5, 'Service Section', 'Quality Control', '<div>We work with some reputed associate factories who are&nbsp;<span style=\"font-size: 0.875rem;\">certified by ISO, WAL-MART, WRAP, BSCI, OEKO-TEX, SEDEX, NEXT and also ACCORD &amp;&nbsp;</span><span style=\"font-size: 0.875rem;\">ALLIANCE for all kind of garments.</span></div>', NULL, NULL, NULL),
(5, 5, 'Service Section', 'Industry and local knowledge', '<div>We work with some reputed associate factories who are&nbsp;<span style=\"font-size: 0.875rem;\">certified by ISO, WAL-MART, WRAP, BSCI, OEKO-TEX, SEDEX, NEXT and also ACCORD &amp;&nbsp;</span><span style=\"font-size: 0.875rem;\">ALLIANCE for all kind of garments</span></div>', NULL, NULL, NULL),
(6, 5, 'Service Section', 'Cost', '<div>We work with some reputed associate factories who are&nbsp;<span style=\"font-size: 0.875rem;\">certified by ISO, WAL-MART, WRAP, BSCI, OEKO-TEX, SEDEX, NEXT and also ACCORD &amp;&nbsp;</span><span style=\"font-size: 0.875rem;\">ALLIANCE for all kind of garments</span></div>', NULL, NULL, NULL),
(7, 4, 'Welcome Section', 'About Us', '<div>E&amp;J TEX BANGLADESH LTD, is a leading promotion &amp; textile company; we have our own&nbsp;<span style=\"font-size: 0.875rem;\">buying office bases in Dhaka, Bangladesh. We have our own source of yarn and we export&nbsp;</span><span style=\"font-size: 0.875rem;\">both types of garments with combed &amp; carded yarn, our all manufacturer use dye&nbsp;</span><span style=\"font-size: 0.875rem;\">chemical imported from CIBA Switzerland which is AZO free as per the requirement of&nbsp;</span><span style=\"font-size: 0.875rem;\">European market. We supply our products to internationally reputed importers, whole&nbsp;</span><span style=\"font-size: 0.875rem;\">sellers and retailers’ shops in Europe, Canada, USA. Our key markets is in the United&nbsp;</span><span style=\"font-size: 0.875rem;\">Kingdom, Australia, The Netherlands, Spain, Germany, Italy, Poland &amp; Lithuania as well as&nbsp;</span><span style=\"font-size: 0.875rem;\">whole European Union.</span></div>', 'image/page/1757017564207678.png', NULL, NULL),
(8, 4, 'Question Section', 'Why our house?', '<p style=\"box-sizing: border-box; margin-bottom: 1rem; color: rgba(0, 0, 0, 0.8); font-family: &quot;Open Sans&quot;, sans-serif;\">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p><p style=\"box-sizing: border-box; margin-bottom: 1rem; color: rgba(0, 0, 0, 0.8); font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"font-size: 0.875rem;\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</span></p><div><br></div><ul class=\"list-check list-unstyled mb-5\" style=\"box-sizing: border-box; color: rgba(0, 0, 0, 0.8); font-family: &quot;Open Sans&quot;, sans-serif;\"></ul>', 'image/page/1757017584470456.png', NULL, NULL),
(9, 4, 'Team Section', 'Meet our dynamic leaders team', NULL, NULL, NULL, NULL),
(10, 4, 'Team Memeber', 'M. Mofizul Alam', 'CEO/Managing Director', 'image/page/1759733813296041.jpg', NULL, NULL),
(11, 4, 'Team Memeber', 'Md. Sahedul Islam', 'Chairman', 'image/page/1759734765519031.jpg', NULL, NULL),
(12, 4, 'Team Memeber', 'M. Maruful Alam', 'Director', 'image/page/1759551166807084.jpg', NULL, NULL),
(13, 5, 'Service Section', 'New Business', 'We work with some reputed associate factories who are&nbsp;<span style=\"font-size: 0.875rem;\">certified by ISO, WAL-MART, WRAP, BSCI, OEKO-TEX, SEDEX, NEXT and also ACCORD &amp;&nbsp;</span><span style=\"font-size: 0.875rem;\">ALLIANCE for all kind of garments.</span>', NULL, NULL, NULL),
(14, 24, 'Our Mission Text', NULL, 'E&J Tex Bangladesh Ltd, we strive to provide world class service and the best value to our customers. We thrive for excellence and work for ensuring a pleasant, clean and professional working condition for our employees and the people we do business with. E&amp;J Tex Bangladesh Ltd is utilizing the in house facilities to achieve and maintain the optimum quality standard and delivery garments at the shortest time possible for the minimum inventory level of our buyers', NULL, NULL, NULL),
(22, 26, 'Knitting', NULL, NULL, 'image/page/1760174442728242.jpg', NULL, NULL),
(23, 26, 'Knitting', NULL, NULL, 'image/page/1760174442759128.jpg', NULL, NULL),
(24, 26, 'Knitting', NULL, NULL, 'image/page/1760174442780530.jpg', NULL, NULL),
(25, 26, 'Knitting', NULL, NULL, 'image/page/1760174442803542.jpg', NULL, NULL),
(26, 26, 'Knitting', NULL, NULL, 'image/page/1760174442823613.jpg', NULL, NULL),
(27, 26, 'Knitting', NULL, NULL, 'image/page/1760174442844695.jpg', NULL, NULL),
(28, 26, 'Knitting', NULL, NULL, 'image/page/1760174442866004.jpg', NULL, NULL),
(29, 26, 'Dying', NULL, NULL, 'image/page/1760174742692313.jpg', NULL, NULL),
(30, 26, 'Dying', NULL, NULL, 'image/page/1760174742726312.jpg', NULL, NULL),
(31, 26, 'Dying', NULL, NULL, 'image/page/1760174742750609.jpg', NULL, NULL),
(32, 26, 'Dying', NULL, NULL, 'image/page/1760174742772444.jpg', NULL, NULL),
(33, 26, 'Dying', NULL, NULL, 'image/page/1760174742796946.jpg', NULL, NULL),
(41, 26, 'Cutting', NULL, NULL, 'image/page/1760186324614442.jpg', NULL, NULL),
(42, 26, 'Cutting', NULL, NULL, 'image/page/1760186324637854.jpg', NULL, NULL),
(43, 26, 'Cutting', NULL, NULL, 'image/page/1760186324648759.jpg', NULL, NULL),
(44, 26, 'Cutting', NULL, NULL, 'image/page/1760186324658986.jpg', NULL, NULL),
(45, 26, 'Sewing', NULL, NULL, 'image/page/1760186419206077.jpg', NULL, NULL),
(46, 26, 'Sewing', NULL, NULL, 'image/page/1760186419240007.jpg', NULL, NULL),
(47, 26, 'Sewing', NULL, NULL, 'image/page/1760186419270563.jpg', NULL, NULL),
(48, 26, 'Sewing', NULL, NULL, 'image/page/1760186419307287.jpg', NULL, NULL),
(49, 26, 'Quality Checking', NULL, NULL, 'image/page/1760186481389477.jpg', NULL, NULL),
(50, 26, 'Quality Checking', NULL, NULL, 'image/page/1760186481427834.jpg', NULL, NULL),
(51, 26, 'Quality Checking', NULL, NULL, 'image/page/1760186481467955.jpg', NULL, NULL),
(52, 26, 'Quality Checking', NULL, NULL, 'image/page/1760186481507073.jpg', NULL, NULL),
(53, 26, 'Quality Checking', NULL, NULL, 'image/page/1760186481545138.jpg', NULL, NULL),
(54, 26, 'Quality Checking', NULL, NULL, 'image/page/1760186481582886.jpg', NULL, NULL),
(55, 26, 'Iron', NULL, NULL, 'image/page/1760186523443792.jpg', NULL, NULL),
(56, 26, 'Iron', NULL, NULL, 'image/page/1760186523488703.jpg', NULL, NULL),
(57, 26, 'Iron', NULL, NULL, 'image/page/1760186523528904.jpg', NULL, NULL),
(58, 26, 'Packing', NULL, NULL, 'image/page/1760186613515799.jpg', NULL, NULL),
(59, 26, 'Packing', NULL, NULL, 'image/page/1760186613551637.jpg', NULL, NULL),
(60, 26, 'Packing', NULL, NULL, 'image/page/1760186613582530.jpg', NULL, NULL),
(61, 26, 'Lab', NULL, NULL, 'image/page/1760186680991760.jpg', NULL, NULL),
(62, 26, 'Lab', NULL, NULL, 'image/page/1760186681020371.jpg', NULL, NULL),
(63, 26, 'Lab', NULL, NULL, 'image/page/1760186681045733.jpg', NULL, NULL),
(64, 26, 'Lab', NULL, NULL, 'image/page/1760186681069335.jpg', NULL, NULL),
(65, 26, 'Lab', NULL, NULL, 'image/page/1760186681095642.jpg', NULL, NULL),
(66, 26, 'Store', NULL, NULL, 'image/page/1760186723342906.jpg', NULL, NULL),
(67, 26, 'Store', NULL, NULL, 'image/page/1760186723371638.jpg', NULL, NULL),
(68, 26, 'Store', NULL, NULL, 'image/page/1760186723398717.jpg', NULL, NULL),
(70, 26, 'Others', NULL, NULL, 'image/page/1760187089567394.jpg', NULL, NULL),
(71, 26, 'Others', NULL, NULL, 'image/page/1760187089606174.jpg', NULL, NULL),
(72, 26, 'Others', NULL, NULL, 'image/page/1760187089634913.jpg', NULL, NULL),
(73, 26, 'Others', NULL, NULL, 'image/page/1760187089668778.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title_en` varchar(255) NOT NULL,
  `post_title_in` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `details_en` text NOT NULL,
  `details_in` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(255) NOT NULL,
  `category_name_in` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `lastlavel_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_details` text NOT NULL,
  `product_color` varchar(255) DEFAULT NULL,
  `product_size` varchar(255) DEFAULT NULL,
  `selling_price` int(11) NOT NULL,
  `image_one` varchar(255) DEFAULT NULL,
  `image_two` varchar(255) DEFAULT NULL,
  `image_three` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `lastlavel_id`, `brand_id`, `product_name`, `product_code`, `product_details`, `product_color`, `product_size`, `selling_price`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(2, 10, 1, 1, 1, 'Men\'s Tshart', '89663', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem&nbsp;', NULL, NULL, 2500, 'image/product/1756888062623644.png', 'image/product/1756888062680532.png', 'image/product/1756888062713789.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `product_img`, `created_at`, `updated_at`) VALUES
(1, 14, 'image/product/1757556179827857.jpg', NULL, NULL),
(2, 14, 'image/product/1757556179829323.jpg', NULL, NULL),
(3, 14, 'image/product/1757556179830294.jpg', NULL, NULL),
(4, 14, 'image/product/1757556179831205.jpg', NULL, NULL),
(5, 15, 'image/product/1758640961125751.jpeg', NULL, NULL),
(6, 15, 'image/product/1758640961196605.jpeg', NULL, NULL),
(7, 15, 'image/product/1758640961197990.jpg', NULL, NULL),
(8, 16, 'image/product/1758641097578360.jpeg', NULL, NULL),
(9, 16, 'image/product/1758641097579990.jpeg', NULL, NULL),
(10, 16, 'image/product/1758641097581508.jpg', NULL, NULL),
(11, 17, 'image/product/1758641171027791.jpg', NULL, NULL),
(12, 18, 'image/product/1758641253847004.jpeg', NULL, NULL),
(13, 18, 'image/product/1758641253848508.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vat` varchar(255) DEFAULT NULL,
  `shipping_charge` varchar(255) DEFAULT NULL,
  `shopname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adderss` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `ship_name` varchar(255) NOT NULL,
  `ship_phone` varchar(255) NOT NULL,
  `ship_email` varchar(255) NOT NULL,
  `ship_address` varchar(255) NOT NULL,
  `ship_city` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `order_id`, `ship_name`, `ship_phone`, `ship_email`, `ship_address`, `ship_city`, `created_at`, `updated_at`) VALUES
(31, '32', 'Anik Saha', '+8801628781323', 'sahaanik106@gmail.com', 'Badda,Dhaka', 'Dhaka', NULL, NULL),
(32, '33', 'Abir Saha', '+8801628781323', 'sahaanik106@gmail.com', 'Badda,Dhaka', 'Dhaka', NULL, NULL),
(33, '34', 'Anik Saha', '+8801628781323', 'sahaanik106@gmail.com', 'Badda,Dhaka', 'Dhaka', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Men', NULL, NULL),
(2, 1, 'Woman', NULL, NULL),
(3, 2, 'Men', NULL, NULL),
(4, 2, 'Woman\r\n', NULL, NULL),
(5, 5, 'Men', NULL, NULL),
(6, 9, 'Mens', NULL, NULL),
(8, 9, 'Women\'s', NULL, NULL),
(9, 9, 'Youth/Kids', NULL, NULL),
(15, 12, 'Dal', NULL, NULL),
(17, 9, 'Uniform', NULL, NULL),
(18, 9, 'Workwear', NULL, NULL),
(19, 9, 'Underwear', NULL, NULL),
(20, 9, 'Hometex', NULL, NULL),
(21, 12, 'Rice', NULL, NULL),
(22, 12, 'Sugar', NULL, NULL),
(23, 12, 'Edible Oil', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `present_address` varchar(225) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `present_address`, `remember_token`, `created_at`, `updated_at`, `active_status`, `avatar`, `dark_mode`, `messenger_color`) VALUES
(1, 'Anik Saha', 'sahaanik1045@gmail.com', NULL, '$2y$10$fWeiMm6R7oIML6/oI3/ma.Vp8R47shp7WXVQsxO0DPXObHuSxsIb6', '01628781323', 'Marul Badda,Dhaka', NULL, NULL, NULL, 0, 'avatar.png', 0, NULL),
(2, 'Abir Saha', 'sahaanik106@gmail.com', NULL, '$2y$10$rZn4oaPvBzL2VeBxb4ZxquhRJ04X9LJ8XrXlDhg/zoUSQcdymctRe', '+8801628781323', 'Badda,Dhaka', NULL, NULL, NULL, 0, 'avatar.png', 0, NULL),
(4, 'Partho', 'Partho@gmail.com', NULL, '$2y$10$VFrIuQTEtVN14vdewImSMOBgvgjsEh8a43cCReNqWM3nvTtDk0foK', '+8801628781323', 'Badda,Dhaka', NULL, NULL, NULL, 0, 'avatar.png', 0, NULL),
(5, 'Akash', 'akash@gmail.com', NULL, '$2y$10$rFMdI9/aQSmNRagVFTq2de0dBVIXDixzrYCMvZQJ.SLJur2yNma4a', '01628781323', 'Dhaka metro', NULL, NULL, NULL, 0, 'avatar.png', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codemas`
--
ALTER TABLE `codemas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companymasters`
--
ALTER TABLE `companymasters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactinfos`
--
ALTER TABLE `contactinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lastlavels`
--
ALTER TABLE `lastlavels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslaters`
--
ALTER TABLE `newslaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `officeinfos`
--
ALTER TABLE `officeinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagesetups`
--
ALTER TABLE `pagesetups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `codemas`
--
ALTER TABLE `codemas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `companymasters`
--
ALTER TABLE `companymasters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactinfos`
--
ALTER TABLE `contactinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lastlavels`
--
ALTER TABLE `lastlavels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `newslaters`
--
ALTER TABLE `newslaters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `officeinfos`
--
ALTER TABLE `officeinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `pagesetups`
--
ALTER TABLE `pagesetups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
