-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2022 pada 19.53
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warteg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'teddy', 'teddy', 'Teddy Hermansyah'),
(2, 'kagami', 'kagami', 'Kagami Yagami');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli_hidangan`
--

CREATE TABLE `beli_hidangan` (
  `id_beli_hidangan` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_hidangan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beli_hidangan`
--

INSERT INTO `beli_hidangan` (`id_beli_hidangan`, `id_pembelian`, `id_hidangan`, `jumlah`, `nama`, `harga`, `subharga`) VALUES
(1, 1, 1, 1, 'Ayam Goreng', 7000, 7000),
(2, 2, 2, 1, 'Tempe Orek', 3000, 3000),
(3, 0, 1, 1, 'Ayam Goreng', 7000, 7000),
(4, 0, 2, 1, 'Tempe Orek', 3000, 3000),
(5, 0, 2, 2, 'Tempe Orek', 3000, 6000),
(6, 0, 2, 1, 'Tempe Orek', 3000, 3000),
(7, 0, 2, 1, 'Tempe Orek', 3000, 3000),
(8, 4, 2, 1, 'Tempe Orek', 3000, 3000),
(9, 5, 1, 2, 'Ayam Goreng', 7000, 14000),
(10, 6, 1, 1, 'Ayam Goreng', 7000, 7000),
(11, 7, 1, 1, 'Ayam Goreng', 7000, 7000),
(12, 7, 2, 2, 'Tempe Orek', 3000, 6000),
(13, 7, 3, 1, 'Sate', 15000, 15000),
(14, 8, 1, 1, 'Ayam Goreng', 7000, 7000),
(15, 8, 2, 1, 'Tempe Orek', 3000, 3000),
(16, 8, 3, 1, 'Sate', 15000, 15000),
(17, 9, 1, 1, 'Ayam Goreng', 7000, 7000),
(18, 9, 2, 1, 'Tempe Orek', 3000, 3000),
(19, 10, 1, 1, 'Ayam Goreng', 7000, 7000),
(20, 11, 2, 1, 'Tempe Orek', 3000, 3000),
(21, 12, 1, 1, 'Ayam Goreng', 7000, 7000),
(22, 13, 2, 1, 'Tempe Orek', 3000, 3000),
(23, 13, 1, 1, 'Ayam Goreng', 7000, 7000),
(24, 13, 3, 1, 'Sate', 15000, 15000),
(25, 14, 1, 1, 'Ayam Goreng', 7000, 7000),
(26, 15, 2, 1, 'Tempe Orek', 3000, 3000),
(27, 16, 1, 1, 'Ayam Goreng', 7000, 7000),
(28, 16, 2, 1, 'Tempe Orek', 3000, 3000),
(29, 16, 3, 1, 'Sate', 15000, 15000),
(30, 17, 1, 1, 'Ayam Goreng', 7000, 7000),
(31, 17, 2, 1, 'Tempe Orek', 3000, 3000),
(32, 17, 3, 1, 'Sate', 15000, 15000),
(33, 18, 1, 1, 'Ayam Goreng', 7000, 7000),
(34, 18, 2, 1, 'Tempe Orek', 3000, 3000),
(35, 18, 3, 1, 'Sate', 15000, 15000),
(36, 19, 1, 1, 'Ayam Goreng', 7000, 7000),
(37, 19, 2, 1, 'Tempe Orek', 3000, 3000),
(38, 19, 3, 1, 'Sate', 15000, 15000),
(39, 20, 1, 2, 'Ayam Goreng', 7000, 14000),
(40, 20, 2, 1, 'Tempe Orek', 3000, 3000),
(41, 21, 1, 1, 'Ayam Goreng', 7000, 7000),
(42, 21, 2, 1, 'Tempe Orek', 3000, 3000),
(43, 21, 3, 1, 'Sate', 15000, 15000),
(44, 22, 1, 1, 'Ayam Goreng', 7000, 7000),
(45, 22, 2, 1, 'Tempe Orek', 3000, 3000),
(46, 22, 3, 1, 'Sate', 15000, 15000),
(47, 23, 1, 1, 'Ayam Goreng', 7000, 7000),
(48, 24, 1, 1, 'Ayam Goreng', 7000, 7000),
(49, 25, 1, 1, 'Ayam Goreng', 7000, 7000),
(50, 26, 1, 1, 'Ayam Goreng', 7000, 7000),
(51, 27, 1, 1, 'Ayam Goreng', 7000, 7000),
(52, 28, 2, 1, 'Tempe Orek', 3000, 3000),
(53, 29, 2, 1, 'Tempe Orek', 3000, 3000),
(54, 30, 1, 1, 'Ayam Goreng', 7000, 7000),
(55, 31, 2, 1, 'Tempe Orek', 3000, 3000),
(56, 32, 1, 1, 'Ayam Goreng', 7000, 7000),
(57, 33, 1, 1, 'Ayam Goreng', 7000, 7000),
(58, 34, 1, 1, 'Ayam Goreng', 7000, 7000),
(59, 35, 1, 1, 'Ayam Goreng', 7000, 7000),
(60, 36, 1, 1, 'Ayam Goreng', 7000, 7000),
(61, 37, 2, 1, 'Tempe Orek', 3000, 3000),
(62, 38, 1, 1, 'Ayam Goreng', 7000, 7000),
(63, 39, 1, 3, 'Ayam Goreng', 7000, 21000),
(64, 40, 1, 1, 'Ayam Goreng', 7000, 7000),
(65, 41, 1, 1, 'Ayam Goreng', 7000, 7000),
(66, 42, 1, 1, 'Ayam Goreng', 7000, 7000),
(67, 43, 2, 1, 'Tempe Orek', 3000, 3000),
(68, 44, 2, 1, 'Tempe Orek', 3000, 3000),
(69, 45, 1, 1, 'Ayam Goreng', 7000, 7000),
(70, 46, 1, 1, 'Ayam Goreng', 7000, 7000),
(71, 47, 1, 1, 'Ayam Goreng', 7000, 7000),
(72, 48, 2, 1, 'Tempe Orek', 3000, 3000),
(73, 49, 2, 1, 'Tempe Orek', 3000, 3000),
(74, 50, 1, 1, 'Ayam Goreng', 7000, 7000),
(75, 51, 1, 1, 'Ayam Goreng', 7000, 7000),
(76, 52, 2, 1, 'Tempe Orek', 3000, 3000),
(77, 53, 3, 1, 'Sate', 15000, 15000),
(78, 54, 2, 1, 'Tempe Orek', 3000, 3000),
(79, 55, 1, 1, 'Ayam Goreng', 7000, 7000),
(80, 56, 2, 1, 'Tempe Orek', 3000, 3000),
(81, 57, 1, 1, 'Ayam Goreng', 7000, 7000),
(82, 58, 2, 1, 'Tempe Orek', 3000, 3000),
(83, 58, 1, 1, 'Ayam Goreng', 7000, 7000),
(84, 58, 3, 1, 'Sate', 15000, 15000),
(85, 59, 1, 1, 'Ayam Goreng', 7000, 7000),
(86, 60, 1, 1, 'Ayam Goreng', 7000, 7000),
(87, 60, 2, 1, 'Tempe Orek', 3000, 3000),
(88, 60, 3, 1, 'Sate', 15000, 15000),
(89, 61, 3, 1, 'Sate', 15000, 15000),
(90, 62, 1, 1, 'Ayam Goreng', 7000, 7000),
(91, 63, 1, 1, 'Ayam Goreng', 7000, 7000),
(92, 63, 2, 1, 'Tempe Orek', 3000, 3000),
(93, 63, 3, 1, 'Sate', 15000, 15000),
(94, 64, 1, 1, 'Ayam Goreng', 7000, 7000),
(95, 65, 1, 1, 'Ayam Goreng', 7000, 7000),
(96, 66, 2, 1, 'Tempe Orek', 3000, 3000),
(97, 67, 1, 2, 'Ayam Goreng', 7000, 14000),
(98, 68, 1, 2, 'Ayam Goreng', 7000, 14000),
(99, 68, 2, 1, 'Tempe Orek', 3000, 3000),
(100, 68, 3, 1, 'Sate', 15000, 15000),
(101, 76, 1, 1, 'Ayam Goreng', 7000, 7000),
(102, 76, 2, 1, 'Tempe Orek', 3000, 3000),
(103, 76, 3, 1, 'Sate', 15000, 15000),
(104, 77, 1, 2, 'Ayam Goreng', 7000, 14000),
(105, 77, 2, 1, 'Tempe Orek', 3000, 3000),
(106, 77, 3, 1, 'Sate', 15000, 15000),
(107, 78, 1, 1, 'Ayam Goreng', 7000, 7000),
(108, 79, 3, 10, 'Sate', 1500, 15000),
(109, 79, 2, 1, 'Tempe Orek', 3000, 3000),
(110, 80, 1, 1, 'Ayam Goreng', 7000, 7000),
(111, 81, 1, 2, 'Ayam Goreng', 7000, 14000),
(112, 82, 2, 1, 'Tempe Orek', 3000, 3000),
(113, 83, 6, 1, 'Teh', 2000, 2000),
(114, 84, 1, 1, 'Nasi putih', 2500, 2500),
(115, 85, 2, 1, 'Tempe Orek', 3000, 3000),
(116, 86, 1, 1, 'Nasi putih', 2500, 2500),
(117, 86, 2, 1, 'Tempe Orek', 3000, 3000),
(118, 86, 4, 1, 'Ayam Goreng', 5000, 5000),
(119, 86, 5, 1, 'Air Putih', 1000, 1000),
(120, 87, 1, 1, 'Nasi putih', 2500, 2500),
(121, 87, 2, 1, 'Tempe Orek', 3000, 3000),
(122, 87, 5, 1, 'Air Putih', 1000, 1000),
(123, 88, 2, 1, 'Tempe Orek', 3000, 3000),
(124, 89, 2, 2, 'Tempe Orek', 3000, 6000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hidangan`
--

CREATE TABLE `hidangan` (
  `id_hidangan` int(11) NOT NULL,
  `nama_hidangan` varchar(100) NOT NULL,
  `harga_hidangan` int(11) NOT NULL,
  `foto_hidangan` varchar(100) NOT NULL,
  `deskripsi_hidangan` text NOT NULL,
  `status_hidangan` varchar(100) NOT NULL DEFAULT 'Tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hidangan`
--

INSERT INTO `hidangan` (`id_hidangan`, `nama_hidangan`, `harga_hidangan`, `foto_hidangan`, `deskripsi_hidangan`, `status_hidangan`) VALUES
(1, 'Nasi putih', 2500, 'nasi.jpg', 'Nasi hangat', 'Tersedia'),
(2, 'Tempe Orek', 3000, 'tempe orek.jpg', 'Rasa manis-manis ke pedes gitu', 'Tersedia'),
(3, 'Sate', 1500, 'sate.jpg', 'Sate Ayam... Sedapnya...\r\nHarga sate di mulai dari pertusuk(1) = 1500', 'Tersedia'),
(4, 'Ayam Goreng', 5000, 'ayam goreng.jpg', 'Sedapnya ayam goreng', 'Tersedia'),
(5, 'Air Putih', 1000, 'air putih.jpg', 'Air mineral', 'Tersedia'),
(6, 'Teh', 2000, 'teh.jpg', 'Teh manis', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `uang_kembalian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `bayar`, `jumlah`, `uang_kembalian`) VALUES
(1, 1, 10000, 7000, 3000),
(2, 68, 50000, 32000, 18000),
(3, 0, 100000, 25000, 75000),
(4, 0, 10000, 32000, -22000),
(5, 67, 60000, 14000, 46000),
(6, 76, 50000, 25000, 25000),
(7, 77, 50000, 32000, 18000),
(8, 81, 20000, 14000, 6000),
(9, 1, 10000, 7000, 3000),
(10, 82, 5000, 3000, 2000),
(11, 83, 5000, 2000, 3000),
(12, 66, 0, 3000, -3000),
(13, 84, 10000, 2500, 7500),
(14, 85, 10000, 3000, 7000),
(15, 86, 20000, 11500, 8500),
(16, 87, 10000, 6500, 3500),
(17, 88, 0, 3000, -3000),
(18, 47, 10000, 7000, 3000),
(19, 48, 10000, 3000, 7000),
(20, 89, 7000, 6000, 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `waktu_pembelian` time NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'Proses Pembayaran'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `tanggal_pembelian`, `waktu_pembelian`, `total_pembelian`, `status_pembelian`) VALUES
(1, '2019-11-03', '10:08:19', 7000, 'Sudah Melakukan Pembayaran'),
(2, '2019-11-03', '16:28:08', 3000, 'Sudah Melakukan Pembayaran'),
(4, '2019-11-03', '15:01:05', 3000, 'Sudah Melakukan Pembayaran'),
(5, '2019-11-03', '15:02:18', 14000, 'Sudah Melakukan Pembayaran'),
(6, '2019-11-03', '15:04:45', 7000, 'Sudah Melakukan Pembayaran'),
(7, '2019-11-03', '15:08:27', 28000, 'Sudah Melakukan Pembayaran'),
(8, '2019-11-03', '21:10:57', 25000, 'Sudah Melakukan Pembayaran'),
(9, '2019-11-03', '15:11:37', 10000, 'Sudah Melakukan Pembayaran'),
(10, '2019-11-03', '21:11:57', 7000, 'Sudah Melakukan Pembayaran'),
(11, '2019-11-03', '21:12:22', 3000, 'Sudah Melakukan Pembayaran'),
(12, '2019-11-04', '23:11:40', 7000, 'Sudah Melakukan Pembayaran'),
(13, '2019-11-04', '23:15:01', 25000, 'Sudah Melakukan Pembayaran'),
(14, '2019-11-04', '23:26:42', 7000, 'Sudah Melakukan Pembayaran'),
(15, '2019-11-04', '23:31:18', 3000, 'Sudah Melakukan Pembayaran'),
(16, '2019-11-04', '23:39:32', 25000, 'Sudah Melakukan Pembayaran'),
(17, '2019-11-04', '23:47:53', 25000, 'Sudah Melakukan Pembayaran'),
(18, '2019-11-05', '00:15:42', 25000, 'Sudah Melakukan Pembayaran'),
(19, '2019-11-05', '18:40:10', 25000, 'Sudah Melakukan Pembayaran'),
(20, '2019-11-05', '18:40:32', 17000, 'Sudah Melakukan Pembayaran'),
(21, '2019-11-05', '18:46:11', 25000, 'Sudah Melakukan Pembayaran'),
(22, '2019-11-05', '19:04:18', 25000, 'Sudah Melakukan Pembayaran'),
(23, '2019-11-05', '19:24:02', 7000, 'Sudah Melakukan Pembayaran'),
(24, '2019-11-05', '19:28:48', 7000, 'Sudah Melakukan Pembayaran'),
(25, '2019-11-05', '19:29:08', 7000, 'Sudah Melakukan Pembayaran'),
(26, '2019-11-05', '19:35:09', 7000, 'Sudah Melakukan Pembayaran'),
(27, '2019-11-05', '19:37:18', 7000, 'Sudah Melakukan Pembayaran'),
(28, '2019-11-05', '19:38:33', 3000, 'Sudah Melakukan Pembayaran'),
(29, '2019-11-05', '19:41:04', 3000, 'Sudah Melakukan Pembayaran'),
(30, '2019-11-05', '19:52:39', 7000, 'Sudah Melakukan Pembayaran'),
(31, '2019-11-05', '19:55:17', 3000, 'Sudah Melakukan Pembayaran'),
(32, '2019-11-05', '19:56:14', 7000, 'Sudah Melakukan Pembayaran'),
(33, '2019-11-05', '19:59:52', 7000, 'Sudah Melakukan Pembayaran'),
(34, '2019-11-05', '20:01:43', 7000, 'Sudah Melakukan Pembayaran'),
(35, '2019-11-05', '20:02:24', 7000, 'Sudah Melakukan Pembayaran'),
(36, '2019-11-05', '20:03:30', 7000, 'Proses Pembayaran'),
(37, '2019-11-05', '20:04:27', 3000, 'Sudah Melakukan Pembayaran'),
(38, '2019-11-05', '20:25:05', 7000, 'Sudah Melakukan Pembayaran'),
(39, '2019-11-05', '20:28:14', 21000, 'Sudah Melakukan Pembayaran'),
(40, '2019-11-05', '23:01:52', 7000, 'Proses Pembayaran'),
(41, '2019-11-05', '23:04:29', 7000, 'Proses Pembayaran'),
(42, '2019-11-05', '23:04:51', 7000, 'Sudah Melakukan Pembayaran'),
(43, '2019-11-05', '23:15:41', 3000, 'Sudah Melakukan Pembayaran'),
(44, '2019-11-05', '23:16:46', 3000, 'Sudah Melakukan Pembayaran'),
(45, '2019-11-05', '23:19:40', 7000, 'Sudah Melakukan Pembayaran'),
(46, '2019-11-05', '23:33:13', 7000, 'Sudah Melakukan Pembayaran'),
(47, '2019-11-05', '23:41:22', 7000, 'Sudah Melakukan Pembayaran'),
(48, '2019-11-05', '23:41:55', 3000, 'Sudah Melakukan Pembayaran'),
(49, '2019-11-05', '23:42:29', 3000, 'Proses Pembayaran'),
(50, '2019-11-05', '23:42:53', 7000, 'Sudah Melakukan Pembayaran'),
(51, '2019-11-05', '23:55:38', 7000, 'Sudah Melakukan Pembayaran'),
(52, '2019-11-05', '23:59:09', 3000, 'Sudah Melakukan Pembayaran'),
(53, '2019-11-06', '00:00:05', 15000, 'Sudah Melakukan Pembayaran'),
(54, '2019-11-06', '00:15:29', 3000, 'Belum Melakukan Pembayaran'),
(55, '2019-11-08', '20:18:08', 7000, 'Sudah Melakukan Pembayaran'),
(56, '2019-11-08', '20:33:56', 3000, 'Sudah Melakukan Pembayaran'),
(57, '2019-11-08', '20:34:51', 7000, 'Sudah Melakukan Pembayaran'),
(58, '2019-11-08', '20:38:30', 25000, 'Sudah Melakukan Pembayaran'),
(59, '2019-11-08', '20:39:56', 7000, 'Sudah Melakukan Pembayaran'),
(60, '2019-11-08', '20:46:00', 25000, 'Sudah Melakukan Pembayaran'),
(61, '2019-11-08', '20:46:27', 15000, 'Sudah Melakukan Pembayaran'),
(62, '2019-11-08', '20:48:58', 7000, 'Proses Pembayaran'),
(63, '2019-11-08', '20:50:53', 25000, 'Sudah Melakukan Pembayaran'),
(64, '2019-11-08', '20:51:55', 7000, 'Sudah Melakukan Pembayaran'),
(65, '2019-11-08', '20:53:36', 7000, 'Proses Pembayaran'),
(66, '2019-11-08', '20:56:24', 3000, 'Belum Melakukan Pembayaran'),
(67, '2019-11-08', '20:57:21', 14000, 'Sudah Melakukan Pembayaran'),
(68, '2019-11-09', '23:09:17', 32000, 'Sudah Melakukan Pembayaran'),
(69, '0000-00-00', '00:00:00', 0, 'Proses Pembayaran'),
(70, '0000-00-00', '00:00:00', 0, 'Proses Pembayaran'),
(71, '0000-00-00', '00:00:00', 0, 'Proses Pembayaran'),
(72, '0000-00-00', '00:00:00', 0, 'Proses Pembayaran'),
(73, '0000-00-00', '00:00:00', 0, 'Proses Pembayaran'),
(74, '0000-00-00', '00:00:00', 0, 'Proses Pembayaran'),
(75, '0000-00-00', '00:00:00', 0, 'Proses Pembayaran'),
(76, '2019-11-10', '02:03:01', 25000, 'Sudah Melakukan Pembayaran'),
(77, '2019-11-10', '02:19:24', 32000, 'Sudah Melakukan Pembayaran'),
(78, '2019-11-18', '13:07:52', 7000, 'Proses Pembayaran'),
(79, '2019-11-18', '13:47:36', 18000, 'Proses Pembayaran'),
(80, '2019-11-18', '14:05:10', 7000, 'Proses Pembayaran'),
(81, '2019-11-21', '01:39:43', 14000, 'Sudah Melakukan Pembayaran'),
(82, '2019-11-21', '23:46:23', 3000, 'Sudah Melakukan Pembayaran'),
(83, '2019-11-21', '23:51:02', 2000, 'Sudah Melakukan Pembayaran'),
(84, '2019-11-22', '00:07:26', 2500, 'Sudah Melakukan Pembayaran'),
(85, '2019-11-22', '16:29:29', 3000, 'Sudah Melakukan Pembayaran'),
(86, '2019-11-25', '11:44:20', 11500, 'Sudah Melakukan Pembayaran'),
(87, '2019-11-25', '13:27:17', 6500, 'Sudah Melakukan Pembayaran'),
(88, '2019-12-09', '15:04:17', 3000, 'Sudah Melakukan Pembayaran'),
(89, '2022-11-14', '01:52:23', 6000, 'Sudah Melakukan Pembayaran');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `beli_hidangan`
--
ALTER TABLE `beli_hidangan`
  ADD PRIMARY KEY (`id_beli_hidangan`);

--
-- Indeks untuk tabel `hidangan`
--
ALTER TABLE `hidangan`
  ADD PRIMARY KEY (`id_hidangan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `beli_hidangan`
--
ALTER TABLE `beli_hidangan`
  MODIFY `id_beli_hidangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT untuk tabel `hidangan`
--
ALTER TABLE `hidangan`
  MODIFY `id_hidangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
