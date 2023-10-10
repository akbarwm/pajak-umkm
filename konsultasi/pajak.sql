-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 03:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajak`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `isi` text NOT NULL,
  `cover` varchar(64) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `judul`, `isi`, `cover`, `kategori`) VALUES
(20, 'Pajak merupakan iuran wajib dari rakyat kepada negaranya', 'Pajak adalah iuran rakyat kepada kas negara berdasarkan undang-undang (sehingga dapat dipaksakan) dengan tiada mendapat balas jasa secara langsung. Pajak dipungut berdasarkan norma-norma hukum guna menutup biaya produksi barang-barang dan jasa kolektif untuk mencapai kesejahteraan umum.', '1669184470.jpg', 'Information'),
(21, 'Pajak merupakan iuran wajib dari rakyat kepada negaranya', 'Pajak dapat di berikan kepada negara nya', '1669184558.jpg', 'Information'),
(22, 'Pajak merupakan iuran wajib dari rakyat kepada negaranya', 'pajak dapat dibayarkan kepada pengguna wajib pajak', '1669184597.jpg', 'Information'),
(23, 'Pajak merupakan iuran wajib dari rakyat kepada negaranya', 'pajak dapat menyubang kepada negara', '1669184637.jpg', 'Information'),
(27, 'Bayar Pajak', 'Bayar pajak merupapakan iuran wajib kepada negara', '1669814765.jpg', 'Information'),
(28, 'Pajak terbaru', 'PPh atau Pajak Penghasilan adalah jenis pajak yang dibebankan kepada orang pribadi maupun badan usaha atas penghasilan yang diterima.\r\n\r\nPenghasilan yang menjadi objek pajak, meliputi gaji, upah, tunjangan, honor, komisi, hadiah, laba usaha, keuntungan karena penjualan atau pengalihan harta, dan lainnya yang diatur dalam aturan perundang-undangan.', '1669967043.jpg', 'Information'),
(29, 'Penarikan pajak terbaru', 'alam hal Wajib Pajak diperbolehkan menunda penyampaian Surat Pemberitahuan Tahunan dan ternyata penghitungan sementara pajak yang terutang kurang dari jumlah pajak yang sebenarnya terutang atas kekurangan pembayaran pajak tersebut, dikenai bunga sebesar 2% (dua persen) per bulan yang dihitung dari saat berakhirnya batas waktu penyampaian Surat Pemberitahuan Tahunan sampai dengan tanggal dibayarnya kekurangan pembayaran tersebut dan bagian dari bulan dihitung penuh 1 (satu) bulan.', '1669967144.jpg', 'Blog');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `uid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`uid`, `username`, `password`) VALUES
('21511231', 'admin', 'admin'),
('44423123', 'admin', '$2y$10$ElB5fZwmNC5CJ'),
('86757645', 'admin', '$2y$10$uJLeBqFCKGWyc');

-- --------------------------------------------------------

--
-- Table structure for table `tb_appoinment`
--

CREATE TABLE `tb_appoinment` (
  `id_appoinment` int(15) NOT NULL,
  `id_konsultans` int(15) NOT NULL,
  `id_users` int(15) NOT NULL,
  `appoinment_number` varchar(255) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `hari` date NOT NULL,
  `jam` time NOT NULL,
  `jenis_pajak` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `appoinment_status` varchar(50) NOT NULL,
  `unique_id_user` int(255) NOT NULL,
  `unique_id_konsultan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_appoinment`
--

INSERT INTO `tb_appoinment` (`id_appoinment`, `id_konsultans`, `id_users`, `appoinment_number`, `topik`, `hari`, `jam`, `jenis_pajak`, `media`, `appoinment_status`, `unique_id_user`, `unique_id_konsultan`) VALUES
(0, 2, 1, '6461', 'Pajak Kurs perusahaan', '2023-05-20', '09:45:00', 'PPh Pasal 22 dan 23', 'Live Chat', 'Accept', 0, 0),
(9, 1, 6, '0005', 'Pembayaran bangunan', '2023-12-12', '14:52:12', 'PPh 21', 'Zoom', 'Accept', 0, 0),
(15, 1, 8, '0008', 'Pembayaran tahunan PPh pasal 21', '2023-02-12', '14:40:05', 'PPh Badan', 'Live Chat', 'Booked', 0, 0),
(24, 1, 6, '6466', 'Pembayaran tahunan PPh pasal 21', '2023-05-18', '11:50:00', 'PPh Tahunan Orang Pribadi', 'Live Chat', 'Accept', 4104143, 0),
(25, 1, 1, '6461', 'Pembayaran tahunan PPh pasal 21', '2023-05-18', '12:50:00', 'PPh Pasal 21', 'Live Chat', 'Accept', 1230351, 0),
(26, 2, 1, '6461230351', 'Pajak Kurs perusahaan', '2023-05-22', '14:15:00', 'PPh Pasal 22 dan 23', 'Live Chat', 'Accept', 1230351, 892512),
(27, 1, 6, '6464104143', 'Pembayaran tahunan PPh pasal 21', '2023-05-18', '10:20:00', 'PPh Pasal 25', 'Live Chat', 'Booked', 4104143, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_chat`
--

CREATE TABLE `tb_chat` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_chat`
--

INSERT INTO `tb_chat` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `created_at`) VALUES
(1, 1230351, 892512, 'Apa Kabar hari ini?', '2023-05-16 03:09:19'),
(2, 4104143, 636452, 'Hai apa kabar anda hari ini?\r\n', '2023-05-17 06:11:40'),
(3, 636452, 4104143, 'halo', '2023-05-17 07:47:47'),
(4, 636452, 4104143, 'p', '2023-05-17 07:55:52'),
(5, 636452, 4104143, 'selamat siang', '2023-05-17 08:02:10'),
(6, 892512, 1230351, 'halo', '2023-05-17 10:49:23'),
(7, 892512, 1230351, 'halo', '2023-05-17 11:46:48'),
(8, 636452, 4104143, 'halo', '2023-05-17 17:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_entry`
--

CREATE TABLE `tb_entry` (
  `uid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_entry`
--

INSERT INTO `tb_entry` (`uid`) VALUES
('76446546');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsultan`
--

CREATE TABLE `tb_konsultan` (
  `id_konsultan` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `profil_pic` varchar(255) DEFAULT NULL,
  `alumnus` varchar(255) DEFAULT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `jenjang_karir` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_konsultan`
--

INSERT INTO `tb_konsultan` (`id_konsultan`, `unique_id`, `nama`, `email`, `password`, `bio`, `profil_pic`, `alumnus`, `bidang`, `status`, `pengalaman`, `jenjang_karir`) VALUES
(1, 636452, 'Drs. Hakase Miura', 'adehilman2002@gmail.com', 'AD3010405', 'Tampan dan berani', 'team-2.jpg', NULL, 'PPh Badan', 'Online', '1 Tahun', NULL),
(2, 892512, 'Hinata Hyuga', 'hinata@demo.com', 'password', NULL, 'hinata.jpg', NULL, 'PPh Pasal 21', 'Online', '3 Tahun', NULL),
(3, 0, 'Usman Akbar', 'usmanakbar@demo.com', 'password', NULL, 'pakar-5.png', NULL, 'PPh Tahunan Pribadi', 'Online', '10 Tahun', NULL),
(4, 0, 'Melisa Syla', 'melisasyla@demo.com', 'password', NULL, 'pakar-6.jpg', NULL, 'PPh Badan', 'Online', '6 Tahun', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto_profil` varchar(255) DEFAULT 'default.png',
  `status` varchar(20) DEFAULT NULL,
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `unique_id`, `email`, `password`, `nama`, `foto_profil`, `status`, `last_seen`) VALUES
(1, 1230351, 'adehilman2002@gmail.com', 'password', 'Ade Hilman', 'IMG-212.jpg', 'Online', '2022-12-29 23:51:52'),
(2, 4231121, 'demo@demo.com', 'password', 'Zavie Kurniawan', 'default.png', 'Online', '2022-12-30 01:25:36'),
(3, 0, 'mina@demo.com', 'password', 'Mina Hashikawa', 'default.png', 'Online', '2022-12-30 01:26:25'),
(6, 4104143, 'alfan@demo.com', 'password', 'Alfan Rey', 'alfan.jpg', 'Online', '2022-12-30 15:17:04'),
(7, 0, 'adehilman2002@gmail.com', 'password', 'Junanda Ika', 'default.png', 'Online', '2023-01-04 06:18:56'),
(8, 0, 'junanda@gmail.com', 'password', 'Junanda Ika', 'default.png', 'Online', '2023-01-04 06:19:34'),
(9, 262745, 'ghifa@gmail.com', '$2y$10$Hv1JPLi745Mva34xzTjXTOxEo36bN2r64liaFD46NYU2cBA.63yhO', 'Ghifara', 'default.png', 'Online', '2023-05-29 11:21:49'),
(10, 43729, 'ghifa@gmail.com', '$2y$10$OocyDl0serjqDVZJiuoYsOoW28edIsufnMZEgdFzYht72fF..Kp8y', 'Ghifara', 'default.png', 'Online', '2023-05-29 11:24:31'),
(11, 1466190, 'gilgor@gmail.com', '$2y$10$9GbnMUP9NX7UIyCwH.L/l.I.fngczqhDbWTKSHgJZPp7NpqpgN.JS', 'Gilgor', 'default.png', 'Online', '2023-05-29 11:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `LOGIN` varchar(50) DEFAULT NULL,
  `NAME` varchar(150) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `ENABLE` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `LOGIN`, `NAME`, `PASSWORD`, `ENABLE`) VALUES
(1, 'admin', 'Administrator', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  ADD PRIMARY KEY (`id_appoinment`),
  ADD KEY `tb_appointment` (`id_konsultans`),
  ADD KEY `tb_users` (`id_users`);

--
-- Indexes for table `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `tb_entry`
--
ALTER TABLE `tb_entry`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tb_konsultan`
--
ALTER TABLE `tb_konsultan`
  ADD PRIMARY KEY (`id_konsultan`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  MODIFY `id_appoinment` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_chat`
--
ALTER TABLE `tb_chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_konsultan`
--
ALTER TABLE `tb_konsultan`
  MODIFY `id_konsultan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  ADD CONSTRAINT `tb_appointment` FOREIGN KEY (`id_konsultans`) REFERENCES `tb_konsultan` (`id_konsultan`),
  ADD CONSTRAINT `tb_users` FOREIGN KEY (`id_users`) REFERENCES `tb_users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
