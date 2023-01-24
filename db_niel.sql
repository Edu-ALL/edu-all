-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 03:09 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
(5, 20221209021204, 'Banner-en-20221209021204.png', 'alt en', 'title en', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'button en', 'link en', 'active', 'en', '2022-12-08 19:12:04', '2022-12-12 04:33:31'),
(6, 20221209021204, 'Banner-id-20221209021204.png', 'alt id', 'title id', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'button id', 'link id', 'active', 'id', '2022-12-08 19:12:04', '2022-12-12 04:33:31'),
(7, 20221212130737, 'Banner-en-20221212130737.webp', 'alt en', 'title en', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'button en', 'link en', 'active', 'en', '2022-12-12 06:07:38', '2022-12-12 06:07:38'),
(8, 20221212130737, 'Banner-id-20221212130737.webp', 'alt id', 'title id', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'button id', 'link id', 'active', 'id', '2022-12-12 06:07:38', '2022-12-12 06:07:38');

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

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id`, `slug`, `cat_id`, `mt_id`, `blog_title`, `blog_description`, `blog_thumbnail`, `blog_thumbnail_alt`, `blog_status`, `seo_title`, `seo_keyword`, `seo_desc`, `lang`, `click_count`, `duration_read`, `is_highlight`, `created_at`, `updated_at`) VALUES
(1, 'how-to-make-a-delicious-pizza', 2, 4, 'How to Make a Delicious Pizza', 'Pizza is a popular dish that is loved by many people. In this tutorial, we will show you how to make a delicious pizza with a crispy crust and flavorful toppings.', 'pizza.jpg', 'A delicious pizza', '', 'How to Make a Delicious Pizza - My Blog', 'pizza, recipe, homemade', 'Learn how to make a delicious homemade pizza with this easy-to-follow tutorial.', 'en', 100, 5, '', '0000-00-00 00:00:00', '2023-01-20 01:20:26'),
(2, 'cara-membuat-kue-basah-yang-lembut', 3, 5, 'Cara Membuat Kue Basah yang Lembut', 'Kue basah adalah salah satu jenis kue yang disukai banyak orang. Dalam tutorial ini, kami akan menunjukkan cara membuat kue basah yang lembut dan enak.', 'kuebasah.jpg', 'Kue basah yang lembut', '', 'Cara Membuat Kue Basah yang Lembut - Blog Saya', 'kue basah, resep, homemade', 'Pelajari cara membuat kue basah yang lembut dan homemade dengan tutorial mudah diikuti.', 'id', 80, 4, '', '0000-00-00 00:00:00', '2023-01-20 01:20:26'),
(3, 'how-to-grow-your-own-vegetables', 1, 3, 'How to Grow Your Own Vegetables', 'Growing your own vegetables is a great way to have fresh produce on hand and save money. In this tutorial, we will show you how to start your own vegetable garden.', 'vegetable_garden.jpg', 'A vegetable garden', '', 'How to Grow Your Own Vegetables - My Blog', 'vegetable garden, gardening, DIY', 'Learn how to start your own vegetable garden and enjoy fresh produce with this easy-to-follow tutorial.', 'en', 120, 6, '', '0000-00-00 00:00:00', '2023-01-20 01:20:26'),
(4, 'cara-membuat-susu-kacang-almond', 3, 2, 'Cara Membuat Susu Kacang Almond', 'Susu kacang almond adalah minuman sehat yang banyak digemari. Dalam tutorial ini, kami akan menunjukkan cara membuat susu kacang almond yang sehat dan lezat.', 'susu_almond.jpg', 'Susu kacang almond', '', 'Cara Membuat Susu Kacang Almond - Blog Saya', 'susu kacang almond, resep, homemade', 'Pelajari cara membuat susu kacang almond yang sehat dan homemade dengan tutorial mudah diikuti.', 'id', 90, 3, '', '0000-00-00 00:00:00', '2023-01-20 01:20:26'),
(6, 'cara-membuat-es-krim-rumah', 3, 2, 'Cara Membuat Es Krim Rumah', 'Es krim adalah makanan yang disukai banyak orang. Dalam tutorial ini, kami akan menunjukkan cara membuat es krim rumah yang lezat dan sehat.', 'eskrim.jpg', 'Es krim homemade', '', 'Cara Membuat Es Krim Rumah - Blog Saya', 'es krim, resep, homemade', 'Pelajari cara membuat es krim homemade yang lezat dan sehat dengan tutorial mudah diikuti.', 'id', 120, 6, '', '0000-00-00 00:00:00', '2023-01-20 01:47:38'),
(7, 'how-to-knit-a-scarf', 1, 4, 'How to Knit a Scarf', 'Knitting is a fun and relaxing hobby that can also create beautiful and useful items. In this tutorial, we will show you how to knit a warm and cozy scarf.', 'knitted_scarf.jpg', 'A knitted scarf', '', 'How to Knit a Scarf - My Blog', 'knitting, scarf, DIY', 'Learn how to knit a cozy scarf with this easy-to-follow tutorial.', 'en', 80, 4, '', '0000-00-00 00:00:00', '2023-01-20 01:47:38'),
(8, 'cara-membuat-kue-bolu-coklat', 3, 5, 'Cara Membuat Kue Bolu Coklat', 'Kue bolu coklat adalah salah satu jenis kue yang disukai banyak orang. Dalam tutorial ini, kami akan menunjukkan cara membuat kue bolu coklat yang lembut dan enak.', 'kuebolu.jpg', 'Kue bolu coklat yang lembut', '', 'Cara Membuat Kue Bolu Coklat - Blog Saya', 'kue bolu coklat, resep, homemade', 'Pelajari cara membuat kue bolu coklat yang lembut dan homemade dengan tutorial mudah diikuti.', 'id', 90, 3, '', '0000-00-00 00:00:00', '2023-01-20 01:47:38'),
(9, 'how-to-create-a-budget-plan', 1, 2, 'How to Create a Budget Plan', 'Creating a budget plan can help you take control of your finances and reach your financial goals. In this tutorial, we will show you how to create a budget plan that works for you.', 'budget_plan.jpg', 'A budget plan', '', 'How to Create a Budget Plan - My Blog', 'budget, finances, DIY', 'Learn how to create a budget plan that works for you with this easy-to-follow tutorial.', 'en', 70, 3, '', '0000-00-00 00:00:00', '2023-01-20 01:47:38'),
(10, 'how-to-make-a-delicious-pizza', 2, 4, 'How to Make a Delicious Pizza', 'Pizza is a popular dish that is loved by many people. In this tutorial, we will show you how to make a delicious pizza with a crispy crust and flavorful toppings.', 'pizza.jpg', 'A delicious pizza', '', 'How to Make a Delicious Pizza - My Blog', 'pizza, recipe, homemade', 'Learn how to make a delicious homemade pizza with this easy-to-follow tutorial.', 'en', 100, 5, '', '0000-00-00 00:00:00', '2023-01-20 01:47:38'),
(12, 'cara-membuat-kue-basah-yang-lembut', 3, 5, 'Cara Membuat Kue Basah yang Lembut', 'Kue basah adalah salah satu jenis kue yang disukai banyak orang. Dalam tutorial ini, kami akan menunjukkan cara membuat kue basah yang lembut dan enak.', 'image-9.jpg', 'Kue basah yang lembut', '', 'Cara Membuat Kue Basah yang Lembut - Blog Saya', 'kue basah, resep, homemade', 'Pelajari cara membuat kue basah yang lembut dan homemade dengan tutorial mudah diikuti.', 'id', 80, 4, '', '0000-00-00 00:00:00', '2023-01-20 03:46:11'),
(13, 'how-to-grow-your-own-vegetables', 1, 3, 'How to Grow Your Own Vegetables', 'Growing your own vegetables is a great way to have fresh produce on hand and save money. In this tutorial, we will show you how to start your own vegetable garden.', 'vegetable_garden.jpg', 'A vegetable garden', '', 'How to Grow Your Own Vegetables - My Blog', 'vegetable garden, gardening, DIY', 'Learn how to start your own vegetable garden and enjoy fresh produce with this easy-to-follow tutorial.', 'en', 120, 6, '', '0000-00-00 00:00:00', '2023-01-20 01:47:38'),
(14, 'cara-membuat-susu-kacang-almond', 3, 2, 'Cara Membuat Susu Kacang Almond', 'Susu kacang almond adalah minuman sehat yang banyak digemari. Dalam tutorial ini, kami akan menunjukkan cara membuat susu kacang almond yang sehat dan lezat.', 'susu_almond.jpg', 'Susu kacang almond', '', 'Cara Membuat Susu Kacang Almond - Blog Saya', 'susu kacang almond, resep, homemade', 'Pelajari cara membuat susu kacang almond yang sehat dan homemade dengan tutorial mudah diikuti.', 'id', 90, 3, '', '0000-00-00 00:00:00', '2023-01-20 01:47:38'),
(15, 'how-to-make-the-perfect-cup-of-coffee', 4, 1, 'How to Make the Perfect Cupof Coffee', 'Coffee is a daily staple for many people, but not all coffee is created equal. In this tutorial, we will show you how to make the perfect cup of coffee with just the right balance of flavor and strength.', 'coffee.jpg', 'A delicious cup of coffee', '', 'How to Make the Perfect Cup of Coffee - My Blog', 'coffee, brewing, DIY', 'Learn how to brew the perfect cup of coffee with this easy-to-follow tutorial.', 'en', 150, 7, '', '0000-00-00 00:00:00', '2023-01-20 01:47:38'),
(21, 'how-to-make-a-delicious-pizza', 2, 4, 'How to Make a Delicious Pizza', 'Pizza is a popular dish that is loved by many people. In this tutorial, we will show you how to make a delicious pizza with a crispy crust and flavorful toppings.', 'pizza.jpg', 'A delicious pizza', '', 'How to Make a Delicious Pizza - My Blog', 'pizza, recipe, homemade', 'Learn how to make a delicious homemade pizza with this easy-to-follow tutorial.', 'en', 100, 5, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(22, 'cara-membuat-kue-basah-yang-lembut', 3, 5, 'Cara Membuat Kue Basah yang Lembut', 'Kue basah adalah salah satu jenis kue yang disukai banyak orang. Dalam tutorial ini, kami akan menunjukkan cara membuat kue basah yang lembut dan enak.', 'kuebasah.jpg', 'Kue basah yang lembut', '', 'Cara Membuat Kue Basah yang Lembut - Blog Saya', 'kue basah, resep, homemade', 'Pelajari cara membuat kue basah yang lembut dan homemade dengan tutorial mudah diikuti.', 'id', 80, 4, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(23, 'how-to-grow-your-own-vegetables', 1, 3, 'How to Grow Your Own Vegetables', 'Growing your own vegetables is a great way to have fresh produce on hand and save money. In this tutorial, we will show you how to start your own vegetable garden.', 'vegetable_garden.jpg', 'A vegetable garden', '', 'How to Grow Your Own Vegetables - My Blog', 'vegetable garden, gardening, DIY', 'Learn how to start your own vegetable garden and enjoy fresh produce with this easy-to-follow tutorial.', 'en', 120, 6, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(24, 'cara-membuat-susu-kacang-almond', 3, 2, 'Cara Membuat Susu Kacang Almond', 'Susu kacang almond adalah minuman sehat yang banyak digemari. Dalam tutorial ini, kami akan menunjukkan cara membuat susu kacang almond yang sehat dan lezat.', 'susu_almond.jpg', 'Susu kacang almond', '', 'Cara Membuat Susu Kacang Almond - Blog Saya', 'susu kacang almond, resep, homemade', 'Pelajari cara membuat susu kacang almond yang sehat dan homemade dengan tutorial mudah diikuti.', 'id', 90, 3, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(25, 'how-to-make-the-perfect-cup-of-coffee', 4, 1, 'How to Make the Perfect Cupof Coffee', 'Coffee is a daily staple for many people, but not all coffee is created equal. In this tutorial, we will show you how to make the perfect cup of coffee with just the right balance of flavor and strength.', 'coffee.jpg', 'A delicious cup of coffee', '', 'How to Make the Perfect Cup of Coffee - My Blog', 'coffee, brewing, DIY', 'Learn how to brew the perfect cup of coffee with this easy-to-follow tutorial.', 'en', 150, 7, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(26, 'cara-membuat-es-krim-rumah', 3, 2, 'Cara Membuat Es Krim Rumah', 'Es krim adalah makanan yang disukai banyak orang. Dalam tutorial ini, kami akan menunjukkan cara membuat es krim rumah yang lezat dan sehat.', 'eskrim.jpg', 'Es krim homemade', '', 'Cara Membuat Es Krim Rumah - Blog Saya', 'es krim, resep, homemade', 'Pelajari cara membuat es krim homemade yang lezat dan sehat dengan tutorial mudah diikuti.', 'id', 120, 6, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(27, 'how-to-knit-a-scarf', 1, 4, 'How to Knit a Scarf', 'Knitting is a fun and relaxing hobby that can also create beautiful and useful items. In this tutorial, we will show you how to knit a warm and cozy scarf.', 'knitted_scarf.jpg', 'A knitted scarf', '', 'How to Knit a Scarf - My Blog', 'knitting, scarf, DIY', 'Learn how to knit a cozy scarf with this easy-to-follow tutorial.', 'en', 80, 4, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(28, 'cara-membuat-kue-bolu-coklat', 3, 5, 'Cara Membuat Kue Bolu Coklat', 'Kue bolu coklat adalah salah satu jenis kue yang disukai banyak orang. Dalam tutorial ini, kami akan menunjukkan cara membuat kue bolu coklat yang lembut dan enak.', 'kuebolu.jpg', 'Kue bolu coklat yang lembut', '', 'Cara Membuat Kue Bolu Coklat - Blog Saya', 'kue bolu coklat, resep, homemade', 'Pelajari cara membuat kue bolu coklat yang lembut dan homemade dengan tutorial mudah diikuti.', 'id', 90, 3, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(29, 'how-to-create-a-budget-plan', 1, 2, 'How to Create a Budget Plan', 'Creating a budget plan can help you take control of your finances and reach your financial goals. In this tutorial, we will show you how to create a budget plan that works for you.', 'budget_plan.jpg', 'A budget plan', '', 'How to Create a Budget Plan - My Blog', 'budget, finances, DIY', 'Learn how to create a budget plan that works for you with this easy-to-follow tutorial.', 'en', 70, 3, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(31, 'how-to-make-a-delicious-pizza', 2, 4, 'How to Make a Delicious Pizza', 'Pizza is a popular dish that is loved by many people. In this tutorial, we will show you how to make a delicious pizza with a crispy crust and flavorful toppings.', 'pizza.jpg', 'A delicious pizza', '', 'How to Make a Delicious Pizza - My Blog', 'pizza, recipe, homemade', 'Learn how to make a delicious homemade pizza with this easy-to-follow tutorial.', 'en', 100, 5, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(32, 'cara-membuat-kue-basah-yang-lembut', 3, 5, 'Cara Membuat Kue Basah yang Lembut', 'Kue basah adalah salah satu jenis kue yang disukai banyak orang. Dalam tutorial ini, kami akan menunjukkan cara membuat kue basah yang lembut dan enak.', 'kuebasah.jpg', 'Kue basah yang lembut', '', 'Cara Membuat Kue Basah yang Lembut - Blog Saya', 'kue basah, resep, homemade', 'Pelajari cara membuat kue basah yang lembut dan homemade dengan tutorial mudah diikuti.', 'id', 80, 4, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(33, 'how-to-grow-your-own-vegetables', 1, 3, 'How to Grow Your Own Vegetables', 'Growing your own vegetables is a great way to have fresh produce on hand and save money. In this tutorial, we will show you how to start your own vegetable garden.', 'vegetable_garden.jpg', 'A vegetable garden', '', 'How to Grow Your Own Vegetables - My Blog', 'vegetable garden, gardening, DIY', 'Learn how to start your own vegetable garden and enjoy fresh produce with this easy-to-follow tutorial.', 'en', 120, 6, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(34, 'cara-membuat-susu-kacang-almond', 3, 2, 'Cara Membuat Susu Kacang Almond', 'Susu kacang almond adalah minuman sehat yang banyak digemari. Dalam tutorial ini, kami akan menunjukkan cara membuat susu kacang almond yang sehat dan lezat.', 'susu_almond.jpg', 'Susu kacang almond', '', 'Cara Membuat Susu Kacang Almond - Blog Saya', 'susu kacang almond, resep, homemade', 'Pelajari cara membuat susu kacang almond yang sehat dan homemade dengan tutorial mudah diikuti.', 'id', 90, 3, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(35, 'how-to-make-the-perfect-cup-of-coffee', 4, 1, 'How to Make the Perfect Cupof Coffee', 'Coffee is a daily staple for many people, but not all coffee is created equal. In this tutorial, we will show you how to make the perfect cup of coffee with just the right balance of flavor and strength.', 'coffee.jpg', 'A delicious cup of coffee', '', 'How to Make the Perfect Cup of Coffee - My Blog', 'coffee, brewing, DIY', 'Learn how to brew the perfect cup of coffee with this easy-to-follow tutorial.', 'en', 150, 7, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(36, 'cara-membuat-es-krim-rumah', 3, 2, 'Cara Membuat Es Krim Rumah', 'Es krim adalah makanan yang disukai banyak orang. Dalam tutorial ini, kami akan menunjukkan cara membuat es krim rumah yang lezat dan sehat.', 'eskrim.jpg', 'Es krim homemade', '', 'Cara Membuat Es Krim Rumah - Blog Saya', 'es krim, resep, homemade', 'Pelajari cara membuat es krim homemade yang lezat dan sehat dengan tutorial mudah diikuti.', 'id', 120, 6, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(37, 'how-to-knit-a-scarf', 1, 4, 'How to Knit a Scarf', 'Knitting is a fun and relaxing hobby that can also create beautiful and useful items. In this tutorial, we will show you how to knit a warm and cozy scarf.', 'knitted_scarf.jpg', 'A knitted scarf', '', 'How to Knit a Scarf - My Blog', 'knitting, scarf, DIY', 'Learn how to knit a cozy scarf with this easy-to-follow tutorial.', 'en', 80, 4, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(38, 'cara-membuat-kue-bolu-coklat', 3, 5, 'Cara Membuat Kue Bolu Coklat', 'Kue bolu coklat adalah salah satu jenis kue yang disukai banyak orang. Dalam tutorial ini, kami akan menunjukkan cara membuat kue bolu coklat yang lembut dan enak.', 'kuebolu.jpg', 'Kue bolu coklat yang lembut', '', 'Cara Membuat Kue Bolu Coklat - Blog Saya', 'kue bolu coklat, resep, homemade', 'Pelajari cara membuat kue bolu coklat yang lembut dan homemade dengan tutorial mudah diikuti.', 'id', 90, 3, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10'),
(39, 'how-to-create-a-budget-plan', 1, 2, 'How to Create a Budget Plan', 'Creating a budget plan can help you take control of your finances and reach your financial goals. In this tutorial, we will show you how to create a budget plan that works for you.', 'budget_plan.jpg', 'A budget plan', '', 'How to Create a Budget Plan - My Blog', 'budget, finances, DIY', 'Learn how to create a budget plan that works for you with this easy-to-follow tutorial.', 'en', 70, 3, '', '0000-00-00 00:00:00', '2023-01-20 05:24:10');

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
(1, 20221215030358, 'Sport/Esport', 'en', '2022-12-14 20:03:58', '2022-12-14 20:14:13'),
(2, 20221215030358, 'Olahraga', 'id', '2022-12-14 20:03:58', '2022-12-14 20:14:13'),
(5, 20230120092745, 'Admission Mentoring', 'en', '2023-01-20 02:27:45', '2023-01-20 02:27:45'),
(6, 20230120092745, 'Admission Mentoring', 'id', '2023-01-20 02:27:45', '2023-01-20 02:27:45'),
(7, 20230120092756, 'Tips & Insight', 'en', '2023-01-20 02:27:56', '2023-01-20 02:27:56'),
(8, 20230120092756, 'Tips & Insight', 'id', '2023-01-20 02:27:56', '2023-01-20 02:27:56'),
(9, 20230120092809, 'Experential Learning', 'en', '2023-01-20 02:28:09', '2023-01-20 02:28:09'),
(10, 20230120092809, 'Belajar Experential', 'id', '2023-01-20 02:28:09', '2023-01-20 02:28:09'),
(11, 20230120092826, 'Academic Preparation', 'en', '2023-01-20 02:28:26', '2023-01-20 02:28:26'),
(12, 20230120092826, 'Persiapan Academic', 'id', '2023-01-20 02:28:26', '2023-01-20 02:28:26');

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
(5, 20221221060328, 'category en', 'Guidebook-en-20221221060328.png', 'alt en', 'link en', 'active', 'en', '2022-12-20 23:03:28', '2022-12-20 23:03:28'),
(6, 20221221060328, 'category id', 'Guidebook-id-20221221060328.png', 'alt id', 'link id', 'active', 'id', '2022-12-20 23:03:28', '2022-12-20 23:03:28');

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

--
-- Dumping data for table `tb_testimonial`
--

INSERT INTO `tb_testimonial` (`id`, `group`, `testi_name`, `testi_desc`, `testi_program`, `testi_category`, `testi_thumbnail`, `testi_alt`, `testi_status`, `lang`, `created_at`, `updated_at`) VALUES
(1, 20221215043252, 'Fulan', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>', 'Program en', 'Experiental Learning', 'Thumbnail-testi-en-20221215043252.png', 'alt en', 'active', 'en', '2022-12-14 21:32:52', '2022-12-14 21:33:37'),
(2, 20221215043252, 'Fulan', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>', 'Program id', 'Experiental Learning', 'Thumbnail-testi-id-20221215043252.png', 'alt id', 'active', 'id', '2022-12-14 21:32:52', '2022-12-14 21:33:37');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
