-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 10:06 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
