-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2024 at 07:59 AM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `img`, `created_at`, `updated_at`) VALUES
(16, 'Web Development', 'image/category/1680676951svyIl2wLm8.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint NOT NULL,
  `favorite_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint NOT NULL,
  `to_id` bigint NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
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
  `id` bigint UNSIGNED NOT NULL,
  `hardcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `softcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(19, 'page', '005', 'Blogs', NULL, NULL),
(20, 'size', '001', 'xl', NULL, NULL),
(21, 'page', '006', 'sm', NULL, NULL),
(22, 'color', '002', 'Black', NULL, NULL),
(23, 'color', '003', 'White', NULL, NULL),
(24, 'page', '007', 'Our Mission', NULL, NULL),
(25, 'section', '008', 'Our Mission Text', NULL, NULL),
(26, 'page', '008', 'Service & Activity', NULL, NULL),
(27, 'section', '009', 'Conference', NULL, NULL),
(28, 'section', '010', 'Tour', NULL, NULL),
(29, 'section', '011', 'Family', NULL, NULL),
(30, 'section', '012', 'Achievement', NULL, NULL),
(31, 'section', '013', 'blogs', NULL, NULL),
(32, 'section', '014', 'WhyChooseUs', NULL, NULL),
(33, 'section', '015', 'Herosection', NULL, NULL),
(34, 'section', '016', 'learningTopics', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companymasters`
--

CREATE TABLE `companymasters` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NOC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `corporate_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ceo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chairman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ceo_phone_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ceo_phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chairman_phone_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chairman_phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_phone_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companymasters`
--

INSERT INTO `companymasters` (`id`, `name`, `NOC`, `corporate_office`, `telephone_1`, `telephone_2`, `email_1`, `email_2`, `ceo`, `chairman`, `director`, `ceo_phone_1`, `ceo_phone_2`, `chairman_phone_1`, `chairman_phone_2`, `director_phone_1`, `director_phone_2`, `created_at`, `updated_at`) VALUES
(1, 'InfinityCodeHub', 'Software Company', 'House: #25 (6th Floor) , Road: #09 , Dhaka-1216 , Bangladesh', '+8801685913402', '+8801628781323', 'sahaanik1045@gmail.com', 'sahaabir917@gmail.com', 'Abir Saha', 'Ashim Kumar Saha', 'Anik  Saha', '01685913402', '01685913402', '01715403687', '01757370086', '01628781323', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactinfos`
--

CREATE TABLE `contactinfos` (
  `id` bigint UNSIGNED NOT NULL,
  `person_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactinfos`
--

INSERT INTO `contactinfos` (`id`, `person_name`, `designation`, `cell_1`, `cell_2`, `email_1`, `email_2`, `email_3`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Anik Saha', 'Software Engineer', '+8801628781323', NULL, 'sahaanik106@gmail.com', NULL, NULL, 'House: #25 (6th Floor), Road: #09, \r\nMarul Badda, Dhaka-1216, Bangladesh', NULL, NULL),
(3, 'অনিক সাহা', 'সফটওয়্যার ইঞ্জিনিয়ার', '+৮৮০১৬২৮৭৮১৩২৩', NULL, 'sahaanik1045@gmail.com', NULL, NULL, 'বাড়ি #২৫, রোড #০৯,\r\nমেরুল বাড্ডা,ঢাকা', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint UNSIGNED NOT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lastlavels`
--

CREATE TABLE `lastlavels` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `subcategory_id` int NOT NULL,
  `lastlevel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(32, 9, 9, 'Tank Top', NULL, NULL),
(33, 16, 27, 'Laravel', NULL, NULL),
(35, 16, 26, 'Html & Css', NULL, NULL),
(36, 16, 27, 'React', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
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
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `officeinfos`
--

CREATE TABLE `officeinfos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `order_number` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paying_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blnc_transection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `payment_id`, `payment_type`, `paying_amount`, `blnc_transection`, `stripe_order_id`, `subtotal`, `shipping`, `vat`, `total`, `status`, `status_code`, `month`, `date`, `year`, `created_at`, `updated_at`) VALUES
(32, '8562223', '1', NULL, NULL, '15000', NULL, NULL, NULL, NULL, NULL, NULL, '3', '818176', 'March', '2023-03-05', '2023', NULL, NULL),
(33, '56332656', '2', NULL, NULL, '25000', NULL, NULL, NULL, NULL, NULL, NULL, '0', '907995', 'March', '2023-03-13', '2023', NULL, NULL),
(34, '8562223', '1', NULL, NULL, '12500', NULL, NULL, NULL, NULL, NULL, NULL, '0', '613868', 'March', '2023-03-16', '2023', NULL, NULL),
(35, '563326', '4', NULL, NULL, '180000', NULL, NULL, NULL, NULL, NULL, NULL, '0', '425683', 'April', '2024-04-11', '2024', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singleprice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalprice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(60, 34, '2', NULL, 'Black', 'xl', '5', '2500', '12500', NULL, NULL),
(61, 35, '25', NULL, 'Blue', 'xl', '1', '100000', '100000', NULL, NULL),
(62, 35, '26', NULL, 'Blue', 'xl', '2', '40000', '80000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pagesetups`
--

CREATE TABLE `pagesetups` (
  `id` bigint UNSIGNED NOT NULL,
  `page_id` int NOT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_text` text COLLATE utf8mb4_unicode_ci,
  `sub_text` longtext COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagesetups`
--

INSERT INTO `pagesetups` (`id`, `page_id`, `section_id`, `header_text`, `sub_text`, `img`, `created_at`, `updated_at`) VALUES
(1, 3, 'Welcome Section', 'Anik Saha', '<div>Hello Everyone,</div><div><br></div><div>I am Anik Saha,I complete my BSC from East West University in CSE at 2019. After complete my BSC, I join a company named Twihive Digital as a Android App Developer. In this company, i create a EMI calculator project. In June 2022, I join in ERA Infotech Ltd as a Software Engineer(web) in Enterprise Solution Department. My current tech is React, Node js, Angular and ASP.NET.</div><div><br></div>', 'image/page/1762269576049963.jpg', NULL, NULL),
(2, 3, 'Service Section', 'fa fa-database', '<h4 style=\"text-align: center; \">Backend Services</h4><p style=\"text-align: center;\">Database Optimization, Api Intregration</p><p style=\"text-align: center;\"><br></p>', 'image/page/1796835688296828.jpg', NULL, NULL),
(3, 5, 'Header', 'Service', '<div><span style=\"color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space: pre-wrap; background-color: rgb(247, 247, 248);\">\"As a software engineer with expertise in React, Angular, Dotnet Core, and Node.js, I offer a comprehensive range of professional software development services tailored to meet your business needs. From consultation and project management to design, development, maintenance, and support, I can help you create custom web or mobile applications that are user-friendly and scalable. With my skills and experience, I can ensure your project is delivered on time and within budget. Let me help your business succeed through expert software development services. Contact me today to discuss your project requirements.\"</span><br></div>', 'image/page/1757017534133919.png', NULL, NULL),
(4, 5, 'Service Section', 'Web Development', '<div>Web development involves understanding user needs, designing intuitive interfaces, and optimizing for performance and accessibility. Trust a professional to deliver a top-notch website<br></div>', NULL, NULL, NULL),
(5, 5, 'Service Section', 'Project Management Services', '<div>&nbsp;This involves working with project stakeholders to define project requirements, create project plans, and manage project timelines and resources<br></div>', NULL, NULL, NULL),
(6, 5, 'Service Section', 'Development Services', 'This involves working with programming languages, development tools, and software frameworks to create software applications that meet project requirements<br>', NULL, NULL, NULL),
(7, 4, 'Welcome Section', 'About Me', '<div>Meet Anik Saha, a skilled Software Engineer with expertise in React, Node.js, Angular, and ASP.NET. Anik completed his BSc in Computer Science and Engineering from East West University in 2019 and began his career as an Android App Developer at Twihive Digital, where he created an EMI calculator project. Anik is currently working at ERA Infotech Ltd as a Software Engineer(Web) in the Enterprise Solution Department, developing high-quality software solutions for businesses. Anik\'s dedication to staying up-to-date with the latest trends and technologies in the software development industry, attention to detail, and commitment to delivering excellent results make him a valuable asset to any project.<br></div>', 'image/page/1757017564207678.png', NULL, NULL),
(8, 4, 'Question Section', 'Why our house?', '<p style=\"box-sizing: border-box; margin-bottom: 1rem; color: rgba(0, 0, 0, 0.8); font-family: &quot;Open Sans&quot;, sans-serif;\">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p><p style=\"box-sizing: border-box; margin-bottom: 1rem; color: rgba(0, 0, 0, 0.8); font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"font-size: 0.875rem;\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</span></p><div><br></div><ul class=\"list-check list-unstyled mb-5\" style=\"box-sizing: border-box; color: rgba(0, 0, 0, 0.8); font-family: &quot;Open Sans&quot;, sans-serif;\"></ul>', 'image/page/1757017584470456.png', NULL, NULL),
(9, 4, 'Team Section', 'Meet our dynamic leaders team', NULL, NULL, NULL, NULL),
(10, 4, 'Team Memeber', 'M. Mofizul Alam', 'CEO/Managing Director', 'image/page/1759733813296041.jpg', NULL, NULL),
(11, 4, 'Team Memeber', 'Md. Sahedul Islam', 'Chairman', 'image/page/1759734765519031.jpg', NULL, NULL),
(12, 4, 'Team Memeber', 'M. Maruful Alam', 'Director', 'image/page/1759551166807084.jpg', NULL, NULL),
(13, 5, 'Service Section', 'New Business', 'We work with some reputed associate factories who are&nbsp;<span style=\"font-size: 0.875rem;\">certified by ISO, WAL-MART, WRAP, BSCI, OEKO-TEX, SEDEX, NEXT and also ACCORD &amp;&nbsp;</span><span style=\"font-size: 0.875rem;\">ALLIANCE for all kind of garments.</span>', NULL, NULL, NULL),
(14, 24, 'Our Mission Text', NULL, '<div>\"Empowering Businesses through Innovative Software Solutions: My Mission as a Software Engineer\"</div><div><br></div><div>As a software engineer, my mission is to empower businesses by creating innovative software solutions that help them achieve their goals. I believe that technology can transform businesses by streamlining processes, improving efficiency, and enhancing customer experiences. Whether it\'s creating custom web applications or developing mobile apps, I approach every project with a commitment to excellence and a passion for innovation.</div><div><br></div><div>My mission is to work closely with my clients to understand their unique needs and create software solutions that are tailored to their business objectives. From consultation and design to development and support, I offer a range of services that help businesses succeed in today\'s digital world. With my expertise in React, Angular, Dotnet Core, and Node.js, I can deliver high-quality software solutions that are user-friendly, scalable, and efficient.</div><div><br></div><div>I believe that the success of any software project depends on effective communication, collaboration, and transparency. That\'s why I prioritize building strong relationships with my clients and ensuring that they are involved in every stage of the development process. I also stay up-to-date with the latest trends and technologies in the software development industry, which enables me to offer innovative solutions that help businesses stay ahead of the curve.</div><div><br></div><div>In conclusion, my mission as a software engineer is to help businesses succeed by creating innovative software solutions that are tailored to their unique needs. I believe that by combining cutting-edge technology with effective communication and collaboration, I can help businesses achieve their goals and thrive in today\'s fast-paced digital world. Contact me today to discuss how I can help your business succeed through innovative software solutions.</div>', NULL, NULL, NULL),
(74, 4, 'Education', 'My Education History', NULL, 'image/page/1762185105833014.jpg', NULL, NULL),
(76, 4, 'Institution', 'Faridpur Zilla School', '<div><br></div>', 'image/page/1762185875060076.jpg', NULL, NULL),
(77, 4, 'Institution', 'Rajendra College', NULL, 'image/page/1762187783967338.jpeg', NULL, NULL),
(78, 26, 'Tour', NULL, NULL, 'image/page/1796055264968107.JPG', NULL, NULL),
(79, 26, 'Tour', NULL, NULL, 'image/page/1796055291028919.JPG', NULL, NULL),
(80, 26, 'Tour', NULL, NULL, 'image/page/1796055325281516.JPG', NULL, NULL),
(81, 26, 'Achievement', NULL, NULL, 'image/page/1796055413301314.png', NULL, NULL),
(82, 26, 'Achievement', NULL, NULL, 'image/page/1796055431022456.png', NULL, NULL),
(83, 19, 'blogs', 'What is Typescript?', '<div data-codeblock=\"true\" data-line-wrapping=\"false\" style=\"box-sizing: border-box; padding: 8px; font-family: Monaco, Menlo, Consolas, &quot;Courier New&quot;, monospace; font-size: 12px; color: rgb(51, 51, 51); border-radius: 4px; border: 1px solid rgba(0, 0, 0, 0.15);\" data-pm-slice=\"2 2 []\" data-en-clipboard=\"true\"><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">Typescript is an object oriented programming language that build on top of JS with extra feature when working in a large scale application with javascript we face some problem like</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">     - very difficult to manage large codebase</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">     - Hard to find bugs</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">     - Catch error only in runtime </div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\"><br></div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">Typescript code can be transplied into older versions of javascript. We can give instruction for it.<br></div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">                 Browser can not read typescript code. It convert to javascript and then run in browser or node javascript env</div><div data-plaintext=\"true\" style=\"\"><span style=\"background-color: rgb(255, 214, 99);\"> Benifits of using typescript</span></div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - Support older browser</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - type safety</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - Increase productivity</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - Less bugs and less testing</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - object with custom types</div></div>', 'image/page/1796057105679768.png', NULL, NULL),
(84, 19, 'blogs', 'What is Typescript?', '<div data-codeblock=\"true\" data-line-wrapping=\"false\" style=\"box-sizing: border-box; padding: 8px; font-family: Monaco, Menlo, Consolas, &quot;Courier New&quot;, monospace; font-size: 12px; color: rgb(51, 51, 51); border-radius: 4px; border: 1px solid rgba(0, 0, 0, 0.15);\" data-pm-slice=\"2 2 []\" data-en-clipboard=\"true\"><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">Typescript is an object oriented programming language that build on top of JS with extra feature when working in a large scale application with javascript we face some problem like</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">     - very difficult to manage large codebase</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">     - Hard to find bugs</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">     - Catch error only in runtime </div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\"><br></div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">Typescript code can be transplied into older versions of javascript. We can give instruction for it.<br></div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">                 Browser can not read typescript code. It convert to javascript and then run in browser or node javascript env</div><div data-plaintext=\"true\" style=\"\"><span style=\"background-color: rgb(255, 214, 99);\"> Benifits of using typescript</span></div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - Support older browser</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - type safety</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - Increase productivity</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - Less bugs and less testing</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - object with custom types</div></div>', 'image/page/1796057105679768.png', NULL, NULL),
(85, 19, 'blogs', 'What is Typescript?', '<div data-codeblock=\"true\" data-line-wrapping=\"false\" style=\"box-sizing: border-box; padding: 8px; font-family: Monaco, Menlo, Consolas, &quot;Courier New&quot;, monospace; font-size: 12px; color: rgb(51, 51, 51); border-radius: 4px; border: 1px solid rgba(0, 0, 0, 0.15);\" data-pm-slice=\"2 2 []\" data-en-clipboard=\"true\"><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">Typescript is an object oriented programming language that build on top of JS with extra feature when working in a large scale application with javascript we face some problem like</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">     - very difficult to manage large codebase</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">     - Hard to find bugs</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">     - Catch error only in runtime </div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\"><br></div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">Typescript code can be transplied into older versions of javascript. We can give instruction for it.<br></div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">                 Browser can not read typescript code. It convert to javascript and then run in browser or node javascript env</div><div data-plaintext=\"true\" style=\"\"><span style=\"background-color: rgb(255, 214, 99);\"> Benifits of using typescript</span></div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - Support older browser</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - type safety</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - Increase productivity</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - Less bugs and less testing</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - object with custom types</div></div>', 'image/page/1796057105679768.png', NULL, NULL),
(86, 19, 'blogs', 'What is Typescript?', '<div data-codeblock=\"true\" data-line-wrapping=\"false\" style=\"box-sizing: border-box; padding: 8px; font-family: Monaco, Menlo, Consolas, &quot;Courier New&quot;, monospace; font-size: 12px; color: rgb(51, 51, 51); border-radius: 4px; border: 1px solid rgba(0, 0, 0, 0.15);\" data-pm-slice=\"2 2 []\" data-en-clipboard=\"true\"><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">Typescript is an object oriented programming language that build on top of JS with extra feature when working in a large scale application with javascript we face some problem like</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">     - very difficult to manage large codebase</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">     - Hard to find bugs</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">     - Catch error only in runtime </div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\"><br></div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">Typescript code can be transplied into older versions of javascript. We can give instruction for it.<br></div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">                 Browser can not read typescript code. It convert to javascript and then run in browser or node javascript env</div><div data-plaintext=\"true\" style=\"\"><span style=\"background-color: rgb(255, 214, 99);\"> Benifits of using typescript</span></div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - Support older browser</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - type safety</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - Increase productivity</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - Less bugs and less testing</div><div data-plaintext=\"true\" style=\"background-color: rgb(251, 250, 248);\">   - object with custom types</div></div>', 'image/page/1796057105679768.png', NULL, NULL),
(87, 3, 'WhyChooseUs', 'Why Choose Us', '<div style=\"text-align: left;\"><br></div><div style=\"text-align: left;\"><h1 style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 60px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 55px; font-size: 45px; font-family: Montserrat, sans-serif; color: rgb(15, 23, 43); text-align: center; background-color: rgb(241, 248, 255);\">We Care You &amp; We Feel What’s Needs For Good Living</h1></div><ul class=\"feature-list\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style-type: none; color: rgb(102, 101, 101); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 16px; text-align: center; background-color: rgb(241, 248, 255);\"><li class=\"wow fadeInUp  animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"200ms\" style=\"box-sizing: border-box; margin: 0px 0px 50px; padding: 0px 0px 0px 90px; animation-name: fadeInUp; animation-duration: 1000ms; animation-fill-mode: both; position: relative; visibility: visible; animation-delay: 200ms;\"><div class=\"feature-icon\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; position: absolute; left: 0px; top: 10px; height: 60px; color: rgb(255, 255, 255); border-radius: 50%; line-height: 60px; width: 60px; font-size: 24px; background-color: rgb(254, 161, 22);\"><span class=\"fas fa-shield-alt\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; text-rendering: auto; line-height: 1; font-family: &quot;Font Awesome 5 Pro&quot;; font-weight: 900;\"></span></div><h4 style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 38px; font-size: 24px; font-family: Montserrat, sans-serif; color: rgb(15, 23, 43);\">High Security System</h4><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Procure him some great pleasure. To take a trivial example, which of us ever undertakes labor</p></li><li class=\"wow fadeInUp  animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 90px; animation-name: fadeInUp; animation-duration: 1000ms; animation-fill-mode: both; position: relative; visibility: visible; animation-delay: 300ms;\"><div class=\"feature-icon\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; position: absolute; left: 0px; top: 10px; height: 60px; color: rgb(255, 255, 255); border-radius: 50%; line-height: 60px; width: 60px; font-size: 24px; background-color: rgb(254, 161, 22);\"><span class=\"far fa-calendar-alt\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; text-rendering: auto; line-height: 1; font-family: &quot;Font Awesome 5 Pro&quot;;\"></span></div><h4 style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 38px; font-size: 24px; font-family: Montserrat, sans-serif; color: rgb(15, 23, 43);\">Such Events &amp; Party</h4><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Libero tempore, cum soluta nobis est eligenoptio cumque nihil impedit quo minus id quod</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><br></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><br></p><h4 style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Montserrat, sans-serif; font-weight: 700; line-height: 38px; color: rgb(15, 23, 43); font-size: 24px; padding: 0px;\">Such Events &amp; Party</h4><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Libero tempore, cum soluta nobis est eligenoptio cumque nihil impedit quo minus id quod</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><br></p><ul class=\"feature-list\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; padding: 0px; list-style-type: none;\"><li class=\"wow fadeInUp  animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"100ms\" style=\"box-sizing: border-box; margin: 0px 0px 50px; padding: 0px 0px 0px 90px; animation-name: fadeInUp; animation-duration: 1000ms; animation-fill-mode: both; position: relative; visibility: visible; animation-delay: 100ms;\"><h4 style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Montserrat, sans-serif; font-weight: 700; line-height: 38px; color: rgb(15, 23, 43); font-size: 24px; padding: 0px;\"><br></h4></li></ul><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><br></p><ul class=\"feature-list\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; padding: 0px; list-style-type: none;\"><li class=\"wow fadeInUp  animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"100ms\" style=\"box-sizing: border-box; margin: 0px 0px 50px; padding: 0px 0px 0px 90px; animation-name: fadeInUp; animation-duration: 1000ms; animation-fill-mode: both; position: relative; visibility: visible; animation-delay: 100ms;\"><h4 style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 38px; font-size: 24px; font-family: Montserrat, sans-serif; color: rgb(15, 23, 43);\"><br></h4></li></ul></li></ul>', 'image/page/1796690060142952.jpg', NULL, NULL),
(88, 3, 'herosection', NULL, 'Lorem Ipsum is happening today', 'image/page/1796740640943942.jpg', NULL, NULL),
(89, 3, 'herosection', NULL, 'Lorem ipsum is happending today day 2', 'image/page/1796740680523407.jpg', NULL, NULL),
(90, 3, 'About Us', 'About Us', '<div class=\"section-title\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(102, 101, 101); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 16px; text-align: center;\"><h1 style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 35px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 55px; font-size: 45px; font-family: Montserrat, sans-serif; color: rgb(15, 23, 43);\">Welcome To Hotelia Modern Hotel Room Sells Services</h1><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">But I must explain to you how all this mistaken idea denouncing pleasure and praising pain was born and I will give you a complec ount of the system, and expound the actual teachin reatexplorer of the truth, the master-builder of human happiness. No ways one rejdislikes, or avoids pleasure itself, because</p></div><div class=\"counter\" style=\"box-sizing: border-box; margin: 50px 0px 0px; padding: 0px; color: rgb(102, 101, 101); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 16px; text-align: center;\"><div class=\"row\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 0px;\"><div class=\"col-sm-4\" style=\"box-sizing: border-box; margin: 0px; padding-top: 0px; padding-bottom: 0px; width: 172.5px; flex-basis: 33.3333%; max-width: 33.3333%;\"><div class=\"counter-box\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px;\"><span class=\"far fa-building\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; text-rendering: auto; line-height: 1; font-family: &quot;Font Awesome 5 Pro&quot;; font-size: 66px; color: rgb(254, 161, 22);\"></span><span class=\"counter-number\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; font-size: 55px; font-weight: 600; font-family: Montserrat, sans-serif; line-height: 85px; color: rgb(15, 23, 43);\">1080</span><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Total Students</p></div></div><div class=\"col-sm-4\" style=\"box-sizing: border-box; margin: 0px; padding-top: 0px; padding-bottom: 0px; width: 172.5px; flex-basis: 33.3333%; max-width: 33.3333%;\"><div class=\"counter-box\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px;\"><span class=\"far fa-smile\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; text-rendering: auto; line-height: 1; font-family: &quot;Font Awesome 5 Pro&quot;; font-size: 66px; color: rgb(254, 161, 22);\"></span><span class=\"counter-number\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; font-size: 55px; font-weight: 600; font-family: Montserrat, sans-serif; line-height: 85px; color: rgb(15, 23, 43);\">700+</span><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Happy Students</p></div></div><div class=\"col-sm-4\" style=\"box-sizing: border-box; margin: 0px; padding-top: 0px; padding-bottom: 0px; width: 172.5px; flex-basis: 33.3333%; max-width: 33.3333%;\"><div class=\"counter-box\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px;\"><span class=\"fas fa-wifi\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; text-rendering: auto; line-height: 1; font-family: &quot;Font Awesome 5 Pro&quot;; font-weight: 900; font-size: 66px; color: rgb(254, 161, 22);\"></span><span class=\"counter-number\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; font-size: 55px; font-weight: 600; font-family: Montserrat, sans-serif; line-height: 85px; color: rgb(15, 23, 43);\">650</span><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Company Clients</p></div></div></div></div>', 'image/page/1796741913892751.jpg', NULL, NULL),
(91, 3, 'Service Section', 'far fa-passport', '<h3 style=\"text-align: center; \">Website Development</h3><p style=\"text-align: center;\">build your customization website</p>', 'image/page/1796834822512559.jpg', NULL, NULL),
(92, 3, 'Service Section', 'fa fa-database', '<h4 style=\"text-align: center; \">Database Management</h4><p style=\"text-align: center;\">Database management system. Want to protect data, contact us</p>', 'image/page/1796835755710880.jpg', NULL, NULL),
(93, 3, 'Service Section', 'fa fa-newspaper', '<h4 style=\"text-align: center; \">Build Portfolio Website</h4><p style=\"text-align: center;\">Portfolio Website with admin panel</p>', 'image/page/1796876530726244.jpg', NULL, NULL),
(94, 3, 'Service Section', 'fa fa-mobile', '<h4 style=\"text-align: center; \">Mobile Application Development</h4><p style=\"text-align: center;\">Mobile Application Development</p><p style=\"text-align: center;\">Create custom mobile application development using kotlin,flutter or React Native</p>', 'image/page/1796877175692338.jpg', NULL, NULL),
(95, 3, 'Service Section', 'fa fa-bug', '<h4 style=\"text-align: center; \">Bug Fixing</h4><p style=\"text-align: center;\">Getting error, no problem - we are here to help</p>', 'image/page/1796877529214493.jpg', NULL, NULL),
(96, 3, 'Header', 'fa fa-upload', '<h4 style=\"text-align: center; \">Devops</h4><p style=\"text-align: center;\">Any issue of hosting? Contact with us, we are here to help</p>', 'image/page/1796877682625969.jpg', NULL, NULL),
(97, 3, 'learningTopics', 'HTML', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">HTML forms the foundation, defining the structure of every web page with simplicity and clarity.</span>', 'image/page/1797008700040862.png', NULL, NULL),
(98, 3, 'learningTopics', 'CSS', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">CSS adds the vibrant colors and sleek styles, transforming static elements into dynamic designs</span>', 'image/page/1797020676676457.png', NULL, NULL),
(99, 3, 'learningTopics', 'Bootstrap', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Bootstrap injects efficiency, offering a robust framework for rapid development and responsive layouts</span><br>', 'image/page/1797020825547928.jpeg', NULL, NULL),
(100, 3, 'learningTopics', 'Javascript', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">JavaScript breathes life into web applications, fueling interactivity and dynamic functionality</span>', 'image/page/1797020871754258.png', NULL, NULL),
(101, 3, 'learningTopics', 'React - Top popular library worldwide', '<font color=\"#0d0d0d\" face=\"Söhne, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, Helvetica Neue, Arial, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"font-size: 16px; white-space-collapse: preserve;\">React revolutionizes front end development, with its component-based architecture and declarative approach, streamlining UI development like never before</span></font>', 'image/page/1797020979810739.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `post_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title_in` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_in` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_in` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `subcategory_id` int DEFAULT NULL,
  `lastlavel_id` int DEFAULT NULL,
  `brand_id` int DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` int NOT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `lastlavel_id`, `brand_id`, `product_name`, `product_code`, `product_details`, `product_color`, `product_size`, `selling_price`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(25, 16, 27, 33, 1, 'E-commerce(Ecovani)', 'L-001', '<p>Live-link :&nbsp;<a href=\"https://ecovani.sahacompany.site/public/\">https://ecovani.sahacompany.site/public/</a></p><p>github-link : please contact with me</p>', NULL, NULL, 100000, 'image/product/1762326570817538.PNG', NULL, NULL, 1, NULL, NULL),
(26, 16, 27, 36, 1, 'Travel Agency', 'Web-101', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum&nbsp;', NULL, NULL, 40000, 'image/product/1795971944181272.png', NULL, NULL, 1, NULL, NULL),
(27, 16, 27, 33, 1, 'E-commerce(Ecovani)', 'L-002', '<p>Live-link :&nbsp;<a href=\"https://ecovani.sahacompany.site/public/\">https://ecovani.sahacompany.site/public/</a></p><p>github-link : please contact with me</p>', NULL, NULL, 100000, 'image/product/1762326570817538.PNG', NULL, NULL, 1, NULL, NULL),
(28, 16, 27, 36, 1, 'Travel Agency', 'Web-101', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum&nbsp;', NULL, NULL, 40000, 'image/product/1795971944181272.png', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(13, 18, 'image/product/1758641253848508.jpeg', NULL, NULL),
(14, 19, 'image/product/1761365449026295.jpg', NULL, NULL),
(15, 19, 'image/product/1761365449026830.jpg', NULL, NULL),
(16, 19, 'image/product/1761365449027218.jpg', NULL, NULL),
(17, 20, 'image/product/1761365616901850.jpg', NULL, NULL),
(18, 20, 'image/product/1761365616902575.jpg', NULL, NULL),
(19, 20, 'image/product/1761365616903128.jpg', NULL, NULL),
(20, 21, 'image/product/1761365824632728.jpg', NULL, NULL),
(21, 21, 'image/product/1761365824633191.jpg', NULL, NULL),
(22, 21, 'image/product/1761365824633616.jpg', NULL, NULL),
(23, 22, 'image/product/1761366031311856.jpg', NULL, NULL),
(24, 22, 'image/product/1761366031312405.jpg', NULL, NULL),
(25, 22, 'image/product/1761366031312807.jpg', NULL, NULL),
(26, 23, 'image/product/1762325793681027.PNG', NULL, NULL),
(27, 24, 'image/product/1762326016093828.PNG', NULL, NULL),
(28, 25, 'image/product/1762326570891536.PNG', NULL, NULL),
(29, 26, 'image/product/1795971944891045.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `vat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adderss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `order_id`, `ship_name`, `ship_phone`, `ship_email`, `ship_address`, `ship_city`, `created_at`, `updated_at`) VALUES
(31, '32', 'Anik Saha', '+8801628781323', 'sahaanik106@gmail.com', 'Badda,Dhaka', 'Dhaka', NULL, NULL),
(32, '33', 'Abir Saha', '+8801628781323', 'sahaanik106@gmail.com', 'Badda,Dhaka', 'Dhaka', NULL, NULL),
(33, '34', 'Anik Saha', '+8801628781323', 'sahaanik106@gmail.com', 'Badda,Dhaka', 'Dhaka', NULL, NULL),
(34, '35', 'Partho', '01628781323', 'sahaanik106@gmail.com', 'Badda,Dhaka', 'Dhaka', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(23, 12, 'Edible Oil', NULL, NULL),
(26, 16, 'Static', NULL, NULL),
(27, 16, 'Dynamic', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT '0',
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `codemas`
--
ALTER TABLE `codemas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `companymasters`
--
ALTER TABLE `companymasters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactinfos`
--
ALTER TABLE `contactinfos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lastlavels`
--
ALTER TABLE `lastlavels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `newslaters`
--
ALTER TABLE `newslaters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `officeinfos`
--
ALTER TABLE `officeinfos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pagesetups`
--
ALTER TABLE `pagesetups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
