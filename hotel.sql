-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mei 2020 pada 13.44
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(2, 'bambang', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_kategori`, `gambar`, `harga`, `nama_kamar`, `stok`) VALUES
(1, 1, 'arc.jpg', 3400000, 'MELATI', 90),
(2, 1, 'arc.jpg', 9800000, 'sdfgh', 4),
(3, 2, 'ari.jpg', 6400000, 'dfg', 2),
(4, 4, 'hot.jpg', 1000000, 'RYUUYU', 1),
(5, 2, 'ny.jpg', 9500000, 'MAWAR', 3),
(6, 1, '1.jpg', 0, 'tre', 234),
(7, 1, 'Jobsheet_13_BASIS_DATA.pdf', 22, 'A1', 22),
(8, 1, 'Kisi-kisi_UAS_Genap_Sejarah_Indonesia_Kelas_X_Tahun_Ajaran_2017-2018_-_Siswa.pdf', 2, 'ws', 1),
(9, 1, 'Logaritma.pdf', 0, 'qqws', 0),
(10, 1, 'Kisi-kisi_UAS_Genap_Sejarah_Indonesia_Kelas_X_Tahun_Ajaran_2017-2018_-_Siswa1.pdf', 3, 'erw', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `gambar`, `harga`) VALUES
(1, 'Standard Room', 'arc.jpg', 9000000),
(2, 'Deluxe Room', 'are.jpg', 7000000),
(4, 'Exceutive Room', 'ari.jpg', 5000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_res` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_date` date NOT NULL,
  `cek_in` date NOT NULL,
  `cek_out` date NOT NULL,
  `grandtotal` int(11) NOT NULL,
  `bukti` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nota`
--

INSERT INTO `nota` (`id_nota`, `id_res`, `id_pelanggan`, `tgl_date`, `cek_in`, `cek_out`, `grandtotal`, `bukti`) VALUES
(1, 0, 13, '2019-02-10', '0000-00-00', '0000-00-00', 7000000, ''),
(2, 0, 13, '2019-02-10', '0000-00-00', '0000-00-00', 0, ''),
(3, 0, 13, '2019-02-10', '0000-00-00', '0000-00-00', 0, ''),
(4, 0, 13, '2019-02-10', '0000-00-00', '0000-00-00', 5000000, '11.jpg'),
(5, 0, 13, '2019-02-10', '0000-00-00', '0000-00-00', 20000000, ''),
(6, 0, 13, '2019-02-10', '0000-00-00', '0000-00-00', 7000000, 'kedua.png'),
(7, 0, 13, '2019-02-10', '0000-00-00', '0000-00-00', 0, ''),
(8, 0, 13, '2019-02-10', '0000-00-00', '0000-00-00', 5000000, ''),
(9, 0, 15, '2019-02-10', '0000-00-00', '0000-00-00', 10000000, 'appar1.jpg'),
(10, 0, 13, '2019-02-11', '0000-00-00', '0000-00-00', 9000000, '12.jpg'),
(11, 0, 8, '2019-02-11', '0000-00-00', '0000-00-00', 7000000, '13.jpg'),
(12, 0, 13, '2019-02-11', '0000-00-00', '0000-00-00', 54000000, '121.jpg'),
(13, 0, 13, '2019-03-15', '0000-00-00', '0000-00-00', 9100000, 'apple-icon.png'),
(14, 0, 13, '2019-04-26', '0000-00-00', '0000-00-00', 9000000, ''),
(15, 0, 13, '2019-04-26', '0000-00-00', '0000-00-00', 0, ''),
(16, 0, 13, '2019-04-26', '0000-00-00', '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_telp`, `alamat`, `username`, `password`) VALUES
(1, 'Aryasatya', '08575583419', 'Jalan Danau Poso 1 G2D', 'arya', 'arya123'),
(2, 'Arya', '08575583419', 'Jalan Danau Poso 1 G2D', 'arya', 'arya123'),
(3, 'Fasya', '0039389747', 'Jalan Danau Poso 2 G2D 24', 'aso', 'sya'),
(5, 'akhdan', '0856827644678', 'poso', 'ayo', 'okay'),
(6, 'vanesa', '0856438476', 'Jalan Danau Ranau 1 No 35', 'Arya', '5678'),
(7, '', '', '', '', ''),
(8, 'fas', '12323', 'ya', 'qwe', 'qwe'),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, 'aryasatya', '0856827644678', 'Malang', 'Arya', '12345'),
(13, 'fifi', '09876345', 'BWS', 'fi', 'fi'),
(15, 'aryas', '5678', 'tuban', 'ar', 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `receptionist`
--

CREATE TABLE `receptionist` (
  `id_res` int(11) NOT NULL,
  `nama_res` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `id_nota`, `id_kamar`, `qty`) VALUES
(1, 1, 5, 1),
(2, 4, 4, 1),
(3, 5, 4, 4),
(4, 6, 5, 1),
(5, 8, 1, 1),
(6, 9, 1, 2),
(7, 10, 1, 1),
(8, 11, 5, 1),
(9, 12, 1, 6),
(10, 13, 4, 2),
(11, 13, 1, 1),
(12, 14, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_res` (`id_res`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `grandtotal` (`grandtotal`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`id_res`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `id_nota` (`id_nota`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `qty` (`qty`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
