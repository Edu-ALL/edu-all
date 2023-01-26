-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 09:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `migrate_allinedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id` int(11) NOT NULL,
  `group` bigint(20) NOT NULL,
  `banner_img` text NOT NULL,
  `banner_alt` varchar(255) NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `banner_description` text NOT NULL,
  `banner_button` text NOT NULL,
  `banner_link` text NOT NULL,
  `banner_status` enum('active','inactive') NOT NULL COMMENT '1:active,\r\n2:inactive',
  `lang` char(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `mt_id` int(11) DEFAULT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_thumbnail` text NOT NULL,
  `blog_thumbnail_alt` varchar(255) NOT NULL,
  `blog_status` enum('active','inactive') NOT NULL COMMENT '1:active,\r\n2:inactive',
  `seo_title` text NOT NULL,
  `seo_keyword` text NOT NULL,
  `seo_desc` text NOT NULL,
  `lang` char(2) NOT NULL,
  `click_count` int(11) NOT NULL,
  `duration_read` int(11) NOT NULL,
  `is_highlight` enum('true','false') NOT NULL COMMENT '1:true,\r\n2:false',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id`, `slug`, `cat_id`, `mt_id`, `blog_title`, `blog_description`, `blog_thumbnail`, `blog_thumbnail_alt`, `blog_status`, `seo_title`, `seo_keyword`, `seo_desc`, `lang`, `click_count`, `duration_read`, `is_highlight`, `created_at`, `updated_at`) VALUES
(8, 'blog-all-in-eduspace', 9, 3, 'Lorem ipsum', '<h3>If you&rsquo;re looking for a top-notch Canadian university, look no further than the University of Toronto. Moreover, famously known as &lsquo;U of T&rsquo;, the University of Toronto has produced over half a million alumni and is affiliated with 12 Nobel laureates. If you&rsquo;re planning to study there, let&rsquo;s have a look at the University of Toronto acceptance rate!</h3>\r\n<p>&nbsp;</p>\r\n<h4>An Overview of The University of Toronto</h4>\r\n<p>Founded in 1827, the University of Toronto is a public institution that has three campuses located in and around Toronto. Furthermore, the university is made up of several academic divisions in a wide range of disciplines, including applied science and engineering, public health, social science, and management.</p>\r\n<p>&nbsp;</p>\r\n<p>Across the campuses, the university has more than 44 libraries that house 19 million-plus physical volumes. Moreover, known for its strong focus on research, the University of Toronto receives the most annual scientific research funding and endowment among other Canadian universities. Insulin, which was discovered in the first half of the 1920s, is one of the major innovations that originated at the University of Toronto.</p>\r\n<h4>University of Toronto Acceptance Rate</h4>\r\n<p>The University of Toronto acceptance rate is estimated to be 43%, making it a moderately competitive school.</p>\r\n<p>Toronto is one of the most diverse cities in the world, and the University of Toronto is a reflection of this with its student body of more than 97,066 students enrolled in their programs. While 21,484 are graduate students, 75,582 are enrolled in undergraduate programs. Currently, the University of Toronto has more than 20,000 international students coming from 170 countries and regions.</p>\r\n<h4>University of Toronto Acceptance Rate</h4>\r\n<p>For your university application to the University of Toronto, you will need to submit it through the Ontario Universities Application Center (OUAC) system. Moreover, the OUAC is a centralized application system for all undergraduate and graduate programs at each Ontario university.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>The undergraduate application fee for the University of Toronto is $180. Here are several documents that you&rsquo;ll need to submit for your application:</p>\r\n<p>&nbsp;</p>\r\n<p>High school transcripts</p>\r\n<p>English language proficiency test results</p>\r\n<p>Standardized test results</p>\r\n<p>Self-reported grades form</p>\r\n<p>Personal statements or essays</p>\r\n<p>&nbsp;</p>\r\n<p>Minimum English Score Required</p>\r\n<p>As English is the language of instruction and examination at the University of Toronto, you will be required to submit proof of English proficiency. Furthermore, here are several English proficiency tests that are accepted, along with the minimum scores required:</p>', 'Thumbnail-blogs-20230126125613.png', 'alt', 'active', 'Lorem ipsum dolor sit amet', 'lorem,ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'en', 0, 0, 'true', '2023-01-26 05:56:13', '2023-01-26 08:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog_category`
--

CREATE TABLE `tb_blog_category` (
  `id` int(11) NOT NULL,
  `group` bigint(20) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `lang` char(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_blog_category`
--

INSERT INTO `tb_blog_category` (`id`, `group`, `category_name`, `lang`, `created_at`, `updated_at`) VALUES
(9, 20230126125526, 'Education', 'en', '2023-01-26 05:55:26', '2023-01-26 05:55:26'),
(10, 20230126125526, 'Pendidikan', 'id', '2023-01-26 05:55:26', '2023-01-26 05:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guidebook`
--

CREATE TABLE `tb_guidebook` (
  `id` int(11) NOT NULL,
  `group` bigint(20) NOT NULL,
  `guidebook_category` varchar(255) NOT NULL,
  `guidebook_image` text NOT NULL,
  `guidebook_alt` varchar(255) NOT NULL,
  `guidebook_link` text NOT NULL,
  `guidebook_status` enum('active','inactive') NOT NULL COMMENT '1:active,\r\n2:inactive',
  `lang` char(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mentor`
--

CREATE TABLE `tb_mentor` (
  `id` int(11) NOT NULL,
  `group` bigint(20) NOT NULL,
  `mentor_firstname` varchar(255) NOT NULL,
  `mentor_lastname` varchar(255) NOT NULL,
  `mentor_graduation` text NOT NULL,
  `currently_working` text DEFAULT NULL,
  `expertise` text DEFAULT NULL,
  `description` text NOT NULL,
  `short_desc` text NOT NULL,
  `mentor_picture` text NOT NULL,
  `mentor_alt` varchar(255) NOT NULL,
  `mentor_status` enum('active','inactive') NOT NULL COMMENT '1:active,\r\n2:inactive',
  `lang` char(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mentor`
--

INSERT INTO `tb_mentor` (`id`, `group`, `mentor_firstname`, `mentor_lastname`, `mentor_graduation`, `currently_working`, `expertise`, `description`, `short_desc`, `mentor_picture`, `mentor_alt`, `mentor_status`, `lang`, `created_at`, `updated_at`) VALUES
(3, 20230110103442, 'Fulan', 'Fulanah', '<p>Jakarta</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>', 'Mentor-picture-en-20230110103442.jpg', 'alt en', 'active', 'en', '2023-01-10 03:34:42', '2023-01-12 09:56:36'),
(4, 20230110103442, 'Fulan', 'Fulanah', '<p>Jakarta</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>', 'Mentor-picture-id-20230110103442.jpg', 'alt id', 'active', 'id', '2023-01-10 03:34:42', '2023-01-12 09:56:36'),
(9, 20230126132222, 'First', 'Last', '<p>Jakarta</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'Mentor-picture-en-20230126132222.png', 'alt en', 'active', 'en', '2023-01-26 06:22:22', '2023-01-26 06:22:22'),
(10, 20230126132222, 'First', 'Last', '<p>Jakarta</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'Mentor-picture-id-20230126132222.png', 'alt id', 'active', 'id', '2023-01-26 06:22:23', '2023-01-26 06:22:23'),
(11, 20230126135647, 'Fulan', 'Fulanah', '<p>Bandung</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'Mentor-picture-en-20230126135647.png', 'alt en', 'active', 'en', '2023-01-26 06:56:47', '2023-01-26 06:56:47'),
(12, 20230126135647, 'Fulan', 'Fulanah', '<p>Bandung</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'Mentor-picture-id-20230126135647.png', 'alt id', 'active', 'id', '2023-01-26 06:56:47', '2023-01-26 06:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mentor_video`
--

CREATE TABLE `tb_mentor_video` (
  `id` int(11) NOT NULL,
  `mentor_id` bigint(20) NOT NULL,
  `video_embed` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mentor_video`
--

INSERT INTO `tb_mentor_video` (`id`, `mentor_id`, `video_embed`, `description`, `created_at`, `updated_at`) VALUES
(5, 20230110103442, 'https://www.youtube.com/', '<p>Lorem Ipsum</p>', '2023-01-26 06:09:35', '2023-01-26 06:09:35'),
(6, 20230110103442, 'https://www.google.com/', '<p>Lorem</p>', '2023-01-26 06:09:46', '2023-01-26 06:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb_success_stories`
--

CREATE TABLE `tb_success_stories` (
  `id` int(11) NOT NULL,
  `group` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `badge_1` varchar(255) NOT NULL,
  `badge_2` varchar(255) DEFAULT NULL,
  `badge_3` varchar(255) DEFAULT NULL,
  `badge_4` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `status` enum('active','inactive') NOT NULL COMMENT '1:active,\r\n2:inactive',
  `thumbnail` text NOT NULL,
  `thumbnail_alt` varchar(255) NOT NULL,
  `achievement_image` text NOT NULL,
  `achievement_alt` varchar(255) NOT NULL,
  `video_link` text NOT NULL,
  `lang` char(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimonial`
--

CREATE TABLE `tb_testimonial` (
  `id` int(11) NOT NULL,
  `group` bigint(20) NOT NULL,
  `testi_name` varchar(255) NOT NULL,
  `testi_desc` text NOT NULL,
  `testi_program` varchar(255) NOT NULL,
  `testi_category` varchar(255) NOT NULL,
  `testi_thumbnail` text NOT NULL,
  `testi_alt` varchar(255) NOT NULL,
  `testi_status` enum('active','inactive') NOT NULL COMMENT '1:active,\r\n2:inactive',
  `lang` char(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_upcoming_event`
--

CREATE TABLE `tb_upcoming_event` (
  `id` int(11) NOT NULL,
  `group` bigint(20) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `event_thumbnail` varchar(255) NOT NULL,
  `event_alt` varchar(255) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_subtitle` varchar(255) NOT NULL,
  `event_detail` text NOT NULL,
  `event_rsvp_link` text DEFAULT NULL,
  `event_status` enum('active','inactive') NOT NULL COMMENT '1:active,\r\n2:inactive',
  `lang` char(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', '$2y$10$OrfC8tG6YB.hUeDQD.w2o.2coRA8erxneGZT1bSQlmdAVpvyk6s3u', '2022-11-21 07:18:23', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_blog_category`
--
ALTER TABLE `tb_blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_guidebook`
--
ALTER TABLE `tb_guidebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mentor`
--
ALTER TABLE `tb_mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mentor_video`
--
ALTER TABLE `tb_mentor_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_success_stories`
--
ALTER TABLE `tb_success_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_upcoming_event`
--
ALTER TABLE `tb_upcoming_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_blog_category`
--
ALTER TABLE `tb_blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_guidebook`
--
ALTER TABLE `tb_guidebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_mentor`
--
ALTER TABLE `tb_mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_mentor_video`
--
ALTER TABLE `tb_mentor_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_success_stories`
--
ALTER TABLE `tb_success_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_upcoming_event`
--
ALTER TABLE `tb_upcoming_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
