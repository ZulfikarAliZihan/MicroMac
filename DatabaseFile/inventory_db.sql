-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 12:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `entry_date`) VALUES
(32, 'Hp', '2020-03-11 00:00:00'),
(33, 'Acer', '2020-03-11 00:00:00'),
(34, 'Dell', '2020-03-11 00:00:00'),
(35, 'Asus', '2020-03-11 00:00:00'),
(37, 'Lenevo', '2020-03-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `brand_id`, `model_id`, `name`, `entry_date`) VALUES
(12, 37, 11, 'X280', '2020-03-11 00:00:00'),
(13, 35, 9, 'X042Ya', '2020-03-11 00:00:00'),
(14, 37, 5, 'T480', '2020-03-11 00:00:00'),
(15, 35, 4, 'G-897', '2020-03-11 00:00:00'),
(16, 33, 2, 'v3-574g', '2020-03-11 00:00:00'),
(17, 34, 3, 'B-479', '2020-03-11 00:00:00'),
(18, 33, 7, 'AN-515', '2020-03-11 00:00:00'),
(19, 34, 8, 'D-789', '2020-03-11 00:00:00'),
(20, 32, 1, 'b0083AX', '2020-03-11 00:00:00'),
(21, 32, 6, 'DA1078TU', '2020-03-11 00:00:00'),
(22, 37, 11, 'T-544', '2020-03-11 00:00:00'),
(23, 35, 4, 'G-646', '2020-03-11 00:00:00'),
(24, 37, 5, 'U45775', '2020-03-11 00:00:00'),
(25, 35, 9, 'Y-264', '2020-03-11 00:00:00'),
(26, 34, 3, 'N4-445', '2020-03-11 00:00:00'),
(27, 34, 8, 'U-5644', '2020-03-11 00:00:00'),
(28, 32, 1, 'FM1078TS', '2020-03-11 00:00:00'),
(29, 33, 2, 'V14-6664f', '2020-03-11 00:00:00'),
(30, 33, 7, 'B-6564', '2020-03-11 00:00:00'),
(31, 32, 6, 'Au5446fd', '2020-03-11 00:00:00'),
(32, 37, 11, 'T97-956', '2020-03-11 00:00:00'),
(33, 37, 5, 'TU4545', '2020-03-11 00:00:00'),
(34, 33, 2, 'E6-454f', '2020-03-11 00:00:00'),
(36, 34, 3, 'N87-g45', '2020-03-11 00:00:00'),
(37, 37, 1, 'PY4545d', '2020-03-11 00:00:00');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_09_072936_create_brands_table', 1),
(5, '2020_03_09_073849_create_items_table', 3),
(11, '2020_03_09_095705_create_models_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `brand_id`, `name`, `entry_date`) VALUES
(1, 32, 'Probook', '2020-03-11 00:00:00'),
(2, 33, 'Aspire', '2020-03-11 00:00:00'),
(3, 34, 'Notebook', '2020-03-11 00:00:00'),
(4, 35, 'Gaming', '2020-03-11 00:00:00'),
(5, 37, 'IdeaPad', '2020-03-11 00:00:00'),
(6, 32, 'pavilion', '2020-03-11 00:00:00'),
(7, 33, 'Nitro', '2020-03-11 00:00:00'),
(8, 34, 'Ultra', '2020-03-11 00:00:00'),
(9, 35, 'Yoga', '2020-03-11 00:00:00'),
(11, 37, 'Thinkpad', '2020-03-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
