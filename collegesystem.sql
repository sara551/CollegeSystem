-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 02:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbooklet`
--

CREATE TABLE `addbooklet` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `source` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addbooklet`
--

INSERT INTO `addbooklet` (`id`, `studentId`, `name`, `course`, `source`) VALUES
(3458, 201900322, 'software2', 'software Engineering', 'RW-Dart-Cheatsheet-1.0.2.pdf'),
(3468, 24245, 'sda', 'asdsaa', 'CS251 SE-1 (Group-Project Phases 1 & 2 Cover Sheet) TEAM of FIVE.pdf'),
(3469, 54545, 'sasdas', 'sdas', 'Lecture 6 - Clean Code - SOLID -  Liskov Substitution Principle and Interface Segregation Principle.'),
(3470, 201900322, 'adas', 'dadas', '86_14-Bugtrackingsystem.pdf'),
(3471, 888888, 'sadasda', 'sdasd', 'CS251 SE-1 (Group-Project Instructions & Descriptions).pdf'),
(3472, 99998, 'sasdas', 'sasd', 'Task Requirements.pdf'),
(3473, 45343545, 'dsadsa', 'sdasd', 'Cover sheet.pdf'),
(3474, 201900322, 'sadasa', 'dadsa', '86 _ 14-Bug tracking system.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `addcourse`
--

CREATE TABLE `addcourse` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `term` varchar(1) NOT NULL,
  `major` varchar(2) NOT NULL,
  `level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcourse`
--

INSERT INTO `addcourse` (`id`, `studentId`, `name`, `term`, `major`, `level`) VALUES
(1, 0, 'asdasd', '1', 'it', '4'),
(3, 0, 'database', '2', 'cs', '1'),
(4, 0, 'database1', '2', 'it', '2'),
(5, 201900322, 'concept', '1', 'CS', '3'),
(6, 0, '', '', '', ''),
(7, 201900329, 'English1', '1', 'CS', '1'),
(8, 2001347, 'asdas', '2', 'CS', '4'),
(9, 444513, 'asds', '1', 'IT', '2'),
(10, 121345, 'adas', '2', 'CS', '2'),
(11, 1222222, 'dasd', '1', 'Cs', '3'),
(12, 201900322, 'sdaasda', '1', 'CS', '3'),
(13, 201900322, 'adsas', '2', 'CS', '3');

-- --------------------------------------------------------

--
-- Table structure for table `addschedule`
--

CREATE TABLE `addschedule` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `level` varchar(1) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addschedule`
--

INSERT INTO `addschedule` (`id`, `studentId`, `level`, `image`) VALUES
(12, 201900322, '2', 'pexels-george-pak-7972506.jpg'),
(23, 12123, '2', 'PrjLkDYpYbH.png'),
(28, 20024545, '2', 'CS251 SE-1 (Group-Project Instructions & Descriptions).pdf'),
(29, 132454, '2', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `adminsemail`
--

CREATE TABLE `adminsemail` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminsemail`
--

INSERT INTO `adminsemail` (`id`, `email`, `password`) VALUES
(1, 'SaraIbrahim@gmail.com', 'sAra123'),
(2, 'IbrahimSalah12@gmail.com', 'sAra123');

-- --------------------------------------------------------

--
-- Table structure for table `pts`
--

CREATE TABLE `pts` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `pt1grade` varchar(2) NOT NULL,
  `pt2grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pts`
--

INSERT INTO `pts` (`id`, `studentid`, `pt1grade`, `pt2grade`) VALUES
(1, 66577, '5', '15'),
(2, 5, '10', '25'),
(4, 111255, '22', '10'),
(5, 213145, '22', '10'),
(6, 22222, '13', '2'),
(7, 201900322, '12', '25');

-- --------------------------------------------------------

--
-- Table structure for table `testsolutions`
--

CREATE TABLE `testsolutions` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testsolutions`
--

INSERT INTO `testsolutions` (`id`, `studentid`, `coursename`, `file`) VALUES
(1, 15452, 'database', 'SW2_Projects.pdf'),
(2, 44589, 'software 1', 'RW-Dart-Cheatsheet-1.0.2.pdf'),
(3, 201900322, 'sw2', 'SW2_Projects.pdf'),
(4, 201900322, 'MIS', 'Sara\'s_Resume.pdf'),
(5, 201900322, 'software2', 'class_diagram.pdf'),
(10, 222355, 'asdsds', 'Task Requirements.pdf'),
(11, 13232, 'sdas', 'CS251 SE-1 (Group-Project Phases 1 & 2 Cover Sheet) TEAM of FIVE.pdf'),
(12, 333322, 'sdas', '86 _ 14-Bug tracking system.pdf'),
(13, 201900322, 'asda', 'CONCEPTS#2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `image`) VALUES
(43331, 'Activity1.png'),
(55564, 'SW2 Projects Registration Version2- G-2022.pdf'),
(135454, 'souq.png'),
(555555, 'pexels-george-pak-7972506.jpg'),
(555644, 'MicrosoftTeams-image.png'),
(1315435, 'logo.png'),
(5152132, 'pexels-helena-lopes-933964.jpg'),
(201900322, 'passwordpng.png'),
(222222222, 'IMG_3194.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `major` varchar(20) NOT NULL,
  `level` varchar(1) NOT NULL,
  `address` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `major`, `level`, `address`, `email`, `password`) VALUES
(1, 'Sara Ibrahim', 'cs', '3', '3 Mohamed wageh al-eshreeen faisal', 'saraibrahim@gmail.com', 'asdasda'),
(5, 'Sara Ibrahim', 'cs', '3', '3 Mohamed wageh al-eshreeen faisal', 'salahibrahim@gmail.com', 'zadooredA121@'),
(12324, 'salah aldin', 'cs', '4', '3 Mohamed wageh al eshreeen faisal', 'salah@gmail.com', 'zadooredA11@'),
(222234, 'sda', 'CS', '2', '3 Mohamed wageh al-eshreeen faisal', 'Seif@gmail.com', 'Seif1234'),
(444511, 'Dalia', 'IS', '4', '3 ddasd asdad', 'daliaIbrahim@gmail.com', 'dalia1234'),
(455512, 'Zeiad', 'CS', '2', '3 Mohamed wageh al-eshreeen faisal', 'zeiad1@gmail.com', 'sAra123'),
(2225554, 'asddad', 'CS', '2', '3 Mohamed wageh al-eshreeen faisal', 'sara88@gmail.com', 'sAra1234'),
(201900321, 'Moaaz', 'CS', '2', '2 Mmmmmm Sssss', 'moaaz12@gmail.com', 'moaaz1234'),
(201900322, 'Moustafa', 'IT', '3', '5 Mjsjsjs Llll', 'moustafaSaid@gmail.com', 'Mous1234');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `url` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `studentid`, `url`) VALUES
(17, 201900322, 'https://www.youtube.com/embed/JFzT7PsrCH0'),
(20, 201900322, 'https://www.youtube.com/embed/SoCVYPPOi6Y'),
(21, 201900322, 'https://www.youtube.com/embed/ITSae5IpY6c');

-- --------------------------------------------------------

--
-- Table structure for table `weeklymarks`
--

CREATE TABLE `weeklymarks` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `marks` varchar(2) NOT NULL,
  `weeknumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weeklymarks`
--

INSERT INTO `weeklymarks` (`id`, `studentid`, `marks`, `weeknumber`) VALUES
(1, 211454, '20', '1'),
(8, 55478, '', ''),
(9, 55478, '', '2'),
(10, 20008, '5', ''),
(11, 201900322, '22', 'week1'),
(12, 201900322, '15', 'week2'),
(13, 201900322, '25', 'week3'),
(14, 201900322, '10', 'week4'),
(15, 555555, '23', 'Week 3'),
(16, 201900322, '10', '23'),
(17, 2019003666, '20', '25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbooklet`
--
ALTER TABLE `addbooklet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addcourse`
--
ALTER TABLE `addcourse`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courseName` (`name`);

--
-- Indexes for table `addschedule`
--
ALTER TABLE `addschedule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `imageSource` (`image`);

--
-- Indexes for table `adminsemail`
--
ALTER TABLE `adminsemail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pts`
--
ALTER TABLE `pts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testsolutions`
--
ALTER TABLE `testsolutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weeklymarks`
--
ALTER TABLE `weeklymarks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbooklet`
--
ALTER TABLE `addbooklet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3475;

--
-- AUTO_INCREMENT for table `addcourse`
--
ALTER TABLE `addcourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `addschedule`
--
ALTER TABLE `addschedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `adminsemail`
--
ALTER TABLE `adminsemail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pts`
--
ALTER TABLE `pts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testsolutions`
--
ALTER TABLE `testsolutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222222223;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201900323;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `weeklymarks`
--
ALTER TABLE `weeklymarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
