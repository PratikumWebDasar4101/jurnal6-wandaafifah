-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2018 pada 06.25
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(25) NOT NULL,
  `nama` text NOT NULL,
  `nim` int(10) NOT NULL,
  `kelas` text NOT NULL,
  `jeniskelamin` text NOT NULL,
  `hobi` text NOT NULL,
  `fakultas` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama`, `nim`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`) VALUES
(1, 'wanda', 5453367, 'd3mi4102', '', 'Jalan-jalan', 'FIT', 'eweqrrwrqw'),
(2, 'wanda', 5453367, 'd3mi4102', '', 'Jalan-jalan', 'FIT', 'eweqrrwrqw'),
(3, 'wanda', 5453367, 'd3mi4102', '', 'Jalan-jalan', 'FIT', 'eweqrrwrqw'),
(4, 'wanda', 34342, 'd3mi4102', 'Perempuan', 'Jalan-jalan', 'FIT', 'rtertet'),
(5, 'wanda', 34342, 'd3mi4102', 'Perempuan', 'Jalan-jalan', 'FIT', 'rtertet'),
(6, 'rahmi', 5453367, 'd3mi4102', 'Perempuan', 'Baca Novel', 'FIT', 'tgfyut');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
