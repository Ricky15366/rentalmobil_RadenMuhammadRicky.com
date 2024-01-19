-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Jan 2024 pada 14.25
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
-- Struktur dari tabel `tbl_user_radenmuhammadrickyputranarayana`
--

CREATE TABLE `tbl_user_radenmuhammadrickyputranarayana` (
  `id_user_RadenMuhammadRickyPutraNarayana` int(11) NOT NULL,
  `username_RadenMuhammadRickyPutraNarayana` varchar(35) NOT NULL,
  `password_RadenMuhammadRickyPutraNarayana` varchar(100) NOT NULL,
  `nama_lengkap_RadenMuhammadRickyPutraNarayana` varchar(35) NOT NULL,
  `level_RadenMuhammadRickyPutraNarayana` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user_radenmuhammadrickyputranarayana`
--

INSERT INTO `tbl_user_radenmuhammadrickyputranarayana` (`id_user_RadenMuhammadRickyPutraNarayana`, `username_RadenMuhammadRickyPutraNarayana`, `password_RadenMuhammadRickyPutraNarayana`, `nama_lengkap_RadenMuhammadRickyPutraNarayana`, `level_RadenMuhammadRickyPutraNarayana`) VALUES
(1, 'admin', 'admin123', 'Raden Muhammad Ricky Putra Narayana', 'admin'),
(2, 'user', 'user123', 'Raden Muhammad Ricky P.N', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_user_radenmuhammadrickyputranarayana`
--
ALTER TABLE `tbl_user_radenmuhammadrickyputranarayana`
  ADD PRIMARY KEY (`id_user_RadenMuhammadRickyPutraNarayana`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
