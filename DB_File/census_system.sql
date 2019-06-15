-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 04:19 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `census_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `house_name_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road_name_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `union` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `house_name_no`, `road_name_no`, `village_name`, `union`, `post_code`, `thana_name`, `district`, `created_at`, `updated_at`) VALUES
(1, 1, 'kkk', 'jjj', 'lll', 'aaaa', 'sssss', 'www', NULL, '2019-01-12 10:52:54', '2019-01-12 10:53:03'),
(2, 1, 'kkk', 'jjj', 'lll', 'aaaa', 'sssss', 'www', NULL, '2019-01-12 10:52:54', '2019-01-12 10:53:03'),
(3, 2, 'kkk', 'ddd', 'eee', 'jhjkhb', NULL, NULL, NULL, '2019-01-18 11:39:42', '2019-01-18 11:39:42'),
(4, 2, 'kkk', 'ddd', 'eee', 'jhjkhb', NULL, NULL, NULL, '2019-01-18 11:39:42', '2019-01-18 11:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `house_holds`
--

CREATE TABLE `house_holds` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `house_own_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_wall` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latrin_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_land` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_of_water` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_person_in_abroad` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electricity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `house_holds`
--

INSERT INTO `house_holds` (`id`, `user_id`, `house_own_type`, `house_wall`, `latrin_type`, `total_land`, `source_of_water`, `occupation`, `number_of_person_in_abroad`, `electricity`, `created_at`, `updated_at`) VALUES
(2, 1, 'Own', NULL, 'Paka-Sanitary', NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-12 14:36:19'),
(3, 2, 'Own', 'Brick', 'Paka-Sanitary', 'No Land', NULL, NULL, NULL, NULL, '2019-01-18 11:38:43', '2019-01-18 11:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `nid` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `bid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_with_khana` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `living_style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `nid`, `user_id`, `bid`, `name`, `birth_date`, `occupation`, `education`, `relation_with_khana`, `present_address`, `mobile_no`, `sex`, `marital_status`, `religion`, `nationality`, `living_style`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, '333333', 'wwww', NULL, NULL, NULL, NULL, NULL, NULL, 'MALE', 'MARRIED', NULL, NULL, 'DED', '2019-01-12 15:59:09', '2019-01-12 18:07:51'),
(2, NULL, 2, '3', 'mmmok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MARRIED', NULL, 'OTHERS', NULL, '2019-01-18 11:41:40', '2019-01-18 11:41:40');

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
(3, '2019_01_10_095232_create_addresses_table', 1),
(4, '2019_01_10_095534_create_house_holds_table', 1),
(5, '2019_01_10_095615_create_members_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nid`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mokbul', 'admin@gmail.com', '123456', '$2y$10$lThHSZIessAm8f34gg3pk.I1RGRnosXrSVlGnal3ldY284/DwISGS', '5AKXIhhGDubiHPWdMplr0LbKhFmgpMUXwmjehOmVvh2y2o1h4HpPD8Z4BBvJ', '2019-01-12 10:52:38', '2019-01-12 10:52:38'),
(2, 'mokbul', 'aarong@gmail.com', '1234567', '$2y$10$/Ks9phRNMbDDa.RSSl/oFeRJ3rXp3kYu2AJNUN2V7PKX16yE78eVm', 'N6xhqTYvYrX7HBbOj0LiDOPgXlj976M4Cg4MSOK49M0EGn93dFWL1w1Vk07e', '2019-01-18 11:38:43', '2019-01-18 11:38:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `house_holds`
--
ALTER TABLE `house_holds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `house_holds_user_id_foreign` (`user_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_user_id_foreign` (`user_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nid_unique` (`nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `house_holds`
--
ALTER TABLE `house_holds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `house_holds`
--
ALTER TABLE `house_holds`
  ADD CONSTRAINT `house_holds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
