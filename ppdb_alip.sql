-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2024 pada 06.44
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
-- Database: `ppdb_alip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bayar`
--

CREATE TABLE `data_bayar` (
  `id` int(100) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `nama_siswa` varchar(111) NOT NULL,
  `asal_sekolah` varchar(111) NOT NULL,
  `gelombang` varchar(111) NOT NULL,
  `jumlah` bigint(111) NOT NULL,
  `bayar` bigint(111) NOT NULL,
  `kembalian` bigint(111) NOT NULL,
  `sisa` bigint(200) NOT NULL,
  `keterangan` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bayar`
--

INSERT INTO `data_bayar` (`id`, `no_pendaftaran`, `tanggal`, `nama_siswa`, `asal_sekolah`, `gelombang`, `jumlah`, `bayar`, `kembalian`, `sisa`, `keterangan`) VALUES
(6, 'byr006', '15-05-2024', 'pito', 'CMB', 'pertama', 20, 20, 0, 0, 'Lunas'),
(7, 'BYR007', '15-05-2024', 'alip', 'cmb', 'kedua', 10, 21, 11, 0, 'Lunas'),
(8, 'BYR008', '15-05-2024', 'robert', 'satoe', 'pertama', 20, 20, 0, 0, 'Lunas'),
(9, 'BYR012', '16-05-2024', 'PAJAR', 'KETAPANG', 'pertama', 20, 20, 0, 0, 'Lunas'),
(10, 'BYR009', '16-05-2024', 'pito', 'madep', 'kedua', 10, 11, 1, 9, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` int(111) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `nama_ortu` varchar(123) NOT NULL,
  `alamat_ortu` varchar(123) NOT NULL,
  `no_telOrtu` varchar(123) NOT NULL,
  `pekerjaan_ortu` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ortu`
--

INSERT INTO `data_ortu` (`id`, `nama_siswa`, `nama_ortu`, `alamat_ortu`, `no_telOrtu`, `pekerjaan_ortu`) VALUES
(1, 'alip', 'a', 'a', '', 'a'),
(4, 'pito', '', '', '', 'a'),
(6, 'PAJAR', '', '', '', 'a'),
(7, 'AAR', '', '', '', ''),
(8, 'pito', 'a', 'a', '', 'a'),
(9, 'alip', 'a', 'a', '', 'a'),
(10, 'robert', 'a', '1', '', 'a'),
(11, 'pito', 'a', 'a', '', 'a'),
(12, 'aar', 'a', 'a', '', 'a'),
(13, 'aar', 'a', 'a', '', 'a'),
(14, 'PAJAR', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(111) NOT NULL,
  `no_pendaftaran` varchar(123) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `ttl` varchar(123) NOT NULL,
  `jenis_kel` varchar(123) NOT NULL,
  `agama` varchar(123) NOT NULL,
  `no_telSiswa` varchar(123) NOT NULL,
  `asal_sekolah` varchar(123) NOT NULL,
  `alamat_sekolah` varchar(123) NOT NULL,
  `jurusan` varchar(123) NOT NULL,
  `tanggal` varchar(111) NOT NULL,
  `ukuran` varchar(123) NOT NULL,
  `gelombang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `no_pendaftaran`, `nama_siswa`, `ttl`, `jenis_kel`, `agama`, `no_telSiswa`, `asal_sekolah`, `alamat_sekolah`, `jurusan`, `tanggal`, `ukuran`, `gelombang`) VALUES
(8, 'BYR006', 'pito', 'cikeas,4juni 2007', 'Perempuan', 'Islam', '089', 'CMB', 'a', 'DESAIN KOMUNIKASI VISUAL', '08-05-2024', 'M', 'pertama'),
(9, 'BYR007', 'alip', 'depok', 'Laki-Laki', 'Islam', '089', 'cmb', 'a', 'DESAIN KOMUNIKASI VISUAL', '14-05-2024', 'XL', 'kedua'),
(10, 'BYR008', 'robert', 'depok', 'Laki-Laki', 'Islam', '089', 'satoe', '1', 'AKUTANSI KEUANGAN DAN LEMBAGA', '14-05-2024', '', 'pertama'),
(11, 'BYR009', 'pito', 'cikeas,4juni 2000', 'Perempuan', 'Islam', '089', 'madep', 'a', 'MANANJEMEN PERKANTORAN', '14-05-2024', '', 'kedua'),
(12, 'BYR010', 'aar', 'cikeas,juni 2000', 'Laki-Laki', 'Islam', '089', 'a', 'a', 'REKAYASA PERANGKAT LUNAK', '15-05-2024', '', 'kedua'),
(13, 'BYR011', 'aar', 'cikeas,juni 2000', 'Perempuan', 'Islam', '089', 'a', 'a', 'MANANJEMEN PERKANTORAN', '15-05-2024', '', 'ketiga'),
(14, 'BYR012', 'PAJAR', 'NGAWI', 'Laki-Laki', 'Islam', '0888', 'KETAPANG', 'UNIGA', 'DESAIN KOMUNIKASI VISUAL', '16-05-2024', '', 'pertama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wali`
--

CREATE TABLE `data_wali` (
  `id` int(111) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `nama_wali` varchar(123) NOT NULL,
  `alamat_wali` varchar(123) NOT NULL,
  `no_telWali` varchar(123) NOT NULL,
  `pekerjaan_wali` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_wali`
--

INSERT INTO `data_wali` (`id`, `nama_siswa`, `nama_wali`, `alamat_wali`, `no_telWali`, `pekerjaan_wali`) VALUES
(1, 'alip', 'a', 'a', '', '1'),
(4, 'pito', 'a', '', '', 'a'),
(6, 'PAJAR', 'a', '', '', 'a'),
(7, 'AAR', '', '', '', ''),
(8, 'pito', 'a', 'a', '', 'a'),
(9, 'alip', 'a', 'a', '', 'a'),
(10, 'robert', 'a', 'q', '', 'a'),
(11, 'pito', 'a', 'a', '', 'a'),
(12, 'aar', 'a', 'a', '', 'a'),
(13, 'aar', 'a', 'a', '', 'a'),
(14, 'PAJAR', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gel`
--

CREATE TABLE `tbl_gel` (
  `id` int(100) NOT NULL,
  `gelombang` varchar(100) NOT NULL,
  `nominal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gel`
--

INSERT INTO `tbl_gel` (`id`, `gelombang`, `nominal`) VALUES
(1, 'pertama', 20),
(7, 'kedua', 10),
(8, 'ketiga', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(111) NOT NULL,
  `nama` varchar(122) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(9, 'aca', 'petugas', '1', 'petugas'),
(11, 'alip', 'admin', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_bayar`
--
ALTER TABLE `data_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_wali`
--
ALTER TABLE `data_wali`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `tbl_gel`
--
ALTER TABLE `tbl_gel`
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
-- AUTO_INCREMENT untuk tabel `data_bayar`
--
ALTER TABLE `data_bayar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_gel`
--
ALTER TABLE `tbl_gel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
