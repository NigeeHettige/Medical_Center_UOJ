-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 03:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `dr_id` int(11) NOT NULL,
  `cause` varchar(30) NOT NULL,
  `remark` varchar(300) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `reg_number`, `name`, `email`, `date`, `time_slot`, `dr_id`, `cause`, `remark`, `status`) VALUES
(117, '2020CSC038', 'PDCC Ranathunga', 'chamith.chanuka23@gmail.com', '2023-11-18', '09:00:00.000000', 20, '', '', ''),
(118, '2020CSC038', 'PDCC Ranathunga', 'chamith.chanuka23@gmail.com', '2023-11-18', '10:20:00.000000', 20, '', '', ''),
(119, '2020CSC038', 'PDCC Ranathunga', 'chamith.chanuka23@gmail.com', '2023-11-18', '12:40:00.000000', 20, '', '', ''),
(120, '2020CSC038', 'PDCC Ranathunga', 'chamith.chanuka23@gmail.com', '2023-11-18', '12:30:00.000000', 21, '', '', ''),
(121, '2020CSC038', 'PDCC Ranathunga', 'chamith.chanuka23@gmail.com', '2023-11-18', '12:10:00.000000', 21, '', '', ''),
(122, '2020CSC038', 'PDCC Ranathunga', 'chamith.chanuka23@gmail.com', '2023-11-18', '12:50:00.000000', 21, '', '', ''),
(123, '2020CSC038', 'PDCC Ranathunga', 'chamith.chanuka23@gmail.com', '2023-11-10', '12:30:00.000000', 20, '', '', ''),
(124, '2020CSC038', 'PDCC Ranathunga', 'chamith.chanuka23@gmail.com', '2023-11-10', '12:10:00.000000', 21, '', '', ''),
(125, '2020CSC078', 'K.N.O.Hettige', 'nigeehettige20@gmail.com', '2023-11-10', '13:30:00.000000', 20, '', '', ''),
(126, '2020CSC078', 'K.N.O.Hettige', 'nigeehettige20@gmail.com', '2023-11-10', '14:00:00.000000', 21, '', '', ''),
(127, '2020CSC078', 'K.N.O.Hettige', 'nigeehettige20@gmail.com', '2023-11-10', '11:50:00.000000', 21, '', '', ''),
(128, '2020CSC078', 'K.N.O.Hettige', 'nigeehettige20@gmail.com', '2023-11-11', '13:20:00.000000', 20, '', '', ''),
(129, '2020CSC078', 'K.N.O.Hettige', 'nigeehettige20@gmail.com', '2023-11-11', '14:50:00.000000', 20, '', '', ''),
(130, '2020CSC078', 'K.N.O.Hettige', 'nigeehettige20@gmail.com', '2023-11-11', '14:00:00.000000', 21, '', '', ''),
(131, '2020CSC008', 'DHCP Maduranga', 'channa90@gmail.com', '2023-11-10', '13:20:00.000000', 20, '', '', ''),
(132, '2020CSC008', 'DHCP Maduranga', 'channa90@gmail.com', '2023-11-17', '13:30:00.000000', 20, '', '', ''),
(133, '2020CSC008', 'DHCP Maduranga', 'channa90@gmail.com', '2023-11-17', '12:40:00.000000', 21, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `dr_id` int(11) NOT NULL,
  `dr_name` varchar(100) NOT NULL,
  `hospital` varchar(30) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT 'newDoctor1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`dr_id`, `dr_name`, `hospital`, `nic`, `contact_no`, `address`, `email`, `gender`, `password`) VALUES
(20, 'J. Srikandarajah', 'Medical Center', '196632822435', 769090987, 'Jaffna', 'srikandarajah66@gmail.com', 'Female', '$2y$10$QCYYeXwXWhOWBr6yuN15AOFlAm18SuCKlUizBhjnuHiylUbaj0KCu'),
(21, 'J. Lawrence', 'Medical Center', '197535173935', 766545782, 'Jaffna', 'lawrence75@gmail.com', 'Male', '$2y$10$QCYYeXwXWhOWBr6yuN15AOFlAm18SuCKlUizBhjnuHiylUbaj0KCu');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`reg_number`, `full_name`, `name_with_initials`, `gender`, `dob`, `mobile_number`, `email`, `residential_address`, `permenent_address`, `nic`, `martial_status`, `faculty`, `department`, `height`, `weight`, `gardian_name`, `relation`, `contact_number`, `password`, `blood_group`, `last_school_attend`, `profile_photo`) VALUES
('2020CSC078', 'Nigee Odara Hettige', 'K.N.O.Hettige', 'Female', '2000-08-15', 769220242, 'nigeehettige20@gmail.com', 'gampaha', 'gampaha', '200072800322', 'Unmarried', 'Faculty of Science', 'Department of Computer Science', 5.2, 65, 'KIN Hettige', 'Father', 769220242, '$2y$10$I4FvFSLX6S/dhzr3iwzLP.QYGsfHJphND27hi2d.0.BX1iVU7YXu6', 'B+', 'Devi Balika Vidyalaya', '../uploads/2020CSC078.jpg'),
('2020CSC038', 'Chamith Chanuka', 'PDCC Ranathunga', 'Male', '2000-04-23', 769220242, 'chamith.chanuka23@gmail.com', 'gampaha', 'gampaha', '200011401487', 'Unmarried', 'Science', 'Computer Science', 6.2, 65, 'PDP Ranathunga', 'Father', 769220242, '$2y$10$T3SzUqHjaxCQU9tp2kRV2eMuXRfrbVuf4vOT3QiyH4Y1LBMZLB6Ae', 'B+', 'Presidents College Minuwangoda', '../uploads/2020CSC038.jpg'),
('2020CSC008', 'Channa Maduranga', 'DHCP Maduranga', 'Male', '2000-03-30', 768989566, 'channa90@gmail.com', 'Mathugama', 'Mathugama', '200011408767', 'Single', 'Science', 'Computer Science', 6, 60, 'Channa Perera', 'Father', 728976213, '$2y$10$fZMW8rljmm5hFX4I7FBnWubIeR10EuePrg6EMre2pZjKu7JplR03O', 'A+', 'Mathugama Central College', '../uploads/2020CSC008.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `dr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
