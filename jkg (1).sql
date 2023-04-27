-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 07:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jkg`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `incoming_price` double DEFAULT NULL,
  `incoming_quantity` double DEFAULT NULL,
  `total_taka` double DEFAULT NULL,
  `outgoing_price` double DEFAULT NULL,
  `outgoing_quantity` double DEFAULT NULL,
  `balance_quantity` double DEFAULT NULL,
  `outgoing_price_2` double DEFAULT NULL,
  `entertainment_name` double DEFAULT NULL,
  `rent_type` double DEFAULT NULL,
  `others_expense` double DEFAULT NULL,
  `profit` double DEFAULT NULL,
  `lose` double DEFAULT NULL,
  `total_taka_add` double DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `selling_date` date DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `product_name`, `incoming_price`, `incoming_quantity`, `total_taka`, `outgoing_price`, `outgoing_quantity`, `balance_quantity`, `outgoing_price_2`, `entertainment_name`, `rent_type`, `others_expense`, `profit`, `lose`, `total_taka_add`, `purchase_date`, `selling_date`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', NULL, NULL, '2023-01-26 13:09:18', '2023-01-26 13:24:42'),
(2, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', NULL, NULL, '2023-01-26 13:11:35', '2023-01-26 13:24:42'),
(3, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', NULL, NULL, '2023-01-26 13:11:42', '2023-01-26 13:24:42'),
(4, NULL, 'Alu', 30, 5, 8, 3, 5, 4, 4, NULL, NULL, 4, NULL, NULL, 8, '2023-04-01', '2023-04-18', 'Active', NULL, 1, '2023-01-26 13:11:44', '2023-04-26 06:49:56'),
(5, NULL, 'Dim', 10, 2, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, 7, '2023-04-02', '2023-04-25', 'Active', NULL, 1, '2023-01-26 13:11:45', '2023-04-26 07:03:55'),
(6, NULL, 'Begune', 62, 1, NULL, NULL, NULL, NULL, 3, NULL, 3, NULL, NULL, NULL, 67, '2023-04-03', '2023-04-29', 'Active', NULL, 1, '2023-04-25 22:38:58', '2023-04-26 07:03:58'),
(7, NULL, 't', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', NULL, NULL, '2023-04-25 22:39:53', '2023-04-25 22:40:09'),
(8, NULL, 'r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', NULL, NULL, '2023-04-25 22:39:55', '2023-04-25 22:40:09'),
(9, NULL, '', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, 'Inactive', NULL, NULL, '2023-04-25 22:58:30', '2023-04-26 07:36:16'),
(10, NULL, '', NULL, NULL, 1, NULL, NULL, NULL, NULL, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', NULL, NULL, '2023-04-25 23:29:04', '2023-04-26 07:36:16'),
(11, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', NULL, NULL, '2023-04-26 01:29:08', '2023-04-26 07:36:16'),
(12, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-18', NULL, 'Inactive', NULL, 1, '2023-04-26 02:08:12', '2023-04-26 07:36:16'),
(13, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-17', NULL, 'Inactive', 1, 1, '2023-04-26 02:10:05', '2023-04-26 07:36:16'),
(14, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, NULL, '2023-04-26 07:29:26', '2023-04-26 07:35:40'),
(15, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, NULL, '2023-04-26 07:29:34', '2023-04-26 07:35:40'),
(16, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, NULL, '2023-04-26 07:34:34', '2023-04-26 07:35:40'),
(17, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, NULL, '2023-04-26 07:35:52', '2023-04-26 07:36:16'),
(18, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, NULL, '2023-04-26 07:36:40', '2023-04-26 22:56:44'),
(19, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, NULL, '2023-04-26 07:39:55', '2023-04-26 22:56:44'),
(20, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, NULL, '2023-04-26 22:51:52', '2023-04-26 22:56:44'),
(21, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, NULL, '2023-04-26 22:52:43', '2023-04-26 22:56:44'),
(22, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, NULL, '2023-04-26 22:53:06', '2023-04-26 22:56:44'),
(23, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-17', NULL, 'Inactive', 1, 1, '2023-04-26 22:57:04', '2023-04-26 23:03:41'),
(24, NULL, 'rrr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, 1, '2023-04-26 22:57:41', '2023-04-26 23:06:10'),
(25, NULL, '', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, 1, '2023-04-26 22:57:42', '2023-04-26 23:26:48'),
(26, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, NULL, '2023-04-26 22:57:43', '2023-04-26 23:08:56'),
(27, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24', NULL, 'Active', 1, 1, '2023-04-26 23:25:31', '2023-04-26 23:48:34'),
(28, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-25', NULL, 'Inactive', 1, 1, '2023-04-26 23:30:55', '2023-04-26 23:49:35'),
(29, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26', NULL, 'Active', 1, 1, '2023-04-26 23:47:17', '2023-04-26 23:48:39'),
(30, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-28', NULL, 'Active', 1, 1, '2023-04-26 23:48:47', '2023-04-26 23:48:58'),
(31, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive', 1, NULL, '2023-04-26 23:49:05', '2023-04-26 23:49:16'),
(32, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 1, NULL, '2023-04-26 23:50:45', '2023-04-26 23:50:45'),
(33, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 1, NULL, '2023-04-26 23:50:54', '2023-04-26 23:50:54'),
(34, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 1, NULL, '2023-04-26 23:50:56', '2023-04-26 23:50:56'),
(35, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 1, NULL, '2023-04-26 23:51:00', '2023-04-26 23:51:00'),
(36, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 1, NULL, '2023-04-26 23:51:02', '2023-04-26 23:51:02'),
(37, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 1, NULL, '2023-04-26 23:51:08', '2023-04-26 23:51:08'),
(38, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 1, NULL, '2023-04-26 23:51:28', '2023-04-26 23:51:28'),
(39, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 1, NULL, '2023-04-26 23:53:58', '2023-04-26 23:53:58'),
(40, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 1, NULL, '2023-04-26 23:54:43', '2023-04-26 23:54:43');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_28_193709_create_applications_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) NOT NULL COMMENT '1 = admin, 2 = user',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(14) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$HhOL6rU5yeXjZ2x3kS4/fue4LFhvtppN7E05I6c63x7tfTxegef1W', '01793478194', 'Qui saepe eius esse', 0, NULL, '2021-12-01 13:08:16', '2022-06-18 13:37:13'),
(57, 1, 'User 1', 'user1@gmail.com', NULL, '$2y$10$KLJ4io.yjfDfaS8BR05e7OFssSisJQ81REicKZlt1dkWFArRwExoi', NULL, NULL, 1, NULL, '2023-04-26 02:27:12', '2023-04-26 03:38:34'),
(59, 2, 'User 2', 'user2@gmail.com', NULL, '$2y$10$fDbSFxls/0oMphEz.StwHevB11fp4K9zaH3o2QDT2PfSIYca8hO/e', NULL, NULL, 0, NULL, '2023-04-26 03:19:50', '2023-04-26 03:19:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
