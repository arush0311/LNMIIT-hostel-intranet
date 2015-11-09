-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2015 at 10:44 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lusip`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE IF NOT EXISTS `login_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depart_id` int(3) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `admin` int(1) DEFAULT NULL,
  `designation` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=154 ;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `depart_id`, `username`, `password`, `name`, `admin`, `designation`) VALUES
(1, 0, '14MCS001', '14MCS001', 'JAVED IMRAN', 0, 'student'),
(2, 0, '14MCS002', '14MCS002', 'MS TANISHA JHALANI', 0, 'student'),
(3, 0, '14MEC016', '14MEC016', 'TANISHA SINGH', 0, 'student'),
(4, 0, '14PCS001', '14PCS001', 'ARPAN GUPTA', 0, 'student'),
(5, 0, '14PCS002', '14PCS002', 'MEENAKSHI GUPTA', 0, 'student'),
(6, 0, '14UCC044', '14UCC044', 'YASH NAYANKUMAR SINOJIA', 0, 'student'),
(7, 0, '14UCC045', '14UCC045', 'SHUBHAM JOSHI', 0, 'student'),
(8, 0, '14UCS151', '14UCS151', 'AYUSHI GUPTA', 0, 'student'),
(9, 0, '14UCS152', '14UCS152', 'PARTH JITENDER JAVIYA', 0, 'student'),
(10, 0, '14UCS153', '14UCS153', 'SHRUTI SHARMA', 0, 'student'),
(11, 0, '14UCS154', '14UCS154', 'VASUNDHARA SHARMA', 0, 'student'),
(12, 0, '14UEC001', '14UEC001', 'AASTHA BHARDWAJ', 0, 'student'),
(13, 0, '14UEC002', '14UEC002', 'AAYUSH AGARWAL', 0, 'student'),
(14, 0, '14UEC004', '14UEC004', 'ABHISHEK SUKHWAL', 0, 'student'),
(15, 0, '14UEC005', '14UEC005', 'ADITYA VIKRAM MITRA', 0, 'student'),
(16, 0, '14UEC006', '14UEC006', 'AKSHANSH BINDAL', 0, 'student'),
(17, 0, '14UMM006', '14UMM006', 'DEEPENDRA SINGH SHEKHAWAT', 0, 'student'),
(18, 0, '14UMM007', '14UMM007', 'HIMANSHU SHARMA', 0, 'student'),
(19, 0, '14UMM008', '14UMM008', 'HIMANSHU VARSHNEY', 0, 'student'),
(20, 0, 'Y11UC251', 'Y11UC251', 'VIDHAN JAMAR', 0, 'student'),
(21, 0, 'Y11UC252', 'Y11UC252', 'VIDUSHI KUMAR', 0, 'student'),
(22, 0, 'Y11UC253', 'Y11UC253', 'VIDUSHI MATHUR', 0, 'student'),
(23, 0, 'Y11UC254', 'Y11UC254', 'VIKAS AGGARWAL', 0, 'student'),
(24, 0, 'Y11UC255', 'Y11UC255', 'VIKAS TINKAR', 0, 'student'),
(25, 0, 'Y11UC256', 'Y11UC256', 'VIKRANT GARG', 0, 'student'),
(26, 0, 'Y11UC257', 'Y11UC257', 'VINAY SUTHAR', 0, 'student'),
(27, 0, 'Y11UC259', 'Y11UC259', 'YASH KARAN SINGH', 0, 'student'),
(28, 0, 'Y11UC260', 'Y11UC260', 'YASHDEEP', 0, 'student'),
(29, 0, 'Y11UC261', 'Y11UC261', 'YUDHVEER SINGH', 0, 'student'),
(30, 0, 'Y12PG017', 'Y12PG017', 'AKANKSHA SHARMA', 0, 'student'),
(31, 0, 'Y12PG018', 'Y12PG018', 'ARPAN GUPTA', 0, 'student'),
(32, 0, 'Y12PG019', 'Y12PG019', 'ASHUTOSH KUNTAL', 0, 'student'),
(33, 0, 'Y12PG020', 'Y12PG020', 'AVANI SHARMA', 0, 'student'),
(34, 0, 'Y12PG021', 'Y12PG021', 'BHUPENDRA SHARMA', 0, 'student'),
(35, 0, 'Y12PG922', 'Y12PG922', 'ACHINT CHUGH', 0, 'student'),
(36, 0, 'Y12PG923', 'Y12PG923', 'VIKAS BAJPAI', 0, 'student'),
(37, 0, 'Y12UC001', 'Y12UC001', 'AAKUN GARG', 0, 'student'),
(38, 0, 'Y12UC002', 'Y12UC002', 'AAYUSH KUMAR', 0, 'student'),
(39, 0, 'Y12UC003', 'Y12UC003', 'AAYUSH SARVA', 0, 'student'),
(40, 0, 'Y12UC004', 'Y12UC004', 'AAYUSHMAN SHARMA', 0, 'student'),
(41, 0, 'Y12UC005', 'Y12UC005', 'ABHILAKSHYA BHATEJA', 0, 'student'),
(42, 0, 'Y12UC006', 'Y12UC006', 'ABHISHEK BANTHIA', 0, 'student'),
(43, 0, 'Y12UC007', 'Y12UC007', 'ABHISHEK BHATT', 0, 'student'),
(44, 0, 'Y12UC008', 'Y12UC008', 'ABHISHEK MUNDRA', 0, 'student'),
(45, 0, 'Y12UC010', 'Y12UC010', 'ADIL SIDDIQUI', 0, 'student'),
(46, 0, 'Y12UC012', 'Y12UC012', 'ADITI GUPTA', 0, 'student'),
(47, 0, 'Y12UC291', 'Y12UC291', 'UTKARSH DIXIT', 0, 'student'),
(48, 0, 'Y12UC292', 'Y12UC292', 'V NARAYANAN', 0, 'student'),
(49, 0, 'Y12UC293', 'Y12UC293', 'VARTIKA SHARMA', 0, 'student'),
(50, 0, 'Y12UC294', 'Y12UC294', 'VARUN NAIR', 0, 'student'),
(51, 0, 'Y12UC295', 'Y12UC295', 'VIBHORE', 0, 'student'),
(52, 0, 'Y13UC232', 'Y13UC232', 'RUCHI GUPTA', 0, 'student'),
(53, 0, 'Y13UC233', 'Y13UC233', 'RUCHIT MATHUR', 0, 'student'),
(54, 0, 'Y13UC234', 'Y13UC234', 'SACHIN AGARWAL', 0, 'student'),
(55, 0, 'Y13UC235', 'Y13UC235', 'SAGAR BOTHRA', 0, 'student'),
(56, 0, 'Y13UC236', 'Y13UC236', 'SAGAR SHARMA', 0, 'student'),
(57, 0, 'Y13UC237', 'Y13UC237', 'SAGAR CHAND AGARWAL', 0, 'student'),
(58, 0, 'Y13UC238', 'Y13UC238', 'SAHIL CHAUHAN', 0, 'student'),
(59, 0, 'Y13UC239', 'Y13UC239', 'SAHIL KALYAN', 0, 'student'),
(60, 0, 'Y13UC240', 'Y13UC240', 'SAKSHI RAWAL', 0, 'student'),
(61, 0, 'Y13UC241', 'Y13UC241', 'SAKSHI GOYAL', 0, 'student'),
(62, 0, 'Y13UC242', 'Y13UC242', 'SALONI GOYAL', 0, 'student'),
(63, 0, 'Y13UC243', 'Y13UC243', 'SANCHITA GUPTA', 0, 'student'),
(64, 0, 'Y13UC244', 'Y13UC244', 'SANDEEP SOGANI', 0, 'student'),
(65, 0, 'Y13UC245', 'Y13UC245', 'SANJANA MEHROTRA', 0, 'student'),
(66, 0, 'Y13UC246', 'Y13UC246', 'SANJITI BHARGAVA', 0, 'student'),
(67, 0, 'Y13UC247', 'Y13UC247', 'SANKALP PORWAL', 0, 'student'),
(68, 0, 'Y13UC248', 'Y13UC248', 'SATYAM SINGH', 0, 'student'),
(69, 0, 'Y13UC249', 'Y13UC249', 'SAUMITTRA SAXENA', 0, 'student'),
(70, 0, 'Y13UC250', 'Y13UC250', 'SAUMYA SHREE', 0, 'student'),
(71, 0, 'Y13UC251', 'Y13UC251', 'SAURABH GOYAL', 0, 'student'),
(72, 0, 'Y13UC252', 'Y13UC252', 'SAURABH KAYAL', 0, 'student'),
(73, 0, 'Y13UC253', 'Y13UC253', 'SAURABH SONI', 0, 'student'),
(74, 0, 'Y13UC254', 'Y13UC254', 'SAURABH KUMAR NANDWANA', 0, 'student'),
(75, 0, 'Y13UC255', 'Y13UC255', 'SAURABH PATNI', 0, 'student'),
(76, 0, 'Y13UC256', 'Y13UC256', 'SAURABH SINGH SISODIYA', 0, 'student'),
(77, 0, 'Y13UC257', 'Y13UC257', 'SHAIK AMEER SOHAIL', 0, 'student'),
(78, 0, 'Y13UC258', 'Y13UC258', 'SHAMIM ALI', 0, 'student'),
(79, 0, 'Y13UC259', 'Y13UC259', 'SHANTANU SINGH', 0, 'student'),
(80, 0, 'Y13UC260', 'Y13UC260', 'SHASHANK SHARMA', 0, 'student'),
(81, 0, 'Y13UC261', 'Y13UC261', 'SHASHANK PRIYAM JHA', 0, 'student'),
(82, 0, 'Y13UC262', 'Y13UC262', 'SHASHANK SHEKHAR SINGH', 0, 'student'),
(83, 0, 'Y13UC263', 'Y13UC263', 'SHIBLI BAIG', 0, 'student'),
(84, 104, 'Kamta', '1234', 'Kamta', 1, 'teacher'),
(85, 105, 'PAVAN', '1234', 'PAVAN', 1, 'teacher'),
(86, 119, 'Abhishek', '1234', 'Abhishek', 1, 'teacher'),
(87, 124, 'Sanjeev', '1234', 'Sanjeev', 1, 'teacher'),
(88, 132, 'MAHESH', '1234', 'MAHESH', 1, 'teacher'),
(89, 133, 'Poonam', '1234', 'Poonam', 1, 'teacher'),
(90, 138, 'Rasmita', '1234', 'Rasmita', 1, 'teacher'),
(91, 140, 'Vibhor', '1234', 'Vibhor', 1, 'teacher'),
(92, 141, 'Manish', '1234', 'Manish', 1, 'teacher'),
(93, 142, 'Ratnadip', '1234', 'Ratnadip', 1, 'teacher'),
(94, 144, 'Kusum', '1234', 'Kusum', 1, 'teacher'),
(95, 145, 'Sunil', '1234', 'Sunil', 1, 'teacher'),
(96, 146, 'Prabin', '1234', 'Prabin', 1, 'teacher'),
(97, 147, 'Manoj', '1234', 'Manoj', 1, 'teacher'),
(98, 149, 'Divyang', '1234', 'Divyang', 1, 'teacher'),
(99, 150, 'Santosh', '1234', 'Santosh', 1, 'teacher'),
(100, 151, 'Bharavi', '1234', 'Bharavi', 1, 'teacher'),
(101, 166, 'Navneet', '1234', 'Navneet', 1, 'teacher'),
(102, 167, 'Pomita', '1234', 'Pomita', 1, 'teacher'),
(103, 177, 'Praveen', '1234', 'Praveen', 1, 'teacher'),
(104, 178, 'Rajni', '1234', 'Rajni', 1, 'teacher'),
(105, 179, 'Shivam', '1234', 'Shivam', 1, 'teacher'),
(106, 180, 'Phool', '1234', 'Phool', 1, 'teacher'),
(107, 186, 'Rinky', '1234', 'Rinky', 1, 'teacher'),
(108, 189, 'Smrity', '1234', 'Smrity', 1, 'teacher'),
(109, 194, 'Vinod', '1234', 'Vinod', 1, 'teacher'),
(110, 195, 'Akshay', '1234', 'Akshay', 1, 'teacher'),
(111, 196, 'Dheerendra', '1234', 'Dheerendra', 1, 'teacher'),
(112, 199, 'Anupamiitk', '1234', 'Anupamiitk', 1, 'teacher'),
(113, 41, 'Subhayan', '1234', 'Subhayan', 1, 'teacher'),
(114, 43, 'Tanveer', '1234', 'Tanveer', 1, 'teacher'),
(115, 44, 'MKS', '1234', 'MKS', 1, 'teacher'),
(116, 46, 'Tomar', '1234', 'Tomar', 1, 'teacher'),
(117, 47, 'Dharmendra', '1234', 'Dharmendra', 1, 'teacher'),
(118, 49, 'VikasG', '1234', 'VikasG', 1, 'teacher'),
(119, 50, 'Vikas', '1234', 'Vikas', 1, 'teacher'),
(120, 51, 'Akhlaq', '1234', 'Akhlaq', 1, 'teacher'),
(121, 52, 'Manju', '1234', 'Manju', 1, 'teacher'),
(122, 53, 'Sandeep', '1234', 'Prof.Sandeep Saini', 1, 'teacher'),
(123, 54, 'Rajbir', '1234', 'Rajbir', 1, 'teacher'),
(124, 55, 'Ajit', '1234', 'Ajit', 1, 'teacher'),
(125, 56, 'Preety', '1234', 'Preety', 1, 'teacher'),
(126, 57, 'Narendra', '1234', 'Narendra', 1, 'teacher'),
(127, 58, 'Somnath', '1234', 'Somnath', 1, 'teacher'),
(128, 59, 'Anjishnu', '1234', 'Anjishnu', 1, 'teacher'),
(129, 65, 'Dharm', '1234', 'Dharm', 1, 'teacher'),
(130, 70, 'Ravi', '1234', 'Ravi', 1, 'teacher'),
(131, 73, 'Dinesh', '1234', 'Dinesh', 1, 'teacher'),
(132, 74, 'Rajbala', '1234', 'Rajbala', 1, 'teacher'),
(133, 75, 'Sonam', '1234', 'Sonam', 1, 'teacher'),
(134, 76, 'Anupam', '1234', 'Anupam', 1, 'teacher'),
(135, 77, 'Ranjan', '1234', 'Ranjan', 1, 'teacher'),
(136, 78, 'Mukesh', '1234', 'Mukesh', 1, 'teacher'),
(137, 82, 'Debnath', '1234', 'Debnath', 1, 'teacher'),
(138, 83, 'Amit', '1234', 'Amit', 1, 'teacher'),
(139, 84, 'APS', '1234', 'APS', 1, 'teacher'),
(140, 85, 'Laxmi', '1234', 'Laxmi', 1, 'teacher'),
(141, 86, 'Usha', '1234', 'Usha', 1, 'teacher'),
(142, 87, 'Subrat', '1234', 'Subrat k das', 1, 'teacher'),
(143, 91, 'MukeshK', '1234', 'MukeshK', 1, 'teacher'),
(144, 92, 'Shanker', '1234', 'Shanker', 1, 'teacher'),
(145, 93, 'Purnendu', '1234', 'Purnendu', 1, 'teacher'),
(146, 95, 'KKKhatri', '1234', 'KKKhatri', 1, 'teacher'),
(147, 96, 'Surinder', '1234', 'Surinder', 1, 'teacher'),
(148, 98, 'Kapil', '1234', 'Kapil', 1, 'teacher'),
(149, 0, 'rajeev', 'admin', 'rajeev saxena', 2, 'registrar'),
(150, 0, '14ucs024', 'admin', 'arush goyal', 4, 'dean'),
(151, 0, 'y12uc213', 'admin', 'ronak modi', 3, 'warden'),
(152, 0, 'student', 'student', 'student', 0, 'student'),
(153, 0, 'warden', 'warden', 'warden', 3, 'warden');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `document_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `description`, `user`, `target`, `date`, `document_path`) VALUES
(1, 'B. Tech. Admissions 2015', 'B. Tech Admissions 2015 is now open. Click here to apply and know more about B. Tech at LNMIIT.', 'Prof.Sandeep Saini', 'Everyone', '2015-06-28 23:32:34', NULL),
(2, 'Vacancy for Research Associate/Assistant in HSS', 'Advertisement for Research Associate/Assistant in ICSSR Funded Research Project', 'Prof.Sandeep Saini', 'Everyone', '2015-06-29 01:16:20', NULL),
(3, 'PG Admissions 2015', 'Online Application for admission to PG Programs is now open.', 'Prof.Sandeep Saini', 'Everyone', '2015-06-28 23:32:25', NULL),
(4, 'Undergraduate Training Programme on Differential Equations: May 18 – June 06, 2015', 'Undergraduate Training Programme on Differential Equations under the auspices of NPDE-TCA IIT Bombay (funded by the DST) during May 18 &ndash; June 06, 2015.', 'Prof.Sandeep Saini', 'Everyone', '2015-06-28 23:32:22', NULL),
(5, 'LNMIIT students Runners-up in Tata Crucible Campus Quiz ''15', 'CONGRATULATIONS!!!!!!<br>ANIVESH BARATAM & KUSHAL SHAH', 'Prof.Sandeep Saini', 'Everyone', '2015-06-29 00:55:34', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
