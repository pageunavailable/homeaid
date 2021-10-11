-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 05:57 AM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_code` varchar(10) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_code`, `category_name`, `description`, `image`) VALUES
('CRPT', 'Carpentry', 'Wood Works, Construction, House Repairs', '../images/category_images/carpentry.jpg'),
('ELEC', 'Electrical', 'Wiring Repairs, Electrical Installations', '../images/category_images/electrical.jpg'),
('HOUSEKP', 'Housekeeping', 'Cooking, Cleaning, Babysitting', '../images/category_images/housekeeping.jpg'),
('PLMB', 'Plumbing', 'Pipe Repair, Septic Tank Maintenance', '../images/category_images/plumbing.jpg'),
('TECH', 'Technology', 'PC Repair, PC Cleaning, PC Assistance', '../images/category_images/technology.jpg');

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
(1, 'PLMB'),
(3, 'HOUSEKP'),
(5, 'CRPT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `profile`) VALUES
(1, 'Steeven Jan B. Mendenilla', 'pageunavailable', 'steevenjan@yahoo.com', 'ff7bd97b1a7789ddd2775122fd6817f3173672da9f802ceec57f284325bf589f', 'koro.jpg'),
(3, 'Roland Renzo Tan', 'ragedwolf420', 'qrrptan@tip.edu.ph', 'ff7bd97b1a7789ddd2775122fd6817f3173672da9f802ceec57f284325bf589f', 'john.jpg'),
(5, 'Kyle River Bacongan', 'GRUFFYX', 'pisceskyle@gmail.com', 'ff7bd97b1a7789ddd2775122fd6817f3173672da9f802ceec57f284325bf589f', 'ayako.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_code`);

--
-- Indexes for table `prof_skl`
--
ALTER TABLE `prof_skl`
  ADD KEY `fk_cd` (`category_code`),
  ADD KEY `fk_id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
