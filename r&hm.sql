-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 05:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurants_and_hotel_job_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `ID` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `admin_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `admin_email`, `admin_password`, `admin_username`, `first_name`, `last_name`, `admin_type`) VALUES
(1, 'abc@gmail.com', '12345', 'abc', 'ab', 'bc', '1'),
(2, 'cde@gmail.com', '12345', 'cdef', 'cd', 'de', '2'),
(4, 'xyz@gmail.com', '987654', 'xyz', 'xy', 'yz', '2'),
(8, 'efg@gmail.com', '01234', 'efg', 'ef', 'fg', '1'),
(9, 'karim@gmail.com', '01234', 'karim', 'karim', 'amin', '2');

-- --------------------------------------------------------

--
-- Table structure for table `admin_type`
--

CREATE TABLE `admin_type` (
  `ID` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_type`
--

INSERT INTO `admin_type` (`ID`, `type`) VALUES
('1', 'Super Admin'),
('2', 'Customar Admin');

-- --------------------------------------------------------

--
-- Table structure for table `all_jobs`
--

CREATE TABLE `all_jobs` (
  `job_id` int(11) NOT NULL,
  `customer_email` varchar(111) NOT NULL,
  `job_title` varchar(111) NOT NULL,
  `job_description` varchar(111) NOT NULL,
  `country` varchar(111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `city` varchar(111) NOT NULL,
  `keyword` varchar(111) NOT NULL,
  `category` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_jobs`
--

INSERT INTO `all_jobs` (`job_id`, `customer_email`, `job_title`, `job_description`, `country`, `state`, `city`, `keyword`, `category`) VALUES
(1, 'abc@gmail.com', 'Chef', 'pastry', 'Bangladesh ', 'Dhaka', 'Dhaka', 'chef', '10'),
(2, 'cde@gmail.com	', 'manager', 'general manager', 'Bangladesh', 'Noakhali', 'Noakhali', 'manager', '13'),
(4, 'efg@gmail.com', 'chef', 'pasta chef', 'Azerbaijan ', 'Haciqabul', 'Mugan', 'chef', '10'),
(5, 'cde@gmail.com', 'chef', 'stake chef', 'Belgium ', 'Flanders', 'Beerse', 'chef', '10'),
(6, 'abc@gmail.com', 'cleaner', 'dishwasher', 'Bahrain ', 'Southern Governorate', 'Dar Kulayb', 'cleaner', '14'),
(8, 'abc@gmail.com', 'Main Manager', 'Boss of all Manager', 'Bangladesh ', 'Chittagong', 'Raipur', 'manager', '13'),
(9, 'cde@gmail.com', 'chef', 'chef', 'Bangladesh ', 'Dhaka', 'Dhaka', 'c', '10');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_ID` int(11) NOT NULL,
  `company_name` varchar(111) NOT NULL,
  `company_description` varchar(111) NOT NULL,
  `company_admin` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_ID`, `company_name`, `company_description`, `company_admin`) VALUES
(1, 'abcd', 'hotel', 'cde@gmail.com'),
(9, 'hijk', 'restaurant ', 'xyz@gmail.com'),
(10, 'KFC', 'kuddus Fried chicken', 'karim@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `jobseeker_id` int(11) NOT NULL,
  `jobseeker_email` varchar(111) NOT NULL,
  `jobseeker_password` varchar(111) NOT NULL,
  `jobseeker_first_name` varchar(111) NOT NULL,
  `jobseeker_last_name` varchar(111) NOT NULL,
  `jobseeker_dob` date NOT NULL,
  `jobseeker_mobile_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`jobseeker_id`, `jobseeker_email`, `jobseeker_password`, `jobseeker_first_name`, `jobseeker_last_name`, `jobseeker_dob`, `jobseeker_mobile_number`) VALUES
(1, 'max@gmail.com', '0123', 'ma', 'ax', '2012-05-01', '01521562457'),
(3, 'karim@gmail.com', '0125', 'karim', 'ali', '2022-05-04', '01256487234'),
(4, 'Maruf@gmail.com', '1', 'Maruf', 'Rahman', '2000-12-01', '01521562457'),
(5, 'cde@gmail.com\r\n', '1', 'min', 'max', '2022-05-01', '01521562457'),
(6, 'xyz@gmail.com', '0123', 'xy', 'yz', '2015-02-18', '01254595751'),
(7, 'f@gmail.com', '1', 'Farhana', 'Hossain', '2022-05-20', '01735530772'),
(8, 'mx@gmail.com', '1', 'mx', 'xy', '2022-05-17', '01735530772');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE `job_apply` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `dob` date NOT NULL,
  `file` varchar(111) NOT NULL,
  `job_id` int(11) NOT NULL,
  `jobseeker` varchar(111) NOT NULL,
  `mobile_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_apply`
--

INSERT INTO `job_apply` (`ID`, `first_name`, `last_name`, `dob`, `file`, `job_id`, `jobseeker`, `mobile_number`) VALUES
(2, 'maruf', 'rahman', '2022-05-10', '', 6, 'cde@gmail.com', 0),
(3, 'max', 'min', '2022-05-03', '', 5, 'cde@gmail.com', 1523572684),
(5, 'Maruf', 'Rahman', '2022-03-09', 'Assignment03.pdf', 1, 'Maruf@gmail.com', 1521562457),
(6, 'karim', 'ali', '2019-07-17', '12-Greedy-MST(1).pdf', 2, 'karim@gmail.com', 1423579451),
(7, 'xy', 'yz', '2022-05-13', 'HW-2.pdf', 2, 'xyz@gmail.com', 1256574296),
(8, 'Farhana', 'Hossain', '2022-05-12', 'dbms project (1).pptx', 2, 'f@gmail.com', 174968465),
(9, '', '', '0000-00-00', 'dbms project (1).pptx', 5, 'f@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(11) NOT NULL,
  `category` varchar(111) NOT NULL,
  `description` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `category`, `description`) VALUES
(10, 'Chef', 'pasta chef'),
(13, 'Manager', 'Who manage every thing'),
(14, 'Part Time ', 'part time worker'),
(15, 'Others', 'Worker,Delivery boy\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(111) NOT NULL,
  `file` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `dob` date NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `email` varchar(111) NOT NULL,
  `user_email` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `file`, `name`, `dob`, `mobile_number`, `email`, `user_email`) VALUES
(10, 'original.jpg', 'MARUF UR RAHMAN', '2022-05-09', '01254265785', 'maruf@gmail.com', 'Maruf@gmail.com'),
(11, 'o.jpg', 'Farhana Hossain', '0000-00-00', '01735530772', 'f@gmail.com', 'f@gmail.com'),
(12, '', 'Farhana Hossain', '2022-05-19', '01735530772', 'f@gmail.com', 'xyz@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_type`
--
ALTER TABLE `admin_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `all_jobs`
--
ALTER TABLE `all_jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_ID`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`jobseeker_id`);

--
-- Indexes for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `all_jobs`
--
ALTER TABLE `all_jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `jobseeker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
