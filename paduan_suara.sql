-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 11:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paduan_suara`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `status`, `created_at`, `updated_at`) VALUES
(1, 'saya', 0, NULL, NULL),
(2, 'aku', 0, NULL, NULL),
(3, 'kiki', 0, NULL, NULL),
(4, 'coba', 0, NULL, NULL),
(5, 'tes', 0, NULL, NULL),
(6, NULL, 0, '2021-07-09 09:45:55', '2021-07-09 09:45:55'),
(7, NULL, 1, '2021-07-09 09:46:51', '2021-07-09 09:46:51'),
(8, NULL, 1, '2021-07-09 09:46:54', '2021-07-09 09:46:55'),
(9, NULL, 1, '2021-07-09 09:47:10', '2021-07-09 09:47:10'),
(10, NULL, 1, '2021-07-09 09:47:24', '2021-07-09 09:47:24'),
(11, NULL, 1, '2021-07-09 09:47:58', '2021-07-09 09:47:58'),
(12, 'Nura Ursula', 1, '2021-07-09 09:52:06', '2021-07-09 09:52:06'),
(13, 'Nura Ursula', 1, '2021-07-09 09:54:12', '2021-07-09 09:54:12'),
(14, 'Nura Ursula', 0, '2021-07-09 09:54:49', '2021-07-09 09:54:49'),
(15, 'Nura Ursula', 1, '2021-07-12 05:41:41', '2021-07-12 05:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `vocal` varchar(100) DEFAULT NULL,
  `audio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audios`
--

INSERT INTO `audios` (`id`, `slug`, `title`, `vocal`, `audio`, `created_at`, `updated_at`) VALUES
(1, 'mengenal-istilah-belting-technique-or-belters', 'Audio a', 'a', 'm10_scales_belt_a.wav', '2021-06-07 05:46:07', '2021-06-07 05:46:07'),
(2, 'mengenal-istilah-belting-technique-or-belters', 'Audio i', 'i', 'm10_scales_belt_i.wav', '2021-06-07 05:46:07', '2021-06-07 05:46:07'),
(3, 'mengenal-istilah-belting-technique-or-belters', 'Audio u', 'u', 'm10_scales_belt_u.wav', '2021-06-07 05:46:07', '2021-06-07 05:46:07'),
(4, 'mengenal-istilah-belting-technique-or-belters', 'Audio e', 'e', 'm10_scales_belt_e.wav', '2021-06-07 05:46:07', '2021-06-07 05:46:07'),
(5, 'mengenal-istilah-belting-technique-or-belters', 'Audio o', 'o', 'm10_scales_belt_o.wav', '2021-06-07 05:46:07', '2021-06-07 05:46:07'),
(6, 'ini-sekilas-yang-kedua', 'Audio a', 'a', 'm8_arpeggios_breathy_a.wav', '2021-06-07 07:18:35', '2021-06-07 07:18:35'),
(7, 'ini-sekilas-yang-kedua', 'Audio i', 'i', 'm8_arpeggios_breathy_i.wav', '2021-06-07 07:18:35', '2021-06-07 07:18:35'),
(8, 'ini-sekilas-yang-kedua', 'Audio u', 'u', 'm8_arpeggios_breathy_u.wav', '2021-06-07 07:18:35', '2021-06-07 07:18:35'),
(9, 'ini-sekilas-yang-kedua', 'Audio e', 'e', 'm8_arpeggios_breathy_e.wav', '2021-06-07 07:18:35', '2021-06-07 07:18:35'),
(10, 'ini-sekilas-yang-kedua', 'Audio o', 'o', 'm8_arpeggios_breathy_o.wav', '2021-06-07 07:18:35', '2021-06-07 07:18:35'),
(11, 'question-1', 'Audio a', 'a', 'm8_arpeggios_breathy_a.wav', '2021-06-07 08:34:05', '2021-06-07 08:34:05'),
(12, 'question-1', 'Audio i', 'i', 'm8_arpeggios_breathy_i.wav', '2021-06-07 08:34:05', '2021-06-07 08:34:05'),
(13, 'question-1', 'Audio u', 'u', 'm8_arpeggios_breathy_u.wav', '2021-06-07 08:34:05', '2021-06-07 08:34:05'),
(14, 'question-1', 'Audio e', 'e', 'm8_arpeggios_breathy_e.wav', '2021-06-07 08:34:05', '2021-06-07 08:34:05'),
(15, 'question-1', 'Audio o', 'o', 'm8_arpeggios_breathy_o.wav', '2021-06-07 08:34:05', '2021-06-07 08:34:05'),
(16, 'question-8', 'Audio a', 'a', 'paduan_suara (3).sql', '2021-07-26 19:55:18', '2021-07-26 19:55:18');

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
-- Table structure for table `himpunan`
--

CREATE TABLE `himpunan` (
  `id` int(11) NOT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `nama_himpunan` varchar(255) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `himpunan`
--

INSERT INTO `himpunan` (`id`, `id_kriteria`, `nama_himpunan`, `nilai`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, '1 Tahun', 25, 'Kurang', NULL, NULL),
(2, 1, '2 Tahun', 50, 'Cukup', NULL, NULL),
(3, 1, '3 Tahun', 75, 'Baik', NULL, NULL),
(4, 1, '4 Tahun', 100, 'Sangat Baik', NULL, NULL),
(5, 2, 'IPK < 2.50', 25, 'Kurang', NULL, NULL),
(6, 2, '2.50 <= IPK <= 3.00', 50, 'Cukup', NULL, NULL),
(7, 2, '3.00 <= IPK <= 3.50', 75, 'Baik', NULL, NULL),
(8, 2, 'IPK > 3.50', 100, 'Sangat Baik', NULL, NULL),
(9, 3, 'Tidak Bisa', 50, 'Cukup', NULL, NULL),
(10, 3, 'Bisa', 100, 'Sangat Baik', NULL, NULL),
(11, 4, 'Tidak Pernah', 50, 'Cukup', NULL, NULL),
(12, 4, 'Pernah', 100, 'Sangat Baik', NULL, NULL),
(13, 5, 'Jarak < 0.5 Km', 25, 'Sangat Baik', NULL, NULL),
(14, 5, '0.5 Km >= Jarak <= 1.5 Km', 50, 'Cukup', NULL, NULL),
(15, 5, '1.5 Km >= Jarak <= 2.0 Km', 75, 'Baik', NULL, NULL),
(16, 5, 'Jarak > 2.0 Km', 100, 'Kurang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_suara`
--

CREATE TABLE `jenis_suara` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_suara`
--

INSERT INTO `jenis_suara` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Sopran', 'lorem ipsum', NULL, NULL),
(2, 'Alto', 'lorem ipsum', NULL, NULL),
(3, 'Tenor', 'lorem ipsum', NULL, NULL),
(4, 'Bass', 'lorem ipsum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id` int(11) NOT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `pengalaman` int(11) DEFAULT NULL,
  `nilai_semester` int(11) DEFAULT NULL,
  `alat_musik` int(11) DEFAULT NULL,
  `organisasi` int(11) DEFAULT NULL,
  `jarak` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `id_anggota`, `pengalaman`, `nilai_semester`, `alat_musik`, `organisasi`, `jarak`, `created_at`, `updated_at`) VALUES
(1, 1, 25, 75, 50, 100, 25, NULL, NULL),
(2, 2, 75, 25, 50, 100, 25, NULL, NULL),
(3, 3, 25, 75, 50, 100, 25, NULL, NULL),
(4, 4, 100, 100, 100, 100, 25, NULL, NULL),
(5, 5, 25, 25, 25, 25, 100, NULL, NULL),
(6, 6, 75, 50, 100, 100, 100, '2021-07-09 09:45:55', '2021-07-09 09:45:55'),
(7, 7, 75, 50, 100, 100, 50, '2021-07-09 09:46:51', '2021-07-09 09:46:51'),
(8, 8, 75, 50, 100, 100, 50, '2021-07-09 09:46:54', '2021-07-09 09:46:54'),
(9, 9, 50, 50, 100, 100, 50, '2021-07-09 09:47:10', '2021-07-09 09:47:10'),
(10, 10, 50, 50, 100, 100, 50, '2021-07-09 09:47:24', '2021-07-09 09:47:24'),
(11, 11, 75, 75, 100, 100, 75, '2021-07-09 09:47:58', '2021-07-09 09:47:58'),
(12, 12, 50, 75, 100, 100, 75, '2021-07-09 09:52:06', '2021-07-09 09:52:06'),
(13, 13, 50, 75, 100, 100, 50, '2021-07-09 09:54:12', '2021-07-09 09:54:12'),
(14, 14, 25, 25, 50, 50, 100, '2021-07-09 09:54:49', '2021-07-09 09:54:49'),
(15, 15, 75, 50, 100, 100, 100, '2021-07-12 05:41:41', '2021-07-12 05:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(255) DEFAULT NULL,
  `atribut` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama_kriteria`, `atribut`, `created_at`, `updated_at`) VALUES
(1, 'Pengalaman', 'Benefit', NULL, NULL),
(2, 'Nilai Semeter', 'Benefit', NULL, NULL),
(3, 'Alat Musik', 'Benefit', NULL, NULL),
(4, 'Organisasi', 'Benefit', NULL, NULL),
(5, 'Jarak', 'Cost', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_smart`
--

CREATE TABLE `kriteria_smart` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria_smart`
--

INSERT INTO `kriteria_smart` (`id`, `kriteria`, `created_at`, `updated_at`) VALUES
(1, 'Minat', NULL, NULL),
(2, 'Menirukan', NULL, NULL),
(3, 'Pengalaman', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `publish` int(11) DEFAULT NULL COMMENT '0 = not published\r\n1 = published'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `slug`, `title`, `user_id`, `isi`, `image`, `created_at`, `updated_at`, `publish`) VALUES
(1, 'mengenal-istilah-belting-technique-or-belters', 'Mengenal istilah Belting Technique or Belters', 2, '<p>Belting Technique or Belters</p>\r\n\r\n<p>&ndash; Sebuah teknik vokal dalam musik kontemporer dengan menggunakan chest voice dengan memodifikasi teknik produksi, vowels dan lain-lain.</p>\r\n\r\n<p>&ndash; Belting tidak sama dengan kebanyakan suara dada yang dilakukan penyanyi yang tidak terlatih.</p>\r\n\r\n<p>&ndash; Ciri khasnya: suara lebih tegas &amp; powerful.</p>\r\n\r\n<p>&ndash; Getaran suara di area depan wajah sangat kuat apalagi di area middle sangat powerful.</p>\r\n\r\n<p>&ndash; Soundnya lebih ke speaking voice.</p>\r\n\r\n<p>&ndash; Tidak semua yang menggunakan SUARA DADA adalah BELTERS (harus ada tekniknya).</p>\r\n\r\n<p>&ndash; Dalam musik kontemporer, Ethel Merman dianggap sebagai &ldquo;The Mother of Belting&rdquo; (pertama kali mengusung teknik ini ke belantika musik dunia).<br />\r\nKARIR NYANYI ETHEL MERMAN LEBIH DARI 50 TAHUN/NYANYI SAMPAI USIA 74 TAHUN!</p>\r\n\r\n<p>&ndash; Para DIVA DUNIA yang menggunakan teknik ini: Beyonce , Barbra Straisand, Aretha Franklin, Celine Dion, Mariah Carey, Whitney Houston, Kelly Clarkson, Fantasia Barino, Yolanda Adamas, Jennifer Hudson, dan masih banyak lagi.</p>\r\n\r\n<p>&ndash; Di Indonesia: Agnes Monica, Dewi Marpaung, Zaneta Naomi, dan masih banyak lagi.</p>\r\n\r\n<p>&ndash; Mayoritas penerima Grammy Award di belantika musik Amerika adalah para BELTERS, begitu juga di sepanjang sejarah musik Indonesia.</p>', '2000px-Honda_Logo.svg.png', '2021-06-07 05:46:07', '2021-07-22 23:42:41', 1),
(2, 'ini-sekilas-yang-kedua', 'ini sekilas yang kedua', 1, '<p>contoh mate</p>', '2000px-Honda_Logo.svg.png', '2021-06-07 07:18:35', '2021-06-10 05:55:20', 1),
(5, 'ini-sekilas-yang-kedua', 'ini sekilas yang kedua', 1, '<p>contoh mate</p>', '2000px-Honda_Logo.svg.png', '2021-06-07 07:18:35', '2021-06-10 05:55:20', 1),
(6, 'ini-sekilas-yang-kedua', 'ini sekilas yang kedua', 1, '<p>contoh mate</p>', '2000px-Honda_Logo.svg.png', '2021-06-07 07:18:35', '2021-06-10 05:55:20', 1),
(7, 'ini-sekilas-yang-kedua', 'ini sekilas yang kedua', 1, '<p>contoh mate</p>', '2000px-Honda_Logo.svg.png', '2021-06-07 07:18:35', '2021-06-10 05:55:20', 1),
(8, 'ini-sekilas-yang-kedua', 'ini sekilas yang kedua', 1, '<p>contoh mate</p>', '2000px-Honda_Logo.svg.png', '2021-06-07 07:18:35', '2021-06-10 05:55:20', 1),
(9, 'mengenal-istilah-belting-technique-or-belters', 'Mengenal istilah Belting Technique or Belters', 1, '<p>Belting Technique or Belters</p>\r\n\r\n<p>&ndash; Sebuah teknik vokal dalam musik kontemporer dengan menggunakan chest voice dengan memodifikasi teknik produksi, vowels dan lain-lain.</p>\r\n\r\n<p>&ndash; Belting tidak sama dengan kebanyakan suara dada yang dilakukan penyanyi yang tidak terlatih.</p>\r\n\r\n<p>&ndash; Ciri khasnya: suara lebih tegas &amp; powerful.</p>\r\n\r\n<p>&ndash; Getaran suara di area depan wajah sangat kuat apalagi di area middle sangat powerful.</p>\r\n\r\n<p>&ndash; Soundnya lebih ke speaking voice.</p>\r\n\r\n<p>&ndash; Tidak semua yang menggunakan SUARA DADA adalah BELTERS (harus ada tekniknya).</p>\r\n\r\n<p>&ndash; Dalam musik kontemporer, Ethel Merman dianggap sebagai &ldquo;The Mother of Belting&rdquo; (pertama kali mengusung teknik ini ke belantika musik dunia).<br />\r\nKARIR NYANYI ETHEL MERMAN LEBIH DARI 50 TAHUN/NYANYI SAMPAI USIA 74 TAHUN!</p>\r\n\r\n<p>&ndash; Para DIVA DUNIA yang menggunakan teknik ini: Beyonce , Barbra Straisand, Aretha Franklin, Celine Dion, Mariah Carey, Whitney Houston, Kelly Clarkson, Fantasia Barino, Yolanda Adamas, Jennifer Hudson, dan masih banyak lagi.</p>\r\n\r\n<p>&ndash; Di Indonesia: Agnes Monica, Dewi Marpaung, Zaneta Naomi, dan masih banyak lagi.</p>\r\n\r\n<p>&ndash; Mayoritas penerima Grammy Award di belantika musik Amerika adalah para BELTERS, begitu juga di sepanjang sejarah musik Indonesia.</p>', '2000px-Honda_Logo.svg.png', '2021-06-07 05:46:07', '2021-06-07 05:46:39', 1),
(10, 'mengenal-istilah-belting-technique-or-belters', 'Mengenal istilah Belting Technique or Belters', 1, '<p>Belting Technique or Belters</p>\r\n\r\n<p>&ndash; Sebuah teknik vokal dalam musik kontemporer dengan menggunakan chest voice dengan memodifikasi teknik produksi, vowels dan lain-lain.</p>\r\n\r\n<p>&ndash; Belting tidak sama dengan kebanyakan suara dada yang dilakukan penyanyi yang tidak terlatih.</p>\r\n\r\n<p>&ndash; Ciri khasnya: suara lebih tegas &amp; powerful.</p>\r\n\r\n<p>&ndash; Getaran suara di area depan wajah sangat kuat apalagi di area middle sangat powerful.</p>\r\n\r\n<p>&ndash; Soundnya lebih ke speaking voice.</p>\r\n\r\n<p>&ndash; Tidak semua yang menggunakan SUARA DADA adalah BELTERS (harus ada tekniknya).</p>\r\n\r\n<p>&ndash; Dalam musik kontemporer, Ethel Merman dianggap sebagai &ldquo;The Mother of Belting&rdquo; (pertama kali mengusung teknik ini ke belantika musik dunia).<br />\r\nKARIR NYANYI ETHEL MERMAN LEBIH DARI 50 TAHUN/NYANYI SAMPAI USIA 74 TAHUN!</p>\r\n\r\n<p>&ndash; Para DIVA DUNIA yang menggunakan teknik ini: Beyonce , Barbra Straisand, Aretha Franklin, Celine Dion, Mariah Carey, Whitney Houston, Kelly Clarkson, Fantasia Barino, Yolanda Adamas, Jennifer Hudson, dan masih banyak lagi.</p>\r\n\r\n<p>&ndash; Di Indonesia: Agnes Monica, Dewi Marpaung, Zaneta Naomi, dan masih banyak lagi.</p>\r\n\r\n<p>&ndash; Mayoritas penerima Grammy Award di belantika musik Amerika adalah para BELTERS, begitu juga di sepanjang sejarah musik Indonesia.</p>', '2000px-Honda_Logo.svg.png', '2021-06-07 05:46:07', '2021-06-07 05:46:39', 1),
(11, 'mengenal-istilah-belting-technique-or-belters', 'Mengenal istilah Belting Technique or Belters', 1, '<p>Belting Technique or Belters</p>\r\n\r\n<p>&ndash; Sebuah teknik vokal dalam musik kontemporer dengan menggunakan chest voice dengan memodifikasi teknik produksi, vowels dan lain-lain.</p>\r\n\r\n<p>&ndash; Belting tidak sama dengan kebanyakan suara dada yang dilakukan penyanyi yang tidak terlatih.</p>\r\n\r\n<p>&ndash; Ciri khasnya: suara lebih tegas &amp; powerful.</p>\r\n\r\n<p>&ndash; Getaran suara di area depan wajah sangat kuat apalagi di area middle sangat powerful.</p>\r\n\r\n<p>&ndash; Soundnya lebih ke speaking voice.</p>\r\n\r\n<p>&ndash; Tidak semua yang menggunakan SUARA DADA adalah BELTERS (harus ada tekniknya).</p>\r\n\r\n<p>&ndash; Dalam musik kontemporer, Ethel Merman dianggap sebagai &ldquo;The Mother of Belting&rdquo; (pertama kali mengusung teknik ini ke belantika musik dunia).<br />\r\nKARIR NYANYI ETHEL MERMAN LEBIH DARI 50 TAHUN/NYANYI SAMPAI USIA 74 TAHUN!</p>\r\n\r\n<p>&ndash; Para DIVA DUNIA yang menggunakan teknik ini: Beyonce , Barbra Straisand, Aretha Franklin, Celine Dion, Mariah Carey, Whitney Houston, Kelly Clarkson, Fantasia Barino, Yolanda Adamas, Jennifer Hudson, dan masih banyak lagi.</p>\r\n\r\n<p>&ndash; Di Indonesia: Agnes Monica, Dewi Marpaung, Zaneta Naomi, dan masih banyak lagi.</p>\r\n\r\n<p>&ndash; Mayoritas penerima Grammy Award di belantika musik Amerika adalah para BELTERS, begitu juga di sepanjang sejarah musik Indonesia.</p>', '2000px-Honda_Logo.svg.png', '2021-06-07 05:46:07', '2021-06-07 05:46:39', 1),
(12, 'mengenal-istilah-belting-technique-or-belters', 'Mengenal istilah Belting Technique or Belters', 1, '<p>Belting Technique or Belters</p>\r\n\r\n<p>&ndash; Sebuah teknik vokal dalam musik kontemporer dengan menggunakan chest voice dengan memodifikasi teknik produksi, vowels dan lain-lain.</p>\r\n\r\n<p>&ndash; Belting tidak sama dengan kebanyakan suara dada yang dilakukan penyanyi yang tidak terlatih.</p>\r\n\r\n<p>&ndash; Ciri khasnya: suara lebih tegas &amp; powerful.</p>\r\n\r\n<p>&ndash; Getaran suara di area depan wajah sangat kuat apalagi di area middle sangat powerful.</p>\r\n\r\n<p>&ndash; Soundnya lebih ke speaking voice.</p>\r\n\r\n<p>&ndash; Tidak semua yang menggunakan SUARA DADA adalah BELTERS (harus ada tekniknya).</p>\r\n\r\n<p>&ndash; Dalam musik kontemporer, Ethel Merman dianggap sebagai &ldquo;The Mother of Belting&rdquo; (pertama kali mengusung teknik ini ke belantika musik dunia).<br />\r\nKARIR NYANYI ETHEL MERMAN LEBIH DARI 50 TAHUN/NYANYI SAMPAI USIA 74 TAHUN!</p>\r\n\r\n<p>&ndash; Para DIVA DUNIA yang menggunakan teknik ini: Beyonce , Barbra Straisand, Aretha Franklin, Celine Dion, Mariah Carey, Whitney Houston, Kelly Clarkson, Fantasia Barino, Yolanda Adamas, Jennifer Hudson, dan masih banyak lagi.</p>\r\n\r\n<p>&ndash; Di Indonesia: Agnes Monica, Dewi Marpaung, Zaneta Naomi, dan masih banyak lagi.</p>\r\n\r\n<p>&ndash; Mayoritas penerima Grammy Award di belantika musik Amerika adalah para BELTERS, begitu juga di sepanjang sejarah musik Indonesia.</p>', '2000px-Honda_Logo.svg.png', '2021-06-07 05:46:07', '2021-06-07 05:46:39', 1);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi`
--

CREATE TABLE `normalisasi` (
  `id` int(11) NOT NULL,
  `anggota_id` int(11) DEFAULT NULL,
  `jenis_suara` varchar(255) DEFAULT NULL,
  `kriteria` varchar(255) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normalisasi`
--

INSERT INTO `normalisasi` (`id`, `anggota_id`, `jenis_suara`, `kriteria`, `total`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Alto', 'Minat', 0.285714, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(2, NULL, 'Alto', 'Menirukan', 0.333333, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(3, NULL, 'Alto', 'Pengalaman', 0.333333, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(4, NULL, 'Bass', 'Minat', 0.142857, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(5, NULL, 'Bass', 'Menirukan', 0.166667, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(6, NULL, 'Bass', 'Pengalaman', 0.166667, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(7, NULL, 'Sopran', 'Minat', 0.285714, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(8, NULL, 'Sopran', 'Menirukan', 0.333333, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(9, NULL, 'Sopran', 'Pengalaman', 0.333333, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(10, NULL, 'Tenor', 'Minat', 0.285714, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(11, NULL, 'Tenor', 'Menirukan', 0.166667, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(12, NULL, 'Tenor', 'Pengalaman', 0.166667, '2021-07-27 01:55:19', '2021-07-27 01:55:19');

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
-- Table structure for table `pembobotan`
--

CREATE TABLE `pembobotan` (
  `id` int(11) NOT NULL,
  `anggota_id` int(11) DEFAULT NULL,
  `jenis_suara` varchar(255) DEFAULT NULL,
  `kriteria` varchar(255) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembobotan`
--

INSERT INTO `pembobotan` (`id`, `anggota_id`, `jenis_suara`, `kriteria`, `total`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Alto', 'Minat', 20, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(2, NULL, 'Alto', 'Menirukan', 20, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(3, NULL, 'Alto', 'Pengalaman', 20, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(4, NULL, 'Bass', 'Minat', 10, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(5, NULL, 'Bass', 'Menirukan', 10, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(6, NULL, 'Bass', 'Pengalaman', 10, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(7, NULL, 'Sopran', 'Minat', 20, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(8, NULL, 'Sopran', 'Menirukan', 20, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(9, NULL, 'Sopran', 'Pengalaman', 20, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(10, NULL, 'Tenor', 'Minat', 20, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(11, NULL, 'Tenor', 'Menirukan', 10, '2021-07-27 01:55:19', '2021-07-27 01:55:19'),
(12, NULL, 'Tenor', 'Pengalaman', 10, '2021-07-27 01:55:19', '2021-07-27 01:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `kriteria_id` int(11) DEFAULT NULL,
  `jenis_suara_id` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `show` int(11) DEFAULT NULL COMMENT '0=hidden, 1=show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `kriteria_id`, `jenis_suara_id`, `question`, `show`, `created_at`, `updated_at`) VALUES
(7, NULL, 1, 1, '<p>Apakah Anda memiliki minat pada jenis suara ini?</p>', 1, '2021-07-26 19:42:57', '2021-07-26 19:51:52'),
(8, NULL, 2, 1, '<p>Apakah Anda bisa menirukan suara ini?</p>', 1, '2021-07-26 19:55:17', '2021-07-26 19:55:17'),
(9, NULL, 3, 1, '<p>Apakah Anda memiliki pengalaman dengan jenis suara ini?</p>', 1, '2021-07-26 19:56:04', '2021-07-26 19:56:04'),
(10, NULL, 1, 2, '<p>Apakah Anda memiliki minat pada jenis suara ini?</p>', 1, '2021-07-26 19:42:57', '2021-07-26 19:51:52'),
(11, NULL, 2, 2, '<p>Apakah Anda bisa menirukan suara ini?</p>', 1, '2021-07-26 19:55:17', '2021-07-26 19:55:17'),
(12, NULL, 3, 2, '<p>Apakah Anda memiliki pengalaman dengan jenis suara ini?</p>', 1, '2021-07-26 19:56:04', '2021-07-26 19:56:04'),
(13, NULL, 1, 3, '<p>Apakah Anda memiliki minat pada jenis suara ini?</p>', 1, '2021-07-26 19:42:57', '2021-07-26 19:51:52'),
(14, NULL, 2, 3, '<p>Apakah Anda bisa menirukan suara ini?</p>', 1, '2021-07-26 19:55:17', '2021-07-26 19:55:17'),
(15, NULL, 3, 3, '<p>Apakah Anda memiliki pengalaman dengan jenis suara ini?</p>', 1, '2021-07-26 19:56:04', '2021-07-26 19:56:04'),
(16, NULL, 1, 4, '<p>Apakah Anda memiliki minat pada jenis suara ini?</p>', 1, '2021-07-26 19:42:57', '2021-07-26 19:51:52'),
(17, NULL, 2, 4, '<p>Apakah Anda bisa menirukan suara ini?</p>', 1, '2021-07-26 19:55:17', '2021-07-26 19:55:17'),
(18, NULL, 3, 4, '<p>Apakah Anda memiliki pengalaman dengan jenis suara ini?</p>', 1, '2021-07-26 19:56:04', '2021-07-26 19:56:04');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kiki Rizka Abdullah', 'kikirabdullah@gmail.com', NULL, '$2y$10$GGZ4yt2axGa1Bq0L2R3cYuvSdewOq1.YogLKS/PTVwi5rKoWRDnlK', NULL, '2021-05-26 02:35:25', '2021-05-26 02:35:25'),
(2, 'test', 'test@gmail.com', NULL, '$2y$10$oHuzCRYHkKTpO8btnU9LtOLmasLqT0sywz8Vxs6RFm6fitBL.fdYO', NULL, '2021-07-22 23:42:26', '2021-07-22 23:42:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `himpunan`
--
ALTER TABLE `himpunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_suara`
--
ALTER TABLE `jenis_suara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria_smart`
--
ALTER TABLE `kriteria_smart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normalisasi`
--
ALTER TABLE `normalisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembobotan`
--
ALTER TABLE `pembobotan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
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
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `himpunan`
--
ALTER TABLE `himpunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jenis_suara`
--
ALTER TABLE `jenis_suara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria_smart`
--
ALTER TABLE `kriteria_smart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `normalisasi`
--
ALTER TABLE `normalisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pembobotan`
--
ALTER TABLE `pembobotan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
