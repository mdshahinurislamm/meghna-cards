-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2025 at 01:08 PM
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
-- Database: `meghna`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home Category', 'home-category', '1', '2025-05-06 01:14:42', '2025-05-06 01:14:42'),
(2, 'ONLINE FOOD DELIVERY1', 'online-food-delivery', '1', '2025-05-06 03:28:37', '2025-05-06 03:37:29'),
(3, 'New', 'new', '1', '2025-05-06 03:55:57', '2025-05-06 03:55:57'),
(4, 'Shahin', 'shahin', '1', '2025-05-06 04:12:50', '2025-05-06 04:12:50'),
(5, 'category', 'category', '1', '2025-05-06 04:39:46', '2025-05-06 04:39:46'),
(6, 'Current Offers', 'current-offers', '1', '2025-05-21 04:46:02', '2025-05-21 04:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `fsubject` varchar(255) DEFAULT NULL,
  `femail` varchar(255) DEFAULT NULL,
  `fphone` varchar(255) DEFAULT NULL,
  `fmessage` varchar(255) DEFAULT NULL,
  `fattachemnt` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `img_name`, `created_at`, `updated_at`) VALUES
(1, '2025/05/6819a3885c98b_main-logo.png', '2025-05-05 23:52:08', '2025-05-05 23:52:08'),
(2, '2025/05/6819a5679cea2_favicon.png', '2025-05-06 00:00:07', '2025-05-06 00:00:07'),
(3, '2025/05/6819b4c0bddf6_banner3.webp', '2025-05-06 01:05:36', '2025-05-06 01:05:36'),
(4, '2025/05/6819b4f1b5f5b_banner1.webp', '2025-05-06 01:06:25', '2025-05-06 01:06:25'),
(5, '2025/05/6819d122debe0_Dining-black.png', '2025-05-06 03:06:42', '2025-05-06 03:06:42'),
(6, '2025/05/6819d63f5d2c7_FOODPANDA.jpg', '2025-05-06 03:28:31', '2025-05-06 03:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `sub_menu_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_22_061437_create_categories_table', 1),
(7, '2021_09_28_112700_create_post_table', 1),
(8, '2021_10_25_082616_create_media_table', 1),
(9, '2021_11_04_095453_create_settings_table', 1),
(10, '2021_12_28_105941_create_posttype_table', 1),
(11, '2022_11_15_094925_create_feedbacks_table', 1),
(12, '2023_01_15_111057_create_menus_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `content_css` longtext DEFAULT NULL,
  `excerpt` longtext DEFAULT NULL,
  `thumbnail_path` varchar(255) DEFAULT NULL,
  `post_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `option_1` varchar(255) DEFAULT NULL,
  `option_2` varchar(255) DEFAULT NULL,
  `option_3` varchar(255) DEFAULT NULL,
  `option_4` varchar(255) DEFAULT NULL,
  `more_option_1` varchar(255) DEFAULT NULL,
  `more_option_2` longtext DEFAULT NULL,
  `gallery_img` varchar(255) DEFAULT NULL,
  `template` varchar(255) DEFAULT NULL,
  `trash` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `position`, `user_id`, `category_id`, `title`, `slug`, `content`, `content_css`, `excerpt`, `thumbnail_path`, `post_type`, `status`, `option_1`, `option_2`, `option_3`, `option_4`, `more_option_1`, `more_option_2`, `gallery_img`, `template`, `trash`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, '', 'Copyright', 'copyright', '<div class=\"social-links d-flex\" style=\"justify-content: center;\"><a><i class=\"bi bi-twitter-x\"></i></a> <a><i class=\"bi bi-facebook\"></i></a> <a><i class=\"bi bi-instagram\"></i></a> <a><i class=\"bi bi-linkedin\"></i></a></div>', NULL, NULL, NULL, 'footer', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2025-05-06 00:02:57', '2025-05-06 22:24:02'),
(9, 1, 1, '', 'Home Page', 'home-page', NULL, NULL, NULL, NULL, 'posts', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', 'meghna_slider,meghna_type', NULL, '2025-05-06 00:52:25', '2025-05-07 00:40:01'),
(10, NULL, 1, '', 'Slider 1', 'test', '<p>testset</p>', NULL, NULL, '2025/05/6819b4c0bddf6_banner3.webp', 'meghna-slider', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2025-05-06 01:00:25', '2025-05-06 01:05:56'),
(11, NULL, 1, '', 'Slider 2', 'slider-2', NULL, NULL, NULL, '2025/05/6819b4f1b5f5b_banner1.webp', 'meghna-slider', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2025-05-06 01:06:32', '2025-05-06 01:06:32'),
(12, 1, 1, '2,3,4', '20% SAVINGS', 'test-1', '<div class=\"modal-header\">\r\n<h5 class=\"modal-title\" id=\"offer_modal_title\">FOODPANDa</h5>\r\n</div>\r\n<div class=\"modal-body\">\r\n<div class=\"modal-detail\">\r\n<p><b>OFFER</b>:</p>\r\n<p>20% SAVINGS UP TO BDT 150 PER TRANSACTION WITH A MINIMUM ORDER OF BDT 499 FOR CITY BANK AMERICAN EXPRESS PLATINUM, GOLD AND BLUE CREDIT CARDS AND CITYMAXX CARD. APPLICABLE FOR TWO TRANSACTIONS ONLY.<br /><strong>FOR PANDAMART:</strong><span>&nbsp;</span>12% SAVINGS UP TO BDT 250/TRANSACTION WITH A MINIMUM TRANSACTION OF BDT 2000. APPLICABLE FOR TWO TRANSACTIONS ONLY.<br />FOR LAST 5 DAYS OF RAMADAN BDT 500 ON TRANSACTION OF ABOVE BDT 5,000. APPLICABLE FOR ONE TRANSACTION ONLY AND VALID FOR CITY BANK AMERICAN EXPRESS PLATINUM, GOLD &amp; BLUE CREDIT CARDS</p>\r\n</div>\r\n<p><b>WEB:<span>&nbsp;</span></b><a href=\"https://www.foodpanda.com.bd/\">https://www.foodpanda.com.bd/</a></p>\r\n<b>VALIDITY:</b><span>&nbsp;</span>TILL THE EVE OF EID-UL-FITR 2025\r\n<p><b>Eligible Cards</b><span>&nbsp;</span>: CITY BANK AMERICAN EXPRESS PLATINUM, GOLD, BLUE, CITYMAXX CARD AND CITY ALO CREDIT CARDS.</p>\r\n</div>', NULL, 'https://dev.ailservers.com/elegant.com.bd/garments-apparels', '2025/05/6819d63f5d2c7_FOODPANDA.jpg', 'dining-offers', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2025-05-06 02:16:11', '2025-05-07 00:40:32'),
(19, NULL, 1, '3', 'trdt', 'trdt', NULL, NULL, NULL, NULL, 'dining-offers', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2025-05-06 03:39:22', '2025-05-06 03:56:02'),
(20, NULL, 1, '3', 'gsdfgdfg', 'gsdfgdfg', NULL, NULL, NULL, NULL, 'dining-offers', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2025-05-06 03:56:22', '2025-05-06 03:56:22'),
(21, NULL, 1, ',4', 'Shahin', 'shahin', NULL, NULL, NULL, '2025/05/6819d122debe0_Dining-black.png', 'dining-offers', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2025-05-06 04:12:25', '2025-05-06 04:12:50'),
(22, NULL, 1, ',5', 'test', 'test-2', NULL, NULL, NULL, NULL, 'online-offers', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2025-05-06 04:39:15', '2025-05-06 04:39:46'),
(23, 2, 1, '', 'Current Existing Offers', 'current-existing-offers', NULL, NULL, NULL, NULL, 'posts', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', 'meghna_slider_current,meghna_type_current', NULL, '2025-05-21 04:26:18', '2025-05-21 04:32:32'),
(24, NULL, 1, '', 'Dummy Post', 'dummy-post', NULL, NULL, NULL, '2025/05/6819b4f1b5f5b_banner1.webp', 'current-offer-slider', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2025-05-21 04:29:12', '2025-05-21 04:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `posttypes`
--

CREATE TABLE `posttypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_main_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `pt_content` longtext DEFAULT NULL,
  `pt_content_css` longtext DEFAULT NULL,
  `pt_thumbnail_path` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `excerpt` varchar(255) NOT NULL,
  `thumbnail_path` varchar(255) NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `option_4` varchar(255) NOT NULL,
  `more_option_1` varchar(255) NOT NULL,
  `more_option_2` varchar(255) NOT NULL,
  `gallery_img` varchar(255) NOT NULL,
  `trash` varchar(255) DEFAULT NULL,
  `in_menu_swh` varchar(255) NOT NULL,
  `menu_icon` varchar(255) DEFAULT NULL,
  `in_dashboard` varchar(255) NOT NULL,
  `paginate` int(11) DEFAULT NULL,
  `template` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posttypes`
--

INSERT INTO `posttypes` (`id`, `user_id`, `category_main_id`, `name`, `slug`, `pt_content`, `pt_content_css`, `pt_thumbnail_path`, `status`, `category_id`, `title`, `content`, `excerpt`, `thumbnail_path`, `option_1`, `option_2`, `option_3`, `option_4`, `more_option_1`, `more_option_2`, `gallery_img`, `trash`, `in_menu_swh`, `menu_icon`, `in_dashboard`, `paginate`, `template`, `created_at`, `updated_at`) VALUES
(2, 1, 0, 'Footer', 'footer', NULL, NULL, NULL, '1', 'Categories', 'Title', 'Content', 'Excerpt', 'Thumbnail', 'Optional Field', 'Optional Field', 'Optional Field', 'Optional Field', 'Optional Field', 'Optional Field', 'Gallery', NULL, '0', NULL, '0', NULL, 0, '2025-05-06 00:02:57', '2025-05-06 22:21:06'),
(4, 1, 0, 'Meghna Slider', 'meghna-slider', NULL, NULL, NULL, '1', 'Categories', 'Title', 'Content', 'Excerpt', 'Thumbnail', 'Optional Field', 'Optional Field', 'Optional Field', 'Optional Field', 'Optional Field', 'Optional Field', 'Gallery', NULL, '1', NULL, '0', NULL, 0, '2025-05-06 00:47:27', '2025-05-06 00:49:03'),
(5, 1, 0, 'Posts', 'posts', NULL, NULL, NULL, '1', 'Categories', 'Title', 'Content', 'Excerpt', 'Thumbnail', 'Optional Field', 'Optional Field', 'Optional Field', 'Optional Field', 'Optional Field', 'Optional Field', 'Gallery', NULL, '0', NULL, '0', NULL, 1, '2025-05-06 00:49:52', '2025-05-07 00:36:39'),
(6, 1, 1, 'Dining Offers', 'dining-offers', '<p><img src=\"http://localhost/meghna/public/uploads/2025/05/6819d122debe0_Dining-black.png\" width=\"100\" height=\"100\" alt=\"\" /></p>', NULL, '2025/05/6819b4f1b5f5b_banner1.webp', '1', 'Category', 'Title', 'Editor', 'URL', 'Image', '#', '#', '#', '#', '#', '#', '#', NULL, '0', NULL, '0', NULL, 1, '2025-05-06 01:15:30', '2025-05-21 04:20:39'),
(9, 1, 6, 'Online Offers', 'online-offers', '<p><img src=\"http://localhost/meghna/public/uploads/2025/05/6819d122debe0_Dining-black.png\" width=\"100\" height=\"100\" alt=\"\" /></p>', NULL, '2025/05/6819b4c0bddf6_banner3.webp', '1', 'category', 'Title', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', NULL, '1', 'Dining Offers', '1', NULL, 1, '2025-05-06 04:38:58', '2025-05-21 04:46:44'),
(11, 1, 0, 'Current Offer Slider', 'current-offer-slider', NULL, NULL, NULL, '1', 'Categories', 'Title', 'Content', 'Excerpt', 'Thumbnail', 'Optional Field', 'Optional Field', 'Optional Field', 'Optional Field', 'Optional Field', 'Optional Field', 'Gallery', NULL, '1', NULL, '0', NULL, 0, '2025-05-21 04:29:12', '2025-05-21 04:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `fav_icon` varchar(255) DEFAULT NULL,
  `dashboard_color` varchar(255) DEFAULT NULL,
  `text_color` varchar(255) DEFAULT NULL,
  `text_hover` varchar(255) DEFAULT NULL,
  `theme_url` varchar(255) DEFAULT NULL,
  `home_url` varchar(255) DEFAULT NULL,
  `editor` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `footer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `sub_title`, `site_logo`, `fav_icon`, `dashboard_color`, `text_color`, `text_hover`, `theme_url`, `home_url`, `editor`, `header`, `footer`, `created_at`, `updated_at`) VALUES
(1, 'Meghna Bank PLC', NULL, '2025/05/6819a3885c98b_main-logo.png', '2025/05/6819a5679cea2_favicon.png', '#ffffff', '#37256e', '#837f90', 'meghna', '9', 'classic', 'meghna_header', 'meghna_footer', '2025-05-05 23:51:23', '2025-05-07 00:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `feedbacks` varchar(255) DEFAULT NULL,
  `media` varchar(255) DEFAULT NULL,
  `menus` varchar(255) DEFAULT NULL,
  `posts_id` varchar(255) DEFAULT NULL,
  `posttypes_id` varchar(255) DEFAULT NULL,
  `admin_pt_menu` varchar(255) DEFAULT NULL,
  `create` varchar(255) DEFAULT NULL,
  `update` varchar(255) DEFAULT NULL,
  `delete` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `categories`, `feedbacks`, `media`, `menus`, `posts_id`, `posttypes_id`, `admin_pt_menu`, `create`, `update`, `delete`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shahin', 'testershahin042@gmail.com', NULL, '$2y$12$J563NeIGXfcgP1xytnC.DuhjmgkEMJfJnIMkXcUQR3IAvLw8r.JZO', '111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-05 23:51:24', '2025-05-05 23:51:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posttypes`
--
ALTER TABLE `posttypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posttypes`
--
ALTER TABLE `posttypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
