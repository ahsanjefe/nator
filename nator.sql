-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 02:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nator`
--

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
(5, '2023_10_08_122236_create_s_10_user_databases_table', 1),
(6, '2023_10_08_122236_create_s_20_user_tables_table', 1),
(7, '2023_10_08_122236_create_s_30_data_types_table', 1),
(8, '2023_10_08_122236_create_s_40_table_types_table', 1),
(9, '2023_10_08_122236_create_s_50_subtypes_table', 1),
(10, '2023_10_08_122236_create_s_60_column_types_table', 1),
(11, '2023_10_08_122239_add_foreign_keys_to_s_10_user_databases_table', 1),
(12, '2023_10_08_122239_add_foreign_keys_to_s_20_user_tables_table', 1),
(13, '2023_10_08_122239_add_foreign_keys_to_s_60_column_types_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_10_user_databases`
--

CREATE TABLE `s_10_user_databases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_10_user_databases`
--

INSERT INTO `s_10_user_databases` (`id`, `user_id`, `name`) VALUES
(1, 1, 'Database_1'),
(2, 1, 'Database_2'),
(3, 1, 'Database_3'),
(4, 1, 'Database_4'),
(5, 1, 'Database_5'),
(6, 1, 'Database_6'),
(7, 1, 'Database_7'),
(8, 1, 'Database_8'),
(9, 1, 'Database_9'),
(10, 1, 'Database_10'),
(11, 2, 'Database_11'),
(12, 2, 'Database_12'),
(13, 2, 'Database_13'),
(14, 2, 'Database_14'),
(15, 2, 'Database_15'),
(16, 2, 'Database_16'),
(17, 2, 'Database_17'),
(18, 2, 'Database_18'),
(19, 2, 'Database_19'),
(20, 2, 'Database_20'),
(21, 3, 'Database_21'),
(22, 3, 'Database_22'),
(23, 3, 'Database_23'),
(24, 3, 'Database_24'),
(25, 3, 'Database_25'),
(26, 3, 'Database_26'),
(27, 3, 'Database_27'),
(28, 3, 'Database_28'),
(29, 3, 'Database_29'),
(30, 3, 'Database_30');

-- --------------------------------------------------------

--
-- Table structure for table `s_20_user_tables`
--

CREATE TABLE `s_20_user_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `database_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_20_user_tables`
--

INSERT INTO `s_20_user_tables` (`id`, `database_id`, `name`) VALUES
(1, 1, 'Table_1'),
(2, 1, 'Table_2'),
(3, 1, 'Table_3'),
(4, 1, 'Table_4'),
(5, 1, 'Table_5'),
(6, 2, 'Table_6'),
(7, 2, 'Table_7'),
(8, 2, 'Table_8'),
(9, 2, 'Table_9'),
(10, 2, 'Table_10'),
(11, 3, 'Table_11'),
(12, 3, 'Table_12'),
(13, 3, 'Table_13'),
(14, 3, 'Table_14'),
(15, 3, 'Table_15'),
(16, 4, 'Table_16'),
(17, 4, 'Table_17'),
(18, 4, 'Table_18'),
(19, 4, 'Table_19'),
(20, 4, 'Table_20');

-- --------------------------------------------------------

--
-- Table structure for table `s_30_data_types`
--

CREATE TABLE `s_30_data_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_30_data_types`
--

INSERT INTO `s_30_data_types` (`id`, `type_name`) VALUES
(1, 'Text'),
(2, 'Number'),
(3, 'Date'),
(4, 'Time');

-- --------------------------------------------------------

--
-- Table structure for table `s_40_table_types`
--

CREATE TABLE `s_40_table_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_type` tinyint(3) UNSIGNED NOT NULL,
  `model` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_40_table_types`
--

INSERT INTO `s_40_table_types` (`id`, `table_type`, `model`) VALUES
(1, 1, 's_20_user_tables'),
(2, 2, 's_30_data_types');

-- --------------------------------------------------------

--
-- Table structure for table `s_50_subtypes`
--

CREATE TABLE `s_50_subtypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subtype_name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_50_subtypes`
--

INSERT INTO `s_50_subtypes` (`id`, `subtype_name`, `description`) VALUES
(1, 'Word', NULL),
(2, 'Sentence', NULL),
(3, 'Article', NULL),
(4, 'Number', NULL),
(5, 'Number Range', NULL),
(6, 'Date', NULL),
(7, 'Date Range', NULL),
(8, 'Date Interval', NULL),
(9, 'Time', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `s_60_column_types`
--

CREATE TABLE `s_60_column_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `column_name` varchar(255) DEFAULT NULL,
  `table_id` bigint(20) UNSIGNED NOT NULL,
  `table_type_id` bigint(20) UNSIGNED NOT NULL,
  `subType_id` bigint(20) UNSIGNED DEFAULT NULL,
  `column_type_primary` bigint(20) UNSIGNED NOT NULL,
  `list` tinyint(1) DEFAULT NULL,
  `null` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_60_column_types`
--

INSERT INTO `s_60_column_types` (`id`, `column_name`, `table_id`, `table_type_id`, `subType_id`, `column_type_primary`, `list`, `null`) VALUES
(1, 'Column_1', 1, 1, 1, 1, NULL, NULL),
(2, 'Column_2', 1, 1, 1, 1, NULL, NULL),
(3, 'Column_3', 1, 1, 1, 1, NULL, NULL),
(4, 'Column_4', 1, 1, 1, 1, NULL, NULL),
(5, 'Column_5', 1, 1, 1, 1, NULL, NULL),
(6, 'Column_6', 2, 1, 1, 1, NULL, NULL),
(7, 'Column_7', 2, 1, 1, 1, NULL, NULL),
(8, 'Column_8', 2, 1, 1, 1, NULL, NULL),
(9, 'Column_9', 2, 1, 1, 1, NULL, NULL),
(10, 'Column_10', 2, 1, 1, 1, NULL, NULL),
(11, 'Column_11', 3, 1, 1, 1, NULL, NULL),
(12, 'Column_12', 3, 1, 1, 1, NULL, NULL),
(13, 'Column_13', 3, 1, 1, 1, NULL, NULL),
(14, 'Column_14', 3, 1, 1, 1, NULL, NULL),
(15, 'Column_15', 3, 1, 1, 1, NULL, NULL),
(16, 'Column_16', 4, 1, 1, 1, NULL, NULL),
(17, 'Column_17', 4, 1, 1, 1, NULL, NULL),
(18, 'Column_18', 4, 1, 1, 1, NULL, NULL),
(19, 'Column_19', 4, 1, 1, 1, NULL, NULL),
(20, 'Column_20', 4, 1, 1, 1, NULL, NULL),
(21, 'Column_21', 5, 1, 1, 1, NULL, NULL),
(22, 'Column_22', 5, 1, 1, 1, NULL, NULL),
(23, 'Column_23', 5, 1, 1, 1, NULL, NULL),
(24, 'Column_24', 5, 1, 1, 1, NULL, NULL),
(25, 'Column_25', 5, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Marlee Gutkowski III', 'bauch.ilene@example.org', '2023-07-14 19:01:56', '$2y$10$aLDy.qPvUKlF083SVb0w.uYdVHHi0NeYviPwCJN5bEuKseUQqA3MO', 'Co1v9dIgbNAjbhs6hdqeKGy2fSoAKbParr7wczBBT4EKuA6rjikmBtPMG6zb', '2023-07-14 19:01:56', '2023-07-14 19:01:56'),
(2, 'Tremaine Robel', 'cluettgen@example.com', '2023-07-14 19:01:56', '$2y$10$J3XTR7A2d5EoO3ityY//c.mbSkoizCZ.ISh9cPFMn3pRphE3cOIQS', 'lTSR6aduYe2qUPixVhP9K14KeWsnCJecqL3uTCmYng9Sk7iiMdFVbJxHEEfG', '2023-07-14 19:01:56', '2023-07-14 19:01:56'),
(3, 'Gavin Ledner', 'amy27@example.net', '2023-07-14 19:01:56', '$2y$10$CfW8K6rn58prb/12uLL.DubRj/4pS8hrdPmWI1.qBbeX6b9CCTADi', 'rYzpj7dDEt', '2023-07-14 19:01:56', '2023-07-14 19:01:56');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `s_10_user_databases`
--
ALTER TABLE `s_10_user_databases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `s_20_user_tables`
--
ALTER TABLE `s_20_user_tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `database_id` (`database_id`);

--
-- Indexes for table `s_30_data_types`
--
ALTER TABLE `s_30_data_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_40_table_types`
--
ALTER TABLE `s_40_table_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_50_subtypes`
--
ALTER TABLE `s_50_subtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_60_column_types`
--
ALTER TABLE `s_60_column_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_table_id` (`table_id`),
  ADD KEY `idx_table_type_id` (`table_type_id`),
  ADD KEY `idx_subType_id` (`subType_id`),
  ADD KEY `idx_column_type_primary` (`column_type_primary`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_10_user_databases`
--
ALTER TABLE `s_10_user_databases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `s_20_user_tables`
--
ALTER TABLE `s_20_user_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `s_30_data_types`
--
ALTER TABLE `s_30_data_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `s_40_table_types`
--
ALTER TABLE `s_40_table_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `s_50_subtypes`
--
ALTER TABLE `s_50_subtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `s_60_column_types`
--
ALTER TABLE `s_60_column_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `s_10_user_databases`
--
ALTER TABLE `s_10_user_databases`
  ADD CONSTRAINT `s_10_user_databases_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `s_20_user_tables`
--
ALTER TABLE `s_20_user_tables`
  ADD CONSTRAINT `s_20_user_tables_ibfk_1` FOREIGN KEY (`database_id`) REFERENCES `s_10_user_databases` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `s_60_column_types`
--
ALTER TABLE `s_60_column_types`
  ADD CONSTRAINT `s_60_column_types_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `s_20_user_tables` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `s_60_column_types_ibfk_2` FOREIGN KEY (`subType_id`) REFERENCES `s_50_subtypes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
