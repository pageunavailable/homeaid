-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 10:36 AM
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
-- Database: `hmd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `hmd_acc`
--

CREATE TABLE `hmd_acc` (
  `acc_id` int(10) NOT NULL,
  `acc_usr` varchar(255) NOT NULL,
  `acc_eml` varchar(255) NOT NULL,
  `acc_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hmd_acc`
--

INSERT INTO `hmd_acc` (`acc_id`, `acc_usr`, `acc_eml`, `acc_pwd`) VALUES
(4, 'kyle', 'Migi@gmail.com', '369d8e27270351b658b102785616797dab62b659058ca2494872b6bd0181aca4'),
(11, 'River', 'river@gmail.com', '5f5a8ed8f139be6df7cf8f4a91d3e4649961a98c82fd521c18d6f292b031a319'),
(12, 'test', 't@t.t', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(13, 'gruffyx', 'pisceskyle@gmail.com', 'e85130791f31db1699f61a5e7ae7b5e85e70399414f38476091896214771cd17'),
(15, 'testing', 'testing@t.t', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(16, 'sample', 'sample@sample.sample', 'af2bdbe1aa9b6ec1e2ade1d694f41fc71a831d0268e9891562113d8a62add1bf'),
(17, 'Samp', 'Samp@samp.s', 'd2a8bfe64f2c5a3eee912af3ba696d4ea2200300a99c83a658355bd40ce49b71'),
(18, 'Thoma', 'thoma@genshin.com', 'b957ff728a085b4cf663964ca9b22742049d7d83ede5a36f4ff8e25441f9c863'),
(20, 'Steeven', 'pageunavailable@gmail.com', '3660315a9af3df255d8f19ab077e4797822b41488a0e2a04bc6af71213c23274'),
(21, 'raged', 'raged@gmail.com', 'bc9d5e51f38f8bef73ce839a682b51d647d540679c90f54d3bd1c5585286d051'),
(22, 'Jacob', 'jacob@gmail.com', 'af2bdbe1aa9b6ec1e2ade1d694f41fc71a831d0268e9891562113d8a62add1bf'),
(23, 'Howard', 'howard@gmail.com', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(24, 'lolzy', 'lolzy@gmail.com', '8292a43281d60d584c835c924d599dc70c41c38e3932ca8d5d478e425c448037'),
(25, 'memer', 'memer@gmail.com', '8d63bb671a2361a1de0edae8e59fdf913a064abba045b426c30e468d0ee67396'),
(26, 'memer2', 'memer2@gmail.com', '6c937f743f8e99a1d557e24ff0417a8cebf2c2f0e41a758543e8d0647c0545fc'),
(27, 'tabibito4ayaka', 'iliketabibito@gmail.com', 'ff7bd97b1a7789ddd2775122fd6817f3173672da9f802ceec57f284325bf589f');

-- --------------------------------------------------------

--
-- Table structure for table `hmd_ctg`
--

CREATE TABLE `hmd_ctg` (
  `ctg_cd` varchar(10) NOT NULL,
  `ctg_tl` varchar(255) NOT NULL,
  `ctg_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hmd_ctg`
--

INSERT INTO `hmd_ctg` (`ctg_cd`, `ctg_tl`, `ctg_desc`) VALUES
('CT_04', 'Carpentry', 'Wood Works, Construction, House Repairs'),
('EC_01', 'Electrician', 'Wiring Repairs, Electrical Installations'),
('HK_06', 'Housekeeping', 'Cooking, Cleaning, Babysitting, Laundry'),
('MW_08', 'Metalworks', ''),
('PB_03', 'Plumbing', 'Pipe Repair, Septic Tank Maintenance'),
('PT_05', 'Home Painting', ''),
('SC_07', 'Self-Care', 'Manicure, Pedicure, Massage'),
('TC_02', 'Technician', 'PC Repair, PC Cleaning, PC Assistance');

-- --------------------------------------------------------

--
-- Table structure for table `hmd_pfl`
--

CREATE TABLE `hmd_pfl` (
  `pfl_id` int(8) NOT NULL,
  `pfl_nm` varchar(255) NOT NULL,
  `pfl_adr` varchar(255) NOT NULL,
  `pfl_rates` float NOT NULL,
  `pfl_sr` float NOT NULL,
  `pfl_ico` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hmd_pfl`
--

INSERT INTO `hmd_pfl` (`pfl_id`, `pfl_nm`, `pfl_adr`, `pfl_rates`, `pfl_sr`, `pfl_ico`) VALUES
(4, 'John Doe', '1935', 0, 0, ''),
(11, 'Kyle River Bacongan', '1638', 0, 0, ''),
(12, '', '', 0, 0, ''),
(13, 'Jacob', '1922 Apple St. Cordova District, Hachima City', 0, 0, ''),
(15, '', '', 0, 0, ''),
(16, '', '', 0, 0, ''),
(17, '', '', 0, 0, ''),
(18, '', '', 0, 0, ''),
(20, 'Steeven ', '1711', 0, 0, ''),
(21, 'Roland Renzo Tan', '1800', 0, 0, ''),
(22, '', '', 0, 0, ''),
(23, 'Howard Stark', '199 MCU', 0, 0, ''),
(24, 'Phil McKrackin', '', 0, 0, ''),
(25, 'Ben Dhover', '', 0, 0, ''),
(26, 'Mike  Oxlhong', '', 0, 0, ''),
(27, 'Ayaka Kamisato', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `hmd_pfl_skl`
--

CREATE TABLE `hmd_pfl_skl` (
  `pfl_skl_id` int(8) NOT NULL,
  `pfl_skl_ctg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hmd_acc`
--
ALTER TABLE `hmd_acc`
  ADD PRIMARY KEY (`acc_id`),
  ADD UNIQUE KEY `acc_usr` (`acc_usr`);

--
-- Indexes for table `hmd_ctg`
--
ALTER TABLE `hmd_ctg`
  ADD PRIMARY KEY (`ctg_cd`);

--
-- Indexes for table `hmd_pfl`
--
ALTER TABLE `hmd_pfl`
  ADD UNIQUE KEY `pfl_id` (`pfl_id`);

--
-- Indexes for table `hmd_pfl_skl`
--
ALTER TABLE `hmd_pfl_skl`
  ADD KEY `pfl_skl_id` (`pfl_skl_id`),
  ADD KEY `pfl_skl_ctg` (`pfl_skl_ctg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hmd_acc`
--
ALTER TABLE `hmd_acc`
  MODIFY `acc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hmd_pfl`
--
ALTER TABLE `hmd_pfl`
  ADD CONSTRAINT `profile-connection` FOREIGN KEY (`pfl_id`) REFERENCES `hmd_acc` (`acc_id`);

--
-- Constraints for table `hmd_pfl_skl`
--
ALTER TABLE `hmd_pfl_skl`
  ADD CONSTRAINT `hmd_pfl_skl_ibfk_1` FOREIGN KEY (`pfl_skl_id`) REFERENCES `hmd_acc` (`acc_id`),
  ADD CONSTRAINT `hmd_pfl_skl_ibfk_2` FOREIGN KEY (`pfl_skl_ctg`) REFERENCES `hmd_ctg` (`ctg_cd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
