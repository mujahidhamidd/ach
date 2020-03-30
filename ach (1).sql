-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 08:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ach`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `job_number` int(6) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`job_number`, `password`) VALUES
(2696, '987654321');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `job_number` int(6) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `father_name` varchar(1000) NOT NULL,
  `mother_name` varchar(1000) NOT NULL,
  `phone` varchar(1999) NOT NULL,
  `date_of_birth` varchar(1999) NOT NULL,
  `gender` varchar(1000) NOT NULL,
  `major` varchar(1000) NOT NULL,
  `university` varchar(1000) NOT NULL,
  `minor` varchar(1000) NOT NULL,
  `blood_type` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`job_number`, `name`, `password`, `email`, `father_name`, `mother_name`, `phone`, `date_of_birth`, `gender`, `major`, `university`, `minor`, `blood_type`, `type`) VALUES
(3672, 'Hassan', '1234567890', 'hassan@gmail.com', 'Omer', 'mother', '0505981197', '12/3/1990', 'male', 'mEDICINE', 'tabouk', 'no', 'o', 'paramedic'),
(4568, 'Ahmed', '1234567890', 'Ahmed@gmail.com', 'Ali', 'mother', '0505981198', '12/3/1990', 'male', 'Medicine', 'tabouk', 'no', 'o', 'Emergency Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id_number` int(255) NOT NULL,
  `medical_id` int(255) NOT NULL,
  `location_lng` double NOT NULL,
  `locaion_lat` double NOT NULL,
  `diagnosis` text NOT NULL,
  `complete` varchar(255) NOT NULL,
  `requested_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `blood pressure` int(255) NOT NULL,
  `breath rate` int(255) NOT NULL,
  `heart rate` int(255) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `height` int(255) NOT NULL,
  `weight` int(255) NOT NULL,
  `hip` int(255) NOT NULL,
  `wrist` int(255) NOT NULL,
  `eat_fruits` varchar(3) NOT NULL,
  `eat_vegetables` varchar(3) NOT NULL,
  `eat_meat` varchar(3) NOT NULL,
  `smoke` varchar(3) NOT NULL,
  `alcohol` varchar(3) NOT NULL,
  `drugs` varchar(3) NOT NULL,
  `cigarrete` varchar(3) NOT NULL,
  `work_effort` int(255) NOT NULL,
  `moving_effort` int(255) NOT NULL,
  `vacation_effort` int(255) NOT NULL,
  `chronic_diseases` text NOT NULL,
  `danegrous_diseases` text NOT NULL,
  `medication` text NOT NULL,
  `allergic` text NOT NULL,
  `prev_surgeries` text NOT NULL,
  `vaccination` text NOT NULL,
  `family_diseases` text NOT NULL,
  `assurance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id_number`, `medical_id`, `location_lng`, `locaion_lat`, `diagnosis`, `complete`, `requested_at`, `name`, `job`, `date_of_birth`, `gender`, `nationality`, `blood pressure`, `breath rate`, `heart rate`, `blood_type`, `height`, `weight`, `hip`, `wrist`, `eat_fruits`, `eat_vegetables`, `eat_meat`, `smoke`, `alcohol`, `drugs`, `cigarrete`, `work_effort`, `moving_effort`, `vacation_effort`, `chronic_diseases`, `danegrous_diseases`, `medication`, `allergic`, `prev_surgeries`, `vaccination`, `family_diseases`, `assurance`) VALUES
(1234567890, 1234567890, 46.738586, 24.774265, '                    kmkmkm', 'no', '2020-03-28 17:27:01', 'omer', 'programmer', '1/9/1004', 'male', 'saudi', 44, 23, 0, 'o2', 23, 67, 12, 22, 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 12, 22, 22, 'diabetes', 'diabetes', 'insulin ', 'nothing', 'nothing', 'no', 'no', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`job_number`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`job_number`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
