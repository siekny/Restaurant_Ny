-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 05:55 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax_images`
--

CREATE TABLE `ajax_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ajax_images`
--

INSERT INTO `ajax_images` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'fafa', '1548898975.jpg', '2019-01-30 18:42:55', '2019-01-30 18:42:55'),
(2, 'fafa', '1548899034.jpg', '2019-01-30 18:43:54', '2019-01-30 18:43:54'),
(3, 'fafa', '1548899045.jpg', '2019-01-30 18:44:05', '2019-01-30 18:44:05'),
(4, 'fafa', '1548899048.jpg', '2019-01-30 18:44:08', '2019-01-30 18:44:08'),
(5, 'fafa', '1548899048.jpg', '2019-01-30 18:44:08', '2019-01-30 18:44:08'),
(6, 'fafa', '1548899049.jpg', '2019-01-30 18:44:09', '2019-01-30 18:44:09'),
(7, 'fafa', '1548899049.jpg', '2019-01-30 18:44:09', '2019-01-30 18:44:09'),
(8, 'fafa', '1548899259.jpg', '2019-01-30 18:47:39', '2019-01-30 18:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `food_blogs`
--

CREATE TABLE `food_blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `blogName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addDate` datetime DEFAULT NULL,
  `addBy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_blogs`
--

INSERT INTO `food_blogs` (`id`, `blogName`, `addDate`, `addBy`, `description`, `image`, `created_at`, `updated_at`) VALUES
(62, 'Thai Food 11', NULL, 'Ny NY', 'Ny\'s always hungry!', '1549515252.2.jpg', '2019-02-05 20:18:57', '2019-02-06 21:54:12'),
(64, 'Testing', '2019-02-22 00:00:00', 'Kdom', 'Kdom is very kach', '1549515000.1.jpg', '2019-02-05 20:30:01', '2019-02-06 21:50:00'),
(65, 'Thai Food', NULL, 'Ny', NULL, '1549423937.2.jpg', '2019-02-05 20:32:17', '2019-02-05 20:32:17'),
(66, 'Thai Food', NULL, 'Ny', NULL, '1549424223.1.png', '2019-02-05 20:37:03', '2019-02-05 20:37:03'),
(69, 'Thai Food', NULL, 'Ny', NULL, '1549424601.1.jpg', '2019-02-05 20:43:21', '2019-02-05 20:43:21'),
(70, 'Thai Food', NULL, 'Ny', NULL, '1549424630.1.jpg', '2019-02-05 20:43:50', '2019-02-05 20:43:50'),
(71, 'Khmer Food', '2019-02-06 00:00:00', 'Na NY', 'I\'m really hungry now!', '1549424711.1.jpg', '2019-02-05 20:45:11', '2019-02-05 20:45:11'),
(72, 'Thai Food', NULL, 'Ny', NULL, '1549512171.2.jpg', '2019-02-06 21:02:51', '2019-02-06 21:02:51'),
(73, 'Thai Food', NULL, 'Ny', NULL, '1549512205.2.jpg', '2019-02-06 21:03:25', '2019-02-06 21:03:25'),
(74, 'Nyny', '2019-02-25 00:00:00', 'Ny', 'erttpoiiuytrew', '', '2019-02-06 21:12:44', '2019-02-06 21:12:44'),
(75, 'Nyny', '2019-02-27 00:00:00', 'NY NY', '455252twtq', '1549512811.1.png', '2019-02-06 21:13:31', '2019-02-06 21:13:31'),
(77, 'Thai Food', NULL, 'NY NY', NULL, '1549515275.1.jpg', '2019-02-06 21:54:35', '2019-02-06 21:54:35'),
(78, 'Thai Food', NULL, 'NY NY', NULL, '1549515309.1.jpg', '2019-02-06 21:55:09', '2019-02-06 21:55:09'),
(79, 'Thai Food', NULL, 'Ny', NULL, '1549515325.1.png', '2019-02-06 21:55:25', '2019-02-06 21:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `food_menus`
--

CREATE TABLE `food_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `blog_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_10_13_031332_create_food_blogs_table', 1),
(9, '2018_10_13_031354_create_food_menus_table', 1),
(10, '2018_10_13_031413_create_table_bookings_table', 1),
(11, '2019_01_31_013600_create_ajax_image_tabel', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sieknyhor@gmail.com', '$2y$10$rxtEB5pzl.wg6daFpDp/M.jVhbvytsZ8/URETSoAJqA76qb3Z9i0.', '2018-10-20 06:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `table_bookings`
--

CREATE TABLE `table_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `numPersons` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'siekny', 'sieknyhor@gmail.com', '$2y$10$zhCXDY/fmfAtc1yQgFi2yuo1XlvzhW4TUgoY/lRwhuL1590mYWQSG', NULL, '2018-10-13 05:30:38', '2018-10-13 05:30:38'),
(2, 'Ny', 'ny@gmail.com', '$2y$10$6wjGZUUjHm6DMOPrQmtZD.a1H7BVbhKvYfxzJdm8UR5o1GWDH4X2S', NULL, '2019-01-29 19:10:53', '2019-01-29 19:10:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax_images`
--
ALTER TABLE `ajax_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_blogs`
--
ALTER TABLE `food_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_menus`
--
ALTER TABLE `food_menus`
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
-- Indexes for table `table_bookings`
--
ALTER TABLE `table_bookings`
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
-- AUTO_INCREMENT for table `ajax_images`
--
ALTER TABLE `ajax_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `food_blogs`
--
ALTER TABLE `food_blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `food_menus`
--
ALTER TABLE `food_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_bookings`
--
ALTER TABLE `table_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
