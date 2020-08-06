-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2020 at 10:47 AM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.3.19-1+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quotes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_users`
--

CREATE TABLE `api_users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int DEFAULT NULL,
  `api_token` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `api_users`
--

INSERT INTO `api_users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dimas Nugroho Putro', 'dimasnugroho673@gmail.com', NULL, '$2y$10$jw39.ihYNiehFuRql3qQVurxyGrH4gAzpX8v0c2rg3wjkSg86rsVO', NULL, 'WeVc7rTW1UKVqGAZH1m6L0Ns6PkM60fkHhpHxMdFW9u4YGOND8oIqz49EDk9PUmTa23qLkORUr9huDPL', NULL, '2020-07-16 02:33:29', '2020-07-16 02:33:29'),
(2, 'Sulthan SHP', 'sulthanshp13@gmail.com', NULL, '$2y$10$xGjBgc.tMB0ER/CPEU3Pmu6ViCpj/oH.JRS3pltj3MufICjXI40tS', NULL, 'OCrKPVtrYT6xdHPwOTbZSAgpMAiUSgNCUmXLpZfnxprUFq3FcN2gCwvKLjOzLvimZy5M6JWcW66WQNhw', NULL, '2020-07-16 02:33:29', '2020-07-16 02:33:29'),
(3, 'Odang', 'odang@gmail.com', NULL, '$2y$10$Gxc8imoku57fXM2FpFEeLOQ6ki.9PomnuEppsyZR8pbBY47zgMcHq', NULL, 'f0dPaq9xWRgYjJRNDuPtShlOWKQDfonWVtW3GGUtxJAfFpkkhSug3ZmKtBhgaUX4QClyJG4yb9RfqDLg', NULL, '2020-07-16 02:33:29', '2020-07-16 02:33:29'),
(4, 'Odang2', 'odang2@gmail.com', NULL, '$2y$10$qfuOjycwgEkWp8s3bgTo/O.bT6qXcX9DMdVxqT1mxBSusUKEHAsdy', NULL, 'GnMV9ceYRqzmrwFFshrIyI9seSpmtIfrILjmjVK0ysAwSWubScWUDdp8P88pjhdezR5P06UDw3PsjY7i', NULL, '2020-07-16 02:48:15', '2020-07-16 02:48:15'),
(5, 'Odang3', 'odang3@gmail.com', NULL, '$2y$10$fXFP01qZOpUJ/N6e3obKAO17gG.ax1UqnDXyYELCjIzFrPqZt4VHC', NULL, 'TyBX1UpuxhZleBTSggMAat4CRB1qaQ2UXEnbzMI5YvqQTmbnLLuoZIadLyN7bqAjNCPM8XN0tl6FIZMi', NULL, '2020-07-16 02:51:39', '2020-07-16 02:51:39'),
(6, 'Odang4', 'odang4@gmail.com', NULL, '$2y$10$n8Y4.Jly5r8btp3ADiRp1OdFq0koIQ1saO9uHWCWydqDx.4L23.X2', NULL, '17nQkPPSDtNGufvxo9JMxcafkwza4asfn3qloAQ3JO4mYGNHAYEMvwaqZkRuBGAqeZD24aJ3oPekGLN0', NULL, '2020-07-16 02:53:56', '2020-07-16 02:53:56'),
(7, 'Odang5', 'odang5@gmail.com', NULL, '$2y$10$JkpfWgZhOSH.caUYtuyYQuAWLBUR3Xd5hUBFWxzzO8l7k.XYUO0Ce', NULL, 'SfACI2CFDdL1GBwFhrx1uqIxZfZQ31Kwpet9W3xjUU7a1xlsDKySHIzsyPc4O575Y7w4boi5GvGPnNry', NULL, '2020-07-16 02:54:16', '2020-07-16 02:54:16'),
(8, 'Odang6', 'odang6@gmail.com', NULL, '$2y$10$VRWkJjvUqLHeWDAJ8r7oveo4F2sir9X6COMUuKPq6wU3OhDKM8FiK', NULL, 'xc1UFCAQx4bj2ZxSXBtVA79amXd5ZWTNHsmh76hVNTYcvfpKgbCEeu6yGTdrf9lZHKn5vK7qdHuztfgM', NULL, '2020-07-16 18:59:16', '2020-07-16 18:59:16'),
(9, 'Odang7', 'odang7@gmail.com', NULL, '$2y$10$OoHuYF6jQrTRRtAbUlo8fOIRMwdGTsOLh1zUNzlrQWYG9Jdw8wqf6', NULL, 'KcymigB2hevH8ONCDgCnT3Sbjssc9fRO0Bz1ZTg8xjJ2ZfRaS9ofuB4e6ED0KSzkhemuIjCOnaa9QiGe', NULL, '2020-07-16 19:00:46', '2020-07-16 19:00:46'),
(10, 'Odang8', 'odang8@gmail.com', NULL, '$2y$10$t9sVdk4uHvIozcHLoC1rz.8mKkjEkmxX2Y78/JfJHtCBWLmIuRm3W', NULL, 'DG8SWD6tUiqly7FqNJc0JWfFWrOtC7D9qqDbqNKIHbsketnVbKIO0ZGmWmv8VICUuCfXwUwh7EMYaOZ4', NULL, '2020-07-16 19:04:00', '2020-07-16 19:04:00'),
(11, 'Odang9', 'odang9@gmail.com', NULL, '$2y$10$5aSDcxDcSbxfmHihHB9P5eFkiayVg6KeWDypp034GhCN.D9/hJzcq', NULL, 'FwIbFa3w920ouRlGBUtpJtUxCj6wVZaMdrdJQAz9WfkEVLrl1bHOEUo0ciFkB8Rd4kUZsk90YYpy8Hqz', NULL, '2020-07-16 19:53:16', '2020-07-16 19:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(2, 4, 'Man jadda wwa jada2', '2020-07-16 20:19:35', '2020-07-16 20:19:35'),
(3, 1, 'Man jadda wwa jada dari dimas', '2020-07-16 21:00:35', '2020-07-16 21:00:35'),
(4, 1, 'Kalo untuk diri sendiri aja belum bisa disiplin gimana mau mau mendisiplinkan orang(?)', '2020-07-16 21:01:06', '2020-07-16 21:01:06'),
(5, 1, 'Teman adalah musuh yang belum menyerang', '2020-07-27 21:01:52', '2020-07-27 21:01:52'),
(6, 1, 'Teman adalah musuh yang belum menyerang', '2020-07-27 21:06:41', '2020-07-27 21:06:41'),
(7, 1, 'HIdup ini keras bro, gak kerja gak makan!', '2020-07-27 21:08:11', '2020-07-27 21:08:11'),
(8, 1, 'Dadang adalah pejuang', '2020-07-27 21:08:35', '2020-07-27 21:08:35'),
(9, 1, 'sdfcvx', '2020-07-27 21:10:45', '2020-07-27 21:10:45'),
(10, 1, 'Pagi yang cerah untuk jiwa yang sepi', '2020-08-05 19:30:41', '2020-08-05 19:30:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_users`
--
ALTER TABLE `api_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `api_users_email_unique` (`email`),
  ADD UNIQUE KEY `api_users_api_token_unique` (`api_token`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quotes_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_users`
--
ALTER TABLE `api_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
