-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 05:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `activity_master`
--

CREATE TABLE `activity_master` (
  `ac_id` int(15) NOT NULL,
  `ac_name` varchar(50) NOT NULL,
  `ac_date` varchar(15) NOT NULL,
  `ac_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_master`
--

INSERT INTO `activity_master` (`ac_id`, `ac_name`, `ac_date`, `ac_description`) VALUES
(4, ' City Bus Service Revival', '2024-10-02', '   After 17 years, the city bus service will resume operation, providing transport across 8 routes.\n'),
(5, 'Free Travel for Women', '2024-08-15', 'Special offer for women to travel for free on these buses until Raksha Bandhan.\r\n'),
(6, 'Municipal Corporation Upgrade', '2024-08-10', 'Surendranagar-Wadhvan is set to become a municipal corporation soon. This upgrade aims to enhance the city\'s infrastructure and urban services, including better roads, waste management, and utilities, boosting overall development in the area.\r\n'),
(7, ' Flood-Affected Area', '2024-07-06', 'Due to significant rainfall in recent years, parts of the region, including overbridges, have faced waterlogging issues. The municipality is working on improving drainage systems to prevent roads from being submerged during the monsoon.\r\n'),
(8, 'Flood Management', '2024-06-06', 'Heavy rains in 2023 impacted the region, leading to waterlogged bridges and streets. The municipality is working on improving flood management systems and maintaining critical infrastructure to mitigate future risks.\r\n'),
(9, 'New Road Projects', '2023-12-06', 'With Surendranagar City bus service being reinstated, roads along the eight bus routes are also being maintained and improved to support better transportation and smoother traffic flow.\r\n'),
(10, 'Hospital Health Infrastructure', '2023-10-06', 'The Surendranagar municipality continues to improve healthcare facilities.The Surendranagar Civil Hospital remains a major healthcare provider in the district, offering various services like emergency care, maternity services, and specialist consultations. The focus has been on upgrading medical equipment and expanding services to cater to the growing population.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(15) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin123@gmail.com', 'admin@123'),
(2, 'Pravina', 'prp123@gmail.com', 'prp@123'),
(3, 'Diya', 'drp123@gmail.com', 'drp@123'),
(4, 'Shruti', 'sk123@gmail.com', 'sk@123');

-- --------------------------------------------------------

--
-- Table structure for table `birth_application`
--

CREATE TABLE `birth_application` (
  `birth_id` int(15) NOT NULL,
  `birth_childname` varchar(50) NOT NULL,
  `birth_fathername` varchar(50) NOT NULL,
  `birth_mothername` varchar(50) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `birth_gender` varchar(10) NOT NULL,
  `birth_bornaddress` varchar(150) NOT NULL,
  `birth_permanentaddress` varchar(150) NOT NULL,
  `birth_pincode` int(10) NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `birth_email` varchar(50) NOT NULL,
  `birth_mobile` varchar(10) NOT NULL,
  `user_id` int(15) NOT NULL,
  `birth_remarks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `birth_application`
--

INSERT INTO `birth_application` (`birth_id`, `birth_childname`, `birth_fathername`, `birth_mothername`, `birth_date`, `birth_gender`, `birth_bornaddress`, `birth_permanentaddress`, `birth_pincode`, `birth_place`, `birth_email`, `birth_mobile`, `user_id`, `birth_remarks`) VALUES
(1, 'Veer', 'Rajnikantbhai', 'Bhartiben', '2024-08-01', 'Male', 'Shreeji hospital,\r\nSurendra Nagar.', '80 feet road,\nRayka Nagar society,\nNear Umiyamataji temple,\nSurendra Nagar.\n', 363001, 'Shreeji Hospital', 'veer123@gmail.com', '9427088520', 4, ''),
(3, 'Yash', 'Ashwinbhai', 'Truptiben', '2005-02-04', 'Male', 'Krishna Hospital,Surendranagar', 'Vidhyanagar,Dalmil Road,Surendranagar', 363031, 'Krishna Hospital', 'yashu05@gmail.com', '9316595757', 6, ''),
(4, 'Dev', 'Hiteshbhai', 'Sushilaben', '0005-12-06', 'Male', 'Maharshi Hospital,Morbi', 'Gokuliya,morbi', 363005, 'Maharshi Hospital', 'dev01@gmail.com', '5589912311', 7, ''),
(5, 'diya', 'Rajnikantbhai', 'Bhartiben', '2005-03-11', 'Female', 'Raykanagar,80 feet road,Surendranagar', 'Raykanagar,80 feet road,Surendranagar', 363030, 'Varmora Hospital', 'diya01@gmail.com', '0884996209', 9, ''),
(6, 'Pravina', 'Rameshbhai', 'Geetaben', '2005-06-16', 'Female', 'Mulchand road,near by ramdevnagar', 'Mulchand road,near by ramdevnagar,Surendranagar', 363001, 'SIMS Hospital', 'pravina05@gmail.com', '7862017227', 11, ''),
(7, 'Kuldip', 'Karamshibhai', 'Rekhaben', '2005-03-15', 'Male', 'Ram hospital,Surendnagar', 'Kumkum society,ratanpur', 363030, 'surendranagar', 'kuldip34@gmail.com', '0879859575', 12, ''),
(8, 'Raksha', 'Pratilbhai', 'Dakshaben', '2001-04-08', 'Female', 'Shiv hospital,ram road,sannad', 'Radhekrishna park-2,mulchand road,Surendranagar', 363034, 'Sanand', 'raksha12@gmail.com', '2973854659', 13, ''),
(9, 'Digvijay', 'Satishbhai', 'Sumitaben', '2007-07-08', 'Male', 'Komal hospital,main road,Anand', 'Kajal park,Ahmedabad', 363636, 'Anand', 'digu76@gaim.com', '3433434443', 14, ''),
(10, 'Nayra', 'Jagdishbhai', 'Vaishaliben', '2024-09-16', 'Female', 'Paramar hospital,lilapur', 'JK Society,Ahmedabad', 363031, 'Lilapur', 'nayra56@gmail.com', '9867894346', 15, ''),
(11, 'Alpa', 'Rajeshbhai', 'Jayaben', '2020-06-21', 'Female', 'lav hospital road,nani park pase,wadhawan', 'Ram society-1,wadhawan', 363434, 'wadhawan', 'alapa@gmail.com', '3635365345', 16, '');

-- --------------------------------------------------------

--
-- Table structure for table `community_hall`
--

CREATE TABLE `community_hall` (
  `ch_id` int(15) NOT NULL,
  `ch_name` varchar(100) NOT NULL,
  `ch_address` varchar(150) NOT NULL,
  `ch_capacity` int(10) NOT NULL,
  `ch_location_photo` varchar(300) NOT NULL,
  `ch_contact_person` varchar(15) NOT NULL,
  `ch_contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community_hall`
--

INSERT INTO `community_hall` (`ch_id`, `ch_name`, `ch_address`, `ch_capacity`, `ch_location_photo`, `ch_contact_person`, `ch_contact_no`) VALUES
(13, 'Nagarpalika auditorium', 'Nearby Omkar High school, behind Googhri Park society, Nav Jeevan Society, Saroadar Patel Nagar, Surendranagar, Gujarat 363002', 700, 'ch_location_photo/nagar_palika_auditorium.png', 'jaybhai Patel', '8849962095'),
(14, 'Shree lohana mahajan community hall', 'PJJJ+3JX, opp- chabila hanuman temple, Water Tank Rd, Surendranagar, Gujarat 363002', 300, 'ch_location_photo/shree_lohana_mahajan.png', 'Yash Thakker', '78878 8998'),
(15, 'Gebanshapir Muslim Community Hall', 'PM9G+QQC, Phase 2, Wadhwan, Surendranagar, Gujarat 363030', 500, 'ch_location_photo/gebnshapir_hall.png', 'Salman Ali', '3692581475'),
(16, 'Pandit Dindayal Upadhyay Town Hall', 'Nav Jeevan Society, Saroadar Patel Nagar, Surendranagar, Gujarat 363001', 900, 'ch_location_photo/dindayal_hall.png', 'Ravibhai Maheta', '081600 862'),
(17, 'Mangal Bhuvan', 'PMFC+2H8, C.U.Shah Government Politechnic, Wadhwan, Surendranagar, Gujarat 363001', 700, 'ch_location_photo/managal_bhuvan_hall.png', 'Dev Bavarva', '02752-2437');

-- --------------------------------------------------------

--
-- Table structure for table `corporater`
--

CREATE TABLE `corporater` (
  `co_id` int(15) NOT NULL,
  `co_name` varchar(50) NOT NULL,
  `co_designation` varchar(50) NOT NULL,
  `co_email` varchar(50) NOT NULL,
  `co_phone` varchar(15) NOT NULL,
  `co_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corporater`
--

INSERT INTO `corporater` (`co_id`, `co_name`, `co_designation`, `co_email`, `co_phone`, `co_address`) VALUES
(4, 'Shri R K Oza name', 'Residential Additional Collector	', 'r123@gmail.com	', '02752-285200		', 'Collector Office Surendranagar\r\n'),
(6, 'Shri A R Chavda	', 'Deputy District Election Officer	', 'a123@gmail.com	', '02757-285399', 'collector office , surendranagar\r\n'),
(7, 'Shri Jayantsingh Rathore	', 'Prant Officer Patdi	', 'jayantsimg123@gmail.com	', '02757-227522		', 'APrant Office Patdi\r\n'),
(9, 'Shri N D Dhula	', 'Prant Officer Wadhwan	', 'n123@gmail.com	', '02752-282187		', 'APrant Office Wadhwan\r\n'),
(11, 'Shri Kalpesh Kumar Sharma	', 'Prant Officer Chotila	', 'kalpesh123@gmail.com', '02751-281279		', '	\r\nPrant Office Chotila\r\n'),
(12, 'Shri R D Patel	', 'Mamlatdar Muli', 'r123@gmail.com', '02754-233321', 'Mamlatdar Office Muli'),
(13, 'Shri D. P. Basupya', 'Mamlatdar Sayla', 'd123@gmail.com', '02755-280773	', 'Mamlatdar Office Sayla\r\n'),
(14, 'Shri H M Amin', 'Mamlatdar Patdi', 'h123@gmail.com', '02757-227032', 'Mamlatdar Office Patadi'),
(15, 'Shri Kamlesh Kumar Solanki', 'Mamlatdar Limbdi', 'kamlesh123@gmail.com', '02753-260074', 'Mamlatdar Office Limbdi'),
(16, 'Shri K S Desai', 'Prant Officer Limbdi', 'k123@gmail.com', '02753-260051', 'Prant Office Limbdi');

-- --------------------------------------------------------

--
-- Table structure for table `death_application`
--

CREATE TABLE `death_application` (
  `death_id` int(15) NOT NULL,
  `death_date` varchar(50) NOT NULL,
  `death_time` varchar(10) NOT NULL,
  `death_gender` varchar(10) NOT NULL,
  `death_name` varchar(50) NOT NULL,
  `death_fathername` varchar(50) NOT NULL,
  `death_mothername` varchar(50) NOT NULL,
  `death_place` varchar(10) NOT NULL,
  `death_reason` varchar(50) NOT NULL,
  `death_address` varchar(150) NOT NULL,
  `death_familycontact` varchar(15) NOT NULL,
  `death_aadhar_card_no` varchar(15) NOT NULL,
  `death_aadhar_card` varchar(100) NOT NULL,
  `user_id` int(15) NOT NULL,
  `death_remarks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `death_application`
--

INSERT INTO `death_application` (`death_id`, `death_date`, `death_time`, `death_gender`, `death_name`, `death_fathername`, `death_mothername`, `death_place`, `death_reason`, `death_address`, `death_familycontact`, `death_aadhar_card_no`, `death_aadhar_card`, `user_id`, `death_remarks`) VALUES
(1, '2024-04-13', '10:00PM', 'Female', 'Parmar Navya R.', 'Rishibhai', 'Kokilaben', 'Surat', 'Heart Attack', '60 feet road,\r\nAlkapuri chock,\r\nSurat', '6353232859', '1472 5836 9456', 'death_aadhar_card/aadhaar-card.jpg', 4, ''),
(2, '2019-08-07', '10:00AM', 'Female', 'Katodiya Simaran P.', 'Prabhubhai', 'Mitalben', 'Surat', 'Cancer', 'Sundaram society-2,\r\nNear bus stand,\r\nSurat', '5565588988', '5544 8899 1212', 'death_aadhar_card/aadhaar-card.jpg', 6, ''),
(3, '2020-05-04', '10:00 AM', 'Male', 'Vyas Bipin M.', 'Maheshbhai', 'Swatiben', 'Ahemdabad', 'Suicide', 'Maheshwari society,\r\nNear Butterfly School,\r\nAhemdabad', '5565588988', '5544 8899 1212', 'death_aadhar_card/aadhaar-card.jpg', 7, ''),
(4, '2024-09-11', '11:00PM', 'Female', 'Kanzariya Manshi  P.', 'Prabhubhai', 'Mitalben', 'Rajkot', 'Short Circuit', 'Raykanagar,80 feet road,Rajkot', '7894561235', '7894 4561 2587', 'death_aadhar_card/aadhaar-card.jpg', 9, ''),
(5, '1980-05-11', '12:00AM', 'Male', 'Dadhi Raj N.', 'Nileshbhai', 'Rekhaben', 'Morbi', 'Heart attack', 'Umiya circle,Avni chok,Morbi', '1456237815', '7895 1234 6541', 'death_aadhar_card/aadhaar-card.jpg', 11, ''),
(6, '2011-12-11', '4.45PM', 'Male', 'Patel Alpesh P.', 'Pareshbhai', 'Sardaben', 'rojkot', 'Accident', 'nanara chok ma,bhavanagar', '5667463532', '1234 5678 9987', 'death_aadhar_card/aadhaar-card.jpg', 12, ''),
(7, '2022-03-04', '6:12PM', 'Male', ' Parmar Ashish K.', 'Kishanbhai', 'Champaben', 'surat', 'stroke', 'nava bajar,surat', '1233446543', '1876 2523 4347', 'death_aadhar_card/aadhaar-card.jpg', 13, ''),
(8, '1998-03-04', '4.45AM', 'Female', 'Lakum Rekha R.', 'Rambhai', 'Kajalben', 'Kothariya', 'chronic lower respiratory diseases', 'Karm park, sanand', '2766534723', '3876 8976 5237', 'death_aadhar_card/aadhaar-card.jpg', 14, ''),
(9, '2022-04-05', '6.39AM', 'Female', ' Jadav Radha K.', 'Krishanbhai', 'Laluben', 'Bhragupur', 'covid-19', 'Ram park,wadhawan', '487647645', '2786 2373 7664', 'death_aadhar_card/aadhaar-card.jpg', 15, ''),
(10, '2022-03-02', '9.45PM', 'Male', 'Kanziya Ravi P.', 'Pareshbhai', 'Mitaben', 'dahod', 'Machine Accident', 'GIDC,botad', '498763578657', '2397 4839 2576', 'death_aadhar_card/aadhaar-card.jpg', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `divorce_application`
--

CREATE TABLE `divorce_application` (
  `div_id` int(15) NOT NULL,
  `husband_name` varchar(15) NOT NULL,
  `husband_nationality` varchar(50) NOT NULL,
  `husband_date_of_birth` varchar(10) NOT NULL,
  `wife_name` varchar(15) NOT NULL,
  `wife_nationality` varchar(50) NOT NULL,
  `wife_date_of_birth` varchar(10) NOT NULL,
  `date_of_divorce` varchar(10) NOT NULL,
  `city_and_country_of_divorce` varchar(50) NOT NULL,
  `other_relevant_info` varchar(50) NOT NULL,
  `mrg_photos` varchar(100) NOT NULL,
  `translators_signature` varchar(200) NOT NULL,
  `translators_name` varchar(50) NOT NULL,
  `witness_id` int(15) NOT NULL,
  `witness_name` varchar(15) NOT NULL,
  `witness_aadhar_card` varchar(50) NOT NULL,
  `witness_mobile` varchar(10) NOT NULL,
  `user_id` int(15) NOT NULL,
  `div_remarks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divorce_application`
--

INSERT INTO `divorce_application` (`div_id`, `husband_name`, `husband_nationality`, `husband_date_of_birth`, `wife_name`, `wife_nationality`, `wife_date_of_birth`, `date_of_divorce`, `city_and_country_of_divorce`, `other_relevant_info`, `mrg_photos`, `translators_signature`, `translators_name`, `witness_id`, `witness_name`, `witness_aadhar_card`, `witness_mobile`, `user_id`, `div_remarks`) VALUES
(1, 'Virat', 'Indian', '2024-08-01', 'Priya', 'Indian', '2024-08-06', '2024-08-25', 'Surat,India', 'they have one child', 'mrg_photos/mrg3.jpg', 'translators_signature/signature.png', 'amit', 5, 'Lalitbhai', 'witness_aadhar_card/aadhaar-card.jpg', '8845566937', 4, ''),
(11, 'Krishna', 'Indian', '2005-01-06', 'Riya', 'Indian', '2005-06-15', '2023-06-15', 'surat,Indian', 'They have two son', 'mrg_photos/mrg8.jpg', 'translators_signature/signature.png', 'Amit Vyas', 1, 'Viral Vyas', 'witness_aadhar_card/aadhaar-card.jpg', '5486568340', 6, ''),
(12, 'Raj', 'Indian', '0005-03-18', 'Nilam', 'Indian', '2005-04-15', '2028-03-18', 'Surendranagar,india', 'They have only one child', 'mrg_photos/mrg7.jpg', 'translators_signature/signature.png', 'Ved patel', 5, 'om bhudev', 'witness_aadhar_card/aadhaar-card.jpg', '7412589635', 7, ''),
(13, 'Shubham', 'Indian', '2000-10-09', 'Ananya', 'Indian\n', '1999-09-12', '2022-11-03', 'surat,india', 'Religious differences', 'mrg_photos/mrg5.jpg', 'translators_signature/signature.png', 'Shital', 10, 'Yashvi', 'witness_aadhar_card/aadhaar-card.jpg', '9124653986', 9, ''),
(14, 'Prinsh', 'Indian', '1998-12-11', 'Radhika', 'Indian', '1997-11-23', '2017-12-21', 'bhagupur,india', 'addiction and substance abuse', 'mrg_photos/mrg1.jpg', 'translators_signature/signature.png', 'Shital', 4, 'Yash Thakker', 'witness_aadhar_card/aadhaar-card.jpg', '3433434443', 11, ''),
(15, 'Kishan', 'Indian', '1996-02-23', 'Senha', 'Indian', '1995-01-02', '2018-12-22', 'Zamar,india', 'Unrealistic expectations', 'mrg_photos/mrg2.jpg', 'translators_signature/signature.png', 'Virat', 5, 'Chaganbhai', 'witness_aadhar_card/aadhaar-card.jpg', '6777667778', 12, ''),
(16, 'Rahul', 'Indian', '2001-04-02', 'Natasha', 'Indian', '2001-03-31', '2023-12-25', 'surat,india', 'Religious differences', 'mrg_photos/mrg6.jpg', 'translators_signature/signature.png', 'Digvijay', 6, 'Raksha', 'witness_aadhar_card/aadhaar-card.jpg', '6766565430', 13, ''),
(17, 'Hradik', 'Indian', '2000-03-30', 'Kajal', 'Indian', '1999-02-12', '2022-02-08', 'Karol,india', 'Domestic violence', 'mrg_photos/mrg9.jpg', 'translators_signature/signature.png', 'Prakash', 1, 'Maganbhai', 'witness_aadhar_card/aadhaar-card.jpg', '1286237354', 14, ''),
(18, 'Kuldip', 'Indian', '2002-06-15', 'Hetal', 'Indian', '2001-12-22', '2024-02-02', 'wadhawan,india', 'addiction and substance abuse', 'mrg_photos/mrg10.jpg', 'translators_signature/signature.png', 'Alia', 2, 'Ajay', 'witness_aadhar_card/aadhaar-card.jpg', '4286237754', 15, ''),
(19, 'Ravi', 'Indian', '1998-10-27', 'Hina', 'Indian', '1995-12-26', '2024-11-02', 'Ahmadabad,india', 'Financial disagreements', 'mrg_photos/mrg4.jpg', 'translators_signature/signature.png', 'Rajbhai', 9, 'Vishalbhai', 'witness_aadhar_card/aadhaar-card.jpg', '3427545742', 16, '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

CREATE TABLE `feedback_master` (
  `feedback_id` int(15) NOT NULL,
  `feedback_message` varchar(150) NOT NULL,
  `feedback_date` varchar(50) NOT NULL,
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_master`
--

INSERT INTO `feedback_master` (`feedback_id`, `feedback_message`, `feedback_date`, `user_id`) VALUES
(3, 'This is veryy nice..........', '2024-08-01', 4),
(5, 'very helpful...', '2024-08-15', 6),
(6, 'very user-interactive.....easy to use for us', '2024-07-13', 7),
(7, 'thank the review for the kind....', '2023-07-24', 9),
(8, 'use personalized....', '2023-04-05', 11),
(9, 'highlight what question....', '2022-05-09', 12),
(10, 'ask relevant.....', '2022-04-03', 13),
(11, 'invite customers to reach...', '2020-12-12', 14),
(12, 'very very nice....', '2020-11-11', 15),
(13, 'thankfor you......', '2021-10-10', 16);

-- --------------------------------------------------------

--
-- Table structure for table `hallbooking`
--

CREATE TABLE `hallbooking` (
  `booking_id` int(15) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `other_mobile_no` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_proof` varchar(15) NOT NULL,
  `id_proof_no` varchar(15) NOT NULL,
  `gst_no` int(20) NOT NULL,
  `ch_id` int(15) NOT NULL,
  `purpose_of_booking` varchar(150) NOT NULL,
  `select_date` varchar(15) NOT NULL,
  `no_of_days` varchar(15) NOT NULL,
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hallbooking`
--

INSERT INTO `hallbooking` (`booking_id`, `first_name`, `middle_name`, `surname`, `address`, `mobile`, `other_mobile_no`, `email`, `id_proof`, `id_proof_no`, `gst_no`, `ch_id`, `purpose_of_booking`, `select_date`, `no_of_days`, `user_id`) VALUES
(4, 'Umang', 'Rameshbhai', 'Parmar', 'Bajarang society-1,\r\nmulchand road,\r\nSurendranagar', '81417 10365', '5486568347', 'umang02@gmail.com', 'Aadhar card', '5222 2525 3232', 5588, 13, 'Birthday party', '2024-08-10', '1', 4),
(5, 'Swati', 'Sureshbhai', 'Kanjariya', 'Sakshi society,\r\nMulchand road,\r\nSurendranagar', '45585 56656', '52252 36336', 'swati67@gmail.com', 'Aadhar card', '4455 6655 1212', 5589, 14, 'Marriage', '2024-08-25', '2', 6),
(6, 'Diya', 'Rameshbhai', 'patel', '8o feet road,snagar', '12354 76433', '78534762456', 'diyu123@gmail.com', 'adharcard', '2383 8655 6635', 5587, 15, 'Besanu', '2/12/2020', '1', 7),
(7, 'Vrushti', 'Prakashbhai', 'Lakum', ' Bajarganpura park,surut', '12345 67898', '3869478789', 'vrushtu12@gmail.com', 'adharcard', '1234 5678 8998', 5588, 16, 'school function', '4/08/2017', '1', 9),
(8, 'Ravi', 'Rambhai', 'gohil', 'Ved park-1,wadhwan', '97584 67356', '4765785777', 'ravi34@gmail.com', 'adharcard', '4765 7656 3466', 5589, 17, 'school Parents meeting', '5/12/2018', '2', 11),
(9, 'Shital', 'Kuldipbhai', 'kanziya', 'ram society,ahmadabad', '97584 67353', '7853476245', 'shitu56@gmail.com', 'adharcard', '4566  3456 2354', 5590, 18, 'college meeting', '11/3/2024', '4', 12),
(10, 'Digvijay', 'Ravibhai', 'Patel', 'Umiya park,60 feet road,bhagupur', '45874 65375', '4765345555', 'digu7@gmail.com', 'adharcard', '1234 5678 8998', 5591, 19, 'Fresher\'s party', '5/31/2019', '1', 13),
(11, 'Janavi', 'Kishanbhai', 'lakum', 'Kukun park,sanand', '34785 47857', '4586578679', 'janu78@gmail.com', 'adharcard', '4765 7656 3466', 5592, 20, 'Nagar palika meeting', '12/25/2002', '2', 14),
(12, 'aditi', 'Krishanbhai', 'kanzariya', 'Vedika society,wadhwan', '87567 86576', '6763545647', 'aditi789@gmail.com', 'adharcard', '6785 5676 4677', 5592, 21, 'birthday party', '3/7/2021', '1', 15),
(13, 'Sejal', 'Karamshibhai', 'lakum', 'Shreeji society,Surat', '43876 84845', '9587689699', 'seju78@gmail.com', 'adharcard', '5876 4587 4685', 5593, 22, 'marriage', '4/5/2022', '3', 16);

-- --------------------------------------------------------

--
-- Table structure for table `mrg_application`
--

CREATE TABLE `mrg_application` (
  `mrg_id` int(15) NOT NULL,
  `groom_name` varchar(15) NOT NULL,
  `groom_fathername` varchar(50) NOT NULL,
  `groom_mothername` varchar(50) NOT NULL,
  `groom_birth_of_date` varchar(10) NOT NULL,
  `groom_address` varchar(150) NOT NULL,
  `groom_religion` varchar(10) NOT NULL,
  `groom_nationality` varchar(50) NOT NULL,
  `groom_marital_status` varchar(15) NOT NULL,
  `groom_mobile` varchar(10) NOT NULL,
  `groom_email` varchar(50) NOT NULL,
  `bride_name` varchar(15) NOT NULL,
  `bride_fathername` varchar(50) NOT NULL,
  `bride_mothername` varchar(50) NOT NULL,
  `bride_birth_of_date` varchar(10) NOT NULL,
  `bride_address` varchar(150) NOT NULL,
  `bride_religion` varchar(10) NOT NULL,
  `bride_nationality` varchar(15) NOT NULL,
  `bride_marital_status` varchar(15) NOT NULL,
  `bride_mobile` varchar(10) NOT NULL,
  `bride_email` varchar(50) NOT NULL,
  `mrg_invitation` varchar(150) NOT NULL,
  `mrg_date` varchar(15) NOT NULL,
  `mrg_place` varchar(50) NOT NULL,
  `mrg_photo` varchar(100) NOT NULL,
  `brahmin_id` int(15) NOT NULL,
  `brahmin_name` varchar(15) NOT NULL,
  `brahmin_aadhar_card` varchar(300) NOT NULL,
  `witness_id` int(15) NOT NULL,
  `witness_name` varchar(15) NOT NULL,
  `mrg_witness_aadhar_card` varchar(300) NOT NULL,
  `witness_mobile` varchar(10) NOT NULL,
  `user_id` int(15) NOT NULL,
  `mrg_remarks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mrg_application`
--

INSERT INTO `mrg_application` (`mrg_id`, `groom_name`, `groom_fathername`, `groom_mothername`, `groom_birth_of_date`, `groom_address`, `groom_religion`, `groom_nationality`, `groom_marital_status`, `groom_mobile`, `groom_email`, `bride_name`, `bride_fathername`, `bride_mothername`, `bride_birth_of_date`, `bride_address`, `bride_religion`, `bride_nationality`, `bride_marital_status`, `bride_mobile`, `bride_email`, `mrg_invitation`, `mrg_date`, `mrg_place`, `mrg_photo`, `brahmin_id`, `brahmin_name`, `brahmin_aadhar_card`, `witness_id`, `witness_name`, `mrg_witness_aadhar_card`, `witness_mobile`, `user_id`, `mrg_remarks`) VALUES
(8, 'krishna', 'vashudev', 'devkiben', '1689-08-13', 'Krishna park-1,Mathura', 'Hindu', 'indian', 'married', '5589912312', 'krishna09@gmail.com', 'rukmani', 'Riteshbhai', 'Meeraben', '2024-12-31', 'Veer township,Surat', 'hindu', 'indian', 'married', '7046620630', 'ruku88@gmail.com', 'mrg_invitation/card1.jpg', '2024-12-31', 'Dwarika', 'mrg_photo/mrg3.jpg', 1, 'Kashyap rusi', 'brahmin_aadhar_card/aadhaar-card.jpg', 1, 'Devki,Vashudev', 'mrg_witness_aadhar_card/aadhaar-card.jpg', '5652255855', 4, ''),
(10, 'shiv', 'shankarbhai', 'reetaben', '1976-08-14', 'Ansuya society,Surat', 'Hindu', 'Indian', 'Married', '4554569969', 'shiv01@gmail.com', 'Parvati', 'Rameshbhai', 'Geetaben', '1977-08-12', 'Reet society-2,Kathwada', 'Hindu', 'Indian', 'Married', '2552545545', 'parvati09@gmail.com', 'mrg_invitation/card2.jpg', '1998-04-18', 'Himalaya,India', 'mrg_photo/mrg6.jpg', 2, 'GautamDev', 'brahmin_aadhar_card/aadhaar-card.jpg', 1, 'AgniDev', 'mrg_witness_aadhar_card/aadhaar-card.jpg', '8978936336', 6, ''),
(11, 'Ram', 'Dasharathbhai', 'Kaushalyaben', '1995-08-01', 'Ayodhya park,Bhavnagar', 'Hindu', 'indian', 'Married', '8849962095', 'ram22@gmail.com', 'Sita', 'Janakbhai', 'Sunitaben', '1995-06-13', 'Mithila,India', 'Hindu', 'Indian', 'Married', '5655696696', 'sita32@gmail.com', 'mrg_invitation/card3.jpg', '2020-02-14', 'Ayodhya,India', 'mrg_photo/mrg7.jpg', 6, 'KashyapDev', 'brahmin_aadhar_card/aadhaar-card.jpg', 3, 'Viral Vyas', 'mrg_witness_aadhar_card/aadhaar-card.jpg', '2022089989', 7, ''),
(12, 'Bhargav ', 'Jagadishbhai', 'Vaishaliben', '2002-12-04', 'Hemant society,bhavanagar', 'hindu', 'indian', 'Married', '6768787645', 'bhagu23@gmail', 'Ramila', 'Praheladbhai', 'Bharatiben', '2000-11-02', 'JK society,ahmedabad', 'hindu', 'indian', 'Married', '6786787687', 'ramu45@gmail.com', 'mrg_invitation/card4.jpg', '2024-12-04', 'Surat,India', 'mrg_photo/mrg8.jpg', 1, 'Valabhai', 'brahmin_aadhar_card/aadhaar-card.jpg', 1, 'shankarbhai', 'mrg_witness_aadhar_card/aadhaar-card.jpg', '8987866745', 9, ''),
(13, 'Vira ', 'Karamshibhai', 'Reemaben', '0001-10-11', 'Kumkum society,ratanpur', 'hindu', 'indian', 'Married', '6768787645', 'veera23@gmail', 'Radha ', 'Praheladbhai', 'Jayaben', '0002-02-23', 'Meera society,ahmedabad', 'hindu', 'indian', 'Married', '6786787687', 'radha78@gmail.com', 'mrg_invitation/card1.jpg', '2022-01-02', 'Ahmedabad,India', 'mrg_photo/mrg1.jpg', 1, 'Varabhai', 'brahmin_aadhar_card/aadhaar-card.jpg', 1, 'Seemaben', 'mrg_witness_aadhar_card/aadhaar-card.jpg', '8987866745', 11, ''),
(14, 'Kuldip ', 'Jagadishbhai', 'Nitaben', '1995-12-30', 'Mitali township,Ahemdabad', 'hindu', 'indian', 'Married', '4676878764', 'ks4545@gmail', 'Shital', 'Amanbhai', 'Kiyaben', '1998-02-03', 'vihatnagar,Bhavnagar', 'hindu', 'indian', 'Married', '0798676698', 'sachin87@gmail.com', 'mrg_invitation/card2.jpg', '2018-07-31', 'Rajkot,India', 'mrg_photo/mrg2.jpg', 3, 'Mahajarbhai', 'brahmin_aadhar_card/aadhaar-card.jpg', 2, 'Hansaben', 'mrg_witness_aadhar_card/aadhaar-card.jpg', '7864566354', 12, ''),
(15, 'Kush', 'Yashbhai', 'Mitaben', '1999-03-21', 'Nimavat park-1,surat', 'hindu', 'indian', 'Married', '8676656543', 'kanu9@gmail.com', 'Radhika', 'Lakshamanbhai', 'Laxmiben', '1998-05-03', 'Dev Society-2,Bhavnagar', 'hindu', 'indian', 'Married', '4876586356', 'radhu45@gmail.com', 'mrg_invitation/card3.jpg', '2017-02-07', 'Rajkot,India', 'mrg_photo/mrg9.jpg', 3, 'Rambhai', 'brahmin_aadhar_card/aadhaar-card.jpg', 6, 'virabhai', 'mrg_witness_aadhar_card/aadhaar-card.jpg', '7865433754', 13, ''),
(16, 'Ravi', 'Jaybhai', 'Ritaben', '2003-02-04', 'Kirtan society-1,botad', 'hindu', 'indian', 'Married', '7636456676', 'ravi89@gmail.com', 'Divya ', 'Kanjibhai', 'Kiranben', '2001-02-09', 'Arihant park,wadhawan', 'hindu', 'indian', 'Married', '0123456789', 'divya45@gmail.com', 'mrg_invitation/card4.jpg', '2019-12-22', 'Wadhwan,India', 'mrg_photo/mrg10.jpg', 2, 'Jaybhai', 'brahmin_aadhar_card/aadhaar-card.jpg', 4, 'Rajbhai', 'mrg_witness_aadhar_card/aadhaar-card.jpg', '8945765345', 14, ''),
(17, 'Satish', 'Bharatbhai', 'Dakshaben', '2006-02-28', 'Shreeji park-2,limbadi', 'hindu', 'indian', 'Married', '9429748725', 'satish34@gmail.com', 'Gauri', 'Kanubhai', 'Ramaben', '2005-09-09', 'Umiya township,surat', 'hindu', 'indian', 'Married', '9873456354', 'gudi56@gmail.com', 'mrg_invitation/card1.jpg', '2024-02-09', 'Dahod,India', 'mrg_photo/mrg4.jpg', 5, 'Lalabhai', 'brahmin_aadhar_card/aadhaar-card.jpg', 4, 'Chamanbhai', 'mrg_witness_aadhar_card/aadhaar-card.jpg', '3433434443', 15, ''),
(18, 'Pratik', 'Ashavinbhai', 'Chhayaben', '2001-02-02', 'JK Society,ahamdabad', 'hindu', 'indian', 'Married', '6677766777', 'paku23@gmail.com', 'Raksha', 'Krishanbhai', 'Rekhaben', '2001-04-08', 'Mehta society,Karol', 'hindu', 'indian', 'Married', '3498075844', 'rakshu11@gmail.com', 'mrg_invitation/card2.jpg', '2024-01-31', 'Gandhinagar,India', 'mrg_photo/mrg5.jpg', 7, 'Payalben', 'brahmin_aadhar_card/aadhaar-card.jpg', 3, 'Gagarambhai', 'mrg_witness_aadhar_card/aadhaar-card.jpg', '7834654234', 16, '');

-- --------------------------------------------------------

--
-- Table structure for table `service_master`
--

CREATE TABLE `service_master` (
  `s_id` int(15) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_description` varchar(1000) NOT NULL,
  `s_icon` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_master`
--

INSERT INTO `service_master` (`s_id`, `s_name`, `s_description`, `s_icon`) VALUES
(10, 'Birth Application', 'Fill out the application form\r\nOnce registered, log in and locate the application form for a birth certificate. The form will requirer details such as the date of birth, place of birth, parent-names, and hospital details. Ensure you enter all information accurately to avoid any discrepancies.\r\n', 's_icon/birth_icon.png'),
(11, 'Death Application', ' Citizen can apply for the certificate at their particular Municipality/Panchayat Office by providing the Doctors Certificate and Panchanama, given by the recognized authorities like Police, Revenue Officer, etc. The service is for registration of deaths that happened less than 21 days.\r\n', 's_icon/death_icon.png'),
(12, 'Marriage Application', ' Conditions include no living spouse, mental soundness, and legal age. Required documents include affidavits, photos, and proof of birth. Procedure includes notice, publication, objection period, declaration, solemnization. Advantages include cost-effectiveness and freedom in marriage format.\r\n', 's_icon/mrg_icon.png'),
(13, 'Divorce Application', ' Filing of a Petition –the first step of the divorce procedure in India in case of mutual Divorce is a joint petition for the termination of marriage may be submitted before the family court by both the husband and wife on the grounds that they have been residing separately for a time span of one year or more.\r\n', 's_icon/div_icon.png'),
(14, 'Booking of Community hall', ' A community centre, community center, or community hall is a public location where members of a community gather for group activities, social support, public information, and other purposes. They may be open for the whole community or for a specialized subgroup within the greater community.\r\n', 's_icon/ch_icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `user_id` int(15) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_address` varchar(150) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_pincode` varchar(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `user_name`, `user_address`, `user_city`, `user_pincode`, `user_email`, `user_password`, `user_mobile`) VALUES
(4, 'Kush', 'Radheshyam society,80-feet road,Surat', 'Surat', '363030', 'kush123@gmail.com', 'kush@123', '7046620630'),
(6, 'Kavya', 'Raykanagar,80 feet road,Surendranagar', 'Surendranagar', '363030', 'diya123@gmail.com', 'kavya@123', '8849962095'),
(7, 'Krupali', 'Bajarang society-1,Mulchand road,WadhWan,Surendranagar', 'Surendranagar', '363030', 'p123@gmail.com', 'krupu@123', '7862017227'),
(9, 'Umang', 'Mulchand road,Surendranagar', 'Surendra Nagar', '363001', 'umang13@gmail.com', 'umang@123', '8849962095'),
(11, 'Om', '60 feet road,Alkapurichok,Rajkot', 'Rajkot', '330324', 'om23@gmail.com', 'om@123', '9427088520'),
(12, 'Shruti', 'Somnath park,wadhawan', 'wadhawan', '363030', 'shruti123@gmail.com', 'shruti@123', '3677456464'),
(13, 'Manu', 'Ram park,ahamdabad', 'ahmadabad', '363031', 'manu90@gmail.com', 'manu@123', '4643752615'),
(14, 'Raksha', 'Shiv park,near Jalaram mandir ,sanand', 'sanand', '363434', 'rakshu123@gmail.com', 'raksha@123', '3677464642'),
(15, 'Viral', 'Shaktinagar,mehsana', 'rajkot', '363031', 'viru34@gmail.com', 'viral@123', '4643752615'),
(16, 'Sumita', 'Kishna park,surat', 'Surat', '363434', 'sumita65@gmail.com', 'sumita@123', '1234686888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_master`
--
ALTER TABLE `activity_master`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `birth_application`
--
ALTER TABLE `birth_application`
  ADD PRIMARY KEY (`birth_id`);

--
-- Indexes for table `community_hall`
--
ALTER TABLE `community_hall`
  ADD PRIMARY KEY (`ch_id`);

--
-- Indexes for table `corporater`
--
ALTER TABLE `corporater`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `death_application`
--
ALTER TABLE `death_application`
  ADD PRIMARY KEY (`death_id`);

--
-- Indexes for table `divorce_application`
--
ALTER TABLE `divorce_application`
  ADD PRIMARY KEY (`div_id`);

--
-- Indexes for table `feedback_master`
--
ALTER TABLE `feedback_master`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `hallbooking`
--
ALTER TABLE `hallbooking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `mrg_application`
--
ALTER TABLE `mrg_application`
  ADD PRIMARY KEY (`mrg_id`);

--
-- Indexes for table `service_master`
--
ALTER TABLE `service_master`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_master`
--
ALTER TABLE `activity_master`
  MODIFY `ac_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `birth_application`
--
ALTER TABLE `birth_application`
  MODIFY `birth_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `community_hall`
--
ALTER TABLE `community_hall`
  MODIFY `ch_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `corporater`
--
ALTER TABLE `corporater`
  MODIFY `co_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `death_application`
--
ALTER TABLE `death_application`
  MODIFY `death_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `divorce_application`
--
ALTER TABLE `divorce_application`
  MODIFY `div_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback_master`
--
ALTER TABLE `feedback_master`
  MODIFY `feedback_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hallbooking`
--
ALTER TABLE `hallbooking`
  MODIFY `booking_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mrg_application`
--
ALTER TABLE `mrg_application`
  MODIFY `mrg_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `service_master`
--
ALTER TABLE `service_master`
  MODIFY `s_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
