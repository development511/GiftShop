-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 07:21 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nik_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_offer`
--

CREATE TABLE `add_offer` (
  `offer_id` int(10) NOT NULL,
  `offer_name` varchar(10001) NOT NULL,
  `image` mediumtext NOT NULL,
  `from_dt` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `to_dt` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `cat_name` varchar(1000) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_offer`
--

INSERT INTO `add_offer` (`offer_id`, `offer_name`, `image`, `from_dt`, `to_dt`, `price`, `remark`, `cat_name`, `dt_created`) VALUES
(117, 'static website', '../../images/offer_image/5f1583949920102.png', '07/18/2020', '07/22/2020', '4999', 'five pages static website', 'graphic desidn', '2020-07-20 05:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt_created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `dt_created`) VALUES
(1, 'admin', 'e6e061838856bf47e1de730719fb2609', '2019-04-17 15:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `ID` mediumint(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `designation` varchar(2000) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `notise` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `dt_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `cat_name` varchar(10001) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `dt_created`, `dt_updated`) VALUES
(25, 'Web Design & Development', '2020-07-28 03:04:44', '2020-07-28 09:34:44'),
(26, 'Upgrade Your Website', '2020-07-28 03:07:03', '2020-07-28 09:37:03'),
(27, 'Software', '2020-07-28 03:07:20', '2020-07-28 09:37:20'),
(28, 'Mobile Application', '2020-07-28 03:07:35', '2020-07-28 09:37:35'),
(29, 'SEO', '2020-07-28 03:07:50', '2020-07-28 09:37:50'),
(30, 'Server Domain and Hosting', '2020-07-28 03:08:09', '2020-07-28 09:38:09'),
(31, 'Digital Marketing', '2020-07-28 03:08:27', '2020-07-28 09:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `client_logo`
--

CREATE TABLE `client_logo` (
  `id` int(10) NOT NULL,
  `image` mediumtext NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_logo`
--

INSERT INTO `client_logo` (`id`, `image`, `dt_created`) VALUES
(11, '../../assets/img/client/01.png', '2020-07-28 03:29:32'),
(12, '../../assets/img/client/03.png', '2020-07-28 03:33:47'),
(13, '../../assets/img/client/02.png', '2020-07-28 03:35:09'),
(14, '../../assets/img/client/04.png', '2020-07-28 03:35:13'),
(15, '../../assets/img/client/05.png', '2020-07-28 03:35:17'),
(16, '../../assets/img/client/06.jpg', '2020-07-28 03:35:21'),
(17, '../../assets/img/client/07.jpg', '2020-07-28 03:35:26'),
(18, '../../assets/img/client/08.jpg', '2020-07-28 03:35:31'),
(19, '../../assets/img/client/09.jpg', '2020-07-28 03:35:34'),
(20, '../../assets/img/client/10.jpg', '2020-07-28 03:35:38'),
(21, '../../assets/img/client/11.jpg', '2020-07-28 03:35:42'),
(22, '../../assets/img/client/12.jpg', '2020-07-28 03:35:48'),
(24, '../../assets/img/client/14.jpg', '2020-07-28 03:36:03'),
(25, '../../assets/img/client/13.jpg', '2020-07-28 03:36:07'),
(26, '../../assets/img/client/15.jpg', '2020-07-28 03:36:12'),
(27, '../../assets/img/client/16.jpg', '2020-07-28 03:36:15'),
(28, '../../assets/img/client/17.jpg', '2020-07-28 03:36:20'),
(29, '../../assets/img/client/18.jpg', '2020-07-28 03:36:24'),
(30, '../../assets/img/client/19.jpg', '2020-07-28 03:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(10) NOT NULL,
  `image` mediumtext NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `reference` varchar(1000) NOT NULL,
  `It_Services` varchar(1000) NOT NULL,
  `file_upload` varchar(20000) NOT NULL,
  `dt_created` datetime NOT NULL,
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) NOT NULL,
  `cat_name` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `name` varchar(10000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `cat_name`, `image`, `name`, `title`, `dt_created`, `dt_updated`) VALUES
(11, 'WEB DESIGN', '../../assets/img/portfolio/5f2b95626087203.jpg', 'NATRAJ HOTEL', 'WEB DESIGN', '2020-08-06 10:47:48', '2020-08-06 05:30:10'),
(12, 'WEB DESIGN', '../../assets/img/portfolio/5f2b957417b1108.jpg', 'THE GREEN DESERT', 'WEB DESIGN', '2020-08-06 10:48:38', '2020-08-06 05:30:28'),
(13, 'WEB DESIGN', '../../assets/img/portfolio/5f2b95852c50804.jpg', 'GOLDEN AUTO WORLD', 'WEB DESIGN', '2020-08-06 10:49:08', '2020-08-06 05:30:45'),
(14, 'WEB DESIGN', '../../assets/img/portfolio/5f2b9593647d605.jpg', 'ELECTRO LINE, POWER OF ENERGY SYSTEM', 'WEB DESIGN', '2020-08-06 10:49:39', '2020-08-06 05:30:59'),
(15, 'WEB DESIGN', '../../assets/img/portfolio/5f2b95a8a733608.jpg', 'WINNERS STUDIO', 'WEB DESIGN', '2020-08-06 10:50:16', '2020-08-06 05:31:20'),
(16, 'WEB DESIGN', '../../assets/img/portfolio/5f2b95de0830b02.jpg', 'VIBRANT WAVES INTERNATIONAL ACADEMY', 'WEB DESIGN', '2020-08-06 11:02:14', '2020-08-06 05:32:14'),
(17, 'WEB DESIGN', '../../assets/img/portfolio/5f2b96ba696d608.jpg', 'GCS MEDICAL COLLEGE, HOSPITAL', 'WEB DESIGN', '2020-08-06 11:02:40', '2020-08-06 05:35:54'),
(18, 'WEB DESIGN', '../../assets/img/portfolio/5f2b9654e1f1503.jpg', 'DR. K. C. PATEL', 'WEB DESIGN', '2020-08-06 11:03:21', '2020-08-06 05:34:12'),
(19, 'WEB DESIGN', '../../assets/img/portfolio/5f2b96dc5d88d07.jpg', 'CREARTISAN CREATIVE GIFTINGS', 'WEB DESIGN', '2020-08-06 11:06:28', '2020-08-06 05:36:28'),
(20, 'WEB DESIGN', '../../assets/img/portfolio/5f2b96f387e3b04.jpg', 'PANACHE BEAUTY SALON', 'WEB DESIGN', '2020-08-06 11:06:51', '2020-08-06 05:36:51'),
(21, 'WEB DESIGN', '../../assets/img/portfolio/5f2b970dba30302.jpg', 'BANKO DESIGN', 'WEB DESIGN', '2020-08-06 11:07:17', '2020-08-06 05:37:17'),
(22, 'WEB DESIGN', '../../assets/img/portfolio/5f2b98338142f04.jpg', 'STEGENGA  PARTNERS A PROFESSIONAL STUDIO', 'WEB DESIGN', '2020-08-06 11:07:45', '2020-08-06 05:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_category`
--

CREATE TABLE `portfolio_category` (
  `id` int(10) NOT NULL,
  `cat_name` mediumtext NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_category`
--

INSERT INTO `portfolio_category` (`id`, `cat_name`, `dt_created`, `dt_updated`) VALUES
(2, 'Mobile Application', '2020-07-29 10:31:34', '2020-08-06 04:55:51'),
(3, 'Graphic Design', '2020-07-29 10:31:51', '2020-08-06 04:55:07'),
(4, 'WEB DESIGN', '2020-07-29 10:32:10', '2020-08-06 04:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_content`
--

CREATE TABLE `portfolio_content` (
  `id` int(10) NOT NULL,
  `name` mediumtext NOT NULL,
  `top_image` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `title` varchar(10000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `client` mediumtext NOT NULL,
  `skill` varchar(1000) NOT NULL,
  `website` varchar(1000) NOT NULL,
  `bottom_image` varchar(1000) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_content`
--

INSERT INTO `portfolio_content` (`id`, `name`, `top_image`, `image`, `title`, `description`, `client`, `skill`, `website`, `bottom_image`, `dt_created`, `dt_updated`) VALUES
(88, 'STEGENGA  PARTNERS A PROFESSIONAL STUDIO', '../../assets/img/portfolio_content/5f2bc24c7e89405.jpg', '../../assets/img/portfolio_content/5f2bc24c7ecdf01.jpg', 'We turn ideas into works of people and purpose.', '<p style=\"margin-bottom: 1.6em; line-height: 30px; color: rgb(126, 126, 126); font-family: Exo, sans-serif; font-size: 16px;\">We are a diverse team of design professionals with a people-centric philosophy at the heart of the design process. Our mission is to deliver exceptional design ideas and solutions through the creative blending of human need, expertise, value creation, and environmental stewardship.</p><p style=\"margin-bottom: 30px; line-height: 30px; color: rgb(126, 126, 126); font-family: Exo, sans-serif; font-size: 16px;\">The Studio’s belief is that better buildings make for a better world. A successful building is one that improves daily life for the people who live and work around it.</p>', 'Stegenga + PARTNERS', 'Bootstrap, jQuery', 'http://snp-studio.com/', ', ../../assets/img/portfolio_content/5f2bc24c7f06b02.jpg, ../../assets/img/portfolio_content/5f2bc24c7f4e203.jpg, ../../assets/img/portfolio_content/5f2bc24c7f94006.jpg', '2020-08-06 02:11:48', '2020-08-06 08:41:48'),
(89, 'BANKO DESIGN', '../../assets/img/portfolio_content/5f2bc2e1c60fe04.jpg', '../../assets/img/portfolio_content/5f2bc2e1c65fe01.jpg', 'Interior Design, Streamlined.', '<p><span style=\"color: rgb(126, 126, 126); font-family: Exo, sans-serif; font-size: 16px;\">Banko Design is leading the forefront in boutique interior design for the senior living, multifamily, healthcare and hospitality markets. Our fourteen-member team of designers, interior architects and purchasing agents work to manage every aspect of your interior design project. We’ve streamlined the entire design and procurement process to create a seamless experience for our clients.</span><br></p>', 'Banko Design', 'Wordpress, PHP, MySQL, jQuery', 'https://www.bankodesign.com/', ', ../../assets/img/portfolio_content/5f2bc2e1c6b5a03.jpg, ../../assets/img/portfolio_content/5f2bc2e1c711205.jpg, ../../assets/img/portfolio_content/5f2bc2e1c76a906.jpg', '2020-08-06 02:14:17', '2020-08-06 08:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) NOT NULL,
  `icon` mediumtext NOT NULL,
  `logo` mediumtext NOT NULL,
  `login_Back` mediumtext NOT NULL,
  `created_dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `icon`, `logo`, `login_Back`, `created_dt`) VALUES
(1, '../../images/setting/fav.png', '../../images/setting/logo.png', '../../images/setting/bg1.jpg', '2020-07-20 11:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `we_do`
--

CREATE TABLE `we_do` (
  `id` int(10) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `we_do`
--

INSERT INTO `we_do` (`id`, `description`, `image`, `dt_created`, `dt_updated`) VALUES
(1, '&lt;p class=&quot;font-17 text-black&quot; style=&quot;margin-bottom: 30px; line-height: 30px; font-family: Exo, sans-serif; font-size: 17px !important;&quot;&gt;I heartily welcome you to The NikTech Solution. We are proud to be based in the state of Gujarat, India which has gifted some iconic brands to the world like Amul, Rasna, Nirma, Reliance, Adani just to name a few. I belong to a traditional Gujarati business family where entrepreneurship is the rule rather than the exception. From an early age, I have seen the thrills and challenges of running a successful business. I always aspired to follow my role models of successful women entrepreneurs.&lt;/p&gt;&lt;p class=&quot;font-17 text-black&quot; style=&quot;margin-bottom: 30px; line-height: 30px; font-family: Exo, sans-serif; font-size: 17px !important;&quot;&gt;Colors have always enthralled me and I can say with conviction that the intelligent use of colors in Design and Advertising has always given me that extra edge with Brands.&lt;/p&gt;&lt;p class=&quot;font-17 text-black&quot; style=&quot;margin-bottom: 30px; line-height: 30px; font-family: Exo, sans-serif; font-size: 17px !important;&quot;&gt;Apart from the intrinsic satisfaction of creative pursuit, my greatest accomplishment in the last 4 years has been the growth of the business profits of our clients, for whom we have built successful Brands.&lt;/p&gt;', '../../assets/img/we_do/whatwedo.gif', '2020-07-28 05:03:50', '2020-07-29 20:51:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_offer`
--
ALTER TABLE `add_offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_logo`
--
ALTER TABLE `client_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_content`
--
ALTER TABLE `portfolio_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `we_do`
--
ALTER TABLE `we_do`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_offer`
--
ALTER TABLE `add_offer`
  MODIFY `offer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `ID` mediumint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `client_logo`
--
ALTER TABLE `client_logo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=385;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio_content`
--
ALTER TABLE `portfolio_content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `we_do`
--
ALTER TABLE `we_do`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
