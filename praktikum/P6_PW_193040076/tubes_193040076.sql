-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2020 pada 09.46
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040076`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `tipe` varchar(100) DEFAULT NULL,
  `prosesor` varchar(100) DEFAULT NULL,
  `memori` varchar(100) DEFAULT NULL,
  `storage` varchar(100) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `elektronik`
--

INSERT INTO `elektronik` (`id`, `gambar`, `tipe`, `prosesor`, `memori`, `storage`, `harga`) VALUES
(1, 'ROG (1).png', 'ROG Strix Hero III', 'Inte Core i9 9880H Processor,', '16 GB, up to 32  GB SDRAM, Dual-channel', 'Hard drive: 1TB HDD ', 'Rp 24.299.000'),
(2, 'ROG (2).png', 'ROG Mothership (GZ700)', 'Intel Core i9 9980HK Processor', 'DDR4 2666MHz SDRAM, up to 64  GB SDRAM', 'Solid state drive: 512GB', 'Rp 130.999.000'),
(3, 'ROG (3).png', 'ROG Strix G', 'Intel Core i7 9750H Processor', '8 GB, up to 32  GB SDRAM, Dual-channel', 'Hard drive: 1TB', 'Rp 13.099.000'),
(4, 'ROG (4).png', 'ROG Strix SCAR III', 'Intel Core i9 9880H Processor', '16 GB, up to 32  GB SDRAM, Dual-channel', 'Hard drive: 1TB', 'Rp 29.999.000'),
(5, 'ROG (5).png', 'ROG-Zephyrus-S-GX502', 'Intel Core i7 9750H Processor', '16 GB, up to 32  GB SDRAM, Dual-channel', 'Solid state drive: 1TB', 'Rp 37.999.000'),
(6, 'ROG (6).png', 'ROG-Zephyrus-M-GU502', 'Intel Core i7 9750H Processor', '16 GB, up to 24  GB SDRAM, Dual-channel', 'Solid state drive: 512GB', 'Rp 25.999.000'),
(7, 'ROG (7).png', 'ROG-Zephyrus-G15', 'AMD Ryzen 7 3750H Processor', '8 GB Onboard memory, 1 x SO-DIMM socket , Dual-channel', 'Solid state drive: 512GB', 'Rp 20.299.000'),
(8, 'ROG (8).png', 'ROG-Zephyrus-S-GX531', 'Intel Core i7 8750H Processor', '8 GB DDR4, up to 16  GB SDRAM', 'Solid state drive: 1TB', 'Rp 56.999.000'),
(9, 'ROG (9).png', 'ROG-Strix-SCAR-Edition', 'Intel Core i7 7700HQ Processor', '16 GB DDR4 2400MHz SDRAM', 'Hard Drives: 1TB', 'Rp 19.799.000'),
(33, 'ROG (10).png', 'ASUS-TUF-Gaming-FX505DV', 'AMD Ryzen 7 3750H', 'DDR4 up to 32  GB SDRAM, Dual-channel', '1TB SATA HDD ', 'Rp 17.299.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
