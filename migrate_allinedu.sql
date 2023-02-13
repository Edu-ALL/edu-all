-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 08:54 AM
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
  `region` char(2) NOT NULL,
  `lang` char(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_banner`
--

INSERT INTO `tb_banner` (`id`, `group`, `banner_img`, `banner_alt`, `banner_title`, `banner_description`, `banner_button`, `banner_link`, `banner_status`, `region`, `lang`, `created_at`, `updated_at`) VALUES
(10, 20230131164642, 'Banner-20230131164642.webp', 'banner alt', 'Banner Title', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'Banner button', 'https://www.google.com/', 'active', 'sg', 'en', '2023-01-31 09:46:42', '2023-02-01 03:17:13'),
(11, 20230131172100, 'Banner-20230131172100.png', 'banner alt', 'Banner Title', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'Banner button', 'https://www.google.com/', 'active', 'id', 'id', '2023-01-31 10:21:00', '2023-01-31 10:21:00'),
(12, 20230201100929, 'Banner-20230201100929.jpg', 'banner alt', 'Banner Title', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'Banner button', 'https://www.google.com/', 'active', 'id', 'en', '2023-02-01 03:09:29', '2023-02-01 03:09:29');

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
  `blog_status` enum('draft','publish') NOT NULL COMMENT '1:draft,\r\n2:publish',
  `seo_title` text NOT NULL,
  `seo_keyword` text NOT NULL,
  `seo_desc` text NOT NULL,
  `lang` char(2) NOT NULL,
  `click_count` int(11) NOT NULL,
  `duration_read` int(11) NOT NULL,
  `is_highlight` enum('true','false') NOT NULL COMMENT '1:true,\r\n2:false',
  `publish_date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id`, `slug`, `cat_id`, `mt_id`, `blog_title`, `blog_description`, `blog_thumbnail`, `blog_thumbnail_alt`, `blog_status`, `seo_title`, `seo_keyword`, `seo_desc`, `lang`, `click_count`, `duration_read`, `is_highlight`, `publish_date`, `created_at`, `updated_at`) VALUES
(3, 'blog-all-in-eduspace', 9, NULL, 'Blog ALL-in Eduspace', '<h3>If you&rsquo;re looking for a top-notch Canadian university, look no further than the University of Toronto. Moreover, famously known as &lsquo;U of T&rsquo;, the University of Toronto has produced over half a million alumni and is affiliated with 12 Nobel laureates. If you&rsquo;re planning to study there, let&rsquo;s have a look at the University of Toronto acceptance rate!</h3>\r\n<br>\r\n<h2>An Overview of The University of Toronto</h2>\r\n<br>\r\n<p>Founded in 1827, the University of Toronto is a public institution that has three campuses located in and around Toronto. Furthermore, the university is made up of several academic divisions in a wide range of disciplines, including applied science and engineering, public health, social science, and management.</p>\r\n<br>\r\n<p>Across the campuses, the university has more than 44 libraries that house 19 million-plus physical volumes. Moreover, known for its strong focus on research, the University of Toronto receives the most annual scientific research funding and endowment among other Canadian universities. Insulin, which was discovered in the first half of the 1920s, is one of the major innovations that originated at the University of Toronto.</p>', 'Thumbnail-blogs-20230208094114.jpg', 'alt', 'publish', 'Lorem ipsum dolor sit amet', 'lorem,ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'en', 0, 45, 'false', '2023-02-10 02:29:51', '2023-02-08 02:41:14', '2023-02-10 02:54:02'),
(5, 'blog-all-in-eduspace-2', 10, 22, 'Blog ALL-in Eduspace 2', '<h3>If you&rsquo;re looking for a top-notch Canadian university, look no further than the University of Toronto. Moreover, famously known as &lsquo;U of T&rsquo;, the University of Toronto has produced over half a million alumni and is affiliated with 12 Nobel laureates. If you&rsquo;re planning to study there, let&rsquo;s have a look at the University of Toronto acceptance rate!</h3>\r\n<br>\r\n<h2>An Overview of The University of Toronto</h2>\r\n<br>\r\n<p>Founded in 1827, the University of Toronto is a public institution that has three campuses located in and around Toronto. Furthermore, the university is made up of several academic divisions in a wide range of disciplines, including applied science and engineering, public health, social science, and management.</p>\r\n<br>\r\n<ol>\r\n<li>sdasdas</li>\r\n<li>dasdasd</li>\r\n<li>sdas</li>\r\n</ol>\r\n<br>\r\n<p>Across the campuses, the university has more than 44 libraries that house 19 million-plus physical volumes. Moreover, known for its strong focus on research, the University of Toronto receives the most annual scientific research funding and endowment among other Canadian universities. Insulin, which was discovered in the first half of the 1920s, is one of the major innovations that originated at the University of Toronto.</p>\r\n<br>\r\n<p>Across the campuses, the university has more than 44 libraries that house 19 million-plus physical volumes. Moreover, known for its strong focus on research, the University of Toronto receives the most annual scientific research funding and endowment among other Canadian universities. Insulin, which was discovered in the first half of the 1920s, is one of the major innovations that originated at the University of Toronto.</p>\r\n<br>\r\n<p>Across the campuses, the university has more than 44 libraries that house 19 million-plus physical volumes. Moreover, known for its strong focus on research, the University of Toronto receives the most annual scientific research funding and endowment among other Canadian universities. Insulin, which was discovered in the first half of the 1920s, is one of the major innovations that originated at the University of Toronto.</p>', 'Thumbnail-blogs-20230208095724.png', 'alt', 'publish', 'Lorem ipsum dolor sit amet', 'lorem,ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'id', 0, 145, 'false', '2023-02-09 03:08:21', '2023-02-08 02:57:24', '2023-02-10 03:58:04'),
(6, 'blog-all-in-eduspace-3', 16, 21, 'Blog ALL-in Eduspace 3', '<h3>If you&rsquo;re looking for a top-notch Canadian university, look no further than the University of Toronto. Moreover, famously known as &lsquo;U of T&rsquo;, the University of Toronto has produced over half a million alumni and is affiliated with 12 Nobel laureates. If you&rsquo;re planning to study there, let&rsquo;s have a look at the University of Toronto acceptance rate!</h3>\r\n<br>\r\n<h2>An Overview of The University of Toronto</h2>\r\n<br>\r\n<p>Founded in 1827, the University of Toronto is a public institution that has three campuses located in and around Toronto. Furthermore, the university is made up of several academic divisions in a wide range of disciplines, including applied science and engineering, public health, social science, and management.</p>\r\n<br>\r\n<p>Across the campuses, the university has more than 44 libraries that house 19 million-plus physical volumes. Moreover, known for its strong focus on research, the University of Toronto receives the most annual scientific research funding and endowment among other Canadian universities. Insulin, which was discovered in the first half of the 1920s, is one of the major innovations that originated at the University of Toronto.</p>', 'Thumbnail-blogs-20230209102920.webp', 'alt', 'draft', 'Lorem ipsum dolor sit amet', 'lorem,ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'en', 0, 30, 'false', NULL, '2023-02-09 03:29:21', '2023-02-13 00:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog_category`
--

CREATE TABLE `tb_blog_category` (
  `id` int(11) NOT NULL,
  `group` bigint(20) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `lang` char(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_blog_category`
--

INSERT INTO `tb_blog_category` (`id`, `group`, `category_name`, `slug`, `lang`, `created_at`, `updated_at`) VALUES
(9, 20230126125526, 'Education', 'education', 'en', '2023-01-26 05:55:26', '2023-01-30 14:06:21'),
(10, 20230126125526, 'Pendidikan', 'pendidikan', 'id', '2023-01-26 05:55:26', '2023-01-30 14:06:22'),
(16, 20230130210309, 'University', 'university', 'en', '2023-01-30 14:03:09', '2023-01-30 14:03:09'),
(17, 20230130210309, 'Universitas', 'universitas', 'id', '2023-01-30 14:03:09', '2023-01-30 14:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog_read`
--

CREATE TABLE `tb_blog_read` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_blog_read`
--

INSERT INTO `tb_blog_read` (`id`, `ip_address`, `blog_id`, `created_at`, `updated_at`) VALUES
(1, '192.168.0.0', 5, '2023-02-09 02:28:04', '2023-02-09 02:28:04'),
(2, '192.168.0.1', 5, '2023-02-09 02:36:09', '2023-02-09 02:36:09'),
(3, '192.168.0.2', 5, '2023-02-09 02:36:09', '2023-02-09 02:36:09'),
(4, '192.168.0.3', 5, '2023-02-09 02:36:09', '2023-02-09 02:36:09'),
(5, '192.168.0.4', 5, '2023-02-09 02:36:09', '2023-02-09 02:36:09'),
(6, '192.168.0.5', 5, '2023-02-09 02:36:09', '2023-02-09 02:36:09'),
(7, '192.168.0.6', 5, '2023-02-09 02:36:09', '2023-02-09 02:36:09'),
(8, '192.168.0.7', 5, '2023-02-09 02:36:09', '2023-02-09 02:36:09'),
(9, '192.168.0.8', 5, '2023-02-09 02:36:09', '2023-02-09 02:36:09'),
(10, '192.168.0.9', 5, '2023-02-09 02:44:11', '2023-02-09 02:44:11'),
(11, '192.168.0.10', 5, '2023-02-09 02:44:11', '2023-02-09 02:44:11'),
(12, '192.168.0.11', 5, '2023-02-09 02:44:11', '2023-02-09 02:44:11'),
(13, '192.168.0.12', 5, '2023-02-09 02:44:11', '2023-02-09 02:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog_widget`
--

CREATE TABLE `tb_blog_widget` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_blog_widget`
--

INSERT INTO `tb_blog_widget` (`id`, `blog_id`, `title`, `description`, `link`, `position`, `created_at`, `updated_at`) VALUES
(2, 5, 'Title Blog ALL-In Eduspace', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'https://www.youtube.com/', 2, '2023-02-13 00:16:24', '2023-02-13 00:41:51'),
(3, 5, 'Title Blog ALL-In Eduspace 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'https://www.google.com/', 4, '2023-02-13 00:43:01', '2023-02-13 00:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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

--
-- Dumping data for table `tb_guidebook`
--

INSERT INTO `tb_guidebook` (`id`, `group`, `guidebook_category`, `guidebook_image`, `guidebook_alt`, `guidebook_link`, `guidebook_status`, `lang`, `created_at`, `updated_at`) VALUES
(7, 20230203100110, 'Getting Started', 'Guidebook-en-20230203100110.webp', 'alt en', 'https://www.google.com/', 'active', 'en', '2023-02-03 03:01:10', '2023-02-06 02:11:23'),
(8, 20230203100110, 'Getting Started', 'Guidebook-id-20230203100110.webp', 'alt id', 'https://www.google.com/', 'active', 'id', '2023-02-03 03:01:10', '2023-02-06 02:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lang`
--

CREATE TABLE `tb_lang` (
  `id` int(11) NOT NULL,
  `language_id` char(2) NOT NULL,
  `language` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lang`
--

INSERT INTO `tb_lang` (`id`, `language_id`, `language`) VALUES
(1, 'en', 'English'),
(2, 'id', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mentor`
--

CREATE TABLE `tb_mentor` (
  `id` int(11) NOT NULL,
  `group` bigint(20) NOT NULL,
  `mentor_firstname` varchar(255) NOT NULL,
  `mentor_lastname` varchar(255) NOT NULL,
  `mentor_slug` varchar(255) NOT NULL,
  `mentor_category` varchar(255) NOT NULL,
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

INSERT INTO `tb_mentor` (`id`, `group`, `mentor_firstname`, `mentor_lastname`, `mentor_slug`, `mentor_category`, `mentor_graduation`, `currently_working`, `expertise`, `description`, `short_desc`, `mentor_picture`, `mentor_alt`, `mentor_status`, `lang`, `created_at`, `updated_at`) VALUES
(19, 20230127155532, 'Chiara', 'Situmorang', 'chiara-situmorang', 'Profile Building Mentor', '<p>BA, University of Melbourne</p>', NULL, NULL, '<h3>If you&rsquo;re looking for a top-notch Canadian university, look no further than the University of Toronto. Moreover, famously known as &lsquo;U of T&rsquo;, the University of Toronto has produced over half a million alumni and is affiliated with 12 Nobel laureates. If you&rsquo;re planning to study there, let&rsquo;s have a look at the University of Toronto acceptance rate!</h3>\n<h2>&nbsp;</h2>\n<h2>An Overview of The University of Toronto</h2>\n<p>&nbsp;</p>\n<p>Founded in 1827, the University of Toronto is a public institution that has three campuses located in and around Toronto. Furthermore, the university is made up of several academic divisions in a wide range of disciplines, including applied science and engineering, public health, social science, and management.</p>\n<p>Across the campuses, the university has more than 44 libraries that house 19 million-plus physical volumes. Moreover, known for its strong focus on research, the University of Toronto receives the most annual scientific research funding and endowment among other Canadian universities. Insulin, which was discovered in the first half of the 1920s, is one of the major innovations that originated at the University of Toronto.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'Mentor-picture-20230127155532.webp', 'image alt', 'active', 'en', '2023-01-27 08:55:32', '2023-02-10 01:52:39'),
(20, 20230127155532, 'Chiara', 'Situmorang', 'chiara-situmorang', 'Profile Building Mentor', '<p>BA, University of Melbourne</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'Mentor-picture-20230127155532.webp', 'image alt', 'active', 'id', '2023-01-27 08:55:32', '2023-02-07 01:06:00'),
(21, 20230130095714, 'Paul', 'Edison', 'paul-edison', 'ALL-In Mentor', '<p>BA, UC Berkeley</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'Mentor-picture-20230130095714.webp', 'image alt', 'active', 'en', '2023-01-30 02:57:14', '2023-01-30 02:57:14'),
(22, 20230130095714, 'Paul', 'Edison', 'paul-edison', 'ALL-In Mentor', '<p>BA, UC Berkeley</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'Mentor-picture-20230130095714.webp', 'image alt', 'active', 'id', '2023-01-30 02:57:14', '2023-01-30 02:57:14'),
(23, 20230130102019, 'Devi', 'Kasih', 'devi-kasih', 'ALL-In Mentor', '<p>University of Pennsylvania</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Short Description EN</p>', 'Mentor-picture-20230130102019.webp', 'image alt', 'active', 'en', '2023-01-30 03:20:19', '2023-01-30 03:22:39'),
(24, 20230130102019, 'Devi', 'Kasih', 'devi-kasih', 'ALL-In Mentor', '<p>University of Pennsylvania</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Short Description ID</p>', 'Mentor-picture-20230130102019.webp', 'image alt', 'active', 'id', '2023-01-30 03:20:19', '2023-01-30 03:22:39'),
(25, 20230130160311, 'Nicholas', 'Soepriatna', 'nicholas-soepriatna', 'ALL-In Mentor', '<p>Purdue University</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'Mentor-picture-20230130160311.webp', 'image alt', 'active', 'en', '2023-01-30 09:03:11', '2023-01-30 09:03:11'),
(26, 20230130160311, 'Nicholas', 'Soepriatna', 'nicholas-soepriatna', 'ALL-In Mentor', '<p>Purdue University</p>', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'Mentor-picture-20230130160311.webp', 'image alt', 'active', 'id', '2023-01-30 09:03:11', '2023-01-30 09:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mentor_video`
--

CREATE TABLE `tb_mentor_video` (
  `id` int(11) NOT NULL,
  `mentor_id` bigint(20) NOT NULL,
  `video_embed` text NOT NULL,
  `youtube_id` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mentor_video`
--

INSERT INTO `tb_mentor_video` (`id`, `mentor_id`, `video_embed`, `youtube_id`, `description`, `created_at`, `updated_at`) VALUES
(14, 20230127155532, 'https://youtu.be/eRb6lymJOIM', 'eRb6lymJOIM', '', '2023-01-27 08:56:02', '2023-01-27 08:56:02'),
(15, 20230130102019, 'https://youtu.be/eRb6lymJOIM', 'eRb6lymJOIM', '', '2023-01-30 03:35:20', '2023-01-30 03:35:20'),
(16, 20230127155532, 'https://youtu.be/J0jaI9WWA5s', 'J0jaI9WWA5s', '', '2023-02-09 02:40:04', '2023-02-09 02:40:04'),
(17, 20230127155532, 'https://youtu.be/J0jaI9WWA5s', 'J0jaI9WWA5s', '', '2023-02-10 02:28:51', '2023-02-10 02:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_region`
--

CREATE TABLE `tb_region` (
  `id` int(11) NOT NULL,
  `region_id` char(2) NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_region`
--

INSERT INTO `tb_region` (`id`, `region_id`, `region`) VALUES
(1, 'id', 'Indonesia'),
(2, 'sg', 'Singapore');

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
(13, 20230201174633, 'Chiara Situmorang', 'Badge 1', 'Badge 2', 'Badge 3', 'Badge 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'active', 'Success-Stories-thumbnail-20230201174633.webp', 'thumbnail alt', 'Success-Stories-achievement-en-20230201174633.jpg', 'alt en', 'https://www.google.com/', 'en', '2023-02-01 10:46:33', '2023-02-03 02:41:35'),
(14, 20230201174633, 'Chiara Situmorang', 'Badge 1', 'Badge 2', 'Badge 3', 'Badge 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'active', 'Success-Stories-thumbnail-20230201174633.webp', 'thumbnail alt', 'Success-Stories-achievement-id-20230201174633.png', 'alt id', 'https://www.google.com/', 'id', '2023-02-01 10:46:33', '2023-02-03 02:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimonial`
--

CREATE TABLE `tb_testimonial` (
  `id` int(11) NOT NULL,
  `group` bigint(20) NOT NULL,
  `testi_name` varchar(255) NOT NULL,
  `testi_desc` text NOT NULL,
  `testi_subtitle` varchar(255) DEFAULT NULL,
  `testi_category` varchar(255) NOT NULL,
  `testi_subcategory` varchar(255) DEFAULT NULL,
  `testi_thumbnail` text DEFAULT NULL,
  `testi_alt` varchar(255) DEFAULT NULL,
  `testi_status` enum('active','inactive') NOT NULL COMMENT '1:active,\r\n2:inactive',
  `lang` char(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_testimonial`
--

INSERT INTO `tb_testimonial` (`id`, `group`, `testi_name`, `testi_desc`, `testi_subtitle`, `testi_category`, `testi_subcategory`, `testi_thumbnail`, `testi_alt`, `testi_status`, `lang`, `created_at`, `updated_at`) VALUES
(7, 20230201134324, 'Paul Edison', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>', 'Admissions Mentoring', 'Undergraduate Program', 'Testimonial-thumbnail-20230201134324.webp', 'alt', 'active', 'en', '2023-02-01 06:43:24', '2023-02-02 08:04:54'),
(8, 20230201134324, 'Paul Edison', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>', 'Admissions Mentoring', 'Undergraduate Program', 'Testimonial-thumbnail-20230201134324.webp', 'alt', 'active', 'id', '2023-02-01 06:43:24', '2023-02-02 08:04:54'),
(9, 20230201140737, 'Chiara Situmorang', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, 'Experiential Learning', NULL, 'Testimonial-thumbnail-20230201140737.webp', 'alt', 'active', 'en', '2023-02-01 07:07:37', '2023-02-10 02:27:10'),
(10, 20230201140737, 'Chiara Situmorang', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, 'Experiential Learning', NULL, 'Testimonial-thumbnail-20230201140737.webp', 'alt', 'active', 'id', '2023-02-01 07:07:37', '2023-02-10 02:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tutor`
--

CREATE TABLE `tb_tutor` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `thumbnail` text NOT NULL,
  `alt` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL COMMENT '1:active,\r\n2:inactive',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tutor`
--

INSERT INTO `tb_tutor` (`id`, `full_name`, `experience`, `subject`, `thumbnail`, `alt`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Devi Kasih', 'University of Pennsylvania', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'Tutors-thumbnail-20230206103516.webp', 'alt', 'active', '2023-02-06 03:35:16', '2023-02-06 03:38:57'),
(4, 'Chiara Situmorang', 'BA, University of Melbourne', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'Tutors-thumbnail-20230206103620.webp', 'alt', 'active', '2023-02-06 03:36:20', '2023-02-07 00:56:58');

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
  `event_status` enum('draft','publish') NOT NULL COMMENT '1:draft,\r\n2:publish',
  `region` char(2) NOT NULL,
  `lang` char(2) NOT NULL,
  `publish_date` datetime NOT NULL,
  `take_off_date` datetime NOT NULL,
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
-- Indexes for table `tb_blog_read`
--
ALTER TABLE `tb_blog_read`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_blog_widget`
--
ALTER TABLE `tb_blog_widget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_guidebook`
--
ALTER TABLE `tb_guidebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lang`
--
ALTER TABLE `tb_lang`
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
-- Indexes for table `tb_region`
--
ALTER TABLE `tb_region`
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
-- Indexes for table `tb_tutor`
--
ALTER TABLE `tb_tutor`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_blog_category`
--
ALTER TABLE `tb_blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_blog_read`
--
ALTER TABLE `tb_blog_read`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_blog_widget`
--
ALTER TABLE `tb_blog_widget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_guidebook`
--
ALTER TABLE `tb_guidebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_lang`
--
ALTER TABLE `tb_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_mentor`
--
ALTER TABLE `tb_mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_mentor_video`
--
ALTER TABLE `tb_mentor_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_region`
--
ALTER TABLE `tb_region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_success_stories`
--
ALTER TABLE `tb_success_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_tutor`
--
ALTER TABLE `tb_tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
