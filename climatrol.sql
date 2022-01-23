-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2022 at 11:55 PM
-- Server version: 5.7.36-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `climatrol`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutUs`
--

CREATE TABLE `aboutUs` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subTitle` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutUs`
--

INSERT INTO `aboutUs` (`id`, `title`, `subTitle`, `text`, `img1`, `section`) VALUES
(2, 'Company Profile', 'Holistic and sustainable approach with innovation in every aspect of product design and development', 'Climatrol Corporation is an ISO 9001:2015 certified privately held Indian company with specialization in design, development and manufacturing of Refrigeration Equipment to meet different demand and application of our customers. We undertake Cold Room and Frozen Room projects with Puf panels, Condensing Units or Rack System, we also into the business of design and manufacturing of drinking water coolers, Eutectic Deep Freezers and Freezer on Wheels.In addition to above, Climatrol provides Mortuary Cooling Storage System, which are designed to keep cadavers. We deliver reliable performance and hygienic solutions for dead body storage.<br><br>Our manufacturing unit is located in Himachal Pradesh having young and dynamic engineers and technicians equipped with the latest computer-aided design systems and computer-aided manufacturing with CNC sheet metal presses, welding machines, Press brakes, Cannon PUF machines and in-house setup for Cooling and Condenser coils.<br><br>Our systems are widely used in perishable foods, medicines, chemicals, ice creams, fruit and vegetables, controlled atmosphere chambers, fruit ripening systems and many more. Climatrol has many credits to its name having completed several refrigeration works at various locations throughout India. Some of our prestigious customers are Mother Dairy Fruit & Vegetables Pvt. Ltd., Pizza Hut, KFC, Costa Coffee restaurants, Maruti Suzuki, IWPL, The Lalit Golf Spa Resort & DLF India Limited, Dairies, Mandis and Warehouses.<br><br>We have more than 1500 units running successfully at our esteemed customer’s sites. We provide after sales service, warranty, support including installation, testing and commissioning.', '', 'about'),
(3, 'Vision & Mission', ' To support our customers by providing superior products and services', 'We strive to be industry standard in service to our customers. To support our customers by providing superior products and services of exceptional value which help them gain a competitive advantage in their markets. To provide timely delivery of products whose performance and appearance are in accordance with our high manufacturing standards.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOfooPZslCV5vzOSAV1iloR_UnEtVE7lu2VVxM9zLavWQXkLevglLGZeLd8ojjIdzGhfs&usqp=CAU', 'mission'),
(10, 'Our Innovation', NULL, 'We have having young and dynamic engineers and technicians equipped with the latest computer-aided design systems and computer-aided manufacturing with CNC sheet metal presses, welding machines, Press brakes, Cannon PUF machines and in-house setup for Cooling and Condenser coils.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOfooPZslCV5vzOSAV1iloR_UnEtVE7lu2VVxM9zLavWQXkLevglLGZeLd8ojjIdzGhfs&usqp=CAU', 'innovation'),
(11, 'Our Approach', NULL, 'To provide you with best support and after sales services..With a presence in more than 43 cities through service franchise in India, we assure our esteemed client of an excellent after sales service.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOfooPZslCV5vzOSAV1iloR_UnEtVE7lu2VVxM9zLavWQXkLevglLGZeLd8ojjIdzGhfs&usqp=CAU', 'approach'),
(13, 'Our Quality', NULL, 'Climatrol is an ISO 9001:2015 certified Company. All of Climatrol\'s products are type tested and verified by rigorous testing in-house in the temperature and humidity controlled test chambers\r\n\r\nOne of Climatrol\'s key strengths is its complete self reliance in manufacturing technologies. Each product has been designed and engineered in-house.\r\n\r\nA special quality assurance team has set standards and benchmarks and monitors their implementation – at each and every stage of manufacture and testing. These benchmarks are constantly being reviewed and upgraded to keep pace with changing needs.\r\n<br><br>\r\nFor Climatrol, Quality is a prime objective and is built into a product meticulously.\r\nWe treat our customers, suppliers and staff with care and respect and strive for excellence and continual improvement in all our products and services.\r\n<img src=\'https://projects.letsgolive.in/climatrol/images/1111.png\'>', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOfooPZslCV5vzOSAV1iloR_UnEtVE7lu2VVxM9zLavWQXkLevglLGZeLd8ojjIdzGhfs&usqp=CAU', 'Quality'),
(14, 'title', 'subtitle', 'text', 'office-culture.jpg', 'Culture ');

-- --------------------------------------------------------

--
-- Table structure for table `about_section`
--

CREATE TABLE `about_section` (
  `id` int(222) NOT NULL,
  `section` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_section`
--

INSERT INTO `about_section` (`id`, `section`) VALUES
(2, 'about'),
(4, 'mission'),
(5, 'approach'),
(6, 'innovation'),
(7, 'approach'),
(8, 'Quality'),
(12, 'Culture');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(222) NOT NULL,
  `img` varchar(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `blogContent` longtext NOT NULL,
  `blog_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `img`, `title`, `blogContent`, `blog_date`) VALUES
(4, '2022_01_13_09_23_42images.jpg', 'Dummy text about blogs 1', 'Dummy Content About Blogs Dummy Content About Blogs Dummy Content About Blogs Dummy Content About Blogs Dummy Content About Blogs', '2022-01-13'),
(5, '2022_01_13_09_24_14images.jpg', 'Dummy text about blogs', 'Dummy Content About Blogs Dummy Content About Blogs Dummy Content About Blogs Dummy Content About Blogs Dummy Content About Blogs', '2022-01-13'),
(6, '2022_01_13_09_24_14images.jpg', 'Dummy text about blogs', 'Dummy Content About Blogs Dummy Content About Blogs Dummy Content About Blogs Dummy Content About Blogs Dummy Content About Blogs', '2022-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `clients_associates`
--

CREATE TABLE `clients_associates` (
  `id` int(11) NOT NULL,
  `icon` varchar(200) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients_associates`
--

INSERT INTO `clients_associates` (`id`, `icon`, `type`) VALUES
(37, '2022_01_11_08_36_08vadilal.png', 'client'),
(38, '2022_01_11_01_56_08apollo-hospital.png', 'Client'),
(39, '2022_01_11_01_56_13creambell.png', 'Client'),
(40, '2022_01_11_01_56_17dabur.png', 'Client'),
(41, '2022_01_11_01_56_21dlfindia.png', 'Client'),
(42, '2022_01_11_01_56_26escorts.png', 'Client'),
(43, '2022_01_11_01_56_32haldirams.png', 'Client'),
(44, '2022_01_11_01_56_38haumor.png', 'Client'),
(45, '2022_01_11_01_56_42indianoil.png', 'Client'),
(46, '2022_01_11_01_56_48marriot.png', 'Client'),
(47, '2022_01_11_01_56_53meridian.png', 'Client'),
(48, '2022_01_11_01_56_58motherdairy.png', 'Client'),
(49, '2022_01_11_01_57_02pizzahut.png', 'Client'),
(51, '2022_01_11_01_57_13umrao.png', 'Client'),
(52, '2022_01_11_01_57_18uno.png', 'Client'),
(53, '2022_01_11_01_57_24vanco.png', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(111) NOT NULL,
  `type` varchar(222) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `type`, `content`) VALUES
(1, 'map', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30581.176906735393!2d77.22868500227148!3d28.528209824146444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce19ac0000001%3A0xff3c44b09204d0fd!2sCLIMATROL%20CORPORATION!5e0!3m2!1sen!2sin!4v1641551472138!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>             \r\n                 '),
(2, 'call', 'Delhi: +91 11 40775500/ +91 11 40775501<br> +91 9871869666 / +91 9818881544 '),
(3, 'call', 'Jalandhar: +91 9815255756\r\n+01 81 4618438 / +91 7290089702'),
(4, 'call', 'Patna: +91 9910021843'),
(5, 'email', 'info@climatrol.in'),
(6, 'email', 'salesupport@climatrol.in'),
(7, 'address', 'Corporate:-\r\n108A Madangir, New Delhi-110062'),
(8, 'address', 'Factory:-\r\nMain Thapal Indi. Area, Kala-Amb (Distt. Sirmour), H.P. - 173030\r\n'),
(9, 'address', 'Punjab:-\r\n104 - 105, Pam Rose, World Trade Centre, G.T. Road,Jalandhar - 144002\r\n'),
(10, 'address', 'Bihar:-\r\nKankarbagh Main Road, Near Bikaner Sweets, Patna - 800020\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `msg` varchar(250) DEFAULT NULL,
  `enquiry_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `email`, `fullname`, `phone`, `subject`, `msg`, `enquiry_date`) VALUES
(1, 'praveen@gmail.com', 'Praveen', '09888995522', NULL, 'sdfds', '2021-12-20 00:00:00'),
(2, 'parveenranga21@gmail.com', 'Praveen kumart', '09891805062', 'Purifier RO UV', 'Test msg', '2021-12-20 12:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `headerSlider`
--

CREATE TABLE `headerSlider` (
  `id` int(222) NOT NULL,
  `img` varchar(222) DEFAULT NULL,
  `title` varchar(222) DEFAULT NULL,
  `subTitle` varchar(222) DEFAULT NULL,
  `btnText` varchar(222) DEFAULT NULL,
  `btnLink` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headerSlider`
--

INSERT INTO `headerSlider` (`id`, `img`, `title`, `subTitle`, `btnText`, `btnLink`) VALUES
(16, '2022_01_13_08_53_39collage.jpg', 'Our Products', '', 'Know More', 'https://projects.letsgolive.in/climatrol/about?section=about&section1=Culture'),
(17, '2022_01_13_08_54_35mutton.png', 'Commercial Refrigeration', 'for Frozen Foods', 'Know More', 'https://projects.letsgolive.in/climatrol/product_details?product=Deep%20Freezers'),
(18, '2022_01_13_08_55_11atmosphere (1).png', 'Cold Rooms ', 'for large scale industries', 'Know More', 'https://projects.letsgolive.in/climatrol/product_details?product=Cold%20Rooms'),
(19, '2022_01_13_08_55_43pharmay (1).png', 'Commercial Refrigeration ', 'for medicines & chemicals', 'Know More', 'https://projects.letsgolive.in/climatrol/product_details?product=Deep%20Freezers'),
(20, '2022_01_13_08_56_13vegetables.png', 'Commercial Refrigeration ', 'for ice creams, fruit and vegetables', 'Know More', 'https://projects.letsgolive.in/climatrol/product_details?product=Deep%20Freezers'),
(21, '2022_01_13_08_56_52cooler.png', 'Commercial Water Cooler', '', 'Know More', 'https://projects.letsgolive.in/climatrol/product_details?product=Water%20Cooler');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `short_dis` text NOT NULL,
  `product_dis` text NOT NULL,
  `img_front` varchar(222) DEFAULT NULL,
  `product_img` varchar(255) NOT NULL,
  `extraImg` varchar(222) DEFAULT NULL,
  `product_cat` varchar(255) DEFAULT NULL,
  `product_type` varchar(222) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `short_dis`, `product_dis`, `img_front`, `product_img`, `extraImg`, `product_cat`, `product_type`) VALUES
(25, 'Cold Rooms', 'Climatrol have in-house the manufacturing capability for refrigerated Cold rooms using Sandwich PUF Panels & Refrigeration units.', 'Climatrol Corporation is privately held Indian company with specialization in design, development & manufacturing of Refrigeration Equipments to meet different demand & application of our Customers. Climatrol have in-house the manufacturing capability for refrigerated Cold rooms using Sandwich PUF Panels & Refrigeration units. Climatrol offers a wide range of pre-fabricated walk-in-Coolers, Freezer Rooms and Combination Refrigerated Rooms. Equipments are designed and built to meet high ambient conditions year round. Our systems are widely used in Perishable Foods, Medicines, Chemicals, ICE-Creams, Fruit & Vegetables, Ripening Systems, Processed foods or any other product to be stored within a temperature of +15 °C to -28°C & many more…\r\n<br><br>\r\n<b style=\"color:#00a3e4;\">Industry - We serve</b><br>\r\n• Hospitality<br>\r\n• Dairy<br>\r\n• Horticulture<br>\r\n• Medicare<br>\r\n• Pharmacy Industry<br>\r\n• Seafood<br>\r\n• Specialty applications<br>\r\n• Ripening Chambers<br>\r\n• Research & Development Labs<br>\r\n', 'cold-rooms-500x500.jpg.png', '11.jpg', NULL, 'Cold Rooms', 'featured'),
(26, 'Water Cooler', 'We are one of the prominent manufacturers and suppliers of optimum quality Drinking Water Cooler', 'Climatrol’ Drinking Water Cooler range features a larger condenser coil coupled with liberal sideways ventilation for increased efficiency, closed from all sides and bottom to prevent entry of rodents etc. in the compressor compartment. We use polymer feet 100 mm high for zero rust and giving clear space for cleaning. We use SS304 Grade sheet for better corrosion protection. Our fittings and pipes coming in contact with potable water are made of brass, copper or food grade plastic. Our Drinking Water Coolers require low maintenance and our drip trays are liberally sized and are full width to prevent water splash. We use Emerson or Tecumseh make hermetically sealed compressors made in India for Indian conditions and not imported rotary compressors. We are one of the prominent manufacturers and suppliers of optimum quality Drinking Water Cooler. Available with us at a highly reasonable market price, the offered coolers are widely used for storing and dispensing cold water. Furthermore, these coolers can be customized as per the requirements of our valuable customers.\r\n<br><br>\r\n<b style=\"color:#00a3e4;\">Features</b><br><br>\r\n• ISI Marked<br>\r\n• ECO Friendly<br>\r\n• Superior Quality<br>\r\n• High storage capacity<br>\r\n• Minimum power consumption<br>\r\n• Low maintenance<br>\r\n• Reliable Fast Cooling Machine<br>\r\n• Prompt after Sales Service<br>\r\n• Requires Minimum Maintenance<br>\r\n• Full Stainless Steel Body & Tank 304 Grade<br>\r\n• Full width Single Sheet Molded Drain Tray<br>\r\n• Designed With American Technology<br>\r\n• Hermetically Sealed Compressors of High Efficiency<br>', 'industrial-water-cooler-500x500.jpg.png', '1.jpg', 'tech_cooler.png', 'Water Cooler', 'featured'),
(27, 'Deep Freezers', 'Climatrol’s Eutectic Freezer is lined on all sides with special Eutectic materials which solidifies when the power is on and keeps the temperature in the chamber stable when the power is switched.', 'Climatrol Eutectic Deep Freezers, the next generation deep freezer with ease of use, reliable, robust, & long-lasting. Thus the Eutectic Freezer ensures preservation of your materials or food successfully, even in areas where stored materials, leading to business losses & dissatisfied customers. Climatrol’s Eutectic Freezer is lined on all sides with special Eutectic materials which solidifies when the power is on and keeps the temperature in the chamber stable when the power is switched.\r\n\r\nClimatrol manufactures Freezer on Wheel of 120/150 Liters volume. This product is designed for retail sales of ICE-Cream. Temperature maintained inside the chamber is -38°C to keep ice cream hard during the day when ambient temperature rises to 45°C. This FOW can be mounted on Tri-Cycle or Pushcart for easy mobility. This is a very robust designed for the harsh Indian environment and use. It is plugged at night for freezing the eutectic and then runs without power for about 8 to 10 h during the day maintaining the products temperatures.\r\n<br><br>\r\n<b style=\"color:#00a3e4;\">Features</b><br><br>\r\n• Attains desired temperature at lesser time<br>\r\n• Improved Aesthetics and better visibility<br>\r\n• Ideally suited for Indian Climatic Condition<br>\r\n• Temperature control<br>\r\n• Stabilizer free operation<br>\r\n• Express freezing', 'deep_f.jpg', '4.jpg', NULL, 'Deep Freezers', 'featured'),
(28, 'Mortuary Systems', 'Climatrol provides Mortuary Cooling Storage Systems which are designed to keep cadavers. We deliver reliable performance and hygienic solutions for dead body storage.', 'Climatrol provides Mortuary Cooling Storage Systems which are designed to keep cadavers. We deliver reliable performance and hygienic solutions for dead body storage. Individual temp control is provided for each chamber of 2, 4, 6, & 8 bodies. Our systems are designed to prevent premature decomposition.\r\n<br><br>\r\n<b style=\"color:#00a3e4;\">Power</b><br>\r\n• The instrument is designed to operate on 220V AC Supply<br><br>\r\n\r\n<b style=\"color:#00a3e4;\">Sizes Available</b><br>\r\n• Single body: 03 kVA<br>\r\n• Two bodies: 04 kVA<br>\r\n• Three bodies: 05 kVA<br>\r\n• Four/Six bodies: 7.5 kVA<br><br>\r\n<b style=\"color:#00a3e4;\">Optional Accessories</b><br>\r\n• Pre fabricated panels for outer surface and stainless steel inner chamber with insulation in between.<br>\r\n• Outer body made of Stainless Steel instead of Mild Steel<br>\r\n• Telescopic tray system with three piece carriage assembly<br>\r\n• Suitable Voltage Stabilizer', NULL, '3.jpg', NULL, 'Mortuary', 'featured'),
(29, 'Water Cooler With UV & RO', '\r\nWe are one of the prominent manufacturers and suppliers of optimum quality Drinking Water Cooler', 'Climatrol offers you with a new range of COOLSTAR drinking Water Coolers equipped with purification systems. These units cool the Water as well as purify it ! A series of filters are designed to fit within the Water Cooler Casing, thereby saving space and additional piping &amp; fittings outside the Water Cooler. The filters inside remove the sediments, contaminants and odors in the water, before it is filled into the Water Cooler Tank, where it is cooled. After it is cooled, the water passes through an UV Module that kills the germs and viruses if left behind. The above filtration process lowers the hardness of the water along with the levels of Totally Dissolved Solids (TDS). Further it reduces the levels of dangerous heavy metal contaminants in many water sources. Pathogenic microorganisms that are harmful to health are also eliminated by the filtration process.', 'water_cooler2.jpg', '5.jpg', '55.jpg', 'Purifier RO and UV', 'featured'),
(30, 'Boxcold (Italy)', '', 'As our latest development, we have been selected by BOXCOLD Italy , as an authorized distributor of their products and equipment PAN India. \r\nBOXCOLD, Italy specializes in manufacturing of commercial and industrial cold rooms for various sectors of manufacturing, processing and storage of both \"food\" and \"non-food\" products. \r\n<br><br>\r\nFor more information, please visit <a href=\"http://boxcold.it/\">http://boxcold.it/</a>', NULL, '2.jpg', NULL, 'Boxcold', 'featured');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `resume_file` varchar(150) DEFAULT NULL,
  `enquiry_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `serviceEnquiry`
--

CREATE TABLE `serviceEnquiry` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `msg` varchar(250) DEFAULT NULL,
  `enquiry_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serviceEnquiry`
--

INSERT INTO `serviceEnquiry` (`id`, `fullname`, `email`, `phone`, `subject`, `msg`, `enquiry_date`) VALUES
(1, 'Praveen Kumar', 'parveenranga21@gmail.com', '09891805062', 'Purifier RO UV', 'Test msg', '2021-12-20 12:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(222) NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `text` longtext,
  `img` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'kartikya27@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `msg`, `img`, `company`) VALUES
(4, 'Pankaj Kumar', 'The Water Cooler was very good. It was succesfully installed at our office compus by Climatrol team.', '2022_01_11_02_34_37', 'DeviceDisk'),
(5, 'Sub. Divisional Engineer', 'It is certified that we have been using CLIMATROL COOLSTAR drinking water cooler model 150/150 Ltr. and 60/120 Ltr. for last 3 year and we are fully satisfied from climatrol\'s products.\r\nTheir service are the best and very much on time.', NULL, 'Haryana Public Works Department'),
(6, 'Vijay', 'Climatrol Products are really good.', NULL, 'Devicedisk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutUs`
--
ALTER TABLE `aboutUs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_section`
--
ALTER TABLE `about_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_associates`
--
ALTER TABLE `clients_associates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headerSlider`
--
ALTER TABLE `headerSlider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceEnquiry`
--
ALTER TABLE `serviceEnquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutUs`
--
ALTER TABLE `aboutUs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `about_section`
--
ALTER TABLE `about_section`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients_associates`
--
ALTER TABLE `clients_associates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `headerSlider`
--
ALTER TABLE `headerSlider`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serviceEnquiry`
--
ALTER TABLE `serviceEnquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
