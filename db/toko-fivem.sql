-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 09:52 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko-fivem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Hamdani Lestaluhu', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Escanor', 'meliodas', '4a2ad11f76a393a55dbd832e827e0d85');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `judul`, `deskripsi`, `photo`) VALUES
(1, 'Photo 1', 'Mantap', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(20) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id_keranjang`, `id_produk`, `id_user`, `status`, `jumlah`) VALUES
(1, 13, 5, 0, 1),
(3, 14, 4, 1, 1),
(5, 13, 4, 0, 1),
(6, 15, 5, 0, 1),
(7, 13, 5, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '1',
  `nickname_discord` varchar(200) NOT NULL,
  `status` enum('menunggu-pembayaran','proses','selesai','') NOT NULL,
  `tgl` date NOT NULL,
  `tgl_berakhir` date NOT NULL DEFAULT '2020-06-07',
  `status_delete` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_user`, `id_produk`, `jumlah`, `nickname_discord`, `status`, `tgl`, `tgl_berakhir`, `status_delete`) VALUES
(6, 5, 15, 1, 'Verter', 'selesai', '2020-06-28', '2020-07-29', 1),
(7, 5, 13, 1, 'verter', 'menunggu-pembayaran', '2020-06-29', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(20) NOT NULL,
  `detail_produk` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `harga_produk`, `detail_produk`, `photo`) VALUES
(13, 'Test 1', 200000, '<ul><li>test 1</li><li>test 2</li><li>test 3</li><li>test 4</li></ul>', 'game-1.png'),
(14, 'Test 2', 300000, '<ul><li>test 1</li><li>test 2</li><li>test 3</li><li>test 4</li></ul>', 'game-2.png'),
(16, 'Test 3', 500000, '<ul><li>test 1</li><li>test 2</li><li>test 3</li></ul>', 'game-31.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentang`
--

CREATE TABLE `tb_tentang` (
  `id` int(11) NOT NULL,
  `tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tentang`
--

INSERT INTO `tb_tentang` (`id`, `tentang`) VALUES
(1, '<p>Tujuan forum ini untuk menguatkan dan berbagi ilmu tentang FiveM atau Roleplay di indonesia ini, tidak ada kesombongan ataupun hal lainnya, disini semua harus &quot;LOYAL&quot; akan terbagi beberapa Roles dan bagian seperti &quot;Pemain&quot; &quot;Developer&quot; &quot;Owner&quot; Mungkin segitu saja, terimakasih sudah bergabung dengan kami!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `jk` enum('laki','perempuan','','') NOT NULL DEFAULT 'laki',
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT 'danihams456@gmail.com',
  `no_hp` int(15) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `jk`, `password`, `email`, `no_hp`, `status`) VALUES
(3, 'Diane', 'perempuan', '$2y$10$lHm.W0SiNc124Pv/WZPbJu.UZ7C5dPyQZC56tZPLHiAak82MPfK6q', 'diane12@gmail.com', 2147483647, 1),
(4, 'Dani', 'laki', '$2y$10$6E9li2F/T7mbzLSi1fhB5eM/K1aNc/wtGktoAUDY/Kh1CKbQO.Og.', 'danihams450@gmail.com', 87643126, 1),
(5, 'Rangga', 'laki', '$2y$10$xJ9HfKep9G64YVasOtlloel5m1yv1ZiXq/Jwjf7LBzgFFdnr86A62', 'hamdani.hams456@gmail.com', 896543218, 1),
(6, 'Meliodas', 'laki', '$2y$10$lxfFbIss5ef0bWDyBdttLukEQe7jOSWjdUtwI5uipaUvGQ5k3Ok3W', 'meliodas12@gmail.com', 87654321, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_tentang`
--
ALTER TABLE `tb_tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_tentang`
--
ALTER TABLE `tb_tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
