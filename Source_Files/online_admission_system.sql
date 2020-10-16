-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 09:55 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_admission_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_details`
--

CREATE TABLE `academic_details` (
  `reg_id` int(11) NOT NULL,
  `ssc_marks` int(11) NOT NULL,
  `ssc_board` varchar(250) NOT NULL,
  `inter_marks` int(11) NOT NULL,
  `inter_board` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_details`
--

INSERT INTO `academic_details` (`reg_id`, `ssc_marks`, `ssc_board`, `inter_marks`, `inter_board`) VALUES
(1, 555, 'Fbise Islamabad', 555, 'Bise Rawalpindi'),
(5, 689, 'BISE Lahore', 666, 'BISE Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `reg_id` int(11) NOT NULL,
  `Province` varchar(250) NOT NULL,
  `City` varchar(250) NOT NULL,
  `Domicile` varchar(250) NOT NULL,
  `Housee_No` varchar(250) NOT NULL,
  `Street_Sector_etc` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`reg_id`, `Province`, `City`, `Domicile`, `Housee_No`, `Street_Sector_etc`) VALUES
(1, 'Balochistan', 'Quetta', 'Balochistan', '123', 'Sector v12'),
(4, 'Kpk', 'Haripur', 'Kpk', '45', 'Sector 12 # KTS Haripur'),
(5, 'Punjab', 'Lahore', 'Punjab', '125 ', 'Sector 11 Zaman Park Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `reg_id` int(11) NOT NULL,
  `option_one` varchar(250) NOT NULL,
  `Department_one` varchar(250) NOT NULL,
  `option_two` varchar(250) NOT NULL,
  `Department_two` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`reg_id`, `option_one`, `Department_one`, `option_two`, `Department_two`) VALUES
(1, 'BS Mathematics', 'Mathematics', 'BS English', 'English'),
(4, 'BS Computer Science', 'Information Technology', 'BS Micobiology', 'Micobiology'),
(5, 'BS Software Engineering', 'Information Technology', 'BS Micobiology', 'Micobiology');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `reg_id` int(11) NOT NULL,
  `Exam_rollo` varchar(250) NOT NULL,
  `Marks` int(11) NOT NULL,
  `Status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fee_payment`
--

CREATE TABLE `fee_payment` (
  `reg_id` int(11) NOT NULL,
  `bank_challan_no` varchar(250) NOT NULL,
  `fee_amount` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `reg_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `flag` int(11) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`reg_id`, `username`, `email`, `password`, `flag`, `type`) VALUES
(1, 'SardarBahi441', 'Hamid_Khan404@outlook.com', '2323', 0, 'user'),
(2, 'Umair_Khan', 'Umair_Khan123@gmail.com', '123', 0, 'user'),
(3, 'AsadAli_Chemical', 'asadali_sardar@outlook.com', '1414', 0, 'user'),
(4, 'Amjid_Srdar_4545', 'Umair_Khan123@gmail.com', '1212', 0, 'user'),
(5, 'ImranKahnPm', 'Emran_KhanPTI@outlook.com', '4747', 0, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `reg_id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `father_name` varchar(250) NOT NULL,
  `Age` int(150) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `photo_path` varchar(250) NOT NULL,
  `contact_no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`reg_id`, `first_name`, `last_name`, `father_name`, `Age`, `gender`, `DOB`, `photo_path`, `contact_no`) VALUES
(1, 'Omer ', 'Abdullah', 'Abdual Qudoos', 22, 'Male', '2018-09-02', '../Images/Users_Images/-68055b8ae25ddc557-Omer -18E1409937026.jpg', '22432423'),
(4, 'Amjad', 'Abbasi', 'Muhammad Dildar', 22, 'Male', '1995-06-13', '../Images/Users_Images/-27735b917cc14bd78-Amjad-Dummy_one.jpg', '452136987'),
(5, 'Imran ', 'Khan', 'Muhammad Shamzam Khan Naizi', 23, 'Male', '1994-03-03', '../Images/Users_Images/-107155b918b9069ac9-Imran -khan_PM.jpg', '0992364512');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_details`
--
ALTER TABLE `academic_details`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `fee_payment`
--
ALTER TABLE `fee_payment`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_details`
--
ALTER TABLE `academic_details`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_payment`
--
ALTER TABLE `fee_payment`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_details`
--
ALTER TABLE `academic_details`
  ADD CONSTRAINT `academic_details_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `log_in` (`reg_id`);

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `log_in` (`reg_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `log_in` (`reg_id`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `log_in` (`reg_id`);

--
-- Constraints for table `fee_payment`
--
ALTER TABLE `fee_payment`
  ADD CONSTRAINT `fee_payment_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `log_in` (`reg_id`);

--
-- Constraints for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD CONSTRAINT `personal_info_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `log_in` (`reg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
