-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 01:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fountainadmissionp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminportal`
--

CREATE TABLE `adminportal` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminportal`
--

INSERT INTO `adminportal` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studentapplication`
--

CREATE TABLE `studentapplication` (
  `id` int(100) NOT NULL,
  `applicateNum` varchar(100) NOT NULL,
  `adminStatus` varchar(100) NOT NULL DEFAULT 'on process',
  `payment` varchar(100) NOT NULL DEFAULT 'no',
  `seasion` varchar(100) NOT NULL,
  `surename` varchar(250) NOT NULL,
  `othername` varchar(250) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `contactEmail` varchar(300) NOT NULL,
  `contactAddress` varchar(500) NOT NULL,
  `contactNationality` varchar(100) NOT NULL,
  `PSName` varchar(250) NOT NULL,
  `PSEmail` varchar(300) NOT NULL,
  `PSNumber` varchar(20) NOT NULL,
  `PSAddress` varchar(500) NOT NULL,
  `refereeName` varchar(250) NOT NULL,
  `refereeAddress` varchar(500) NOT NULL,
  `refereeNumber` varchar(20) NOT NULL,
  `CompLitLev` varchar(100) NOT NULL,
  `HowKnown` varchar(100) NOT NULL,
  `entryMode` varchar(200) NOT NULL,
  `ProgType` varchar(200) NOT NULL,
  `AdminType` varchar(200) NOT NULL,
  `FirstChoiceCourse` varchar(250) NOT NULL,
  `SecondChoiceCourse` varchar(250) NOT NULL,
  `firstSubject` varchar(200) NOT NULL,
  `firstGrade` varchar(10) NOT NULL,
  `secondSubject` varchar(200) NOT NULL,
  `secondGrade` varchar(10) NOT NULL,
  `thirdSubject` varchar(200) NOT NULL,
  `thirdGrade` varchar(10) NOT NULL,
  `fourthSubject` varchar(200) NOT NULL,
  `fourthGrade` varchar(10) NOT NULL,
  `fifthSubject` varchar(200) NOT NULL,
  `fifthGrade` varchar(10) NOT NULL,
  `sixthSubject` varchar(200) NOT NULL,
  `sixthGrade` varchar(10) NOT NULL,
  `seventhSubject` varchar(200) NOT NULL,
  `seventhGrade` varchar(10) NOT NULL,
  `eightSubject` varchar(200) NOT NULL,
  `eightGrade` varchar(10) NOT NULL,
  `ninethSubject` varchar(200) NOT NULL,
  `ninethGrade` varchar(10) NOT NULL,
  `profilePic` varchar(500) NOT NULL,
  `Olevel` varchar(500) NOT NULL,
  `Jamb` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentapplication`
--

INSERT INTO `studentapplication` (`id`, `applicateNum`, `adminStatus`, `payment`, `seasion`, `surename`, `othername`, `religion`, `contactNumber`, `contactEmail`, `contactAddress`, `contactNationality`, `PSName`, `PSEmail`, `PSNumber`, `PSAddress`, `refereeName`, `refereeAddress`, `refereeNumber`, `CompLitLev`, `HowKnown`, `entryMode`, `ProgType`, `AdminType`, `FirstChoiceCourse`, `SecondChoiceCourse`, `firstSubject`, `firstGrade`, `secondSubject`, `secondGrade`, `thirdSubject`, `thirdGrade`, `fourthSubject`, `fourthGrade`, `fifthSubject`, `fifthGrade`, `sixthSubject`, `sixthGrade`, `seventhSubject`, `seventhGrade`, `eightSubject`, `eightGrade`, `ninethSubject`, `ninethGrade`, `profilePic`, `Olevel`, `Jamb`) VALUES
(10, 'FOTU2020AT10', 'admitted', 'no', '2020/2021', 'Akande', 'Tesleem Ola', 'Islam', '09056473839', 'waleakorede@gmail.com', 'off bodija iyana okebola ibadan', 'Nigeria', 'Mr / Mrs wale', 'wale@gmail.com', '0908484843', 'off bodija ibadan oyo state', 'mr tesleem', 'iwo', '09078675645', 'intermediate', 'friend', 'UTME', 'Full Time', 'Undergraduate', 'intermediate', 'social-media', 'English Language', 'B2', 'Mathmatics', 'A1', 'Biology', 'B2', 'French', 'B2', 'Food and Nutrition', 'B3', 'Arabic Language', 'A1', 'Chemistry', 'C5', 'Art and Design', 'B3', 'Physics', 'A1', 'Akande Tesleem OlaPROFILE profile.jfif', 'Akande  Tesleem OlaOLEVEL book.pdf', 'Akande  Tesleem OlaJAMB book.pdf'),
(11, 'FOTU2020OT11', 'admitted', 'no', '2020/2021', 'Olawale', 'Tolulope Akande', 'Islam', '090898774773', 'tesleem@gmail.com', 'pelelola iwo osun state', 'nigeria', 'Mr/Mr Tesleem', 'tesleemfamily@yahoo.com', '90989278837', 'pelelola iwo osun state', 'Dr Akinlabi', 'Bodija Ibadan', '09098898637', 'expert', 'social-media', 'UTME', 'Part Time', 'Undergraduate', 'beginner', 'friend', 'English Language', 'A1', 'Mathmatics', 'B2', 'Agriculture Science', 'B3', 'Biology', 'A1', 'Chemistry', 'B2', 'Commerce', 'C4', 'Physics', 'A1', 'Computer Science', 'A1', 'French', 'B3', 'Olawale Tolulope AkandePROFILE profile.jfif', 'Olawale  Tolulope AkandeOLEVEL book.pdf', 'Olawale  Tolulope AkandeJAMB book.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminportal`
--
ALTER TABLE `adminportal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentapplication`
--
ALTER TABLE `studentapplication`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminportal`
--
ALTER TABLE `adminportal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentapplication`
--
ALTER TABLE `studentapplication`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
