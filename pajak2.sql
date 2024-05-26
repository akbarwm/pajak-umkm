-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2023 pada 07.31
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajak2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `LOGIN` varchar(50) DEFAULT NULL,
  `NAME` varchar(150) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `ENABLE` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `LOGIN`, `NAME`, `PASSWORD`, `ENABLE`) VALUES
(1, 'admin', 'Administrator', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `cover` varchar(64) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tanggal_upload` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `judul`, `isi`, `cover`, `kategori`, `tanggal_upload`) VALUES
(202, 'Hore! \'Diskon\' Pajak untuk UMKM Jadi Permanen', 'Menteri Keuangan Sri Mulyani Indrawati akan memperpanjang insentif Pajak Penghasilan (PPh) final untuk usaha mikro kecil dan menengah (UMKM) ditanggung pemerintah (DTP). Aturan itu tidak termasuk dalam Peraturan Menteri Keuangan (PMK) Nomor 3 Tahun 2022 yang mengatur perpanjangan masa berlaku insentif pajak untuk wajib pajak terdampak COVID-19.\r\nSri Mulyani mengatakan insentif pajak untuk UMKM sudah diatur dalam Undang-Undang (UU) Harmonisasi Peraturan Perpajakan (HPP). Adanya ketentuan mengenai batas peredaran bruto atau omzet tidak kena pajak senilai Rp 500 juta bagi UMKM itu lebih menguntungkan karena bersifat permanen, tidak hanya selama pandemi COVID-19.\r\n\r\nSri Mulyani menyebut pemerintah berkomitmen memberikan dukungan kepada UMKM melalui kebijakan fiskal. Dukungan juga diberikan berupa stimulus nonfiskal oleh kementerian dan lembaga (K/L) lain.\r\n\r\nMengenai kebijakan fiskal, UU HPP telah mengubah ketentuan tentang PPh mulai tahun pajak 2022. Beleid itu mengatur wajib pajak orang pribadi UMKM yang membayar pajak menggunakan skema PPh final UMKM akan mendapatkan fasilitas batas omzet tidak kena pajak senilai Rp 500 juta.\r\n\r\n', '1691027563.jpg', 'Artikel', 'Nov 27, 2023'),
(210, 'Upaya Tingkatkan Pemasaran Produk UMKM, Pemko Batam Gelar Pelatihan Packaging', 'Pemerintah Kota Batam melalui Dinas Koperasi dan Usaha Mikro, menggelar Pelatihan Packaging dalam Rangka Meningkatkan Pemasaran Produk UMKM Kota Batam, yang dibuka secara langsung oleh Sekda Kota Batam Jefridin, M. Pd, di Pacific Palace Hotel, Kamis (13/7/2023).\r\n\r\nâ€œApresiasi luar biasa dari Wali Kota Batam Muhammad Rudi atas terselenggaranya kegiatan ini, mudah-mudahan ilmu yang didapatkan hari ini dapat bermanfaat dan diterapkan. Salah satunya juga guna meningkatkan kesejahteraan ekonomi bapak ibu sekalian,â€ kata Jefridin mengawali sambutannya.\r\n\r\nDimana menurut Jefridin kegiatan yang diikuti sebanyak 100 peserta pelaku usaha mikro di Kota Batam ini selaras dengan tujuan pembangunan Pemerintah Kota Batam.\r\n\r\nâ€œKegiatan ini sesuai pesan Pak Wali Kota Batam Muhammad Rudi ditiap sambutannya, untuk mengambil manfaat dari masifnya pembangunan yang tengah dikerjakan oleh Pemerintah Kota Batam di bawah arahan Pak Wali,â€ jelas Jefridin.\r\n\r\nInfrastruktur yang tengah dibangun pemerintah tidak lain dimaksudkan guna meningkatkan kesejahteraan masyarakat Batam.\r\n\r\nDimana menurutnya hal ini sebagai bentuk pembukaan akses untuk menarik investor, hingga wisatawan baik lokal maupun mancanegara, untuk berkunjung dan memberikan manfaat bagi Kota Batam, salah satunya melalui pajak.\r\n\r\nAmbil manfaat dari kegiatan ini, buka usaha sendiri dengan memproduksi sesuatu berciri khas Batam, yang dapat dibawa oleh para pengunjung yang datang ke Batam.\r\n\r\nJefridin juga mengajak para pelaku usaha mikro untuk memperkenalkan budaya Batam. Dirinya mencotohkan salah satunya melalui budaya pantun, yang dapat disematkan pada packaging atau kemasan produk.\r\n\r\nâ€œTerimakasih mudah - mudahan pengetahuan yang didapat bisa bermanfaat untuk  pengusaha maupun untuk kesejahteraan masyarakat Batam sendiri,â€ tuturnya. \r\n\r\nKepala Dinas Koperasi dan Usaha Mikro Kota Batam, Hendri Arulan menyampaikan adapun maksud dari pelatihan ini sendiri ialah, guna memberikan wawasan kepada pelaku usaha mikro.\r\n\r\nâ€œTujuannya agar pengusaha dapat mengetahui  bagaimana pengemasan produk yang baik dan menarik, juga memiliki nilai jual,â€ katanya.\r\n\r\nKegiatan yang berlangsung selama dua hari ini juga akan disampaikan materi terkait, bagaimana fungsi dan kegunaan dari pengemasan produk.', '1691505067.jpg', 'Blog', 'Aug 08, 2023'),
(211, 'Pajak Pengiriman Menjadi Kendala Usaha UMKM Di Batam', 'Konsultan UMKM Batam terus melakukan perekrutan dan pembibingan kepada masyarakat. Salah satu mitranya adalah Polma Chaniago owner Cresspom bawang goreng yang berubah haluan dari usaha rajut menjadi usaha kuliner di 2019 lalu.\r\n\r\nAwal terjun Polma bertemu Konsultan UMKM dalam acara perekrutan dan pelatihan UMKM pemula di pusat UMKM Batam di mall Botania 2. Polma menghadiri acara ini bersama rekan-rekan dari perumahannya.\r\n\r\nâ€œawalnya saya bersama rekan komunitas pengrajut ikut acara pelatihan UMKM untuk warga atau masyarakat yang ingin membuat usaha. Di sana saya bertemu dengan konsultan dan kemudian saya mengemukakan ide membuat usaha bawang goreng karena gampang. Setelah konsultasi saya mendapat dukungan untuk melanjutkannya,â€ucap Polma.\r\n\r\nAlasan Polma memilih produk bawang goreng untuk usaha karena bawang goreng adalah bahan konsumsi umum, bahan bakunya mudah didapatkan, daya tahan lama dan perhitungan keuntungan produk lebih gampang mengingat ongkos produksi dan jumlah produksi yang dihasilkan. Pemasaran produk yang di produksi Polma lebih banyak di media sosial seperti market place penjualan offline dititipkan di warung-warung kecil berdasarkan relasi.\r\n\r\nâ€œpada awal merintis usaha ini, saya berusaha bagaimana produk sayabisa disukai. Salah satu caranya adalah bertanya langsung kepada konsumen tentang rasa dan ketahanan produk saya. Setelah itu saya berusaha memperbaiki lagi produk saya. saya melalukan beberapa hal seperti mengganti minyak yang digunakan mengganti cara masak pokoknya saya rubah terus. Saya menghabiskan waktu sekitar lima bulan untuk mendapatkan produk yang pas untuk konsumen saya,â€ ungkapnya kepada RRI (7/6/2023)\r\n\r\nKendala yang dihadapi Polma saat ini perihal customer enggan memesan produk untuk luar kota karena selain harus membayar ongkos kirim customer juga dibenbankan pajak khusus Batam. Hal ini mengakibatkan customer jarang melakukan pemesanan kembali. ', '1691505119.jpg', 'Blog', 'Aug 08, 2023'),
(212, 'Amsakar Achmad, Terus Dorong Pertumbuhan UMKM Menggerakkan Ekonomi Lokal', 'Wakil Walikota Kota Batam, Amsakar Achmad, terus memperkuat upayanya dalam mendorong pertumbuhan Usaha Mikro, Kecil, dan Menengah (UMKM) sebagai salah satu pilar utama dalam menggerakkan ekonomi lokal. Dalam beberapa tahun terakhir, perhatian yang lebih besar diberikan kepada sektor UMKM sebagai salah satu cara untuk menciptakan lapangan kerja, meningkatkan pendapatan masyarakat, dan mengurangi tingkat pengangguran.\r\n\r\nHal ini disampaikan Amsakar saat menghadiri pembukaan Anjung Asam Pedas Melaka dan Nasi Kebuli Burhani di Ruko Permata Hijau, Batam Center, Senin (8/5/2023).\r\n\r\nIa memberikan motivasi kepada para pelaku UMKM, serta menyampaikan komitmen Pemerintah Kota Batam untuk menciptakan lingkungan yang kondusif bagi pertumbuhan sektor UMKM.\r\n\r\nAmsakar menyadari pentingnya sektor UMKM dalam menggerakkan ekonomi lokal. Menurutnya, UMKM memiliki peran strategis dalam menciptakan lapangan kerja, memperkuat daya saing daerah, serta meningkatkan pendapatan dan kesejahteraan masyarakat. Dengan mendorong pertumbuhan sektor UMKM.\r\n\r\nâ€œSaya berharap dapat tercipta ekosistem yang mendukung bagi para pelaku UMKM untuk berkembang dan berinovasi lebih baik,â€ katanya.\r\n\r\nIa menyampaikan Pemko Batam telah menginisiasi berbagai program dan kegiatan yang bertujuan untuk memperkuat sektor UMKM di Kota Batam. Salah satunya adalah pelaksanaan pelatihan dan pendampingan bagi pemilik usaha UMKM agar memiliki keterampilan dan pengetahuan yang lebih baik dalam mengelola usahanya. Selain itu, upaya pemberdayaan UMKM juga dilakukan melalui fasilitasi akses pembiayaan, penyediaan infrastruktur yang mendukung, dan promosi produk UMKM secara luas.\r\n\r\nMelalui kebijakan-kebijakan progresif yang diterapkan, Pemko Batam, ia berharap dapat menciptakan ekosistem yang kondusif bagi UMKM untuk tumbuh dan berkembang. Dengan pertumbuhan UMKM yang kuat, diharapkan dapat meningkatkan kontribusi sektor ini terhadap pendapatan daerah serta mengurangi disparitas ekonomi antara wilayah di Kota Batam.\r\n\r\nâ€œKami percaya bahwa UMKM kita memiliki potensi yang besar untuk bersaing di tingkat regional maupun nasional,â€ tutupnya.', '1691555803.jpg', 'Pilih...', 'Dec 19, 2023'),
(213, 'Pemko Dukung UMKM Berkembang, Batam Pamerkan Produk Unggulan', 'Sekretaris Dinas Koperasi dan Usaha Mikro (KUM) Kota Batam Zulkarnain membuka Pameran Produk Unggulan dan Peluang Investasi Sektor Perdagangan, Perindustrian, Koperasi, UKM, Pariwisata dan Investasi di Mega Mall Batam Center, Kamis (03/03/2022).\r\n\r\nAtas nama Pemerintah Kota (Pemko) Batam, ia mengucapkan selamat dan sukses perihal pameran ini. Tidak lupa, ia berterima kasih atas terpilihnya Kota Batam sebagai tuan rumah untuk ke tujuh kalinya. Pameran ini bertujuan untuk mempromosikan produk-produk unggulan kabupaten kota peserta pameran.\r\n\r\nâ€œSerta memfasilitasi UMKM dan para pengrajin untuk berinteraksi secara langsung dengan pengunjung. Baik dalam melakukan promosi, transaksi dan negosiasi atas hasil karya dari masing-masing daerah,â€ kata Zulkarnain.\r\n\r\nZulkarnain menyebutkan, terdapat 18 stand dari perwakilan daerah yang berpartisipasi dalam kegiatan yang digelar tiga hari kedepan ini. Lebih lanjut, ia menilai penyelenggaraan pameran sangatlah penting di tengah upaya pembangunan ekonomi.\r\n\r\nâ€œSentra-sentra kerajinan atau UKM sebagai basis ekonomi kerakyatan serta ekonomi kreatif, perlu terus menerus dikembangkan,â€ ujar dia.\r\n\r\nSebagai tuan rumah, Batam sendiri menampilkan sebanyak 70 produk UMKM unggulan dari 169 usaha mikro yang telah di kurasi oleh Kementerian Koperasi dan UKM RI. Seperti, tenun enceng gondok yang sudah di ekspor ke Jepang, Turki dan rencananya juga akan ke Amerika. Kemudian, pets fashion yang telah di ekspor ke Singapura, Malaysia dan Thailand.\r\n\r\nJuga, keripik tempe sudah tembus ke Singapura sebanyak 200 kilogram per minggu. Serta Snack Banamia yang mencapai pasar Malaysia, ada juga produk Selindo dan masih banyak produk ungulan lainnya.\r\n\r\nâ€œBeberapa produk inovasi dari pelaku UMK Kota Batam yang ditampilkan mendapatkan apresiasi dari pengunjung. Produk ini juga akan ditampilkan pada acara puncak Gerakan Nasional Bangga Buatan Indonesia di Hotel Marriot Batu Ampar, 30 Maret 2022 mendatang,â€ ungkapnya.\r\n\r\nMenurutnya, Pemko Batam akan terus memberikan dukungan UMKM maupun koperasi agar terus berkembang dan berinovasi, terlebih binaan Dinas KUM Kota Batam. Untuk itu, ia mengimbau seluruh UMKM Batam segera ikut dalam program pemerintah pusat mulai dari bagaimana cara kemasan atau packing, pemasaran.\r\n\r\nâ€œSemua diberikan pelatihan serta difasilitasi mendapatkan sertifikat merk, halal, Nomor Izin Edar (NIE), Nomor Induk Berusaha (NIB),â€ pungkasnya.', '1691555873.jpg', 'Artikel', 'Aug 09, 2023'),
(214, 'UMKM di Batam Diminta Bersiap Menyambut Perbaikan Ekonomi yang Lebih Baik', 'Pelaku Usaha kecil menengah (UMKM) Batam diminta bersiap menyambut perbaikan ekonomi yang lebih baik, usai pandemi Covid-19 lalu.\r\n\r\nKepala Dinas Koperasi dan Usaha Kecil Menengah (DKUM) Kota Batam, Hendri Arulan, mengatakan saat ini ribuan UMKM sudah kembali pulih, usai dihantam badai pandemi.\r\n\r\nUsaha yang beberapa waktu lalu sempat tutup, perlahan dibuka kembali. Daya beli masyarakat yang sempat turun, kembali normal. Sehingga turut mendorong pemulihan ekonomi Batam.\r\nPengusaha muda diharapkan bisa menjadi mentor bagi UMKM naik kelas. Inovasi dalam kemasan, produk, dan penerapan sistem pembayaran digital juga harus dilaksanakan.\r\n\r\nâ€œKarena pasar UMKM Batam itu bukan lokal, melainkan luar negeri. Jadi sudah seharusnya punya daya saing. Makanya pelatihan kewirausahaan ini penting untuk digelar,â€ ujarnya.\r\n\r\nPertumbuhan sektor UMKM di Batam cukup tinggi. Setiap tahun ada ratusan usaha baru, dan perusahaan waralaba yang tumbuh di Batam.', '1691556352.png', 'Blog', 'Aug 09, 2023'),
(216, 'UMKM Kota Batam : Kuat, Hebat dan Berdaya Saing', 'Penguatan ekonomi kerakyatan menjadi salah satu poin penting dalam mewujudkan bangsa yang mandiri dan berdaya saing. Salah satu sektor pendukung ekonomi kerakyatan adalah Usaha Mikro Kecil dan Menengah (UMKM) yang saat ini berkembang dengan sangat pesat di seluruh Indonesia tidak terkecuali di Kota Batam. Tercatat lebih dari 90 % industri yang ada di Indonesia merupakan UMKM di mana hampir 40 % bergerak di bidang pangan.\r\n\r\nUMKM pangan juga merupakan aset Pemerintah Daerah (Pemda) untuk meningkatkan kesejahteraan masyarakat, penyediaan dan perluasan lapangan kerja yang telah teruji mampu bertahan pada saat badai krisis ekonomi melanda Indonesia. Dalam rangka mendukung pemberdayaan dan meningkatkan daya saing UMKM di Kota Batam, pada tanggal 25 Juni 2019 Direktorat Pemberdayaan Masyarakat dan Pelaku Usaha Badan POM menyelengarakan kegiatan Intervensi Keamanan Pangan Bagi UMKM Pangan. Kegiatan diselenggarakan di Auditorium Politeknik Negeri Batam dengan dihadiri sebanyak 250 UMKM Kota Batam yang merupakan binaan Pemda Kota Batam dan Ormas Aisyiyah, Ipemi dan Salimah.\r\nDalam arahannya Walikota Batam Bapak H. Muhammad Rudi, SE menyambut baik kegiatan yang diselenggarakan oleh Badan POM ini, sebagai bentuk sinergitas untuk menumbuhkan iklim yang kondusif bagi UMKM sehingga mampu tumbuh dan berkembang menjadi usaha yang tangguh dan mandiri baik di pasar dalam negeri dan internasional. Beliau menyampaikan Pemko Batam siap membantu terkait permodalan dan pemasaran bagi UMKM melalui fasilitasi pembiayaan pemerintah. Untuk mewujudkan Batam sebagai Bandar Kota Madani, peran UMKM pangan sangat penting dalam mengerakan ekonomi Kota Batam, tentunya harus mampu memproduksi pangan yang aman dan bermutu, tutup Walikota.\r\n\r\n \r\n\r\nKegiatan ini juga melibatkan Kanwil DJP Kepulauan Riau, KKP Pratama Batam Utara dan KKP Batam Selatan sebagai upaya jemput bola pengurusan NPWP sebagai persyaratan pengurusan sertifikat PIRT nantinya. Peserta mengikuti kegiatan dengan serius namun santai, diskusi yang aktif mewarnai sesi paparan para narasumber.', '1691563243.jpg', 'Blog', 'Aug 09, 2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_usaha`
--

CREATE TABLE `kategori_usaha` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `file_pdf` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_usaha`
--

INSERT INTO `kategori_usaha` (`id`, `judul`, `deskripsi`, `file_pdf`) VALUES
(1, 'agribisnis', 'Bidang agribisnis merujuk pada sektor industri yang melibatkan produksi, pengolahan, distribusi, dan pemasaran produk pertanian, peternakan, perikanan, dan kehutanan. Agribisnis melibatkan seluruh rantai nilai dari produksi bahan baku pertanian hingga produk akhir yang siap dikonsumsi atau digunakan.Dalam agribisnis, seperti pertanian, perkebunan, dan peternakan, para pelaku usaha perlu memperhatikan kewajiban perpajakan seperti pembayaran pajak penghasilan dari hasil panen atau produksi, penerapan pajak pertambahan nilai (PPN) pada penjualan produk pertanian, serta pemenuhan aturan pajak terkait dengan impor atau ekspor produk pertanian jika terlibat dalam perdagangan internasional.', 'jarkom terbaru.pdf'),
(2, 'fashion', 'Bidang fashion merujuk pada industri yang terkait dengan desain, produksi, dan distribusi pakaian, aksesori, dan produk tekstil lainnya. Ini mencakup semua aspek yang berkaitan dengan gaya busana, desain pakaian, tren mode, dan estetika visual dalam dunia pakaian dan penampilan.Dalam industri fashion, kategori bidang usaha seperti desain pakaian, produksi pakaian, dan penjualan produk fashion menghadapi tanggung jawab perpajakan yang meliputi pembayaran pajak penghasilan dari penjualan, pajak impor jika terlibat dalam impor bahan atau produk jadi, serta pemahaman terhadap pajak pertambahan nilai (PPN) yang berlaku dalam rantai distribusi produk fashion.', ''),
(3, 'otomotif', 'Bidang otomotif merujuk pada industri yang terkait dengan perancangan, produksi, penjualan, perawatan, dan pemeliharaan kendaraan bermotor seperti mobil, sepeda motor, truk, dan sejenisnya. Ini mencakup segala hal yang berkaitan dengan kendaraan, termasuk desain, teknologi, manufaktur, dan layanan purna jual.Dalam industri otomotif, seperti jasa perbaikan kendaraan, penjualan suku cadang, dan showroom mobil, pengusaha harus memperhitungkan kewajiban perpajakan seperti pembayaran pajak penghasilan dari penjualan kendaraan atau suku cadang, penerapan pajak pertambahan nilai (PPN) dalam transaksi penjualan sesuai dengan daerah masing- masing , serta pemahaman tentang pajak daerah yang mungkin berlaku dalam bisnis otomotif di wilayah tertentu.', ''),
(5, 'kosmetik', 'Bidang kosmetik merujuk pada industri yang terkait dengan produk-produk yang digunakan untuk perawatan tubuh dan penampilan, seperti produk kecantikan, perawatan kulit, riasan, parfum, dan produk perawatan rambut. .Dalam menjalankan bisnis kosmetik, ada beberapa macam kategori usaha produk kosmetik yang dijalankan, yakni apakah sebagai produsen kosmetik, distributor, atau menjual barang kosmetik impor. Hal itu juga dapat memengaruhi jenis pajak yang dikenakan dan menjadi tanggung jawabnya.Bukan hanya pengusaha kosmetik yang kegiatannya menjual barang dengan cara mengimpor produk kosmetik siap jual, namun produsen kosmetik biasanya juga melakukan kegiatan impor bahan baku kosmetik untuk produksinya.', ''),
(6, 'event', 'Bidang Event Organizer (EO) merujuk pada industri yang berkaitan dengan perencanaan, pengorganisasian, dan pelaksanaan berbagai jenis acara atau kegiatan.Dalam industri event organizer, perusahaan atau individu yang menyelenggarakan acara-acara, termasuk pameran, konser, dan konferensi, perlu memperhitungkan aspek perpajakan seperti pembayaran pajak penghasilan dari pendapatan yang diperoleh dari penyelenggaraan acara, penerapan pajak pertambahan nilai (PPN) pada penjualan tiket atau layanan terkait acara, serta pemenuhan kewajiban pelaporan dan pembayaran pajak sesuai dengan regulasi yang berlaku.', ''),
(10, 'kuliner', 'Bidang kuliner merujuk pada sektor industri yang berhubungan dengan produksi, penyajian, dan penjualan makanan dan minuman. Ini mencakup berbagai jenis usaha yang terlibat dalam persiapan makanan, kreasi menu, penyajian estetis, dan pengalaman kuliner secara keseluruhan.Kategori bidang usaha di sektor kuliner yang berkaitan dengan pajak meliputi restoran, kafe, dan warung makan, di mana pengusaha wajib memahami dan mematuhi aturan perpajakan terkait pembayaran pajak pendapatan, pajak restauran, serta pelaporan transaksi dengan benar sesuai dengan regulasi yang berlaku.', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_topik` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `komentar`, `tanggal`, `id_topik`, `id_user`) VALUES
(8, 'halo\r\n', '2023-12-24 13:29:09', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(5, 932644314, 442896225, 'dap'),
(6, 442896225, 932644314, 'awdwdsds'),
(7, 1212355134, 932644314, 'bas'),
(8, 932644314, 1212355134, 'oy'),
(9, 932644314, 751351734, 'halo'),
(10, 751351734, 932644314, 'hai'),
(11, 294380970, 1212355134, 'halo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `cover` varchar(64) NOT NULL,
  `file_pdf` varchar(60) NOT NULL,
  `file_ppt` varchar(60) NOT NULL,
  `ytb` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id`, `judul`, `isi`, `cover`, `file_pdf`, `file_ppt`, `ytb`) VALUES
(82, 'PAJAK PENGHASILAN 23/26', 'PPh pasal 23 adalah pajak yang dikenakan pada penghasilan atas modal, penyerahan jasa, atau hadiah dan penghargaan, selain yang telah dipotong PPh pasal 21. PPh pasal 26 adalah pajak yang dikenakan atas penghasilan yang diterima wajib pajak luar negeri dari Indonesia selain Bentuk Usaha Tetap (BUT) dari Badan Pemerintan, Subjek pajak Dalam Negeri, Penyelenggara kegiatan, BUT, Perwakilan Perusahaan Luar Negeri.', '1691542426.jpg', '1691542426.pdf', '1691542426.pptx', 'https://www.youtube.com/embed/wYYnfRmTCvI'),
(83, 'Materi PPh Pasal 25', 'Pajak Penghasilan Pasal 24 adalah peraturan yang mengatur hak wajib pajak untuk memanfaatkan kredit pajak mereka di luar negeri, untuk mengurangi nilai pajak terutang yang dimiliki di Indonesia.', '1699260723.', '1699260723.', '1699260723.', 'https://www.youtube.com/embed/6iKD9ZwL_WA'),
(84, 'Pajak Penghasilan Pasal 21/26-', 'PPh Pasal 21 adalah pajak atas penghasilan berupa gaji, upah, honorarium, tunjangan, dan pembayaran lain dengan nama dan dalam bentuk apapun sehubungan dengan pekerjaan atau jabatan, jasa, dan kegiatan yang dilakukan oleh orang pribadi Subjek Pajak dalam negeri.\r\nPPh Pasal 26 merupakan pajak yang dikenakan atas penghasilan yang diterima wajib pajak luar negeri dari Indonesia.', '1699260710.', '1699260710.', '1699260710.', 'https://www.youtube.com/embed/fhWTIJsgbzQ'),
(85, 'Pajak Penghasilan (PPh) Pasal 22', 'PPh 22 merupakan penganaan pajak terhadap badan usaha yang melakukan kegiatan perdangan impor, ekspor, atau re-impor. Seperti tercantum pada Undang-Undang atau UU No.36 Tahun 2008 tentang pajak penghasilan. \r\nPPh Pasal 22 juga merupakan salah satu bentuk pemotongan dan pemungutan\r\nPajak Penghasilan yang dilakukan oleh pihak lain terhadap Wajib Pajak', '1691558783.jpg', '1691558783.pdf', '1691558783.pptx', 'https://www.youtube.com/embed/lLjMdVqduy4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peraturan_pajak`
--

CREATE TABLE `peraturan_pajak` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `file_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peraturan_pajak`
--

INSERT INTO `peraturan_pajak` (`id`, `judul`, `deskripsi`, `kategori`, `file_pdf`) VALUES
(100, 'PERATURAN DAERAH KOTA BATAM NOMOR 2 TAHUN 2022', 'RETRIBUSI PENGGUNAAN TENAGA KERJA ASING', 'Peraturan Pajak Daerah Kota Batam', ''),
(101, 'DAERAH KABUPATEN MAGELANG NOMOR 4 TAHUN 2022', 'RETRIBUSI PERSETUJUAN BANGUNAN GEDUNG DAN RETRIBUSI\r\nPENGGUNAAN TENAGA KERJA ASING', 'Peraturan Pajak Daerah', 'Tax Planning Vol.1.pdf'),
(102, 'PERATURAN DAERAH KOTA BATAM NOMOR 1 TAHUN 2022', 'RETRIBUSI PERSETUJUAN BANGUNAN GEDUNG', 'Peraturan Pajak Daerah Kota Batam', ''),
(103, 'PERATURAN GUBERNUR DAERAH KHUSUS IBUKOTA JAKARTA NOMOR 41 TAHUN 2022', 'ATA CARA PEMBERIAN INSENTIF PEMUNGUTAN PAJAK DAERAH', 'Peraturan Pajak Daerah', ''),
(104, 'PERATURAN WALI KOTA CIMAHI NOMOR 24 TAHUN 2022', 'TARGET PENERIMAAN PAJAK DAERAH DAN RETRIBUSI DAERAH KOTA\r\nCIMAHI PER TRIWULAN TAHUN ANGGARAN 2022', 'Peraturan Pajak Daerah', ''),
(105, 'PERATURAN WALIKOTA BATAM NOMOR 20 TAHUN 2021', 'PENYESUAIAN TARIF RETRIBUSI PENGENDALIAN MENARA\r\nTELEKOMUNIKASI', 'Peraturan Pajak Daerah Kota Batam', ''),
(106, 'PERATURAN GUBERNUR SUMATERA SELATAN NOMOR 18 TAHUN 2022', 'PEMBEBASAN BEA BALIK NAMA KENDARAAN BERMOTOR PENYERAHAN KEDUA DAN SETERUSNYA SERTA PENGHAPUSAN SANKSI ADMINISTRASI BERUPA DENDA DAN BUNGA PAJAK KENDARAAN BERMOTOR', 'Peraturan Pajak Daerah', ''),
(107, 'PERATURAN WALIKOTA BATAM NOMOR 73 TAHUN 2020', 'PERUBAHAN TARIF RETRIBUSI PENGUJIAN KENDARAAN BERMOTOR KOTA BATAM', 'Peraturan Pajak Daerah Kota Batam', ''),
(108, 'PERATURAN WALIKOTA BATAM NOMOR 66 TAHUN 2020', 'PETUNJUK PELAKSANAAN PEMUNGUTAN RETRIBUSI RUMAH POTONG HEWAN', 'Peraturan Pajak Daerah Kota Batam', ''),
(109, 'PERATURAN WALIKOTA BATAM NOMOR 38 TAHUN 2021', 'TATA CARA PENAGIHAN DAN PENINDAKAN PAJAK DAERAH ', 'Peraturan Pajak Daerah Kota Batam', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `uid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`uid`, `username`, `password`) VALUES
('0447A21B4480', 'nabila', '$2y$10$Xmrr7aQpIMRJL79KRE0vhewBahegWGg1Vi4sbrzJGDSWuhIekmlya'),
('0447A21B4480F5E47737', 'superadmin', '$2y$10$99UkKFJJ/jUx.0XdBrnORu1QEhG458clTWCzH/6ReSEWBwx/xHuXS'),
('0603E7A51D47A21B44', 'rizki', '$2y$10$MviN.ymF2Ju2VHBBzli.ketfn2vMqD7hJHhny3ZFUB0uqF/Qb9R/G'),
('45H7F358', 'superadmin', '$2y$10$GrlJ2p/9PNHs.elO0KOpFOy4kM/uMqk2wZyOYzEVuFQW4aojpAgly'),
('63E7A531', 'admin', '$2y$10$ElB5fZwmNC5CJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_appoinment`
--

CREATE TABLE `tb_appoinment` (
  `id_appoinment` int(11) NOT NULL,
  `id_konsultans` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `appoinment_number` varchar(255) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `hari` date NOT NULL,
  `jam` time NOT NULL,
  `jenis_pajak` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `appoinment_status` varchar(50) NOT NULL,
  `unique_id_user` int(11) NOT NULL,
  `unique_id_konsultan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_appoinment`
--

INSERT INTO `tb_appoinment` (`id_appoinment`, `id_konsultans`, `id_users`, `appoinment_number`, `topik`, `hari`, `jam`, `jenis_pajak`, `media`, `appoinment_status`, `unique_id_user`, `unique_id_konsultan`) VALUES
(26, 2, 1, '6461230351', 'Pajak Kurs perusahaan', '2023-05-22', '14:15:00', 'PPh Pasal 22 dan 23', 'Live Chat', 'Accept', 1230351, 892512),
(42, 1, 13, '6484020922', 'Pembayaran tahunan PPh pasal 21', '2023-06-13', '14:28:00', 'PPh Pasal 21', 'Live Chat', 'Completed', 4020922, 636452),
(43, 5, 13, '6494020922', 'Pembayaran tahunan PPh pasal 21', '2023-06-23', '08:34:00', 'PPh Pasal 21', 'Live Chat', 'Accept', 4020922, 8078478),
(45, 1, 12, '6498061243', 'Pembayran tahunan PPh pasal 21', '2023-06-23', '10:24:00', 'PPh Badan', 'Live Chat', 'Completed', 8061243, 636452),
(46, 1, 14, '6498692176', 'Pembayaran tahunan PPh pasal 21', '2023-06-25', '15:05:00', 'PPh Badan', 'Live Chat', 'Completed', 8692176, 636452),
(47, 1, 12, '64B8061243', 'Pembayran tahunan PPh pasal 21', '2023-07-18', '17:05:00', 'PPh Pasal 21', 'Live Chat', 'Booked', 8061243, 636452),
(48, 6, 15, '64B8024078', 'Pembayran tahunan PPh pasal 21', '2023-07-28', '15:04:00', 'PPh Pasal 21', 'Live Chat', 'Reschedule', 8024078, 1896937),
(49, 1, 12, '64C8061243', 'Pembayran tahunan PPh pasal 21', '2023-08-01', '13:14:00', 'PPh Pasal 21', 'Live Chat', 'Booked', 8061243, 636452),
(50, 1, 16, '64C9380456', 'Makan2', '2023-08-01', '14:49:00', 'PPh Tahunan Orang Pribadi', 'Live Chat', 'Booked', 9380456, 636452),
(51, 1, 18, '64C571063', 'PPh 21', '2023-08-02', '16:30:00', 'PPh Pasal 21', 'Live Chat', 'Booked', 571063, 636452),
(52, 1, 19, '64C826823', 'Membahas pajak terutang PPh 21', '2023-08-09', '10:10:00', 'PPh Pasal 21', 'Live Chat', 'Reschedule', 826823, 636452),
(53, 1, 18, '64C571063', 'PPh 21', '2023-08-03', '12:21:00', 'PPh Pasal 21', 'Live Chat', 'Booked', 571063, 636452),
(65, 1, 22, '64D8798894', 'PPh 21', '2031-01-01', '10:12:00', 'PPh Pasal 21', 'Live Chat', 'Booked', 8798894, 636452),
(66, 1, 22, '64D8798894', 'PPh 28', '2023-08-10', '09:28:00', 'PPh Badan', 'Live Chat', 'Booked', 8798894, 636452),
(67, 1, 19, '64D826823', 'Membahas PPh 21', '2023-08-10', '13:42:00', 'PPh Pasal 21', 'Live Chat', 'Booked', 826823, 636452),
(68, 1, 22, '64D8798894', 'PPh 21', '2023-08-09', '13:48:00', 'PPh Pasal 21', 'Live Chat', 'Booked', 8798894, 636452),
(69, 3, 22, '64D8798894', 'PPh 21', '2023-08-09', '11:52:00', 'PPh Badan', 'Live Chat', 'Booked', 8798894, 116458),
(70, 1, 19, '64D826823', 'pph 21', '2023-08-10', '14:55:00', 'PPh Pasal 21', 'Live Chat', 'Booked', 826823, 636452),
(71, 1, 26, '64D3444402', 'PPh 21', '2023-08-11', '14:13:00', 'PPh Badan', 'Live Chat', 'Booked', 3444402, 636452),
(72, 1, 30, '6509614597', 'Bahas PPH21 untuk Usaha Saya', '2023-09-15', '10:10:00', 'PPh Pasal 21', 'Live Chat', 'Booked', 9614597, 636452),
(73, 1, 34, '6505148317', 'PPh 21 Karyawan masuk kerja dipertengahan tahun', '2023-09-28', '11:33:00', 'PPh Pasal 21', 'Live Chat', 'Booked', 5148317, 636452),
(74, 1, 39, '6561368199', 'pajak', '2023-11-30', '14:53:00', 'PPh Badan', 'Live Chat', 'Accept', 1368199, 636452);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_chat`
--

CREATE TABLE `tb_chat` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(11) NOT NULL,
  `outgoing_msg_id` int(11) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_chat`
--

INSERT INTO `tb_chat` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `created_at`) VALUES
(1, 1230351, 892512, 'Apa Kabar hari ini?', '2023-05-16 03:09:19'),
(2, 4104143, 636452, 'Hai apa kabar anda hari ini?\r\n', '2023-05-17 06:11:40'),
(3, 636452, 4104143, 'halo', '2023-05-17 07:47:47'),
(4, 636452, 4104143, 'p', '2023-05-17 07:55:52'),
(5, 636452, 4104143, 'selamat siang', '2023-05-17 08:02:10'),
(6, 892512, 1230351, 'halo', '2023-05-17 10:49:23'),
(7, 892512, 1230351, 'halo', '2023-05-17 11:46:48'),
(8, 636452, 4104143, 'halo', '2023-05-17 17:23:44'),
(9, 636452, 1466190, 'halo pak hakase', '2023-05-29 22:17:56'),
(10, 636452, 1466190, 'halo', '2023-05-29 22:19:31'),
(11, 636452, 1466190, 'asd', '2023-05-30 19:30:56'),
(12, 636452, 1466190, 'ad', '2023-05-30 19:30:58'),
(13, 636452, 1466190, 'kook', '2023-05-30 19:32:48'),
(14, 636452, 1466190, 'ada', '2023-05-30 19:56:11'),
(15, 636452, 1466190, 'asfjasgkjasnknaljnka jasnfoansfa kanklas', '2023-05-30 20:07:28'),
(16, 636452, 1466190, 'bagaimana kabar nya dok hao semua apakabar', '2023-05-30 20:12:04'),
(17, 636452, 1466190, 'halo', '2023-05-30 20:14:32'),
(18, 636452, 1466190, 'halo', '2023-05-30 20:20:13'),
(19, 636452, 1466190, 'asd', '2023-06-05 14:44:07'),
(24, 892512, 8061243, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-13 02:43:00'),
(25, 8061243, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-13 02:46:14'),
(26, 8061243, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-13 02:46:31'),
(27, 8061243, 892512, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-13 02:46:46'),
(28, 8061243, 892512, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-13 02:46:47'),
(29, 4020922, 636452, 'HALO?', '2023-06-13 14:27:23'),
(30, 4020922, 8078478, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-22 04:30:36'),
(31, 8061243, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-23 10:16:39'),
(32, 8061243, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-23 10:24:08'),
(33, 8061243, 636452, 'halo', '2023-06-23 10:24:58'),
(34, 8061243, 636452, 'nnn', '2023-06-23 10:59:47'),
(35, 8061243, 636452, 'saya adalah 636462', '2023-06-25 09:38:09'),
(36, 8061243, 636452, '636452', '2023-06-25 09:38:24'),
(37, 636452, 8061243, 'iya', '2023-06-25 09:42:12'),
(38, 8692176, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-06-25 19:05:57'),
(39, 636452, 8692176, 'halo apakabar', '2023-06-25 19:10:55'),
(40, 8692176, 636452, 'kabar saya baik , apa yang bisa saya bantu?', '2023-06-25 19:11:20'),
(41, 8061243, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-07-17 17:05:34'),
(42, 8024078, 1896937, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-07-25 10:01:50'),
(43, 8061243, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-07-30 19:11:25'),
(44, 9380456, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-07-31 13:50:22'),
(45, 571063, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-02 15:29:22'),
(46, 826823, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-03 09:00:27'),
(47, 571063, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-03 10:19:49'),
(48, 826823, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-07 13:50:59'),
(49, 826823, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-07 15:37:26'),
(50, 0, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-08 20:05:24'),
(51, 0, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-08 20:06:54'),
(52, 0, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-08 20:07:15'),
(53, 0, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-08 20:12:01'),
(54, 0, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-08 20:12:21'),
(55, 826823, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-08 20:17:16'),
(56, 8798894, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-09 09:12:50'),
(57, 8798894, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-09 09:28:22'),
(58, 826823, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-09 13:41:54'),
(59, 8798894, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-09 13:47:52'),
(60, 8798894, 116458, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-09 14:50:15'),
(61, 826823, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-09 14:54:30'),
(62, 3444402, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-08-10 14:10:08'),
(63, 9614597, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-09-14 10:53:55'),
(64, 5148317, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-09-22 10:29:25'),
(65, 1368199, 636452, 'Halo! Terima kasih telah menghubungi kami. Anda telah melakukan reservasi untuk sesi konsultasi. Silakan bersabar sejenak, kami akan segera menyambungkan Anda dengan konsultan kami begitu waktu reservasi tiba. Terima kasih atas kesabaran dan pengertian Anda.', '2023-11-30 14:50:26'),
(66, 1368199, 636452, 'p', '2023-11-30 14:53:31'),
(67, 636452, 636452, 'p', '2023-11-30 14:54:16'),
(68, 1368199, 636452, 'tes', '2023-11-30 14:54:24'),
(69, 1368199, 636452, 'halo', '2023-11-30 14:55:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_entry`
--

CREATE TABLE `tb_entry` (
  `uid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsultan`
--

CREATE TABLE `tb_konsultan` (
  `id_konsultan` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `profil_pic` varchar(255) DEFAULT NULL,
  `alumnus` varchar(255) DEFAULT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `jenjang_karir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_konsultan`
--

INSERT INTO `tb_konsultan` (`id_konsultan`, `unique_id`, `nama`, `email`, `password`, `bio`, `profil_pic`, `alumnus`, `bidang`, `status`, `pengalaman`, `jenjang_karir`) VALUES
(1, 636452, 'Drs. Hakase Miura', 'adehilman2002@gmail.com', 'AD3010405', 'Tampan dan berani', 'team-2.jpg', NULL, 'PPh Badan', 'Online', '1 Tahun', NULL),
(2, 892512, 'Hinata Hyuga', 'hinata@demo.com', 'password', NULL, 'hinata.jpg', NULL, 'PPh Pasal 21', 'Online', '3 Tahun', NULL),
(3, 116458, 'Usman Akbar', 'usmanakbar@demo.com', 'password', NULL, 'pakar-5.png', NULL, 'PPh Tahunan Pribadi', 'Online', '10 Tahun', NULL),
(4, 120021, 'Melisa Syla', 'melisasyla@demo.com', 'password', NULL, 'pakar-6.jpg', NULL, 'PPh Badan', 'Online', '6 Tahun', NULL),
(5, 8078478, 'Park Kim', 'parkkimwho@gmail.com', 'Park', 'Korean-Indonesian', 'pakar-3.png', 'Universitas Korea', 'PPh Badan', 'Online', '5 Tahun', 0),
(6, 1896937, 'Suguha', 'suguha@gmail.com', '12345', 'Indonesian', 'download (1).jfif', 'Universitas Korea', 'PPh Pasal 21', 'Online', '5 Tahun', 0),
(7, 9510694, 'Mikasa Ackerman', 'mikasa@demo.com', '1', 'ackermab', '1686902201745.jpg', 'Universitas Korea', 'PPh Badan', 'Online', '5 Tahun', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto_profil` varchar(255) DEFAULT 'default.png',
  `status` varchar(20) DEFAULT NULL,
  `last_seen` datetime NOT NULL DEFAULT current_timestamp(),
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `unique_id`, `email`, `password`, `nama`, `foto_profil`, `status`, `last_seen`, `no_hp`) VALUES
(1, 1230351, 'adehilman2002@gmail.com', 'password', 'Ade Hilman', 'IMG-212.jpg', 'Online', '2022-12-29 23:51:52', ''),
(2, 4231121, 'demo@demo.com', 'password', 'Zavie Kurniawan', 'default.png', 'Online', '2022-12-30 01:25:36', ''),
(3, 0, 'mina@demo.com', 'password', 'Mina Hashikawa', 'default.png', 'Online', '2022-12-30 01:26:25', ''),
(6, 4104143, 'alfan@demo.com', 'password', 'Alfan Rey', 'alfan.jpg', 'Online', '2022-12-30 15:17:04', ''),
(7, 0, 'adehilman2002@gmail.com', 'password', 'Junanda Ika', 'default.png', 'Online', '2023-01-04 06:18:56', ''),
(8, 0, 'junanda@gmail.com', 'password', 'Junanda Ika', 'default.png', 'Online', '2023-01-04 06:19:34', ''),
(9, 262745, 'ghifa@gmail.com', '$2y$10$Hv1JPLi745Mva34xzTjXTOxEo36bN2r64liaFD46NYU2cBA.63yhO', 'Ghifara', 'default.png', 'Online', '2023-05-29 11:21:49', ''),
(10, 43729, 'ghifa@gmail.com', '$2y$10$OocyDl0serjqDVZJiuoYsOoW28edIsufnMZEgdFzYht72fF..Kp8y', 'Ghifara', 'default.png', 'Online', '2023-05-29 11:24:31', ''),
(11, 1466190, 'gilgor@gmail.com', '$2y$10$9GbnMUP9NX7UIyCwH.L/l.I.fngczqhDbWTKSHgJZPp7NpqpgN.JS', 'Gilgor', 'default.png', 'Online', '2023-05-29 11:32:16', ''),
(12, 8061243, 'kiana@gmail.com', '$2y$10$njhkrZrjtaS0cYGZwjSAdOEYzEHnJuqcqo9istUWmd/fvV2NwjSky', 'Kiana', 'default.png', 'Online', '2023-06-06 19:47:50', ''),
(13, 4020922, 'suherman@gmail.com', '$2y$10$.BIBAf01n23ue9c6KLXVd.YRrSzH1BfaRJWPczEMh8N.2OdXuZ.eq', 'Suherman', 'default.png', 'Online', '2023-06-13 14:21:44', ''),
(14, 8692176, 'riski10@gmail.com', '$2y$10$4W6P.f2HrYF0ESN2W7WbUOMHiuJOMywQzrVB0ml7pybyRVsSygRBm', 'Muhammad Rizki', 'default.png', 'Online', '2023-06-25 19:04:04', ''),
(15, 8024078, 'hilman@demo.com', '$2y$10$x1tUtMpVa5BHKUK6TvUrrOsh4XvFERhPLXmaI9MvXfLovClLlNbkO', 'Ade', 'default.png', 'Online', '2023-07-25 10:00:45', ''),
(16, 9380456, 'gilangbagus.rama@gmail.com', '$2y$10$gvxrwHLMLug9hGdVbPiiLe1MXI2sgQ.HulzmDYerLx9BnP0mHi0e6', 'Gilang Bagus Ramadhan', 'default.png', 'Online', '2023-07-31 13:47:55', ''),
(17, 9133148, 'gilangbagus.rama@gmail.com', '$2y$10$MaTbYsOe9nThsUSO37yJLe8Mfx/vtP6iBzAYt.vfHwyMe9hY0iT5e', 'Gilang Bagus Ramadhan', 'default.png', 'Online', '2023-07-31 13:48:16', ''),
(18, 571063, 'nabillaseptia30@gmail.com', '$2y$10$lg8pdcBkh42zWq8VEvinqer4ZkyKVOFNJShQSKJNtK9YMCdKPSkeW', 'Nabilla', 'default.png', 'Online', '2023-08-02 15:28:07', ''),
(19, 826823, 'fadindaarindi@gmail.com', '$2y$10$e7UcaiQIctIBe0Dhv.8OheFDcaIsqevCSw9HZTme/qlIwsDHeXW3W', 'Fadinda', 'default.png', 'Online', '2023-08-03 08:59:41', ''),
(20, 2677300, 'putridame109@gmail.com', '$2y$10$jdU48c9UroIlJzRXtneXbOtw564qHDAFnZnrRHA42tTZGF9vF3CmW', 'Putri Dame Manurung', 'default.png', 'Online', '2023-08-04 16:25:04', ''),
(21, 6435095, 'fajrikurnia1213@gmail.com', '$2y$10$0xT7ehZ.zNG6/ErSgR9veuL8xuyXgkBC/1jObTSSQ7FKj3rivPiIC', 'Fajri kurnia', 'default.png', 'Online', '2023-08-08 16:01:26', ''),
(22, 8798894, 'diahptri1711@gmail.com', '$2y$10$SMBPSkN6UlcOHMXrrPwAM.KZbogsH/QJM526F.5ihXFYhsIjzIHeC', 'Diah', 'default.png', 'Online', '2023-08-09 09:10:42', ''),
(23, 1868175, 'wahyuconsulting@gmail.com', '$2y$10$GLOQzB1qN0wVdq4nh008B.K5VrwtRIQCbRxyNtkHui9N23pm.TdBW', 'Wahyudin', 'default.png', 'Online', '2023-08-09 15:39:04', ''),
(24, 9679760, 'yentinasiregar@gmail.com', '$2y$10$7v4ltRNC0invMKgi3I9pYOOZgXKRlvluQS.b.AMhSX0WBFXJDbA1e', 'Yentina Siregar', 'default.png', 'Online', '2023-08-09 16:31:18', ''),
(25, 2882067, 'windaayunngtyas21@gmail.com', '$2y$10$J2x7M7aM8z1HJ3G3ovO.Iu5c3ba3hY4R43cCpDr2hgcxzM5Id5H5.', 'Ni Putu Winda Ayuningtyas', 'default.png', 'Online', '2023-08-09 17:08:12', ''),
(26, 3444402, 'faudyanilam3503@gmail.com', '$2y$10$cAfJ9xLcvjNgw7687uV3bu6u9Wlg6hWsRI2kkFbbxw24Zntg12/Iy', 'faudya nilam', 'default.png', 'Online', '2023-08-10 13:11:54', ''),
(27, 8688451, 'andisyarifuddin@polnes.ac.id', '$2y$10$G9EmnXjyGwUYrcPfB3XlwOUAwzdUJn2BV0JTHzbx/1dVrk46BR5H.', 'Andi Syarifuddin', 'default.png', 'Online', '2023-08-23 12:29:43', ''),
(28, 1564368, 'andisyarifuddin@polnes.ac.id', '$2y$10$AF0oyy5Up5iD2stiKuobnuLIGg7r7lmFnpPlWXMSBEdtiNVMftbBW', 'Andi Syarifuddin', 'default.png', 'Online', '2023-08-23 12:42:17', ''),
(29, 7434293, 'andisyarifuddin@polnes.ac.id', '$2y$10$gQkhKfgRQl12M5mdoUdHDOpGwi1JxiZRExy.ZWlu6TV6nVGXaOV/.', 'Andi Syarifuddin', 'default.png', 'Online', '2023-08-23 12:42:49', ''),
(30, 9614597, 'fulan_ramadhan@gmail.com', '$2y$10$A74SrNB4FCHOMCagOjBmLuSIwdPsx2KJOSoq6.fXs9lPxFcuA/RZK', 'Fulan Ramadhan', 'default.png', 'Online', '2023-09-14 10:52:25', ''),
(31, 6072660, 'dianaraputri47@gmail.com', '$2y$10$1UHm0EQckReR8DpOCQzT7OPAZLExQL2.NOlgQLVgPxi4u1fy5VRZy', 'dian', 'default.png', 'Online', '2023-09-14 11:57:38', ''),
(32, 6597877, 'ramadaniputri795@gmail.com', '$2y$10$UCo0HaVXmk.hX.XXhxmc/uD/WOZqyifAw7vnB0/Xt.m88Z02EZ53S', 'Putri Rahmadani Candra', 'default.png', 'Online', '2023-09-14 11:59:49', ''),
(33, 7597799, 'nabilaamelia1807@gmail.com', '$2y$10$lGUVvJM0nd66.DefWSQsHeByy1PQh2FX9NfzN8biVM1ka84D1WN.K', 'Nabila Amelia', 'default.png', 'Online', '2023-09-14 12:12:08', ''),
(34, 5148317, 'bukusia55@gmail.com', '$2y$10$Np5uk52OvJsv2O3Bka2T8e332mlTiWd2DkcobDyJD2/ZCI6MA23i6', 'buku yara ', 'default.png', 'Online', '2023-09-14 12:48:50', ''),
(35, 9387902, 'bukusia55@gmail.com', '$2y$10$4B/2lldkQ/smBznpMgnA/upAJNX9NaRRApuOg57.Utgjx/Sr1aXyy', 'bukusia yara', 'default.png', 'Online', '2023-09-14 13:04:43', ''),
(36, 8336463, 'bukusia55@gmail.com', '$2y$10$z6pkC1ZKKEPtal5r49Ie9uo7o5Qu6m4tPdy6kjfVLNV8y5OBUZARa', 'bukusi yara', 'default.png', 'Online', '2023-09-14 13:14:52', ''),
(37, 3773954, 'bukusia55@gmail.com', '$2y$10$XDVtPZafIN8oBYCgqEFolev1ow7UokXGTmSAgKizNCTUFTa2gpT1S', 'bukusia yara', 'default.png', 'Online', '2023-09-14 13:20:27', ''),
(38, 8446133, 'bukusia55@gmail.com', '$2y$10$q2j0eKLT1qJrMtJHffUcpeEcBPtI3Tbd6xe6xSS37A2Us5orjJQ5m', 'bukusia yara', 'default.png', 'Online', '2023-09-14 13:26:05', ''),
(39, 1368199, 'daffaaqshal04@gmail.com', '$2y$10$RAnas/1S8fdKp93MJPPAReazEZyezTt2FN66kuT5i0WeymSFA.6vu', 'Daffa', 'default.png', 'Online', '2023-10-26 15:40:45', ''),
(40, 6790308, 'putaranmaut12@gmail.com', '$2y$10$ggQgcoA6n.cIeEhNZeqC8.GQP3siAL1bfo5Vev9eFy5GnTps3ob2u', 'Rafi Kurniawan', 'default.png', 'Online', '2023-12-07 11:26:19', ''),
(41, 9280536, 'root', '$2y$10$RX28OyowjYHBJ/EP/cOvQeDYywWgs75o5T9LDFMBGUsHJL6k5naa2', 'Adip  Mamat', 'default.png', 'Online', '2023-12-07 14:09:57', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topik`
--

CREATE TABLE `topik` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `topik`
--

INSERT INTO `topik` (`id`, `judul`, `deskripsi`, `tanggal`, `id_user`) VALUES
(1, 'Belajar Python', 'sssssssssssss', '2023-12-14 11:41:23', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `unique_id`, `nama`, `role`, `email`, `password`, `img`, `status`) VALUES
(1, 0, 'Daffa', '', 'daffaaqshal04@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', ''),
(2, 0, 'Junn', '', 'daffaaqshal@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', ''),
(8, 1608449461, 'rafi', '', 'rafi@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1702970795foto_contoh.jpg', 'Active now'),
(9, 0, 'Yayan Ruhian', '', 'yayan@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_konsultan`
--

CREATE TABLE `users_konsultan` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users_konsultan`
--

INSERT INTO `users_konsultan` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(6, 932644314, 'Daffa Aqshal', 'PPh 22', 'daffaaqshal@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1702544887foto_contoh.jpg', 'Active now'),
(7, 442896225, 'Satria Mangasi', 'PPh badan', 'satria@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1702544912foto_contoh.jpg', 'Offline now'),
(8, 294380970, 'Rehan Alfitrah', 'PPh 21', 'rehan@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1702871170foto_contoh.jpg', 'Offline now'),
(9, 1212355134, 'Irfan Abbas', 'PPh pasal 21', 'abbas@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1702891196foto_contoh.jpg', 'Offline now'),
(10, 751351734, 'Rafi Kurniawan', 'UMKM', 'rafi@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1702976447foto_contoh.jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_usaha`
--
ALTER TABLE `kategori_usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topik_komentar` (`id_topik`),
  ADD KEY `user_komenter` (`id_user`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peraturan_pajak`
--
ALTER TABLE `peraturan_pajak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indeks untuk tabel `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  ADD PRIMARY KEY (`id_appoinment`),
  ADD KEY `tb_appointment` (`id_konsultans`),
  ADD KEY `tb_users` (`id_users`);

--
-- Indeks untuk tabel `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indeks untuk tabel `tb_entry`
--
ALTER TABLE `tb_entry`
  ADD PRIMARY KEY (`uid`);

--
-- Indeks untuk tabel `tb_konsultan`
--
ALTER TABLE `tb_konsultan`
  ADD PRIMARY KEY (`id_konsultan`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topik_user` (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_unik` (`email`);

--
-- Indeks untuk tabel `users_konsultan`
--
ALTER TABLE `users_konsultan`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT untuk tabel `kategori_usaha`
--
ALTER TABLE `kategori_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `peraturan_pajak`
--
ALTER TABLE `peraturan_pajak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT untuk tabel `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  MODIFY `id_appoinment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `tb_chat`
--
ALTER TABLE `tb_chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `tb_konsultan`
--
ALTER TABLE `tb_konsultan`
  MODIFY `id_konsultan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `topik`
--
ALTER TABLE `topik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users_konsultan`
--
ALTER TABLE `users_konsultan`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `topik_komentar` FOREIGN KEY (`id_topik`) REFERENCES `topik` (`id`),
  ADD CONSTRAINT `user_komenter` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  ADD CONSTRAINT `tb_appointment` FOREIGN KEY (`id_konsultans`) REFERENCES `tb_konsultan` (`id_konsultan`),
  ADD CONSTRAINT `tb_users` FOREIGN KEY (`id_users`) REFERENCES `tb_users` (`id_users`);

--
-- Ketidakleluasaan untuk tabel `topik`
--
ALTER TABLE `topik`
  ADD CONSTRAINT `topik_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
