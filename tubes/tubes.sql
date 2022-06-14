-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Jun 2022 pada 05.24
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `dosis` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama`, `keterangan`, `perusahaan`, `dosis`, `gambar`) VALUES
(1, 'rrr', 'rr', 'rrrPT.DEVA INDUSTRIES (INDONESIA)', 'Dewasa (Analgesik dan Antiinflamasi): 400mg, 2 -3 kali sehari', ''),
(46, 'Bodrex', 'Bodrex adalah obat yang bermanfaat untuk meringankan sakit kepala, sakit gigi, dan demam. Selain itu, obat ini juga memiliki varian yang ditujukan untuk meredakan gejala flu, seperti bersin, hidung tersumbat, batuk berdahak, atau batuk kering.', 'PT TEMPO SCAN PACIFIC TBK (TSP) – MANUFAKTUR FARMA', 'Dewasa: 1 tablet, 3–4 kali sehari. Anak usia &gt;12 tahun: 1 tablet, 3–4 kali sehari. Anak usia 6–12 tahun: 0,5–1 tablet, 3–4 kali sehari.', '629b7799829b2.jpg'),
(49, 'asd', 'asd', 'asd', 'asd', '629b7726d54b2.jpg'),
(50, 'asd', 'asd', 'asd', 'qwe', '629b7799829b2.jpg'),
(51, 'asd', 'asd', 'asd', 'qwe', '629b7799829b2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'audi', 'audi', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
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
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
