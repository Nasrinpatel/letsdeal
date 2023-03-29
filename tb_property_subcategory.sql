-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 01:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letsdeal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_property_subcategory`
--

CREATE TABLE `tb_property_subcategory` (
  `id` int(11) NOT NULL,
  `property_category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_property_subcategory`
--

INSERT INTO `tb_property_subcategory` (`id`, `property_category_id`, `name`, `status`, `created_date`, `updated_date`) VALUES
(1, 3, 'Independent House/ Villa', 1, '2023-02-09 10:27:56', '2023-02-09 19:02:19'),
(2, 3, 'Apartment / Flat', 1, '2023-02-09 10:28:14', NULL),
(3, 3, 'Plot / Land', 1, '2023-02-09 10:28:36', NULL),
(4, 3, 'Farm House', 1, '2023-02-09 10:28:54', NULL),
(5, 4, 'Office', 1, '2023-02-09 10:30:29', '2023-02-09 10:30:50'),
(6, 4, 'Shop', 1, '2023-02-09 10:31:04', NULL),
(7, 4, 'Factory', 1, '2023-02-09 10:31:30', NULL),
(8, 4, 'Warehouse', 1, '2023-02-09 10:31:45', NULL),
(9, 4, 'Hotel/Resort', 1, '2023-02-09 10:32:00', NULL),
(10, 4, 'Restaurant', 1, '2023-02-09 10:32:14', '2023-02-10 06:36:40'),
(11, 4, 'Industrial Land', 1, '2023-02-09 10:32:31', NULL),
(12, 4, 'Commercial Land', 1, '2023-02-09 10:32:45', NULL),
(13, 5, 'Agriculture Land', 1, '2023-02-09 10:33:00', NULL),
(14, 5, 'Commercial Land', 1, '2023-02-09 10:33:14', NULL),
(15, 5, 'Residential Land', 1, '2023-02-09 10:33:29', NULL),
(16, 5, 'Non Agriculture land', 1, '2023-02-09 10:33:42', '2023-02-10 06:36:50'),
(18, 6, 'Apartment', 1, '2023-02-09 10:35:41', NULL),
(19, 6, 'Independent House Villa', 1, '2023-02-09 10:35:56', NULL),
(20, 6, 'Shop', 1, '2023-02-09 10:36:10', NULL),
(21, 6, 'Office', 1, '2023-02-09 10:36:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_property_subcategory`
--
ALTER TABLE `tb_property_subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_category_id` (`property_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_property_subcategory`
--
ALTER TABLE `tb_property_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_property_subcategory`
--
ALTER TABLE `tb_property_subcategory`
  ADD CONSTRAINT `tb_property_subcategory_ibfk_1` FOREIGN KEY (`property_category_id`) REFERENCES `tb_property_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
