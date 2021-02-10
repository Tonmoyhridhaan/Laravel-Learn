-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 06:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sd_sec_a`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `dob` date NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `password`, `gender`, `is_active`, `dob`, `role`, `created_at`, `updated_at`) VALUES
(2, 'Tonmoy', 'tonmoybarua773@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, '2021-04-17', 'admin', '2021-02-06 17:12:05', '2021-02-09 03:55:43'),
(5, 'John', 'John@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', 1, '2000-02-04', 'teacher', '2021-02-07 08:30:26', '2021-02-09 04:33:03'),
(6, 'Melina', 'melina@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', 1, '1997-11-30', 'teacher', '2021-02-07 08:31:33', '2021-02-07 08:31:33'),
(7, 'Jack', 'jack@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 1, '2021-02-23', 'admin', '2021-02-07 08:33:31', '2021-02-07 08:33:31'),
(8, 'Emila', 'emila@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', 0, '1999-06-22', 'teacher', '2021-02-07 08:35:19', '2021-02-07 08:35:19'),
(9, 'Morris', 'moris@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 1, '2003-05-01', 'teacher', '2021-02-07 08:36:26', '2021-02-07 08:36:26'),
(11, 'Abid', 'abid@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 1, '2021-02-17', 'teacher', '2021-02-08 03:14:30', '2021-02-08 03:14:30'),
(12, 'Dominic', 'dom@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 1, '2021-02-02', 'teacher', '2021-02-08 17:48:30', '2021-02-08 19:03:55'),
(13, 'abc', 'abc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, '2021-02-08', 'teacher', '2021-02-09 03:25:23', '2021-02-09 03:54:13'),
(14, 'def', 'def@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, '2021-02-10', 'teacher', '2021-02-09 03:54:54', '2021-02-09 03:54:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
