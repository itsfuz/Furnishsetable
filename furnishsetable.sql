-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 06:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furnishsetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Living Room', NULL, NULL),
(2, 'Bedroom', NULL, NULL),
(3, 'Kitchen', NULL, NULL),
(4, 'Bathroom', NULL, NULL),
(5, 'Others', NULL, NULL);

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_01_13_050112_create_product_categories_table', 1),
(4, '2022_01_13_050252_create_products_table', 1),
(5, '2022_01_13_051402_create_carts_table', 1),
(6, '2022_01_13_053745_create_transactions_table', 1),
(7, '2022_01_13_053803_create_transaction_details_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `description`, `color`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Living Room Table', 1, 'Size: 125x75 cm', 'White', 'product-image/example1.jpg', 799000, NULL, NULL),
(2, 'Bed Frame', 2, 'Size: 120x200 cm', 'White', 'product-image/example2.jpg', 2599000, NULL, NULL),
(3, 'Kitchen Sink', 3, 'Size: 112x56x139 cm', 'Silver', 'product-image/example3.jpg', 2594000, NULL, NULL),
(4, 'Towel Holder', 4, 'Size: 112x56x139 cm', 'Army Green', 'product-image/example4.jpg', 10000, NULL, NULL),
(5, 'Lamp', 5, 'Size: 30x30x30 cm', 'Beige', 'product-image/example5.jpg', 100000, NULL, NULL),
(6, 'Sofa', 1, 'Size: 180x80x100 cm', 'Blue', 'product-image/example6.jpg', 2000000, NULL, NULL),
(7, 'Drawer', 1, 'Size: 85x110x50 cm', 'Red', 'product-image/example7.jpg', 1500000, NULL, NULL),
(8, 'Cutting Board', 3, 'Size: 45x3x20 cm', 'Brown', 'product-image/example8.jpg', 70000, NULL, NULL),
(9, 'Bathub', 4, 'Size: 182x56x139 cm', 'White', 'product-image/example9.jpg', 5000000, NULL, NULL),
(10, 'Clock', 5, 'Size: 30x3x30 cm', 'Black', 'product-image/example10.jpg', 10000, NULL, NULL),
(11, 'Bed Frame 2', 2, 'Size: 120x200 cm', 'Brown', 'product-image/example11.jpg', 500000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_date` date NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `users_id`, `transaction_date`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-01-16', 'GOPAY', '2022-01-16 00:33:04', '2022-01-16 00:33:04'),
(2, 1, '2022-01-16', 'OVO', '2022-01-16 01:17:22', '2022-01-16 01:17:22'),
(3, 1, '2022-01-16', 'Debit', '2022-01-16 01:21:47', '2022-01-16 01:21:47'),
(4, 1, '2022-01-18', 'GOPAY', '2022-01-18 00:57:42', '2022-01-18 00:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transaction_id`, `product_name`, `price`, `quantity`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 1, 'Living Room Table', 799000, 3, 2397000, '2022-01-16 00:33:04', '2022-01-16 00:33:04'),
(2, 1, 'Sofa', 2000000, 2, 4000000, '2022-01-16 00:33:04', '2022-01-16 00:33:04'),
(3, 2, 'Clock', 10000, 4, 40000, '2022-01-16 01:17:22', '2022-01-16 01:17:22'),
(4, 3, 'Living Room Table', 799000, 2, 1598000, '2022-01-16 01:21:47', '2022-01-16 01:21:47'),
(5, 3, 'Bed Frame 2', 500000, 2, 1000000, '2022-01-16 01:21:47', '2022-01-16 01:21:47'),
(6, 3, 'Towel Holder', 10000, 2, 20000, '2022-01-16 01:21:47', '2022-01-16 01:21:47'),
(7, 3, 'Clock', 10000, 2, 20000, '2022-01-16 01:21:47', '2022-01-16 01:21:47'),
(8, 3, 'Bed Frame', 2599000, 1, 2599000, '2022-01-16 01:21:47', '2022-01-16 01:21:47'),
(9, 3, 'Drawer', 1500000, 2, 3000000, '2022-01-16 01:21:47', '2022-01-16 01:21:47'),
(10, 3, 'Sofa', 2000000, 2, 4000000, '2022-01-16 01:21:47', '2022-01-16 01:21:47'),
(11, 3, 'Cutting Board', 70000, 1, 70000, '2022-01-16 01:21:47', '2022-01-16 01:21:47'),
(12, 3, 'Bathub', 5000000, 1, 5000000, '2022-01-16 01:21:47', '2022-01-16 01:21:47'),
(13, 3, 'Lamp', 100000, 1, 100000, '2022-01-16 01:21:47', '2022-01-16 01:21:47'),
(14, 4, 'Sofa', 2000000, 2, 4000000, '2022-01-18 00:57:42', '2022-01-18 00:57:42'),
(15, 4, 'Living Room Table', 799000, 1, 799000, '2022-01-18 00:57:42', '2022-01-18 00:57:42'),
(16, 4, 'Bed Frame 2', 500000, 1, 500000, '2022-01-18 00:57:42', '2022-01-18 00:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','member') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'itssfuz', 'hansen@binus.ac.id', '$2y$10$JLCwpUOFuLAnV65ikpxGtO9lgOzOogg11uuRsSQJ4hT0e6gy8EfVW', 'admin', NULL, NULL),
(2, 'alsya', 'alsya@binus.ac.id', '$2y$10$YWKKgGO9U2vHED1G0iKgFeliSRgjVwoE8r.HpbVSMp293qEaKA5Bi', 'admin', NULL, NULL),
(3, 'bioniclimanov', 'bionic@binus.ac.id', '$2y$10$LFQ3Q7wdH7g4r7LW0nqYjug50d7f7HxKA62IDlH2Sh7tU.ZULDkUW', 'admin', NULL, NULL),
(4, 'reginald', 'reginald@binus.ac.id', '$2y$10$PQKcgHiy2ZIlCb.S3o0/quIeEB15NbOubcdWU5YvYvxnNj1s5IhEW', 'admin', NULL, NULL),
(5, 'GuestMember', 'guest@binus.ac.id', '$2y$10$kqYGkIghWhUhoIgR5q/ohes2aCVvfebollq1LXozRbTcTUQEqfDgK', 'member', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_users_id_foreign` (`users_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_users_id_foreign` (`users_id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_details_transaction_id_foreign` (`transaction_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
