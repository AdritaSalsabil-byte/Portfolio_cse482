-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 05:39 PM
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(60) NOT NULL,
  `name` varchar(700) NOT NULL,
  `email` varchar(800) NOT NULL,
  `comment` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Adrita', 'fffguu9@gmail.com', 'rrrr'),
(2, 'raka', 'fffguu@gmail.com', 'none'),
(3, 'raka', 'fffguu@gmail.com', 'none'),
(4, 'yoo', 'fffg@gmail.com', 'nai'),
(5, 'Tryana', 'tryanasworld@yahoo.com', 'none'),
(6, 'Raiyan', 'raiyan@gmail.com', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `skills` varchar(60) NOT NULL,
  `contact_no` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `collage` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `password`, `gender`, `skills`, `contact_no`, `email`, `collage`) VALUES
(1, '0', 'Salsa', '9876', 'female', 'Ruby', '6784', 'fffg@gmail.com', 'Govt. Science College, Dhaka'),
(2, 'jk', 'jkl', '3456', 'female', 'Android', '0987', 'fffguu@gmail.com', 'Holy Cross College, Dhaka'),
(3, 'Adrita', 'Salsa', '9876', 'female', 'Android', '2345', 'fffguu@gmail.com', 'Milestone College'),
(4, 'raka', 'hassan', '456', 'female', '', '0987', 'raka@gmail.com', 'Viqarunnisa Noon School & College'),
(5, 'Adrita', 'jkl', '567', 'female', 'Android', '123456', 'fffguu9@gmail.com', 'Ideal School and College, Dhaka'),
(6, 'Adrita', 'fffkk', '000', 'female', 'Android', '123456', 'jana@gmail.com', 'Holy Cross College, Dhaka'),
(7, '', 'kkkk', '888', 'female', 'Ruby', '4567', 'raka@gmail.com', 'Viqarunnisa Noon School & College'),
(8, 'jana', 'ss', 'sss', 'male', 'Android', 'sss', 'jana1@gmail.com', 'Select College'),
(9, 'raka', 'fff', '999', 'female', 'Ruby', 'jjj', 'fffguu@gmail.com', 'Select College'),
(10, 'raka', 'gg', '111', '', 'Android', 'ddd', 'fffguus@gmail.com', 'Select College'),
(11, '', 'kk', 'ff', '', '', 'ee', 'dd', 'Select College'),
(12, 'qq', 'qqq', 'qq', '', 'Android', 'qq', 'qq', 'Select College'),
(13, '', '', '', '', '', '', 'd', 'Select College'),
(14, '', 'd', 'd', '', '', 'd', 'd', 'Select College'),
(15, '', 'gg', 'ff', '', '', 'ff', 'ff', 'Select College');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
