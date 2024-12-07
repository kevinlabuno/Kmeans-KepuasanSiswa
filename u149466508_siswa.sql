-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 07 Des 2024 pada 16.46
-- Versi server: 10.11.9-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u149466508_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `guru` varchar(255) DEFAULT NULL,
  `c1` varchar(255) NOT NULL,
  `c2` varchar(255) NOT NULL,
  `c3` varchar(255) NOT NULL,
  `c4` varchar(255) NOT NULL,
  `c5` varchar(255) NOT NULL,
  `c6` varchar(255) NOT NULL,
  `c7` varchar(255) NOT NULL,
  `c8` varchar(255) NOT NULL,
  `c9` varchar(255) NOT NULL,
  `c10` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `cluster` varchar(255) DEFAULT NULL,
  `cluster2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama`, `kelas`, `jenis`, `guru`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `total`, `cluster`, `cluster2`, `created_at`, `updated_at`) VALUES
(1, 'Aurel Mandagi', 'XI A', 'Perempuan', NULL, '3', '3', '2', '3', '2', '3', '3', '3', '2', '3', '27', 'c3', 'c3', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(2, 'Aurel Sumuan', 'XI A', 'Perempuan', NULL, '3', '2', '2', '3', '3', '3', '3', '3', '3', '3', '28', 'c3', 'c3', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(3, 'Aurellia Pantouw', 'XI A', 'Perempuan', NULL, '2', '3', '3', '3', '3', '3', '3', '2', '3', '3', '28', 'c3', 'c3', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(4, 'Bryan Maringka', 'XI A', 'Laki laki', NULL, '3', '3', '3', '3', '3', '3', '2', '2', '2', '2', '26', 'c3', 'c3', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(5, 'Bryan Samalam', 'XI A', 'Laki laki', NULL, '3', '3', '3', '3', '3', '3', '1', '1', '3', '3', '26', 'c3', 'c3', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(6, 'Carlos Tiwow', 'XI A', 'Laki laki', NULL, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '30', 'c3', 'c3', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(7, 'Chelsea Bolung', 'XI A', 'Perempuan', NULL, '2', '3', '3', '3', '1', '3', '2', '3', '3', '3', '26', 'c2', 'c2', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(8, 'Christian Mea', 'XI A', 'Laki laki', NULL, '2', '2', '2', '2', '2', '3', '3', '3', '3', '3', '25', 'c2', 'c2', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(9, 'Christovel Tentelawa', 'XI A', 'Laki laki', NULL, '3', '3', '3', '3', '3', '2', '2', '2', '2', '3', '26', 'c3', 'c3', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(10, 'Dinda Polii', 'XI A', 'Perempuan', NULL, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '30', 'c3', 'c3', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(11, 'Gledis Sendow', 'XI A', 'Perempuan', NULL, '2', '2', '2', '2', '2', '2', '2', '2', '2', '3', '21', 'c2', 'c2', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(12, 'Graselly Nay', 'XI A', 'Perempuan', NULL, '2', '3', '3', '3', '3', '3', '3', '3', '3', '3', '29', 'c3', 'c3', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(13, 'Inri Bolung', 'XI A', 'Perempuan', NULL, '3', '2', '3', '2', '3', '2', '2', '2', '2', '3', '24', 'c3', 'c3', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(14, 'Jenly Tuegeh', 'XI A', 'Laki laki', NULL, '3', '2', '1', '2', '2', '1', '2', '1', '2', '2', '18', 'c1', 'c1', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(15, 'Joy Tuegeh', 'XI A', 'Laki laki', NULL, '1', '1', '2', '2', '2', '2', '3', '3', '2', '1', '19', 'c1', 'c1', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(16, 'Marsya Rau', 'XI A', 'Perempuan', NULL, '1', '2', '1', '1', '1', '2', '3', '3', '3', '3', '20', 'c2', 'c2', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(17, 'Memey Roring', 'XI A', 'Perempuan', NULL, '3', '3', '3', '3', '3', '1', '1', '1', '2', '1', '21', 'c3', 'c1', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(18, 'Menix Tuegeh', 'XI A', 'Laki laki', NULL, '2', '2', '3', '1', '1', '1', '3', '3', '2', '2', '20', 'c1', 'c1', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(19, 'Natasya Wagiu', 'XI A', 'Perempuan', NULL, '3', '3', '3', '3', '3', '3', '1', '1', '2', '3', '25', 'c3', 'c3', '2024-06-23 19:07:10', '2024-06-23 19:07:10'),
(20, 'Laura', 'Kelas XI A', 'Perempuan', 'Ramoh', '2', '2', '3', '1', '3', '1', '2', '1', '3', '3', '21', 'c2', 'c2', '2024-06-26 07:59:05', '2024-06-26 07:59:05'),
(21, 'Anggun', 'Kelas XI B', 'Perempuan', 'Ramoh', '2', '3', '2', '3', '3', '1', '2', '2', '3', '1', '22', 'c1', 'c1', '2024-06-26 08:20:26', '2024-06-26 08:20:26'),
(22, 'Laura', 'Kelas XI C', 'Perempuan', 'Rosye Tambani', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '30', 'c3', 'c3', '2024-09-26 10:01:45', '2024-09-26 10:01:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `guru` varchar(255) DEFAULT NULL,
  `c1` varchar(255) NOT NULL,
  `c2` varchar(255) NOT NULL,
  `c3` varchar(255) NOT NULL,
  `c4` varchar(255) NOT NULL,
  `c5` varchar(255) NOT NULL,
  `c6` varchar(255) NOT NULL,
  `c7` varchar(255) NOT NULL,
  `c8` varchar(255) NOT NULL,
  `c9` varchar(255) NOT NULL,
  `c10` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `cluster` varchar(255) DEFAULT NULL,
  `cluster2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id`, `nama`, `kelas`, `jenis`, `guru`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `total`, `cluster`, `cluster2`, `created_at`, `updated_at`) VALUES
(1, 'Laura', 'Kelas XI A', 'Perempuan', 'Ramoh', 'Cukup Puas', 'Cukup Puas', 'Sangat Puas', 'Tidak Puas', 'Sangat Puas', 'Tidak Puas', 'Cukup Puas', 'Tidak Puas', 'Sangat Puas', 'Sangat Puas', '21', 'c3', 'c3', '2024-06-26 07:59:05', '2024-06-26 07:59:05'),
(2, 'Anggun', 'Kelas XI B', 'Perempuan', 'Ramoh', 'Cukup Puas', 'Sangat Puas', 'Cukup Puas', 'Sangat Puas', 'Sangat Puas', 'Tidak Puas', 'Cukup Puas', 'Cukup Puas', 'Sangat Puas', 'Tidak Puas', '22', 'c3', 'c3', '2024-06-26 08:20:26', '2024-06-26 08:20:26'),
(3, 'Laura', 'Kelas XI C', 'Perempuan', 'Rosye Tambani', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', '30', 'c3', 'c3', '2024-09-26 10:01:45', '2024-09-26 10:01:45'),
(4, 'Labuno', 'X1 A', 'Laki-laki', 'Kevin', 'Tidak Puas', 'Tidak Puas', 'Tidak Puas', 'Tidak Puas', 'Tidak Puas', 'Tidak Puas', 'Tidak Puas', 'Tidak Puas', 'Tidak Puas', 'Tidak Puas', '10', 'c3', 'c3', '2024-11-22 19:24:47', '2024-11-22 19:24:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'X1 A', '2024-10-06 14:13:28', '2024-10-06 14:13:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2024_06_04_190758_create_data_table', 1),
(9, '2024_06_10_203433_create_jawaban_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `jabatan`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Laura', 'laura@gmail.com', 'Staf', '$2y$10$Ub/gtTbrU6qW2A5R0sNFzOJ7ugYeoldXKQ2K3anuuU8fMieqv58S.', NULL, '2024-06-16 18:26:16', '2024-06-16 18:26:16'),
(4, 'Elvira', 'elvira@gmail.com', 'Staf', '$2y$10$mlKPwCRaSuFydzL9gzVPse1fhL7LThbfcEtFbMhPXtbT9Kz9LLp5y', NULL, '2024-06-20 03:29:45', '2024-06-20 03:29:45'),
(7, 'Kevin', 'kevin@gmail.com', 'Guru', '$2y$10$IncscsmER5Bs6gb/zu0jueDvlMjcfGuRnReTqHtRod3BYn3iX4bu.', NULL, '2024-06-26 08:44:33', '2024-06-26 08:44:33'),
(8, 'Rosye Tambani', 'rosye@gmail.com', 'Guru', '$2y$10$BtF.LknYGIHEOc5E7tQAdeLvhkUTpWT1hAy87CBhTvsOgoyegJUJO', NULL, '2024-09-26 09:46:40', '2024-09-26 09:46:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
