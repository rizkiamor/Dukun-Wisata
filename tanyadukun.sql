-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mei 2016 pada 09.27
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanyadukun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` varchar(100) NOT NULL,
  `NAMA_ADMIN` varchar(100) DEFAULT NULL,
  `USER` varchar(100) DEFAULT NULL,
  `PASS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NAMA_ADMIN`, `USER`, `PASS`) VALUES
('ADM01', 'ADMIN', 'admin', 'admin'),
('ADM03', 'ANDI HO', 'andi', 'andi'),
('ADM04', 'HERI', 'heri', 'heri'),
('ADM05', 'WAKHUD', 'root', 'wakhud'),
('ADM06', 'TOOR', 'root', 'toor'),
('ADM07', 'IMRON', 'impron', 'impronman'),
('ADM08', 'HAKI', 'haki', 'haki'),
('ADM09', 'NADE', 'nade', 'nade'),
('ADM10', 'SUMI', 'sumi', 'sumi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `FOTO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`FOTO`) VALUES
('img/52971-04_Shigatsu wa Kimi no Uso.jpg'),
('../../public/img/7583-04_Shigatsu wa Kimi no Uso.jpg'),
('../../public/img/45859-500-(1)-apk-wallpaper.png'),
('../../public/img/96961-15503_10203043869004400_1635563226064707898_n.jpg'),
('../../public/img/8888-15539583820_a051b7c004_b.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_post`
--

CREATE TABLE `kategori_post` (
  `ID_KATEGORI` varchar(100) NOT NULL,
  `KATEGORI` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_post`
--

INSERT INTO `kategori_post` (`ID_KATEGORI`, `KATEGORI`) VALUES
('KTG01', 'PANTAI'),
('KTG02', 'HUTAN'),
('KTG03', 'GUNUNG'),
('KTG04', 'MANGROVE'),
('KTG05', 'KULINER'),
('KTG06', 'SUNGAI I');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `ID_KOMENTAR` varchar(100) NOT NULL,
  `ID_PERTANYAAN` varchar(100) NOT NULL,
  `TANGGAL_KOMENTAR` date DEFAULT NULL,
  `ISI_KOMENTAR` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ksaran`
--

CREATE TABLE `ksaran` (
  `nama` varchar(100) NOT NULL,
  `ksaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ksaran`
--

INSERT INTO `ksaran` (`nama`, `ksaran`) VALUES
('imron', 'bagus bos di lanjutkan heheheheh'),
('luka', 'hore hore'),
('bagus', 'Asoy Geboy'),
('oki', 'Jos gandos');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `ID_PERTANYAAN` varchar(100) NOT NULL,
  `ID_USER` varchar(100) NOT NULL,
  `ISI` text,
  `TANGGAL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `ID_POST` varchar(40) NOT NULL,
  `KATEGORI` varchar(50) NOT NULL,
  `ADMIN` varchar(30) NOT NULL,
  `JUDUL_POST` varchar(100) NOT NULL,
  `ISI_POST` text NOT NULL,
  `FOTO` varchar(100) NOT NULL,
  `TGL_POST` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`ID_POST`, `KATEGORI`, `ADMIN`, `JUDUL_POST`, `ISI_POST`, `FOTO`, `TGL_POST`) VALUES
('POST04', 'PANTAI', 'admin', 'PANTAI KARANG JAHE', 'merupakan tempat wisata di Rembang yang masih tergolong baru dan akhir-akhir ini menjadi primadona di Kabupaten Rembang. Mendengar namanya cukup unik ya. Pada waktu pertama kali kami mendengar nama Karang Jahe, kami berpikir mungkin nama itu diambil dari alamat di sekitar pantai ini. Namun ternyata desa tempat pantai ini berada bukanlah Desa Karang Jahe. Pantai Karang Jahe sendiri berada di Desa Punjulharjo, Rembang Jawa Tengah. Ternyata pertanyaan seputar nama Karang Jahe ini terjawab saat kami berkunjung di sana. Di lokasi wisata Pantai Karang Jahe banyak ditemui serpihan karang yang berbentuk mirip jahe. Pemandangan di Pantai Karang Jahe sendiri tidak lah mengecewakan. Pantainya berpasir putih dan sangat bersih serta belum banyak dikunjungi oleh wisatawan sehingga dapat bermain di pantai sepuasnya.', '../public/img/kartini.jpg', '2016-05-24'),
('POST05', 'GUNUNG', 'admin', 'PUNCAK ARGO', 'Puncak Argopuro merupakan nama puncak Gunung dari Gunung Lasem di kabupaten Rembang. Gunung Lasem ini lebih mirip perbukitan yang berada di Lasem dengan ketinggian 806 mdpl. Meskipun ketinggiannya masih jauh lebih rendah dari Gunung lainnya di ulau jawa namun Puncak Argopuro ini selalu menjadi pilihan bagi pecinta alam di sekitar Kabupaten Pati, Rembang, Blora dan sekitarnya terutama pada malam tahun baru dan liburan sekolah. Meskipun terbilang pendek, ternyata jalur pendakian Puncak Argopur ini cukup melelahkan. Berdasarkan pengalaman dibutuhkan waktu sekitar 2,5 jam untuk sampai ke puncak Argopuro dengan jalan santai atau sekitar 1 jam an jika sudah pengalaman dengan medan di puncak ini. Untuk mendakinya anda dapat memulai dari jalur yang dimulai dari Ds.Ngroto Kec.Pancur Kabupaten Rembang.', '../public/img/8888-15539583820_a051b7c004_b.jpg', '2016-05-24'),
('POST06', 'PANTAI', 'admin', 'DAMPO AWANG BEACH', 'merupakan satu dari sekian wisata unggulan yang ada di Kabupaten Rembang. Lokasi tempat wisata pantai di Rembang ini sangat strategis karena terletak di jantung Kota ', '../public/img/kartini.jpg', '2016-05-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_USER` varchar(100) NOT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `USER_ADMIN` varchar(100) DEFAULT NULL,
  `PASS_ADMIN` varchar(100) DEFAULT NULL,
  `FOTO_USER` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `kategori_post`
--
ALTER TABLE `kategori_post`
  ADD PRIMARY KEY (`ID_KATEGORI`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`ID_KOMENTAR`),
  ADD KEY `FK_MENGOMENTARI` (`ID_PERTANYAAN`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`ID_PERTANYAAN`),
  ADD KEY `FK_MENANYAKAN` (`ID_USER`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `FK_MENGOMENTARI` FOREIGN KEY (`ID_PERTANYAAN`) REFERENCES `pertanyaan` (`ID_PERTANYAAN`);

--
-- Ketidakleluasaan untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `FK_MENANYAKAN` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
