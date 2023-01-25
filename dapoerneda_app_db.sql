-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 07:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dapoerneda_app_db`
--

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
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2023_01_16_111359_create_resep_table', 1);

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
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_resep` varchar(255) NOT NULL,
  `vidio` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `alat` varchar(255) NOT NULL,
  `postedby` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id`, `nama_resep`, `vidio`, `thumbnail`, `deskripsi`, `alat`, `postedby`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Nasi Goreng Buatan Alifa', 'https://www.youtube.com/watch?v=8ZjtrOktGr0', 'Oj95ci6f5ZTumbnail1.jpeg', 'Nasi goreng adalah makanan sejuta umat dan penyelamat dari kelaparan', 'dua buah panci dan 1 wajan', 'alifaanr', 'hidangan utama', '2023-01-24 03:54:56', '2023-01-24 04:00:43'),
(2, 'Soto Betawi buatan alifa', 'https://www.youtube.com/watch?v=8ZjtrOktGr0', 'dPQi5uVYqOgambar1.jpg', 'Soto betawi adalah makanan khas betawi yang sangat legit', 'satu kuali besar', 'alifaanr', 'dessert', '2023-01-24 03:54:56', '2023-01-24 04:02:03'),
(3, 'Nasi Rendang Alifa', 'https://www.youtube.com/watch?v=8ZjtrOktGr0', 'OrRScn2eUpstream1.jpg', 'Nasi goreng adalah makanan sejuta umat dan penyelamat dari kelaparan', 'Sodet dan Pisau', 'alifaanr', 'minuman', '2023-01-24 03:54:56', '2023-01-24 04:02:40'),
(4, 'Pisang Goreng', 'https://www.youtube.com/watch?v=8ZjtrOktGr0', '9VhpU8AvrITumbnail1.jpeg', 'pisang goreng adalah makanan sejuta umat dan penyelamat dari kelaparan', 'Sodet dan Pisau', 'alifaanr', 'camilan', '2023-01-24 03:54:56', '2023-01-24 04:02:55'),
(5, 'babi guling', 'https://www.youtube.com/results?search_query=babi+guling', 'bNycpf6PEXgambar1.jpg', 'Babi guling atau babi putar (di Bali disebut be guling) adalah sejenis makanan yang terbuat dari anak babi betina atau jantan yang perutnya diisikan dengan bumbu dan sayuran seperti daun ketela pohon dan lalu dipanggang sambil diputar-putar (diguling-gulingkan) sampai matang dengan ditandai dengan perubahan warna kulit', 'sodet,bambi,arang', 'alifa', 'camilan', '2023-01-24 04:04:34', '2023-01-24 04:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','member') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'alifa', 'alifaanr@gmail.com', '$2y$10$PI.8nQuxU6Iw4GwlQxsHe.h/ZC36TbMnUX7Wb/n39cLsM4oAv3dXC', 'member', '2023-01-24 03:54:56', '2023-01-24 03:54:56'),
(2, 'admin', 'admin@dapoerneda.com', '$2y$10$NJO9MdipvLqBOwjevmva/eeHRjVVsdkssmr6BOWaKsNXioMf8QNSa', 'admin', '2023-01-24 03:54:56', '2023-01-24 03:54:56');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `resep`
--
ALTER TABLE `resep`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
