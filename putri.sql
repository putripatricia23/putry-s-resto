-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 09:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putri`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `pertemuan_ke` varchar(20) NOT NULL,
  `topik` varchar(35) NOT NULL,
  `deskripsi` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `pertemuan_ke`, `topik`, `deskripsi`) VALUES
(1, 'Pertama', 'Dasar-Dasar PHP', 'membuat variable sederhana'),
(2, 'Kedua', 'Form', 'membuat form sederhana menggunakan metode action atau post'),
(3, 'ke-tiga', 'PHP Control Structure', 'mengimplementasikan array dan fungsi ke dalam form'),
(4, 'ke-empat', 'PHP Web Template', 'implementasi templat dinamis adminLTE'),
(6, 'ke-lima', 'Database Connection', 'cara terhubung ke database'),
(7, 'ke-enam', 'PHP OOP', 'Database CRUD(create, read, update, delete) '),
(11, 'ke-tujuh', 'PHP OOP 2', 'class contructor dan objek');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama`) VALUES
(1, 'makanan'),
(2, 'minuman'),
(3, 'desseert'),
(12, 'cake');

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemesan` varchar(30) NOT NULL,
  `alamat_pemesan` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `produk_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(1, '2023-01-16', 'putri patresia', 'bogor city', '012233445566', 'putri@gmail.com', 1, 'dibungkus', 12),
(2, '2023-12-15', 'andrea alvianti', 'jakarta', '085694329408', 'andra@yahoo.com', 2, 'buble wrap', 3),
(5, '2023-01-01', 'ardita amelia', 'depok square', '08580209154', 'ardita@gmail.com', 5, 'harus hangat', 5),
(6, '2022-10-24', 'mikail', 'bekasi town', '0123456789', 'mikel@gmail.com', 4, 'cod', 8),
(7, '2022-09-28', 'baihaki', 'vila nusa indah', '0987654322', 'baihaki@gmail.com', 20, 'jam 9 di ambil', 6),
(8, '2023-03-02', 'milka', 'Sydney Capital', '01142478903', '@milka_ing', 7, 'antar besok', 4),
(13, '2023-05-05', 'tesssssss', 'jongol', '01234567', 'putri@gmail.com', 1, '234', 1),
(22, '2023-05-10', 'ini mengetesssss', 'jhgfgh', '01234567', 'putri@gmail.com', 2, '234', 4);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga_jual` double DEFAULT 0,
  `harga_beli` double DEFAULT 0,
  `stok` int(11) DEFAULT 0,
  `min_stok` int(11) DEFAULT 0,
  `deskripsi` text DEFAULT NULL,
  `jenis_produk_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `jenis_produk_id`) VALUES
(1, 'MK01', 'Beef Steak', 100000, 80000, 40, 10, 'steak daging sapi premium', 1),
(2, 'MK02', 'saucy ramen', 50000, 30000, 40, 10, 'ramen saus jepang', 1),
(3, 'MK03', 'shrimp soup', 70000, 50000, 15, 5, 'sop udang dengan kuah kari', 1),
(4, 'MK04', 'kimchi fried rice', 25000, 35000, 17, 5, 'nasi goreng bumbu kimchi korea', 1),
(5, 'MK05', 'dumpling sauce', 20000, 10000, 15, 5, 'dumpling dengan saus asam manis', 1),
(6, 'DR01', 'lemon ice', 15000, 5000, 20, 10, 'es teh lemon', 2),
(7, 'DR02', 'blue mocktail', 25000, 15000, 24, 10, 'mocktail soda biru', 2),
(8, 'DR03', 'boba milk tea', 17000, 10000, 45, 15, 'teh susu dengan boba', 2),
(9, 'DR04', 'strawbery coconut', 30000, 20000, 35, 10, 'minuman stroberi kelapa', 2),
(10, 'DR05', 'sakura late', 28000, 17000, 52, 20, 'late sakura ekstrak', 2),
(11, 'DS01', 'custard fruit', 25000, 15000, 20, 10, 'custard buah', 3),
(12, 'DS02', 'red velvet', 60000, 40000, 46, 10, 'red velvet premiumm', 3),
(13, 'DS03', 'grape puding', 35000, 20000, 70, 10, 'puding rasa anggur', 3),
(14, 'DS04', 'chocolate pots', 45000, 30000, 15, 10, 'puding dark coklat', 3),
(15, 'DS05', 'ultimate freakshake', 50000, 30000, 57, 10, 'Coklat Kocok', 3),
(20, 'MK06', 'Semur Jengkol', 20000, 12000, 19, 10, 'jengkol empuk', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_produk_id` (`jenis_produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`jenis_produk_id`) REFERENCES `jenis_produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
