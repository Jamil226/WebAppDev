-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2024 at 07:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client_luxlimoride`
--

-- --------------------------------------------------------

--
-- Table structure for table `companyprojects`
--

CREATE TABLE `companyprojects` (
  `id` int(8) NOT NULL,
  `reference` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT 'null',
  `title` varchar(500) NOT NULL DEFAULT 'null',
  `details` varchar(500) NOT NULL DEFAULT 'null',
  `category` varchar(500) NOT NULL DEFAULT 'null',
  `imagepath` varchar(1000) NOT NULL DEFAULT 'null',
  `clientlink` varchar(500) NOT NULL DEFAULT 'null',
  `filterclass` varchar(500) NOT NULL DEFAULT 'null',
  `completedon` varchar(500) NOT NULL DEFAULT 'null',
  `tools` varchar(500) NOT NULL DEFAULT 'null',
  `clientname` varchar(500) NOT NULL DEFAULT 'null',
  `status` tinyint(2) NOT NULL DEFAULT 1,
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `imagetoken` varchar(500) NOT NULL DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companyprojects`
--

INSERT INTO `companyprojects` (`id`, `reference`, `title`, `details`, `category`, `imagepath`, `clientlink`, `filterclass`, `completedon`, `tools`, `clientname`, `status`, `updatedon`, `imagetoken`) VALUES
(2, 'null', 'ALITEX Logo Design', 'Our Graphic Team have developed a large number of logos. This is one of them for sample purposes.', 'Graphic Design', 'upload/ALITEX COVER-min_1585767828.jpg', '#', 'Graphic', '20200401', 'Adobe illustrator', 'ALITEX', 1, '2023-11-30 10:28:28', 'null'),
(3, 'null', 'DARAC FORM', 'DARAC FORM is another example of our Graphic Work', 'Digital Marketing', 'upload/DARAC FARM COVER-min_1585767949.jpg', '#', 'Graphic', '20200401', 'Adobe illustrator', 'DARAC FORM', 1, '2023-12-25 01:57:10', 'null'),
(6, 'null', 'Course Overview for Udemy', 'Here is a demo of Udemy Course Table of Contents ', 'Video Editing', 'upload/udemy_1585770914.jpg', 'https://www.youtube.com/watch?v=n-0zHip6Am4', 'Video', '20200401', 'Adobe After Effects, Adobe Photoshop', 'Udemy', 1, '2023-11-30 10:28:28', 'null'),
(7, 'null', 'CGI', 'Here is a glimpse of another logo design.', 'Graphic Design', 'upload/CGI-min_1585850971.jpg', '#', 'Graphic', '20200402', 'Adobe illustrator', 'CGI', 1, '2023-11-30 10:28:28', 'null'),
(8, 'null', 'Theatocaus Music Co', 'Theatocaus Music Co is our Graphic client and we have designed its logo, cd covers and posters etc.', 'Digital Marketing', 'upload/Theatocaus Music Co-min_1585851150.jpg', '#', 'Graphic', '20200402', 'Adobe illustrator', 'Theatocaus Music Co', 1, '2023-12-25 01:56:05', 'null'),
(9, 'null', 'GrowU Android App', 'GrowU is best Personal development, motivational, self Grooming and Self help application that makes an impact on your personal as well as in your professional life.', 'Mobile App Development', 'upload/gowU-personality-development_1585852419.jpg', 'https://play.google.com/store/apps/details?id=com.personal.development.app&hl=en', 'Mobile', '20200402', 'Android Studio', 'Mind Changer', 1, '2023-11-30 10:28:28', 'null'),
(10, 'null', 'Moment Factory', 'At Moment Factory, we bring people together. Our shows and destinations pioneer forms of entertainment that offer the world new experiences. Whether at a concert, a flagship store or across an urban square, we aim to inspire a sense of collective wonder and connection.', 'Website Development', 'upload/portfolio-image-lg-1_1585940797.jpg', 'https://momentfactory.com/', 'Web', '20200403', 'Sublime Text, Xamppserver, Adobe Photoshop', 'Moment Factory', 1, '2023-11-30 10:28:28', 'null'),
(11, 'null', 'Merck', 'Merck for Mothers, known as MSD for Mothers outside the U.S. and Canada, is our 10-year, $500 million initiative that applies our scientific and business expertise, as well as our financial resources, to help end preventable maternal mortality.', 'Website Development', 'upload/merck_1585941080.jpg', 'https://www.merck.com/', 'Web', '20200403', 'Sublime Text, Xamppserver, Adobe Photoshop', 'Merk', 1, '2023-11-30 10:28:28', 'null'),
(13, 'null', 'BAE Clothing', 'BAE is a clothing brand with eCommerce Store, we also provide Graphic Design Services as well.', 'Graphic Design', 'upload/BAE-min_1586277025.jpg', '#', 'Graphic', '20200407', 'Adobe After Effects, Adobe Photoshop', 'BAE', 1, '2023-11-30 10:28:28', 'null'),
(14, 'null', 'TEKDROID', 'We have designed the logo of TEKDROID', 'eCommerce', 'upload/TEKDROID-min_1586277103.jpg', '#', 'Graphic', '20200407', 'Adobe illustrator', 'TEKDROID', 1, '2023-12-11 07:21:14', 'null'),
(15, '20231208_000015', 'Test', 'Test', 'Development', 'upload/customer-service_1702012007.png', '#', 'development', '2023-12-08', 'VS Code', 'ABC', 1, '2023-12-11 07:10:15', 'w$Ejg9!XYAzdsvc6QJK10oRlxN5CyFme'),
(16, '20231208_000016', 'Test', 'Test', 'Development', 'upload/customer-service_1702012033.png', '#', 'development', '2023-12-08', 'VS Code', 'ABC', 1, '2023-12-11 07:10:19', '8di6tHD105yNzsX2oqE!wR3LG$SOCakm'),
(17, '20231208_000017', 'Announcement of First Annual Dinner', 'rrrr', 'eCommerce', 'upload/customer-service_1702012136.png', 'fddffd', 'ecommerce', '2023-12-08', 'dffddf', 'fddffd', 1, '2023-12-11 07:10:26', 'tHMSD)UvxnW5a$AuIokV1ZE0X4fRJ(L*'),
(18, '20231208_000018', 'Announcement of First Annual Dinner', 'ererre', 'eCommerce', 'upload/customer-service_1702012280.png', '#', 'mobile_apps', '2023-12-08', 'VS Code', 'ABC', 1, '2023-12-11 07:10:33', 'RtnevU9DIu$7K2X)xHCjq8GS*JdsAk5z');

-- --------------------------------------------------------

--
-- Table structure for table `companytools`
--

CREATE TABLE `companytools` (
  `id` int(8) NOT NULL,
  `logopath` varchar(1000) NOT NULL DEFAULT 'null',
  `link` varchar(1000) NOT NULL DEFAULT '#',
  `lastmodified` varchar(500) NOT NULL DEFAULT '''null''',
  `status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companytools`
--

INSERT INTO `companytools` (`id`, `logopath`, `link`, `lastmodified`, `status`) VALUES
(1, 'upload/ALITEX_1585769320.png', '#', 'null', 1),
(2, 'upload/DARAC FARM_1585769342.png', '#', 'null', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(8) NOT NULL,
  `reference` varchar(50) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `service` varchar(500) NOT NULL DEFAULT 'null',
  `contact` varchar(50) NOT NULL DEFAULT 'null',
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `subject` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `message` varchar(5000) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `ipaddress` varchar(30) CHARACTER SET utf8 NOT NULL,
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` varchar(200) NOT NULL DEFAULT '**************'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `reference`, `name`, `service`, `contact`, `email`, `subject`, `message`, `status`, `ipaddress`, `updatedon`, `token`) VALUES
(1, '20200411_000001', 'Sunny Place', 'null', '0', 'place.sunny20@yahoo.com', 'Advertisement Email', 'Do you want completely free advertising for your website? ', 0, '89.187.178.140', '2024-03-20 07:36:42', '**************'),
(2, '20240328_00000002', 'Muhammad Jamil', 'Web App Pentest', '+923458906587', 'jamil.57@hotmail.com', 'Test', 'Test', 0, '::1', '2024-03-28 08:37:39', 'ZPcgM!1JyVD(oqXHFB5*)b7KCk0SvfI2'),
(3, '20240328_00000003', 'Abdur Rehman', 'Cloud Security Pentest', '03001234567', 'abrehman@gmail.com', 'Testing Subject', 'Testing Message', 0, '::1', '2024-03-28 08:38:49', 'OjDpmRE36SFdWLAlcs8tCIHrvh4V7Unf');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(8) NOT NULL,
  `reference` varchar(100) NOT NULL DEFAULT '00000000_000000',
  `question` varchar(5000) NOT NULL DEFAULT 'null',
  `answer` varchar(5000) NOT NULL DEFAULT 'null',
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` varchar(100) NOT NULL DEFAULT '***************'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `reference`, `question`, `answer`, `status`, `updatedon`, `token`) VALUES
(1, '20240321_00000001', 'What is penetration testing (pentest), and why is it important for my website?', 'Penetration testing involves simulating cyber attacks to identify vulnerabilities in your website\'s security defenses. It\'s crucial for ensuring that your website can withstand real-world threats by proactively identifying and fixing weaknesses before attackers exploit them.', 1, '2024-03-21 06:41:17', 'asUEzbSi4Qcu9GJlq73HK(hrXDA$V2n*'),
(2, '20240321_00000002', 'How does website monitoring and alerts help in maintaining security?', 'Website monitoring continuously checks your website for suspicious activities, downtime, or unauthorized access attempts. Alerts promptly notify you of any potential security breaches, allowing you to take immediate action to safeguard your website and sensitive data.', 1, '2024-03-21 06:41:39', 'BkNX0r!61e$UMFnigOAjDKxm7PZ(Q9wV'),
(3, '20240321_00000003', 'What measures can I take to protect my website from future hacks?', 'Implementing robust protection mechanisms such as firewalls, intrusion detection systems, regular security updates, and strong access controls can significantly reduce the risk of future hacks. Additionally, conducting security audits and staying informed about the latest threats are essential for maintaining website security.', 1, '2024-03-21 06:42:03', '4jDYl$5TW*VRH(19uofgKd8!mnLrpqwN'),
(4, '20240321_00000004', 'What are the benefits of performance optimization for my website?', 'Performance optimization enhances your website\'s speed, responsiveness, and overall user experience. Faster loading times not only improve search engine rankings but also reduce bounce rates and increase user engagement. Moreover, optimizing performance can indirectly contribute to better security by reducing the attack surface and mitigating vulnerabilities.', 1, '2024-03-21 06:42:25', 'j$T1D0YBVXGOEy9*Ivpd6JA524WNnsb7'),
(5, '20240321_00000005', 'What should I do if my website gets hacked?', 'In the unfortunate event of a website hack, it\'s crucial to act swiftly and decisively. First, isolate the compromised system to prevent further damage. Then, assess the extent of the breach and identify the security loophole that led to the attack. Depending on the severity of the hack, you may need to restore from backups, patch vulnerabilities, and strengthen security measures to prevent future incidents. Seeking professional assistance from cybersecurity experts can also help in the recovery process.', 1, '2024-03-21 06:42:43', 'X6MVkIDgLBKxmS*PUbuOapWehrcT!zJN');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(8) NOT NULL,
  `reference` varchar(20) NOT NULL DEFAULT 'null',
  `title` varchar(500) NOT NULL DEFAULT 'null',
  `category` varchar(100) NOT NULL DEFAULT 'null',
  `shortdescription` varchar(5000) NOT NULL DEFAULT 'null',
  `longdescription` varchar(10000) NOT NULL DEFAULT 'null',
  `image` varchar(500) NOT NULL DEFAULT 'uploads/na.png',
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` varchar(50) NOT NULL DEFAULT '*****************'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `reference`, `title`, `category`, `shortdescription`, `longdescription`, `image`, `status`, `updatedon`, `token`) VALUES
(1, '20240322_000001', 'Faster Website Performance', 'Home', 'Enjoy enhanced page speeds with our highly optimized CDN. Websites using our CDN experience an increase of speeds by an average of 60%.', 'Test Long Description', 'images/performance-icon/1.svg', 1, '2024-03-22 04:04:15', '*****************'),
(2, '20240322_000002', 'Robust Tools', 'Home', 'Scan your website for malware, hacks, and blacklist status. Receive continuous website monitoring with alerts and daily updates. Gain visibility and security.', 'Test Long Description', 'images/performance-icon/2.svg', 1, '2024-03-22 04:04:20', '*****************'),
(3, '20240322_000003', 'Easy Set Up', 'Home', 'A DIY process with our step-by-step dashboard guide or work with a team member. We offer a 30-day money-back guarantee* because we know we can help.', 'Test Long Description', 'images/performance-icon/3.svg', 1, '2024-03-22 04:04:23', '*****************'),
(4, '20240322_000004', 'Dedicated Support', 'Home', 'Our researchers and security analysts are an extension of your team With professional security analysts available 24/7, you never have to worry about dealing with a hacked site.', 'Test Long Description', 'images/performance-icon/4.svg', 1, '2024-03-22 04:04:36', '*****************'),
(5, '20240322_000005', 'Guaranteed Malware Removal', 'Home', 'We offer a 30-day money-back guarantee on restoring and repairing hacked websites, including unlimited clean-ups. We know we can help.', 'Test Long Description', 'images/performance-icon/5.svg', 1, '2024-03-22 04:04:50', '*****************'),
(6, '20240322_000006', 'WAF Protection', 'Home', 'Stop the bad bots in their tracks. Defend your website against hacks and DDoS attacks with our cloud-based WAF (Web Application Firewall).', 'Test Long Description', 'images/performance-icon/6.svg', 1, '2024-03-22 04:04:52', '*****************');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(8) NOT NULL,
  `reference` varchar(50) NOT NULL DEFAULT 'null',
  `service` varchar(500) NOT NULL DEFAULT 'null',
  `email` varchar(500) NOT NULL DEFAULT 'null',
  `contact` varchar(200) NOT NULL DEFAULT 'null',
  `whatsapp` varchar(500) NOT NULL DEFAULT 'null',
  `message` varchar(5000) NOT NULL DEFAULT '''null''',
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `ipaddress` varchar(100) NOT NULL DEFAULT 'null',
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` varchar(50) NOT NULL DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(8) NOT NULL,
  `reference` varchar(100) NOT NULL DEFAULT 'null',
  `emailaddress` varchar(200) CHARACTER SET utf8 NOT NULL DEFAULT 'email@email.com',
  `ipaddress` varchar(200) CHARACTER SET utf8 NOT NULL DEFAULT 'null',
  `subscriptiondate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `reference`, `emailaddress`, `ipaddress`, `subscriptiondate`, `status`) VALUES
(1, '231129_00000001', 'jamil.57@hotmail.com', '::1', '2023-11-29 10:38:32', 1),
(2, '231129_00000002', 'jamil.58@hotmail.com', '::1', '2023-11-29 10:39:11', 1),
(3, '231129_00000003', 'jamil.59@hotmail.com', '::1', '2023-11-29 10:41:02', 1),
(4, '231130_00000004', 'jamil138.amin@gmail.com', '::1', '2023-11-30 06:41:48', 1),
(5, '231130_00000005', 'farhansajid@gmail.com', '::1', '2023-11-30 10:00:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quickservices`
--

CREATE TABLE `quickservices` (
  `id` int(8) NOT NULL,
  `reference` varchar(50) NOT NULL DEFAULT '20240326_000000',
  `title` varchar(500) NOT NULL DEFAULT 'null',
  `shortdescription` varchar(2000) NOT NULL DEFAULT 'null',
  `longdescription` varchar(5000) NOT NULL DEFAULT 'null',
  `url` varchar(1000) NOT NULL DEFAULT '#',
  `image` varchar(500) NOT NULL DEFAULT 'uploads/na.png',
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `lastmodified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quickservices`
--

INSERT INTO `quickservices` (`id`, `reference`, `title`, `shortdescription`, `longdescription`, `url`, `image`, `status`, `lastmodified`) VALUES
(1, '20240326_000001', 'Fix an issue', 'Get malware removed quickly by experienced security analysts.', 'null', '#', 'images/feature-icon/1.svg', 1, '2024-03-26 08:35:51'),
(2, '20240326_000002', 'Scan my site', 'Robust malware scanner to detect security vulnerabilities.', 'null', '#', 'images/feature-icon/2.svg', 1, '2024-03-26 08:30:15'),
(3, '20240326_000003', 'Protect my site', 'Powerful cloud-based firewall that stops hacks & attacks.', 'null', '#', 'images/feature-icon/3.svg', 1, '2024-03-26 08:31:00'),
(4, '20240326_000004', 'Boost site performance', 'Automatically improve your site speed by 60%+ with our CDN.', 'null', '#', 'images/feature-icon/4.svg', 1, '2024-03-26 08:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `resourcecenter`
--

CREATE TABLE `resourcecenter` (
  `id` int(8) NOT NULL,
  `reference` varchar(50) NOT NULL DEFAULT '20240326_000000',
  `title` varchar(500) NOT NULL DEFAULT 'null',
  `shortdescription` varchar(2000) NOT NULL DEFAULT 'null',
  `longdescription` varchar(5000) NOT NULL DEFAULT 'null',
  `url` varchar(1000) NOT NULL DEFAULT '#',
  `image` varchar(500) NOT NULL DEFAULT 'uploads/na.png',
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `lastmodified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resourcecenter`
--

INSERT INTO `resourcecenter` (`id`, `reference`, `title`, `shortdescription`, `longdescription`, `url`, `image`, `status`, `lastmodified`) VALUES
(1, '20240326_000001', 'Website Security ', 'Follow our helpful guides and tutorials to learn how to clean and secure your website.', 'null', '#', 'images/service-img/1.png', 1, '2024-03-26 08:22:47'),
(2, '20240326_000002', 'Email Course', 'Follow our helpful guides and tutorials to learn how to clean and secure your website.', 'null', '#', 'images/service-img/2.png', 1, '2024-03-26 08:17:40'),
(3, '20240326_000003', 'Our Blogs', 'Follow our helpful guides and tutorials to learn how to clean and secure your website.', 'null', '#', 'images/service-img/3.png', 1, '2024-03-26 08:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(8) NOT NULL,
  `reference` varchar(100) NOT NULL DEFAULT 'null',
  `username` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'null',
  `firstname` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'null',
  `lastname` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'null',
  `contact` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT 'null',
  `securepassword` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'null',
  `password` varchar(500) CHARACTER SET utf8 DEFAULT 'null',
  `ipaddress` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '127.0.0.1',
  `lastmodified` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'null',
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `accesstoken` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT '********************'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `reference`, `username`, `firstname`, `lastname`, `contact`, `securepassword`, `password`, `ipaddress`, `lastmodified`, `status`, `accesstoken`) VALUES
(1, '20231204_00000001', 'ahmad@gmail.com', 'Gohar', 'Ali', '+923458906587', '8b8e46cf7a7f29cd50bf760f2abdd792', '2233445566', '::1', 'null', 1, 'V8pHZTr4MmUxnI(PE2RbCvgAKq6FJjfu'),
(2, '20231204_00000002', 'jamil.57@hotmail.com', 'Muhammad', 'Jamil', '+923458906587', '25d55ad283aa400af464c76d713c07ad', '12345678', '::1', 'null', 1, '5Zxp$bazsk3nHmNqIK)VDEf!FrXhe01Y');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(8) NOT NULL,
  `reference` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `profile` varchar(5000) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT 'null',
  `twitter` varchar(100) NOT NULL DEFAULT 'null',
  `fb` varchar(100) NOT NULL DEFAULT 'null',
  `insta` varchar(100) NOT NULL DEFAULT 'null',
  `linkedin` varchar(100) NOT NULL DEFAULT 'null',
  `image` varchar(500) NOT NULL DEFAULT 'upload/coming.png',
  `status` tinyint(2) NOT NULL DEFAULT 1,
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `accesstoken` varchar(1000) NOT NULL DEFAULT '********************'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `reference`, `name`, `designation`, `profile`, `email`, `twitter`, `fb`, `insta`, `linkedin`, `image`, `status`, `updatedon`, `accesstoken`) VALUES
(1, '20231218_000001', 'Azka', 'Women Representative', 'Azka is working with us a Women Representative of the association.', 'azka@hotmail.com', '#', '#', '#', '#', 'upload/Screenshot 2023-12-17 at 7.34.11 PM_1702883898.png', 1, '2023-12-18 07:26:00', 'TEfJzVdp2tB)qDLgmyH13u5$ZkY07R4xC*Gl(XNSo9QjWaAwrU1702883898');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companyprojects`
--
ALTER TABLE `companyprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companytools`
--
ALTER TABLE `companytools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quickservices`
--
ALTER TABLE `quickservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resourcecenter`
--
ALTER TABLE `resourcecenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
