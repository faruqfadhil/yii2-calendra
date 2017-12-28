-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 03:45 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendra`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `id` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`id`, `menu`, `action`, `role`) VALUES
(112, 8, 'index', 1),
(113, 8, 'view', 1),
(114, 8, 'create', 1),
(115, 8, 'update', 1),
(116, 8, 'delete', 1),
(183, 2, 'index', 1),
(184, 2, 'view', 1),
(185, 2, 'create', 1),
(186, 2, 'update', 1),
(187, 2, 'delete', 1),
(188, 3, 'index', 1),
(189, 3, 'view', 1),
(190, 3, 'create', 1),
(191, 3, 'update', 1),
(192, 3, 'delete', 1),
(193, 3, 'setting', 1),
(194, 4, 'index', 1),
(195, 4, 'view', 1),
(196, 4, 'create', 1),
(197, 4, 'update', 1),
(198, 4, 'delete', 1),
(199, 7, 'index', 1),
(200, 7, 'view', 1),
(201, 7, 'create', 1),
(202, 7, 'update', 1),
(203, 7, 'delete', 1),
(452, 17, 'approve', 4),
(451, 17, 'delete', 4),
(450, 17, 'update', 4),
(449, 17, 'create', 4),
(448, 17, 'view', 4),
(447, 17, 'index', 4),
(446, 15, 'delete', 4),
(445, 15, 'update', 4),
(444, 15, 'create', 4),
(443, 15, 'view', 4),
(442, 15, 'index', 4),
(441, 14, 'delete', 4),
(440, 14, 'update', 4),
(439, 14, 'create', 4),
(438, 14, 'view', 4),
(437, 14, 'index', 4),
(422, 14, 'index', 5),
(423, 14, 'view', 5),
(424, 14, 'create', 5),
(425, 14, 'update', 5),
(426, 14, 'delete', 5),
(427, 15, 'index', 5),
(428, 15, 'view', 5),
(429, 15, 'create', 5),
(430, 15, 'update', 5),
(431, 15, 'delete', 5),
(432, 17, 'index', 5),
(433, 17, 'view', 5),
(434, 17, 'create', 5),
(435, 17, 'update', 5),
(436, 17, 'delete', 5),
(747, 4, 'delete', 6),
(746, 4, 'update', 6),
(745, 4, 'create', 6),
(744, 4, 'view', 6),
(743, 4, 'index', 6),
(757, 34, 'delete', 7),
(756, 34, 'update', 7),
(755, 34, 'create', 7),
(754, 34, 'view', 7),
(753, 34, 'index', 7),
(752, 34, 'delete', 8),
(751, 34, 'update', 8),
(750, 34, 'create', 8),
(749, 34, 'view', 8),
(748, 34, 'index', 8),
(758, 38, 'index', 9),
(759, 38, 'view', 9),
(760, 38, 'create', 9),
(761, 38, 'update', 9),
(762, 38, 'delete', 9),
(763, 39, 'index', 11),
(764, 39, 'view', 11),
(765, 39, 'create', 11),
(766, 39, 'update', 11),
(767, 39, 'delete', 11);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `email`, `password`, `id_user`) VALUES
(1, 'customer', '086765262', 'customer@gmail.com', 'frq03051997', 77),
(11, 'customer91', '0808869876', 'customer91@gmail.com', 'customer6', 91),
(12, 'customer99', '027382737161', 'customer99@gmail.com', 'customer99', 92),
(13, 'ricoaw', '87857579964', 'rico@gmail.com', 'ricoaw', 94),
(14, 'faruq12', '08363763736', 'faruq12@gmail.com', 'faruq12', 95);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_location` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_publisher` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `tittle`, `description`, `id_location`, `image`, `id_publisher`, `alamat`, `id_kategori`, `flag`) VALUES
(4, 'IES', 'international electronics shymphosyium', 3578, 'uploads/event/24127156_146550159326960_1019586422450946048_n.jpg', 3, 'kampus PENS jl raya its sukolilo', 4, 1),
(5, 'Hari Kesetiakawanan Nasional Sosial Expo', 'Konten Event :\r\n\r\nPameran 6 Demo Hasil Karya Disabilitas\r\nBhakti Sosial Disabilitas :\r\nOperasi Bibir Sumbing\r\nOperasi Katarak\r\nSunatan Masal\r\nGelar Potensi dan Produk Unggulan Daerah\r\nPasar Murah dan Sembako Peduli\r\nTalkshow / Dialog Interaktif\r\nFree Konsultasi & Pemeriksaan Gigi by FKG Unair\r\nWorkshop Ribbon Embriodery Hoop by Persadir\r\nPanggung Hiburan\r\nBand Mata Hati\r\nSanggar Alang – Alang\r\nPentas Seni Budaya\r\nDoorprize\r\nPesta Kembang Api\r\nFestival Kuliner', 3578, 'uploads/event/PP-Hari-Kesetiakawanan-Nasional-Sosial-Expo-Copy.jpg', 3, 'Exhibition Hall Grand City Surabaya', 4, 1),
(6, 'WONDERFUL BATIK INDONESIA, Batik Premium Exhibition', 'There are various kinds of collection Batik from various center throughout Indonesian crafter. Get special discounts during the exhibition! So? Batik Lovers? Don’t miss a lot of exciting events and competition there..', 3578, 'uploads/event/PP-Wonderful-Batik-Indonesia-desember-2017-calling-tenant-Primasindo-Organizer-Copy-e1512355789451.jpg', 3, 'Linear Atrium Ciputra World Surabaya', 4, 1),
(7, 'AMAZING Marvell Market', 'Konten Event :\r\n\r\nBazaar\r\nMeet & Greet Surat Cinta Untuk Starla the Movie (Jefri Nichol, Caitlin Halderman)', 3578, 'uploads/event/PP-Amazing-Marvell-LOL-PROJECT-Copy.jpg', 3, 'Marvell City Mall, Expo Center Lt.2, Surabaya', 1, 1),
(8, 'Telkomsel Device Vaganza 2017', 'Arek2 Suroboyo yang pengin beli smartphone baru, tukar tambah dan cari smartphone murah dengan kualitasbagus. Yuk catet tanggal dan tempatnya, 20-24 Desember 2017 di Atrium Fashion Pakuwon Mall ada Event Telkomsel Device Vaganza 2017.', 3578, 'uploads/event/PP-Event-Telkomsel-Device-Vaganza-2017-TELKOMSEL-rev-15_12-Copy.jpg', 3, 'Atrium Fashion Pakuwo Mall, Surabaya', 4, 1),
(9, 'Indie Creative Management 2018 : Startup Business', 'More Information :\r\n\r\nRio : 0813 3432 4733\r\nLiza : 0838 3201 0169\r\nInstagram : iceumg', 3578, 'uploads/event/MP-SEMINAR-INDIE-CREATIVE-MANAJEMEN-2018-MAHASISWA-BARU-UNIVERSITAS-MUHAMMADIYAH-GRESIK-PROGRAM-STUDI-MANAJEMEN-Copy.jpg', 3, ' Hall “Sang Pencerah” Universitas Muhammadiyah Gresik (Lantai 8), Gresik', 2, 1),
(10, 'YEAR END SALE Greenlight', 'YEAR END SALE UP TO 50% berlaku di Semua store GREENLIGHT & Store 3SECOND di kota kamu. Catet tanggalnya ya, diskon ini berlaku mulai tanggal 8 Desember 2017 sampai 7 Januari 2018 berlaku untuk produk @its3second @itsgreenlight @itsmoutley @famo.indonesia @fmc_speedsupply. Buruan dateng dan belanja yaaa. Rugi banget deh klo ngga kebagian!\r\n\r\nInfo lebih lanjut bisa follow Instagram @its3second @itsgreenlight @itsmoutley @famo.indonesia @fmc_speedsupply See you at our stores!', 3372, 'uploads/event/NE-YEAR-END-SALE-2017-Greenlight-Copy.jpg', 3, 'Semua store GREENLIGHT & Store 3SECOND di kota kamu', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kab` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `nama` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kab`, `id_prov`, `nama`) VALUES
(1101, 11, 'KAB. ACEH SELATAN'),
(1102, 11, 'KAB. ACEH TENGGARA'),
(1103, 11, 'KAB. ACEH TIMUR'),
(1104, 11, 'KAB. ACEH TENGAH'),
(1105, 11, 'KAB. ACEH BARAT'),
(1106, 11, 'KAB. ACEH BESAR'),
(1107, 11, 'KAB. PIDIE'),
(1108, 11, 'KAB. ACEH UTARA'),
(1109, 11, 'KAB. SIMEULUE'),
(1110, 11, 'KAB. ACEH SINGKIL'),
(1111, 11, 'KAB. BIREUEN'),
(1112, 11, 'KAB. ACEH BARAT DAYA'),
(1113, 11, 'KAB. GAYO LUES'),
(1114, 11, 'KAB. ACEH JAYA'),
(1115, 11, 'KAB. NAGAN RAYA'),
(1116, 11, 'KAB. ACEH TAMIANG'),
(1117, 11, 'KAB. BENER MERIAH'),
(1118, 11, 'KAB. PIDIE JAYA'),
(1171, 11, 'KOTA BANDA ACEH'),
(1172, 11, 'KOTA SABANG'),
(1173, 11, 'KOTA LHOKSEUMAWE'),
(1174, 11, 'KOTA LANGSA'),
(1175, 11, 'KOTA SUBULUSSALAM'),
(1201, 12, 'KAB. TAPANULI TENGAH'),
(1202, 12, 'KAB. TAPANULI UTARA'),
(1203, 12, 'KAB. TAPANULI SELATAN'),
(1204, 12, 'KAB. NIAS'),
(1205, 12, 'KAB. LANGKAT'),
(1206, 12, 'KAB. KARO'),
(1207, 12, 'KAB. DELI SERDANG'),
(1208, 12, 'KAB. SIMALUNGUN'),
(1209, 12, 'KAB. ASAHAN'),
(1210, 12, 'KAB. LABUHANBATU'),
(1211, 12, 'KAB. DAIRI'),
(1212, 12, 'KAB. TOBA SAMOSIR'),
(1213, 12, 'KAB. MANDAILING NATAL'),
(1214, 12, 'KAB. NIAS SELATAN'),
(1215, 12, 'KAB. PAKPAK BHARAT'),
(1216, 12, 'KAB. HUMBANG HASUNDUTAN'),
(1217, 12, 'KAB. SAMOSIR'),
(1218, 12, 'KAB. SERDANG BEDAGAI'),
(1219, 12, 'KAB. BATU BARA'),
(1220, 12, 'KAB. PADANG LAWAS UTARA'),
(1221, 12, 'KAB. PADANG LAWAS'),
(1222, 12, 'KAB. LABUHANBATU SELATAN'),
(1223, 12, 'KAB. LABUHANBATU UTARA'),
(1224, 12, 'KAB. NIAS UTARA'),
(1225, 12, 'KAB. NIAS BARAT'),
(1271, 12, 'KOTA MEDAN'),
(1272, 12, 'KOTA PEMATANG SIANTAR'),
(1273, 12, 'KOTA SIBOLGA'),
(1274, 12, 'KOTA TANJUNG BALAI'),
(1275, 12, 'KOTA BINJAI'),
(1276, 12, 'KOTA TEBING TINGGI'),
(1277, 12, 'KOTA PADANGSIDIMPUAN'),
(1278, 12, 'KOTA GUNUNGSITOLI'),
(1301, 13, 'KAB. PESISIR SELATAN'),
(1302, 13, 'KAB. SOLOK'),
(1303, 13, 'KAB. SIJUNJUNG'),
(1304, 13, 'KAB. TANAH DATAR'),
(1305, 13, 'KAB. PADANG PARIAMAN'),
(1306, 13, 'KAB. AGAM'),
(1307, 13, 'KAB. LIMA PULUH KOTA'),
(1308, 13, 'KAB. PASAMAN'),
(1309, 13, 'KAB. KEPULAUAN MENTAWAI'),
(1310, 13, 'KAB. DHARMASRAYA'),
(1311, 13, 'KAB. SOLOK SELATAN'),
(1312, 13, 'KAB. PASAMAN BARAT'),
(1371, 13, 'KOTA PADANG'),
(1372, 13, 'KOTA SOLOK'),
(1373, 13, 'KOTA SAWAHLUNTO'),
(1374, 13, 'KOTA PADANG PANJANG'),
(1375, 13, 'KOTA BUKITTINGGI'),
(1376, 13, 'KOTA PAYAKUMBUH'),
(1377, 13, 'KOTA PARIAMAN'),
(1401, 14, 'KAB. KAMPAR'),
(1402, 14, 'KAB. INDRAGIRI HULU'),
(1403, 14, 'KAB. BENGKALIS'),
(1404, 14, 'KAB. INDRAGIRI HILIR'),
(1405, 14, 'KAB. PELALAWAN'),
(1406, 14, 'KAB. ROKAN HULU'),
(1407, 14, 'KAB. ROKAN HILIR'),
(1408, 14, 'KAB. SIAK'),
(1409, 14, 'KAB. KUANTAN SINGINGI'),
(1410, 14, 'KAB. KEPULAUAN MERANTI'),
(1471, 14, 'KOTA PEKANBARU'),
(1472, 14, 'KOTA DUMAI'),
(1501, 15, 'KAB. KERINCI'),
(1502, 15, 'KAB. MERANGIN'),
(1503, 15, 'KAB. SAROLANGUN'),
(1504, 15, 'KAB. BATANGHARI'),
(1505, 15, 'KAB. MUARO JAMBI'),
(1506, 15, 'KAB. TANJUNG JABUNG BARAT'),
(1507, 15, 'KAB. TANJUNG JABUNG TIMUR'),
(1508, 15, 'KAB. BUNGO'),
(1509, 15, 'KAB. TEBO'),
(1571, 15, 'KOTA JAMBI'),
(1572, 15, 'KOTA SUNGAI PENUH'),
(1601, 16, 'KAB. OGAN KOMERING ULU'),
(1602, 16, 'KAB. OGAN KOMERING ILIR'),
(1603, 16, 'KAB. MUARA ENIM'),
(1604, 16, 'KAB. LAHAT'),
(1605, 16, 'KAB. MUSI RAWAS'),
(1606, 16, 'KAB. MUSI BANYUASIN'),
(1607, 16, 'KAB. BANYUASIN'),
(1608, 16, 'KAB. OGAN KOMERING ULU TIMUR'),
(1609, 16, 'KAB. OGAN KOMERING ULU SELATAN'),
(1610, 16, 'KAB. OGAN ILIR'),
(1611, 16, 'KAB. EMPAT LAWANG'),
(1612, 16, 'KAB. PENUKAL ABAB LEMATANG ILIR'),
(1613, 16, 'KAB. MUSI RAWAS UTARA'),
(1671, 16, 'KOTA PALEMBANG'),
(1672, 16, 'KOTA PAGAR ALAM'),
(1673, 16, 'KOTA LUBUK LINGGAU'),
(1674, 16, 'KOTA PRABUMULIH'),
(1701, 17, 'KAB. BENGKULU SELATAN'),
(1702, 17, 'KAB. REJANG LEBONG'),
(1703, 17, 'KAB. BENGKULU UTARA'),
(1704, 17, 'KAB. KAUR'),
(1705, 17, 'KAB. SELUMA'),
(1706, 17, 'KAB. MUKO MUKO'),
(1707, 17, 'KAB. LEBONG'),
(1708, 17, 'KAB. KEPAHIANG'),
(1709, 17, 'KAB. BENGKULU TENGAH'),
(1771, 17, 'KOTA BENGKULU'),
(1801, 18, 'KAB. LAMPUNG SELATAN'),
(1802, 18, 'KAB. LAMPUNG TENGAH'),
(1803, 18, 'KAB. LAMPUNG UTARA'),
(1804, 18, 'KAB. LAMPUNG BARAT'),
(1805, 18, 'KAB. TULANG BAWANG'),
(1806, 18, 'KAB. TANGGAMUS'),
(1807, 18, 'KAB. LAMPUNG TIMUR'),
(1808, 18, 'KAB. WAY KANAN'),
(1809, 18, 'KAB. PESAWARAN'),
(1810, 18, 'KAB. PRINGSEWU'),
(1811, 18, 'KAB. MESUJI'),
(1812, 18, 'KAB. TULANG BAWANG BARAT'),
(1813, 18, 'KAB. PESISIR BARAT'),
(1871, 18, 'KOTA BANDAR LAMPUNG'),
(1872, 18, 'KOTA METRO'),
(1901, 19, 'KAB. BANGKA'),
(1902, 19, 'KAB. BELITUNG'),
(1903, 19, 'KAB. BANGKA SELATAN'),
(1904, 19, 'KAB. BANGKA TENGAH'),
(1905, 19, 'KAB. BANGKA BARAT'),
(1906, 19, 'KAB. BELITUNG TIMUR'),
(1971, 19, 'KOTA PANGKAL PINANG'),
(2101, 21, 'KAB. BINTAN'),
(2102, 21, 'KAB. KARIMUN'),
(2103, 21, 'KAB. NATUNA'),
(2104, 21, 'KAB. LINGGA'),
(2105, 21, 'KAB. KEPULAUAN ANAMBAS'),
(2171, 21, 'KOTA BATAM'),
(2172, 21, 'KOTA TANJUNG PINANG'),
(3101, 31, 'KAB. ADM. KEP. SERIBU'),
(3171, 31, 'KOTA ADM. JAKARTA PUSAT'),
(3172, 31, 'KOTA ADM. JAKARTA UTARA'),
(3173, 31, 'KOTA ADM. JAKARTA BARAT'),
(3174, 31, 'KOTA ADM. JAKARTA SELATAN'),
(3175, 31, 'KOTA ADM. JAKARTA TIMUR'),
(3201, 32, 'KAB. BOGOR'),
(3202, 32, 'KAB. SUKABUMI'),
(3203, 32, 'KAB. CIANJUR'),
(3204, 32, 'KAB. BANDUNG'),
(3205, 32, 'KAB. GARUT'),
(3206, 32, 'KAB. TASIKMALAYA'),
(3207, 32, 'KAB. CIAMIS'),
(3208, 32, 'KAB. KUNINGAN'),
(3209, 32, 'KAB. CIREBON'),
(3210, 32, 'KAB. MAJALENGKA'),
(3211, 32, 'KAB. SUMEDANG'),
(3212, 32, 'KAB. INDRAMAYU'),
(3213, 32, 'KAB. SUBANG'),
(3214, 32, 'KAB. PURWAKARTA'),
(3215, 32, 'KAB. KARAWANG'),
(3216, 32, 'KAB. BEKASI'),
(3217, 32, 'KAB. BANDUNG BARAT'),
(3218, 32, 'KAB. PANGANDARAN'),
(3271, 32, 'KOTA BOGOR'),
(3272, 32, 'KOTA SUKABUMI'),
(3273, 32, 'KOTA BANDUNG'),
(3274, 32, 'KOTA CIREBON'),
(3275, 32, 'KOTA BEKASI'),
(3276, 32, 'KOTA DEPOK'),
(3277, 32, 'KOTA CIMAHI'),
(3278, 32, 'KOTA TASIKMALAYA'),
(3279, 32, 'KOTA BANJAR'),
(3301, 33, 'KAB. CILACAP'),
(3302, 33, 'KAB. BANYUMAS'),
(3303, 33, 'KAB. PURBALINGGA'),
(3304, 33, 'KAB. BANJARNEGARA'),
(3305, 33, 'KAB. KEBUMEN'),
(3306, 33, 'KAB. PURWOREJO'),
(3307, 33, 'KAB. WONOSOBO'),
(3308, 33, 'KAB. MAGELANG'),
(3309, 33, 'KAB. BOYOLALI'),
(3310, 33, 'KAB. KLATEN'),
(3311, 33, 'KAB. SUKOHARJO'),
(3312, 33, 'KAB. WONOGIRI'),
(3313, 33, 'KAB. KARANGANYAR'),
(3314, 33, 'KAB. SRAGEN'),
(3315, 33, 'KAB. GROBOGAN'),
(3316, 33, 'KAB. BLORA'),
(3317, 33, 'KAB. REMBANG'),
(3318, 33, 'KAB. PATI'),
(3319, 33, 'KAB. KUDUS'),
(3320, 33, 'KAB. JEPARA'),
(3321, 33, 'KAB. DEMAK'),
(3322, 33, 'KAB. SEMARANG'),
(3323, 33, 'KAB. TEMANGGUNG'),
(3324, 33, 'KAB. KENDAL'),
(3325, 33, 'KAB. BATANG'),
(3326, 33, 'KAB. PEKALONGAN'),
(3327, 33, 'KAB. PEMALANG'),
(3328, 33, 'KAB. TEGAL'),
(3329, 33, 'KAB. BREBES'),
(3371, 33, 'KOTA MAGELANG'),
(3372, 33, 'KOTA SURAKARTA'),
(3373, 33, 'KOTA SALATIGA'),
(3374, 33, 'KOTA SEMARANG'),
(3375, 33, 'KOTA PEKALONGAN'),
(3376, 33, 'KOTA TEGAL'),
(3401, 34, 'KAB. KULON PROGO'),
(3402, 34, 'KAB. BANTUL'),
(3403, 34, 'KAB. GUNUNG KIDUL'),
(3404, 34, 'KAB. SLEMAN'),
(3471, 34, 'KOTA YOGYAKARTA'),
(3501, 35, 'KAB. PACITAN'),
(3502, 35, 'KAB. PONOROGO'),
(3503, 35, 'KAB. TRENGGALEK'),
(3504, 35, 'KAB. TULUNGAGUNG'),
(3505, 35, 'KAB. BLITAR'),
(3506, 35, 'KAB. KEDIRI'),
(3507, 35, 'KAB. MALANG'),
(3508, 35, 'KAB. LUMAJANG'),
(3509, 35, 'KAB. JEMBER'),
(3510, 35, 'KAB. BANYUWANGI'),
(3511, 35, 'KAB. BONDOWOSO'),
(3512, 35, 'KAB. SITUBONDO'),
(3513, 35, 'KAB. PROBOLINGGO'),
(3514, 35, 'KAB. PASURUAN'),
(3515, 35, 'KAB. SIDOARJO'),
(3516, 35, 'KAB. MOJOKERTO'),
(3517, 35, 'KAB. JOMBANG'),
(3518, 35, 'KAB. NGANJUK'),
(3519, 35, 'KAB. MADIUN'),
(3520, 35, 'KAB. MAGETAN'),
(3521, 35, 'KAB. NGAWI'),
(3522, 35, 'KAB. BOJONEGORO'),
(3523, 35, 'KAB. TUBAN'),
(3524, 35, 'KAB. LAMONGAN'),
(3525, 35, 'KAB. GRESIK'),
(3526, 35, 'KAB. BANGKALAN'),
(3527, 35, 'KAB. SAMPANG'),
(3528, 35, 'KAB. PAMEKASAN'),
(3529, 35, 'KAB. SUMENEP'),
(3571, 35, 'KOTA KEDIRI'),
(3572, 35, 'KOTA BLITAR'),
(3573, 35, 'KOTA MALANG'),
(3574, 35, 'KOTA PROBOLINGGO'),
(3575, 35, 'KOTA PASURUAN'),
(3576, 35, 'KOTA MOJOKERTO'),
(3577, 35, 'KOTA MADIUN'),
(3578, 35, 'KOTA SURABAYA'),
(3579, 35, 'KOTA BATU'),
(3601, 36, 'KAB. PANDEGLANG'),
(3602, 36, 'KAB. LEBAK'),
(3603, 36, 'KAB. TANGERANG'),
(3604, 36, 'KAB. SERANG'),
(3671, 36, 'KOTA TANGERANG'),
(3672, 36, 'KOTA CILEGON'),
(3673, 36, 'KOTA SERANG'),
(3674, 36, 'KOTA TANGERANG SELATAN'),
(5101, 51, 'KAB. JEMBRANA'),
(5102, 51, 'KAB. TABANAN'),
(5103, 51, 'KAB. BADUNG'),
(5104, 51, 'KAB. GIANYAR'),
(5105, 51, 'KAB. KLUNGKUNG'),
(5106, 51, 'KAB. BANGLI'),
(5107, 51, 'KAB. KARANGASEM'),
(5108, 51, 'KAB. BULELENG'),
(5171, 51, 'KOTA DENPASAR'),
(5201, 52, 'KAB. LOMBOK BARAT'),
(5202, 52, 'KAB. LOMBOK TENGAH'),
(5203, 52, 'KAB. LOMBOK TIMUR'),
(5204, 52, 'KAB. SUMBAWA'),
(5205, 52, 'KAB. DOMPU'),
(5206, 52, 'KAB. BIMA'),
(5207, 52, 'KAB. SUMBAWA BARAT'),
(5208, 52, 'KAB. LOMBOK UTARA'),
(5271, 52, 'KOTA MATARAM'),
(5272, 52, 'KOTA BIMA'),
(5301, 53, 'KAB. KUPANG'),
(5302, 53, 'KAB TIMOR TENGAH SELATAN'),
(5303, 53, 'KAB. TIMOR TENGAH UTARA'),
(5304, 53, 'KAB. BELU'),
(5305, 53, 'KAB. ALOR'),
(5306, 53, 'KAB. FLORES TIMUR'),
(5307, 53, 'KAB. SIKKA'),
(5308, 53, 'KAB. ENDE'),
(5309, 53, 'KAB. NGADA'),
(5310, 53, 'KAB. MANGGARAI'),
(5311, 53, 'KAB. SUMBA TIMUR'),
(5312, 53, 'KAB. SUMBA BARAT'),
(5313, 53, 'KAB. LEMBATA'),
(5314, 53, 'KAB. ROTE NDAO'),
(5315, 53, 'KAB. MANGGARAI BARAT'),
(5316, 53, 'KAB. NAGEKEO'),
(5317, 53, 'KAB. SUMBA TENGAH'),
(5318, 53, 'KAB. SUMBA BARAT DAYA'),
(5319, 53, 'KAB. MANGGARAI TIMUR'),
(5320, 53, 'KAB. SABU RAIJUA'),
(5321, 53, 'KAB. MALAKA'),
(5371, 53, 'KOTA KUPANG'),
(6101, 61, 'KAB. SAMBAS'),
(6102, 61, 'KAB. MEMPAWAH'),
(6103, 61, 'KAB. SANGGAU'),
(6104, 61, 'KAB. KETAPANG'),
(6105, 61, 'KAB. SINTANG'),
(6106, 61, 'KAB. KAPUAS HULU'),
(6107, 61, 'KAB. BENGKAYANG'),
(6108, 61, 'KAB. LANDAK'),
(6109, 61, 'KAB. SEKADAU'),
(6110, 61, 'KAB. MELAWI'),
(6111, 61, 'KAB. KAYONG UTARA'),
(6112, 61, 'KAB. KUBU RAYA'),
(6171, 61, 'KOTA PONTIANAK'),
(6172, 61, 'KOTA SINGKAWANG'),
(6201, 62, 'KAB. KOTAWARINGIN BARAT'),
(6202, 62, 'KAB. KOTAWARINGIN TIMUR'),
(6203, 62, 'KAB. KAPUAS'),
(6204, 62, 'KAB. BARITO SELATAN'),
(6205, 62, 'KAB. BARITO UTARA'),
(6206, 62, 'KAB. KATINGAN'),
(6207, 62, 'KAB. SERUYAN'),
(6208, 62, 'KAB. SUKAMARA'),
(6209, 62, 'KAB. LAMANDAU'),
(6210, 62, 'KAB. GUNUNG MAS'),
(6211, 62, 'KAB. PULANG PISAU'),
(6212, 62, 'KAB. MURUNG RAYA'),
(6213, 62, 'KAB. BARITO TIMUR'),
(6271, 62, 'KOTA PALANGKARAYA'),
(6301, 63, 'KAB. TANAH LAUT'),
(6302, 63, 'KAB. KOTABARU'),
(6303, 63, 'KAB. BANJAR'),
(6304, 63, 'KAB. BARITO KUALA'),
(6305, 63, 'KAB. TAPIN'),
(6306, 63, 'KAB. HULU SUNGAI SELATAN'),
(6307, 63, 'KAB. HULU SUNGAI TENGAH'),
(6308, 63, 'KAB. HULU SUNGAI UTARA'),
(6309, 63, 'KAB. TABALONG'),
(6310, 63, 'KAB. TANAH BUMBU'),
(6311, 63, 'KAB. BALANGAN'),
(6371, 63, 'KOTA BANJARMASIN'),
(6372, 63, 'KOTA BANJARBARU'),
(6401, 64, 'KAB. PASER'),
(6402, 64, 'KAB. KUTAI KARTANEGARA'),
(6403, 64, 'KAB. BERAU'),
(6407, 64, 'KAB. KUTAI BARAT'),
(6408, 64, 'KAB. KUTAI TIMUR'),
(6409, 64, 'KAB. PENAJAM PASER UTARA'),
(6411, 64, 'KAB. MAHAKAM ULU'),
(6471, 64, 'KOTA BALIKPAPAN'),
(6472, 64, 'KOTA SAMARINDA'),
(6474, 64, 'KOTA BONTANG'),
(6501, 65, 'KAB. BULUNGAN'),
(6502, 65, 'KAB. MALINAU'),
(6503, 65, 'KAB. NUNUKAN'),
(6504, 65, 'KAB. TANA TIDUNG'),
(6571, 65, 'KOTA TARAKAN'),
(7101, 71, 'KAB. BOLAANG MONGONDOW'),
(7102, 71, 'KAB. MINAHASA'),
(7103, 71, 'KAB. KEPULAUAN SANGIHE'),
(7104, 71, 'KAB. KEPULAUAN TALAUD'),
(7105, 71, 'KAB. MINAHASA SELATAN'),
(7106, 71, 'KAB. MINAHASA UTARA'),
(7107, 71, 'KAB. MINAHASA TENGGARA'),
(7108, 71, 'KAB. BOLAANG MONGONDOW UTARA'),
(7109, 71, 'KAB. KEP. SIAU TAGULANDANG BIARO'),
(7110, 71, 'KAB. BOLAANG MONGONDOW TIMUR'),
(7111, 71, 'KAB. BOLAANG MONGONDOW SELATAN'),
(7171, 71, 'KOTA MANADO'),
(7172, 71, 'KOTA BITUNG'),
(7173, 71, 'KOTA TOMOHON'),
(7174, 71, 'KOTA KOTAMOBAGU'),
(7201, 72, 'KAB. BANGGAI'),
(7202, 72, 'KAB. POSO'),
(7203, 72, 'KAB. DONGGALA'),
(7204, 72, 'KAB. TOLI TOLI'),
(7205, 72, 'KAB. BUOL'),
(7206, 72, 'KAB. MOROWALI'),
(7207, 72, 'KAB. BANGGAI KEPULAUAN'),
(7208, 72, 'KAB. PARIGI MOUTONG'),
(7209, 72, 'KAB. TOJO UNA UNA'),
(7210, 72, 'KAB. SIGI'),
(7211, 72, 'KAB. BANGGAI LAUT'),
(7212, 72, 'KAB. MOROWALI UTARA'),
(7271, 72, 'KOTA PALU'),
(7301, 73, 'KAB. KEPULAUAN SELAYAR'),
(7302, 73, 'KAB. BULUKUMBA'),
(7303, 73, 'KAB. BANTAENG'),
(7304, 73, 'KAB. JENEPONTO'),
(7305, 73, 'KAB. TAKALAR'),
(7306, 73, 'KAB. GOWA'),
(7307, 73, 'KAB. SINJAI'),
(7308, 73, 'KAB. BONE'),
(7309, 73, 'KAB. MAROS'),
(7310, 73, 'KAB. PANGKAJENE KEPULAUAN'),
(7311, 73, 'KAB. BARRU'),
(7312, 73, 'KAB. SOPPENG'),
(7313, 73, 'KAB. WAJO'),
(7314, 73, 'KAB. SIDENRENG RAPPANG'),
(7315, 73, 'KAB. PINRANG'),
(7316, 73, 'KAB. ENREKANG'),
(7317, 73, 'KAB. LUWU'),
(7318, 73, 'KAB. TANA TORAJA'),
(7322, 73, 'KAB. LUWU UTARA'),
(7324, 73, 'KAB. LUWU TIMUR'),
(7326, 73, 'KAB. TORAJA UTARA'),
(7371, 73, 'KOTA MAKASSAR'),
(7372, 73, 'KOTA PARE PARE'),
(7373, 73, 'KOTA PALOPO'),
(7401, 74, 'KAB. KOLAKA'),
(7402, 74, 'KAB. KONAWE'),
(7403, 74, 'KAB. MUNA'),
(7404, 74, 'KAB. BUTON'),
(7405, 74, 'KAB. KONAWE SELATAN'),
(7406, 74, 'KAB. BOMBANA'),
(7407, 74, 'KAB. WAKATOBI'),
(7408, 74, 'KAB. KOLAKA UTARA'),
(7409, 74, 'KAB. KONAWE UTARA'),
(7410, 74, 'KAB. BUTON UTARA'),
(7411, 74, 'KAB. KOLAKA TIMUR'),
(7412, 74, 'KAB. KONAWE KEPULAUAN'),
(7413, 74, 'KAB. MUNA BARAT'),
(7414, 74, 'KAB. BUTON TENGAH'),
(7415, 74, 'KAB. BUTON SELATAN'),
(7471, 74, 'KOTA KENDARI'),
(7472, 74, 'KOTA BAU BAU'),
(7501, 75, 'KAB. GORONTALO'),
(7502, 75, 'KAB. BOALEMO'),
(7503, 75, 'KAB. BONE BOLANGO'),
(7504, 75, 'KAB. PAHUWATO'),
(7505, 75, 'KAB. GORONTALO UTARA'),
(7571, 75, 'KOTA GORONTALO'),
(7601, 76, 'KAB. MAMUJU UTARA'),
(7602, 76, 'KAB. MAMUJU'),
(7603, 76, 'KAB. MAMASA'),
(7604, 76, 'KAB. POLEWALI MANDAR'),
(7605, 76, 'KAB. MAJENE'),
(7606, 76, 'KAB. MAMUJU TENGAH'),
(8101, 81, 'KAB. MALUKU TENGAH'),
(8102, 81, 'KAB. MALUKU TENGGARA'),
(8103, 81, 'KAB MALUKU TENGGARA BARAT'),
(8104, 81, 'KAB. BURU'),
(8105, 81, 'KAB. SERAM BAGIAN TIMUR'),
(8106, 81, 'KAB. SERAM BAGIAN BARAT'),
(8107, 81, 'KAB. KEPULAUAN ARU'),
(8108, 81, 'KAB. MALUKU BARAT DAYA'),
(8109, 81, 'KAB. BURU SELATAN'),
(8171, 81, 'KOTA AMBON'),
(8172, 81, 'KOTA TUAL'),
(8201, 82, 'KAB. HALMAHERA BARAT'),
(8202, 82, 'KAB. HALMAHERA TENGAH'),
(8203, 82, 'KAB. HALMAHERA UTARA'),
(8204, 82, 'KAB. HALMAHERA SELATAN'),
(8205, 82, 'KAB. KEPULAUAN SULA'),
(8206, 82, 'KAB. HALMAHERA TIMUR'),
(8207, 82, 'KAB. PULAU MOROTAI'),
(8208, 82, 'KAB. PULAU TALIABU'),
(8271, 82, 'KOTA TERNATE'),
(8272, 82, 'KOTA TIDORE KEPULAUAN'),
(9101, 91, 'KAB. MERAUKE'),
(9102, 91, 'KAB. JAYAWIJAYA'),
(9103, 91, 'KAB. JAYAPURA'),
(9104, 91, 'KAB. NABIRE'),
(9105, 91, 'KAB. KEPULAUAN YAPEN'),
(9106, 91, 'KAB. BIAK NUMFOR'),
(9107, 91, 'KAB. PUNCAK JAYA'),
(9108, 91, 'KAB. PANIAI'),
(9109, 91, 'KAB. MIMIKA'),
(9110, 91, 'KAB. SARMI'),
(9111, 91, 'KAB. KEEROM'),
(9112, 91, 'KAB PEGUNUNGAN BINTANG'),
(9113, 91, 'KAB. YAHUKIMO'),
(9114, 91, 'KAB. TOLIKARA'),
(9115, 91, 'KAB. WAROPEN'),
(9116, 91, 'KAB. BOVEN DIGOEL'),
(9117, 91, 'KAB. MAPPI'),
(9118, 91, 'KAB. ASMAT'),
(9119, 91, 'KAB. SUPIORI'),
(9120, 91, 'KAB. MAMBERAMO RAYA'),
(9121, 91, 'KAB. MAMBERAMO TENGAH'),
(9122, 91, 'KAB. YALIMO'),
(9123, 91, 'KAB. LANNY JAYA'),
(9124, 91, 'KAB. NDUGA'),
(9125, 91, 'KAB. PUNCAK'),
(9126, 91, 'KAB. DOGIYAI'),
(9127, 91, 'KAB. INTAN JAYA'),
(9128, 91, 'KAB. DEIYAI'),
(9171, 91, 'KOTA JAYAPURA'),
(9201, 92, 'KAB. SORONG'),
(9202, 92, 'KAB. MANOKWARI'),
(9203, 92, 'KAB. FAK FAK'),
(9204, 92, 'KAB. SORONG SELATAN'),
(9205, 92, 'KAB. RAJA AMPAT'),
(9206, 92, 'KAB. TELUK BINTUNI'),
(9207, 92, 'KAB. TELUK WONDAMA'),
(9208, 92, 'KAB. KAIMANA'),
(9209, 92, 'KAB. TAMBRAUW'),
(9210, 92, 'KAB. MAYBRAT'),
(9211, 92, 'KAB. MANOKWARI SELATAN'),
(9212, 92, 'KAB. PEGUNUNGAN ARFAK'),
(9271, 92, 'KOTA SORONG');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_event`
--

CREATE TABLE `kategori_event` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_event`
--

INSERT INTO `kategori_event` (`id`, `nama_event`) VALUES
(1, 'sosial'),
(2, 'workshop'),
(3, 'lomba'),
(4, 'expo'),
(5, 'talkshow'),
(6, 'seminar'),
(7, 'agama'),
(8, 'konser');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `parent` varchar(100) NOT NULL,
  `module` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `icon`, `parent`, `module`, `controller`) VALUES
(1, 'Setting', 'fa fa-gear', '', '2', ''),
(2, 'User', 'fa fa-user', '', '2', 'user'),
(3, 'Role', 'fa fa-exchange', '1', '2', 'role'),
(4, 'Menu', 'fa fa-navicon', '1', '2', 'menu'),
(5, 'Developer Tools', 'fa fa-plug', '', '2', ''),
(6, 'Gii', 'fa fa-glass', '5', '2', 'gii'),
(7, 'Module', 'fa fa-archive', '5', '2', 'module'),
(8, 'Alumni', 'fa fa-user', '', '2', ''),
(9, 'Fakultas', 'fa fa-bookmark', '', '2', 'fakultas'),
(10, 'Jurusan', 'fa fa-bank', '', '2', 'jurusan'),
(11, 'Mata Kuliah', 'fa fa-briefcase', '', '2', 'mata-kuliah'),
(12, 'Data Alumni', 'fa fa-users', '8', '2', 'mahasiswa'),
(13, 'Nilai Mahasiswa', 'fa fa-edit', '8', '2', 'nilai'),
(14, 'Berita', 'fa fa-newspaper-o', '16', '2', 'berita'),
(15, 'Event', 'fa fa-bell', '16', '2', 'event'),
(16, 'Informasi', 'fa fa-newspaper-o', '', '2', ''),
(17, 'Donasi', 'fa fa-hand-paper-o', '', '2', ''),
(18, 'Donasi Rutin', 'fa fa-calendar', '17', '2', 'donasi-rutin'),
(19, 'Donasi Event', 'fa fa-calendar-check-o', '17', '2', 'donasi-event'),
(20, 'Donasi Seminar', 'fa fa-calendar-times-o', '17', '2', 'donasi-seminar'),
(21, 'Kerjasama', 'fa fa-briefcase', '', '2', ''),
(22, 'Kontrak', 'fa fa-book', '21', '2', 'kontrak'),
(23, 'Kegiatan', 'fa fa-calendar', '21', '2', 'kegiatan'),
(24, 'Mitra', 'fa fa-group', '21', '2', 'mitra'),
(25, 'Tahun Ajaran', 'fa fa-calendar-check-o', '21', '2', 'tahun-ajar'),
(26, 'jenis kegiatan', 'fa fa-list-ul', '21', '2', 'jenis-kegiatan'),
(27, 'Beasiswa', 'fa fa-flag-checkered', '21', '2', 'skenario1'),
(29, 'SIP', 'fa fa-align-justify', '', '2', ''),
(30, 'Cari SIP', 'fa fa-search', '29', '2', 'izin-dokter'),
(31, 'Kelola Artikel', 'fa fa-book', '', '2', ''),
(32, 'Tamba Artikel', 'fa fa-plus-circle', '31', '2', 'artikel/create'),
(33, 'Daftar Artikel', 'fa fa-th-list', '31', '2', 'artikel'),
(34, 'Riwayat', 'fa fa-search', '', '2', 'pasien'),
(35, 'Cari Pasien', 'fa fa-search', '34', '2', 'pasien'),
(36, 'Kesehatanku', 'fa fa-heartbeat', '', '2', ''),
(37, 'Grafik', 'fa fa-pie-chart', '36', '2', 'riwayat/grafik'),
(38, 'Event', 'fa fa-adjust', '', '2', 'event'),
(39, 'Publisher', 'fa-anchor', '', '2', 'publisher');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1479231545),
('m140506_102106_rbac_init', 1479231864);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `module` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `module`) VALUES
(1, 'frontend'),
(2, 'backend');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` int(11) NOT NULL,
  `nama` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama`) VALUES
(11, 'Aceh'),
(12, 'Sumatera Utara'),
(13, 'Sumatera Barat'),
(14, 'Riau'),
(15, 'Jambi'),
(16, 'Sumatera Selatan'),
(17, 'Bengkulu'),
(18, 'Lampung'),
(19, 'Kepulauan Bangka Belitung'),
(21, 'Kepulauan Riau'),
(31, 'DKI Jakarta'),
(32, 'Jawa Barat'),
(33, 'Jawa Tengah'),
(34, 'DI Yogyakarta'),
(35, 'Jawa Timur'),
(36, 'Banten'),
(51, 'Bali'),
(52, 'Nusa Tenggara Barat'),
(53, 'Nusa Tenggara Timur'),
(61, 'Kalimantan Barat'),
(62, 'Kalimantan Tengah'),
(63, 'Kalimantan Selatan'),
(64, 'Kalimantan Timur'),
(65, 'Kalimantan Utara'),
(71, 'Sulawesi Utara'),
(72, 'Sulawesi Tengah'),
(73, 'Sulawesi Selatan'),
(74, 'Sulawesi Tenggara'),
(75, 'Gorontalo'),
(76, 'Sulawesi Barat'),
(81, 'Maluku'),
(82, 'Maluku Utara'),
(91, 'Papua Barat'),
(92, 'Papua');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `flag` int(1) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `phone`, `email`, `password`, `description`, `alamat`, `flag`, `id_user`) VALUES
(3, 'Event Surabaya', '085859953545', 'event@gmail.com', 'frq03051997', 'event surabaya adalah salah satu EO yang ada di surabaya', 'jl raya soekarno hatta', 1, 93);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'developer'),
(2, 'administrator'),
(3, 'user'),
(4, 'fakultas'),
(5, 'jurusan'),
(6, 'mitra'),
(7, 'pasien'),
(8, 'dokter'),
(9, 'Publisher'),
(10, 'Customer'),
(11, 'admin_event');

-- --------------------------------------------------------

--
-- Table structure for table `role_menu`
--

CREATE TABLE `role_menu` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `menu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_menu`
--

INSERT INTO `role_menu` (`id`, `role`, `menu`) VALUES
(267, 1, 1),
(268, 1, 2),
(269, 1, 3),
(270, 1, 4),
(271, 1, 5),
(272, 1, 6),
(273, 1, 7),
(533, 7, 37),
(532, 7, 36),
(531, 7, 34),
(530, 8, 35),
(529, 8, 34),
(371, 4, 19),
(370, 4, 18),
(369, 4, 17),
(368, 4, 16),
(367, 4, 15),
(366, 4, 14),
(365, 4, 12),
(364, 4, 8),
(355, 5, 8),
(356, 5, 12),
(357, 5, 14),
(358, 5, 15),
(359, 5, 16),
(360, 5, 17),
(361, 5, 18),
(362, 5, 19),
(363, 5, 20),
(372, 4, 20),
(520, 6, 27),
(519, 6, 23),
(518, 6, 22),
(517, 6, 21),
(516, 6, 4),
(528, 8, 33),
(527, 8, 32),
(526, 8, 31),
(525, 2, 33),
(524, 2, 32),
(523, 2, 31),
(522, 2, 30),
(521, 2, 29),
(534, 9, 38),
(535, 11, 39);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` bigint(20) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `id_event`, `name`, `description`, `price`, `jumlah`, `kategori`) VALUES
(2, 4, 'ticket GOLD', 'dapet makan bro', 1000000, 500, 'vip');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `tanggal` date NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `id_event`, `name`, `description`, `tanggal`, `flag`) VALUES
(3, 4, 'expo', 'expo untuk presentasi', '2017-12-21', 1),
(4, 5, 'Tanggal Awal', 'Pameran 6 Demo Hasil Karya Disabilitas', '2017-12-19', 1),
(5, 5, 'Tanggal Akhir', 'Festival Kuliner', '2017-12-22', 1),
(6, 6, 'Pembukaan', 'Pembukaan acara', '2017-12-18', 1),
(7, 6, 'Penutupan', 'Penutupan acara', '2017-12-31', 1),
(8, 7, 'Pembukaan', 'Pembukaan acara', '2017-12-21', 1),
(9, 7, 'Penutupan', 'Penutupan acara', '2017-12-24', 1),
(10, 8, 'Pembukaan', 'Pembukaan acara', '2017-12-20', 1),
(11, 8, 'Penutupan', 'Penutupan acara', '2017-12-24', 1),
(12, 9, 'Hari H', 'Indie Creative Management 2018 : Startup Business', '2017-12-21', 1),
(13, 10, 'Pembukaan', 'Pembukaan diskon', '2017-12-08', 1),
(14, 10, 'Penutupan', 'Penutupan diskon', '2018-01-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `role`) VALUES
(1, 'developer', 'hX2iXXGf-6-jNoAidotAxlhUBZxhgNdS', '$2y$13$0N.Ruj8ZRE8GifJVTvAhyefdXX2qHMYhhlGih1O5Avy/z5WJGugI.', NULL, 'developer@mail.com', 10, 1477197448, 1479234102, 1),
(6, 'admin2', '', '$2y$13$4524Sg22U2WONHguFrL1jOa46Ewu141tTePywQFeQE9sEB47rt8Mu', NULL, 'admin2@its.ac.id', 10, 1502774176, 1502776687, 2),
(93, 'Event Surabaya', '_YCCofz8bmPOpql6r2aKHXPiolU89a4a', '$2y$13$XHa9GafaAnZtQEwUxIUT8u22Qahvr/9jrfa8XAAdT34Tycxtg/4Ka', NULL, 'event@gmail.com', 10, 1513834083, 1513834083, 9),
(94, 'ricoaw', 'H4xrAlQaywN16Kc4WiQDqQlf7bM9C0uk', '$2y$13$DGiYU6ylegNiVXsfJ4b.D.40ovV9WcjdDdVcGhjJ8Eq9l0S1Haydi', NULL, 'rico@gmail.com', 10, 1513837245, 1513837245, 10),
(95, 'faruq12', 'y_XQE5_hyuFVSKDBwUlYwWFH--VPBzhR', '$2y$13$EzgfFzOLVsAHhLQqlCMmjetdrdqlOrGvA0QloX82dRBcgv6qeu.cG', NULL, 'faruq12@gmail.com', 10, 1513842804, 1513842804, 10),
(92, 'customer99', 'B2wsTnZ9XiV-jm9AMJiLLRh_dIyIQRdD', '$2y$13$4kDurGVBXQ.h.20VOSBJKeB/veH2YiQ.CuaPmh3t.YZ6M79IfMOxS', NULL, 'customer99@gmail.com', 10, 1513833422, 1513833422, 10),
(91, 'customer91', 'PZRkwBGD9fx8pegxNzIV1b1Rojv9LHd2', '$2y$13$2MOEz2kv2ySexXZ61JIi5uOJ.zwWORDeHs0cwL8ZGSkE3w/7VFgWe', NULL, 'customer91@gmail.com', 10, 1513833322, 1513833322, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`),
  ADD KEY `menu` (`menu`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_location` (`id_location`),
  ADD KEY `id_publisher` (`id_publisher`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kab`),
  ADD KEY `id_kab` (`id_kab`),
  ADD KEY `id_kab_2` (`id_kab`);

--
-- Indexes for table `kategori_event`
--
ALTER TABLE `kategori_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module` (`module`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_menu`
--
ALTER TABLE `role_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`),
  ADD KEY `menu` (`menu`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `role` (`role`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action`
--
ALTER TABLE `action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=768;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kategori_event`
--
ALTER TABLE `kategori_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `role_menu`
--
ALTER TABLE `role_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=536;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_publisher`) REFERENCES `publisher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_4` FOREIGN KEY (`id_location`) REFERENCES `kabupaten` (`id_kab`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_5` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_event` (`id`);

--
-- Constraints for table `timeline`
--
ALTER TABLE `timeline`
  ADD CONSTRAINT `timeline_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
