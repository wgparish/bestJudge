-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 10:08 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acm-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id`           INT(11)      NOT NULL,
  `user`         INT(11)      NOT NULL,
  `parent`       VARCHAR(200) NOT NULL,
  `title`        VARCHAR(200) NOT NULL,
  `header`       VARCHAR(300) NOT NULL,
  `banner_image` VARCHAR(255) NOT NULL,
  `body`         LONGTEXT     NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `user`, `parent`, `title`, `header`, `banner_image`, `body`) VALUES
  (1, 3, '', 'Home', 'Welcome to ACM', '',
   '{\"Jumbotron\":{\"item_1\":{\"image\":\"/images/home_page_images/AAEAAQAAAAAAAAkDAAAAJGVmMWZiZmFkLTMwMDQtNDUzMy1iMmRjLTY2ZjE0ZTI0ZjQxOQ.jpg\",\"title\":\"Kennesaw Association for Computing Machinery\",\"content\":\"Where we continue to develop the future...\",\"link\":\"#\"},\"item_2\":{\"image\":\"/images/home_page_images/cognitive-computing-1056x653.jpg\",\"title\":\"About our organization\",\"content\":\"Come see who we are and what we do...\",\"link\":\"#\"},\"item_3\":{\"image\":\"/images/home_page_images/5%20Reasons%20Computing%20-%20Hero.jpg\",\"title\":\"Join Kennesaw ACM\",\"content\":\"Register to become a member and join in on the fun...\",\"link\":\"#\"}},\"bubble_items\":{\"item_1\":{\"image\":\"/images/home_page_images/Cloud-Computing-cap.jpg\",\"title\":\"Heading\",\"content\":\"Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.\",\"link\":\"#\"},\"item_2\":{\"image\":\"/images/home_page_images/BRAIN-CPU.jpg\",\"title\":\"Heading\",\"content\":\"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.\",\"link\":\"#\"},\"item_3\":{\"image\":\"/images/home_page_images/cognitive-computing-1056x653.jpg\",\"title\":\"Heading\",\"content\":\"Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.\",\"link\":\"#\"}},\"features\":{\"item_1\":{\"image\":\"/images/home_page_images/ACM.png\",\"title\":\"First featurette heading.\",\"content\":\"Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.\"},\"item_2\":{\"image\":\"/images/home_page_images/solution-network-infrastructure-tn-500x500_1.jpg\",\"title\":\"First featurette heading.\",\"content\":\"Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.\"},\"item_3\":{\"image\":\"/images/home_page_images/platform-cloud-computing-500x500.jpg\",\"title\":\"First featurette heading.\",\"content\":\"Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.\"}}}'),
  (2, 3, '', 'Events', 'Event Calendar',
   '/images/home_page_images/AAEAAQAAAAAAAAkDAAAAJGVmMWZiZmFkLTMwMDQtNDUzMy1iMmRjLTY2ZjE0ZTI0ZjQxOQ.jpg',
   '<div class=\"row\">\r\n<div class=\"col align-self-center \"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/Under_construction.png\" /></div>\r\n</div>'),
  (3, 3, '', 'News', 'News',
   '/images/home_page_images/AAEAAQAAAAAAAAkDAAAAJGVmMWZiZmFkLTMwMDQtNDUzMy1iMmRjLTY2ZjE0ZTI0ZjQxOQ.jpg',
   '<div class=\"row justify-content-center\">\r\n<div class=\"col align-self-center\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/Under_construction.png\" /></div>\r\n</div>'),
  (4, 3, '', 'ICPC', 'ICPC',
   '/images/home_page_images/AAEAAQAAAAAAAAkDAAAAJGVmMWZiZmFkLTMwMDQtNDUzMy1iMmRjLTY2ZjE0ZTI0ZjQxOQ.jpg',
   '<h1 style=\"text-align: center;\">Interested in Programming Competitions?</h1>\r\n<p>The Association for Computing Machinery (ACM) sponsors an international programming contest for college students, known as the ACM International Collegiate Programming Contest (ICPC) sponsored by IBM. The ACM-ICPC fosters creativity, teamwork, and innovation in building new software programs and enables students to test their ability to perform under pressure.&nbsp;<strong>Quite simply, it is the oldest, largest, and most prestigious programming contest in the world.</strong></p>\r\n<p>Teams of three students write computer programs to solve a set of problems in five hours. Programming teams from the states of MS, AL, GA, SC, and FL compete at the Southeast Region (SER) Contest; the best team represents the region at the world finals. The goal is to imporve the skills necessary to solve problems with computers.<br />(See the&nbsp;<a href=\"https://en.wikipedia.org/wiki/ACM_International_Collegiate_Programming_Contest\" target=\"_blank\" rel=\"noopener\">ACM ICPC entry</a>&nbsp;visit the&nbsp;<a href=\"https://icpc.baylor.edu/welcome.icpc\" target=\"_blank\" rel=\"noopener\">ICPC Official Site</a>&nbsp;and Register at&nbsp;<a href=\"https://ser.cs.fit.edu/ser2016/\" target=\"_blank\" rel=\"noopener\">2016 Southeast USA Region Site</a>)</p>\r\n<p>The Kennesaw State University College of Computing and Software Engineering will host a total of 50 teams which includes teams from Kennesaw State University</p>\r\n<p><strong>When:</strong>&nbsp;Saturday, November 5, 2016 - 8:00am to 7:30pm<br /><strong>Where:</strong>&nbsp;Kennesaw State University College of Computing and Software Engineering -&nbsp;<a href=\"http://www.kennesaw.edu/maps/docs/marietta_printable_campus_map.pdf\">Marietta Campus</a>&nbsp;- 1100 South Marietta Pkwy, Marietta, GA, 30060<br /><strong>Directions:&nbsp;</strong><a href=\"https://www.google.com/maps/place/Kennesaw+State+University+Marietta+Campus/@33.9397129,-84.5218453,17z/data=!3m1!4b1!4m5!3m4!1s0x88f516ab7b15257b:0xd06ebe27c49fa48e!8m2!3d33.9397129!4d-84.5196566\" target=\"_blank\" rel=\"noopener\">Google Maps</a><br /><strong>Parking:&nbsp;</strong><a href=\"http://acm.kennesaw.edu/icpc/img/KSU_Marietta_Campus-Parking_Map.pdf\" target=\"_blank\" rel=\"noopener\">Parking Directions and Building Locations</a>&nbsp;(Parking Deck 60: Parking is free on Saturday)<br /><strong>Lodging:</strong>&nbsp;<a href=\"http://www.mariettaga.gov/\">City of Marietta</a>&nbsp;<a href=\"https://www.expedia.com/Marietta-Hotels.d8703.Travel-Guide-Hotels?regionId=8703&amp;langid=1033&amp;semcid=US.UB.GOOGLE.SEARCH.HOTEL&amp;kword=+hotels_+marietta!m.ZzZz.4810000055505.0.106782111670.%2Bhotels%20%2Bmarietta.+hotels_+marietta&amp;gclid=CjwKEAjwiru9BRDwyKmR08L3iS0SJABN8T4vZEtI-NjJQ0JORZUxqCvLrJfZ35C-gblvwRZ486yicBoCy2jw_wcB\">Hotels</a><br /><strong>Contact:</strong>&nbsp;Dr. Sarah North,&nbsp;<a href=\"mailto:snorth@kennesaw.edu\">snorth@kennesaw.edu</a>&nbsp;(678-520-6102)</p>\r\n<p>Registration is in the Engineering Technology Center (Building Q - 202 Auditorum) from 8am-10am&nbsp;<br />Practice sessions and the programming contest held in the Atrium (Building J (1st and 2nd floors)) from 10:30am-6:30pm</p>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p><img src=\"../../images/atrium.png\" width=\"500\" height=\"400\" />&nbsp; &nbsp; &nbsp;<img src=\"../../images/Auditorium.png\" width=\"500\" height=\"400\" /></p>\r\n<hr />\r\n<h2 style=\"text-align: center;\">Why Participate?</h2>\r\n<p>Participating in a programming competition is not only extremely fun, but it also helps to set you apart from other students. By joining in these competitions you are furthering your understanding of programming languages and potentially setting yourself apart for employers. It\'s not a bad idea to have some competitions on your resume...</p>\r\n<p>&nbsp;</p>\r\n<h2 style=\"text-align: center;\">How do I participate?</h2>\r\n<p>In the links above you will find important information regarding the rules, schedule, sign up, and practice problems if you wish to utilize them. Please make sure you review the rules and schedule prior to the event.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/Under_construction.png\" /></p>'),
  (5, 3, '', 'Resources', 'Resources',
   '/images/home_page_images/AAEAAQAAAAAAAAkDAAAAJGVmMWZiZmFkLTMwMDQtNDUzMy1iMmRjLTY2ZjE0ZTI0ZjQxOQ.jpg',
   '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/Under_construction.png\" /></p>'),
  (6, 3, '', 'Forum', 'Forum',
   '/images/home_page_images/AAEAAQAAAAAAAAkDAAAAJGVmMWZiZmFkLTMwMDQtNDUzMy1iMmRjLTY2ZjE0ZTI0ZjQxOQ.jpg',
   '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/Under_construction.png\" /></p>'),
  (7, 3, '', 'About', 'About',
   '/images/home_page_images/AAEAAQAAAAAAAAkDAAAAJGVmMWZiZmFkLTMwMDQtNDUzMy1iMmRjLTY2ZjE0ZTI0ZjQxOQ.jpg',
   '<center>\r\n<p class=\"about\">&nbsp;</p>\r\n<p class=\"about\">We are a certified student organization, we dedicate ourselves to the advancement of computing as a science and a profession.</p>\r\n<p class=\"about\">&nbsp;</p>\r\n<hr />\r\n<p class=\"about\">&nbsp;</p>\r\n<h3>Mission</h3>\r\n<p>&nbsp;</p>\r\n<center>\r\n<p class=\"about\">The goal of our organization is to promote and expand student\'s understanding of computer machinery and help these students develop skills that will be useful in their professional and daily lives.</p>\r\n<p class=\"about\">&nbsp;</p>\r\n<hr />\r\n<h3>&nbsp;</h3>\r\n<h3>Description</h3>\r\n<p>&nbsp;</p>\r\n<p>The Kennesaw State University Association of Computing Machinery is an organization that is all about computers and the people who use them. The goal of our organization is to promote and expand student\'s understanding of computers and help these students develop in their chosen field. To do this, the KSU ACM promotes projects, research, and competitions to develop student<span class=\"morecontent\">s\' skill and build their resumes. We host lectures and talk to help introduce students to not only new developments in computing, but also new developments in old systems.<br />At the same time, the KSU ACM strives to build a community and does so by hosting a variety of social events to encourage friendship and camaraderie. We believe camarderie is as important as it is for students to understand the inner workings of the computer, they need to have an idea of the inner workings of the people using them. By socializing with others, we feel that people can understand not only how to make a good computer program but how to make a program that people can actually use.</span></p>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<h2>&nbsp;</h2>\r\n<h2>Officers</h2>\r\n</center></center>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/Under_construction.png\" /></p>'),
  (8, 3, '', 'Join', 'Join Us',
   '/images/home_page_images/AAEAAQAAAAAAAAkDAAAAJGVmMWZiZmFkLTMwMDQtNDUzMy1iMmRjLTY2ZjE0ZTI0ZjQxOQ.jpg',
   '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/Under_construction.png\" /></p>');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id`    VARCHAR(200) NOT NULL,
  `label` VARCHAR(200) NOT NULL,
  `value` LONGTEXT     NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `label`, `value`) VALUES
  ('debug-status', 'Debug Status', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id`                 INT(11)                                                                       NOT NULL,
  `username`           VARCHAR(255)                                                                  NOT NULL,
  `email`              VARCHAR(255)                                                                  NOT NULL,
  `password`           VARCHAR(1000)                                                                 NOT NULL,
  `first_name`         VARCHAR(255)                                                                  NOT NULL,
  `last_name`          VARCHAR(255)                                                                  NOT NULL,
  `bio`                TEXT                                                                          NOT NULL,
  `permissions`        ENUM ('web admin', 'admin', 'moderator', 'developer', 'normal', 'restricted') NOT NULL DEFAULT 'normal',
  `acm_group`          ENUM ('National', 'Local', 'Free')                                            NOT NULL DEFAULT 'Free',
  `email_verification` ENUM ('0', '1')                                                               NOT NULL DEFAULT '0'
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `bio`, `permissions`, `acm_group`, `email_verification`)
VALUES
  (1, 'TestUser1', 'test@test.com', '$2y$12$NMHj3R56Vw/m13c9q.PzMOzpDShVrX.T1eP5zU8DYb3o8K57.2ntu', 'Test', 'User', '',
   'normal', 'Free', '0'),
  (2, 'admin', 'admin@admin.com', '$2y$12$NMHj3R56Vw/m13c9q.PzMOzpDShVrX.T1eP5zU8DYb3o8K57.2ntu', 'Men', 'Top', '',
   'admin', 'National', '1'),
  (3, 'Schorcher', 'dmcfall1@students.kennesaw.edu', '$2y$12$NMHj3R56Vw/m13c9q.PzMOzpDShVrX.T1eP5zU8DYb3o8K57.2ntu',
   'David', 'McFall', 'Website Administrator', 'web admin', 'National', '1'),
  (4, 'MLGNOSCOPE420', 'idiot@stupid.town', '$2y$12$NMHj3R56Vw/m13c9q.PzMOzpDShVrX.T1eP5zU8DYb3o8K57.2ntu', 'l33t',
   'hax0r', '', 'restricted', 'Free', '0'),
  (5, 'testMod', 'testMod@test.com', '$2y$12$NMHj3R56Vw/m13c9q.PzMOzpDShVrX.T1eP5zU8DYb3o8K57.2ntu', 'Test', 'Mod', '',
   'moderator', 'Free', '1'),
  (6, 'testDev', 'testDev@test.com', '$2y$12$NMHj3R56Vw/m13c9q.PzMOzpDShVrX.T1eP5zU8DYb3o8K57.2ntu', 'Test', 'Dev', '',
   'developer', 'Free', '1'),
  (7, 'testAdmin', 'testAdmin@test.com', '$2y$12$NMHj3R56Vw/m13c9q.PzMOzpDShVrX.T1eP5zU8DYb3o8K57.2ntu', 'Test',
   'Admin', '', 'admin', 'Local', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
