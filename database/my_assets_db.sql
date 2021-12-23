-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 03:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

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
  `is_super_admin` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_super_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'usman', 'usmanarif.9219@gmail.com', NULL, '$2y$10$LLI40KxtabOiMy3f/zPJRO9Kp0B5iPb7QTg3GtHNHmgJsTLURfz5S', 1, NULL, NULL, NULL);

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
(1, 'Laravel', '2021-12-16 13:05:39', '2021-12-16 13:05:39'),
(2, 'Important', '2021-12-23 05:40:49', '2021-12-23 05:40:49');

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
(5, '2021_11_20_101437_create_admins_table', 1),
(6, '2021_11_27_144228_create_categories_table', 1),
(7, '2021_11_27_145026_create_subcategories_table', 1),
(8, '2021_11_29_064014_create_topics_table', 1),
(9, '2021_12_05_190537_create_subtopics_table', 1);

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
(1, 1, 'Mymotivz', '2021-12-19 16:25:30', '2021-12-19 16:25:30'),
(3, 2, '5-Model', '2021-12-23 05:41:26', '2021-12-23 05:41:26'),
(4, 2, '2-Migration', '2021-12-23 05:41:35', '2021-12-23 05:41:35'),
(6, 2, '12-Factory', '2021-12-23 05:42:24', '2021-12-23 05:42:24'),
(7, 2, '13-Seeds', '2021-12-23 05:42:33', '2021-12-23 05:42:33'),
(8, 2, '14-Commands', '2021-12-23 05:42:49', '2021-12-23 05:42:49'),
(9, 2, '7-One to One', '2021-12-23 05:47:25', '2021-12-23 05:47:25'),
(10, 2, '8-One to Many', '2021-12-23 05:47:35', '2021-12-23 05:47:35'),
(11, 2, '9-Many to Many', '2021-12-23 05:47:53', '2021-12-23 05:47:53'),
(12, 2, '10-Polymorphic Relationship', '2021-12-23 05:48:14', '2021-12-23 05:48:14'),
(13, 2, '16-Sessions', '2021-12-23 05:48:58', '2021-12-23 05:48:58'),
(14, 2, '17-Cookies', '2021-12-23 05:49:05', '2021-12-23 05:49:05'),
(16, 2, '1-Php OOP', '2021-12-23 05:49:46', '2021-12-23 05:49:46'),
(17, 2, '15-Email and Notifications', '2021-12-23 05:52:31', '2021-12-23 05:52:31'),
(18, 2, '18-Service Providers', '2021-12-23 05:52:47', '2021-12-23 05:52:47'),
(19, 2, '19-Service Containers', '2021-12-23 05:52:58', '2021-12-23 05:52:58'),
(20, 2, '20-Fasades', '2021-12-23 05:53:20', '2021-12-23 05:53:20'),
(21, 2, '6-Exceptions', '2021-12-23 05:53:40', '2021-12-23 05:53:40'),
(22, 2, '5-Request Lifecycle', '2021-12-23 05:54:25', '2021-12-23 05:54:25'),
(23, 2, '21-View Composer', '2021-12-23 05:54:37', '2021-12-23 05:54:37'),
(24, 2, '3-CRUD', '2021-12-23 05:55:15', '2021-12-23 05:55:15'),
(25, 2, '4-Validations', '2021-12-23 05:55:44', '2021-12-23 05:55:44'),
(26, 2, '22-Authentication and Authorization', '2021-12-23 05:56:26', '2021-12-23 05:56:26'),
(27, 2, '23-Gates and Policies', '2021-12-23 05:56:46', '2021-12-23 05:56:46'),
(28, 2, '11-Collections and Arrays', '2021-12-23 05:57:13', '2021-12-23 05:57:13'),
(29, 2, '26-Api\'s', '2021-12-23 05:57:32', '2021-12-23 05:57:32'),
(30, 2, '27-Postman', '2021-12-23 05:57:45', '2021-12-23 05:57:45'),
(31, 2, '25-Php Unit Testing', '2021-12-23 05:58:02', '2021-12-23 05:58:02'),
(32, 2, '24-Helper Functions', '2021-12-23 06:07:57', '2021-12-23 06:07:57');

-- --------------------------------------------------------

--
-- Table structure for table `subtopics`
--

CREATE TABLE `subtopics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `command` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snippet` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subtopics`
--

INSERT INTO `subtopics` (`id`, `topic_id`, `subtitle`, `command`, `snippet`, `created_at`, `updated_at`) VALUES
(1, 1, 'UserJobSeeder', 'php artisan make:seed UserJobSeeder', '<p><strong>public function </strong>run<i>()</i><br><i>{</i></p><blockquote><p><strong>Delete All Records Query.</strong></p></blockquote><p><br><i>&nbsp; &nbsp;&nbsp;</i>Schema::<i>disableForeignKeyConstraints()</i>;<br>&nbsp; &nbsp; DB::<i>table(</i>\'user_jobs\'<i>)</i>-&gt;truncate<i>()</i>;<br>&nbsp; &nbsp; Schema::<i>enableForeignKeyConstraints()</i>;<br><br><br>&nbsp; &nbsp;&nbsp;<strong>for</strong><i>(</i>$i=0; $i&lt;1000; $i++<i>){</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>$package_type = <i>[</i>\'monthly\',\'yearly\',\'hourly\',\'weekly\',\'daily\'<i>]</i>;<br>&nbsp; &nbsp; &nbsp; &nbsp; $experience = <i>[</i>\'Intern\',\'Entry Level\',\'Experienced\',\'Managerial\',\'Senior Executive\', \'Intermediate\'<i>]</i>;<br>&nbsp; &nbsp; &nbsp; &nbsp; $service = <i>[</i>\'Part-Time\',\'Contract To Hire\',\'Internship\',\'Full-Time\',\'Contract\', \'Seasonal\'<i>]</i>;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; $location = <i>[</i>\'lahore\', \'karachi\', \'haidrabad\', \'peshawar\', \'mardan\', \'queta\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'multan\', \'faislabad\', \'islamabad\', \'rawalpindi\', \'sawat\', \'kasmir\', \'kasoor\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'muree\', \'gawadar\', \'faislabad\'<br>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i>]</i>;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; $job_titles = <i>[</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>\'laravel\', \'react\', \'jquery\', \'html\', \'css\', \'hr\', \'project manager\', \'electrical engineer\', \'civil\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'node developer\', \'washer\', \'painter\', \'designer\', \'recruiter\', \'architecture\', \'hotel manager\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'inspector\',\'cook\',\'chef\'<br>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i>]</i>;<br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; $education = <i>[</i>1,2,3,4,5,6,7<i>]</i>;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; user_job::<i>create([</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>\'client_id\' =&gt; rand<i>(</i>1,100<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'job_title\' =&gt; $job_titles<i>[</i>array_rand<i>(</i>$job_titles<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'package_sign\' =&gt; \'$\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'package\' =&gt; rand<i>(</i>500,1000<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'package_to\' =&gt; rand<i>(</i>1001,50000<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'location\' =&gt; $location<i>[</i>array_rand<i>(</i>$location<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'web_url\' =&gt; \'\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'industry_id\' =&gt; rand<i>(</i>1,26<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'job_description\' =&gt; \'<i>&lt;</i>p<i>&gt;</i> this is job description <i>&lt;/</i>p<i>&gt;</i>\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'job_opening\' =&gt; rand<i>(</i>1,10<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'job_benefits\' =&gt; \'\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'required_skills\' =&gt; \'\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'certifications\' =&gt; \'\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'package_type\' =&gt; $package_type<i>[</i>array_rand<i>(</i>$package_type<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'education_id\' =&gt; $education<i>[</i>array_rand<i>(</i>$education<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'required_experience\' =&gt; $experience<i>[</i>array_rand<i>(</i>$experience<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'service\' =&gt; $service<i>[</i>array_rand<i>(</i>$service<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'applied_before\' =&gt; rand<i>(</i>2019,2022<i>)</i>.\'-0\'.rand<i>(</i>1,9<i>)</i>.\'-\'.rand<i>(</i>11,31<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'job_approved\' =&gt; rand<i>(</i>0,3<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'posted_at\' =&gt; now<i>()</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i>])</i>;<br>&nbsp; &nbsp;&nbsp;<i>}</i><br><br><i>}</i></p>', '2021-12-19 16:30:03', '2021-12-19 16:30:03'),
(2, 2, 'NewCandidateSeeder', 'php artisan db:seed --class=NewCandidateSeeder', '<p><strong>public function </strong>run<i>()</i><br><i>&nbsp; &nbsp; {</i></p><blockquote><p><br><strong>Delete All new candidates record</strong><br>&nbsp; &nbsp; &nbsp; &nbsp; Schema::disableForeignKeyConstraints();<br>&nbsp; &nbsp; &nbsp; &nbsp;DB::table(\'new_candidates\')-&gt;truncate();<br>&nbsp; &nbsp; &nbsp; &nbsp;Schema::enableForeignKeyConstraints();</p></blockquote><p><br><br>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>for </strong><i>(</i>$i = 0; $i &lt; 25; $i++<i>) {</i><br><br><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>$name = <i>[</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>\'ali\', \'younis\', \'arif\', \'sarwar\', \'hadi\', \'ammad\', \'burhan\', \'noshad\', \'touseef\', \'saad\', \'ahsan\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'tayab\', \'qasim\', \'hamza\', \'asad\', \'farooq\', \'javeria\', \'usman\', \'jammed\', \'umer\', \'sharif\', \'bilal\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'zain\', \'arslan\', \'ahsan\', \'munir\', \'kashif\', \'aqeel\', \'ahmad\', \'iqbal\', \'junaid\', \'ans\', \'maryam\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'faiza\', \'lubna\', \'aqsa\', \'aiman\', \'aima\', \'minal\', \'naeem\', \'umair\', \'salar\', \'samahir\', \'asif\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'ayuob\', \'amir\', \'nadeem\', \'ubaid\', \'zubair\', \'saqlan\', \'haider\', \'baseer\', \'mushtaq\'<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i>]</i>;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $job_titles = <i>[</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>\'laravel\', \'react\', \'jquery\', \'html\', \'css\', \'hr\', \'project manager\', \'electrical engineer\', \'civil\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'node developer\', \'washer\', \'painter\', \'designer\', \'recruiter\', \'architecture\', \'hotel manager\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'inspector\',\'cook\',\'chef\'<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i>]</i>;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $location = <i>[</i>\'lahore\', \'karachi\', \'haidrabad\', \'peshawar\', \'mardan\', \'queta\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'multan\', \'faislabad\', \'islamabad\', \'rawalpindi\', \'sawat\', \'kasmir\', \'kasoor\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'muree\', \'gawadar\', \'faislabad\'<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i>]</i>;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $type = <i>[</i>\'monthly\', \'yearly\', \'hourly\', \'weekly\', \'daily\'<i>]</i>;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $experience = <i>[</i>\'Intern\', \'Entry Level\', \'Experienced\', \'Managerial\', \'Senior Executive\', \'Intermediate\'<i>]</i>;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $service = <i>[</i>\'Part-Time\', \'Contract To Hire\', \'Internship\', \'Full-Time\', \'Contract\', \'Seasonal\'<i>]</i>;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $education = <i>[</i>1, 2, 3, 4, 5, 6, 7<i>]</i>;<br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $random = $name<i>[</i>array_rand<i>(</i>$name<i>)] </i>. \' \' . $name<i>[</i>array_rand<i>(</i>$name<i>)] </i>. \' \' . chr<i>(</i>rand<i>(</i>65, 90<i>))</i>;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $email = Str::<i>replace(</i>\' \', \'_\', $random<i>)</i>;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; NewCandidate::<i>create([</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>\'name\' =&gt; $random,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'view_status\' =&gt; 0,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'job_title\' =&gt; $job_titles<i>[</i>array_rand<i>(</i>$job_titles<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'phone\' =&gt; \'(\' . rand<i>(</i>100, 999<i>) </i>. \') \' . rand<i>(</i>100, 999<i>) </i>. \'-\' . rand<i>(</i>1000, 9999<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'email\' =&gt; $email . \'@gmail.com\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'city\' =&gt; <strong>null</strong>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'state\' =&gt; <strong>null</strong>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'location\' =&gt; $location<i>[</i>array_rand<i>(</i>$location<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'linkedin_url\' =&gt; \'\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'salary_sign\' =&gt; \'$\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'salary\' =&gt; rand<i>(</i>500, 1000<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'salary_to\' =&gt; rand<i>(</i>1001, 50000<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'salary_type\' =&gt; $type<i>[</i>array_rand<i>(</i>$type<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'skills\' =&gt; \'skill1, skill2, skill3\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'certifications\' =&gt; \'cer1, cer2, cer3\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'interest\' =&gt; \'interest1, interest2, interest3\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'experience\' =&gt; $experience<i>[</i>array_rand<i>(</i>$experience<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'color\' =&gt; <strong>null</strong>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'prof_image\' =&gt; <strong>null</strong>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'auth_status\' =&gt; \'I am authorized to work in the U.S for my present employer only\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'prof_summary\' =&gt; \'this is professional summary\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'password\' =&gt; Hash::<i>make(</i>\'abcd1234\'<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'code\' =&gt; <strong>null</strong>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'random_code\' =&gt; Str::<i>random(</i>10<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'job_type\' =&gt; $service<i>[</i>array_rand<i>(</i>$service<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'education_id\' =&gt; $education<i>[</i>array_rand<i>(</i>$education<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'job_id\' =&gt; <strong>null</strong>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'status_id\' =&gt; <strong>null</strong>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'industry_id\' =&gt; rand<i>(</i>1, 25<i>)</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ])</i>;<br>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i>}</i><br><br><i>&nbsp; &nbsp; }</i></p>', '2021-12-19 16:40:29', '2021-12-19 16:40:29'),
(3, 3, 'NewClientsSeeder', 'php artisan db:seed --class=NewClientSeeder', '<p><strong>public function </strong>run<i>()</i><br><i>&nbsp; &nbsp; {</i><br>&nbsp;</p><blockquote><p>Delete All new clients records<br>// &nbsp; &nbsp; &nbsp; &nbsp;Schema::disableForeignKeyConstraints();<br>// &nbsp; &nbsp; &nbsp; &nbsp;DB::table(\'new_clients\')-&gt;truncate();<br>// &nbsp; &nbsp; &nbsp; &nbsp;Schema::enableForeignKeyConstraints();</p></blockquote><p><br><br>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>for</strong><i>(</i>$i=0; $i&lt;100; $i++<i>){</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>$company = <i>[</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>\'legit\',\'co\',\'devroks\',\'ashlar\',\'globals\',\'apptech\',\'devstar\',\'google\',\'facebook\',\'linkedin\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'youtube\',\'softenica\',\'cybus\',\'assort_tech\', \'techlogix\', \'systems\', \'netsole\', \'nextbridge\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'umt\', \'ucp\', \'uol\', \'legit\', \'brains\', \'technerds\', \'cival\'<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i>]</i>;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $job_titles = <i>[</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>\'laravel\', \'react\', \'jquery\', \'html\', \'css\', \'hr\', \'project manager\', \'electrical engineer\', \'civil\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'node developer\', \'washer\', \'painter\', \'designer\', \'recruiter\'<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i>]</i>;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $location = <i>[</i>\'lahore\', \'karachi\', \'haidrabad\', \'peshawar\', \'mardan\', \'queta\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'multan\', \'faislabad\', \'islamabad\', \'rawalpindi\', \'sawat\', \'kasmir\', \'kasoor\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'muree\', \'gawadar\', \'faislabad\'<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i>]</i>;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $random_location = $location<i>[</i>array_rand<i>(</i>$location<i>)]</i>;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $random = $company<i>[</i>array_rand<i>(</i>$company<i>)]</i>.\'_\'.rand<i>(</i>0,1000<i>)</i>.\'_\'.$random_location;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $name = $random;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; NewClient::<i>create([</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>\'company_name\' =&gt; $random,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'name\' =&gt; $name,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'view_status\' =&gt; 0,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'is_new\' =&gt; 1,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'job_title\' =&gt; $job_titles<i>[</i>array_rand<i>(</i>$job_titles<i>)]</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'phone\' =&gt; \'(\' . rand<i>(</i>100, 999<i>) </i>. \') \' . rand<i>(</i>100, 999<i>) </i>. \'-\' . rand<i>(</i>1000, 9999<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'email\' =&gt; $name .\'_\'.rand<i>(</i>1,9<i>)</i>.\'_\'.rand<i>(</i>50,99<i>)</i>. \'@gmail.com\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'address\' =&gt; $random_location,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'complete_address\' =&gt; $random_location,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'country_id\' =&gt; <strong>null</strong>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'city\' =&gt; <strong>null</strong>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'state_id\' =&gt; <strong>null</strong>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'zip_code\' =&gt; rand<i>(</i>10000,99999<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'web_url\' =&gt; <strong>null</strong>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'industry_id\' =&gt; rand<i>(</i>1, 25<i>)</i>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'job_discription\' =&gt; \'this is \'.$random.\' description\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'job_opening\' =&gt; <strong>null</strong>,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'password\' =&gt; \'$2y$10$LLI40KxtabOiMy3f/zPJRO9Kp0B5iPb7QTg3GtHNHmgJsTLURfz5S\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'logo\' =&gt; \'7RuhOrZO-1g-2021_10_25-03-35-07.jpg\',<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i>])</i>;<br>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i>}</i><br><br><br><i>&nbsp; &nbsp; }</i></p>', '2021-12-19 16:42:42', '2021-12-19 16:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `topic_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_status` int(10) UNSIGNED DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `subcategory_id`, `topic_title`, `topic_description`, `thumbnail`, `view_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jobs Random Data', NULL, 'no_image.jpg', 0, '2021-12-19 16:30:03', '2021-12-19 16:30:03'),
(2, 1, 'Candidates Random Data', '<ul><li>Rename seeds folder to seeders</li><li>php artisan make:seed NewCandidateSeed</li></ul><blockquote><p>Composer.json add two highlighted lines</p><p>\"autoload\": <i>{</i><br><i>&nbsp; &nbsp;&nbsp;</i>\"files\": <i>[</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>\"app/helper/helper.php\"<br>&nbsp; &nbsp;&nbsp;<i>]</i>,<br>&nbsp; &nbsp; \"psr-4\": <i>{</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>\"App\\\\\": \"app/\",<br>&nbsp; &nbsp; &nbsp; &nbsp;<strong> \"Database\\\\Factories\\\\\": \"database/factories/\",</strong><br><strong>&nbsp; &nbsp; &nbsp; &nbsp; \"Database\\\\Seeders\\\\\": \"database/seeders/\"</strong><br>&nbsp; &nbsp;&nbsp;<i>}</i><br><i>}</i>,</p></blockquote>', 'no_image.jpg', 0, '2021-12-19 16:40:29', '2021-12-19 16:40:29'),
(3, 1, 'Clients Random Data', NULL, 'no_image.jpg', 0, '2021-12-19 16:42:41', '2021-12-19 16:42:41'),
(5, 4, 'Create Migration', NULL, 'no_image.jpg', 0, '2021-12-23 07:45:15', '2021-12-23 07:45:15'),
(6, 4, 'Change Table Name', NULL, 'no_image.jpg', 0, '2021-12-23 07:45:45', '2021-12-23 07:45:45'),
(7, 4, 'Change Column Name, position and Constraints', NULL, 'no_image.jpg', 0, '2021-12-23 07:46:42', '2021-12-23 07:46:42'),
(8, 4, 'Rollback Migration', NULL, 'no_image.jpg', 0, '2021-12-23 07:47:23', '2021-12-23 07:47:23'),
(9, 4, 'Add and Remove Table columns', NULL, 'no_image.jpg', 0, '2021-12-23 07:48:38', '2021-12-23 07:48:38'),
(10, 4, 'Foreign Key Constraints', NULL, 'no_image.jpg', 0, '2021-12-23 07:53:09', '2021-12-23 07:53:09'),
(11, 4, 'Toggling foreign key Constraints', NULL, 'no_image.jpg', 0, '2021-12-23 07:54:34', '2021-12-23 07:54:34'),
(12, 24, 'Create Record with Mass assignment', NULL, 'no_image.jpg', 0, '2021-12-23 07:56:01', '2021-12-23 07:56:01'),
(13, 24, 'Create Record (1 to Many)', NULL, 'no_image.jpg', 0, '2021-12-23 07:56:33', '2021-12-23 07:56:33'),
(14, 24, 'Create Record (Many to Many)', NULL, 'no_image.jpg', 0, '2021-12-23 07:56:53', '2021-12-23 07:56:53'),
(15, 24, 'Edit Record', NULL, 'no_image.jpg', 0, '2021-12-23 07:57:17', '2021-12-23 07:57:17'),
(16, 24, 'Edit Record (1 to Many)', NULL, 'no_image.jpg', 0, '2021-12-23 08:20:07', '2021-12-23 08:20:07'),
(17, 24, 'Edit Record (Many to Many)', NULL, 'no_image.jpg', 0, '2021-12-23 08:20:31', '2021-12-23 08:20:31'),
(18, 24, 'Delete Record (All scenarios)', NULL, 'no_image.jpg', 0, '2021-12-23 08:21:00', '2021-12-23 08:21:00'),
(19, 25, 'Create Custom Request For Validation', NULL, 'no_image.jpg', 0, '2021-12-23 08:23:12', '2021-12-23 08:23:12'),
(20, 25, 'Create Custom Rules For Validation', NULL, 'no_image.jpg', 0, '2021-12-23 08:23:42', '2021-12-23 08:23:42'),
(21, 25, 'Validation for string input', NULL, 'no_image.jpg', 0, '2021-12-23 08:24:14', '2021-12-23 08:24:14'),
(22, 25, 'Validation for unique email', NULL, 'no_image.jpg', 0, '2021-12-23 08:24:38', '2021-12-23 08:24:38'),
(23, 25, 'Validation for array (multiple checkbox)', NULL, 'no_image.jpg', 0, '2021-12-23 08:25:07', '2021-12-23 08:25:07'),
(24, 25, 'Validation for single value (dropdown)', NULL, 'no_image.jpg', 0, '2021-12-23 08:25:52', '2021-12-23 08:25:52'),
(25, 25, 'Validation for files (extenstion, length)', NULL, 'no_image.jpg', 0, '2021-12-23 08:26:40', '2021-12-23 08:26:40'),
(26, 25, 'Regex rule for url', NULL, 'no_image.jpg', 0, '2021-12-23 08:27:05', '2021-12-23 08:28:08'),
(27, 25, 'Regex rule for location', NULL, 'no_image.jpg', 0, '2021-12-23 08:27:56', '2021-12-23 08:27:56'),
(28, 25, 'Regex rule for email', NULL, 'no_image.jpg', 0, '2021-12-23 08:28:44', '2021-12-23 08:28:44'),
(29, 3, 'Model Default Settings', NULL, 'no_image.jpg', 0, '2021-12-23 08:45:14', '2021-12-23 08:49:27'),
(30, 3, 'Model (1 to Many) relationship', NULL, 'no_image.jpg', 0, '2021-12-23 08:45:54', '2021-12-23 08:45:54'),
(31, 3, 'Model (Many to many) relationship', NULL, 'no_image.jpg', 0, '2021-12-23 08:46:29', '2021-12-23 08:46:29'),
(32, 3, 'Pivot Model', NULL, 'no_image.jpg', 0, '2021-12-23 08:46:45', '2021-12-23 08:46:45'),
(33, 3, 'Model scopes', NULL, 'no_image.jpg', 0, '2021-12-23 08:46:58', '2021-12-23 08:46:58'),
(34, 3, 'Model Accessors', NULL, 'no_image.jpg', 0, '2021-12-23 08:47:10', '2021-12-23 08:47:10'),
(35, 3, 'Model Mutotators', NULL, 'no_image.jpg', 0, '2021-12-23 08:47:27', '2021-12-23 08:47:27'),
(36, 3, 'Model appends', NULL, 'no_image.jpg', 0, '2021-12-23 08:51:38', '2021-12-23 08:51:38');

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
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `subtopics`
--
ALTER TABLE `subtopics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subtopics_topic_id_foreign` (`topic_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `subtopics`
--
ALTER TABLE `subtopics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subtopics`
--
ALTER TABLE `subtopics`
  ADD CONSTRAINT `subtopics_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
