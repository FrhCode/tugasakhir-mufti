-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 05:06 PM
-- Server version: 10.5.8-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
('P001', 'Epilepsi Tonik-Klonik', 'Epilepsi ini paling dikenal diawali dengan gejala hilangnya kesadaran dan penderita sering menangis. Jika berdiri, orang akan terjatuh, tubuh menegang (tonik) dan diikuti sentakan otot (klonik).', 'Pemberian obat ethosuximide dengan dosis 500 mg – 1000 mg', '2021-06-26 20:45:38', '2021-06-28 07:42:18'),
('P002', 'Epilepsi Absens', 'Kejang ini biasanya dimulai pada masa anak-anak tapi bisa terjadi pada orang dewasa, seringkali keliru dengan melamun ataupun tidak perhatian. Sering ada Riwayat yang sama dalam keluarga.', 'Pemberian obat carbamazepine dengan dosis 600 mg – 1800 mg', '2021-06-26 20:46:14', '2021-06-28 07:42:45'),
('P003', 'Epilepsi Mioklonik', 'Kejang berlangsung singkat, biasanya sentakan otot secara intens terjadi pada anggota tubuh bagian atas. Sering setelah bangkitan mengakibatkan menjatuhkan dan menumpahkan sesuatu.', 'Pemberian obat felbamate dengan dosis 2400 mg – 3600 mg, melakukan pemeriksaan EEG', '2021-06-26 20:46:48', '2021-06-28 07:43:15'),
('P004', 'Epilepsi Tonik', 'Gejala dari epilepsi ini terjadi secara mendadak. Kekakuan singkat pada otot seluruh tubuh menyebabkan orang menjadi kaku dan terjatuh jika dalam posisi berdiri. Pemulihannya cepat namun cedera yang terjadi dapat bertahan.', 'Pemberian obat levetiracetam dengan dosis 1000 mg – 3000 mg', '2021-06-26 20:47:20', '2021-06-28 07:43:40'),
('P005', 'Epilepsi Atonik', 'Gejala dari epilepsi ini terjadi secara mendadak, kehilangan otot, menyebabkan penderita lemas dan terjatuh jika dalam posisi berdiri. Biasanya terjadi cedera dan luka pada kepala. Tidak ada tanda kehilangan kesadaran dan cepat pemulihannya.', 'Melakukan tindakan anamnesis, pemeriksaan fisik pengidap dan diagnosis banding', '2021-06-26 20:47:55', '2021-06-28 07:44:12'),
('P006', 'Epilepsi Parsial Sederhana', 'Kejang yang pengidapnya tidak kehilangan kesadaran', 'Pemberian dosis obat anti epilepsi (anti konsulvan) yang tepat sesuai aturan dokter ahli syaraf', '2021-06-28 07:45:29', '2021-06-28 07:45:29'),
('P007', 'Epilepsi Parsial Kompleks', 'Terkadang kejang focal mempengaruhi kesadaran pengidapnya', 'Pemberian dosis obat anti epilepsy (anti konsulvan) yang tepat sesuai aturan dokter ahli syaraf', '2021-06-28 07:45:54', '2021-06-28 07:45:54');

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
(1, 'P001', 'G001', '0.80', '0.20', '2021-06-26 06:29:45', '2021-06-30 07:16:10'),
(2, 'P001', 'G002', '0.40', '0.20', '2021-06-26 06:30:10', '2021-06-30 07:16:35'),
(3, 'P001', 'G003', '1.00', '0.20', '2021-06-26 06:30:29', '2021-06-30 07:18:00'),
(4, 'P002', 'G004', '0.60', '0.20', '2021-06-26 06:30:47', '2021-06-30 07:18:24'),
(5, 'P002', 'G005', '0.80', '0.20', '2021-06-26 06:30:59', '2021-06-30 07:18:43'),
(6, 'P002', 'G006', '0.40', '0.20', '2021-06-26 06:31:17', '2021-06-30 07:18:59'),
(7, 'P002', 'G007', '0.60', '0.20', '2021-06-26 21:00:30', '2021-06-30 07:19:15'),
(8, 'P003', 'G008', '1.00', '0.20', '2021-06-26 21:00:45', '2021-06-30 07:19:35'),
(9, 'P004', 'G009', '0.40', '0.20', '2021-06-26 21:01:05', '2021-06-30 07:19:58'),
(10, 'P005', 'G010', '0.60', '0.20', '2021-06-26 21:01:23', '2021-06-30 07:20:19'),
(11, 'P006', 'G011', '0.80', '0.20', '2021-06-26 21:01:43', '2021-06-30 07:20:36'),
(12, 'P007', 'G012', '1.00', '0.20', '2021-06-26 21:03:49', '2021-06-30 07:20:47');

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
(9, '2021_06_23_060213_create_knowledges_table', 4);

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
('G001', 'Hilang Kesadaran', 'Penderita kehilangan kesadaran, tubuh menegang, bernafas dangkal, bibir kulit terlihat keabuan dan sakit kepala', '2021-06-28 07:57:28', '2021-06-28 07:57:28'),
('G002', 'Tubuh menegang', 'Penderita kehilangan kesadaran, tubuh menegang, bernafas dangkal, bibir kulit terlihat keabuan dan sakit kepala', '2021-06-28 07:57:45', '2021-06-28 07:57:45'),
('G003', 'Nafas dangkal', 'Penderita kehilangan kesadaran, tubuh menegang, bernafas dangkal, bibir kulit terlihat keabuan dan sakit kepala', '2021-06-28 07:58:03', '2021-06-28 07:58:03'),
('G004', 'Melamun', 'Penderita melamun atau tidak perhatian, menatap kosong, hilang ekspresi, tidak ada respon, menghentikan aktifitas yang dilakukan dan mengedipkan mata dengan cepat', '2021-06-28 07:58:51', '2021-06-28 07:58:51'),
('G005', 'Menatap kosong', 'Penderita melamun atau tidak perhatian, menatap kosong, hilang ekspresi, tidak ada respon, menghentikan aktifitas yang dilakukan dan mengedipkan mata dengan cepat', '2021-06-28 07:59:09', '2021-06-28 07:59:09'),
('G006', 'Hilang ekspresi', 'Penderita melamun atau tidak perhatian, menatap kosong, hilang ekspresi, tidak ada respon, menghentikan aktifitas yang dilakukan dan mengedipkan mata dengan cepat', '2021-06-28 07:59:24', '2021-06-28 07:59:24'),
('G007', 'Tidak merespon', 'Penderita melamun atau tidak perhatian, menatap kosong, hilang ekspresi, tidak ada respon, menghentikan aktifitas yang dilakukan dan mengedipkan mata dengan cepat', '2021-06-28 07:59:40', '2021-06-28 07:59:40'),
('G008', 'Sentakan otot secara intens', 'Kejang berlangsung singkat, disertai sentakan otot secara intens pada anggota tubuh bagian atas dan menjatuhkan atau menumpahkan sesuatu', '2021-06-28 08:09:35', '2021-06-28 08:09:35'),
('G009', 'Kekakuan pada otot', 'Gejala terjadi secara mendadak, kekakuan singkat pada otot di seluruh tubuh dan terjatuh dalam posisi berdiri', '2021-06-28 08:10:22', '2021-06-28 08:10:22'),
('G010', 'Penurunan Kesadaran', 'Gejala terjadi secara mendadak, kehilangan kekuatan otot, menyebabkan penderita lemas dan terjatuh jika dalam posisi berdiri', '2021-06-28 08:10:47', '2021-06-28 08:11:59'),
('G011', 'Terlihat bingung', 'Kejang singkat, tidak ada penurunan kesadaran dan gejala berlangsung selama kurang dari satu menit', '2021-06-28 08:11:43', '2021-06-28 08:11:43'),
('G012', 'Gelisah', 'Penderita menatap kosong, kehilangan ekspresi, terlihat bingung, kesadaran terganggu, menampilkan perilaku yang tidak biasa dan gelisah', '2021-06-28 08:12:24', '2021-06-28 08:12:24');

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
(1, 'Nabil', 'cucibaju123@gmail.com', b'0', NULL, '$2y$10$W4suineTxfBKXUfZS95LXeJNY6wahNIMEdf2Vn7moJZIIAzrSEPOG', NULL, '2021-06-22 01:58:06', '2021-06-22 01:58:06'),
(3, 'Nabol', 'admin@example.com', b'1', NULL, '$2y$10$xrpOXnyIyHN86aqyP0WV0uZQ.0K2hUMNRUROM99BmCGANm3FfmXIK', NULL, '2021-06-22 02:12:07', '2021-06-22 02:12:07'),
(5, 'Mufti', 'mufti@example.com', b'0', NULL, '$2y$10$5RIquQOjFoyzlfo9ArjrEujFnW7eahKtWnkPvW2lPHUKLG1jeNRP2', NULL, '2021-06-22 06:08:44', '2021-06-22 06:08:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knowledges`
--
ALTER TABLE `knowledges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
