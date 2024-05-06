-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 10:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `email`, `Password`) VALUES
('Amr', 'Amr@example.com', ''),
('hatem', 'hatem@example.com', ''),
('atef', 'hatem@example.com', ''),
('aliaa', 'aliaa@example.com', ''),
('ziad', 'ziad@example.com', ''),
('hatem', 'hatem@example.com', ''),
('hatem', 'aliaa@example.com', ''),
('hatem', 'ziad@example.com', ''),
('hatemmmm', 'aliaa@example.coh', '555'),
('hatemmmm', 'aliaa@example.coh', '555'),
('ziad', 'aliaa@example.com', '123'),
('ziad', 'aliaa@example.com', '123'),
('ziad', 'aliaa@example.com', '323232'),
('ziad', 'aliaa@example.com', '323232'),
('ziad', 'ziad@example.com', 'zeyad'),
('ziad', 'ziad@example.com', 'zeyad'),
('ziad', 'ziad@example.com', '00000'),
('ziad', 'ziad@example.com', '00000'),
('ziad', 'ziad@example.com', '33333'),
('ziad', 'ziad@example.com', '33333'),
('ziad', 'hatem@example.com', '784521'),
('ziad', 'hatem@example.com', '784521'),
('Zxc', 'zeyad@z.com', '111111'),
('ziad', 'ziad@example.com', '222555888');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
