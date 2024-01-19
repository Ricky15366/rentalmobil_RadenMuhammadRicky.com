-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Jan 2024 pada 14.24
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil_radenmuhammadrickyputranarayana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan_radenmuhammadrickyputranarayana`
--

CREATE TABLE `tbl_pelanggan_radenmuhammadrickyputranarayana` (
  `id` int(11) NOT NULL,
  `nik_ktp_RadenMuhammadRickyPutraNarayana` varchar(255) DEFAULT NULL,
  `nama_RadenMuhammadRickyPutraNarayana` varchar(255) DEFAULT NULL,
  `no_hp_RadenMuhammadRickyPutraNarayana` varchar(255) DEFAULT NULL,
  `alamat_RadenMuhammadRickyPutraNarayana` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelanggan_radenmuhammadrickyputranarayana`
--

INSERT INTO `tbl_pelanggan_radenmuhammadrickyputranarayana` (`id`, `nik_ktp_RadenMuhammadRickyPutraNarayana`, `nama_RadenMuhammadRickyPutraNarayana`, `no_hp_RadenMuhammadRickyPutraNarayana`, `alamat_RadenMuhammadRickyPutraNarayana`) VALUES
(3, '3278022006010010	', 'Raden 1', '081388350328', 'BRP'),
(5, '3278022006010010	', 'Raden Muhammad Ricky Putra Narayana', '085320908251', 'Perum PKR');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_pelanggan_radenmuhammadrickyputranarayana`
--
ALTER TABLE `tbl_pelanggan_radenmuhammadrickyputranarayana`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan_radenmuhammadrickyputranarayana`
--
ALTER TABLE `tbl_pelanggan_radenmuhammadrickyputranarayana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
