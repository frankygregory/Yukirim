-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2016 at 03:07 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yukirim`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_type`
--

CREATE TABLE `m_type` (
  `type_id` int(1) NOT NULL,
  `type_name` varchar(15) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(10) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `user_id` int(10) NOT NULL,
  `role_id` int(1) NOT NULL,
  `type_id` int(1) NOT NULL,
  `username` varchar(15) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_fullname` varchar(30) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_telephone` varchar(15) DEFAULT NULL,
  `user_handphone` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `user_termsandconditions` bit(1) NOT NULL,
  `user_last_login_date` datetime DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(10) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`user_id`, `role_id`, `type_id`, `username`, `user_email`, `user_fullname`, `user_address`, `user_telephone`, `user_handphone`, `password`, `user_termsandconditions`, `user_last_login_date`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 1, 1, 'super_admin', 'aaa@gmail.com', 'PT. ABC', 'Gresik', '0341234567', '085678678678', '25d55ad283aa400af464c76d713c07ad', b'1', '2022-11-16 10:30:02', '2022-11-16 10:30:02', 0, '2022-11-16 10:30:02', 0),
(2, 1, 2, 'super_user', 'interisty@gmail.com', 'PT. Jaya Makmur', 'Gresik', '0341234567', '085678678678', '25f9e794323b453885f5181f1b624d0b', b'1', '2022-11-16 10:33:29', '2022-11-16 10:33:29', 0, '2022-11-16 10:33:29', 0),
(3, 1, 1, 'super_admin', 'interisty@gmail.com', 'PT. ABC', 'Gresik', '0341234567', '085678678678', '25d55ad283aa400af464c76d713c07ad', b'1', '2022-11-16 10:35:56', '2022-11-16 10:35:56', 0, '2022-11-16 10:35:56', 0),
(4, 2, 0, 'expedition01', 'expedition01@gmail.com', 'PT. Expedition Express', 'Surabaya', '0312345678', '085234123456', '25d55ad283aa400af464c76d713c07ad', b'1', '2023-11-16 07:04:07', '2023-11-16 07:04:07', 0, '2023-11-16 07:04:07', 0),
(5, 1, 1, 'user0123', 'user0123@gmail.com', 'PT. Jaya Makmur', 'Surabaya', '0341234567', '085678678678', '25d55ad283aa400af464c76d713c07ad', b'1', '2023-11-16 07:51:31', '2023-11-16 07:51:31', 0, '2023-11-16 07:51:31', 0),
(7, 1, 1, 'user0125', 'user0125@gmail.com', 'PT. Jaya Makmur', 'Surabaya', '0341234567', '085678678678', '25d55ad283aa400af464c76d713c07ad', b'1', '2023-11-16 07:57:25', '2023-11-16 07:57:25', 0, '2023-11-16 07:57:25', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_type`
--
ALTER TABLE `m_type`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `MTYPE_UN` (`type_name`),
  ADD KEY `MROLE_IDX` (`type_id`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `MUSER_UN` (`username`,`user_email`),
  ADD KEY `MUSER_IDX` (`user_id`,`role_id`,`type_id`,`username`,`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
