-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2020 at 08:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_harga`
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
(3, '2020_10_10_120842_create_stuffs_table', 1),
(4, '2020_10_10_121737_create_prices_table', 1);

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
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `stuff_id` bigint(20) UNSIGNED NOT NULL,
  `price_status` enum('approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'rejected',
  `price_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `price`, `stuff_id`, `price_status`, `price_date`, `created_at`, `updated_at`) VALUES
(1, 10000, 1, 'approved', '2020-10-09', NULL, '2020-10-11 00:45:24'),
(2, 11000, 1, 'rejected', '2020-10-10', '2020-10-10 06:00:21', '2020-10-10 06:00:21'),
(3, 11500, 1, 'approved', '2020-10-11', '2020-10-11 00:56:15', '2020-10-11 01:21:35'),
(4, 11000, 1, 'approved', '2020-10-10', '2020-10-11 01:35:18', '2020-10-11 01:35:18'),
(5, 13000, 1, 'approved', '2020-10-10', '2020-10-11 01:35:32', '2020-10-11 01:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `stuffs`
--

CREATE TABLE `stuffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stuff_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stuffs`
--

INSERT INTO `stuffs` (`id`, `stuff_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ayam', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime cumque quod impedit ipsum fugiat provident iure, explicabo assumenda delectus recusandae asperiores dolorum, pariatur odit nihil eos atque voluptate ipsa.', NULL, NULL),
(2, 'Ikan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime cumque quod impedit ipsum fugiat provident iure, explicabo assumenda delectus recusandae asperiores dolorum, pariatur odit nihil eos atque voluptate ipsa.', NULL, NULL),
(3, 'Udang', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime cumque quod impedit ipsum fugiat provident iure, explicabo assumenda delectus recusandae asperiores dolorum, pariatur odit nihil eos atque voluptate ipsa.', NULL, NULL),
(4, 'Cabai', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime cumque quod impedit ipsum fugiat provident iure, explicabo assumenda delectus recusandae asperiores dolorum, pariatur odit nihil eos atque voluptate ipsa.', NULL, NULL),
(5, 'Kepiting', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime cumque quod impedit ipsum fugiat provident iure, explicabo assumenda delectus recusandae asperiores dolorum, pariatur odit nihil eos atque voluptate ipsa.', NULL, NULL),
(6, 'Bayam', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime cumque quod impedit ipsum fugiat provident iure, explicabo assumenda delectus recusandae asperiores dolorum, pariatur odit nihil eos atque voluptate ipsa.', NULL, NULL),
(7, 'Bawang', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime cumque quod impedit ipsum fugiat provident iure, explicabo assumenda delectus recusandae asperiores dolorum, pariatur odit nihil eos atque voluptate ipsa.', NULL, NULL),
(8, 'Kangkung', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime cumque quod impedit ipsum fugiat provident iure, explicabo assumenda delectus recusandae asperiores dolorum, pariatur odit nihil eos atque voluptate ipsa.', NULL, NULL),
(9, 'Jahe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime cumque quod impedit ipsum fugiat provident iure, explicabo assumenda delectus recusandae asperiores dolorum, pariatur odit nihil eos atque voluptate ipsa.', NULL, NULL),
(10, 'Kunyit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime cumque quod impedit ipsum fugiat provident iure, explicabo assumenda delectus recusandae asperiores dolorum, pariatur odit nihil eos atque voluptate ipsa.', NULL, NULL),
(11, 'Lada', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex accusamus possimus mollitia veritatis architecto aperiam saepe itaque cum inventore, quo neque nemo et laborum minus id dignissimos labore corrupti officia!', '2020-10-11 02:02:44', '2020-10-11 02:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Person1', 'person1@gmail.com', 1, NULL, '$2y$10$joctMgqFMbLPs8cZ2LhPSOc6p.ziJfmrPn66OdHv..JZVSA7S4Qmq', NULL, NULL, NULL),
(2, 'Person2', 'person2@gmail.com', 2, NULL, '$2y$10$xnYmkwUx5auFa5H0AK1UyOOfsl4cc0lGPnxY6vhp97Yk9aaxsqeiK', NULL, NULL, NULL),
(3, 'Person3', 'person3@gmail.com', 3, NULL, '$2y$10$ZS1qi8IM0BCG4jt3K9bAG.FhzYn3K8HJYgSQXfeDOLRdmH8noSfvu', NULL, NULL, NULL);

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
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_stuff_id_foreign` (`stuff_id`);

--
-- Indexes for table `stuffs`
--
ALTER TABLE `stuffs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stuffs`
--
ALTER TABLE `stuffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_stuff_id_foreign` FOREIGN KEY (`stuff_id`) REFERENCES `stuffs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
