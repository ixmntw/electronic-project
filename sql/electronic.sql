-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2023 at 11:04 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronic`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `e_id` int(6) NOT NULL,
  `e_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `e_date` date NOT NULL,
  `e_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_detail` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `e_manual` varchar(9000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`e_id`, `e_number`, `e_date`, `e_name`, `e_detail`, `photo`, `e_manual`) VALUES
(10, '', '2023-11-12', 'Monitor', '7440-006-0002', '2023-11-12-11.jpg', ''),
(11, '', '2023-11-12', 'CPU', '7440-001-0011', '2023-11-12-114238.png', ''),
(12, '', '2023-11-12', 'Keyboard', '7440-009-0001', '2023-11-12-MQ052.jpg', ''),
(13, '', '2023-11-12', 'Mouse', '7440-009-0002', '2023-11-12-222.jpg', ''),
(14, '', '2023-11-12', 'เครื่องสำรองไฟ UPS', '68765389yy', '2023-11-12-600x559.png', '<div>\r\n<h3><img alt=\"APC\" src=\"https://manuals.plus/wp-content/uploads/2021/06/APC.png?ezimgfmt=rs:159x54/rscb1/ng:webp/ngcb1\" style=\"height:54px; width:159px\" /></h3>\r\n\r\n<div>คู่มือผู้ใช้ APC Back-UPS2</div>\r\n\r\n<p><img alt=\"ผลิตภัณฑ์\" src=\"https://manuals.plus/wp-content/uploads/2021/06/product-114.jpg?ezimgfmt=rs:346x346/rscb1/ng:webp/ngcb1\" style=\"height:345px; width:346px\" /></p>\r\n\r\n<p><strong>คู่มือผู้ใช้ APC Back-UPS</strong></p>\r\n\r\n<div>ความปลอดภัยและข้อมูลทั่วไป</div>\r\n\r\n<p>คู่มือนี้มีคำแนะนำที่สำคัญที่ควรปฏิบัติตามระหว่างการติดตั้งและบำรุงรักษา UPS และแบตเตอรี่ ตรวจสอบเนื้อหาบรรจุภัณฑ์เมื่อได้รับ แจ้งผู้ขนส่งและตัวแทนจำหน่ายหากมีความเสียหาย</p>\r\n\r\n<p><strong>อันตรายจากไฟฟ้าช็อตการระเบิดหรือแฟลช ARC</strong></p>\r\n\r\n<ul>\r\n	<li>UPS นี้ใช้ภายในอาคารเท่านั้น\r\n	<div><ins><iframe frameborder=\"0\" height=\"250\" id=\"aswift_0\" name=\"aswift_0\" scrolling=\"no\" src=\"https://googleads.g.doubleclick.net/pagead/ads?us_privacy=1---&amp;client=ca-pub-0545639743190253&amp;output=html&amp;h=250&amp;adk=299419167&amp;adf=1959262121&amp;w=300&amp;lmt=1699783413&amp;rafmt=12&amp;channel=5629614550&amp;format=300x250&amp;url=https%3A%2F%2Fmanuals.plus%2Fth%2Fapc%2Fback-ups-manual%23axzz8IqIK253y&amp;ea=0&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTQuMC4wIiwieDg2IiwiIiwiMTE5LjAuNjA0NS4xMjQiLG51bGwsMCxudWxsLCI2NCIsW1siR29vZ2xlIENocm9tZSIsIjExOS4wLjYwNDUuMTI0Il0sWyJDaHJvbWl1bSIsIjExOS4wLjYwNDUuMTI0Il0sWyJOb3Q_QV9CcmFuZCIsIjI0LjAuMC4wIl1dLDBd&amp;dt=1699783410077&amp;bpp=2&amp;bdt=743&amp;idt=502&amp;shv=r20231108&amp;mjsv=m202311060101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D9516a4c574e63399%3AT%3D1699783412%3ART%3D1699783412%3AS%3DALNI_MZs1WVh_qXxT83LfaYoQIa-cF8gEw&amp;gpic=UID%3D00000c8500791113%3AT%3D1699783412%3ART%3D1699783412%3AS%3DALNI_MZpuxfq4UHdnVT-k0gs-5NRW9HUBw&amp;correlator=2308273745037&amp;frm=20&amp;pv=2&amp;ga_vid=640498799.1699783410&amp;ga_sid=1699783411&amp;ga_hid=745896447&amp;ga_fc=1&amp;u_tz=420&amp;u_his=1&amp;u_h=800&amp;u_w=1280&amp;u_ah=752&amp;u_aw=1280&amp;u_cd=24&amp;u_sd=1.5&amp;dmc=8&amp;adx=543&amp;ady=3137&amp;biw=1263&amp;bih=643&amp;scr_x=0&amp;scr_y=565&amp;eid=44759876%2C44759927%2C31079403%2C44807462%2C31078301%2C31079569%2C44807764%2C44808148%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=3257130563594204&amp;tmod=1181251550&amp;uas=3&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1280%2C0%2C1280%2C752%2C1280%2C643&amp;vis=1&amp;rsz=%7C%7CpeEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=256&amp;bc=31&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=1&amp;uci=a!1&amp;btvi=1&amp;fsb=1&amp;dtd=3477\" width=\"300\"></iframe></ins></div>\r\n	<img alt=\"Ezoic\" src=\"https://go.ezodn.com/utilcave_com/ezoicbwa.png\" title=\"ezoic\" /></li>\r\n	<li>ห้ามใช้งาน UPS นี้ในแสงแดดโดยตรง สัมผัสกับของเหลว หรือในที่ที่มีฝุ่นมากเกินไปหรือมีความชื้นสูง</li>\r\n	<li>ต่อสายไฟของ UPS เข้ากับเต้ารับที่ผนังโดยตรง</li>\r\n	<li>ควรติดตั้งเต้ารับใกล้กับอุปกรณ์และควรเข้าถึงได้ง่าย</li>\r\n	<li>ตรวจสอบให้แน่ใจว่าไม่มีการปิดกั้นช่องระบายอากาศบน UPS ปล่อยให้มีพื้นที่เพียงพอสำหรับการระบายอากาศที่เหมาะสม</li>\r\n</ul>\r\n<br />\r\n<br />\r\nRead more:&nbsp;<a href=\"https://manuals.plus/th/apc/back-ups-manual#ixzz8IqIQoZEv\">https://manuals.plus/th/apc/back-ups-manual#ixzz8IqIQoZEv</a></div>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `i_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `i_date_request` date NOT NULL,
  `i_date` date NOT NULL,
  `i_time` time NOT NULL,
  `i_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `i_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `i_date_return_plan` date NOT NULL,
  `i_time_return_plan` time NOT NULL,
  `i_date_return` date NOT NULL,
  `i_return_remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `i_status` int(1) NOT NULL,
  `i_remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`i_id`, `i_date_request`, `i_date`, `i_time`, `i_detail`, `i_location`, `i_date_return_plan`, `i_time_return_plan`, `i_date_return`, `i_return_remark`, `i_status`, `i_remark`, `id`) VALUES
('OR23110001', '2023-11-12', '2023-11-15', '14:48:00', 'ใช้งาน', 'แผนก QA', '2023-11-26', '11:54:00', '2023-11-17', 'คืนให้ Admin', 1, '', 52),
('OR23110002', '2023-11-12', '2023-11-12', '18:37:00', 'bjgdf', 'fnsl', '2023-11-03', '18:37:00', '0000-00-00', '', 0, '', 52);

-- --------------------------------------------------------

--
-- Table structure for table `issue_out`
--

CREATE TABLE `issue_out` (
  `o_id` int(6) NOT NULL,
  `o_qty` int(6) NOT NULL,
  `o_status` int(1) NOT NULL,
  `e_id` int(6) NOT NULL,
  `i_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `issue_out`
--

INSERT INTO `issue_out` (`o_id`, `o_qty`, `o_status`, `e_id`, `i_id`) VALUES
(39, 1, 0, 10, 'OR23110001'),
(40, 1, 0, 11, 'OR23110001'),
(41, 1, 0, 12, 'OR23110001'),
(42, 2, 0, 10, 'OR23110002');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `in_id` int(6) NOT NULL,
  `in_date` date NOT NULL,
  `in_qty` int(6) NOT NULL,
  `e_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`in_id`, `in_date`, `in_qty`, `e_id`) VALUES
(16, '2023-11-12', 10, 10),
(17, '2023-11-12', 15, 11),
(18, '2023-11-12', 15, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `prefix` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `u_tel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `date`, `username`, `password`, `prefix`, `name`, `lname`, `address`, `photo`, `u_tel`, `u_email`, `position`, `department`, `status`) VALUES
(1, '2023-08-23', 'admin', '1234', '', 'admin', '', '', '', 'xxx xxx xxxx', 'wirairat.sae@gmail.com', '', '', 1),
(52, '2023-08-24', 'SP230800001', '1234', 'เด็กชาย', 'สารัท', 'อามีน', 'xxxxxxxxx', '2023-08-24-4086679.png', '02-134324', 'wirairat.sae@gmail.com', 'ผู้จัดการ', 'QA', 2),
(53, '2023-08-17', 'SP230800002', '1234', 'นางสาว', 'บุญณดา', 'โชคประทานทวี', '', '2023-08-13-group-registration-icon-26.png', '', '', '', '', 2),
(55, '2023-08-13', 'SP230800003', '1234', 'เด็กชาย', 'ศรุต', 'ศรีเพ็ญ', '', '4086679.png', '', '', '', '', 2),
(56, '2023-08-13', 'SP230800004', '1234', 'เด็กชาย', 'กฤติเดช', 'วงศ์ประไพ', '', '4086679.png', '', '', '', '', 2),
(74, '2023-08-17', 'SP230800005', '1234', 'นาย', 'มนตรี', 'มีโชค', '', '2023-08-13-2023-08-135231019.png', '', '', '', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `issue_out`
--
ALTER TABLE `issue_out`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `e_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `issue_out`
--
ALTER TABLE `issue_out`
  MODIFY `o_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `in_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
