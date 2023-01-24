-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 04:35 AM
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

--
-- Dumping data for table `tb_banner`
--

INSERT INTO `tb_banner` (`id`, `group`, `banner_img`, `banner_alt`, `banner_title`, `banner_description`, `banner_button`, `banner_link`, `banner_status`, `lang`, `created_at`, `updated_at`) VALUES
(1, 20230104104023, 'Banner-en-20230104104023.png', 'alt en', 'title en', '<p>Lorem ipsum dolor sit amet</p>', 'button en', 'https://www.google.com/', 'active', 'en', '2023-01-04 03:40:23', '2023-01-19 03:12:41'),
(2, 20230104104023, 'Banner-id-20230104104023.png', 'alt id', 'title id', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'button id', 'https://www.google.com/', 'active', 'id', '2023-01-04 03:40:23', '2023-01-19 03:12:41');

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
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 3, 3, 'Lorem ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'Thumbnail-blogs-20230118095841.png', 'alt', 'active', '<p>Lorem ipsum dolor sit amet</p>', '<p>Lorem ipsum</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'en', 0, 0, 'true', '2023-01-18 02:58:41', '2023-01-20 03:04:46'),
(2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 4, 4, 'Lorem ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'Thumbnail-blogs-20230118100702.png', 'alt', 'active', '<p>Lorem ipsum dolor sit amet</p>', '<p>Lorem ipsum</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'id', 0, 0, 'true', '2023-01-18 03:07:02', '2023-01-20 03:00:15'),
(4, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 4, 4, 'Lorem ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'Thumbnail-blogs-20230119094528.png', 'alt', 'active', '<p>Lorem ipsum dolor sit amet</p>', '<p>Lorem ipsum</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'id', 0, 0, 'true', '2023-01-19 02:45:29', '2023-01-20 03:00:25');

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
(1, 20230104111800, 'Sport/Esport', 'en', '2023-01-04 04:18:00', '2023-01-04 04:18:00'),
(2, 20230104111800, 'Olahraga', 'id', '2023-01-04 04:18:00', '2023-01-04 04:18:00'),
(3, 20230106090606, 'Entertainment', 'en', '2023-01-06 02:06:06', '2023-01-09 08:07:51'),
(4, 20230106090606, 'Hiburan', 'id', '2023-01-06 02:06:06', '2023-01-09 08:07:51');

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

--
-- Dumping data for table `tb_guidebook`
--

INSERT INTO `tb_guidebook` (`id`, `group`, `guidebook_category`, `guidebook_image`, `guidebook_alt`, `guidebook_link`, `guidebook_status`, `lang`, `created_at`, `updated_at`) VALUES
(1, 20230104112115, 'category en', 'Guidebook-en-20230104112115.png', 'alt en', 'https://www.google.com/', 'active', 'en', '2023-01-04 04:21:15', '2023-01-19 03:29:53'),
(2, 20230104112115, 'category id', 'Guidebook-id-20230104112115.png', 'alt id', 'https://www.google.com/', 'active', 'id', '2023-01-04 04:21:15', '2023-01-19 03:29:53');

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
(1, 20230106093127, 'First', 'Last', '<p>Bandung</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>', 'Mentor-picture-en-20230106093127.png', 'alt en', 'active', 'en', '2023-01-06 02:31:27', '2023-01-19 03:31:41'),
(2, 20230106093127, 'First', 'Last', '<p>Bandung</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>', 'Mentor-picture-id-20230106093127.png', 'alt id', 'active', 'id', '2023-01-06 02:31:27', '2023-01-19 03:31:41'),
(3, 20230110103442, 'Fulan', 'Fulanah', '<p>Jakarta</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>', 'Mentor-picture-en-20230110103442.jpg', 'alt en', 'active', 'en', '2023-01-10 03:34:42', '2023-01-12 09:56:36'),
(4, 20230110103442, 'Fulan', 'Fulanah', '<p>Jakarta</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>', 'Mentor-picture-id-20230110103442.jpg', 'alt id', 'active', 'id', '2023-01-10 03:34:42', '2023-01-12 09:56:36');

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
(2, 20230106093127, 'https://www.youtube.com/', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>', '2023-01-13 03:23:10', '2023-01-16 03:05:40'),
(3, 20230110103442, 'https://www.google.com/', '<p>Lorem ipsum</p>', '2023-01-16 03:06:23', '2023-01-16 03:06:23');

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

--
-- Dumping data for table `tb_success_stories`
--

INSERT INTO `tb_success_stories` (`id`, `group`, `name`, `badge_1`, `badge_2`, `badge_3`, `badge_4`, `description`, `status`, `thumbnail`, `thumbnail_alt`, `achievement_image`, `achievement_alt`, `video_link`, `lang`, `created_at`, `updated_at`) VALUES
(5, 20230102151336, 'Name en', 'Badge 1', 'Badge 2', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>', 'active', 'Success-Stories-thumbnail-en-20230102151336.png', 'alt', 'Success-Stories-achievement-en-20230102151336.png', 'alt', 'https://www.google.com/', 'en', '2023-01-02 08:13:36', '2023-01-19 03:23:48'),
(6, 20230102151336, 'Name id', 'Badge 1', 'Badge 2', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'active', 'Success-Stories-thumbnail-id-20230102151336.png', 'alt', 'Success-Stories-achievement-id-20230102151336.png', 'alt', 'https://www.google.com/', 'id', '2023-01-02 08:13:36', '2023-01-19 03:23:48'),
(7, 20230104094106, 'Fulan Fulanah', 'Badge 1', 'Badge 2', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'active', 'Success-Stories-thumbnail-en-20230104094106.png', 'alt', 'Success-Stories-achievement-en-20230104094106.png', 'alt', 'https://www.google.com/', 'en', '2023-01-04 02:41:06', '2023-01-04 02:41:06'),
(8, 20230104094106, 'Fulan Fulanah', 'Badge 1', 'Badge 2', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'active', 'Success-Stories-thumbnail-id-20230104094106.png', 'alt', 'Success-Stories-achievement-id-20230104094106.png', 'alt', 'https://www.google.com/', 'id', '2023-01-04 02:41:06', '2023-01-04 02:41:06');

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

--
-- Dumping data for table `tb_testimonial`
--

INSERT INTO `tb_testimonial` (`id`, `group`, `testi_name`, `testi_desc`, `testi_program`, `testi_category`, `testi_thumbnail`, `testi_alt`, `testi_status`, `lang`, `created_at`, `updated_at`) VALUES
(1, 20230104112631, 'Fulan', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>', 'Program en', 'Experiental Learning', 'Thumbnail-testi-en-20230104112631.png', 'alt en', 'active', 'en', '2023-01-04 04:26:31', '2023-01-19 03:19:47'),
(2, 20230104112631, 'Fulan', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'Program id', 'Experiental Learning', 'Thumbnail-testi-id-20230104112631.png', 'alt id', 'active', 'id', '2023-01-04 04:26:31', '2023-01-19 03:19:47');

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

--
-- Dumping data for table `tb_upcoming_event`
--

INSERT INTO `tb_upcoming_event` (`id`, `group`, `event_date`, `event_thumbnail`, `event_alt`, `event_title`, `event_subtitle`, `event_detail`, `event_rsvp_link`, `event_status`, `lang`, `created_at`, `updated_at`) VALUES
(3, 20230104112459, '23 December 2022', 'Upcoming-Event-en-20230104112459.jpg', 'alt en', 'title en', 'desc en', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>', NULL, 'active', 'en', '2023-01-04 04:24:59', '2023-01-19 03:27:17'),
(4, 20230104112459, '23 desember 2022', 'Upcoming-Event-id-20230104112459.jpg', 'alt id', 'title id', 'desc id', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', NULL, 'active', 'id', '2023-01-04 04:24:59', '2023-01-19 03:27:17');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_blog_category`
--
ALTER TABLE `tb_blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_guidebook`
--
ALTER TABLE `tb_guidebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_mentor`
--
ALTER TABLE `tb_mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_mentor_video`
--
ALTER TABLE `tb_mentor_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_success_stories`
--
ALTER TABLE `tb_success_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_upcoming_event`
--
ALTER TABLE `tb_upcoming_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
