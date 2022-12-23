-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 10:15 AM
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
  `mt_id` int(11) NOT NULL,
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
  `mentor_graduation` varchar(255) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `tb_mentor_video`
--

CREATE TABLE `tb_mentor_video` (
  `id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `video_embed` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_blog_category`
--
ALTER TABLE `tb_blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_guidebook`
--
ALTER TABLE `tb_guidebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mentor`
--
ALTER TABLE `tb_mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mentor_video`
--
ALTER TABLE `tb_mentor_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_success_stories`
--
ALTER TABLE `tb_success_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_upcoming_event`
--
ALTER TABLE `tb_upcoming_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
