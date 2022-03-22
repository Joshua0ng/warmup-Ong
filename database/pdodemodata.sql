-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 10:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phppdodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdodemodata`
--

CREATE TABLE `pdodemodata` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL,
  `posting time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdodemodata`
--

INSERT INTO `pdodemodata` (`id`, `name`, `message`, `posting time`) VALUES
(1, 'name', 'message', '0000-00-00 00:00:00'),
(2, 'name', 'message', '0000-00-00 00:00:00'),
(3, 'jae', 'hello', '0000-00-00 00:00:00'),
(4, 'isaiah', 'hi', '2022-03-19 16:39:26'),
(5, 'joshua', 'wassup', '2022-03-19 17:12:19'),
(6, 'ariel', '?', '2022-03-19 17:27:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdodemodata`
--
ALTER TABLE `pdodemodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdodemodata`
--
ALTER TABLE `pdodemodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
