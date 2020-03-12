-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2020 pada 13.54
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE `auth` (
  `id_auth` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nis` int(8) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`id_auth`, `nama`, `nis`, `kelas`, `username`, `password`, `id_level`, `id_jurusan`, `tanggal_masuk`) VALUES
(14, 'Admin', 0, '0', 'admin', '$2y$10$AOlxv4Mdngz2ojF052lfkOPSc7tUDHKj5I0dOmlSrBEqr8Wou2DDi', 1, 7, '2020-03-03'),
(16, 'wahyu purnama', 27257, 'XI', 'wahyu', '$2y$10$7wJ9H6MEszGi439K8V/Mq.FsSaDzQz9dKjqU7g2L72w7ZJUUcQtZa', 3, 1, '2020-03-03'),
(17, 'qwdas', 27257, 'XI', 'ghnj', '$2y$10$XuPzq7GjSCrMd2gvxi2bx.PLkAMuRJAIJSwWGOOt56fYjiHQGhifa', 3, 6, '2020-03-03'),
(18, 'Prihandana putra', 2341334, 'XI', 'prihandana', '$2y$10$ByNxfu.8vMGIC0Vz.QxuweM91JPjx3A2kjzyeSxaHID.5yBzRDGmm', 3, 1, '2020-03-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL DEFAULT current_timestamp(),
  `kondisi_buku` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `nama_buku`, `pengarang`, `id_kategori`, `deskripsi`, `gambar`, `jumlah_buku`, `tanggal_masuk`, `kondisi_buku`) VALUES
(85, 'ad', 'saas', 8, 'fdgd', 'b0.28935400 1582985950.jpg', 1, '2020-03-01', 'Baik'),
(86, 'ger', 'gtr', 8, 'fgbf', 'm0.38233200 1582985967.jpg', 1, '2020-03-01', 'Baik'),
(89, 'segalanya', 'semesta', 9, 'dgdgd', 'U0.19957200 1583117038.png', 4, '2020-03-02', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `jurusan`) VALUES
(1, 'Rekayasa Perangkat Lunak'),
(2, 'Multimedia'),
(3, 'Teknik Komputer Jaringan'),
(6, 'Audio Video'),
(7, 'Petugas'),
(8, 'asiap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`, `kode`) VALUES
(8, 'agama', '200'),
(9, 'fyusdyfdf', '11213');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kembali`
--

CREATE TABLE `tb_kembali` (
  `id_kembali` int(11) NOT NULL,
  `id_auth` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kembali`
--

INSERT INTO `tb_kembali` (`id_kembali`, `id_auth`, `id_buku`, `id_jurusan`, `tanggal_pinjam`, `tanggal_kembali`, `denda`) VALUES
(17, 14, 85, 1, '2020-02-29', '2020-03-02', 0),
(18, 14, 86, 1, '2020-02-29', '2020-03-01', 1000),
(20, 17, 86, 1, '2020-03-01', '2020-03-16', 0),
(21, 14, 86, 1, '2020-03-01', '2020-03-02', 0),
(22, 16, 86, 1, '2020-03-01', '2020-03-16', 30000),
(24, 18, 86, 2, '2020-03-03', '2020-03-07', 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`) VALUES
(1, 'Admin'),
(2, 'Petugas'),
(3, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `id_auth` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL DEFAULT current_timestamp(),
  `tanggal_kembali` date NOT NULL,
  `lama_pinjam` int(11) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`id_pinjam`, `id_auth`, `id_buku`, `id_jurusan`, `tanggal_pinjam`, `tanggal_kembali`, `lama_pinjam`, `denda`) VALUES
(23, 16, 86, 1, '2020-03-09', '2020-03-10', 1, 0);

--
-- Trigger `tb_pinjam`
--
DELIMITER $$
CREATE TRIGGER `kembali` AFTER UPDATE ON `tb_pinjam` FOR EACH ROW BEGIN
 UPDATE tb_buku SET jumlah_buku = jumlah_buku+1 WHERE id_buku = id_buku;
 END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pinjam` AFTER INSERT ON `tb_pinjam` FOR EACH ROW BEGIN
 UPDATE tb_buku
 SET jumlah_buku = jumlah_buku - 1
 WHERE
 id_buku = NEW.id_buku;
 END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id_auth`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_kembali`
--
ALTER TABLE `tb_kembali`
  ADD PRIMARY KEY (`id_kembali`),
  ADD KEY `id_auth` (`id_auth`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD UNIQUE KEY `uk_tb_pinjam` (`id_auth`,`id_buku`),
  ADD KEY `tb_pinjam_ibfk_2` (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth`
--
ALTER TABLE `auth`
  MODIFY `id_auth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_kembali`
--
ALTER TABLE `tb_kembali`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD CONSTRAINT `auth_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD CONSTRAINT `tb_pinjam_ibfk_1` FOREIGN KEY (`id_auth`) REFERENCES `auth` (`id_auth`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pinjam_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
