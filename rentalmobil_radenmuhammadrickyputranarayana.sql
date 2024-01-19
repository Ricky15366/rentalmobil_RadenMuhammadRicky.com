-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Jan 2024 pada 16.36
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
('Z 3460 ID', 'Avanza, Brio, Pajero ', 'Honda,Toyota, Suzuki, DLL', 'Turbo');

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
(5, '3278022006010010	', 'Raden Muhammad Ricky Putra Narayana', '085320908251', 'Perum PKR'),
(6, '3278022006010010', 'Raden Muhammad Ricky', '081388350328', 'Perum PKR');

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
-- Indeks untuk tabel `tbl_mobil_radenmuhammadrickyputranarayana`
--
ALTER TABLE `tbl_mobil_radenmuhammadrickyputranarayana`
  ADD PRIMARY KEY (`no_plat_RadenMuhammadRickyPutraNarayana`);

--
-- Indeks untuk tabel `tbl_pelanggan_radenmuhammadrickyputranarayana`
--
ALTER TABLE `tbl_pelanggan_radenmuhammadrickyputranarayana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_rental_radenmuhammadrickyputranarayana`
--
ALTER TABLE `tbl_rental_radenmuhammadrickyputranarayana`
  ADD PRIMARY KEY (`no_trx_RadenMuhammadRickyPutraNarayana`);

--
-- Indeks untuk tabel `tbl_user_radenmuhammadrickyputranarayana`
--
ALTER TABLE `tbl_user_radenmuhammadrickyputranarayana`
  ADD PRIMARY KEY (`id_user_RadenMuhammadRickyPutraNarayana`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan_radenmuhammadrickyputranarayana`
--
ALTER TABLE `tbl_pelanggan_radenmuhammadrickyputranarayana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
