-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2019 at 05:29 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nigella`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Q_id` int(11) NOT NULL,
  `B_id` int(11) NOT NULL,
  `B_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Q_id`, `B_id`, `B_name`) VALUES
(2, 1, 'CS'),
(2, 2, 'Mechanical');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `C_id` int(11) NOT NULL,
  `C_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`C_id`, `C_Name`) VALUES
(1, 'India'),
(2, 'England'),
(3, 'Newzeland'),
(4, 'Russia'),
(5, 'London');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `Q_id` int(11) NOT NULL,
  `Q_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`Q_id`, `Q_Name`) VALUES
(1, 'MCA'),
(2, 'B Tech'),
(3, 'MBA'),
(4, 'BA'),
(5, 'B Arch');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `S_id` int(11) NOT NULL,
  `C_id` int(11) NOT NULL,
  `S_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`S_id`, `C_id`, `S_Name`) VALUES
(1, 1, 'Uttar Pradesh'),
(2, 1, 'Uttarakhand'),
(3, 1, 'Rajasthan'),
(4, 1, 'Gujrat'),
(5, 2, 'A'),
(6, 2, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Stu_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Stu_id`, `name`, `email`, `course`, `branch`, `photo`, `password`) VALUES
(8, 'vasudha', 'sunny1@email.com', 'mca', 'CS', 'Stu_bird.jpg', 'vasudha'),
(9, 'anshu', 'anshu@gmail.com', 'MBA', 'Management', 'Stu_baby.jpeg', 'anshu'),
(10, 'Astha', 'astha@gmail.com', 'M Tech', 'Civil', 'Stu_festival.jpg', ''),
(11, 'anita', 'ani@gmail.com', 'Bcom', 'NA', 'Stu_f1.jpg', '123'),
(12, 'vasudha', 'deepak@abc.com', 'mca', 'CS', 'Stu_20151113_132029.jpg', '123'),
(13, 'abhi', 'abhi@gmail.com', 'mca', 'cs', 'Stu_20151113_132036.jpg', 'newpass'),
(15, 'soniya', 'sona@email.com', 'MBA', 'Marketing', 'Stu_mist.jpg', ''),
(16, 'Gaurav', 'poo@webmail.com', 'B tech', 'Civil', 'Stu_pin.png', 'newpass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`B_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`Q_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `B_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `Q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `S_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
