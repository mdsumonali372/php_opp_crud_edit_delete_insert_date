-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 08:49 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oppcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `username`, `email`, `Password`) VALUES
(13, 'mdsumonali372', 'mdsumonali00@gmail.com', '454545'),
(21, 'mdsumonali372', 'mdsumonali00@gmail.com', 'dfgdsfgdsf'),
(22, 'mdsumonali000', 'mdsumonali026@gmail.com', 'hjkhgkghjkhgjk'),
(23, 'mdsumonali372', 'fgdgdg@gmail.com', 'uiohuioui'),
(24, 'Freelancer Sumon', 'mdsumonali00@gmail.com', 'hjklhjkl'),
(25, 'mdsumonali372', 'mdsumonali00@gmail.com', 'dfgdsgd');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `ID` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `address`, `Email`, `password`) VALUES
(4, 'Natore', '0', '454545fdgfdg'),
(5, 'Natore', '0', '545445'),
(6, 'Natore45', '0', '444445'),
(7, 'Natore', '0', '45454'),
(8, '', '0', ''),
(9, '', '0', ''),
(10, '', '0', ''),
(11, '', '0', '454545'),
(12, 'Natore45', '0', '44774'),
(13, 'Natore', '0', '454'),
(14, 'fdgfg', '0', '475454'),
(15, '', '0', ''),
(16, 'Natore', '0', '4545'),
(17, 'Natore', '0', '445'),
(18, 'Natore', 'mdsumonali026@gmail.com', '54545'),
(19, 'Natore', 'mdsumonali026@gmail.com', '45454');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
