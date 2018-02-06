-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 06:48 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `visits` varchar(225) NOT NULL,
  `lastvisit` varchar(225) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `visits`, `lastvisit`, `created_at`) VALUES
(1, 'Admin', '$2y$10$OsS8ZgZ45.Fv9EBAv.lXdOfDzGNZerIsgvBx.F4g8S.bzD7o0JR1C', '44', 'Tue, 06 Feb 2018 17:20:42 +0000', '2018-01-16 16:38:03'),
(4, 'xXxnoScoperxXx', '$2a$12$IXmQ/qI3BHNFWxoTyyWyeeJuvh2oUxjGAnvs44sq0MvKd9HqLSODu', '0', '0', '2018-01-16 17:54:26'),
(5, 'that_fly_on_the_wall', '$2y$10$fTXv4BYMI5/lOItQo3XEVecRSSHn5BHz0h32.pMWYz6ocKESEJi72', '0', '0', '2018-01-16 17:56:35'),
(6, 'xXxMLGNOSCOPExXx', '$2y$10$f/q6Z8.1CVtoCT8C7bV24ufIrPeKloEmkbqaTMN4kPNh.Shv5CNKm', '20', '0', '2018-01-23 17:30:24'),
(8, '321', '$2y$10$AP.EsdGvWfwa016eOHjGxuLKQ/7Pku4OUFFJmYOgUj117NXC1oGxW', '1', 'Tue, 06 Feb 2018 15:38:05 +0000', '2018-02-06 15:38:01'),
(10, 'Gudmondson', '$2y$10$OD6IE6j6tvqZycYP45HM8OBGZS7M6hUxPGmEJOKv.XWx4F.tTBn6S', '5', 'Tue, 06 Feb 2018 17:31:32 +0000', '1066-02-06 16:25:00'),
(11, 'SirGeoffreyLaman', '$2y$10$QdThwo2D5T19a0lZadIVLeVafPM21H7LnJabjBTyRWmd0P0wUXSW2', '65', 'Tue, 06 Feb 2018 17:29:25 +0000', '2018-02-06 17:08:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
