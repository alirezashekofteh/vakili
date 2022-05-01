-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 04:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vakili`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(10) UNSIGNED DEFAULT 0,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picslide` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vip` int(10) UNSIGNED DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent`, `type`, `content`, `slug`, `pic`, `picslide`, `vip`, `created_at`, `updated_at`) VALUES
(1, 'مقالات', 0, NULL, NULL, 'مقالات', NULL, NULL, 0, '2021-10-13 11:38:33', '2021-10-13 11:38:33'),
(2, 'اخبار', 0, NULL, NULL, 'اخبار', NULL, NULL, 0, '2021-10-13 11:38:42', '2021-10-13 11:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(16, 6, NULL, NULL),
(66, 10, NULL, NULL),
(74, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_id` bigint(20) UNSIGNED NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `website`, `commentable_id`, `commentable_type`, `parent_id`, `approved`, `comment`, `created_at`, `updated_at`) VALUES
(7, 'علیرضا شکفته', 'info@bgolestan.ir', 'بیبیب', 6, 'App\\Models\\Service', 0, 1, 'بیبیبیببی', '2021-06-06 06:00:57', '2021-06-06 06:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `pic`, `link`, `active`, `created_at`, `updated_at`) VALUES
(2, 'شرکت 1', '/front/assets/images/clients/3.png', NULL, 1, NULL, NULL),
(3, 'شرکت 1', '/front/assets/images/clients/2.png', NULL, 1, NULL, NULL),
(4, 'شرکت 1', '/front/assets/images/clients/1.png', NULL, 1, NULL, NULL),
(5, 'شرکت 1', '/front/assets/images/clients/4.png', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_pages`
--

CREATE TABLE `main_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picdesk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picmobile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seotext` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutfooter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picabout` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `face` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toeet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_pages`
--

INSERT INTO `main_pages` (`id`, `picdesk`, `picmobile`, `banner1`, `banner2`, `seotext`, `aboutfooter`, `picabout`, `about`, `logo`, `insta`, `face`, `toeet`, `linkdin`, `adress`, `tel`, `email`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '/images/24 index.png', NULL, NULL, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز', '/images/product/استاتور.JPG', '<p>گروه صنعتی خاور هسته در سال ۱۳۵۶ فعالیت خود را با پانچ ورقه هسته ترانسفورماتور شروع و در زمان کوتاهی توانست ضمن شناخت اولویت&zwnj;های بازار مصرف قطعات خودرو و لوازم خانگی را در برنامه تولیدات خود داشته باشد. پس از آن با احداث واحدهای رولبری، قالبسازی و آبکاری توانست چرخه تولید قطعات پرسی را کامل نمایند این گروه صنعتی در سال ۱۳۸۳ موفق به دریافت گواهینامه سیستم مدیریت کیفیت ایزو ۹۰۰۱ از شرکت RWTUV آلمان گردید و در سالهای ۱۳۸۶ و ۱۳۸۹ و ۱۳۹۱ موفق به تمدید گواهی نامه مذکور از شرکت TUV NORD آلمان شد. همچنین در سال ۱۳۸۷ سیستم مدیریت کیفیت این سازمان به تایید شرکت VALEO فرانسه رسید.</p>', '/front/assets/images/logo/logo.png', 'https://www.instagram.com/p/CSmB3q0DA3q/?utm_medium=copy_link', 'khavarrrrrhaste', 'toeetkhavarrrrrrrrrrrrr', 'linkdin', 'ایران تهران خیابان پامنار کوچه کنسولگری پلاک 3', '09162352304', 'khavarhasteeeee', NULL, '2021-10-25 23:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(10) UNSIGNED DEFAULT 0,
  `pic` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tartib` double DEFAULT 0,
  `view` tinyint(1) DEFAULT 1,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `route`, `value`, `parent`, `pic`, `tartib`, `view`, `link`, `type`, `created_at`, `updated_at`) VALUES
(1, 'صفحه اصلی', 'main', '0', 0, NULL, 1, 1, '/', 'header', '2021-01-20 09:49:38', '2021-05-31 09:10:57'),
(2, 'محصولات', 'courses', 'article', 0, NULL, 2, 1, '/', 'header', '2021-01-21 12:45:23', '2021-06-01 16:23:02'),
(4, 'خدمات', 'index', '0', 0, NULL, 4, 1, '/', 'header', '2021-01-21 12:59:29', '2021-06-03 13:24:01'),
(10, 'هسته های ترانس', 'courses', 'courses', 2, NULL, NULL, 1, '/', 'header', '2021-05-26 12:53:33', '2021-06-02 05:08:11'),
(11, 'قالپاق ترانس', 'main', 'courses', 2, NULL, NULL, 1, '/', 'header', '2021-05-26 12:54:11', '2021-06-02 05:06:38'),
(12, 'دایکاست', 'courses', 'courses', 2, NULL, NULL, 1, '/', 'header', '2021-05-26 12:54:38', '2021-06-02 05:09:11'),
(13, 'تماس با ما', 'contact us', 'contact us', 0, NULL, 10, 1, '/', 'header', '2021-05-26 12:58:18', '2021-05-28 14:45:37'),
(14, 'درباره ما', 'courses', 'courses', 0, NULL, 9, 1, '/', 'header', '2021-05-26 12:59:15', '2021-05-28 14:45:45'),
(15, 'قالب سازی', 'courses', 'courses', 4, NULL, NULL, 1, '/', 'header', '2021-05-26 13:00:30', '2021-06-02 09:32:18'),
(16, 'آبکاری', 'courses', 'courses', 4, NULL, NULL, 1, '/', 'header', '2021-05-26 13:00:47', '2021-06-02 09:34:33'),
(18, 'رول بری', 'courses', 'courses', 4, NULL, NULL, 1, '/', 'header', '2021-05-26 13:01:22', '2021-06-02 09:33:28'),
(21, 'وبلاگ', NULL, NULL, 0, NULL, 3, 1, 'https://khavarhasteh.ir/blog', 'header', '2021-06-02 05:51:37', '2021-10-13 11:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `menu_admins`
--

CREATE TABLE `menu_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `panel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(10) UNSIGNED DEFAULT 0,
  `pic` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tartib` double DEFAULT 0,
  `view` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_admins`
--

INSERT INTO `menu_admins` (`id`, `name`, `route`, `link`, `gate`, `panel`, `parent`, `pic`, `tartib`, `view`, `created_at`, `updated_at`) VALUES
(0, 'شاخه اصلی', '', NULL, NULL, '', 0, NULL, 0, NULL, NULL, NULL),
(6, 'لیست منو', 'admin.menuadmin.index', '/admin/menuadmin', 'menuadmin-list', 'admin', 5, NULL, 2, 1, '2021-01-10 04:31:18', '2021-01-10 04:31:18'),
(10, 'پیشخوان', '#', '/admin', 'admin-index', 'admin', 0, NULL, 1, 1, '2021-01-10 07:46:52', '2021-01-10 07:46:52'),
(11, 'اطلاعات پایه', '#', '#', '#', 'admin', 0, NULL, 2, 1, '2021-01-10 08:46:29', '2021-04-10 05:06:12'),
(12, 'دسته بندی مطالب', 'admin.category.index', '/admin/category', 'category-list', 'admin', 0, NULL, 3, 1, '2021-01-10 09:04:11', '2021-06-05 15:21:01'),
(14, 'لیست مطالب', 'admin.post.index', '/admin/post', 'post-list', 'admin', 0, NULL, 3.5, 1, '2021-01-10 11:07:02', '2021-06-05 15:19:25'),
(20, 'منو های سایت', 'admin.menu.index', '/admin/menu', 'menu-index', 'admin', 11, NULL, 4, 1, '2021-01-20 09:24:53', '2021-04-10 05:26:45'),
(24, 'مدیریت کاربران', 'admin.user.index', '/admin/user', 'user-index', 'admin', 11, NULL, 4, 1, '2021-01-30 12:23:26', '2021-04-10 05:09:40'),
(28, 'لیست اسلایدشو', 'admin.slideshow.index', '/admin/slideshow', 'slideshow-index', 'admin', 11, NULL, 4, 1, '2021-04-10 05:14:21', '2021-04-10 05:14:21'),
(32, 'اطلاعات صفحه اصلی', 'mainpage', '/admin/mainpage', 'mainpage-index', 'admin', 11, NULL, 8, 1, '2021-05-03 20:23:11', '2021-05-03 20:23:11'),
(33, 'لیست نظرات', 'admin.comments', '/admin/comments', 'comments-index', 'admin', 11, NULL, 6, 1, '2021-05-10 09:54:10', '2021-05-10 09:55:49'),
(35, 'دسته بندی پروژه ها', 'admin.Service.index', '/admin/Service', 'admin-service-index', 'admin', 0, NULL, 5, 1, '2021-06-05 08:12:04', '2021-06-05 15:19:18'),
(36, 'پروژه ها', 'admin.product.index', '/admin/product', 'admin-product-index', 'admin', 0, NULL, 6, 1, '2021-06-05 08:30:57', '2021-06-05 15:19:10'),
(37, 'لیست شرکت ها', 'admin.Customer.index', '/admin/company', 'admin-customer-index', 'admin', 0, NULL, 8, 1, '2021-06-05 10:00:24', '2021-06-05 15:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_08_02_111248_create_sessions_table', 2),
(6, '2021_08_02_111919_create_permission_tables', 3),
(8, '2021_08_16_115356_create_products_table', 4),
(9, '2021_08_16_162526_create_questions_table', 5),
(10, '2021_08_22_200842_create_companies_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', '1');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(11) DEFAULT 0,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `name_fa`, `parent`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'menu', 'منو های سایت', 0, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(42, 'user', 'مدیریت کاربران', 0, 'web', NULL, NULL),
(43, 'slideshow', 'مدیریت اسلایدشو', 0, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(44, 'comment', 'مدیریت نظرات', 0, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(45, 'mainpage', 'اطلاعات صفحه اصلی', 0, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(46, 'post', 'لیست مطالب', 0, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(47, 'category', 'دسته بندی', 0, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(48, 'service', 'لیست خدمات', 0, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(49, 'product', 'محصولات', 0, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(50, 'company', 'شرکت ها', 0, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(51, 'menu-create', 'افزودن منو', 1, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(52, 'menu-edit', 'ویرایش منو', 1, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(53, 'menu-delete', 'حذف منو', 1, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(54, 'menu-list', 'لیست منو', 1, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(55, 'user-create', 'افزودن کاربر', 42, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(56, 'user-edit', 'ویرایش کاربر', 42, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(57, 'user-delete', 'حذف کاربر', 42, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(58, 'user-list', 'لیست کاربر', 42, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(59, 'slideshow-create', 'افزودن اسلایدشو', 43, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(60, 'slideshow-edit', 'ویرایش اسلایدشو', 43, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(61, 'slideshow-delete', 'حذف اسلایدشو', 43, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(62, 'slideshow-list', 'لیست اسلایدشو', 43, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(63, 'post-create', 'افزودن مطالب', 46, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(64, 'post-edit', 'ویرایش مطالب', 46, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(65, 'post-delete', 'حذف مطالب', 46, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(66, 'post-list', 'لیست مطالب', 46, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(67, 'category-create', 'افزودن دسته بندی', 47, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(68, 'category-edit', 'ویرایش دسته بندی', 47, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(69, 'category-delete', 'حذف دسته بندی', 47, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(70, 'category-list', 'لیست دسته بندی', 47, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(71, 'service-create', 'افزودن خدمات', 48, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(72, 'service-edit', 'ویرایش خدمات', 48, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(73, 'service-delete', 'حذف خدمات', 48, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(74, 'service-list', 'لیست خدمات', 48, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(75, 'product-create', 'افزودن محصولات', 49, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(76, 'product-edit', 'ویرایش محصولات', 49, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(77, 'product-delete', 'حذف محصولات', 49, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(78, 'product-list', 'لیست محصولات', 49, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(79, 'company-create', 'افزودن شرکت ها', 50, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(80, 'company-edit', 'ویرایش شرکت ها', 50, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(81, 'company-delete', 'حذف شرکت ها', 50, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35'),
(82, 'company-list', 'لیست شرکت ها', 50, 'web', '2021-07-21 00:41:35', '2021-07-21 00:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullcontent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `comment` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `noti` int(11) DEFAULT 0,
  `sardabir` int(11) DEFAULT 0,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `user_id`, `content`, `fullcontent`, `pic`, `active`, `comment`, `created_at`, `updated_at`, `noti`, `sardabir`, `type`, `video`) VALUES
(12, 'ارگانیک و طبیعی تفاوت چیست؟', 'ارگانیک-و-طبیعی-تفاوت-چیست', '1', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است', NULL, '/front/assets/images/resource/news-9.jpg', 1, 0, '2021-06-05 09:21:22', '2021-06-29 04:44:58', 0, 1, 'off', NULL),
(13, 'ارگانیک و طبیعی تفاوت چیست؟', 'ارگانیک-و-طبیعی-تفاوت-چیست-1', '1', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است', NULL, '/front/assets/images/resource/news-10.jpg', 1, 0, '2021-06-05 09:22:07', '2021-06-29 04:44:56', 0, 1, 'off', NULL),
(14, 'ارگانیک چیست؟', 'ارگانیک-و-طبیعی-تفاوت-چیست-2', '1', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است', '<p>334343434343434<img alt=\"\" src=\"/images/1/3.jpg\" style=\"height:957px; width:705px\" /></p>', '/images/product/گازور2.jpg', 1, 1, '2021-06-05 09:22:51', '2021-08-30 07:32:47', 0, 1, 'off', NULL),
(15, 'قرقره چیست؟', 'محمد', '1', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است', '<p>ewewewewe</p>', '/images/product/پروژکتور.jpg', 1, 1, '2021-08-10 14:14:11', '2021-08-30 07:33:56', 0, 0, NULL, NULL),
(16, 'دایکاست چیست؟', 'محمد-1', '1', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است', '<p>khavarhasteh.com</p>', '/images/product/قرقره-ریلی.jpg', 1, 1, '2021-08-10 14:14:49', '2021-09-18 12:16:19', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) DEFAULT 1,
  `comment` tinyint(1) DEFAULT 1,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullcontent` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `user_id`, `active`, `comment`, `content`, `fullcontent`, `service_id`, `slug`, `pic`, `created_at`, `updated_at`) VALUES
(5, 'شروع سال تحصیلی 1401-1400', 1, 1, 1, 'wqwqw', '<p>qwqwqwqwqwqw</p>', NULL, 'شروع-سال-تحصیلی-1401-1400', '/images/teams.png', '2022-04-19 13:05:10', '2022-04-19 13:05:10'),
(6, 'شروع سال تحصیلی 1401-1400', 1, 1, 1, 'wqwqw', '<p>qwqwqwqwqwqw</p>', 9, 'شروع-سال-تحصیلی-1401-1400-1', '/images/teams.png', '2022-04-19 13:06:47', '2022-04-19 13:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `name_fa`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'مدیر کل', 'web', '2021-07-23 08:14:12', '2021-07-23 08:22:38'),
(2, 'expert', 'کارشناس فروش', 'web', '2021-07-23 08:24:33', '2021-07-23 08:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullcontent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `comment` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `noti` int(11) DEFAULT 0,
  `sardabir` int(11) DEFAULT 0,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `user_id`, `content`, `fullcontent`, `pic`, `active`, `comment`, `created_at`, `updated_at`, `noti`, `sardabir`, `type`, `video`) VALUES
(12, 'خانه هوشمند', 'خانه-هوشمند', 1, NULL, '<p dir=\"rtl\">توضیحات کلمنل</p>', '/front/assets/images/portfolio/portfolio-03.jpg', 1, NULL, '2022-04-19 13:09:08', '2022-04-19 13:09:08', 0, 0, NULL, NULL),
(13, 'برق هوشمند', 'برق-هوشمند', 1, NULL, '<p>برق هوشمند</p>', '/front/assets/images/portfolio/portfolio-02.jpg', 1, NULL, '2022-04-19 13:17:57', '2022-04-19 13:18:38', 0, 0, NULL, NULL),
(14, 'ویلا هوشمند', 'ویلا-هوشمند', 1, NULL, '<p>ویلا هوشمند</p>', '/front/assets/images/portfolio/portfolio-05.jpg', 1, NULL, '2022-04-19 13:20:28', '2022-04-19 13:20:28', 0, 0, NULL, NULL),
(15, 'زمین هوشمند', 'زمین-هوشمند', 1, NULL, '<p>زمین هوشمند</p>', '/front/assets/images/portfolio/portfolio-06.jpg', 1, NULL, '2022-04-19 13:21:01', '2022-04-19 13:21:01', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE `slideshows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tozih` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`id`, `name`, `link`, `pic`, `pic2`, `pic3`, `tozih`, `active`, `created_at`, `updated_at`) VALUES
(15, 'تست', NULL, '/images/nody-عکس-بک-گراند-طبیعت-زیبا-1634955266.jpg', '/images/روتور.JPG', NULL, NULL, 1, '2021-10-25 23:03:47', '2022-04-30 14:49:48'),
(16, 'تست2', NULL, '/images/عکس-آرامش-بخش-بک-گراند-طبیعت-فصل-بهار.jpg', NULL, NULL, NULL, 1, '2022-04-30 14:50:47', '2022-04-30 14:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'agent',
  `expert_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `theme` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `mobile`, `status`, `type`, `expert_id`, `parent`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `theme`) VALUES
(1, 'علیرضا', 'شکفته', '09128538521', 1, 'admin', 'c492a1df-b1e4-4d1f-9c37-b3f7ef3e847e', NULL, 'niyayesh_vakilipour@yahoo.com', NULL, '$2y$10$AqVx/LXl7SKXHNCJubOOhuO0XrS6cFkjHIeTozybrbAD3W/8oaY0e', '', '', 'bce8XBnCKs61f4M6TV1P1FDU6eoq2S8uZYTXTxR9A3Pd6vkklZQdlXD599Va', '2021-07-23 08:28:31', '2021-10-13 11:46:04', 'dark-theme');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`category_id`,`post_id`),
  ADD KEY `category_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`category_id`,`product_id`),
  ADD KEY `category_post_post_id_foreign` (`product_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `main_pages`
--
ALTER TABLE `main_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_admins`
--
ALTER TABLE `menu_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_pages`
--
ALTER TABLE `main_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `menu_admins`
--
ALTER TABLE `menu_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
