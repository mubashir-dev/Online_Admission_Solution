-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 08:28 PM
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
(1, 885, 'Bise Abbottabad', 775, 'Bise Abbottabad'),
(2, 655, 'Matric Board Karachi', 775, 'Secondary Board Karachi'),
(3, 975, 'Bise Abbottabad', 1001, 'Bise Abbottabad'),
(4, 775, 'Bise Abbottabad', 775, 'Bise Abbottabad'),
(5, 885, 'Bise Lahore', 690, 'Bise Lahore'),
(16, 777, 'Fbise Islamabad', 800, 'Bise Rawalpindi');

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
(1, 'Kpk', 'Abbottabad', 'Kpk', '4512', 'Strreet No # 8 Cantt Abbottabad'),
(2, 'Sindh', 'Hydraabad', 'Sindh', '4522', 'E-Sector 45 Latifabad Hydrabad'),
(3, 'Kpk', 'Abbottabad', 'Kpk', '157', 'Link Road Narrian Abbottabad'),
(4, 'Kpk', 'Abbottabad', 'Kpk', '25', 'JinnahAbad Mandian Abbottabad'),
(5, 'Punjab', 'Lahore', 'Punjab', '125', 'Zaman Park East Lahore'),
(16, 'Punjab', 'Lahore', 'Punjab', '41-East ', 'Sector : 14 E DHA Lahore');

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
(1, 'BS Mlt', 'MLT', 'BS English', 'English'),
(2, 'BS Mathematics', 'Mathematics', 'BS Micobiology', 'Micobiology'),
(3, 'BS Mathematics', 'Mathematics', 'BS Mlt', 'MLT'),
(4, 'BS Software Engineering', 'Information Technology', 'BS English', 'English'),
(5, 'BS Micobiology', 'Micobiology', 'BS Mlt', 'MLT'),
(16, 'BS Mlt', 'MLT', 'BS Micobiology', 'Micobiology');

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
(5, 'ImranKahnPm', 'Emran_KhanPTI@outlook.com', '4747', 0, 'user'),
(15, 'Ablees_Shittan', 'Ablees_Shittan@shittan_network.com', '4545', 0, 'user'),
(16, 'Abdullah_Sultan414', 'Abdullah@gmail.com', '7878', 0, 'user');

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
(1, 'Omer ', 'Shakeel', 'Muhammad Shakeel', 22, 'Male', '2018-09-08', '../Images/Users_Images/-30135b92de0f19fc6-Omer -Dummy_one.jpg', '09223645178'),
(2, 'Omer ', 'Abdullah', 'Abdual Qudoos', 22, 'Male', '2018-09-08', '../Images/Users_Images/-236405b92dd03f1cbb-Omer -khan_PM.jpg', '09924512369'),
(3, 'Asad ', 'Ali', 'Muzaffar Ali', 21, 'Male', '2018-09-08', '../Images/Users_Images/-74505b92e3df2b18a-Asad -IMG-20180726-WA0003.jpg', '09223614251'),
(4, 'Amjad', 'Abbasi', 'Muhammad Dildar', 22, 'Male', '2018-09-08', '../Images/Users_Images/-46725b92e769557dd-Amjad-IMG-20180524-WA0002.jpg', '09224525123'),
(5, 'Imran ', 'Khan', 'Muhammad Shamzam Khan Naizi', 22, 'Male', '2018-09-08', '../Images/Users_Images/-145155b92e6b8e4f2a-Imran -khan_PM.jpg', '09224512365'),
(16, 'Abdullah ', 'Sultan', 'Sultan ban Yaqoob', 22, 'Male', '2018-09-14', '../Images/Users_Images/-169915b9acb9b6f94e-Abdullah -Dummy_one.jpg', '123456972');

-- --------------------------------------------------------

--
-- Table structure for table `query_write_users`
--

CREATE TABLE `query_write_users` (
  `reg_id` int(11) NOT NULL,
  `Query_Type` varchar(250) NOT NULL,
  `Qurey_Statement` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query_write_users`
--

INSERT INTO `query_write_users` (`reg_id`, `Query_Type`, `Qurey_Statement`, `status`, `date`) VALUES
(1, 'IT', 'gfhgfhgfh', 0, '0000-00-00 00:00:00'),
(1, 'Password Recovery', 'gkgkkghk', 0, '0000-00-00 00:00:00'),
(1, 'Gernerting Test Slip', 'I have facing issues related to generating entry test slip i have been try multiple  and not succeeded  kindly resolve my issue !\nThank You!', 0, '0000-00-00 00:00:00'),
(1, 'IT', 'vchgdfgh', 0, '0000-00-00 00:00:00'),
(1, 'Admission Process', 'dffa', 0, '0000-00-00 00:00:00'),
(1, 'IT', 'dfasfd', 0, '0000-00-00 00:00:00'),
(1, 'Gernerting Test Slip', 'fdgdfgdfsgds', 0, '0000-00-00 00:00:00'),
(1, 'IT', 'dsfasdf', 0, '0000-00-00 00:00:00'),
(1, 'Password Recovery', 'dsafsdfsdf', 0, '0000-00-00 00:00:00'),
(1, 'IT', 'fsdfsdfs', 0, '0000-00-00 00:00:00'),
(1, 'Admission Process', 'sfsdsdfsdf', 0, '0000-00-00 00:00:00'),
(1, 'IT', 'afasfa', 0, '0000-00-00 00:00:00');

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
-- Indexes for table `query_write_users`
--
ALTER TABLE `query_write_users`
  ADD KEY `reg_id` (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_details`
--
ALTER TABLE `academic_details`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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

--
-- Constraints for table `query_write_users`
--
ALTER TABLE `query_write_users`
  ADD CONSTRAINT `query_write_users_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `log_in` (`reg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
