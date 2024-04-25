-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2024 pada 17.39
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
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `about` text NOT NULL,
  `information_company1` text NOT NULL,
  `information_company2` text NOT NULL,
  `information_company3` text NOT NULL,
  `information_company4` text NOT NULL,
  `number1` int(11) DEFAULT NULL,
  `number2` int(11) DEFAULT NULL,
  `number3` int(11) DEFAULT NULL,
  `number4` int(11) DEFAULT NULL,
  `lang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `about`, `information_company1`, `information_company2`, `information_company3`, `information_company4`, `number1`, `number2`, `number3`, `number4`, `lang`) VALUES
(1, '<h2 class=\"mb-4\"><font color=\"#000000\">Welcome</font></h2>\r\n		            <font size=\"4\" color=\"#00CC00\"><b><span class=\"subheading\">Established 1972</span></b></font>\r\n		           	<p>\r\n		           		PT. Sinar Fajar Plastic Established Manufacturers of Plastic Injection Products and Injection Moulding. We are proud to be one of the remaining major supplier in Indonesia, from the tough and competitive market againts foreign countries products\r\n		           	</p>', 'years of experience', 'project done', 'our architect', 'happy customer', 48, 1000, 100, 1100, 'eng'),
(2, '<div><font size=\"6\" color=\"#000000\">Selamat Datang </font><br></div><div><font color=\"#00CC00\"><b>Didirikan tahun 1972</b></font></div><div>\r\n\r\nPT. Sinar Fajar Plastic Mendirikan Produsen Produk Injeksi Plastik dan Cetakan Injeksi. Kami bangga menjadi salah satu pemasok utama yang tersisa di Indonesia, dari pasar yang keras dan kompetitif terhadap produk luar negeri</div>', 'Tahun Pengalaman', 'Tugas Diselesaikan', 'Pekerja Kami', 'Pelanggan Yang Puas', 48, 1000, 100, 1000, 'ind');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `photo`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'logos.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `primary_text` text NOT NULL,
  `secondary_text` text NOT NULL,
  `lang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id_banner`, `primary_text`, `secondary_text`, `lang`) VALUES
(1, 'Plastic Injection &amp; Mould Specialist', 'One of the remaining major supplier in Indonesia ', 'eng'),
(2, 'Spesialis Injeksi Plastik & Cetakan', 'Salah satu pemasok utama yang tersisa di Indonesia', 'ind'),
(3, 'Far far away, behind the word mountains, far from the countries there live the blind text', '', 'eng'),
(4, 'Jauh,di balik tumpukan kalimat, jauh dari negara-negara di sana tinggal teks-teks buta.', '', 'ind');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `lang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `category`, `lang`) VALUES
(1, 'injection', 'eng'),
(2, 'mould', 'eng'),
(3, 'blowing', 'eng'),
(5, 'injeksi', 'ind'),
(6, 'cetakan', 'ind'),
(7, 'hembusan', 'ind');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `type_contact` text NOT NULL,
  `contact` text NOT NULL,
  `lang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `type_contact`, `contact`, `lang`) VALUES
(1, 'Address', 'Jl. Kopo Sayati No. 132 Bandung. Indonesia', 'eng'),
(2, 'Contact Number\r\n', '+62(22) 542-3242, 540-1886', 'eng'),
(3, 'Email Address\r\n', 'info@sinarfajarplastic.com', 'eng'),
(4, 'Website\r\n', 'sinarfajarplastic.com', 'eng'),
(5, 'Alamat', 'Jl. Kopo Sayati No. 132 Bandung. Indonesia ', 'ind'),
(6, 'Nomor Kontak', '+62(22) 542-3242, 540-1886 ', 'ind'),
(7, 'Alamat Email', 'info@sinarfajarplastic.com ', 'ind'),
(8, 'Situs Web', 'sinarfajarplastic.com ', 'ind');

-- --------------------------------------------------------

--
-- Struktur dari tabel `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(11) NOT NULL,
  `services` varchar(50) NOT NULL,
  `lang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `footer`
--

INSERT INTO `footer` (`id_footer`, `services`, `lang`) VALUES
(1, 'Garmens', 'eng'),
(2, 'Cosmetic', 'eng'),
(3, 'Electronic', 'eng'),
(4, 'Labolatory', 'eng'),
(5, 'Cap Closures', 'eng'),
(6, 'Hygiene', 'eng'),
(7, 'Textile', 'eng'),
(9, 'Garmen', 'ind'),
(10, 'Kosmetik', 'ind'),
(11, 'Elektronik', 'ind'),
(12, 'Labolatorium', 'ind'),
(13, 'Cap Closures', 'ind'),
(14, 'Kebersihan', 'ind'),
(15, 'Tekstil', 'ind'),
(16, 'Botol', 'ind'),
(17, 'Bottle', 'eng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `image`
--

INSERT INTO `image` (`id_image`, `image`) VALUES
(1, 'bg_1.jpeg'),
(2, 'about.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `information`
--

CREATE TABLE `information` (
  `id_information` int(11) NOT NULL,
  `viewed` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `information`
--

INSERT INTO `information` (`id_information`, `viewed`, `date`) VALUES
(1, 1, '2020-02-07'),
(2, 2, '2020-02-08'),
(3, 3, '2020-02-07'),
(4, 4, '2020-02-08'),
(5, 5, '2020-02-08'),
(6, 6, '2020-02-08'),
(7, 7, '2020-02-08'),
(8, 8, '2020-02-08'),
(9, 9, '2020-02-08'),
(10, 10, '2020-02-08'),
(11, 11, '2020-02-08'),
(12, 12, '2020-02-08'),
(13, 13, '2020-02-08'),
(14, 14, '2020-02-08'),
(15, 15, '2020-02-08'),
(16, 16, '2020-02-08'),
(17, 17, '2020-02-08'),
(18, 18, '2020-02-08'),
(19, 19, '2020-02-08'),
(20, 20, '2020-02-08'),
(21, 21, '2020-02-08'),
(22, 22, '2020-02-08'),
(23, 23, '2020-02-08'),
(24, 24, '2020-02-08'),
(25, 25, '2020-02-08'),
(26, 26, '2020-02-08'),
(27, 27, '2020-02-08'),
(28, 28, '2020-02-08'),
(29, 29, '2020-02-08'),
(30, 30, '2020-02-08'),
(31, 31, '2020-02-08'),
(32, 32, '2020-02-08'),
(33, 33, '2020-02-08'),
(34, 34, '2020-02-08'),
(35, 35, '2020-02-08'),
(36, 36, '2020-02-08'),
(37, 37, '2020-02-08'),
(38, 38, '2020-02-08'),
(39, 39, '2020-02-08'),
(40, 40, '2020-02-08'),
(41, 41, '2020-02-08'),
(42, 42, '2020-02-08'),
(43, 43, '2020-02-08'),
(44, 44, '2020-02-08'),
(45, 45, '2020-02-08'),
(46, 46, '2020-02-08'),
(47, 47, '2020-02-08'),
(48, 48, '2020-02-08'),
(49, 49, '2020-02-08'),
(50, 50, '2020-02-08'),
(51, 51, '2020-02-08'),
(52, 52, '2020-02-08'),
(53, 53, '2020-02-08'),
(54, 54, '2020-02-08'),
(55, 55, '2020-02-08'),
(56, 56, '2020-02-08'),
(57, 57, '2020-02-08'),
(58, 58, '2020-02-08'),
(59, 59, '2020-02-08'),
(60, 60, '2020-02-09'),
(61, 61, '2020-02-09'),
(62, 62, '2020-02-09'),
(63, 63, '2020-02-09'),
(64, 64, '2020-02-09'),
(65, 65, '2020-02-09'),
(66, 66, '2020-02-09'),
(67, 67, '2020-02-10'),
(68, 68, '2020-02-10'),
(69, 69, '2020-02-10'),
(70, 70, '2020-02-10'),
(71, 71, '2020-02-10'),
(72, 72, '2020-02-10'),
(73, 73, '2020-02-10'),
(74, 74, '2020-02-10'),
(75, 75, '2020-02-10'),
(76, 76, '2020-02-10'),
(77, 77, '2020-02-10'),
(78, 78, '2020-02-10'),
(79, 79, '2020-02-10'),
(80, 80, '2020-02-10'),
(81, 81, '2020-02-10'),
(82, 82, '2020-02-10'),
(83, 83, '2020-02-10'),
(84, 84, '2020-02-10'),
(85, 85, '2020-02-10'),
(86, 86, '2020-02-10'),
(87, 87, '2020-02-10'),
(88, 88, '2020-02-12'),
(89, 89, '2020-02-12'),
(90, 90, '2020-02-12'),
(91, 91, '2020-02-12'),
(92, 92, '2020-02-12'),
(93, 93, '2020-02-12'),
(94, 94, '2020-02-12'),
(95, 95, '2020-02-24'),
(96, 96, '2020-02-24'),
(97, 97, '2020-02-24'),
(98, 98, '2020-05-31'),
(99, 99, '2023-08-22'),
(100, 100, '2023-08-22'),
(101, 101, '2024-03-28'),
(102, 102, '2024-03-30'),
(103, 103, '2024-03-30'),
(104, 104, '2024-04-03'),
(105, 105, '2024-04-03'),
(106, 106, '2024-04-03'),
(107, 107, '2024-04-04'),
(108, 108, '2024-04-05'),
(109, 109, '2024-04-09'),
(110, 110, '2024-04-24'),
(111, 111, '2024-04-24'),
(112, 112, '2024-04-24'),
(113, 113, '2024-04-24'),
(114, 114, '2024-04-24'),
(115, 115, '2024-04-24'),
(116, 116, '2024-04-24'),
(117, 117, '2024-04-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `subject` text DEFAULT NULL,
  `message` text NOT NULL,
  `file` text DEFAULT NULL,
  `type_message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id_message`, `name`, `contact`, `subject`, `message`, `file`, `type_message`) VALUES
(5, 'feila', '082216421050', 'ada', 'coding', 'cv_feila.docx', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `image_product` text NOT NULL,
  `id_category` int(11) NOT NULL,
  `lang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `image_product`, `id_category`, `lang`) VALUES
(1, 'actuator', 'Actuator-injection.jpg', 1, 'eng'),
(2, 'Mould base', 'Mould-mould.jpg', 2, 'eng'),
(7, 'aktuator', 'Actuator-injection.jpg', 5, 'ind'),
(8, '  dasar cetakan', 'Mould-mould.jpg', 6, 'ind'),
(9, 'Aerosol Can Cap', 'Aerosol-injection.jpg', 1, 'eng'),
(10, 'Buckle Slop', 'buckle-injection.jpg', 1, 'eng'),
(11, 'Neck Tag', 'Neck-injection.jpg', 1, 'eng'),
(12, 'Spare Part', 'Spare-injection.jpg', 1, 'eng'),
(13, 'Comb', 'Comb-injection.jpg', 1, 'eng'),
(14, 'Mechanic SPA 106', 'Mechanic-injection.jpg', 2, 'eng'),
(15, 'POY DTY Supporter', 'POY-injection.jpg', 1, 'eng'),
(16, 'Plastic Tube Stopper', 'Plastic-injection.jpg', 1, 'eng'),
(17, 'Liquid Dispenser', 'Liquid-injection.jpg', 1, 'eng'),
(18, 'Bottle 1L', 'Bottle-blowing.JPG', 3, 'eng'),
(19, 'Jars', 'Jars-blowing.jpg', 3, 'eng'),
(20, 'Aerosol Can Cap', 'Aerosol-injection.jpg', 5, 'ind'),
(21, 'Tag Leher', 'Neck-injection.jpg', 5, 'ind'),
(22, 'Buckle Slop', 'buckle-injection.jpg', 5, 'ind'),
(23, 'Suku Cadang', 'Spare-injection.jpg', 5, 'ind'),
(24, 'Sisir', 'Comb-injection.jpg', 5, 'ind'),
(25, 'POY DTY Pendukung', 'POY-injection.jpg', 5, 'ind'),
(26, 'Stopper Tabung Plastik', 'Plastic-injection.jpg', 5, 'ind'),
(27, 'Dispenser cairan', 'Liquid-injection.jpg', 5, 'ind'),
(28, 'SPA Mekanik 106', 'Mechanic-injection.jpg', 6, 'ind'),
(29, 'Botol 1L', 'Bottle-blowing.JPG', 7, 'ind'),
(30, 'Toples', 'Jars-blowing.jpg', 7, 'ind');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vision`
--

CREATE TABLE `vision` (
  `id_vision` int(11) NOT NULL,
  `title_vision` varchar(50) NOT NULL,
  `description_vision` text NOT NULL,
  `lang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `vision`
--

INSERT INTO `vision` (`id_vision`, `title_vision`, `description_vision`, `lang`) VALUES
(1, 'Totally', 'We believe to establish a good relations with all parties so continuous cooperation and relationship will be maintained well.', 'eng'),
(2, 'Responsive', 'Our company strive to get the best result for our customers.\r\n', 'eng'),
(3, 'Design', 'Our design team listen and passionate to our customers vision and need, to get a perfect and best products.\r\n', 'eng'),
(4, 'Quality Control', 'We have experience & skilled team to support and maintain the quality with proper technical tools.\r\n', 'eng'),
(5, 'Totalitas', '<div>Kami percaya untuk membangun hubungan yang baik dengan semua pihak sehingga kerja sama dan hubungan yang berkelanjutan akan terjaga dengan baik<br></div>', 'ind'),
(6, 'Responsif', 'Perusahaan kami berusaha keras untuk mendapatkan hasil terbaik bagi pelanggan kami.', 'ind'),
(7, 'Desain', 'Tim desain kami mendengarkan dan bersemangat untuk visi dan kebutuhan pelanggan kami, untuk mendapatkan produk yang sempurna dan terbaik.', 'ind'),
(8, 'Kontrol kualitas', 'Kami memiliki tim yang berpengalaman & terampil untuk mendukung dan menjaga kualitas dengan alat teknis yang tepat.', 'ind');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indeks untuk tabel `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Indeks untuk tabel `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id_information`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`id_vision`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `information`
--
ALTER TABLE `information`
  MODIFY `id_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `vision`
--
ALTER TABLE `vision`
  MODIFY `id_vision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
