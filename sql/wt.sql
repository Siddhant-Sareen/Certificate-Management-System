-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 01:30 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `first_name`, `last_name`, `image`, `phone`) VALUES
(1, 'admin', 'admin', 'siddhant', 'sareen', 'images\\sid.jpg', '8171478888');

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `day1` varchar(250) NOT NULL,
  `day2` varchar(250) NOT NULL,
  `certificate_category` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reg_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`id`, `name`, `number`, `day1`, `day2`, `certificate_category`, `email`, `reg_id`) VALUES
(1, 'isiw', '9999999999', '2018-05-26', '2018-05-18', '', '', ''),
(2, 'dnwejd', '4844844326', '26/06/2018', '26/06/2018', '', '', ''),
(4, 'a', '1111111111', '27/06/2018', '20/06/2018', 'Agreement_Letter', 'a@b.com', 'WTINC-84545'),
(7, 'a', '1111111111', '27/06/2018', '20/06/2018', 'Agreement_Letter', 'e@f.com', 'WTINC-84545');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `job_title` varchar(250) NOT NULL,
  `appointing_officer` varchar(250) NOT NULL,
  `officer_designation` varchar(250) NOT NULL,
  `place_of_posting` varchar(250) NOT NULL,
  `work1` varchar(250) NOT NULL,
  `work2` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `reg_id` varchar(250) NOT NULL,
  `salary` varchar(250) NOT NULL,
  `date_of_printing` varchar(250) NOT NULL,
  `certificate_category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `name`, `address`, `email`, `number`, `job_title`, `appointing_officer`, `officer_designation`, `place_of_posting`, `work1`, `work2`, `date`, `reg_id`, `salary`, `date_of_printing`, `certificate_category`) VALUES
(4, 'srijan', 'gghkguhk', 'srijan@gmail.com', '9999999999', '2', '2', '2', '1', '01:59', '17:02', '15/05/2018', '', '6666', '31-05-2018', ''),
(5, 'iswi', 'hkhijh', 'ishu@gmail.com', '9759352721', '3', '3', '3', '2', '01:08', '15:05', '25/06/2018', '', '7777', '01-06-2018', ''),
(12, 'a', 'meerut', 'a@b.com', '1111111111', '1', '2', '1', '2', '01:02', '02:01', '12-02-15', 'WTINC-45678', '54654', '02-02-18', 'Appointment_letter'),
(13, 'riya', 'ughku', 'riya@gmail.com', '7665443333', '1', '1', '1', '2', '02:04', '15:04', '11/06/2018', 'WTINC-9437232', '676655', '02-06-2018', ''),
(15, 'vedika saxena', 'gkuhhi', 'vedika@gmail.com', '9878766555', '3', '1', '2', '2', '16:05', '03:07', '18/06/2018', 'WTINC-4674713', '76555', '02-06-2018', ''),
(17, 'shalu', 'chennai', 'shalu@gmail.com', '9759352721', '2', '3', '2', '2', '03:04', '04:04', '18/06/2018', 'WTINC-6263874', '45454454', '09-06-2018', ''),
(18, 'shweta', 'delhi', 'shweta@gmail.com', '9999999999', '2', '3', '2', '2', '03:04', '04:07', '19/06/2018', 'WTINC-7507981', '677888', '04-06-2018', ''),
(20, 'arya', 'hgukh', 'arya@gmail.com', '8765444565', '2', '2', '2', '1', '04:05', '16:05', '19/06/2018', 'WTINC-6345673', '7888', '04-06-2018', ''),
(21, 'sidddhant', 'meerut', 'user@user.com', '7878787878', '3', '3', '1', '2', '02:01', '14:01', '26/06/2018', 'WTINC-5914462', '4653513', '23-06-2018', 'Appointing_Letter');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `number` varchar(10) NOT NULL,
  `position_of_responsibility` varchar(250) NOT NULL,
  `time_period_from` varchar(250) NOT NULL,
  `time_period_to` varchar(250) NOT NULL,
  `duration` varchar(250) NOT NULL,
  `salary` varchar(250) NOT NULL,
  `date_of_printing` varchar(250) NOT NULL,
  `certificate_category` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reg_id` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `name`, `number`, `position_of_responsibility`, `time_period_from`, `time_period_to`, `duration`, `salary`, `date_of_printing`, `certificate_category`, `email`, `reg_id`) VALUES
(1, 'Vedika Saxena', '', 'Second', '2018-05-01', '2018-05-01', '1 day', '2000000', '26-05-2018', '', '', ''),
(2, 'hdvkkd', '', 'Second', '20/06/2018', '24/06/2018', 'jkdjd', '555', '04-06-2018', '', '', ''),
(3, 'a', '1111111111', '5', '26/06/2018', '11/06/2018', 'hikhi', '87666', '04-06-2018', 'Experience_Letter', 'a@b.com', 'WTINC-544646'),
(13, 'a', '1111111111', '7', '26/06/2018', '11/06/2018', 'hikhi', '87666', '04-06-2018', 'Experience_Letter', 'e@f.com', 'WTINC-544646'),
(9, 'a', '1111111111', '2', '26/06/2018', '11/06/2018', 'hikhi', '87666', '04-06-2018', 'Experience_Letter', 'g@h.com', 'WTINC-544646');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `number` varchar(10) NOT NULL,
  `college` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `work1` varchar(250) NOT NULL,
  `work2` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `training_officer` varchar(250) NOT NULL,
  `department_of_work` varchar(250) NOT NULL,
  `certificate_category` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reg_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `name`, `branch`, `number`, `college`, `city`, `work1`, `work2`, `date`, `training_officer`, `department_of_work`, `certificate_category`, `email`, `reg_id`) VALUES
(2, '', '0', '', '', '', '', '', '', '0', '0', 'Internship_Letter', '', ''),
(3, '', '0', '', '', '', '', '', '', '0', '0', 'Internship_Letter', '', ''),
(7, 'b', '1', '8787878787', 'sdccdc', 'sdedfwe', '02-02-02', '03-03-03', '12-03-2018', '1', '2', 'Internship_Letter', 'e@f.com', 'WTINC-41651'),
(10, 'b', '05', '8787878787', 'sdccdc', 'sdedfwe', '02-02-02', '03-03-03', '12-03-2018', '1', '2', 'Internship_Letter', 'a@b.com', 'WTINC-41651');

-- --------------------------------------------------------

--
-- Table structure for table `relieving`
--

CREATE TABLE `relieving` (
  `id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `number` varchar(10) NOT NULL,
  `time_period_from` varchar(250) NOT NULL,
  `time_period_to` varchar(250) NOT NULL,
  `date_of_printing` varchar(250) NOT NULL,
  `certificate_category` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reg_id` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relieving`
--

INSERT INTO `relieving` (`id`, `name`, `number`, `time_period_from`, `time_period_to`, `date_of_printing`, `certificate_category`, `email`, `reg_id`) VALUES
(2, 'a', '1111111111', '02-01-1998', '02-12-1998', '12-12-2018', 'Relieving_Certificate', 'a@b.com', 'WTINC-465465'),
(3, 'a', '7878787878', '02-01-1998', '10-02-1998', '12-12-2018', 'Relieving_Certificate', 'fg@gmail.com', 'WTINC-655464'),
(5, 'a', '7878787878', '02-01-1998', '10-02-1998', '12-12-2018', 'Relieving_Certificate', 'fg@gmail.com', 'WTINC-655464'),
(6, 'a', '7878787878', '02-01-1998', '10-02-1998', '12-12-2018', 'Relieving_Certificate', 'b@c.com', 'WTINC-655464');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `job_title` varchar(250) NOT NULL,
  `date_of_joining` varchar(250) NOT NULL,
  `gross_salary` varchar(250) NOT NULL,
  `net_pay` varchar(250) NOT NULL,
  `reg_id` varchar(250) NOT NULL,
  `date_of_printing` varchar(250) NOT NULL,
  `certificate_category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `name`, `f_name`, `email`, `number`, `job_title`, `date_of_joining`, `gross_salary`, `net_pay`, `reg_id`, `date_of_printing`, `certificate_category`) VALUES
(2, 'sdjnk', 'bdhweb', 'wdmn@kjn.in', '5484848484', '2', '28/06/2018', '45454', '415454', 'WTINC-10958', '05-06-2018', 'Salary Certificate'),
(3, 'a', 'wdcwdc', 'a@b.com', '1111111111', '2', '02-2-1998', '513513', '21122', 'WTINC-54651', '12-06-2018', 'Salary_Certificate'),
(9, 'a', 'wdcwdc', 'e@f.com', '1111111111', '4', '02-2-1998', '513513', '21122', 'WTINC-54651', '12-06-2018', 'Salary_Certificate');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `fname`, `lname`, `image`, `phone`) VALUES
(1, 'user@user.com', 'user', 'sid', 'sareen', 'images/in10.jpg', '8171478888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agreement`
--
ALTER TABLE `agreement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relieving`
--
ALTER TABLE `relieving`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `agreement`
--
ALTER TABLE `agreement`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `relieving`
--
ALTER TABLE `relieving`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
