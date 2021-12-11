-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 07:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2021_11_07_085456_create_roles_table', 1),
(11, '2021_11_12_103510_create_test_table', 2);

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
-- Table structure for table `tbl_channel_partner`
--

CREATE TABLE `tbl_channel_partner` (
  `cpid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(6) NOT NULL,
  `office_no` bigint(10) NOT NULL,
  `longitude` int(11) NOT NULL,
  `latitude` int(11) NOT NULL,
  `map_url` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `partner_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loginstatus` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_profile`
--

CREATE TABLE `tbl_company_profile` (
  `cid` int(11) NOT NULL,
  `legal_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `contact1` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `contact2` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(6) NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lead`
--

CREATE TABLE `tbl_lead` (
  `id` int(20) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `whatsapp` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `requirement` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `reference` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assign_to` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status1` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'NEW',
  `status2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_lead`
--

INSERT INTO `tbl_lead` (`id`, `name`, `mobile`, `whatsapp`, `email`, `city`, `state`, `address`, `pincode`, `requirement`, `description`, `reference`, `assign_to`, `status1`, `status2`, `created_at`, `updated_at`) VALUES
(1, 'Raj', '1234123412', NULL, NULL, 'ranchi', 'jharkhand', NULL, NULL, 'nnnn', NULL, 'esh125556', NULL, 'NEW', NULL, NULL, NULL),
(3, 'devranjan', '344343434', '23423232323', 'devsah92@gmail.com', 'DEOGHAR', 'Jharkhand', 'C/O PARMESHWAR MANDAL, HOUSE NO-22, VILL- BARAKOLA', 814157, 'sdsdd', 'sdsdsd', NULL, NULL, 'NEW', NULL, '2021-12-03 20:44:30', '2021-12-03 20:44:30'),
(4, 'devranjan', '3434343434', '3333333333', 'eshuzo.raj@gmail.com', 'DEOGHAR', 'Jharkhand', 'C/O PARMESHWAR MANDAL, HOUSE NO-22, VILL- BARAKOLA', 814157, 'fff', 'ff', 'esh125556', NULL, NULL, NULL, '2021-12-03 21:11:53', '2021-12-04 02:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lead_notes`
--

CREATE TABLE `tbl_lead_notes` (
  `lnoteid` int(11) NOT NULL,
  `leadid` int(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `reference` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remider_date` text COLLATE utf8_unicode_ci NOT NULL,
  `reminder` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pprogress_notes`
--

CREATE TABLE `tbl_pprogress_notes` (
  `PPlnoteid` int(20) NOT NULL,
  `PPleadid` int(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `reference` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `projectid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `leadid` int(20) NOT NULL,
  `sow` text COLLATE utf8_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `deliverydate` date NOT NULL,
  `projectcost` decimal(10,0) NOT NULL,
  `thirdpartycost` decimal(10,0) NOT NULL,
  `reference` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tax` double NOT NULL,
  `status1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status2` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `role` varchar(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(47, 'Admin', '2021-11-16 13:15:05', '2021-11-16 13:15:05'),
(48, 'Channel Patner', '2021-11-16 13:15:05', '2021-11-16 13:15:05'),
(50, 'Dealers', '2021-11-16 13:15:06', '2021-11-24 12:54:53'),
(73, 'Project Manager', '2021-11-25 00:41:00', '2021-11-25 00:41:00'),
(76, 'hgfhr', '2021-11-25 12:53:12', '2021-12-03 17:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userid`, `role`, `name`, `mobile`, `email`, `city`, `state`, `password`, `status`) VALUES
('esh125556', 'Admin', 'fhg', '5556665556', 'eshuzo.raj@gmail.com', NULL, NULL, '123', '0'),
('esh241232', 'Project Manager', 'devranjan kumar', '2321231232', 'devsah92@gmail.com', NULL, NULL, '123', '0'),
('esh692323', NULL, 'sss', '2323232323', 'bhairaw@gmail.com', NULL, NULL, NULL, '0'),
('esh951234', 'Channel Partner', 'aditya', '2312321234', 'eshuzo.raj@gmail.com', NULL, NULL, '123', '0');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `role`, `created_at`, `updated_at`) VALUES
(3, '3', NULL, NULL),
(4, '6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `tbl_company_profile`
--
ALTER TABLE `tbl_company_profile`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_lead`
--
ALTER TABLE `tbl_lead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lead_notes`
--
ALTER TABLE `tbl_lead_notes`
  ADD PRIMARY KEY (`lnoteid`),
  ADD KEY `FKleadnotes` (`leadid`);

--
-- Indexes for table `tbl_pprogress_notes`
--
ALTER TABLE `tbl_pprogress_notes`
  ADD PRIMARY KEY (`PPlnoteid`),
  ADD KEY `FKppnotes` (`PPleadid`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`projectid`),
  ADD KEY `FKproject` (`leadid`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_company_profile`
--
ALTER TABLE `tbl_company_profile`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lead`
--
ALTER TABLE `tbl_lead`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_lead_notes`
--
ALTER TABLE `tbl_lead_notes`
  ADD CONSTRAINT `FKleadnotes` FOREIGN KEY (`leadid`) REFERENCES `tbl_lead` (`id`);

--
-- Constraints for table `tbl_pprogress_notes`
--
ALTER TABLE `tbl_pprogress_notes`
  ADD CONSTRAINT `FKppnotes` FOREIGN KEY (`PPleadid`) REFERENCES `tbl_lead` (`id`);

--
-- Constraints for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD CONSTRAINT `FKproject` FOREIGN KEY (`leadid`) REFERENCES `tbl_lead` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
