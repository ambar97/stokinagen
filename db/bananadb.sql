-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2020 at 07:47 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bananadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_wishlist` int(5) NOT NULL,
  `id_user` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_agen`
--

CREATE TABLE `admin_agen` (
  `id_admin_agen` int(9) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` text NOT NULL,
  `id_agen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_agen`
--

INSERT INTO `admin_agen` (`id_admin_agen`, `username`, `password`, `id_agen`) VALUES
(5201, 'admin', '5ebe2294ecd0e0f08eab7690d2a6ee69', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL,
  `id_category` int(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `bahan_barang` varchar(50) DEFAULT NULL,
  `stok_barang` int(50) DEFAULT NULL,
  `harga_produksi` int(11) NOT NULL,
  `harga_agen` int(11) DEFAULT NULL,
  `harga_reseller` int(11) DEFAULT NULL,
  `harga_ecer` int(11) DEFAULT NULL,
  `order_barang` tinyint(1) DEFAULT NULL COMMENT '0=nothing 1=baru 2=discount 3=baru&discount',
  `discount` int(2) DEFAULT NULL COMMENT 'dalam %',
  `insert_id` int(11) DEFAULT NULL,
  `inset_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_category`, `nama_barang`, `bahan_barang`, `stok_barang`, `harga_produksi`, `harga_agen`, `harga_reseller`, `harga_ecer`, `order_barang`, `discount`, `insert_id`, `inset_timestamp`) VALUES
(1, 1, 'Baju Oblong', NULL, NULL, 50000, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `nama_category` varchar(50) NOT NULL,
  `gambar_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `nama_category`, `gambar_category`) VALUES
(1, 'Baju', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(5) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat_lengkap` varchar(50) NOT NULL,
  `telp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_toko`, `nama`, `alamat_lengkap`, `telp`) VALUES
(1, '', 'Anas Abiem', '', 2147483647),
(3, '', 'Anas Abiem', '', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `detail_fee`
--

CREATE TABLE `detail_fee` (
  `id_detail_fee` int(5) NOT NULL,
  `id_brg` int(5) NOT NULL,
  `jml_fee` int(11) NOT NULL,
  `tgl_transaksi` int(11) NOT NULL,
  `id_fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(5) NOT NULL,
  `id_transaksi` int(5) NOT NULL,
  `warna_brg` varchar(15) NOT NULL,
  `variasi` varchar(50) NOT NULL,
  `hrg_brg` int(11) NOT NULL,
  `potongan_hrg` int(11) NOT NULL,
  `tmbhn_hrg` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ekspedisi`
--

CREATE TABLE `ekspedisi` (
  `id_ekspedisi` int(5) NOT NULL,
  `nama_ekspedisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id_fee` int(5) NOT NULL,
  `id_agen` int(5) NOT NULL,
  `id_reseller` int(5) NOT NULL,
  `jml_fee` int(11) NOT NULL,
  `total_fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_barang`
--

CREATE TABLE `gallery_barang` (
  `id_gbr` int(5) NOT NULL,
  `nama_gbr` varchar(50) NOT NULL,
  `type_gbr` varchar(20) NOT NULL,
  `id_brg` int(5) NOT NULL,
  `id_reseller` int(5) NOT NULL,
  `id_agen` int(5) NOT NULL,
  `id_ecer` int(5) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(5) NOT NULL,
  `id_transaksi` int(5) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(5) NOT NULL,
  `id_brg` int(5) NOT NULL,
  `isi_review` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `id_ecer` int(5) NOT NULL,
  `id_agen` int(5) NOT NULL,
  `id_reseller` int(5) NOT NULL,
  `jml_tambah_hrg` int(11) NOT NULL,
  `jml_potongan` int(11) NOT NULL,
  `tgl_invoice` date NOT NULL,
  `id_ekspedisi` int(5) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `status_pengiriman` varchar(50) NOT NULL,
  `biaya_ongkir` int(11) NOT NULL,
  `resi` varchar(50) NOT NULL,
  `jml_hrg_pmbelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` text NOT NULL,
  `id_customer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `id_customer`) VALUES
(1, 'abeim@mail.com', 'd8578edf845', 1),
(3, 'abiem@mail.asd', 'd51a22ed45c4da9bd0dc10044da8cf60', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `admin_agen`
--
ALTER TABLE `admin_agen`
  ADD PRIMARY KEY (`id_admin_agen`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `id_category` (`id_category`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail_fee`
--
ALTER TABLE `detail_fee`
  ADD PRIMARY KEY (`id_detail_fee`),
  ADD KEY `id_brg` (`id_brg`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`);

--
-- Indexes for table `ekspedisi`
--
ALTER TABLE `ekspedisi`
  ADD PRIMARY KEY (`id_ekspedisi`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id_fee`);

--
-- Indexes for table `gallery_barang`
--
ALTER TABLE `gallery_barang`
  ADD PRIMARY KEY (`id_gbr`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_wishlist` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_agen`
--
ALTER TABLE `admin_agen`
  MODIFY `id_admin_agen` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5202;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_fee`
--
ALTER TABLE `detail_fee`
  MODIFY `id_detail_fee` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ekspedisi`
--
ALTER TABLE `ekspedisi`
  MODIFY `id_ekspedisi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id_fee` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_barang`
--
ALTER TABLE `gallery_barang`
  MODIFY `id_gbr` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Constraints for table `detail_fee`
--
ALTER TABLE `detail_fee`
  ADD CONSTRAINT `detail_fee_ibfk_1` FOREIGN KEY (`id_brg`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
