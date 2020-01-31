-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Okt 2019 pada 07.17
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gaji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `email`) VALUES
(52, 'haha', 'baba12', 'haha', 'ucup@gmail.coom'),
(53, 'dada', '12345', 'dada', 'dada@gamail.com'),
(54, 'raras', '12345', 'raras', 'rasar@sayanggmail.com'),
(55, 'dadang', '123456', 'dadang', 'dadang@123gm.yhyhy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `KTP` varchar(255) NOT NULL,
  `nip` varchar(225) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `ptrakhir` varchar(255) NOT NULL,
  `tmasuk` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `janak` varchar(255) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `gaji` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id_karyawan`, `nama`, `KTP`, `nip`, `telepon`, `alamat`, `kelamin`, `tempatlahir`, `tgl`, `ptrakhir`, `tmasuk`, `status`, `janak`, `bagian`, `gaji`) VALUES
(4, 'agus rahman', '32049821004', '00123', '081395173314', 'kp pasir pogor', 'laki-laki', 'garut', '20-09-1889', 'SMP', '1999', 'nikah', '3', 'produksi', '25000000'),
(5, 'dede', '3204292704980076', '120987 ', '083175137751', 'kp ebah', 'laki-laki', 'bandung', '12-04-1998', 'SMA', '2011', 'belum nikah', '56', 'akunting', '1000000'),
(7, 'agus rahman', '32049821004', '00123 ', '081395173314', 'kp pasir pogor', 'laki-laki', 'garut', '20-09-1889', 'MA', '1999', 'nikah', '3', 'produksi', '25000000'),
(8, 'agus rahman', '32049821004', '00123  ', '081395173314', 'kp pasir pogor', 'laki-laki', 'garut', '20-09-1889', 'MA', '1999', 'nikah', '3', 'produksi', '25000000'),
(9, 'dede', '3204292704980076', '120987 ', '083175137751', 'kp ebah', 'laki-laki', 'bandung', '12-04-1998', 'SMA', '2011', 'belum nikah', '60', 'akunting', '1000000'),
(10, 'jamil', '3204292704980076', '120987   ', '083175137751', 'kp ebah', 'laki-laki', 'bandung', '12-04-1998', 'SMA', '2011', 'belum nikah', '900', 'akunting', '1000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id` int(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gaji` int(50) NOT NULL,
  `tunjangan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id`, `nama`, `gaji`, `tunjangan`) VALUES
(2, 'satpam', 20000, 10000),
(3, 'produksi', 5000000, 120000),
(4, 'manejer', 2000000, 3000000),
(5, 'akunting', 1000000, 1000000),
(6, 'tata', 20000, 10000),
(7, 'dennia', 50000, 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hadir`
--

CREATE TABLE `hadir` (
  `id_kehadiran` int(11) NOT NULL,
  `karyawan` varchar(225) NOT NULL,
  `jk` varchar(225) NOT NULL,
  `kd` varchar(225) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `jamdatang` varchar(255) NOT NULL,
  `jampulang` varchar(255) NOT NULL,
  `Shift` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hadir`
--

INSERT INTO `hadir` (`id_kehadiran`, `karyawan`, `jk`, `kd`, `keterangan`, `status`, `bagian`, `jamdatang`, `jampulang`, `Shift`) VALUES
(2, 'yayan', 'laki-laki', 'hadir', '-', 'nikah', 'satpam', '07:34:32', '18:20:12', 'pagi'),
(3, 'restia', 'perempuan', 'hadir', '-', 'tidak nikah', 'produksi', '07:00', '18:20', 'pagi'),
(4, 'rival', 'laki-laki', 'hadir', 'sehat', 'nikah', 'produksi', '07:34:32', '18:20:12', 'pagi'),
(5, 'rivans', 'laki-laki', 'sakit', 'sakit', 'nikah', 'satpam', '01:30:02', '11:00:15', 'malam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struk`
--

CREATE TABLE `struk` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `upah` varchar(255) NOT NULL,
  `gaji_pokok` varchar(255) NOT NULL,
  `tunjangan_tetap` varchar(255) NOT NULL,
  `tunjangan_jabatan` varchar(255) NOT NULL,
  `premi` varchar(255) NOT NULL,
  `potongan_premi` varchar(255) NOT NULL,
  `potongan_kesiangan` varchar(255) NOT NULL,
  `potongan_pph21` varchar(255) NOT NULL,
  `potongan_bpjs` varchar(255) NOT NULL,
  `potongan_koprasi` varchar(255) NOT NULL,
  `potongan_spsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struk`
--

INSERT INTO `struk` (`id`, `nama`, `upah`, `gaji_pokok`, `tunjangan_tetap`, `tunjangan_jabatan`, `premi`, `potongan_premi`, `potongan_kesiangan`, `potongan_pph21`, `potongan_bpjs`, `potongan_koprasi`, `potongan_spsi`) VALUES
(9, 'wawan', '200000', '1000000', '1000000', '500000', '-', '-', '50000', '-', '10000', '50000', '-'),
(10, 'satpam', '1000', '20000', '30000', '100000', '-', '1', '50000', '20000', '100000', '12000', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hadir`
--
ALTER TABLE `hadir`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indexes for table `struk`
--
ALTER TABLE `struk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hadir`
--
ALTER TABLE `hadir`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `struk`
--
ALTER TABLE `struk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
