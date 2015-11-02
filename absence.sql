-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2015 at 03:20 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absence`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(10) unsigned NOT NULL,
  `namaLengkap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenisKelamin` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nomorHp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `divisi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `namaLengkap`, `jenisKelamin`, `nomorHp`, `jurusan`, `divisi`, `created_at`, `updated_at`) VALUES
(1, 'Firdha nur maghfira ', 'Perempuan', '08976311824', 'Teknologi Infomasi/ Manejemen Informatika/2', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(2, 'ERVINA APRILIA SAPUTRI', 'Perempuan', '085817353171', 'Teknologi Informasi', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(3, 'IFFATUN FIDI PANGESTU', 'Perempuan', '089646685215', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(4, 'ninda arani', 'Perempuan', '085731693175', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(5, 'ninda arani', 'Perempuan', '085731693175', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(6, 'ULIN NUHA', 'Perempuan', '085645285428', 'TEKNOLOGI INFORMASI/MANAJEMEN INFORMATIKA/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(7, 'AJENG YUNISA NUR LAILI', 'Perempuan', '082233878909', 'TEKNOLOGI INFORMASI/MANAJEMEN INFORMATIKA/2', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(8, 'azhari zafarina', 'Perempuan', '087759963894', 'Teknologi Informasi/Manajemen informatika/2', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(9, 'dwilika andriani', 'Perempuan', '081233675541', 'teknologi informasi/menegemen informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(10, 'ELFRIDA PURWITA KURNIASARI', 'Perempuan', '081554614609', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(11, 'Rezida Rismawati Nur Rachma', 'Perempuan', '085864539581', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(12, 'WINDY FATMILA', 'Perempuan', '085745116581', 'TEKNOLOGI INFORMASI/TEKNIK INFORMATIKA/2', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(13, 'ADYLIA DEA PUSPITASARI', 'Perempuan', '085755459173', 'Teknologi Informatika/Teknik Informatika/3', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(14, 'NADHIFATUL LAEILY', 'Perempuan', '089649798348', 'Teknologi Infromasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(15, 'IMAM NAWAWI', 'Laki-Laki', '085746390828', 'Teknik Informatika', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(16, 'Arie Maulana Ramadhan ', 'Laki-Laki', '083835318352', 'Teknologi Informasi / D3 Manajemen Informatika ', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(17, 'M Yus Rizal ', 'Laki-Laki', '089631041243', 'Teknologi Informasi / D3 Manajemen Informatika ', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(18, 'Muhammad Rifky Prayanta', 'Laki-Laki', '085648000185', 'teknologi informasi / manajemen informatika / 1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(19, 'qithfirul bahrowi', 'Laki-Laki', '089632316804', 'teknologi informasi / manajemen informatika / 1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(20, 'tegar wahyu prakoso iskandar putra', 'Laki-Laki', '089609446829', 'teknologi informasi / manajemen informatika / 1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(21, 'Ali muqorrobin', 'Laki-Laki', '087850952044', 'Teknologi informasi/ Teknik Information / 3', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(22, 'andhika adjie pradhana', 'Laki-Laki', '081235524795', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(23, 'andhika adjie pradhana', 'Laki-Laki', '081235524795', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(24, 'andhika adjie pradhana', 'Laki-Laki', '081235524795', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(25, 'Hilal Arsa Himawan', 'Laki-Laki', '081259020736', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(26, 'M RIFQY FUADY', 'Laki-Laki', '081249708574', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(27, 'Muhammad Naufal Hamdani', 'Laki-Laki', '089530353876', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(28, 'Eko Putra Syah Warman', 'Laki-Laki', '089677033454', 'Teknologi Informasi/Manajemen Informatika/2', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(29, 'Mochammad Nadhiful Alim', 'Laki-Laki', '088217909493', 'Teknologi Informasi/Manajemen Informatika/2', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(30, 'Mochammad Nadhiful Alim', 'Laki-Laki', '088217909493', 'Teknologi Informasi/Manajemen Informatika/2', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(31, 'Riski Anugrah Putra', 'Laki-Laki', '087754041042', 'Teknologi informasi/manajemen informatika/2', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(32, 'Muhammad Nasiqul Ibat', 'Laki-Laki', '083848038855', 'Teknologi Informasi/Menejemen Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(33, 'Dovie Yudhawiratama', 'Laki-Laki', '085755602288', 'Teknologi Informasi/Teknik Informartika/3', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(34, 'Ahmad Rizaldi', 'Laki-Laki', '082344466665', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(35, 'BIMA AHIDA INDAKA SUGNA', 'Laki-Laki', '089619825699', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(36, 'MUHAMMAD IKO WIRYADIRJA', 'Laki-Laki', '081216955547', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(37, 'Nickho Ary Prayudha', 'Laki-Laki', '08970325520', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(38, 'Nur Fasholi', 'Laki-Laki', '085755945003', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(39, 'Panji Bayu Setiaji', 'Laki-Laki', '085785183918', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(40, 'syarifudin bahari', 'Laki-Laki', '081335129932', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(41, 'Achmad Jimmy Santoso', 'Laki-Laki', '081555759480', 'Teknologi Informasi/Teknik Informatika/2', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(42, 'ALFI SAMUDRO MULYO', 'Laki-Laki', '083835387684', 'Teknologi Informasi/Teknik Informatika/2', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(43, 'MUKHAMAD TAUFIKUR RACHMAN', 'Laki-Laki', '085730499281', 'Teknologi Informasi/Teknik Informatika/2', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(44, 'Zanuar Hanif Rachmat Adi', 'Laki-Laki', '085607770417', 'Teknologi Informasi/Teknik Informatika/2', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(45, 'Ryan Rifqi Arista', 'Laki-Laki', '081703024224', 'Teknologi Informasi/Teknik Informatika/3', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(46, 'Nur Rochmanshah', 'Laki-Laki', '08986619634', 'Teknologi Informasi/Teknik Informatika/4', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(47, 'Ivan Fadila Putra', 'Laki-Laki', '081555406386', 'Teknologi Informasi/Teknk Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(48, 'Muhammad Dian Cordova', 'Laki-Laki', '087814695614', 'Teknologi Informasi/Teknok Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(49, 'sugiono', 'Laki-Laki', '085785872572', 'TI / MI / 1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(50, 'gibson raditya apriliyanto', 'Laki-Laki', '08993760044', 'TI/MI/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(51, 'zumrotul sholichah', 'Perempuan', '08978250764', 'teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(52, 'sofia falah', 'perempuan', '08990493573', 'teknologi informasi/manajemen Informatika/1', 'Sistem Informasi', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(53, 'Gatra Bagaskoro Wicaksono', 'Laki-Laki', '085646714641', 'Teknologi Informasi/Teknik Informatika/1', 'Jaringan', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(54, 'Rahmad Yudha Teguh', 'Laki-Laki', '081333663248', 'Teknologi Informasi/Teknik Informatika/1', 'Jaringan', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(55, 'Mohammad Faried Rahmat', 'Laki-Laki', '085748722592', 'Teknologi Informasi/Teknik Informatika/2', 'Jaringan', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(56, 'MAHFUD IVAN PATONI', 'Laki-Laki', '08563092300', 'Teknologi Informasi / Teknik Informatika / 2', 'Jaringan', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(57, 'Firhan Alfathan Akbar', 'Laki-Laki', '085726450987', 'Teknik kimia', 'Jaringan', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(58, 'Rheza Arief A.R', 'Laki-Laki', '08979360970', 'Teknologi Informasi/M. Informatika/2', 'Jaringan', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(59, 'Ahmad Yusqie Mafaza', 'Laki-Laki', '085749358165', 'Teknologi Informasi/Teknik Informatika/2', 'Jaringan', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(60, 'SAIFUL ANAM', 'Laki-Laki', '081333035476', 'TEKNOLOGI INFORMASI/TEKNIK INFORMATIKA/1', 'Jaringan', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(61, 'akhmad faishol maturidi', 'Laki-Laki', '089612727280', 'teknologi informasi/teknik informatika/2', 'Jaringan', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(62, 'GITA EKA FEBRIANA', 'Perempuan', '085604381945', 'Teknologi Informasi/Manajemen Informatika/2', 'Jaringan', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(63, 'Lokendra Aditisna Widigdyo', 'Laki-Laki', '082132474339', 'Teknologi Informasi/Teknik Informatika/2', 'Jaringan', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(64, 'Dodik Adhitama', 'Laki-Laki', '087728202920', 'Teknologi Informasi/Teknik Informatika/2', 'Jaringan', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(65, 'Ayu Permatasari Putri Maharani', 'Perempuan', '0083848554327', 'Teknologi Informasi/Teknik Informatika/1', 'Multimedia', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(66, 'MUHAMMAD HILMY RM', 'Laki-Laki', '0081233909360', 'Teknik Informatika', 'Multimedia', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(67, 'Dita Permatasari', 'Perempuan', '0082257276113', 'Teknologi Informasi/Teknik Informatika/1', 'Multimedia', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(68, 'Tika Kusuma Wardhani', 'Perempuan', '0089612311623', 'Teknologi Informasi/Manajemen Informatika/2', 'Multimedia', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(69, 'Rafi Kartika Sari Gunawan', 'Perempuan', '0082331012725', 'Teknologi Informasi/Manajemen Informatika/2', 'Multimedia', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(70, 'Muhammad adhan', 'Laki-Laki', '008574911923', 'teknik elektro/manajemen informatika/3', 'Multimedia', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(71, 'Satria Bagus Wahyu Ramadhan', 'Laki-Laki', '0085933052035', 'Teknologi Informasi/Teknik Informatika/1', 'Multimedia', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(72, 'Fajar Ariadi', 'Laki-Laki', '0085745789910', 'Teknologi Informasi/Manajemen Informatika/1', 'Multimedia', '2015-10-28 09:15:58', '2015-10-28 09:15:58'),
(73, 'Sapta Ahmad Afrizal', 'Laki-Laki', '0085735538263', 'Teknologi Informasi/Manajemen Informatika/1', 'Multimedia', '2015-10-28 09:15:58', '2015-10-28 09:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_28_091201_tableAnggota', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
