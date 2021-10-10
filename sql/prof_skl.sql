-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 10:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `prof_skl`
--

CREATE TABLE `prof_skl` (
  `id` int(8) NOT NULL,
  `category_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prof_skl`
--

INSERT INTO `prof_skl` (`id`, `category_code`) VALUES
(1, 'PLMB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prof_skl`
--
ALTER TABLE `prof_skl`
  ADD KEY `fk_cd` (`category_code`),
  ADD KEY `fk_id` (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prof_skl`
--
ALTER TABLE `prof_skl`
  ADD CONSTRAINT `fk_cd` FOREIGN KEY (`category_code`) REFERENCES `categories` (`category_code`),
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
