-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Nov 2017 pada 09.47
-- Versi Server: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
  `username` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jurnal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`username`, `tanggal`, `jurnal`) VALUES
('PKL 111', '2017-09-13', 'ec'),
('PKL 111', '2017-09-16', 'Re-image Laptop Pak Muhammad Arnadi Lt 5 HCBP'),
('PKL 112', '2017-09-16', 'Setting Oddesay Ibu Maya Lt 8 CDC '),
('PKL 113', '2017-09-18', 'Re-image DVR '),
('PKL 114', '2017-09-18', 'Re- Image DVR Atas Nama Bpk Irvan '),
('PKL 112', '2017-11-01', 'a'),
('PKL 114', '2017-11-01', 'Seting RSA '),
('PKL 117', '2017-11-03', 'Seting Oddsey'),
('PKL 111', '2017-11-08', 'Instal MSO 360');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master`
--

CREATE TABLE IF NOT EXISTS `master` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` varchar(15) NOT NULL,
  `jam_pulang` varchar(15) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master`
--

INSERT INTO `master` (`username`, `nama`, `tanggal`, `jam_masuk`, `jam_pulang`, `status`, `keterangan`) VALUES
('PKL 111', 'Irvan Kakuy', '2017-09-16', '08:04:55', '17:00:25', '1', 'Terlambat'),
('PKL 111', 'Irvan Kakuy', '2017-09-18', '07:00:25', '17:00:24', '1', '-'),
('PKL 112', 'Reyvi Aulia', '2017-09-16', '07:05:01', '17:01:07', '1', '-'),
('PKL 112', 'Reyvi Aulia', '2017-09-15', '08:22:17', '17:03:32', '1', 'Terlambat'),
('PKL 112', 'Reyvi Aulia', '2017-09-18', '07:06:39', '17:16:59', '1', '-'),
('PKL 113', 'Mieke Nevasari', '2017-09-18', '07:16:59', '17:02:29', '1', '-'),
('PKL 114', 'Astri Apriliya', '2017-09-18', '07:02:29', '17:02:29', '1', '-'),
('PKL 114', 'Astri Apriliya', '2017-09-19', '07:02:29', '17:02:29', '1', '-'),
('PKL 111', 'Irvan Kakuy', '2017-11-01', '07:00:00', '17:00:00', '1', '-'),
('PKL 112', 'Reyvi Aulia', '2017-11-01', '08:01:00', '17:01:00', '1', 'Terlambat'),
('PKL 114', 'Astri Apriliya', '2017-11-01', '08:01:00', '18:01:00', '1', 'Terlambat'),
('PKL 117', 'Adventino Satrio', '2017-11-03', '07:50:01', '17:50:01', '1', '-'),
('PKL 111', 'Irvan Kakuy', '2017-11-08', '07:50:01', '17:50:01', '1', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `username` varchar(50) NOT NULL,
  `disiplin` int(11) NOT NULL,
  `sopan` int(11) NOT NULL,
  `personal` int(11) NOT NULL,
  `tim` int(11) NOT NULL,
  `adaptasi` int(11) NOT NULL,
  `tj` int(11) NOT NULL,
  `jujur` int(11) NOT NULL,
  `n_akhir` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`username`, `disiplin`, `sopan`, `personal`, `tim`, `adaptasi`, `tj`, `jujur`, `n_akhir`) VALUES
('PKL 111', 100, 100, 100, 100, 100, 100, 100, 'A'),
('PKL 112', 100, 100, 100, 100, 100, 100, 100, 'A'),
('PKL 113', 100, 100, 100, 100, 100, 20, 10, 'B'),
('PKL 115', 100, 100, 100, 100, 100, 100, 100, 'A'),
('PKL 116', 100, 100, 100, 100, 100, 100, 100, 'A'),
('PKL 117', 0, 100, 100, 100, 100, 100, 100, 'A'),
('PKL 118', 100, 100, 100, 100, 50, 70, 50, 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(12) NOT NULL,
  `opsi` enum('1','2') NOT NULL,
  `asal` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `alamat`, `tlp`, `opsi`, `asal`, `jurusan`) VALUES
('PKL 111', '123', 'Irvan Kakuy', 'Jl Supratman No 1 Bandung', '081132353457', '2', 'SMK Cipta Skill', 'RPL'),
('PKL 112', '123', 'Reyvi Aulia', 'Jl Gatot subroto No 123', '086835473623', '2', 'SMK 13 Bandung', 'TKJ'),
('PKL 113', '123', 'Mieke Nevasari', 'Jl Permata biru No 78 Bandung', '081165675722', '2', 'SMK 13 Bandung', 'TKJ'),
('PKL 114', '123', 'Astri Apriliya', 'Riung Bandung', '-', '2', 'SMK 13 Bandung', 'TKJ'),
('PKL 115', '123', ' Dzikri Khairullah', 'Perum.Sukamukti C-12 kec.katapang ', '085759318877', '2', 'SMK Angkasa 1 Margahayu', 'TKJ'),
('PKL 116', '123', 'Indra Irawan', 'Jl Japati No 16 Bandung', '093673516316', '2', 'SMK Cipta Skill', 'RPL'),
('PKL 117', '123', 'Adventino Satrio', 'Jl Semar No 10 Bandung', '081368624572', '2', 'Universitas widyatama', 'T Informatika'),
('PKL 118', '123', 'adi', 'Jl Tamansari', '088111111112', '2', 'widyatama', 'Informatika'),
('windumbagus', 'admin', 'Windu Muhammad Bagus', 'Jl Tamansari No 128/58 Kota Bandung ,40116', '081321501492', '1', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
