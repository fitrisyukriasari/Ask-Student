-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2017 at 03:55 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `askstudent`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id_answer` int(5) NOT NULL,
  `kd_ask` int(5) NOT NULL,
  `id_user` int(5) DEFAULT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id_answer`, `kd_ask`, `id_user`, `isi`) VALUES
(1, 11, 29, 'Boleh, kalau udah nikah '),
(2, 12, 20, 'Kapan-kapan aja bro haha'),
(3, 13, 25, 'Ayo bro, besok ada event AR nih \r\nIkutan merapat yok');

-- --------------------------------------------------------

--
-- Table structure for table `ask`
--

CREATE TABLE `ask` (
  `id_ask` int(5) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ask`
--

INSERT INTO `ask` (`id_ask`, `judul`, `isi`, `id_user`) VALUES
(10, 'Pemrograman', 'Apa itu Phyton ?', 23),
(11, 'Agama', 'Bolehkah saya pacaran ?', 15),
(12, 'Tahfidz', 'Woi tahfidz yang ngulang siapa aja ?\r\nMau SP kapan nih ?', 21),
(13, 'Augmented Reality', 'Ada yang tertarik AR ? Join buat yuk ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `kd_fak` varchar(5) NOT NULL,
  `fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`kd_fak`, `fakultas`) VALUES
('F01', 'FASTIKOM'),
('F02', 'FITK'),
('F03', 'FIKES'),
('F04', 'EKONOMI'),
('F05', 'FSH'),
('F06', 'FBS'),
('F07', 'FKSP');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nim` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kd_prodi` varchar(5) NOT NULL,
  `kd_fak` varchar(5) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `kd_prodi`, `kd_fak`, `alamat`, `foto`) VALUES
(2014150083, 'Mutiah nafar Amalia', 'P01 ', 'F01 ', 'Jepara', 'pikachu.jpg'),
(2014150084, 'Zaenal Mustofa', 'P01 ', 'F01 ', 'Temanggung', '12592525_1123193764414779_6584139227758793122_n.jpg'),
(2014150085, 'Gustiani Salimah', 'P01 ', 'F01 ', 'Subang', 'pikachu-500x492.png'),
(2014150086, 'Satya Wibawa', 'P01 ', 'F01 ', 'Subang', 'Sacoor-CR7.png'),
(2014150087, 'Astuti', 'P01 ', 'F01 ', 'Sidojoyo', 'BertanyaPadaDir.JPG'),
(2014150088, 'Amanat', 'P02 ', 'F04 ', 'Leksono', 'BertanyaPadaDir.JPG'),
(2014150090, 'Fatimah Nurazizah', 'P07', 'F05', 'Sapuran', 'photo.jpg'),
(2014150091, 'Romadhony Ardiansyah', 'P04 ', 'F01 ', 'Selomerto, Wonosobo', 'photo_002.jpg'),
(2014150092, 'Vikri Arsian', 'P04 ', 'F01 ', 'Selomerto, Wonosobo', 'photo_002.jpg'),
(2014150093, 'Muhammad Zidni', 'P05 ', 'F07 ', 'Semarang', 'photo_002.jpg'),
(2014150094, 'Agus Sutikno', 'P05 ', 'F07 ', 'Semarang', 'Cover.jpg'),
(2014150095, 'Leo Andika', 'P06 ', 'F06 ', 'Wonosobo', 'Cover.jpg'),
(2014150096, 'Duri', 'P07 ', 'F05 ', 'Selomerto, Wonosobo', 'screenshot3.jpg'),
(2014150097, 'Fitri Syukriasari', 'P01', 'F01', ' Selomerto, Wonosobo', 'screenshot3.jpg'),
(2014150098, 'Desi Ratnasari', 'P07 ', 'F05 ', 'Selomerto, Wonosobo', 'screenshot3.jpg'),
(2014150099, 'Luqman', 'P07 ', 'F05 ', 'Selomerto, Wonosobo', 'screenshot3.jpg'),
(2014150100, 'Ahmad Husain', 'P08 ', 'F02 ', 'Selomerto, Wonosobo', 'screenshot3.jpg'),
(2014150101, 'Muhammad Fadlan', 'P08 ', 'F02 ', 'Selomerto, Wonosobo', 'screenshot3.jpg'),
(2014150102, 'Muhammad Rifai Azis', 'P08 ', 'F02 ', 'Tegal', 'screenshot3.jpg'),
(2014150103, 'Harri Kurniawan', 'P08 ', 'F02 ', 'Tegal', 'screenshot3.jpg'),
(2014150104, 'Andi Julianto', 'P08 ', 'F02 ', 'Tegal', 'screenshot3.jpg'),
(2014150105, 'Muhammad Fabi Irawan', 'P02 ', 'F04 ', 'Pati', 'screenshot3.jpg'),
(2014150106, 'Sani Rahmawati', 'P02 ', 'F04 ', 'Pati', 'screenshot3.jpg'),
(2014150107, 'Rina Puji', 'P04 ', 'F01 ', 'Pati', 'screenshot3.jpg'),
(2014150108, 'Ani Puji', 'P04 ', 'F01 ', 'Pati', 'pikachu-500x492.png'),
(2014150109, 'Ahmad Zain', 'P04 ', 'F01 ', 'Pati', 'pikachu-500x492.png'),
(2014150110, 'Fajar Khoiranto', 'P01 ', 'F01 ', 'Kertek', 'pikachu-500x492.png'),
(2014150111, 'Fajar Rusmanto', 'P01 ', 'F01 ', 'Kertek', 'pikachu-500x492.png'),
(2014150112, 'Ahmad Panji', 'P01 ', 'F01 ', 'Kertek', 'pikachu-500x492.png'),
(2014150113, 'Fahri Baharudin', 'P01 ', 'F01 ', 'Wonosobo', 'ShNKtUmK_400x400.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kd_prodi` varchar(5) NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `prodi`) VALUES
('P01', 'Teknik Informatika'),
('P02', 'Akuntansi'),
('P03', 'Perawat'),
('P04', 'Teknik Sipil'),
('P05', 'Dakwah'),
('P06', 'Sastra Inggris'),
('P07', 'Hukum'),
('P08', 'PAI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nim` int(30) DEFAULT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nim`, `user`, `pass`, `level`) VALUES
(1, NULL, 'admin', 'admin', 0),
(8, 2014150083, '2014150083', '2014150083', 1),
(9, 2014150084, '2014150084', '2014150084', 1),
(10, 2014150085, '2014150085', '2014150085', 1),
(11, 2014150086, '2014150086', '2014150086', 1),
(12, 2014150087, '2014150087', '2014150087', 1),
(13, 2014150088, '2014150088', '2014150088', 1),
(15, 2014150090, '2014150090', '2014150090', 1),
(16, 2014150091, '2014150091', '2014150091', 1),
(17, 2014150091, '2014150091', '2014150091', 1),
(18, 2014150092, '2014150092', '2014150092', 1),
(19, 2014150093, '2014150093', '2014150093', 1),
(20, 2014150094, '2014150094', '2014150094', 1),
(21, 2014150095, '2014150095', '2014150095', 1),
(22, 2014150096, '2014150096', '2014150096', 1),
(23, 2014150097, '2014150097', '2014150097', 1),
(24, 2014150098, '2014150098', '2014150098', 1),
(25, 2014150099, '2014150099', '2014150099', 1),
(26, 2014150100, '2014150100', '2014150100', 1),
(27, 2014150101, '2014150101', '2014150101', 1),
(28, 2014150102, '2014150102', '2014150102', 1),
(29, 2014150103, '2014150103', '2014150103', 1),
(30, 2014150104, '2014150104', '2014150104', 1),
(31, 2014150104, '2014150104', '2014150104', 1),
(32, 2014150105, '2014150105', '2014150105', 1),
(33, 2014150106, '2014150106', '2014150106', 1),
(34, 2014150107, '2014150107', '2014150107', 1),
(35, 2014150108, '2014150108', '2014150108', 1),
(36, 2014150109, '2014150109', '2014150109', 1),
(37, 2014150110, '2014150110', '2014150110', 1),
(38, 2014150111, '2014150111', '2014150111', 1),
(39, 2014150112, '2014150112', '2014150112', 1),
(42, 2014150113, '2014150113', '2014150113', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id_answer`),
  ADD KEY `kd_ask` (`kd_ask`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ask`
--
ALTER TABLE `ask`
  ADD PRIMARY KEY (`id_ask`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`kd_fak`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kd_fak` (`kd_fak`),
  ADD KEY `kd_prodi` (`kd_prodi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kd_prodi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nim` (`nim`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`kd_ask`) REFERENCES `ask` (`id_ask`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ask`
--
ALTER TABLE `ask`
  ADD CONSTRAINT `ask_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mhs`
--
ALTER TABLE `mhs`
  ADD CONSTRAINT `mhs_ibfk_1` FOREIGN KEY (`kd_fak`) REFERENCES `fakultas` (`kd_fak`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mhs_ibfk_2` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi` (`kd_prodi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mhs` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
