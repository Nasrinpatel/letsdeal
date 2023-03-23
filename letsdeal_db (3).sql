-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 10:14 AM
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
-- Table structure for table `source_category_master`
--

CREATE TABLE `source_category_master` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `source_category_master`
--

INSERT INTO `source_category_master` (`id`, `name`, `status`, `created_date`, `updated_date`) VALUES
(15, 'chk', 1, '2023-03-04 07:38:56', NULL),
(16, 'City', 1, '2023-03-04 09:40:21', NULL),
(17, 'Gender', 1, '2023-03-06 18:42:47', NULL),
(18, 'Numbers', 1, '2023-03-08 09:28:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `source_option_master`
--

CREATE TABLE `source_option_master` (
  `id` int(11) NOT NULL,
  `source_cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `source_option_master`
--

INSERT INTO `source_option_master` (`id`, `source_cat_id`, `name`, `created_date`, `updated_date`) VALUES
(2, 10, 'new', '2023-02-27 10:28:03', NULL),
(3, 14, 'State', '2023-02-27 10:33:28', NULL),
(4, 12, 'a', '2023-02-27 10:45:18', NULL),
(5, 12, 'b', '2023-02-27 10:45:19', NULL),
(20, 17, 'Male', '2023-03-06 18:42:47', NULL),
(21, 17, 'Female', '2023-03-06 18:42:47', NULL),
(22, 16, 'Vadodara', '2023-03-06 18:43:18', NULL),
(23, 16, 'Bharuch', '2023-03-06 18:43:18', NULL),
(24, 15, 'one', '2023-03-06 18:43:48', NULL),
(25, 15, 'two', '2023-03-06 18:43:48', NULL),
(32, 18, '1', '2023-03-08 09:29:20', NULL),
(33, 18, '2', '2023-03-08 09:29:20', NULL),
(34, 18, '3', '2023-03-08 09:29:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_contact_master`
--

CREATE TABLE `tbl_customer_contact_master` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `position_id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_contact_master`
--

INSERT INTO `tbl_customer_contact_master` (`id`, `customer_id`, `first_name`, `last_name`, `position_id`, `company_name`, `email`, `phone`, `description`, `status`, `created_date`, `updated_date`) VALUES
(2, 6, 'xyz', 'opq', 71, 'h', 'test@gmail.com', '09903214560', 'gf', 1, '2023-03-23 07:12:56', NULL),
(3, 6, 'dfg', 'gd', 71, 'dfg', 'test@gmail.com', 'fg', 'g', 1, '2023-03-23 07:15:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff_master`
--

CREATE TABLE `tbl_staff_master` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff_master`
--

INSERT INTO `tbl_staff_master` (`id`, `first_name`, `last_name`, `email`, `phone`, `status`, `created_date`, `updated_date`) VALUES
(2, 'fdg', 'fgh', 'gh', '', 1, '2023-03-22 16:11:50', '2023-03-23 06:27:06'),
(3, 'fida', 'v', 'fb@gmail.com', '7405474884', 1, '2023-03-23 08:41:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_assigned_master`
--

CREATE TABLE `tb_assigned_master` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_city_master`
--

CREATE TABLE `tb_city_master` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_city_master`
--

INSERT INTO `tb_city_master` (`id`, `name`, `state_id`, `status`, `created_date`) VALUES
(3, 'Bharuch', 5, 1, '2023-03-16 13:21:59'),
(5, 'Vadodara', 5, 1, '2023-03-16 15:34:06'),
(6, 'Mumbai', 8, 1, '2023-03-16 15:34:20'),
(7, 'Nagpur', 8, 1, '2023-03-16 15:34:38'),
(8, 'Rajkot', 5, 1, '2023-03-16 15:34:53'),
(9, 'Navsari', 5, 1, '2023-03-16 15:35:03'),
(10, 'Ahemdabad', 5, 1, '2023-03-16 15:35:16'),
(11, 'vapi', 5, 1, '2023-03-16 15:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_country_master`
--

CREATE TABLE `tb_country_master` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_country_master`
--

INSERT INTO `tb_country_master` (`id`, `name`, `status`, `created_date`) VALUES
(2, 'India', 1, '2023-03-16 09:08:28'),
(3, 'USA', 1, '2023-03-16 09:14:52'),
(4, 'Canada', 1, '2023-03-16 09:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer_master`
--

CREATE TABLE `tb_customer_master` (
  `id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  `assigned_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer_master`
--

INSERT INTO `tb_customer_master` (`id`, `source_id`, `assigned_id`, `position_id`, `first_name`, `last_name`, `phone`, `email`, `company_name`, `description`, `status`, `created_date`, `updated_date`) VALUES
(6, 1, 0, 71, 'new', 'test', '09903214560', 'nasupatel007@gmail.com', 'yhu', 'tgg', 1, '2023-03-22 17:41:34', '2023-03-23 06:29:30'),
(7, 1, 2, 71, 'xyz', 'opq', '09903214560', 'test@gmail.com', 'gh', 'ghj', 1, '2023-03-23 06:30:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_form_master`
--

CREATE TABLE `tb_form_master` (
  `id` int(11) NOT NULL,
  `master_id` int(11) NOT NULL,
  `category_ids` text NOT NULL,
  `sub_category_ids` text NOT NULL,
  `phase_id` int(11) NOT NULL,
  `question_ids` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_form_master`
--

INSERT INTO `tb_form_master` (`id`, `master_id`, `category_ids`, `sub_category_ids`, `phase_id`, `question_ids`, `status`, `created_date`, `updated_date`) VALUES
(10, 95, '4', '6,7', 1, '2,3,4,1', 1, '2023-02-21 20:06:21', NULL),
(21, 94, '3', '1', 1, '1,2,3,4,11,12', 1, '2023-03-08 09:10:27', NULL),
(22, 95, '3,4', '1,6', 2, '1,2', 1, '2023-03-09 06:25:56', NULL),
(23, 94, '3', '1', 1, '2,3', 1, '2023-03-09 11:07:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_master`
--

CREATE TABLE `tb_master` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_master`
--

INSERT INTO `tb_master` (`id`, `code`, `name`, `status`, `created_date`, `updated_date`) VALUES
(94, '001', 'Buy', 1, '2023-02-15 08:24:52', '2023-02-22 16:05:05'),
(95, '001', 'Sale', 1, '2023-02-15 08:24:52', '2023-02-15 11:02:00'),
(96, '003', 'Rent', 1, '2023-02-15 08:24:52', '2023-02-15 08:25:05'),
(97, '004', 'Lease', 1, '2023-02-15 08:24:52', '2023-02-15 08:25:05'),
(98, '005', 'Long Lease', 1, '2023-02-15 08:24:52', '2023-02-15 08:25:05'),
(99, '006', 'Bartter', 1, '2023-02-15 08:24:52', '2023-02-15 08:25:05'),
(100, '007', 'Auction', 1, '2023-02-15 08:24:52', '2023-02-15 11:03:18'),
(101, '008', 'PG/Co-living', 1, '2023-02-15 08:24:52', '2023-02-15 11:03:18'),
(102, '009', 'Co-working', 1, '2023-02-15 08:24:52', '2023-02-15 11:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_phase_master`
--

CREATE TABLE `tb_phase_master` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_phase_master`
--

INSERT INTO `tb_phase_master` (`id`, `name`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Phase one', 1, '2023-02-14 08:38:15', NULL),
(2, 'Phase two', 1, '2023-02-14 08:38:15', NULL),
(3, 'Phase three', 1, '2023-02-14 08:38:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_position_master`
--

CREATE TABLE `tb_position_master` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_position_master`
--

INSERT INTO `tb_position_master` (`id`, `name`, `status`, `created_date`) VALUES
(69, '', 1, '2023-03-12 17:04:22'),
(71, 'Admin', 1, '2023-03-16 15:23:24'),
(72, 'Family', 1, '2023-03-16 15:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_property_category`
--

CREATE TABLE `tb_property_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_property_category`
--

INSERT INTO `tb_property_category` (`id`, `name`, `status`, `created_date`, `updated_date`) VALUES
(3, 'Residence', 1, '2023-02-07 18:21:09', '2023-02-10 06:35:49'),
(4, 'Commercial', 1, '2023-02-13 10:03:26', '2023-02-20 07:22:59'),
(5, 'Land', 1, '2023-02-13 10:05:05', '2023-02-20 07:23:46'),
(6, 'New Project', 1, '2023-02-07 18:22:31', '2023-02-10 06:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_property_master`
--

CREATE TABLE `tb_property_master` (
  `id` int(11) NOT NULL,
  `pro_master_id` int(11) NOT NULL,
  `pro_category_id` int(11) NOT NULL,
  `pro_subcategory_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_property_master`
--

INSERT INTO `tb_property_master` (`id`, `pro_master_id`, `pro_category_id`, `pro_subcategory_id`, `status`, `created_date`, `updated_date`) VALUES
(1, 95, 3, 1, 1, '2023-03-08 17:11:34', NULL),
(2, 94, 3, 1, 1, '2023-03-08 17:18:08', NULL),
(3, 94, 3, 1, 1, '2023-03-08 17:29:55', NULL),
(4, 94, 3, 1, 1, '2023-03-08 17:38:36', NULL),
(5, 94, 3, 1, 1, '2023-03-08 18:09:17', NULL),
(6, 94, 3, 1, 1, '2023-03-09 05:57:55', NULL),
(7, 95, 4, 6, 1, '2023-03-09 06:14:14', NULL),
(8, 94, 3, 1, 1, '2023-03-09 07:26:30', NULL),
(9, 94, 3, 1, 1, '2023-03-09 07:28:55', NULL),
(10, 95, 4, 6, 1, '2023-03-09 10:31:52', NULL),
(11, 95, 4, 6, 1, '2023-03-09 10:32:37', NULL),
(12, 95, 4, 7, 1, '2023-03-13 06:56:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_property_question_answer`
--

CREATE TABLE `tb_property_question_answer` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `phase_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`answer_ids`)),
  `question` text NOT NULL,
  `answers` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`answers`)),
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_property_question_answer`
--

INSERT INTO `tb_property_question_answer` (`id`, `property_id`, `phase_id`, `question_id`, `answer_ids`, `question`, `answers`, `created_date`, `updated_date`) VALUES
(7, 3, 1, 1, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":true},{\"33\":false},{\"34\":false}]}', 'Question 1', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":true},{\"2\":false},{\"3\":false}]}', '2023-03-08 22:59:55', NULL),
(8, 3, 1, 2, '{\"answer_type\":\"Radio\",\"options\":[{\"22\":true},{\"23\":false}]}', 'Question 2', '{\"answer_type\":\"Radio\",\"options\":[{\"Vadodara\":true},{\"Bharuch\":false}]}', '2023-03-08 22:59:55', NULL),
(9, 3, 1, 3, '{\"answer_type\":\"Dropdown\",\"options\":[{\"20\":true},{\"21\":false}]}', 'Question 3', '{\"answer_type\":\"Dropdown\",\"options\":[{\"Male\":true},{\"Female\":false}]}', '2023-03-08 22:59:56', NULL),
(10, 3, 1, 4, '{\"answer_type\":\"Checkbox\",\"options\":[{\"22\":true},{\"23\":true}]}', 'Question 4', '{\"answer_type\":\"Checkbox\",\"options\":[{\"Vadodara\":true},{\"Bharuch\":true}]}', '2023-03-08 22:59:56', NULL),
(11, 3, 1, 11, '{\"answer_type\":\"Textarea\",\"options\":[{\"\":true}]}', 'Question 5', '{\"answer_type\":\"Textarea\",\"options\":[{\"\":true}]}', '2023-03-08 22:59:56', NULL),
(12, 3, 1, 12, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":true},{\"33\":false},{\"34\":false}]}', 'Question 6', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":true},{\"2\":false},{\"3\":false}]}', '2023-03-08 22:59:56', NULL),
(13, 4, 1, 1, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":true},{\"33\":false},{\"34\":false}]}', 'Question 1', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":true},{\"2\":false},{\"3\":false}]}', '2023-03-08 23:08:36', NULL),
(14, 4, 1, 2, '{\"answer_type\":\"Radio\",\"options\":[{\"22\":true},{\"23\":false}]}', 'Question 2', '{\"answer_type\":\"Radio\",\"options\":[{\"Vadodara\":true},{\"Bharuch\":false}]}', '2023-03-08 23:08:36', NULL),
(15, 4, 1, 3, '{\"answer_type\":\"Dropdown\",\"options\":[{\"20\":true},{\"21\":false}]}', 'Question 3', '{\"answer_type\":\"Dropdown\",\"options\":[{\"Male\":true},{\"Female\":false}]}', '2023-03-08 23:08:36', NULL),
(16, 4, 1, 4, '{\"answer_type\":\"Checkbox\",\"options\":[{\"22\":true},{\"23\":true}]}', 'Question 4', '{\"answer_type\":\"Checkbox\",\"options\":[{\"Vadodara\":true},{\"Bharuch\":true}]}', '2023-03-08 23:08:36', NULL),
(17, 4, 1, 11, '{\"answer_type\":\"Textarea\",\"options\":[{\"final test\":true}]}', 'Question 5', '{\"answer_type\":\"Textarea\",\"options\":[{\"final test\":true}]}', '2023-03-08 23:08:36', NULL),
(18, 4, 1, 12, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":false},{\"33\":true},{\"34\":false}]}', 'Question 6', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":false},{\"2\":true},{\"3\":false}]}', '2023-03-08 23:08:36', NULL),
(73, 1, 1, 1, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":false},{\"33\":true},{\"34\":false}]}', 'Question 1', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":false},{\"2\":true},{\"3\":false}]}', '2023-03-08 23:45:41', NULL),
(74, 1, 1, 2, '{\"answer_type\":\"Radio\",\"options\":[{\"22\":true},{\"23\":false}]}', 'Question 2', '{\"answer_type\":\"Radio\",\"options\":[{\"Vadodara\":true},{\"Bharuch\":false}]}', '2023-03-08 23:45:41', NULL),
(75, 1, 1, 3, '{\"answer_type\":\"Dropdown\",\"options\":[{\"20\":true},{\"21\":false}]}', 'Question 3', '{\"answer_type\":\"Dropdown\",\"options\":[{\"Male\":true},{\"Female\":false}]}', '2023-03-08 23:45:42', NULL),
(76, 1, 1, 4, '{\"answer_type\":\"Checkbox\",\"options\":[{\"22\":true},{\"23\":true}]}', 'Question 4', '{\"answer_type\":\"Checkbox\",\"options\":[{\"Vadodara\":true},{\"Bharuch\":true}]}', '2023-03-08 23:45:42', NULL),
(77, 1, 1, 11, '{\"answer_type\":\"Textarea\",\"options\":[{\"\":false}]}', 'Question 5', '{\"answer_type\":\"Textarea\",\"options\":[{\"\":false}]}', '2023-03-08 23:45:42', NULL),
(78, 1, 1, 12, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":false},{\"33\":false},{\"34\":true}]}', 'Question 6', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":false},{\"2\":false},{\"3\":true}]}', '2023-03-08 23:45:42', NULL),
(85, 5, 1, 1, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":false},{\"33\":false},{\"34\":true}]}', 'Question 1', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":false},{\"2\":false},{\"3\":true}]}', '2023-03-08 23:46:22', NULL),
(86, 5, 1, 2, '{\"answer_type\":\"Radio\",\"options\":[{\"22\":false},{\"23\":true}]}', 'Question 2', '{\"answer_type\":\"Radio\",\"options\":[{\"Vadodara\":false},{\"Bharuch\":true}]}', '2023-03-08 23:46:22', NULL),
(87, 5, 1, 3, '{\"answer_type\":\"Dropdown\",\"options\":[{\"20\":true},{\"21\":false}]}', 'Question 3', '{\"answer_type\":\"Dropdown\",\"options\":[{\"Male\":true},{\"Female\":false}]}', '2023-03-08 23:46:23', NULL),
(88, 5, 1, 4, '{\"answer_type\":\"Checkbox\",\"options\":[{\"22\":true},{\"23\":true}]}', 'Question 4', '{\"answer_type\":\"Checkbox\",\"options\":[{\"Vadodara\":true},{\"Bharuch\":true}]}', '2023-03-08 23:46:23', NULL),
(89, 5, 1, 11, '{\"answer_type\":\"Textarea\",\"options\":[{\"test\":false}]}', 'Question 5', '{\"answer_type\":\"Textarea\",\"options\":[{\"test\":false}]}', '2023-03-08 23:46:23', NULL),
(90, 5, 1, 12, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":true},{\"33\":false},{\"34\":false}]}', 'Question 6', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":true},{\"2\":false},{\"3\":false}]}', '2023-03-08 23:46:23', NULL),
(109, 6, 1, 1, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":true},{\"33\":false},{\"34\":false}]}', 'Question 1', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":true},{\"2\":false},{\"3\":false}]}', '2023-03-09 11:43:02', NULL),
(110, 6, 1, 2, '{\"answer_type\":\"Radio\",\"options\":[{\"22\":true},{\"23\":false}]}', 'Question 2', '{\"answer_type\":\"Radio\",\"options\":[{\"Vadodara\":true},{\"Bharuch\":false}]}', '2023-03-09 11:43:02', NULL),
(111, 6, 1, 3, '{\"answer_type\":\"Dropdown\",\"options\":[{\"20\":true},{\"21\":false}]}', 'Question 3', '{\"answer_type\":\"Dropdown\",\"options\":[{\"Male\":true},{\"Female\":false}]}', '2023-03-09 11:43:02', NULL),
(112, 6, 1, 4, '{\"answer_type\":\"Checkbox\",\"options\":[{\"22\":true},{\"23\":true}]}', 'Question 4', '{\"answer_type\":\"Checkbox\",\"options\":[{\"Vadodara\":true},{\"Bharuch\":true}]}', '2023-03-09 11:43:03', NULL),
(113, 6, 1, 11, '{\"answer_type\":\"Textarea\",\"options\":[{\"testing123\":true}]}', 'Question 5', '{\"answer_type\":\"Textarea\",\"options\":[{\"testing123\":true}]}', '2023-03-09 11:43:03', NULL),
(114, 6, 1, 12, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":false},{\"33\":false},{\"34\":true}]}', 'Question 6', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":false},{\"2\":false},{\"3\":true}]}', '2023-03-09 11:43:03', NULL),
(115, 7, 1, 1, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":false},{\"33\":false},{\"34\":false}]}', 'Question 1', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":false},{\"2\":false},{\"3\":false}]}', '2023-03-09 11:44:14', NULL),
(116, 7, 1, 2, '{\"answer_type\":\"Radio\",\"options\":[{\"22\":false},{\"23\":false}]}', 'Question 2', '{\"answer_type\":\"Radio\",\"options\":[{\"Vadodara\":false},{\"Bharuch\":false}]}', '2023-03-09 11:44:14', NULL),
(117, 7, 1, 3, '{\"answer_type\":\"Dropdown\",\"options\":[{\"20\":false},{\"21\":false}]}', 'Question 3', '{\"answer_type\":\"Dropdown\",\"options\":[{\"Male\":false},{\"Female\":false}]}', '2023-03-09 11:44:15', NULL),
(118, 7, 1, 4, '{\"answer_type\":\"Checkbox\",\"options\":[{\"22\":false},{\"23\":false}]}', 'Question 4', '{\"answer_type\":\"Checkbox\",\"options\":[{\"Vadodara\":false},{\"Bharuch\":false}]}', '2023-03-09 11:44:15', NULL),
(119, 9, 1, 1, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":false},{\"33\":false},{\"34\":false}]}', 'Question 1', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":false},{\"2\":false},{\"3\":false}]}', '2023-03-09 12:58:55', NULL),
(120, 9, 1, 2, '{\"answer_type\":\"Radio\",\"options\":[{\"22\":true},{\"23\":false}]}', 'Question 2', '{\"answer_type\":\"Radio\",\"options\":[{\"Vadodara\":true},{\"Bharuch\":false}]}', '2023-03-09 12:58:55', NULL),
(121, 9, 1, 3, '{\"answer_type\":\"Dropdown\",\"options\":[{\"20\":false},{\"21\":false}]}', 'Question 3', '{\"answer_type\":\"Dropdown\",\"options\":[{\"Male\":false},{\"Female\":false}]}', '2023-03-09 12:58:55', NULL),
(122, 9, 1, 4, '{\"answer_type\":\"Checkbox\",\"options\":[{\"22\":true},{\"23\":true}]}', 'Question 4', '{\"answer_type\":\"Checkbox\",\"options\":[{\"Vadodara\":true},{\"Bharuch\":true}]}', '2023-03-09 12:58:55', NULL),
(123, 9, 1, 11, '{\"answer_type\":\"Textarea\",\"options\":[{\"d\":true}]}', 'Question 5', '{\"answer_type\":\"Textarea\",\"options\":[{\"d\":true}]}', '2023-03-09 12:58:56', NULL),
(124, 9, 1, 12, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":false},{\"33\":false},{\"34\":false}]}', 'Question 6', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":false},{\"2\":false},{\"3\":false}]}', '2023-03-09 12:58:56', NULL),
(125, 10, 1, 1, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":false},{\"33\":false},{\"34\":false}]}', 'Question 1', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":false},{\"2\":false},{\"3\":false}]}', '2023-03-09 16:01:53', NULL),
(126, 10, 1, 2, '{\"answer_type\":\"Radio\",\"options\":[{\"22\":false},{\"23\":false}]}', 'Question 2', '{\"answer_type\":\"Radio\",\"options\":[{\"Vadodara\":false},{\"Bharuch\":false}]}', '2023-03-09 16:01:53', NULL),
(127, 10, 1, 3, '{\"answer_type\":\"Dropdown\",\"options\":[{\"20\":false},{\"21\":false}]}', 'Question 3', '{\"answer_type\":\"Dropdown\",\"options\":[{\"Male\":false},{\"Female\":false}]}', '2023-03-09 16:01:53', NULL),
(128, 10, 1, 4, '{\"answer_type\":\"Checkbox\",\"options\":[{\"22\":false},{\"23\":false}]}', 'Question 4', '{\"answer_type\":\"Checkbox\",\"options\":[{\"Vadodara\":false},{\"Bharuch\":false}]}', '2023-03-09 16:01:53', NULL),
(129, 10, 2, 1, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":false},{\"33\":false},{\"34\":false}]}', 'Question 1', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":false},{\"2\":false},{\"3\":false}]}', '2023-03-09 16:01:53', NULL),
(130, 10, 2, 2, '{\"answer_type\":\"Radio\",\"options\":[{\"22\":false},{\"23\":false}]}', 'Question 2', '{\"answer_type\":\"Radio\",\"options\":[{\"Vadodara\":false},{\"Bharuch\":false}]}', '2023-03-09 16:01:53', NULL),
(131, 11, 1, 1, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":false},{\"33\":false},{\"34\":false}]}', 'Question 1', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":false},{\"2\":false},{\"3\":false}]}', '2023-03-09 16:02:37', NULL),
(132, 11, 1, 2, '{\"answer_type\":\"Radio\",\"options\":[{\"22\":false},{\"23\":false}]}', 'Question 2', '{\"answer_type\":\"Radio\",\"options\":[{\"Vadodara\":false},{\"Bharuch\":false}]}', '2023-03-09 16:02:37', NULL),
(133, 11, 1, 3, '{\"answer_type\":\"Dropdown\",\"options\":[{\"20\":false},{\"21\":false}]}', 'Question 3', '{\"answer_type\":\"Dropdown\",\"options\":[{\"Male\":false},{\"Female\":false}]}', '2023-03-09 16:02:37', NULL),
(134, 11, 1, 4, '{\"answer_type\":\"Checkbox\",\"options\":[{\"22\":false},{\"23\":false}]}', 'Question 4', '{\"answer_type\":\"Checkbox\",\"options\":[{\"Vadodara\":false},{\"Bharuch\":false}]}', '2023-03-09 16:02:37', NULL),
(135, 11, 2, 1, '{\"answer_type\":\"Dropdown\",\"options\":[{\"32\":false},{\"33\":false},{\"34\":false}]}', 'Question 1', '{\"answer_type\":\"Dropdown\",\"options\":[{\"1\":false},{\"2\":false},{\"3\":false}]}', '2023-03-09 16:02:37', NULL),
(136, 11, 2, 2, '{\"answer_type\":\"Radio\",\"options\":[{\"22\":false},{\"23\":false}]}', 'Question 2', '{\"answer_type\":\"Radio\",\"options\":[{\"Vadodara\":false},{\"Bharuch\":false}]}', '2023-03-09 16:02:37', NULL),
(137, 12, 1, 1, '{\"answer_type\":[\"Checkbox\"],\"options\":[[]]}', 'Question 1', '{\"answer_type\":[\"Checkbox\"],\"options\":[{\"one\":false},{\"two\":false}]}', '2023-03-13 12:26:10', NULL),
(138, 12, 1, 2, '{\"answer_type\":[\"Radio\"],\"options\":[{\"18\":true}]}', 'Question 2', '{\"answer_type\":[\"Radio\"],\"options\":[{\"city\":false},{\"state\":false}]}', '2023-03-13 12:26:11', NULL),
(139, 12, 1, 3, '{\"answer_type\":[\"Dropdown\"],\"options\":[{\"3\":true}]}', 'Question 3', '{\"answer_type\":[\"Dropdown\"],\"options\":[{\"State\":false}]}', '2023-03-13 12:26:11', NULL),
(140, 12, 1, 4, '{\"answer_type\":[\"Checkbox\"],\"options\":[[]]}', 'Question 4', '{\"answer_type\":[\"Checkbox\"],\"options\":[{\"one\":false},{\"two\":false}]}', '2023-03-13 12:26:11', NULL),
(141, 12, 2, 1, '{\"answer_type\":[\"Checkbox\"],\"options\":[[]]}', 'Question 1', '{\"answer_type\":[\"Checkbox\"],\"options\":[{\"one\":false},{\"two\":false}]}', '2023-03-13 12:26:11', NULL),
(142, 12, 2, 2, '{\"answer_type\":[\"Radio\"],\"options\":[{\"19\":true}]}', 'Question 2', '{\"answer_type\":[\"Radio\"],\"options\":[{\"city\":false},{\"state\":false}]}', '2023-03-13 12:26:12', NULL),
(143, 12, 2, 4, '{\"answer_type\":[\"Checkbox\"],\"options\":[[]]}', 'Question 4', '{\"answer_type\":[\"Checkbox\"],\"options\":[{\"one\":false},{\"two\":false}]}', '2023-03-13 12:26:12', NULL),
(144, 12, 3, 1, '{\"answer_type\":[\"Checkbox\"],\"options\":[[]]}', 'Question 1', '{\"answer_type\":[\"Checkbox\"],\"options\":[{\"one\":false},{\"two\":false}]}', '2023-03-13 12:26:12', NULL),
(145, 12, 3, 2, '{\"answer_type\":[\"Radio\"],\"options\":[{\"18\":true}]}', 'Question 2', '{\"answer_type\":[\"Radio\"],\"options\":[{\"city\":false},{\"state\":false}]}', '2023-03-13 12:26:12', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_property_type`
--

CREATE TABLE `tb_property_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_property_type`
--

INSERT INTO `tb_property_type` (`id`, `name`, `status`, `created_date`, `updated_date`) VALUES
(7, 'Commercial', 1, '2023-02-07 16:21:21', NULL),
(8, 'Land', 1, '2023-02-07 16:21:35', NULL),
(9, 'New Projects', 1, '2023-02-07 16:21:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_question_master`
--

CREATE TABLE `tb_question_master` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_answer_inputtype` varchar(255) NOT NULL,
  `source_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_question_master`
--

INSERT INTO `tb_question_master` (`id`, `question`, `question_answer_inputtype`, `source_id`, `status`, `created_date`, `updated_date`) VALUES
(1, '', 'Dropdown', 18, 1, '2023-02-16 11:58:06', NULL),
(2, 'Question 2', 'Radio', 16, 1, '2023-02-16 11:58:47', NULL),
(3, 'Question 3', 'Dropdown', 17, 1, '2023-02-19 07:46:50', NULL),
(4, 'Question 4', 'Checkbox', 16, 1, '2023-02-19 08:04:17', NULL),
(11, 'Question 5', 'Textarea', 0, 1, '2023-03-06 18:41:32', NULL),
(12, 'Question 6', 'Dropdown', 18, 1, '2023-03-06 18:41:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_source_master`
--

CREATE TABLE `tb_source_master` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_source_master`
--

INSERT INTO `tb_source_master` (`id`, `name`, `status`, `created_date`) VALUES
(1, 'Facebook', 1, '2023-03-21 10:58:37'),
(2, 'Youtube', 1, '2023-03-21 10:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_state_master`
--

CREATE TABLE `tb_state_master` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_state_master`
--

INSERT INTO `tb_state_master` (`id`, `name`, `country_id`, `status`, `created_date`) VALUES
(5, '', 2, 1, '2023-03-16 13:10:42'),
(6, 'Goa', 1, 1, '2023-03-16 13:11:00'),
(8, 'Maharashtra', 1, 1, '2023-03-16 15:27:54'),
(9, 'Tamil Nadu', 1, 1, '2023-03-16 15:28:11'),
(10, 'Delhi', 1, 1, '2023-03-16 15:28:24'),
(11, 'Haryana', 1, 1, '2023-03-16 15:28:37'),
(12, 'Uttar Pradesh', 1, 1, '2023-03-16 15:28:47'),
(13, 'Karnataka', 1, 1, '2023-03-16 15:29:00'),
(14, 'Kerala', 1, 1, '2023-03-16 15:29:13'),
(15, 'Rajasthan', 1, 1, '2023-03-16 15:29:27'),
(16, 'Uttrakhand', 1, 1, '2023-03-16 15:29:38'),
(17, 'Bihar', 1, 1, '2023-03-16 15:29:57'),
(18, 'Jharkhand', 1, 1, '2023-03-16 15:30:11'),
(19, 'Chhatisgarh', 1, 1, '2023-03-16 15:30:28'),
(20, 'West Bengal', 1, 1, '2023-03-16 15:30:47'),
(21, 'Orissa', 1, 1, '2023-03-16 15:30:58'),
(22, 'Himachal Pradesh', 1, 1, '2023-03-16 15:31:11'),
(23, 'Punjab', 1, 1, '2023-03-16 15:31:23'),
(24, 'Jammu and Kashmir', 1, 1, '2023-03-16 15:31:41'),
(25, 'Madhya Pradesh', 1, 1, '2023-03-16 15:32:24'),
(26, 'Mizoram', 1, 1, '2023-03-16 15:32:35'),
(27, 'Meghalaya', 1, 1, '2023-03-16 15:32:48'),
(28, 'Arunachal Pradesh', 1, 1, '2023-03-16 15:32:59'),
(29, 'Andhra Pradesh', 1, 1, '2023-03-16 15:33:22'),
(30, 'Telangana', 1, 1, '2023-03-16 15:33:34'),
(31, 'test', 1, 1, '2023-03-16 19:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_master`
--

CREATE TABLE `tb_status_master` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `source_category_master`
--
ALTER TABLE `source_category_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source_option_master`
--
ALTER TABLE `source_option_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_contact_master`
--
ALTER TABLE `tbl_customer_contact_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_staff_master`
--
ALTER TABLE `tbl_staff_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_assigned_master`
--
ALTER TABLE `tb_assigned_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_city_master`
--
ALTER TABLE `tb_city_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_country_master`
--
ALTER TABLE `tb_country_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_customer_master`
--
ALTER TABLE `tb_customer_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_form_master`
--
ALTER TABLE `tb_form_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_master`
--
ALTER TABLE `tb_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_phase_master`
--
ALTER TABLE `tb_phase_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_position_master`
--
ALTER TABLE `tb_position_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_property_category`
--
ALTER TABLE `tb_property_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_property_master`
--
ALTER TABLE `tb_property_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_property_question_answer`
--
ALTER TABLE `tb_property_question_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_property_subcategory`
--
ALTER TABLE `tb_property_subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_category_id` (`property_category_id`);

--
-- Indexes for table `tb_property_type`
--
ALTER TABLE `tb_property_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_question_master`
--
ALTER TABLE `tb_question_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_source_master`
--
ALTER TABLE `tb_source_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_state_master`
--
ALTER TABLE `tb_state_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_status_master`
--
ALTER TABLE `tb_status_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `source_category_master`
--
ALTER TABLE `source_category_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `source_option_master`
--
ALTER TABLE `source_option_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_customer_contact_master`
--
ALTER TABLE `tbl_customer_contact_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_staff_master`
--
ALTER TABLE `tbl_staff_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_assigned_master`
--
ALTER TABLE `tb_assigned_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_city_master`
--
ALTER TABLE `tb_city_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_country_master`
--
ALTER TABLE `tb_country_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_customer_master`
--
ALTER TABLE `tb_customer_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_form_master`
--
ALTER TABLE `tb_form_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_master`
--
ALTER TABLE `tb_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `tb_phase_master`
--
ALTER TABLE `tb_phase_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_position_master`
--
ALTER TABLE `tb_position_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tb_property_category`
--
ALTER TABLE `tb_property_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_property_master`
--
ALTER TABLE `tb_property_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_property_question_answer`
--
ALTER TABLE `tb_property_question_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `tb_property_subcategory`
--
ALTER TABLE `tb_property_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_property_type`
--
ALTER TABLE `tb_property_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_question_master`
--
ALTER TABLE `tb_question_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_source_master`
--
ALTER TABLE `tb_source_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_state_master`
--
ALTER TABLE `tb_state_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_status_master`
--
ALTER TABLE `tb_status_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
