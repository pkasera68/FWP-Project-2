-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2020 at 05:57 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `cupsplatesandglasses`
--

CREATE TABLE IF NOT EXISTS `cupsplatesandglasses` (
  `intro` varchar(1000) NOT NULL,
  `brand` varchar(1000) NOT NULL,
  `MRP` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `img_path` mediumtext NOT NULL,
  `Off%` double NOT NULL,
  `subC` varchar(20) NOT NULL,
  `ProdID` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cupsplatesandglasses`
--

INSERT INTO `cupsplatesandglasses` (`intro`, `brand`, `MRP`, `price`, `discount`, `rating`, `img_path`, `Off%`, `subC`, `ProdID`) VALUES
('Pigeon-Stainless Steel Coffee Cup Set of 6 (with Lid)', 'Pigeon', '900.00', '720.00', '180.00', '4.7 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\cps1.jpg', 20, 'cplglp1', 'cps1'),
('Mayur Exports Double Wall Stainless Steel Apple Tea & Coffee Cups,Set of 6, 100 Ml', 'Mayur', '1000.00', '400.00', '600.00', '4.2 out of 5 ', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\cps2.jpg', 60, 'cplglp1', 'cps2'),
('TOUARETAILS Stainless Steel Vacuum Insulated Travel Tea and Coffee Mug,Cup for Hot & Cold Drinks, Thermos Flask with Lid- Golden (500ML)', 'TOUARETAILS', '1400.00', '560.00', '840.00', '5 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\cps3.jpg', 60, 'cplglp1', 'cps3'),
('Navrang Meenakari Steel Glass Set for Water, Decorative Glass, 6.5 x 6.5 x 9 cm, Black Oxidized -Set of 6', 'NAVRANG', '600.00', '450.00', '150.00', '4.1 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\gls1.jpg', 25, 'cplglp1', 'gls1'),
('K K Traders Stainless Steel Glass Set (Laser Finished, 400ml) Set of 6', 'K K Traders', '1099.00', '494.55', '604.45', '4 out of 5(Great Bonanza Offer)', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\gls2.jpg\r\n', 55, 'cplglp1', 'gls2'),
('PROJAIN STEEL Steel Serving Glasses, Unbreakable Water Drinking Glass G3-12 Glass Set (Steel, 350 ml, Steel, Pack of 12)', 'PROJAIN STEEL', '1300.00', '650.00', '650.00', '5 out of 5(Great Bonanza Offer)', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\gls3.jpg', 50, 'cplglp1', 'gls3'),
('Coconut Stainless Steel Hammered Glasses - Set of 6 (250 ML Each)', 'Coconut', '1100.00', '825.00', '275.00', '4.4 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\gls4.jpg', 25, 'cplglp1', 'gls4'),
('Sumeet Stainless Steel Heavy Gauge Medium Halwa Plates with Mirror Finish 17cm Dia - Set of 6pc', 'Sumeet ', '856.00', '599.2', '256.8', '4.3 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\plts1.jpg', 30, 'cplglp1', 'plts1'),
('Coconut Stainless Steel Small Dinner Plates wiith 2 Partitioned(Heavy Guage) Dynasty Plate No.3 - Set of 2 - Diamater- 8 Inches', 'Coconut', '450.00', '225.00', '225.00', '5 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\plts2.jpg', 50, 'cplglp1', 'plts2'),
(' Planet Stainless Steel Plate Rack/Dish Rack/Plate Stand/Dish Stand/Utensil Rack/Chrome Plated', ' Planet', '750.00', '375.00', '375.00', '4.3 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\plts3.jpg', 50, 'cplglp1', 'plts3'),
('Cello Lush Fiesta Opalware Dinner Set, 18-Pieces, White', 'Cello', '1600.00', '1120.00', '480.00', '4.9 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\crpl1.jpg', 30, 'cplglp2', 'crpl1'),
('Cello Tropical Lagoon Opalware Dinner Set, 18-Pieces, White', 'Cello', '1600.00', '1120.00', '480.00', '4.4 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\crpl2.jpg', 30, 'cplglp2', 'crpl2'),
('Clay Craft Ripple Impression Bone China Cup and Saucer Set, 12-Pieces, White.', 'Clay Craft', '1200.00', '960.00', '240.00', '4.6 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\crcp1.jpg', 20, 'cplglp2', 'crcp1'),
('Organic Clay Crafts Clay Kulhad Tea Cups-Set of 6', 'Organic Clay Crafts', '600.00', '240.00', '360.00', '4.9 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\crcp2.jpg', 60, 'cplglp2', 'crcp2'),
('Bje Hot & Cold Ceramic Beverage Mug For Coffee, Tea & Milk, 400 Ml, Red', 'Bje', '900.00', '450.00', '450.00', '3.9 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\crcp3.jpg', 50, 'cplglp2', 'crcp3'),
('iKraft Motivational Quote Coffee Mug Home Kitchen Milk Tea Ceramic Drinking Tea Cup with Handgrip for Perfect Gift', 'iKraft', '950.00', '190.00', '760.00', '4.7 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\crcp4.jpg', 80, 'cplglp2', 'crcp4'),
('Hansa Fin Line Juice Tumbler 175 ml (Set of 6)', 'Hansa', ' 499.00', '299.00 ', '200.00 ', '4.4 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\crgl1.jpg', 40, 'cplglp2', 'crgl1'),
('Luminarc So Wine Red Wine Stem Glass Set of 4 (470 ml)', 'Luminarc ', '900.00', '792.00', '108.00', '4.6 out of 5', 'Images\\\\products\\\\CupsPlatesAndGlasses\\\\crgl2.jpg', 12, 'cplglp2', 'crgl2');

-- --------------------------------------------------------

--
-- Table structure for table `dinnersets`
--

CREATE TABLE IF NOT EXISTS `dinnersets` (
  `intro` varchar(1000) NOT NULL,
  `brand` varchar(1000) NOT NULL,
  `MRP` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `rating` varchar(1000) NOT NULL,
  `img_path` mediumtext NOT NULL,
  `Off%` double NOT NULL,
  `subC` varchar(20) NOT NULL,
  `ProdID` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinnersets`
--

INSERT INTO `dinnersets` (`intro`, `brand`, `MRP`, `price`, `discount`, `rating`, `img_path`, `Off%`, `subC`, `ProdID`) VALUES
('Larah By Borosil Mimosa Opalware Dinner Set, 27-Pieces, White', 'Larah by BOROSIL', '3350.00', '1842.5', '1507.5', '4 Out Of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr1.jpg', 45, 'dnrp1', 'dnr1'),
('Diva Mystrio Black 19 Pcs Dinner Set', 'Diva', '2395.00', '1555.00', '840', '4 out of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr2.jpg', 35, 'dnrp1', 'dnr2'),
('Shri & Sam Stainless Steel Dinner Set, 101 Pieces - Steel', 'Shri & Sam', '15000.00', '4200.00', '10800.00', '4 out of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr3.jpg', 72, 'dnrp1', 'dnr3'),
('Kitchen Pro Stainless Steel Dinner Set of 44 Pcs', 'Kitchen Pro', '3000.00', '1200.00', '1800.00', '4.1 Out Of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr4.jpg', 60, 'dnrp1', 'dnr4'),
('Cello Imperial Vinea Opalware Dinner Set, 33 Pieces, White', 'Cello', '4000.00', '2400.00', '1600.00', '3.8 out of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr5.jpg', 40, 'dnrp1', 'dnr5'),
('Homray Plastic Full Plates, Set of 6, White', 'Homray', '800.00', '520.00', '280.00', '4.3 out of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr6.jpg', 35, 'dnrp1', 'dnr6'),
('Classic Essentials Stainless Steel Handi Set, 10-Pieces, Blue', 'Classic Essentials ', '1300.00', '715.00', '585.00', '4.4 out of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr7.jpg	', 45, 'dnrp1', 'dnr7'),
('LaOpala Trinity Green Dinner Set of 24 Pcs,White', 'LaOpala', '2500.00', '1875.00', '625.00', '4 out of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr8.jpg', 25, 'dnrp2', 'dnr8'),
('Home Centre Oasis Victor Black Marble 20-Pc. Dinner Set, Standard', 'Home Centre', ' 2999.00', '1799.00', '1200.00', '4.7 out of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr9.jpg', 40, 'dnrp2', 'dnr9'),
('Milton Clarion Jr Stainless Steel Gift Set Casserole with Glass Lid, Set of 3,Steelplain', 'Milton', '2000.00', '1700.00', '300.00', '4.2 out of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr10.jpg', 15, 'dnrp2', 'dnr10'),
('Apricot Stainless Steel Dinner Set of 50 Pcs', 'Apricot ', ' 3949.00', '1599.00', ' 2350.00', '3.8 out of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr11.jpg', 60, 'dnrp2', 'dnr11'),
('Joy Home Microwave Safe Dinner Set-32 Pcs (Twin Color - Cherry Red)', 'Joy', '3500.00', '1400.00', '2100.00', '4.3 out of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr12.jpg', 60, 'dnrp2', 'dnr12'),
('Jensons Essentials Stainless Steel 4 Pcs Handi Set with lid & 4 Serving Spoon - Red', 'Jensons ', '1185.00', '651.75', '533.25', '4.5 out of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr13.jpg', 45, 'dnrp2', 'dnr13'),
('Uddhav Gold Collection Stainless Steel Heavy Diamond Touch 51 Pcs Dinner Set (Pack of 51 PCS)', 'Uddhav Gold', '9000.00', '3150.00', '5850.00', '4.7 out of 5', 'Images\\\\products\\\\dinnerSets\\\\dnr14.jpg', 65, 'dnrp2', 'dnr14');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `Name` varchar(20) DEFAULT NULL,
  `Lname` varchar(20) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `Cpassword` varchar(20) DEFAULT NULL,
  `fulladdress` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Name`, `Lname`, `mobileno`, `gender`, `email`, `userid`, `password`, `Cpassword`, `fulladdress`) VALUES
('Pranav', 'Kasera', '9893074443', 'male', 'pkasera68@gmail.com', 'pkasera68', 'pk', 'pk', '65 kasera bazar ratlam'),
('katrina', 'kaif', '9808978967', 'female', 'kat@gmail.com', 'kat23', 'kat', 'kat', 'bandra mumbai'),
('katrina', 'kaif', '9808978967', 'female', 'kat@gmail.com', 'kat23', 'kat', 'kat', 'bandra mumbai'),
('Vinay', 'singh', '6756342123', 'male', 'vinay32@gmail.com', 'vinay32', '1234', '1234', '89, karo bagh,new delhi,india'),
('Jadesh', 'hathi', '7898989888', 'female', 'pkasera@34gmail.com', 'gendi45', 'pratima', 'pratima', 'sadar bazar kanwan.'),
('Shahrukh', 'Khan', '7890895646', 'male', 'srk@gmail.com', 'srk23', 'badshah', 'badshah', 'Bunglow-Mannat,bandra,Navi Mumbai,Mahrashtra,India '),
('nitesh', 'meena', '7889674567', 'female', 'jklj@gmail.com', 'nitCh', 'nitc', 'nitc', 'NITT'),
('Himani ', 'Jain', '7889905654', 'female', 'himani@gmail.com', 'himani23', 'iambest', 'iambest', '78,karol bagh,New delhi,india'),
('Tommy', 'steve', '9897685678', 'male', 'tom@rediffmail.com', 'tom65', '1234567', '1234567', '34, Bada Ganpati ,Indore');

-- --------------------------------------------------------

--
-- Table structure for table `katrina`
--

CREATE TABLE IF NOT EXISTS `katrina` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katrina`
--

INSERT INTO `katrina` (`intro`, `brand`, `MRP`, `price`, `discount`, `rating`, `imgPath`, `pid`, `subC`) VALUES
('Hawkins Stainless Steel Pressure Cooker, 5 Litres, Silver', 'Hawkins', ' 3075.00', ' 2714.5', ' 307.5', '4.4 out of  5', 'Images\\products\\PandEl\\hawkins1.jpg', 'prs3', 'prsC'),
('Philips HD4928/01 Induction Cooktop  (Black, Push Button)', 'Philips', '4700.00', '2350.00', '2350.00', '4.3 Out Of 5', 'Images\\products\\PandEl\\ind2.jpeg', 'ind2', 'El');

-- --------------------------------------------------------

--
-- Table structure for table `katrinaorders`
--

CREATE TABLE IF NOT EXISTS `katrinaorders` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katrinaorders`
--

INSERT INTO `katrinaorders` (`intro`, `brand`, `MRP`, `price`, `discount`, `rating`, `imgPath`, `pid`, `subC`) VALUES
('Hawkins Stainless Steel Pressure Cooker, 5 Litres, Silver', 'Hawkins', ' 3075.00', ' 2714.5', ' 307.5', '4.4 out of  5', 'Images\\products\\PandEl\\hawkins1.jpg', 'prs3', 'prsC'),
('Philips HD4928/01 Induction Cooktop  (Black, Push Button)', 'Philips', '4700.00', '2350.00', '2350.00', '4.3 Out Of 5', 'Images\\products\\PandEl\\ind2.jpeg', 'ind2', 'El');

-- --------------------------------------------------------

--
-- Table structure for table `katrinaordersdetails`
--

CREATE TABLE IF NOT EXISTS `katrinaordersdetails` (
  `orderNo` bigint(20) DEFAULT NULL,
  `orderDate` varchar(100) DEFAULT NULL,
  `TotalItems` varchar(1000) DEFAULT NULL,
  `TotalAmt` bigint(20) DEFAULT NULL,
  `modeOfPay` varchar(100) DEFAULT NULL,
  `payStatus` varchar(100) DEFAULT NULL,
  `deliveryAddress` varchar(1000) DEFAULT NULL,
  `expectedDelivery` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katrinaordersdetails`
--

INSERT INTO `katrinaordersdetails` (`orderNo`, `orderDate`, `TotalItems`, `TotalAmt`, `modeOfPay`, `payStatus`, `deliveryAddress`, `expectedDelivery`) VALUES
(3537110, '02/06/2020', '2', 5065, 'Cash on Delivery', 'Pending', 'bandra mumbai', '09/06/2020');

-- --------------------------------------------------------

--
-- Table structure for table `knvandspoons`
--

CREATE TABLE IF NOT EXISTS `knvandspoons` (
  `intro` varchar(1000) NOT NULL,
  `brand` varchar(1000) NOT NULL,
  `MRP` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `discount` varchar(1000) NOT NULL,
  `rating` varchar(1000) NOT NULL,
  `img_path` mediumtext NOT NULL,
  `Off%` double NOT NULL,
  `subC` varchar(20) NOT NULL,
  `ProdID` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tablle of Kinves and spoons';

--
-- Dumping data for table `knvandspoons`
--

INSERT INTO `knvandspoons` (`intro`, `brand`, `MRP`, `price`, `discount`, `rating`, `img_path`, `Off%`, `subC`, `ProdID`) VALUES
('Pigeon by Stovekraft Stainless Steel Kitchen Knives Set, 3-Pieces, Multicolour', ' Pigeon by Stovekraft ', '350', '210', '140', '4 Out Of 5', 'Images\\\\products\\\\knvAndSpoons\\\\knv2.jpg', 40, 'ksp1', 'knv1'),
('KAVYA S ENTERPRISE Wood Kitchen Knife Set with Wooden Block and Scissors, with Stand, Knife Holder with Knife 5-Pieces (Green)', 'KAVYA', '4999', '250', '4750', '5 Out Of 5', 'Images\\\\products\\\\knvAndSpoons\\\\knv0.jpg\r\n', 95, 'ksp1', 'knv2'),
('Prestige Tru-Edge Kitchen Knife Set with Wooden Block and Free Peeler, 5-Pieces, Black', 'Prestige', '795', '636', '159', '4 Out Of 5', 'Images\\\\products\\\\knvAndSpoons\\\\knv4.jpg', 20, 'ksp1', 'knv3'),
('Parage Lily Premium Stainless Steel Cutlery Set - Set of 25 (Contains: 6 Master Spoons, 6 Tea Spoons, 6 Forks, 6 Soup Spoons) - Silver', 'Parage', '415', '399', '16', '4 Out Of 5', 'Images\\\\products\\\\knvAndSpoons\\\\sp1.jpg', 4, 'ksp1', 'spoon1'),
('Elegante 24-Piece Stainless Steel Cutlery Set (Black And Silver)', 'Elegante', '850', '680', '170', '4.1 Out Of 5', 'Images\\\\products\\\\knvAndSpoons\\\\sp2.jpg', 20, 'ksp1', 'spoon2'),
('Roxx Celsia Stainless Steel Cutlery Set, 24-Piece, Copper', 'Roxx Celsia', '3275', '1965', '1310', '4.5 Out Of 5', 'Images\\\\products\\\\knvAndSpoons\\\\sp3.jpg', 40, 'ksp1', 'spoon3'),
('FLYNGO Manual Knife Sharpener 3 Stage Sharpening Tool for Ceramic Knife and Steel Knives', 'FLYNGO ', '599', '360', '240', '4.3 Out Of 5', 'Images\\\\products\\\\knvAndSpoons\\\\knv5.jpg', 40, 'ksp1', 'knv4'),
('Pinnappo High Quality Cutlery Set Containing 24 Pieces Including 11 Spoons, 7 Knives and 6 Forks for Home and Kitchen', 'Pinnappo ', '1300', '520', '780', '4.3 Out Of 5', 'Images\\\\products\\\\knvAndSpoons\\\\sp4.jpg', 60, 'ksp1', 'sp4'),
('FnS Stainless Steel Madrid Serving Set, 4-Piece, Silver', 'FnS', '1200', '960', '240', '5 Out Of 5', 'Images\\\\products\\\\knvAndSpoons\\\\sp5.jpg', 20, 'ksp1', 'sp5'),
('Homez Décor Designer Mother Pearl Serving Set - Stainless Steel,Pearl Handles & Silver Work, 6 Pieces.', 'Homez Décor', '4500', '3500', '1000', '4.8 Out Of 5', 'Images\\\\products\\\\knvAndSpoons\\\\sp6.jpg', 22, 'ksp2', 'spoon6'),
('Homez Decor Designer Serving Spoon Stainless Steel, Blue Knot Design Handles - 6 Pieces Set', 'Homez Decor', '4500', '2700', '1800', '4.5 Out Of 5', 'Images\\\\products\\\\knvAndSpoons\\\\sp7.jpg', 40, 'ksp2', 'spoon7'),
('Roop Premium Quality Laser Checks Print Design Serving Spoon Set of 4 (2 Ladles and 2 Serving Spoons) Stainless Steel, Silver', 'Roops', '659', '429', '230', '4.1 out of 5', 'Images\\\\products\\\\knvAndSpoons\\\\sp8.jpg', 35, 'ksp2', 'spoon8'),
('Roops Serving Spoon 6 pc Set', 'Roops ', '795', '629', '166', '4.4 out of 5', 'Images\\\\products\\\\knvAndSpoons\\\\sp9.jpg', 21, 'ksp2', 'spoon9'),
('Cartini Godrej Essential Kitchen Cleaver,1 Pc Set, Stainless Steel (AISI 420J2).', 'Cartini Godrej', '1100', '550', '550', '4.2 out of 5', 'Images\\\\products\\\\knvAndSpoons\\\\knv6.jpg', 50, 'ksp2', 'knv5'),
('Ganesh Multipurpose Vegetable and Fruit Chopper Cutter Grater Slicer', 'Ganesh ', '981', '635', '346', '4 out of 5', 'Images\\\\products\\\\knvAndSpoons\\\\knv7.jpg', 35, 'ksp2', 'knv6');

-- --------------------------------------------------------

--
-- Table structure for table `mansi`
--

CREATE TABLE IF NOT EXISTS `mansi` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mansi`
--


-- --------------------------------------------------------

--
-- Table structure for table `mansiorders`
--

CREATE TABLE IF NOT EXISTS `mansiorders` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mansiorders`
--


-- --------------------------------------------------------

--
-- Table structure for table `mansiordersdetails`
--

CREATE TABLE IF NOT EXISTS `mansiordersdetails` (
  `orderNo` bigint(20) DEFAULT NULL,
  `orderDate` varchar(100) DEFAULT NULL,
  `TotalItems` varchar(1000) DEFAULT NULL,
  `TotalAmt` bigint(20) DEFAULT NULL,
  `modeOfPay` varchar(100) DEFAULT NULL,
  `payStatus` varchar(100) DEFAULT NULL,
  `deliveryAddress` varchar(1000) DEFAULT NULL,
  `expectedDelivery` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mansiordersdetails`
--


-- --------------------------------------------------------

--
-- Table structure for table `nitesh`
--

CREATE TABLE IF NOT EXISTS `nitesh` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nitesh`
--

INSERT INTO `nitesh` (`intro`, `brand`, `MRP`, `price`, `discount`, `rating`, `imgPath`, `pid`, `subC`) VALUES
('Cartini Godrej Essential Kitchen Cleaver,1 Pc Set, Stainless Steel (AISI 420J2).', 'Cartini Godrej', '1100', '550', '550', '4.2 out of 5', 'Images\\products\\knvAndSpoons\\knv6.jpg', 'knv5', 'ksp2');

-- --------------------------------------------------------

--
-- Table structure for table `niteshorders`
--

CREATE TABLE IF NOT EXISTS `niteshorders` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `niteshorders`
--

INSERT INTO `niteshorders` (`intro`, `brand`, `MRP`, `price`, `discount`, `rating`, `imgPath`, `pid`, `subC`) VALUES
('Cartini Godrej Essential Kitchen Cleaver,1 Pc Set, Stainless Steel (AISI 420J2).', 'Cartini Godrej', '1100', '550', '550', '4.2 out of 5', 'Images\\products\\knvAndSpoons\\knv6.jpg', 'knv5', 'ksp2');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `pandel`
--

CREATE TABLE IF NOT EXISTS `pandel` (
  `intro` varchar(1000) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `MRP` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `rating` varchar(1000) NOT NULL,
  `img_path` varchar(1000) NOT NULL,
  `Off%` double NOT NULL,
  `subC` varchar(20) DEFAULT NULL,
  `ProdID` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pandel`
--

INSERT INTO `pandel` (`intro`, `brand`, `MRP`, `price`, `discount`, `rating`, `img_path`, `Off%`, `subC`, `ProdID`) VALUES
('Prestige Clip On Stainless Steel Pressure Cooker with Glass Lid, 3 Litres, Silver', 'Prestige', '3780.00', ' 3370.00', ' 410.00', ' 3.4 Out Of 5', 'Images\\\\products\\\\PandEl\\\\prsckr2.jpg', 11, 'prsC', 'prs1'),
('Butterfly Friendly 3 L Induction Bottom Pressure Cooker (Aluminium).', 'Butterfly', '1199.00', ' 500.00', '1500.00', '4.1 Out Of 5', 'Images\\\\products\\\\PandEl\\\\prsckr5.jpg', 50, 'prsC', 'prs2'),
('Hawkins Stainless Steel Pressure Cooker, 5 Litres, Silver', 'Hawkins', ' 3075.00', ' 2714.5', ' 307.5', '4.4 out of  5', 'Images\\\\products\\\\PandEl\\\\hawkins1.jpg', 10, 'prsC', 'prs3'),
('Prestige Deluxe Alpha Outer Lid Stainless Steel Pressure Cooker, 3.3 Litres, Silver', 'Prestige ', ' 2310.0', '1848.00', '462.00', '4.2 out of 5', 'Images\\\\products\\\\PandEl\\\\prst1.jpg', 20, 'prsC', 'prs4'),
('Hawkins Futura Hard Anodised Induction Compatible Pressure Cooker, 5 Litre', 'Hawkins', '4075.00', '3899.00', '176.00', '4.1 out of 5', 'Images\\\\products\\\\PandEl\\\\ftura1.jpg', 4, 'prsC', 'prs5'),
('Hawkins Miss Mary Aluminium Pressure Cooker, 5 Litres, Silver', 'Hawkins', '1265.00', '1201.75', '63.25', '4.2 out of 5', 'Images\\\\products\\\\PandEl\\\\msmr1.jpg', 5, 'prsC', 'prs6'),
(' HAWKINS STAINLESS STEEL CONTURA PRESSURE COOKER 3 LITRES', ' HAWKINS', '2200.00', '1980.00', '220.00', '4.4 out of 5', 'Images\\\\products\\\\PandEl\\\\hawkins2.jpg', 10, 'prsC', 'prs7'),
('Prestige Nakshatra Alpha Stainless Steel Pressure Cooker, 3.5 Litres, Silv', 'Prestige', ' 2400.00', '1920.00 ', '480', '4 out of 5', 'Images\\\\products\\\\PandEl\\\\prst2.jpg', 20, 'prsC', 'prs8'),
('Pigeon by Stovekraft Favourite Outer Lid Non Induction Aluminium Pressure Cooker, 3 Litres, Silver', 'Pigeon', '850.00', '790.5', '59.5', '3.7 out of 5', 'Images\\\\products\\\\PandEl\\\\pgn1.jpg', 7, 'prsC', 'prs9'),
('Philips HL7710 /00 600 W Mixer Grinder (Red, White, 3 Jars).', 'Philips', '3955.00', '2768.5', '1186.5', ' 4.3 Out Of 5', 'Images\\\\products\\\\PandEl\\\\mxr1.jpeg', 30, 'El', 'mxr1'),
('Havells MaxxGrind 750 W Mixer Grinder  (Blue, 3 Jars)', 'Havells ', '4420.00', '3199', '1221', ' 4.4 Out Of 5', 'Images\\\\products\\\\PandEl\\\\mxr2.jpeg', 27, 'El', 'mxr2'),
('Prestige PIC 20.0 Induction Cooktop  (Black, Push Button)', 'Prestige', '2600.00', '1560.00', '1040.00', '4.2 Out Of 5', 'Images\\\\products\\\\PandEl\\\\ind1.jpeg', 40, 'El', 'ind1'),
('Philips HD4928/01 Induction Cooktop  (Black, Push Button)', 'Philips', '4700.00', '2350.00', '2350.00', '4.3 Out Of 5', 'Images\\\\products\\\\PandEl\\\\ind2.jpeg', 50, 'El', 'ind2'),
('Pigeon Brunet Stainless Steel, Glass Manual Gas Stove  (4 Burners)', 'Pigeon', '6700.00', '2680.00', '4020.00', '4.4 Out Of 5', 'Images\\\\products\\\\PandEl\\\\newgas1.jpg', 60, 'El', 'gas1'),
('Greenchef plus GT Glass top Gas stove Glass Manual Gas Stove  (2 Burners)', 'Greenchef', '5000.00', '1500.00', '3500.00', '4.3 Out Of 5', 'Images\\\\products\\\\PandEl\\\\newgas2.jpg', 70, 'El', 'gas2'),
('Bajaj 17 L Solo Microwave Oven  (1701MT, White)', 'Bajaj ', '4840.00', '3388.00', '1452.00', '4.5 Out Of  5', 'Images\\\\products\\\\PandEl\\\\micro1d.jpeg', 30, 'El', 'micro1'),
('Kenstar KTG02KGP-DBH Grill  (Black)', 'Kenstar', '799.00', '400.00', '400.00', '4.3 Out Of 5', 'Images\\\\products\\\\PandEl\\\\snd1.jpeg', 50, 'El', 'snd1'),
('Omic Twister Toaster (Black) Toast  (Black)', 'Omic', '1000.00', '199.00', '800', '4.1 Out Of 5', 'Images\\\\products\\\\PandEl\\\\snd2.jpeg', 80, 'El', 'snd2');

-- --------------------------------------------------------

--
-- Table structure for table `pranav`
--

CREATE TABLE IF NOT EXISTS `pranav` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pranav`
--

INSERT INTO `pranav` (`intro`, `brand`, `MRP`, `price`, `discount`, `rating`, `imgPath`, `pid`, `subC`) VALUES
('KAVYA S ENTERPRISE Wood Kitchen Knife Set with Wooden Block and Scissors, with Stand, Knife Holder with Knife 5-Pieces (Green)', 'KAVYA', '4999', '250', '4750', '5 Out Of 5', 'Images\\products\\knvAndSpoons\\knv0.jpg\r\n', 'knv2', 'ksp1'),
('Prestige Clip On Stainless Steel Pressure Cooker with Glass Lid, 3 Litres, Silver', 'Prestige', '3780.00', ' 3370.00', ' 410.00', ' 3.4 Out Of 5', 'Images\\products\\PandEl\\prsckr2.jpg', 'prs1', 'prsC');

-- --------------------------------------------------------

--
-- Table structure for table `pranavorders`
--

CREATE TABLE IF NOT EXISTS `pranavorders` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pranavorders`
--

INSERT INTO `pranavorders` (`intro`, `brand`, `MRP`, `price`, `discount`, `rating`, `imgPath`, `pid`, `subC`) VALUES
('Prestige Clip On Stainless Steel Pressure Cooker with Glass Lid, 3 Litres, Silver', 'Prestige', '3780.00', ' 3370.00', ' 410.00', ' 3.4 Out Of 5', 'Images\\products\\PandEl\\prsckr2.jpg', 'prs1', 'prsC'),
('KAVYA S ENTERPRISE Wood Kitchen Knife Set with Wooden Block and Scissors, with Stand, Knife Holder with Knife 5-Pieces (Green)', 'KAVYA', '4999', '250', '4750', '5 Out Of 5', 'Images\\products\\knvAndSpoons\\knv0.jpg\r\n', 'knv2', 'ksp1');

-- --------------------------------------------------------

--
-- Table structure for table `pranavordersdetails`
--

CREATE TABLE IF NOT EXISTS `pranavordersdetails` (
  `orderNo` bigint(20) DEFAULT NULL,
  `orderDate` varchar(100) DEFAULT NULL,
  `TotalItems` varchar(1000) DEFAULT NULL,
  `TotalAmt` bigint(20) DEFAULT NULL,
  `modeOfPay` varchar(100) DEFAULT NULL,
  `payStatus` varchar(100) DEFAULT NULL,
  `deliveryAddress` varchar(1000) DEFAULT NULL,
  `expectedDelivery` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pranavordersdetails`
--

INSERT INTO `pranavordersdetails` (`orderNo`, `orderDate`, `TotalItems`, `TotalAmt`, `modeOfPay`, `payStatus`, `deliveryAddress`, `expectedDelivery`) VALUES
(2960327, '03/07/2020', '1', 3370, 'Debit/Credit Card', 'Paid', '65 kasera bazar ratlam', '10/07/2020'),
(4569092, '04/07/2020', '1', 300, 'Cash on Delivery', 'Pending', '65 kasera bazar ratlam', '11/07/2020');

-- --------------------------------------------------------

--
-- Table structure for table `shahrukh`
--

CREATE TABLE IF NOT EXISTS `shahrukh` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shahrukh`
--

INSERT INTO `shahrukh` (`intro`, `brand`, `MRP`, `price`, `discount`, `rating`, `imgPath`, `pid`, `subC`) VALUES
('Parage Lily Premium Stainless Steel Cutlery Set - Set of 25 (Contains: 6 Master Spoons, 6 Tea Spoons, 6 Forks, 6 Soup Spoons) - Silver', 'Parage', '415', '399', '16', '4 Out Of 5', 'Images\\products\\knvAndSpoons\\sp1.jpg', 'spoon1', 'ksp1'),
('Parage Lily Premium Stainless Steel Cutlery Set - Set of 25 (Contains: 6 Master Spoons, 6 Tea Spoons, 6 Forks, 6 Soup Spoons) - Silver', 'Parage', '415', '399', '16', '4 Out Of 5', 'Images\\products\\knvAndSpoons\\sp1.jpg', 'spoon1', 'ksp1');

-- --------------------------------------------------------

--
-- Table structure for table `shahrukhorders`
--

CREATE TABLE IF NOT EXISTS `shahrukhorders` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shahrukhorders`
--


-- --------------------------------------------------------

--
-- Table structure for table `tommy`
--

CREATE TABLE IF NOT EXISTS `tommy` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tommy`
--


-- --------------------------------------------------------

--
-- Table structure for table `tommyorders`
--

CREATE TABLE IF NOT EXISTS `tommyorders` (
  `intro` varchar(1000) DEFAULT NULL,
  `brand` varchar(1000) DEFAULT NULL,
  `MRP` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `imgPath` mediumtext,
  `pid` varchar(10) DEFAULT NULL,
  `subC` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tommyorders`
--


-- --------------------------------------------------------

--
-- Table structure for table `tommyordersdetails`
--

CREATE TABLE IF NOT EXISTS `tommyordersdetails` (
  `orderNo` bigint(20) DEFAULT NULL,
  `orderDate` varchar(100) DEFAULT NULL,
  `TotalItems` varchar(1000) DEFAULT NULL,
  `TotalAmt` bigint(20) DEFAULT NULL,
  `modeOfPay` varchar(100) DEFAULT NULL,
  `payStatus` varchar(100) DEFAULT NULL,
  `deliveryAddress` varchar(1000) DEFAULT NULL,
  `expectedDelivery` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tommyordersdetails`
--

