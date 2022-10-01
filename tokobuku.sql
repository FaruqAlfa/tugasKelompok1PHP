-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Okt 2022 pada 15.03
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobuku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `stok_buku` int(11) NOT NULL,
  `harga_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id_buku`, `nama_buku`, `stok_buku`, `harga_buku`) VALUES
(1, 'awok', 11, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
