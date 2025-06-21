-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2025 at 01:50 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_general_ci,
  `phone` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `phone`, `status`, `create_date`, `last_login`) VALUES
(12, 'ali', 'ali@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 0, '2025-06-17 18:27:26', '0000-00-00 00:00:00'),
(25, 'taha', 'taha@test.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 0, '2025-06-19 13:27:43', '0000-00-00 00:00:00'),
(17, 'ahmad', 'ahmad@gmail.com', '1234567', NULL, 0, '2025-06-17 21:30:23', '0000-00-00 00:00:00'),
(18, 'mmd', 'mmd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 0, '2025-06-18 16:39:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_task`
--

DROP TABLE IF EXISTS `user_task`;
CREATE TABLE IF NOT EXISTS `user_task` (
  `task_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `task_tittle` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `task_check` tinyint(1) DEFAULT NULL,
  `crate_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dead_line` datetime NOT NULL,
  `task_urgent` tinyint(1) NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
