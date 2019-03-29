-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2019 at 09:13 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astropack`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `sub_title` varchar(100) DEFAULT NULL,
  `about_company` longtext,
  `our_vision` mediumtext,
  `our_mission` mediumtext,
  `image` varchar(15) DEFAULT NULL,
  `video` varchar(15) DEFAULT NULL,
  `our_dealership_companies` longtext,
  `section2` longtext,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `sub_title`, `about_company`, `our_vision`, `our_mission`, `image`, `video`, `our_dealership_companies`, `section2`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Astropack Gulf', '15 years of experience in the inkjet industry  with all leading', '<p>Astropack Gulf LLC has been established in the Middle East Region with a mission to continue the legacy of our team in the market by providing unmatched support to the processing and packaging industries. Service Engineers under the technical head who has over 15 years of experience in the inkjet industry, with all leading brands. All engineers are qualified &amp; trained personnel with senior staff having extensive experience of installation and support of inkjet machines in the Middle East.Sharing the responsibility of our principals, we are honored to be your partner and satisfy your requirements from the inception of your ideas up to the implementation of your projects. We are able to support you in the following products /applications: Industrial Inkjet Printers, Thermal Transfer Printers, HP industrial Carton coding printers, Laser Coding Machines, Inspections Systems, Metal Detection, X-Ray Inspection, Check-weighing machines, Flow-wrappers, Packaging Machines, Consumables, Spares, technical support for EBS &amp; Imaje Printers, The after-sales, technical support needs of our customers are in responsible hands. With an experience, skilled team of engineers, Astropack Gulf will conduct the installation, the start up and finally the commissioning of your valuable equipment.</p>\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'jpg', 'mp4', '<ul>\r\n	<li>ASTROPACKGULF are exclusive distributors for EBS&reg; range of Coding GERMANY, Marking machines and consumables.</li>\r\n	<li>EBS CIJ Printers for various applications.</li>\r\n	<li>Advanced Ink-Jet Printer for Super Quick and Easy Changeovers.</li>\r\n	<li>Large Character Low Resolution Printer (EBS-1500).</li>\r\n	<li>Modular Ink-Jet Controller for Large Character Printing.</li>\r\n	<li>Large Character High Resolution Printer (EBS-2500.)</li>\r\n	<li>Complete Coding Solution with Maximum Flexibility.</li>\r\n	<li>Easy-to-Handle, Replaces Expensive Labels.</li>\r\n	<li>Portable Ink-Jet Technology Lightweight, Compact Wireless Coding.</li>\r\n	<li>ASTROPACK GULF is stockist for all consumables for the EBS range of products.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>THERMAL TRANSFER PRINTERS.</li>\r\n	<li>SAVEMA thermal transfer printer modules are very cost effective thermal transfer printers, versatile enough for printing fixed and variable text, data and graphics. It is ideal for reproducing bar codes, real time, sell-by dates, batch numbers, rices, source codes and much more.</li>\r\n	<li>ELFIN series hp Technology Printers from Sojet.</li>\r\n	<li>Solaris laser coding solutions.</li>\r\n	<li>Thermo scientific inspection systems.&nbsp;</li>\r\n	<li>With more than 20 years as the market leader in the product inspection industry Thermo Scientific&reg; has been setting the standards for others to follow in the contamination detection and product recovery.</li>\r\n</ul>\r\n', 1, 1, 1, '2019-01-14', '2019-03-23 08:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `admin_posts`
--

CREATE TABLE IF NOT EXISTS `admin_posts` (
  `id` int(11) NOT NULL,
  `post_name` varchar(280) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `cms_contents` int(11) DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` datetime DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_posts`
--

INSERT INTO `admin_posts` (`id`, `post_name`, `admin`, `cms_contents`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Super Admin', 1, 1, 1, 1, 1, '2017-03-09 00:00:00', '2018-06-08 08:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `employee_code` varchar(280) DEFAULT NULL,
  `user_name` varchar(280) DEFAULT NULL,
  `password` varchar(280) DEFAULT NULL,
  `name` varchar(280) DEFAULT NULL,
  `email` varchar(280) DEFAULT NULL,
  `phone_number` varchar(280) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` datetime DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `post_id`, `employee_code`, `user_name`, `password`, `name`, `email`, `phone_number`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 1, '005', 'testing', '$2y$13$PGnWl5oyvJnWiUt6d41Byu8ZWSOh0VmyYshHpD.vVRsfP1lOD9kJO', ' CDA Admin', 'manu@azryah.com', '9876543210', 1, 10, 1, '2017-03-16 00:00:00', '2019-01-15 09:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `baner_images`
--

CREATE TABLE IF NOT EXISTS `baner_images` (
  `id` int(11) NOT NULL,
  `about` varchar(100) DEFAULT NULL,
  `products` varchar(100) DEFAULT NULL,
  `brands` varchar(100) DEFAULT NULL,
  `services` varchar(100) DEFAULT NULL,
  `events` varchar(100) DEFAULT NULL,
  `contact_us` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baner_images`
--

INSERT INTO `baner_images` (`id`, `about`, `products`, `brands`, `services`, `events`, `contact_us`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'jpg', 'jpg', 'jpg', 'jpg', 'jpg', 'jpg', 1, 1, 1, '2019-01-14', '2019-03-23 06:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `canonical_name` varchar(255) DEFAULT NULL,
  `small_description` text,
  `detailed_description` longtext,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_keyword` text,
  `meta_description` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `author`, `date`, `title`, `canonical_name`, `small_description`, `detailed_description`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'jpg', 'admin', '2019-01-14', 'Professional lorem ipsum generator orem for typographers', 'professional-lorem-ipsum-generator-orem-for-typographers', 'It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a ''ready-made'' text to sing with the', '<p style="text-align:justify">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style="text-align:justify">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style="text-align:justify">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n', 'Professional', 'Professional lorem ipsum generator orem for typographers', 'Professional lorem ipsum generator orem for typographers', 1, 1, 1, '2019-01-14', '2019-01-15 04:59:30'),
(2, 'jpg', 'admin', '2019-01-14', 'Professional lorem ipsum generator orem for typographers', 'professional-lorem-ipsum-generator-orem-for-typographers', 'It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a ''ready-made'' text to sing with the', '<p style="text-align:justify">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style="text-align:justify">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style="text-align:justify">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n', 'Professional', 'Professional lorem ipsum generator orem for typographers', 'Professional lorem ipsum generator orem for typographers', 1, 1, 1, '2019-01-14', '2019-01-15 04:59:30'),
(3, 'jpg', 'admin', '2019-01-14', 'Professional lorem ipsum generator orem for typographers', 'professional-lorem-ipsum-generator-orem-for-typographers', 'It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a ''ready-made'' text to sing with the', '<p style="text-align:justify">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style="text-align:justify">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style="text-align:justify">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n', 'Professional', 'Professional lorem ipsum generator orem for typographers', 'Professional lorem ipsum generator orem for typographers', 1, 1, 1, '2019-01-14', '2019-01-15 04:59:30'),
(4, 'jpg', 'admin', '2019-01-14', 'Professional lorem ipsum generator orem for typographers', 'professional-lorem-ipsum-generator-orem-for-typographerss', 'It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a ''ready-made'' text to sing with the', '<p style="text-align:justify">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style="text-align:justify">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style="text-align:justify">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n', 'Professional', 'Professional lorem ipsum generator orem for typographers', 'Professional lorem ipsum generator orem for typographers', 1, 1, 1, '2019-01-14', '2019-01-15 04:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(100) DEFAULT NULL,
  `image` varchar(15) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `image`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'EBS', 'png', 1, 1, 1, '2019-03-23', '2019-03-26 12:20:40'),
(2, 'Savema', 'png', 1, 1, 1, '2019-03-23', '2019-03-26 12:20:53'),
(3, 'Thermo', 'png', 1, 1, 1, '2019-03-23', '2019-03-26 12:21:07'),
(4, 'Omag', 'png', 1, 1, 1, '2019-03-23', '2019-03-26 12:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `image`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Client1', 'png', 1, 1, 1, '2019-01-14', '2019-03-23 04:14:24'),
(2, 'Client2', 'png', 1, 1, 1, '2019-01-14', '2019-03-23 04:15:10'),
(3, 'Client3', 'png', 1, 1, 1, '2019-01-14', '2019-03-23 04:15:42'),
(4, 'Client4', 'png', 1, 1, 1, '2019-01-14', '2019-03-23 04:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_info`
--

CREATE TABLE IF NOT EXISTS `contacts_info` (
  `id` int(11) NOT NULL,
  `contact_message` text,
  `address` text,
  `post_box` varchar(50) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `web` varchar(100) DEFAULT NULL,
  `map` text,
  `facebook_link` varchar(200) DEFAULT NULL,
  `twitter_link` varchar(200) DEFAULT NULL,
  `linkedin_link` varchar(200) DEFAULT NULL,
  `instegram_link` varchar(200) DEFAULT NULL,
  `pinterest` varchar(200) DEFAULT NULL,
  `footer_content` text,
  `brochure` varchar(15) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts_info`
--

INSERT INTO `contacts_info` (`id`, `contact_message`, `address`, `post_box`, `phone`, `mobile`, `email`, `web`, `map`, `facebook_link`, `twitter_link`, `linkedin_link`, `instegram_link`, `pinterest`, `footer_content`, `brochure`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, NULL, 'Astropackgulf LLC, P. O. BOX 8787, #3, Plot 219,Al Jerf, Ajman, UAE', '5586', '‎0 42610089', '+97167494981', 'info@astropack.com', 'www.astropack.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.1158884834695!2d55.513266115451934!3d25.434388828277026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5f822f68d10dd%3A0x327b6f68ca2f8a56!2sASTROPACK+GULF+LLC!5e0!3m2!1sen!2sin!4v1553266851838', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com', 'https://www.instagram.com/', 'https://in.pinterest.com/', 'Astropack Gulf LLC has been established in the Middle East Region with a mission to continue the legacy of our team in the market by providing unmatched support to the processing and packaging industries. Service Engineers under the technical head who has over 15 years of experience in the inkjet industry with all leading brands.', 'pdf', 1, 1, 1, '2019-01-14', '2019-03-27 07:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

CREATE TABLE IF NOT EXISTS `contact_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `message` text,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password_tokens`
--

CREATE TABLE IF NOT EXISTS `forgot_password_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgot_password_tokens`
--

INSERT INTO `forgot_password_tokens` (`id`, `user_id`, `token`, `date`) VALUES
(1, 1, '9783501462', '0000-00-00'),
(2, 1, '1685209347', '0000-00-00'),
(3, 1, '0317654298', '0000-00-00'),
(4, 1, '9278631405', '0000-00-00'),
(5, 1, '8264570139', '0000-00-00'),
(6, 1, '3902467518', '0000-00-00'),
(7, 1, '8392065741', '0000-00-00'),
(8, 1, '9603825174', '0000-00-00'),
(9, 1, '0923457861', '0000-00-00'),
(10, 1, '4150239687', '0000-00-00'),
(11, 1, '1456827093', '0000-00-00'),
(12, 1, '3450928761', '0000-00-00'),
(13, 1, '2731086459', '0000-00-00'),
(14, 1, '8906142573', '0000-00-00'),
(15, 1, '1234685970', '0000-00-00'),
(16, 1, '3976152048', '0000-00-00'),
(17, 1, '5048369271', '0000-00-00'),
(18, 1, '4705328169', '0000-00-00'),
(19, 1, '0981375462', '0000-00-00'),
(20, 1, '7245038691', '0000-00-00'),
(21, 1, '0125693487', '0000-00-00'),
(23, 1, '4051238967', '0000-00-00'),
(24, 1, '5879164032', '0000-00-00'),
(25, 1, '1708264953', '0000-00-00'),
(26, 1, '8974610523', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `home_contents`
--

CREATE TABLE IF NOT EXISTS `home_contents` (
  `id` int(11) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `footer_address` text,
  `slider_left_content` varchar(100) DEFAULT NULL,
  `instegram_link` varchar(255) DEFAULT NULL,
  `pinterest_link` varchar(255) DEFAULT NULL,
  `our_vision_title` varchar(255) DEFAULT NULL,
  `our_vision_description` text,
  `image` varchar(15) DEFAULT NULL,
  `our_project_title` varchar(255) DEFAULT NULL,
  `our_project_description` text,
  `industry_service_description` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_contents`
--

INSERT INTO `home_contents` (`id`, `phone`, `mobile`, `email`, `facebook_link`, `twitter_link`, `linkedin_link`, `footer_address`, `slider_left_content`, `instegram_link`, `pinterest_link`, `our_vision_title`, `our_vision_description`, `image`, `our_project_title`, `our_project_description`, `industry_service_description`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, '‎0 42610089', '+971 557 188 763', 'info@cdaaudit.com', '', '', '', 'USA 27TH BROOKLYN NY', 'Architecture / interior', '', '', 'An award-winning design and development team that is proud of our work.', 'We use an agile approach to test assumptions and connect with the needs of your audience early and often. Technology enables great experiences. We like and use technology but we have tried hard to not fa ll in love with it.', 'png', 'An award-winning design and development team that is proud of our work.', 'We use an agile approach to test assumptions and connect with the needs of your audience early and often. Technology enables great experiences. We like and use technology but we have tried hard to not fa ll in love with it.', 'We use an agile approach to test assumptions and connect with the needs of your audience early', 1, NULL, 1, NULL, '2019-03-12 11:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `meta_tags`
--

CREATE TABLE IF NOT EXISTS `meta_tags` (
  `id` int(11) NOT NULL,
  `page_name` varchar(100) DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` longtext,
  `meta_keyword` longtext,
  `page_url` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_tags`
--

INSERT INTO `meta_tags` (`id`, `page_name`, `meta_title`, `meta_description`, `meta_keyword`, `page_url`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Home', 'Astropack', 'Astropack', 'Astropack', '', 1, 1, 1, '2018-06-13', '2019-03-23 06:05:32'),
(2, 'About', 'About Astropack', 'About Astropack', 'About Astropack', '', 1, 1, 1, '2018-12-28', '2019-03-23 06:05:48'),
(3, 'Products', 'Astropack Products', 'Astropack Products', 'Astropack Products', '', 1, 1, 1, '2018-12-28', '2019-03-23 06:07:10'),
(4, 'Services', 'Astropack Services', 'Astropack Services', 'Astropack Services', '', 1, 1, 1, '2018-12-28', '2019-03-23 06:07:39'),
(5, 'Brands', 'Astropack Brands', 'Astropack Brands', 'Astropack Brands', '', 1, 1, 1, '2018-12-28', '2019-03-23 06:08:10'),
(6, 'News & Events', 'News & Events', 'News & Events', 'News & Events', '', 1, 1, 1, '2018-12-28', '2019-03-23 06:08:39'),
(7, 'Contact', 'Astropack Contact Us', 'Astropack Contact Us', 'Astropack Contact Us', '', 1, 1, 1, '2018-12-28', '2019-03-23 06:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1531202974),
('m130524_201442_init', 1531202978);

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE IF NOT EXISTS `news_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `canonical_name` varchar(255) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `content` longtext,
  `date` datetime DEFAULT NULL,
  `baner_image` varchar(100) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` text,
  `meta_description` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`id`, `title`, `canonical_name`, `image`, `content`, `date`, `baner_image`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Mohammed Bin Rashid Approves DIFC’s New Expansion Plan', 'mohammed-bin-rashid-approves-difc-s-new-expansion-plan', 'jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', '2019-03-15 00:00:00', 'jpg', 'Mohammed Bin Rashid Approves DIFC’s New Expansion Plan...', 'Mohammed Bin Rashid Approves DIFC’s New Expansion Plan...', 'Mohammed Bin Rashid Approves DIFC’s New Expansion Plan...', 1, 1, 1, '2019-03-23', '2019-03-23 10:33:21'),
(2, 'Mohammed Bin Rashid Approves DIFC’s New Expansion Plan', 'mohammed-bin-rashid-approves-difc-s-new-expansion-plan', 'jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', '2019-03-15 00:00:00', 'jpg', 'Mohammed Bin Rashid Approves DIFC’s New Expansion Plan...', 'Mohammed Bin Rashid Approves DIFC’s New Expansion Plan...', 'Mohammed Bin Rashid Approves DIFC’s New Expansion Plan...', 1, 1, 1, '2019-03-23', '2019-03-23 05:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE IF NOT EXISTS `news_letter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_letter`
--

INSERT INTO `news_letter` (`id`, `email`, `date`) VALUES
(1, 'test@test.com', '2019-03-14'),
(8, 'anoop@pentacodes.com', '2019-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `brand` int(11) DEFAULT NULL,
  `product_title` varchar(100) DEFAULT NULL,
  `canonical_name` varchar(255) DEFAULT NULL,
  `sub_title` varchar(100) DEFAULT NULL,
  `description` text,
  `detailed_description` longtext,
  `image` varchar(15) DEFAULT NULL,
  `baner_image` varchar(15) DEFAULT NULL,
  `meta_title` text,
  `meta_description` text,
  `meta_keyword` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `product_title`, `canonical_name`, `sub_title`, `description`, `detailed_description`, `image`, `baner_image`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 2, 'SAVEMA FEEDERS', 'savema-feeders', 'SAVEMA TTO', 'Savema Feeders: The feeders are designed to work with conveyor belt for serving in different industries. While pouches are moving continuously or intermittently the marking', '<p>Savema Feeders: The feeders are designed to work with conveyor belt for serving in different industries. While pouches are moving continuously or intermittently the marking can be done with Inkjet or Thermal Transfer Printers and Labelling.</p>\r\n', 'png', NULL, 'SAVEMA FEEDERS', 'SAVEMA FEEDERS', 'SAVEMA FEEDERS', 1, 1, 1, '2019-03-22', '2019-03-27 06:59:50'),
(2, 1, 'FILL SEAL MACHINES', 'fill-seal-machines', 'iPac Form Fill Seal Machines', 'iPac offers fully stainless steel vertical and horizontal form fill seal machines to pack powder, pulses, rice sugar etc in normal and high speeds.', '<p>iPac offers fully stainless steel vertical and horizontal form fill seal machines to pack powder, pulses, rice sugar etc in normal and high speeds.</p>\r\n', 'jpg', NULL, 'FILL SEAL MACHINES', 'FILL SEAL MACHINES', 'FILL SEAL MACHINES', 1, 1, 1, '2019-03-22', '2019-03-27 07:00:06'),
(3, 3, 'EBS CIJ PRINTERS', 'ebs-cij-printers', 'EBS Inkjet System', 'Advanced Ink-Jet Printer for Super Quick and Easy Changeovers, The 6500 Series Small Character, Continuous Ink-Jet System with its touch-screen display prints startling crisp', '<p>Advanced Ink-Jet Printer for Super Quick and Easy Changeovers, The 6500 Series Small Character, Continuous Ink-Jet System with its touch-screen display prints startling crisp, multi-lingual alphanumeric text and bar codes for exacting in-line&nbsp;</p>\r\n', 'jpg', NULL, 'EBS CIJ PRINTERS', 'EBS CIJ PRINTERS', 'EBS CIJ PRINTERS', 1, 1, 1, '2019-03-22', '2019-03-27 07:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_enquiry`
--

CREATE TABLE IF NOT EXISTS `product_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL,
  `message` text,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL,
  `service_title` varchar(255) DEFAULT NULL,
  `canonical_name` varchar(255) DEFAULT NULL,
  `description` mediumtext,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_keyword` text,
  `meta_description` text,
  `image` varchar(15) DEFAULT NULL,
  `baner_image` varchar(15) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `canonical_name`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `image`, `baner_image`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Service Name', 'service-name', '<p>Astropack Gulf LLC has been established in the Middle East Region with a mission to continue the legacy of our team in the market by providing unmatched support to the processing and packaging industries. Service Engineers under the technical head who has over 15 years of experience in the inkjet industry, with all leading brands. All engineers are qualified &amp; trained personnel with senior staff having extensive experience of installation and support of inkjet</p>\r\n\r\n<ul>\r\n	<li>Astropack Gulf LLC has been</li>\r\n	<li>Experience of installation</li>\r\n	<li>Astropack Gulf LLC has been</li>\r\n</ul>\r\n', 'Service Name', 'Service Name', 'Service Name', 'jpg', 'jpg', 1, 1, NULL, '2019-03-23', '2019-03-23 04:33:20'),
(2, 'Service Name', 'service-name', '<p>Astropack Gulf LLC has been established in the Middle East Region with a mission to continue the legacy of our team in the market by providing unmatched support to the processing and packaging industries. Service Engineers under the technical head who has over 15 years of experience in the inkjet industry, with all leading brands. All engineers are qualified &amp; trained personnel with senior staff having extensive experience of installation and support of inkjet</p>\r\n\r\n<ul>\r\n	<li>Astropack Gulf LLC has been</li>\r\n	<li>Experience of installation</li>\r\n	<li>Astropack Gulf LLC has been</li>\r\n</ul>\r\n', 'Service Name', 'Service Name', 'Service Name', 'jpg', 'jpg', 1, 1, 1, '2019-03-23', '2019-03-23 09:29:19'),
(3, 'Service Name', 'service-name', '<p>Astropack Gulf LLC has been established in the Middle East Region with a mission to continue the legacy of our team in the market by providing unmatched support to the processing and packaging industries. Service Engineers under the technical head who has over 15 years of experience in the inkjet industry, with all leading brands. All engineers are qualified &amp; trained personnel with senior staff having extensive experience of installation and support of inkjet</p>\r\n\r\n<ul>\r\n	<li>Astropack Gulf LLC has been</li>\r\n	<li>Experience of installation</li>\r\n	<li>Astropack Gulf LLC has been</li>\r\n</ul>\r\n', 'Service Name', 'Service Name', 'Service Name', 'jpg', 'jpg', 1, 1, 1, '2019-03-23', '2019-03-23 09:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`, `sub_title`, `description`, `link`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Astropackgulf', 'jpg', 'The innovative Hand jet EBS-250', 'Lorem ipsum dolor sit amet, elit dolor, nisl congue nec consequat  vitaephasellus. Ipsum ante varius conubia luctus,  conubia luct.\r\n          ', '', 1, 1, 1, '2018-12-20', '2018-12-20 10:42:13'),
(2, 'Astropackgulf', 'jpg', 'The innovative Hand jet EBS-250', 'Lorem ipsum dolor sit amet, elit dolor, nisl congue nec consequat  vitaephasellus. Ipsum ante varius conubia luctus,  conubia luct.\r\n          ', '', 1, 1, 1, '2018-12-20', '2018-12-20 10:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL,
  `message` text,
  `author` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `image` varchar(15) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `message`, `author`, `designation`, `image`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s.                 ', 'Selena gomaz', 'Genarel customer', 'jpg', 1, 1, 1, '2019-01-14', '2019-03-14 05:51:16'),
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s.                     ', 'Selena gomaz', 'Genarel customer', 'jpg', 1, 1, 1, '2019-01-14', '2019-03-14 05:51:32'),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s.                     ', 'Richard', 'Manager', 'jpg', 1, 1, 1, '2019-01-24', '2019-03-14 05:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_posts`
--
ALTER TABLE `admin_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `fk-admin_users-post_id` (`post_id`);

--
-- Indexes for table `baner_images`
--
ALTER TABLE `baner_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts_info`
--
ALTER TABLE `contacts_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgot_password_tokens`
--
ALTER TABLE `forgot_password_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_contents`
--
ALTER TABLE `home_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_tags`
--
ALTER TABLE `meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_enquiry`
--
ALTER TABLE `product_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_posts`
--
ALTER TABLE `admin_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `baner_images`
--
ALTER TABLE `baner_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contacts_info`
--
ALTER TABLE `contacts_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forgot_password_tokens`
--
ALTER TABLE `forgot_password_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `home_contents`
--
ALTER TABLE `home_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_enquiry`
--
ALTER TABLE `product_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
