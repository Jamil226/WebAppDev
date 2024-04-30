-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2024 at 12:34 PM
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
-- Database: `client_hacker_third_eye`
--

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(8) NOT NULL,
  `reference` varchar(20) NOT NULL DEFAULT 'null',
  `title` varchar(500) NOT NULL DEFAULT 'null',
  `service` varchar(300) NOT NULL DEFAULT 'null',
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

INSERT INTO `features` (`id`, `reference`, `title`, `service`, `shortdescription`, `longdescription`, `image`, `status`, `updatedon`, `token`) VALUES
(1, '20240322_000001', 'Faster Website Performance', 'Home', 'Enjoy enhanced page speeds with our highly optimized CDN. Websites using our CDN experience an increase of speeds by an average of 60%.', 'Test Long Description', 'images/performance-icon-1.svg', 1, '2024-04-27 06:36:14', 'abc'),
(2, '20240322_000002', 'Robust Tools', 'Home', 'Scan your website for malware, hacks, and blacklist status. Receive continuous website monitoring with alerts and daily updates. Gain visibility and security.', 'Test Long Description1', 'images/performance-icon-2.svg', 1, '2024-04-27 06:57:25', 'def'),
(3, '20240322_000003', 'Easy Set Up', 'Home', 'A DIY process with our step-by-step dashboard guide or work with a team member. We offer a 30-day money-back guarantee* because we know we can help.', 'Test Long Description', 'images/performance-icon-3.svg', 1, '2024-04-27 06:36:22', 'ghi'),
(4, '20240322_000004', 'Dedicated Support', 'Home', 'Our researchers and security analysts are an extension of your team With professional security analysts available 24/7, you never have to worry about dealing with a hacked site.', 'Test Long Description', 'images/performance-icon-4.svg', 1, '2024-04-27 06:36:27', 'jklm'),
(5, '20240322_000005', 'Guaranteed Malware Removal', 'Home', 'We offer a 30-day money-back guarantee on restoring and repairing hacked websites, including unlimited clean-ups. We know we can help.', 'Test Long Description', 'images/performance-icon-5.svg', 1, '2024-04-27 06:36:33', 'nop'),
(6, '20240322_000006', 'WAF Protection', 'Home', 'Stop the bad bots in their tracks. Defend your website against hacks and DDoS attacks with our cloud-based WAF (Web Application Firewall).', 'Test Long Description', 'images/performance-icon-6.svg', 1, '2024-04-27 06:36:36', 'qrst'),
(7, '20240427_000007', 'Test', 'Web App Pentest', 'Testing', 'Testing', 'images/1712297033466_1714201945.jpeg', 1, '2024-04-27 07:12:25', 'uzSv8iw2UVqs0yrxk$7PlAM5KZfLW46Q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
