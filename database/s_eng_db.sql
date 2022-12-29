-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 12:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s_eng_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_tb`
--

CREATE TABLE `bill_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_tb`
--

INSERT INTO `bill_tb` (`id`, `name`, `email`, `phone`, `image`, `datetime`) VALUES
(1, 'gdg', 'gd@gmail.com', 'fsfsf', NULL, '2022-12-29 16:43:31'),
(2, 'fd', 'fdf@gmail.com', 'fd', 'electricity-4666566_1920.jpg', '2022-12-29 16:47:43'),
(3, 'dfd', 'fdf@gmail.com', 'df', 'electricity-4666566_1920.jpg', '2022-12-29 16:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `card_tb`
--

CREATE TABLE `card_tb` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `links` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_tb`
--

INSERT INTO `card_tb` (`id`, `title`, `img`, `content`, `links`) VALUES
(1, 'SOLAR ENERGY', 'logo-removebg-preview.png', 'solar energy, radiation from the Sun capable of producing heat, causing chemical reactions, or generating electricity. The total amount of solar energy incident on Earth is vastly in excess of the world’s current and anticipated energy requirements. If suitably harnessed, this highly diffused source has the potential to satisfy all future energy needs. In the 21st century solar energy is expected to become increasingly attractive as a renewable energy source because of its inexhaustible supply and its nonpolluting character, in stark contrast to the finite fossil fuels coal, petroleum, and natural gas.', 'https://www.summerenergy.com/Signup?promocode=Savant'),
(2, 'SOLAR ENERGY', 'logo3.png\r\n', 'solar energy, radiation from the Sun capable of producing heat, causing chemical reactions, or generating electricity. The total amount of solar energy incident on Earth is vastly in excess of the world’s current and anticipated energy requirements. If suitably harnessed, this highly diffused source has the potential to satisfy all future energy needs. In the 21st century solar energy is expected to become increasingly attractive as a renewable energy source because of its inexhaustible supply and its nonpolluting character, in stark contrast to the finite fossil fuels coal, petroleum, and natural gas.', 'https://www.summerenergy.com/Signup?promocode=Savant');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

CREATE TABLE `contact_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`id`, `name`, `email`, `phone`, `address`, `message`, `date_time`) VALUES
(10, 'dfd', 'dfd@gmail.com', 'fgf', 'df', 'fgfg', '2022-12-29 16:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `promo_tb`
--

CREATE TABLE `promo_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo_tb`
--

INSERT INTO `promo_tb` (`id`, `name`, `email`, `address`, `message`) VALUES
(1, 'jk', 'jk@gmail.com', 'ljkj', 'fgfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_tb`
--
ALTER TABLE `bill_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_tb`
--
ALTER TABLE `card_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_tb`
--
ALTER TABLE `contact_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo_tb`
--
ALTER TABLE `promo_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_tb`
--
ALTER TABLE `bill_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `card_tb`
--
ALTER TABLE `card_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_tb`
--
ALTER TABLE `contact_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `promo_tb`
--
ALTER TABLE `promo_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
