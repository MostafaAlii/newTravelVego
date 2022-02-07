-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 09:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelvego`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mostafa Alii', 'admin@app.com', NULL, '$2y$10$CJ7u.qqVw3v.WUuPaY2JQuHOsc1HrXGtnjLmxdNhXx1Fq/rm4yKSe', 'k638YwJMOz', '2022-02-07 10:52:05', '2022-02-07 10:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, '2022-02-07 15:39:03', '2022-02-07 15:39:03'),
(2, NULL, NULL, NULL, '2022-02-07 15:40:17', '2022-02-07 15:40:17'),
(3, NULL, NULL, NULL, '2022-02-07 15:40:27', '2022-02-07 15:40:27'),
(4, NULL, NULL, NULL, '2022-02-07 15:40:37', '2022-02-07 15:40:37'),
(5, NULL, NULL, NULL, '2022-02-07 15:40:49', '2022-02-07 15:40:49'),
(6, NULL, NULL, NULL, '2022-02-07 15:40:59', '2022-02-07 15:40:59'),
(7, NULL, NULL, NULL, '2022-02-07 15:41:09', '2022-02-07 15:41:09'),
(8, NULL, NULL, NULL, '2022-02-07 15:41:23', '2022-02-07 15:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_translations`
--

CREATE TABLE `appointment_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_translations`
--

INSERT INTO `appointment_translations` (`id`, `appointment_id`, `locale`, `name`) VALUES
(1, 1, 'ar', 'كل يوم'),
(2, 1, 'en', 'Every Day'),
(3, 2, 'ar', 'السبت'),
(4, 3, 'ar', 'الاحد'),
(5, 4, 'ar', 'الاثنين'),
(6, 5, 'ar', 'الثلاثاء'),
(7, 6, 'ar', 'الاربعاء'),
(8, 7, 'ar', 'الخميس'),
(9, 8, 'ar', 'الجمعة'),
(10, 2, 'en', 'Saturday'),
(11, 3, 'en', 'Sunday'),
(12, 4, 'en', 'Monday'),
(13, 5, 'en', 'Tuesday'),
(14, 6, 'en', 'Wednesday'),
(15, 7, 'en', 'Thursday'),
(16, 8, 'en', 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `created_by`, `updated_by`, `city_id`, `created_at`, `updated_at`) VALUES
(3, 'Mostafa Alii', 'Mostafa Alii', 1, '2022-02-07 14:11:56', '2022-02-07 14:12:34');

-- --------------------------------------------------------

--
-- Table structure for table `area_translations`
--

CREATE TABLE `area_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area_translations`
--

INSERT INTO `area_translations` (`id`, `area_id`, `locale`, `name`) VALUES
(3, 3, 'ar', 'الطالبية'),
(4, 3, 'en', 'Talbya'),
(5, 3, 'fr', 'Talbya Fr');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `servprice_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `servprice_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-02-07 16:50:28', '2022-02-07 16:50:28'),
(2, 1, '2022-02-07 16:50:42', '2022-02-07 16:50:42'),
(3, 1, '2022-02-07 16:51:34', '2022-02-07 16:51:34'),
(4, 1, '2022-02-07 16:51:49', '2022-02-07 16:51:49'),
(5, 2, '2022-02-07 16:56:38', '2022-02-07 16:56:38'),
(6, 2, '2022-02-07 16:57:24', '2022-02-07 16:57:24'),
(7, 2, '2022-02-07 16:58:20', '2022-02-07 16:58:20'),
(9, 2, '2022-02-07 17:05:36', '2022-02-07 17:05:36'),
(10, 2, '2022-02-07 17:06:32', '2022-02-07 17:06:32'),
(11, 2, '2022-02-07 17:07:46', '2022-02-07 17:07:46'),
(12, 2, '2022-02-07 17:08:00', '2022-02-07 17:08:00'),
(13, 3, '2022-02-07 17:10:31', '2022-02-07 17:10:31'),
(14, 3, '2022-02-07 17:11:05', '2022-02-07 17:11:05'),
(15, 3, '2022-02-07 17:11:24', '2022-02-07 17:11:24'),
(16, 4, '2022-02-07 17:13:58', '2022-02-07 17:13:58'),
(17, 4, '2022-02-07 17:14:11', '2022-02-07 17:14:11'),
(18, 4, '2022-02-07 17:14:23', '2022-02-07 17:14:23'),
(19, 5, '2022-02-07 17:17:37', '2022-02-07 17:17:37'),
(20, 5, '2022-02-07 17:17:51', '2022-02-07 17:17:51'),
(21, 5, '2022-02-07 17:18:05', '2022-02-07 17:18:05'),
(22, 1, '2022-02-07 17:18:17', '2022-02-07 17:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_translations`
--

CREATE TABLE `attribute_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_translations`
--

INSERT INTO `attribute_translations` (`id`, `attribute_id`, `locale`, `name`) VALUES
(1, 1, 'ar', 'بالغ'),
(2, 2, 'ar', 'طفل'),
(3, 3, 'ar', 'الطفل اقل من'),
(4, 4, 'ar', 'الرضيع اقل من'),
(5, 1, 'en', 'Adult'),
(6, 2, 'en', 'Child'),
(7, 3, 'en', 'Child less than'),
(8, 4, 'en', 'Baby less than'),
(9, 5, 'ar', 'بالغ'),
(10, 5, 'en', 'Adult'),
(11, 6, 'ar', 'طفل'),
(12, 6, 'en', 'Child'),
(13, 7, 'ar', 'غطسة واحدة'),
(14, 7, 'en', 'One Dive'),
(17, 9, 'ar', 'اثنين غطسة'),
(18, 9, 'en', 'Two Dives'),
(19, 10, 'ar', 'غطـــاس'),
(20, 10, 'en', 'Diver'),
(21, 11, 'ar', 'الطفل اقل من'),
(22, 12, 'ar', 'الرضيع اقل من'),
(23, 11, 'en', 'Child less than'),
(24, 12, 'en', 'Baby less than'),
(25, 13, 'ar', 'سيارة 4 راكب'),
(26, 14, 'ar', 'سيارة 10 راكب'),
(27, 15, 'ar', 'سيارة 15 راكب'),
(28, 13, 'en', 'Car 4 Seats'),
(29, 14, 'en', 'Car 10 Seats'),
(30, 15, 'en', 'Car 15 Seats'),
(31, 16, 'ar', 'دقيقة'),
(32, 17, 'ar', 'ساعة'),
(33, 18, 'ar', 'يوم'),
(34, 16, 'en', 'Minute'),
(35, 17, 'en', 'Hour'),
(36, 18, 'en', 'Day'),
(37, 19, 'ar', 'فردى'),
(38, 20, 'ar', 'زوجى-مزدوج'),
(39, 21, 'ar', 'ثلاثى'),
(40, 22, 'ar', 'عائلى'),
(41, 19, 'en', 'Individually'),
(42, 20, 'en', 'Dual'),
(43, 21, 'en', 'Triple'),
(44, 22, 'en', 'Family');

-- --------------------------------------------------------

--
-- Table structure for table `cancelterms`
--

CREATE TABLE `cancelterms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancelterms`
--

INSERT INTO `cancelterms` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(22, NULL, 'Mostafa Alii', NULL, '2022-02-07 20:09:54', '2022-02-07 20:09:54'),
(23, NULL, 'Mostafa Alii', NULL, '2022-02-07 20:10:36', '2022-02-07 20:10:36'),
(24, NULL, 'Mostafa Alii', NULL, '2022-02-07 20:13:49', '2022-02-07 20:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `cancelterm_translations`
--

CREATE TABLE `cancelterm_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cancelterm_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancelterm_translations`
--

INSERT INTO `cancelterm_translations` (`id`, `cancelterm_id`, `locale`, `name`) VALUES
(22, 22, 'ar', 'الغاء مجانى حتى وقت الانطلاق'),
(23, 23, 'ar', 'عدم الالغاء او الاسترداد'),
(24, 24, 'ar', 'عدم الغاء التذكرة و الضرائب - قيمة التذكرة و الضريبة');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `group_id`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, 2, 'Mostafa Alii', 'Mostafa Alii', 1, '2022-02-07 11:48:03', '2022-02-07 12:03:04'),
(3, NULL, 3, 'Mostafa Alii', NULL, 1, '2022-02-07 11:48:17', '2022-02-07 11:48:17'),
(5, NULL, 1, 'Mostafa Alii', 'Mostafa Alii', 1, '2022-02-07 12:04:05', '2022-02-07 12:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(2, 2, 'ar', 'قسم فئة ب', NULL, NULL),
(3, 3, 'ar', 'قسم فئة ج', NULL, NULL),
(6, 2, 'en', 'A', NULL, NULL),
(7, 5, 'ar', 'قسم أ', NULL, NULL),
(8, 5, 'en', 'Category A', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provience_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `created_by`, `updated_by`, `provience_id`, `created_at`, `updated_at`) VALUES
(1, 'Mostafa Alii', 'Mostafa Alii', 3, '2022-02-07 13:44:20', '2022-02-07 14:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `city_translations`
--

CREATE TABLE `city_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city_translations`
--

INSERT INTO `city_translations` (`id`, `city_id`, `locale`, `name`) VALUES
(1, 1, 'ar', 'الهرم'),
(2, 1, 'en', 'Haram');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_logo`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Mostafa Alii', 'Mostafa Alii', '2022-02-07 12:37:56', '2022-02-07 12:38:21'),
(2, NULL, 'Mostafa Alii', 'Mostafa Alii', '2022-02-07 12:38:35', '2022-02-07 12:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `country_codes`
--

CREATE TABLE `country_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_flag.jpg',
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_codes`
--

INSERT INTO `country_codes` (`id`, `image`, `country_code`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'rfnojGhNOsETffI6zCNPYGhY709AmjFsYsvrZ72B.png', '02', 'Mostafa Alii', NULL, '2022-02-07 11:12:39', '2022-02-07 11:12:39'),
(2, 'WiqTOLK2NGArakYV9PMIIrUfJF4Agtnuzfx6gTKX.png', '03', 'Mostafa Alii', NULL, '2022-02-07 11:24:28', '2022-02-07 11:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `country_translations`
--

CREATE TABLE `country_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_translations`
--

INSERT INTO `country_translations` (`id`, `country_id`, `locale`, `name`) VALUES
(1, 1, 'ar', 'مصر'),
(2, 1, 'en', 'Egypt'),
(3, 2, 'en', 'Saudi'),
(4, 2, 'ar', 'السعودية');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Mostafa Alii', NULL, '2022-02-07 14:45:44', '2022-02-07 14:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `currency_translations`
--

CREATE TABLE `currency_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency_translations`
--

INSERT INTO `currency_translations` (`id`, `locale`, `currency_id`, `name`, `currency_symbol`) VALUES
(3, 'ar', 2, 'جنية مصرى', 'ج.م');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galleriable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galleriable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Mostafa Alii', NULL, '2022-02-07 11:47:07', '2022-02-07 11:47:07'),
(2, 'Mostafa Alii', NULL, '2022-02-07 11:47:15', '2022-02-07 11:47:15'),
(3, 'Mostafa Alii', NULL, '2022-02-07 11:47:27', '2022-02-07 11:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `group_translations`
--

CREATE TABLE `group_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_translations`
--

INSERT INTO `group_translations` (`id`, `locale`, `group_id`, `name`) VALUES
(1, 'ar', 1, 'أ'),
(2, 'ar', 2, 'ب'),
(3, 'ar', 3, 'ج');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `language`, `created_at`, `updated_at`) VALUES
(1, NULL, 'ar', '2022-02-07 10:51:24', '2022-02-07 10:51:24');

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
(3, '2018_08_29_200844_create_languages_table', 1),
(4, '2018_08_29_205156_create_translations_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2021_11_02_012004_create_admins_table', 1),
(8, '2021_11_06_203602_create_groups_table ', 1),
(9, '2021_11_06_203845_create_group_translations_table ', 1),
(10, '2021_12_04_180723_create_categories_table', 1),
(11, '2021_12_04_181211_create_category_translations_table', 1),
(12, '2021_12_06_195039_create_countries_table', 1),
(13, '2021_12_06_195209_create_country_translations_table', 1),
(14, '2021_12_07_144642_create_currencies_table', 1),
(15, '2021_12_07_144938_create_currency_translations', 1),
(16, '2021_12_08_151639_create_proviences_table', 1),
(17, '2021_12_08_152722_create_provience_translations_table', 1),
(18, '2021_12_13_131354_create_city_table', 1),
(19, '2021_12_13_131355_create_city_translations_table', 1),
(20, '2021_12_14_234223_create_area_table', 1),
(21, '2021_12_14_234249_create_area_translations_table', 1),
(22, '2022_01_03_170622_create_sections_table', 1),
(23, '2022_01_03_170650_create_section_translations_table', 1),
(24, '2022_01_11_120446_create_country_codes_table', 1),
(25, '2022_01_23_232903_create_suppliers_table', 1),
(26, '2022_01_23_233054_create_supplier_translations_table', 1),
(27, '2022_01_23_234839_create_images_table', 1),
(28, '2022_01_26_171958_create_galleries_table', 1),
(29, '2022_01_28_165543_create_servprices_table', 1),
(30, '2022_01_28_165657_create_servprice_translations_table', 1),
(31, '2022_01_28_182122_create_appointments_table', 1),
(32, '2022_01_28_182224_create_appointment_translations_table', 1),
(33, '2022_01_28_210808_create_privacyterms_table', 1),
(34, '2022_01_28_210903_create_privacyterm_translations_table', 1),
(35, '2022_01_28_212120_create_cancelterms_table', 1),
(36, '2022_01_28_212255_create_cancelterm_translations_table', 1),
(37, '2022_01_29_171111_create_attributes_table', 1),
(38, '2022_01_29_171135_create_attribute_translations_table', 1),
(39, '2022_01_29_220128_create_products_table', 1),
(40, '2022_01_29_220149_create_product_translations_table', 1),
(41, '2022_01_29_231524_create_product_images_table', 1),
(42, '2022_01_30_183619_create_product_appointment_table', 1),
(43, '2022_01_30_184306_create_product_servprice_table', 1),
(44, '2022_01_30_211656_create_product_productprivacyterm_table', 1),
(45, '2022_01_30_212520_create_product_productcancelterm_table', 1),
(46, '2022_01_31_151908_create_product_section_table', 1),
(47, '2022_02_03_182929_create_options_table', 1),
(48, '2022_02_03_183107_create_option_translations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `option_price` decimal(18,4) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `option_translations`
--

CREATE TABLE `option_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `option_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacyterms`
--

CREATE TABLE `privacyterms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacyterms`
--

INSERT INTO `privacyterms` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(22, NULL, 'Mostafa Alii', NULL, '2022-02-07 20:14:50', '2022-02-07 20:14:50'),
(23, NULL, 'Mostafa Alii', NULL, '2022-02-07 20:15:31', '2022-02-07 20:15:31'),
(24, NULL, 'Mostafa Alii', NULL, '2022-02-07 20:16:00', '2022-02-07 20:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `privacyterm_translations`
--

CREATE TABLE `privacyterm_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `privacyterm_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacyterm_translations`
--

INSERT INTO `privacyterm_translations` (`id`, `privacyterm_id`, `locale`, `name`) VALUES
(22, 22, 'ar', 'لا يمكن الوصول اليها بواسطة الكراسى المتحركة'),
(23, 23, 'ar', 'يجب ان يصاحب الاطفال من قبل الكبار'),
(24, 24, 'ar', 'لا ينصح به للمسافرين الحوامل');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `main_price` decimal(18,4) UNSIGNED DEFAULT NULL,
  `price_before_decs` decimal(18,4) UNSIGNED DEFAULT NULL,
  `product_service_hourly` int(11) DEFAULT NULL,
  `product_viewed` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `vip` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) DEFAULT NULL,
  `supplier_product_terms_ex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_appointment`
--

CREATE TABLE `product_appointment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `appointment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_cancelterm`
--

CREATE TABLE `product_cancelterm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `cancelterm_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_privacyterm`
--

CREATE TABLE `product_privacyterm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `privacyterm_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_section`
--

CREATE TABLE `product_section` (
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `section_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_servprice`
--

CREATE TABLE `product_servprice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `servprice_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avaliable_lang` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proviences`
--

CREATE TABLE `proviences` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proviences`
--

INSERT INTO `proviences` (`id`, `created_by`, `updated_by`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Mostafa Alii', NULL, 1, '2022-02-07 13:08:20', '2022-02-07 13:08:20'),
(2, 'Mostafa Alii', NULL, 1, '2022-02-07 13:08:34', '2022-02-07 13:08:34'),
(3, 'Mostafa Alii', NULL, 1, '2022-02-07 13:08:47', '2022-02-07 13:08:47'),
(4, 'Mostafa Alii', NULL, 2, '2022-02-07 13:09:46', '2022-02-07 13:09:46'),
(5, 'Mostafa Alii', NULL, 2, '2022-02-07 13:09:58', '2022-02-07 13:09:58'),
(6, 'Mostafa Alii', NULL, 2, '2022-02-07 13:10:08', '2022-02-07 13:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `provience_translations`
--

CREATE TABLE `provience_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `provience_id` int(10) UNSIGNED DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provience_translations`
--

INSERT INTO `provience_translations` (`id`, `provience_id`, `locale`, `name`) VALUES
(1, 1, 'ar', 'القاهرة'),
(2, 2, 'ar', 'الاسكندرية'),
(3, 3, 'ar', 'الجيزة'),
(4, 4, 'ar', 'الرياض'),
(5, 5, 'ar', 'الدرعية'),
(6, 6, 'ar', 'الخرج');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section_translations`
--

CREATE TABLE `section_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servprices`
--

CREATE TABLE `servprices` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servprices`
--

INSERT INTO `servprices` (`id`, `name`, `created_by`, `updated_by`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Mostafa Alii', 'Mostafa Alii', 1, NULL, '2022-02-07 15:49:28', '2022-02-07 15:49:47'),
(2, NULL, 'Mostafa Alii', 'Mostafa Alii', 1, NULL, '2022-02-07 15:50:07', '2022-02-07 15:53:57'),
(3, NULL, 'Mostafa Alii', 'Mostafa Alii', 1, NULL, '2022-02-07 15:50:21', '2022-02-07 15:54:04'),
(4, NULL, 'Mostafa Alii', 'Mostafa Alii', 1, NULL, '2022-02-07 15:50:34', '2022-02-07 15:54:11'),
(5, NULL, 'Mostafa Alii', 'Mostafa Alii', 1, NULL, '2022-02-07 15:50:47', '2022-02-07 15:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `servprice_translations`
--

CREATE TABLE `servprice_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `servprice_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servprice_translations`
--

INSERT INTO `servprice_translations` (`id`, `servprice_id`, `locale`, `name`) VALUES
(1, 1, 'ar', 'الاشخاص'),
(2, 2, 'ar', 'السباحة والغوض'),
(3, 3, 'ar', 'السيارات'),
(4, 4, 'ar', 'الوقت'),
(5, 5, 'ar', 'الامكانية'),
(6, 5, 'en', 'Possibility'),
(7, 2, 'en', 'Swimming and Diving'),
(8, 1, 'en', 'People'),
(9, 3, 'en', 'Cars'),
(10, 4, 'en', 'Times');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` decimal(8,2) DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double NOT NULL DEFAULT 30.033333,
  `longitude` double NOT NULL DEFAULT 31.233334,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subCategory_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `provience_id` int(10) UNSIGNED DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `area_id` int(10) UNSIGNED DEFAULT NULL,
  `currency_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_translations`
--

CREATE TABLE `supplier_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_primary` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_secondry` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_translations`
--
ALTER TABLE `appointment_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `appointment_translations_appointment_id_locale_unique` (`appointment_id`,`locale`),
  ADD KEY `appointment_translations_locale_index` (`locale`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area_city_id_foreign` (`city_id`);

--
-- Indexes for table `area_translations`
--
ALTER TABLE `area_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `area_translations_area_id_locale_unique` (`area_id`,`locale`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_servprice_id_foreign` (`servprice_id`);

--
-- Indexes for table `attribute_translations`
--
ALTER TABLE `attribute_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attribute_translations_attribute_id_locale_unique` (`attribute_id`,`locale`),
  ADD KEY `attribute_translations_locale_index` (`locale`);

--
-- Indexes for table `cancelterms`
--
ALTER TABLE `cancelterms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancelterm_translations`
--
ALTER TABLE `cancelterm_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cancelterm_translations_cancelterm_id_locale_unique` (`cancelterm_id`,`locale`),
  ADD KEY `cancelterm_translations_locale_index` (`locale`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_provience_id_foreign` (`provience_id`);

--
-- Indexes for table `city_translations`
--
ALTER TABLE `city_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `city_translations_city_id_locale_unique` (`city_id`,`locale`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_codes`
--
ALTER TABLE `country_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country_codes_country_code_unique` (`country_code`);

--
-- Indexes for table `country_translations`
--
ALTER TABLE `country_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country_translations_country_id_locale_unique` (`country_id`,`locale`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_translations`
--
ALTER TABLE `currency_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `currency_translations_currency_id_locale_unique` (`currency_id`,`locale`),
  ADD KEY `currency_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_galleriable_type_galleriable_id_index` (`galleriable_type`,`galleriable_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_translations`
--
ALTER TABLE `group_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_translations_group_id_locale_unique` (`group_id`,`locale`),
  ADD KEY `group_translations_locale_index` (`locale`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_product_id_foreign` (`product_id`),
  ADD KEY `options_attribute_id_product_id_index` (`attribute_id`,`product_id`);

--
-- Indexes for table `option_translations`
--
ALTER TABLE `option_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option_translations_option_id_locale_unique` (`option_id`,`locale`),
  ADD KEY `option_translations_locale_index` (`locale`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacyterms`
--
ALTER TABLE `privacyterms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacyterm_translations`
--
ALTER TABLE `privacyterm_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `privacyterm_translations_privacyterm_id_locale_unique` (`privacyterm_id`,`locale`),
  ADD KEY `privacyterm_translations_locale_index` (`locale`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `product_appointment`
--
ALTER TABLE `product_appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_appointment_product_id_foreign` (`product_id`),
  ADD KEY `product_appointment_appointment_id_foreign` (`appointment_id`);

--
-- Indexes for table `product_cancelterm`
--
ALTER TABLE `product_cancelterm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_cancelterm_product_id_foreign` (`product_id`),
  ADD KEY `product_cancelterm_cancelterm_id_foreign` (`cancelterm_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_privacyterm`
--
ALTER TABLE `product_privacyterm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_privacyterm_product_id_foreign` (`product_id`),
  ADD KEY `product_privacyterm_privacyterm_id_foreign` (`privacyterm_id`);

--
-- Indexes for table `product_section`
--
ALTER TABLE `product_section`
  ADD KEY `product_section_product_id_foreign` (`product_id`),
  ADD KEY `product_section_section_id_foreign` (`section_id`);

--
-- Indexes for table `product_servprice`
--
ALTER TABLE `product_servprice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_servprice_product_id_foreign` (`product_id`),
  ADD KEY `product_servprice_servprice_id_foreign` (`servprice_id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`),
  ADD KEY `product_translations_locale_index` (`locale`);
ALTER TABLE `product_translations` ADD FULLTEXT KEY `product_name` (`product_name`);

--
-- Indexes for table `proviences`
--
ALTER TABLE `proviences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proviences_country_id_foreign` (`country_id`);

--
-- Indexes for table `provience_translations`
--
ALTER TABLE `provience_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `provience_translations_provience_id_locale_unique` (`provience_id`,`locale`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_translations`
--
ALTER TABLE `section_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `section_translations_section_id_locale_unique` (`section_id`,`locale`),
  ADD KEY `section_translations_locale_index` (`locale`);

--
-- Indexes for table `servprices`
--
ALTER TABLE `servprices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servprice_translations`
--
ALTER TABLE `servprice_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `servprice_translations_servprice_id_locale_unique` (`servprice_id`,`locale`),
  ADD KEY `servprice_translations_locale_index` (`locale`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_email_unique` (`email`),
  ADD UNIQUE KEY `suppliers_code_unique` (`code`),
  ADD KEY `suppliers_group_id_foreign` (`group_id`),
  ADD KEY `suppliers_category_id_foreign` (`category_id`),
  ADD KEY `suppliers_country_id_foreign` (`country_id`),
  ADD KEY `suppliers_provience_id_foreign` (`provience_id`),
  ADD KEY `suppliers_city_id_foreign` (`city_id`),
  ADD KEY `suppliers_area_id_foreign` (`area_id`),
  ADD KEY `suppliers_currency_id_foreign` (`currency_id`);

--
-- Indexes for table `supplier_translations`
--
ALTER TABLE `supplier_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supplier_translations_supplier_id_locale_unique` (`supplier_id`,`locale`),
  ADD UNIQUE KEY `supplier_translations_company_name_unique` (`company_name`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_language_id_foreign` (`language_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `appointment_translations`
--
ALTER TABLE `appointment_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `area_translations`
--
ALTER TABLE `area_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `attribute_translations`
--
ALTER TABLE `attribute_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cancelterms`
--
ALTER TABLE `cancelterms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cancelterm_translations`
--
ALTER TABLE `cancelterm_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city_translations`
--
ALTER TABLE `city_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country_codes`
--
ALTER TABLE `country_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country_translations`
--
ALTER TABLE `country_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `currency_translations`
--
ALTER TABLE `currency_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `group_translations`
--
ALTER TABLE `group_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `option_translations`
--
ALTER TABLE `option_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacyterms`
--
ALTER TABLE `privacyterms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `privacyterm_translations`
--
ALTER TABLE `privacyterm_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_appointment`
--
ALTER TABLE `product_appointment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_cancelterm`
--
ALTER TABLE `product_cancelterm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_privacyterm`
--
ALTER TABLE `product_privacyterm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_servprice`
--
ALTER TABLE `product_servprice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proviences`
--
ALTER TABLE `proviences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `provience_translations`
--
ALTER TABLE `provience_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section_translations`
--
ALTER TABLE `section_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servprices`
--
ALTER TABLE `servprices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `servprice_translations`
--
ALTER TABLE `servprice_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier_translations`
--
ALTER TABLE `supplier_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_translations`
--
ALTER TABLE `appointment_translations`
  ADD CONSTRAINT `appointment_translations_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `area_translations`
--
ALTER TABLE `area_translations`
  ADD CONSTRAINT `area_translations_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attributes`
--
ALTER TABLE `attributes`
  ADD CONSTRAINT `attributes_servprice_id_foreign` FOREIGN KEY (`servprice_id`) REFERENCES `servprices` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_translations`
--
ALTER TABLE `attribute_translations`
  ADD CONSTRAINT `attribute_translations_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cancelterm_translations`
--
ALTER TABLE `cancelterm_translations`
  ADD CONSTRAINT `cancelterm_translations_cancelterm_id_foreign` FOREIGN KEY (`cancelterm_id`) REFERENCES `cancelterms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_provience_id_foreign` FOREIGN KEY (`provience_id`) REFERENCES `proviences` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `city_translations`
--
ALTER TABLE `city_translations`
  ADD CONSTRAINT `city_translations_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `country_translations`
--
ALTER TABLE `country_translations`
  ADD CONSTRAINT `country_translations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `currency_translations`
--
ALTER TABLE `currency_translations`
  ADD CONSTRAINT `currency_translations_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `group_translations`
--
ALTER TABLE `group_translations`
  ADD CONSTRAINT `group_translations_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `options_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `option_translations`
--
ALTER TABLE `option_translations`
  ADD CONSTRAINT `option_translations_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `privacyterm_translations`
--
ALTER TABLE `privacyterm_translations`
  ADD CONSTRAINT `privacyterm_translations_privacyterm_id_foreign` FOREIGN KEY (`privacyterm_id`) REFERENCES `privacyterms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_appointment`
--
ALTER TABLE `product_appointment`
  ADD CONSTRAINT `product_appointment_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_appointment_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_cancelterm`
--
ALTER TABLE `product_cancelterm`
  ADD CONSTRAINT `product_cancelterm_cancelterm_id_foreign` FOREIGN KEY (`cancelterm_id`) REFERENCES `cancelterms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_cancelterm_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_privacyterm`
--
ALTER TABLE `product_privacyterm`
  ADD CONSTRAINT `product_privacyterm_privacyterm_id_foreign` FOREIGN KEY (`privacyterm_id`) REFERENCES `privacyterms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_privacyterm_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_section`
--
ALTER TABLE `product_section`
  ADD CONSTRAINT `product_section_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_section_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_servprice`
--
ALTER TABLE `product_servprice`
  ADD CONSTRAINT `product_servprice_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_servprice_servprice_id_foreign` FOREIGN KEY (`servprice_id`) REFERENCES `servprices` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `proviences`
--
ALTER TABLE `proviences`
  ADD CONSTRAINT `proviences_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `provience_translations`
--
ALTER TABLE `provience_translations`
  ADD CONSTRAINT `provience_translations_provience_id_foreign` FOREIGN KEY (`provience_id`) REFERENCES `proviences` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `section_translations`
--
ALTER TABLE `section_translations`
  ADD CONSTRAINT `section_translations_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `servprice_translations`
--
ALTER TABLE `servprice_translations`
  ADD CONSTRAINT `servprice_translations_servprice_id_foreign` FOREIGN KEY (`servprice_id`) REFERENCES `servprices` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `suppliers_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `suppliers_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `suppliers_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `suppliers_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `suppliers_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `suppliers_provience_id_foreign` FOREIGN KEY (`provience_id`) REFERENCES `proviences` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `supplier_translations`
--
ALTER TABLE `supplier_translations`
  ADD CONSTRAINT `supplier_translations_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `translations`
--
ALTER TABLE `translations`
  ADD CONSTRAINT `translations_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
