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
-- Struktur dari tabel `tbl_mobil_radenmuhammadrickyputranarayana`
--

CREATE TABLE `tbl_mobil_radenmuhammadrickyputranarayana` (
  `no_plat_RadenMuhammadRickyPutraNarayana` varchar(10) NOT NULL,
  `nama_mobil_RadenMuhammadRickyPutraNarayana` varchar(25) NOT NULL,
  `brand_mobil_RadenMuhammadRickyPutraNarayana` varchar(25) NOT NULL,
  `tipe_transmisi_RadenMuhammadRickyPutraNarayana` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mobil_radenmuhammadrickyputranarayana`
--

INSERT INTO `tbl_mobil_radenmuhammadrickyputranarayana` (`no_plat_RadenMuhammadRickyPutraNarayana`, `nama_mobil_RadenMuhammadRickyPutraNarayana`, `brand_mobil_RadenMuhammadRickyPutraNarayana`, `tipe_transmisi_RadenMuhammadRickyPutraNarayana`) VALUES
('Z 3460 ID', 'Avanza, Brio, Pajero ', 'Honda,Toyota, Suzuki, DLL', 'Turbo'),
('Z 5629 AG', 'Ferrari Aventador', 'Ferrari', 'AT');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_mobil_radenmuhammadrickyputranarayana`
--
ALTER TABLE `tbl_mobil_radenmuhammadrickyputranarayana`
  ADD PRIMARY KEY (`no_plat_RadenMuhammadRickyPutraNarayana`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
