-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 01:09 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_property`
--

CREATE TABLE `assign_property` (
  `id` int(11) NOT NULL,
  `fk_property_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `shift_details` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_property`
--

INSERT INTO `assign_property` (`id`, `fk_property_id`, `fk_user_id`, `shift_details`, `created_date`, `updated_date`) VALUES
(15, 8, 3, 'Night', '2023-08-22 15:10:12', '2023-08-22 15:10:12'),
(16, 8, 3, 'Day', '2023-08-22 15:10:43', '2023-08-22 15:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `status`, `created_date`, `updated_date`) VALUES
(6, 'Home', '', '2023-07-30 13:55:29', '2023-07-30 13:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `fk_cat_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_photo` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_mobile` varchar(14) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `fk_cat_id`, `p_name`, `p_photo`, `address`, `owner_name`, `owner_mobile`, `status`, `created_date`, `updated_date`) VALUES
(8, 6, 'Ratn', './resources/photo/479180fd40f92bc6ac2e0aa033b61bf0Cpvc-BRASS-FPT-ELBOW-90°.jpg', 'aa', 'a', '9945961125', 'Assigned', '2023-07-30 14:21:40', '2023-07-30 14:21:40'),
(9, 6, 'Mitali Home', './resources/photo/7e166bcae8d6967e5f675a390cbedc7bbrand-logo-after.jpeg', 'Shivaji nagar', 'Mitali Dalvi', '9945961126', NULL, '2023-08-01 14:41:34', '2023-08-01 14:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(150) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_type`, `phone`, `email`, `address`, `password`, `status`, `photo`, `created_date`, `updated_date`) VALUES
(2, 'Admin', 'Admin', '', 'admin@gmail.com', '', '12345', '', '', '2023-07-30 16:53:05', '2023-07-30 16:53:05'),
(3, 'Akash Akash', 'user', '09742526326', 'kasalkar16@gmail.com', 'kangrali kh', '12345', 'Approved', NULL, '2023-08-09 05:06:48', '2023-08-09 05:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `fk_property_id` int(11) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `v_name` varchar(255) NOT NULL,
  `v_address` varchar(500) NOT NULL,
  `purpose_of_visit` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `fk_user_id`, `fk_property_id`, `phone`, `v_name`, `v_address`, `purpose_of_visit`, `login_time`, `logout_time`, `created_date`, `updated_date`) VALUES
(4, 3, 8, '09742526326', 'Akash Kasalkar', 'home no 1076 jyoti nagar 1st cross', 'a', '2023-08-26 12:53:23', NULL, '2023-08-26 10:54:03', '2023-08-26 10:54:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_property`
--
ALTER TABLE `assign_property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_property_id` (`fk_property_id`),
  ADD KEY `fkk_user_id` (`fk_user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cat_id` (`fk_cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`fk_user_id`),
  ADD KEY `fk_p_id` (`fk_property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_property`
--
ALTER TABLE `assign_property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign_property`
--
ALTER TABLE `assign_property`
  ADD CONSTRAINT `fk_property_id` FOREIGN KEY (`fk_property_id`) REFERENCES `property` (`id`),
  ADD CONSTRAINT `fkk_user_id` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `fk_cat_id` FOREIGN KEY (`fk_cat_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `fk_p_id` FOREIGN KEY (`fk_property_id`) REFERENCES `property` (`id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
