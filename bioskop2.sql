-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 01:12 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul_film` varchar(30) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `gambar_film` varchar(100) NOT NULL,
  `detail_film` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `id_kategori`, `gambar_film`, `detail_film`) VALUES
(1, 'Spiderman Home-Coming', 1, 'spiderman1.jpg', 'film ini keren'),
(2, 'THOR RAGNAROCK', 1, 'thor1.jpg', 'film yang bagus'),
(3, 'Iron Man', 2, 'iron1.jpg', 'film yang lucu');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `jenis_harga` varchar(20) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `jenis_harga`, `harga`) VALUES
(1, 'Weekday', '30000'),
(2, 'Weekend', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id_jam` int(11) NOT NULL,
  `jam` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id_jam`, `jam`) VALUES
(1, '12.00-14.00'),
(2, '15.00-17.00'),
(3, '18.00-20.00'),
(4, '21.00-23.00');

-- --------------------------------------------------------

--
-- Table structure for table `jam_film`
--

CREATE TABLE `jam_film` (
  `id_jam_film` int(11) NOT NULL,
  `id_harga` int(11) DEFAULT NULL,
  `id_film` int(11) DEFAULT NULL,
  `id_jam` int(11) DEFAULT NULL,
  `id_studio` int(11) DEFAULT NULL,
  `tanggal_film` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam_film`
--

INSERT INTO `jam_film` (`id_jam_film`, `id_harga`, `id_film`, `id_jam`, `id_studio`, `tanggal_film`) VALUES
(1, 1, 1, 3, 2, '25-12-2000'),
(2, 2, 2, 2, 1, '2-2-2004'),
(3, 1, 1, 2, 2, '12-3-2006');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) DEFAULT NULL,
  `deksripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deksripsi`) VALUES
(1, 'Action', 'Genre yang berisi ilm tentang adegan-adegan berbahaya'),
(2, 'Comedy', 'Film yang dapat menyebabkan penonton tertawa'),
(3, 'Romantis', 'Kisah kasih cinta yang dituangkan dalma bentuk film');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` int(11) NOT NULL,
  `no_kursi` varchar(20) DEFAULT NULL,
  `id_studio_kursi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `no_kursi`, `id_studio_kursi`) VALUES
(1, 'A', 1),
(2, 'B', 1),
(3, 'C', 1),
(4, 'D', 2),
(5, 'E', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `grandtotal` int(100) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `tgl_beli` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `id_film` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `grandtotal`, `id_pembeli`, `tgl_beli`, `status`, `bukti`, `id_film`) VALUES
(1, 100000, 3, '2018-04-17', '', '', 0),
(2, 100000, 3, '2018-04-17', '', '', 0),
(3, 100000, 3, '2018-04-17', '', '', 0),
(4, 0, 3, '2018-04-17', '', '', 0),
(5, 50000, 3, '2018-04-17', '', '', 0),
(6, 50000, 4, '2018-04-17', '', '', 0),
(7, 50000, 4, '2018-04-17', '', '', 0),
(8, 50000, 4, '2018-04-17', '', '', 0),
(9, 50000, 3, '2018-05-06', '', '', 0),
(10, 50000, 4, '2018-05-17', '', '', 0),
(11, 150000, 4, '2018-05-20', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelayan`
--

CREATE TABLE `pelayan` (
  `id_pelayan` int(11) NOT NULL,
  `nama_pelayan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayan`
--

INSERT INTO `pelayan` (`id_pelayan`, `nama_pelayan`) VALUES
(1, 'superdede'),
(2, 'supeman');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(20) DEFAULT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(20) NOT NULL,
  `ttl` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `alamat`, `telp`, `ttl`, `username`, `password`) VALUES
(1, 'adam fitrah', '', '', '0000-00-00', '', ''),
(2, 'neymar', '', '', '0000-00-00', '', ''),
(3, 'a', 'a', 'a', '0000-00-00', 'a', '0cc175b9c0f1b6a831c399e269772661'),
(4, 'Adam Ganteng', 'malang melintang', '12345', '2000-12-25', 'adam', '202cb962ac59075b964b07152d234b70'),
(5, 'vaniarfiansah', 'jombang coy', '081330207262', '2000-06-06', 'vaniarfiansah', '1fd9906eb2eae125294f792e2736c08f'),
(6, 'q', 'q', '819814918', '0000-00-00', 'q', '7694f4a66316e53c8cdd9d9954bd611d'),
(7, 'Aliefia Ningtyas Tut', 'Bukit Gold', '1234567890', '2001-02-06', 'aliefia', 'c20ad4d76fe97759aa27a0c99bff6710'),
(8, 'Aliefia Ningtyas Tut', 'bukit gold', '1234567890', '2001-02-06', 'fiak', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id_studio` int(11) NOT NULL,
  `nama_studio` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id_studio`, `nama_studio`) VALUES
(1, 'Studio 1'),
(2, 'Studio 2'),
(3, 'Studio 3');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `total` varchar(20) DEFAULT NULL,
  `id_pembeli` int(11) DEFAULT NULL,
  `id_pelayan` int(11) DEFAULT NULL,
  `id_kursi` int(11) DEFAULT NULL,
  `id_jam_film` int(11) DEFAULT NULL,
  `id_film` int(100) NOT NULL,
  `id_nota` int(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `total`, `id_pembeli`, `id_pelayan`, `id_kursi`, `id_jam_film`, `id_film`, `id_nota`, `jumlah`) VALUES
(1, '30000', 1, 1, 2, 1, 0, 0, ''),
(2, '50000', 2, 2, 1, 3, 0, 0, ''),
(3, NULL, NULL, NULL, NULL, NULL, 1, 3, '2'),
(4, NULL, NULL, NULL, NULL, NULL, 2, 5, '1'),
(5, NULL, NULL, NULL, NULL, NULL, 3, 6, '1'),
(6, NULL, NULL, NULL, NULL, NULL, 3, 7, '1'),
(7, NULL, NULL, NULL, NULL, NULL, 2, 8, '1'),
(8, NULL, NULL, NULL, NULL, NULL, 3, 9, '1'),
(9, NULL, NULL, NULL, NULL, NULL, 3, 10, '1'),
(10, NULL, NULL, NULL, NULL, NULL, 3, 11, '3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `jam_film`
--
ALTER TABLE `jam_film`
  ADD PRIMARY KEY (`id_jam_film`),
  ADD KEY `id_harga` (`id_harga`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_studio` (`id_studio`),
  ADD KEY `id_jam` (`id_jam`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`),
  ADD KEY `id_studio_kursi` (`id_studio_kursi`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indexes for table `pelayan`
--
ALTER TABLE `pelayan`
  ADD PRIMARY KEY (`id_pelayan`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_pelayan` (`id_pelayan`),
  ADD KEY `id_kursi` (`id_kursi`),
  ADD KEY `id_jam_film` (`id_jam_film`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jam_film`
--
ALTER TABLE `jam_film`
  MODIFY `id_jam_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pelayan`
--
ALTER TABLE `pelayan`
  MODIFY `id_pelayan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `jam_film`
--
ALTER TABLE `jam_film`
  ADD CONSTRAINT `jam_film_ibfk_1` FOREIGN KEY (`id_harga`) REFERENCES `harga` (`id_harga`),
  ADD CONSTRAINT `jam_film_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `jam_film_ibfk_3` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id_studio`),
  ADD CONSTRAINT `jam_film_ibfk_4` FOREIGN KEY (`id_jam`) REFERENCES `jam` (`id_jam`);

--
-- Constraints for table `kursi`
--
ALTER TABLE `kursi`
  ADD CONSTRAINT `kursi_ibfk_1` FOREIGN KEY (`id_studio_kursi`) REFERENCES `studio` (`id_studio`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`id_pelayan`) REFERENCES `pelayan` (`id_pelayan`),
  ADD CONSTRAINT `tiket_ibfk_3` FOREIGN KEY (`id_kursi`) REFERENCES `kursi` (`id_kursi`),
  ADD CONSTRAINT `tiket_ibfk_4` FOREIGN KEY (`id_jam_film`) REFERENCES `jam_film` (`id_jam_film`),
  ADD CONSTRAINT `tiket_ibfk_5` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
