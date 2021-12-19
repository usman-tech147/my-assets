-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 10:44 PM
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
  `is_super_admin` tinyint(1) NOT NULL DEFAULT '1',
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
(1, 'Laravel', '2021-12-16 13:05:39', '2021-12-16 13:05:39');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
(1, 1, 'Mymotivz', '2021-12-19 16:25:30', '2021-12-19 16:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `subtopics`
--

CREATE TABLE `subtopics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `command` text COLLATE utf8mb4_unicode_ci,
  `snippet` longtext COLLATE utf8mb4_unicode_ci,
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
  `topic_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_status` int(10) UNSIGNED DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `subcategory_id`, `topic_title`, `topic_description`, `thumbnail`, `view_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jobs Random Data', NULL, 'no_image.jpg', 0, '2021-12-19 16:30:03', '2021-12-19 16:30:03'),
(2, 1, 'Candidates Random Data', '<ul><li>Rename seeds folder to seeders</li><li>php artisan make:seed NewCandidateSeed</li></ul><blockquote><p>Composer.json add two highlighted lines</p><p>\"autoload\": <i>{</i><br><i>&nbsp; &nbsp;&nbsp;</i>\"files\": <i>[</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>\"app/helper/helper.php\"<br>&nbsp; &nbsp;&nbsp;<i>]</i>,<br>&nbsp; &nbsp; \"psr-4\": <i>{</i><br><i>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</i>\"App\\\\\": \"app/\",<br>&nbsp; &nbsp; &nbsp; &nbsp;<strong> \"Database\\\\Factories\\\\\": \"database/factories/\",</strong><br><strong>&nbsp; &nbsp; &nbsp; &nbsp; \"Database\\\\Seeders\\\\\": \"database/seeders/\"</strong><br>&nbsp; &nbsp;&nbsp;<i>}</i><br><i>}</i>,</p></blockquote>', 'no_image.jpg', 0, '2021-12-19 16:40:29', '2021-12-19 16:40:29'),
(3, 1, 'Clients Random Data', NULL, 'no_image.jpg', 0, '2021-12-19 16:42:41', '2021-12-19 16:42:41');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subtopics`
--
ALTER TABLE `subtopics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
