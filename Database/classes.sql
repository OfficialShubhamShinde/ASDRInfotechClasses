-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 01:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classes`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'php'),
(2, 'java'),
(3, 'javascript'),
(4, 'python'),
(5, 'android'),
(6, 'jQuery'),
(8, 'IR'),
(9, 'hadoop'),
(10, 'hadoop'),
(11, 'comedy nights'),
(12, 'css'),
(13, 'spring');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contactno`, `msg`, `datetime`) VALUES
(1, 'Shubham Shinde', 'shubhamshinde9530@gmail.com', '7755445566', 'message', '2023-08-08 05:26:45'),
(2, 'Shubham Shinde', 'shubhamshinde9530@gmail.com', '7755445566', 'msg', '2023-08-08 06:04:46'),
(3, 'Shubham Shinde', 'shubhamshinde9530@gmail.com', '7755445566', 'msg', '2023-08-08 06:07:15'),
(4, 'Shubham Ashok Shinde', 'shubhamshinde9530@gmail.com', '1122', 'na', '2023-08-08 06:09:54'),
(5, 'Shubham Ashok Shinde', 'shubhamshinde9530@gmail.com', '7755445566', 'msg', '2023-08-10 06:29:16'),
(6, 'Shubham Ashok Shinde', 'shubhamshinde9530@gmail.com', '7755445566', 'msg', '2023-08-10 06:42:40'),
(7, 'Shubham Ashok Shinde', 'shubhamshinde9530@gmail.com', '7755445566', 'msg', '2023-08-10 06:43:27'),
(8, 'Shubham Ashok Shinde', 'shubhamshinde9530@gmail.com', '7774882080', 'n', '2023-08-23 04:04:41'),
(9, 'Shubham Ashok Shinde', 'shubhamshinde9530@gmail.com', '7755445566', 'na', '2023-08-23 04:10:10'),
(10, 'Shubham Shinde', 'shubhamshinde9530@gmail.com', '7755445566', 'na', '2023-08-23 06:47:21'),
(11, 'Shubham Ashok Shinde', 'shubhamshinde9530@gmail.com', '7755445566', 'na', '2023-08-23 06:49:36'),
(12, 'Shubham Ashok Shinde', 'shubhamshinde9530@gmail.com', '7755445566', 'n', '2023-08-23 07:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_master`
--

CREATE TABLE `coupon_master` (
  `coupon_id` int(50) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_value` int(50) NOT NULL,
  `coupon_type` varchar(20) NOT NULL,
  `coupon_quantity` int(50) NOT NULL,
  `coupon_addedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon_master`
--

INSERT INTO `coupon_master` (`coupon_id`, `coupon_code`, `coupon_value`, `coupon_type`, `coupon_quantity`, `coupon_addedon`) VALUES
(1, 'flat50', 50, 'Percentage', 2, '2023-09-06 10:46:55'),
(2, 'FLAT60', 60, 'Rupee', 2, '2023-08-29 09:23:32'),
(7, 'FLAT70', 20, 'Percentage', 3, '2023-09-06 10:03:34'),
(10, 'flat80', 80, 'Percentage', 5, '2023-09-06 10:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_duration` varchar(20) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `starttime` varchar(50) DEFAULT NULL,
  `endtime` varchar(50) NOT NULL,
  `cource_amount` int(10) NOT NULL DEFAULT 0,
  `syllabus_type` varchar(30) NOT NULL,
  `course_description` text NOT NULL,
  `course_img` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_duration`, `startdate`, `enddate`, `starttime`, `endtime`, `cource_amount`, `syllabus_type`, `course_description`, `course_img`, `status`) VALUES
(17, 'Artificial Intelligence', '90 Days', '2023-08-10', '2023-08-14', '18:01', '19:02', 3049, 'Machine Learning', 'artificial intelligence (AI), the ability of a digital computer or computer-controlled robot to perform tasks commonly associated with intelligent beings', 'courseImges/.ai.png', 'active'),
(18, 'Business-intelligence', '60 Days', '2023-08-23', '2023-08-31', '20:00', '22:00', 4999, 'Other', 'Business intelligence comprises the strategies and technologies used by enterprises for the data analysis and management of business information.', 'courseImges/.bi.png', 'active'),
(19, 'Machine Learning', '120 Days', '2023-09-06', '2023-08-31', '18:08', '18:08', 5999, 'Other', 'Machine learning is a branch of artificial intelligence (AI) and computer science which focuses on the use of data and algorithms to imitate the way that humans learn, gradually improving its accuracy.', 'courseImges/.ml.png', 'active'),
(20, 'ABAP Developement', '60 Days', '2023-08-16', '2023-08-30', '15:10', '18:09', 3999, 'ERP Foundation', 'ABAP is a programming language that simplifies the development of business applications within SAP landscapes. And as the necessary link within an organization, the ABAP developer is the one to connect business and software development.', 'courseImges/.sap.png', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(20) NOT NULL,
  `etitle` varchar(50) NOT NULL,
  `edate` date NOT NULL,
  `eday` varchar(20) NOT NULL,
  `emode` varchar(10) NOT NULL,
  `estarttime` time(5) NOT NULL,
  `eendtime` time(5) NOT NULL,
  `elink` varchar(100) NOT NULL,
  `edescription` text NOT NULL,
  `addedon` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `etitle`, `edate`, `eday`, `emode`, `estarttime`, `eendtime`, `elink`, `edescription`, `addedon`) VALUES
(1, 'ERP(SAP®) Career webinar', '2023-07-05', 'Sunday', 'Offline', '12:00:00.00000', '00:00:00.00000', 'https://www.youtube.com/@asdrinfotech', 'We invite you to listen to live career guidance training. SAP Certified Industry Expert will give insights of ERP careers.', '2023-07-09 12:54:14'),
(2, 'IT Fast Track Program Webinar', '2023-07-19', 'Monday', 'Online', '12:47:00.00000', '00:00:00.00000', 'https://www.youtube.com/@asdrinfotech', 'Learn about our IT Fast track program and internship program.', '2023-07-10 06:17:47'),
(3, 'What is Business Analysis? Webinar', '2023-07-10', 'Monday', 'Online', '14:25:53.00000', '17:25:53.00000', 'https://www.youtube.com/@asdrinfotech', 'We invite you to join the free seminar on Business Analysis\r\n\r\nGet a program overview and job opportunities as a business analyst.  Get a complimentary 1-week training.', '2023-07-11 04:57:14'),
(4, 'Software Testing Webinar', '2023-07-10', 'Monday', 'Online', '14:25:53.00000', '17:25:53.00000', 'https://www.youtube.com/@asdrinfotech', 'We invite you to join the free seminar on Software Testing\r\n\r\nGet an overview of the manual and automation testing and enroll for a 1-week free.', '2023-07-11 04:58:04'),
(5, 'Project Management Introduction', '2023-07-10', 'Monday', 'Online', '14:25:53.00000', '17:25:53.00000', 'https://www.youtube.com/@asdrinfotech', 'This is a 1-hour course to learn the basics of project management. PMP Certified instructor will provide the insights.', '2023-07-11 04:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `faq_title` varchar(255) NOT NULL,
  `faq_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `faq_title`, `faq_description`) VALUES
(1, 'what is your website is about ?', 'this website is a free TV shows ratting website'),
(2, 'How to rate the videos ?', 'Go to view videos section and select your favourite TV show and give ratting there'),
(3, 'how to log in ?', 'goto bingeflix.com/login and from there you can login');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img`) VALUES
('uploadimg/4.png'),
('uploadimg/4.png'),
('uploadimg/3logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `internship_program`
--

CREATE TABLE `internship_program` (
  `internid` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `resume` varchar(100) NOT NULL,
  `coverlatter` varchar(100) NOT NULL,
  `applieddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internship_program`
--

INSERT INTO `internship_program` (`internid`, `name`, `email`, `contactno`, `position`, `message`, `resume`, `coverlatter`, `applieddate`) VALUES
(1, 'Shubham Shinde', 'shindeshubham2028@gmail.com', '7774882080', 'UI UX Designer', 'na', 'resume', 'coverlatter', '2023-09-04 06:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `newslatter`
--

CREATE TABLE `newslatter` (
  `id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newslatter`
--

INSERT INTO `newslatter` (`id`, `email`, `datetime`) VALUES
(1, 'shubhamshinde9530@gmail.com', '2023-08-08 09:16:00'),
(2, 'shubhamshinde9530@gmail.com', '2023-08-08 09:17:22'),
(3, 'shubhamshinde9530@gmail.com', '2023-08-08 09:19:08'),
(4, 'shubhamshinde9530@gmail.com', '2023-08-10 06:06:04'),
(5, 'shubhamshinde9530@gmail.com', '2023-08-10 06:07:20'),
(6, 'shubhamshinde9530@gmail.com', '2023-08-10 06:08:20'),
(7, 'shubhamshinde9530@gmail.com', '2023-08-10 06:10:53'),
(8, 'shubhamshinde9530@gmail.com', '2023-08-10 06:11:07'),
(9, 'shubhamshinde9530@gmail.com', '2023-08-10 06:11:33'),
(10, '', '2023-08-24 07:15:34'),
(11, 'shubhamshinde9530@gmail.com', '2023-09-06 05:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `payment_id` int(50) NOT NULL,
  `student_id` int(50) NOT NULL,
  `course_id` int(50) NOT NULL,
  `coupon_code` varchar(20) NOT NULL DEFAULT 'NA',
  `amount_pay` float NOT NULL DEFAULT 0,
  `gen_paymentid` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_status`
--

INSERT INTO `payment_status` (`payment_id`, `student_id`, `course_id`, `coupon_code`, `amount_pay`, `gen_paymentid`, `payment_status`, `payment_datetime`) VALUES
(21, 1, 18, 'flat50', 2499.5, 'pay_MWzi7pCLKtilgf', 'Success', '2023-09-01 07:48:40'),
(22, 1, 17, 'flat60', 2989, 'pay_MWzjxZ0BRVEsXA', 'Success', '2023-09-01 07:50:25'),
(25, 1, 19, '-', 5999, 'pay_MYyN3NhPZ4OInf', 'Success', '2023-09-06 07:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `registration_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `experience` int(30) NOT NULL,
  `expectation` text NOT NULL,
  `regestered_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registration_id`, `event_id`, `name`, `email`, `contactno`, `qualification`, `experience`, `expectation`, `regestered_on`) VALUES
(1, 1, 'Shubham Shinde', 'shubhamshinde9530@gmail.com', '7774882080', 'MCA', 0, 'NA', '2023-07-11 08:03:58'),
(2, 1, 'Shubham Shinde', 'shubhamshinde9530@gmail.com', '7774882080', 'MCA', 0, 'NA', '2023-07-11 08:06:06'),
(3, 1, 'Shubham Shinde', 'shubhamshinde9530@gmail.com', '7774882080', 'MCA', 0, 'NA', '2023-07-11 08:06:22'),
(4, 3, 'Komal Jagdale', 'komaljagdale2028@gmail.com', '7774882080', 'MCA', 3, 'na', '2023-07-11 08:06:40'),
(5, 2, 'shuabh', 'komaljagdale2028@gmail.com', '7774882080', 'MCA', 8, 'na', '2023-07-11 08:08:35'),
(6, 2, 'Komal Jagdale', 'poojashingare@gmail.com', '7774882080', 'MCA', 3, 'an', '2023-07-12 05:36:20'),
(7, 1, 'Komal Jagdale', 'shubhamshinde9530@gmail.com', '7774882080', 'MCA', 2, 'na', '2023-07-12 06:05:22'),
(8, 4, 'Komal Jagdale', 'shubhamshinde9530@gmail.com', '7774882080', 'MCA', 2, 'na', '2023-07-12 06:12:11'),
(9, 1, 'Komal Jagdale', 'poojashingare@gmail.com', '7774882080', 'MCA', 2, 'na', '2023-07-12 06:18:50'),
(10, 2, 'Komal Jagdale', 'shubhamshinde9530@gmail.com', '7774882080', 'MCA', 2, 'na', '2023-07-12 06:52:50'),
(11, 2, 'Shubham Shinde', 'shubhamshinde9530@gmail.com', '7774882080', 'MCA', 3, 'na', '2023-07-12 06:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'Student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Testing', 'testing@gmail.com', 'testing@123', 'student'),
(2, 'ASDR Infotech', 'asdrinfotech@gmail.com', 'asdr@123', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_master`
--
ALTER TABLE `coupon_master`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);
ALTER TABLE `courses` ADD FULLTEXT KEY `course_name` (`course_name`,`syllabus_type`,`course_description`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship_program`
--
ALTER TABLE `internship_program`
  ADD PRIMARY KEY (`internid`);

--
-- Indexes for table `newslatter`
--
ALTER TABLE `newslatter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`registration_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coupon_master`
--
ALTER TABLE `coupon_master`
  MODIFY `coupon_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `internship_program`
--
ALTER TABLE `internship_program`
  MODIFY `internid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newslatter`
--
ALTER TABLE `newslatter`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_status`
--
ALTER TABLE `payment_status`
  MODIFY `payment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
