-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2019 at 06:16 AM
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
-- Database: `src_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kd_admin` int(10) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kd_barang` int(15) NOT NULL,
  `kd_kategori` int(10) NOT NULL,
  `kd_outlet` int(8) UNSIGNED ZEROFILL NOT NULL,
  `barcode` varchar(40) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_jual` decimal(10,0) NOT NULL,
  `harga_beli` decimal(10,0) NOT NULL,
  `stok` decimal(10,0) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_barang` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_barang`, `kd_kategori`, `kd_outlet`, `barcode`, `nama_barang`, `harga_jual`, `harga_beli`, `stok`, `deskripsi`, `gambar_barang`) VALUES
(1, 5, 00000001, '8993988130437', 'Joyko Highlighter Double Color Warna Biru', '2000', '1700', '26', 'Stabilo 2 warna', 'assets/images/upload/barang/barang_Joyko Highlighter Double Color Warna Biru.jpeg'),
(2, 1, 00000001, '', 'Cho Cho Radja Wafer Roll Rasa Cokelat', '35000', '27950', '15', 'Wafer Rasa Cokelat', 'assets/images/upload/barang/barang_Cho Cho Radja Wafer Roll Rasa Cokelat_1572058110.jpeg'),
(3, 1, 00000001, '8888166995185', 'Nissin Egg Roll Sesame Rasa Wijen', '42000', '40000', '0', '-', ''),
(4, 2, 00000001, '8993365121539', 'Madu TJ', '2000', '1000', '18', '-', ''),
(5, 1, 00000001, '', 'Taro', '2500', '1900', '8', 'Makanan', ''),
(8, 2, 00000001, '089686821086', 'Ichi Ocha', '2500', '3500', '8', '-', ''),
(9, 2, 00000001, '8991002103337', 'Good Day Vanilla Latte', '1300', '1500', '20', '-', ''),
(10, 2, 00000001, '8996001440124', 'Energen Rasa Vanila', '1200', '1800', '27', '-', ''),
(11, 2, 00000001, '', 'Kapucino', '5000', '3500', '8', 'es kapucino', ''),
(13, 2, 00000001, '8886001200722', 'TORABIKA Cappuccino', '2500', '2000', '7', 'tinggal seduh', 'assets/images/upload/barang/barang_TORABIKA Cappuccino.jpeg'),
(14, 5, 00000001, '', 'Kartu User', '155000', '155000', '16', 'kartu user starter', 'assets/images/upload/barang/barang_Kartu User_1571914911.jpeg'),
(15, 2, 00000001, '', 'Nutri boost', '7500', '5000', '8', 'Rasa Coklat', 'assets/images/upload/barang/barang_Nutri boost.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `biaya`
--

CREATE TABLE `biaya` (
  `kd_biaya` int(11) NOT NULL,
  `kd_outlet` int(8) UNSIGNED ZEROFILL NOT NULL,
  `nama_biaya` varchar(100) NOT NULL,
  `jumlah_biaya` decimal(10,0) NOT NULL,
  `tgl_biaya` varchar(50) NOT NULL,
  `jenis_biaya` int(2) NOT NULL,
  `jenis_biaya_per` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biaya`
--

INSERT INTO `biaya` (`kd_biaya`, `kd_outlet`, `nama_biaya`, `jumlah_biaya`, `tgl_biaya`, `jenis_biaya`, `jenis_biaya_per`) VALUES
(1, 00000001, 'Sewa Bangunan Baru', '5000000', '1970-01-01 07:00', 0, 1),
(2, 00000001, 'Listrik', '200000', '2019-08-09 15:48', 1, 0),
(3, 00000001, 'Gaji Karyawan', '1500000', '1970-01-01 07:00', 0, 0),
(4, 00000001, 'Beli Alat Masak', '1000000', '2019-10-09 10:09', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `kd_transaksi` int(10) UNSIGNED ZEROFILL NOT NULL,
  `kd_barang` int(15) NOT NULL,
  `harga_jual_detail` decimal(10,0) NOT NULL,
  `harga_beli_detail` decimal(10,0) NOT NULL,
  `qty` int(10) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`kd_transaksi`, `kd_barang`, `harga_jual_detail`, `harga_beli_detail`, `qty`, `catatan`) VALUES
(0000000001, 1, '2000', '1700', 20, ''),
(0000000003, 1, '2000', '1700', 5, ''),
(0000000004, 1, '2000', '1700', 1, ''),
(0000000005, 1, '2000', '1700', 2, ''),
(0000000005, 2, '35000', '27950', 1, ''),
(0000000006, 3, '42000', '40000', 1, ''),
(0000000007, 3, '42000', '40000', 1, ''),
(0000000008, 1, '2000', '1700', 1, ''),
(0000000009, 1, '2000', '1700', 1, ''),
(0000000010, 1, '2000', '1700', 1, ''),
(0000000011, 1, '2000', '1700', 1, ''),
(0000000012, 4, '2000', '1000', 1, ''),
(0000000013, 3, '42000', '40000', 1, ''),
(0000000014, 1, '2000', '1700', 1, ''),
(0000000015, 2, '35000', '27950', 1, ''),
(0000000016, 8, '2500', '3500', 1, ''),
(0000000017, 4, '2000', '1000', 1, ''),
(0000000018, 4, '2000', '1000', 1, ''),
(0000000019, 2, '35000', '27950', 1, ''),
(0000000020, 3, '42000', '40000', 1, ''),
(0000000021, 4, '2000', '1000', 1, ''),
(0000000022, 1, '2000', '1700', 1, ''),
(0000000022, 3, '42000', '40000', 1, ''),
(0000000022, 4, '2000', '1000', 1, ''),
(0000000023, 10, '1200', '1800', 1, ''),
(0000000024, 5, '2500', '1900', 1, ''),
(0000000024, 2, '35000', '27950', 1, ''),
(0000000025, 10, '1200', '1800', 1, ''),
(0000000026, 2, '35000', '27950', 1, ''),
(0000000027, 11, '5000', '3500', 1, ''),
(0000000027, 10, '1200', '1800', 1, ''),
(0000000028, 11, '5000', '3500', 1, ''),
(0000000028, 8, '2500', '3500', 1, ''),
(0000000029, 5, '2500', '1900', 1, ''),
(0000000030, 4, '2000', '1000', 2, ''),
(0000000031, 1, '2000', '1700', 1, ''),
(0000000032, 3, '42000', '40000', 15, ''),
(0000000032, 2, '35000', '27950', 5, ''),
(0000000036, 2, '35000', '27950', 1, ''),
(0000000037, 13, '2500', '2000', 3, ''),
(0000000038, 15, '7500', '5000', 2, ''),
(0000000038, 2, '35000', '27950', 1, ''),
(0000000039, 2, '35000', '27950', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kd_kategori` int(10) NOT NULL,
  `kd_outlet` int(8) UNSIGNED ZEROFILL NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kd_kategori`, `kd_outlet`, `nama_kategori`) VALUES
(1, 00000001, 'Makanan'),
(2, 00000001, 'Minumam'),
(3, 00000002, 'Makanan'),
(6, 00000002, 'minuman'),
(5, 00000001, 'ATK');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `kd_notifikasi` int(10) UNSIGNED ZEROFILL NOT NULL,
  `kd_user` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `kd_admin` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `judul_notifikasi` varchar(40) NOT NULL,
  `isi_notifikasi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `kd_outlet` int(8) UNSIGNED ZEROFILL NOT NULL,
  `nama_outlet` varchar(50) NOT NULL,
  `alamat_outlet` text NOT NULL,
  `deskripsi` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`kd_outlet`, `nama_outlet`, `alamat_outlet`, `deskripsi`, `no_telp`) VALUES
(00000001, 'Kantin Hebat', 'Gedung Jurusan TI, Jl. Mastrip 164, Jember ', '', ''),
(00000002, 'SRC JEMBER 1', 'Jl. Riau Jember', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kd_pelanggan` int(10) UNSIGNED ZEROFILL NOT NULL,
  `kd_outlet` int(8) UNSIGNED ZEROFILL NOT NULL,
  `nama_pelanggan` varchar(40) NOT NULL,
  `no_telp_pelanggan` varchar(50) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `tgl_ditambahkan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`kd_pelanggan`, `kd_outlet`, `nama_pelanggan`, `no_telp_pelanggan`, `alamat_pelanggan`, `tgl_ditambahkan`) VALUES
(0000000001, 00000001, 'Vyan', '0815567808103', 'Banyuwangi', '2018-12-11 '),
(0000000002, 00000002, 'Ary', '081556780821', 'Jember', '2019-04-27'),
(0000000003, 00000002, 'Yusuf', '088227968', 'Jember', '2019-05-01'),
(0000000004, 00000001, 'Gea', '0789598', 'Jember', '2019-05-01'),
(0000000010, 00000002, 'Linda', '05757676', 'Coba', '2019-05-03'),
(0000000011, 00000002, 'bahrul', '989989', 'disana', '2019-05-12'),
(0000000012, 00000001, 'Yusuf', '0812222', 'Jember', '2019-09-22'),
(0000000013, 00000001, 'adi', '08214761336', 'sawo', '2019-09-30'),
(0000000014, 00000001, 'Anton', '082145636589', 'Jl Arowana', '2019-09-30'),
(0000000015, 00000001, 'guest', '979797', 'xhbx', '2019-10-17'),
(0000000016, 00000001, 'Dan', '08822', 'Asb', '2019-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kd_pembayaran` int(10) UNSIGNED ZEROFILL NOT NULL,
  `kd_user` int(10) UNSIGNED ZEROFILL NOT NULL,
  `tgl_pembayaran` datetime NOT NULL,
  `bukti_pembayaran` text NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `total_pembayaran` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kd_pembayaran`, `kd_user`, `tgl_pembayaran`, `bukti_pembayaran`, `atas_nama`, `nama_bank`, `total_pembayaran`) VALUES
(0000000001, 0000000222, '2019-11-06 00:00:00', 'asas', 'asas', 'asasasa', '23223');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `kd_tarif` int(10) UNSIGNED ZEROFILL NOT NULL,
  `nama_tarif` varchar(40) NOT NULL,
  `harga` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `kd_testimoni` int(10) UNSIGNED ZEROFILL NOT NULL,
  `kd_user` int(10) UNSIGNED ZEROFILL NOT NULL,
  `isi_testimoni` text NOT NULL,
  `bintang` decimal(10,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kd_transaksi` int(10) UNSIGNED ZEROFILL NOT NULL,
  `no_invoice` int(4) UNSIGNED ZEROFILL NOT NULL,
  `kd_user` int(10) UNSIGNED ZEROFILL NOT NULL,
  `kd_outlet` int(8) UNSIGNED ZEROFILL NOT NULL,
  `kd_pelanggan` int(10) UNSIGNED ZEROFILL NOT NULL,
  `tgl_transaksi` varchar(100) NOT NULL,
  `jml_item` int(10) NOT NULL,
  `diskon` decimal(10,0) NOT NULL,
  `pajak` int(10) NOT NULL,
  `harga_total` decimal(10,0) NOT NULL,
  `bayar` decimal(10,0) NOT NULL,
  `kembali` decimal(10,0) NOT NULL,
  `jenis_transaksi` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kd_transaksi`, `no_invoice`, `kd_user`, `kd_outlet`, `kd_pelanggan`, `tgl_transaksi`, `jml_item`, `diskon`, `pajak`, `harga_total`, `bayar`, `kembali`, `jenis_transaksi`, `status`) VALUES
(0000000001, 0001, 0000000001, 00000001, 0000000000, '2019-08-09 15:40', 20, '0', 0, '34000', '40000', '6000', 1, 0),
(0000000003, 0002, 0000000001, 00000001, 0000000000, '2019-08-09 15:41', 5, '0', 0, '8500', '8500', '0', 1, 0),
(0000000004, 0003, 0000000001, 00000001, 0000000000, '2019-09-21 17:04', 1, '0', 0, '1700', '2000', '300', 1, 0),
(0000000005, 0001, 0000000001, 00000001, 0000000001, '2019-08-09 15:46', 3, '0', 0, '39000', '50000', '11000', 0, 0),
(0000000006, 0002, 0000000001, 00000001, 0000000004, '2019-08-09 22:29', 1, '0', 0, '42000', '50000', '8000', 0, 0),
(0000000007, 0003, 0000000001, 00000001, 0000000001, '2019-08-09 22:30', 1, '0', 0, '42000', '100000', '58000', 0, 0),
(0000000008, 0004, 0000000001, 00000001, 0000000001, '2019-08-09 22:56', 1, '0', 0, '2000', '2000', '0', 0, 0),
(0000000009, 0001, 0000000001, 00000001, 0000000000, '2019-08-09 22:57', 1, '0', 0, '1700', '2000', '300', 1, 0),
(0000000010, 0002, 0000000001, 00000001, 0000000000, '2019-09-21 17:04', 1, '0', 0, '1700', '2000', '300', 1, 0),
(0000000011, 0001, 0000000001, 00000001, 0000000001, '2019-09-21 17:01', 1, '0', 0, '2000', '5000', '3000', 0, 0),
(0000000012, 0002, 0000000001, 00000001, 0000000001, '2019-09-21 23:32', 1, '0', 0, '2000', '6000', '4000', 0, 0),
(0000000013, 0001, 0000000001, 00000001, 0000000004, '2019-09-22 11:59', 1, '2', 0, '42000', '0', '0', 0, 1),
(0000000014, 0002, 0000000002, 00000001, 0000000001, '2019-09-22 13:15', 1, '0', 0, '2000', '50000', '48000', 0, 0),
(0000000015, 0003, 0000000002, 00000001, 0000000001, '2019-09-22 13:16', 1, '0', 0, '35000', '50000', '15000', 0, 0),
(0000000016, 0004, 0000000002, 00000001, 0000000001, '2019-10-22 23:59', 1, '0', 0, '2500', '5000', '2500', 0, 0),
(0000000017, 0001, 0000000002, 00000001, 0000000013, '2019-09-30 11:33', 1, '0', 0, '2000', '3200', '1200', 0, 0),
(0000000018, 0002, 0000000002, 00000001, 0000000014, '2019-09-30 11:37', 1, '0', 0, '2000', '6000', '4000', 0, 0),
(0000000019, 0003, 0000000002, 00000001, 0000000012, '2019-09-30 11:37', 1, '0', 0, '35000', '0', '0', 0, 1),
(0000000020, 0004, 0000000002, 00000001, 0000000014, '2019-09-30 21:36', 1, '0', 0, '42000', '50000', '8000', 0, 0),
(0000000021, 0005, 0000000002, 00000001, 0000000014, '2019-09-30 22:09', 1, '0', 0, '2000', '5000', '3000', 0, 0),
(0000000022, 0001, 0000000001, 00000001, 0000000001, '2019-10-12 04:57', 3, '0', 0, '46000', '50000', '4000', 0, 0),
(0000000023, 0002, 0000000002, 00000001, 0000000013, '2019-10-12 13:21', 1, '0', 0, '1200', '5000', '3800', 0, 0),
(0000000024, 0003, 0000000001, 00000001, 0000000004, '2019-10-12 13:57', 2, '50', 10, '37500', '50000', '29375', 0, 0),
(0000000025, 0004, 0000000001, 00000001, 0000000001, '2019-10-12 13:58', 1, '0', 0, '1200', '2000', '800', 0, 0),
(0000000026, 0001, 0000000002, 00000001, 0000000012, '2019-10-16 22:57', 1, '200', 0, '35000', '0', '35000', 0, 0),
(0000000027, 0001, 0000000001, 00000001, 0000000014, '2019-10-17 21:18', 2, '0', 0, '6200', '10000', '3800', 0, 0),
(0000000028, 0002, 0000000001, 00000001, 0000000015, '2019-10-17 21:34', 2, '0', 0, '7500', '10000', '2500', 0, 0),
(0000000029, 0001, 0000000001, 00000001, 0000000015, '2019-10-23 00:00', 1, '0', 0, '2500', '5000', '2500', 0, 0),
(0000000030, 0001, 0000000001, 00000001, 0000000012, '2019-10-24 08:41', 2, '0', 0, '4000', '5000', '1000', 0, 0),
(0000000031, 0002, 0000000001, 00000001, 0000000012, '2019-10-24 10:11', 1, '0', 0, '2000', '5000', '3000', 0, 0),
(0000000032, 0003, 0000000002, 00000001, 0000000015, '2019-10-24 10:31', 20, '10', 0, '805000', '750000', '25500', 0, 0),
(0000000036, 0001, 0000000001, 00000001, 0000000000, '2019-10-25 05:19', 1, '0', 0, '27950', '1000000', '972050', 1, 0),
(0000000037, 0001, 0000000001, 00000001, 0000000014, '2019-10-26 09:35', 3, '0', 0, '7500', '10000', '2500', 0, 0),
(0000000038, 0002, 0000000001, 00000001, 0000000016, '2019-10-26 09:46', 3, '0', 0, '50000', '100000', '50000', 0, 0),
(0000000039, 0001, 0000000001, 00000001, 0000000000, '2019-10-26 09:48', 10, '0', 0, '279500', '0', '0', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kd_user` int(10) UNSIGNED ZEROFILL NOT NULL,
  `kd_outlet` int(8) UNSIGNED ZEROFILL NOT NULL,
  `kd_tarif` int(10) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_depan` varchar(40) NOT NULL,
  `nama_belakang` varchar(40) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `kode_referal` varchar(10) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `status_user` int(2) NOT NULL,
  `tgl_jatuh_tempo` datetime NOT NULL,
  `level_user` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kd_user`, `kd_outlet`, `kd_tarif`, `username`, `password`, `nama_depan`, `nama_belakang`, `no_telp`, `alamat`, `foto`, `kode_referal`, `tgl_daftar`, `status_user`, `tgl_jatuh_tempo`, `level_user`) VALUES
(0000000001, 00000001, 0000000000, 'owner', 'b676e4c78ff99dfe9b290f6b1d9752fdab385d74c5f6f95ab90faf7f2fe638961f0cd3d7e97107234fd520623b99b557d5bd025e2aaf090e5b68151c50fa0736QfdmY49pv/tr0C1qdxDJGUkuoERa', 'Owner', 'Kantin', '081556780810', 'Jember', 'assets/images/upload/user/user.png', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(0000000002, 00000001, 0000000000, 'kasir', '02d25dd1cc59e4c55bf5fb3f2d7c5e6d4d01b118117c6949786464a6ee59a67aac370431517b2fade09ae09eddedb26db854a4b51d1bac60b7454dfbf984099diIYFA93D1PSvnmZaV5vKHZmVDIJn', 'Kasir', 'Kantin', '081556780810', 'Jl. Riau No 22', 'assets/images/upload/user/user.png', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1),
(0000000010, 00000002, 0000000000, 'ary', '30519696d99c9ba98b251f293eb3d96f1d2bf1c3eee4c487cdb707ab2285de56ce859a30a4d188f920a53e74ae4f9421eb4d1dd29f19e87d015fcb450fb67612vP1ZGdMFQsY37tA28TdXFGO4RSY=', 'Ary ', 'Pratama', '081557890910', 'Jember ', 'assets/images/upload/user/10_190809155048.jpeg', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(0000000013, 00000001, 0000000000, 'kassa', '455474a093381552031bc784e353ed218f5a42c336aa4716bc0d46e4d549a6476e5087a3a7cae0c59057781afee07af03713f304b13f086d16804c67f4473556R5DMrml5E4lpmeil4eFPUDGoppmI', 'kassa', 'satu', '03313132333', 'Perum Graha Permata Indah blok AF-32', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`kd_biaya`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`kd_notifikasi`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`kd_outlet`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kd_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kd_pembayaran`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`kd_tarif`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`kd_testimoni`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kd_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `kd_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `biaya`
--
ALTER TABLE `biaya`
  MODIFY `kd_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kd_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `kd_outlet` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `kd_pelanggan` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `kd_pembayaran` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `kd_tarif` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kd_transaksi` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kd_user` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
