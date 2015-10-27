-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2015 at 05:09 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `absence`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
`id` int(11) NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `nomorHp` varchar(15) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `namaLengkap`, `jenisKelamin`, `nomorHp`, `jurusan`, `divisi`, `created_at`, `updated_at`) VALUES
(153, 'Firdha nur maghfira ', 'Perempuan', '08976311824', 'Teknologi Infomasi/ Manejemen Informatika/2', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(154, 'ERVINA APRILIA SAPUTRI', 'Perempuan', '085817353171', 'Teknologi Informasi', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(155, 'IFFATUN FIDI PANGESTU', 'Perempuan', '089646685215', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(156, 'ninda arani', 'Perempuan', '085731693175', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(157, 'ninda arani', 'Perempuan', '085731693175', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(158, 'ULIN NUHA', 'Perempuan', '085645285428', 'TEKNOLOGI INFORMASI/MANAJEMEN INFORMATIKA/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(159, 'AJENG YUNISA NUR LAILI', 'Perempuan', '082233878909', 'TEKNOLOGI INFORMASI/MANAJEMEN INFORMATIKA/2', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(160, 'azhari zafarina', 'Perempuan', '087759963894', 'Teknologi Informasi/Manajemen informatika/2', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(161, 'dwilika andriani', 'Perempuan', '081233675541', 'teknologi informasi/menegemen informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(162, 'ELFRIDA PURWITA KURNIASARI', 'Perempuan', '081554614609', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(163, 'Rezida Rismawati Nur Rachma', 'Perempuan', '085864539581', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(164, 'WINDY FATMILA', 'Perempuan', '085745116581', 'TEKNOLOGI INFORMASI/TEKNIK INFORMATIKA/2', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(165, 'ADYLIA DEA PUSPITASARI', 'Perempuan', '085755459173', 'Teknologi Informatika/Teknik Informatika/3', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(166, 'NADHIFATUL LAEILY', 'Perempuan', '089649798348', 'Teknologi Infromasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(167, 'IMAM NAWAWI', 'Laki-Laki', '085746390828', 'Teknik Informatika', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(168, 'Arie Maulana Ramadhan ', 'Laki-Laki', '083835318352', 'Teknologi Informasi / D3 Manajemen Informatika ', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(169, 'M Yus Rizal ', 'Laki-Laki', '089631041243', 'Teknologi Informasi / D3 Manajemen Informatika ', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(170, 'Muhammad Rifky Prayanta', 'Laki-Laki', '085648000185', 'teknologi informasi / manajemen informatika / 1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(171, 'qithfirul bahrowi', 'Laki-Laki', '089632316804', 'teknologi informasi / manajemen informatika / 1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(172, 'tegar wahyu prakoso iskandar putra', 'Laki-Laki', '089609446829', 'teknologi informasi / manajemen informatika / 1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(173, 'Ali muqorrobin', 'Laki-Laki', '087850952044', 'Teknologi informasi/ Teknik Information / 3', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(174, 'andhika adjie pradhana', 'Laki-Laki', '081235524795', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(175, 'andhika adjie pradhana', 'Laki-Laki', '081235524795', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(176, 'andhika adjie pradhana', 'Laki-Laki', '081235524795', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(177, 'Hilal Arsa Himawan', 'Laki-Laki', '081259020736', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(178, 'M RIFQY FUADY', 'Laki-Laki', '081249708574', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(179, 'Muhammad Naufal Hamdani', 'Laki-Laki', '089530353876', 'Teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(180, 'Eko Putra Syah Warman', 'Laki-Laki', '089677033454', 'Teknologi Informasi/Manajemen Informatika/2', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(181, 'Mochammad Nadhiful Alim', 'Laki-Laki', '088217909493', 'Teknologi Informasi/Manajemen Informatika/2', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(182, 'Mochammad Nadhiful Alim', 'Laki-Laki', '088217909493', 'Teknologi Informasi/Manajemen Informatika/2', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(183, 'Riski Anugrah Putra', 'Laki-Laki', '087754041042', 'Teknologi informasi/manajemen informatika/2', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(184, 'Muhammad Nasiqul Ibat', 'Laki-Laki', '083848038855', 'Teknologi Informasi/Menejemen Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(185, 'Dovie Yudhawiratama', 'Laki-Laki', '085755602288', 'Teknologi Informasi/Teknik Informartika/3', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(186, 'Ahmad Rizaldi', 'Laki-Laki', '082344466665', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(187, 'BIMA AHIDA INDAKA SUGNA', 'Laki-Laki', '089619825699', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(188, 'MUHAMMAD IKO WIRYADIRJA', 'Laki-Laki', '081216955547', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(189, 'Nickho Ary Prayudha', 'Laki-Laki', '08970325520', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(190, 'Nur Fasholi', 'Laki-Laki', '085755945003', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(191, 'Panji Bayu Setiaji', 'Laki-Laki', '085785183918', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(192, 'syarifudin bahari', 'Laki-Laki', '081335129932', 'Teknologi Informasi/Teknik Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(193, 'Achmad Jimmy Santoso', 'Laki-Laki', '081555759480', 'Teknologi Informasi/Teknik Informatika/2', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(194, 'ALFI SAMUDRO MULYO', 'Laki-Laki', '083835387684', 'Teknologi Informasi/Teknik Informatika/2', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(195, 'MUKHAMAD TAUFIKUR RACHMAN', 'Laki-Laki', '085730499281', 'Teknologi Informasi/Teknik Informatika/2', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(196, 'Zanuar Hanif Rachmat Adi', 'Laki-Laki', '085607770417', 'Teknologi Informasi/Teknik Informatika/2', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(197, 'Ryan Rifqi Arista', 'Laki-Laki', '081703024224', 'Teknologi Informasi/Teknik Informatika/3', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(198, 'Nur Rochmanshah', 'Laki-Laki', '08986619634', 'Teknologi Informasi/Teknik Informatika/4', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(199, 'Ivan Fadila Putra', 'Laki-Laki', '081555406386', 'Teknologi Informasi/Teknk Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(200, 'Muhammad Dian Cordova', 'Laki-Laki', '087814695614', 'Teknologi Informasi/Teknok Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(201, 'sugiono', 'Laki-Laki', '085785872572', 'TI / MI / 1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(202, 'gibson raditya apriliyanto', 'Laki-Laki', '08993760044', 'TI/MI/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(203, 'zumrotul sholichah', 'Perempuan', '08978250764', 'teknologi Informasi/Manajemen Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(204, 'sofia falah', 'perempuan', '08990493573', 'teknologi informasi/manajemen Informatika/1', 'Sistem Informasi', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(205, 'Gatra Bagaskoro Wicaksono', 'Laki-Laki', '085646714641', 'Teknologi Informasi/Teknik Informatika/1', 'Jaringan', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(206, 'Rahmad Yudha Teguh', 'Laki-Laki', '081333663248', 'Teknologi Informasi/Teknik Informatika/1', 'Jaringan', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(207, 'Mohammad Faried Rahmat', 'Laki-Laki', '085748722592', 'Teknologi Informasi/Teknik Informatika/2', 'Jaringan', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(208, 'MAHFUD IVAN PATONI', 'Laki-Laki', '08563092300', 'Teknologi Informasi / Teknik Informatika / 2', 'Jaringan', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(209, 'Firhan Alfathan Akbar', 'Laki-Laki', '085726450987', 'Teknik kimia', 'Jaringan', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(210, 'Rheza Arief A.R', 'Laki-Laki', '08979360970', 'Teknologi Informasi/M. Informatika/2', 'Jaringan', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(211, 'Ahmad Yusqie Mafaza', 'Laki-Laki', '085749358165', 'Teknologi Informasi/Teknik Informatika/2', 'Jaringan', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(212, 'SAIFUL ANAM', 'Laki-Laki', '081333035476', 'TEKNOLOGI INFORMASI/TEKNIK INFORMATIKA/1', 'Jaringan', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(213, 'akhmad faishol maturidi', 'Laki-Laki', '089612727280', 'teknologi informasi/teknik informatika/2', 'Jaringan', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(214, 'GITA EKA FEBRIANA', 'Perempuan', '085604381945', 'Teknologi Informasi/Manajemen Informatika/2', 'Jaringan', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(215, 'Lokendra Aditisna Widigdyo', 'Laki-Laki', '082132474339', 'Teknologi Informasi/Teknik Informatika/2', 'Jaringan', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(216, 'Dodik Adhitama', 'Laki-Laki', '087728202920', 'Teknologi Informasi/Teknik Informatika/2', 'Jaringan', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(217, 'Ayu Permatasari Putri Maharani', 'Perempuan', '0083848554327', 'Teknologi Informasi/Teknik Informatika/1', 'Multimedia', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(218, 'MUHAMMAD HILMY RM', 'Laki-Laki', '0081233909360', 'Teknik Informatika', 'Multimedia', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(219, 'Dita Permatasari', 'Perempuan', '0082257276113', 'Teknologi Informasi/Teknik Informatika/1', 'Multimedia', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(220, 'Tika Kusuma Wardhani', 'Perempuan', '0089612311623', 'Teknologi Informasi/Manajemen Informatika/2', 'Multimedia', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(221, 'Rafi Kartika Sari Gunawan', 'Perempuan', '0082331012725', 'Teknologi Informasi/Manajemen Informatika/2', 'Multimedia', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(222, 'Muhammad adhan', 'Laki-Laki', '008574911923', 'teknik elektro/manajemen informatika/3', 'Multimedia', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(223, 'Satria Bagus Wahyu Ramadhan', 'Laki-Laki', '0085933052035', 'Teknologi Informasi/Teknik Informatika/1', 'Multimedia', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(224, 'Fajar Ariadi', 'Laki-Laki', '0085745789910', 'Teknologi Informasi/Manajemen Informatika/1', 'Multimedia', '2015-10-27 15:15:15', '2015-10-27 15:15:15'),
(225, 'Sapta Ahmad Afrizal', 'Laki-Laki', '0085735538263', 'Teknologi Informasi/Manajemen Informatika/1', 'Multimedia', '2015-10-27 15:15:15', '2015-10-27 15:15:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=226;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
