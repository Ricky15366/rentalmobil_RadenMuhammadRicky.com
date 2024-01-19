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
-- Struktur dari tabel `tbl_rental_radenmuhammadrickyputranarayana`
--

CREATE TABLE `tbl_rental_radenmuhammadrickyputranarayana` (
  `no_trx_RadenMuhammadRickyPutraNarayana` varchar(20) NOT NULL,
  `nik_ktp_RadenMuhammadRickyPutraNarayana` varchar(16) NOT NULL,
  `no_plat_RadenMuhammadRickyPutraNarayana` varchar(10) NOT NULL,
  `tgl_rental_RadenMuhammadRickyPutraNarayana` date NOT NULL,
  `jam_rental_RadenMuhammadRickyPutraNarayana` time NOT NULL,
  `harga_RadenMuhammadRickyPutraNarayana` int(11) NOT NULL,
  `lama_RadenMuhammadRickyPutraNarayana` int(11) NOT NULL,
  `total_bayar_RadenMuhammadRickyPutraNarayana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rental_radenmuhammadrickyputranarayana`
--

INSERT INTO `tbl_rental_radenmuhammadrickyputranarayana` (`no_trx_RadenMuhammadRickyPutraNarayana`, `nik_ktp_RadenMuhammadRickyPutraNarayana`, `no_plat_RadenMuhammadRickyPutraNarayana`, `tgl_rental_RadenMuhammadRickyPutraNarayana`, `jam_rental_RadenMuhammadRickyPutraNarayana`, `harga_RadenMuhammadRickyPutraNarayana`, `lama_RadenMuhammadRickyPutraNarayana`, `total_bayar_RadenMuhammadRickyPutraNarayana`) VALUES
('', '327802206010010', 'Z 5623 ID', '2024-01-15', '04:06:00', 300000, 2, 600000),
('TRX-20240119100336', '3278022006010010', 'Z 5629 AG', '2024-01-15', '16:03:00', 300000, 2, 600000),
('TRX-20240119102733', '3278022006010010', 'Z 5629 AG', '2024-01-15', '16:03:00', 300000, 2, 600000),
('TRX-20240119102832', '3278022006010010', 'Z 5629 AG', '2024-01-15', '16:03:00', 300000, 3, 900000),
('TRX-20240119102847', '3278022006010010', 'Z 5629 AG', '2024-01-15', '16:03:00', 300000, 3, 900000),
('TRX-20240119104037', '3278022006010010', 'Z 5629 AG', '2024-01-15', '16:03:00', 300000, 3, 900000),
('TRX-20240119104259', '3278022006010010', 'Z 5629 AG', '2024-01-15', '16:03:00', 300000, 3, 900000),
('TRX-20240119104344', '3278022006010010', 'Z 5629 AG', '2024-01-15', '16:03:00', 300000, 3, 900000),
('TRX-20240119105508', '3278022006010010', 'Z 5629 AG', '2024-01-15', '16:03:00', 300000, 3, 900000),
('TRX-20240119105634', '3278022006010010', 'Z 5629 AG', '2024-01-15', '16:03:00', 300000, 3, 900000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_rental_radenmuhammadrickyputranarayana`
--
ALTER TABLE `tbl_rental_radenmuhammadrickyputranarayana`
  ADD PRIMARY KEY (`no_trx_RadenMuhammadRickyPutraNarayana`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
