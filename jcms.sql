-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 08:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `advocate_info`
--

CREATE TABLE `advocate_info` (
  `a_slno` int(11) NOT NULL,
  `a_regd` varchar(20) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_phn` bigint(50) NOT NULL,
  `a_pass` varchar(50) NOT NULL,
  `a_path` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advocate_info`
--

INSERT INTO `advocate_info` (`a_slno`, `a_regd`, `a_name`, `a_email`, `a_phn`, `a_pass`, `a_path`, `status`) VALUES
(1, 'OR022000', 'Biswajit Sahoo', 'bsa643@gmail.com', 987654321, '21232f297a57a5a743894a0e4a801fc3', 'profile/OR022000.jpg', 1),
(3, 'OR202003', 'Mukesh Singh', 'Mukesh@gmail.com', 7243792934, '21232f297a57a5a743894a0e4a801fc3', 'profile/OR202003.png', 1),
(4, 'OR202005', 'Ram Parida', 'ram@gmail.com', 747499724, '21232f297a57a5a743894a0e4a801fc3', 'profile/OR202005.png', 1),
(15, 'OR202004', 'Hari Das', 'Hari@gmail.com', 48574899428, '21232f297a57a5a743894a0e4a801fc3', 'profile/OR202004.jpg', 1),
(17, 'OR202011', 'Ashok kumar Patra', 'ashok@gmail.com', 5241369874, 'e10adc3949ba59abbe56e057f20f883e', 'profile/OR202011.jpeg', 1),
(18, 'OR935398', 'Debendra Mishra', 'admin@gmail.com', 9987635543, '21232f297a57a5a743894a0e4a801fc3', 'profile/OR935398.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `casefiling`
--

CREATE TABLE `casefiling` (
  `slno` int(11) NOT NULL,
  `filingno` int(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `court` varchar(100) NOT NULL,
  `casetype` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pgname` varchar(50) NOT NULL,
  `page` int(10) NOT NULL,
  `pgender` varchar(15) NOT NULL,
  `pnation` varchar(20) NOT NULL,
  `pcaste` varchar(10) NOT NULL,
  `pemail` varchar(50) NOT NULL,
  `pphn` bigint(12) NOT NULL,
  `padd` varchar(70) NOT NULL,
  `pcity` varchar(20) NOT NULL,
  `pstate` varchar(20) NOT NULL,
  `ppin` int(6) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `rgname` varchar(50) NOT NULL,
  `rage` int(5) NOT NULL,
  `rgender` varchar(6) NOT NULL,
  `rnation` varchar(20) NOT NULL,
  `rcaste` varchar(25) NOT NULL,
  `radd` varchar(70) NOT NULL,
  `rcity` varchar(20) NOT NULL,
  `rstate` varchar(20) NOT NULL,
  `rpin` int(6) NOT NULL,
  `advno` varchar(30) NOT NULL,
  `advname` varchar(50) NOT NULL,
  `fact` text NOT NULL,
  `act` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `sts` varchar(11) NOT NULL,
  `verify` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `casefiling`
--

INSERT INTO `casefiling` (`slno`, `filingno`, `state`, `court`, `casetype`, `date`, `pname`, `pgname`, `page`, `pgender`, `pnation`, `pcaste`, `pemail`, `pphn`, `padd`, `pcity`, `pstate`, `ppin`, `rname`, `rgname`, `rage`, `rgender`, `rnation`, `rcaste`, `radd`, `rcity`, `rstate`, `rpin`, `advno`, `advname`, `fact`, `act`, `section`, `file`, `sts`, `verify`) VALUES
(2, 464787, 'ORISSA', 'ORISSA HIGH COURT', 'WP(C)', '2024-02-27', 'Bhaskar Ray', 'Prabhakar Ray', 79, 'Male', 'Indian', 'General', 'xzy@h.df', 87472287, 'Patia', 'Khurdha', 'ORISSA', 282839, 'Manoj Parida ', 'Bigyan Parida', 56, 'Male', 'Indian', 'OBC', 'Buxi bazar', 'Cuttack', 'ORISSA', 73783, 'OR935398', 'Debendra Mishra', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio porro vitae rem dolorem, repellendus, vel hic quas assumenda odit nulla optio adipisci dicta necessitatibus obcaecati exercitationem et. Doloribus qui mollitia sapiente quasi quidem, reprehenderit ullam tempore accusantium provident, nulla odit placeat maxime, dolore delectus esse veritatis. Deleniti totam fugiat veritatis quia autem reprehenderit, harum dignissimos aliquid nobis possimus cupiditate quibusdam quidem eligendi sit laudantium, consectetur perferendis magni minima sint? Et, dolore. Veritatis blanditiis id odio facilis, vero aliquam inventore ipsa nulla unde. Fuga, aliquam deleniti provident explicabo culpa, consequuntur natus rerum, id tempora quia iste! Facere error recusandae fugit provident deleniti quae fuga eum laudantium aut asperiores quaerat id maxime rerum, officia in quasi, autem ullam commodi veritatis odio, maiores impedit exercitationem quia. Debitis, beatae porro magni mollitia quae ab sit exercitationem libero fuga! Quaerat omnis voluptates eos perferendis, aut numquam dolor magnam natus quidem, similique, ab ad quos earum?', 'PMLA Act', '468', 'XtraMarkSheetCGPANew.pdf', 'pending', 0),
(3, 957418, 'ORISSA', 'ORISSA HIGH COURT', 'WP(C)', '2024-02-27', 'Bhaskar Ray', 'Prabhakar Ray', 79, 'Male', 'Indian', 'General', 'xzy@h.df', 87472287, 'Patia', 'Khurdha', 'ORISSA', 282839, 'Manoj Parida ', 'Bigyan Parida', 56, 'Male', 'Indian', 'OBC', 'Buxi bazar', 'Cuttack', 'ORISSA', 73783, 'OR935398', 'Debendra Mishra', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio porro vitae rem dolorem, repellendus, vel hic quas assumenda odit nulla optio adipisci dicta necessitatibus obcaecati exercitationem et. Doloribus qui mollitia sapiente quasi quidem, reprehenderit ullam tempore accusantium provident, nulla odit placeat maxime, dolore delectus esse veritatis. Deleniti totam fugiat veritatis quia autem reprehenderit, harum dignissimos aliquid nobis possimus cupiditate quibusdam quidem eligendi sit laudantium, consectetur perferendis magni minima sint? Et, dolore. Veritatis blanditiis id odio facilis, vero aliquam inventore ipsa nulla unde. Fuga, aliquam deleniti provident explicabo culpa, consequuntur natus rerum, id tempora quia iste! Facere error recusandae fugit provident deleniti quae fuga eum laudantium aut asperiores quaerat id maxime rerum, officia in quasi, autem ullam commodi veritatis odio, maiores impedit exercitationem quia. Debitis, beatae porro magni mollitia quae ab sit exercitationem libero fuga! Quaerat omnis voluptates eos perferendis, aut numquam dolor magnam natus quidem, similique, ab ad quos earum?', 'PMLA Act', '468', 'XtraMarkSheetCGPANew.pdf', 'pending', 1),
(12, 665534, 'ORISSA', 'ORISSA HIGH COURT', 'CMP', '2023-03-29', 'Chetan Swain', 'Bhramar Swain', 48, 'Male', 'Indian', 'General', 'chetan@gmail.com', 7836837933, 'Nimapada', 'Puri', 'ORISSA', 783673, 'Ashok Kumar Das', 'Krushna Chandara Das', 35, 'Male', 'Indian', 'General', 'KUJANGA', 'Jagatsinghpur ', 'ORISSA', 754141, 'OR022000', 'Biswajit Sahoo', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, consequuntur aperiam! Enim inventore suscipit consequatur natus totam doloremque nostrum, eveniet facilis earum, vel nisi odio quam ullam itaque repudiandae! Ut nam, obcaecati optio porro maxime eos harum minima explicabo esse accusantium omnis similique aperiam aspernatur qui sunt magni. Quas officiis a libero suscipit itaque illo fugiat rem similique odio deleniti tempora quaerat impedit numquam tenetur, voluptatem aliquid ipsa. Fugit, recusandae.', 'Enforce Fundamentals Rights Act', '387', 'doc/665534.pdf', 'pending', 1);

-- --------------------------------------------------------

--
-- Table structure for table `case_history`
--

CREATE TABLE `case_history` (
  `slno` int(100) NOT NULL,
  `case_no` varchar(20) NOT NULL,
  `next_date` date NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_info`
--

CREATE TABLE `case_info` (
  `slno` int(100) NOT NULL,
  `f_filingno` varchar(11) NOT NULL,
  `f-date` date NOT NULL,
  `case_type` varchar(11) NOT NULL,
  `case_no` varchar(11) NOT NULL,
  `year` int(11) NOT NULL,
  `regd_date` date NOT NULL,
  `j_regd` varchar(11) NOT NULL,
  `a_regd` varchar(11) NOT NULL,
  `admit` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case_info`
--

INSERT INTO `case_info` (`slno`, `f_filingno`, `f-date`, `case_type`, `case_no`, `year`, `regd_date`, `j_regd`, `a_regd`, `admit`) VALUES
(1, '665534', '2023-03-29', 'WP(C)', '323', 2023, '2023-03-30', 'OR022008', 'OR022000', 1),
(3, '957418', '2024-02-27', 'WP(C)', '346', 2024, '2024-02-28', 'OR022008', 'OR935398', 1);

-- --------------------------------------------------------

--
-- Table structure for table `court_list`
--

CREATE TABLE `court_list` (
  `slno` int(11) NOT NULL,
  `hc_name` varchar(191) NOT NULL,
  `link` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `court_list`
--

INSERT INTO `court_list` (`slno`, `hc_name`, `link`) VALUES
(2, 'ALLAHABAD HIGH COURT', 'https://www.allahabadhighcourt.in/index.html'),
(3, 'ANDHRA PRADESH HIGH COURT', 'https://aphc.gov.in/'),
(4, 'BOMBAY HIGH COURT', 'https://bombayhighcourt.nic.in/index.php'),
(5, 'CALCUTTA HIGH COURT', 'https://www.calcuttahighcourt.gov.in/'),
(6, 'CHHATTISGARH HIGH COURT', 'https://highcourt.cg.gov.in/default.html'),
(7, 'DELHI HIGH COURT', 'https://delhihighcourt.nic.in/'),
(8, 'GAUHATI HIGH COURT', 'https://ghconline.gov.in/'),
(9, 'GUJARAT HIGH COURT', 'https://gujarathighcourt.nic.in/'),
(10, 'HIMACHAL PRADESH HIGH COURT', 'https://hphighcourt.nic.in/'),
(11, 'HIGH COURT OF JAMMU & KASHMIR AND LADAK', 'https://jkhighcourt.nic.in/'),
(12, 'JHARKHAND HIGH COURT', 'https://jharkhandhighcourt.nic.in/'),
(13, 'KARNATAKA HIGH COURT', 'https://karnatakajudiciary.kar.nic.in/'),
(14, 'KERALA HIGH COURT', 'https://highcourt.kerala.gov.in/'),
(15, 'MADHYA PRADESH HIGH COURT', 'https://mphc.gov.in/'),
(16, 'MADRAS HIGH COURT', 'https://hcmadras.tn.gov.in/'),
(17, 'MANIPUR HIGH COURT', 'https://hcmimphal.nic.in/'),
(18, 'MEGHALAYA HIGH COURT', 'https://meghalayahighcourt.nic.in/'),
(19, 'ORISSA HIGH COURT', 'https://www.orissahighcourt.nic.in/'),
(20, 'PATNA HIGH COURT', 'https://patnahighcourt.gov.in/'),
(21, 'PUNJAB & HARYANA HIGH COURT', 'https://highcourtchd.gov.in/'),
(22, 'RAJASTHAN HIGH COURT', 'https://hcraj.nic.in/'),
(23, 'SIKKIM HIGH COURT', 'https://hcs.gov.in/'),
(24, 'HIGH COURT FOR THE STATE OF TELANGANA', 'https://tshc.gov.in/'),
(25, 'TRIPURA HIGH COURT', 'https://thc.nic.in/'),
(26, 'UTTARAKHAND HIGH COURT', 'https://highcourtofuttarakhand.gov.in/');

-- --------------------------------------------------------

--
-- Table structure for table `judge_info`
--

CREATE TABLE `judge_info` (
  `j_slno` int(20) NOT NULL,
  `j_regd` varchar(50) NOT NULL,
  `j_name` varchar(50) NOT NULL,
  `j_email` varchar(50) NOT NULL,
  `j_phn` bigint(11) NOT NULL,
  `j_pass` varchar(50) NOT NULL,
  `j_path` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `judge_info`
--

INSERT INTO `judge_info` (`j_slno`, `j_regd`, `j_name`, `j_email`, `j_phn`, `j_pass`, `j_path`, `status`) VALUES
(1, 'OR022008', 'Abhijit Sahoo', 'bsahoo8342@gmail.com', 9692995380, '73acd9a5972130b75066c82595a1fae3', 'profile/OR022008.png', 1),
(2, 'OR202003', 'Ram Prasad', 'ram@gmail.com', 4897969739, '21232f297a57a5a743894a0e4a801fc3', 'profile/OR202003.png', 1),
(3, 'OR202010', 'Debadatta Swain', 'swain@g.o', 474747665, '21232f297a57a5a743894a0e4a801fc3', 'profile/OR202010.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE `staff_info` (
  `slno` int(11) NOT NULL,
  `s_regd` varchar(10) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_phn` bigint(12) NOT NULL,
  `s_pass` varchar(50) NOT NULL,
  `s_path` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_info`
--

INSERT INTO `staff_info` (`slno`, `s_regd`, `s_name`, `s_email`, `s_phn`, `s_pass`, `s_path`, `status`) VALUES
(1, 'OS342003', 'Dinesh Tripathy', 'dinesh@gmail.com', 373839378, '21232f297a57a5a743894a0e4a801fc3', 'profile/OS342003.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state_list`
--

CREATE TABLE `state_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `state_list`
--

INSERT INTO `state_list` (`id`, `state`) VALUES
(1, 'ANDAMAN AND NICOBAR ISLANDS'),
(2, 'ANDHRA PRADESH'),
(3, 'ARUNACHAL PRADESH'),
(4, 'ASSAM'),
(5, 'BIHAR'),
(6, 'CHATTISGARH'),
(7, 'CHANDIGARH'),
(8, 'DAMAN AND DIU'),
(9, 'DELHI'),
(10, 'DADRA AND NAGAR HAVELI'),
(11, 'GOA'),
(12, 'GUJARAT'),
(13, 'HIMACHAL PRADESH'),
(14, 'HARYANA'),
(15, 'JAMMU AND KASHMIR'),
(16, 'JHARKHAND'),
(17, 'KERALA'),
(18, 'KARNATAKA'),
(19, 'LAKSHADWEEP'),
(20, 'MEGHALAYA'),
(21, 'MAHARASHTRA'),
(22, 'MANIPUR'),
(23, 'MADHYA PRADESH'),
(24, 'MIZORAM'),
(25, 'NAGALAND'),
(26, 'ORISSA'),
(27, 'PUNJAB'),
(28, 'PONDICHERRY'),
(29, 'RAJASTHAN'),
(30, 'SIKKIM'),
(31, 'TAMIL NADU'),
(32, 'TRIPURA'),
(33, 'UTTARAKHAND'),
(34, 'UTTAR PRADESH'),
(35, 'WEST BENGAL'),
(36, 'TELANGANA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocate_info`
--
ALTER TABLE `advocate_info`
  ADD PRIMARY KEY (`a_slno`),
  ADD UNIQUE KEY `a_email` (`a_email`),
  ADD UNIQUE KEY `a_regd` (`a_regd`),
  ADD UNIQUE KEY `a_phn` (`a_phn`);

--
-- Indexes for table `casefiling`
--
ALTER TABLE `casefiling`
  ADD PRIMARY KEY (`slno`),
  ADD UNIQUE KEY `filingno` (`filingno`);

--
-- Indexes for table `case_history`
--
ALTER TABLE `case_history`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `case_info`
--
ALTER TABLE `case_info`
  ADD PRIMARY KEY (`slno`),
  ADD UNIQUE KEY `f_filingno` (`f_filingno`),
  ADD UNIQUE KEY `case_no` (`case_no`);

--
-- Indexes for table `court_list`
--
ALTER TABLE `court_list`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `judge_info`
--
ALTER TABLE `judge_info`
  ADD UNIQUE KEY `j_slno` (`j_slno`),
  ADD UNIQUE KEY `j_regd` (`j_regd`),
  ADD UNIQUE KEY `j_email` (`j_email`),
  ADD UNIQUE KEY `j_phn` (`j_phn`);

--
-- Indexes for table `staff_info`
--
ALTER TABLE `staff_info`
  ADD PRIMARY KEY (`slno`),
  ADD UNIQUE KEY `s_regd` (`s_regd`),
  ADD UNIQUE KEY `s_email` (`s_email`);

--
-- Indexes for table `state_list`
--
ALTER TABLE `state_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advocate_info`
--
ALTER TABLE `advocate_info`
  MODIFY `a_slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `casefiling`
--
ALTER TABLE `casefiling`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `case_history`
--
ALTER TABLE `case_history`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `case_info`
--
ALTER TABLE `case_info`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `court_list`
--
ALTER TABLE `court_list`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `judge_info`
--
ALTER TABLE `judge_info`
  MODIFY `j_slno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff_info`
--
ALTER TABLE `staff_info`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `state_list`
--
ALTER TABLE `state_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
