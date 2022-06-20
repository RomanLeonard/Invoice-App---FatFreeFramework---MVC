-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 05:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoices_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cui` varchar(25) DEFAULT NULL,
  `onrc` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `iban` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `cui`, `onrc`, `address`, `iban`, `bank`, `mobile`, `email`) VALUES
(170, 'test', '', '', 'aetaet', '', '', '', ''),
(171, 'test', '', '', 'aetaet', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `client` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`client`)),
  `number` int(11) NOT NULL,
  `date` date NOT NULL,
  `items` text NOT NULL,
  `shipping_price` varchar(25) NOT NULL,
  `price_total` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `serial`, `client`, `number`, `date`, `items`, `shipping_price`, `price_total`, `status`) VALUES
(92, 'BIZ', '{\"name\":\"test name\",\"address\":\"Str. Soseaua urziceni nr. 30, maia, Ialomita\",\"client_cui\":\"1234567\",\"client_onrc\":\"j21\\/30\\/2020\",\"client_phone\":\"1353195315\",\"client_iban\":\"RO1331513531535135\",\"client_bank\":\"IGM.\",\"client_email\":\"email@email.com\"}', 1, '2022-06-17', '\"items\"', '19.99', '2', 'normal'),
(122, 'BIZ', '{\"name\":\"123\",\"address\":\"123\",\"cui\":\"\",\"onrc\":\"\",\"phone\":\"\",\"iban\":\"\",\"bank\":\"\",\"email\":\"\"}', 12, '2022-06-17', '\"{\\\"tea\\\":\\\"1\\\",\\\"teas\\\":\\\"2\\\"}\"', '', '3', 'normal'),
(123, 'BIZ', '{\"name\":\"test\",\"address\":\"aetaet\",\"cui\":\"\",\"onrc\":\"\",\"phone\":\"\",\"iban\":\"\",\"bank\":\"\",\"email\":\"\"}', 133, '2022-06-17', '\"{\\\"\\\":\\\"\\\"}\"', '', '0', 'normal'),
(124, 'BIZ', '{\"name\":\"test\",\"address\":\"aetaet\",\"cui\":\"\",\"onrc\":\"\",\"phone\":\"\",\"iban\":\"\",\"bank\":\"\",\"email\":\"\"}', 1321, '2022-06-17', '\"{\\\"\\\":\\\"\\\"}\"', '', '0', 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
