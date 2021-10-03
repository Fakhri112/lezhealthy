-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 02:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_and_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`, `blog_name`) VALUES
(63, 0, 'hello world', 'Fakhrie', '2021-10-02 23:05:12', 'teh-cocktail'),
(64, 63, 'halo', 'Fakhrie', '2021-10-03 01:51:01', 'teh-cocktail'),
(65, 0, 'you are gay', 'Fakhrie', '2021-10-03 02:22:54', 'teh-cocktail'),
(66, 0, 'halo dunia', 'Fakhrie', '2021-10-03 07:33:46', 'teh-cocktail'),
(67, 0, '123', 'Fakhrie', '2021-10-03 08:49:39', 'teh-cocktail'),
(68, 0, 'halo', 'Fakhrie', '2021-10-03 09:22:37', 'teh-cocktail'),
(69, 68, 'halo semua', 'Fakhrie', '2021-10-03 09:22:51', 'teh-cocktail'),
(70, 68, 'j', 'Fakhrie', '2021-10-03 10:03:24', 'teh-cocktail'),
(71, 68, 'halo', 'Fakhrie', '2021-10-03 10:10:29', 'teh-cocktail'),
(72, 68, '1234567890', 'Fakhrie', '2021-10-03 10:10:58', 'teh-cocktail'),
(73, 68, 'kosong1', 'Fakhrie', '2021-10-03 10:14:23', 'teh-cocktail'),
(74, 67, '890', 'Fakhrie', '2021-10-03 10:26:05', 'teh-cocktail'),
(75, 0, 'hai', 'Fakhrie', '2021-10-03 12:37:39', 'teh-cocktail'),
(76, 75, 'hai juga', 'Fakhrie', '2021-10-03 12:38:04', 'teh-cocktail');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
