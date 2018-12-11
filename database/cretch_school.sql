-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2018 at 11:44 AM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.1.19-1+ubuntu17.10.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cretch_school`
--

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
(3, '2018_12_06_191740_create_profiles_table', 1),
(4, '2018_12_06_200802_create_child_table', 1),
(5, '2018_12_07_200410_create_parent_table', 2),
(6, '2018_12_08_180834_create_child_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isadmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `phone`, `username`, `ip_address`, `email`, `password`, `isadmin`, `avatar`, `provider`, `provider_id`, `access_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 51055825, 'cretch school', '+2348120960876', 'admin', '127.0.0.1', 'peacejohns995@gmail.com', '$2y$10$cCI32bn7sTP1TbTlhgXjaephUdMptFHEcHVXVaaNZlfDLaL333V0.', 'admin', NULL, NULL, NULL, NULL, '7figEGmGviYM0XfSWejh0vyAvMjxl2f98EO1Tq3IEf7uGrlPHzYAEpIMJuQf', '2018-12-07 17:48:51', '2018-12-07 17:48:51'),
(26, 4225510, 'Akpan Johnson', '342354252', 'Akpan Johnson4225510', '127.0.0.1', 'esurfonline@gmail.com', '$2y$10$KuVftcMmgMRHuCUux/2AA.i0RWTr97yh/5tVjw.5AGQxmYulwaINC', 'default', NULL, NULL, NULL, NULL, NULL, '2018-12-08 14:08:17', '2018-12-08 14:08:17'),
(28, 47664652, 'Peace Johnson Akpan', '+2348120960876', 'Peace Johnson Akpan47664652', '127.0.0.1', 'peacejohn5@gmail.com', '$2y$10$1CZ4idEdx5CcObJVEK2ahOGOlMoTp8NbnGhC0kFz5edi0A/w7gPHC', 'default', NULL, NULL, NULL, NULL, NULL, '2018-12-08 14:08:55', '2018-12-08 14:08:55'),
(29, 9132582, 'Peace Johnson Akpan', '+2348120960876', 'Peace Johnson Akpan9132582', '127.0.0.1', 'peacejo@gmail.com', '$2y$10$0Py7W/esP1gg9KRj1iQbbuY93SnGeTYadM/PBug.cwSDblAC4t.D6', 'default', NULL, NULL, NULL, NULL, NULL, '2018-12-08 14:20:31', '2018-12-08 14:20:31'),
(30, 229212, 'Peace Johnson Akpan', '+2348120960876', 'Peace Johnson Akpan229212', '127.0.0.1', 'Flexy_dea@yahoo.com', '$2y$10$xcvdb34sNy0yM31cQIvsdeUGwN44LcmG2.lHYVQzMZPIW9DuFLGni', 'default', NULL, NULL, NULL, NULL, NULL, '2018-12-08 14:22:26', '2018-12-08 14:22:26'),
(31, 48931799, 'Kenneth Akpan johnson', '+2348120960876', 'Kenneth Akpan johnson48931799', '127.0.0.1', 'fgryykenneyg50@gmail.com', '$2y$10$vdzP3P9oVS/othK56jKV/eh8lAlmYpybrjsMyfTXkd3nHzc7xXP5a', 'default', NULL, NULL, NULL, NULL, NULL, '2018-12-08 14:23:01', '2018-12-08 14:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_childs`
--

CREATE TABLE `user_childs` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_id` bigint(20) NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bigint(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_childs`
--

INSERT INTO `user_childs` (`id`, `reg_id`, `parent_id`, `email`, `full_name`, `class`, `DOB`, `gender`, `pickup_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 5498031, 4225510, 'kenneyg50@gmail.com', 'flexdea', 'jss1', '1991-08-24', 'male', '19151251', 0, '2018-12-08 17:15:45', '2018-12-10 09:42:55'),
(2, 41503219, 229212, 'esurfonline@gmail.com', 'Akpan Junior', 'jss2', '1991-08-25', 'male', '3195448', 0, '2018-12-08 17:17:52', '2018-12-10 09:43:08'),
(3, 50447947, 4225510, 'kennyendowed@hotmail.com', 'Akpan faith', 'jss1', '1991-08-24', 'male', '16069280', 0, '2018-12-10 09:36:11', '2018-12-10 09:43:31'),
(4, 4560834, 47664652, 'Flexy_dea@yahoo.com', 'mary', 'jss2', '1991-08-24', 'femail', '19753509', 0, '2018-12-10 09:36:29', '2018-12-10 09:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_parent`
--

CREATE TABLE `user_parent` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `full_name`, `address`, `email`, `phone_number`, `gender`, `Occupation`, `created_at`, `updated_at`) VALUES
(1, 51055825, '0', '0', 'kenneyg50@gmail.com', '+2348120960876', '0', '0', '2018-12-07 17:48:51', '2018-12-07 17:48:51'),
(13, 4225510, 'Akpan Johnson', '3 Neburagho street, Flat 2', 'kennyendowed@hotmail.com', '342354252', 'male', 'teacher', '2018-12-08 14:08:17', '2018-12-08 14:08:17'),
(14, 47664652, 'Peace Johnson Akpan', '3 Neburagho street, Flat 2', 'kennyendowed@ymail.com', '+2348120960876', 'male', 'civil servent', '2018-12-08 14:08:55', '2018-12-08 14:08:55'),
(15, 229212, 'Peace Johnson Akpan', '3 Neburagho street', 'peacejohui@gmail.com', '+2348120960876', 'male', 'student', '2018-12-08 14:22:26', '2018-12-08 14:22:26'),
(16, 48931799, 'Kenneth Akpan johnson', 'No 3 Neburagho street', 'fgryykenneyg50@gmail.com', '+2348120960876', 'male', 'student', '2018-12-08 14:23:01', '2018-12-08 14:23:01');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_childs`
--
ALTER TABLE `user_childs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_childs_reg_id_unique` (`reg_id`);

--
-- Indexes for table `user_parent`
--
ALTER TABLE `user_parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_profiles_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `user_profiles_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user_childs`
--
ALTER TABLE `user_childs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_parent`
--
ALTER TABLE `user_parent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
