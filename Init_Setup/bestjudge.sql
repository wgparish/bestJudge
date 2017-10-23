-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 03:29 PM
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
  `score_sheet` text NOT NULL,
  `descriptor_title` text NOT NULL,
  `sub_section_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rubric_descriptor`
--

INSERT INTO `rubric_descriptor` (`id`, `rubric_identifier`, `static_point_value`, `descriptor`, `score_sheet`, `descriptor_title`, `sub_section_type`) VALUES
  (1, 1, 10, '8-10\r\nIn-depth discussion of how this year’s game theme relates to industry in this region.\r\n4-7\r\nGeneral discussion of how this year’s game theme relates to industry in this region.\r\n1-3\r\nGeneral discussion of this year’s game theme, but no ties to the region.\r\n0\r\nNo discussion of this year’s game theme.', 'Notebook', 'Correlation between the game and how the science/technology is being used at a company/industry/research lab in the team’s state or region', 'Research Paper'),
  (2, 2, 10, '8-10\r\nIn-depth discussion of history and people related to this year’s game theme.\r\n4-7\r\nGeneral discussion of history and people related to this year’s game theme.\r\n1-3\r\nSome mention of history or people.\r\n0\r\nNo discussion of this year’s game theme.', 'Notebook', 'Any related information of the game theme such as history, famous inventor(s), major milestones, etc.', 'Research Paper');

-- --------------------------------------------------------

--
-- Table structure for table `score_sheet`
--

CREATE TABLE `score_sheet` (
  `id` int(55) NOT NULL,
  `team_number` int(55) NOT NULL,
  `score_sheet` enum('Notebook','Marketing','Exhibit_and_interview','Spriri_and_sportsmanship','Robot') NOT NULL,
  `point_value` double NOT NULL,
  `judge_number` int(55) NOT NULL,
  `rubric_identifier` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` varchar(200) NOT NULL,
  `label` varchar(200) NOT NULL,
  `value` text NOT NULL
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(55) NOT NULL,
  `judge_number` int(55) NOT NULL,
  `accessLevel` enum('admin','head_judge','judge','restricted') NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email_verification` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `judge_number`, `accessLevel`, `username`, `password`, `email`, `first_name`, `last_name`, `email_verification`) VALUES
  (1, 1, 'admin', 'wparish', '$2y$12$NMHj3R56Vw/m13c9q.PzMOzpDShVrX.T1eP5zU8DYb3o8K57.2ntu', 'williamparish159@gmail.com', 'William', 'Parish', 1);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
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
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
