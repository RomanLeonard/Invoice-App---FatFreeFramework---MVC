-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 04:57 PM
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
(147, 'BIZ', '{\"name\":\"SUPERLEATHER PROD SRL\",\"address\":\"Sos. Pantelimon 291A Bl. 9A Sc. B Et. 6 Ap. 50\",\"cui\":\"44965348\",\"onrc\":\"J40\\/16645\\/2021\",\"phone\":\"0733488555\",\"iban\":\"\",\"bank\":\"\",\"email\":\"\"}', 210, '2022-06-13', '[{\"item_name\":\"Prestari servicii\",\"item_um\":\"buc\",\"item_qty\":\"1\",\"item_price\":\"2000\"}]', '0', '2000', 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
