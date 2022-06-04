-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 01:17 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `note-book-b11`
--

-- --------------------------------------------------------

--
-- Table structure for table `nb_notes`
--

CREATE TABLE `nb_notes` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `nt_addeddate` datetime NOT NULL,
  `nt_title` text NOT NULL,
  `nt_description` longtext NOT NULL,
  `nt_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nb_notes`
--

INSERT INTO `nb_notes` (`ID`, `user_ID`, `nt_addeddate`, `nt_title`, `nt_description`, `nt_status`) VALUES
(2, 1, '2022-05-30 17:07:07', 'Meeting with client ', 'meeting with client ............', 'active'),
(3, 4, '2022-05-30 17:22:07', 'Dokan Baki', 'Dim-60\r\ndal - 80\r\nchal - 300', 'active'),
(4, 4, '2022-06-01 16:31:17', 'Meeting with client ', 'At 6:42 (01/06/2022)', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `nb_users`
--

CREATE TABLE `nb_users` (
  `ID` int(11) NOT NULL,
  `user_addeddate` datetime NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nb_users`
--

INSERT INTO `nb_users` (`ID`, `user_addeddate`, `user_name`, `user_email`, `user_password`, `user_status`) VALUES
(1, '2022-05-28 17:28:23', 'tarik', 'tarik@jessoreit.net', '827ccb0eea8a706c4c34a16891f84e7b', 'active'),
(4, '2022-05-28 17:37:50', 'romeo', 'romeo@juliat.com', '827ccb0eea8a706c4c34a16891f84e7b', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nb_notes`
--
ALTER TABLE `nb_notes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nb_users`
--
ALTER TABLE `nb_users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nb_notes`
--
ALTER TABLE `nb_notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nb_users`
--
ALTER TABLE `nb_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
