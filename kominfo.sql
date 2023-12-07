-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2023 pada 08.53
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelatihan`
--

CREATE TABLE `data_pelatihan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pelatihan` int(10) NOT NULL,
  `nama_materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jpl` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_pelatihan`
--

INSERT INTO `data_pelatihan` (`id`, `id_pelatihan`, `nama_materi`, `deskripsi`, `jpl`, `created_at`, `updated_at`) VALUES
(32, 18, 'Materi 1', 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz', 3, '2023-12-04 06:41:59', '2023-12-04 06:41:59'),
(33, 18, 'Materi 2', 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz', 7, '2023-12-04 06:42:18', '2023-12-04 06:42:18'),
(34, 18, 'Materi 3', 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz', 5, '2023-12-04 06:42:34', '2023-12-04 06:42:34'),
(35, 19, 'Materi 1', 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz', 6, '2023-12-04 06:43:06', '2023-12-04 06:43:06'),
(36, 19, 'Materi 2', 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz', 5, '2023-12-04 06:43:12', '2023-12-04 06:43:12'),
(37, 19, 'Materi 3', 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz', 4, '2023-12-04 06:43:20', '2023-12-04 06:43:20'),
(38, 22, 'Materi 1', ',lklkknklnl', 3, '2023-12-04 18:33:33', '2023-12-04 18:33:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peserta`
--

CREATE TABLE `data_peserta` (
  `id_peserta` int(10) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_pelatihan` int(10) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_peserta`
--

INSERT INTO `data_peserta` (`id_peserta`, `id_user`, `id_pelatihan`, `nama`, `created_at`, `updated_at`) VALUES
(30, 12, 18, 'User 1', '2023-12-04 06:36:31', '2023-12-04 06:36:31'),
(31, 13, 18, 'User 2', '2023-12-04 06:36:34', '2023-12-04 06:36:34'),
(32, 14, 18, 'User 3', '2023-12-04 06:36:37', '2023-12-04 06:36:37'),
(33, 14, 19, 'User 3', '2023-12-04 06:42:42', '2023-12-04 06:42:42'),
(34, 15, 19, 'User 4', '2023-12-04 06:42:45', '2023-12-04 06:42:45'),
(35, 16, 19, 'User 5', '2023-12-04 06:42:48', '2023-12-04 06:42:48'),
(36, 13, 20, 'User 2', '2023-12-04 15:39:51', '2023-12-04 15:39:51'),
(37, 12, 20, 'User 1', '2023-12-04 15:39:54', '2023-12-04 15:39:54'),
(38, 12, 21, 'User 1', '2023-12-04 16:27:53', '2023-12-04 16:27:53'),
(39, 13, 21, 'User 2', '2023-12-04 16:27:57', '2023-12-04 16:27:57'),
(40, 12, 22, 'User 1', '2023-12-04 18:33:54', '2023-12-04 18:33:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_20_025019_pelatihan', 2),
(6, '2023_10_20_025030_data_pelatihan', 3),
(7, '2023_10_20_025035_data_peserta', 3),
(8, '2023_10_20_025044_sertifikat', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id` int(10) NOT NULL,
  `nama_pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id`, `nama_pelatihan`, `nama_penyelenggara`, `tgl_mulai`, `tgl_selesai`, `updated_at`, `created_at`) VALUES
(18, 'Pelatihan 1', 'Penyelenggara 1', '2023-12-01', '2023-12-05', '2023-12-04 06:35:57', '2023-12-04 06:35:57'),
(19, 'Pelatihan 2', 'Penyelenggara 2', '2023-11-29', '2023-12-18', '2023-12-04 06:36:23', '2023-12-04 06:36:23'),
(20, 'Pelatihan 3', 'Penyelenggara 3', '2023-11-07', '2023-11-27', '2023-12-04 15:39:12', '2023-12-04 15:39:12'),
(21, 'Pelatihan 4', 'Penyelenggara 4', '2023-11-21', '2023-12-05', '2023-12-04 16:27:48', '2023-12-04 16:27:48'),
(22, 'Pelatihan 5', 'Penyelenggara 5', '2023-12-05', '2023-12-12', '2023-12-04 18:32:33', '2023-12-04 18:32:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(10) UNSIGNED NOT NULL,
  `id_pelatihan` int(10) NOT NULL,
  `nomor_sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_diterbitkan` date NOT NULL,
  `font` enum('Helvetica','Times') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran_kertas` enum('A4','Letter') COLLATE utf8mb4_unicode_ci NOT NULL,
  `orientasi` enum('landscape','portrait') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `id_template` int(10) NOT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sertifikat`
--

INSERT INTO `sertifikat` (`id_sertifikat`, `id_pelatihan`, `nomor_sertifikat`, `tgl_diterbitkan`, `font`, `ukuran_kertas`, `orientasi`, `created_at`, `updated_at`, `id_template`, `ttd`) VALUES
(23, 18, '123456', '2023-12-05', 'Times', 'A4', 'landscape', '2023-12-04 06:43:40', '2023-12-04 06:43:40', 1, 'Tanda_Tangan-removebg-preview.png'),
(25, 19, '12345987', '2023-12-18', 'Helvetica', 'A4', 'landscape', '2023-12-04 06:46:55', '2023-12-04 16:19:51', 2, 'Tanda_Tangan-removebg-preview.png'),
(27, 20, '987658974', '2023-12-01', 'Helvetica', 'Letter', 'portrait', '2023-12-04 15:44:17', '2023-12-04 18:38:29', 1, 'abc-removebg-preview.png'),
(28, 21, '3256478', '2023-12-06', 'Times', 'Letter', 'landscape', '2023-12-04 16:28:33', '2023-12-04 16:29:02', 2, 'Tanda_Tangan-removebg-preview.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `template`
--

CREATE TABLE `template` (
  `id_template` int(10) NOT NULL,
  `nama_template` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `template`
--

INSERT INTO `template` (`id_template`, `nama_template`, `link`, `created_at`, `updated_at`) VALUES
(1, '1', 'https://iili.io/JnoCYOv.jpg', '2023-11-21 03:43:03', '2023-11-21 03:43:03'),
(2, '2', 'https://i.ibb.co/6PK8hnG/15186165-5566879.jpg', '2023-11-21 03:43:03', '2023-11-21 03:43:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'admin', 'admin@admin.com', NULL, '$2y$10$9YcMUKp5X3w5eTOH8pSQTeuNnfcZ5rF11eqrJRVRPf43Q1/STwS8K', 'admin', NULL, '2023-10-19 08:31:15', '2023-10-19 08:31:15'),
(12, 'User 1', 'user1@email.com', NULL, '$2y$10$xq6h6/nMl4TxC9ljH/VNCO3IhoSLkZYk5ks0li1BKpCBJQH7sOTfi', 'user', NULL, '2023-10-19 08:36:02', '2023-10-19 08:36:02'),
(13, 'User 2', 'user2@email.com', NULL, '$2y$10$lLRUJApO5WI4oGngCXROB.JQxzSH7WSqqN0HXS39WBmlvPQK.F2mu', 'user', NULL, NULL, NULL),
(14, 'User 3', 'user3@email.com', NULL, '$2y$10$W3xTfvH.4OjLrfeWkswR9OVgPOdB8nfsLkHHrzysa1aXCnA5kjM5u', 'user', NULL, NULL, NULL),
(15, 'User 4', 'user4@email.com', NULL, '$2y$10$/wR3k3gIw4Tqw/L8nSXS7uW5wd6xTlECHeOkWE5PlblFXjPfK1NLi', 'user', NULL, '2023-11-05 19:42:18', '2023-11-05 19:42:18'),
(16, 'User 5', 'user5@email.com', NULL, '$2y$10$57Xywmq.X.hvN9oV2Vq0GuGFXyk0kxm/qWnPUCnXo3LA1J6QzV8ly', 'user', NULL, '2023-11-05 19:43:42', '2023-11-05 19:43:42'),
(17, 'User 6', 'user6@email.com', NULL, '$2y$10$cKRoTVNMTEai.rL.cT8dv.CWBZJOt3cFpJ4P4aOCbEyWyumpiClDS', 'user', NULL, '2023-11-05 19:47:01', '2023-11-05 19:47:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pelatihan`
--
ALTER TABLE `data_pelatihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pelatihan` (`id_pelatihan`) USING BTREE;

--
-- Indeks untuk tabel `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `id_pelatihan` (`id_pelatihan`) USING BTREE,
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`),
  ADD UNIQUE KEY `id_pelatihan` (`id_pelatihan`) USING BTREE,
  ADD KEY `id_template` (`id_template`);

--
-- Indeks untuk tabel `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id_template`);

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
-- AUTO_INCREMENT untuk tabel `data_pelatihan`
--
ALTER TABLE `data_pelatihan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `data_peserta`
--
ALTER TABLE `data_peserta`
  MODIFY `id_peserta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `template`
--
ALTER TABLE `template`
  MODIFY `id_template` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_pelatihan`
--
ALTER TABLE `data_pelatihan`
  ADD CONSTRAINT `id_pelatihan` FOREIGN KEY (`id_pelatihan`) REFERENCES `pelatihan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD CONSTRAINT `data_peserta_ibfk_1` FOREIGN KEY (`id_pelatihan`) REFERENCES `pelatihan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD CONSTRAINT `id_template` FOREIGN KEY (`id_template`) REFERENCES `template` (`id_template`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sertifikat_ibfk_1` FOREIGN KEY (`id_pelatihan`) REFERENCES `pelatihan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
