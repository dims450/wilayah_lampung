-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 30 Nov 2024 pada 05.43
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webgis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_luaswilayah`
--

CREATE TABLE `tb_luaswilayah` (
  `id` int(50) NOT NULL,
  `adm` varchar(50) NOT NULL,
  `ibu_kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `luas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_luaswilayah`
--

INSERT INTO `tb_luaswilayah` (`id`, `adm`, `ibu_kota`, `provinsi`, `luas`) VALUES
(1, 'Kota Bandar Lampung', 'Tanjung Karang ', 'Lampung ', 169),
(2, 'Kabupaten Lampung Selatan', 'Kalianda', 'Lampung ', 2.109),
(3, 'Kabupaten Lampung Barat', 'Liwa', 'Lampung ', 1.116),
(4, 'Kabupaten Tanggamus', 'Kota Agung', 'Lampung ', 2.901),
(5, 'Kabupaten Lampung Timur	', 'Sukadana', 'Lampung ', 3.867),
(6, 'Kabupaten Lampung Tengah	', 'Gunung Sugih	', 'Lampung ', 4.548),
(7, 'Kabupaten Lampung Utara', 'Kotabumi', 'Lampung ', 2.656),
(8, 'Kabupaten Tulangbawang	', 'Menggala', 'Lampung ', 3.107),
(9, 'Kabupaten Pesawaran', 'Gedong Tataan', 'Lampung ', 1.279),
(10, 'Kabupaten Pringsewu', 'Pringsewu', 'Lampung ', 614),
(11, 'Kabupaten Mesuji', 'Mesuji', 'Lampung ', 2.2),
(12, 'Kabupaten Tulang Bawang Barat', 'Panaragan', 'Lampung ', 1.281),
(13, 'Kabupaten Pesisir Barat', 'Krui', 'Lampung ', 2.993),
(14, 'Kota Metro', 'Metro', 'Lampung ', 73);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_luaswilayah`
--
ALTER TABLE `tb_luaswilayah`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
