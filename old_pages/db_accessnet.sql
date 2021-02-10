-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Mar 2019 pada 15.39
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_accessnet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `quest`
--

CREATE TABLE `quest` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` char(15) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `spesification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `quest`
--

INSERT INTO `quest` (`id`, `name`, `email`, `phone`, `alamat`, `spesification`) VALUES
(2, 'latief', 'latief@gmail.com', '082218313600', 'sleman', 'jual kambing'),
(3, 'bambang', 'bam@gmail.com', '085643950040', 'bantul', 'jual teri'),
(4, 'tejo', 'tejo@gmail.com', '0998', 'tegal', 'telo koe kon, asu kudu dawa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `quest`
--
ALTER TABLE `quest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `quest`
--
ALTER TABLE `quest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
