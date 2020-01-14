-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 08:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `about_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_text`, `image`, `is_deleted`, `about_status`, `created_at`, `updated_at`) VALUES
(1, '<p>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and sc</p>', '__1578897261.jpg', 0, 1, NULL, '2020-01-13 00:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `avatar`, `address`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sohidul Islam Sohel', '01961363544', 'admin@gmail.com', 'public/adminpanel/avatar/5df9bf3d68ca2.jpg', 'Dhaka mirpur 1', NULL, '$2y$10$4dVRpdfoVgHNJffr35dQ8ekGW/PFEcELEL5Q6.9v8lxvpHUflngxO', NULL, '', NULL, '2019-12-18 00:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `brand_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(10, 'Lotto0ooo', '__1577514728.png', 1, 0, '2019-12-23 23:11:11', '2019-12-28 03:20:14'),
(11, 'Nike yyy', '__1577514735.jpg', 1, 1, '2019-12-23 23:11:18', '2019-12-28 03:20:31'),
(12, 'Bata new', '__1577514743.jpg', 1, 1, '2019-12-28 00:30:41', '2019-12-28 03:20:25'),
(13, 'Addidas', 'brand_1577524607.jpg', 1, 1, '2019-12-28 03:16:47', '2019-12-28 03:20:19'),
(14, 'Nike', 'brand_1578460637.png', 1, 0, '2020-01-07 23:17:17', '2020-01-07 23:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `cate_image`, `cate_icon`, `cate_tag`, `cate_slug`, `cate_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(32, 'New', 'category__1577169623.jpg', '__1577169623.png', 'new', 'ttttty', '1', 0, '2019-12-24 00:40:23', '2020-01-03 02:52:39'),
(33, 'Men', 'category__1578375617.jpg', '__1578375617.jpg', 'vbbv', 'men', '1', 0, '2020-01-06 23:40:17', '2020-01-06 23:40:17'),
(34, 'Women', 'category__1578375638.jpg', '__1578375638.png', 'new', 'asif-new', '1', 0, '2020-01-06 23:40:38', '2020-01-06 23:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `color_code`, `color_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(5, 'marun', '#8000ff', 1, 0, NULL, '2019-12-24 22:09:48'),
(6, 'green', '#40db24', 1, 0, NULL, NULL),
(7, 'black', '#000040', 1, 1, NULL, '2019-12-28 03:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `cupons`
--

CREATE TABLE `cupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cupon_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum_shopping` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` double NOT NULL,
  `discount_type` int(11) NOT NULL,
  `cupon_start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupon_end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cupons`
--

INSERT INTO `cupons` (`id`, `cupon_type`, `cupon_code`, `minimum_shopping`, `product_id`, `discount`, `discount_type`, `cupon_start_date`, `cupon_end_date`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '2', '100ppp', NULL, '[\"59\",\"58\",\"57\"]', 10000, 1, '2020-01-11', '2020-01-21', 1, 1, '2020-01-11 05:52:52', '2020-01-11 05:52:52'),
(2, '1', '10000ooooo', '1000', 'null', 8000, 2, '2020-01-11', '2020-01-23', 1, 1, '2020-01-11 05:52:39', '2020-01-11 05:52:39'),
(3, '2', 'bvbnbvn', NULL, '[\"67\",\"58\"]', 10, 2, '2020-01-11', '2020-01-29', 1, 0, '2020-01-11 22:14:41', '2020-01-11 22:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_ques` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_ans` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `faq_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `faq_ques`, `faq_ans`, `is_deleted`, `faq_status`, `created_at`, `updated_at`) VALUES
(10, 'dsfsd', 'jhjghj', 0, 1, NULL, '2020-01-13 22:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `flash_deals`
--

CREATE TABLE `flash_deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flash_deals`
--

INSERT INTO `flash_deals` (`id`, `title`, `start_date`, `end_date`, `is_deleted`, `status`, `created_at`, `updated_at`) VALUES
(1, 'This is a Flash Deal', '2020-01-13', '2020-01-15', 0, 1, '2020-01-13 04:26:27', '2020-01-13 05:59:24'),
(3, 'This flash deal 2', '2020-01-13', '2020-01-13', 0, 1, '2020-01-13 05:56:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flash_deal_details`
--

CREATE TABLE `flash_deal_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flash_deal_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `discount` bigint(20) NOT NULL,
  `discount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flash_deal_details`
--

INSERT INTO `flash_deal_details` (`id`, `flash_deal_id`, `product_id`, `discount`, `discount_type`, `is_deleted`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 34, 10, '2', 0, 1, NULL, NULL),
(2, 1, 51, 10, '2', 0, 1, NULL, NULL),
(3, 1, 53, 10, '2', 0, 1, NULL, NULL),
(4, 3, 34, 10, '1', 0, 1, NULL, NULL),
(5, 3, 51, 10, '1', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gateway`
--

CREATE TABLE `gateway` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `str_publish_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `str_secret_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_client_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_secret_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mol_publish_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mol_secret_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twocheck_publish_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twocheck_secret_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateway`
--

INSERT INTO `gateway` (`id`, `str_publish_key`, `str_secret_key`, `pay_client_id`, `pay_secret_key`, `mol_publish_key`, `mol_secret_key`, `twocheck_publish_key`, `twocheck_secret_key`, `created_at`, `updated_at`) VALUES
(1, 'pk_test_MIQvgqy5bnE19yPHSgpfjHFW00bg8cg785', 'sk_test_cSQHERxSPzqk4QQAeiQdhfXD00qjkqhfjx', 'AfGti37yWMZMmD0LQLAIj6iZyGZJA-W4zJU_NUytkqZvknmDvUyaZsWB7zkbY9ub0YRa3rdkzHmHApOv', 'EK0QIlwWrCWqQoRF6kRJDTBjqz8bOAme0ZmBPHpbZK5EidhH9AVYo4ZYM-acYsDwsollzByu29_qv95U', 'sk_test_cSQHERxSPzqk4QQAeiQdhfXD00qjkqhfjx', 'pk_test_MIQvgqy5bnE19yPHSgpfjHFW00bg8cg785', 'pk_test_MIQvgqy5bnE19yPHSgpfjHFW00bg8cg785', 'sk_test_cSQHERxSPzqk4QQAeiQdhfXD00qjkqhfjx', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `front_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preloader` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `front_logo`, `favicon`, `admin_logo`, `background`, `preloader`, `created_at`, `updated_at`) VALUES
(1, 'public/adminpanel/logos/logo.png', 'public/adminpanel/logos/favicon.png', 'public/adminpanel/logos/1653506802311058.png', 'public/adminpanel/logos/1653506750394371.jpg', 'public/adminpanel/logos/1653507818657835.gif', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mesurements`
--

CREATE TABLE `mesurements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mesurements`
--

INSERT INTO `mesurements` (`id`, `m_name`, `m_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(4, 'Kilogram', 1, 0, '2019-12-28 00:06:15', '2019-12-28 00:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_17_043058_create_admins_table', 1),
(5, '2019_12_18_073041_create_seo_table', 2),
(6, '2019_12_18_094449_create_sitesetting_table', 3),
(7, '2019_12_18_101228_create_logos_table', 4),
(8, '2019_12_21_062155_create_gateway_table', 5),
(9, '2019_12_22_063447_create_categories_table', 6),
(10, '2019_12_23_042229_create_sub_categories_table', 7),
(11, '2019_12_23_073037_create_re_sub_categories_table', 8),
(12, '2019_12_23_101603_create_colors_table', 9),
(13, '2019_12_23_113719_create_brands_table', 10),
(14, '2019_12_24_120621_create_mesurements_table', 11),
(15, '2019_12_28_092506_create_products_table', 12),
(16, '2019_12_29_052728_create_product_images_table', 13),
(17, '2019_12_30_103935_create_product_licenses_table', 14),
(18, '2020_01_11_090041_create_cupons_table', 15),
(23, '2020_01_13_053446_create_frontend_selectors_table', 16),
(28, '2020_01_13_062453_create_frontend_css_js_table', 17),
(29, '2020_01_13_062549_create_fronten_headers_table', 17),
(30, '2020_01_13_062604_create_fronten_footers_table', 17),
(31, '2020_01_14_062445_create_theme_selectors_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$vewRBtV9mR5A3IKOWze1zOyM7KUc.jrer2GGvbA5wzFlBr74w/6ze', '2019-12-17 01:04:10'),
('admin@gmail.com', '$2y$10$vewRBtV9mR5A3IKOWze1zOyM7KUc.jrer2GGvbA5wzFlBr74w/6ze', '2019-12-17 01:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_type` int(11) DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_qty` int(11) DEFAULT NULL,
  `cate_id` int(11) NOT NULL,
  `subcate_id` int(11) NOT NULL,
  `resubcate_id` int(11) NOT NULL,
  `product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colors` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variations` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choice_options` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allow_product_condition` int(11) DEFAULT NULL,
  `product_condition` int(11) DEFAULT NULL,
  `brand` int(11) DEFAULT NULL,
  `allow_product_measurement` int(11) DEFAULT NULL,
  `product_measurement` int(11) DEFAULT NULL,
  `allow_flash_deal` int(11) DEFAULT NULL,
  `flash_deal_start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flash_deal_end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flash_deal_type` int(11) DEFAULT NULL,
  `flash_deal_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_and_return_policy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `today_deal` int(11) NOT NULL DEFAULT 0,
  `select_upload_type` int(11) DEFAULT NULL,
  `upload_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliate_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_key` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_quantity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_duration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_type`, `product_name`, `product_sku`, `product_qty`, `cate_id`, `subcate_id`, `resubcate_id`, `product_price`, `colors`, `variations`, `choice_options`, `allow_product_condition`, `product_condition`, `brand`, `allow_product_measurement`, `product_measurement`, `allow_flash_deal`, `flash_deal_start_date`, `flash_deal_end_date`, `flash_deal_type`, `flash_deal_price`, `product_description`, `buy_and_return_policy`, `shipping_time`, `meta_tag`, `meta_description`, `photos`, `thumbnail_img`, `today_deal`, `select_upload_type`, `upload_file`, `upload_link`, `affiliate_link`, `license_type`, `license_key`, `license_quantity`, `license_duration`, `is_deleted`, `status`, `created_at`, `updated_at`) VALUES
(34, 4, 'fghfhgf', 'pant003', 100, 32, 11, 6, '1000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-06', '2020-01-21', 0, '4500', '<p>&#39;public/uploads/products/thumbnail/&#39;.$ImageName;</p>', '<p>&#39;public/uploads/products/thumbnail/&#39;.$ImageName;</p>', '6787', '10,dfg', 'fjsdfh hsdbgh', NULL, 'public/uploads/products/thumbnail/th_1578307490.jpg', 1, 1, 'public/uploads/products/file/th_1578307490.pdf', NULL, NULL, NULL, NULL, '', '', 0, 1, '2020-01-06 04:44:50', '2020-01-11 03:52:23'),
(51, 1, 'fghfhgf', 'ghjghj', 100, 32, 11, 6, '1000', '[\"#8000ff\"]', '{\"marun-m\":{\"price\":\"1\",\"sku\":\"f-marun-m\",\"qty\":\"1122\"},\"marun-l\":{\"price\":\"1000\",\"sku\":\"f-marun-l\",\"qty\":\"10\"},\"marun-h\":{\"price\":\"1000\",\"sku\":\"f-marun-h\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"m\",\"l\",\"h\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-07', '2020-01-15', 1, '4500', '<p>sdfdsfdsf</p>', '<p>sdfdfdf</p>', '5', 'mm', 'fjsdfh hsdbgh', '[\"YQZqUnOrCIPC1yPPCgf4nyTNzpoKPAZBObVxhExt.png\"]', 'public/uploads/products/thumbnail/th_1578395437.gif', 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '2020-01-07 05:10:37', '2020-01-11 03:52:35'),
(52, 1, 'fghfhgf', 'ghjghj', 5, 32, 11, 6, '1000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-l\":{\"price\":\"1000\",\"sku\":\"-marun-l\",\"qty\":\"10\"},\"green-l\":{\"price\":\"1000\",\"sku\":\"-green-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', 1, 2, 10, 1, 4, 1, '2020-01-07', '2020-01-22', 1, '4500', '<p>hjgfgfgfh</p>', '<p>fghgfhgfh</p>', '5', 'fghgf', 'fjsdfh hsdbgh', '[]', 'public/uploads/products/thumbnail/th_1578395604.jpg', 1, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 0, '2020-01-07 05:13:24', '2020-01-11 03:52:33'),
(53, 1, 'Roy', '123', 100, 32, 11, 6, '1000', '[\"#8000ff\"]', '{\"marun-l\":{\"price\":\"10999\",\"sku\":\"R-marun-l\",\"qty\":\"10\"}}', '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"l\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-07', '2020-01-14', 2, '4500', '<p>new</p>', '<p>new</p>', '7', 'fghgfhh,jjj', 'new', '[\"HdJpyWyyub076iO1oRuZctVP2Qfd5mnB9dLd31tD.jpeg\",\"DZkdV6RRIf0U2OcPYdZXIOlLzLc5BDz8TNXxPncA.jpeg\",\"dSDEukWPai4NYecnHHfAKQoQtNu2NUiW761NtFU1.jpeg\"]', 'public/uploads/products/thumbnail/th_1578461179.jpg', 1, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '2020-01-07 05:17:42', '2020-01-11 03:50:51'),
(54, 1, 'asif ha ha ha', 'pant', 10, 32, 11, 6, '10000', '[\"#8000ff\",\"#40db24\"]', '{\"marun-hp-l-5gb\":{\"price\":\"10000\",\"sku\":\"ahhh-marun-hp-l-5gb\",\"qty\":\"10\"},\"marun-hp-m-5gb\":{\"price\":\"10000\",\"sku\":\"ahhh-marun-hp-m-5gb\",\"qty\":\"10\"},\"green-hp-l-5gb\":{\"price\":\"10000\",\"sku\":\"ahhh-green-hp-l-5gb\",\"qty\":\"10\"},\"green-hp-m-5gb\":{\"price\":\"10000\",\"sku\":\"ahhh-green-hp-m-5gb\",\"qty\":\"10\"}}', '[{\"name\":\"choice_2\",\"title\":\"brand\",\"options\":[\"hp\"]},{\"name\":\"choice_3\",\"title\":\"size\",\"options\":[\"l\",\"m\"]},{\"name\":\"choice_4\",\"title\":\"ram\",\"options\":[\"5gb\"]}]', 1, 1, 10, 1, 4, 1, '2020-01-07', '2020-01-22', 2, '4500', '<p>dfgfdg</p>', '<p>fdgfg</p>', '5', 'mm', 'df', '[\"txPOXZVijBAM8bxOql7yng1s8nOvnLPbO7Hlbprd.png\",\"I90qXozqWUT0Adq7YGefq6uGwZCUjfaOJmMFevvZ.jpeg\"]', 'public/uploads/products/thumbnail/th_1578460808.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 1, '2020-01-07 05:20:43', '2020-01-11 03:52:30'),
(55, 2, 'digital update', '123', 10, 32, 11, 6, '1000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-08', '2020-01-08', 1, '4500', '<p>ghghhhh</p>', '<p>gfhghgfh</p>', '5', 'hhhh', 'fjsdfh hsdbgh', '[\"uBda3BWAmWvqyprIcNEiTMjBlbOvgT7ZlaCfipVj.png\"]', 'public/uploads/products/thumbnail/th_1578462394.jpg', 1, 2, NULL, '#$yyyyyyyyyyy', NULL, NULL, NULL, '', '', 0, 1, '2020-01-07 23:46:34', '2020-01-11 03:50:51'),
(56, 2, 'digital2', 'ghjghj', 5656, 32, 11, 6, '10000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-08', '2020-01-08', 2, '4500', '<p>jjfhjdffdfh</p>', '<p>fgjhjhgjhj</p>', '5', 'mmm', 'dhhh', '[\"VZTeV1FnTjfjjLU8xgZ2IzzG4LXhTUvLYMhrt7Yl.jpeg\",\"zhye4Pz7LHD045zvqBLo3I2ZnAOTU0GzcbUlQ3QT.jpeg\"]', 'public/uploads/products/thumbnail/th_1578462443.jpg', 1, 2, 'public/uploads/products/file/tda3o86rcglHedr5ZcIUOuT2vDdfii7omio3250y.pdf', '#$', NULL, NULL, NULL, '', '', 0, 0, '2020-01-07 23:47:23', '2020-01-11 03:52:31'),
(57, 2, 'digital product 45', 'dfhhfgdh', 10, 32, 11, 6, '10000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-08', '2020-01-08', 1, '4500', '<p>gfgfhfghgfh</p>', '<p>gfhgfhgfh</p>', '5', 'ghgh', 'mmmm', '[\"vUshRw8kqUsfv9EDDULxhkZAA7lkra8sVCkj5c36.jpeg\",\"MRz8oQCxqricI0ffMbLMFhPIea00T1Tu5Zv0FryY.png\"]', 'public/uploads/products/thumbnail/th_1578466659.jpg', 0, 2, 'public/uploads/products/file//HKgzZMCTybVdxZjrSOfFqoWwEvqAL6Fm2jXACcsG.pdf', '#$', NULL, NULL, NULL, '', '', 0, 1, '2020-01-08 00:57:39', '2020-01-11 03:52:32'),
(58, 4, 'Affiliate product', '12kkkk34', 1000, 32, 11, 6, '10000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-08', '2020-01-10', 1, '4500', '<p>fdlorem ipsumfdlorem ipsumfdlorem ipsumfdlorem ipsum</p>', '<p>fdlorem ipsumfdlorem ipsumfdlorem ipsumfdlorem ipsum</p>', '5', 'mm', 'fjsdfh hsdbgh', '[\"JujTEpY742lfIdIISHJg99PPBrZlUoeraAdb6euJ.png\",\"2UnQpNbdMjDw6JtiKKm9HErYxD6GR0cwZIaoJ65D.jpeg\"]', 'public/uploads/products/thumbnail/th_1578467263.jpg', 1, 2, NULL, '#$', NULL, NULL, NULL, '', '', 0, 1, '2020-01-08 01:07:43', '2020-01-11 03:52:21'),
(59, 4, 'affiliate', 'affa', 133, 32, 11, 6, '10000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-08', '2020-01-22', 1, '4500', '<p>lorem ipsum&nbsp;lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>', '<p>lorem ipsum&nbsp;lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>', '5', 'mm,hhjjj', 'fjsdfh hsdbgh', '[\"6i8rE2INL3rBM5ScVwhJf03UPkj6gUYHzxEDpD7D.jpeg\",\"GDQxTtquxeqkBuT8cpODH9bW4hlVE5KX87DeOaeR.png\"]', 'public/uploads/products/thumbnail/th_1578467621.jpg', 1, 2, NULL, '#$', '##########################', NULL, NULL, '', '', 0, 1, '2020-01-08 01:13:41', '2020-01-11 03:50:48'),
(67, 3, 'gjghj', 'pant003', 100, 32, 11, 6, '10000', '[]', NULL, '[]', NULL, NULL, NULL, NULL, NULL, 1, '2020-01-11', '2020-01-22', 1, '4500', '<p>jghjh</p>', '<p>hkjk</p>', '6787', 'mm', 'fjsdfh hsdbgh', '[\"zGrCDRN2LeHOtpR1teTwJm9BQTsZwoZzToEqzbZF.png\",\"xDVMSWQOninVTNpeIfo8YPyA600rTbNlHShqGGJb.jpeg\"]', 'public/uploads/products/thumbnail/th_1578743046.jpg', 0, 2, NULL, '#$', NULL, 'new ha', NULL, NULL, NULL, 0, 1, '2020-01-11 05:44:07', '2020-01-11 05:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_licenses`
--

CREATE TABLE `product_licenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `license_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_quantity` int(11) DEFAULT NULL,
  `license_duration` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_licenses`
--

INSERT INTO `product_licenses` (`id`, `product_id`, `license_key`, `license_quantity`, `license_duration`, `created_at`, `updated_at`) VALUES
(1, 29, 'foysal', NULL, 10, '2019-12-30 06:04:41', NULL),
(2, 29, 'aasif', NULL, 20, '2019-12-30 06:04:41', NULL),
(3, 29, 'new', NULL, 15, '2019-12-30 06:04:41', NULL),
(4, 30, 'shisir', 60, 10, '2019-12-30 06:06:48', NULL),
(5, 30, 'abir', 50, 50, '2019-12-30 06:06:48', NULL),
(7, 60, 'new', 13, 13, '2020-01-08 03:19:30', NULL),
(8, 61, 'ro', 107, 12, '2020-01-08 23:37:06', '2020-01-08 23:37:06'),
(9, 61, 'llllaaa', 12, 23, '2020-01-08 03:22:50', NULL),
(42, 61, 'asif', 8989, 666, '2020-01-09 00:13:30', '2020-01-09 00:13:30'),
(43, 61, 'asif', 78, 96, '2020-01-09 00:08:02', '2020-01-09 00:08:02'),
(151, 65, 'new', 1010, 1212, '2020-01-09 02:13:49', NULL),
(152, 65, 'asif fo', 585, 464, '2020-01-09 02:13:49', NULL),
(166, 66, 'new', 101010, 101010, '2020-01-10 22:23:34', NULL),
(167, 66, 'asif fo', 10, 1569, '2020-01-10 22:23:34', NULL),
(171, 67, 'new', 10, 15, '2020-01-11 05:44:54', NULL),
(172, 67, 'asif fo', 152, 10, '2020-01-11 05:44:54', NULL),
(173, 67, 'asif follll', 10, 10, '2020-01-11 05:44:54', NULL),
(174, 67, 'jjjj', 15, 25, '2020-01-11 05:44:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `re_sub_categories`
--

CREATE TABLE `re_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resubcate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resubcate_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resubcate_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` int(11) NOT NULL,
  `subcate_id` int(11) NOT NULL,
  `resubcate_status` int(11) NOT NULL DEFAULT 1,
  `resubcate_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `re_sub_categories`
--

INSERT INTO `re_sub_categories` (`id`, `resubcate_name`, `resubcate_slug`, `resubcate_tag`, `cate_id`, `subcate_id`, `resubcate_status`, `resubcate_icon`, `is_deleted`, `created_at`, `updated_at`) VALUES
(6, 'asif', 'new-hi', 'new', 32, 11, 1, 'category__1577518143.jpg', 0, '2019-12-28 01:29:03', '2019-12-28 01:29:03'),
(7, 'asif nnnn', 'new-hi', 'newm', 32, 12, 1, 'category__1577518159.png', 0, '2019-12-28 01:29:19', '2019-12-28 01:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_verification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bing_verification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alexa_analytic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `meta_title`, `meta_author`, `meta_description`, `meta_key`, `google_verification`, `bing_verification`, `google_analytic`, `alexa_analytic`, `created_at`, `updated_at`) VALUES
(1, 'DurbarIT | All Kind Solution Of IT', 'DurbarIT', 'DurbarIT | All Kind Solution Of IT', 'software company , webdesign , web development', '<meta name=\"google-site-verification\" content=\"dasdasd\" />', '<meta name=\"Bing-site-verification\" content=\"asdasd\" />', 'DurbarIT | All Kind Solution Of IT', 'DurbarIT | All Kind Solution Of IT DurbarIT | All Kind Solution Of IT DurbarIT | All Kind Solution Of IT DurbarIT | All Kind Solution Of ITDurbarIT | All Kind Solution Of IT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `company_name`, `phone_one`, `phone_two`, `email_one`, `email_two`, `address`, `facebook`, `instagram`, `twitter`, `linkedin`, `google`, `feed`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'DurbarItTest', '01961363544', '019613635343', 'sohidulislam@gmail.com', 'sohidulislam@gmail.com', 'Dhaka mirpur 1', 'https://www.facebook.com', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.google.com', 'https://www.feed.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `smtp`
--

CREATE TABLE `smtp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encryption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `mailgun_domain` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailgun_secret` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailgun_endpoint` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailgun_status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smtp`
--

INSERT INTO `smtp` (`id`, `driver`, `host`, `port`, `from_address`, `from_name`, `encryption`, `username`, `password`, `status`, `mailgun_domain`, `mailgun_secret`, `mailgun_endpoint`, `mailgun_status`, `created_at`, `updated_at`) VALUES
(1, 'smtp', 'smtp.mailtrap.io', 'smtp', 'durbarit@gmail.com', 'DurbarMail', 'tls', '3caf684790c0b4', '69628e626d4842', 0, 'durbarit.com', '786b2642c49a1f9ef4296a26cb02053b-e470a504-af64068e', 'api.mailgun.net', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcate_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` int(11) NOT NULL,
  `subcate_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcate_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcate_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcate_status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `subcate_name`, `subcate_slug`, `cate_id`, `subcate_image`, `subcate_icon`, `subcate_tag`, `subcate_status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(8, 'pant', 'new-pant', 30, 'subcategory__1577082891.jpg', '__1577082891.jpg', 'pant', 1, 0, '2019-12-23 00:34:51', '2019-12-23 00:34:51'),
(9, 'new', 'nnnn', 30, 'subcategory__1577084371.jpg', '__1577084371.png', 'nwew', 1, 0, '2019-12-23 00:59:31', '2019-12-23 00:59:31'),
(10, 'new hi', 'nnnn-neqeqeqweqw', 31, 'subcategory__1577084416.jpg', '__1577084416.jpg', 'ecom', 1, 0, '2019-12-23 01:00:16', '2019-12-23 01:00:16'),
(11, 'sub', 'nnnn', 32, 'subcategory__1577517735.jpg', '__1577517735.jpg', 'new', 1, 0, '2019-12-28 01:22:15', '2019-12-28 01:22:15'),
(12, 'new', 'asif', 32, 'subcategory__1577517757.jpg', '__1577517757.jpg', 'new', 1, 1, '2019-12-28 01:22:37', '2019-12-28 03:14:06'),
(13, 'new', 'asif', 34, 'subcategory__1578375663.jpg', '__1578375663.png', 'mm', 1, 0, '2020-01-06 23:41:03', '2020-01-06 23:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `termsandcondition` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`id`, `termsandcondition`, `created_at`, `updated_at`) VALUES
(1, '<p>s simply dummy text of the printing and typesetting industry. Lorremaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, '2020-01-13 01:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `theme_selectors`
--

CREATE TABLE `theme_selectors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `css_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `js_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_selectors`
--

INSERT INTO `theme_selectors` (`id`, `css_name`, `js_name`, `header_name`, `footer_name`, `theme_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'frontend.include.css.home1', 'frontend.include.js.home1', 'frontend.include.header.home1', 'frontend.include.footer.footer1', 'frontend.home.home1', 1, '2020-01-13 18:00:00', NULL),
(2, 'frontend.include.css.home2', 'frontend.include.js.home2', 'frontend.include.header.home2', 'frontend.include.footer.footer2', 'frontend.home.home2', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', NULL, 'user@gmail.com', NULL, NULL, '$2y$10$zuZe4ZnxfA6AY/3FYEEbuOO3R5.l6kEgyI9QkoBR6w/UH25GcTm6i', '71FPRJX2cLXpFY7hwGwcgRsvy7yg5nKKz7TStZ1oOmgWTIulVLdkuOKJa1vq', '2019-12-16 22:51:45', '2019-12-17 00:24:20'),
(2, 'user1', NULL, 'user1@gmail.com', NULL, NULL, '$2y$10$Uw96hu6F6YGmyQHvnyZTQuV0QbFEkB9svhGGePzLPPOR6HS3t6dlC', NULL, '2019-12-16 23:47:00', '2019-12-16 23:47:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

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
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cupons`
--
ALTER TABLE `cupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deals`
--
ALTER TABLE `flash_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deal_details`
--
ALTER TABLE `flash_deal_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flash_deal_details_flash_deal_id_foreign` (`flash_deal_id`),
  ADD KEY `flash_deal_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `gateway`
--
ALTER TABLE `gateway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesurements`
--
ALTER TABLE `mesurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_licenses`
--
ALTER TABLE `product_licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `re_sub_categories`
--
ALTER TABLE `re_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp`
--
ALTER TABLE `smtp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_selectors`
--
ALTER TABLE `theme_selectors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `theme_selectors_css_name_unique` (`css_name`),
  ADD UNIQUE KEY `theme_selectors_js_name_unique` (`js_name`),
  ADD UNIQUE KEY `theme_selectors_header_name_unique` (`header_name`),
  ADD UNIQUE KEY `theme_selectors_footer_name_unique` (`footer_name`),
  ADD UNIQUE KEY `theme_selectors_theme_name_unique` (`theme_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cupons`
--
ALTER TABLE `cupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `flash_deals`
--
ALTER TABLE `flash_deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flash_deal_details`
--
ALTER TABLE `flash_deal_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gateway`
--
ALTER TABLE `gateway`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mesurements`
--
ALTER TABLE `mesurements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `product_licenses`
--
ALTER TABLE `product_licenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `re_sub_categories`
--
ALTER TABLE `re_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smtp`
--
ALTER TABLE `smtp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `theme_selectors`
--
ALTER TABLE `theme_selectors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flash_deal_details`
--
ALTER TABLE `flash_deal_details`
  ADD CONSTRAINT `flash_deal_details_flash_deal_id_foreign` FOREIGN KEY (`flash_deal_id`) REFERENCES `flash_deals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `flash_deal_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
