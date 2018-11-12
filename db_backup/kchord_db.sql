-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 11:56 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kchord_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `image`, `url`, `updated_at`, `created_at`) VALUES
(1, 'Shufersal Online', '2018.11.06.18.50.23-November_newsale_kcord_960x48.jpg', 'http://www.shufersal.co.il/pages/catalog.aspx', '2018-11-06 18:50:23', '2018-11-06 05:00:00'),
(2, 'Latet', 'latet-banner.jpg', 'https://www.latet.org.il/donation/', '2018-11-06 13:17:16', '2018-11-06 09:23:00'),
(3, 'E-Pharma', 'epharma-banner.jpg', 'https://www.epharma.co.il/catalog/%D7%9E%D7%91%D7%A6%D7%A2%D7%99%D7%9D-%D7%9E%D7%99%D7%95%D7%97%D7%93%D7%99%D7%9D/', '2018-11-06 17:25:00', '2018-11-06 11:12:00'),
(5, 'Kan Bonim', '2018.11.06.15.01.04-kan-bonim.jpg', 'http://kanbonim.co.il/', '2018-11-06 15:01:04', '2018-11-06 14:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `article`, `image`, `url`, `updated_at`, `created_at`) VALUES
(1, 'Guitars', 'acoustics, classics etc.', 'guitars-category.jpg', 'guitars', '2018-10-26 11:00:00', '2018-10-26 00:00:00'),
(2, 'Pianos', 'Electric, grand pianos etc.', 'pianos-category.jpg', 'pianos', '2018-10-26 17:55:18', '2018-10-26 00:00:00'),
(3, 'Wind Instruments', 'Saxophones, trumpet etc.', 'wind-instruments-category.jpg', 'wind-instruments', '2018-10-26 13:18:00', '2018-10-26 00:00:00'),
(4, 'For kids', 'Drums, xylophones etc.', 'kids-category.jpg', 'for-kids', '2018-10-26 17:17:00', '2018-10-26 00:00:00'),
(13, 'testing category', '<p>this is test</p>', 'categories_default_image.jpg', 'testing-category', '2018-11-11 10:53:18', '2018-11-11 10:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` longtext NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `updated_at`, `created_at`) VALUES
(10, 1, 'Contact K-Chord', '<p><span style=\"color: rgb(37, 37, 37); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Get in touch and we\'ll get back to you as soon as we can. &nbsp;We look forward to hearing from you!</span></p><p>Our Phone Number: +39 011 881 5557</p><p><br></p>', '2018-11-11 10:48:26', '2018-11-11 04:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `title`, `url`, `updated_at`, `created_at`) VALUES
(1, 'Contact', 'Contact K-Chord', 'contact', '2018-11-11 10:49:20', '2018-10-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `price_exclude_tax` decimal(12,2) NOT NULL,
  `total_price_include_tax` decimal(12,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `price_exclude_tax`, `total_price_include_tax`, `updated_at`, `created_at`) VALUES
(3, 5, 'a:4:{i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:19:\"ANTIGUA CL2220 VOSI\";s:5:\"price\";d:483;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:3:\"img\";s:20:\"clarinet-product.png\";}s:10:\"conditions\";a:0:{}}i:13;a:6:{s:2:\"id\";s:2:\"13\";s:4:\"name\";s:24:\"Saxophone YAMAHA YAS-875\";s:5:\"price\";d:4820;s:8:\"quantity\";i:2;s:10:\"attributes\";a:1:{s:3:\"img\";s:21:\"saxophone-product.png\";}s:10:\"conditions\";a:0:{}}i:9;a:6:{s:2:\"id\";s:1:\"9\";s:4:\"name\";s:22:\"Flute - YAMAHA YFL-372\";s:5:\"price\";d:1697;s:8:\"quantity\";i:2;s:10:\"attributes\";a:1:{s:3:\"img\";s:17:\"flute-product.png\";}s:10:\"conditions\";a:0:{}}i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:20:\"YAMAHA CLP-665 GP WH\";s:5:\"price\";d:6886;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:3:\"img\";s:17:\"piano-product.jpg\";}s:10:\"conditions\";a:0:{}}}', '20403.00', '24483.60', '2018-10-28 14:58:51', '2018-10-28 14:58:51'),
(4, 6, 'a:3:{i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:20:\"YAMAHA CLP-665 GP WH\";s:5:\"price\";d:6886;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:3:\"img\";s:17:\"piano-product.jpg\";}s:10:\"conditions\";a:0:{}}i:8;a:6:{s:2:\"id\";s:1:\"8\";s:4:\"name\";s:9:\"Old piano\";s:5:\"price\";d:2500;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:3:\"img\";s:21:\"old-piano-product.jpg\";}s:10:\"conditions\";a:0:{}}i:9;a:6:{s:2:\"id\";s:1:\"9\";s:4:\"name\";s:22:\"Flute - YAMAHA YFL-372\";s:5:\"price\";d:1697;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:3:\"img\";s:17:\"flute-product.png\";}s:10:\"conditions\";a:0:{}}}', '11083.00', '13299.60', '2018-10-31 12:45:38', '2018-10-31 12:45:38'),
(5, 5, 'a:2:{i:13;a:6:{s:2:\"id\";s:2:\"13\";s:4:\"name\";s:24:\"Saxophone YAMAHA YAS-875\";s:5:\"price\";d:4820;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:3:\"img\";s:41:\"2018.10.31.12.06.34-saxophone-product.png\";}s:10:\"conditions\";a:0:{}}i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:19:\"ANTIGUA CL2220 VOSI\";s:5:\"price\";d:483;s:8:\"quantity\";i:2;s:10:\"attributes\";a:1:{s:3:\"img\";s:20:\"clarinet-product.png\";}s:10:\"conditions\";a:0:{}}}', '5786.00', '6943.20', '2018-10-31 15:43:26', '2018-10-31 15:43:26'),
(6, 6, 'a:4:{i:24;a:6:{s:2:\"id\";s:2:\"24\";s:4:\"name\";s:21:\"Guitar Ibanez BTB1825\";s:5:\"price\";d:1599;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:3:\"img\";s:31:\"2018.10.31.18.13.18-guitar2.jpg\";}s:10:\"conditions\";a:0:{}}i:25;a:6:{s:2:\"id\";s:2:\"25\";s:4:\"name\";s:27:\"Guitar Fernandes Monterey 5\";s:5:\"price\";d:1400;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:3:\"img\";s:31:\"2018.10.31.18.14.56-guitar3.jpg\";}s:10:\"conditions\";a:0:{}}i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:22:\"Guitar Fender CD-60 V3\";s:5:\"price\";d:245;s:8:\"quantity\";i:5;s:10:\"attributes\";a:1:{s:3:\"img\";s:27:\"acoustic-guitar-product.png\";}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:17:\"Guitar Cort AC150\";s:5:\"price\";d:200;s:8:\"quantity\";i:3;s:10:\"attributes\";a:1:{s:3:\"img\";s:26:\"classic-guitar-product.png\";}s:10:\"conditions\";a:0:{}}}', '4824.00', '5788.80', '2018-11-02 14:50:48', '2018-11-02 14:50:48'),
(7, 4, 'a:3:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:22:\"Guitar Fender CD-60 V3\";s:5:\"price\";d:245;s:8:\"quantity\";i:10;s:10:\"attributes\";a:1:{s:3:\"img\";s:27:\"acoustic-guitar-product.png\";}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:17:\"Guitar Cort AC150\";s:5:\"price\";d:200;s:8:\"quantity\";i:10;s:10:\"attributes\";a:1:{s:3:\"img\";s:26:\"classic-guitar-product.png\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:11:\"hi whats up\";s:5:\"price\";d:918;s:8:\"quantity\";i:5;s:10:\"attributes\";a:1:{s:3:\"img\";s:20:\"mandolin-product.jpg\";}s:10:\"conditions\";a:0:{}}}', '9040.00', '10848.00', '2018-11-02 14:53:17', '2018-11-02 14:53:17'),
(8, 6, 'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:22:\"Guitar Fender CD-60 V3\";s:5:\"price\";d:245;s:8:\"quantity\";i:5;s:10:\"attributes\";a:1:{s:3:\"img\";s:27:\"acoustic-guitar-product.png\";}s:10:\"conditions\";a:0:{}}}', '1225.00', '1470.00', '2018-11-03 00:31:39', '2018-11-03 00:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `orgnl_price` decimal(12,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `title`, `article`, `image`, `url`, `price`, `orgnl_price`, `stock`, `image2`, `image3`, `image4`, `updated_at`, `created_at`) VALUES
(1, 1, 'Guitar Fender CD-60 V3', 'Best acoutstic guitar. he CD-60S is one of our most popular models and is ideal for players looking for a high-quality affordable dreadnought with great tone and excellent playability. With its quality solid spruce top, easy-to-play neck with rolled fingerboard and mahogany back and sides, the CD60-S is perfect for the couch, the campfire or the coffeehouse—anywhere you want classic Fender playability and sound.', 'acoustic-guitar-product.png', 'guitar-fender-cd-60-v3', '245.00', '450.00', 24, '2018.11.03.02.34.30-Guitar Fender-1.png', '2018.11.03.02.34.30-Guitar Fender-2.png', '2018.11.03.02.34.30-Guitar Fender-3.png', '2018-11-06 08:45:24', '2018-10-26 00:00:00'),
(2, 1, 'Guitar Cort AC150', 'AC150 is a brand new classical guitar made by Cort. It competes in the entry level class and is a great starting point for every aspiring young player. Also, it is the most affordable nylon-stringed guitar in Cort`s catalog', 'classic-guitar-product.png', 'guitar-cort-ac150', '200.00', '330.00', 416, '2018.11.03.02.32.42-Guita- Cort-1.png', '2018.11.03.02.32.42-Guita- Cort-2.png', '2018.11.03.02.32.42-Guita- Cort-3.png', '2018-11-03 02:32:42', '2018-10-26 00:00:00'),
(4, 1, 'Mandolin aria MA 20e', '<div><font color=\"#111111\" face=\"Amazon Ember, Arial, sans-serif\"><span style=\"font-size: 13px;\">This is a great beginner mandolin. Not very expensive.. affordable.. Plays mostly in tune... looks great.. built well for the price point.</span></font></div><div><font color=\"#111111\" face=\"Amazon Ember, Arial, sans-serif\"><span style=\"font-size: 13px;\">The string height is adjustable, however I wasn\'t able to get it any lower.. but still playable. and enjoyable..</span></font></div>', 'mandolin-product.jpg', 'mandolin-aria-ma-20e', '918.00', '2100.00', 0, '2018.11.03.02.59.12-mandolin-product-1.jpg', '2018.11.03.02.59.12-mandolin-product-2.jpg', '2018.11.03.02.59.12-mandolin-product-3.jpg', '2018-11-06 08:45:35', '2018-10-26 00:00:00'),
(5, 3, 'Clarinet ANTIGUA CL2220 VOSI', 'Antigua Winds is proud to announce Vosi, a revolutionary new line of instruments specifically designed to meet the demands of first time students. Vosi was born from four years of market research and product development, coupled with huge investments in technology and a state of the art new factory. Only the finest materials from Japan, Europe and the United States are used to craft Vosi instruments.', 'clarinet-product.png', 'clarinet-antigua-cl2220-vosi', '483.00', '660.00', 474, '2018.11.03.02.09.33-clarinet1.png', '2018.11.03.02.09.33-clarinet2.png', '2018.11.03.02.09.33-clarinet3.png', '2018-11-03 02:09:33', '2018-10-26 00:00:00'),
(6, 2, 'Piano - YAMAHA CLP-665 GP WH', 'CFX and Bosendorfer Imperial grand piano voices\r\nMini grand cabinet and custom-designed sound system\r\nCustomize the sound and touch response of piano voices with Piano Room\r\nBinaural sampling and Stereophonic Optimizer\r\nGH3X keyboard with synthetic ivory and ebony keytops\r\nBuilt-in Bluetooth for wireless audio\r\nUSB audio recorder', 'piano-product.jpg', 'piano-yamaha-clp-665-gp-wh', '6886.00', '9780.00', 264, 'grand-piano-2.jpg', 'grand-piano-3.jpg', 'grand-piano-4.jpg', '2018-10-26 06:35:04', '2018-10-26 00:00:00'),
(8, 2, 'Old piano', 'The old classical piano of the President', 'old-piano-product.jpg', 'old-piano', '2500.00', '4000.00', 855, '2018.11.03.02.59.43-old-piano-product-1.jpg', '2018.11.03.02.59.43-old-piano-product-2.jpg', '2018.11.03.02.59.43-old-piano-product-3.jpg', '2018-11-03 02:59:43', '2018-10-27 00:00:00'),
(9, 3, 'Flute - YAMAHA YFL-372', 'This flute will help beginners rapidly improve, while offering more advanced players excellent response and tonal qualities.\r\n\r\nThe headjoint is an important factor in determining the tone. The 300 Series flutes are feature, at a very affordable price, headjoint of 92.5% pure sterling silver, and a nickel silver body and foot for a dark warm tone.', 'flute-product.png', 'flute---yamaha-yfl-372', '1697.00', '2900.00', 343, '2018.11.03.02.31.22-flute1.png', '2018.11.03.02.31.22-flute2.png', '2018.11.03.02.31.22-flute3.png', '2018-11-03 02:31:22', '2018-10-27 00:00:00'),
(10, 4, 'Electronic keyboard Casio mt-65', 'This is a very musical lightweight and portable instrument with headphone jack and line out, battery operation or 7.5v dc. The key is the portable speaker which gives easy access when you just want to try something out. The line output (mono RCA) is noisy as hell. you can experiment with battery operation or dc to see which is best or use the headphone out.', 'keyboard-kids-product.png', 'electronic-keyboard-casio-mt-65', '150.00', '199.00', 242, '2018.11.03.03.08.41-keyboard-kids-product-1.png', '2018.11.03.03.08.41-keyboard-kids-product-2.png', '2018.11.03.03.08.41-keyboard-kids-product-3.png', '2018-11-03 03:08:41', '2018-10-27 00:00:00'),
(11, 4, 'Accordeon GOLDEN CUP JH5060', 'Hohner Accordions 1305-RED, 26 Key, 72 Bass Entry Level Piano Accordion', 'kids-accordeon-product.jpg', 'accordeon-golden-cup-jh5060', '1097.00', '1546.00', 100, '2018.11.03.02.11.11-accorderon1.jpg', '2018.11.03.02.11.11-accorderon2.jpg', '2018.11.03.02.11.11-accorderon3.jpg', '2018-11-03 02:11:11', '2018-10-27 00:00:00'),
(12, 4, 'Kids guitar', 'Kids Gift Beginners Practice Acoustic Guitar + Pick + 6 String Black Wood', 'kids-guitar-product.jpg', 'kids-guitar', '21.00', '30.00', 299, '2018.11.03.02.56.42-kids-guitar-product-1.jpg', '2018.11.03.02.56.42-kids-guitar-product-2.jpg', '2018.11.03.02.56.42-kids-guitar-product-3.jpg', '2018-11-03 02:56:42', '2018-10-27 00:00:00'),
(13, 3, 'Saxophone YAMAHA YAS-875', 'easy to play, due to its ergonomic design. With the right mouthpiece, the sax produces a beautiful, warm tone that is consistent from top to bottom, with excellent intonation. The great build quality is obvious. This sax is ideal for classical music, but should also be suitable for any music one might play on alto sax', '2018.10.31.12.06.34-saxophone-product.png', 'saxophone-yamaha-yas-875', '4820.00', '7650.00', 196, '2018.11.03.03.00.14-Saxophone-YAMAHA-1.png', '2018.11.03.03.00.14-Saxophone-YAMAHA-2.png', '2018.11.03.03.00.14-Saxophone-YAMAHA-3.png', '2018-11-03 03:00:15', '2018-10-27 00:00:00'),
(23, 1, 'Guitar BLADE DD-4 - BLADE', '<p>Make no mistake, the wealth of usable tones afforded by the guitar\'s VSC is nothing short of incredible.</p><p>Range of tones. Looks. Excellent playability.<br></p>', '2018.10.31.13.47.44-guitar1.jpg', 'guitar-blade-dd-4---blade', '11815.00', '14234.00', 301, '2018.11.03.02.31.56-guitar-blade-1.jpg', '2018.11.03.02.31.56-guitar-blade-2.jpg', '2018.11.03.02.31.56-guitar-blade-3.jpg', '2018-11-03 02:31:56', '2018-10-31 13:47:44'),
(24, 1, 'Guitar Ibanez BTB1825', '<p><font color=\"#333333\" face=\"Amazon Ember, Arial, sans-serif\" size=\"2\">All Ibanez Premium series are manufactured with select tone woods, high-profile electronics, and hardware. They are built by highly skilled craftsmen for your musical journey.The ever-evolving Ibanez BTB series has always aimed to expand the players range of creative expression</font><br></p>', '2018.10.31.18.13.18-guitar2.jpg', 'guitar-ibanez-btb1825', '1599.00', '1800.00', 345, '2018.11.03.02.54.47-Guitar-Ibanez-1.jpg', '2018.11.03.02.54.48-Guitar-Ibanez-2.jpg', '2018.11.03.02.54.48-Guitar-Ibanez-3.jpg', '2018-11-03 02:54:48', '2018-10-31 18:13:18'),
(25, 1, 'Guitar Fernandes Monterey 5', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: small;\">A timeless shape with a modern approach, the Monterey Bass Deluxe features set neck construction, 5A Quilted Maple top, a 22-jumbo-fret Rosewood fingerboard with pearl split trapezoid inlays, Graph Tech TUSQ XL nut, Bass Tuneomatic bridge with tailpiece, dual EMG 35DC/40DC soapbar active humbuckers with FGI active preamp system and Gotoh tuners.</span><br></p>', '2018.10.31.18.14.56-guitar3.jpg', 'guitar-fernandes-monterey-5', '1400.00', '1099.00', 0, '2018.11.03.02.35.11-Guitar Fernandes-1.jpg', '2018.11.03.02.35.11-Guitar Fernandes-2.jpg', '2018.11.03.02.35.11-Guitar Fernandes-3.jpg', '2018-11-06 08:45:52', '2018-10-31 18:14:57'),
(26, 1, 'Guitar Eric Clapton\'s Electric Guitar', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: small;\">Made by the same craftsmen who made the actual Clapton instrument. Refinements include special neck shape, Noiseless,, pickups, and active circuitry. Standard features include an alder body, bone nut, vintage frets, and chrome hardware. The Fender Custom Artist Series Eric Clapton Stratocaster is an exact Custom Shop representation of Eric\'s personal axe. It\'s even made by the same craftsmen who made the actual Clapton guitar</span><br></p>', '2018.10.31.18.26.38-guitar4.png', 'guitar-eric-clapton-electric-guitar', '4500.00', '5400.00', 762, '2018.11.03.02.33.48-Guitar-Eric-Clapton-1.png', '2018.11.03.02.33.48-Guitar-Eric-Clapton-2.png', '2018.11.03.02.33.48-Guitar-Eric-Clapton-3.png', '2018-11-03 02:33:48', '2018-10-31 18:23:02'),
(27, 1, 'Guitar Gibson Firebird Red Sparkle', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: small;\">This is a 2012 Gibson Firebird ‘70s Tribute Electric Guitar finished in Red Sparkle Metalflake Finish. It is loaded with Seymour Duncan Mini Humbuckers and includes a nice white tweed case. Additional specs: ‘60s Neck, Rosewood Fretboard, Mahogany Neck &amp; Body, Cream pickguard cover. This guitar looks &amp; sounds incredible. Recently setup with .010 gauge strings.</span><br></p>', '2018.10.31.18.28.21-guitar5.png', 'guitar-gibson-firebird-red-sparkle', '2400.00', '2799.00', 188, '2018.11.03.02.35.46-Guitar Gibson-1.png', '2018.11.03.02.35.47-Guitar Gibson-2.png', '2018.11.03.02.35.47-Guitar Gibson-3.png', '2018-11-03 02:35:47', '2018-10-31 18:28:21'),
(28, 1, 'Guitar D\'Angelico Deluxe SS', '<p><span style=\"color: rgb(17, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;\">Featuring custom Seymour Duncan DA-59 pickups and a six-way toggle switch for maximum tonal variety, the Deluxe SS is a beacon of tone.</span><br></p>', '2018.10.31.18.30.34-guitar6.png', 'guitar-dangelico-deluxe-ss', '1499.00', '1800.00', 454, '2018.11.03.02.33.17-Guitar-D\'Angelico-1.png', '2018.11.03.02.33.17-Guitar-D\'Angelico-2.png', '2018.11.03.02.33.17-Guitar-D\'Angelico-3.png', '2018-11-03 02:33:17', '2018-10-31 18:30:34'),
(29, 1, 'Guitar Seagull Coastline S12', '<p><span style=\"color: rgb(17, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;\">This is a fairly plain-looking guitar, but the top is excellent-looking cedar with very tight grain. The finish is a very uniform satin lacquer.</span><br></p>', '2018.10.31.18.33.14-guitar7.jpg', 'guitar-seagull-coastline-s12', '399.00', '799.00', 666, '2018.11.03.02.55.21-Guitar-Seagull-1.jpg', '2018.11.03.02.55.21-Guitar-Seagull-2.jpg', '2018.11.03.02.55.21-Guitar-Seagull-3.jpg', '2018-11-03 02:55:21', '2018-10-31 18:33:15'),
(30, 1, 'Guitar Gibson Les Paul', '<div><font color=\"#111111\" face=\"Amazon Ember, Arial, sans-serif\"><span style=\"font-size: 13px;\"><div style=\"\">Ultra-modern weight-relieved mahogany body with AAA figured maple top</div><div style=\"\">24.75\"-scale mahogany neck with 22-fret, 12\"-radius Richlite fingerboard</div><div style=\"\">Dual Gibson BurstBucker Pro pickups, HP push/pull controls and internal DIP switch</div></span></font></div>', '2018.10.31.18.36.41-guitar8.png', 'guitar-gibson-les-paul', '5528.00', '6545.00', 191, '2018.11.03.02.54.19-Guitar Gibson-1.png', '2018.11.03.02.54.19-Guitar Gibson-2.png', '2018.11.03.02.54.19-Guitar Gibson-3.png', '2018-11-03 02:54:19', '2018-10-31 18:36:41'),
(31, 9, 'ssssup', '<p>byebye</p>', 'products_default_image.jpg', 'ssssup', '1319.00', '329.00', 150, '', '', '', '2018-11-02 12:13:25', '2018-10-31 20:16:05'),
(34, 1, 'Kchord guitar', '<p><span style=\"color: rgb(17, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;\">This bundle came with a great little tuner, a case, picks, replacement strings, a strap, a polishing towel, and a DVD. The quality of the DVD is SUPER helpful.&nbsp;</span><br></p>', '2018.11.03.00.59.13-electric-guitar-product.png', 'kchord-guitar', '1023.00', '1120.00', 1, '2018.11.03.02.56.06-kchord guitar-1.png', '2018.11.03.02.56.06-kchord guitar-2.png', '2018.11.03.02.56.06-kchord guitar-3.png', '2018-11-03 02:56:06', '2018-11-03 00:59:13'),
(37, 13, 'testing product', '<p>this is test</p>', 'products_default_image.jpg', 'testing-product', '100.00', '120.00', 1, 'products_default_image.jpg', 'products_default_image.jpg', 'products_default_image.jpg', '2018-11-11 10:54:21', '2018-11-11 10:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `password`, `image`, `updated_at`, `created_at`) VALUES
(1, '-', '-', '-', '', '-', '2018-10-28 00:00:00', '2018-10-28 00:00:00'),
(3, '-/-', '-/-', '-/-', '', '-/-', '2018-10-28 00:00:00', '2018-10-28 00:00:00'),
(4, 'David Rigers', 'shoham 5 ramat gan', 'rigers@kchord.com', '$2y$10$qdOkkVRTLyVzyQqdNB/h1OMve40Z8i1A.WjXLVh4gRlygAY581cEC', 'david-profile-pic.jpg', '2018-10-28 09:23:00', '2018-10-28 00:00:00'),
(5, 'Yahel Cohen', 'Haeshel 54 Tel Aviv', 'yahel@gmail.com', '$2y$10$iQqux4Vj2sTQZkqhwQgNiul0w16/Xym60wmm.i8tWPClDAHXw9ZA2', '2018.11.02.05.57.56-IMG_20180626_193851.jpg', '2018-11-02 05:59:51', '2018-10-28 00:00:00'),
(6, 'Yuval Cohen', 'Tsofit 29 Mazkeret Batya', 'yuval@gmail.com', '$2y$10$jgdwKcP3G0R0QY2RLOYg7uWFT2Sqbxx71iR2IH/TCeEAl9w4H3i96', '2018.11.02.05.54.46-IMG_20180626_193959.jpg', '2018-11-02 05:54:47', '2018-10-28 00:00:00'),
(7, 'idan cohen', 'adora', 'idan@gmail.com', '$2y$10$X6ROmhYv4Ci98P3A.TpsTeuw0DV/Qgk2TicS8qmy6LisG0525HSB6', 'default-profile-image.png', '2018-10-28 10:20:43', '2018-10-28 10:20:43'),
(23, 'Hodaya Suisa', 'Refael Suisa Mazkeret Batya', 'hodaya@gmail.com', '$2y$10$n2e8.AClQc..3JQzOlIN1e1fFfi.rNwuif2xHpVJjmyFx3aELU/4m', '2018.11.02.13.18.59-2018-11-02_1518.png', '2018-11-02 13:18:59', '2018-11-02 13:13:21');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `uid` int(11) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`uid`, `rid`) VALUES
(4, 8),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 8),
(16, 8),
(16, 2),
(18, 2),
(18, 8),
(18, 8),
(19, 2),
(19, 2),
(2, 2),
(2, 2),
(22, 8),
(23, 2),
(24, 8),
(25, 2),
(26, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
