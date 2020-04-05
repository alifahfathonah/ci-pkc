-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2019 at 08:55 PM
-- Server version: 10.2.29-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkck3551_pkckaltimra`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(11) UNSIGNED NOT NULL,
  `nama_alumni` varchar(255) DEFAULT NULL,
  `telepon_alumni` varchar(15) DEFAULT NULL,
  `asal_alumni` text DEFAULT NULL,
  `cabang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nama_alumni`, `telepon_alumni`, `asal_alumni`, `cabang_id`) VALUES
(1, 'Abdul Wahab', '08394314143', 'Jl Kenyamukan Sangatta Utara\r\n', 5),
(2, 'Moch Khoirul Faizin', '085255508935', 'Jl. Ujung Raya Gg. Prima Raya RT.07 Sengata', 5),
(3, 'Eko', '081253401959', 'Sangatta\r\n', 5),
(4, 'Hariadi Mursalim', '082394314143', 'Sangatta', 5),
(5, 'Megawati', '082394314143', 'Saangatta', 5),
(6, 'Muhammad Indra', '082394314143', 'Sangatta\r\n', 5),
(7, 'Rafiko', '082254846954', 'Muara Bengkal\r\n', 5),
(8, 'Moh. Riki', '082198330735', 'Sangatta ', 5),
(9, 'Abdul Manab', '081375666676', 'Sandaran, Kutai Timur', 5),
(10, 'Syahrizal', '085246529230', 'Sangkulirang', 5),
(11, 'Zulhamri', '085248601140', 'Bone, Sulsel', 5),
(12, 'Muhammad Syafi\'i', '085212584109', 'Kutai Timur', 5),
(13, 'Zulkadrin', '085332389241', 'Sangatta Kutai Timur', 5),
(14, 'Herman,S.Pi', '0822-4701-6188', 'PC. PMII KOTA TARAKAN', 8),
(15, 'Zahir,S.Pi', '0853-87010707', 'PC. PMII KOTA TARAKAN', 8),
(16, 'HM. Zulkifli Salim,SE.,M.Si', '0812-4138-0999', 'PC PMII KOTA SAMARINDA', 8),
(17, 'Muhammad Najib,SP.,M.Si', '0811-5997-378', 'PC PMII KABUPATEN BANJARBARU', 8),
(18, 'Syarwani,S.Pd.,M.Si', '0821-5979-9885', 'PC. PMII KOTA SAMARINDA', 8),
(19, 'Hj. Siti Nuhrianti,SE.,M.Si', '0812-5562-741', 'PC PMII KOTA SAMARINDA', 8),
(20, 'H.Suriyansah,S.Ag.,M.Pd', '0821-5567-1472', 'PC PMII KOTA SAMARINDA', 8),
(21, 'Chairulliza,S.Hi.,MH', '0813-5550-4756', 'PC. PMII DAERAH ISTIMEWA YOGYAKARTA', 8),
(22, 'Ibnu Saud IS.,SS', '0811-550-341', 'PC. PMII KOTA SAMARINDA', 8),
(23, 'Rustam Akief,SH.,MH', '0822-1029-4997', 'PC. PMII KOTA SAMARINDA', 8),
(25, 'H. Muhammad Saleh, S.Pd', '08', 'PC. PMII ', 8),
(26, 'Sadriansyah,S.IP', '0853-3267-8622', 'PC. PMII ', 8),
(27, 'Ari Hardianto', '08', 'PC. PMII', 8),
(28, 'Abdul Kadir,S.Ag', '08', 'PC. PMII', 8),
(29, 'H.Basmar,S.Ag', '08', 'PC. PMII', 8),
(30, 'Abdul Khalil,S.Ag.,M.Pdi', '0812-5875-114', 'PC. PMII', 8),
(31, 'H.Roside,S.Ag', '08', 'PC. PMII', 8),
(33, 'HM.Saleh,S.Ag', '0812-5552-359', 'PC. PMII', 8),
(34, 'Abdul Gaffar,S.Ag', '0813-4701-4637', 'PC. PMII', 8),
(35, 'Mutmainah,S.Hi', '0813-5002-3321', 'PC. PMII', 8),
(36, 'Nasrullah,S.Hi', '08', 'PC. PMII', 8),
(37, 'Rosdianah,S.Ag', '08', 'PC. PMII', 8),
(38, 'Abdul Arif,S.Ag,M.Si', '08', 'PC. PMII', 8),
(39, 'Mustaqim,S.Ag.,M.Ag', '08', 'PC. PMII', 8),
(40, 'Aspiannur,S.Ag', '08', 'PC. PMII', 8),
(41, 'H. Muhammad Nasir,S.Ag', '08', 'PC. PMII', 8),
(42, 'Wawan Eko Widiyanto,S.Pd', '0823-2829-4422', 'PC. PMII KOTA SAMARINDA', 8),
(43, 'Nurul Lamunsari,S.Pdi', '0812-4325-8809', 'PC. PMII KOTA PALU', 8),
(44, 'Atra Wiyana,S.Pd', '0853-4705-2823', 'PC. PMII KOTA TARAKAN', 8),
(45, 'Muhammad Samir,S.Pd', '0823-5020-9320', 'PC. PMII KOTA TARAKAN', 8),
(46, 'Zulkifli,SH', '08', 'PC. PMII KOTA TARAKAN', 8),
(47, 'Dwipo Wiguna,SE', '08', 'PC. PMII KOTA TARAKAN', 8),
(48, 'Johan Arifin,S.Pd', '0822-5451-7857', 'PC. PMII', 8),
(49, 'Drs. H. Tubagus Masrur,SH', '08', 'PC. PMII', 8),
(50, 'Dasimah,S.Pdi', '0821-5457-2114', 'PC. PMII KOTA SAMARINDA', 8),
(51, 'Syamsir Alam,S.Pdi', '08', 'PC. PMII', 8),
(52, 'Raswanto,S.Pdi', '08', 'PC. PMII', 8),
(53, 'Sugianto,S.Sos', '08', 'PC. PMII', 8),
(54, 'Wenny GHS', '082149970882', 'POLTEKBA', 3),
(55, 'Yanu', '08115411201', 'POLTEKBA', 3);

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) UNSIGNED NOT NULL,
  `nama_anggota` varchar(255) DEFAULT NULL,
  `tempat_anggota` varchar(255) DEFAULT NULL,
  `tgl_anggota` date NOT NULL,
  `alamat_anggota` text DEFAULT NULL,
  `jk_anggota` varchar(5) DEFAULT NULL,
  `foto_anggota` varchar(255) DEFAULT NULL,
  `email_anggota` varchar(255) DEFAULT NULL,
  `telepon_anggota` varchar(15) DEFAULT NULL,
  `kampus_anggota` varchar(255) DEFAULT NULL,
  `prodi_anggota` varchar(255) DEFAULT NULL,
  `rayon_id` int(11) UNSIGNED NOT NULL,
  `komisariat_id` int(11) UNSIGNED NOT NULL,
  `cabang_id` int(11) UNSIGNED NOT NULL,
  `angkatan_mapaba` int(5) UNSIGNED NOT NULL,
  `kaderisasi_anggota` varchar(50) DEFAULT NULL,
  `kaderisasi_kopri` varchar(50) DEFAULT NULL,
  `status_anggota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `tempat_anggota`, `tgl_anggota`, `alamat_anggota`, `jk_anggota`, `foto_anggota`, `email_anggota`, `telepon_anggota`, `kampus_anggota`, `prodi_anggota`, `rayon_id`, `komisariat_id`, `cabang_id`, `angkatan_mapaba`, `kaderisasi_anggota`, `kaderisasi_kopri`, `status_anggota`) VALUES
(12, 'M Irfan Permana', 'Samarinda', '1997-07-17', 'Jalan Rapak Indah', 'L', NULL, 'irfanthejoelax@gmail.com', '8115544266', 'UNU Kaltim', 'Teknik Informatika', 1, 2, 2, 2014, 'PKD', 'TIDAK ADA', 'Aktif'),
(13, 'Aqmarina Lailani', 'Balikpapan', '1997-06-16', 'Jalan Harun Nafsi', 'P', NULL, 'aqmarina@mail.com', '-', 'UNU Kaltim', 'Farmasi', 1, 2, 2, 2015, 'PKD', 'SKK', 'Aktif'),
(14, 'Baharuddin Muslim', '-', '0000-00-00', '-', 'L', NULL, '-', '-', 'UNU Kaltim', 'Teknik Industri', 1, 2, 2, 2014, 'PKD', 'TIDAK ADA', 'Aktif'),
(36, 'Muh Asri', '-', '0000-00-00', '-', 'L', NULL, 'asri@mail.com', '-', 'UNU Kaltim', 'Teknik Industri', 1, 2, 2, 2014, 'PKD', 'TIDAK ADA', 'Aktif'),
(37, 'Syahdiyanor', '-', '0000-00-00', '-', 'L', NULL, 'syahdi@mail.com', '-', 'UNU Kaltim', 'Teknik Industri Pertanian', 1, 2, 2, 2014, 'PKD', 'TIDAK ADA', 'Aktif'),
(38, 'Muuhammad Syarifudin', '-', '0000-00-00', '-', 'L', NULL, 'embul@mail.com', '-', 'UNU Kaltim', 'Teknik Industri Pertanian', 1, 2, 2, 2014, 'PKD', 'TIDAK ADA', 'Aktif'),
(39, 'Siti Youmi Rohmah', '-', '0000-00-00', '-', 'P', NULL, 'youmin@mail.com', '-', 'UNU Kaltim', 'PG PAUD', 1, 2, 2, 2014, 'PKL', 'SKK', 'Aktif'),
(40, 'Abdullah', '-', '0000-00-00', '-', 'L', NULL, 'dullah@mail.com', '-', 'UNU Kaltim', 'Akuntansi', 1, 2, 2, 2014, 'PKL', 'TIDAK ADA', 'Aktif'),
(41, 'Ahmad Khoirul Anwar', '-', '0000-00-00', '-', 'L', NULL, 'irul@mail.com', '-', 'UNU Kaltim', 'Ilmu Komunikasi', 1, 2, 2, 2014, 'PKL', 'TIDAK ADA', 'Aktif'),
(42, 'Nurazizah Ikke Purnama Sari', '-', '0000-00-00', '-', 'P', NULL, 'ikke@mail.com', '-', 'UNU Kaltim', 'Hubungan Internasional', 1, 2, 2, 2014, 'PKD', 'TIDAK ADA', 'Aktif'),
(43, 'Olivia Nur Khofifah', '-', '0000-00-00', '-', 'P', NULL, 'oliv@mail.com', '-', 'UNU Kaltim', 'Farmasi', 1, 2, 2, 2016, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(44, 'Musafitri A.N', '-', '0000-00-00', '-', 'P', NULL, 'pite@mail.com', '-', 'UNU Kaltim', 'Farmasi', 1, 2, 2, 2016, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(45, 'Parni Ibnu', '-', '0000-00-00', '-', 'L', NULL, 'parni@mail.com', '-', 'UNU Kaltim', 'Teknik Industri Pertanian', 1, 2, 2, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(46, 'Zuhdi Setiawan', '-', '0000-00-00', '-', 'L', NULL, 'zuhdi@mail.com', '-', 'UNU Kaltim', 'Teknik Industri Pertanian', 1, 2, 2, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(47, 'Mustofa Babil Halabi', '-', '0000-00-00', '-', 'L', NULL, 'mus@mail.com', '-', 'UNU Kaltim', 'Teknik Arsitektur', 1, 2, 2, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(48, 'Amran', '-', '0000-00-00', '-', 'L', NULL, 'amran@mail.com', '-', 'UNU Kaltim', 'Ilmu Komunikasi', 1, 2, 2, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(49, 'Reza Theana Syifani', '-', '0000-00-00', '-', 'P', NULL, 'syifa@mail.com', '-', 'UNU Kaltim', 'Ilmu Komunikasi', 1, 2, 2, 2016, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(50, 'Hajrah', 'Takkalalla Barat', '1996-09-01', 'Jl.Hidayatullah Gg Hikmah A no.9', 'P', 'IMG_20171211_132937.jpg', 'hajehajrah10@gmail.com', '08394314143', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'PKL', 'SIG', 'Aktif'),
(51, 'Fitri Zulaiha', 'Bulusari', '1995-10-01', 'Jl. Hidyatullah Gg Hikmah A No.9 ', 'P', 'IMG-20190704-WA0054.jpg', 'fitrizulaiha01@yahoo.com', '082196635885', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'PKL', 'SIG', 'Aktif'),
(52, 'Abdul Rahman', 'Longmesangat', '1996-04-28', 'Jl.Inpres', 'L', NULL, 'Abdulrahman2322@yahoo.com', '082255399759', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'PKL', 'TIDAK ADA', 'Aktif'),
(53, 'Peri Sandria', 'Sangkuliarang', '1997-05-23', 'Gg Beringin', 'L', NULL, 'Perisandria@gmail.com', '082352288640', 'STAI Sangatta Kutai Timur ', 'Pasca Sarjana', 10, 5, 5, 2014, 'PKD', 'SIG', 'Aktif'),
(54, 'Ayu Lestari', 'Lampung Utara', '1995-01-01', 'Jl. Hidayatullah, Gg. Hikmah A', 'P', '20190401_190223.jpg', 'Ayullestari@gmail.com', '085346366877', 'STAI SANGATTA KUTAI TIMUR', 'Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(56, 'Wahyu Widiawati Suci', 'Patiorang', '2019-07-21', 'Jln.kh.ahmad dahlan gg bebika', 'P', 'PhotoGrid_1534473035318.jpg', 'madanim36@gmail.com', '085249365617', 'Stai Sangatta', 'Ekonomi Syariah', 2, 5, 5, 2015, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(57, 'Almiyah', 'Bengalon', '1998-06-21', 'Rawah Indah RT 10 RW 03', 'P', NULL, 'Almiyah771@gmail.com', '082232769970', 'STAI Sangatta Kutai Timur ', 'Syariah/Ahwalu Syhaksiyah', 7, 5, 5, 2017, 'PKL', 'SIG', 'Aktif'),
(58, 'Mungawanah', 'Ciamis', '1997-10-02', 'Jl. Yosudarso IV ', 'P', NULL, 'Mungawanah63@gmail.com', '081346309589', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2017, 'PKL', 'SKK', 'Aktif'),
(59, 'Triyani Prihatinah', 'Balikpapan', '1996-05-31', 'Jl. Inpres Gg Sappewale', 'P', 'WhatsApp_Image_2019-05-14_at_19_31_48.jpeg', 'triyanitpz@gmail.com', '082257943643', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2014, 'PKL', 'SIG', 'Aktif'),
(60, 'Irwansyah', 'Sangkulirang', '1996-12-15', 'Jl. Inpres Gg Daya Karya', 'L', 'WhatsApp_Image_2019-05-14_at_19_31_49.jpeg', 'irwansyah961220@gmail.com', '085345221680', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2015, 'PKL', 'SIG', 'Aktif'),
(61, 'Ryan Hidayat', 'Samarinda', '1997-03-30', 'Jl.P.Hidayatullah', 'L', 'IMG-20190303-WA0023.jpg', 'xmosryan29@gmail.com', '087703577063', 'STAI Sangatta', 'Akwalu Syakhsiyah', 7, 5, 5, 2018, 'PKD', 'SIG', 'Aktif'),
(63, 'Fitria Eka Wulan Sari', 'Kediri', '1997-02-12', 'Jl. Soekarno Hatta', 'P', NULL, '12fitriyaheka@gmail.com', '081553740606', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2017, 'MAPABA', 'SIG', 'Aktif'),
(64, 'Anam Hermansyah', 'Balikpapan', '1993-03-19', 'Gg. Banjar, Rt.13 Desa singa geweh', 'L', NULL, 'anamhermansyah83@gmail.com', '082157165059', 'STAI Sangatta', 'Syariah/Akhwalu Syakhsiyah', 7, 5, 5, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(65, 'Linavi Atim Muthoharoh', 'Madiun', '1998-08-21', 'Jln suekarno hatta', 'P', NULL, 'linaviatim@gmail.com', '083153724859', 'Stai Sangatta', 'Tarbiyah/pai', 10, 5, 5, 2017, 'MAPABA', 'SKK', 'Aktif'),
(67, 'Nur Atina', 'Bamba', '1996-07-04', 'Jl. Munthe 1', 'P', NULL, 'nuratinakaharuddin@gmail.com', '082354649990', 'Stai Sangatta ', 'Ekonomi Syariah', 2, 5, 5, 2015, 'MAPABA', 'SIG', 'Aktif'),
(69, 'M.choiruddin Sya\'dullah', 'Grobogan', '1998-03-24', 'Jln.Teluk lingga Gg.Beringin', 'L', 'IMG-20190628-WA00781.jpg', 'choirputri02@gmail.com', '085751360608', 'STAI Sangatta', 'Syariah / Ahwalu Syakhsiyah', 7, 5, 5, 2018, 'PKD', 'TIDAK ADA', 'Aktif'),
(70, 'Adinda Maria Artoria', 'Malang', '1995-11-09', 'Jln. Tongkonan Rannu\r\n', 'P', NULL, 'AdindaMariaArtoria@gmail.com', '081349008294', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(71, 'Ahmad', 'Pare-pare', '1996-01-01', 'Bukit Pelangi\r\n', 'L', NULL, 'Ahmad@gmail.com', '082394314143', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(72, 'Andri Suryanto', 'Pontianak', '1996-02-05', 'Jln. Rawa Makmur, Bengalon Sepaso Barat\r\n', 'L', NULL, 'Andrisuryanto@gmail.com', '082354768676', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(73, 'Miftahul Elma', 'Sangkulirang', '2000-04-05', 'Jl Pangeran Antasari, Rt 4 Karangan Dalam', 'P', NULL, 'Miftahulelma77@gmail.com', '082252298752', 'STAI Sangatta', 'Tarbiyah/Pendidikan Guru Madrasah Ibtidaiyah (PGMI)', 9, 5, 5, 2017, 'PKD', 'SIG', 'Aktif'),
(74, 'Ageng Luhur Pambudi', 'Samarinda', '1996-05-07', 'Jln. Cendana No. 248\r\n', 'L', NULL, 'AgengLuhurPambudi@gmail.com', '085393697255', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(75, 'Ardi Apriadi', 'Gin Rejo', '1991-05-08', 'Swarga Bara Sangatta Utara ( Mess PT. UT\r\n', 'L', NULL, 'Ardiapriadi@gmail.com', '085346027792', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(77, 'Asnira', 'Bamba', '1995-10-22', 'Gg. Banjar\r\n', 'P', NULL, 'Asnira@gmail.com', '082347090113', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(78, 'Andi Aswar', 'Pasir Putih', '1997-02-27', 'Gg. Mesjid\r\n', 'L', NULL, 'andiaswar@gmail.com', '082343378678', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(79, 'Tutik Khotijiatun', 'Wonogiri', '1997-06-12', 'Jl. Margosantoso 2 GG 19 no 90', 'P', NULL, 'tutikarira@gmail.com', '0812-2533-2515', 'STAI SANGATTA, KUTAI TIMUR', 'Tarbiyah/ PGMI', 9, 5, 5, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(80, 'Iswatun Hasanah', 'Kombeng', '1998-06-16', 'Gg Familly 3', 'P', NULL, 'iisasyifah98@gmail.com', '082254619331', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2017, 'PKD', 'SKK', 'Aktif'),
(83, 'Binti Mukarromah', 'Pasir Utara', '1994-05-09', 'Jln. Bukit Pelangi\r\n', 'P', NULL, 'bintimukkaromah@gmail.com', '085247465032', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(84, 'Chusnul Fatimah', 'Lamongan', '1995-05-25', 'KMP Tengah Gg. Sakura\r\n', 'L', NULL, 'Chusnul@gmail.com', '082330861245', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(85, 'Dian Indah Permata Sari', 'Balikpapan', '1995-04-27', 'Gg. Sehati, No.66\r\n', 'P', NULL, 'Dianindah@gmail.com', '081256529920', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(86, 'Darus Salam', 'Sangatta', '1995-10-20', 'Jln. Yosudarso 1 No.93\r\n', 'L', NULL, 'darussalam@gmail.com', '085753374142', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(87, 'Eqbal Tawakal', 'Boyolali', '1992-12-26', 'Jln. Permai Raya\r\n', 'L', NULL, 'ekbal@gmail.com', '08522933228', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(88, 'Firyaninda Mardhatillah', 'Samarinda', '1995-10-21', 'Jln. Margosantoso II Gg. 08\r\n', 'P', NULL, 'fitryaninda@gmail.com', '081312267444', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(89, 'Hartina', 'Moutong', '1996-02-22', 'Jln. Hidayatullah Gg. Cendrawasih\r\n', 'P', NULL, 'hartina@gmail.com', '082301971484', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(90, 'Putri Mulianda', 'Pangkal Duri ', '1996-03-08', 'Jl. Impres', 'P', 'IMG-20181105-WA0012.jpg', 'putrimulianda0803@gmail.com', '0822 5026 8946', 'STAI SANGATYA', 'Tarbiyah/PAI', 1, 1, 5, 2015, 'PKD', 'SKK', 'Aktif'),
(91, 'Hasmiati', 'Talimbangan', '1996-03-17', 'Sangatta baru, Swarga Bara Purnorama\r\n', 'P', NULL, 'hasmiati@gmail.com', '085251887515', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(92, 'Iis Nurlaela', 'Sangkulirang', '1994-02-12', 'Jln. Diponegoro Gg. Ampera\r\n', 'P', NULL, 'iisnurlaila@gmail.com', '085349488064', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(93, 'Iffatul Magfiroh', 'Bojonegoro', '1996-08-16', 'Sangatta Selatan, Kampung Kajang\r\n', 'P', NULL, 'iffatulmagfhirah@gmail.com', 'Sangatta Selata', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(94, 'Ismail', 'Samarinda', '1994-07-07', 'Jln. Pendidikan\r\n\r\n', 'L', NULL, 'ismail@gmail.com', '085350179723', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 1, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(95, 'Irdayanti', 'Palatta', '1990-04-01', 'Sulbar, Pallewali Mandar\r\n', 'P', NULL, 'irdayanti@gmail.com', '082191020667', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(96, 'Jainuddin', 'Bual-bual', '1994-10-05', 'Gg. Sarjanah\r\n', 'L', NULL, 'jainuddin@gmail.com', '085350639941', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(97, 'Juwita Marjan ', 'Paga', '1994-11-04', 'NTT\r\n', 'P', NULL, 'juwita@gmail.com', '082359547060', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(98, 'Lestari', 'Blitar', '1994-12-16', 'Jln. Mubaki\r\n', 'P', NULL, 'lestari12@gmail.com', '082350795871', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(99, 'Miftahul Jannah', 'Irian Jaya', '1993-07-28', 'Gg. Banjar No. 7\r\n', 'P', NULL, 'miftahuljannah@gmail.com', '085251892013', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(100, 'Lailatul Rofiah', 'Trenggalek', '1996-07-28', 'Jln. Lignit Bukit Batu Bara K-140\r\n', 'P', NULL, 'lailatul@gmail.com', '085386110030', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(101, 'Linda Bukasa', 'Tobungin', '1995-06-20', 'Jln. Teluk Lingga\r\n', 'P', NULL, 'lindabukasa@gmail.com', '085240395303', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(102, 'Muhammad Sohib', 'Jember', '1993-08-17', 'Gg. Damai\r\n', 'L', NULL, 'muhammadsohib@gmail.com', '082254441027', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(103, 'Munalika Lisa', 'Amuntai', '1995-07-18', 'Jln. Kampung Tengah\r\n', 'P', NULL, 'Munalikalisa@gmail.com', '085247103281', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(104, 'Musdalifah', 'Kosali', '1995-10-03', 'Jln. Yos Sudarso Gg. Rambutan\r\n', 'P', NULL, 'musdalifah@gmail.com', '082346274601', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(105, 'Nurpiah', 'Pinrang', '1996-10-21', 'Jln. APT Pranoto Gg. Syeh Yusuf No. 186\r\n', 'P', NULL, 'nurpiahlatif@gmail.com', '085387393094', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(106, 'Rudianto', 'Bontang', '1986-04-11', 'Bontang kaltim', 'L', NULL, 'rudhibarca@gmail.com', 'O85151438559', 'STAI SANGATA', 'Syariah /AS', 7, 5, 5, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(107, 'Karnia', 'Sangatta', '1998-08-15', 'jl,poros kabo gg bersa', 'P', NULL, 'karniakarman@gmail.com', '08557693875', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/MPI', 8, 5, 5, 2016, 'PKL', 'SKK', 'Aktif'),
(108, 'Andri Winarto', 'Bondowoso ', '1996-08-24', 'Jln. Karya etam', 'L', NULL, 'andrekazama10@gmail.com', '085233711670', 'STAI Sangatta Kutai Timur', 'Tarbiyah Manajemen Pendidikan Islam', 8, 5, 5, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(109, 'Rika Oktavia', 'Samarinda', '1998-10-06', 'Jl Teluk Rawah RT16 No.6', 'P', NULL, 'rika26oktavia@gmail.com', '081346220075', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2018, 'PKD', 'SKK', 'Aktif'),
(110, 'Ary Sandi', 'Manubar', '1999-02-20', 'Jl. Yos Sudarso III Gg.Beringin', 'L', 'DSC_0966.JPG', 'arysandi174@gmail.com', '082159311757', 'Stai Sangatta Kutai Timur', 'Tarbiyah / Manajemen Pendidikan Islam', 8, 5, 5, 2016, 'PKD', 'SIG', 'Aktif'),
(111, 'Nur\'aini', 'Sangatta', '1997-03-09', 'Jln. Diponegoro Gg. Ampera\r\n', 'P', NULL, 'nuraini@gmail.com', '082157395247', 'STAI Sangatta Kutai Timur ', 'Tarbiyah/PAI', 10, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(112, 'Nur Oktaviani', 'Cirebon', '1996-10-21', 'Jln. Munthe\r\n', 'P', NULL, 'nuroktavia@gmail.com', '082136731921', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(113, 'Nur Rohila', 'Tulung Agung', '1995-07-19', 'Jln. Yossudarso Gg. Family\r\n', 'P', NULL, 'nurrohia@gmail.com', '082334011520', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(114, 'Rusdendi', 'Coppo Bulu', '1995-03-23', 'Sangatta Lama\r\n', 'L', NULL, 'rusdendi@gmail.com', '085388714919', 'STAI Sangatta Kutai Timur ', 'Syariah/Ekonomi Syariah', 2, 5, 5, 2014, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(115, 'Andi Arba Octavia', 'Tarakan', '1999-10-26', 'Jl. Margo Santoso, RT. 41, Desa Sangatta Utara, Kec. Sangatta Utara, Kab. Kutai Timur', 'P', NULL, 'arbaoctavia@yahoo.com', '082278137799', 'STAI Sangatta', 'Tarbiyah/PAI', 10, 5, 5, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(116, 'Robiyatul Habibah', 'Samarinda', '1999-12-28', 'Gg. Cempaka no 56B', 'P', NULL, 'rbytlhbbh28@gmail.com', '0822 5118 5587', 'STAI SANGATTA', 'Tarbiyah/PGMI', 9, 5, 5, 2018, 'PKD', 'SIG', 'Aktif'),
(117, 'Rapika Majid', 'Lamunre', '1997-08-20', 'Jl. I.A muis gg Sidrap no 77', 'P', NULL, 'rapikamajid97@gmail.com', '0852 9974 4645', 'STAI SANGATTA', 'Syari\'ah/Ekonomi Syari\'ah', 2, 5, 5, 2015, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(118, 'Wantri Irman.k', 'Bulukumba', '1994-11-05', 'Jl.kalimutu RT 55 GG DUKUH', 'L', NULL, 'wantryirmank@gmail.com', '082345638133', '', 'Syariah/AHWALUSYAHSIA', 7, 5, 5, 2016, 'PKD', 'SIG', 'Aktif'),
(119, 'Dwi Anjani Octavia', 'Muara Bengkal', '1995-10-10', 'Jl. Margo Santoso gg 4', 'P', NULL, 'dwianjani1010@gmail.com', '0859 4733 2578', 'STAI SANGATTA', 'Tarbiyah/PAI', 10, 5, 5, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(120, 'Mardiana. S', 'Marus', '1996-01-11', 'Jl. I.A Muis gg Sidrap No 77', 'P', NULL, 'dhyan0716@gmail.com', '0823 4634 6046', 'STAI SANGATTA', 'Syari\'ah/Ekonomi Syari\'ah', 2, 5, 5, 2015, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(121, 'Nurul Hasni', 'Lemo', '1996-04-15', 'Gg. Bugis Teluk Lingga Rt 13 No 11', 'P', NULL, 'hasninurul260@gmail.com', '0813 5246 6568', 'STAI SANGATTA', 'Tarbiyah/PGMI', 9, 5, 5, 2012, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(122, 'Supriadi', 'Pinrang', '1994-03-30', 'Gg. Banjar 7A Rt 30 No 99', 'L', NULL, 'supriadi.cupi@gmail.com', '085248501554', 'STAI SANGATTA', 'Tarbiyah/PAI', 10, 5, 5, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(123, 'Diana Novitasari ', 'Sampit', '1999-04-18', 'Teluk lingga\r\nGg. Murung', 'P', 'IMG_20190611_163015_396.jpg', 'dianans372@gmail.com', '082116180265', 'STAI Sangatta', 'Tarbiyah/MPI', 8, 5, 5, 2018, 'PKD', 'TIDAK ADA', 'Aktif'),
(124, 'Mukrimah', 'Polmas', '1999-08-05', 'Gg mujur jaya IV No 103 Rt 27', 'P', NULL, 'mukrimah508@gmail.com', '082351009792', 'STAI Sangatta Kutai Timur', 'MPI (Manajemen Pendidikan Islam) ', 8, 5, 5, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(125, 'Rohamna ', 'Amuntai', '2019-03-16', 'Jl. Apt Pranoto, RT 56,samsamp Gg. Dahlia, depan masjid adz dzikro, toko rawi\'s collection ', 'P', 'IMG_20190728_131919_mh1564291213343.jpg', 'araberohamna@gmail.com', '081250904030', 'STAI Sangatta', 'Tarbiyah/ManajeMan Pendidikan Islam', 8, 5, 5, 2016, 'MAPABA', 'SKK', 'Aktif'),
(126, 'Siti Rohma', 'Sangatta', '1999-10-05', 'Jl. Ringroad', 'P', NULL, 'sitirohma2023@gmail.com', '0895 2199 6090', 'STAI SANGATTA', 'SYARI\'AH/EKONOMI SYARI\'AH', 2, 5, 5, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(127, 'Ruri Pramesti', 'Sangatta', '1998-10-24', 'Jl. Santai gg inces 1 sangatlah selatan', 'P', NULL, 'rurypramesti@gmail.com', '0821 4898 6810', 'STAI Sangatta', 'Syari\'ah/Ekonomi Syari\'ah', 2, 5, 5, 2012, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(131, 'Fatimahtuzahra', 'Mukti Utama', '2001-12-04', 'Jl. Kiyai ahmad dahlan gg kauman', 'P', NULL, 'fatimahtuzahra1204@gmail.com', '082354012636', 'STAI SANGATTA', 'Syari\'ah/Ekonomi Syari\'ah', 2, 5, 5, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(132, 'Situ Zulaihah', 'Muara Badak', '2000-10-14', 'Jl. Margosantoso 2 rt 41 no 136', 'P', NULL, 'szulaihah351@gmail.com', '085254554071', 'STAI SANGATTA', 'Syari\'ah/Ekonomi Syari\'ah', 2, 5, 5, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(133, 'Nur Jannah', 'Kaubun', '1999-12-07', 'Jl. Diponegoro gg guna jaya', 'P', NULL, 'nurjannah@gmail.com', '085245089481', 'Status Sangatta', 'Syariah/ekonomi Syariah', 2, 5, 5, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(136, 'Nurjanah', 'Sangatta', '1999-08-08', 'Gg bone 2 teluk lingga', 'P', NULL, 'nurjana4696@gmail.com', '085347916652', 'STAI SANGATTA', 'Syari\'ah/Ekonomi Syari\'ah', 2, 5, 5, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(138, 'Ainun Qhariya Bahri', 'Siwa', '1999-09-04', 'Jl. Assadiyah', 'P', NULL, 'ainunqharyabahri@gmail.com', '085348086279', 'STAI SANGATTA', 'Syari\'ah/Ekonomi Syari\'ah', 2, 5, 5, 2018, 'PKD', 'SIG', 'Aktif'),
(139, 'Linda Auliana', 'Bulukumba', '2019-10-20', 'Jl. Kalimutu gg dukuh', 'P', NULL, 'lindaauliana012@gmail.com', '085255446712', 'Stais', 'Syariah Ahwalu Syaksiyah', 7, 5, 5, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(141, 'Wiran Dony', 'Mandu, 14-07-1997', '1997-07-14', 'Jl. Yos sudarso. Desa mandu kec. Sangkulirang', 'L', NULL, 'wirandony0797@gmail.com', '082255333228', 'STAI Sangata', 'Tarbiyah / Manajamen Pendidikan Islam', 8, 5, 5, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(142, 'Khoerul Annam', 'Banyumas', '1996-01-02', 'Sangatta', 'L', NULL, 'annamkhoerul531@gmail.com', '082116322397', 'STAI Sangatta ', 'Tarbiyah/PAI', 10, 5, 5, 2018, 'PKD', 'TIDAK ADA', 'Aktif'),
(143, 'Wahyu Rahman', 'Kaliorang', '1997-02-27', 'Jln Pinang dalam gg.  PDAM', 'L', NULL, 'raisyaharianti10@gmail.com', '081244402221', 'STAI Sangatta', 'Tarbiyah/PAI', 10, 5, 5, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(144, 'Nikmatul Fikriyah', 'Tenggarong', '2000-07-15', 'Jln. Aw. Syahranie, Perum. Griya Bukit Pelangi.', 'P', NULL, 'nikmatulfikriyah15@gmail.com', '082238798674', 'STAI Sangatta', 'Syari\'ah / Ekonomi Syari\'ah', 2, 5, 5, 2018, 'PKD', 'TIDAK ADA', 'Aktif'),
(145, 'Ahmad Miftahul Solihin', 'Panunggalan', '1994-07-20', 'Kaubun', 'L', 'IMG_20190514_173507.jpg', 'miftahussolihin22@gmail.com', '085229281159', 'Stai Sangatta', 'Tarbiyah/pai', 10, 5, 5, 2015, 'MAPABA', 'SIG', 'Aktif'),
(146, 'Nur Alfina Rizqiya', 'Semarang', '1997-08-02', 'Jl. Baiturrahim, teluk lingga, Sangatta Utara', 'P', NULL, 'alfinarizqiya2897@gmail.com', '081251902500', 'STAI Sangatta', 'Syariah / Ekonomi Syariah', 12, 5, 5, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(147, 'Anggi Putri Damayanti', 'Bulukumba 21 JULI 2000', '2000-07-21', 'Jln.Kenyamukan perumahan Tama City no.9', 'P', '_MG_9916_mr1560659233500.jpg', 'anggiputrid.xiipmia5@gmail.com', '081343793779', 'STAIS', 'SYARIAH/AHWALU SYAKSYIAH', 7, 5, 5, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(149, 'Hilda Syafira', 'Barru', '2000-03-10', 'Jl. Diponegoro gg. H. Sahrul', 'P', NULL, 'hildasyafira5@gmail.com', '081340737522', 'STAI Sangatta', 'Ekonomi  Syariah ', 2, 5, 5, 2018, 'MAPABA', 'SIG', 'Aktif'),
(151, 'Nur Alfina Rizqiya', 'Semarang', '1997-08-02', 'Jl. Baiturrahim, Teluk lingga, Sangatta Utara', 'P', NULL, 'alfinarizqiya2897@gmail.com', '081251902500', 'STAI Sangatta', 'Syariah / Ekonomi Syariah', 2, 5, 5, 2018, 'PKD', 'SIG', 'Aktif'),
(152, 'Ratna Febrianti', 'Bojonegoro', '2000-02-23', 'Jl. Poros Sangatta-Bontang Km. 07', 'P', NULL, 'ratnavbriant@gmail.com', '082254438988', 'STAI Sangatta Kutai Timur', 'Syariah/Ekonomi Syariah ', 2, 5, 5, 2017, 'PKD', 'SIG', 'Aktif'),
(153, 'Siti Saijah', 'Adonara', '2000-05-20', 'Jl diponegoro Gang Taruna ASPURI HIPMA KT', 'P', NULL, 'saijahghani20@gmail.com', '082251623368', 'SATAI Sangatta', 'Ekonomi Syariah', 2, 5, 5, 2018, 'PKD', 'SIG', 'Aktif'),
(154, 'Suci Indah Sari', 'Bontang', '1999-05-14', 'Gg. Anggrek Rt.11 no. 04 teluk lingga', 'P', NULL, 'suciindah1405@gmail.com', '082296458790', 'STAI Sangatta', 'Syariah/ Ekonomi Syariah', 2, 5, 5, 2017, 'MAPABA', 'SIG', 'Aktif'),
(155, 'FATIMAH', 'SANGATTA', '1999-05-05', 'Jl. Yossudarso II, Gg. Cempaka', 'P', 'poetry.jpg', 'fatmafatimah110@gmail.com', '082266817320', 'STAI SANGATTA', 'TARBIYAH/ MPI', 8, 5, 5, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(156, 'Norhidayat', 'Sangatta', '1998-02-01', 'Teluk Lingga', 'L', NULL, 'dayatbfc2@gmail.com', '082357893629', 'STAI Sangatta', 'Tarbiyah/PAI', 10, 5, 5, 2018, 'PKD', 'TIDAK ADA', 'Aktif'),
(158, 'Khairy Al Fakih', 'Wonosobo', '2000-07-05', 'bukit khayangan', 'L', '1564579323074606606158.jpg', 'al.fakih5700@gmail.com', '082326177950', 'Sekolah Tinggi Agama Islam Sangatta', 'Tarbiyah / Pendidikan Agama Islam ', 13, 5, 5, 2018, 'PKD', 'SIG', 'Aktif'),
(159, 'Annisa Safitri', 'Sangatta', '1999-03-09', 'Panorama Jln. Angsoka no. F 20', 'P', 'IMG_20190325_064233.jpg', 'icannisafitri0903@gmail.com', '085250927665', 'STAIS', 'Syari\'ah/Ekonomi Syari\'ah', 2, 5, 5, 2018, 'PKD', 'SIG', 'Aktif'),
(160, 'Supriadi', 'Pinrang', '1994-03-30', 'Gg. Banjar 7A Rt 30 No 99', 'L', NULL, 'supriadi.cupi94@gmail.com', '085248501554', 'STAI SANGATTA', 'Tarbiyah/PAI', 13, 5, 5, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(161, 'Khoerul Annam', 'Banyumas', '1996-01-02', 'Sangatta', 'L', NULL, 'annamkhoerul531@gmail.com', '082116322397', 'STAI Sangatta', 'Tarbiyah/PAI', 13, 5, 5, 2018, 'PKD', 'TIDAK ADA', 'Aktif'),
(162, 'Fatimatuzahra', 'Mukti Utama', '2001-12-04', 'Jl. Kh Ahmad Dahlan,  Gg.  Kauman 2', 'P', NULL, 'fatimaruhuzahra1204@gmail.com', '082354012636', 'STAI Sangatta', 'Syaria\'ah/Ekonomi Syaria\'ah', 2, 5, 5, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(163, 'Siti Nurasiah Jufri', 'Sangatta', '1999-09-14', 'Jl. APT Pranoto, Gang Sawitto', 'P', '2019-06-20_02_06_50_1.jpg', 'snurasiah149@gmail.com', '081545808177', 'STAI Sangatta Kutai Timur', 'Syari\'ah/Ekonomi Syari\'ah', 2, 5, 5, 2012, 'PKD', 'SIG', 'Aktif'),
(164, 'Choirul', 'Sangatta', '1995-08-15', 'Kampung kajang RT 34 RW 07', 'L', 'IMG_20190629_164721_831.jpg', 'muhammadulchoir@gmail.com', '082252303572', 'STAI Sangatta', 'Syariah/Ekonomi Islam', 1, 5, 5, 2015, 'PKD', 'TIDAK ADA', 'Aktif'),
(165, 'Linavi Atim Muthoharoh', 'Madiun', '1998-08-21', 'Jln suekarno hatta sangatta', 'P', NULL, 'linaviatim@gmail.com', '083153724859', 'Stai Sangatta', 'Tarbiyah/pai', 13, 5, 5, 2017, 'MAPABA', 'SKK', 'Aktif'),
(166, 'Mungawanah', 'Ciamis', '1997-10-02', 'Jln. Yos Sudarso IV, Teluk Lingga, Sangatta Utara', 'P', 'IMG_20181126_230046.jpg', 'mungawanah63@gmail.com', '081346309589', 'STAI SANGATTA ', 'PAI TARBIYAH', 13, 5, 5, 2017, 'PKL', 'SKK', 'Aktif'),
(167, 'Muhammad Ghazali Rahman', 'Bakungan', '1999-12-18', 'Jl. Margo santoso II rt 41 gang 13 No. 034', 'L', NULL, 'gazalirahman4237@gmail.com', '085392176633', 'STAI Sangatta', 'Syariah Ekonomi ', 2, 5, 5, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(175, 'Irwan', 'Benua Baru', '1997-11-17', 'Jalan karya etam, kantor baznas, Sangatta utara', 'L', 'Screenshot_2019-07-18-10-07-33-132_com_miui_gallery1.png', 'sangattairwan01@gmail.com', '082298755046', 'Stai Sangatta', 'Tarbiyah/PAI', 13, 5, 5, 2016, 'PKL', 'TIDAK ADA', 'Aktif'),
(176, 'Andi Nur Ihsan Bahri', 'Samarinda', '1999-06-07', 'Jln. Majai SMK 1', 'L', NULL, 'andiihsan9967@gmail.com', '082153817016', 'Sekolah Tinggi Agama Islam Sangatta', 'Syari\'ah/Ekonomi', 2, 5, 5, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(177, 'DIDI KADARISMANTO', 'SESAYAP', '1993-12-09', 'JL. SABANAR LAMA TANJUNG SELOR', 'L', NULL, 'kadarismantodidi@gmail.com', '081258450596', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2015, 'PKL', 'TIDAK ADA', 'Aktif'),
(178, 'AMIRRUDIN', 'Antal', '1997-03-15', 'JL.Binjai Tanjung Selor', 'L', NULL, 'Amiru2107@gmail.com', '082256347050', 'UNIVERSITAS KALTARA', 'MIPA', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(179, 'ABDUL AZIZ', 'KARANG AGUNG', '1995-12-25', 'JL. DAHLIA DES. KARANG AGUNG, KEC. TANJUNG PALAS UTARA, KAB. BULUNGAN, PROV. KALIMANTAN UTARA', 'L', NULL, 'abdulwoles8@gmail.com', '085252888485', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2015, 'PKD', 'TIDAK ADA', 'Aktif'),
(180, 'INDRA ARI GUNAWAN', 'SESAYAP', '1997-12-12', 'JL.HANDAL RT.17 NO 198', 'L', NULL, 'indraarigunawan121@gmail.com', '082350118478', 'UNIVERSITAS KALTARA', 'AGROTEK/FAPERTA', 1, 27, 8, 2015, 'PKD', 'TIDAK ADA', 'Aktif'),
(181, 'HARYATI', 'TANJUNG SELOR', '1993-05-13', 'JL.KI HAJAR DEWANTARA ,SELIMAU II', 'P', NULL, 'haryati675@yahoo.com', '0852-5263-6313', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2015, 'PKD', 'SIG', 'Aktif'),
(182, 'RAHMATSYAH FIRDAUS', 'BALIKPAPAN', '1993-03-22', 'JL.JERUK', 'L', NULL, 'khaeisar.adhityarhain@gmail.com', '0812-5564-9293', 'UNIVERSITAS KALTARA', 'ARSITEK/TEKNIK', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(183, 'Nurul Khotimatusyaroh', 'Sangatta', '1997-11-16', 'Jl. Mulawarman Sepinggan Gg Slamet Riyadi RT 12 No. 60 Balikpapan Selatan', 'P', 'pict.jpeg', 'nurulkhotimatusyaroh@gmail.com', '085754271665', 'Sekolah Tinggi Ilmu Tarbiyah Balikpapan', 'Pendidikan Agama Islam', 1, 33, 3, 2016, 'PKD', 'SIG', 'Aktif'),
(184, 'Siti Arbayah', 'Sangatta', '1999-10-13', 'Gg. Rejeki 5 No. 046', 'P', NULL, 'arbayahsiti17@gmail.com', '08980460239', 'STAI Sangatta', 'Syari\'ah/Ekonomi Syari\'ah', 1, 5, 5, 2017, 'MAPABA', 'SIG', 'Aktif'),
(186, 'DARA CALLISTA AMANDA', 'TANJUNG SELOR', '1994-10-24', 'JL. LEMBASUNG', 'P', NULL, 'daracallista@yahoo.com', '0853-4559-1894', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(187, 'PADLANSYAH', 'TANA LIA', '1995-08-07', 'JL.HANDAL RT.17 NO.198', 'L', NULL, 'abangiyan07@gmail.com', '0852-4937-8903', 'UNIVERSITAS KALTARA', 'AGRO/FAPERTA/', 1, 27, 8, 2015, 'PKD', 'TIDAK ADA', 'Tidak Aktif'),
(188, 'RIDWAN PRATAMA', 'TANJUNG SELOR', '1995-12-08', 'JL.SEMANGKA,GG.TENGUYUN', 'L', NULL, 'ridwanpratamma@gmail.com', '0821-5727-7607', 'UNIKALTAR', 'ARSITEK/TEKNIK', 1, 27, 8, 2015, 'PKD', 'TIDAK ADA', 'Aktif'),
(189, 'SULFIKRAM', 'LONG BELUAH', '1998-02-09', 'TANJUNG SELOR, JL.CENDANA', 'L', NULL, 'pmiifikram9@gmail.com', '0822-5644-0595', 'UNIKALTAR', 'PAI/TARBIYAH', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(190, 'DARA CALLISTA AMANDA', 'TANJUNG SELOR', '1994-10-24', 'JL.LEMBASUNG', 'P', NULL, 'daracallista@yahoo.com', '0853-4559-1894', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/FISIPOL', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(192, 'RIDWAN PRATAMA', 'TANJUNG SELOR', '1995-12-08', 'JL.SEMANGKA,GG.TENGUYUN', 'L', NULL, 'ridwanpratamma@gmail.com', '0821-5727-7607', 'UNIVERSITAS KALTARA', 'ARSITEK/TEKNIK', 1, 27, 8, 2012, 'PKD', 'TIDAK ADA', 'Aktif'),
(193, 'SULFIKRAM', 'LONG BELUAH', '1998-02-09', 'TANJUNG SELOR, JL.CENDANA', 'L', NULL, 'pmiifikram9@gmail.com', '0822-5644-0595:', 'STIT AL-ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(194, 'RICET PUTERA IJEN SANJAYA', 'KARANG ANYAR', '1994-03-15', 'JL.HANDAL RT.17 NO.198', 'L', NULL, 'ricat@gmail.com', '0822-2198-4469', 'UNIVERSITAS KALTARA', 'AGRO/FAPERTA', 1, 27, 8, 2015, 'PKD', 'TIDAK ADA', 'Aktif'),
(195, 'LATIFAH AL AMUDI', 'TANJUNG SELOR', '1994-12-12', 'JL.IMAM BONJOL,KAMPUNG ARAB', 'L', NULL, 'LatifahAlamudi94@gmail.com', '0822-4000-2229', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/FISIPOL', 1, 27, 8, 2015, 'PKD', 'TIDAK ADA', 'Aktif'),
(196, 'FAHRUL HAYAD', 'SESAYAP,', '1997-06-07', 'JL.HANDAL RT.17 NO 198', 'L', NULL, 'fahrul_bily@gmail.com', '0822-5002-2402', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/FISIPOL', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(197, 'DWI KURNIADI', 'LONG BELUAH', '1997-06-21', 'JL.MAWAR RT.11 RW.01', 'L', NULL, 'dwiferlosse97@yahoo.com', '0821-3596-9939', 'UNIVERSITAS KALTARA', 'MATEMATIKA/MIPA', 1, 27, 8, 2015, 'PKD', 'TIDAK ADA', 'Aktif'),
(198, 'REKA MAYANGSARI', 'SAMBALIUNG', '1996-08-23', 'JL.AGATIS', 'P', NULL, 'rekamayangsari@gmail.com', '0822-9849-8345', 'UNIVERSITAS KALTARA', 'AGRO/FAPERTA', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(199, 'WIKA WULANDARI', 'BERAU', '1995-01-13', 'JL.AGATIS', 'P', NULL, 'wikawulandari@gmail.com', '0822-5162-6022', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/FISIPOL', 1, 27, 8, 2015, 'PKD', 'TIDAK ADA', 'Aktif'),
(200, 'PERA DESI', 'SESAYAP,', '1993-10-06', 'JL.UMAR ALI BASA RT.03', 'P', NULL, 'peradesi@gmail.com', '0823-5348-4255', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/FISIPOL', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(201, 'SRI FATMAWATI', 'TARAKAN', '1996-12-24', 'JL.KAMRAB RT.02 NO.28', 'P', NULL, 'fatimah@gmail.com', '0821-5916-4229', 'UNIVERSITAS KALTARA', 'PEMBANGUNAN/FEKON', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(202, 'HILLU PANGESTU', 'LONG BELUAH', '1996-05-21', 'JL.CENDANA SEKRETARIAT PW.NU', 'L', NULL, 'hillupangestufitriani26@gmail.com', '0852-5282-1535', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/FISIPOL', 1, 27, 8, 2015, 'PKD', 'TIDAK ADA', 'Aktif'),
(203, 'EKO HADI SUSILO', 'TARAKAN', '1996-08-28', 'JL.HANDAL RT.17 NO.198', 'L', NULL, 'ehadi412@gmail.com', '0853-4810-9373', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/FISIPOL', 1, 27, 8, 2015, 'PKD', 'TIDAK ADA', 'Aktif'),
(204, 'EKA LATHIFATUL MAHMUDAH', 'TANJUNG SELOR', '1996-08-28', 'JL.MANGGIS RT.04 NO.50', 'P', NULL, 'degechalathifa@yahoo.com', '0812-6668-2499', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/FISIPOL', 1, 27, 8, 2015, 'PKD', 'SIG', 'Aktif'),
(205, 'WULAN ISNAENI', 'PEMALANG', '1994-09-05', 'JL.HAJI MASYKUR', 'P', NULL, 'wulan.isnaeni94@gmail.com', '0852-5288-4008', 'UNIVERSITAS KALTARA', 'MATEMATIKA/MIPA', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(206, 'FITRIANI', 'SALIMBATU', '1996-07-26', 'JL.HAJI MASYKUR', 'P', NULL, 'fitriani.hillu21@gmail.com', '0823-5733-8935', 'UNIVERSITAS KALTARA', 'MATEMATIKA/MIPA', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(207, 'NAZAR ROBBY PUTRA', 'TANJUNG SELOR', '1997-06-25', 'JL.NURI RT.77', 'L', NULL, 'nazarrobbyputra12@gmail.com', '0853-4811-0138', 'STIT AL-ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2016, 'PKL', 'TIDAK ADA', 'Aktif'),
(208, 'NOVI WANDRA', 'TANJUNG SELOR', '1993-11-12', 'JL.HANDAL RT.17 NO.198', 'L', NULL, 'irwandkazuya123@gmail.com', '0853-8870-2059', 'UNIVERSITAS KALTARA', 'ARSITEK/TEKNIK', 1, 27, 8, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(209, 'JULKARNAIN', 'TARAKAN ', '1993-01-10', 'JL.PADAT KARYA,TG,PALAS HILIR', 'L', NULL, 'dzoelkarnaen@gmail.com', '0852-0030-0037', 'STIT AL-ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2015, 'PKD', 'TIDAK ADA', 'Aktif'),
(210, 'SITI FAHRIANI', 'MALAYSIA', '1994-01-11', 'jl. sabanar lama', 'P', NULL, 'sitifahriani@gmail.com', '0822-5041-6522', 'STIT AL-ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2016, 'PKD', 'TIDAK ADA', 'Tidak Aktif'),
(211, 'INDRA SAPRI', 'SESAYAP', '1993-04-28', 'JL.HAJI MASYKUR', 'L', NULL, 'indra@gmail.com', '0853-8873-1129', 'UNIVERSITAS KALTARA', 'ARSITEK/TEKNIK', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(212, 'SUPDIAN', 'SESAYAP', '1991-01-01', 'JL.HANDAL RT.17 NO.198', 'L', NULL, 'supdian@gmail.com', '0822-1474-6444', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/FISIPOL', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(213, 'DWI APRILIANTI KARTINI', 'PANCA AGUNGI', '1994-04-21', 'JL.TANA ABANG RT.05', 'P', NULL, 'dwi@gmail.com', '0822-5514-8613', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(214, 'DAHLIA', 'SALIMBATU', '1997-04-04', 'JL.AMANTAWA RT.02', 'P', NULL, 'dahlian@gmail.com', '0821-5369-6095', 'UNIVERSITAS KALTARA', 'AGRO/FAPERTA', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(215, 'IWAN KURNIAWAN', 'KARAWANG', '1993-08-05', 'jl.mualaf', 'L', NULL, 'iwan.kurniawan584@yahoo.co.id', '0852-5072-4257 ', 'UNIVERSITAS KALTARA', 'SIPIL/TEKNIK', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(216, 'HENDRA JAYA', 'TANJUNG SELOR', '1998-11-17', 'JL. MANGGIS II', 'L', NULL, 'hayaarrk@gmail.com', '0852-5777-7487', 'STIT AL-ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(217, 'DARMAI SELLA', 'TANJUNG PALAS', '1993-10-15', 'JL. KASIMUDDIN', 'L', NULL, 'dharmaisella@gmail.com', '0852-5072-4257', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/FISIPOL', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(218, 'YUNITA SARI', 'TANJUNG SELOR', '1995-06-27', 'JL. SABANAR BARU II', 'L', NULL, 'sariyunita@gmail.com', '0852-5072-4257', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(219, 'Andi Arba Octavia', 'Tarakan', '1999-10-26', 'Jl. Margo Santoso, RT. 41, Desa Sangatta Utara, Kec. Sangatta Utara', 'P', NULL, 'arbaoctavia@yahoo.com', '082278137799', 'STAI Sangatta', 'Tarbiyah/PAI', 13, 5, 5, 2017, 'PKD', 'SIG', 'Aktif'),
(220, 'Risma Dwilandari Anggraini', 'Balikpapan', '1998-05-10', 'Jl. Mulawarman RT. 09 No. 214 Sepinggan Balikpapan Selatan', 'P', 'IMG20171201205917.jpg', 'anggrainirisma561@gmail.com', '082254190474', 'Sekolah Tinggi Ilmu Tarbiyah Balikpapan', 'Pendidikan Agama Islam', 1, 33, 3, 2016, 'PKD', 'SIG', 'Aktif'),
(221, 'Zainuddin', 'Balikpapan', '1996-02-02', 'Jl.Soekarno Hatta, Km.15 kecamatan Balikpapan Utara', 'L', NULL, 'nuddinzai76@gmail.com', '085321175533', 'Sekolah Tinggi Ilmu Tarbiyah Balikpapan', 'Pendidikan Agama Islam', 1, 33, 3, 2015, 'PKL', 'TIDAK ADA', 'Aktif'),
(222, 'DWI FARIDA RAHMADANI', 'ATAP', '1996-02-14', 'JL. KOL SOETADJI', 'P', NULL, 'dwifarida14@gmail.com', '0852-5098-0062', 'STIE BULTAR', 'MANAJEMEN/FEKON', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(223, 'CICI CAHYATI', 'KUBANG', '1995-12-19', 'JL. SEIMAU', 'P', NULL, 'cici.pmii@yahoo.com', '0853-3262-4395 ', 'UNIVERSITAS KALTARA', 'EKONOMI PEMBANGUNAN', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(224, 'BOY SANDI', 'SESAYAP', '1996-05-09', 'JL. HANDAL', 'L', NULL, 'boy.sandi2711@gmail.com', '082255924340', 'UNIVERSITAS KALTARA', 'ARSITEK/TEKNIK', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(225, 'NASRUDIN', 'BIMA', '1994-09-09', 'JL. MANGGA 2', 'L', NULL, 'nasrudin08@gmail.com', '0853-3824-6557 ', 'UNIVERSITAS KALTARA', 'TEKNIK SIPIL', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(226, 'MANSYUR', 'TANJUNG PALAS', '1997-08-31', 'JL. KASIMUDDIN', 'L', NULL, 'mansyur053@gmail.com', '0822-2198-8682', 'STIT AL- ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(227, 'LIA OKTARAHMI', 'TARAKAN', '1992-10-02', 'JL. CIK DITIRO', 'P', NULL, 'liaoktarahmi88@gmail.com', '0822-5259-3279', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(228, 'ACHMAD ARIF  N.H', 'TARAKAN', '1997-06-09', 'JL. SENGKAWIT', 'L', NULL, 'achmadarif@gmail.com', '0822-5436-9192', 'STIT AL- ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(229, 'IRFAN AGUS SETIAWAN', 'KARANG AGUNG', '1993-08-03', 'JL. DURIAN', 'L', NULL, 'irfanagus.s@gmail.com', '0822-4000-2252', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(230, 'ABDAN SAIRI', 'BANJARMASIN', '1993-01-28', 'JL. SNGKAWIT', 'L', NULL, 'abdanislam89@gmail.com', '0822-5446-8233', 'STIT AL- ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(231, 'SULAIMAN', 'PINRANG', '1995-07-12', 'JL. SEMANGKA', 'L', NULL, 'emanggjsbgt@gmail.com', '0821-5368-5569', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(232, 'SETIANI ARISKA RAMDHIANIE', 'SAMARINDA', '1996-01-29', 'JL. JELARAI RAYA', 'P', NULL, 'setianiariska99@gmail.com', '0852-4882-4823', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 1, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(233, 'JUMAHIRA', 'NAPU', '1997-05-23', 'JL. TANJUNG BUYU', 'P', NULL, 'jumahira00@gmail.com', '0812-5844-8582', 'STIT AL- ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(234, 'SITI RAHMATIAH', 'BANJARMASIN', '1997-04-20', 'JL. SULTAN HASANNUDIN', 'P', NULL, 'Siti.rahmatia97@gmail.com', '0853-4518-5585', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(235, 'SUSI SUSANTI', 'SALIMBATU', '1996-11-11', 'JL. HAJI MASYKUR', 'P', NULL, 'uchiecii@gmail.com', '0822-5440-8804', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(236, 'SITI SULSIAH', 'BATU LICIN', '1994-06-23', 'JL. AHMAD YANI', 'P', NULL, 'sitisul01@gmail.com', '0822-5136-2153', 'UNIVERSITAS KALTARA', 'EKONOMI PEMBANGUNAN', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(237, 'JUSMAN', 'TANJUNG SELOR', '1993-05-15', 'JL. SABANAR LAMA', 'L', NULL, 'jusmanjr@gmail.com', '0822-8721-9914', 'STIT AL- ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(238, 'FATMA ANDRAJAT TORANDA', 'SAMARINDA', '1997-05-29', 'JL. KEDONDONG', 'P', NULL, 'fatmapmii@gmail.com', '0813-4504-9967', 'UNIVERSITAS KALTARA', 'ARSITEK/TEKNIK', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(239, 'RAHMAN', 'TANJUNG SELOR', '1993-05-08', 'JL. SABANAR LAMA', 'L', NULL, 'rahmanaja@gmail.com', '0813-6207-5244', 'STIT AL- ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2016, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(240, 'LISA NATASKAYA', 'SAMARINDA', '1996-07-17', 'JL. JELARAI SELOR', 'P', NULL, 'aguslina19@gmail.com', '0823-5108-0517', 'UNIVERSITAS KALTARA', 'MIPA MATEMATIKA', 1, 27, 8, 2015, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(241, 'SUWARTINI', 'TANJUNG SELOR', '1998-11-13', 'JL. SABANAR LAMA', 'P', NULL, 'suwartini136@gmail.com', '0823-5059-1684', 'UNIVERSITAS KALTARA', 'AGROTEK/FAPERTA', 1, 27, 8, 2016, 'PKD', 'SIG', 'Tidak Aktif'),
(242, 'MAULI ERNWATI', 'BLITAR', '1997-07-22', 'JL. CENDRAWASIH', 'P', NULL, 'mauli.ernawati@gmail.com', '0822-5136-4469', 'UNIVERSITAS KALTARA', 'EKONOMI PEMBANGUNAN', 1, 27, 8, 2016, 'PKD', 'SIG', 'Aktif'),
(243, 'MUHAMMAD AYYUB', 'LABUANGNGE', '1998-06-21', 'JL.SABANAR LAMA', 'L', NULL, 'ayyubmuhammad21@gmail.com', '0813-5137-1883', 'UNIVERSITAS KALTARA', 'MIPA MATEMATIKA', 1, 27, 8, 2016, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(244, 'AYU SELI FARIDAH', 'SESAYAP', '1999-06-11', 'JL. SKIP 1/RT 1/RW 1/NO RUMAH 5', 'P', NULL, 'ayunamauri@gmail.com', '0822-9823-3123', 'UNIVERSITAS KALTARA', 'MIPA MATEMATIKA', 1, 27, 8, 2016, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(245, 'SABRAN ARIFIN', 'SESAYAP', '1997-05-25', 'JL. SKIP 1/RT 1/RW 1/NO RUMAH 5', 'L', NULL, 'sabranarifin@gmail.com', '0822-3143-8208', 'UNIVERSITAS KALTARA', 'AGROTEK/FAPERTA', 1, 27, 8, 2016, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(246, 'FARIDAH', 'SIMPASAI', '1995-05-03', 'JL. JELARAI RAYA, GG. RAWA PAYAU', 'P', NULL, 'faridahfekon@gmail.com', '0853-4619-3895', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2016, 'MAPABA', 'SIG', 'Aktif'),
(247, 'NUNUNG EKAWATI', 'LONG BELUAH', '1997-07-31', 'TANJUNG PALAS', 'P', NULL, 'nunungekawati83@gmail.com', '0822-5159-3124', 'UNIVERSITAS KALTARA', 'AGROTEK/FAPERTA', 1, 27, 8, 2016, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(248, 'MUHAMMAD NUR', 'TARAKAN', '1995-05-28', 'TANAH KUNING', 'L', NULL, 'annur@gmail.com', '0822-5496-3328', 'UNIVERSITAS KALTARA', 'MIPA FISIKA', 1, 27, 8, 2016, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(249, 'LASTRI', 'SALIMBATU', '1995-04-01', 'TANJUNG PALAS', 'P', NULL, 'lastrikeroppi04@gmail.com', '0821-5463-5695', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2016, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(250, 'USRIADI', 'BONE', '1993-10-02', 'JL, SENGKAWIT, GG. NIAGA', 'L', NULL, 'usri@gmail.com', '0822-5514-2649', 'UNIVERSITAS KALTARA', 'AGROTEK/FAPERTA', 1, 27, 8, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(251, 'SITI MASNAH', 'TANJUNG SELOR', '1998-06-10', 'JL. MERANTI', 'P', NULL, 'sitimasnah@gmail.com', '0822-5110-8971', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(252, 'LATIFAH NUR', 'SEKATAK BUJI', '1997-06-06', 'JL. SENGKAWIT, GG, MANDALA', 'P', NULL, 'latifahnur@gmail.com', '0812-5496-2406', 'UNIVERSITAS KALTARA', 'EKONOMI PEMBANGUNAN', 1, 27, 8, 2016, 'PKD', 'SIG', 'Aktif'),
(253, 'SAMSIAH', 'SALIMBATU', '1996-11-19', 'TANJUNG SELOR', 'P', NULL, 'samsiahaja@gmail.com', '0822-5141-3204', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2016, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(254, 'HARIYANTO', 'TARAKAN', '1998-02-26', 'JL. CENDANA', 'L', NULL, 'keraduci@gmail.com', '0821-5325-4635', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(255, 'ROSNAWATI', 'TANJUNG SELOR', '1997-09-06', 'JL. MANDALA', 'P', NULL, 'rosnawati542@gmail.com', '0813-5007-6911', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(256, 'DEBY CITRA', 'BUNYU', '1998-02-26', 'TANJUNG PALAS', 'P', NULL, 'debycitdra.@gmail.com', '0821-5325-4635', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(257, 'INDAH MAYASARI', 'TARAKAN', '1998-08-07', 'JL. MANGGA 2', 'P', NULL, 'indahmayasari579@gmail.com', '0822-5479-5862', 'UNIVERSITAS KALTARA', 'MIPA MATEMATIKA', 1, 27, 8, 2016, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(258, 'DIAN HERAWATI', 'TIAS', '1999-03-13', 'JL. MANDALA', 'P', NULL, 'dianherawatinurdin@gmail.com', '0821-5446-5953', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(259, 'MUHAMMAD RIZAL', 'TANJUNG SELOR', '1999-02-15', 'TANJUNG SELOR', 'L', NULL, 'votre469@gmail.com', '0822-5305-9041', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(260, 'SHELLY JUMI APRIANI', 'TELUK BAYUR', '1998-04-10', 'JL. GELATIK', 'P', NULL, 'shellyjumriani@gmail.com', '0822-7898-2997', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2016, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(261, 'HENDRA LAKSAMANA', 'SALIMBATU', '1997-12-04', 'JL. SEMANGKA', 'L', NULL, 'hendralaksamana191@gmail.com', '0822-5596-0314', 'UNIVERSITAS KALTARA', 'EKONOMI PEMBANGUNAN', 1, 27, 8, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(263, 'SITTI HAJAR', 'TANJUNG SELOR', '1998-10-08', 'KAMPUNG ARAB', 'P', NULL, 'sittihajar940@gmail.com', '0812-5306-8443', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2017, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(264, 'SUHARTINA ARIS', 'JAMPU', '1998-05-09', 'JL. JELARAI TELOR PECAH', 'P', NULL, '09suhartinaaris@gmail.com', '0822-1870-5702', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2016, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(265, 'MOHAMMAD JABAL NOOR', 'TANJUNG PALAS', '1999-08-04', 'TANJUNG PALAS', 'L', NULL, 'm.jabalnoor@gmail.com', '0822-5612-8732', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(266, 'JOKO SUSANTO', 'NUNUKAN', '1991-01-14', 'JL. BINJAI', 'L', NULL, 'ndut.bondenk@yahoo.com', '0822-5479-5862', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2012, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(267, 'HERDIAN CAHYO WIBISONO ', 'BALIKPAPAN', '1999-10-11', 'JL. SEMANGKA', 'L', NULL, 'herdiancahyo59@gmail.com', '0822-5435-5231', 'UNIVERSITAS KALTARA', 'ARSITEK/TEKNIK', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(268, 'SARI MAHARANI ALPIANTI', 'SESAYAP', '2001-06-07', 'JL. CENDRAWASIH', 'P', NULL, 'sarimaharanialpianti0706@gmail.com', '0813-4964-4394', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(269, ' ARHALAMSYAH', 'SESAYAP', '1999-09-28', 'JL. CENDANA', 'L', NULL, 'arhalamsyah01@gmail.com', '0822-5812-9744', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(270, 'MITA', 'LAIS', '1996-08-03', 'JL. MANGGA 2', 'P', NULL, 'mita33388896@gmail.com', '0823-5247-8568', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(271, 'LINA INDIRIANI', 'TIDENG PALE', '2000-09-29', 'TANJUNG SELOR', 'L', NULL, 'lhibar16@gmail.com', '0821-5569-0103', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(272, 'WAFIQ NUR AZIZAH', 'PANCA AGUNG', '2000-06-14', 'RAWA PAYAU', 'P', NULL, 'wafiqnurazizah@gmail.com', '0853-8821-9173', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(273, 'SITI AISYAH', 'SALIMBATU', '1999-05-19', 'TANJUNG PALAS', 'P', NULL, 'ooiiii09@gmail.com', '0853-9381-5352', 'AKADEMI KOMUNITAS NEGERI', 'PERKEBUNAN/PERTANIAN', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(274, 'INTAN RATNA SUGANDA', 'TANJUNG PALAS', '2000-01-09', 'JL. PADAT KARYA RT. 006 TANJUNG PALAS', 'P', NULL, 'intanrat661@gmail.com', '0823-5307-6725', 'AKADEMI KOMUNITAS NEGERI', 'PERKEBUNAN/PERTANIAN', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(275, 'TITI SUMARNI', 'TANJUNG SELOR', '2000-11-28', 'DESA GUNUNG SARI, RT 7/RW 2. JL. MELON', 'P', NULL, 'tisum281@gmail.com', '0822-5459-1141', 'AKADEMI KOMUNITAS NEGERI', 'PERKEBUNAN/PERTANIAN', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(276, 'TIKA SETIANINGSIH', 'TANJUNG SELOR', '1998-09-02', 'JL.PADAT KARYA RT 12 RW 2 GUNUNG PUTIH. TG.PALAS', 'P', NULL, 'tikasetianingsih@gmail.com', '0822-5312-9942', 'UNIVERSITAS KALTARA', 'PERKEBUNAN/PERTANIAN', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(277, 'ZAKARIANSYAH', 'TANJUNG SELOR', '1998-03-13', 'TANJUNG PALAS', 'L', NULL, 'riansyah59@gmail.com', '0821-6739-7234', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(278, 'FAHRIANI ALFIROZIAH', 'TANJUNG SELOR', '1998-08-28', 'TANJUNG SELOR', 'P', NULL, 'alfiroziah@gmail.com', '0853-8822-5477', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(279, 'MUHAMMAD ARIB', 'TANJUNG SELOR', '2000-10-14', 'JL. SABANAR LAMA', 'L', NULL, 'm.arib@gmail.com', '0822-522-2967', 'UNIVERSITAS KALTARA', 'TEKNIK SIPIL', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(280, 'MOHDAR', 'TANJUNG PALAS', '2000-04-29', 'TANJUNG PALAS', 'L', NULL, 'mohdarblgn4335@gmail.com', '0822-5176-1178', 'AKADEMI KOMUNITAS NEGERI', 'PERKEBUNAN/PERTANIAN', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(281, 'NURMALASARI', 'TANJUNG SELOR', '1999-05-20', 'JL.SABANAR LAMA', 'P', NULL, 'nrmlasriansr@gmail.com', '0813-4576-3836', 'STIE BULTAR', 'EKONOMI PEMBANGUNAN', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(282, 'DESI ANISYAH ARVA BUDI ARTI', 'TUBAN', '1999-12-29', 'JL. CEMPEDAK', 'P', NULL, 'desianisyah@gmail.com', '0852-3576-1541', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif');
INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `tempat_anggota`, `tgl_anggota`, `alamat_anggota`, `jk_anggota`, `foto_anggota`, `email_anggota`, `telepon_anggota`, `kampus_anggota`, `prodi_anggota`, `rayon_id`, `komisariat_id`, `cabang_id`, `angkatan_mapaba`, `kaderisasi_anggota`, `kaderisasi_kopri`, `status_anggota`) VALUES
(283, 'RAHMAWATI EKA SAFITRI', 'TANJUNG SELOR', '1999-01-16', 'JL. JERUK', 'P', NULL, 'rahmawatiekasafitri@gmail.com', '0822-5658-9075', 'STIE BULTAR', 'EKONOMI PEMBANGUNAN', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(284, 'ARIEF RAHMAN', 'TANJUNG SELOR', '1999-09-21', 'JL. JERUK', 'L', NULL, 'ariEfRahman.SMKN1@gmail.com', '0853-8873-1136', 'UNIVERSITAS KALTARA', 'TEKNIK SIPIL', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(285, 'DEA HAFIFAH FIDIANA', 'TANJUNG SELOR', '2000-01-05', 'JELARAI RAYA', 'P', NULL, 'Deahafifah123@gmail.com', '0822-5366-7339', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(286, 'RESKI', 'BELAJEN', '1998-11-01', 'JL. RAJAWALI (GG. PERAWAT)	', 'P', NULL, 'reski@gmail.com', '0812-4305-9042', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(287, 'GUSTI REFLY REZAISRA', 'SAMARINDA', '2000-10-25', 'JL. SEMANGKA', 'L', NULL, 'refliewww50@yahoo.com', '0822-9322-3239', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(288, 'IMPRON', 'BLITAR', '1993-03-10', 'JL. CEMPEDAK', 'L', NULL, 'improncr@gmail.com', '0821-5795-9440', 'STIT AL- ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(289, 'AIDIL HASAN', 'TANAH KUNING', '1996-02-19', 'TANAH KUNING', 'L', NULL, 'aidilhasan1996@gmail.com', '0822-4693-3583', 'AKADEMI KOMUNITAS NEGERI', 'PERKEBUNAN/PERTANIAN', 1, 27, 8, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(290, 'TAUFIK BANSIR ', 'TANJUNG SELOR', '2000-09-03', 'TANJUNG SELOR', 'L', NULL, 'taufikbansir20@gamil.com', '0822-5074-7297', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(291, 'RISKA  ', 'BELAJEN', '1998-11-01', 'JL. RAJAWALI GG. PERAWAT . TANJUNG SELOR ', 'P', NULL, 'riskaiskandar277@gamil.com', '0812-4305-9042', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(292, 'ANDI NURHIDAYAH FILDZAH  ', 'SAMARINDA', '1997-03-21', 'JL. MERAK SELIMAU 1 RT. 12 TANJUNG SELOR ', 'L', NULL, 'andinurhidayah@gamil.com', '0822-5551-4534', 'UNIVERSITAS ISLAM NEGRI ANTASARI BANJARMASIN', 'MANAJEMEN PENDIDIKAN ISLAM/ /TARBIYAH DAN KEGURUAN', 1, 27, 8, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(293, 'FEBRIANA NAFA DWIYANTI', 'TANJUNG SELOR', '1999-02-13', 'JL. SENGKAWIT TANJUNG SELOR ', 'P', NULL, 'febriana@gmail.com', '0822-5171-4638', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(294, 'AHMAD MAULANA', 'BANJARMASIN', '1992-04-05', 'JL. SEKIP 1 GG. SMP .TANJUNG SELOR ', 'L', NULL, 'ahmad.123@gmail.com', '0811-5448-8485', 'STIT AL- ANSHAR', 'PAI/TARBIYAH', 1, 27, 8, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(295, 'TRI ASMARA', 'LONG BELUAH', '2000-05-29', 'JL. MANGGA 2', 'L', NULL, 'triasmara@gmail.com', '0822-5081-2901', 'UNIVERSITAS KALTARA', 'MANAJEMEN/FEKON', 1, 27, 8, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(296, 'MILA ASRIANI', 'WATAMPONE', '1996-03-31', 'JL. MANGGA 2', 'P', NULL, 'milaasriani@yahoo.com', '0821-8700-9188', 'UNIVERSITAS KALTARA', 'EKONOMI PEMBANGUNAN', 1, 27, 8, 2016, 'PKL', 'SKK', 'Aktif'),
(297, 'MUHID EDY SAPARDY', 'SESAYAP', '2000-05-18', 'JL. CEMPEDAK', 'L', NULL, 'muhidedy@gmail.com', '0812-5402-5487', 'UNIVERSITAS KALTARA', 'ILMU ADMINISTRASI NEGARA/ FISIPOL', 1, 27, 8, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(298, 'Jumaidah', 'Cerincang', '2000-08-05', 'Gg.satria sangata selatan', 'P', 'Screenshot_2019-07-14-12-02-11-80.png', 'Maidahkuuu@gmail.com', '085651946116', 'Stai Sangata', 'Tarbiyah/PAI', 13, 5, 5, 2018, 'MAPABA', 'SIG', 'Aktif'),
(300, 'Sumarni', 'Bual-Bual', '1999-08-23', 'Jl sepakat Gg. Hamid', 'P', NULL, 'sumarnidimung08@gmail.com', '082256970014', 'STAI SANGATTA', 'Ekonomi Syariah', 2, 5, 5, 2018, 'MAPABA', 'SIG', 'Aktif'),
(301, 'Binsair', 'Balikpapan', '1997-06-17', 'Jl. Re Martadinata RT 18 No. 10', 'L', NULL, 'binsarpranajaya@gmail.com', '085754555134', 'Sekolah Tinggi Ilmu Tarbiyah Balikpapan', 'Pendidikan Agama Islam', 1, 33, 3, 2016, 'PKL', 'TIDAK ADA', 'Aktif'),
(302, 'Achmad Maulana', 'Balikpapan', '1998-07-12', 'Jl. Teratai Merah RT 56 No. 55 Sepinggan', 'L', NULL, 'achmadmaulana0858@gmail.com', '085821562642', 'Sekolah Tinggi Ilmu Tarbiyah Balikpapan', 'Pendidikan Agama Islam', 1, 33, 3, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(303, 'Andrean ', 'Samarinda', '1998-04-17', 'Jl. Ringroad 3 Balikpapan', 'L', NULL, 'reanpalevy@gmail.com', '081645426449', 'Sekolah Tinggi Ilmu Tarbiyah Balikpapan', 'Pendidikan Agama Islam', 1, 33, 3, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(304, 'Nurul Fadhilah', 'Balikpapan', '1999-04-24', 'Jl. Rohani RT 51 No. 12 Kelurahan Karang Rejo Balikpapan Tengah', 'P', NULL, 'lolaamelia0210@gmail.com', '083153720256', 'Sekolah Tinggi Ilmu Tarbiyah Balikpapan', 'Pendidikan Agama Islam', 1, 33, 3, 2016, 'MAPABA', 'SKK', 'Aktif'),
(305, 'Mahriza Aulia Rahmah', 'Balikpapan', '1999-02-09', 'Jl. Sepinggan Asri Utara 2 RT 45 Blok G No. 10', 'P', NULL, 'mahrizaica@gmail.com', '085656785704', 'Sekolah Tinggi Ilmu Tarbiyah Balikpapan', 'Pendidikan Agama Islam', 1, 33, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(306, 'Hambali', 'Balikpapan', '1997-06-08', 'Jl. Mayjend Soetoyo RT 57 No. 53 ', 'L', NULL, 'hambaliar633@gmail.com', '0895341699623', 'Sekolah Tinggi Ilmu Tarbiyah Balikpapan', 'Pendidikan Agama Islam', 1, 33, 3, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(307, 'Indah Widya Astuti', 'Balikpapan', '1999-08-05', 'Jl. Mulawarman RT 30 No. 68 Teritip', 'P', NULL, 'indah5899@gmail.com', '089670536384', 'Sekolah Tinggi Ilmu Tarbiyah Balikpapan', 'Pendidikan Agama Islam', 1, 33, 3, 2017, 'MAPABA', 'SIG', 'Aktif'),
(308, 'Wawan', 'Bandung', '1995-09-07', 'Manggar RT 064 Balikpapan ', 'L', NULL, 'wawanalfaqiertea@gmail.com', '0895701668489', 'Sekolah Tinggi Ilmu Tarbiyah Balikpapan', 'Pendidikan Agama Islam', 1, 33, 3, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(309, 'Siti Sholikha Nanda Yasmi', 'Balikpapan', '1999-05-05', 'Jl. Telindung permai B2 No.6 RT.006 ', 'P', NULL, 'sitisholikhananday@gmail.com', '081520938879', 'STITBA', 'PAI', 1, 33, 3, 2018, 'MAPABA', 'SIG', 'Aktif'),
(310, 'Alfina Damayani', 'Balikpapan', '2000-07-02', 'Jl.Mulawarman RT.54 Manggar, Balikpapan Timur', 'P', NULL, 'alfinaakim@gmail.com', '085604759936', 'STITBA', 'PAI', 1, 33, 3, 2018, 'MAPABA', 'SIG', 'Aktif'),
(311, 'Dita Ramadani', 'Balikpapan', '2000-12-15', 'Perum Mawija Jl.Merah delima VIII RT.37 No.25', 'P', NULL, 'ochadita82@gmail.com', 'o8971241204', 'STITBA', 'PAI', 1, 33, 3, 2018, 'MAPABA', 'SIG', 'Aktif'),
(312, 'Leni Widyaningsih', 'Balikpapan', '2000-03-09', 'Jl.Mulawarman Gg. Sri rahayu RT.13 Lamaru Balikpapan Timur', 'P', NULL, 'leniwidya0904@gmail.com', '085849507050', 'STITBA', 'PAI', 1, 33, 3, 2018, 'MAPABA', 'SIG', 'Aktif'),
(313, 'Mohammad Faily', 'Sumenep', '1996-04-09', 'Jl.Manuntung No.1 Gn. Bahagia Balikpapan Selatan', 'L', NULL, 'failyfqth@gmail.com', '082301876229', 'STITBA', 'PAI', 1, 33, 3, 2015, 'PKL', 'TIDAK ADA', 'Aktif'),
(314, 'Gusnawati', 'Balikpapan', '1995-11-26', 'Jl.Manunggal RT.20 ', 'P', NULL, 'gusnatiol33@gmail.com', '085757630270', 'STIEPAN', 'Manajemen', 1, 35, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(315, 'Budiyanto', 'Balikpapan', '1998-09-29', 'Jl.Letzen Z.A maulani', 'L', NULL, 'budi123838@gmail.com', '081351757370', 'STIEPAN', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(316, 'Alif Agung', 'Lamongan', '1997-05-06', 'Jl. 3 RT.33 No. 24 Gunung Bahagia', 'L', NULL, 'alifagung567@gmail.com', '081250458355', 'STIEPAN', 'Akutansi', 1, 35, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(317, 'Amanda Salma Usda', 'Balikpapan', '1999-03-30', 'Jl.Letjend S.parman RT.30No.64', 'P', NULL, 'mandhasalmaa30@gmail.com', '082159261087', 'STIEPAN', 'Akutansi', 1, 35, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(318, 'Rahmat Adycahya', 'Balikpapan', '1999-06-23', 'Jl. Sultan Hasanuddin RT.37', 'L', NULL, 'rahmatkbrc@gmail.com', '085732492925', 'STIEPAN', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(319, 'Fitriana', 'Kendek, Bangai Laut', '2000-10-14', 'Karang jati dalam RT.19', 'P', NULL, 'fittrianna88@gmail.com', '085343570596', 'STIEPAN', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(320, 'Wawan Henrawan', 'Sinjai', '2000-01-08', 'Girimukti Strat 06 RT.007', 'L', NULL, 'wawan_henrawan.18@stimik-borneo.ac.id', '085751308486', 'STIMIK BI', 'Sistem Informasi', 1, 34, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(321, 'Ade Deva Wardhana', 'Samarinda', '2000-11-23', 'Jl. Sti Aisyah Gg.4 C No. 21 Samatinda Ulu', 'L', NULL, 'radhanade@gmail.com', '0895704128273', 'STIMIK BI', 'Hukum-hukum Pidana Islam', 1, 37, 3, 2018, 'PKD', 'TIDAK ADA', 'Aktif'),
(322, 'Nikmatul Fadillah', 'Balikpapan', '1998-09-12', ' Jl.Masjid Rt.011 No.58 Kel.Gunung Seteleng Kec.Penajam Kab.PPU', 'L', NULL, 'fnikmatul12@gmail.com', '085754060865', 'STAIBA', 'PAI', 1, 37, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(323, 'Deasylia Aryanti', 'Banjarmasin', '1998-12-06', ' Jl. Provinsi km 46 rt 003 desa babulu darat kec. Babulu', 'L', NULL, 'deasyliaarianty612@gmail.com', '085751332752', 'STIMIK BI', 'Sistem Informasi', 1, 34, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(324, 'Nurazizah Amelia M.', 'Palopo', '1998-03-25', 'Jln. Ali usman\r\nRt 01. Kelurahan waru,  kecamatan waru,  kabupaten paser utara ', 'P', NULL, 'azizahamaliamucksan01@gmail.com', '085220111467', 'STIMIK BI', 'Sistem Informasi', 1, 34, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(325, 'Haliandari', 'Mamuju', '1997-01-07', 'Giripurwa', 'P', NULL, 'haliandari17@gmail.com', '085346278965', 'STIMIK BI', 'Sistem Informasi', 1, 34, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(326, 'Befrizka Norzhela', 'Surabaya', '1996-11-06', ' Jln Propinsi KM 05 RT 07, Nenang', 'P', NULL, 'befrizka.norzhela@gmail.com', '085752163958', 'STIMIK BI', 'Sistem Informasi', 1, 34, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(327, 'Moh. Fikran', 'Moutong', '1996-04-07', 'mohfikran007@gmail.com', 'L', NULL, 'mohfikran007@gmail.com', '085267352837', 'STIMIK BI', 'Sistem Informasi', 1, 34, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(328, 'Sri Hartati', 'Balikpapan', '2000-09-13', 'Jl. 21 januari gang batu arang', 'P', NULL, 'sridansel@gmail.com', '081649008265', 'STAIBA', 'Hukum Pidana Islam', 1, 37, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(329, 'Camelia Wardhani', 'Surakarta', '2000-04-21', 'Jl.Banjar rt.08/no 08. Gn.sari ilir Balikpapan Tengah', 'P', NULL, 'cameliawardhani88@gmail.com', '087743168788', 'STAIBA', 'Hukum Pidana Islam', 1, 37, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(330, 'Baiq Indah Lestari', 'Long Ikis', '1999-08-01', ' Krayan bahagia rt 09 kec. Long ikis', 'P', NULL, 'baiqindahlestrai108@gmail.com', '082237369276', 'AKBID BORNEO Medistra Balikpapan', 'Kebidanan', 1, 1, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(331, 'Diah Ayu Kumala Sari', 'Tulungagung', '1997-08-04', 'Jl. Soekarno Hatta Km 5,5 No.03 RT.073', 'P', NULL, 'Diahayukumalasari0408@gmail.com', '085754853204', 'STITBA', 'PAI', 1, 33, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(332, 'Dita Anggraini Pramana Putri', 'Sragen', '1998-09-04', 'Komplek PGRI Blok D1 No. 17 A Ringroad', 'P', NULL, 'ditta040998@gmail.com', '085551202322', 'STITBA', 'PAI', 1, 33, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(333, 'Lisdiana Wahyuningsih', 'Balikpapan', '2000-06-19', 'Jl. Mayjen sutoyo Rt. 43 ', 'P', NULL, 'lisdianawahyunungsih19@gmail.com', '085753947771', 'STIEPAN', 'Manajemen', 1, 35, 3, 2018, 'MAPABA', 'SIG', 'Aktif'),
(334, 'Nurul Adeniah', 'Balikpapan', '1999-03-27', 'Jl. Rohani rt. 54 no. 26', 'P', NULL, 'nurul.adeniah99@gmail.com', '087888508348', 'STITBA', 'PAI', 1, 33, 3, 2017, 'MAPABA', 'SIG', 'Aktif'),
(335, 'Maulidatul Maghfiroh', 'Bangkalan', '1996-07-26', 'Jl. Merdeka Rt. 19 No.137 Kel. Mekar sari Kec. Balikpapan Tengah', 'P', NULL, 'maulidatulmaghfiroh96@gmail.com', '082153751449', 'STAIBA', 'PAI', 1, 37, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(336, 'Maria Nur Annisa', 'Balikpapan', '1999-04-25', 'Jl. Majend Soetoyo RT 44 NO 67 Kelurahan Klandasan Ilir Kec. Balikpapan Kota ', 'P', NULL, 'marianurannisa05@gmail.com', '081258507448', 'STAIBA', 'PAI', 1, 37, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(338, 'Muhammad Said Abdillah', 'Olung', '1998-07-30', 'Jl. Mulawarman RT.10 Sepinggan', 'L', NULL, 'ananda.dbayers99@gmail.com', '085396694449', 'STITBA', 'PAI', 1, 33, 3, 2016, 'PKL', 'TIDAK ADA', 'Aktif'),
(339, 'Muhammad Rusdani', 'Tabalong', '1997-04-05', ' Jl.Baitul Makmur Rt. 059 manggar Balikpapan Timur', 'L', NULL, 'rusdaniasus@gmail.com', '085248903909', 'STITBA', 'PAI', 1, 33, 3, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(340, 'Almadinatul Munawarah', 'Petung', '1998-04-17', 'Petung RT.19 kec. Penajam kab. PPU', 'P', NULL, 'almadinatul72@gmail.com', '085751008444', 'POLTEKBA', 'Sipil', 1, 39, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(341, ' Jumaini Warsitah', 'Penajam', '2000-09-08', 'Jl.Soekarno Hatta Km.08 Belakang poltekba, Balikpapan Utara', 'P', NULL, 'jumainiwarsitah12@gmail.com', '085652370317', 'POLTEKBA', 'Perhotelan', 1, 39, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(342, 'Lisa Nuryati', 'Balikpapan', '1998-06-29', ' Jl. Mulawarman Gg.Sri rahayu RT.13 No.48 Lamaru', 'P', NULL, 'lisanyt98@gmail.com', '081346808305', 'STITBA', 'PAI', 1, 33, 3, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(343, ' Siti Nuraini Daeng Ngintang ', 'Balikpapan', '1999-04-21', ' Jl. Gunung 4 RT.13 No.27', 'P', NULL, 'sitinuraini2199@gmail.com', '0895338973659', 'STITBA', 'PAI', 1, 1, 3, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(344, 'Anis Fithriyah', 'Balikpapan', '2000-10-22', 'Jl.Mulawarman RT.10 Gg.Arjuna', 'P', NULL, 'anisfithriyah22@gmail.com', '08997448338', 'UNIBA', 'Akutansi', 1, 38, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(345, 'Reysi Amalia', 'Balikpapan', '1997-06-17', 'Jl.Mulawarman RT.29 No.22 Sepinggan Balikpapan Selatan', 'P', NULL, 'Reysiamalia37@gmail.com', '082351319630', 'STIEPAN', 'Akutansi', 1, 35, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(346, 'Hambali', 'Balikpapan', '1997-06-08', 'Jl. Mayjend Soetoyo RT.57 No.53', 'L', NULL, 'hambaliar633@gmail.com', '0895341699623', 'STITBA', 'PAI', 1, 33, 3, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(347, 'Ardiansyah', 'Dungkait', '1998-02-11', ' Jl. Jumaiyah Rt 06 Kel.Sungai Parit', 'L', NULL, 'ardiansyahpg046@gmail.com', '081545699513', 'STAIBA', 'Ekonomi Syariah', 1, 37, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(348, 'Andreyan', 'Samarinda', '1998-04-17', 'Jl. Ringroad 3', 'L', NULL, 'reanpalevy@gamail.com', '081645426449', 'STITBA', 'PAI', 1, 33, 3, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(349, 'Aliyas', 'Tanah Grogot', '1997-05-25', 'Jl. Sultan Hasanuddin', 'L', NULL, 'liyaz_iyaz@yahoo.com', '082252012501', 'Stiper Muhammadiyah Tanah Grogot', 'Agroteknologi', 1, 43, 6, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(350, 'Muhammad Riduansyah', 'Tanah Periuk', '1999-07-10', 'Jl. Senaken', 'L', NULL, 'mriduansyah24@gmail.com', '083159573894', 'Stiper Muhammadiyah Tanah Grogot', 'Agribisnis', 1, 43, 6, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(351, 'Sri Wahyuni', 'Kota Baru', '1999-05-20', 'Jl. Senaken', 'P', NULL, 'Sriwahyunigrogot@gmail.com', '082252012501', 'Stiper Muhammadiyah Tanah Grogot', 'Agroteknologi', 1, 43, 6, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(352, 'Mohammad Amin Ma’ruf', 'Tuban', '1997-07-09', 'Perum PGRI Graha Indah Blok W RT 8 Balikpapan Utara', 'L', NULL, 'mohammadmaruf1997@gmail.com', '082131971505', 'STAIBA', 'PAI', 1, 37, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(353, 'Suci Karmila ', 'Balikpapan', '1998-12-29', 'Jl. Sulawesi Rt 47 no 26 , Karang rejo, Balikpapan Tengah', 'P', NULL, 'sucikarmila29@gmail.com', '081348808812', 'STAIBA', 'Ekonomi Syariah', 1, 37, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(354, 'Wahyu Saputra ', 'Balikpapan', '1999-04-05', 'Jl. Rohani rt 54 no 57 kel karang rejo kec. Balikpapan Tengah', 'L', NULL, 'Whyusaputraaa99@gmail.com', '082152705680', 'STAIBA', 'PAI', 1, 37, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(355, 'Achmad Rifaldi ', 'Balikpapan', '1997-03-09', 'Jl.Sepakat 3 RT 46 NO 9 baru tengah Balikpapan', 'L', NULL, 'rifaldi.balikpapan.1003@gmail.com', '081248480115', 'STAIBA', 'PAI', 1, 37, 3, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(356, 'Romi Raeis Nur Huda', 'Balikpapan', '1998-05-15', 'Jl. Soekarno hatta Km.10 ', 'L', NULL, 'Romiraeis123@gmail.com', '085821176421', 'STAIBA', 'PAI', 1, 37, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(357, 'Halidin', 'Balikpapan', '1996-04-03', 'KM.8 RT.09 PPU', 'L', NULL, 'halidinkholid999@gmail.com', '082332641486', 'STAIBA', 'PAI', 1, 37, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(358, 'Ahmad Aldi', 'Balikpapan', '1995-12-22', 'Jl. Pandan arum', 'L', NULL, 'Ahmadaldialrizmi@gmail.com', '08981776366', 'STAIBA', 'PAI', 1, 37, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(359, 'Nurjannah ', 'Balikpapan', '1983-11-11', 'Markoni atas RT.34 No.34', 'P', NULL, 'nurjannah11aji@gmail.com', '082295489678', 'STAIBA', 'Hukum Pidana Islam', 1, 37, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(360, 'Zahrah Nur Kamilah', 'Balikpapan', '2000-04-14', 'Jl. Siaga dalam Rt.37 No. 106', 'P', NULL, 'zahrah.milah@gmail.com', '085654160439', 'UNIBA', 'Ilmu Hukum', 1, 38, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(361, 'Romadhon', 'Balikpapan', '1999-12-21', 'Jl. Mulawarman RT. 10 Sepinggan', 'L', NULL, 'romadhon123@gmail.com', '08981665570', 'UNIBA', 'Akutansi', 1, 38, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(362, 'Herman Sahril', 'Bangkalan', '1995-11-05', 'Jl. patriot No. 17 RT 28', 'L', NULL, 'sahrilherman7@gmail.com', ' 082251581226', 'UNIBA', 'Teknik Sipil', 1, 38, 3, 2018, 'PKD', 'TIDAK ADA', 'Aktif'),
(363, 'Diva Afifah', 'Paser', '2000-07-04', 'Jl. Gamelina RT.05 Desa Karang Jinawi Sepaku, Penajam', 'P', NULL, 'divaafifahhakim4700@gmail.com', '081393970363', 'UNIBA', 'Teknik Sipil Dan Perencanaan', 1, 38, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(364, 'Muhammad Usman', 'Bangkalan', '1997-07-04', 'Jl. PT HER sepinggan', 'L', NULL, 'Usmankeren99@gmail.com', '087750284040', 'STITBA', 'PAI', 1, 33, 3, 2016, 'PKD', 'TIDAK ADA', 'Aktif'),
(365, 'Reka Rahmayanti', 'Balikpapan', '1997-07-30', 'Jl.mulawarman RT 29 No.92', 'P', NULL, 'rekarahmayanti76@gmail.com', '081253859390', 'STITBA', 'PGMI', 1, 33, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(366, 'Mitha Gayatri', 'Samarinda', '1998-11-20', 'Pondong Baru Tanah Grogot', 'P', NULL, 'mithagayatri98@gmail.com', '082354437588', 'Stiper Muhammadiyah Tanah Grogot', 'Agribisnis', 1, 43, 6, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(367, 'Muhammad Ihsan Ashari', 'Tanah Grogot', '1998-10-11', 'Tanah Periuk Gg. Bersama 7 RT 7 Tanah grogot ', 'L', NULL, 'IkhsanGT12@gmail.com', '082251754434', 'Stiper Muhammadiyah Tanah Grogot', 'Agribisnis', 1, 43, 6, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(368, 'Muhammad Subhan', 'Muara Komam', '1997-04-18', 'Muara Komam\r\n', 'L', NULL, 'subhanmuhammad127@gmail.com', '082253034107', 'Stiper Muhammadiyah Tanah Grogot', 'Agroteknologi', 1, 43, 6, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(369, 'Muhammad Yusran', 'Tanah Grogot', '1999-06-04', 'Kh.Ahmad Dahlan', 'L', NULL, 'yusranmahesa@gmail.com', '081522660940', 'Stiper Muhammadiyah Tanah Grogot', 'Agroteknologi', 1, 43, 6, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(370, 'Megawati', 'Muara Kuaro', '1999-04-26', 'Jl. Jendral Sudirman Gg Ikhlas', 'P', NULL, 'Aprilwati402@gmail.com', '085750312457', 'Stiper Muhammadiyah Tanah Grogot', 'Agroteknologi', 1, 43, 6, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(371, 'Ayu Lestari', 'Pinrang', '2000-05-23', 'Jl. union Komplek Perumahan grand Abdi Karya blok E No. E7', 'P', NULL, 'ayulestari005032@gmail.com', '083140239942', 'Stiper Muhammadiyah Tanah Grogot', 'Agribisnis', 1, 43, 6, 2018, 'PKD', 'SIG', 'Aktif'),
(372, 'Muhammad Musa', 'Tanah Grogot', '1998-08-26', 'Jl. Pangeran Singa Maulana', 'L', NULL, 'muhammadmusa534@gmail.com', '083144103450', 'Stiper Muhammadiyah Tanah Grogot', 'Agroteknologi', 1, 43, 6, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(373, 'Juraida', 'Muara Toyu ', '1998-12-12', 'Long Kali\r\n', 'P', NULL, 'jurai.jur@gmail.com', '085652331667', 'Stiper Muhammadiyah Tanah Grogot', 'Agroteknologi', 1, 43, 6, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(374, 'Mursid Toha', 'Pasir Mayang', '1996-10-20', 'Jl. RA. Kartini, Tanah Grogot', 'L', NULL, 'almursyidtoha@gmail.com', '081522723536', 'Stiper Muhammadiyah Tanah Grogot', 'Agribisnis', 1, 43, 6, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(375, 'Awitman', 'Sepaku', '1999-06-27', 'Damit RT 05, Kec. Paser Belengkong', 'L', NULL, 'awitman27@gmail.com', '085247899117', 'PDD Rintisan Politeknik Negeri Paser', 'Teknik Alat Berat', 1, 45, 6, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(376, 'Sheila Fitriand Zuhri', 'Tanah Grogot', '2000-01-08', 'Desa Damit RT 9', 'P', NULL, 'sheilfitrnd@gmail.com', '085346532749', 'PDD Rintisan Politeknik Negeri Paser', 'Teknik Alat Berat', 1, 45, 6, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(377, 'Cecep Akbar Supriyanto', 'Tanah Grogot', '1995-11-06', 'Jl. Dr. Cipto Mangunkusumo RT 04', 'L', NULL, 'cecepakbar95@gmail.com', '085820185556', 'PDD Rintisan Politeknik Negeri Paser', 'Teknik Alat Berat', 1, 45, 6, 2016, 'MAPABA', 'TIDAK ADA', 'Tidak Aktif'),
(378, 'Sudirman', 'Rantau Panjang', '1999-06-15', 'Rantau Panjang', 'L', NULL, 'sudirman1506@gmail.com', '083141583537', 'PDD Rintisan Politeknik Negeri Paser', 'Teknik Alat Berat', 1, 45, 6, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(379, 'Alexander Napitupulu', 'Lombang', '1998-11-10', 'Sangkuriman', 'L', NULL, 'alexandergrogot0552@gmail.com', '082398964294', 'PDD Rintisan Politeknik Negeri Paser', 'Teknik Alat Berat', 1, 45, 6, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(380, 'Widia Nursaleha', 'Kuaro', '1998-07-18', 'Kuaro, Jl. Jendral Suprapto', 'P', NULL, 'widianue98@gmail.com', '083141882116', 'PDD Rintisan Politeknik Negeri Paser', 'Teknik Kimia', 1, 45, 6, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(381, 'Rinatri Mulyani', 'Suliliran Baru', '1998-08-18', 'Desa Suliliran Baru RT 17 Jl. Kenanga', 'P', NULL, 'rinatrimulyani18@gmail.com', '082149583480', 'PDD Rintisan Politeknik Negeri Paser', 'Teknik Kimia', 1, 45, 6, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(382, 'Wiwin Mei Yunardi', 'Gegek Tengak', '1993-08-20', 'SP 3 Laburan Baru', 'L', NULL, 'tanahgrogot4@gmail.com', '081952780671', 'PDD Rintisan Politeknik Negeri Paser', 'Teknik Alat Berat', 1, 45, 6, 2017, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(383, 'Nurul Syafitri', 'Tanah Grogot', '1999-05-24', 'Jl. Pabrik Piring Gg. Qadar', 'P', NULL, 'syafitrinurul648@gmail.com', '085245060587', 'PDD Rintisan Politeknik Negeri Paser', 'Teknik Kimia', 1, 45, 6, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(384, 'Kiansyah', 'Pengguren', '1998-04-20', 'Desa Pengguren Jaya Jl. Panglima duyok RT 3 Kec. Batu Engau', 'L', NULL, 'Kiansyah@gmail.com', '082352067450', 'PDD Rintisan Politeknik Negeri Paser', 'Teknik Alat Berat', 1, 45, 6, 2017, 'PKD', 'TIDAK ADA', 'Aktif'),
(385, 'Diani Indriana', 'Buton', '1999-05-16', 'jl Di Panjaitan Rt 33 No 32', 'P', NULL, 'dianiindriana123@gmail.com', '082195265846', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(386, 'Habibah', 'Banjarmasin', '1998-11-10', 'Jl Bukit Cinta Rt 29', 'P', NULL, 'bibahh960@gmail.com', '085651183202', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(387, 'Nur Sufindi', 'Balikpapan', '2000-03-22', 'Jl manunggal Rt 24 No53', 'P', NULL, 'nursufindi22@gmail.com', '081258074458', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(388, 'Nur Oktafiani', 'Senipah', '1998-10-13', 'Jl letjen ZA Maulani Rt 42', 'P', NULL, 'nuroktavia909@gmail.com', '081345262290', 'Stiepan', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(389, 'Dara Ambiya', 'Balikpapan', '2001-08-30', 'JL Telindung Gang Nusa Indah', 'P', NULL, 'darabiyaa@gmail.com', '081253355214', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(390, 'Asfina Aldaniah', 'Balikpapan', '2001-08-22', 'Jl Sultan Hassanudin Rt 01 No 24', 'P', NULL, 'asinafina@gmail.com', '085248807399', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(391, 'Sofyan Darmawan', 'Balikpapan', '2000-04-15', 'Jl Klamono rt 72 No 51', 'L', NULL, 'sofyandarmawan00@gmail.com', '087812030710', 'Stiepan', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(392, 'Ryn Husein', 'Balikpapan', '1991-08-23', 'Jl Soekarno Hatta Km 7 No 45', 'L', NULL, 'diancladea@gmail.com', '082250097222', 'Stiepan', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(393, 'Annisa Marizki', 'Balikpapan', '1999-05-14', 'Perum PT Her Mandiri C no 1', 'P', NULL, 'annisamarizki@gmail.com', '081258203629', 'Stiepan', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(394, 'Rujianur Ainun B', 'Bekasi', '2001-10-20', 'Jl Marsma r Iswahyudi No 15', 'P', NULL, 'ainunjoya@gmail.com', '082350923592', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(395, 'Rinjani Dwi Atmila Putri', 'Merauke', '2000-02-26', 'Jl Mt Haryono Rt 40 Gg Sawo', 'P', NULL, 'putririnjani1212@gmail.com', '085828010156', 'Stiepan', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(396, 'Dwi Fitrianingsih', 'Jakarta', '2001-01-01', 'Perumaha Prona Indah Blok N 16 sepinggan', 'P', NULL, 'dwifningsih01@gmail.com', '085245266737', 'Stiepan', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(397, 'Anita Sari', 'Balikpapan', '1997-10-22', 'Jl Markoni Dalam Rt 08 No 33', 'P', NULL, 'anitasr22.as@gmail.com', '082255613733', 'Stiepan', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(398, 'Di Ajeng Diah Ayu Puspita Rini', 'Balikpapan', '2001-01-15', 'Jl Patimura Rt 49 No 77', 'P', NULL, 'riniajeng1209@gmail.com', '082253440264', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(399, 'Arlita Fira Denisa ', 'Balikpapan', '2001-05-10', 'Jl serobong no 27 Rt 24', 'P', NULL, 'arlitafiradenisa3@gmail.com', '085751340224', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(400, 'Amanda Riezka Amarelyana', 'Balikpapan', '2001-03-23', 'Jl DI Panjaitan Rt 06 No 88 Gn Samarinda', 'P', NULL, 'amandara23@gmail.com', '085388777373', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(401, 'Wynda Astuti', 'Padang', '2002-06-24', 'Jl Jend A Yani Rt 44 No 60', 'P', NULL, 'Wynda26a@gmail.com', '085536754415', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(402, 'Ika Maryana Meilana', 'Balikpapan', '2001-05-13', 'Taman Bukit Sari VIP ll Blok A1 No 3 Rt 24 Graha Indah', 'P', NULL, 'ikamaryana@gmail.com', '081350803840', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(403, 'Hikma Hasbi', 'Toli Toli', '1998-10-24', 'Jl Serindit lV No 102 Rt 07', 'P', NULL, 'hikmahasbi24@gmail.com', '082292520677', 'Stiepan', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(404, 'Siti Aisyah', 'Balikpapan', '2001-02-08', 'jl syarifuddin yoes No 125 Rt 48', 'P', NULL, 'sitiaisyah08@gmail.com', '085705413075', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(408, 'Andhika Wiranto Abd Wahid', 'Dambako', '1999-07-28', 'Jl Sungai Ampal Rt 43', 'L', NULL, 'andikaadika120@gmail.com', '085341746399', 'Stiepan', 'Akuntansi', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(409, 'Agus Priyono', 'Pasir Putih', '1996-02-13', 'jl karang jati dalam', 'L', NULL, 'aguspriyono13@gmail.com', '085395657175', 'Stiepan', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(410, 'Rahmat Adycahya', 'Balikpapan', '1999-06-23', 'jl sultan hasanuddin Rt 37 No 30', 'L', NULL, 'rahmatkbrc@gmail.com', '085732492925', 'Stiepan', 'Manajemen', 1, 35, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(411, 'Fera Nursyafitri', 'Lalibo', '2001-10-14', 'sepinggan baru Rt 38', 'P', NULL, 'feranur@gmail.com', '082346791261', 'Universitas Balikpapan', 'Sastra Inggris', 1, 38, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(412, 'Eva Widya Astuti', 'Bontang', '1997-10-29', 'perumahan bumi cempedak asri blok c no 3', 'P', NULL, 'evawidya29@gmail.com', '085787836728', 'Intitut Teknologi Kalimantan', 'Teknik Material', 1, 40, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(413, 'Muhammad Fazri Asidiki ', 'Sumedang', '1999-05-10', 'jl Gunung 4 Rt 23 No 48', 'L', NULL, 'fazriasidiki10@gmail.com', '083140858207', 'Staiba', 'Tarbiyah', 1, 37, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(414, 'Muhammad Yasir', 'Jenebora', '1997-03-09', 'Jenebora', 'L', NULL, 'myasir09@gmail.com', '085751923216', 'Staiba', 'Tarbiyah', 1, 37, 3, 2019, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(415, 'Riki Darmawan', 'Balikpapan', '1998-12-31', 'Jl Imus payau Rt 35', 'L', NULL, 'rikid446@gmail.com', '087883544707', 'Stiepan', 'Manajemen', 1, 35, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif'),
(416, 'Muhammad Ihsan', 'Balikpapan', '1999-08-11', 'Jl Telaga Sari rt 34 No 39', 'L', NULL, 'ichsanm569@gmail.com', '087846779261', 'Stiepan', 'Akuntansi', 1, 35, 3, 2018, 'MAPABA', 'TIDAK ADA', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) UNSIGNED NOT NULL,
  `nama_artikel` varchar(255) NOT NULL,
  `slug_artikel` varchar(255) NOT NULL,
  `gambar_artikel` varchar(255) NOT NULL,
  `isi_artikel` text DEFAULT NULL,
  `hits_artikel` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `nama_artikel`, `slug_artikel`, `gambar_artikel`, `isi_artikel`, `hits_artikel`) VALUES
(1, 'Usai Galang Dana, PMII Terobos Banjir Guna Penyaluran Dan Pelayanan Kesehatan.', 'usai-galang-dana-pmii-terobos-banjir-guna-penyaluran-dan-pelayanan-kesehatan', 'ggfjj.jpg', '<p>Duka yang mendalam dirasakan oleh korban banjir di wilayah samarinda yang tak kunjung surut, sebanyak kurang lebih 56.123 Warga terpaksa diungsikan karena terkena dampak banjir yang tersebar di 13 kelurahan dan 5 kecamatan di wilayah samarinda.</p>\r\n\r\n<p>merespon bencana tersebut, Puluhan Mahasiswa yang tergabung dalam Pergerakan Mahasiswa Islam Indonesia Komisariat Universitas Nahdlatul Ulama ( PMII Komisariat UNU Kaltim ) bersama dengan PMII Komisariat IAIN Samarinda Serta Program Studi Farmasi UNU Kaltim, mengadakan aksi penyaluran bantuan korban banjir berupa logistik dan keperluan lain serupa lilin, dan makanan siap saji di wilayah bengkuring raya RT. 08, pada jumat, 14/06/19. Lalu.</p>\r\n\r\n<p>Tak sampai di sana, PMII Komisariat UNU Kaltim yang juga bekerjasama dengan Program Studi Farmasi melaksankan pelayanan kesehatan pada warga, yaitu penyaluran obat-obatan, cek kesehata dan penyakit, serta pengecekan tekanan darah.</p>\r\n\r\n<p>warga sekitaran Jln. Bengkuring Raya terlihat sangat antusis dengan pelayanan kesehatan yang turun langsug ke rumah-rumah warga. &ldquo; Ini pada sakit demam semua, kutu air, gatal dan lain-lain, karena kemarin banjirnya setinggi dada orang dewasa, syukur ada bantuan obat ke sini, karena posko utama jauh di depan, ujar salah satu warga di RT. 8 Tersebut.</p>\r\n\r\n<p>Ketua PMII Komisariat UNU Kaltim sendiri menuturkan bahwa penyaluran dan pelayanan kesehatan kali ini adalah bersumber dari hasil galang dana yag telah dilakukan pada Rabu 12/06/19 lalu &ldquo; Hasil Galang dana sebesar Rp 1.700.000 yang kemudian kita alokasikan untuk obat-obatan dan logistik lainnya, alhamdulillahnya hari ini kami bisa lakukan pelayanan kesehatan langsung ke rumah warga yang terkena dampak banjir&rdquo; Ujar Mustofa Selaku Ketua Komisariat UNU kaltim.</p>\r\n\r\n<p>Penyaluran dan pelayanan kesehatan yang dimulai dari pukul 16:00 WITA dilaksanakan di seputaran jalan bengkuring raya RT. 08 kelurahan Sempaja Timur dan tuntas pada pukul 20:00 WITA.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>author : M. Adhamsyah P.</p>\r\n\r\n<p>Jabatan : Ketua Rayon (Persiapan) Sosial Pendidikan</p>\r\n\r\n<p>Liputan : jumat, 14/06/2019</p>\r\n', 117),
(2, 'Mahasiswa Si Penghisap Jempol', 'mahasiswa-si-penghisap-jempol', 'Topan_sudah_edit.jpg', '<p><em>Karena kami terlantar di jalan..</em></p>\r\n\r\n<p><em>Dan kamu memiliki semua keteduhan...</em></p>\r\n\r\n<p><em>Karena kami Kebanjiran..</em></p>\r\n\r\n<p><em>Dan kamu berpeseta di dalamnya..</em></p>\r\n\r\n<p><em>Maka kami tidak menyukaimu.....</em></p>\r\n\r\n<p><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>~Rendra, Sajak Orang Kepanasan</strong></em></p>\r\n\r\n<p><em>Bermodal alat tulis, meja, dan apatis...</em></p>\r\n\r\n<p><em>Kau dapatkanlah teori.</em></p>\r\n\r\n<p><em>Bermodal tulisan, bergerak dan rebut keberanian...</em></p>\r\n\r\n<p><em>Kau dapatkanlah jiwa Mahasiswa seutuhnya...</em></p>\r\n\r\n<p><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>~Topan Setiawan, Rayon Dakwah PMII Komisariat IAIN Samarinda</strong></em></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Berkaca pada keadaan diatas, kita hanya mengatakan pemerasaan dan kesenjangan. Itulah yang pantas dipelajari pada bangku kuliah. Rantai ketidakadilan ekonomi itu berawal jauh sekali: imperium Belanda memang tak berkenan Indonesia merdeka penuh. Tak hanya itu, kepemilikan asing tak bisa dinasionalisasi. Meski Soekarno dengan retorikanya mengutuk kapitalisme tapi usia kekuasaanya yang tak lama.<a href=\"#_ftn1\" name=\"_ftnref1\">[1]</a> Serdadu yang dibantu oleh kekuatan Internasional memukul mundur gagasan itu. Sosialisme yang dibayangkan oleh pancasila langsung musnah. Bersamaan dengan itu, investasi asing dengan kekuatan raksasa mulai menyerbu masuk. Hutan, minyak, emas dan batubara jadi bahan perdagangan Internasioanal. Penduduk yang tinggal di sekitarnya hanya jadi saksi dan duduk manis untuk menjadi seorang penonton yang manis. Soeharto sang tiran memulai pembangunan dengan mematuhi prinsip kapitalisme. Kuras seluruh kekayaan alam yang sudah diberikan kepada alam itu sendiri. Papua hingga Aceh jadi tempat dimana pembunuhan dilegalkan.<a href=\"#_ftn2\" name=\"_ftnref2\">[2]</a> Tak hanya itu, investasi asing melahirkan perbagai pembisinis tambang yang sedang menggerogoti kekayaan alam yang sudah dijaga turun-temurun kemurniannya oleh &nbsp;para <em>tottem-tottem</em><a href=\"#_ftn3\" name=\"_ftnref3\">[3]</a> penjaga alam suku dayak. Adapula jawa yang dipacu oleh pembanggunan dengan industrialisasi. Muncul gelombang pekerja pabrik yang diupah dengan seadanya dan tidak diberi hak berorganisasi. Sawah-sawah petani disita untuk pendirian pabrik. Kini, sawah dimanfaatkan untuk lahan perumahan mewah. Singkatnya, ekonomi digerakan melalui ancaman dan tekanan. Pola pembangunan ini didukung oleh hutang luar negeri. Bank dunia dengan maksud untuk mengail keuntungan. Dusta pembangunan berawal dari ketidakmampuan membereskan siklus ketergantungan. Indonesia dalam jeratan kapitalisme modal.<a href=\"#_ftn4\" name=\"_ftnref4\">[4]</a> Saat mata uang Thailand guncang maka efek menularnya merambat ke tahta soeharto.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hasil buruk dari keadaan itu adalah kekuasaan yang minim akan tanggung jawab. Siapa yang bisa diminta tanggung jawab ?, Siapa yang bisa ditunjuk untuk bertangung jawab jika angka hutang meroket ?, siapa yang mengingatkan dengan lantang bahwa bangsa ini sedang krisis moneter ?, Siapa yang dimintai pertanggung jawaban jika angka kemiskinan bertambah ?, Kita kemudian hanya mendapatkan berita dan cerita. Duka derita yang miskin hanya jadi berita yang kita semua dimintai untuk bela sungkawa. Ketegaran mereka yang lemah lalu dari cerita dimana-dimana. Lantas kita disuruh belajar pada mereka: Keteguhan, kesabaran dan ketangguhan. Maka, panggung kehidupan sosial bertabur dengan orang-orang bertabur pompaan harapan antara kepada si miskin dan si kaya. Hubungan diantara mereka bukan kontradiksi tapi harmoni. Pengetahuan jadi buhul yang mamayungi itu semua. Maka, Pendidikan tinggi hanya tempat peneguh mitos ketidakadilan dan ketidaksempurnaan sistem sosial.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cobalah kalian ingat Kuliah apa yang bisa membuat kalian berani ? Dosen siapa yang membuatmu tertantang untuk punya nyali ? Jika kuliah hanya deretan absensi dan ceramah basa-basi, maka pendidikan tinggi hanya menobatkan kalian jadi pemuda yang tak memiliki bakti. Padahal, sejak dulu tugas cendikiawan dan keadilan. Tanyakan pada dirimu sendiri, apa yang bisa kamu ubah dengan kuliahmu? Dirimu, lingkunganmu atau negaramu? Lalu,apa sebenarnya keinginanmu jika kuliah berjalan seperti ini? Berpalinglah sebentar pada apa yang melekat dalam dirimu:telepon genggam, laptop, celana hingga kartu mahasiswa. Seluruhnya itu menandakan statusmu sebagai apa: pelajar atau pengusaha?. Dua posisi yang kini tak bisa dibedakan artinya: mahasiswa dilatih menjadi pengusaha dan pengusaha mendidik mahasiswa. Rangkuman kedudukan itu disebut dengan kuliah wirausaha. Pertanyaanya ? untuk apa itu semuanya?. Menciptakan seorang pengusaha yang tidak memperdulikan masyarakat disekitarnya dan hanya memperdulikan kemampuan dan kedudukan tersendiri. Pengusaha yang berprinsip seperti ini disebut dengan masyarakat biadab. Mengapa demikian?, melahirkan dengan cetakan mahasiswa untuk di didik sebagai pengusaha maka apa jadinya bangsa ini apabila seluruh negara ini akan dipegang dengan pemuda-pemudi pencari uang. Kuliah kini punya tugas sederhana. Mengantarkan mahasiswa mendapatkan kerja. Di semua kampus terdapat karnaval lapangan kerja. Semua bentuk usaha dipamerkan dalam ruangan kuliah. Jika bisa mahasiswa sejak dini sudah mampu memegang kerja dan dapat mengelolah harta. Silahkan kamu lihat bagaimana kampusmu mempercantik dirinya ?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mau tahu bagaimana kampus memikat mahasiswa ? jalur masuk dibuat beraneka rupa. Bayaran kuliah bahkan disesuaiakan dengan penghasilan orang tua. Kampus menancapkan diri sebagai sumber laba dan sumber pencipta penguasa. Dimana lalu empati, solidaritas dan keberanian itu dilatihkan ?. Seorang ahli pendidikan berkata, &ldquo;pendidikan itu mengisyaratkan pengajaran. Pengajaran mengisyaratkan pengetahuan. Pengetahuan adalah kebenaran. Kebenaran, diamanpun, kapanpun itu sama aja!. Maka, jika pendidikan itu dimengerti secara benar, ia akan dipahami sebagai pemupukan kaum intelek. Ayo katakan padaku, mata kuliah apa yang kamu suka ? sebut padaku nilai kuliah apa yang membuatmu bangga?. Tanyakan padamu sendiri untuk apa itu semua?. Keberhasilan yang didapatkan diluar sana itu kuncinya hanyalah., <em>Jaringan</em> dan <em>dikenal </em>oleh dosen pada saat kita memiliki <em>softskill</em> yang diperlukan oleh kampus. Sehingga hal itu terbentuk dari adanya daya pikir imajinasi dalam menemukan ke kreatifitasan diri dan pengalaman yang cukup untuk menjadikan diri anda sebagai bekal untuk mengisi daya saing lowongan kerja. Sehingga apa yang kalian dapatkan dan duduk dibangku kuliah hanyalah sebagai pemanis kampus yang akan diperlukan apabila dibutuhkan. Ingat wahai mahasiswa !, Ir. Soekarno lahir dari sikap kritisnya sebagai mahasiswa melawan dan menuntut adanya mekanisme penjajahan yang sangat mengahancurkan harga diri bangsa<a href=\"#_ftn5\" name=\"_ftnref5\">[5]</a>. Misalkan, Seorang proklamator kemerdekaan Indonesia ini lebih memilih untuk menjadi seorang <em>karir</em> dan lebih condong bekerja pada staff atau pegawai kolonial sehingga hanya memikirkan perkembangan dari kekayaan pribadi untuk mengenyangkan perut semata pada saat itu. Akan jadi apa bangsa Indonesia sekarang ini. Dan misalkan pula, rezim kepimpinan Soeharto pada program kerja orde baru dengan masa 32 tahun lamanya yang seluruh masyarakatnya hanya dipaksa untuk mendengarkan apa yang disuapkan oleh pemerintah dan tidak memperbolehkan masyarakat untuk membantu mencerdaskan kehidupan bangsa pada saat itu. Dan Mahasiswa tidak mencoba berpikir untuk tidak bersatu menuntaskan permasalahan pada saat itu. Maka, akan banyak ribuan mayat dibunuh dan digeletakan begitu saja apabila tidak sesuai oleh jalan pemikiran kekuasaan pada saat itu. Apa jadinya bangsa ini kedepan ?</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Namun sekarang, gerakan-gerakan pada saat ini tidak terlihat pada diri mahasiswa. Seutuhnya. Mereka akan merasa asing dan sangat risih apabila melihat adanya Demonstrasi mengembalikan KTM (Kartu Tanda Mahasiswa) ke tangan mahasiswa, sangat risih melihat dirinya dibela oleh orang lain. Namun dirinya pribadi hanya menonton dan mencibir apa yang dilakukan oleh gerakan dari sebagian mahasiswa yang berfikir. Melihat para penguasa kampus merampas hak karya dari kreatifitas Mahasiswa yang telah ia kembangkan di ranah fakultas. Namun, hanya berdiam, mengeluh, kesal dan tidak melakukan apa-apa sehingga dimakan oleh waktu yang terus mengahampiri kita seolah-olah memaksakan kita untuk melupakannya sejenak. Sudah semua kekuatiran dan kesangsian atas gerakan mahasiswa, hanya mereka yang sanggup membawa bangsa ini menemukan harapannya, bukti sejarah telah meyakinkan pada kita: semua penguasa jatuh di Negeri ini oleh tekanan mahasiswa. Kini saatnya gerakan mahasiswa bangkit kembali. Menyuarakan apa yang selama ini hanya jadi kereasahan dan keluhan. Tuntut kedaulatan yang telah lama hilang. Rebut semangat dari tangan mereka yang penakut. Sudah saatnya engkau sadar. Siapakah Mahasiswa itu sebenarnya ?. Menjadi penganggum materi yang lulus cepat dan menunggu adanya pemanggilan lowongan pekerjaan atau bangkit dan temukan jati diri mahasiswa yang dikenal oleh kalangan sahabat yang siap membantumu meraih impianmu dan bangsa ini.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jalanan itu menjadi saksi bisu. Diatasnya pernah terekam jejak banyak kaki. Kaki anak-anak muda yang menyimpan amarah dan protes. Terutama pada kekuasaan para jahannam yang mengabaikan keadilan. Bukan saja keadilan itu ditunda untuk dipenuhi melainkan juga sengaja dikhianati. Hukum yang di puja-puja ini tak berlaku untuk semua orang. Selalu saja penguasa dan jutawan dipuja-puja diperlakukan pula dengan istimewa. Teringat dengan kata <em>Victor Serge</em> <a href=\"#_ftn6\" name=\"_ftnref6\">[6]</a> dengan perkataanya yang lantang ia mengatakan: &ldquo;<em>Kau ingin jadi apa ? pengacara, untuk mempertahankan hukum kaum kaya, yang secara inheren tumpul keatas dan tajam kebawah?. Dokter, untuk menjaga kesehatan kaum kaya, dan menganjurkan makanan yang sehat, udara yang baik, dan waktu istirahat kepada mereka yang memangsa kaum miskin?. Arsitek, untuk memangun rumah nyaman untuk tuan tanah?. Lihatlah di sekililingmu dan periksa hati nuranimu. Apa kau tak mengerti bahwa tugasmu adalah sangat berbeda: untuk bersekutu dengan kaum tertindas. Dan menolong anak-anak yang sedang mengunyak plastik untuk perut yang sedang mengamuk&rdquo;</em></p>\r\n\r\n<p><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em>Jalanan itu juga merekam adegan peluru yang dihamburkan dan menumpas nyawa banyak mahasiswa yang bersimbah darah di dada dan tercecer di jalanan. Walau tak ada yang memastikan suara nyalak senapan dari mana-mana;dari situlah para penguasa tidak menggunakan kekuasaan yang kehabisan akal sehatnya. Kini, jalanan itu telah mengukir banyak peristiwa. Dulu, disana tertempel banyak pesan pembangunan. Kini, tiang itu memancung gambar muka para pejabat dan iklan produk. Dulu, pers mahasiswa selalu menempelkan isu-isu perlawanan yang selalu memberikan bahan bakar api semangat kepada kaum mahasiswa untuk menyisingkan lengan baju memberantas kezhaliman yang sangat merugikan mahasiswa lainnya. Tingkat solidaritas seorang mahasiswa seperti lebah yang berkecampuk apabila ada satu lebah yang ia sakiti. Seperti seekor kucing yang apabila ditarik ekornya ke arah yang berlawanan akan menyerang siapapun yang berani melakukan kepadanya walaupun ukurannya lebih besar daripada lawannya. Namun sekarang kenyataanya, mahasiswa seperti penghisap jempol yang takut akan absensi dan manut kepada mata kuliah. Kompetisi IPK dan menjilat perhatian dosen sebagai tujuan utama para mahasiswa dalam berkuliah. Mereka tidak menyadari, apabila kita para mahasiswa di didik untuk menjadi seorang pesaing untuk memperebutkan nilai yang diakui dapat mencetak generasi yang mengahalalkan berbagai macam cara. Sebab mahasiswa terbiasa dengan berlomba-lomba untuk mendapatkan nilai tertinggi agar dapat disanjung oleh semua orang. Hal ini akan melahirkan sebuah pemikiran yang tidak ingin memperdulikan masyarakat kalangan bawah. Tidak ingin melihat, bahwa ada orang yang sedang menangis mencari sesuap nasi untuk anaknya. Tidak ingin melihat seorang anak kecil yang sedang menjajakan sebuah makanan ringan untuk mencukupi kebutuhannya dirumah. Karena ia sangat terfokus kepada tujuannya untuk mengahcurkan lawannya yang sedang menduduki kedudukan penting yaitu kedudukan sebagai mahasiswa dengan IPK tertinggi di lokalnya. Dan adapula sebagian mahasiswa yang sangat memiliki jiwa agamis yang lebih mementingkan amal perbuatannya sendiri ketimbang melihat kenyataan sebenarnya bahwa ada orang yang sedang membutuhkan pertolongannya pada saat itu. Ingatlah wahai mahasiswa agamis, bahwa BAZNAS ( Badan Amil Zakat Nasional) sendiri tidak akan memberikan bantuan kepada orang yang hanya mementingkan ibadahnya saja dan tidak mau berusaha untuk mencari pekerjaan untuk mencukupi kehidupannya. Sebab dalam dalil hadist yaitu Dari &lsquo;Umar bin Khaththab&nbsp;<em>radhiyallahu&rsquo;anhu</em>, dari Rasulullah&nbsp;<em>shallallahu &lsquo;alaihi wa sallam</em>, beliau bersabda :</p>\r\n\r\n<p>لَوْ أَنَّكُمْ كُنْتُمْ تَوَكَّلُونَ عَلَى اللَّهِ حَقَّ تَوَكُّلِهِ لَرُزِقْتُمْ كَمَا يُرْزَقُ الطَّيْرُ تَغْدُو خِمَاصًا وَتَرُوحُ بِطَانًا</p>\r\n\r\n<p>&ldquo;<em>Seandainya kalian sungguh-sungguh bertawakal kepada Allah, sungguh Allah akan memberi kalian rezeki sebagaimana Allah memberi rezeki kepada seekor burung yang pergi dalam keadaan lapar dan kembali dalam keadaan kenyang &ldquo;&nbsp;</em>(HR.&nbsp;Imam Ahmad, Tirmidzi, Nasaai, Ibnu Majah, dan Ibnu Hibban, dan Al Hakim. Imam Tirmidzi berkata : hasan shahih)</p>\r\n\r\n<p>Hadist ini merupakan pokok dalam masalah tawakal kepada Allah&nbsp;<em>&lsquo;Azza wa Jalla.&nbsp;</em>Tawakal yang benar harus disertai dengan mengambil sebab yang disyariatkan. Mengambil suatu sebab bukan berarti menafikan (meniadakan) tawakal. Rasulullah yang merupakan imamnya orang yang bertawakal, ketika beliau memasuki kota Mekah pada saat peristiwa Fathul Mekah beliau tetap menggunakan pelindung kepala (ini menunjukkan beliau mengambil sebab untuk melindungi diri beliau).<a href=\"#_ftn7\" name=\"_ftnref7\">[7]</a> Nah mahasiswa, sedangkan Rasulullah SAW sendiri masih melindungi diri kemudian menyerahkan dirinya kepada Allah SWT. Berusaha dulu baru bertawakal.</p>\r\n\r\n<p>Intinya, Mahasiswa masih maukah seperti yang engkau lakukan sekarang ini? , atau bangkit !</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ditulis Oleh : Topan Setiawan</p>\r\n\r\n<p>Ketua Rayon Dakwah Komisariat IAIN Samarinda</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p><a href=\"#_ftnref1\" name=\"_ftn1\">[1]</a> Ir. Soekarno, &ldquo;<em>Dibalik bendera Revolusi&rdquo;</em>(Jakarta, Yayasan Bung Karno, 2005)&nbsp; h. 54</p>\r\n\r\n<p><a href=\"#_ftnref2\" name=\"_ftn2\">[2]</a> Eko Prasetyo, &ldquo; <em>Bangkitlah Gerakan Mahasiswa&rdquo;</em>(Malang, intrans Publshing;2015) h. 31</p>\r\n\r\n<p><a href=\"#_ftnref3\" name=\"_ftn3\">[3]</a> Gelar atau penggolongan pada suku dayak yang diberikan oleh ketua suku kepada orang-orang tertentu yang&nbsp; telah dipercaya.</p>\r\n\r\n<p><a href=\"#_ftnref4\" name=\"_ftn4\">[4]</a> Ayu Saung, &ldquo;<em>Catatan catatan Dari Bawah Tanah&rdquo;</em> (Jakarta:LP3ESS,2004) h. 34</p>\r\n\r\n<p><a href=\"#_ftnref5\" name=\"_ftn5\">[5]</a> Ir. Soekarno, &ldquo;<em>Dibalik bendera Revolusi&rdquo;</em>(Jakarta, Yayasan Bung Karno, 2005)&nbsp; h. 23</p>\r\n\r\n<p><a href=\"#_ftnref6\" name=\"_ftn6\">[6]</a></p>\r\n\r\n<p><a href=\"#_ftnref7\" name=\"_ftn7\">[7]</a> Ahmad Ali in hajar al _Asqalani, ( Damaskus, Matrbah Dar-Al-Fhila), h. 409</p>\r\n', 303),
(3, 'Pernyataan Sikap PKC PMII KALTIMRA Terhadap Tindakan Represif', 'pernyataan-sikap-pkc-pmii-kaltimra-terhadap-tindakan-represif', 'WhatsApp_Image_2019-08-06_at_11_55_13.jpeg', '<p>PRESS RILIS : Pernyataan sikap PKC PMII KALTIMRA Terhadap tindakan represif&nbsp;<br />\r\n&bull; &nbsp;&bull; &nbsp;&bull; &nbsp;&bull; &nbsp;&bull;<br />\r\nAksi yang dilakukan cipayung kota bandung yang terdiri dari (PMII, &nbsp;GMNI, &nbsp;GMKI, PMKRI, HMI) didepan Gedung DPRD mengarah pada Pempercepatan kasus korupsi.</p>\r\n\r\n<p>Pada saat Pukul 12.30 Wib, masa aksi berakhir ricuh setelah pihak kepolisian melakukan tindakan represif dengan membubarkan paksa serta memukul masa aksi, tindakan tersebut terjadi dikarenakan DPRD tidak mau menerima tuntutan massa Aksi.</p>\r\n\r\n<p>Dari tindakan represif tersebut, ada tujuh orang mengalami luka-luka ringan dan tiga orang lainya berat dan harus dilarikan ke Rumah Sakit yaitu sahabat Tyas Azis Arifin, Angga Narendra (PMII Bandung) dan bung M Rafi Ghariza (GMNI Bandung).<br />\r\n&nbsp;<br />\r\nMaka dari itu, dengan berlandaskan kemanusiaan. PKC PMII KALTIMRA menyatakan sikap Mengutuk keras serta meminta POLDA JABAR untuk mengusut tuntas tindakan pemukulan yang dilakukan olehoknum kepolisan dengan melakukan visum terhadap korban terkait serta mendorong Kapolres Kota Bandung untuk bertanggungjawab atas kejadian tersebut.</p>\r\n\r\n<p>Terlepas dari kasus pemukulan yang terjadi Aliansi Cipayung tetap Bersepakat untuk fokus pada tuntutan yang dibawa diantaranya:</p>\r\n\r\n<p>1. Menuntut DPRD Kota Bandung untuk bertanggungjawab atas penuntasan kasus korupsi dan penyalahgunaan wewenang dengan fungsi legislatifnya untuk mengontrol jalanya eksekutif.</p>\r\n\r\n<p>2. Menuntut Walikota Bandung untuk mengevaluasi jajaran pejabatnya serta kebijakan-kebijakan yang merugikan masyarakat Kota bandung.</p>\r\n\r\n<p>3. Menuntaskan kasus pengyalahgunaan Jabatan (Korupsi RTH, PD Pasar dan PD AM) yang merugikan uang negara sebesar 125,5 M serta harus bertanggungjawab kepada masyarakat Kota Bandung.</p>\r\n\r\n<p>4. Bongkar Kebobrokan pejabat lainnya yang terindikasi melakukan praktek korupsi dampak dari penyalahgunaan jabatan.</p>\r\n\r\n<p>Samarinda, &nbsp;06 agustus 2019</p>\r\n\r\n<p>Salam pergerakan!!!&nbsp;<br />\r\nJika dadamu bergetar melihat ketidakadilan maka engkaulah saudaraku<br />\r\nMendiamkan Kesalahan Adalah Kejahatan</p>\r\n\r\n<p>TTD<br />\r\nPanji SN, S.T (ketua PKC PMII KALTIMRA)&nbsp;</p>\r\n\r\n<p>Abdul kohar MT (Sekretaris PKC PMII KALTIMRA)</p>\r\n', 107),
(4, 'PKC Kaltimra Turut Berduka Atas Wafatnya Anggota Polisi Saat Mengamankan Aksi Mahasiswa Di Cianjur', 'pkc-kaltimra-turut-berduka-atas-wafatnya-anggota-polisi-saat-mengamankan-aksi-mahasiswa-di-cianjur', 'foto-press-release-pkc.JPG', '<p>&ldquo;Telah gugur putra terbaik Polri Polda Jabar dalam melaksankan tugas , Ipda Erwin Yudha Wildani &lsquo;Kata Kabid Humas Polda Jabar Kombes Trunoyudo Wisnu Andiko dalam Keterangannya&rdquo;. Senin (26/8/2019).</p>\r\n\r\n<p>Pengurus Koordinator Pergerakan Mahasiswa Islam Indonesia menyampaikan duka cita mendalam atas meninggalnya Ipda&nbsp;<a href=\"https://akurat.co/indeks?tag=Erwin+Yudha+Wildani\"><strong>Erwin Yudha Wildani</strong></a>, anggota polisi yang terbakar saat mengamankan demo mahasiswa di depan kantor pemerrintahan &nbsp;Kabupaten&nbsp;<a href=\"https://akurat.co/indeks?tag=Cianjur\"><strong>Cianjur</strong></a>&nbsp;beberapa waktu lalu.</p>\r\n\r\n<p>&ldquo;PKC PMII Kaltimra mendoakan agar beliau di ampuni segala dosa-dosanya, husnul khotimah dan keluarga yang ditinggalkan diberi kesabaran serta untuk para korban lainnya segera di beri kesehatan&quot; kata Ketua PKC Kaltimra&nbsp; Panji Sukma Nugraha Samarinda , Rabu&nbsp; (28/8/2019).</p>\r\n\r\n<p>Ketua PKC Kaltimra yang juga Mahasiswa Pasca Sarjana Universitas Mulawarman meminta pihak kepolisian agar memproses pelaku pembakaran sesuai dengan aturan hukum yang berlaku di Indonesia.Penyampaian pendapat di muka umum memang tidak dilarang tapi kita juga harus paham dan mengerti aturan jangan sampai keluar koridor sehingga menimbulkan korban dan fatalnya sampai meninggal dunia. Ini menjadi evaluasi dan PR kita bersama Tegasnya</p>\r\n\r\n<p>Semoga kedepan hal-hal yang seperti ini tidak terulang kembali, sekali lagi Panji sukma mewakili&nbsp; keluarga Besar Pergerakan Mahasiswa Islam Indonesia Kalimantan Timur-Utara mengucapkan bela sungkawa yang sedalam-dalamnya.</p>\r\n', 228),
(5, 'Papua Adalah Kita, Papua Adalah Indonesia', 'papua-adalah-kita-papua-adalah-indonesia', 'WhatsApp_Image_2019-09-04_at_16_53_24.jpeg', '<p>Belajar dari sejarah dan pengalaman hidup tentunya tidak membuat kita semakin terbelakang, namun hal itu perlu dalam menentukan langkah kita ke depan agar lebih baik. Peristiwa kerusuhan yang terjadi di Papua harusnya tidak terjadi, karena kita tahu betul dengan semboyan &ldquo;Bhineka Tunggal Ika&rdquo; yang selama ini banyak didengungkan. Namun rupanya semboyan tersebut hanya sebatas tulisan &ldquo;tak bermakna&rdquo; dalam pengimplementasiannya. Berbeda-beda tetap satu jua, itulah kiranya arti dari semboyan yang sering kita dengar. Perbedaan bukan menjadi <em>barrier</em> untuk saling menjalin persatuan dan kesatuan tanpa melihat agama, ras, suku, dan budayanya. Berawal peristiwa mahasiswa Papua di Malang yang bentrok dengan warga yang berujung ricuh, kerusuhan manokwari dan hingga insiden yang menggugurkan 1 TNI dan 2 warga sipil di deiyai. Setalah 1/2 Jam setelah kejadian, Kantor Berita Reuters yang berpusat di London membuat berita yang menyatakan 6 warga sipil tewas di tangan apparat.Semua berjalan dengan cepat dan anehnya seperti dikoordinir dengan sistematis.&rdquo;<em>Tidak ada yang kebetulan dalam politik.kalau ada yang kebetulan, berarti itu telah di rencanakan!</em>&rdquo;-Franklin D Roosvelt, Presiden Amerika ke-36.</p>\r\n\r\n<p>Peristiwa yang seakan berbau propaganda ini menimbulkan &ldquo;efek domino&rdquo;. Bermunculan unjuk rasa yang terjadi di beberapa titik daerah Papua dan Papua Barat disertai kerusuhan dan menimbulkan kerusakan pada 19-20 Agustus 2019. Tidak hanya di Papua, aksi protes hingga tuntutan referendum terjadi di beberapa wilayah di Jawa. Tujuannya&nbsp; Apa? Disintegrasi Indonesia. Indonesia mau dimutilasi dimulai dari Papua! Belajar dari pengalaman Timor Timur,&nbsp; pemerintah sudah seharusnya takkan pernah menurut pada upaya disintegrasi bangsa. Pada kasus Timor Timur, Mayoritas Rakyat menginginkan tetap bersama NKRI. Namun fakta di TPS, Timor Timur Pisah.</p>\r\n\r\n<p>Konflik Papua ini membuka mata kita untuk sadar bahwa Papua adalah kita. Papua adalah &ldquo;intan permata&rdquo; bangsa kita yang harus kita genggam erat dan tuntun secara beriringan. Sensitifitas etnis dan budaya kemasyarakatan yang rentan menimbulkan gesekan ini, harus diakomodir dengan tepat. Sehingga, tidak ada lagi kesalahpahaman dan masyarakat tidak mudah terprovokasi. Tidak ada lagi kepentingan-kepentingan yang menimbulkan konflik dan adu domba antar anak bangsa. Sudah cukup! mari Bersama-sama kita lepaskan baju kebesaran kita (red:keangkuhan) demi menjaga keutuhan. &quot;Sejengkal Tanahpun Takkan Kita Serahkan Pada Lawan, Tapi Akan Kita Pertahankan Habis - Habisan!&quot;</p>\r\n\r\n<p>Kita bisa belajar pada Gus Dur dalam merangkul Papua. Gus Dur dikenal berjasa dalam mengangkat harkat dan martabat masyarakat Papua sebagai sesama warga bangsa Indonesia. Kita tidak ingin seperti Soviet yang terpecah menjadi 15 negara atau mengulang sejarah negara-negara boneka bentukan Belanda dalam Republik Indonesia Serikat. Indonesia memiliki hak penuh mempertahankan Negaranya.&nbsp; Tidak ada satupun orang,organisasi atau negara lain yang boleh mendikte apa yang harus Indonesia lakukan untuk menjaga keutuhan negaranya. Ingatlah jasa para veteran Operasi Amfibi terbesar di Indonesia dalam operasi Jaya Wijaya yang melibatkan 1000 wahana tempur dan 16000 Pasukan TNI yang siap membela Papua kedalam pelukan NKRI. Jangan sampai tangis air mata veteran operasi seroja Timor Timur, terulang kembali membasahi tanah Indonesia karena lepasnya papua. Jangan sampai anak cucu kita membaca buku sejarah di sekolah,tentang pernah adanya Negara Kesatuan Republik Indonesia yang terpecah menjadi negara-negara kecil di masa depan nanti.</p>\r\n\r\n<p>Pemerintah tidak perlu khawatir dalam menangani kerusuhan bahwa negara-negara di dunia seolah mendukung adanya keinginan referendum. Masyarakat internsional paham bahwa kerusuhan di bumi Papua bukan akibat pemerintah yang opresif terhadap masyarakat di Papua. Bahkan masyarakat internasional sudah sejak lama mengakui bumi Papua merupakan bagian kesatuan dari Indonesia. Masyarakat internasional tidak pernah mempermasalahkan keberadaan bumi Papua layaknya Timor Timor saat dinyatakan oleh pemerintah Indonesia berintegrasi. Oleh karenanya pemerintah harus punya percaya diri yang tinggi untuk menyelesaikan kerusuhan di bumi Papua secara tegas, bermartabat dan cepat.</p>\r\n\r\n<p>&ldquo;Kita ini sama karena kita adalah Indonesia&rdquo;</p>\r\n\r\n<p>&ldquo;Panji Sukma Nugraha Ketua PKC PMII Kaltim-Kaltara Mahasiswa Pascasarjana Universitas Mulawarman &ldquo;</p>\r\n', 119),
(6, 'Ketua Mabincab PC PMII Samarinda Turut Sukseskan Silaturahmi Akbar', 'ketua-mabincab-pc-pmii-samarinda-turut-sukseskan-silaturahmi-akbar', 'WhatsApp_Image_2019-09-16_at_10_55_10.jpeg', '<p>(12 September 2019) Silaturahmi Akbar yang diselenggarakan oleh Rayon Syariah Komsat IAIN Samarinda di Sekretariat Rayon jalan HM. Rifaddin, Kel. Harapan Baru, Kec. Loa Janan Ilir, Samarinda. Kegiatan ini bertujuan untuk memperkuat tali persahabatan antar kader sebagai aktualisasi nilai dasar pergerakan yaitu Habluminannas (hubungan Sesama Manusia).</p>\r\n\r\n<p>Puluhan kader dan Anggota yang hadir pada Kegiatan Silaturahmi ini termasuk para pimpinan di tingkat kepengurusan dalam PMII mulai dari Pengurus Koordinator Cabang Kalimantan Timur dan Utara, PC PMII Kota Samarinda, Komisariat IAIN Samarinda dan 5 Rayon yang berada di bawah jalur kordinasi Komisariat IAIN Samarinda.</p>\r\n\r\n<p>Dalam kegiatan ini turut hadir juga Dekan Fakultas Syariah IAIN Samarinda Sahabat Dr. Bambang Iswanto, MH. Beliau merupakan Salah Satu Alumni pergerakan sekaligus sebagai Ketua Majelis Pembina PC PMII Kota Samarinda periode 2019/2020 yang masih peduli dengan dinamika dan pengkaderan di dalam PMII. Contohnya pada kegiatan ini beliau bisa menyempatkan waktunya untuk bisa bertemu dan bertatap muka dengan para sahabat PMII.&nbsp;</p>\r\n\r\n<p>Dalam sambutannya Ketua Mabincab PC PMII Kota Samarinda berpesan kepada seluruh kader dan anggota PMII Samarinda untuk menjunjung tinggi nilai persatuan Indonesia. Kenapa Indonesia bisa berdiri kokoh dalam rongrongan pemecah persatuan bangsa karena Indonesia memiliki PBNU : Pancasila, Bhinneka Tunggal Ika, Negara Kesatuan Republik Indonesia dan UUD 1945.&nbsp;</p>\r\n\r\n<p>Selanjutnya Bersyukurlah ketika menjadi keluarga besar PMII. Karena PMII adalah organisasi yg dinamis. Hal ini teraktualisasi dalam kata Pergerakan. Sehingga jati diri sebagai seorang pergerakan akan terlihat tampak.<br />\r\nKemudian, Jadikanlah PMII ini sebagai organisasi yg selalu sesuai tujuan dan cita cita organisasi. Perkuat gerakan Intelektual sebagai kunci menghadapi tantangan sehingga kader PMII bisa ikut ambil bagian dan bukan jadi penonton dalam kemajuan bangsa ini. Tokoh bangsa di Negeri ini tidak pernah diam, jadi teruslah melakukan pergerakan.&quot; tutup beliau.</p>\r\n\r\n<p>Disela sela kegiatan ini Ketua PC PMII Kota Samarinda diberi amanah oleh ketua Rayon Syariah mewakili seluruh Alumni untuk menyampaikan pesan harapan kepada kader dan Anggota Rayon Syariah.<br />\r\nDalam pesannya, Tetaplah semangat Berproses di pergerakan, jangan pernah lelah, dan jangan mengharapkan hasil dari proses dengan seketika tapi lihatlah hasil proses itu 5 tahun atau 10 tahun akan datang. Selain itu Jaga nama baik organisasi dan bangga berorganisasi di PMII. Tutupnya&quot;</p>\r\n\r\n<p>Terakhir sebagai penutup, dalam wawancara dengan Plt Ketua Rayon Syariah sahabat Usamah menyampaikan rasa syukur dan ucapan terima kasih atas antusias sahabat PMII Kota samarinda pada kegiatan ini ditambah lagi dihadiri pimpinan di masing kepengurusan PMII.&nbsp;<br />\r\n(Jie)</p>\r\n', 235),
(7, 'Menjelang Pelantikan Presiden & Wakil Presiden, PMII Kaltimra Berharap Lancar', 'menjelang-pelantikan-presiden-wakil-presiden-pmii-kaltimra-berharap-lancar', 'WhatsApp_Image_2019-10-19_at_16_45_50.jpeg', '<p>Indonesia akan memasuki babak baru setelah kita melewati pesta demokrasi pada tanggal 17 April 2019 lalu.Pada tanggal 20 oktober mendatang akan dilaksanakan Pelantikan Presiden dan Wakil Presiden RI. Secara Konstitusional Jokowi &ndash; Ma&rsquo;ruf merupakan Presiden terpilih maka kita sebagai warga Negara yang baik patut bersyukur dan mendukung kabinet baru yang akan bekerja 5 tahun kedepan demi masa depan bangsa dan Negara lebih baik.&rdquo; Ujar Panji Sukma Nugraha Ketua PKC PMII Kaltimra Jum&rsquo;at (18/10/19)</p>\r\n\r\n<p>Selanjutnya Panji mengatakan bahwa kondisi bangsa hari sedang tidak baik-baik saja. Banyak upaya yang dilakukan oleh oknum yang tidak bertanggung jawab demi terciptanya suasana tidak kondusif dan terciptanya perpecahan antar sesama anak bangsa. Oleh karena itu kita sebagai anak bangsa khusus generasi muda penerus bangsa untuk bersama-sama untuk menjaga perdamaian dan melawan berbagai macam provokasi yang bertujuan untuk mengagalkan pelantikan presiden dan wakil presiden serta menghimbau kepada seluruh masyarakat Kaltim untuk menjaga ketertiban, ketenangan dan perdamaian</p>\r\n\r\n<p>Kita harus jeli dan cerdas menyikapi segala macam informasi atau berita-berita HOAX yang beredar di media sosial serta pergerakan yang dapat memicu hal-hal di luar aturan hokum di Negara kita, sebisa mungkin kita menghindari berbagai macam bentuk provokasi dari pihak-pihak yang tidak bertanggung jawab yang mengandung ujaran kebencian</p>\r\n\r\n<p>Terakhir Panji menekankan sebagai generasi muda yang cinta dengan NKRI, mari sama &ndash; sama mengawal pelantikan ini agar berjalan kondusif .</p>\r\n\r\n<p>&ldquo;Harapan kami kepada Presiden terpilih dan Wakil Presiden, Bisa Membawa Negara kita Indonesia semakin maju dan lebih kuat lagi dalam berbagai hal yang di butuhkan bangsa ini. Semoga amanah dalam memimpin 5 tahun kedepan dan bekerja semaksimal mungkin, sehingga pemerataan kesejahteraan masyarkat Indonesia segera dapat terwujud.<br />\r\nSalam Pergerakan Jayalah Indonesiaku damailah Negeriku.&rdquo; Tutup Panji</p>\r\n', 45),
(8, 'PC PMII Kota Samarinda Kecam Penyerangan Sekretariat PMII Di Makassar', 'pc-pmii-kota-samarinda-kecam-penyerangan-sekretariat-pmii-di-makassar', 'WhatsApp_Image_2019-11-21_at_2_25_23_PM.jpeg', '<p>Beredarnya kabar terkait penyerangan sekretariat PMII Kota Makassar membuat luka yang dalam bagi warga pergerakan pasalnya PMII terkenal sebagai organisasi moderat yang tak pernah terlibat masalah apapun. Namun dengan kegaduhan ini, tidak hanya menimbulkan kecemasan bagi warga masyarakat sekaligus juga menimbulkan kekecewaan terkait aksi terror yang tentunya sudah selayaknya diusut tuntas pelakunya.</p>\r\n\r\n<p>Terkait dengan hal tersebut, Pengurus Cabang Pergerakan Mahasiswa Islam Indonesia (PC PMII) Kota Samarinda menyatakan sikap, mengecam keras aksi penyerangan yang menimpa anggota PMII Makassar di sekretariatnya. Penyerangan tersebut terjadi sekitar pukul 03:00 WIT, 17 November 2019.</p>\r\n\r\n<p>&ldquo;Saya atas nama PMII Kota Samarinda, mengecam penyerangan di sekretariat PMII Makassar dan mendesak pihak berwajib agar segera mengusut tuntas kejadian tersebut,&rdquo; ujar Ketua PC PMII kota Samarinda Aji Faisal, Selasa (19/11).</p>\r\n\r\n<p>Menurut Aji, awanya ia mendapat informasi dari pemberitaan di media online, lalu mengkonfirmasi langsung kepada Ketua PC PMII Kota Makassar, penyerangan sekretariat PMII Makassar dilakukan oleh orang tidak dikenal (OTK), mengakibatkan seorang korban luka-luka yang merupakan anggota PMII. Korban terkena busur panah di bagian perut dan di bagian bawah mata kiri.</p>\r\n\r\n<p>&ldquo;Tentu saja penyerangan tersebut tidak bisa dibenarkan apapun motifnya, ada pelemparan bom molotov dan anak panah sampai jatuh korban luka, pihak berwajib harus bergerak cepat agar dapat memberikan rasa aman kepada warganya, jangan sampai berlarut-larut,&rdquo; tuntasnya.</p>\r\n', 126);

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(11) NOT NULL,
  `nama_cabang` varchar(255) DEFAULT NULL,
  `alamat_cabang` text DEFAULT NULL,
  `email_cabang` varchar(255) DEFAULT NULL,
  `telepon_cabang` varchar(15) DEFAULT NULL,
  `berdiri_cabang` int(5) DEFAULT NULL,
  `status_cabang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`, `alamat_cabang`, `email_cabang`, `telepon_cabang`, `berdiri_cabang`, `status_cabang`) VALUES
(1, 'Bukan Cabang', NULL, NULL, NULL, NULL, NULL),
(2, 'Samarinda', 'Jl. Pasundan, Perum. Pasundan Permai, Kel. Jawa, Samarinda Ulu, Kota Samarinda', 'ajiefaisal10.af@gmail.com', '085389384183', 0, 'Definitif'),
(3, 'Balikpapan', NULL, NULL, NULL, NULL, NULL),
(4, 'Kutai Kartanegara', NULL, NULL, NULL, NULL, NULL),
(5, 'Kutai Timur', 'Jl. Inpres Gg Daya Karya', 'pmii_kutim@yahoo.com', '082394314143', 2007, 'Definitif'),
(6, 'Paser', NULL, NULL, NULL, NULL, NULL),
(7, 'Tarakan', NULL, NULL, NULL, NULL, NULL),
(8, 'PC PMII BULUNGAN', 'JL. SENGKAWIT, KEL.TANJUNG SELOR HILIR, KEC. TANJUNG SELOR, KAB. BULUNGAN, KAB. BULUNGAN, PROV, KALIMANTAN UTARA', 'pmiibulungan@gmail.com', '081258450596', 2016, 'Definitif');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) UNSIGNED NOT NULL,
  `nama_galeri` varchar(255) NOT NULL,
  `gambar_galeri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_galeri`, `gambar_galeri`) VALUES
(3, 'Pelayanan Kesehatan', '1.jpg'),
(4, 'Pelayanan Kesehatan', '2.jpg'),
(5, 'Aksi Galang Dana PK UNU Kaltim', '3.jpg'),
(6, 'Terobos Banjir Penyaluran Logistik', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) UNSIGNED NOT NULL,
  `alamat_informasi` text DEFAULT NULL,
  `email_informasi` varchar(255) DEFAULT NULL,
  `telepon_informasi` varchar(15) DEFAULT NULL,
  `facebook_informasi` varchar(255) DEFAULT NULL,
  `instagram_informasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `alamat_informasi`, `email_informasi`, `telepon_informasi`, `facebook_informasi`, `instagram_informasi`) VALUES
(1, 'Jalan Rapak Indah Gang Ramadhan', 'pmii@pkckaltimra.com', '085246805241', 'https://www.facebook.com/adminpkcpmii/', 'https://www.instagram.com/adminpkcpmii/');

-- --------------------------------------------------------

--
-- Table structure for table `komisariat`
--

CREATE TABLE `komisariat` (
  `id_komisariat` int(11) NOT NULL,
  `nama_komisariat` varchar(255) DEFAULT NULL,
  `cabang_id` int(11) DEFAULT NULL,
  `alamat_komisariat` text DEFAULT NULL,
  `email_komisariat` varchar(255) DEFAULT NULL,
  `telepon_komisariat` varchar(15) DEFAULT NULL,
  `berdiri_komisariat` int(5) DEFAULT NULL,
  `status_komisariat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komisariat`
--

INSERT INTO `komisariat` (`id_komisariat`, `nama_komisariat`, `cabang_id`, `alamat_komisariat`, `email_komisariat`, `telepon_komisariat`, `berdiri_komisariat`, `status_komisariat`) VALUES
(1, 'Belum Ada Komisariat', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Universitas Nadhdlatul Ulama Kaltim', 2, 'jalan harun nafsi gang darma rapak dalam, samarinda seberang', 'pmiiunukt@gmail.com', '08115544266', 2015, 'Definitif'),
(3, 'IAIN Samarinda', 2, 'Jln. H.A.M Rifaddin Kec. Loa Janan Ilir, Kampus II IAIN Samarinda', 'putra.holic11@gmail.com', '085387767955', 0, 'Definitif'),
(4, 'Universitas Mulawarman', 2, 'JL. G. Kelua metro universitas mulawarman', 'pmiikomsatunmul1962@gmail.com', '085242779609', 0, 'Definitif'),
(5, 'STAI Sangatta Kutai Timur', 5, 'Jl.Soekarno Hatta No.1', 'pmii_kutim@yahoo.com', '082253208553', 2013, 'Definitif'),
(25, 'STIPER Kutai Timur', 5, 'JL. Soekarno Hatta', 'pmii_kutim@yahoo.com', '082153401950', 2017, 'Persiapan'),
(27, 'SULTAN KASIMUDDIN BULUNGAN', 8, 'JL. SENGKAWIT, KEL. TANJUNG SELOR HILIR, KEC. TANJUNG SELOR, KAB. BULUNGAN, PROV. KALIMANTAN UTARA', 'sultankasimuddi@yahoo.co.id', '085252888485', 2015, 'Definitif'),
(33, 'STITBA ', 3, 'Jl. Mulawarman Gg. Arjuna RT. 10 No 59 Sepinggan, kec. Balikpapan Selatan, kota Balikpapan, Kalimantan Timur', 'pmii.bppstitba9@gmail.com', '085754555134', 2010, 'Definitif'),
(34, 'STMIK BI', 3, 'Jl. Provinsi Km.06 Kel. Nenang RT. 005 NO. 59 Penajam Paser Utara', 'pkpmii.stmikbi@gmail.com', '085741308486', 2018, 'Definitif'),
(35, 'STIEPAN', 3, 'Jl. Guntur Damai RT. 48 No.166 Balikpapan Tengah', 'pkpmiistie40@gmail.com', '087883544707', 2019, 'Definitif'),
(37, 'STAIBA', 3, 'Jl. Semoi No. 59 Marga Sari Kec. Balikpapan Barat ', 'pmii.staiba@gmail.com', '081348808812', 2011, 'Definitif'),
(38, 'UNIBA', 3, 'Jl. Pupuk Raya, Damai, Balikpapan Selatan ', 'pmii.uniba@gmail.com', '081545554091', 2018, 'Persiapan'),
(39, 'POLTEKBA', 3, 'Jl. Soekarno Hatta Km. 08, Batu Ampar Kec. Balikpapan Utara', 'pmii.poltekba@gmail.com', '082255159707', 2009, 'Persiapan'),
(40, 'ITK', 3, 'Jl. Soekarno Hatta Km. 15, Karang Joang Kec. Balikpapan Utara', 'pmii.itk10@gmail.com', '082356467543', 2016, 'Persiapan'),
(41, 'STT MIGAS', 3, 'Jl. Soekarno Hatta Km. 08 Karang Joang Balikpapan Utara', 'pmii.sttmigas@gmail.com', '082251364218', 2018, 'Persiapan'),
(42, 'STIE WIDYA PRAJA', 6, 'Jl. Jendral Sudirman No. 149 Tanah Grogot', 'admin@stiewidyapraja.ac.id', '082151511225', 2015, 'Definitif'),
(43, 'STIPER MUHAMMADIYAH TANAH GROGOT', 6, 'Jl. Pangeran Menteri No. 96 Tanah Grogot', 'stiper.muhtgt@yahoo.co.id', '08115405012', 2016, 'Definitif'),
(44, 'STIT IBNU RUSYD', 6, 'JL. Negara Tanah Periuk, Kabupaten Paser Kalimantan Timur', 'stit_ibnu_rusyd@yahoo.co.id', '082187964056', 2015, 'Definitif'),
(45, 'POLITEKNIK NEGRI PASER', 6, ' Jl. S.I. Khaliluddin, Tanah Grogot, Kabupaten Paser, Kalimantan Timur 76251', 'Pdd.polser@polnes.ac.id', '085247899117', 2018, 'Definitif');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) UNSIGNED NOT NULL,
  `nama_kontak` varchar(255) DEFAULT NULL,
  `email_kontak` varchar(255) DEFAULT NULL,
  `pesan_kontak` text DEFAULT NULL,
  `balas_kontak` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(11) UNSIGNED NOT NULL,
  `jabatan_pengurus` varchar(255) DEFAULT NULL,
  `nama_pengurus` varchar(255) DEFAULT NULL,
  `gambar_pengurus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `jabatan_pengurus`, `nama_pengurus`, `gambar_pengurus`) VALUES
(1, 'Ketua PKC Kaltimra', 'Panji Sukma Nugraha', 'WhatsApp_Image_2019-06-30_at_17_25_59.jpeg'),
(2, 'Sekretaris PKC Kaltimra', 'Abdul Khohar', 'WhatsApp_Image_2019-06-30_at_17_26_00.jpeg'),
(3, 'Ketua Kopri PKC Kaltimra', 'Siti Youmi Rohmah', 'WhatsApp_Image_2019-06-30_at_17_26_00_(1).jpeg'),
(4, 'Sekretaris Kopri PKC Kaltimra', 'Nima Fadriawati', 'WhatsApp_Image_2019-06-30_at_17_26_00_(2).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `rayon`
--

CREATE TABLE `rayon` (
  `id_rayon` int(11) NOT NULL,
  `nama_rayon` varchar(255) DEFAULT NULL,
  `komisariat_id` int(11) DEFAULT NULL,
  `cabang_id` int(11) DEFAULT NULL,
  `alamat_rayon` text DEFAULT NULL,
  `email_rayon` varchar(255) DEFAULT NULL,
  `telepon_rayon` varchar(15) DEFAULT NULL,
  `berdiri_rayon` int(5) DEFAULT NULL,
  `status_rayon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rayon`
--

INSERT INTO `rayon` (`id_rayon`, `nama_rayon`, `komisariat_id`, `cabang_id`, `alamat_rayon`, `email_rayon`, `telepon_rayon`, `berdiri_rayon`, `status_rayon`) VALUES
(1, 'Belum Ada Rayon', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Beriun Ekonomi Syariah', 5, 5, 'Jl. Inpres Gg Bintang Sembilan', 'pmii_kutim@yahoo.com', '081253817016', 2014, 'Definitif'),
(7, 'Sultan Al-Fatih Ahwalu Syakhsiyah', 5, 5, 'Jl. Inpres Gg Daya Karya', 'pmii_kutim@yahoo.com', '082157165059', 2018, 'Definitif'),
(8, 'MPI Mafaza', 5, 5, 'Jl. Inpres Gg Daya Karya', 'pmii_kutim@yahoo.com', '082251131690', 2018, 'Definitif'),
(9, 'PGMI Kihajar Dewantara', 5, 5, 'Jl. Inpres Gg Daya Karya', 'pmii_kutim@yahoo.com', '082252298752', 2018, 'Definitif'),
(13, 'PAI AL-Asyari', 5, 5, 'Jl.Inpres Gg Daya Karya', 'pmii_kutim@yahoo.com', '082326177950', 2014, 'Definitif');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id_subscribe` int(11) UNSIGNED NOT NULL,
  `email_subscribe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(255) DEFAULT NULL,
  `pass_user` varchar(255) DEFAULT NULL,
  `cabang_id` int(11) DEFAULT NULL,
  `level_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `pass_user`, `cabang_id`, `level_user`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(2, 'kaltim', '51589f05bd327dcacf7bf68391c1a555', 1, 2),
(5, 'balikpapan', 'b14dd7961b9995c6ad875d870326e26d', 3, 3),
(6, 'kukar', '2a98410b6a2a906f8031cb5e12e1fd10', 4, 3),
(7, 'kutim', 'f5403657e1fe4b1a4a1e1137d537418f', 5, 3),
(8, 'bulungan', '3ea0e6ee15346a2935b6f433bbfeebfb', 8, 3),
(9, 'paser', 'b1ed4f71335b2794fb09e75566bb5b90', 6, 3),
(10, 'tarakan', 'adb97c291e3725d0f1a76cd2c6c14673', 7, 3),
(12, 'samarinda', '82720b1526fc3035413cb6e358a77050', 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`),
  ADD UNIQUE KEY `email_informasi` (`email_informasi`);

--
-- Indexes for table `komisariat`
--
ALTER TABLE `komisariat`
  ADD PRIMARY KEY (`id_komisariat`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`),
  ADD UNIQUE KEY `email_kontak` (`email_kontak`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `rayon`
--
ALTER TABLE `rayon`
  ADD PRIMARY KEY (`id_rayon`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id_subscribe`),
  ADD UNIQUE KEY `email_subscribe` (`email_subscribe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=417;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komisariat`
--
ALTER TABLE `komisariat`
  MODIFY `id_komisariat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rayon`
--
ALTER TABLE `rayon`
  MODIFY `id_rayon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id_subscribe` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
