-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 08:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `advice` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `name`, `info`, `advice`, `created_at`, `updated_at`) VALUES
('P001', 'Epilepsi Tonik Klonik', 'Bangkitan berurutan berupa bangkitan tonik diikuti bangkitan klonik', '-', '2021-06-26 20:45:38', '2022-04-01 22:55:10'),
('P002', 'Epilepsi Absans', 'Terhentinya aktivitas yang sedang dilakukan secara mendadak, tatapan kosong, dapat disertai deviasi mata ke atas.Biasanya tidak merespon saat diajak bicara.', '-', '2021-06-26 20:46:14', '2022-04-01 22:58:50'),
('P003', 'Epilepsi Mioklonik', 'Gerakan involunter tiba-tiba, singkat kurang dari 100 milidetik, berupa kontraksi otot tunggal atau multipel pada anggota gerak proksimal, distal atau aksial.', '-', '2021-06-26 20:46:48', '2022-04-01 21:04:25'),
('P004', 'Epilepsi Tonik', 'Peningkatan kontaksi otot yang berlangsung beberapa detik sampai beberapa menit', '-', '2021-06-26 20:47:20', '2022-04-01 21:06:41'),
('P005', 'Epilepsi Atonik', 'Hilang atau berkurangnya tonus otot mendadak tanpa adanya mioklonik atau tonik sebelumnya. Berlangsung 1-2 detik, melibatkan kepala, tubuh, rahang atau ekstremitas atas dan bawah.', '-', '2021-06-26 20:47:55', '2022-04-01 20:58:05'),
('P006', 'Epilepsi Spasms', 'Gerakan mendadak berupa fleksi, ekstensi, atau gabungan ekstensi dan fleksi otot proksimal dan otot batang tubuh (truncal)', '-', '2022-03-31 02:07:38', '2022-04-01 21:01:31'),
('P007', 'Epilepsi Automatism', 'Aktivitas motorik yang terkoordinasi, sering menyerupai gerak volunter. Biasanya muncul dengan gangguan kesadaran hingga setelahnya pasien tidak ingat.', '-', '2022-03-31 02:08:12', '2022-04-01 21:10:26'),
('P008', 'Epilepsi Klonik', 'Gerak menghentak-hentak, simetris atau asimetris, ;berulang secara regular.', '-', '2022-03-31 02:05:46', '2022-04-01 20:59:29'),
('P009', 'Epilepsi Autonomic', 'Perubahan sistem saraf otonom yang melibatkan kardiovaskular , pupil, gastrointestinal, sudomotor, vasomotor dan termoregulasi.', '-', '2022-04-01 20:52:53', '2022-04-01 21:18:32'),
('P010', 'Epilepsi Mioklonik Tonik Klonik', 'Bangkitan mioklonik diikuti dengan bangkitan tonik-klonik. Tipe bangkitan ini umum ditemui pada juvenille myoclonic epilepsy', '-', '2022-04-01 22:46:03', '2022-04-01 22:46:03'),
('P011', 'Epilepsi Mioklonik Atonik', 'Bangkitan mioklonik diikuti dengan bangkitan atonik', '-', '2022-04-01 22:47:24', '2022-04-01 22:47:24'),
('P012', 'Epilepsi Behavior Arrest', 'Henti aktivitas sesaat, freezing, imobilisasi', '-', '2022-04-01 22:51:35', '2022-04-01 22:51:35'),
('P013', 'Epilepsi Atypical Absence', 'Bangkitan menyerupai typical absence namun onset dan terhentinya bangkitan kurang mendadak', '-', '2022-04-01 22:54:35', '2022-04-01 22:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `epilepsi`
--

CREATE TABLE `epilepsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `epilepsi`
--

INSERT INTO `epilepsi` (`id`, `created_at`, `updated_at`, `nama`, `alamat`) VALUES
(1, NULL, NULL, 'Kang Ersa', 'Bandung'),
(2, NULL, NULL, 'Mufti', 'Garut');

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
-- Table structure for table `knowledges`
--

CREATE TABLE `knowledges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disease_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symptom_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mb` decimal(8,2) NOT NULL,
  `md` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `knowledges`
--

INSERT INTO `knowledges` (`id`, `disease_id`, `symptom_id`, `mb`, `md`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'G001', '1.00', '0.00', '2022-03-31 02:40:46', '2022-03-31 02:40:46'),
(2, 'P002', 'G002', '0.80', '0.00', '2022-03-31 02:41:10', '2022-03-31 02:41:10'),
(3, 'P001', 'G003', '1.00', '0.00', '2022-03-31 02:41:39', '2022-03-31 02:41:39'),
(4, 'P002', 'G004', '1.00', '0.00', '2022-03-31 02:42:23', '2022-03-31 02:42:23'),
(5, 'P006', 'G013', '1.00', '0.00', '2022-03-31 02:42:59', '2022-03-31 02:42:59'),
(6, 'P002', 'G005', '1.00', '0.00', '2022-03-31 02:43:30', '2022-03-31 02:43:30'),
(7, 'P005', 'G006', '1.00', '0.00', '2022-03-31 02:44:06', '2022-03-31 02:44:06'),
(9, 'P003', 'G007', '1.00', '0.00', '2022-03-31 02:45:26', '2022-03-31 02:45:26'),
(10, 'P007', 'G008', '1.00', '0.00', '2022-03-31 02:46:08', '2022-03-31 02:46:08'),
(11, 'P005', 'G009', '1.00', '0.00', '2022-03-31 02:46:42', '2022-03-31 02:46:42'),
(12, 'P006', 'G010', '0.80', '0.00', '2022-03-31 02:47:13', '2022-03-31 02:47:13'),
(13, 'P008', 'G011', '0.80', '0.00', '2022-03-31 02:47:39', '2022-03-31 02:47:39'),
(14, 'P004', 'G012', '0.80', '0.00', '2022-03-31 02:48:14', '2022-03-31 02:48:14'),
(15, 'P009', 'G013', '0.80', '0.00', '2022-04-08 23:07:44', '2022-04-08 23:07:44'),
(16, 'P010', 'G012', '1.00', '0.00', '2022-04-08 23:11:12', '2022-04-08 23:11:12'),
(17, 'P010', 'G016', '1.00', '0.00', '2022-04-08 23:12:42', '2022-04-08 23:12:42'),
(18, 'P011', 'G014', '1.00', '0.00', '2022-04-08 23:13:53', '2022-04-08 23:13:53'),
(19, 'P012', 'G015', '0.80', '0.00', '2022-04-08 23:14:18', '2022-04-08 23:14:18'),
(20, 'P013', 'G001', '1.00', '0.00', '2022-04-08 23:17:08', '2022-04-08 23:17:08'),
(21, 'P008', 'G010', '0.80', '0.00', '2022-04-08 23:19:32', '2022-04-08 23:19:32');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_22_111907_create_diseases_table', 2),
(5, '2021_06_23_050257_create_symptoms_table', 3),
(9, '2021_06_23_060213_create_knowledges_table', 4),
(10, '2021_07_05_231547_create_epilepsi_table', 5),
(11, '2021_07_07_073603_create_skripsi_table', 6);

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
-- Table structure for table `skripsi`
--

CREATE TABLE `skripsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `now` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`id`, `now`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Hari ini hari Selasa', 'Bogor', NULL, NULL),
(2, 'Hari ini hari Rabu', 'Garut', NULL, NULL),
(3, 'Hari ini Hari Kamis', 'Bandung', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `name`, `info`, `created_at`, `updated_at`) VALUES
('G001', 'Hilang Kesadaran', '-', '2021-06-28 07:57:28', '2022-04-01 10:53:14'),
('G002', 'Tanpa hilang kesadaran', '-', '2021-06-28 07:57:45', '2022-03-31 01:52:18'),
('G003', 'Kelojotan anggota gerak', '-', '2021-06-28 07:58:03', '2022-03-31 01:52:48'),
('G004', 'Mulut Berbusa', '-', '2021-06-28 07:58:51', '2022-03-31 01:53:16'),
('G005', 'Melamun (Bengong)', '-', '2021-06-28 07:59:09', '2022-03-31 01:53:45'),
('G006', 'Kekakuan anggota gerak', '-', '2021-06-28 07:59:24', '2022-03-31 01:54:12'),
('G007', 'Mulut Mengecap-ngecap', '-', '2021-06-28 07:59:40', '2022-03-31 01:54:45'),
('G008', 'Terlihat bingung setelah kejang', '-', '2021-06-28 08:09:35', '2022-03-31 01:55:14'),
('G009', 'Lidah tergigit', '-', '2021-06-28 08:10:22', '2022-03-31 01:55:53'),
('G010', 'Hilang Penglihatan Mendadak', '-', '2021-06-28 08:12:24', '2022-04-01 11:04:40'),
('G011', 'Hilang Pendengaran Mendadak', '-', '2022-03-27 10:23:08', '2022-04-01 20:43:04'),
('G012', 'Kejang Menghentak', '-', '2022-03-27 10:25:59', '2022-04-01 20:44:16'),
('G013', 'Mengompol', '-', '2022-03-27 10:31:23', '2022-03-31 01:59:15'),
('G014', 'Pucat dan Berkeringat', '-', '2022-04-01 10:55:02', '2022-04-01 10:55:02'),
('G015', 'Mengantuk Setelah Serangan', '-', '2022-04-01 11:09:33', '2022-04-01 11:09:33'),
('G016', 'Tubuh Berguling', '-', '2022-04-01 11:10:19', '2022-04-01 11:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` bit(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Raden', 'cucibaju123@gmail.com', b'0', NULL, '$2y$10$W4suineTxfBKXUfZS95LXeJNY6wahNIMEdf2Vn7moJZIIAzrSEPOG', NULL, '2021-06-22 01:58:06', '2021-06-22 01:58:06'),
(3, 'Mufti', 'admin@example.com', b'1', NULL, '$2y$10$xrpOXnyIyHN86aqyP0WV0uZQ.0K2hUMNRUROM99BmCGANm3FfmXIK', NULL, '2021-06-22 02:12:07', '2021-06-22 02:12:07'),
(5, 'Ahmad Fauzi', 'mufti@example.com', b'0', NULL, '$2y$10$5RIquQOjFoyzlfo9ArjrEujFnW7eahKtWnkPvW2lPHUKLG1jeNRP2', NULL, '2021-06-22 06:08:44', '2021-06-22 06:08:44'),
(6, 'Muhammad', 'mulianurlatifah7@gmail.com', b'0', NULL, '$2y$10$WA5AMR39dn0DmAZtjAHzqus1MIhuN3JqhoX5Bpz6cX/YM8BuWnKPS', NULL, '2022-01-19 05:34:17', '2022-01-19 05:34:17'),
(7, 'Mufti Ahmad', 'r.muftiahmadf@gmail.com', b'0', NULL, '$2y$10$K8XMcScqceRdr9Utan0c.ejs.fAU3Z/bNCjY64DzM1KQEW7YoCkja', NULL, '2022-03-05 03:19:47', '2022-03-05 03:19:47'),
(8, 'Ahmad Muhammad', 'ahsanehsan@yahoo.com', b'0', NULL, '$2y$10$NJvyxxWs4U/A.6FVmnUXUe3zYAZxTypGZERGm7bdXGVx04hs3ywGK', NULL, '2022-03-15 07:07:55', '2022-03-15 07:07:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epilepsi`
--
ALTER TABLE `epilepsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `knowledges`
--
ALTER TABLE `knowledges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `knowledges_disease_id_symptom_id_index` (`disease_id`,`symptom_id`);

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
-- Indexes for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
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
-- AUTO_INCREMENT for table `epilepsi`
--
ALTER TABLE `epilepsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knowledges`
--
ALTER TABLE `knowledges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
