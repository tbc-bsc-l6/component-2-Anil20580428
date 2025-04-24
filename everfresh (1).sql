-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 08:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `everfresh`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts_2`
--

CREATE TABLE `abouts_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts_2`
--

INSERT INTO `abouts_2` (`id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'success', 'successfully', NULL, '2024-12-16 01:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `awesome_services`
--

CREATE TABLE `awesome_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awesome_services`
--

INSERT INTO `awesome_services` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'testing', 'again success', 0, '2024-12-15 04:54:11', '2024-12-15 06:02:54'),
(3, 'testing1', 'again', 0, '2024-12-15 04:55:23', '2024-12-15 04:57:54'),
(5, 'testing', 'hfggffg', 1, '2024-12-16 04:03:21', '2024-12-16 04:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `awesome_service_titles`
--

CREATE TABLE `awesome_service_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awesome_service_titles`
--

INSERT INTO `awesome_service_titles` (`id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Our Services', 'success', NULL, '2024-12-16 05:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `blog_authors`
--

CREATE TABLE `blog_authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_authors`
--

INSERT INTO `blog_authors` (`id`, `profile`, `title1`, `title2`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'profiles/BBYG3coDd6KjanBBvUZQnm2SfsZ3np27gNgsgRPk.png', 'hhhsh', 'dhwudh', 'sjhuhi', 1, NULL, '2024-12-17 02:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `cname`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 'carpet', '12', 0, '2024-12-17 04:11:18', '2024-12-17 04:12:04'),
(2, 'Commercial Cleaning', '13', 1, '2024-12-17 04:16:03', '2024-12-17 04:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `blog_latest_posts`
--

CREATE TABLE `blog_latest_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_latest_posts`
--

INSERT INTO `blog_latest_posts` (`id`, `image`, `description`, `date`, `status`, `created_at`, `updated_at`) VALUES
(2, 'posts/images/fy73QJtcQW9WvyoICcW8ArAjZeUKTSoJc0dgcQiG.png', 'successfully', '2024-12-17', 0, '2024-12-17 03:44:23', '2024-12-17 03:50:42'),
(3, 'posts/images/bl4PLQz0ns3bB7Kav4zHtyIDI5XQho2FM461w6N0.png', 'somting', '2024-12-17', 1, '2024-12-17 03:51:58', '2024-12-17 03:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `bog_adds`
--

CREATE TABLE `bog_adds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description1` longtext NOT NULL,
  `description2` varchar(255) NOT NULL,
  `description3` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bog_adds`
--

INSERT INTO `bog_adds` (`id`, `image`, `date`, `profile`, `heading`, `description1`, `description2`, `description3`, `status`, `created_at`, `updated_at`) VALUES
(3, 'storage/blog_images/1734430168_image_h21.jpg', '2024-12-17', 'storage/blog_images/1734430168_profile_bm1.jpg', 'sasasw', 'dafad cd dc', 'loreamloreamloreamloreamloreamloreamloream', 'loreamloreamloreamloreamloreamloreamloream', 1, '2024-12-17 04:24:28', '2024-12-17 04:24:28'),
(8, 'storage/blog_images/1734504641_image_h21.jpg', '2024-12-28', 'storage/blog_images/1734504641_profile_h21.jpg', 'ssssss', '<p>With over a decade of experience, Via Logistics Global has taken a unique approach to the shipping industry by prioritizing personalized service over one-size-fits-all solutions. From urgent documents to vacation luggage, they ensure every shipment gets the care it needs.</p>\r\n\r\n<p>Serving clients who value time and convenience, Via Logistics Global eliminates the stress of shipping by delivering items precisely when and where they are needed.</p>\r\n\r\n<h3>The <strong>Objectives</strong></h3>\r\n\r\n<p>Via Logistics Global wanted to:</p>\r\n\r\n<ul>\r\n	<li>Create a user-friendly &amp; professional website for service request, shipment tracking, customer support, and general information.</li>\r\n	<li>Develop a dedicated app to streamline logistics and improve customer experience.</li>\r\n	<li>Boost visibility and customer engagement through strategic digital marketing.</li>\r\n	<li>Establish themselves as a leader in personalized logistics solutions.</li>\r\n</ul>\r\n\r\n<h3><em>The Challenge</em></h3>\r\n\r\n<p><s>The logistics industry is known for its impersonal, number-driven approach who wants to push as many deliveries as possible in the shortest time. To show that Via Logistics Global goes against this norm, it faced significant online challenges:</s></p>\r\n\r\n<ul>\r\n	<li>No mobile or web application to manage and track all orders, drivers, customers, and employees.</li>\r\n	<li>No mobile app to complement their services and enhance customer convenience.</li>\r\n	<li>Outdated website lacking modern features and intuitive navigation.</li>\r\n	<li>No branding and limited digital presence.</li>\r\n	<li>Difficulty in reflecting their customer-centric philosophy and communicating their personalized service model online.</li>\r\n	<li>Attracting clients who value customized shipping solutions over cheap, unsafe, unreliable services.</li>\r\n</ul>\r\n\r\n<h3>Our Solution</h3>\r\n\r\n<p>Mega Web Link addressed the challenges faced by Via Logistics Global with an approach that focused on practicality, user experience, and strategic branding.</p>', 'ssssss', 'ssssss', 1, '2024-12-18 01:05:41', '2024-12-18 01:05:41');

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
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Trusted By 1', 'The helpless the powerless in a of crimals who operate above the law texas tea here is the story of a man named Brady11', NULL, '2024-12-16 23:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `client_brands`
--

CREATE TABLE `client_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_brands`
--

INSERT INTO `client_brands` (`id`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(2, '/storage/logo/1734412107_trust1.png', 1, '2024-12-16 23:23:27', '2024-12-16 23:40:27'),
(3, '/storage/logo/1734412188_trust3.png', 1, '2024-12-16 23:24:48', '2024-12-16 23:24:48'),
(5, '/storage/logo/1734412613_trust1.png', 1, '2024-12-16 23:31:53', '2024-12-16 23:31:53'),
(6, '/storage/logo/1734412707_trust2.png', 1, '2024-12-16 23:33:27', '2024-12-16 23:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `clint_service_updates`
--

CREATE TABLE `clint_service_updates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shine` varchar(255) NOT NULL,
  `happy` varchar(255) NOT NULL,
  `employee` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clint_service_updates`
--

INSERT INTO `clint_service_updates` (`id`, `shine`, `happy`, `employee`, `branch`, `status`, `created_at`, `updated_at`) VALUES
(1, '12', '11', '21', '31', 1, NULL, '2024-12-16 05:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'show thing', NULL, NULL);

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
-- Table structure for table `footer_short_descs`
--

CREATE TABLE `footer_short_descs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_short_descs`
--

INSERT INTO `footer_short_descs` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'The story of a man named Brady who was busy with three boys of his own.1221', NULL, '2024-12-16 05:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `f_a_qadd_lists`
--

CREATE TABLE `f_a_qadd_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_qadd_lists`
--

INSERT INTO `f_a_qadd_lists` (`id`, `heading`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Opening Hoursqq', 'kathmandu Nepal,44007 mitrapark', 1, '2024-12-12 04:20:44', '2024-12-12 04:22:05'),
(3, 'This is the question?', 'This is the question? This is the question? This is the question? This is the question?', 1, '2024-12-15 05:59:21', '2024-12-15 05:59:21'),
(4, 'We are Pleasure to Clean Your Home success', 'jkjsugva', 1, '2024-12-15 06:35:35', '2024-12-15 06:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(600) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'The helpless the powerless in a world of criminals who operate above\r\nthe law texas tea here is the story of a man named Brady suucess', 1, NULL, '2024-12-12 03:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `homeaboutleftitems`
--

CREATE TABLE `homeaboutleftitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(600) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homeaboutleftitems`
--

INSERT INTO `homeaboutleftitems` (`id`, `title`, `description`, `logo`, `created_at`, `updated_at`) VALUES
(2, 'what we do', 'what ye wnrk', '/storage/logo/1733895314_2 (1).jpg', '2024-12-10 23:50:14', '2024-12-10 23:50:14'),
(3, 'testing11', 'again testing', '/storage/logo/1733895370_3.jpg', '2024-12-10 23:51:10', '2024-12-11 00:00:14'),
(4, 'testing', 'ssss', '/storage/logo/1734077753_trust3.png', '2024-12-13 02:30:54', '2024-12-13 02:30:54'),
(5, 'testing', 'sssss', '/storage/logo/1734077787_favicon.png', '2024-12-13 02:31:27', '2024-12-13 02:31:27'),
(6, 'testing111', 'swaee', '/storage/logo/1734078250_2.jpg', '2024-12-13 02:39:10', '2024-12-13 02:39:10'),
(7, 'qwe', 'qwe', '/storage/logo/1734262656_2.jpg', '2024-12-15 05:52:36', '2024-12-15 05:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `homeabouts`
--

CREATE TABLE `homeabouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(600) NOT NULL,
  `description` varchar(600) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homeabouts`
--

INSERT INTO `homeabouts` (`id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'to EVERFRESH. we have over 15 Years of Experience success', 'The helpless the powerless in a world of criminals who operate above the law texas tea here is the story of a man named Brady who was busy with three boys they call him Flipper Flipper faster than lightning.', NULL, '2024-12-17 21:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `homesliders`
--

CREATE TABLE `homesliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sliderimage` varchar(255) NOT NULL,
  `heading1` varchar(255) NOT NULL,
  `heading2` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homesliders`
--

INSERT INTO `homesliders` (`id`, `sliderimage`, `heading1`, `heading2`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '/storage/sliderimage/1733744334_1.jpg', 'Best Cleaner', 'A Symphony of Comfort & Convenience.', 'kathmandu Nepal,44007 mitrapark bbb', 1, '2024-12-09 05:53:54', '2024-12-16 03:39:18'),
(3, '/storage/sliderimage/1733744350_3.jpg', 'my update testing was successfull', 'A Symphony of Comfort & Convenience.', 'kathmandu Nepal,44007 mitrapark', 1, '2024-12-09 05:54:10', '2024-12-09 06:28:01'),
(4, '/storage/sliderimage/1734262426_2.jpg', 'new', 'asd', 'qew', 1, '2024-12-15 05:48:47', '2024-12-15 05:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `hometops`
--

CREATE TABLE `hometops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hometops`
--

INSERT INTO `hometops` (`id`, `logo`, `number`, `location`, `created_at`, `updated_at`) VALUES
(1, 'logo/Djd1mZKem4M4VN8KijUjDjXoT4QQsds2UBPiHMc3.png', '9801543453', '25/2 Dublin, Ireland', NULL, '2024-12-16 03:40:43');

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
-- Table structure for table `meet_our_teams`
--

CREATE TABLE `meet_our_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(600) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meet_our_teams`
--

INSERT INTO `meet_our_teams` (`id`, `heading`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Meet Our Team', 'The helpless the powerless in a world of criminals who operate above the law texas tea here is the story of\r\na man named Brady who was busy with three boys they call him Flipper Flipper faster than lightning.', 1, NULL, '2024-12-15 05:56:34');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_09_063558_create_hometops_table', 2),
(6, '2024_12_09_092603_create_homesliders_table', 3),
(7, '2024_12_10_060456_create_sliderlefts_table', 4),
(8, '2024_12_10_060655_create_sliderrights_table', 4),
(10, '2024_12_10_064946_create_homeabouts_table', 5),
(11, '2024_12_10_113712_create_homeaboutleftitems_table', 6),
(12, '2024_12_11_054912_create_our_projects_table', 7),
(14, '2024_12_11_063238_create_our_project_floorings_table', 8),
(15, '2024_12_11_095724_create_our_banners_table', 9),
(16, '2024_12_11_104634_create_our_banner_footers_table', 10),
(17, '2024_12_11_105953_create_our_banner_imagecenters_table', 11),
(18, '2024_12_12_053428_create_meet_our_teams_table', 12),
(19, '2024_12_12_060544_create_team_member_table', 13),
(20, '2024_12_12_072329_create_our_best_plans_table', 14),
(21, '2024_12_12_075725_create_our_plan_toures_table', 15),
(22, '2024_12_12_092025_create_f_a_q_s_table', 16),
(23, '2024_12_12_095732_create_f_a_qadd_lists_table', 17),
(24, '2024_12_15_065151_create_user_contacts_table', 18),
(29, '2024_12_15_065833_create_contact_infos_table', 19),
(30, '2024_12_15_075153_create_service_books_table', 19),
(31, '2024_12_15_095318_create_awesome_services_table', 20),
(33, '2024_12_15_105838_create_social_media_table', 21),
(34, '2024_12_16_050910_create_awesome_service_titles_table', 22),
(35, '2024_12_16_071553_create_abouts_2_table', 23),
(36, '2024_12_16_100405_create_why_chooose_us_table', 24),
(37, '2024_12_16_104022_create_clint_service_updates_table', 25),
(38, '2024_12_16_110338_create_footer_short_descs_table', 26),
(39, '2024_12_16_114838_create_clients_table', 27),
(40, '2024_12_17_043907_create_client_brands_table', 28),
(41, '2024_12_17_060521_create_bog_adds_table', 29),
(42, '2024_12_17_072603_create_blog_authors_table', 30),
(43, '2024_12_17_075854_create_blog_latest_posts_table', 31),
(44, '2024_12_17_093925_create_blog_categories_table', 32),
(45, '2024_12_17_110227_create_text_widgets_table', 33);

-- --------------------------------------------------------

--
-- Table structure for table `our_banners`
--

CREATE TABLE `our_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_banners`
--

INSERT INTO `our_banners` (`id`, `logo`, `heading`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'banners/k5mH5CGOg0zR6tRWQoDWME7QbNGRprYG5bRHLtEf.png', 'Call to action1', 'success', 1, NULL, '2024-12-15 23:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `our_banner_footers`
--

CREATE TABLE `our_banner_footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` varchar(600) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_banner_footers`
--

INSERT INTO `our_banner_footers` (`id`, `logo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'banners/9LGrU9PZbxTMVouYUef3I0I4Fr0j5A4jMusOvTju.png', 'The law texas tea here is the story of a man named Brady who was busy with three boys of his own believe the helpless the powerless in a world of criminals who operate above the law texas tea here is the story of a man named Brady who was busy with three boys they call him Flipper Flipper faster than The helpless the in a world of criminals', 1, NULL, '2024-12-16 03:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `our_banner_imagecenters`
--

CREATE TABLE `our_banner_imagecenters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_banner_imagecenters`
--

INSERT INTO `our_banner_imagecenters` (`id`, `logo`, `description`, `name`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'banners/mu2yOjhHtFHyke9YNwChmmpzGpU2XdgVzhkdDjPu.jpg', 'hello', 'joie', 'Owner', 0, '2024-12-11 05:56:52', '2024-12-16 02:09:43'),
(2, 'logo/uMmWwAhVrupt9e1YFz35qq4P9Tn4AvgqXBdheWhw.jpg', 'kathmandu Nepal,44007 mitrapark', 'mean gences', 'manager', 1, '2024-12-13 02:45:24', '2024-12-13 02:45:24'),
(3, 'logo/osMYZtY6q9yzWOSn3LW3O13KCVsjRaW3c2IKAKB1.jpg', 'The helpless the powerless in a world of criminals who operate above the law texas tea here is tfaster than lightning.', 'mean', 'Owner', 0, '2024-12-15 23:17:59', '2024-12-16 02:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `our_best_plans`
--

CREATE TABLE `our_best_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(600) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_best_plans`
--

INSERT INTO `our_best_plans` (`id`, `heading`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Our Best Plans For You', 'The helpless the powerless in a world of criminals who operate above the law texas tea here is the story of\r\na man named Brady who was busy with three boys they call him Flipper Flipper faster than lightning.', 1, NULL, '2024-12-15 05:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `our_plan_toures`
--

CREATE TABLE `our_plan_toures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(255) NOT NULL,
  `planType` varchar(255) NOT NULL,
  `feature` varchar(255) DEFAULT NULL,
  `cleaning` varchar(255) NOT NULL,
  `moving` varchar(255) NOT NULL,
  `calling` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `suggestion` varchar(255) NOT NULL,
  `enhancedsecurity` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_plan_toures`
--

INSERT INTO `our_plan_toures` (`id`, `price`, `planType`, `feature`, `cleaning`, `moving`, `calling`, `work`, `suggestion`, `enhancedsecurity`, `status`, `created_at`, `updated_at`) VALUES
(2, '88', 'swq', NULL, 'q sadd', 'q', 'qcsa ads', 'cecw', 'succcess', 'enhancedsecurity', 1, '2024-12-12 02:34:14', '2024-12-15 05:57:51'),
(3, '87', 'swqq', NULL, 'qcq sadd', 'qdqwc', 'qcsa ads', 'cecwcq', 'ccqc q', 'enhancedsecurityq', 1, '2024-12-12 05:20:12', '2024-12-13 03:47:41'),
(4, '44', 'sw', NULL, 'q sadd', 'q', 'qcsa ads', 'cecw', 'c q', 'enhancedsecurityq', 1, '2024-12-12 05:20:18', '2024-12-12 05:20:18'),
(5, '40', 'sw', NULL, 'q sadd', 'q', 'qcsa ads', 'cecw', 'c q', 'enhancedsecurityq', 1, '2024-12-12 05:20:25', '2024-12-13 03:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `our_projects`
--

CREATE TABLE `our_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_projects`
--

INSERT INTO `our_projects` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Our Projec1ts', 'The helpless the powerless in a world of criminals who operate above the law Texas tea here is the story of a man named Brady who was busy with three boys they call him Flipper Flipper faster than lightning.', 1, NULL, '2024-12-11 00:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `our_project_floorings`
--

CREATE TABLE `our_project_floorings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projectType` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_project_floorings`
--

INSERT INTO `our_project_floorings` (`id`, `projectType`, `title`, `name`, `description`, `date`, `author`, `category`, `website`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'exterior', 'testing', 'success', 'vvsvsd', '2024-12-11', 'huhiu', 'iuhiui', 'https://nausadrain.com.np', 'project/MxiiAfl2ybZgFMccTVTtyq0IwkKZczQOODmuiqN2.jpg', 1, '2024-12-11 01:55:13', '2024-12-15 03:55:33'),
(2, 'commercial', 'testing', 'kjk', 'lorem ipson lorem ipson lorem ipsonlorem ipsonlorem ipson lorem ipsonlorem ipsonlorem ipsonlorem ipsonlorem ipsonlorem ipson lorem ipson', '2024-12-11', 'huhiu', 'iuhiui', 'https://nausad.com.np', 'project/BRqACAPiEcOVxgRXEtP5wAhAQ4k4qDOp28AP9M5L.jpg', 1, '2024-12-11 02:16:13', '2024-12-11 06:11:37'),
(3, 'streaming', 'testing', 'mean gences', 'kathmandu Nepal,44007 mitrapark', '2024-12-13', 'huhiu', 'iuhiui', 'https://nausad.com.np', 'project/EfcvLRyXtdvQd4aD6VDzLjIqoT4bz8sJAelUO6Cn.jpg', 1, '2024-12-13 00:58:48', '2024-12-13 00:58:48'),
(4, 'other', 'jkjkkj', 'hjb', 'shome thing', '2024-12-13', 'authre', 'testing', 'https://nausad11.com.np', 'project/qG8XiSfSQEkQHZLNNHYO90QmeNphBpENzMJQlxAE.jpg', 1, '2024-12-13 00:59:58', '2024-12-13 01:23:13');

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
-- Table structure for table `service_books`
--

CREATE TABLE `service_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `choose` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_books`
--

INSERT INTO `service_books` (`id`, `name`, `email`, `phone`, `postcode`, `address`, `city`, `choose`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(2, 'hello ram', 'msnausacd68@gmail.com', '9819931015', '44600', 'Kathmandu Guest House Rd', 'Kathmandu', 'audi', 'cccas', 1, '2024-12-15 03:10:20', '2024-12-15 03:10:20'),
(3, 'hello ram', 'msnausacd68@gmail.com', '9819931015', '44600', 'Kathmandu Guest House Rd', 'Kathmandu', 'mercedes', 'bdbdrgr', 0, '2024-12-15 03:12:08', '2024-12-15 06:42:35');

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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fQACCm110GL6IWwJcDkHKMmXC3uKHNQguPdddALM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS2sxM096WDF1MlloN0duTTdrT28ybFE2akxEa1JiY0JMS3VZN1NQUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ldmVyZnJlc2gvYmxvZy9kZXRhaWxzLzgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1734504893),
('gLOjcnZ1QrW5vivPxrEczTgZ8oHyQOPxbZSH9VTd', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNEx4UEVINXBINkNEcWQwdlc0d1hrUlZyOWF3QkhxM3dmVWQ1Vm5pUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9ibG9nL2VkaXQvOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1734506373);

-- --------------------------------------------------------

--
-- Table structure for table `sliderlefts`
--

CREATE TABLE `sliderlefts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `day1` varchar(255) NOT NULL,
  `day2` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliderlefts`
--

INSERT INTO `sliderlefts` (`id`, `heading`, `day1`, `day2`, `title`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Opening Hours', 'Monday - Friday: 8 AM to 9 PM', 'Saturday - Sunday: 9.30 AM to 6.30 PM', 'get free Estimate', '+977 9819931015', NULL, '2024-12-16 03:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `sliderrights`
--

CREATE TABLE `sliderrights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliderrights`
--

INSERT INTO `sliderrights` (`id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'We are Pleasure to Clean Your Home success', 'The average homeowner spends 12-28 hours a week on housework.We can help you save up to 26 days of the year.', NULL, '2024-12-16 03:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `platform` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `platform`, `link`, `status`, `created_at`, `updated_at`) VALUES
(2, 'linkedIn', 'https://www.facebook.com/mdnaushad.678', 1, '2024-12-15 05:24:14', '2024-12-15 22:56:48'),
(3, 'facebook', 'https://www.facebook.com/mdnaushad.678', 1, '2024-12-15 22:57:03', '2024-12-15 22:57:03'),
(4, 'instagram', 'https://www.facebook.com/mdnaushad.678', 1, '2024-12-15 22:57:18', '2024-12-15 22:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE `team_member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_member`
--

INSERT INTO `team_member` (`id`, `image`, `name`, `position`, `status`, `created_at`, `updated_at`) VALUES
(3, '/storage/image/1733986890.ser.jpg', 'Jon11', 'Owner', 1, '2024-12-12 01:16:30', '2024-12-12 01:18:51'),
(4, '/storage/image/1733987044.ser2.jpg', 'mean gences', 'qqq', 0, '2024-12-12 01:19:04', '2024-12-12 01:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `text_widgets`
--

CREATE TABLE `text_widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `text_widgets`
--

INSERT INTO `text_widgets` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'text widget1', 'Than he so join us here each week my friends you are sure to get a smile from seven stranded castaways week my friends.', NULL, '2024-12-17 05:46:09');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john.doe@example.com', NULL, '$2y$12$sdpGhvtTexYm5dgsNRFc2uElMXmoKgGAvGvKa6xba539cGok2Po0e', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_contacts`
--

INSERT INTO `user_contacts` (`id`, `firstName`, `lastName`, `email`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(2, 'hello', 'ram1', 'msnausad68@gmail.com', 'comment', 0, '2024-12-15 02:00:25', '2024-12-15 02:01:52'),
(3, 'bidhan', 'gautam', 'msnausad68@gmail.com', 'hello', 1, '2024-12-15 06:00:40', '2024-12-15 06:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `why_chooose_us`
--

CREATE TABLE `why_chooose_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_chooose_us`
--

INSERT INTO `why_chooose_us` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'The helpless the powerless in a world of criminals who operate above the law texas tea here is the story of a man named Brady who was busy with three boys they call him Flipper Flipper faster than lightning Believe it or not its just me black gold.', NULL, '2024-12-16 04:40:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts_2`
--
ALTER TABLE `abouts_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awesome_services`
--
ALTER TABLE `awesome_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awesome_service_titles`
--
ALTER TABLE `awesome_service_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_authors`
--
ALTER TABLE `blog_authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_latest_posts`
--
ALTER TABLE `blog_latest_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bog_adds`
--
ALTER TABLE `bog_adds`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_brands`
--
ALTER TABLE `client_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clint_service_updates`
--
ALTER TABLE `clint_service_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_short_descs`
--
ALTER TABLE `footer_short_descs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_qadd_lists`
--
ALTER TABLE `f_a_qadd_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeaboutleftitems`
--
ALTER TABLE `homeaboutleftitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeabouts`
--
ALTER TABLE `homeabouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesliders`
--
ALTER TABLE `homesliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hometops`
--
ALTER TABLE `hometops`
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
-- Indexes for table `meet_our_teams`
--
ALTER TABLE `meet_our_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_banners`
--
ALTER TABLE `our_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_banner_footers`
--
ALTER TABLE `our_banner_footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_banner_imagecenters`
--
ALTER TABLE `our_banner_imagecenters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_best_plans`
--
ALTER TABLE `our_best_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_plan_toures`
--
ALTER TABLE `our_plan_toures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_projects`
--
ALTER TABLE `our_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_project_floorings`
--
ALTER TABLE `our_project_floorings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `service_books`
--
ALTER TABLE `service_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliderlefts`
--
ALTER TABLE `sliderlefts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliderrights`
--
ALTER TABLE `sliderrights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_widgets`
--
ALTER TABLE `text_widgets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_chooose_us`
--
ALTER TABLE `why_chooose_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts_2`
--
ALTER TABLE `abouts_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awesome_services`
--
ALTER TABLE `awesome_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `awesome_service_titles`
--
ALTER TABLE `awesome_service_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_authors`
--
ALTER TABLE `blog_authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_latest_posts`
--
ALTER TABLE `blog_latest_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bog_adds`
--
ALTER TABLE `bog_adds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_brands`
--
ALTER TABLE `client_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clint_service_updates`
--
ALTER TABLE `clint_service_updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_short_descs`
--
ALTER TABLE `footer_short_descs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f_a_qadd_lists`
--
ALTER TABLE `f_a_qadd_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homeaboutleftitems`
--
ALTER TABLE `homeaboutleftitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `homeabouts`
--
ALTER TABLE `homeabouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homesliders`
--
ALTER TABLE `homesliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hometops`
--
ALTER TABLE `hometops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meet_our_teams`
--
ALTER TABLE `meet_our_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `our_banners`
--
ALTER TABLE `our_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_banner_footers`
--
ALTER TABLE `our_banner_footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_banner_imagecenters`
--
ALTER TABLE `our_banner_imagecenters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_best_plans`
--
ALTER TABLE `our_best_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_plan_toures`
--
ALTER TABLE `our_plan_toures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `our_projects`
--
ALTER TABLE `our_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_project_floorings`
--
ALTER TABLE `our_project_floorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_books`
--
ALTER TABLE `service_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliderlefts`
--
ALTER TABLE `sliderlefts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliderrights`
--
ALTER TABLE `sliderrights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team_member`
--
ALTER TABLE `team_member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `text_widgets`
--
ALTER TABLE `text_widgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `why_chooose_us`
--
ALTER TABLE `why_chooose_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
