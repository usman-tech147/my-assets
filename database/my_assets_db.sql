-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 10:20 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_assets_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'usman',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'usmanarif.9219@gmail.com',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'abcd1234',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'usman', 'usmanarif.9219@gmail.com', NULL, '$2y$10$LLI40KxtabOiMy3f/zPJRO9Kp0B5iPb7QTg3GtHNHmgJsTLURfz5S', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Asp.net', '2021-11-27 14:13:40', '2021-11-27 14:13:40'),
(2, 'Laravel', '2021-11-27 14:13:48', '2021-11-27 14:13:48'),
(3, 'React', '2021-11-27 14:13:54', '2021-11-27 14:13:54'),
(4, 'Vue', '2021-11-27 14:14:01', '2021-11-27 14:14:01'),
(5, 'Flutter', '2021-11-27 14:14:06', '2021-11-27 14:14:06'),
(6, 'Node', '2021-11-27 14:14:14', '2021-11-27 14:14:14'),
(7, 'Database', '2021-11-27 14:14:21', '2021-11-27 14:14:21'),
(8, 'Ios', '2021-11-27 14:14:27', '2021-11-27 14:14:27'),
(9, 'Android', '2021-11-27 14:14:34', '2021-11-27 14:14:34'),
(10, 'Html', '2021-11-27 14:14:40', '2021-11-27 14:14:40'),
(11, 'Css', '2021-11-27 14:15:53', '2021-11-27 14:15:53'),
(12, 'Javascript', '2021-11-27 14:16:00', '2021-11-27 14:16:00'),
(13, 'Jquery', '2021-11-27 14:16:06', '2021-11-27 14:16:06');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_topics`
--

CREATE TABLE `image_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `link_topics`
--

CREATE TABLE `link_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2021_11_20_101437_create_admins_table', 2),
(6, '2021_11_27_144228_create_categories_table', 3),
(7, '2021_11_27_145026_create_subcategories_table', 3),
(12, '2021_11_29_064014_create_topics_table', 4),
(13, '2021_11_29_070344_create_link_topics_table', 4),
(14, '2021_11_29_070417_create_step_topics_table', 4),
(15, '2021_11_29_070437_create_image_topics_table', 4);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `step_topics`
--

CREATE TABLE `step_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `code_snippet` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 2, 'Forms', '2021-11-27 15:18:55', '2021-11-27 15:18:55'),
(2, 2, 'Database', '2021-11-27 15:20:05', '2021-11-27 15:20:05'),
(3, 2, 'Regex', '2021-11-27 15:20:44', '2021-11-27 15:20:44'),
(4, 2, 'Packages', '2021-11-27 15:21:04', '2021-11-27 15:21:04'),
(5, 2, 'Api\'s', '2021-11-27 15:21:16', '2021-11-27 15:21:16'),
(6, 2, 'Pagination', '2021-11-27 15:21:59', '2021-11-27 15:21:59'),
(7, 2, 'Request', '2021-11-28 14:22:17', '2021-11-28 14:22:17'),
(8, 2, 'Mail', '2021-11-28 14:22:31', '2021-11-28 14:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `html` longtext COLLATE utf8mb4_unicode_ci,
  `css` longtext COLLATE utf8mb4_unicode_ci,
  `jquery` longtext COLLATE utf8mb4_unicode_ci,
  `model` longtext COLLATE utf8mb4_unicode_ci,
  `controller` longtext COLLATE utf8mb4_unicode_ci,
  `app` longtext COLLATE utf8mb4_unicode_ci,
  `config` longtext COLLATE utf8mb4_unicode_ci,
  `migrations` longtext COLLATE utf8mb4_unicode_ci,
  `factories` longtext COLLATE utf8mb4_unicode_ci,
  `seed` longtext COLLATE utf8mb4_unicode_ci,
  `backend_extra` longtext COLLATE utf8mb4_unicode_ci,
  `raw_sql` text COLLATE utf8mb4_unicode_ci,
  `eloquent` text COLLATE utf8mb4_unicode_ci,
  `query_builder` text COLLATE utf8mb4_unicode_ci,
  `view_status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `subcategory_id`, `title`, `description`, `html`, `css`, `jquery`, `model`, `controller`, `app`, `config`, `migrations`, `factories`, `seed`, `backend_extra`, `raw_sql`, `eloquent`, `query_builder`, `view_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'laravel', 'this is laravel code', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"utf-8\">\r\n    <title>CKEditor 5 - Classic editor</title>\r\n    <script src=\"https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js\"></script>\r\n</head>\r\n<body>\r\n    <h1>Classic editor</h1>\r\n    <form action=\"[URL]\" method=\"post\">\r\n        <textarea name=\"content\" id=\"editor\">\r\n            &lt;p&gt;This is some sample content.&lt;/p&gt;\r\n        </textarea>\r\n        <p><input type=\"submit\" value=\"Submit\"></p>\r\n    </form>\r\n    <script>\r\n        ClassicEditor\r\n            .create( document.querySelector( \'#editor\' ) )\r\n            .catch( error => {\r\n                console.error( error );\r\n            } );\r\n    </script>\r\n</body>\r\n</html>', 'p {\r\n  color: red;\r\n  text-align: center;\r\n},\r\np {\r\n  color: red;\r\n  text-align: center;\r\n}', 'const person = {\r\n  firstName: \"John\",\r\n  lastName: \"Doe\",\r\n  age: 50,\r\n  eyeColor: \"blue\"\r\n};', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', 0, '2021-11-30 15:55:43', '2021-11-30 15:55:43'),
(2, 1, 'laravel', 'this is laravel code', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"utf-8\">\r\n    <title>CKEditor 5 - Classic editor</title>\r\n    <script src=\"https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js\"></script>\r\n</head>\r\n<body>\r\n    <h1>Classic editor</h1>\r\n    <form action=\"[URL]\" method=\"post\">\r\n        <textarea name=\"content\" id=\"editor\">\r\n            &lt;p&gt;This is some sample content.&lt;/p&gt;\r\n        </textarea>\r\n        <p><input type=\"submit\" value=\"Submit\"></p>\r\n    </form>\r\n    <script>\r\n        ClassicEditor\r\n            .create( document.querySelector( \'#editor\' ) )\r\n            .catch( error => {\r\n                console.error( error );\r\n            } );\r\n    </script>\r\n</body>\r\n</html>', 'p {\r\n  color: red;\r\n  text-align: center;\r\n},\r\np {\r\n  color: red;\r\n  text-align: center;\r\n}', 'const person = {\r\n  firstName: \"John\",\r\n  lastName: \"Doe\",\r\n  age: 50,\r\n  eyeColor: \"blue\"\r\n};', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', 0, '2021-11-30 15:55:44', '2021-11-30 15:55:44'),
(3, 1, 'laravel 3', 'this is laravel 3 code', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"utf-8\">\r\n    <title>CKEditor 5 - Classic editor</title>\r\n    <script src=\"https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js\"></script>\r\n</head>\r\n<body>\r\n    <h1>Classic editor</h1>\r\n    <form action=\"[URL]\" method=\"post\">\r\n        <textarea name=\"content\" id=\"editor\">\r\n            &lt;p&gt;This is some sample content.&lt;/p&gt;\r\n        </textarea>\r\n        <p><input type=\"submit\" value=\"Submit\"></p>\r\n    </form>\r\n    <script>\r\n        ClassicEditor\r\n            .create( document.querySelector( \'#editor\' ) )\r\n            .catch( error => {\r\n                console.error( error );\r\n            } );\r\n    </script>\r\n</body>\r\n</html>', 'p {\r\n  color: red;\r\n  text-align: center;\r\n},\r\np {\r\n  color: red;\r\n  text-align: center;\r\n}', 'const person = {\r\n  firstName: \"John\",\r\n  lastName: \"Doe\",\r\n  age: 50,\r\n  eyeColor: \"blue\"\r\n};', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', 0, '2021-11-30 15:56:15', '2021-11-30 15:56:15'),
(4, 1, 'laravel 4', 'this is laravel 4 code', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"utf-8\">\r\n    <title>CKEditor 5 - Classic editor</title>\r\n    <script src=\"https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js\"></script>\r\n</head>\r\n<body>\r\n    <h1>Classic editor</h1>\r\n    <form action=\"[URL]\" method=\"post\">\r\n        <textarea name=\"content\" id=\"editor\">\r\n            &lt;p&gt;This is some sample content.&lt;/p&gt;\r\n        </textarea>\r\n        <p><input type=\"submit\" value=\"Submit\"></p>\r\n    </form>\r\n    <script>\r\n        ClassicEditor\r\n            .create( document.querySelector( \'#editor\' ) )\r\n            .catch( error => {\r\n                console.error( error );\r\n            } );\r\n    </script>\r\n</body>\r\n</html>', 'p {\r\n  color: red;\r\n  text-align: center;\r\n},\r\np {\r\n  color: red;\r\n  text-align: center;\r\n}', 'const person = {\r\n  firstName: \"John\",\r\n  lastName: \"Doe\",\r\n  age: 50,\r\n  eyeColor: \"blue\"\r\n};', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', 0, '2021-11-30 15:56:27', '2021-11-30 15:56:27'),
(5, 1, 'laravel 4', 'this is laravel 4 code.this is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 code', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"utf-8\">\r\n    <title>CKEditor 5 - Classic editor</title>\r\n    <script src=\"https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js\"></script>\r\n</head>\r\n<body>\r\n    <h1>Classic editor</h1>\r\n    <form action=\"[URL]\" method=\"post\">\r\n        <textarea name=\"content\" id=\"editor\">\r\n            &lt;p&gt;This is some sample content.&lt;/p&gt;\r\n        </textarea>\r\n        <p><input type=\"submit\" value=\"Submit\"></p>\r\n    </form>\r\n    <script>\r\n        ClassicEditor\r\n            .create( document.querySelector( \'#editor\' ) )\r\n            .catch( error => {\r\n                console.error( error );\r\n            } );\r\n    </script>\r\n</body>\r\n</html>', 'p {\r\n  color: red;\r\n  text-align: center;\r\n},\r\np {\r\n  color: red;\r\n  text-align: center;\r\n}', 'const person = {\r\n  firstName: \"John\",\r\n  lastName: \"Doe\",\r\n  age: 50,\r\n  eyeColor: \"blue\"\r\n};', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', 0, '2021-11-30 15:56:37', '2021-11-30 15:56:37'),
(6, 1, 'laravel 6', 'this is laravel 6 code.this is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 codethis is laravel 4 code', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"utf-8\">\r\n    <title>CKEditor 5 - Classic editor</title>\r\n    <script src=\"https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js\"></script>\r\n</head>\r\n<body>\r\n    <h1>Classic editor</h1>\r\n    <form action=\"[URL]\" method=\"post\">\r\n        <textarea name=\"content\" id=\"editor\">\r\n            &lt;p&gt;This is some sample content.&lt;/p&gt;\r\n        </textarea>\r\n        <p><input type=\"submit\" value=\"Submit\"></p>\r\n    </form>\r\n    <script>\r\n        ClassicEditor\r\n            .create( document.querySelector( \'#editor\' ) )\r\n            .catch( error => {\r\n                console.error( error );\r\n            } );\r\n    </script>\r\n</body>\r\n</html>', 'p {\r\n  color: red;\r\n  text-align: center;\r\n},\r\np {\r\n  color: red;\r\n  text-align: center;\r\n}', 'const person = {\r\n  firstName: \"John\",\r\n  lastName: \"Doe\",\r\n  age: 50,\r\n  eyeColor: \"blue\"\r\n};', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', '<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Flight extends Model\r\n{\r\n    /**\r\n     * The primary key associated with the table.\r\n     *\r\n     * @var string\r\n     */\r\n    protected $primaryKey = \'flight_id\';\r\n}', 0, '2021-11-30 15:56:51', '2021-11-30 15:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'usman', 'usmanarif.9219@gmail.com', NULL, '$2y$10$LLI40KxtabOiMy3f/zPJRO9Kp0B5iPb7QTg3GtHNHmgJsTLURfz5S', NULL, NULL, NULL);

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
-- Indexes for table `image_topics`
--
ALTER TABLE `image_topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_topics_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `link_topics`
--
ALTER TABLE `link_topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `link_topics_topic_id_foreign` (`topic_id`);

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
-- Indexes for table `step_topics`
--
ALTER TABLE `step_topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `step_topics_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_subcategory_id_foreign` (`subcategory_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_topics`
--
ALTER TABLE `image_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `link_topics`
--
ALTER TABLE `link_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `step_topics`
--
ALTER TABLE `step_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image_topics`
--
ALTER TABLE `image_topics`
  ADD CONSTRAINT `image_topics_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `link_topics`
--
ALTER TABLE `link_topics`
  ADD CONSTRAINT `link_topics_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `step_topics`
--
ALTER TABLE `step_topics`
  ADD CONSTRAINT `step_topics_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
