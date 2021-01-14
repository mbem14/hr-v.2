-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 172.24.0.3
-- Generation Time: Jan 14, 2021 at 10:08 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hcv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `appraisal_periodes`
--

CREATE TABLE `appraisal_periodes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appraisal_periodes`
--

INSERT INTO `appraisal_periodes` (`id`, `name`, `start_date`, `end_date`, `status`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2020', '2020-01-01', '2020-12-24', 'active', 'PA 2020', '2020-11-30 07:57:55', '2020-11-30 07:57:55', NULL),
(2, '2019', '2020-12-01', '2020-12-01', 'inactive', NULL, '2020-12-23 06:59:53', '2020-12-23 06:59:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint UNSIGNED NOT NULL,
  `in_time` datetime DEFAULT NULL,
  `out_time` datetime DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` bigint UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint UNSIGNED DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `host` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audit_logs`
--

INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES
(1, 'created', 3, 'App\\Models\\User', 1, '{\"name\":\"Kusuma Yudha Ramadhani\",\"email\":\"ramadhani@amka.co.id\",\"username\":\"171174111\",\"employee_id\":\"48\",\"updated_at\":\"2020-12-03 02:22:59\",\"created_at\":\"2020-12-03 02:22:59\",\"id\":3}', '172.24.0.1', '2020-12-03 02:22:59', '2020-12-03 02:22:59'),
(2, 'updated', 3, 'App\\Models\\User', 1, '{\"id\":3,\"name\":\"Kusuma Yudha Ramadhani\",\"email\":\"ramadhani@amka.co.id\",\"username\":\"171174111\",\"employee_id\":48,\"email_verified_at\":null,\"created_at\":\"2020-12-03 02:22:59\",\"updated_at\":\"2020-12-04 01:21:36\",\"deleted_at\":null}', '172.24.0.1', '2020-12-04 01:21:36', '2020-12-04 01:21:36'),
(3, 'created', 4, 'App\\Models\\User', 1, '{\"name\":\"Antonius Ari\",\"email\":\"ari.nugroho@amka.co.id\",\"username\":\"192117197\",\"employee_id\":\"46\",\"updated_at\":\"2020-12-04 02:02:37\",\"created_at\":\"2020-12-04 02:02:37\",\"id\":4}', '172.24.0.1', '2020-12-04 02:02:37', '2020-12-04 02:02:37'),
(4, 'updated', 4, 'App\\Models\\User', 4, '{\"id\":4,\"name\":\"Antonius Ari\",\"email\":\"ari.nugroho@amka.co.id\",\"username\":\"192117197\",\"employee_id\":46,\"email_verified_at\":null,\"created_at\":\"2020-12-04 02:02:37\",\"updated_at\":\"2020-12-04 02:02:37\",\"deleted_at\":null}', '172.24.0.1', '2020-12-08 01:42:37', '2020-12-08 01:42:37'),
(5, 'created', 1, 'App\\Models\\EmployeeAppraisal', 4, '{\"employee_id\":\"48\",\"period_id\":\"1\",\"evaluator_id\":\"46\",\"pilih_1\":\"5\",\"pilih_2\":\"5\",\"pilih_3\":\"5\",\"pilih_4\":\"5\",\"pilih_5\":\"5\",\"pilih_6\":\"5\",\"pilih_7\":\"5\",\"pilih_8\":\"5\",\"pilih_9\":\"5\",\"pilih_10\":\"5\",\"pilih_11\":\"5\",\"pilih_12\":\"5\",\"pilih_13\":\"5\",\"pilih_14\":\"5\",\"pilih_15\":\"5\",\"pilih_16\":\"5\",\"pilih_17\":\"5\",\"pilih_18\":\"5\",\"pilih_19\":\"5\",\"pilih_20\":\"5\",\"target_1\":\"2\",\"reali_1\":\"2\",\"nilai_1\":\"5\",\"target_2\":\"2\",\"reali_2\":\"2\",\"nilai_2\":\"5\",\"target_3\":\"2\",\"reali_3\":\"2\",\"nilai_3\":\"5\",\"target_4\":\"2\",\"reali_4\":\"2\",\"nilai_4\":\"5\",\"target_5\":\"2\",\"reali_5\":\"2\",\"nilai_5\":\"5\",\"created_by_id\":4,\"updated_at\":\"2020-12-08 10:00:38\",\"created_at\":\"2020-12-08 10:00:38\",\"id\":1}', '172.24.0.1', '2020-12-08 10:00:39', '2020-12-08 10:00:39'),
(6, 'updated', 4, 'App\\Models\\User', 4, '{\"id\":4,\"name\":\"Antonius Ari\",\"email\":\"ari.nugroho@amka.co.id\",\"username\":\"192117197\",\"employee_id\":46,\"email_verified_at\":null,\"created_at\":\"2020-12-04 02:02:37\",\"updated_at\":\"2020-12-04 02:02:37\",\"deleted_at\":null}', '172.24.0.1', '2020-12-08 10:31:58', '2020-12-08 10:31:58'),
(7, 'created', 2, 'App\\Models\\EmployeeAppraisal', 4, '{\"employee_id\":\"48\",\"period_id\":\"1\",\"evaluator_id\":\"46\",\"pilih_1\":\"5\",\"pilih_2\":\"5\",\"pilih_3\":\"5\",\"pilih_4\":\"5\",\"pilih_5\":\"5\",\"pilih_6\":\"5\",\"pilih_7\":\"5\",\"pilih_8\":\"5\",\"pilih_9\":\"5\",\"pilih_10\":\"5\",\"pilih_11\":\"5\",\"pilih_12\":\"5\",\"pilih_13\":\"5\",\"pilih_14\":\"5\",\"pilih_15\":\"5\",\"pilih_16\":\"5\",\"pilih_17\":\"5\",\"pilih_18\":\"5\",\"pilih_19\":\"5\",\"pilih_20\":\"5\",\"target_1\":\"2\",\"reali_1\":\"2\",\"nilai_1\":\"2\",\"target_2\":\"2\",\"reali_2\":\"2\",\"nilai_2\":\"2\",\"target_3\":\"2\",\"reali_3\":\"2\",\"nilai_3\":\"2\",\"target_4\":\"2\",\"reali_4\":\"2\",\"nilai_4\":\"2\",\"target_5\":\"2\",\"reali_5\":\"2\",\"nilai_5\":\"2\",\"created_by_id\":4,\"updated_at\":\"2020-12-10 04:49:24\",\"created_at\":\"2020-12-10 04:49:24\",\"id\":2}', '172.19.0.1', '2020-12-10 04:49:24', '2020-12-10 04:49:24'),
(8, 'deleted', 2, 'App\\Models\\EmployeeAppraisal', 1, '{\"id\":2,\"pilih_1\":5,\"pilih_2\":5,\"pilih_3\":5,\"pilih_4\":5,\"pilih_5\":5,\"pilih_6\":5,\"pilih_7\":5,\"pilih_8\":5,\"pilih_9\":5,\"pilih_10\":5,\"pilih_11\":5,\"pilih_12\":5,\"pilih_13\":5,\"pilih_14\":5,\"pilih_15\":5,\"pilih_16\":5,\"pilih_17\":5,\"pilih_18\":5,\"pilih_19\":5,\"pilih_20\":5,\"target_1\":2,\"target_2\":2,\"target_3\":2,\"target_4\":2,\"target_5\":2,\"reali_1\":2,\"reali_2\":2,\"reali_3\":2,\"reali_4\":2,\"reali_5\":2,\"nilai_1\":2,\"nilai_2\":2,\"nilai_3\":2,\"nilai_4\":2,\"nilai_5\":2,\"status\":null,\"created_at\":\"2020-12-10 04:49:24\",\"updated_at\":\"2020-12-10 08:22:08\",\"deleted_at\":\"2020-12-10 08:22:08\",\"employee_id\":48,\"period_id\":1,\"evaluator_id\":46,\"created_by_id\":4}', '172.19.0.1', '2020-12-10 08:22:08', '2020-12-10 08:22:08'),
(9, 'created', 3, 'App\\Models\\EmployeeAppraisal', 4, '{\"employee_id\":\"49\",\"period_id\":\"1\",\"evaluator_id\":\"46\",\"pilih_1\":\"4\",\"pilih_2\":\"2\",\"pilih_3\":\"2\",\"pilih_5\":\"5\",\"pilih_6\":\"4\",\"pilih_7\":\"1\",\"pilih_8\":\"2\",\"pilih_9\":\"2\",\"pilih_10\":\"4\",\"pilih_11\":\"5\",\"pilih_12\":\"1\",\"pilih_13\":\"4\",\"pilih_14\":\"5\",\"pilih_15\":\"2\",\"pilih_16\":\"4\",\"pilih_17\":\"5\",\"pilih_18\":\"5\",\"target_1\":\"98\",\"reali_1\":\"9\",\"nilai_1\":\"2\",\"target_2\":\"53\",\"reali_2\":\"38\",\"target_3\":\"52\",\"reali_3\":\"80\",\"nilai_3\":\"4\",\"target_4\":\"73\",\"reali_4\":\"48\",\"target_5\":\"46\",\"reali_5\":\"15\",\"nilai_5\":\"1\",\"created_by_id\":4,\"updated_at\":\"2020-12-16 03:34:02\",\"created_at\":\"2020-12-16 03:34:02\",\"id\":3}', '172.24.0.1', '2020-12-16 03:34:02', '2020-12-16 03:34:02'),
(10, 'created', 4, 'App\\Models\\EmployeeAppraisal', 4, '{\"employee_id\":\"48\",\"period_id\":\"1\",\"evaluator_id\":\"46\",\"pilih_1\":\"5\",\"pilih_2\":\"4\",\"pilih_3\":\"5\",\"pilih_4\":\"2\",\"pilih_5\":\"2\",\"pilih_6\":\"2\",\"pilih_7\":\"4\",\"pilih_8\":\"4\",\"pilih_9\":\"2\",\"pilih_10\":\"1\",\"pilih_11\":\"1\",\"pilih_12\":\"4\",\"pilih_13\":\"1\",\"pilih_14\":\"1\",\"pilih_15\":\"4\",\"pilih_16\":\"5\",\"pilih_17\":\"2\",\"pilih_18\":\"4\",\"pilih_19\":\"1\",\"pilih_20\":\"5\",\"target_1\":\"68\",\"reali_1\":\"82\",\"nilai_1\":\"4\",\"target_2\":\"2\",\"reali_2\":\"37\",\"nilai_2\":\"4\",\"target_3\":\"29\",\"reali_3\":\"77\",\"nilai_3\":\"5\",\"target_4\":\"95\",\"reali_4\":\"76\",\"nilai_4\":\"5\",\"target_5\":\"59\",\"reali_5\":\"100\",\"nilai_5\":\"5\",\"created_by_id\":4,\"updated_at\":\"2020-12-16 03:36:37\",\"created_at\":\"2020-12-16 03:36:37\",\"id\":4}', '172.24.0.1', '2020-12-16 03:36:37', '2020-12-16 03:36:37'),
(11, 'updated', 4, 'App\\Models\\User', 4, '{\"id\":4,\"name\":\"Antonius Ari\",\"email\":\"ari.nugroho@amka.co.id\",\"username\":\"192117197\",\"employee_id\":46,\"email_verified_at\":null,\"created_at\":\"2020-12-04 02:02:37\",\"updated_at\":\"2020-12-04 02:02:37\",\"deleted_at\":null}', '172.24.0.1', '2020-12-16 04:48:13', '2020-12-16 04:48:13'),
(12, 'created', 5, 'App\\Models\\EmployeeAppraisal', 44, '{\"employee_id\":\"41\",\"period_id\":\"1\",\"evaluator_id\":\"40\",\"pilih_1\":\"4\",\"pilih_2\":\"5\",\"pilih_3\":\"5\",\"pilih_4\":\"5\",\"pilih_5\":\"4\",\"pilih_6\":\"2\",\"pilih_7\":\"1\",\"pilih_8\":\"1\",\"pilih_9\":\"4\",\"pilih_10\":\"4\",\"pilih_11\":\"1\",\"pilih_12\":\"4\",\"pilih_13\":\"1\",\"pilih_14\":\"5\",\"pilih_16\":\"5\",\"pilih_17\":\"4\",\"pilih_18\":\"4\",\"pilih_19\":\"5\",\"pilih_20\":\"5\",\"target_1\":\"27\",\"reali_1\":\"38\",\"nilai_1\":\"5\",\"target_2\":\"51\",\"reali_2\":\"65\",\"nilai_2\":\"4\",\"target_3\":\"38\",\"reali_3\":\"75\",\"nilai_3\":\"5\",\"target_4\":\"42\",\"reali_4\":\"47\",\"nilai_4\":\"5\",\"target_5\":\"8\",\"reali_5\":\"21\",\"nilai_5\":\"4\",\"created_by_id\":44,\"updated_at\":\"2020-12-16 05:13:12\",\"created_at\":\"2020-12-16 05:13:12\",\"id\":5}', '172.24.0.1', '2020-12-16 05:13:12', '2020-12-16 05:13:12'),
(13, 'updated', 4, 'App\\Models\\User', 4, '{\"id\":4,\"name\":\"Antonius Ari\",\"email\":\"ari.nugroho@amka.co.id\",\"username\":\"192117197\",\"employee_id\":46,\"email_verified_at\":null,\"created_at\":\"2020-12-04 02:02:37\",\"updated_at\":\"2020-12-04 02:02:37\",\"deleted_at\":null}', '172.24.0.1', '2020-12-16 05:20:21', '2020-12-16 05:20:21'),
(14, 'updated', 4, 'App\\Models\\User', 4, '{\"id\":4,\"name\":\"Antonius Ari\",\"email\":\"ari.nugroho@amka.co.id\",\"username\":\"192117197\",\"employee_id\":46,\"email_verified_at\":null,\"created_at\":\"2020-12-04 02:02:37\",\"updated_at\":\"2020-12-16 07:35:49\",\"deleted_at\":null,\"roles\":[{\"id\":2,\"title\":\"User\",\"created_at\":null,\"updated_at\":null,\"deleted_at\":null,\"pivot\":{\"user_id\":4,\"role_id\":2}}]}', '172.24.0.1', '2020-12-16 07:35:49', '2020-12-16 07:35:49'),
(15, 'updated', 4, 'App\\Models\\User', 4, '{\"id\":4,\"name\":\"ANTONIUS ARI NUGROHO\",\"email\":\"ari.nugroho@amka.co.id\",\"username\":\"192117197\",\"employee_id\":46,\"email_verified_at\":null,\"created_at\":\"2020-12-04 02:02:37\",\"updated_at\":\"2020-12-16 07:44:24\",\"deleted_at\":null,\"roles\":[{\"id\":2,\"title\":\"User\",\"created_at\":null,\"updated_at\":null,\"deleted_at\":null,\"pivot\":{\"user_id\":4,\"role_id\":2}}]}', '172.24.0.1', '2020-12-16 07:44:24', '2020-12-16 07:44:24'),
(16, 'updated', 48, 'App\\Models\\Employee', 1, '{\"id\":48,\"employee_number\":\"171174111\",\"first_name\":\"KUSUMA\",\"middle_name\":\"YUDHA\",\"last_name\":\"RAMADHANI\",\"birthday\":\"04-03-1994\",\"gender\":\"Male\",\"marital_status\":\"Married\",\"id_card\":\"-\",\"joined_date\":\"25-09-2017\",\"confirmation_date\":null,\"terminate_date\":null,\"address_1\":\"Jl. Prof. M. Yamin IX No. 58\",\"address_2\":null,\"city\":null,\"home_phone\":null,\"mobile_phone\":\"85641412396\",\"work_phone\":\"085641412396\",\"work_email\":\"ramadhani@amka.co.id\",\"private_email\":\"ramadhani.46k@gmail.com\",\"front_title\":null,\"back_title\":\"S.Kom\",\"birth_place\":\"KABUPATEN BANYUMAS\",\"religion\":\"Islam\",\"blood_type\":\"B\",\"postal_code\":\"53142\",\"number_decree\":null,\"status\":\"\",\"created_at\":\"2020-12-03 08:19:43\",\"updated_at\":\"2020-12-23 02:06:49\",\"deleted_at\":null,\"job_title_id\":\"81\",\"department_id\":\"50\",\"country_id\":null,\"nationality_id\":null,\"province_id\":\"1\",\"supervisor_id\":\"46\",\"indirect_supervisors_id\":\"40\",\"indirect_supervisors2_id\":\"46\",\"created_by_id\":1,\"employment_status_id\":\"1\"}', '172.24.0.1', '2020-12-23 02:06:49', '2020-12-23 02:06:49'),
(17, 'updated', 48, 'App\\Models\\Employee', 1, '{\"id\":48,\"employee_number\":\"171174111\",\"first_name\":\"KUSUMA\",\"middle_name\":\"YUDHA\",\"last_name\":\"RAMADHANI\",\"birthday\":\"04-03-1994\",\"gender\":\"Male\",\"marital_status\":\"Married\",\"id_card\":\"-\",\"joined_date\":\"25-09-2017\",\"confirmation_date\":null,\"terminate_date\":null,\"address_1\":\"Jl. Prof. M. Yamin IX No. 58\",\"address_2\":null,\"city\":null,\"home_phone\":null,\"mobile_phone\":\"85641412396\",\"work_phone\":\"085641412396\",\"work_email\":\"ramadhani@amka.co.id\",\"private_email\":\"ramadhani.46k@gmail.com\",\"front_title\":null,\"back_title\":\"S.Kom\",\"birth_place\":\"KABUPATEN BANYUMAS\",\"religion\":\"Islam\",\"blood_type\":\"B\",\"postal_code\":\"53142\",\"number_decree\":null,\"status\":\"\",\"created_at\":\"2020-12-03 08:19:43\",\"updated_at\":\"2020-12-23 02:38:09\",\"deleted_at\":null,\"job_title_id\":\"81\",\"department_id\":\"50\",\"country_id\":null,\"nationality_id\":null,\"province_id\":\"1\",\"supervisor_id\":\"46\",\"indirect_supervisors_id\":\"40\",\"indirect_supervisors2_id\":null,\"created_by_id\":1,\"employment_status_id\":\"1\"}', '172.24.0.1', '2020-12-23 02:38:09', '2020-12-23 02:38:09'),
(18, 'created', 6, 'App\\Models\\EmployeeAppraisal', 44, '{\"period_id\":\"1\",\"employee_id\":\"42\",\"evaluator_id\":\"40\",\"pilih_1\":\"5\",\"pilih_2\":\"5\",\"pilih_3\":\"5\",\"pilih_4\":\"5\",\"pilih_5\":\"5\",\"pilih_6\":\"5\",\"pilih_7\":\"5\",\"pilih_8\":\"5\",\"pilih_9\":\"5\",\"pilih_10\":\"5\",\"pilih_11\":\"5\",\"pilih_12\":\"5\",\"pilih_13\":\"5\",\"pilih_14\":\"5\",\"pilih_15\":\"5\",\"pilih_16\":\"5\",\"pilih_17\":\"5\",\"pilih_18\":\"5\",\"pilih_19\":\"5\",\"pilih_20\":\"5\",\"target_1\":\"1\",\"reali_1\":\"1\",\"nilai_1\":\"5\",\"target_2\":\"1\",\"reali_2\":\"1\",\"nilai_2\":\"5\",\"target_3\":\"1\",\"reali_3\":\"1\",\"nilai_3\":\"5\",\"target_4\":\"1\",\"reali_4\":\"1\",\"nilai_4\":\"5\",\"target_5\":\"1\",\"reali_5\":\"1\",\"nilai_5\":\"5\",\"created_by_id\":44,\"updated_at\":\"2021-01-04 03:34:07\",\"created_at\":\"2021-01-04 03:34:07\",\"id\":6}', '172.24.0.1', '2021-01-04 03:34:07', '2021-01-04 03:34:07'),
(19, 'created', 7, 'App\\Models\\EmployeeAppraisal', 44, '{\"period_id\":\"1\",\"employee_id\":\"44\",\"evaluator_id\":\"40\",\"pilih_1\":\"5\",\"pilih_2\":\"5\",\"pilih_3\":\"5\",\"pilih_4\":\"5\",\"pilih_5\":\"5\",\"pilih_6\":\"5\",\"pilih_7\":\"5\",\"pilih_8\":\"5\",\"pilih_9\":\"5\",\"pilih_10\":\"5\",\"pilih_11\":\"5\",\"pilih_12\":\"5\",\"pilih_13\":\"5\",\"pilih_14\":\"5\",\"pilih_15\":\"5\",\"pilih_16\":\"5\",\"pilih_17\":\"5\",\"pilih_18\":\"5\",\"pilih_19\":\"5\",\"pilih_20\":\"5\",\"target_1\":\"12\",\"reali_1\":\"124\",\"nilai_1\":\"1\",\"target_2\":\"124\",\"reali_2\":\"124\",\"nilai_2\":\"5\",\"target_3\":\"124\",\"reali_3\":\"124\",\"nilai_3\":\"5\",\"target_4\":\"142\",\"reali_4\":\"124\",\"nilai_4\":\"5\",\"target_5\":\"124\",\"reali_5\":\"124\",\"nilai_5\":\"5\",\"created_by_id\":44,\"updated_at\":\"2021-01-04 03:43:37\",\"created_at\":\"2021-01-04 03:43:37\",\"id\":7}', '172.24.0.1', '2021-01-04 03:43:37', '2021-01-04 03:43:37'),
(20, 'created', 189, 'App\\Models\\User', 1, '{\"name\":\"HC\",\"email\":\"hcb@amka.co.id\",\"username\":\"hcb\",\"employee_id\":null,\"updated_at\":\"2021-01-14 08:05:42\",\"created_at\":\"2021-01-14 08:05:42\",\"id\":189}', '172.24.0.1', '2021-01-14 08:05:42', '2021-01-14 08:05:42'),
(21, 'updated', 189, 'App\\Models\\User', 1, '{\"id\":189,\"name\":\"HC\",\"email\":\"hcb@amka.co.id\",\"username\":\"hcb\",\"employee_id\":null,\"email_verified_at\":null,\"created_at\":\"2021-01-14 08:05:42\",\"updated_at\":\"2021-01-14 10:00:50\",\"deleted_at\":null}', '172.24.0.1', '2021-01-14 10:00:50', '2021-01-14 10:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `company_structures`
--

CREATE TABLE `company_structures` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `heads_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_structures`
--

INSERT INTO `company_structures` (`id`, `title`, `description`, `type`, `created_at`, `updated_at`, `deleted_at`, `parent_id`, `heads_id`) VALUES
(1, 'Direktur Utama', '', 'BOD', '2020-12-03 10:07:52', NULL, NULL, NULL, NULL),
(2, 'Direktur Keuangan', '', 'BOD', '2020-12-03 10:07:52', NULL, NULL, 1, NULL),
(3, 'Direktur Operasional', '', 'BOD', '2020-12-03 10:07:52', NULL, NULL, 1, NULL),
(4, 'Satuan Pengawasan Internal', 'SPI', 'Division', '2020-12-03 10:07:52', NULL, NULL, 1, NULL),
(5, 'Divisi Corporate Secretary', 'CORSEC', 'Division', '2020-12-03 10:07:52', NULL, NULL, 1, NULL),
(6, 'Divisi QHSSE', 'QHSSE', 'Division', '2020-12-03 10:07:52', NULL, NULL, 1, NULL),
(7, 'Divisi Pengendalian Operasi Bisnis', 'POB', 'Division', '2020-12-03 10:07:52', NULL, NULL, 1, NULL),
(8, 'Divisi Akuntansi', 'DAK', 'Division', '2020-12-03 10:07:52', NULL, NULL, 2, NULL),
(9, 'Divisi Keuangan', 'DKU', 'Division', '2020-12-03 10:07:52', NULL, NULL, 2, NULL),
(10, 'Divisi Human Capital & Business Development', 'HCB', 'Division', '2020-12-03 10:07:52', NULL, NULL, 2, NULL),
(11, 'Departemen Corporate Secretary', 'CORSEC', 'Department', '2020-12-03 10:07:52', NULL, NULL, 5, NULL),
(12, 'Departemen Legal & MR', 'CORSEC', 'Department', '2020-12-03 10:07:52', NULL, NULL, 5, NULL),
(13, 'Departemen Quality Management', 'QHSSE', 'Department', '2020-12-03 10:07:52', NULL, NULL, 6, NULL),
(14, 'Departemen HSSE Management', 'QHSSE', 'Department', '2020-12-03 10:07:52', NULL, NULL, 6, NULL),
(15, 'Departemen QHSSE System', 'QHSSE', 'Department', '2020-12-03 10:07:52', NULL, NULL, 6, NULL),
(16, 'Departemen Akuntansi', 'DAK', 'Department', '2020-12-03 10:07:52', NULL, NULL, 8, NULL),
(17, 'Departemen Perpajakan', 'DAK', 'Department', '2020-12-03 10:07:52', NULL, NULL, 8, NULL),
(18, 'Departemen Penagihan & Hutang', 'DKU', 'Department', '2020-12-03 10:07:52', NULL, NULL, 9, NULL),
(19, 'Departemen Keuangan & Penganggaran', 'DKU', 'Department', '2020-12-03 10:07:52', NULL, NULL, 9, NULL),
(20, 'Departemen Rekrut & Pengembangan', 'HCB', 'Department', '2020-12-03 10:07:52', NULL, NULL, 10, NULL),
(21, 'Departemen GA, IR & Payroll', 'HCB', 'Department', '2020-12-03 10:07:52', NULL, NULL, 10, NULL),
(22, 'Departemen Pengembangan Bisnis & Stratek', 'HCB', 'Department', '2020-12-03 10:07:52', NULL, NULL, 10, NULL),
(23, 'Auditor Keuangan', 'SPI', 'Section', '2020-12-03 10:07:52', NULL, NULL, 4, NULL),
(24, 'Auditor Operasional', 'SPI', 'Section', '2020-12-03 10:07:52', NULL, NULL, 4, NULL),
(25, 'Seksi External Affairs', 'CORSEC', 'Section', '2020-12-03 10:07:52', NULL, NULL, 11, NULL),
(26, 'Seksi Internal Affairs', 'CORSEC', 'Section', '2020-12-03 10:07:52', NULL, NULL, 11, NULL),
(27, 'Seksi Advocation & Compliance', 'CORSEC', 'Section', '2020-12-03 10:07:52', NULL, NULL, 12, NULL),
(28, 'Seksi Contract Administration', 'CORSEC', 'Section', '2020-12-03 10:07:52', NULL, NULL, 12, NULL),
(29, 'Seksi Risk Management', 'CORSEC', 'Section', '2020-12-03 10:07:52', NULL, NULL, 12, NULL),
(30, 'Seksi System & Data Analyst (Quality)', 'QHSSE', 'Section', '2020-12-03 10:07:52', NULL, NULL, 15, NULL),
(31, 'Seksi System & Data Analyst (HSSE & Green)', 'QHSSE', 'Section', '2020-12-03 10:07:52', NULL, NULL, 15, NULL),
(32, 'Seksi Manufaktur & Investasi', 'POB', 'Section', '2020-12-03 10:07:52', NULL, NULL, 7, NULL),
(33, 'Seksi Konstruksi', 'POB', 'Section', '2020-12-03 10:07:52', NULL, NULL, 7, NULL),
(34, 'Seksi Manajemen & Akuntansi Pengolahan Data', 'DAK', 'Section', '2020-12-03 10:07:52', NULL, NULL, 16, NULL),
(35, 'Seksi Verifikasi', 'DAK', 'Section', '2020-12-03 10:07:52', NULL, NULL, 16, NULL),
(36, 'Seksi Analisis Akuntansi & Pelaporan Keuangan', 'DAK', 'Section', '2020-12-03 10:07:52', NULL, NULL, 16, NULL),
(37, 'Seksi Administrasi Aset & Persediaan', 'DAK', 'Section', '2020-12-03 10:07:52', NULL, NULL, 16, NULL),
(38, 'Tax Manager', 'DAK', 'Section', '2020-12-03 10:07:52', NULL, NULL, 17, NULL),
(39, 'Seksi Arsip Keuangan', 'DKU', 'Section', '2020-12-03 10:07:52', NULL, NULL, 18, NULL),
(40, 'Seksi Penagihan & Hutang', 'DKU', 'Section', '2020-12-03 10:07:52', NULL, NULL, 18, NULL),
(41, 'Seksi Pengendalian Anggaran', 'DKU', 'Section', '2020-12-03 10:07:52', NULL, NULL, 19, NULL),
(42, 'Seksi Hubungan Bank & Non Bank', 'DKU', 'Section', '2020-12-03 10:07:52', NULL, NULL, 19, NULL),
(43, 'Seksi Keuangan Anggaran & Likuiditas', 'DKU', 'Section', '2020-12-03 10:07:52', NULL, NULL, 19, NULL),
(44, 'Seksi Perekrutan & Penempatan', 'HCB', 'Section', '2020-12-03 10:07:52', NULL, NULL, 20, NULL),
(45, 'Seksi Pengembangan & Penilaian', 'HCB', 'Section', '2020-12-03 10:07:52', NULL, NULL, 20, NULL),
(46, 'Seksi GA', 'HCB', 'Section', '2020-12-03 10:07:52', NULL, NULL, 21, NULL),
(47, 'Seksi Kepatuhan & Hubungan Industrial', 'HCB', 'Section', '2020-12-03 10:07:52', NULL, NULL, 21, NULL),
(48, 'Seksi Kompensasi & Benefit', 'HCB', 'Section', '2020-12-03 10:07:52', NULL, NULL, 21, NULL),
(49, 'Seksi Pengembangan Bisnis', 'HCB', 'Section', '2020-12-03 10:07:52', NULL, NULL, 22, NULL),
(50, 'Seksi IT, ERP & BIM', 'HCB', 'Section', '2020-12-03 10:07:52', NULL, NULL, 22, NULL),
(51, 'Seksi Strategi. Riset. Teknologi & PMO', 'HCB', 'Section', '2020-12-03 10:07:52', NULL, NULL, 22, NULL),
(52, 'Asisten Direktur Operasional', 'ADO', 'Division', '2020-12-03 10:07:52', NULL, NULL, 3, NULL),
(53, 'Divisi Operasi I', 'OP1', 'Division', '2020-12-03 10:07:52', NULL, NULL, 3, NULL),
(54, 'Divisi Operasi II', 'OP2', 'Division', '2020-12-03 10:07:52', NULL, NULL, 3, NULL),
(55, 'Divisi Operasi III', 'OP3', 'Division', '2020-12-03 10:07:52', NULL, NULL, 3, NULL),
(56, 'Departemen Pemasaran', 'OP1', 'Department', '2020-12-03 10:07:52', NULL, NULL, 53, NULL),
(57, 'Departemen Teknik', 'OP1', 'Department', '2020-12-03 10:07:52', NULL, NULL, 53, NULL),
(58, 'Departemen Operasi', 'OP1', 'Department', '2020-12-03 10:07:52', NULL, NULL, 53, NULL),
(59, 'Departemen Administrasi', 'OP1', 'Department', '2020-12-03 10:07:52', NULL, NULL, 53, NULL),
(60, 'Seksi Pemasaran', 'OP1', 'Section', '2020-12-03 10:07:52', NULL, NULL, 56, NULL),
(61, 'Lead Quantity Surveyor', 'OP1', 'Section', '2020-12-03 10:07:52', NULL, NULL, 57, NULL),
(62, 'Quantity Surveyor Sipil', 'OP1', 'Section', '2020-12-03 10:07:52', NULL, NULL, 61, NULL),
(63, 'Quantity Surveyor MEP', 'OP1', 'Section', '2020-12-03 10:07:52', NULL, NULL, 61, NULL),
(64, 'Quantity Surveyor', 'OP1', 'Section', '2020-12-03 10:07:52', NULL, NULL, 61, NULL),
(65, 'Seksi Metode & Schedule', 'OP1', 'Section', '2020-12-03 10:07:52', NULL, NULL, 57, NULL),
(66, 'Seksi Admin Teknik & PQ', 'OP1', 'Section', '2020-12-03 10:07:52', NULL, NULL, 57, NULL),
(67, 'Seksi QHSSE‐HK', 'OP1', 'Section', '2020-12-03 10:07:52', NULL, NULL, 58, NULL),
(68, 'Seksi PPIC', 'OP1', 'Section', '2020-12-03 10:07:52', NULL, NULL, 58, NULL),
(69, 'Seksi Keuangan & Penagihan', 'OP1', 'Section', '2020-12-03 10:07:52', NULL, NULL, 59, NULL),
(70, 'Seksi Akuntansi, Pajak & Verifikasi', 'OP1', 'Section', '2020-12-03 10:07:52', NULL, NULL, 59, NULL),
(71, 'Seksi GA & HC', 'OP1', 'Section', '2020-12-03 10:07:52', NULL, NULL, 59, NULL),
(72, 'Departemen Pemasaran', 'OP2', 'Department', '2020-12-03 10:07:52', NULL, NULL, 54, NULL),
(73, 'Departemen Teknik', 'OP2', 'Department', '2020-12-03 10:07:52', NULL, NULL, 54, NULL),
(74, 'Departemen Operasi', 'OP2', 'Department', '2020-12-03 10:07:52', NULL, NULL, 54, NULL),
(75, 'Departemen Administrasi', 'OP2', 'Department', '2020-12-03 10:07:52', NULL, NULL, 54, NULL),
(76, 'Seksi Pemasaran', 'OP2', 'Section', '2020-12-03 10:07:52', NULL, NULL, 72, NULL),
(77, 'Lead Quantity Surveyor', 'OP2', 'Section', '2020-12-03 10:07:52', NULL, NULL, 73, NULL),
(78, 'Quantity Surveyor Sipil', 'OP2', 'Section', '2020-12-03 10:07:52', NULL, NULL, 77, NULL),
(79, 'Quantity Surveyor MEP', 'OP2', 'Section', '2020-12-03 10:07:52', NULL, NULL, 77, NULL),
(80, 'Quantity Surveyor', 'OP2', 'Section', '2020-12-03 10:07:52', NULL, NULL, 77, NULL),
(81, 'Seksi Metode & Schedule', 'OP2', 'Section', '2020-12-03 10:07:52', NULL, NULL, 73, NULL),
(82, 'Seksi Admin Teknik & PQ', 'OP2', 'Section', '2020-12-03 10:07:52', NULL, NULL, 73, NULL),
(83, 'Seksi QHSSE‐HK', 'OP2', 'Section', '2020-12-03 10:07:52', NULL, NULL, 74, NULL),
(84, 'Seksi PPIC', 'OP2', 'Section', '2020-12-03 10:07:52', NULL, NULL, 74, NULL),
(85, 'Seksi Keuangan & Penagihan', 'OP2', 'Section', '2020-12-03 10:07:52', NULL, NULL, 75, NULL),
(86, 'Seksi Akuntansi, Pajak & Verifikasi', 'OP2', 'Section', '2020-12-03 10:07:52', NULL, NULL, 75, NULL),
(87, 'Seksi GA & HC', 'OP2', 'Section', '2020-12-03 10:07:52', NULL, NULL, 75, NULL),
(88, 'Departemen Pemasaran', 'OP3', 'Department', '2020-12-03 10:07:52', NULL, NULL, 55, NULL),
(89, 'Departemen Teknik', 'OP3', 'Department', '2020-12-03 10:07:52', NULL, NULL, 55, NULL),
(90, 'Departemen Operasi', 'OP3', 'Department', '2020-12-03 10:07:52', NULL, NULL, 55, NULL),
(91, 'Departemen Administrasi', 'OP3', 'Department', '2020-12-03 10:07:52', NULL, NULL, 55, NULL),
(92, 'Seksi Pemasaran', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 88, NULL),
(93, 'Lead Quantity Surveyor', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 89, NULL),
(94, 'Quantity Surveyor Sipil', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 93, NULL),
(95, 'Quantity Surveyor MEP', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 93, NULL),
(96, 'Quantity Surveyor', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 93, NULL),
(97, 'Seksi Metode & Schedule', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 89, NULL),
(98, 'Seksi Admin Teknik & PQ', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 89, NULL),
(99, 'Seksi QHSSE‐HK', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 90, NULL),
(100, 'Seksi PPIC', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 90, NULL),
(101, 'Seksi Keuangan & Penagihan', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 91, NULL),
(102, 'Seksi Akuntansi, Pajak & Verifikasi', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 91, NULL),
(103, 'Seksi GA & HC', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 91, NULL),
(104, 'Seksi Engineering', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 89, NULL),
(105, 'Workshop I', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 90, NULL),
(106, 'Workshop II', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 90, NULL),
(107, 'Seksi Bisnis Peralatan', 'OP3', 'Section', '2020-12-03 10:07:52', NULL, NULL, 90, NULL),
(108, 'Project Manager', 'P. JG PUPR (OP1)', 'Project', '2020-12-03 10:07:52', NULL, NULL, 58, NULL),
(109, 'Site Operation Manager', 'P. JG PUPR (OP1)', 'Project', '2020-12-03 10:07:52', NULL, NULL, 108, NULL),
(110, 'Site Engineer Manager', 'P. JG PUPR (OP1)', 'Project', '2020-12-03 10:07:52', NULL, NULL, 108, NULL),
(111, 'Site Administration Manager', 'P. JG PUPR (OP1)', 'Project', '2020-12-03 10:07:52', NULL, NULL, 108, NULL),
(112, 'Quality', 'P. JG PUPR (OP1)', 'Project', '2020-12-03 10:07:52', NULL, NULL, 108, NULL),
(113, 'HSSE', 'P. JG PUPR (OP1)', 'Project', '2020-12-03 10:07:52', NULL, NULL, 108, NULL),
(114, 'General Manager', 'P. Pulo Jahe (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 58, NULL),
(115, 'Project Manager', 'P. Pulo Jahe (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 114, NULL),
(116, 'Site Operation Manager', 'P. Pulo Jahe (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 115, NULL),
(117, 'Site Engineer Manager', 'P. Pulo Jahe (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 115, NULL),
(118, 'Site Administration Manager', 'P. Pulo Jahe (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 115, NULL),
(119, 'Quality', 'P. Pulo Jahe (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 115, NULL),
(120, 'HSSE', 'P. Pulo Jahe (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 115, NULL),
(121, 'Project Manager', 'P. Tol Trans Sumatera (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 58, NULL),
(122, 'Site Operation Manager', 'P. Tol Trans Sumatera (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 121, NULL),
(123, 'Site Engineer Manager', 'P. Tol Trans Sumatera (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 121, NULL),
(124, 'Site Administration Manager', 'P. Tol Trans Sumatera (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 121, NULL),
(125, 'Quality', 'P. Tol Trans Sumatera (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 121, NULL),
(126, 'HSSE', 'P. Tol Trans Sumatera (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 121, NULL),
(127, 'General Manager', 'P. BSN (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 58, NULL),
(128, 'Project Manager', 'P. BSN (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 127, NULL),
(129, 'Site Operation Manager', 'P. BSN (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 128, NULL),
(130, 'Site Engineer Manager', 'P. BSN (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 128, NULL),
(131, 'Site Administration Manager', 'P. BSN (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 128, NULL),
(132, 'Quality', 'P. BSN (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 128, NULL),
(133, 'HSSE', 'P. BSN (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 128, NULL),
(134, 'Project Manager', 'P. KBB (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 58, NULL),
(135, 'Site Operation Manager', 'P. KBB (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 134, NULL),
(136, 'Site Engineer Manager', 'P. KBB (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 134, NULL),
(137, 'Site Administration Manager', 'P. KBB (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 134, NULL),
(138, 'Quality', 'P. KBB (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 134, NULL),
(139, 'HSSE', 'P. KBB (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 134, NULL),
(140, 'Project Manager', 'P. Dahana (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 58, NULL),
(141, 'Site Operation Manager', 'P. Dahana (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 140, NULL),
(142, 'Site Engineer Manager', 'P. Dahana (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 140, NULL),
(143, 'Site Administration Manager', 'P. Dahana (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 140, NULL),
(144, 'Quality', 'P. Dahana (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 140, NULL),
(145, 'HSSE', 'P. Dahana (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 140, NULL),
(146, 'Project Manager', 'P. Ciks Mansion (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 58, NULL),
(147, 'Site Operation Manager', 'P. Ciks Mansion (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 146, NULL),
(148, 'Site Engineer Manager', 'P. Ciks Mansion (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 146, NULL),
(149, 'Site Administration Manager', 'P. Ciks Mansion (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 146, NULL),
(150, 'Quality', 'P. Ciks Mansion (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 146, NULL),
(151, 'HSSE', 'P. Ciks Mansion (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 146, NULL),
(152, 'Project Manager', 'P. Depo LRT (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 58, NULL),
(153, 'Construction Manager', 'P. Depo LRT (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 152, NULL),
(154, 'Site Administration Manager', 'P. Depo LRT (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 152, NULL),
(155, 'Quality', 'P. Depo LRT (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 152, NULL),
(156, 'HSSE', 'P. Depo LRT (OP1)', '', '2020-12-03 10:07:52', NULL, NULL, 152, NULL),
(157, 'Project Manager', 'P.Cargo Juanda (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 74, NULL),
(158, 'Site Operation Manager', 'P.Cargo Juanda (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 157, NULL),
(159, 'Site Engineer Manager', 'P.Cargo Juanda (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 157, NULL),
(160, 'Site Administration Manager', 'P.Cargo Juanda (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 157, NULL),
(161, 'Quality', 'P.Cargo Juanda (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 157, NULL),
(162, 'HSSE', 'P.Cargo Juanda (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 157, NULL),
(163, 'General Manager', 'P.Teluk Lamong (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 74, NULL),
(164, 'Project Manager', 'P.Teluk Lamong (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 163, NULL),
(165, 'Site Operation Manager', 'P.Teluk Lamong (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 164, NULL),
(166, 'Site Engineer Manager', 'P.Teluk Lamong (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 164, NULL),
(167, 'Site Administration Manager', 'P.Teluk Lamong (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 164, NULL),
(168, 'Quality', 'P.Teluk Lamong (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 164, NULL),
(169, 'HSSE', 'P.Teluk Lamong (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 164, NULL),
(170, 'Project Manager', 'P. Bandara Ambon (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 74, NULL),
(171, 'Construction Manager', 'P. Bandara Ambon (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 170, NULL),
(172, 'Site Operation Manager', 'P. Bandara Ambon (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 170, NULL),
(173, 'Site Engineer Manager', 'P. Bandara Ambon (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 170, NULL),
(174, 'Site Administration Manager', 'P. Bandara Ambon (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 170, NULL),
(175, 'Quality', 'P. Bandara Ambon (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 170, NULL),
(176, 'HSSE', 'P. Bandara Ambon (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 170, NULL),
(177, 'Project Manager', 'P. GOR UNJ (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 74, NULL),
(178, 'Site Operation Manager', 'P. GOR UNJ (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 177, NULL),
(179, 'Site Engineer Manager', 'P. GOR UNJ (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 177, NULL),
(180, 'Site Administration Manager', 'P. GOR UNJ (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 177, NULL),
(181, 'Quality', 'P. GOR UNJ (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 177, NULL),
(182, 'HSSE', 'P. GOR UNJ (OP2)', '', '2020-12-03 10:07:52', NULL, NULL, 177, NULL),
(183, 'Project Manager', 'P. Tangki Cilacap (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 90, NULL),
(184, 'Site Operation Manager', 'P. Tangki Cilacap (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 183, NULL),
(185, 'Site Engineer Manager', 'P. Tangki Cilacap (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 183, NULL),
(186, 'Site Administration Manager', 'P. Tangki Cilacap (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 183, NULL),
(187, 'Quality', 'P. Tangki Cilacap (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 183, NULL),
(188, 'HSSE', 'P. Tangki Cilacap (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 183, NULL),
(189, 'General Manager', 'P. Peusangan (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 90, NULL),
(190, 'Project Manager', 'P. Peusangan (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 189, NULL),
(191, 'Site Operation Manager', 'P. Peusangan (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 190, NULL),
(192, 'Site Engineer Manager', 'P. Peusangan (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 190, NULL),
(193, 'Site Administration Manager', 'P. Peusangan (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 190, NULL),
(194, 'Quality', 'P. Peusangan (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 190, NULL),
(195, 'HSSE', 'P. Peusangan (OP3)', '', '2020-12-03 10:07:52', NULL, NULL, 190, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `short_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Afghanistan', 'af', NULL, NULL, NULL),
(2, 'Albania', 'al', NULL, NULL, NULL),
(3, 'Algeria', 'dz', NULL, NULL, NULL),
(4, 'American Samoa', 'as', NULL, NULL, NULL),
(5, 'Andorra', 'ad', NULL, NULL, NULL),
(6, 'Angola', 'ao', NULL, NULL, NULL),
(7, 'Anguilla', 'ai', NULL, NULL, NULL),
(8, 'Antarctica', 'aq', NULL, NULL, NULL),
(9, 'Antigua and Barbuda', 'ag', NULL, NULL, NULL),
(10, 'Argentina', 'ar', NULL, NULL, NULL),
(11, 'Armenia', 'am', NULL, NULL, NULL),
(12, 'Aruba', 'aw', NULL, NULL, NULL),
(13, 'Australia', 'au', NULL, NULL, NULL),
(14, 'Austria', 'at', NULL, NULL, NULL),
(15, 'Azerbaijan', 'az', NULL, NULL, NULL),
(16, 'Bahamas', 'bs', NULL, NULL, NULL),
(17, 'Bahrain', 'bh', NULL, NULL, NULL),
(18, 'Bangladesh', 'bd', NULL, NULL, NULL),
(19, 'Barbados', 'bb', NULL, NULL, NULL),
(20, 'Belarus', 'by', NULL, NULL, NULL),
(21, 'Belgium', 'be', NULL, NULL, NULL),
(22, 'Belize', 'bz', NULL, NULL, NULL),
(23, 'Benin', 'bj', NULL, NULL, NULL),
(24, 'Bermuda', 'bm', NULL, NULL, NULL),
(25, 'Bhutan', 'bt', NULL, NULL, NULL),
(26, 'Bolivia', 'bo', NULL, NULL, NULL),
(27, 'Bosnia and Herzegovina', 'ba', NULL, NULL, NULL),
(28, 'Botswana', 'bw', NULL, NULL, NULL),
(29, 'Brazil', 'br', NULL, NULL, NULL),
(30, 'British Indian Ocean Territory', 'io', NULL, NULL, NULL),
(31, 'British Virgin Islands', 'vg', NULL, NULL, NULL),
(32, 'Brunei', 'bn', NULL, NULL, NULL),
(33, 'Bulgaria', 'bg', NULL, NULL, NULL),
(34, 'Burkina Faso', 'bf', NULL, NULL, NULL),
(35, 'Burundi', 'bi', NULL, NULL, NULL),
(36, 'Cambodia', 'kh', NULL, NULL, NULL),
(37, 'Cameroon', 'cm', NULL, NULL, NULL),
(38, 'Canada', 'ca', NULL, NULL, NULL),
(39, 'Cape Verde', 'cv', NULL, NULL, NULL),
(40, 'Cayman Islands', 'ky', NULL, NULL, NULL),
(41, 'Central African Republic', 'cf', NULL, NULL, NULL),
(42, 'Chad', 'td', NULL, NULL, NULL),
(43, 'Chile', 'cl', NULL, NULL, NULL),
(44, 'China', 'cn', NULL, NULL, NULL),
(45, 'Christmas Island', 'cx', NULL, NULL, NULL),
(46, 'Cocos Islands', 'cc', NULL, NULL, NULL),
(47, 'Colombia', 'co', NULL, NULL, NULL),
(48, 'Comoros', 'km', NULL, NULL, NULL),
(49, 'Cook Islands', 'ck', NULL, NULL, NULL),
(50, 'Costa Rica', 'cr', NULL, NULL, NULL),
(51, 'Croatia', 'hr', NULL, NULL, NULL),
(52, 'Cuba', 'cu', NULL, NULL, NULL),
(53, 'Curacao', 'cw', NULL, NULL, NULL),
(54, 'Cyprus', 'cy', NULL, NULL, NULL),
(55, 'Czech Republic', 'cz', NULL, NULL, NULL),
(56, 'Democratic Republic of the Congo', 'cd', NULL, NULL, NULL),
(57, 'Denmark', 'dk', NULL, NULL, NULL),
(58, 'Djibouti', 'dj', NULL, NULL, NULL),
(59, 'Dominica', 'dm', NULL, NULL, NULL),
(60, 'Dominican Republic', 'do', NULL, NULL, NULL),
(61, 'East Timor', 'tl', NULL, NULL, NULL),
(62, 'Ecuador', 'ec', NULL, NULL, NULL),
(63, 'Egypt', 'eg', NULL, NULL, NULL),
(64, 'El Salvador', 'sv', NULL, NULL, NULL),
(65, 'Equatorial Guinea', 'gq', NULL, NULL, NULL),
(66, 'Eritrea', 'er', NULL, NULL, NULL),
(67, 'Estonia', 'ee', NULL, NULL, NULL),
(68, 'Ethiopia', 'et', NULL, NULL, NULL),
(69, 'Falkland Islands', 'fk', NULL, NULL, NULL),
(70, 'Faroe Islands', 'fo', NULL, NULL, NULL),
(71, 'Fiji', 'fj', NULL, NULL, NULL),
(72, 'Finland', 'fi', NULL, NULL, NULL),
(73, 'France', 'fr', NULL, NULL, NULL),
(74, 'French Polynesia', 'pf', NULL, NULL, NULL),
(75, 'Gabon', 'ga', NULL, NULL, NULL),
(76, 'Gambia', 'gm', NULL, NULL, NULL),
(77, 'Georgia', 'ge', NULL, NULL, NULL),
(78, 'Germany', 'de', NULL, NULL, NULL),
(79, 'Ghana', 'gh', NULL, NULL, NULL),
(80, 'Gibraltar', 'gi', NULL, NULL, NULL),
(81, 'Greece', 'gr', NULL, NULL, NULL),
(82, 'Greenland', 'gl', NULL, NULL, NULL),
(83, 'Grenada', 'gd', NULL, NULL, NULL),
(84, 'Guam', 'gu', NULL, NULL, NULL),
(85, 'Guatemala', 'gt', NULL, NULL, NULL),
(86, 'Guernsey', 'gg', NULL, NULL, NULL),
(87, 'Guinea', 'gn', NULL, NULL, NULL),
(88, 'Guinea-Bissau', 'gw', NULL, NULL, NULL),
(89, 'Guyana', 'gy', NULL, NULL, NULL),
(90, 'Haiti', 'ht', NULL, NULL, NULL),
(91, 'Honduras', 'hn', NULL, NULL, NULL),
(92, 'Hong Kong', 'hk', NULL, NULL, NULL),
(93, 'Hungary', 'hu', NULL, NULL, NULL),
(94, 'Iceland', 'is', NULL, NULL, NULL),
(95, 'India', 'in', NULL, NULL, NULL),
(96, 'Indonesia', 'id', NULL, NULL, NULL),
(97, 'Iran', 'ir', NULL, NULL, NULL),
(98, 'Iraq', 'iq', NULL, NULL, NULL),
(99, 'Ireland', 'ie', NULL, NULL, NULL),
(100, 'Isle of Man', 'im', NULL, NULL, NULL),
(101, 'Israel', 'il', NULL, NULL, NULL),
(102, 'Italy', 'it', NULL, NULL, NULL),
(103, 'Ivory Coast', 'ci', NULL, NULL, NULL),
(104, 'Jamaica', 'jm', NULL, NULL, NULL),
(105, 'Japan', 'jp', NULL, NULL, NULL),
(106, 'Jersey', 'je', NULL, NULL, NULL),
(107, 'Jordan', 'jo', NULL, NULL, NULL),
(108, 'Kazakhstan', 'kz', NULL, NULL, NULL),
(109, 'Kenya', 'ke', NULL, NULL, NULL),
(110, 'Kiribati', 'ki', NULL, NULL, NULL),
(111, 'Kosovo', 'xk', NULL, NULL, NULL),
(112, 'Kuwait', 'kw', NULL, NULL, NULL),
(113, 'Kyrgyzstan', 'kg', NULL, NULL, NULL),
(114, 'Laos', 'la', NULL, NULL, NULL),
(115, 'Latvia', 'lv', NULL, NULL, NULL),
(116, 'Lebanon', 'lb', NULL, NULL, NULL),
(117, 'Lesotho', 'ls', NULL, NULL, NULL),
(118, 'Liberia', 'lr', NULL, NULL, NULL),
(119, 'Libya', 'ly', NULL, NULL, NULL),
(120, 'Liechtenstein', 'li', NULL, NULL, NULL),
(121, 'Lithuania', 'lt', NULL, NULL, NULL),
(122, 'Luxembourg', 'lu', NULL, NULL, NULL),
(123, 'Macau', 'mo', NULL, NULL, NULL),
(124, 'Macedonia', 'mk', NULL, NULL, NULL),
(125, 'Madagascar', 'mg', NULL, NULL, NULL),
(126, 'Malawi', 'mw', NULL, NULL, NULL),
(127, 'Malaysia', 'my', NULL, NULL, NULL),
(128, 'Maldives', 'mv', NULL, NULL, NULL),
(129, 'Mali', 'ml', NULL, NULL, NULL),
(130, 'Malta', 'mt', NULL, NULL, NULL),
(131, 'Marshall Islands', 'mh', NULL, NULL, NULL),
(132, 'Mauritania', 'mr', NULL, NULL, NULL),
(133, 'Mauritius', 'mu', NULL, NULL, NULL),
(134, 'Mayotte', 'yt', NULL, NULL, NULL),
(135, 'Mexico', 'mx', NULL, NULL, NULL),
(136, 'Micronesia', 'fm', NULL, NULL, NULL),
(137, 'Moldova', 'md', NULL, NULL, NULL),
(138, 'Monaco', 'mc', NULL, NULL, NULL),
(139, 'Mongolia', 'mn', NULL, NULL, NULL),
(140, 'Montenegro', 'me', NULL, NULL, NULL),
(141, 'Montserrat', 'ms', NULL, NULL, NULL),
(142, 'Morocco', 'ma', NULL, NULL, NULL),
(143, 'Mozambique', 'mz', NULL, NULL, NULL),
(144, 'Myanmar', 'mm', NULL, NULL, NULL),
(145, 'Namibia', 'na', NULL, NULL, NULL),
(146, 'Nauru', 'nr', NULL, NULL, NULL),
(147, 'Nepal', 'np', NULL, NULL, NULL),
(148, 'Netherlands', 'nl', NULL, NULL, NULL),
(149, 'Netherlands Antilles', 'an', NULL, NULL, NULL),
(150, 'New Caledonia', 'nc', NULL, NULL, NULL),
(151, 'New Zealand', 'nz', NULL, NULL, NULL),
(152, 'Nicaragua', 'ni', NULL, NULL, NULL),
(153, 'Niger', 'ne', NULL, NULL, NULL),
(154, 'Nigeria', 'ng', NULL, NULL, NULL),
(155, 'Niue', 'nu', NULL, NULL, NULL),
(156, 'North Korea', 'kp', NULL, NULL, NULL),
(157, 'Northern Mariana Islands', 'mp', NULL, NULL, NULL),
(158, 'Norway', 'no', NULL, NULL, NULL),
(159, 'Oman', 'om', NULL, NULL, NULL),
(160, 'Pakistan', 'pk', NULL, NULL, NULL),
(161, 'Palau', 'pw', NULL, NULL, NULL),
(162, 'Palestine', 'ps', NULL, NULL, NULL),
(163, 'Panama', 'pa', NULL, NULL, NULL),
(164, 'Papua New Guinea', 'pg', NULL, NULL, NULL),
(165, 'Paraguay', 'py', NULL, NULL, NULL),
(166, 'Peru', 'pe', NULL, NULL, NULL),
(167, 'Philippines', 'ph', NULL, NULL, NULL),
(168, 'Pitcairn', 'pn', NULL, NULL, NULL),
(169, 'Poland', 'pl', NULL, NULL, NULL),
(170, 'Portugal', 'pt', NULL, NULL, NULL),
(171, 'Puerto Rico', 'pr', NULL, NULL, NULL),
(172, 'Qatar', 'qa', NULL, NULL, NULL),
(173, 'Republic of the Congo', 'cg', NULL, NULL, NULL),
(174, 'Reunion', 're', NULL, NULL, NULL),
(175, 'Romania', 'ro', NULL, NULL, NULL),
(176, 'Russia', 'ru', NULL, NULL, NULL),
(177, 'Rwanda', 'rw', NULL, NULL, NULL),
(178, 'Saint Barthelemy', 'bl', NULL, NULL, NULL),
(179, 'Saint Helena', 'sh', NULL, NULL, NULL),
(180, 'Saint Kitts and Nevis', 'kn', NULL, NULL, NULL),
(181, 'Saint Lucia', 'lc', NULL, NULL, NULL),
(182, 'Saint Martin', 'mf', NULL, NULL, NULL),
(183, 'Saint Pierre and Miquelon', 'pm', NULL, NULL, NULL),
(184, 'Saint Vincent and the Grenadines', 'vc', NULL, NULL, NULL),
(185, 'Samoa', 'ws', NULL, NULL, NULL),
(186, 'San Marino', 'sm', NULL, NULL, NULL),
(187, 'Sao Tome and Principe', 'st', NULL, NULL, NULL),
(188, 'Saudi Arabia', 'sa', NULL, NULL, NULL),
(189, 'Senegal', 'sn', NULL, NULL, NULL),
(190, 'Serbia', 'rs', NULL, NULL, NULL),
(191, 'Seychelles', 'sc', NULL, NULL, NULL),
(192, 'Sierra Leone', 'sl', NULL, NULL, NULL),
(193, 'Singapore', 'sg', NULL, NULL, NULL),
(194, 'Sint Maarten', 'sx', NULL, NULL, NULL),
(195, 'Slovakia', 'sk', NULL, NULL, NULL),
(196, 'Slovenia', 'si', NULL, NULL, NULL),
(197, 'Solomon Islands', 'sb', NULL, NULL, NULL),
(198, 'Somalia', 'so', NULL, NULL, NULL),
(199, 'South Africa', 'za', NULL, NULL, NULL),
(200, 'South Korea', 'kr', NULL, NULL, NULL),
(201, 'South Sudan', 'ss', NULL, NULL, NULL),
(202, 'Spain', 'es', NULL, NULL, NULL),
(203, 'Sri Lanka', 'lk', NULL, NULL, NULL),
(204, 'Sudan', 'sd', NULL, NULL, NULL),
(205, 'Suriname', 'sr', NULL, NULL, NULL),
(206, 'Svalbard and Jan Mayen', 'sj', NULL, NULL, NULL),
(207, 'Swaziland', 'sz', NULL, NULL, NULL),
(208, 'Sweden', 'se', NULL, NULL, NULL),
(209, 'Switzerland', 'ch', NULL, NULL, NULL),
(210, 'Syria', 'sy', NULL, NULL, NULL),
(211, 'Taiwan', 'tw', NULL, NULL, NULL),
(212, 'Tajikistan', 'tj', NULL, NULL, NULL),
(213, 'Tanzania', 'tz', NULL, NULL, NULL),
(214, 'Thailand', 'th', NULL, NULL, NULL),
(215, 'Togo', 'tg', NULL, NULL, NULL),
(216, 'Tokelau', 'tk', NULL, NULL, NULL),
(217, 'Tonga', 'to', NULL, NULL, NULL),
(218, 'Trinidad and Tobago', 'tt', NULL, NULL, NULL),
(219, 'Tunisia', 'tn', NULL, NULL, NULL),
(220, 'Turkey', 'tr', NULL, NULL, NULL),
(221, 'Turkmenistan', 'tm', NULL, NULL, NULL),
(222, 'Turks and Caicos Islands', 'tc', NULL, NULL, NULL),
(223, 'Tuvalu', 'tv', NULL, NULL, NULL),
(224, 'U.S. Virgin Islands', 'vi', NULL, NULL, NULL),
(225, 'Uganda', 'ug', NULL, NULL, NULL),
(226, 'Ukraine', 'ua', NULL, NULL, NULL),
(227, 'United Arab Emirates', 'ae', NULL, NULL, NULL),
(228, 'United Kingdom', 'gb', NULL, NULL, NULL),
(229, 'United States', 'us', NULL, NULL, NULL),
(230, 'Uruguay', 'uy', NULL, NULL, NULL),
(231, 'Uzbekistan', 'uz', NULL, NULL, NULL),
(232, 'Vanuatu', 'vu', NULL, NULL, NULL),
(233, 'Vatican', 'va', NULL, NULL, NULL),
(234, 'Venezuela', 've', NULL, NULL, NULL),
(235, 'Vietnam', 'vn', NULL, NULL, NULL),
(236, 'Wallis and Futuna', 'wf', NULL, NULL, NULL),
(237, 'Western Sahara', 'eh', NULL, NULL, NULL),
(238, 'Yemen', 'ye', NULL, NULL, NULL),
(239, 'Zambia', 'zm', NULL, NULL, NULL),
(240, 'Zimbabwe', 'zw', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `trainer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainer_info` longtext COLLATE utf8mb4_unicode_ci,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` double(15,2) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `coordinator_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contacts`
--

CREATE TABLE `emergency_contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `employee_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joined_date` date DEFAULT NULL,
  `confirmation_date` date DEFAULT NULL,
  `terminate_date` date DEFAULT NULL,
  `address_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_decree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `job_title_id` bigint UNSIGNED DEFAULT NULL,
  `department_id` bigint UNSIGNED DEFAULT NULL,
  `country_id` bigint UNSIGNED DEFAULT NULL,
  `nationality_id` bigint UNSIGNED DEFAULT NULL,
  `province_id` bigint UNSIGNED DEFAULT NULL,
  `supervisor_id` bigint UNSIGNED DEFAULT NULL,
  `indirect_supervisors_id` bigint UNSIGNED DEFAULT NULL,
  `indirect_supervisors2_id` bigint UNSIGNED DEFAULT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL,
  `employment_status_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_number`, `first_name`, `middle_name`, `last_name`, `birthday`, `gender`, `marital_status`, `id_card`, `joined_date`, `confirmation_date`, `terminate_date`, `address_1`, `address_2`, `city`, `home_phone`, `mobile_phone`, `work_phone`, `work_email`, `private_email`, `front_title`, `back_title`, `birth_place`, `religion`, `blood_type`, `postal_code`, `number_decree`, `status`, `created_at`, `updated_at`, `deleted_at`, `job_title_id`, `department_id`, `country_id`, `nationality_id`, `province_id`, `supervisor_id`, `indirect_supervisors_id`, `indirect_supervisors2_id`, `created_by_id`, `employment_status_id`) VALUES
(1, '971002053', 'BRISBEN', '', 'RASYID', '1971-11-03', 'Male', NULL, '', '1997-03-10', NULL, NULL, '-PERUMAHAN DUTA HARAPAN, JL. DUTA HARAPAN VIII  NO.3', '', '', '', '8129992144', '', 'bbrasyid@amka.co.id', NULL, 'Ir.', 'SH MH CLA', 'KOTA PALEMBANG', 'Islam', 'A', '17123', '64/KPTS/X-1999', '', '2020-12-03 08:19:43', NULL, NULL, 5, 5, 0, 0, 0, NULL, NULL, NULL, 1, 1),
(2, '942143040', 'WALUYO  ', 'EDI', 'SUWARNO', '1971-10-21', 'Male', NULL, '', '1994-05-16', NULL, NULL, 'Taman Kintamani Blok F.1 No. 12 RT 011 RW 008', '', '', '', '8111115719', '', 'waluyo@amka.co.id', NULL, '', 'SE', 'KABUPATEN LAMONGAN', 'Islam', 'O', '17510', '128/KPTS/IX-1998', '', '2020-12-03 08:19:43', NULL, NULL, 11, 11, 0, 0, 0, 1, NULL, NULL, 1, 1),
(3, '192109193', 'HILMI ', 'DZAKWAN SHODIQ ', 'HABIBULLOH', '1995-01-11', 'Male', NULL, '', '2019-01-21', NULL, NULL, 'KOMP. PERMATA BIRU BLOK K NO.78C. ', '', '', '', '8221404115', '', NULL, 'dzakwan.hilmi@gmail.com', '', 'S.I.Kom', 'KABUPATEN GARUT', 'Islam', 'O', '40624', '', '', '2020-12-03 08:19:43', NULL, NULL, 54, 25, 0, 0, 0, 2, 1, NULL, 1, 1),
(4, '142117090', 'RETNO  ', 'TRI', 'LUCKYTASARI', '1990-08-15', 'Female', NULL, '', '2014-06-01', NULL, NULL, 'JL.SULTAN AGUNG, NO.01', '', '', '', '82114404810', '', NULL, 'rtls_90@yahoo.com', '', 'SE', 'KOTA JAKARTA BARAT', 'Islam', 'B', '17132', '15/KPTS/V-2014', '', '2020-12-03 08:19:43', NULL, NULL, 55, 26, 0, 0, 0, 2, 1, NULL, 1, 1),
(5, '172091106', 'REMO ', '', 'SANTOSO', '1987-03-03', 'Male', NULL, '', '2017-09-04', NULL, NULL, 'Jl.Nusantara No.222', '', '', '', '89614737544', '', NULL, 'bobbyremo87@gmail.com', '', 'S.H', 'KOTA JAKARTA PUSAT', 'Islam', 'B', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 12, 12, 0, 0, 0, 1, NULL, NULL, 1, 1),
(6, '191001220', 'DWI ', '', 'HARYANTO', '1996-09-05', 'Male', NULL, '', '2019-08-16', NULL, NULL, 'Surabaya', '', '', '', '', '', NULL, NULL, '', '', 'KABUPATEN SIDOARJO', 'Islam', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 57, 28, 0, 0, 0, 5, 1, NULL, 1, 1),
(7, '952143047', 'ROKHIMIN', '', '', '1967-11-12', 'Male', NULL, '', '1995-05-04', NULL, NULL, 'Graha Prima Blok G No. 103 ', '', '', '', '82128888704', '', 'rokhimin@amka.co.id', NULL, '', 'SE', 'KABUPATEN BREBES', 'Islam', 'B', '17510', '79/KPTS/VIII-1996', '', '2020-12-03 08:19:43', NULL, NULL, 4, 4, 0, 0, 0, NULL, NULL, NULL, 1, 1),
(8, '931010033', 'SYAHRIZAL', '', '', '1969-09-29', 'Male', NULL, '', '1993-07-01', NULL, NULL, 'TAMAN BEKASI ASRI Blok I N0. 9', '', '', '', '85310198545', '', NULL, 'dedex_rizal@yahoo.com', '', 'ST', 'KABUPATEN PIDIE', 'Islam', 'A', '17115', '127/KPTS/XI-1994', '', '2020-12-03 08:19:43', NULL, NULL, 24, 24, 0, 0, 0, 7, NULL, NULL, 1, 1),
(9, '181003159', 'WILDAN  ', 'MUKHOLADUN', 'WAHYUDI', '1995-05-17', 'Male', NULL, '', '2018-04-23', NULL, NULL, 'Jambi', '', '', '', '81217188708', '', NULL, 'wmukholadun8@gmail.com', 'Mr', 'S.T', 'KABUPATEN MUARO JAMBI', 'Islam', 'A', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 53, 24, 0, 0, 0, 8, 7, NULL, 1, 1),
(10, '182117139', 'EDWIN  ', 'QUIRIRA', 'ZOLANDRE', '1993-08-25', 'Male', NULL, '', '2018-01-29', NULL, NULL, 'SURAKARTA', '', '', '', '', '', NULL, NULL, '', '', 'KOTA MADIUN', 'Islam', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 52, 23, 0, 0, 0, 7, NULL, NULL, 1, 1),
(11, '961001052', 'HUGENG ', '', 'RIHADI', '1971-11-26', 'Male', NULL, '', '1996-07-01', NULL, NULL, 'Jl. Mutiara I No.6 AA Komp. Bumi Serdang Damai', '', '', '', '81227113685', '', NULL, 'hrihadi@yahoo.com', '', 'A.Md', 'KOTA MEDAN', 'Islam', 'B', '20361', '030/KPTS/X-2000', '', '2020-12-03 08:19:43', NULL, NULL, 53, 24, 0, 0, 0, 9, 7, NULL, 1, 1),
(12, '011001058', 'IMELDA  ', 'CATHERINE', 'M', '1976-07-28', 'Female', NULL, '', '2001-09-01', NULL, NULL, 'Citra Indah Bukit Mahoni Blok T02-37 ', '', '', '', '8118701157', '', 'catherine@amka.co.id', NULL, '', 'ST', 'KABUPATEN BANDUNG', 'Katolik', 'AB', '16830', '48/KPTS/X-2002', '', '2020-12-03 08:19:43', NULL, NULL, 7, 7, 0, 0, 0, NULL, NULL, NULL, 1, 1),
(13, '061010080', 'AKBAR ', '', 'AMINUDIN', '1982-06-12', 'Male', NULL, '', '2006-03-27', NULL, NULL, 'Perumahan Vida Bumipala Bekasi, Jl, Taman Apel Hijau, Blok A 17 No 41. ', '', '', '', '82220753760', '', NULL, 'akbar.taz82@gmail.com', '', 'ST', 'KOTA JAKARTA PUSAT', 'Islam', 'A +', '', '36/KPTS/IV-2008', '', '2020-12-03 08:19:43', NULL, NULL, 32, 32, 0, 0, 0, 12, NULL, NULL, 1, 1),
(14, '191002210', 'MUHAMAD ', '', 'FAJAR', '1995-03-09', 'Male', NULL, '', '2019-07-29', NULL, NULL, 'Bekasi', '', '', '', '', '', NULL, NULL, '', '', 'KOTA JAKARTA TIMUR', 'Islam', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 63, 32, 0, 0, 0, 13, 12, NULL, 1, 1),
(15, '191001213', 'MARJUNI  ', 'DWI', 'PRASETYA', '1993-06-08', 'Male', NULL, '', '2019-07-29', NULL, NULL, 'Yogyakarta', '', '', '', '', '', NULL, NULL, '', '', 'KABUPATEN BANTUL', 'Islam', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 64, 33, 0, 0, 0, 12, NULL, NULL, 1, 1),
(16, '941002038', 'AGUS ', '', 'ISNANDITO', '1967-08-14', 'Male', NULL, '', '1994-01-03', NULL, NULL, 'Griya Alam Sentosa R10  no. 5', '', '', '', '81287751837', '', 'agus.isnandito@amka.co.id', NULL, 'Ir.', 'M.Tech', 'KOTA SEMARANG', 'Islam', 'B', '16820', '116/KPTS/XII-1995', '', '2020-12-03 08:19:43', NULL, NULL, 6, 6, 0, 0, 0, NULL, NULL, NULL, 1, 1),
(17, '052174078', 'ARI  ', 'MAYA', 'WULANTARA', '1975-06-30', 'Male', NULL, '', '2005-03-20', NULL, NULL, 'Sarana Indah Permai, Jl. Anggur I Blok C4/14RT O5 RW 08 Kel. Kedaung Kec. PamulangTangerang Seltan', '', '', '', '82297534006', '', 'arimayawulantara@amka.co.id', NULL, '', 'S.KOM', 'KOTA PEKANBARU', 'Islam', 'B', '15415', '28/KPTS/IV-2008', '', '2020-12-03 08:19:43', NULL, NULL, 59, 13, 0, 0, 0, 16, NULL, NULL, 1, 1),
(18, '042174075', 'YUSUF ', '', 'ASHARI', '1977-10-18', 'Male', NULL, '', '2004-03-15', NULL, NULL, 'Jl. Pendidikan II Gg. Swadaya V No. 6', '', '', '', '81398756285', '', NULL, 'yusuf_hari@yahoo.com', '', 'ST', 'KOTA JAKARTA TIMUR', 'Islam', 'O', '17510', '66/KPTS/III-2007', '', '2020-12-03 08:19:43', NULL, NULL, 60, 14, 0, 0, 0, 16, NULL, NULL, 1, 1),
(19, '011001062', 'BAYU  ', 'ANGIN', 'M', '1976-02-25', 'Male', NULL, '', '2001-09-03', NULL, NULL, 'CITRA INDAH, BUKIT ALAMANDA, V9/27', '', '', '', '8119200527', '', 'bayu@amka.co.id', NULL, '', 'ST', 'KABUPATEN KENDAL', 'Islam', 'B', '', '81/KPTS/XII-2003', '', '2020-12-03 08:19:43', NULL, NULL, 15, 15, 0, 0, 0, 16, NULL, NULL, 1, 1),
(20, '951002048', 'ARIS ', '', 'HERMAWAN', '1971-06-29', 'Male', NULL, '', '1995-05-05', NULL, NULL, 'Bekasi regency 1 blok C3 no17-18 rt 05 rw 03 wonosari cibitung bekasi', '', '', '', '81380467442', '', NULL, 'arishermawan@gmail.co.id', '', 'Amd', 'KABUPATEN BLORA', 'Islam', 'B', '17520', '69/KPTS/VII-1997', '', '2020-12-03 08:19:43', NULL, NULL, 30, 30, 0, 0, 0, 19, 16, NULL, 1, 1),
(21, '952114049', 'SRI ', '', 'WARDHANA', '1970-12-29', 'Male', NULL, '', '1995-05-08', NULL, NULL, 'Jalan Jengki Gang Cereme', '', '', '', '81351437870', '', NULL, 'sri_wardhana@yahoo.co.id', '', '', 'KABUPATEN GRESIK', 'Islam', 'B', '13650', '37/KPTS/IV-1996', '', '2020-12-03 08:19:43', NULL, NULL, 31, 31, 0, 0, 0, 19, 16, NULL, 1, 1),
(22, '172097107', 'KAHFI  ', 'DWI', 'SEPTIAN', '1994-09-20', 'Male', NULL, '', '2017-09-06', NULL, NULL, 'Sinbad Green Residence Blok B3 No.9', '', '', '', '81319468570', '', 'kahfidwiseptian@amka.co.id', NULL, '', 'S.IP', 'KOTA BOGOR', 'Islam', 'A', '16117', '', '', '2020-12-03 08:19:43', NULL, NULL, 62, 31, 0, 0, 0, 21, 19, 16, 1, 1),
(23, '971001056', 'RUNSA ', '', 'RINALDI', '1970-07-06', 'Male', NULL, '', '1997-10-01', NULL, NULL, 'Jl. T. Cemara Blok W35 Taman Galaxi Jakasetia Bekasi', '', '', '', '82111168520', '', NULL, 'runsa70@yahoo.com', 'IR. ', 'MM', 'KOTA PALEMBANG', 'Islam', 'A', '17147', '65/KPTS/X-1999', '', '2020-12-03 08:19:43', NULL, NULL, 83, 52, 0, 0, 0, NULL, NULL, NULL, 1, 1),
(24, '192176198', 'NURJANAH', '', '', '1992-04-05', 'Female', NULL, '', '2009-10-05', NULL, NULL, 'Jl. Pahlawan Komarudin Kp. Ujung Krawang', '', '', '', '87888936692', '', 'anna@amka.co.id', NULL, '', 'S.Kom', 'KOTA JAKARTA TIMUR', 'Islam', 'B+', '13950', '', '', '2020-12-03 08:19:43', NULL, NULL, 107, 52, 0, 0, 0, 23, NULL, NULL, 1, 1),
(25, '161010092', 'JEFFRI ', '', 'BRAVO', '1985-07-06', 'Male', NULL, '', '2016-01-01', NULL, NULL, 'Jl. Lumbu Tengah IV C No. 231', '', '', '', '81281535390', '', 'bravojeffri@amka.co.id', NULL, '', 'ST', 'KOTA JAKARTA TIMUR', 'Kristen', 'O', '17116', '', '', '2020-12-03 08:19:43', NULL, NULL, 107, 52, 0, 0, 0, 23, NULL, NULL, 1, 1),
(26, '862143004', 'MOCH ', '', 'FODLI', '1962-11-17', 'Male', NULL, '', '1986-02-01', NULL, NULL, '-Perumahan Taman Bekasi Asri Blok J/7 ', '', '', '', '811893140', '', NULL, 'mfodli@yahoo.com', '', 'SE MM', 'KABUPATEN BREBES', 'Islam', 'A', '17115', '42/KPTS/VI-1986', '', '2020-12-03 08:19:43', NULL, NULL, 16, 8, 0, 0, 0, NULL, NULL, NULL, 1, 1),
(27, '192117202', 'MUHAMAD  ', 'BANGKIT', 'HUTAMA', '1996-08-31', 'Male', NULL, '', '2019-04-08', NULL, NULL, 'Bandung', '', '', '', '', '', NULL, NULL, '', 'S.E', 'KOTA BANDUNG', 'Islam', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 67, 36, 0, 0, 0, 26, NULL, NULL, 1, 1),
(28, '902117020', 'JOKO ', '', 'SETIYONO', '1965-05-09', 'Male', NULL, '', '1990-03-09', NULL, NULL, '- JL. DI PANJAITAN IV  RT.003 / RW. 001 SUSUKAN  UNGARAN TIMUR  KAB . SEMARANG', '', '', '', '8179527804', '', NULL, 'onoyit@yahoo.com', '', '', 'KABUPATEN MADIUN', 'Islam', 'O', '50231', '57/KPTS/XI-1992', '', '2020-12-03 08:19:43', NULL, NULL, 35, 35, 0, 0, 0, 26, NULL, NULL, 1, 1),
(29, '192117216', 'RANDI ', '', 'POLANDIKA', '1990-10-18', 'Male', NULL, '', '2019-08-12', NULL, NULL, 'Ogan Komering Ulu', '', '', '', '82178050349', '', 'randipolandika@amka.co.id', NULL, '', 'S.E', 'KABUPATEN OGAN KOMERING ULU', 'Islam', 'A', '32111', '', '', '2020-12-03 08:19:43', NULL, NULL, 68, 37, 0, 0, 0, 26, NULL, NULL, 1, 1),
(30, '942117042', 'M  ', 'AINUL', 'YAQIN', '1971-10-16', 'Male', NULL, '', '1994-10-24', NULL, NULL, 'JALAN lUMBU TIMUR TERUSAN BLOK 2 B ', '', '', '', '81361608938', '', 'ainul.yaqin@amka.co.id', NULL, '', 'SE', 'KABUPATEN BOJONEGORO', 'Islam', 'AB', '17116', '87/KPTS/XI-1996', '', '2020-12-03 08:19:43', NULL, NULL, 17, 17, 0, 0, 0, 26, NULL, NULL, 1, 1),
(31, '182146139', 'ARDO  ', 'DIMAS BAGUS', 'PRAYOGA', '1992-08-14', 'Male', NULL, '', '2018-01-29', NULL, NULL, 'BOGOR', '', '', '', '', '', NULL, NULL, '', '', '', 'Islam', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 38, 38, 0, 0, 0, 30, 26, NULL, 1, 1),
(32, '192117215', 'RISCHAN  ', 'ROYNALDO', 'SIAGIAN', '1994-12-29', 'Male', NULL, '', '2019-08-12', NULL, NULL, 'Batam', '', '', '', '', '', NULL, NULL, '', '', 'KABUPATEN ASAHAN', 'Kristen', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 69, 38, 0, 0, 0, 31, 30, 26, 1, 1),
(33, '172117102', 'PANDHIT  ', 'SENO', 'AJI', '1987-03-13', 'Male', NULL, '', '1970-01-01', NULL, NULL, '-', '', '', '', '', '', NULL, NULL, '', 'SE', '', 'Islam', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 9, 9, 0, 0, 0, NULL, NULL, NULL, 1, 1),
(34, '952117044', 'ONIH', '', '', '1975-10-12', 'Male', NULL, '', '1995-01-01', NULL, NULL, 'UJUNG KRAWANG RT 008 RW 05 NO. 48', '', '', '', '81514633440', '', NULL, 'bangonih@yahoo.com', '', 'SE', 'KOTA JAKARTA TIMUR', 'Islam', 'O', '13950', '144/KPTS/IX-1998', '', '2020-12-03 08:19:43', NULL, NULL, 19, 19, 0, 0, 0, 33, NULL, NULL, 1, 1),
(35, '182117156', 'RYAN  ', 'ANANTA', 'AJI', '1995-10-15', 'Male', NULL, '', '2018-03-26', NULL, NULL, 'GONDANG', '', '', '', '82136977793', '', NULL, 'ryananantaaji@gmail.com', '', 'S.E', 'KABUPATEN BOYOLALI', 'Islam', 'O', '57352', '', '', '2020-12-03 08:19:43', NULL, NULL, 72, 41, 0, 0, 0, 34, 33, NULL, 1, 1),
(36, '192117214', 'PISESAWAN  ', 'DIDI', 'YOSANI', '1995-03-11', 'Male', NULL, '', '2019-08-12', NULL, NULL, 'Surabaya', '', '', '', '81233772540', '', NULL, 'pisesawandidiy@gmail.com', '', '', 'KABUPATEN TULUNGAGUNG', 'Islam', 'B', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 73, 42, 0, 0, 0, 34, 33, NULL, 1, 1),
(37, '862204006', 'LILIS ', '', 'AGUSTINI', '1966-08-27', 'Female', NULL, '', '1986-06-16', NULL, NULL, 'Perumahan Bumi Bekais BaruJalan Lumbu Tengah 3F Blok 9 No. 13', '', '', '', '8121341405', '', 'lilisa@amka.co.id', NULL, 'RA', '', 'KOTA JAKARTA TIMUR', 'Islam', 'B', '17116', 'KD-II/04/KPTS/III-1987', '', '2020-12-03 08:19:43', NULL, NULL, 74, 43, 0, 0, 0, 34, 33, NULL, 1, 1),
(38, '922117027', 'SYAFRIALI ', '', 'RAMLI', '1969-04-22', 'Male', NULL, '', '1992-05-11', NULL, NULL, 'Perumahan Mahkota Cimuning', '', '', '', '8119200544', '', 'syafrialiramli@amka.co.id', NULL, '', '', 'KOTA PADANG', 'Islam', 'O', '17158', '07/KPTS/II-1994', '', '2020-12-03 08:19:43', NULL, NULL, 18, 18, 0, 0, 0, 33, NULL, NULL, 1, 1),
(39, '142143085', 'IRWAN', '', '', '1985-05-07', 'Male', NULL, '', '2014-06-01', NULL, NULL, 'Jl. janur kuning No,46', '', '', '', '8179833525', '', 'irwan@amka.co.id', NULL, '', 'SE', 'KOTA JAKARTA TIMUR', 'Islam', 'O', '14230', '14/KPTS/V-2014', '', '2020-12-03 08:19:43', NULL, NULL, 71, 40, 0, 0, 0, 38, 33, NULL, 1, 1),
(40, '172117115', 'ANTONY ', '', 'RAMDHAN', '1970-11-11', 'Male', NULL, '', '2017-10-02', NULL, NULL, 'Jl. Rajamantri Kulon No. 19', '', '', '', '8161662910', '', 'aramdhan@amka.co.id', NULL, '', 'SE. M.Ak. Ak. CA', 'KOTA BANDUNG', 'Islam', 'A', '40264', '', '', '2020-12-03 08:19:43', NULL, NULL, 10, 10, 0, 0, 0, NULL, NULL, NULL, 1, 1),
(41, '032117073', 'IRENE  ', 'RETNO', 'WULAN', '1979-09-18', 'Female', NULL, '', '2003-11-04', NULL, NULL, '-TYTIAN INDAH BLOK K2 NO.19', '', '', '', '83897875353', '', NULL, 'scolastikirene@yahoo.com', '', 'SE', 'KOTA YOGYAKARTA', 'Katolik', 'A', '17143', '95/KPTS/XII-2005', '', '2020-12-03 08:19:43', NULL, NULL, 45, 45, 0, 0, 0, 40, NULL, NULL, 1, 1),
(42, '032089072', 'WAWA  ', 'MUHAMMAD', 'FAHMI', '1978-03-10', 'Male', NULL, '', '2003-08-01', NULL, NULL, 'Dukuh Zamrud Blok L 21 No. 23', '', '', '', '81287451655', '', 'wawa@amka.co.id', NULL, '', 'S.Psi', 'KOTA BANDUNG', 'Islam', 'O', '17156', '85/KPTS/VIII-2005', '', '2020-12-03 08:19:43', NULL, NULL, 21, 21, 0, 0, 0, 40, NULL, NULL, 1, 1),
(43, '162100100', 'SRI  ', 'WULAN', 'DHANI', '1981-08-10', 'Female', NULL, '', '2016-11-15', NULL, NULL, 'JL.T. AMIR HAMZAH NO.108 SAMBIREJO', '', '', '', '6,28117E+11', '', 'wulan@amka.co.id', NULL, '', 'S.Sos', 'KOTA BINJAI', 'Islam', 'B', '20761', '', '', '2020-12-03 08:19:43', NULL, NULL, 77, 46, 0, 0, 0, 42, 40, NULL, 1, 1),
(44, '882204016', 'WINARTA', '', '', '1967-04-15', 'Male', NULL, '', '1988-08-24', NULL, NULL, 'JL. RA. KARTINI NO. 16', '', '', '', '89502005366', '', 'winarta@amka.co.id', NULL, '', '', 'KABUPATEN KLATEN', 'Islam', 'A', '17113', '', '', '2020-12-03 08:19:43', NULL, NULL, 77, 46, 0, 0, 0, 42, 40, NULL, 1, 1),
(45, '192117199', 'HARIS ', '', 'ISKANDAR', '1985-07-28', 'Male', NULL, '', '2009-10-05', NULL, NULL, 'JL. H. ZAKARIA III NO.124', '', '', '', '85216114765', '', 'haris@amka.co.id', NULL, '', '', 'KABUPATEN SUBANG', 'Islam', 'AB', '', '014/KPTS/II-2019', '', '2020-12-03 08:19:43', NULL, NULL, 79, 48, 0, 0, 0, 42, 40, NULL, 1, 1),
(46, '192117197', 'ANTONIUS  ', 'ARI', 'NUGROHO', '1971-05-06', 'Male', NULL, '', '2019-03-04', NULL, NULL, 'Perumahan Legenda Wisata Zona Vivaldi Blok M2-20.Jalan Alternatif Transyogi KM 6 Cibubur', '', '', '', '82188888134', '', 'ari.nugroho@amka.co.id', NULL, '', '', 'KOTA SURAKARTA', 'Katolik', 'O', '16967', '', '', '2020-12-03 08:19:43', NULL, NULL, 22, 22, 0, 0, 0, 40, NULL, NULL, 1, 1),
(47, '181001157', 'ANUGRAH MUHAMMAD RIDHO', '', '', '1995-01-06', 'Male', NULL, '', '2018-03-26', NULL, NULL, 'Perum. Leces Permai H-9', '', '', '', '81234646781', '', 'ridho@amka.co.id', NULL, '', 'S.T.', 'KABUPATEN PROBOLINGGO', 'Islam', 'O', '67273', '', '', '2020-12-03 08:19:43', NULL, NULL, 80, 49, 0, 0, 0, 46, 40, NULL, 1, 1),
(48, '171174111', 'KUSUMA', 'YUDHA', 'RAMADHANI', '1994-03-04', 'Male', 'Married', '-', '2017-09-25', NULL, NULL, 'Jl. Prof. M. Yamin IX No. 58', NULL, NULL, NULL, '85641412396', '085641412396', 'ramadhani@amka.co.id', 'ramadhani.46k@gmail.com', NULL, 'S.Kom', 'KABUPATEN BANYUMAS', 'Islam', 'B', '53142', NULL, '', '2020-12-03 08:19:43', '2020-12-23 02:38:09', NULL, 81, 50, NULL, NULL, 1, 46, 40, NULL, 1, 1),
(49, '181174128', 'DERRY  ', 'JAKA', 'PERMANA', '1992-06-15', 'Male', NULL, '', '2018-01-05', NULL, NULL, 'Medang Lestari Jl. Alam Kencana Blok B.III / F.07', '', '', '', '82260222731', '', 'derry@amka.co.id', NULL, '', '', 'KOTA JAKARTA SELATAN', 'Islam', 'B', '15418', '', '', '2020-12-03 08:19:43', NULL, NULL, 81, 50, 0, 0, 0, 46, 40, NULL, 1, 1),
(50, '972204055', 'DEDE ', '', 'EFFENDI', '1966-09-03', 'Male', NULL, '', '1997-08-25', NULL, NULL, 'perum griya asri II I 30/3 TAMBUN SELATAN BEKASI', '', '', '', '83870011975', '', 'dd@amka.co.id', NULL, '', '', 'KOTA JAKARTA PUSAT', 'Islam', '', '1234', '37/KPTS/VIII-2004', '', '2020-12-03 08:19:43', NULL, NULL, 77, 46, 0, 0, 0, 42, 40, NULL, 1, 1),
(51, '951002046', 'LANTIP ', '', 'PRAJITNO', '1969-11-24', 'Male', NULL, '', '1995-05-01', NULL, NULL, '-permata metropolitan (metland tambun) blok F 30 ', '', '', '', '8111667687', '', 'lantip.prayitno@amka.co.id', NULL, 'IR ', '', 'KOTA SURABAYA', 'Islam', 'O', '17520', '69/KPTS/VII-1997', '', '2020-12-03 08:19:43', NULL, NULL, 77, 46, 0, 0, 0, 42, 40, NULL, 1, 1),
(52, '021001067', 'FIRMAN  ', 'SRI', 'SUGIHARTO', '1977-09-24', 'Male', NULL, '', '2002-08-01', NULL, NULL, 'Perumahan Pulo Permatasari B-5/24 Pekayon Jaya Bekasi Selatan', '', '', '', '81317888395', '', NULL, 'firman.djk.amka@gmail.com', '', 'ST', 'KABUPATEN SUMBAWA', 'Islam', 'O', '', '32/KPTS/VIII-2004', '', '2020-12-03 08:19:43', NULL, NULL, 84, 53, 0, 0, 0, NULL, NULL, NULL, 1, 1),
(53, '192143208', 'EDDY ', '', 'SUMARYADI', '1964-06-07', 'Male', NULL, '', '2019-05-20', NULL, NULL, 'Residence One, Jl. Sapphire Boulevard no.28 BSD - Tangsel', '', '', '', '811500500', '', NULL, 'eddysumaryadi76@gmail.com', 'H', 'SE', 'KABUPATEN HULU SUNGAI SELATAN', 'Islam', 'O', '15323', '', '', '2020-12-03 08:19:43', NULL, NULL, 87, 56, 0, 0, 0, 52, NULL, NULL, 1, 1),
(54, '161001094', 'PANGESTU  ', 'AKBAR', 'SANTOSO', '1992-07-28', 'Male', NULL, '', '2016-01-01', NULL, NULL, '-JL MENTERI SUPENO NO 44', '', '', '', '87739071881', '', 'santoso_pangestu@amka.co.id', NULL, '', 'ST', 'KOTA YOGYAKARTA', 'Kristen', 'O', '55162', '', '', '2020-12-03 08:19:43', NULL, NULL, 91, 60, 0, 0, 0, 53, 52, NULL, 1, 1),
(55, '182117187', 'DEDEN ', '', 'PRAYOGA', '1994-07-31', 'Male', NULL, '', '2018-06-25', NULL, NULL, 'Jakarta', '', '', '', '', '', NULL, NULL, '', '', 'KOTA MEDAN', 'Islam', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 91, 60, 0, 0, 0, 53, 52, NULL, 1, 1),
(56, '911001024', 'GUNTUR  ', 'KIAPMA', 'PUTRA', '1965-10-15', 'Male', NULL, '', '1991-07-01', NULL, NULL, 'Vila Taman Kartini Blok H4 No 4 Jl Graha Elok VI', '', '', '', '85215672111', '', 'guntur@amka.co.id', NULL, 'IR. ', '', 'KOTA BENGKULU', 'Islam', 'A', '', '57/KPTS/XI-1992', '', '2020-12-03 08:19:43', NULL, NULL, 91, 60, 0, 0, 0, 53, 52, NULL, 1, 1),
(57, '201001229', 'NURCANDRA ', '', 'NUGRAHA', '1967-03-03', 'Male', NULL, '', '2020-03-30', NULL, NULL, 'JL CILANDAK I NO.18 CILANDAK BARAT', '', '', '', '', '', NULL, NULL, 'IR', '', 'KOTA JAKARTA PUSAT', 'Islam', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 88, 57, 0, 0, 0, 52, NULL, NULL, 1, 1),
(58, '191001223', 'AGUNG  ', 'SATRIA', 'KURNIAWAN', '1993-08-25', 'Male', NULL, '', '2019-08-21', NULL, NULL, 'Jl. P. Tirtayasa Gg. Hi. Jaman No. 71 LK. I', '', '', '', '89617521662', '', 'agungsatria@amka.co.id', NULL, '', 'ST', 'KABUPATEN MESUJI', 'Islam', 'B', '35122', '', '', '2020-12-03 08:19:43', NULL, NULL, 112, 65, 0, 0, 0, 63, 57, 52, 1, 1),
(59, '181003129', 'ARIGHI ', '', 'ELFARISI', '1995-05-07', 'Male', NULL, '', '2018-01-05', NULL, NULL, 'Sukolilo Park Regency Blok C-9, Jalan Keputih Tegal Timur, Keputih, Sukolilo, Surabaya', '', '', '', '81259006512', '', 'elfarisrighi@amka.co.id', NULL, '', '', 'KABUPATEN PAMEKASAN', 'Islam', 'O', '60111', '', '', '2020-12-03 08:19:43', NULL, NULL, 112, 65, 0, 0, 0, 63, 57, 52, 1, 1),
(60, '181001179', 'TANTO ', '', 'BARNOWO', '1962-05-12', 'Male', NULL, '', '2018-07-23', NULL, NULL, 'Jalan Semolowaru Selatan 5 no 14', '', '', '', '82111336060', '', NULL, 'tantobarnowo@gmail.com', 'Ir', '', 'KOTA YOGYAKARTA', 'Islam', 'B', '60119', '', '', '2020-12-03 08:19:43', NULL, NULL, 92, 61, 0, 0, 0, 57, 52, NULL, 1, 1),
(61, '181001153', 'GUNTUR ', '', 'FATHONI', '1993-03-05', 'Male', NULL, '', '2018-03-26', NULL, NULL, 'SURAKARTA', '', '', '', '85728618622', '', NULL, NULL, '', 'ST', 'KABUPATEN KARANGANYAR', 'Islam', '', '57721', '', '', '2020-12-03 08:19:43', NULL, NULL, 93, 62, 0, 0, 0, 60, 57, 52, 1, 1),
(62, '181003146', 'ADIB  ', 'BUDI', 'SANTOSO', '1987-09-09', 'Male', NULL, '', '2018-03-05', NULL, NULL, 'Taman Nirwana 2 Blok B No. 10 ', '', '', '', '81326968969', '', NULL, 'adib.budi09@gmail.com', '', 'ST', 'KABUPATEN BREBES', 'Islam', 'A', '17510', '', '', '2020-12-03 08:19:43', NULL, NULL, 94, 63, 0, 0, 0, 60, 57, 52, 1, 1),
(63, '181001132', 'YULISTIAWAN', '', '', '1993-07-02', 'Male', NULL, '', '2018-01-08', NULL, NULL, 'PASAMAN BARAT', '', '', '', '85464092593', '', NULL, 'yulis.amka2018@gmail.com', '', 'S.ST', 'KOTA BUKITTINGGI', 'Islam', 'B+', '26567', '', '', '2020-12-03 08:19:43', NULL, NULL, 96, 65, 0, 0, 0, 57, 52, NULL, 1, 1),
(64, '191001225', 'MOEDI ', '', 'OETOMO', '1961-01-24', 'Male', NULL, '', '2019-11-11', NULL, NULL, 'Jakarta', '', '', '', '', '', NULL, NULL, 'Ir.', 'MM', 'KOTA MADIUN', 'Islam', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 89, 58, 0, 0, 0, 52, NULL, NULL, 1, 1),
(65, '192053201', 'BAGAS ', '', 'RAHMATULLAH', '1994-05-02', 'Male', NULL, '', '2019-03-18', NULL, NULL, 'Sidoarjo', '', '', '', '', '', NULL, NULL, '', '', 'KABUPATEN SIDOARJO', 'Islam', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 114, 67, 0, 0, 0, 64, 52, NULL, 1, 1),
(66, '021001064', 'SUTARNO', '', '', '1974-01-14', 'Male', NULL, '', '2002-01-01', NULL, NULL, '-Bibis Baru RT 08 RW 23 NO 17', '', '', '', '81371419525', '', 'sutarno_amka@yahoo.co.id', NULL, '', 'ST', 'KOTA SURAKARTA', 'Islam', 'o', '57135', '10/KPTS/I-2004', '', '2020-12-03 08:19:43', NULL, NULL, 124, 108, 0, 0, 0, 64, 52, NULL, 1, 1),
(67, '181001191', 'ARISTIANTO', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 99, 68, 0, 0, 0, 64, 52, NULL, 1, 1),
(68, '932100035', 'SAD  ', 'TITI', 'MUMPUNI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 68, 0, 0, 0, 67, 64, 52, 1, 1),
(69, '191001219', 'FARISTA  ', 'WIDYA', 'KIRANA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 68, 0, 0, 0, 67, 64, 52, 1, 1),
(70, '201001230', 'RACHMAD ', '', 'WAHYUDI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 124, 115, 0, 0, 0, 71, 64, 52, 1, 1),
(71, '201001228', 'YULIANTO', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 123, 114, 0, 0, 0, 64, 52, NULL, 1, 1),
(72, '171005126', 'DANIS ', 'TRIA', 'KURNIA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 127, 117, 0, 0, 0, 70, 71, 64, 1, 1),
(73, '182143183', 'ASWIN', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 128, 118, 0, 0, 0, 70, 71, 64, 1, 1),
(74, '181001172', 'WILDAN ', '', 'RACHMANDIKA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 132, 117, 0, 0, 0, 72, 70, 71, 1, 1),
(75, '191001222', 'ANTONIUS ', 'YOGI NUGRAH ', 'PRABOWO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 135, 117, 0, 0, 0, 72, 70, 71, 1, 1),
(76, '182117142', 'NURHENDRO  ', 'YOGA', 'PRATIKTO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 142, 111, 0, 0, 0, 66, 64, 52, 1, 1),
(77, '181001177', 'ACHMAD ', '', 'ALFI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 124, 121, 0, 0, 0, 64, 52, NULL, 1, 1),
(78, '181001178', 'AKBAR  ', 'NUGROHO', 'RIANTO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 127, 123, 0, 0, 0, 77, 64, 52, 1, 1),
(79, '161001099', 'NICO ', '', 'PARULIAN', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 68, 0, 0, 0, 67, 64, 52, 1, 1),
(80, '181001176', 'I MADE ', 'JONI ARI ', 'ARTHA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 134, 130, 0, 0, 0, 64, 52, NULL, 1, 1),
(81, '061003082', 'ALFRED ', '', 'ADIANTO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 131, 129, 0, 0, 0, 64, 52, NULL, 1, 1),
(82, '182117166', 'MUHAMMAD  ', 'IQBAL', 'TAWAKKAL', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 142, 131, 0, 0, 0, 64, 52, NULL, 1, 1),
(83, '182117144', 'MUHAMMAD ', '', 'NURRAHMANTO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 128, 137, 0, 0, 0, 64, 52, NULL, 1, 1),
(84, '181001194', 'NURUL ', '', 'HUDA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 124, 140, 0, 0, 0, 64, 52, NULL, 1, 1),
(85, '181001173', 'HERRICO ', '', 'SEPTIONI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 134, 142, 0, 0, 0, 84, 64, 52, 1, 1),
(86, '181003158', 'MUHAMMAD YUNUS ', 'YUNUS', 'NURDIN', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 138, 147, 0, 0, 0, 87, 64, 52, 1, 1),
(87, '171009110', 'REGA  ', 'HANGASTA', 'GIENPUTRA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 131, 147, 0, 0, 0, 64, 52, NULL, 1, 1),
(88, '181001164', 'EMHA ', 'AFIF', 'ASSAGAF', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 125, 153, 0, 0, 0, 64, 52, NULL, 1, 1),
(89, '022117065', 'WAWAN  ', 'DWI', 'ARIYANTO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 90, 59, 0, 0, 0, 52, NULL, NULL, 1, 1),
(90, '182117167', 'RADITYA ', 'NDARU PRIYA ', 'PERDANA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 116, 69, 0, 0, 0, 89, 52, NULL, 1, 1),
(91, '182117140', 'RIZAL ', '', 'FADILLAH', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 101, 70, 0, 0, 0, 89, 52, NULL, 1, 1),
(92, '172089105', 'GALUH  ', 'AJENG', 'SUWANDI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 118, 71, 0, 0, 0, 89, 52, NULL, 1, 1),
(93, '031003070', 'TM. ', '', 'NASIR', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 118, 71, 0, 0, 0, 89, 52, NULL, 1, 1),
(94, '171001101', 'I WAYAN ', '', 'SUDENIA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 85, 54, 0, 0, 0, NULL, NULL, NULL, 1, 1),
(95, '921001032', 'BUDI ', '', 'SANTOSO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 87, 72, 0, 0, 0, 94, NULL, NULL, 1, 1),
(96, '081001083', 'ANGGA ', '', 'SANTOSO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 91, 76, 0, 0, 0, 95, 94, NULL, 1, 1),
(97, '011001061', 'TRI ', '', 'HARYANTO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 108, 76, 0, 0, 0, 96, 95, 94, 1, 1),
(98, '031001069', 'PUJI ', '', 'SIHONO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 88, 73, 0, 0, 0, 94, NULL, NULL, 1, 1),
(99, '171012120', 'NAFIL  ', 'ATTAR', 'MUHAMAD', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 112, 81, 0, 0, 0, 98, 94, NULL, 1, 1),
(100, '191001200', 'M. ', 'RICHZAD PRIMA ', 'S', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 112, 81, 0, 0, 0, 98, 94, NULL, 1, 1),
(101, '882204017', 'WAHYU ', '', 'HIDAYAT', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 113, 82, 0, 0, 0, 98, 94, NULL, 1, 1),
(102, '912204023', 'CALVIN  ', 'ALFIAN', 'SUMANTRI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 113, 82, 0, 0, 0, 98, 94, NULL, 1, 1),
(103, '181001152', 'MUCHAMMAD  ', 'NUR', 'BAIHAQI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 93, 78, 0, 0, 0, 98, 94, NULL, 1, 1),
(104, '171046113', 'MUHAMMAD  ', 'ZAHID', 'ABDURRAHMAN', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 93, 78, 0, 0, 0, 98, 94, NULL, 1, 1),
(105, '191150218', 'ARIEF  ', 'NUR', 'ADIANTO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 112, 81, 0, 0, 0, 98, 94, NULL, 1, 1),
(106, '882204015', 'MAFTUCHIN  ', 'AL', 'GHOZALI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 89, 74, 0, 0, 0, 94, NULL, NULL, 1, 1),
(107, '031002071', 'HARPAL ', '', 'SAPUTRA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 98, 83, 0, 0, 0, 106, 94, NULL, 1, 1),
(108, '902204022', 'TEGUH  ', 'BUDI', 'SUKMONO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 114, 83, 0, 0, 0, 107, 106, 94, 1, 1),
(109, '061001079', 'DUWI ', '', 'SYAHLEVI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 114, 83, 0, 0, 0, 107, 106, 94, 1, 1),
(110, '161002091', 'TOGI  ', 'SALOMO', 'HUTAPEA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 99, 84, 0, 0, 0, 106, 94, NULL, 1, 1),
(111, '041001074', 'BUDI ', '', 'IRWANTO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 84, 0, 0, 0, 110, 106, 94, 1, 1),
(112, '141001086', 'FITUNOP  ', 'INAYATU', 'MS', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 84, 0, 0, 0, 110, 106, 94, 1, 1),
(113, '171016119', 'WIKU  ', 'BAGAS', 'SWASONO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 84, 0, 0, 0, 110, 106, 94, 1, 1),
(114, '181005155', 'AMELIA  ', 'INDAH', 'PRATIWI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 84, 0, 0, 0, 110, 106, 94, 1, 1),
(115, '191001212', 'RAHADIAN ', '', 'FAHMI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 84, 0, 0, 0, 110, 106, 94, 1, 1),
(116, '191001221', 'SUWARNO', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 84, 0, 0, 0, 110, 106, 94, 1, 1),
(117, '921003031', 'IAN  ', 'MULYANA', 'DIMAJA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 84, 0, 0, 0, 110, 106, 94, 1, 1),
(118, '181001181', 'ARY ', '', 'HARIJADI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 124, 157, 0, 0, 0, 106, 94, NULL, 1, 1),
(119, '192117192', 'M.  ', 'TAREKH', 'RIZKI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 128, 160, 0, 0, 0, 118, 106, 94, 1, 1),
(120, '181005130', 'DEWI ', '', 'SINTA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 133, 159, 0, 0, 0, 118, 106, 94, 1, 1),
(121, '181005136', 'ALIF ', '', 'SYARIFUDIN', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 135, 159, 0, 0, 0, 118, 106, 94, 1, 1),
(122, '051009077', 'HENRI', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 126, 165, 0, 0, 0, 106, 94, NULL, 1, 1),
(123, '181046151', 'FERI ', '', 'ALIMUDIN', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 127, 166, 0, 0, 0, 106, 94, NULL, 1, 1),
(124, '182117131', 'ALFIAN  ', 'SETYO', 'POESPITO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 128, 167, 0, 0, 0, 106, 94, NULL, 1, 1),
(125, '181001171', 'DYORIZKY ', 'IMADUDDIN ANGGARA ', 'PUTRA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 134, 166, 0, 0, 0, 123, 106, 94, 1, 1),
(126, '141005087', 'DJOKO  ', 'WIBOWO', 'UTOMO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 139, 165, 0, 0, 0, 122, 106, 94, 1, 1),
(127, '161003095', 'MUHAMAD ', '', 'ARIF', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 124, 170, 0, 0, 0, 106, 94, NULL, 1, 1),
(128, '161001098', 'ESTER ', '', 'MELINA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 125, 171, 0, 0, 0, 127, 106, 94, 1, 1),
(129, '171001116', 'MUHAMMAD  ', 'SYAIFUL', 'AFIF', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 127, 173, 0, 0, 0, 127, 106, 94, 1, 1),
(130, '181001128', 'RIDWAN  ', 'AKHIRUZ', 'ZAMAN', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 129, 175, 0, 0, 0, 127, 106, 94, 1, 1),
(131, '182117168', 'REZA  ', 'ANGGA', 'WIJAYA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 142, 174, 0, 0, 0, 127, 106, 94, 1, 1),
(132, '061001081', 'UMAR  ', 'ALI', 'SAID', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 126, 172, 0, 0, 0, 127, 106, 94, 1, 1),
(133, '161003097', 'BRYAN ', '', 'ALIF', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 131, 172, 0, 0, 0, 132, 127, 106, 1, 1),
(134, '191001207', 'RAKASIWI ', '', 'ERLANGGA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 131, 172, 0, 0, 0, 132, 127, 106, 1, 1),
(135, '181001137', 'GIWA  ', 'WIBAWA', 'PERMANA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 135, 173, 0, 0, 0, 129, 127, 106, 1, 1),
(136, '191005204', 'RESTU  ', 'KUSUMA', 'WIJAYA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 141, 173, 0, 0, 0, 129, 127, 106, 1, 1),
(137, '191001217', 'FEBRIZON', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 130, 176, 0, 0, 0, 127, 106, 94, 1, 1),
(138, '171151124', 'MUHAMAD  ', 'HASAN', 'SYAMSURI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 127, 179, 0, 0, 0, 106, 94, NULL, 1, 1),
(139, '181001174', 'I PUTU ', 'ANDIRA MARTA ', 'PUTRA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 127, 142, 0, 0, 0, 84, 106, 94, 1, 1),
(140, '192117203', 'SULTAN  ', 'ALI', 'MURFI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 142, 154, 0, 0, 0, 106, 94, NULL, 1, 1),
(141, '182117143', 'RACHMAT  ', 'ZAINAL', 'IRFAN', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 101, 86, 0, 0, 0, 89, 94, NULL, 1, 1),
(142, '012117057', 'DARYATNO', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 117, 86, 0, 0, 0, 141, 89, 94, 1, 1),
(143, '182117133', 'BAMBANG ', '', 'HENDIKA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 117, 86, 0, 0, 0, 141, 89, 94, 1, 1),
(144, '952205045', 'YATMAN', '', 'S', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 118, 87, 0, 0, 0, 89, 94, NULL, 1, 1),
(145, '181002145', 'HENDY ', '', 'TRIATMANTO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 87, 88, 0, 0, 0, 52, NULL, NULL, 1, 1),
(146, '171002122', 'FIRGHILI  ', 'JIILUL', 'MUSTAQBAL', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 91, 92, 0, 0, 0, 145, 52, NULL, 1, 1),
(147, '191001194', 'BAKHTIAR ', '', 'EFFENDI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 108, 92, 0, 0, 0, 146, 145, 52, 1, 1),
(148, '141034088', 'LEONARD ', '', 'AGITA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 95, 96, 0, 0, 0, 52, NULL, NULL, 1, 1),
(149, '171002123', 'MOCHAMAD', 'BAYU TAUFIK ', 'FIRDAUS', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 129, 155, 0, 0, 0, 155, 52, NULL, 1, 1),
(150, '021002068', 'HARDIYUST ', '', 'HAMIZA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 96, 97, 0, 0, 0, 52, NULL, NULL, 1, 1),
(151, '181001150', 'MUHAMMAD  ', 'INDRA', 'SETIAWAN', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 97, 98, 0, 0, 0, 52, NULL, NULL, 1, 1),
(152, '931002037', 'NASIRUDDIN ', '', 'LATIEF', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 119, 104, 0, 0, 0, 52, NULL, NULL, 1, 1),
(153, '171007118', 'MUHAMMAD  ', 'IRSYAD', 'RABBANI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 112, 97, 0, 0, 0, 150, 52, NULL, 1, 1),
(154, '922115029', 'C ', 'ANI SURTIKANTI ', 'P.', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 117, 102, 0, 0, 0, 89, 52, NULL, 1, 1),
(155, '201001227', 'HERMAN  ', 'AMIRSYAH', 'ZUFRIE', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 89, 90, 0, 0, 0, 52, NULL, NULL, 1, 1),
(156, '942162039', 'BONDAN ', '', 'FIRMANSYAH', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 114, 99, 0, 0, 0, 155, 52, NULL, 1, 1),
(157, '972204054', 'ASEP ', '', 'KOMARUDIN', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 100, 0, 0, 0, 155, 52, NULL, 1, 1),
(158, '191006205', 'BAGUS ', '', 'PANUNTUN', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 100, 0, 0, 0, 155, 52, NULL, 1, 1),
(159, '141001084', 'DYAH  ', 'AYU', 'PRAJAWATI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 100, 0, 0, 0, 155, 52, NULL, 1, 1),
(160, '181003161', 'YAZID  ', 'KHOIRUL', 'ANWAR', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 100, 0, 0, 0, 155, 52, NULL, 1, 1),
(161, '171002103', 'AFRREDO ', 'TRILASETYA AREMA ', 'WIJAYA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 104, 105, 0, 0, 0, 155, 52, NULL, 1, 1),
(162, '921001030', 'B ', 'TRI WAHYU ', 'JATI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 120, 105, 0, 0, 0, 161, 155, 52, 1, 1),
(163, '931203034', 'OMAN ', '', 'SURYAMAN', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 120, 105, 0, 0, 0, 161, 155, 52, 1, 1),
(164, '871203010', 'SUPRIYANTO', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 120, 105, 0, 0, 0, 161, 155, 52, 1, 1),
(165, '021010063', 'JOKO ', '', 'PRAYITNO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 120, 105, 0, 0, 0, 161, 155, 52, 1, 1),
(166, '951203051', 'YULIANTO', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 120, 105, 0, 0, 0, 161, 155, 52, 1, 1),
(167, '921203028', 'AGUS ', '', 'SUPRIYANTO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 120, 105, 0, 0, 0, 161, 155, 52, 1, 1),
(168, '191001224', 'SETIYO', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 120, 105, 0, 0, 0, 161, 155, 52, 1, 1),
(169, '191001211', 'MUHAMMAD ', '', 'DAMANHURI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 120, 105, 0, 0, 0, 161, 155, 52, 1, 1),
(170, '882204011', 'SISWANTO', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 120, 105, 0, 0, 0, 161, 155, 52, 1, 1),
(171, '171002104', 'YUSOEF  ', 'ALFAJRIE', 'BARAQBAH', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 105, 106, 0, 0, 0, 155, 52, NULL, 1, 1),
(172, '941007041', 'BUDI ', '', 'WIYANTO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 100, 0, 0, 0, 155, 52, NULL, 1, 1),
(173, '931001036', 'EDY ', '', 'SANTOSO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 115, 100, 0, 0, 0, 155, 52, NULL, 1, 1),
(174, '871203009', 'SARYOKO', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 121, 106, 0, 0, 0, 171, 160, 52, 1, 1),
(175, '191002209', 'MUHAMMAD  ', 'IMRAN', 'ROSIADI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 121, 106, 0, 0, 0, 171, 160, 52, 1, 1),
(176, '021002066', 'JOKO ', '', 'LAKSONO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 123, 189, 0, 0, 0, NULL, 155, 52, 1, 1),
(177, '171004121', 'CAHYA  ', 'AHMAD', 'TRISDIANTO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 124, 190, 0, 0, 0, NULL, 176, 155, 1, 1),
(178, '172117114', 'ZULFIAN ', '', 'SYAFRI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 128, 193, 0, 0, 0, NULL, 177, 176, 1, 1);
INSERT INTO `employees` (`id`, `employee_number`, `first_name`, `middle_name`, `last_name`, `birthday`, `gender`, `marital_status`, `id_card`, `joined_date`, `confirmation_date`, `terminate_date`, `address_1`, `address_2`, `city`, `home_phone`, `mobile_phone`, `work_phone`, `work_email`, `private_email`, `front_title`, `back_title`, `birth_place`, `religion`, `blood_type`, `postal_code`, `number_decree`, `status`, `created_at`, `updated_at`, `deleted_at`, `job_title_id`, `department_id`, `country_id`, `nationality_id`, `province_id`, `supervisor_id`, `indirect_supervisors_id`, `indirect_supervisors2_id`, `created_by_id`, `employment_status_id`) VALUES
(179, '181002170', 'PRADANA  ', 'PUTRA', 'ANJASMARA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 132, 185, 0, 0, 0, NULL, 155, 52, 1, 1),
(180, '191002208', 'CALVIN  ', 'ALFIAN', 'SUMANTRI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 133, 185, 0, 0, 0, NULL, 155, 52, 1, 1),
(181, '182117165', 'HAFIDH  ', 'ROKHMAN', 'ROLDI', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 142, 186, 0, 0, 0, NULL, 155, 52, 1, 1),
(182, '172056117', 'TRI  ', 'ADITYA', 'NUGRAHA', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 130, 188, 0, 0, 0, NULL, 155, 52, 1, 1),
(183, '011001060', 'SYAHIRUL ', '', 'ALIM', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 131, 153, 0, 0, 0, NULL, 88, 155, 1, 1),
(184, '851203003', 'YUSUF  ', 'BAMBANG', 'SUROWO', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 118, 103, 0, 0, 0, NULL, 89, 52, 1, 1),
(185, '881203014', 'SULAEMAN', '', '', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 118, 103, 0, 0, 0, NULL, 89, 52, 1, 1),
(186, '911003025', 'MUCHAMMAD ', '', 'JONED', '0000-00-00', '', NULL, '', '0000-00-00', NULL, NULL, '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2020-12-03 08:19:43', NULL, NULL, 118, 103, 0, 0, 0, NULL, 89, 52, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_appraisals`
--

CREATE TABLE `employee_appraisals` (
  `id` bigint UNSIGNED NOT NULL,
  `pilih_1` double(15,2) DEFAULT NULL,
  `pilih_2` double(15,2) DEFAULT NULL,
  `pilih_3` double(15,2) DEFAULT NULL,
  `pilih_4` double(15,2) DEFAULT NULL,
  `pilih_5` double(15,2) DEFAULT NULL,
  `pilih_6` double(15,2) DEFAULT NULL,
  `pilih_7` double(15,2) DEFAULT NULL,
  `pilih_8` double(15,2) DEFAULT NULL,
  `pilih_9` double(15,2) DEFAULT NULL,
  `pilih_10` double(15,2) DEFAULT NULL,
  `pilih_11` double(15,2) DEFAULT NULL,
  `pilih_12` double(15,2) DEFAULT NULL,
  `pilih_13` double(15,2) DEFAULT NULL,
  `pilih_14` double(15,2) DEFAULT NULL,
  `pilih_15` double(15,2) DEFAULT NULL,
  `pilih_16` double(15,2) DEFAULT NULL,
  `pilih_17` double(15,2) DEFAULT NULL,
  `pilih_18` double(15,2) DEFAULT NULL,
  `pilih_19` double(15,2) DEFAULT NULL,
  `pilih_20` double(15,2) DEFAULT NULL,
  `target_1` double(15,2) DEFAULT NULL,
  `target_2` double(15,2) DEFAULT NULL,
  `target_3` double(15,2) DEFAULT NULL,
  `target_4` double(15,2) DEFAULT NULL,
  `target_5` double(15,2) DEFAULT NULL,
  `reali_1` double(15,2) DEFAULT NULL,
  `reali_2` double(15,2) DEFAULT NULL,
  `reali_3` double(15,2) DEFAULT NULL,
  `reali_4` double(15,2) DEFAULT NULL,
  `reali_5` double(15,2) DEFAULT NULL,
  `nilai_1` double(15,2) DEFAULT NULL,
  `nilai_2` double(15,2) DEFAULT NULL,
  `nilai_3` double(15,2) DEFAULT NULL,
  `nilai_4` double(15,2) DEFAULT NULL,
  `nilai_5` double(15,2) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `period_id` bigint UNSIGNED DEFAULT NULL,
  `evaluator_id` bigint UNSIGNED NOT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_appraisals`
--

INSERT INTO `employee_appraisals` (`id`, `pilih_1`, `pilih_2`, `pilih_3`, `pilih_4`, `pilih_5`, `pilih_6`, `pilih_7`, `pilih_8`, `pilih_9`, `pilih_10`, `pilih_11`, `pilih_12`, `pilih_13`, `pilih_14`, `pilih_15`, `pilih_16`, `pilih_17`, `pilih_18`, `pilih_19`, `pilih_20`, `target_1`, `target_2`, `target_3`, `target_4`, `target_5`, `reali_1`, `reali_2`, `reali_3`, `reali_4`, `reali_5`, `nilai_1`, `nilai_2`, `nilai_3`, `nilai_4`, `nilai_5`, `status`, `created_at`, `updated_at`, `deleted_at`, `employee_id`, `period_id`, `evaluator_id`, `created_by_id`) VALUES
(1, 5.00, 5.00, 2.00, 5.00, 5.00, 5.00, 4.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 2.00, 2.00, 2.00, 2.00, 2.00, 2.00, 2.00, 2.00, 2.00, 2.00, 5.00, 5.00, 5.00, 5.00, 5.00, NULL, '2020-12-08 10:00:38', '2020-12-08 10:00:38', NULL, 48, 1, 46, 4),
(3, 4.00, 2.00, 2.00, NULL, 5.00, 4.00, 1.00, 2.00, 2.00, 4.00, 5.00, 1.00, 4.00, 5.00, 2.00, 4.00, 5.00, 5.00, NULL, NULL, 98.00, 53.00, 52.00, 73.00, 46.00, 9.00, 38.00, 80.00, 48.00, 15.00, 2.00, NULL, 4.00, NULL, 1.00, NULL, '2020-12-16 03:34:02', '2020-12-16 03:34:02', NULL, 49, 1, 46, 4),
(4, 5.00, 4.00, 5.00, 2.00, 2.00, 2.00, 4.00, 4.00, 2.00, 1.00, 1.00, 4.00, 1.00, 1.00, 4.00, 5.00, 2.00, 4.00, 1.00, 5.00, 68.00, 2.00, 29.00, 95.00, 59.00, 82.00, 37.00, 77.00, 76.00, 100.00, 4.00, 4.00, 5.00, 5.00, 5.00, NULL, '2020-12-16 03:36:37', '2020-12-16 03:36:37', NULL, 48, 1, 46, 4),
(5, 4.00, 5.00, 5.00, 5.00, 4.00, 2.00, 1.00, 1.00, 4.00, 4.00, 1.00, 4.00, 1.00, 5.00, NULL, 5.00, 4.00, 4.00, 5.00, 5.00, 27.00, 51.00, 38.00, 42.00, 8.00, 38.00, 65.00, 75.00, 47.00, 21.00, 5.00, 4.00, 5.00, 5.00, 4.00, NULL, '2020-12-16 05:13:12', '2020-12-16 05:13:12', NULL, 41, 1, 40, 44),
(6, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 5.00, 5.00, 5.00, 5.00, 5.00, NULL, '2021-01-04 03:34:07', '2021-01-04 03:34:07', NULL, 42, 1, 40, 44),
(7, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 5.00, 12.00, 124.00, 124.00, 142.00, 124.00, 124.00, 124.00, 124.00, 124.00, 124.00, 1.00, 5.00, 5.00, 5.00, 5.00, NULL, '2021-01-04 03:43:37', '2021-01-04 03:43:37', NULL, 44, 1, 40, 44);

-- --------------------------------------------------------

--
-- Table structure for table `employee_certifications`
--

CREATE TABLE `employee_certifications` (
  `id` bigint UNSIGNED NOT NULL,
  `certification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_dependents`
--

CREATE TABLE `employee_dependents` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `idcard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_documents`
--

CREATE TABLE `employee_documents` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_educations`
--

CREATE TABLE `employee_educations` (
  `id` bigint UNSIGNED NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `education_id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_employee_training_session`
--

CREATE TABLE `employee_employee_training_session` (
  `employee_training_session_id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_history_jobs`
--

CREATE TABLE `employee_history_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `job_id` bigint UNSIGNED NOT NULL,
  `department_id` bigint UNSIGNED NOT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_languages`
--

CREATE TABLE `employee_languages` (
  `id` bigint UNSIGNED NOT NULL,
  `reading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speaking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `languages_id` bigint UNSIGNED NOT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_non_formal_educations`
--

CREATE TABLE `employee_non_formal_educations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_organizations`
--

CREATE TABLE `employee_organizations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_skills`
--

CREATE TABLE `employee_skills` (
  `id` bigint UNSIGNED NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_training_sessions`
--

CREATE TABLE `employee_training_sessions` (
  `id` bigint UNSIGNED NOT NULL,
  `feedback` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `training_session_id` bigint UNSIGNED NOT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employment_statuses`
--

CREATE TABLE `employment_statuses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employment_statuses`
--

INSERT INTO `employment_statuses` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kontrak', 'Nulla aute odit accu', '2020-11-30 09:44:41', '2020-11-30 09:44:41', NULL),
(2, 'Tetap', NULL, '2020-11-30 09:44:47', '2020-11-30 09:44:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_titles`
--

CREATE TABLE `job_titles` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_purpose` longtext COLLATE utf8mb4_unicode_ci,
  `responsibility` longtext COLLATE utf8mb4_unicode_ci,
  `result` longtext COLLATE utf8mb4_unicode_ci,
  `challange` longtext COLLATE utf8mb4_unicode_ci,
  `authority` longtext COLLATE utf8mb4_unicode_ci,
  `internal_relation` longtext COLLATE utf8mb4_unicode_ci,
  `external_relation` longtext COLLATE utf8mb4_unicode_ci,
  `financial_dimension` longtext COLLATE utf8mb4_unicode_ci,
  `hr_dimension` longtext COLLATE utf8mb4_unicode_ci,
  `qualification` longtext COLLATE utf8mb4_unicode_ci,
  `training_need` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_titles`
--

INSERT INTO `job_titles` (`id`, `code`, `name`, `main_purpose`, `responsibility`, `result`, `challange`, `authority`, `internal_relation`, `external_relation`, `financial_dimension`, `hr_dimension`, `qualification`, `training_need`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DU', 'Direktur Utama', 'main_purpose', 'responsibility', 'result', 'challange', 'authority', 'internal_relation', 'external_relation', 'financial_dimension', 'hr_dimension', 'qualification', 'training_need', '2020-12-03 09:40:58', NULL, NULL),
(2, 'DK', 'Direktur Keuangan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(3, 'DO', 'Direktur Operasional', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(4, 'KSPI', 'Kepala Satuan Pengawasan Internal', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(5, 'KCORSEC', 'Kepala Divisi Corporate Secretary', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(6, 'KQHSSE', 'Kepala Divisi QHSSE', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(7, 'KPOB', 'Kepala Divisi Pengendalian Operasi Bisnis', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(8, 'KDAK', 'Kepala Divisi Akuntansi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(9, 'KDKU', 'Kepala Divisi Keuangan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(10, 'KHCB', 'Kepala Divisi Human Capital & Business Development', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(11, 'KDSC', 'Kepala Departemen Corporate Secretary', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(12, 'KDLG', 'Kepala Departemen Legal & MR', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(13, 'KDQM', 'Kepala Departemen Quality Management', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(14, 'KDHM', 'Kepala Departemen HSSE Management', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(15, 'KDQS', 'Kepala Departemen QHSSE System', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(16, 'KDAT', 'Kepala Departemen Akuntansi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(17, 'KDPR', 'Kepala Departemen Perpajakan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(18, 'KDPH', 'Kepala Departemen Penagihan & Hutang', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(19, 'KDKP', 'Kepala Departemen Keuangan & Penganggaran', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(20, 'KDRP', 'Kepala Departemen Rekrut & Pengembangan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(21, 'KDGI', 'Kepala Departemen GA, IR & Payroll', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(22, 'KDPB', 'Kepala Departemen Pengembangan Bisnis & Stratek', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(23, 'AUKU', 'Auditor Keuangan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(24, 'AUOP', 'Auditor Operasional', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(25, 'KSEA', 'Kepala Seksi External Affairs', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(26, 'KSIA', 'Kepala Seksi Internal Affairs', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(27, 'KSAC', 'Kepala Seksi Advocation & Compliance', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(28, 'KSCA', 'Kepala Seksi Contract Administration', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(29, 'KSRM', 'Kepala Seksi Risk Management', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(30, 'KSSQ', 'Kepala Seksi System & Data Analyst (Quality)', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(31, 'KSSG', 'Kepala Seksi System & Data Analyst (HSSE & Green)', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(32, 'KSMI', 'Kepala Seksi Manufaktur & Investasi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(33, 'KSKK', 'Kepala Seksi Konstruksi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(34, 'KSMA', 'Kepala Seksi Manajemen & Akuntansi Pengolahan Data', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(35, 'KSVK', 'Kepala Seksi Verifikasi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(36, 'KSAK', 'Kepala Seksi Analisis Akuntansi & Pelaporan Keuangan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(37, 'KSAP', 'Kepala Seksi Administrasi Aset & Persediaan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(38, 'KSPJ', 'Tax Manager', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(39, 'KSAR', 'Kepala Seksi Arsip Keuangan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(40, 'KSPH', 'Kepala Seksi Penagihan & Hutang', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(41, 'KSPA', 'Kepala Seksi Pengendalian Anggaran', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(42, 'KSHB', 'Kepala Seksi Hubungan Bank & Non Bank', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(43, 'KSKL', 'Kepala Seksi Keuangan Anggaran & Likuiditas', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(44, 'KSRP', 'Kepala Seksi Perekrutan & Penempatan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(45, 'KSPP', 'Kepala Seksi Pengembangan & Penilaian', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(46, 'KSGA', 'Kepala Seksi GA', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(47, 'KSHI', 'Kepala Seksi Kepatuhan & Hubungan Industrial', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(48, 'KSKB', 'Kepala Seksi Kompensasi & Benefit', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(49, 'KSPB', 'Kepala Seksi Pengembangan Bisnis', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(50, 'KSIT', 'Kepala Seksi IT, ERP & BIM', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(51, 'KSSR', 'Kepala Seksi Strategi. Riset. Teknologi & PMO', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(52, 'SAUKU', 'Staf Audit Keuangan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(53, 'SAUOP', 'Staf Audit Operasional', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(54, 'SSEA', 'Staf Seksi External Affairs', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(55, 'SSIA', 'Staf Seksi Internal Affairs', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(56, 'SSAC', 'Staf Seksi Advocation & Compliance', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(57, 'SSCA', 'Staf Seksi Contract Administration', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(58, 'SSRM', 'Staf Seksi Risk Management', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(59, 'SQM', 'Staf Quality Management', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(60, 'SHM', 'Staf HSSE Management', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(61, 'SSSQ', 'Staf Seksi System & Data Analyst (Quality)', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(62, 'SSSG', 'Staf Seksi System & Data Analyst (HSSE & Green)', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(63, 'SSMI', 'Staf Seksi Manufaktur & Investasi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(64, 'SSKK', 'Staf Seksi Konstruksi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(65, 'SSMA', 'Staf Seksi Manajemen & Akuntansi Pengolahan Data', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(66, 'SSVK', 'Staf Seksi Verifikasi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(67, 'SSAK', 'Staf Seksi Analisis Akuntansi & Pelaporan Keuangan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(68, 'SSAP', 'Staf Seksi Administrasi Aset & Persediaan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(69, 'SSPJ', 'Tax Staff', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(70, 'SSAR', 'Staf Seksi Arsip Keuangan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(71, 'SSPH', 'Staf Seksi Penagihan & Hutang', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(72, 'SSPA', 'Staf Seksi Pengendalian Anggaran', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(73, 'SSHB', 'Staf Seksi Hubungan Bank & Non Bank', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(74, 'SSKL', 'Staf Seksi Keuangan Anggaran & Likuiditas', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(75, 'SSRP', 'Staf Seksi Perekrutan & Penempatan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(76, 'SSPP', 'Staf Seksi Pengembangan & Penilaian', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(77, 'SSGA', 'Staf Seksi GA', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(78, 'SSHI', 'Staf Seksi Kepatuhan & Hubungan Industrial', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(79, 'SSKB', 'Staf Seksi Kompensasi & Benefit', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(80, 'SSPB', 'Staf Seksi Pengembangan Bisnis', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(81, 'SSIT', 'Staf Seksi IT, ERP & BIM', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(82, 'SSSR', 'Staf Seksi Strategi. Riset. Teknologi & PMO', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(83, 'ADO', 'Asisten Direktur Operasional', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(84, 'KOP1', 'Kepala Divisi Operasi I', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(85, 'KOP2', 'Kepala Divisi Operasi II', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(86, 'KOP3', 'Kepala Divisi Operasi III', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(87, 'KDPS', 'Kepala Departemen Pemasaran', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(88, 'KDTK', 'Kepala Departemen Teknik', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(89, 'KDOP', 'Kepala Departemen Operasi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(90, 'KDAD', 'Kepala Departemen Administrasi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(91, 'KSPS', 'Kepala Seksi Pemasaran', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(92, 'LQS', 'Lead Quantity Surveyor', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(93, 'QSS', 'Quantity Surveyor Sipil', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(94, 'QSME', 'Quantity Surveyor MEP', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(95, 'QS', 'Quantity Surveyor', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(96, 'KSMS', 'Kepala Seksi Metode & Schedule', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(97, 'KSAT', 'Kepala Seksi Admin Teknik & PQ', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(98, 'KSHSE', 'Kepala Seksi QHSSE‐HK', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(99, 'KSPPIC', 'Kepala Seksi PPIC', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(100, 'KSKP', 'Kepala Seksi Keuangan & Penagihan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(101, 'KSAV', 'Kepala Seksi Akuntansi, Pajak & Verifikasi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(102, 'KSGH', 'Kepala Seksi GA & HC', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(103, 'KSE', 'Kepala Seksi Engineering', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(104, 'KW1', 'Kepala Workshop I', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(105, 'KW2', 'Kepala Workshop II', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(106, 'KSBP', 'Kepala Seksi Bisnis Peralatan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(107, 'SADO', 'Staf Asisten Direktur Operasional', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(108, 'SSPS', 'Staf Seksi Pemasaran', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(109, 'SQSS', 'Staf Quantity Surveyor Sipil', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(110, 'SQSME', 'Staf Quantity Surveyor MEP', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(111, 'SQS', 'Staf Quantity Surveyor', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(112, 'SSMS', 'Staf Seksi Metode & Schedule', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(113, 'SSAT', 'Staf Seksi Admin Teknik & PQ', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(114, 'SSHSE', 'Staf Seksi QHSSE‐HK', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(115, 'SSPPIC', 'Staf Seksi PPIC', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(116, 'SSKP', 'Staf Seksi Keuangan & Penagihan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(117, 'SSAV', 'Staf Seksi Akuntansi, Pajak & Verifikasi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(118, 'SSGH', 'Staf Seksi GA & HC', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(119, 'SSE', 'Staf Seksi Engineering', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(120, 'KW1', 'Staf Workshop I', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(121, 'KW2', 'Staf Workshop II', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(122, 'SSBP', 'Staf Seksi Bisnis Peralatan', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(123, 'GM', 'General Manager', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(124, 'PM', 'Project Manager', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(125, 'CM', 'Contraction Manager', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(126, 'SOM', 'Site Operation Manager', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(127, 'SEM', 'Site Engineer Manager', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(128, 'SAM', 'Site Administration Manager', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(129, 'QLTY', 'Quality', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(130, 'HSSE', 'HSSE', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(131, 'GSP', 'General Superintendent', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(132, 'SEMS', 'Site Engineer Methode & Schedule', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(133, 'SEP', 'Site Engineer Planning', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(134, 'POP', 'Pengendalian Operasi Proyek', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(135, 'QSB', 'Quantity Surveyor & BIM', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(136, 'SS', 'Structure Superintendent', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(137, 'AS', 'Arcitecture Superintendet', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(138, 'MEPS', 'MEP Superintendet', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(139, 'ES', 'Equipment Superintendet', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(140, 'SVY', 'Surveyor', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(141, 'DRAF', 'Drafter', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(142, 'SAK', 'Staf Administrasi Bidang Akuntansi', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(143, 'SASU', 'Staf Administrasi Bidang SDM & Umum', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL),
(144, 'LOG', 'Logistics', '', '', '', '', '', '', '', '', '', '', '', '2020-12-03 09:40:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_managements`
--

CREATE TABLE `leave_managements` (
  `id` bigint UNSIGNED NOT NULL,
  `date_start` date NOT NULL,
  `end_start` date NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL,
  `leave_type_id` bigint UNSIGNED NOT NULL,
  `leave_periode_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_periods`
--

CREATE TABLE `leave_periods` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_starting_balances`
--

CREATE TABLE `leave_starting_balances` (
  `id` bigint UNSIGNED NOT NULL,
  `amount` double(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `leave_type_id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `leave_period_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_per_year` double(15,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2020_11_26_000001_create_media_table', 1),
(9, '2020_11_26_000002_create_audit_logs_table', 1),
(10, '2020_11_26_000003_create_emergency_contacts_table', 1),
(11, '2020_11_26_000004_create_attendances_table', 1),
(12, '2020_11_26_000005_create_tasks_table', 1),
(13, '2020_11_26_000006_create_overtimes_table', 1),
(14, '2020_11_26_000007_create_leave_managements_table', 1),
(15, '2020_11_26_000008_create_leave_types_table', 1),
(16, '2020_11_26_000009_create_leave_periods_table', 1),
(17, '2020_11_26_000010_create_leave_starting_balances_table', 1),
(18, '2020_11_26_000011_create_employee_non_formal_educations_table', 1),
(19, '2020_11_26_000012_create_employee_organizations_table', 1),
(20, '2020_11_26_000013_create_employee_history_jobs_table', 1),
(21, '2020_11_26_000014_create_employee_documents_table', 1),
(22, '2020_11_26_000015_create_languages_table', 1),
(23, '2020_11_26_000016_create_employee_languages_table', 1),
(24, '2020_11_26_000017_create_courses_table', 1),
(25, '2020_11_26_000018_create_training_sessions_table', 1),
(26, '2020_11_26_000019_create_employee_training_sessions_table', 1),
(27, '2020_11_26_000020_create_employee_appraisals_table', 1),
(28, '2020_11_26_000021_create_employee_certifications_table', 1),
(29, '2020_11_26_000022_create_employment_statuses_table', 1),
(30, '2020_11_26_000023_create_employee_skills_table', 1),
(31, '2020_11_26_000024_create_provinces_table', 1),
(32, '2020_11_26_000025_create_permissions_table', 1),
(33, '2020_11_26_000026_create_roles_table', 1),
(34, '2020_11_26_000027_create_users_table', 1),
(35, '2020_11_26_000028_create_company_structures_table', 1),
(36, '2020_11_26_000029_create_job_titles_table', 1),
(37, '2020_11_26_000030_create_periodes_table', 1),
(38, '2020_11_26_000031_create_employees_table', 1),
(39, '2020_11_26_000032_create_countries_table', 1),
(40, '2020_11_26_000033_create_appraisal_periodes_table', 1),
(41, '2020_11_26_000034_create_education_table', 1),
(42, '2020_11_26_000035_create_employee_educations_table', 1),
(43, '2020_11_26_000036_create_employee_dependents_table', 1),
(44, '2020_11_26_000037_create_employee_employee_training_session_pivot_table', 1),
(45, '2020_11_26_000038_create_permission_role_pivot_table', 1),
(46, '2020_11_26_000039_create_role_user_pivot_table', 1),
(47, '2020_11_26_000040_create_overtime_task_pivot_table', 1),
(48, '2020_11_26_000041_add_relationship_fields_to_provinces_table', 1),
(49, '2020_11_26_000042_add_relationship_fields_to_emergency_contacts_table', 1),
(50, '2020_11_26_000043_add_relationship_fields_to_employee_dependents_table', 1),
(51, '2020_11_26_000044_add_relationship_fields_to_employee_training_sessions_table', 1),
(52, '2020_11_26_000045_add_relationship_fields_to_employee_certifications_table', 1),
(53, '2020_11_26_000046_add_relationship_fields_to_training_sessions_table', 1),
(54, '2020_11_26_000047_add_relationship_fields_to_courses_table', 1),
(55, '2020_11_26_000048_add_relationship_fields_to_employee_languages_table', 1),
(56, '2020_11_26_000049_add_relationship_fields_to_employee_history_jobs_table', 1),
(57, '2020_11_26_000050_add_relationship_fields_to_employee_documents_table', 1),
(58, '2020_11_26_000051_add_relationship_fields_to_company_structures_table', 1),
(59, '2020_11_26_000052_add_relationship_fields_to_employee_educations_table', 1),
(60, '2020_11_26_000053_add_relationship_fields_to_employee_organizations_table', 1),
(61, '2020_11_26_000054_add_relationship_fields_to_attendances_table', 1),
(62, '2020_11_26_000055_add_relationship_fields_to_employee_non_formal_educations_table', 1),
(63, '2020_11_26_000056_add_relationship_fields_to_employee_skills_table', 1),
(64, '2020_11_26_000057_add_relationship_fields_to_leave_starting_balances_table', 1),
(65, '2020_11_26_000058_add_relationship_fields_to_employees_table', 1),
(66, '2020_11_26_000059_add_relationship_fields_to_leave_managements_table', 1),
(67, '2020_11_26_000060_add_relationship_fields_to_tasks_table', 1),
(68, '2020_11_26_000061_add_relationship_fields_to_overtimes_table', 1),
(69, '2020_11_26_000062_add_relationship_fields_to_employee_appraisals_table', 1),
(71, '2020_12_01_023528_add_username_to_users_table', 2),
(72, '2020_12_01_061244_add_unique_to_employee_table', 3),
(73, '2020_12_02_081227_add_indirectsup2_to_employee_table', 4),
(74, '2020_12_03_014539_add_employeeunique_to_user_table', 4),
(75, '2021_01_04_023227_add_heads_to_companystructures_table', 5);

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
-- Table structure for table `overtimes`
--

CREATE TABLE `overtimes` (
  `id` bigint UNSIGNED NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `overtime_task`
--

CREATE TABLE `overtime_task` (
  `overtime_id` bigint UNSIGNED NOT NULL,
  `task_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `periodes`
--

CREATE TABLE `periodes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'personal_information_access', NULL, NULL, NULL),
(18, 'administration_access', NULL, NULL, NULL),
(19, 'audit_log_show', NULL, NULL, NULL),
(20, 'audit_log_access', NULL, NULL, NULL),
(21, 'company_structure_create', NULL, NULL, NULL),
(22, 'company_structure_edit', NULL, NULL, NULL),
(23, 'company_structure_show', NULL, NULL, NULL),
(24, 'company_structure_delete', NULL, NULL, NULL),
(25, 'company_structure_access', NULL, NULL, NULL),
(26, 'job_title_create', NULL, NULL, NULL),
(27, 'job_title_edit', NULL, NULL, NULL),
(28, 'job_title_show', NULL, NULL, NULL),
(29, 'job_title_delete', NULL, NULL, NULL),
(30, 'job_title_access', NULL, NULL, NULL),
(31, 'periode_create', NULL, NULL, NULL),
(32, 'periode_edit', NULL, NULL, NULL),
(33, 'periode_show', NULL, NULL, NULL),
(34, 'periode_delete', NULL, NULL, NULL),
(35, 'periode_access', NULL, NULL, NULL),
(36, 'appraisal_periode_create', NULL, NULL, NULL),
(37, 'appraisal_periode_edit', NULL, NULL, NULL),
(38, 'appraisal_periode_show', NULL, NULL, NULL),
(39, 'appraisal_periode_delete', NULL, NULL, NULL),
(40, 'appraisal_periode_access', NULL, NULL, NULL),
(41, 'employee_create', NULL, NULL, NULL),
(42, 'employee_edit', NULL, NULL, NULL),
(43, 'employee_show', NULL, NULL, NULL),
(44, 'employee_delete', NULL, NULL, NULL),
(45, 'employee_access', NULL, NULL, NULL),
(46, 'master_access', NULL, NULL, NULL),
(47, 'country_create', NULL, NULL, NULL),
(48, 'country_edit', NULL, NULL, NULL),
(49, 'country_show', NULL, NULL, NULL),
(50, 'country_delete', NULL, NULL, NULL),
(51, 'country_access', NULL, NULL, NULL),
(52, 'province_create', NULL, NULL, NULL),
(53, 'province_edit', NULL, NULL, NULL),
(54, 'province_show', NULL, NULL, NULL),
(55, 'province_delete', NULL, NULL, NULL),
(56, 'province_access', NULL, NULL, NULL),
(57, 'education_create', NULL, NULL, NULL),
(58, 'education_edit', NULL, NULL, NULL),
(59, 'education_show', NULL, NULL, NULL),
(60, 'education_delete', NULL, NULL, NULL),
(61, 'education_access', NULL, NULL, NULL),
(62, 'employee_education_create', NULL, NULL, NULL),
(63, 'employee_education_edit', NULL, NULL, NULL),
(64, 'employee_education_show', NULL, NULL, NULL),
(65, 'employee_education_delete', NULL, NULL, NULL),
(66, 'employee_education_access', NULL, NULL, NULL),
(67, 'employee_dependent_create', NULL, NULL, NULL),
(68, 'employee_dependent_edit', NULL, NULL, NULL),
(69, 'employee_dependent_show', NULL, NULL, NULL),
(70, 'employee_dependent_delete', NULL, NULL, NULL),
(71, 'employee_dependent_access', NULL, NULL, NULL),
(72, 'employee_skill_create', NULL, NULL, NULL),
(73, 'employee_skill_edit', NULL, NULL, NULL),
(74, 'employee_skill_show', NULL, NULL, NULL),
(75, 'employee_skill_delete', NULL, NULL, NULL),
(76, 'employee_skill_access', NULL, NULL, NULL),
(77, 'employee_certification_create', NULL, NULL, NULL),
(78, 'employee_certification_edit', NULL, NULL, NULL),
(79, 'employee_certification_show', NULL, NULL, NULL),
(80, 'employee_certification_delete', NULL, NULL, NULL),
(81, 'employee_certification_access', NULL, NULL, NULL),
(82, 'emergency_contact_create', NULL, NULL, NULL),
(83, 'emergency_contact_edit', NULL, NULL, NULL),
(84, 'emergency_contact_show', NULL, NULL, NULL),
(85, 'emergency_contact_delete', NULL, NULL, NULL),
(86, 'emergency_contact_access', NULL, NULL, NULL),
(87, 'time_management_access', NULL, NULL, NULL),
(88, 'attendance_create', NULL, NULL, NULL),
(89, 'attendance_edit', NULL, NULL, NULL),
(90, 'attendance_show', NULL, NULL, NULL),
(91, 'attendance_delete', NULL, NULL, NULL),
(92, 'attendance_access', NULL, NULL, NULL),
(93, 'employment_status_create', NULL, NULL, NULL),
(94, 'employment_status_edit', NULL, NULL, NULL),
(95, 'employment_status_show', NULL, NULL, NULL),
(96, 'employment_status_delete', NULL, NULL, NULL),
(97, 'employment_status_access', NULL, NULL, NULL),
(98, 'task_create', NULL, NULL, NULL),
(99, 'task_edit', NULL, NULL, NULL),
(100, 'task_show', NULL, NULL, NULL),
(101, 'task_delete', NULL, NULL, NULL),
(102, 'task_access', NULL, NULL, NULL),
(103, 'overtime_create', NULL, NULL, NULL),
(104, 'overtime_edit', NULL, NULL, NULL),
(105, 'overtime_show', NULL, NULL, NULL),
(106, 'overtime_delete', NULL, NULL, NULL),
(107, 'overtime_access', NULL, NULL, NULL),
(108, 'leave_access', NULL, NULL, NULL),
(109, 'leave_management_create', NULL, NULL, NULL),
(110, 'leave_management_edit', NULL, NULL, NULL),
(111, 'leave_management_show', NULL, NULL, NULL),
(112, 'leave_management_delete', NULL, NULL, NULL),
(113, 'leave_management_access', NULL, NULL, NULL),
(114, 'leave_type_create', NULL, NULL, NULL),
(115, 'leave_type_edit', NULL, NULL, NULL),
(116, 'leave_type_show', NULL, NULL, NULL),
(117, 'leave_type_delete', NULL, NULL, NULL),
(118, 'leave_type_access', NULL, NULL, NULL),
(119, 'leave_period_create', NULL, NULL, NULL),
(120, 'leave_period_edit', NULL, NULL, NULL),
(121, 'leave_period_show', NULL, NULL, NULL),
(122, 'leave_period_delete', NULL, NULL, NULL),
(123, 'leave_period_access', NULL, NULL, NULL),
(124, 'leave_starting_balance_create', NULL, NULL, NULL),
(125, 'leave_starting_balance_edit', NULL, NULL, NULL),
(126, 'leave_starting_balance_show', NULL, NULL, NULL),
(127, 'leave_starting_balance_delete', NULL, NULL, NULL),
(128, 'leave_starting_balance_access', NULL, NULL, NULL),
(129, 'employee_non_formal_education_create', NULL, NULL, NULL),
(130, 'employee_non_formal_education_edit', NULL, NULL, NULL),
(131, 'employee_non_formal_education_show', NULL, NULL, NULL),
(132, 'employee_non_formal_education_delete', NULL, NULL, NULL),
(133, 'employee_non_formal_education_access', NULL, NULL, NULL),
(134, 'employee_organization_create', NULL, NULL, NULL),
(135, 'employee_organization_edit', NULL, NULL, NULL),
(136, 'employee_organization_show', NULL, NULL, NULL),
(137, 'employee_organization_delete', NULL, NULL, NULL),
(138, 'employee_organization_access', NULL, NULL, NULL),
(139, 'employee_history_job_create', NULL, NULL, NULL),
(140, 'employee_history_job_edit', NULL, NULL, NULL),
(141, 'employee_history_job_show', NULL, NULL, NULL),
(142, 'employee_history_job_delete', NULL, NULL, NULL),
(143, 'employee_history_job_access', NULL, NULL, NULL),
(144, 'employee_document_create', NULL, NULL, NULL),
(145, 'employee_document_edit', NULL, NULL, NULL),
(146, 'employee_document_show', NULL, NULL, NULL),
(147, 'employee_document_delete', NULL, NULL, NULL),
(148, 'employee_document_access', NULL, NULL, NULL),
(149, 'performance_access', NULL, NULL, NULL),
(150, 'language_create', NULL, NULL, NULL),
(151, 'language_edit', NULL, NULL, NULL),
(152, 'language_show', NULL, NULL, NULL),
(153, 'language_delete', NULL, NULL, NULL),
(154, 'language_access', NULL, NULL, NULL),
(155, 'employee_language_create', NULL, NULL, NULL),
(156, 'employee_language_edit', NULL, NULL, NULL),
(157, 'employee_language_show', NULL, NULL, NULL),
(158, 'employee_language_delete', NULL, NULL, NULL),
(159, 'employee_language_access', NULL, NULL, NULL),
(160, 'course_create', NULL, NULL, NULL),
(161, 'course_edit', NULL, NULL, NULL),
(162, 'course_show', NULL, NULL, NULL),
(163, 'course_delete', NULL, NULL, NULL),
(164, 'course_access', NULL, NULL, NULL),
(165, 'training_session_create', NULL, NULL, NULL),
(166, 'training_session_edit', NULL, NULL, NULL),
(167, 'training_session_show', NULL, NULL, NULL),
(168, 'training_session_delete', NULL, NULL, NULL),
(169, 'training_session_access', NULL, NULL, NULL),
(170, 'employee_training_session_create', NULL, NULL, NULL),
(171, 'employee_training_session_edit', NULL, NULL, NULL),
(172, 'employee_training_session_show', NULL, NULL, NULL),
(173, 'employee_training_session_delete', NULL, NULL, NULL),
(174, 'employee_training_session_access', NULL, NULL, NULL),
(175, 'employee_appraisal_create', NULL, NULL, NULL),
(176, 'employee_appraisal_edit', NULL, NULL, NULL),
(177, 'employee_appraisal_show', NULL, NULL, NULL),
(178, 'employee_appraisal_delete', NULL, NULL, NULL),
(179, 'employee_appraisal_access', NULL, NULL, NULL),
(180, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint UNSIGNED NOT NULL,
  `permission_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(1, 82),
(1, 83),
(1, 84),
(1, 85),
(1, 86),
(1, 87),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(1, 93),
(1, 94),
(1, 95),
(1, 96),
(1, 97),
(1, 98),
(1, 99),
(1, 100),
(1, 101),
(1, 102),
(1, 103),
(1, 104),
(1, 105),
(1, 106),
(1, 107),
(1, 108),
(1, 109),
(1, 110),
(1, 111),
(1, 112),
(1, 113),
(1, 114),
(1, 115),
(1, 116),
(1, 117),
(1, 118),
(1, 119),
(1, 120),
(1, 121),
(1, 122),
(1, 123),
(1, 124),
(1, 125),
(1, 126),
(1, 127),
(1, 128),
(1, 129),
(1, 130),
(1, 131),
(1, 132),
(1, 133),
(1, 134),
(1, 135),
(1, 136),
(1, 137),
(1, 138),
(1, 139),
(1, 140),
(1, 141),
(1, 142),
(1, 143),
(1, 144),
(1, 145),
(1, 146),
(1, 147),
(1, 148),
(1, 149),
(1, 150),
(1, 151),
(1, 152),
(1, 153),
(1, 154),
(1, 155),
(1, 156),
(1, 157),
(1, 158),
(1, 159),
(1, 160),
(1, 161),
(1, 162),
(1, 163),
(1, 164),
(1, 165),
(1, 166),
(1, 167),
(1, 168),
(1, 169),
(1, 170),
(1, 171),
(1, 172),
(1, 173),
(1, 174),
(1, 175),
(1, 176),
(1, 177),
(1, 178),
(1, 179),
(1, 180),
(2, 149),
(2, 175),
(2, 177),
(2, 179),
(2, 180),
(3, 18),
(3, 41),
(3, 42),
(3, 43),
(3, 44),
(3, 45);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `code`, `created_at`, `updated_at`, `deleted_at`, `country_id`) VALUES
(1, 'Kimberley Bryan', 'Officia odio dolorib', '2020-11-30 09:46:16', '2020-11-30 09:46:16', NULL, 41),
(2, 'Rajah Melendez', 'Incidunt et atque d', '2020-11-30 09:46:22', '2020-11-30 09:46:22', NULL, 10),
(3, 'Teagan Barron', 'Tenetur dolorem aut', '2020-11-30 09:46:27', '2020-11-30 09:46:27', NULL, 201);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL),
(3, 'HC Admin', '2021-01-14 09:59:56', '2021-01-14 09:59:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(57, 2),
(58, 2),
(59, 2),
(60, 2),
(61, 2),
(62, 2),
(63, 2),
(64, 2),
(65, 2),
(66, 2),
(67, 2),
(68, 2),
(69, 2),
(70, 2),
(71, 2),
(72, 2),
(73, 2),
(74, 2),
(75, 2),
(76, 2),
(77, 2),
(78, 2),
(79, 2),
(80, 2),
(81, 2),
(82, 2),
(83, 2),
(84, 2),
(85, 2),
(86, 2),
(88, 2),
(89, 2),
(90, 2),
(91, 2),
(92, 2),
(93, 2),
(94, 2),
(95, 2),
(96, 2),
(97, 2),
(98, 2),
(99, 2),
(100, 2),
(101, 2),
(102, 2),
(103, 2),
(104, 2),
(105, 2),
(106, 2),
(107, 2),
(108, 2),
(109, 2),
(110, 2),
(111, 2),
(112, 2),
(113, 2),
(114, 2),
(115, 2),
(116, 2),
(117, 2),
(118, 2),
(119, 2),
(120, 2),
(121, 2),
(122, 2),
(123, 2),
(124, 2),
(125, 2),
(126, 2),
(127, 2),
(128, 2),
(129, 2),
(130, 2),
(131, 2),
(132, 2),
(133, 2),
(134, 2),
(135, 2),
(136, 2),
(137, 2),
(138, 2),
(139, 2),
(140, 2),
(141, 2),
(142, 2),
(143, 2),
(144, 2),
(145, 2),
(146, 2),
(147, 2),
(148, 2),
(149, 2),
(150, 2),
(151, 2),
(152, 2),
(153, 2),
(154, 2),
(155, 2),
(156, 2),
(157, 2),
(158, 2),
(159, 2),
(160, 2),
(161, 2),
(162, 2),
(163, 2),
(164, 2),
(165, 2),
(166, 2),
(167, 2),
(168, 2),
(169, 2),
(170, 2),
(171, 2),
(172, 2),
(173, 2),
(174, 2),
(175, 2),
(176, 2),
(177, 2),
(178, 2),
(179, 2),
(180, 2),
(181, 2),
(182, 2),
(183, 2),
(184, 2),
(185, 2),
(186, 2),
(87, 2),
(187, 2),
(188, 2),
(189, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime NOT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training_sessions`
--

CREATE TABLE `training_sessions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `scheduled` datetime NOT NULL,
  `due_date` datetime DEFAULT NULL,
  `delivery_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendance_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `course_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` bigint UNSIGNED DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `employee_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', NULL, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, NULL, NULL, NULL),
(3, 'Kusuma Yudha Ramadhani', 'ramadhani@amka.co.id', '171174111', 48, NULL, '$2y$10$buRo9Ra7ZyWalv38A06guuCz9HzBvr2x.PkhMgRK0b/itda9q51oW', NULL, '2020-12-03 02:22:59', '2020-12-04 01:21:36', NULL),
(4, 'ANTONIUS ARI NUGROHO', 'ari.nugroho@amka.co.id', '192117197', 46, NULL, '$2y$10$V8Rb0jaPFewabAC7ouu11.E3vpa70itaIon2nTrg50bIBx8.SOc56', '9OEKAGkGB541E3XCZ3rTD0Y72GQL3lQnyJmCbgOemhz6ZeleQ1zhP1PS1ID2', '2020-12-04 02:02:37', '2020-12-16 07:44:24', NULL),
(5, 'BRISBEN RASYID', 'bbrasyid@amka.co.id', '971002053', 1, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(6, 'WALUYO EDI SUWARNO', 'waluyo@amka.co.id', '942143040', 2, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(7, 'HILMI  DZAKWAN SHODIQ  HABIBULLOH', NULL, '192109193', 3, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(8, 'RETNO   TRI LUCKYTASARI', NULL, '142117090', 4, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(9, 'REMO  SANTOSO', NULL, '172091106', 5, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(10, 'DWI  HARYANTO', NULL, '191001220', 6, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(11, 'ROKHIMIN', 'rokhimin@amka.co.id', '952143047', 7, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(12, 'SYAHRIZAL', NULL, '931010033', 8, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(13, 'WILDAN   MUKHOLADUN WAHYUDI', NULL, '181003159', 9, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(14, 'EDWIN   QUIRIRA ZOLANDRE', NULL, '182117139', 10, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(15, 'HUGENG  RIHADI', NULL, '961001052', 11, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(16, 'IMELDA   CATHERINE M', 'catherine@amka.co.id', '011001058', 12, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(17, 'AKBAR  AMINUDIN', NULL, '061010080', 13, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(18, 'MUHAMAD  FAJAR', NULL, '191002210', 14, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(19, 'MARJUNI   DWI PRASETYA', NULL, '191001213', 15, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(20, 'AGUS  ISNANDITO', 'agus.isnandito@amka.co.id', '941002038', 16, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(21, 'ARI   MAYA WULANTARA', 'arimayawulantara@amka.co.id', '052174078', 17, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(22, 'YUSUF  ASHARI', NULL, '042174075', 18, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(23, 'BAYU   ANGIN M', 'bayu@amka.co.id', '011001062', 19, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(24, 'ARIS  HERMAWAN', NULL, '951002048', 20, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(25, 'SRI  WARDHANA', NULL, '952114049', 21, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(26, 'KAHFI   DWI SEPTIAN', 'kahfidwiseptian@amka.co.id', '172097107', 22, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(27, 'RUNSA  RINALDI', NULL, '971001056', 23, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(28, 'NURJANAH', 'anna@amka.co.id', '192176198', 24, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(29, 'JEFFRI  BRAVO', 'bravojeffri@amka.co.id', '161010092', 25, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(30, 'MOCH  FODLI', NULL, '862143004', 26, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(31, 'MUHAMAD   BANGKIT HUTAMA', NULL, '192117202', 27, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(32, 'JOKO  SETIYONO', NULL, '902117020', 28, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(33, 'RANDI  POLANDIKA', 'randipolandika@amka.co.id', '192117216', 29, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(34, 'M   AINUL YAQIN', 'ainul.yaqin@amka.co.id', '942117042', 30, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(35, 'ARDO   DIMAS BAGUS PRAYOGA', NULL, '182146139', 31, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(36, 'RISCHAN   ROYNALDO SIAGIAN', NULL, '192117215', 32, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(37, 'PANDHIT   SENO AJI', NULL, '172117102', 33, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(38, 'ONIH', NULL, '952117044', 34, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(39, 'RYAN   ANANTA AJI', NULL, '182117156', 35, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(40, 'PISESAWAN   DIDI YOSANI', NULL, '192117214', 36, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(41, 'LILIS  AGUSTINI', 'lilisa@amka.co.id', '862204006', 37, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(42, 'SYAFRIALI  RAMLI', 'syafrialiramli@amka.co.id', '922117027', 38, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(43, 'IRWAN', 'irwan@amka.co.id', '142143085', 39, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(44, 'ANTONY  RAMDHAN', 'aramdhan@amka.co.id', '172117115', 40, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(45, 'IRENE   RETNO WULAN', NULL, '032117073', 41, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(46, 'WAWA   MUHAMMAD FAHMI', 'wawa@amka.co.id', '032089072', 42, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(47, 'SRI   WULAN DHANI', 'wulan@amka.co.id', '162100100', 43, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(48, 'WINARTA', 'winarta@amka.co.id', '882204016', 44, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(49, 'HARIS  ISKANDAR', 'haris@amka.co.id', '192117199', 45, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(50, 'ANUGRAH MUHAMMAD RIDHO', 'ridho@amka.co.id', '181001157', 47, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(51, 'DERRY   JAKA PERMANA', 'derry@amka.co.id', '181174128', 49, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(52, 'DEDE  EFFENDI', 'dd@amka.co.id', '972204055', 50, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(53, 'LANTIP  PRAJITNO', 'lantip.prayitno@amka.co.id', '951002046', 51, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(54, 'FIRMAN   SRI SUGIHARTO', NULL, '021001067', 52, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(55, 'EDDY  SUMARYADI', NULL, '192143208', 53, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(56, 'PANGESTU   AKBAR SANTOSO', 'santoso_pangestu@amka.co.id', '161001094', 54, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(57, 'DEDEN  PRAYOGA', NULL, '182117187', 55, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(58, 'GUNTUR   KIAPMA PUTRA', 'guntur@amka.co.id', '911001024', 56, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(59, 'NURCANDRA  NUGRAHA', NULL, '201001229', 57, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(60, 'AGUNG   SATRIA KURNIAWAN', 'agungsatria@amka.co.id', '191001223', 58, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(61, 'ARIGHI  ELFARISI', 'elfarisrighi@amka.co.id', '181003129', 59, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(62, 'TANTO  BARNOWO', NULL, '181001179', 60, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(63, 'GUNTUR  FATHONI', NULL, '181001153', 61, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(64, 'ADIB   BUDI SANTOSO', NULL, '181003146', 62, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(65, 'YULISTIAWAN', NULL, '181001132', 63, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(66, 'MOEDI  OETOMO', NULL, '191001225', 64, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(67, 'BAGAS  RAHMATULLAH', NULL, '192053201', 65, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(68, 'SUTARNO', 'sutarno_amka@yahoo.co.id', '021001064', 66, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(69, 'ARISTIANTO', NULL, '181001191', 67, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(70, 'SAD   TITI MUMPUNI', NULL, '932100035', 68, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(71, 'FARISTA   WIDYA KIRANA', NULL, '191001219', 69, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(72, 'RACHMAD  WAHYUDI', NULL, '201001230', 70, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(73, 'YULIANTO', NULL, '201001228', 71, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(74, 'DANIS  TRIA KURNIA', NULL, '171005126', 72, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(75, 'ASWIN', NULL, '182143183', 73, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(76, 'WILDAN  RACHMANDIKA', NULL, '181001172', 74, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(77, 'ANTONIUS  YOGI NUGRAH  PRABOWO', NULL, '191001222', 75, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(78, 'NURHENDRO   YOGA PRATIKTO', NULL, '182117142', 76, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(79, 'ACHMAD  ALFI', NULL, '181001177', 77, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(80, 'AKBAR   NUGROHO RIANTO', NULL, '181001178', 78, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(81, 'NICO  PARULIAN', NULL, '161001099', 79, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(82, 'I MADE  JONI ARI  ARTHA', NULL, '181001176', 80, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(83, 'ALFRED  ADIANTO', NULL, '061003082', 81, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(84, 'MUHAMMAD   IQBAL TAWAKKAL', NULL, '182117166', 82, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(85, 'MUHAMMAD  NURRAHMANTO', NULL, '182117144', 83, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(86, 'NURUL  HUDA', NULL, '181001194', 84, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(87, 'HERRICO  SEPTIONI', NULL, '181001173', 85, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(88, 'MUHAMMAD YUNUS  YUNUS NURDIN', NULL, '181003158', 86, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(89, 'REGA   HANGASTA GIENPUTRA', NULL, '171009110', 87, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(90, 'EMHA  AFIF ASSAGAF', NULL, '181001164', 88, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(91, 'WAWAN   DWI ARIYANTO', NULL, '022117065', 89, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(92, 'RADITYA  NDARU PRIYA  PERDANA', NULL, '182117167', 90, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(93, 'RIZAL  FADILLAH', NULL, '182117140', 91, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(94, 'GALUH   AJENG SUWANDI', NULL, '172089105', 92, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(95, 'TM.  NASIR', NULL, '031003070', 93, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(96, 'I WAYAN  SUDENIA', NULL, '171001101', 94, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(97, 'BUDI  SANTOSO', NULL, '921001032', 95, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(98, 'ANGGA  SANTOSO', NULL, '081001083', 96, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(99, 'TRI  HARYANTO', NULL, '011001061', 97, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(100, 'PUJI  SIHONO', NULL, '031001069', 98, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(101, 'NAFIL   ATTAR MUHAMAD', NULL, '171012120', 99, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(102, 'M.  RICHZAD PRIMA  S', NULL, '191001200', 100, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(103, 'WAHYU  HIDAYAT', NULL, '882204017', 101, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(104, 'CALVIN   ALFIAN SUMANTRI', NULL, '912204023', 102, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(105, 'MUCHAMMAD   NUR BAIHAQI', NULL, '181001152', 103, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(106, 'MUHAMMAD   ZAHID ABDURRAHMAN', NULL, '171046113', 104, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(107, 'ARIEF   NUR ADIANTO', NULL, '191150218', 105, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(108, 'MAFTUCHIN   AL GHOZALI', NULL, '882204015', 106, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(109, 'HARPAL  SAPUTRA', NULL, '031002071', 107, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(110, 'TEGUH   BUDI SUKMONO', NULL, '902204022', 108, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(111, 'DUWI  SYAHLEVI', NULL, '061001079', 109, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(112, 'TOGI   SALOMO HUTAPEA', NULL, '161002091', 110, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(113, 'BUDI  IRWANTO', NULL, '041001074', 111, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(114, 'FITUNOP   INAYATU MS', NULL, '141001086', 112, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(115, 'WIKU   BAGAS SWASONO', NULL, '171016119', 113, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(116, 'AMELIA   INDAH PRATIWI', NULL, '181005155', 114, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(117, 'RAHADIAN  FAHMI', NULL, '191001212', 115, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(118, 'SUWARNO', NULL, '191001221', 116, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(119, 'IAN   MULYANA DIMAJA', NULL, '921003031', 117, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(120, 'ARY  HARIJADI', NULL, '181001181', 118, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(121, 'M.   TAREKH RIZKI', NULL, '192117192', 119, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(122, 'DEWI  SINTA', NULL, '181005130', 120, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(123, 'ALIF  SYARIFUDIN', NULL, '181005136', 121, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(124, 'HENRI', NULL, '051009077', 122, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(125, 'FERI  ALIMUDIN', NULL, '181046151', 123, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(126, 'ALFIAN   SETYO POESPITO', NULL, '182117131', 124, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(127, 'DYORIZKY  IMADUDDIN ANGGARA  PUTRA', NULL, '181001171', 125, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(128, 'DJOKO   WIBOWO UTOMO', NULL, '141005087', 126, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(129, 'MUHAMAD  ARIF', NULL, '161003095', 127, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(130, 'ESTER  MELINA', NULL, '161001098', 128, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(131, 'MUHAMMAD   SYAIFUL AFIF', NULL, '171001116', 129, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(132, 'RIDWAN   AKHIRUZ ZAMAN', NULL, '181001128', 130, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(133, 'REZA   ANGGA WIJAYA', NULL, '182117168', 131, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(134, 'UMAR   ALI SAID', NULL, '061001081', 132, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(135, 'BRYAN  ALIF', NULL, '161003097', 133, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(136, 'RAKASIWI  ERLANGGA', NULL, '191001207', 134, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(137, 'GIWA   WIBAWA PERMANA', NULL, '181001137', 135, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(138, 'RESTU   KUSUMA WIJAYA', NULL, '191005204', 136, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(139, 'FEBRIZON', NULL, '191001217', 137, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(140, 'MUHAMAD   HASAN SYAMSURI', NULL, '171151124', 138, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(141, 'I PUTU  ANDIRA MARTA  PUTRA', NULL, '181001174', 139, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(142, 'SULTAN   ALI MURFI', NULL, '192117203', 140, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(143, 'RACHMAT   ZAINAL IRFAN', NULL, '182117143', 141, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(144, 'DARYATNO', NULL, '012117057', 142, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(145, 'BAMBANG  HENDIKA', NULL, '182117133', 143, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(146, 'YATMAN S', NULL, '952205045', 144, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(147, 'HENDY  TRIATMANTO', NULL, '181002145', 145, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(148, 'FIRGHILI   JIILUL MUSTAQBAL', NULL, '171002122', 146, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(149, 'BAKHTIAR  EFFENDI', NULL, '191001194', 147, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(150, 'LEONARD  AGITA', NULL, '141034088', 148, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(151, 'MOCHAMAD BAYU TAUFIK  FIRDAUS', NULL, '171002123', 149, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(152, 'HARDIYUST  HAMIZA', NULL, '021002068', 150, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(153, 'MUHAMMAD   INDRA SETIAWAN', NULL, '181001150', 151, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(154, 'NASIRUDDIN  LATIEF', NULL, '931002037', 152, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(155, 'MUHAMMAD   IRSYAD RABBANI', NULL, '171007118', 153, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(156, 'C  ANI SURTIKANTI  P.', NULL, '922115029', 154, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(157, 'HERMAN   AMIRSYAH ZUFRIE', NULL, '201001227', 155, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(158, 'BONDAN  FIRMANSYAH', NULL, '942162039', 156, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(159, 'ASEP  KOMARUDIN', NULL, '972204054', 157, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(160, 'BAGUS  PANUNTUN', NULL, '191006205', 158, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(161, 'DYAH   AYU PRAJAWATI', NULL, '141001084', 159, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(162, 'YAZID   KHOIRUL ANWAR', NULL, '181003161', 160, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(163, 'AFRREDO  TRILASETYA AREMA  WIJAYA', NULL, '171002103', 161, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(164, 'B  TRI WAHYU  JATI', NULL, '921001030', 162, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(165, 'OMAN  SURYAMAN', NULL, '931203034', 163, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(166, 'SUPRIYANTO', NULL, '871203010', 164, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(167, 'JOKO  PRAYITNO', NULL, '021010063', 165, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(168, 'YULIANTO', NULL, '951203051', 166, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(169, 'AGUS  SUPRIYANTO', NULL, '921203028', 167, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(170, 'SETIYO', NULL, '191001224', 168, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(171, 'MUHAMMAD  DAMANHURI', NULL, '191001211', 169, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(172, 'SISWANTO', NULL, '882204011', 170, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(173, 'YUSOEF   ALFAJRIE BARAQBAH', NULL, '171002104', 171, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(174, 'BUDI  WIYANTO', NULL, '941007041', 172, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(175, 'EDY  SANTOSO', NULL, '931001036', 173, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(176, 'SARYOKO', NULL, '871203009', 174, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(177, 'MUHAMMAD   IMRAN ROSIADI', NULL, '191002209', 175, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(178, 'JOKO  LAKSONO', NULL, '021002066', 176, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(179, 'CAHYA   AHMAD TRISDIANTO', NULL, '171004121', 177, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(180, 'ZULFIAN  SYAFRI', NULL, '172117114', 178, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(181, 'PRADANA   PUTRA ANJASMARA', NULL, '181002170', 179, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(182, 'CALVIN   ALFIAN SUMANTRI', NULL, '191002208', 180, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(183, 'HAFIDH   ROKHMAN ROLDI', NULL, '182117165', 181, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(184, 'TRI   ADITYA NUGRAHA', NULL, '172056117', 182, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(185, 'SYAHIRUL  ALIM', NULL, '011001060', 183, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(186, 'YUSUF   BAMBANG SUROWO', NULL, '851203003', 184, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(187, 'SULAEMAN', NULL, '881203014', 185, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(188, 'MUCHAMMAD  JONED', NULL, '911003025', 186, NULL, '$2y$10$oqx3/QTU6nFOo0nHrOBTCuuuQaZ6Yw7i/TkHEUHXap1.zfKvAgrdK', NULL, '2020-12-16 11:56:05', NULL, NULL),
(189, 'HC', 'hcb@amka.co.id', 'hcb', NULL, NULL, '$2y$10$Z5bli.lJW3Gq6vzEKTHatuyvqY8OjF9b9VODaWMRfGvfYjTNLnlii', NULL, '2021-01-14 08:05:42', '2021-01-14 10:00:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appraisal_periodes`
--
ALTER TABLE `appraisal_periodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_2648325` (`employee_id`),
  ADD KEY `created_by_fk_2648482` (`created_by_id`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_structures`
--
ALTER TABLE `company_structures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_fk_2637835` (`parent_id`),
  ADD KEY `heads_id_fk_2648630` (`heads_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_code_unique` (`code`),
  ADD KEY `coordinator_fk_2654821` (`coordinator_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_contacts`
--
ALTER TABLE `emergency_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_2648181` (`employee_id`),
  ADD KEY `created_by_fk_2689424` (`created_by_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_employee_number_unique` (`employee_number`),
  ADD UNIQUE KEY `employees_private_email_unique` (`private_email`) USING BTREE,
  ADD UNIQUE KEY `employees_work_email_unique` (`work_email`) USING BTREE,
  ADD KEY `job_title_fk_2639323` (`job_title_id`),
  ADD KEY `department_fk_2639335` (`department_id`),
  ADD KEY `country_fk_2641759` (`country_id`),
  ADD KEY `nationality_fk_2642168` (`nationality_id`),
  ADD KEY `province_fk_2642170` (`province_id`),
  ADD KEY `supervisor_fk_2642173` (`supervisor_id`),
  ADD KEY `indirect_supervisors_fk_2642174` (`indirect_supervisors_id`),
  ADD KEY `created_by_fk_2642192` (`created_by_id`),
  ADD KEY `employment_status_fk_2648385` (`employment_status_id`),
  ADD KEY `indirect_supervisors2_fk_2642174` (`indirect_supervisors2_id`);

--
-- Indexes for table `employee_appraisals`
--
ALTER TABLE `employee_appraisals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_2663831` (`employee_id`),
  ADD KEY `period_fk_2663832` (`period_id`),
  ADD KEY `evaluator_fk_2663833` (`evaluator_id`),
  ADD KEY `created_by_fk_2663873` (`created_by_id`);

--
-- Indexes for table `employee_certifications`
--
ALTER TABLE `employee_certifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_2648172` (`employee_id`),
  ADD KEY `created_by_fk_2648179` (`created_by_id`);

--
-- Indexes for table `employee_dependents`
--
ALTER TABLE `employee_dependents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_2642941` (`employee_id`),
  ADD KEY `created_by_fk_2642949` (`created_by_id`);

--
-- Indexes for table `employee_documents`
--
ALTER TABLE `employee_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_2654516` (`created_by_id`);

--
-- Indexes for table `employee_educations`
--
ALTER TABLE `employee_educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_fk_2642428` (`education_id`),
  ADD KEY `employee_fk_2642429` (`employee_id`),
  ADD KEY `created_by_fk_2642436` (`created_by_id`);

--
-- Indexes for table `employee_employee_training_session`
--
ALTER TABLE `employee_employee_training_session`
  ADD KEY `employee_training_session_id_fk_2654912` (`employee_training_session_id`),
  ADD KEY `employee_id_fk_2654912` (`employee_id`);

--
-- Indexes for table `employee_history_jobs`
--
ALTER TABLE `employee_history_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_2654499` (`employee_id`),
  ADD KEY `job_fk_2654500` (`job_id`),
  ADD KEY `department_fk_2654501` (`department_id`),
  ADD KEY `created_by_fk_2654509` (`created_by_id`);

--
-- Indexes for table `employee_languages`
--
ALTER TABLE `employee_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_2654524` (`employee_id`),
  ADD KEY `languages_fk_2654525` (`languages_id`),
  ADD KEY `created_by_fk_2689425` (`created_by_id`);

--
-- Indexes for table `employee_non_formal_educations`
--
ALTER TABLE `employee_non_formal_educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_2654407` (`created_by_id`);

--
-- Indexes for table `employee_organizations`
--
ALTER TABLE `employee_organizations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_2654435` (`created_by_id`);

--
-- Indexes for table `employee_skills`
--
ALTER TABLE `employee_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_2648164` (`employee_id`),
  ADD KEY `created_by_fk_2648168` (`created_by_id`);

--
-- Indexes for table `employee_training_sessions`
--
ALTER TABLE `employee_training_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `training_session_fk_2654913` (`training_session_id`),
  ADD KEY `created_by_fk_2654920` (`created_by_id`);

--
-- Indexes for table `employment_statuses`
--
ALTER TABLE `employment_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job_titles`
--
ALTER TABLE `job_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_managements`
--
ALTER TABLE `leave_managements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_2648539` (`employee_id`),
  ADD KEY `created_by_fk_2648547` (`created_by_id`),
  ADD KEY `leave_type_fk_2648629` (`leave_type_id`),
  ADD KEY `leave_periode_fk_2648630` (`leave_periode_id`);

--
-- Indexes for table `leave_periods`
--
ALTER TABLE `leave_periods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_starting_balances`
--
ALTER TABLE `leave_starting_balances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leave_type_fk_2650271` (`leave_type_id`),
  ADD KEY `employee_fk_2650272` (`employee_id`),
  ADD KEY `leave_period_fk_2650273` (`leave_period_id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `overtimes`
--
ALTER TABLE `overtimes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_2648438` (`employee_id`),
  ADD KEY `created_by_fk_2648447` (`created_by_id`);

--
-- Indexes for table `overtime_task`
--
ALTER TABLE `overtime_task`
  ADD KEY `overtime_id_fk_2648441` (`overtime_id`),
  ADD KEY `task_id_fk_2648441` (`task_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `periodes`
--
ALTER TABLE `periodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_2637649` (`role_id`),
  ADD KEY `permission_id_fk_2637649` (`permission_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_fk_2641755` (`country_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_2637658` (`user_id`),
  ADD KEY `role_id_fk_2637658` (`role_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_2648394` (`created_by_id`);

--
-- Indexes for table `training_sessions`
--
ALTER TABLE `training_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_fk_2654884` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `employee_id_fk_2642174` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appraisal_periodes`
--
ALTER TABLE `appraisal_periodes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `company_structures`
--
ALTER TABLE `company_structures`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emergency_contacts`
--
ALTER TABLE `emergency_contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `employee_appraisals`
--
ALTER TABLE `employee_appraisals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_certifications`
--
ALTER TABLE `employee_certifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_dependents`
--
ALTER TABLE `employee_dependents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_documents`
--
ALTER TABLE `employee_documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_educations`
--
ALTER TABLE `employee_educations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_history_jobs`
--
ALTER TABLE `employee_history_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_languages`
--
ALTER TABLE `employee_languages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_non_formal_educations`
--
ALTER TABLE `employee_non_formal_educations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_organizations`
--
ALTER TABLE `employee_organizations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_skills`
--
ALTER TABLE `employee_skills`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_training_sessions`
--
ALTER TABLE `employee_training_sessions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employment_statuses`
--
ALTER TABLE `employment_statuses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_titles`
--
ALTER TABLE `job_titles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_managements`
--
ALTER TABLE `leave_managements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_periods`
--
ALTER TABLE `leave_periods`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_starting_balances`
--
ALTER TABLE `leave_starting_balances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

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
-- AUTO_INCREMENT for table `overtimes`
--
ALTER TABLE `overtimes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periodes`
--
ALTER TABLE `periodes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_sessions`
--
ALTER TABLE `training_sessions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `created_by_fk_2648482` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_fk_2648325` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `company_structures`
--
ALTER TABLE `company_structures`
  ADD CONSTRAINT `heads_id_fk_2648630` FOREIGN KEY (`heads_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `parent_fk_2637835` FOREIGN KEY (`parent_id`) REFERENCES `company_structures` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `coordinator_fk_2654821` FOREIGN KEY (`coordinator_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `emergency_contacts`
--
ALTER TABLE `emergency_contacts`
  ADD CONSTRAINT `created_by_fk_2689424` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_fk_2648181` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `country_fk_2641759` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `created_by_fk_2642192` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `department_fk_2639335` FOREIGN KEY (`department_id`) REFERENCES `company_structures` (`id`),
  ADD CONSTRAINT `employment_status_fk_2648385` FOREIGN KEY (`employment_status_id`) REFERENCES `employment_statuses` (`id`),
  ADD CONSTRAINT `indirect_supervisors2_fk_2642174` FOREIGN KEY (`indirect_supervisors2_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `indirect_supervisors_fk_2642174` FOREIGN KEY (`indirect_supervisors_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `job_title_fk_2639323` FOREIGN KEY (`job_title_id`) REFERENCES `job_titles` (`id`),
  ADD CONSTRAINT `nationality_fk_2642168` FOREIGN KEY (`nationality_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `province_fk_2642170` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`),
  ADD CONSTRAINT `supervisor_fk_2642173` FOREIGN KEY (`supervisor_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employee_appraisals`
--
ALTER TABLE `employee_appraisals`
  ADD CONSTRAINT `created_by_fk_2663873` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_fk_2663831` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `evaluator_fk_2663833` FOREIGN KEY (`evaluator_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `period_fk_2663832` FOREIGN KEY (`period_id`) REFERENCES `appraisal_periodes` (`id`);

--
-- Constraints for table `employee_certifications`
--
ALTER TABLE `employee_certifications`
  ADD CONSTRAINT `created_by_fk_2648179` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_fk_2648172` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employee_dependents`
--
ALTER TABLE `employee_dependents`
  ADD CONSTRAINT `created_by_fk_2642949` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_fk_2642941` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employee_documents`
--
ALTER TABLE `employee_documents`
  ADD CONSTRAINT `created_by_fk_2654516` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employee_educations`
--
ALTER TABLE `employee_educations`
  ADD CONSTRAINT `created_by_fk_2642436` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `education_fk_2642428` FOREIGN KEY (`education_id`) REFERENCES `education` (`id`),
  ADD CONSTRAINT `employee_fk_2642429` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employee_employee_training_session`
--
ALTER TABLE `employee_employee_training_session`
  ADD CONSTRAINT `employee_id_fk_2654912` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_training_session_id_fk_2654912` FOREIGN KEY (`employee_training_session_id`) REFERENCES `employee_training_sessions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_history_jobs`
--
ALTER TABLE `employee_history_jobs`
  ADD CONSTRAINT `created_by_fk_2654509` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `department_fk_2654501` FOREIGN KEY (`department_id`) REFERENCES `company_structures` (`id`),
  ADD CONSTRAINT `employee_fk_2654499` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `job_fk_2654500` FOREIGN KEY (`job_id`) REFERENCES `job_titles` (`id`);

--
-- Constraints for table `employee_languages`
--
ALTER TABLE `employee_languages`
  ADD CONSTRAINT `created_by_fk_2689425` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_fk_2654524` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `languages_fk_2654525` FOREIGN KEY (`languages_id`) REFERENCES `languages` (`id`);

--
-- Constraints for table `employee_non_formal_educations`
--
ALTER TABLE `employee_non_formal_educations`
  ADD CONSTRAINT `created_by_fk_2654407` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employee_organizations`
--
ALTER TABLE `employee_organizations`
  ADD CONSTRAINT `created_by_fk_2654435` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employee_skills`
--
ALTER TABLE `employee_skills`
  ADD CONSTRAINT `created_by_fk_2648168` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_fk_2648164` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employee_training_sessions`
--
ALTER TABLE `employee_training_sessions`
  ADD CONSTRAINT `created_by_fk_2654920` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `training_session_fk_2654913` FOREIGN KEY (`training_session_id`) REFERENCES `training_sessions` (`id`);

--
-- Constraints for table `leave_managements`
--
ALTER TABLE `leave_managements`
  ADD CONSTRAINT `created_by_fk_2648547` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_fk_2648539` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `leave_periode_fk_2648630` FOREIGN KEY (`leave_periode_id`) REFERENCES `leave_periods` (`id`),
  ADD CONSTRAINT `leave_type_fk_2648629` FOREIGN KEY (`leave_type_id`) REFERENCES `leave_types` (`id`);

--
-- Constraints for table `leave_starting_balances`
--
ALTER TABLE `leave_starting_balances`
  ADD CONSTRAINT `employee_fk_2650272` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `leave_period_fk_2650273` FOREIGN KEY (`leave_period_id`) REFERENCES `leave_periods` (`id`),
  ADD CONSTRAINT `leave_type_fk_2650271` FOREIGN KEY (`leave_type_id`) REFERENCES `leave_types` (`id`);

--
-- Constraints for table `overtimes`
--
ALTER TABLE `overtimes`
  ADD CONSTRAINT `created_by_fk_2648447` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_fk_2648438` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `overtime_task`
--
ALTER TABLE `overtime_task`
  ADD CONSTRAINT `overtime_id_fk_2648441` FOREIGN KEY (`overtime_id`) REFERENCES `overtimes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `task_id_fk_2648441` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_2637649` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_2637649` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `provinces`
--
ALTER TABLE `provinces`
  ADD CONSTRAINT `country_fk_2641755` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_2637658` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_2637658` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `created_by_fk_2648394` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `training_sessions`
--
ALTER TABLE `training_sessions`
  ADD CONSTRAINT `course_fk_2654884` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `employee_id_fk_2642174` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
