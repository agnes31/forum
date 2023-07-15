-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2023 at 02:53 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(45) COLLATE utf8_bin NOT NULL,
  `article` text COLLATE utf8_bin NOT NULL,
  `date` varchar(45) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `titre`, `article`, `date`, `user_id`) VALUES
(1, 'un titre', 'xxxxxx sonzsazasz', '2023-07-05', 1),
(11, 'Une journée à la montagne', 'Une sortie en famille', '2023-07-14', 62),
(12, 'Un autre test', 'test', '2023-07-13', 65);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) COLLATE utf8_bin NOT NULL,
  `username` varchar(45) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`, `username`, `password`, `birthday`) VALUES
(1, 'Son Nguyen', 'son.nguyen@test.com', '1234', '1982-05-29'),
(2, 'gjhrfh', 'dfvw@gmail.com', 'root', '2023-07-18'),
(6, 'gjhrfh', 'root@gmail.com', '124578', '2023-07-02'),
(7, 'gjhrfh', 'root@gmail.com', '124578', '2023-07-02'),
(8, 'gjhrfh', 'root@gmail.com', '124578', '2023-07-02'),
(9, 'gjhrfh', 'root@gmail.com', '124578', '2023-07-02'),
(10, 'gjhrfh', 'root@gmail.com', '124578', '2023-07-02'),
(11, 'gjhrfh', 'root@gmail.com', '124578', '2023-07-02'),
(12, 'gjhrfh', 'root@gmail.com', '124578', '2023-07-02'),
(13, 's', 'root@gmail.com', '1245124578', '2023-07-06'),
(14, 'Agnes NUNU', 'agnesomesdvadvt@gmail.com', '124578', '2023-07-29'),
(15, 'Agnes NUNU', 'agnesomesdvadvt@gmail.com', '124578', '2023-07-29'),
(16, 'Agnes NUNU', 'agnesomesdvadvt@gmail.com', '124578', '2023-07-29'),
(17, 'Agnes NUNU', 'agnesomesdvadvt@gmail.com', '12457812', '2023-07-29'),
(18, 'agsom1', 'root32@gmail.com', '23568923', '2023-07-07'),
(19, 'agsom1', 'root32@gmail.com', '23568923', '2023-07-07'),
(20, 's', 'root321@gmail.com', '12457889', '2023-07-14'),
(21, 'sisi', 'root00@gmail.com', '12457832', '2023-07-06'),
(22, 'sisi', 'root00@gmail.com', '12457832', '2023-07-06'),
(23, 'Laurysum', 'Laurysum@gmail.com', '235689', '2023-07-20'),
(24, 'Laurysum', 'Laurysum@gmail.com', '235689', '2023-07-20'),
(25, 'Laurysum', 'Laurysum@gmail.com', '235689', '2023-07-20'),
(26, 'sdv', 'agnesomet@gmail.com', 'dvdvadvad', '2023-07-14'),
(27, 'Son NN', 'SonNN@gmail.com', '235689', '2023-07-28'),
(28, 'Son NN', 'SonNN@gmail.com', '235689', '2023-07-28'),
(29, 'Son NN', 'SonNN@gmail.com', '235689', '2023-07-28'),
(30, 'dsv', 'agnesomet@gmail.com', '295420565', '2023-07-06'),
(31, 'Agnes Somet', 'agnesomet@gmail.com', '124578', '2023-07-05'),
(32, 'son', 'sonny@sonny.com', '123456', '2023-07-04'),
(33, 'son12', 'sonny1@sonny.com', '12457812', '2023-07-04'),
(34, 'son12', 'sonny1@sonny.com', '12457812', '2023-07-04'),
(35, 'son12', 'sonny1@sonny.com', '12457812', '2023-07-04'),
(36, '', 'sd@gmail.com', '124578', '2023-06-07'),
(37, 'Son Nguyen', 'sonny82@sonny.com', '123456', '2023-07-08'),
(38, 'TOTA', 'TOTA@gmail.com', '123456', '2023-06-01'),
(39, 'Agnes Somet', 'root@gmail.com', '098765', '2023-07-01'),
(40, 'agsom', 'agsom@gmail.com', '123456', '2023-05-11'),
(41, 'agsom', 'agsom@gmail.com', '1234567890', '2023-02-01'),
(42, 's', 's@gmail.com', '111111', '2023-05-10'),
(43, 'Laura', 'Laura@gmail.com', '111111', '2023-04-12'),
(44, 'tounyny', 'tounyny@gmail.com', '222222', '2023-03-15'),
(45, 'nana', 'nanata@gmail.com', '000000', '2023-04-13'),
(46, 'poli', 'poli@gmail.com', '00000000', '2023-04-12'),
(47, 'sophie ', 'sophie@gmail.com', '111111', '2023-06-09'),
(48, 'SomSom', 'SomSom@gmail.com', '9999999999', '2023-04-06'),
(49, 'Laury2', 'laury@gmail.com', '1111111111', '2023-03-16'),
(50, 'Laury2', 'laury@gmail.com', '1111111111', '2023-03-16'),
(51, 'marie', 'Laurys@gmail.com', '333333', '2023-05-11'),
(52, 'blabla', 'blabla@gmail.com', '1111111', '2023-07-05'),
(53, 'Tana', 'Tana@gmail.com', '3333333', '2023-04-06'),
(54, 'sasa', 'sasa1@gmail.com', '11111111111', '2023-04-06'),
(55, 'sonny', 'sonny@sonny111.com', '1111111111', '2023-05-12'),
(56, 'James Nguyen', 'jnguyen@gmail.com', '123456', '2000-06-09'),
(57, 'Hugo Nguyen', 'hnguyen@gmail.com', '123456', '2015-09-04'),
(58, 'Agnes Somet', 'agnesomet@gmail.com', '1111111111', '2023-04-13'),
(59, 'nano', 'nano@gmail.com', '0000000000', '2023-06-29'),
(60, 'tata', 'tata@gmail.com', '124578', '2023-05-11'),
(62, 'Son Nguyen', 'snguyen1@gmail.com', '1234567', '2023-07-13'),
(63, 'mamamamama', 'mama@gmail.com', '555555', '2023-06-29'),
(64, 'sata', 'sata@gmail.com', '999999999', '2023-06-29'),
(65, 'Johnny Doe', 'jdoe@gmail.com', '1234567', '1995-01-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_titre` (`titre`),
  ADD KEY `fk_user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_utilisateur_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
