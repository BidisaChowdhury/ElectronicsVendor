-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 06:35 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac`
--

CREATE TABLE `ac` (
  `id` int(11) NOT NULL,
  `modelname` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `starrating` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `powerconsumption` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac`
--

INSERT INTO `ac` (`id`, `modelname`, `brand`, `images`, `capacity`, `starrating`, `color`, `powerconsumption`, `warranty`, `price`, `offerprice`, `qty`) VALUES
(1, 'Voltas AC 185EY(R)', 'Voltas', 'images/185jy-1-5-split-voltas-original-imaetvhshgugawnx.jpeg', 2, '5 Star BEE Rating', 'White', '1430 W', '1 Year for Product & 5 Years for Compressor', '46,290', 29999, 10),
(2, 'Voltas AC 1185EY(R)', 'Voltas', 'images/voltas-185ey-r-original-imae43ghusrgyaea.jpeg', 2, '5 Star BEE Rating', 'Red', '1438 W', '1 Year for Product & 5 Years for Compressor', '45,990', 33999, 10),
(3, 'LG AC JS-Q12WTXD', 'LG', 'images/js-q12wtxd-1-split-lg-original-imaerydk9qreeh2h.jpeg', 1, 'Inverter (3 Star) Star BEE Rating', 'Red', '1100 W', '1 Year on Product & 10 Years on Compressor', '41,990', 39891, 10),
(4, 'Godrej AC GSC 18 GIG 5 DGOG (NXW)', 'Godrej', 'images/gsc-18-gig-5-dgog-nxw-1-5-split-godrej-original-imaeyrxzzrmcmjy3.jpeg', 2, 'Inverter (5 Star) Star BEE Rating', 'Silver', '1350 W', '1 Year Manufacturer Warranty', '66,300', 39990, 10),
(5, 'LG AC JS-Q18AFXD', 'LG', 'images/js-q18afxd-1-5-split-lg-original-imaerfyzgqtw4puq.jpeg', 2, '3 Star BEE Rating', 'White', '1760 W', '1 Year on Product & 5 Years on Compressor', '46,790', 44990, 10);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookname`, `author`, `publisher`, `edition`, `language`, `images`, `price`, `offerprice`, `qty`) VALUES
(1, 'Steve Jobs by Walter Isaacson', 'Walter Isaacson', 'Little, Brown Book Group', '1st', 'English', 'images/steve-jobs-by-walter-isaacson-original-imaetzfn7ny4skcp.jpeg', '550', 356, 10),
(2, 'Wings of Fire: An Autobiography', 'Arun Tiwari, APJ Abdul Kalam', 'Universities Press', '!st Edition,1999', 'English', 'images/wings-of-fire-an-autobiography-original-imaer2yzjmz5tzuj.jpeg', '375', 171, 10),
(3, 'Harry Potter and the Cursed Child - Parts I and II', 'J. K. Rowling', 'Hachette India', '2016', 'English', 'images/harry-potter-and-the-cursed-child-parts-i-and-ii-original-imaeh4yytn8xhtgk.jpeg', '899', 395, 10),
(4, 'CBSE CHAPTERWISE SOLVED PAPERS CLASS 12 CHEMISTRY (2017-2009)', 'PURNIMA SHARMA GITA RASTOGI', 'ARIHANT', '1, 2017', 'English', 'images/cbse-chapterwise-solved-papers-class-12-chemistry-2017-2009-original-imaev3yndr8u8qdh.jpeg', '265', 198, 10),
(5, 'Microprocessors and Microcontrollers', 'Soumitra Kumar Mandal', 'Mcgraw Hill Education', '1st Edition, 2011', 'English', 'images/microprocessors-and-microcontrollers-original-imadj6a2huberm8x.jpeg', '575', 425, 10),
(6, 'Upanyas Samagra Vol. 1', 'Bibhutibhushan Bandyopadhyay', 'Mitra & Ghosh Publishers Pvt. Ltd', '!st', 'Bengali', 'images/upanyas-samagra-vol-1-original-imadahzr8hwnpqh3.jpeg', '620', 600, 10),
(7, 'Swami Vivekananda - Ek Ananta Jibaner Jibani (Vol-I)', 'SANJIB CHATTOPADHYAY', 'Dey\'s Publishing', '1st', 'Bengali', 'images/swani-vivekanada-ek-anata-jibaner-jibani-vol-1-original-imaeyyzhybhngzm3.jpeg', '450', 400, 10),
(8, 'Duff And Dutta English Grammar Question Bunch Class 10', 'Duff and Dutta', 'Tulshi Prakashani', '2018', 'English', 'images/0_0_productGfx_88790287e6fd44875b51a80aa6fa4caf.jpg', '200', 185, 10),
(9, 'Oxford Advanced Learner\'s Dictionary', 'A S Hornby', 'Oxford University Press', '9th Edition', 'English', 'images/oxford-advanced-learnced-learners-dictionary-9thed-original-imae3uqy8s55ku2q.jpeg', '695', 472, 10);

-- --------------------------------------------------------

--
-- Table structure for table `cart1`
--

CREATE TABLE `cart1` (
  `id` int(11) NOT NULL,
  `modelname` varchar(255) NOT NULL,
  `bid` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart1`
--

INSERT INTO `cart1` (`id`, `modelname`, `bid`, `qty`) VALUES
(1, 'Samsung Galaxy J2 Pro', 5434, 1),
(2, 'Moto C Plus', 5434, 1),
(4, 'Kissan Mix Fruit Jam', 3509, 1);

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE `grocery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `modelname` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`id`, `name`, `brand`, `type`, `modelname`, `weight`, `price`, `offerprice`, `images`, `qty`) VALUES
(1, 'Tata Salt Lite,Low Sodium', 'Tata\r\n', 'Salt', 'Tata Salt Lite\r\n', '1 Kg', '&#8377 32', 31, 'images/91NRqhf9ZQL._SL1500_.jpg', 10),
(2, 'Kissan Fresh Tomato Ketchup', 'Kissan', 'Ketchup', 'Fresh Tomato Ketchup', '950 g', '&#8377 125', 95, 'images/51kqJ5utfTL.jpg', 10),
(3, 'Kohinoor Everyday Basmati Rice', 'Kohinoor', 'Basmati Rice', 'Kohinoor Everyday Basmati Rice', '5 Kg', '&#8377 274', 216, 'images/51SGeazbepL._SX425_.jpg', 10),
(4, 'Tata Tea Gold', 'Tata', 'Tea', 'Tata Tea Gold', '500 g', '&#8377 216', 189, 'images/513DgYoj76L.jpg', 10),
(5, 'Kissan Mix Fruit Jam', 'Kissan ', 'Jam', 'Kissan Mix Fruit Jam', '500 g', '&#8377 130', 120, 'images/81ShzJXArvL._SL1500_.jpg', 10),
(6, 'Fortune Vivo Diabetes Care Oil Pouch', 'Fortune', 'Oil', 'Fortune Vivo Diabetes Care Oil Pouch', '1L', '&#8377 145', 110, 'images/81XwnZ0WQhL._SL1500_.jpg', 10),
(7, 'Saffola Active Edible Oil', 'Saffola', 'oil', 'Saffola Active Edible Oil', '5L', '&#8377 655', 630, 'images/81IApjyShWL._SL1500_.jpg', 10),
(8, 'Aashirvaad Shudh Chakki Atta', 'Aashirvaad', 'Atta', 'Aashirvaad Shudh Chakki Atta', '2 Kg', '&#8377 72', 70, 'images/51bXIkHxJCL.jpg', 10),
(9, 'Nescafe Classic Stabilo', 'Nescafe', 'coffee', 'Nescafe Classic Stabilo, 200 g\r\n', '200 g', '&#8377 440', 400, 'images/61T3x7nqcKL._SL1000_.jpg', 10),
(10, 'Tata Sampann Moong Dal Yellow Split', 'Tata', 'Dal', 'Tata Sampann Moong Dal Yellow Split', '1Kg', '&#8377 118', 99, 'images/915OOVIuM+L._SL1500_.jpg', 10),
(11, 'Surf Excel Matic Top Load Detergent Powder', 'Surf Excel', 'Detergent Powder', 'Surf Excel Matic Top Load Detergent Powder', '2 Kg', '&#8377 405', 357, 'images/71MBqfYGeGL._SL1000_.jpg', 10),
(12, 'Madhur Pure and Hygienic Sugar', 'Madhur', 'Sugar', 'Madhur Pure and Hygienic Sugar', '1 Kg', '&#8377 60', 43, 'images/81DR0IB4SkL._SL1500_.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `modelno` varchar(255) NOT NULL,
  `modelname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `mid`, `cid`, `modelno`, `modelname`, `price`, `images`) VALUES
(1, 6, 5, 'FO-SHRT-499-NAV', '5th Anfold Men Solid Formal Dark Blue Shirt', 999, 'images/m-fo-shrt-499-nav-5th-anfold-original-imaeufzfxprgtvwd.jpeg'),
(2, 2, 5, 'G029-Poonam-Grey-GRW\r\n', 'Active Anarkali Gown  (Blue)', 649, 'images/na-free-g029-poonam-grey-aika-aika-na-original-imaeuzcjy8azqrxa.jpeg'),
(3, 10, 5, 'null', 'Tata Sampann Moong Dal Yellow Split', 99, 'images/915OOVIuM+L._SL1500_.jpg'),
(4, 2, 1, 'null', 'Wings of Fire: An Autobiography', 171, 'images/wings-of-fire-an-autobiography-original-imaer2yzjmz5tzuj.jpeg'),
(5, 7, 1, 'null', 'Apple iPad', 44300, 'images/apple-mp272hn-a-original-imaesqd257ctzjfs.jpeg'),
(7, 2, 3, 'null', 'Samsung 545 L Frost Free Side by Side Refrigerator', 63999, 'images/rsa1shmg1-tl-5-samsung-original-imaetesrsfe5fhfc.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `modelname` varchar(255) NOT NULL,
  `modelno` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `partno` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `processorbrand` varchar(255) NOT NULL,
  `processorname` varchar(255) NOT NULL,
  `processorgen` varchar(255) NOT NULL,
  `RAM` int(11) NOT NULL,
  `HDDcapacity` varchar(255) NOT NULL,
  `OS` varchar(255) NOT NULL,
  `webcamera` varchar(255) NOT NULL,
  `screensize` varchar(255) NOT NULL,
  `screenresolution` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `modelname`, `modelno`, `images`, `partno`, `color`, `type`, `processorbrand`, `processorname`, `processorgen`, `RAM`, `HDDcapacity`, `OS`, `webcamera`, `screensize`, `screenresolution`, `weight`, `warranty`, `price`, `offerprice`, `qty`) VALUES
(1, 'Dell Inspiron APU Dual Core E2', '3565', 'images/dell-na-laptop-original-imaexkmjm8dufspd.jpeg', 'A561237UIN9\r\n', 'Black', 'laptop', 'AMD', 'APU Dual Core E2\r\n', 'Dual Core', 4, '500 GB\r\n', 'Linux', 'HD Webcam\r\n', '15.6 inch\r\n', '1366 x 768 Pixel\r\n', '2.27 kg\r\n', '1 Year Onsite Warranty\r\n', '20,990', 18990, 10),
(2, 'HP 15 Core i3 6th Gen', '15-be014TU', 'images/hp-notebook-original-imaev2zfjqfpf3ng.jpeg', '1AC77PA#ACJ\r\n', 'Black', 'Laptop', 'Intel', 'Core i3\r\n', '6th Gen\r\n', 4, '1 TB\r\n', '64 bit(Windows 10 Home)', 'HP TrueVision HD Webcam\r\n', '15.6 inch\r\n', '1366 x 768 pixel\r\n', '2.19 kg\r\n', '1 Year Onsite Warranty\r\n', '32,990', 30990, 10),
(3, 'HP 15 Core i5 7th Gen', '15g-br011TX', 'images/hp-laptop-original-imaexyzrc79jqjam.jpeg', '2JR17PA#ACJ\r\n', 'SIlver\r\n', 'Laptop', 'Intel\r\n', 'Core i5\r\n', '7th Gen\r\n', 8, '1 TB\r\n', '64 bit(Windows 10 Home)\r\n', 'HP TrueVision HD Webcam\r\n', '15.6 inch\r\n', '1366 x 768 Pixel\r\n', '2.1 kg\r\n', '1 Year Onsite Warranty\r\n', '53,490', 50490, 10),
(4, 'Lenovo Yoga 510 Core i3 6th Gen', 'Yoga 510', 'images/lenovo-2-in-1-laptop-original-imaezzztyq6zadhj.jpeg', '80S700DRIH\r\n', 'Black', '2 in 1 Laptop\r\n', 'Intel', 'Core i3\r\n', '6th Gen\r\n', 4, '1 TB\r\n', '64 bit(Windows 10 Home)', 'HD Webcam\r\n', '14 inch\r\n', '1920 x 1080 pixel\r\n', '1.73 kg\r\n', '1 Year Onsite Warranty\r\n', '37,990', 34990, 10),
(5, 'Apple Macbook Pro Core i5', 'A1278', 'images/apple-macbook-pro-notebook-md101hn-a-original-imaenfyjhafmh3gf.jpeg', 'MD101HN/A\r\n', 'SIlver\r\n', 'Laptop\r\n', 'Intel', 'Core i5\r\n', 'Core i5\r\n', 4, '500 GB\r\n', 'OS X Mavericks\r\n', '720p FaceTime HD Camera\r\n', '13.3 inch\r\n', '1280 x 800 pixels\r\n', '2.06 kg\r\n', '1 Year manufacturer warranty\r\n', '89,800', 89500, 10),
(6, 'HP Core i5 7th Gen Pavilion\r\n', '15-au623tx', 'images/hp-pavilion-notebook-original-imaerb8vksrsxcpz.jpeg\r\n', 'Z4Q42PA#ACJ', 'SIlver\r\n', 'Laptop\r\n', 'Intel', 'Core i5\r\n', '7th Gen\r\n', 8, '1 TB\r\n', '64 bi(Windows 10 Home)\r\n', 'HP Wide Vision HD Webcam\r\n', '15.6 inch\r\n', '1366 x 768 pixel\r\n', '2.04 kg\r\n', '1 Year Onsite Warranty\r\n', '60,490', 58490, 10),
(7, 'Acer Aspire 3 Celeron Dual Core', 'A315-31', 'images/acer-na-laptop-original-imaezm9cqkwwg2vm.jpeg', 'UN.GNTSI.003\r\n', 'Black\r\n', 'Laptop', 'Intel\r\n', 'Celeron Dual Core\r\n', 'Dual Core\r\n', 4, '500 GB\r\n', '64 bit(Windows 10 Home)', 'Acer Webcam\r\n', '15.6 inch\r\n', '1920 x 1080 Pixel\r\n', '2.1 kg\r\n', '1 Year International Travelers Warranty (ITW)\r\n', '20,490', 18990, 10),
(8, 'Dell Inspiron 5000 Core i7 7th Gen', '5578', 'images/dell-inspiron-2-in-1-laptop-original-imaemwdzsw8gmyhj.jpeg', 'Z564504SIN9/A564105SIN9\r\n', 'Gray', '2 in 1 Laptop\r\n', 'Intel\r\n', 'Core i7\r\n', '7th Gen\r\n', 8, '1 TB\r\n', '64 bit(Windows 10 Home)', 'IR Camera\r\n', '15.6 inch\r\n', '1920 x 1080 pixel\r\n', '1.62 kg\r\n', '1 Yr Premium Support\r\n', '78,990', 78490, 10),
(9, 'Microsoft Surface Pro 4 Core i5 6th Gen', '1724', 'images/microsoft-surface-2-in-1-laptop-original-imaenksdnnszqxnb.jpeg', 'CR5-00028\r\n', 'SIlver\r\n', '2 in 1 Laptop\r\n', 'Intel\r\n', 'Core i5\r\n', '6th Gen\r\n', 4, '1 TB', '64 bit(Windows 10 Pro)\r\n', '5 Megapixel Front Camera, 8 Megapixel Auto Focus Rear Camera\r\n', '12.3 Inch\r\n', '2736 x 1824 pixel\r\n', '0.78 kg\r\n', '1 Year Limited Hardware Warranty\r\n', '79,990', 65490, 10);

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `modelname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `modelno` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `sim type` varchar(255) NOT NULL,
  `display size` varchar(255) NOT NULL,
  `resolution` varchar(255) NOT NULL,
  `resolution type` varchar(255) NOT NULL,
  `operating system` varchar(255) NOT NULL,
  `processor type` varchar(255) NOT NULL,
  `processor core` varchar(255) NOT NULL,
  `internal storage` varchar(255) NOT NULL,
  `RAM` int(11) NOT NULL,
  `Expandable storage` varchar(255) NOT NULL,
  `primary camera` varchar(255) NOT NULL,
  `secondary camera` varchar(255) NOT NULL,
  `video recording resolution` varchar(255) NOT NULL,
  `network type` varchar(255) NOT NULL,
  `supported network` varchar(255) NOT NULL,
  `3G speed` varchar(255) NOT NULL,
  `wifi version` varchar(255) NOT NULL,
  `GPS control` varchar(255) NOT NULL,
  `sim size` varchar(255) NOT NULL,
  `sensors` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `depth` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `name`, `modelname`, `price`, `offerprice`, `images`, `modelno`, `color`, `sim type`, `display size`, `resolution`, `resolution type`, `operating system`, `processor type`, `processor core`, `internal storage`, `RAM`, `Expandable storage`, `primary camera`, `secondary camera`, `video recording resolution`, `network type`, `supported network`, `3G speed`, `wifi version`, `GPS control`, `sim size`, `sensors`, `audio`, `battery`, `warranty`, `width`, `height`, `depth`, `weight`, `qty`) VALUES
(1, 'mobile', 'Samsung On Nxt 64GB', '&#8377 17,900 ', 11900, 'images/samsung-galaxy-on-nxt-sm-g610fzdhins-original-imaet97hmqvfn5a6.jpeg', 'SM-G610FZDHINS', 'Gold', 'Dual Sim', '5.5 inch', '1920 x 1080 pixels', 'Full HD', 'Android Marshmallow 6', 'Exynos 7870 Octa Core 1.6 GHz\r\n', 'Octa Core', '64 GB', 3, '256 GB', '13MP', '8MP', 'yes(1920 x 1080 Pixels)', '4G, 3G, 2G', '4G LTE', 'yes(HSPA+ 42.2 Mbps)', '802.11 b/g/n', 'Yes', 'Nano SIM', 'Accelerometer, Proximity Sensor, Fingerprint Sensor', 'MP3', '3300 mAh', 'Brand Warranty of 1 Year', '75 mm', '151.7 mm', '8 mm', '167 g', 10),
(2, 'mobile', 'Samsung Galaxy J7 - 6', '&#8377 13,800', 9790, 'images/samsung-galaxy-j7-2016-sm-j710fzduins-original-imaeg8cxjhaueqwg (1).jpeg', 'SM-J710FZKUINS/ SM-J710FZWUINS/ SM- J710FZDUINS', 'Gold', 'Dual Sim', '5.5 inch', '1280 x 720 Pixels', 'HD', 'Android Marshmallow 6', 'Exynos 7870 Octa Core 1.6GHz\r\n', 'Octa Core', '16 GB', 2, '128 GB', '13MP', '5MP', 'yes(1920 x 1080)', '4G, 3G', 'GSM, WCDMA\r\n', 'yes(42.2 Mbps HSDPA; 5.76 Mbps HSUPA, HSPA+)', '802.11 b/g/n', 'Yes', 'Micro SIM', 'Accelerometer, Hall Sensor, Proximity Sensor', 'MP3, M4A, 3GA, AAC, OGG, OGA, WAV, WMA, AMR, AWB, FLAC, MID, MIDI, XMF, MXMF, IMY, RTTTL, RTX, OTA\r\n', '3300 mAh', 'Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories', '76 mm\r\n', '151 mm', '7.8 mm', '169 g', 10),
(6, 'mobile', 'Mi Mix 2 (Black)', '&#8377 37,999', 32999, 'images/mi-mi-mix-2-na-original-imaeydgnjzmvxwfz.jpeg', 'Mi Mix 2', 'Black', 'Dual Sim', '5.99 inch', 'Yes(2160 x 1080 Pixels)', 'Full HD+', 'Android Nougat 7.1.1', 'Qualcomm Snapdragon 835 Octa Core 2.5 GHz\r\n', 'Octa Core', '128 GB', 6, '256 GB', '12MP', '5MP', 'Yes', '4G VOLTE, 3G, 2G\r\n', '4G VoLTE, UMTS, GSM, 4G LTE, WCDMA\r\n', 'Yes', '802.11 a/b/g/n/ac', 'Yes', 'Nano SIM ', 'Fingerprint Scanner, Ambient Light Sensor, Proximity Sensor, E-compass, Accelerometer, Gyroscope, Hall Sensor, Barometer\r\n', 'MP3', '3400 mAh', 'Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories', '75.49 mm', '151.86 mm', '7.7 mm', '185 g', 10),
(7, 'mobile', 'Apple iPhone 6s Plus', '&#8377 49,000', 39999, 'images/apple-iphone-6s-plus-mn2x2hn-a-original-imaexvxu2uuqrgpe.jpeg', 'MN2X2HN/A', 'Gold', 'Single Sim', '5.5 inch', '1080 x 1920 Pixels', 'Retina HD Display\r\n', 'iOS 9', 'Apple A9 64-bit processor and Embedded M9 Motion Co-processor', 'Dual Core', '32 GB', 2, '', '12MP', '5MP', 'yes(3840 x 2160)', '4G, 3G, 2G', '4G LTE', 'yes', '802.11 a/b/g/n/ac\r\n', 'yes', 'Nano Sim', 'Touch ID Fingerprint Sensor, Barometer, Three-axis Gyro Sensor, Accelerometer, Proximity Sensor, Ambient Light Sensor, Digital Compass\r\n', 'WAV, AAX, AAX+, AAC, VBR, MP3, AIFF, HE-AAC\r\n', '2750 mAh\r\n', 'Brand Warranty of 1 Year', '77.9 mm', '158.2 mm', '7.3 mm', '192 g', 10),
(8, 'mobile', 'Apple iPhone 7 Plus', '&#8377 68,000', 65999, 'images/apple-iphone-7-plus-na-original-imaemzg7hzvnwghj.jpeg', 'MN4V2HN/A', 'Jet Black ', 'Single Sim\r\n', '5.5 inch', 'yes(1920 x 1080 Pixels)', 'Retina HD Display', 'iOS 10', 'Apple A10 Fusion 64-bit processor and Embedded M10 Motion Co-processor', '', '128 GB', 2, '', '12MP + 12MP\r\n', '7MP', 'yes(3840 x 2160)', '4G VOLTE, 3G, 2G', '4G LTE\r\n', 'Yes(HSPA+)\r\n', '802.11 a/b/g/n/ac', 'yes', 'Nano Sim\r\n', 'Touch ID Fingerprint Sensor, Barometer, Three-axis Gyro Sensor, Accelerometer, Proximity Sensor, Ambient Light Sensor, Backside Illumination Sensor, Digital Compass\r\n', 'AAC, MP3, HE-AAC, MP3 VBR, AAX, AAX+, AIFF, WAV', 'Li-Ion', 'Brand Warranty of 1 Year\r\n', '77.9 mm', '158.2 mm', '7.3 mm', '188 g', 10),
(10, 'mobile', 'Moto C Plus', '&#8377 6,999', 5999, 'images/motorola-moto-c-plus-xt1721-original-imaeup4xck2gdxzj.jpeg', 'XT1721', 'Pearl White', 'Dual Sim', '5 inch', 'yes(1280 x 720 Pixels)', 'HD', 'Android Nougat 7\r\n', 'Mediatek MTK6737 Quad Core 1.3Ghz', 'Quad Core', '16 GB', 2, '32 GB', '8 MP', '2 MP', 'Yes', '4G VOLTE, 3G, 2G', '4G VoLTE, 4G LTE', 'Yes', '802.11 b/g/n', 'yes', 'Nano SIM and Nano SIM\r\n', 'Accelerometer', 'MP3', '4000 mAh', 'Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories', '72.3 mm', '144 mm', '10 mm', '151 g', 10),
(11, 'mobile', 'Lenovo P2 ', '&#8377 17,999', 14999, 'images/lenovo-p2-p2a42-original-imaepw3ws2h8gvbz.jpeg', 'P2a42', 'Gold', 'Dual Sim', '5.5 inch', '1920 x 1080 pixels', 'Full HD', 'Android Marshmallow 6', 'Qualcomm Snapdragon 625 Octa Core 2.0GHz', 'Octa Core', '32 GB', 4, '128 GB', '13MP', '5MP', 'Yes(720 x 1280)', '4G VOLTE, 3G, 2G', '4G LTE', 'HSPA+', '802.11 ac/a/b/g/n', 'Yes', 'Nano SIM', 'Vibration, Gravitation, Proximity, Light Sensor, Gyroscope (Accelerometer), Magnetometer (e-Compass), Front Finger Print', 'MP3', '5100 mAh\r\n', 'Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories', '76 mm', '153 mm', '8.3 mm', '177 g', 10),
(12, 'mobile', 'Zenfone 4 Selfie Pro', '&#8377 25,999', 23999, 'images/asus-zenfone-4-selfie-pro-zd552kl-5a053in-original-imaeyt5gmqwtegyj.jpeg', 'ZD552KL-5A053IN', 'Black', 'Dual Sim', '5.5 inch', '1920 x 1080 Pixels', 'Full HD', 'Android Nougat 7', 'Octa Core Qualcomm Snapdragon 625', 'Octa Core', '64 GB\r\n', 4, '2 TB', '16MP', '24MP+5MP', 'Yes(3840 x 2160 Pixels)', '4G VOLTE, 4G, 3G, 2G', '4G VoLTE, WCDMA, UMTS\r\n', 'Yes', '802.11 b/g/n', 'Yes', 'Nano Sim', 'Front Fingerprint Sensor, Accelerator, E-Compass, Gyroscope, Proximity Sensor, Ambient Light Sensor, RGB Sensor', 'MP3', '3000 mAh', 'Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories', '77 mm', '154.3 mm', '7.99 mm', '147 g', 10),
(13, 'mobile', 'Samsung Galaxy J7 Prime', '&#8377 15,300', 13900, 'images/samsung-galaxy-j7-prime-sm-g610fzddins-original-imaerf34vgf7bb4g.jpeg', 'SM-G610FZDDINS/SM-G610FZDOINS', 'Gold', 'Dual Sim', '5.5 inch\r\n', '1920 x 1080 Pixels\r\n', 'Full HD', 'Android Marshmallow 6', 'Exynos 7870 Octa Core 1.6GHz', 'Octa Core', '32 GB\r\n', 3, '256 GB\r\n', '13MP', '8MP', 'Yes(1920 x 1080 pixel)', '4G, 3G, 2G', '4G LTE, GSM\r\n', 'HSPA+ 42.2 Mbps', '802.11 b/g/n', 'Yes', 'Micro SIM', 'Accelerometer, Light Sensor, Proximity Sensor', 'AAC, AAC+, eAAC+, MP3\r\n', '3300 mAh', 'Brand Warranty of 1 Year,1 Year Manufacturer Warranty', '75 mm', '151.7 mm', '8 mm', '167 g', 10),
(14, 'mobile', 'Samsung Galaxy J2-2017', '&#8377 7,390', 6990, 'images/samsung-galaxy-j2-2017-sm-j200gtkdins-original-imaeyzyf3zydbxzj.jpeg', 'SM-J200GTKDINS\r\n', 'Absolute black', 'Dual Sim', '4.7 inch', '540 x 960 Pixels', '', 'Android Lollipop 5.4.1', '', 'Quad Core', '8 GB', 1, '128 GB', '5MP', '2MP', '1280 x 720 Pixels', '4G, 2G, 3G', 'GSM, 4G LTE, WCDMA\r\n', 'Yes', '802.11 b/g/n (2.4 GHz)', 'Yes', 'Micro SIM (3FF)', 'Accelerometer, Proximity Sensor', 'MP3, M4A, 3GA, AAC, OGG, OGA, WAV, WMA, AMR, AWB, FLAC, MID, MIDI, XMF, MXMF, IMY, RTTTL, RTX, OTA\r\n', '2000 mAh\r\n', 'Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories', '69.0 mm', '136.5 mm', '8.4 mm\r\n', '130 g', 10),
(15, 'mobile', 'Samsung Galaxy J2 Pro', '&#8377 9,090', 8490, 'images/samsung-galaxy-j2-pro-sm-j210fzsgins-original-imaesjzp5gbz3tj9.jpeg', 'SM-J210FZSGINS', 'Silver', 'Dual Sim', '5 inch\r\n', '1280 x 720 Pixels', 'HD', 'Android Marshmallow 6.0.1\r\n', 'Spreadtrum Quad-Core 1.5GHz\r\n', 'Quad Core\r\n', '16 GB', 2, '', '8MP', '5MP', '', '4G, 3G, 2G\r\n', '4G LTE, GSM\r\n', 'Yes', 'Yes', 'Yes', 'Micro Sim', 'Accelerometer, Proximity Sensor\r\n', 'MP3', '2600 mAh\r\n', '1 Year for Mobile & 6 Months Accessories Warranty\r\n', '', '', '', '138 g', 10),
(16, 'mobile', 'Nokia 6', '&#8377 14,790', 14346, 'images/nokia-6-na-original-imaevtehggyngmxn.jpeg', 'Nokia 6', 'Silver', 'Dual Sim\r\n', '5.5 inch\r\n', '1920 x 1080 pixels\r\n', 'Full HD\r\n', 'Android Nougat 7.1.1\r\n', 'Qualcomm Snapdragon 430\r\n', 'Octa Core', '32 GB', 3, '128 GB', '16MP', '8MP', 'Yes', '4G, 2G, 3G\r\n', '4G LTE\r\n', 'Yes', 'Yes', 'Yes', 'Nano Sim', 'Accelerometer (G-sensor), Ambient Light Sensor,	E-compass, Hall Sensor, Fingerprint Sensor, Gyroscope, Proximity Sensor\r\n', 'MP3', '3000 mAh\r\n', 'Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories\r\n', '75.8 mm', '154 mm\r\n', '7.85 mm\r\n', '147 g', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderno` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `modelname` varchar(255) NOT NULL,
  `modelno` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderno`, `cid`, `email`, `address`, `pincode`, `modelname`, `modelno`, `price`, `qty`, `total`, `payment`) VALUES
(1, 46647, 1, 'ishita@gmail.com', 'dankuni', '712311', 'Samsung Galaxy J2 Pro', 'null', 1, 1, 8490, 'paytm'),
(2, 46647, 1, 'ishita@gmail.com', 'dankuni', '712311', 'Moto C Plus', 'null', 1, 1, 5999, 'paytm'),
(6, 9303, 5, 'akash@gmail.com', 'dankuni', '712311', 'Panasonic 109cm (43 inch) Full HD LED Smart TV', 'TH-43ES480DX', 37999, 1, 37999, 'cash'),
(7, 16902, 5, 'akash@gmail.com', 'dankuni,WB', '712311', 'Voltas AC 185EY(R)', 'null', 29999, 2, 59998, 'paytm'),
(8, 99780, 3, 'mukul@gmail.com', 'Howrah', '712456', 'Samsung 545 L Frost Free Side by Side Refrigerator', 'RSA1SHMG1/TL', 63999, 2, 127998, 'paytm');

-- --------------------------------------------------------

--
-- Table structure for table `refrigerator`
--

CREATE TABLE `refrigerator` (
  `id` int(11) NOT NULL,
  `modelname` varchar(255) NOT NULL,
  `modelno` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `refrigeratortype` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `doors` int(11) NOT NULL,
  `starrating` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refrigerator`
--

INSERT INTO `refrigerator` (`id`, `modelname`, `modelno`, `brand`, `type`, `images`, `refrigeratortype`, `capacity`, `doors`, `starrating`, `year`, `warranty`, `price`, `offerprice`, `qty`) VALUES
(1, 'Whirlpool 245 L Frost Free Double Door Refrigerator', 'NEO FR258 CLS PLUS 2S', 'Whirlpool', 'Double Door', 'images/neo-fr258-cls-plus-2s-2-whirlpool-original-imaeva8zkrzc9tyr.jpeg', 'Top Freezer Refrigerator', 245, 2, '2', '2017', '1 Year on Refrigerator and 10 Years on Compressor', '21,900', 18499, 10),
(2, 'Samsung 545 L Frost Free Side by Side Refrigerator', 'RSA1SHMG1/TL', 'Samsung', 'Side by Side', 'images/rsa1shmg1-tl-5-samsung-original-imaetesrsfe5fhfc.jpeg', 'Top Freezer Refrigerator', 545, 2, '5', '2017', '1 Year on Refrigerator and 10 Years on Digital Inverter Compressor', '84,500', 63999, 10),
(3, 'Godrej 236 L Frost Free Double Door Refrigerator', 'RF GF 2362PTH', 'Godrej', 'Double Door', 'images/rf-gf-2552pth-2-godrej-original-imaeyj78e4unpy4u.jpeg', 'Top Freezer', 236, 2, '2', '2017', '1 Year Comprehensive and 10 Years on the Compressor', '20,500', 20499, 10),
(4, 'LG 260 L Frost Free Double Door Refrigerator', 'GL-I292RPZL', 'LG', 'Double Door', 'images/lg-gl-i292rpzl-original-imaeqy7zfvxvuvxb.jpeg', 'Top Freezer Refrigerator', 260, 2, '4', '2016', '1 Year-Product & 10 Year Smart Inverter Compressor', '29,590', 25999, 10),
(5, 'Haier 170 L Direct Cool Single Door Refrigerator', 'HRD-1703SMS-R/E', 'Haier', 'Single Door', 'images/hrd-1703sms-r-e-3-haier-original-imafythasrh88rfr.jpeg', 'Top Freezer Refrigerator', 170, 1, '3', '2017', '1 Year on Product and 4 Years on Compressor', '11200', 11199, 10);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `cid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`cid`, `name`, `address`, `pincode`, `state`, `mobile`, `email`, `password`) VALUES
(1, 'Ishita Chowdhury', 'Dankuni,Hooghly', '712311', 'West Bengal', '9898989898', 'ishita@gmail.com', '12345678'),
(3, 'Mukul Dutta', 'Dankuni,Hooghly', '712311', 'WB', '9191919191', 'mukul@gmail.com', '123456789'),
(4, 'Raja Das', 'Kolkata', '700002', 'WB', '1010101010', 'raja@gmail.com', '1234567890'),
(5, 'akash ', 'dankuni', '700056', 'WB', '9898989896', 'akash@gmail.com', '12345678'),
(6, 'dipika', 'Dankuni', '712345', 'ASSAM', '9723697534', 'dipika@gmail.com', '1234567890'),
(7, 'Amal', 'Kolkata', '700056', 'WB', '8080808080', 'amal@gmail.com', '98765432');

-- --------------------------------------------------------

--
-- Table structure for table `tablets`
--

CREATE TABLE `tablets` (
  `id` int(11) NOT NULL,
  `modelno` varchar(255) NOT NULL,
  `modelname` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `operating system` varchar(255) NOT NULL,
  `os version` varchar(255) NOT NULL,
  `RAM` int(11) NOT NULL,
  `voicecall` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `displaysize` varchar(255) NOT NULL,
  `displayresolution` varchar(255) NOT NULL,
  `primarycamera` varchar(255) NOT NULL,
  `secondarycamera` varchar(255) NOT NULL,
  `internalstorage` varchar(255) NOT NULL,
  `expandablestorage` varchar(255) NOT NULL,
  `ROM` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `GPS` varchar(255) NOT NULL,
  `wifi` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablets`
--

INSERT INTO `tablets` (`id`, `modelno`, `modelname`, `images`, `color`, `operating system`, `os version`, `RAM`, `voicecall`, `processor`, `displaysize`, `displayresolution`, `primarycamera`, `secondarycamera`, `internalstorage`, `expandablestorage`, `ROM`, `battery`, `GPS`, `wifi`, `warranty`, `price`, `offerprice`, `qty`) VALUES
(1, 'Brisk 4G2', 'iball Brisk 4G2', 'images/iball-4g2-original-imaequfgkzxe5ged.jpeg', 'Cobalt Blue\r\n', 'Android\r\n', 'v6.0 (Marshmallow)\r\n', 3, 'Yes\r\n', 'ARM Cartex A53\r\n', '7 inch\r\n', '1024X600 Pixels\r\n', '5 MP\r\n', '2 MP\r\n', '16 GB\r\n', '32 GB\r\n', '16 GB\r\n', '3500 mAh\r\n', 'Yes\r\n', 'Yes\r\n', '1 Year IBall Service Center Warranty\r\n', '9,999', 6999, 10),
(2, 'PB2-690M', 'Lenovo Phab 2 Pro', 'images/lenovo-phab-2-pro-pb2-690m-original-imaeqdzryyxtq4qj.jpeg', 'Champagne Gold', 'Android', '6.0 (Marshmallow)\r\n', 4, 'Yes', 'Qualcomm (MSM8976) Snapdragon 652 Processor', '6.4 inch\r\n', '2560 x 1440 Pixels', '16 MP\r\n', '8 MP', '64 GB\r\n', '16 GB\r\n', '64 GB\r\n', '7800 mAh\r\n', 'Yes', 'Yes', '1 Year for Mobile & 6 Months for Accessories', '30,000', 25900, 10),
(3, 'SM-T825NZSAINS', 'Samsung Galaxy Tab S3 (with Pen)', 'images/samsung-sm-t825czsatgy-original-imaeu8gakhzw5f5x.jpeg', 'Silver', 'Android', '7.0 (Nougat)', 4, 'No', 'Qualcomm MSM 8996 Processor', '9.7 inch', '2048 x 1536 Pixels', '13 Megapixels', '5 Megapixels', '32 GB', '256 GB', '32 GB', '6000 mAh', 'Yes', 'Yes', '1 Year on Tablet, 6 Months on Accessories', '51,500', 42990, 10),
(4, 'SM-T116nykyins', 'Samsung Galaxy Tab 3 V T116 Single Sim Tablet', 'images/samsung-t116n-original-imae9htfhckpmrvh.jpeg', 'EBONY BLACK', 'Android', 'v4.4 (KitKat)', 1, 'Yes', 'Quad Core', '7 inch', '1024 x 600 Pixels', '2 megapixels', 'No', '8 GB', '32 GB', '8 GB', '3600 mAh', 'Yes', 'Yes', '1 Year Warranty From Manufacurer', '10,900', 8999, 10),
(5, 'SM-T819YZDEINS', 'Samsung Galaxy Tab S2', 'images/samsung-sm-t819yzdeins-original-imaeryfhcnuj3d8n.jpeg', 'Gold', 'Android', '6.0 (Marshmallow)', 3, 'Yes', '1.8 GHz', '9.7 inch', '2048 x 1536 Pixels', '8 Megapixels', 'No', '32 GB', '128 GB', '32 GB', '5870 mAh', 'yes', 'yes', '1 Year Samsung Warranty', '42,000', 29900, 10),
(6, 'SM-T355YZWAINS', 'Samsung Galaxy Tab A T355Y', 'images/samsung-sm-t355yzwains-original-imaeswxej7hyuqpy.jpeg', 'Sandy White', 'Android', '5', 2, 'Yes', '1.2 GHz', '8 inch', '1024 x 768 Pixels', '5.0 megapixels', '2 MP', '16 GB', '128 GB', '16 GB', '4200 mAh', 'Yes', 'Yes', '1 Year Samsung India Warranty', '16,500', 15500, 10),
(7, 'MP272HN/A', 'Apple iPad', 'images/apple-mp272hn-a-original-imaesqd257ctzjfs.jpeg', 'Silver', 'iOS', '10', 2, 'No', 'A9 Chip with 64-bit Architecture with Embedded M9 Co-processor\r\n', '9.7 inch', '2048 x 1536 Pixels', '8 Megapixels', '1.2 Megapixels', '128 GB', 'No', '128 GB', 'Lithium Polymer', 'Yes', 'Yes', '1 Year on Tablet, 6 Months on Accessories', '46,300', 44300, 10),
(8, 'YT3-X90L 64 GB', 'Lenovo Yoga Tab 3 Pro', 'images/lenovo-yt3-x90l-original-imaerhw9uxuxggrr.jpeg', 'Puma Black', 'Android', 'Marshmallow', 4, 'No', 'Intel Atom x5 Z8500 Quad Core', '10.1 inch', '2560 x 1600 pixels', '13 megapixel', '5 megapixel', '64 GB', '128 GB', '64 GB', '10200 mAh', 'Yes', 'Yes', '1 Year on Product, 6 Months on Accessories', '44,990', 39990, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
  `id` int(11) NOT NULL,
  `modelno` varchar(255) NOT NULL,
  `modelname` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `displaysize` varchar(255) NOT NULL,
  `screentype` varchar(255) NOT NULL,
  `powerconsumption` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`id`, `modelno`, `modelname`, `color`, `images`, `displaysize`, `screentype`, `powerconsumption`, `warranty`, `price`, `offerprice`, `qty`) VALUES
(1, '32LJ573D', 'LG 80cm (32 inch) HD Ready LED Smart TV', 'Gray', 'images/lg-32lj573d-original-imaewbg8rdzhty85.jpeg', '32', 'LED', '130 W, 0.3 W (Standby)', '1 Year LG India Domestic Warranty', '30,990', 22499, 10),
(2, 'TH-43ES480DX', 'Panasonic 109cm (43 inch) Full HD LED Smart TV', 'Black', 'images/panasonic-th-43es480dx-original-imaexkz88jdwczg7.jpeg', '43', 'LED', '74 W, 0.5 W (Standby)', '1 Year Panasonic Warranty', '55,900', 37999, 10),
(3, 'KLV-40R352E', 'Sony 101.6cm (40 inch) Full HD LED TV', 'Black', 'images/sony-bravia-klv-40r352e-original-imaeugtjaudnerbd.jpeg', '40', 'LED', '51 W, 0.40 W (Standby)', '1 Year Manufacturer Warranty', '45900', 39999, 10),
(4, '32HB/ 32HB1', 'Onida 80.01cm (31.5 inch) HD Ready LED TV', 'Black', 'images/onida-leo32hb-original-imaew7h6gdyhhjz2.jpeg', '32', 'LED', '65 W, 1 W (Standby)', '1 Year Standard Warranty', '21,990', 17999, 10),
(5, '32FH4003', 'Samsung 80cm (32 inch) HD Ready LED TV', 'Black', 'images/samsung-32fh4003-original-imaesqeuzhe6x8qn.jpeg', '32', 'LED', '56 W, 0.40 W (Standby)', '1 Year Samsung India Domestic Warranty', '23,900', 19799, 10);

-- --------------------------------------------------------

--
-- Table structure for table `watches`
--

CREATE TABLE `watches` (
  `id` int(11) NOT NULL,
  `modelno` varchar(255) NOT NULL,
  `modelname` varchar(255) NOT NULL,
  `series` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `strapmaterial` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watches`
--

INSERT INTO `watches` (`id`, `modelno`, `modelname`, `series`, `images`, `strapmaterial`, `warranty`, `gender`, `price`, `offerprice`, `qty`) VALUES
(1, 'NH9710SM01E', 'Titan Raga NH9710SM01E', 'Raga', 'images/9710sm01-titan-original-imadmh7ykevu9sdj.jpeg', 'Stainless Steel Strap', '2 Years International Warranty', 'F', '6,795', 4275, 10),
(2, 'NH2250YM08', 'Titan Raga NH2250YM08', 'Raga', 'images/nc2250ym08-titan-original-imadmh8ynh2enbhy.jpeg', 'Stainless Steel Strap', '2 Years International Warranty', 'F', '3,999', 3895, 10),
(3, 'NG8060SL01C', 'Sonata Yuva', 'Yuva', 'images/ng8060sl01c-sonata-original-imaevgefurh9wtsr.jpeg', 'Leather Strap', '1 Year Warranty', 'F', '900', 849, 10),
(4, '8989PP06J', 'Sonata 8989PP06J', 'Casual', 'images/8989pp06j-sonata-original-imaevgeewtbywfr6.jpeg', 'Silicone Strap', '1 Year Domestic Warranty', 'F', '490', 447, 10),
(5, 'NF8976YL02J', 'Sonata NF8976YL02J', 'Casual', 'images/8976yl02-sonata-original-imadvjyzgfnuhwwp.jpeg', 'Metal Strap', '1 Year Warranty', 'F', '575', 504, 10),
(6, 'rakhi collation butterfly brown leather belt attractive women', 'rakhi collation butterfly', 'rakhi collation', 'images/rakhi-collation-butterfly-brown-leather-belt-attractive-women-original-imafythf2ufwxrhz.jpeg', 'Genuine Leather Strap', '6 Months SPINOZA(Ind.) Warranty.', 'F', '499', 159, 10),
(8, 'NG8073YM01C', 'Sonata Sona Sitara', 'Sona Sitara', 'images/8073ym01-sonata-original-imada5uphmhbzkep.jpeg', 'Metal Strap', '1 Year Warranty', 'F', '1,625', 1453, 10),
(9, 'emz2455sm01', 'Titan Raga emz2455sm01', 'Raga', 'images/emz2455sm01-titan-original-imaffh45cffcrxgy.jpeg', 'Metal Strap', '2 Years Manufacturer Warranty', 'F', '3,195', 3020, 10),
(10, 'NC2352SM02', 'Titan Raga NC2352SM02', 'Raga', 'images/nc2352sm02-titan-original-imafyj88rzz7nhsr.jpeg', 'Metal Strap', '2 Years International Warranty', 'F', '6,495', 4495, 10),
(13, '38018PP02CJ', 'Fastrack 38018PP02CJ', 'Casual', 'images/38018pp02cj-fastrack-original-imaerf6ue8kwecrr.jpeg', 'Resin Strap', '1 Year Manufacturing Warranty and 6 Months Battery Warranty', 'M', '950', 760, 10),
(14, 'NG3114PP02', 'Fastrack NG3114PP02', 'Casual', 'images/ng3114pp02-fastrack-original-imaeuw2hfmkzgrpe.jpeg', 'PU Strap', '2 Years Manufacturer Warranty', 'M', '995', 895, 10),
(15, 'NF38016PL02', 'Fastrack NF38016PL02', 'Casual', 'images/nf38016pl02j-fastrack-original-imaef4ycdgzedzms.jpeg', 'Leather Strap', 'Service Warranty', 'M', '3,445', 2756, 10),
(16, 'TWEG14900', 'Timex TWEG14900', 'E-Class', 'images/tweg14900-timex-original-imaeskzmgskgry6y.jpeg', 'Leather Strap', '1 Year Manufacturer Warranty', 'M', '5,995', 2999, 10),
(17, 'Ti002B11000', 'Timex Wrist Watch', 'Wrist Watch', 'images/ti002b11000-timex-original-imaezz62jchwwyjg.jpeg', 'Synthetic Leather Strap', '1 Year Manufacture Warranty', 'M', '2,295', 1044, 10),
(18, 'G907', 'Timex G907', 'Classics', 'images/g907-timex-original-imaefkktrybvszuf.jpeg', 'Stainless Steel Strap', '1 Year Domestic Warranty', 'M', '2,545', 2068, 10),
(19, 'NH1506YM01', 'Titan Regalia', 'Regalia', 'images/1506ym01-titan-original-imadsgn5wvzgzuxj.jpeg', 'Metal Strap', '2 Years International Warranty', 'M', '5,495', 4395, 10),
(20, '1585SL07C', 'Titan 1585SL07C', 'Casual', 'images/1585sl07-titan-original-imaejzztzyufnm3q.jpeg', 'Leather Strap', '2 Years International Warranty', 'M', '1,995', 1985, 10),
(21, '1692BM01', 'Titan 1692BM01', 'Titan Wrist Watch', 'images/1692bm01-titan-original-imaemsy6c9gbcmyf.jpeg', 'Stainless Steel Case, Stainless Steel Bezel', '1 Year Warranty', 'M', '5,995', 5400, 10),
(22, 'Nf7987YL02CJ', 'Titan Nf7987YL02CJ', 'Wrist Watch', 'images/7987yl02-sonata-original-imadvp42yfvejkfz.jpeg', 'Leather Strap', '1 Year Warranty', 'M', '560', 515, 10),
(23, 'ND1013SM01C', 'Sonata ND1013SM01C', 'Casual Wrist Watch', 'images/nd1013sm01c-sonata-original-imaemv7rebezeqp2.jpeg', 'Metal Strap', '1 Year Warranty', 'M', '790', 765, 10),
(24, '7115YM01', 'Sonata 7115YM01', 'Wrist Watch', 'images/7115ym01-sonata-original-imaeza9yyfeqha38.jpeg', 'Metal Strap', '1 Year Warranty', 'M', '2,299', 2060, 10);

-- --------------------------------------------------------

--
-- Table structure for table `wear`
--

CREATE TABLE `wear` (
  `id` int(11) NOT NULL,
  `modelno` varchar(255) NOT NULL,
  `modelname` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wear`
--

INSERT INTO `wear` (`id`, `modelno`, `modelname`, `images`, `type`, `gender`, `color`, `size`, `price`, `offerprice`, `qty`) VALUES
(1, 'Vim 16 G 4999', 'KJS Printed Bollywood Art Silk Saree', 'images/free-sarvim16-4999-sunaina-original-imaetmvfehkmqtxg.jpeg', 'Printed Saree', 'F', 'Multicolor', 'null', '2,299', 2199, 10),
(2, 'G029-Poonam-Grey-GRW\r\n', 'Active Anarkali Gown  (Blue)', 'images/na-free-g029-poonam-grey-aika-aika-na-original-imaeuzcjy8azqrxa.jpeg', 'Gown', 'F', 'Blue', 'Free', '1,999', 649, 10),
(3, 'VFKU96', 'Vbuyz Printed, Embroidered Women\'s A-line Kurta', 'images/4xl-vfku96-vbuyz-original-imaff8shypaz2bsm.jpeg', 'Kurta', 'F', 'Blue', 'Free', '2,960', 1960, 10),
(4, 'Cayman1M56', 'Cayman Acrylic Wool Poncho', 'images/free-lp1049-fuschia-cayman-original-imaex3fqh6yyxfrg.jpeg', 'Poncho', 'F', 'Violet', 'Free', '1,995', 932, 10),
(6, 'FO-SHRT-499-NAV', '5th Anfold Men Solid Formal Dark Blue Shirt', 'images/m-fo-shrt-499-nav-5th-anfold-original-imaeufzfxprgtvwd.jpeg', 'Shirt', 'M', 'Dark Blue', 'Free', '1,199', 999, 10),
(7, 'EKC51610097DarkblueWithWhite', 'Peter England Solid Men\'s Round Neck Black, Yellow, Blue T-Shirt', 'images/m-ekc51610097darkbluewithwhite-peter-england-original-imafy3w53xcfyxwj.jpeg', 'T-Sshirt', 'M', 'Black,Yellow,Blue', 'XL', '1,299', 899, 10),
(8, 'RODJKFH3-B', 'Rodid Full Sleeve Solid Men\'s Jacket', 'images/xxl-rodjkfh3-b-rodid-original-imaeqg77emz8m9hb.jpeg', 'Jacket', 'M', 'Black', 'XL', '2,899', 1999, 10),
(9, 'ABOY9866NAVY', 'Arrow New York Solid Tuxedo Style Party Men\'s Blazer', 'images/40-aboy9866navy-arrow-new-york-original-imaffgt8gdttypen.jpeg', 'Blazer', 'M', 'Blue', '44', '7,999', 4999, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac`
--
ALTER TABLE `ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart1`
--
ALTER TABLE `cart1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grocery`
--
ALTER TABLE `grocery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refrigerator`
--
ALTER TABLE `refrigerator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tablets`
--
ALTER TABLE `tablets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv`
--
ALTER TABLE `tv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watches`
--
ALTER TABLE `watches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wear`
--
ALTER TABLE `wear`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac`
--
ALTER TABLE `ac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart1`
--
ALTER TABLE `cart1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grocery`
--
ALTER TABLE `grocery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `refrigerator`
--
ALTER TABLE `refrigerator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tablets`
--
ALTER TABLE `tablets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tv`
--
ALTER TABLE `tv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `watches`
--
ALTER TABLE `watches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `wear`
--
ALTER TABLE `wear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;