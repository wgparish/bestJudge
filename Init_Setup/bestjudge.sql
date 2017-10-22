-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 08:25 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestjudge`
--

-- --------------------------------------------------------

--
-- Table structure for table `modify`
--

CREATE TABLE `modify` (
  `id` int(55) NOT NULL,
  `modify_identifier` int(55) NOT NULL,
  `judge_number` int(55) NOT NULL,
  `score_sheet_changed` enum('notebook','marketing','exhibit_and_interview','spirit_and_sportsmanship','robot_performance') NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `old_value` double NOT NULL,
  `new_value` double NOT NULL,
  `comments` text NOT NULL,
  `team_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rubric_descriptor`
--

CREATE TABLE `rubric_descriptor` (
  `id` int(55) NOT NULL,
  `rubric_identifier` int(55) NOT NULL,
  `static_point_value` double NOT NULL,
  `descriptor` text NOT NULL,
  `score_sheet` enum('notebook','marketing','exhibit_and_interview','spirit_and_sportsmanship','robot_performance') NOT NULL,
  `descriptor_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `score_sheet`
--

CREATE TABLE `score_sheet` (
  `id` int(55) NOT NULL,
  `team_number` int(55) NOT NULL,
  `score_sheet` enum('notebook','marketing','exhibit_and_interview','spirit_and_sportsmanship','robot_performance') NOT NULL,
  `point_value` double NOT NULL,
  `judge_number` int(55) NOT NULL,
  `rubric_identifier` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(55) NOT NULL,
  `team_name` text NOT NULL,
  `team_number` text NOT NULL,
  `school_name` text NOT NULL,
  `school_address_line_1` text NOT NULL,
  `school_address_line_2` text NOT NULL,
  `school_address_city` text NOT NULL,
  `school_address_state` text NOT NULL,
  `school_address_zip` text NOT NULL,
  `primary_contact_first_name` text NOT NULL,
  `primary_contact_last_name` text NOT NULL,
  `primary_contact_phone_number` text NOT NULL,
  `primary_contact_email` text NOT NULL,
  `notebook_score` double NOT NULL,
  `marketing_score` double NOT NULL,
  `booth_score` double NOT NULL,
  `spirit_score` double NOT NULL,
  `robot_score` double NOT NULL,
  `overall_score` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(55) NOT NULL,
  `judge_number` int(55) NOT NULL,
  `accessLevel` enum('admin','head_judge','judge','restricted') NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email_address` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email_verification` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modify`
--
ALTER TABLE `modify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rubric_descriptor`
--
ALTER TABLE `rubric_descriptor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score_sheet`
--
ALTER TABLE `score_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modify`
--
ALTER TABLE `modify`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rubric_descriptor`
--
ALTER TABLE `rubric_descriptor`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `score_sheet`
--
ALTER TABLE `score_sheet`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
