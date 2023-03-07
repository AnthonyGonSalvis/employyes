-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 11:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `heading`, `description`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(1, '1669266868.jpeg', 'About Us', '<p>We are&nbsp;a growing IT organisation with the objective of imparting Quality and Value based Professional IT consultancy services toy contribute to the National, Economic and Social growth.</p><p><strong>Vision</strong><br>To provide quality &amp; value based IT Consultancy Solutions and requirement specific development solutions to clients.</p><p><strong>Mission</strong><br>The mission of developing and implementing quality solutions in the field of IT consultancy with Website Designing, Website Development, ERP Solutions Development, e-Commerce Portals Development, CMS Portals Development, Search Engine Optimization, Internet Marketing, Social Media Marketing, Mobile Apps Development etc.</p><p><strong>Quality Policy</strong><br>It will be our collective endeavour to develop competitive and quality IT consultancy solutions to clients with all their available requirements and meeting all the challenges.</p><p><strong>Core Values</strong><br>Accountability – Acknowledging and assuming responsibility for actions, products, decisions, and policies. It can be applied to both individual accountability on the part of employees and accountability of the company as a whole.</p><p>Balance – Taking a proactive stand to create and maintain a healthy work-life balance for employees.</p><p>Commitment – Committing to great product, service, and other initiatives that impact lives within and outside the organization.</p><p>Community – Contributing to society and demonstrating corporate social responsibility.</p><p>Diversity – Respecting the diversity and giving the best of composition. Establishing an employee equity program.</p><p>Empowerment – Encouraging employees to take initiative and give the best. Adopting an error-embracing environment to empower employees to lead and make decisions.</p><p>Innovation – Pursuing new creative ideas that have the potential to change the world.</p><p>Integrity – Acting with honesty and honor without compromising the truth</p><p>Ownership – Taking care of the company and&nbsp;clients as they were one’s own.</p><p>Safety – Ensuring the health and safety of employees and going beyond the legal requirements to provide an accident-free workplace.</p>', 'Read More', 'http://127.0.0.1:8000/indexhome', '2022-10-14 05:38:27', '2023-02-13 01:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `advice`
--

CREATE TABLE `advice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apis`
--

CREATE TABLE `apis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apis`
--

INSERT INTO `apis` (`id`, `name`, `email`, `password`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Rico Rolfson', 'qbeer@okon.biz', '2.273773', '9327 Abbott Estates\nFrancofort, TN 55003', NULL, NULL),
(2, 'Cassie Hessel Sr.', 'paucek.milton@toy.com', '26.076998', '295 Rolfson Mills\nKreigershire, UT 20943', NULL, NULL),
(4, 'Emelie Murazik', 'vleannon@daniel.net', '2122373.716467', '4962 Legros Estates\nPort Jonatan, TN 03415', NULL, NULL),
(5, 'Buddy Pfeffer', 'maymie24@gmail.com', '28097.603221', '61270 Vicenta Lakes Suite 116\nBeaushire, OH 71584', NULL, NULL),
(6, 'Diego Casper', 'antwon.ernser@bradtke.biz', '60.4232', '64848 Gabriel Tunnel\nSouth Hermannton, IL 81132-6777', NULL, NULL),
(7, 'Mrs. Jazmyn Armstrong', 'dkerluke@yahoo.com', '1.210358', '22751 Vincent Bypass\nEast Marina, IA 78429-0981', NULL, NULL),
(8, 'Deborah Hintz', 'kjohnson@gmail.com', '1529.952015', '28153 Kessler Plains\nSouth Skylar, MT 89497-0935', NULL, NULL),
(9, 'Nelle Baumbach', 'letitia91@stokes.com', '30494887.824706', '84385 Fred Courts Suite 366\nEast Evie, MT 17016-1104', NULL, NULL),
(10, 'Marilie Davis V', 'dietrich.nicolas@adams.net', '540543851.5017', '5142 Kris Court\nRhiannafort, KY 96690', NULL, NULL),
(11, 'priyam', 'besttech@tech.com', '1345.456678', '33 foot road, GhatipurNagar', '2022-10-06 04:16:06', '2022-10-06 04:35:04'),
(12, 'AK', 'besttech@tech.com', '1345.456678', '33 foot road, GhatipurNagar', '2022-10-06 06:24:57', '2022-10-06 06:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '1666082016.png', '2022-10-18 02:06:43', '2022-10-18 03:03:36'),
(3, '1666082073.png', '2022-10-18 02:06:53', '2022-10-18 03:04:33'),
(4, '1666082084.png', '2022-10-18 02:07:01', '2022-10-18 03:04:44'),
(5, '1666082095.png', '2022-10-18 02:07:10', '2022-10-18 03:04:55'),
(6, '1666082107.png', '2022-10-18 02:07:20', '2022-10-18 03:05:07'),
(7, '1666082119.png', '2022-10-18 02:58:50', '2022-10-18 03:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `icon`, `heading`, `text`, `created_at`, `updated_at`) VALUES
(1, 'bi bi-geo-alt', 'Address', 'grsedas', '2022-10-18 05:01:27', '2022-10-18 05:10:13'),
(2, 'bi bi-telephone', 'Call Us', '6754323435', '2022-10-18 05:21:32', '2022-10-18 05:21:32'),
(3, 'bi bi-envelope', 'Email Us', 'Info@gmail.com', '2022-10-18 05:24:21', '2022-10-18 05:24:21'),
(4, 'bi bi-clock', 'Open Hours', 'Monday-Friday', '2022-10-18 05:25:41', '2022-10-18 05:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `icon`, `number`, `text`, `created_at`, `updated_at`) VALUES
(2, 'bi bi-journal-richtext', '2785', 'Projects', '2022-10-17 05:51:10', '2022-10-17 05:53:35'),
(3, 'bi bi-headset', '4523', 'Hours of Support', '2022-10-17 05:51:37', '2022-10-17 05:53:59'),
(4, 'bi bi-people', '3765', 'Hard Workers', '2022-10-17 05:52:03', '2022-10-17 05:54:14'),
(5, 'gbfx', '5646', 'Projects', '2022-10-17 05:52:14', '2022-10-17 05:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `dob`, `image`, `mobile`, `email`, `password`, `address`, `education`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Priyam', 'Tech', '2022-10-10', '1669282950.jpg', '8219747170', 'tech@user.com', 'priyam123', 'vpobehdala', 'Select Class', 'Select Designation', '2022-10-12 03:18:34', '2022-11-24 04:12:30'),
(2, 'Nikita', 'Dhiman', '2022-10-18', '1665572533.jpg', '7654323543', 'Nikita@tegfc.com', 'gsfdagsrf', 'Chandpur', 'Select Class', 'Select Designation', '2022-10-12 03:40:02', '2023-02-09 00:47:54'),
(3, 'Ayesha', 'Dhiman', '2022-10-13', '1665572592.jpg', '4656473583', 'ayesha@gmail.com', 'ayesha123', 'Una', 'designation3', 'designation2', '2022-10-12 05:33:12', '2022-10-12 05:33:12'),
(4, 'user', 'test', '2022-10-03', '1665572739.jpg', '7267462748', 'user@test.com', 'user123', 'user', 'designation2', 'designation', '2022-10-12 05:35:39', '2022-10-12 05:35:39');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(2, 'Hello', 'Here it is', '2023-02-09 04:58:49', '2023-02-09 04:58:49'),
(3, 'Test', 'testing here', '2023-02-09 05:07:39', '2023-02-17 03:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'hftgd', 'vdfs@fghdc.com', 'jhytrr', 'juyhtgrde', '2022-10-18 05:47:23', '2022-10-18 05:47:23'),
(2, 'hftgd', 'vdfs@fghdc.com', 'jhytrr', 'juyhtgrde', '2022-10-18 05:47:33', '2022-10-18 05:47:33'),
(3, 'Priyam', 'priyam@gmail.com', 'test', 'user testing', '2022-10-18 05:59:13', '2022-10-18 05:59:13'),
(4, 'Priyam', 'priyam@gmail.com', 'test', 'user testing', '2022-10-18 05:59:31', '2022-10-18 05:59:31'),
(22, 'Nnhbgvfc', 'gbfvc@gffds.com', 'ujhytgrf', 'lkujyhgf', '2023-02-20 01:22:02', '2023-02-20 01:22:02');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_06_084949_create_apis_table', 1),
(6, '2022_10_10_044558_create_employees_table', 2),
(7, '2022_10_12_082209_create_employees_table', 3),
(8, '2022_10_14_095255_create_abouts_table', 4),
(9, '2022_10_14_115240_create_advice_table', 5),
(10, '2022_10_15_051953_create_sliders_table', 5),
(11, '2022_10_15_065023_create_services_table', 6),
(12, '2022_10_17_042137_create_testinomials_table', 7),
(13, '2022_10_17_055853_create_portfolios_table', 8),
(14, '2022_10_17_081757_create_counters_table', 9),
(15, '2022_10_17_113337_create_values_table', 10),
(16, '2022_10_18_054917_create_clients_table', 11),
(17, '2022_10_18_084121_create_contacts_table', 12),
(18, '2022_10_18_105706_create_messages_table', 13),
(19, '2023_02_09_045643_create_teams_table', 14),
(20, '2023_02_09_062942_create_faqs_table', 15);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `image`, `name`, `text`, `created_at`, `updated_at`) VALUES
(1, '1666002407.jpg', 'App', 'fgvh', '2022-10-17 01:09:52', '2022-10-17 04:56:47'),
(2, '1666002421.jpg', 'Web', 'Apps', '2022-10-17 04:39:13', '2022-10-17 04:57:01'),
(3, '1666002470.jpg', 'Widgets', 'hello', '2022-10-17 04:46:07', '2023-02-17 03:30:58'),
(4, '1666002242.jpg', 'App', 'image', '2022-10-17 04:53:45', '2022-10-17 04:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `heading`, `description`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(3, 'ri-discuss-line icon', 'i8u7ytrt', '<p>Our mission is to “SIMPLIFY BUSINESS SOLUTION DEVELOPMENT”. We work deeply with our clients to convert their business needs into efficient products.</p><p>We provide turnkey Web Solutions to various kinds of businesses operating worldwide. Our Websites are unique and eye-catching, designed by using latest web designing tools which empowers our&nbsp;clients to represent themselves online confidently in the global arena to generate more revenue.</p><p>Our web designers can change your ideas into reality by using their creative talent and knowledge of website standards and practices.&nbsp;We focuse on all the aspects of managing a web project involving Web Design and Development life cycle. The development cycle follows ISO Standards.</p><p>Our major areas of expertise include:</p><ul><li>Website Designing</li><li>Website Development</li><li>CMS Portal Development</li><li>Responsive Website</li><li>Micro Website</li><li>Parallax Scrolling Website</li><li>e-Commerce Portal</li><li>Landing Page Designing</li><li>Logo Designing</li><li>ERP Solution Development</li><li>Mobile Apps Development</li><li>Customized Application Development</li><li>Internet Marketing</li><li>Online Advertisement</li><li>Search Engine Optimization</li><li>Social Media Marketing</li><li>Domain Registration and Web Hosting</li></ul>', 'Read more', 'ujyhgtrfd', '2022-10-15 03:44:00', '2023-02-09 05:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `images`, `created_at`, `updated_at`) VALUES
(2, '1669265863.jpg', '2022-10-15 01:01:07', '2022-11-23 23:27:43'),
(3, '1669263936.jpg', '2022-10-15 01:01:16', '2022-11-23 22:55:36'),
(4, '1669263953.png', '2022-10-15 01:04:35', '2022-11-23 22:55:53'),
(5, '1665816182.jpg', '2022-10-15 01:13:02', '2022-10-15 01:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `testinomials`
--

CREATE TABLE `testinomials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testinomials`
--

INSERT INTO `testinomials` (`id`, `text`, `image`, `name`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa', '1665983875.jpg', 'Priyam', 'Developer', '2022-10-16 23:47:55', '2022-10-17 00:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'testuser@testing.com', 1, NULL, '$2y$10$UmSUlwPB4RZVRQwu6lJ7Hu5iA3R4AVZN8aWr1daUaV7Z3.I9U6OBG', NULL, '2022-10-06 05:42:32', '2022-10-06 05:42:32'),
(2, 'Ashwani', 'ashwani0785@gmail.com', 1, NULL, '$2y$10$GCslW4ayCUJHi038maaeG.jfhUKnJQPKJpvv29p4/emsHp8MX4pAq', 'rYAXARvDzpPNmAKvDCOH1mBGQlXdi7pvMjYWgxwdfv3hKabu54mY11B3VF48', '2022-10-06 06:29:15', '2022-10-06 06:29:15'),
(3, 'Priyam', 'priyam@gmail.com', 1, NULL, '$2y$10$.3XrlpHMeiZqr5.6xWFRzOnwiHBhapJjp3JYgxBeGfoayMw5iYZ..', NULL, '2023-01-17 05:36:35', '2023-01-17 05:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `values`
--

INSERT INTO `values` (`id`, `image`, `heading`, `content`, `created_at`, `updated_at`) VALUES
(1, '1666068452.jpg', 'Our Mission', 'Progressive', '2022-10-17 23:17:32', '2022-10-17 23:29:48'),
(2, '1666068493.jpg', 'Hello', 'Testing', '2022-10-17 23:18:13', '2022-10-17 23:18:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advice`
--
ALTER TABLE `advice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apis`
--
ALTER TABLE `apis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testinomials`
--
ALTER TABLE `testinomials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advice`
--
ALTER TABLE `advice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apis`
--
ALTER TABLE `apis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testinomials`
--
ALTER TABLE `testinomials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
