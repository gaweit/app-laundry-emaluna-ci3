-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jun 2022 pada 08.27
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emaluna`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `judul_about` varchar(50) NOT NULL,
  `deskripsi_about` text NOT NULL,
  `gambar_about` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `judul_about`, `deskripsi_about`, `gambar_about`) VALUES
(2, 'About 2', '            asdasdsfda asdasdsfda    asdasdsfda    asdasdsfda    asdasdsfda    asdasdsfda    asdasdsfda    asdasdsfda    asdasdsfda    asdasdsfda    asdasdsfda    asdasdsfda    asdasdsfda    asdasdsfda    ', '4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `kode_konsumen` varchar(12) NOT NULL,
  `nama_konsumen` varchar(50) NOT NULL,
  `alamat_konsumen` text NOT NULL,
  `no_telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`kode_konsumen`, `nama_konsumen`, `alamat_konsumen`, `no_telp`) VALUES
('K001', 'Ahmad', 'Surabaya Jl. Menur', '08663xxxxx'),
('K002', 'Andi', 'Bandung', '05656xxxxxx'),
('K003', 'Rudi', 'Semarang', '0812XXXXXX'),
('K004', 'Jojo', 'Bandung', '07676XXXXX');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `kode_paket` varchar(20) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `harga_paket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`kode_paket`, `nama_paket`, `harga_paket`) VALUES
('PK001', 'Cuci Basah', '5000'),
('PK003', 'Cuci Kering', '7000'),
('PK004', 'Cuci Kering + Setrika + Pewangi', '9000'),
('PK005', 'Setrika', '3000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int(15) NOT NULL,
  `no_transaksi` varchar(300) NOT NULL,
  `tanggal_pengajuan` datetime NOT NULL,
  `biaya` text NOT NULL,
  `status` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `no_transaksi`, `tanggal_pengajuan`, `biaya`, `status`) VALUES
(6, 'TR20210822001', '2022-06-14 04:09:21', '2000', 'Telah Dikirim'),
(13, 'TR20210822001', '2022-06-15 11:11:37', '2000', 'Telah Dikirim'),
(14, 'TR20210822001', '2022-06-15 11:11:41', '2000', 'Telah Dikirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(50) NOT NULL,
  `jenis_pengeluaran` varchar(15) NOT NULL,
  `nominal_pengeluaran` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `jenis_pengeluaran`, `nominal_pengeluaran`, `keterangan`, `tanggal`) VALUES
(1, 'test', '10000', 'pengeluaran', '2022-06-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `judul_slider` varchar(50) NOT NULL,
  `deskripsi_slider` text NOT NULL,
  `status_slider` varchar(20) NOT NULL,
  `gambar_slider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `judul_slider`, `deskripsi_slider`, `status_slider`, `gambar_slider`) VALUES
(4, 'Testing input slider', 'sfgfdjghjfk         assadasd                    ', 'Aktif', '1912_i505_013__laundry_infographics.jpg'),
(5, 'Promo Desember', '                        Promo besar besaran di bulan Desember                    ', 'Aktif', '2009_i602_002_laundry_illustration_flat.jpg'),
(6, 'Slider 3', 'Contoh Slider yang ketiga', 'Aktif', '1449.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` varchar(20) NOT NULL,
  `kode_konsumen` varchar(12) NOT NULL,
  `kode_paket` varchar(12) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `tgl_ambil` datetime NOT NULL,
  `berat` int(10) NOT NULL,
  `grand_total` int(12) NOT NULL,
  `bayar` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `kode_konsumen`, `kode_paket`, `tgl_masuk`, `tgl_ambil`, `berat`, `grand_total`, `bayar`, `status`) VALUES
('TR20210822001', 'K001', 'PK001', '2021-08-22 06:17:26', '0000-00-00 00:00:00', 3, 15000, 'Belum Lunas', 'Selesai'),
('TR20210822002', 'K002', 'PK003', '2021-08-22 06:20:28', '2021-08-26 00:00:00', 5, 35000, 'Lunas', 'Selesai'),
('TR20210826003', 'K001', 'PK001', '2021-08-26 10:52:28', '2021-08-26 06:09:15', 4, 20000, 'Lunas', 'Selesai'),
('TR20210826004', 'K002', 'PK001', '2021-08-26 11:13:42', '2021-08-26 06:16:46', 6, 30000, 'Lunas', 'Selesai'),
('TR20210826005', 'K002', 'PK001', '2021-08-28 09:13:22', '2021-08-28 04:24:49', 7, 35000, 'Lunas', 'Selesai'),
('TR20210828006', 'K001', 'PK001', '2021-08-28 09:23:31', '0000-00-00 00:00:00', 4, 20000, 'Belum Lunas', 'Baru'),
('TR20220121007', 'K003', 'PK003', '2022-01-21 09:08:23', '2022-01-21 03:17:03', 5, 35000, 'Lunas', 'Selesai'),
('TR20220306008', 'K004', 'PK004', '2022-03-06 10:40:02', '2022-03-06 04:43:51', 4, 36000, 'Lunas', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`kode_konsumen`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`kode_paket`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
