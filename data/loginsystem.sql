-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 02:08 PM
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
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `subject` varchar(55) NOT NULL,
  `assignments` varchar(55) NOT NULL,
  `deadline` date NOT NULL,
  `id` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`subject`, `assignments`, `deadline`, `id`) VALUES
('Math207', 'Assignment V', '2018-07-23', 12),
('Comp232-mini project', 'Final report', '2018-07-27', 13);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(50) NOT NULL,
  `absent_days` int(255) NOT NULL,
  `Subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(9) NOT NULL,
  `event` varchar(255) NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `ID` int(11) NOT NULL,
  `S1` varchar(55) NOT NULL,
  `S2` varchar(55) NOT NULL,
  `S3` varchar(55) NOT NULL,
  `S4` varchar(55) NOT NULL,
  `S5` varchar(55) NOT NULL,
  `S6` varchar(55) NOT NULL,
  `M1` varchar(55) NOT NULL,
  `M2` varchar(55) NOT NULL,
  `M3` varchar(55) NOT NULL,
  `M4` varchar(55) NOT NULL,
  `M5` varchar(55) NOT NULL,
  `M6` varchar(55) NOT NULL,
  `T1` varchar(55) NOT NULL,
  `T2` varchar(55) NOT NULL,
  `T3` varchar(55) NOT NULL,
  `T4` varchar(55) NOT NULL,
  `T5` varchar(55) NOT NULL,
  `T6` varchar(55) NOT NULL,
  `W1` varchar(55) NOT NULL,
  `W2` varchar(55) NOT NULL,
  `W3` varchar(55) NOT NULL,
  `W4` varchar(55) NOT NULL,
  `W5` varchar(55) NOT NULL,
  `W6` varchar(55) NOT NULL,
  `TH1` varchar(55) NOT NULL,
  `TH2` varchar(55) NOT NULL,
  `TH3` varchar(55) NOT NULL,
  `TH4` varchar(55) NOT NULL,
  `TH5` varchar(55) NOT NULL,
  `TH6` varchar(55) NOT NULL,
  `F1` varchar(55) NOT NULL,
  `F2` varchar(55) NOT NULL,
  `F3` varchar(55) NOT NULL,
  `F4` varchar(55) NOT NULL,
  `F5` varchar(55) NOT NULL,
  `F6` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`ID`, `S1`, `S2`, `S3`, `S4`, `S5`, `S6`, `M1`, `M2`, `M3`, `M4`, `M5`, `M6`, `T1`, `T2`, `T3`, `T4`, `T5`, `T6`, `W1`, `W2`, `W3`, `W4`, `W5`, `W6`, `TH1`, `TH2`, `TH3`, `TH4`, `TH5`, `TH6`, `F1`, `F2`, `F3`, `F4`, `F5`, `F6`) VALUES
(9, 'Project Day\r\n				', 'Project Day\r\n				', 'Project Day\r\n				', 'Project Day\r\n				', 'Project Day\r\n				', 'Project Day\r\n				', 'leisure\r\n				', 'Comp231\r\n				', 'Comp232\r\n				', 'leisure\r\n				', 'Mcsc202(lab)\r\n				', 'Mcsc202(lab)\r\n				', 'Mcsc202\r\n				', 'leisure\r\n				', 'leisure\r\n				', 'Comp204\r\n				', 'Comp232(lab)\r\n				', 'Comp232(lab)\r\n				', 'leisure\r\n				', 'Comp204\r\n				', 'Comp204\r\n				', 'leisure\r\n				', 'Comp231\r\n				', 'leisure\r\n				', 'Mcsc202\r\n				', 'leisure\r\n				', 'Math207\r\n				', 'Math207\r\n				', 'Comp204(lab)\r\n				', 'Comp204(lab)\r\n				', 'leisure\r\n				', 'Math207\r\n				', 'Math207\r\n				', 'Comp232\r\n				', 'Comp232\r\n				', 'leisure\r\n				');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(11) NOT NULL,
  `Subject_name` varchar(45) NOT NULL,
  `Subject_code` varchar(45) NOT NULL,
  `syllabus_link` varchar(255) NOT NULL,
  `Absent_days` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `Subject_name`, `Subject_code`, `syllabus_link`, `Absent_days`) VALUES
(14, 'Differential Equations & Complex Variables', 'MATH207', 'http://www.ku.edu.np/dons/samir-directory/MATH-207/CS/Syllabus-MATH207.pdf', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'ganesh', 'karki', 'gunaac7764@gmail.com', 'ganeshr', '$2y$10$vYnC8vwCXfKfscW2QfvmOOhlg/AJRIqyjd8Z8xj4Z8g8.6Q2OSsVC'),
(2, 'gan', 'kar', 'ganesh@gmail.com', 'admin', '$2y$10$HQVziS6p6lcoeXwZsu7XnOFvi1jX2MrAifHvey2uDf.FYqUxE/2OK'),
(4, 'sudip', 'maharjan', 'sudip@gmail.com', 'sudip', '$2y$10$1Ldj9RM8/zWRGnKwnUQTquRi6H4D18WW1h4z1Bf8exJhu6Sq53QTm'),
(6, 'dsfas', 'fasdfsd', 'san_infinitedeep@yahoo.com', 'tree', '$2y$10$PcH7HFSTTCC39CrZ13r.rOgc3kgdTFS/0sE7kabLn7La2.SU6Bouu'),
(7, 'Sandeep', 'Gautam', 'san_infinitedeep@yahoo.com', 'sandeep', '$2y$10$OS6/ctoKQUEZNMTAOQWvR.caWUgcciheVfuc0B.VvuO6fa3QCZ/KC'),
(8, 'udip', 'parajuli', 'udipparajuli11@gmail.com', 'udip', '$2y$10$RcCupwBPn7xFVR1Uc90NUeRYqkiLle.FsNoMQZPIl7Giegkw9SmAy'),
(9, 'alix', 'shrestha', 'alix@gmail.com', 'alix', '$2y$10$sb.5Wi5MHN1y7Dyb3Hqmv.Au5/PM7H3AscbZCTgNwjuf4YZKKStBa'),
(10, 'subh', 'raj', 'gg@gg.com', 'subh', '$2y$10$afe4CUu2/yChfAqHdCNcO.VlKORCGb52aqlK3clFO2T0DTAR5lQiq'),
(11, 'subhraj', 'dhital', 'subh@dhital.com', 'subhh', '$2y$10$.4RX9UFMAMIpo.Bm8eZDWeyFoYd79oRlhXr/2BSRh7ShR.YdZXshK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
