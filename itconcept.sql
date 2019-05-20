-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 12:26 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itconcept`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text,
  `extra` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `type_id`, `date`, `username`, `password`, `name`, `email`, `phone`, `address`, `extra`) VALUES
(1, 100, NULL, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_type`
--

CREATE TABLE `admin_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `privileges` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_type`
--

INSERT INTO `admin_type` (`id`, `name`, `privileges`) VALUES
(100, 'admin', '["AdminType","Admin","Testimonial","Menu","Page","Content","News","Service","Banner","Gallery","Configuration"]');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` varchar(2) NOT NULL,
  `group` varchar(255) DEFAULT NULL,
  `index` int(10) UNSIGNED DEFAULT NULL,
  `picture` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `new_tab` tinyint(1) UNSIGNED DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Banner Table';

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `language`, `group`, `index`, `picture`, `url`, `new_tab`, `name`, `description`) VALUES
(1, '', 'sliding', 0, 'banner-1.jpg', NULL, 0, NULL, NULL),
(2, '', 'sliding', 0, 'banner-4.jpg', NULL, 0, NULL, NULL),
(3, '', 'sliding', 0, 'banner-5.jpg', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `configuration_id` int(10) UNSIGNED NOT NULL,
  `domain` varchar(255) NOT NULL,
  `key_name` varchar(255) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`configuration_id`, `domain`, `key_name`, `value`) VALUES
(1, 'www', 'content_home', NULL),
(2, 'www', 'web_logo', 'logo_1.png'),
(3, 'www', 'web_title', NULL),
(4, 'www', 'copyright_en', NULL),
(5, 'www', 'meta_name_description', NULL),
(6, 'www', 'meta_name_keywords', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` char(2) NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `index` int(10) UNSIGNED DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `mode` varchar(100) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_picture`
--

CREATE TABLE `gallery_picture` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_id` int(10) UNSIGNED NOT NULL,
  `index` int(10) UNSIGNED DEFAULT NULL,
  `picture` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` varchar(2) NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `index` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `type` int(1) UNSIGNED NOT NULL DEFAULT '1',
  `value` varchar(255) DEFAULT NULL,
  `new_tab` tinyint(1) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Menu Table';

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` varchar(2) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'news',
  `code` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(10) UNSIGNED NOT NULL,
  `sort_order` int(10) UNSIGNED DEFAULT '0',
  `language` varchar(2) NOT NULL DEFAULT 'en',
  `type` varchar(20) NOT NULL DEFAULT 'page',
  `date` datetime DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `short_desc` text,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page_tab`
--

CREATE TABLE `page_tab` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `index` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `index` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `short_description` text,
  `description` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `extra` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `index`, `name`, `short_description`, `description`, `picture`, `extra`) VALUES
(1, 1, '{"en":"WEBSITE & MOBILE DEVELOPMENT"}', NULL, '{"en":"<p>Creative Design, UI & UX, Content Management System, Ecommerce, Web & Mobile Application, Hosting & Email, Web Maintenance<\\/p>\\n"}', NULL, NULL),
(2, 2, '{"en":"SEARCH ENGINE OPTIMIZATION (SEO)"}', NULL, '{"en":"<p>Hasil pencarian paling atas pada mesin pencari tanpa membayar apapun pada Google (BERGARANSI). Baik pencarian secara local, nasional, and global.<\\/p>\\n"}', NULL, NULL),
(3, 3, '{"en":"DIGITAL ACTIVATION"}', NULL, '{"en":"<p>Social Media Management, Social Media Campaign, Content Writing, Email Marketing<\\/p>\\n"}', NULL, NULL),
(4, 4, '{"en":"GRAPHIC DESIGN"}', NULL, '{"en":"<p>Design untuk memaksimalkan brand identitas anda<\\/p>\\n"}', NULL, NULL),
(5, 5, '{"en":"PRODUCTION"}', NULL, '{"en":"<p>Photography, Video & Multimedia.<\\/p>\\n"}', NULL, NULL),
(6, 6, '{"en":"PPC"}', NULL, '{"en":null}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` varchar(2) NOT NULL DEFAULT 'en',
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` varchar(2) NOT NULL,
  `date` datetime DEFAULT NULL,
  `date_closed` datetime DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video_subscriber`
--

CREATE TABLE `video_subscriber` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` varchar(2) NOT NULL DEFAULT 'en',
  `date` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_unique` (`username`);

--
-- Indexes for table `admin_type`
--
ALTER TABLE `admin_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`configuration_id`),
  ADD UNIQUE KEY `unique_configuration` (`domain`,`key_name`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_unique` (`language`,`code`);

--
-- Indexes for table `gallery_picture`
--
ALTER TABLE `gallery_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_news` (`language`,`code`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_page` (`code`);

--
-- Indexes for table `page_tab`
--
ALTER TABLE `page_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_page` (`language`,`code`);

--
-- Indexes for table `video_subscriber`
--
ALTER TABLE `video_subscriber`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_type`
--
ALTER TABLE `admin_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `configuration_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery_picture`
--
ALTER TABLE `gallery_picture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page_tab`
--
ALTER TABLE `page_tab`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video_subscriber`
--
ALTER TABLE `video_subscriber`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
