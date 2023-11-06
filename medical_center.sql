-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 08:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(5) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_password`) VALUES
('admin', '$2y$10$sf1MhNcRVF.MCUsD7fNIrOzjpzyyfXUHQoxKR4FPu1qLqVan6K4aO');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `reg_number` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time_slot` time(6) NOT NULL,
  `doctor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `reg_number`, `name`, `email`, `date`, `time_slot`, `doctor`) VALUES
(75, '2020CSC078', 'K.N.O.Hettige', 'nigeehettige20@gmail.com', '2023-11-04', '09:20:00.000000', 'Dr.Mrs. J. Sriskandarajah'),
(76, '2020CSC078', 'K.N.O.Hettige', 'nigeehettige20@gmail.com', '2023-11-04', '09:00:00.000000', 'Dr.Mrs. J. Sriskandarajah'),
(80, '2020CSC078', 'K.N.O.Hettige', 'nigeehettige20@gmail.com', '2023-11-16', '09:10:00.000000', 'Dr.Mrs. J. Sriskandarajah'),
(90, '2020CSC078', 'K.N.O.Hettige', 'nigeehettige20@gmail.com', '2023-11-02', '12:10:00.000000', 'Dr. J. Lawrence'),
(91, '2020CSC078', 'K.N.O.Hettige', 'nigeehettige20@gmail.com', '2023-11-02', '13:10:00.000000', 'Dr. J. Lawrence');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `dr_id` int(11) NOT NULL,
  `dr_name` varchar(100) NOT NULL,
  `hospital` varchar(30) NOT NULL,
  `nic` int(12) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`dr_id`, `dr_name`, `hospital`, `nic`, `contact_no`, `address`, `email`, `gender`) VALUES
(2, 'Dr Ramanan', 'Department', 2147483647, 768383832, 'Jaffna Station eka Issraha', 'ramaruban@gmail.com', 'Male'),
(4, 'Dr Barathy Mayurathan', 'Jaffna', 2147483647, 908379382, 'Japan', 'bararox@gmail.com', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `reg_number` varchar(12) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `name_with_initials` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `residential_address` varchar(100) NOT NULL,
  `permenent_address` varchar(100) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `martial_status` varchar(10) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `gardian_name` varchar(50) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `contact_number` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `last_school_attend` varchar(30) DEFAULT NULL,
  `profile_photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`reg_number`, `full_name`, `name_with_initials`, `gender`, `dob`, `mobile_number`, `email`, `residential_address`, `permenent_address`, `nic`, `martial_status`, `faculty`, `department`, `height`, `weight`, `gardian_name`, `relation`, `contact_number`, `password`, `blood_group`, `last_school_attend`, `profile_photo`) VALUES
('2020CSC078', 'Nigee Odara Hettige', 'K.N.O.Hettige', 'Female', '2000-08-15', 778082156, 'nigeehettige20@gmail.com', 'Colombo', 'Colombo', '200072800322', 'Unmarried', 'Faculty of Science', 'Department of Computer Science', 5.2, 65, 'K.I.N>Hettige', 'Father', 768538472, '$2y$10$I4FvFSLX6S/dhzr3iwzLP.QYGsfHJphND27hi2d.0.BX1iVU7YXu6', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`dr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `dr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
