-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2023 pada 20.44
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laboratorium`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakan`
--

CREATE TABLE `kerusakan` (
  `idalat` varchar(10) NOT NULL,
  `alat` varchar(20) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `jumlah` varchar(15) NOT NULL,
  `tgl_lapor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `idalat` varchar(10) NOT NULL,
  `alat` varchar(20) NOT NULL,
  `jumlah` varchar(15) NOT NULL,
  `tgl_pinjam` varchar(20) NOT NULL,
  `tgl_kembali` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`nim`, `nama`, `no_hp`, `idalat`, `alat`, `jumlah`, `tgl_pinjam`, `tgl_kembali`) VALUES
('3312101067', 'Irsyad Nafi Alif Perdana', '0878237777', 'cam1', 'Camera', '1', '21 December, 2022', '22 December, 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `idalat` varchar(10) NOT NULL,
  `alat` varchar(20) NOT NULL,
  `jumlah` varchar(15) NOT NULL,
  `tgl_pinjam` varchar(20) NOT NULL,
  `tgl_kembali` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stokbrg`
--

CREATE TABLE `stokbrg` (
  `idalat` varchar(10) NOT NULL,
  `alat` varchar(20) NOT NULL,
  `jumlah` varchar(15) NOT NULL,
  `status` enum('Tersedia','Tidak Tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stokbrg`
--

INSERT INTO `stokbrg` (`idalat`, `alat`, `jumlah`, `status`) VALUES
('cam1', 'Camera', '30', 'Tersedia'),
('keyb1', 'Keyboard', '30', 'Tersedia'),
('ssd2', 'SSD', '30', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Mahasiswa','Laboran') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `userlog`
--

INSERT INTO `userlog` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Irsyad Nafi Alif Perdana', 'irsyad', 'irsyad', 'Mahasiswa'),
(2, 'admin', 'admin', 'admin', 'Laboran'),
(3, 'nafi', 'nafi', '5bfb391e6148ab027d7389fed2427a86', 'Mahasiswa'),
(4, 'admin2', 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'Laboran');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`alat`),
  ADD KEY `idalat` (`idalat`),
  ADD KEY `tgl_lapor` (`tgl_lapor`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `idalat` (`idalat`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `idalat` (`idalat`),
  ADD KEY `tgl_kembali` (`tgl_kembali`);

--
-- Indeks untuk tabel `stokbrg`
--
ALTER TABLE `stokbrg`
  ADD PRIMARY KEY (`idalat`);

--
-- Indeks untuk tabel `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD CONSTRAINT `kerusakan_ibfk_1` FOREIGN KEY (`idalat`) REFERENCES `stokbrg` (`idalat`),
  ADD CONSTRAINT `kerusakan_ibfk_2` FOREIGN KEY (`tgl_lapor`) REFERENCES `pengembalian` (`nim`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`idalat`) REFERENCES `stokbrg` (`idalat`);

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`idalat`) REFERENCES `stokbrg` (`idalat`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`tgl_kembali`) REFERENCES `peminjaman` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
