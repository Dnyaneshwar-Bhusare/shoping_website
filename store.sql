-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 01:18 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_log`
--

CREATE TABLE `ad_log` (
  `id` int(11) NOT NULL,
  `aname` varchar(20) DEFAULT NULL,
  `apwd` varchar(50) DEFAULT NULL,
  `secques` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_log`
--

INSERT INTO `ad_log` (`id`, `aname`, `apwd`, `secques`) VALUES
(1, 'electronixadmin', '12345678', 'dreaming');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(27, '::1', 2),
(28, '::1', 2),
(29, '::1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `catagory_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `catagory_details`) VALUES
(1, 'Rohu', 'Rohu is a river fish. It is considered to be a rich source of vitamin C, which is essential for\r\nmaintaining a good health. It keeps diseases like cold and cough at bay and prevents other\r\ndiseases related to it.\r\nRohu is one of the best forms of protein available\r\nRohu is rich in protein but low in fat .It has protein which is easily digestible and has a good Net\r\nProtein Utilisation. Rohu is additionally enriched with omega-3 fatty acid and polyunsaturated fatty\r\nacid fatty acids that square measure vital for fish body.'),
(2, 'Katla', 'Katla fish is enriched with proteins and vitamins. It is low in calories and a healthy option for\r\n\r\nweight watchers. Have it in traditional curry form and you are going to love it!'),
(3, 'Pabda', 'The pabda is a fresh water delicacy, mainly found in swamp, paddy fields. Generally cultivated in\r\nponds pabda is cultivated with other freshwater varieties such as rohu and catla. Pabda makes\r\ndelicious curries and has gained increasing popularity in Bengali fish recipes. It tastes great with\r\nnigella seeds or mustard paste.'),
(4, 'Tilapiya', 'Tilapia is highly valued as a seafood source due to its many beneficial qualities, which are good\r\nfor health, wealth of nutrients, vitamins, and minerals, including significant amounts of protein,\r\nomega-3 fatty acids, selenium , phosphorous, potassium ,vitamin  B12 , niacin, vitamin B6.'),
(5, 'Pagasius/ Basa', 'Indian Basa fish an excellent source of high-quality protein and healthy fats like omega-3 fatty\r\nacids. Its cheap cost, mild taste, and flaky, firm texture make it popular worldwide. It is a\r\nfreshwater fish available in India ,'),
(6, 'Murrel (Maral)', 'Live Murrel fish is known as Viral meen / Viral fish in Tamil . It is a delicacy in Tamilnadu , Kerala\r\n\r\nand Andhra Pradesh . It is most sought after due to its distinct flavour and taste'),
(7, 'Zinga', 'One of the health benefits of prawn is it maintains good cardiovascular health due to its high\r\n\r\ncontent in vitamin B12 contributes to better cardiovascular regulation.\r\nCalcium and vitamin E content in prawns maintains healthy skin, teeth and bones'),
(8, 'Black Pomfret', 'It is very low in calories and fat. It is rich in protein which is why it helps reduce the risk of cardiovascular\r\ndiseases and also helps to muscles. It contains high amounts of omega 3 fatty acids that supply DHA,\r\ncomponent for development of the brain'),
(9, 'Surmai', 'This popular sea fish is considered as quite a delicacy and excellent table fare in most parts of India. In\r\nmenu cards, it goes by the name of King Fish. Surmai is flavourful by itself and does not require any special\r\npreparation to enhance its natural taste. Packed with Omega-3 fatty acids, Surmai is one of the healthiest');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `web` varchar(20) NOT NULL,
  `text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prd_id` int(100) NOT NULL,
  `prd_cat` int(100) NOT NULL,
  `prd_title` varchar(255) NOT NULL,
  `net_weight` varchar(30) NOT NULL,
  `gross_weight` varchar(30) NOT NULL,
  `pack_available` varchar(30) NOT NULL,
  `prd_price` int(100) NOT NULL,
  `prd_desc` text NOT NULL,
  `prd_img` text NOT NULL,
  `prd_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prd_id`, `prd_cat`, `prd_title`, `net_weight`, `gross_weight`, `pack_available`, `prd_price`, `prd_desc`, `prd_img`, `prd_keyword`) VALUES
(1, 1, 'Whole Uncut', '1-3 kg', '1 -3 kg', '0.5 kg x multiple', 200, '', 'Rohuwhole.jpg', 'Whole Uncut, Uncut, Whole Uncut'),
(2, 1, 'whole Cleaned with head			', '0.5 kg', '775 gm', '0.5 kg x multiple', 120, '', 'Rohuwhole1.jpg', 'whole Cleaned with head, with head'),
(3, 1, 'Bengali cut/ fry cut', ' 0.5 kg', '770 gm', '0.5 kg x multiple', 130, '', 'rohubengalicutwithhead.jpg', 'Bengali cut/ fry cut'),
(4, 1, 'curry cut without head 				', '0.5 kg', '700 gm', '0.5 kg x multiple', 140, '', 'rohuwhole_cut_102969395-600x600.jpg', 'curry cut without head 	'),
(5, 2, 'Whole Uncut', '1 kg', '1 kg', '0.5 kg x multiple	', 100, '', 'katla whole.jpg', 'Whole Uncut'),
(6, 2, 'whole Cleaned with head', '0.5 kg', '775 gm', '0.5 kg x multiple', 100, '', 'katla whole cleaned.JPG', 'whole Cleaned with head'),
(7, 2, 'Bengali cut/ fry cut', '0.5 kg', '770 gm', '0.5 kg x multiple', 100, '', 'katla whole.jpg', 'Bengali cut/ fry cut'),
(8, 2, 'curry cut without head', '0.5 kg', '700 gm', '0.5 kg x multiple', 100, '', 'Katla curry cut without head.jpg', 'Bengali cut/ fry cut'),
(9, 3, 'Whole Uncut', '250 gm-500 gm', '250 gm-500 gm', '0.25 kg x multiple', 100, '				\r\n', 'pabda whole fish.jpg', 'Whole Uncut'),
(10, 3, 'Whole clean with pieces', '250 gm', '350 gm', '0.25 kg x multiple', 100, '', 'pabda fish cut.jpg', 'Whole Uncut'),
(11, 4, 'Whole Cleaned', '0.5 kg', '620 gm', '0.5 kg x multiple', 100, '			\r\n', 'Tilapia whole (1).jpg', 'Whole Cleaned'),
(12, 4, 'Curry / Fry cut', '0.5 kg', '750 gm', '0.5 kg x multiple', 100, '', 'tilapia.jpg', 'Curry / Fry cut'),
(13, 4, 'Boanless', '0.5 kg', '980 gm', '0.5 kg x multiple', 100, '', 'tilapia  boanless.jpg', 'Boanless'),
(14, 5, 'Whole uncut', '1-3 kg', '1-3 kg', '0.5 kg x multiple', 100, '			', 'Pangasius whole.jpg', 'Whole uncut'),
(15, 5, 'Whole clean', '0.5 kg', '620 gm', '0.5 kg x multiple', 100, '			', 'Pangasius-Whole-Fish.jpg', 'Whole clean'),
(16, 5, 'Bangali Cut with Head', '0.5 kg', '700 gm', '0.5 kg x multiple', 100, '', '', 'Bangali Cut with Head'),
(17, 5, 'Skinless Curry Cut', '0.5 kg', '800 gm', '0.5 kg x multiple', 100, '	 		\r\n', 'Pangasius curry cut.jpg', 'Skinless Curry Cut'),
(18, 5, 'Boanless', '0.5 kg', '980 gm', '0.5 kg x multiple', 100, '		', 'murrel curry cut.jpg', 'Boanless'),
(19, 6, 'Whole Cleaned', '0.5  kg- 3 kg', '05 kg- 3 kg', '0.5 kg x multiple', 100, '', 'murrel whole.jpg', 'Whole Cleaned'),
(20, 6, 'Curry cut with head', '0.5 kg', '700 gm', '0.5 kg x multiple', 100, '			', '', 'Curry cut with head'),
(21, 7, 'Whole Uncleaned', '0.5 kg', '0.5 kg', '0.5 kg x multiple', 100, ' ', '', 'Whole Uncleaned'),
(22, 7, 'Cleaned headless', '0.5 kg', '800 gm', '0.5 kg x multiple', 100, '', '', 'Cleaned headless'),
(23, 8, 'whole cleaned', '0.5 kg', '760 gm', '0.5 kg x multiple', 100, '	 		\r\n	 	', '', 'whole cleaned'),
(24, 8, 'curry cut ', '0.5 kg', '820 gm', '0.5 kg x multiple', 100, '', '	\r\n	 	black pomfret curry cut.jpg', 'curry cut '),
(25, 8, 'whole uncleaned', '0.5 kg', '0.5 kg', '0.5 kg x multiple', 100, '	', 'black_pomfret whole uncleaned.jpg', 'whole uncleaned'),
(26, 9, 'Whole clean', '0.5 kg', '620 gm', '0.5 kg x multiple', 450, '\r\n', 'surmai whole.jpg', 'Whole clean'),
(27, 9, 'Bangali Cut with Head', '0.5 kg', '700 gm', '0.5 kg x multiple', 500, '', 'surmai curry cut.jpg', 'Bangali Cut with Head'),
(28, 9, 'Skinless Curry Cut', '0.5 kg', '800 gm', '0.5 kg x multiple', 500, '', 'surmai-curry-cut.jpg', 'Skinless Curry Cut'),
(29, 9, 'Boanless				', '0.5 kg', '980 gm', '0.5 kg x multiple', 600, '', 'tilapia  boanless.jpg', 'Boanless');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_log`
--
ALTER TABLE `ad_log`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aname` (`aname`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_log`
--
ALTER TABLE `ad_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prd_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
