-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Okt 2019 pada 06.37
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xgoos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `id_stuff` varchar(6) NOT NULL,
  `status` enum('PENDING','DISCUSS','DEAL','CANCEL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `icon`) VALUES
(1, 'komputer', 'fa-laptop'),
(2, 'handphone', 'fa-mobile'),
(3, 'kamera', 'fa-camera-retro'),
(4, 'fashion pria', 'fa-male'),
(5, 'fashion wanita', 'fa-female'),
(6, 'otomotif', 'fa-automobile'),
(7, 'musik', 'fa-music'),
(8, 'furnitur', 'fa-cube'),
(9, 'olahraga', 'fa-dribbble'),
(10, 'elektronik', 'fa-desktop'),
(11, 'tanpa kategori', 'fa-th');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stuff`
--

CREATE TABLE `stuff` (
  `id_stuff` varchar(6) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `nama_stuff` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` decimal(65,0) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `tgl_ditukar` datetime NOT NULL,
  `status` enum('DIPOS','DEAL','DIKIRIM','KEEP','DITUKAR') NOT NULL DEFAULT 'DIPOS'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tgl_lhr` date NOT NULL,
  `tmp_lhr` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `pos` decimal(10,0) NOT NULL,
  `telpon` decimal(12,0) UNSIGNED ZEROFILL NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'N',
  `lupa` enum('Y','N') NOT NULL DEFAULT 'N',
  `level` enum('ADMIN','CUSTOMER') NOT NULL DEFAULT 'CUSTOMER'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `nama`, `email`, `jk`, `tgl_lhr`, `tmp_lhr`, `alamat`, `kota`, `provinsi`, `pos`, `telpon`, `aktif`, `lupa`, `level`) VALUES
('fatkur_hadi', '55a72617aecd4a174b00204c1d1c1ab9', 'Hadi', 'fatkur.hadist@gmail.com', 'L', '1998-11-11', 'Surabaya', 'Tempel Sukorejo 6 No.23', 'Surabaya', 'Jawa Timur', '60263', '082257316110', 'Y', 'N', 'CUSTOMER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wish` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `id_stuff` varchar(6) NOT NULL,
  `status` enum('WISH','DISCUSS','DEAL','CANCEL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `stuff`
--
ALTER TABLE `stuff`
  ADD PRIMARY KEY (`id_stuff`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wish`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wish` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
