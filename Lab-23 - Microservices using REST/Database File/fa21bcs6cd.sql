-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2024 at 09:04 AM
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
-- Database: `fa21bcs6cd`
--

-- --------------------------------------------------------

--
-- Table structure for table `university_news`
--

CREATE TABLE `university_news` (
  `newsid` int(8) NOT NULL,
  `reference` varchar(300) NOT NULL,
  `newstitle` varchar(1000) NOT NULL,
  `newsdesc` text NOT NULL,
  `newspostby` varchar(300) NOT NULL,
  `newsdate` date NOT NULL DEFAULT '0000-00-00',
  `image` varchar(500) NOT NULL DEFAULT 'upload/coming.jpg',
  `newsstatus` tinyint(2) NOT NULL DEFAULT 1,
  `lastedit` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link` varchar(1000) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university_news`
--

INSERT INTO `university_news` (`newsid`, `reference`, `newstitle`, `newsdesc`, `newspostby`, `newsdate`, `image`, `newsstatus`, `lastedit`, `link`) VALUES
(1, '20190811_000001', 'College Prospectus 2019-20', 'Revamped and remodeled prospectus for year 2019-20 is now available.', 'Muhammad Jamil', '2019-07-20', 'upload/IMG-20190718-WA0020_1565546692.jpg', 1, '0000-00-00 00:00:00', 'https://drive.google.com/open?id=1TPQvX5czWFlNt3V7QKy0abmkFnjEkIfG'),
(6, '20191001_000006', 'Merit Lists Schedule', 'Merit List Schedule for BS 4 Year Admissions (2019-23)', 'Muhammad Jamil', '2019-10-01', 'upload/20191001_191058-01_1569939400.jpeg', 0, '0000-00-00 00:00:00', '#'),
(8, '20191019_000008', '1st Meri List BS Programs', '1st Meri List for BS (4 year) Admissions.', 'Waqas Ali', '2019-10-19', 'upload/IMG-20191019-WA0000_1571455032.jpg', 0, '0000-00-00 00:00:00', '#'),
(9, '20191025_000009', 'Admission schedule for MA/MSc 2019-21 ', '.', 'Prof. Muhammad Sajjad', '2019-10-25', 'upload/MAMSc shedule_1571989827.jpg', 0, '0000-00-00 00:00:00', '#'),
(12, '20191112_000012', 'EHSAAS Scholarships ', 'EHSAAS Undergraduate Scholarships Programme has been announced for the Undergraduate students studying in all BS programs', 'Muhammad Jamil', '2019-11-12', 'upload/Ehsas_UG_Scholarship_Program_Ad_Urdu_1573540848.jpg', 1, '0000-00-00 00:00:00', '#'),
(13, '20191130_000013', 'College Convocation 2019', 'It is informed to all students that convocation fee is Rs. 1000 are received in the Accounts Branch of the college before 10 December 2019', 'Muhammad Jamil', '2019-11-30', 'upload/ad_convocation_1575104599.jpg', 1, '0000-00-00 00:00:00', '#'),
(15, '20191211_000015', 'GPGCS 7th Convocation 2020', 'College convocation news.', 'Principal Office', '2019-12-11', 'upload/2019_12_11 12_58 Office Lens_1576064869.jpg', 0, '0000-00-00 00:00:00', '#'),
(16, '20191216_000016', 'Belgium Government Scholarship 2020-2021 (Fully Funded) â€“ Call For Applications', 'Applications are invited to apply for the Belgium Government Scholarship for the Academic Year 2020-2021.', 'Muhammad Jamil', '2019-12-16', 'upload/belgium_870_1576477319.jpg', 1, '0000-00-00 00:00:00', '#'),
(17, '20191222_000017', 'Punjab Government Servants Benevolent Fund Board', 'The Provincial Benevolent Fund Board invites applications for Educational Scholarships for the year of 2020. All those students can apply for the Benevolent Fund Educational Scholarships 20202, whose father or mother is/was an employee of Punjab government (Whether, in-service, retired or died).', 'Muhammad Jamil', '2019-12-22', 'upload/Benevolent-Fund-Educational-Scholarships-2020-Advertisement-745x1024_1577026602.jpg', 0, '0000-00-00 00:00:00', '#'),
(18, '20191228_000018', 'Advertisement of College Teaching Interns 2020', 'Advertisement of the CTIs Vacancies 2020 is as under for the information of the jobs seekers of the province of Punjab.  All these jobs are purely on temporary basis. The candidate has no right and cannot claim it to be a regular. However the candidate will get a certificate from the department on the successful completion of the internship.', 'Muhammad Jamil', '2019-12-28', 'upload/CTIs-Jobs-2020_1577516807.png', 0, '0000-00-00 00:00:00', '#'),
(19, '20191230_000019', 'EPFL Summer Internship ', 'EPFL Summer Internship Program 2020 in Switzerland  2 Months, Summer of 2020  Deadline: 31st Jan 2020 ', 'Muhammad Jamil', '2019-12-30', 'upload/FB_IMG_1577693273162_1577693635.jpg', 1, '0000-00-00 00:00:00', '#'),
(20, '20200107_000020', 'Get Ready for GPGCS 7th Convocation 2020', 'Please be informed that college 7th Convocation would be conducted as schedule below: Wednesday, 15th January 2020', 'Principal Office', '2020-01-07', 'upload/IMG-20200107-WA0007_1578392493.jpg', 0, '0000-00-00 00:00:00', '#'),
(22, '20200120_000022', 'Opportunity for PhD Studies in US Universities', 'For details, please visit: www.hec.gov.pk/site/US-PakCorridor  Deadline: February 20, 2020', 'Muhammad Jamil', '2020-01-20', 'upload/scholarship_hec_1579516372.jpg', 1, '0000-00-00 00:00:00', '#'),
(23, '20200128_000023', 'Office Order', 'Dr. Muhammad Jamil, Associate Professor of Chemistry is hereby appointed as Vice Principal (Academic) of the college with immediate effect.', 'Principal Office', '2020-01-28', 'upload/FB_IMG_1580231865781_1580232034.jpg', 0, '0000-00-00 00:00:00', '#'),
(24, '20200203_000024', 'King Fahad University Scholarship 2020 (Fully Funded)', 'King Fahd University Scholarship 2020 Saudi Arabia.(Fully Funded) Deadline: 12th February 2020', 'Muhammad Jamil', '2020-02-03', 'upload/IMG_20200204_020508_822_1580764069.jpg', 1, '0000-00-00 00:00:00', '#'),
(25, '20200205_000025', 'Save Kashmir  --- Save humanity', 'We see Humans but no Humanity on the outrage shed on our Kashmiris for the past 184 days. Lets united together for our own KASHMIR and light up a candle to express Solidarity and Devotion.We stand with kashmir. Every dark night has a beautiful morning. #KashmirSolidarityDay', 'Muhammad Jamil', '2020-02-05', 'upload/kashmir_1580884315.jpg', 1, '0000-00-00 00:00:00', '#'),
(26, '20200206_000026', 'Test Schedule Morning Classes Part I & II', 'Revision Test Schedule for all sections of Intermediate Morning Classes Pre Medical & Pre Engineering (1st yaer & 2nd year)', 'Vice Principal Office', '2020-02-06', 'upload/IMG-20200206-WA0009_1580988337.jpg', 1, '0000-00-00 00:00:00', '#'),
(27, '20200206_000027', 'Test Schedule Evening Classes Part I & II', 'Revision Test Schedule for all sections of Intermediate Evening Classes Pre Medical & Pre Engineering (1st yaer & 2nd year)', 'Vice Principal Office', '2020-02-06', 'upload/IMG-20200206-WA0008_1580988575.jpg', 1, '0000-00-00 00:00:00', '#'),
(28, '20200206_000028', 'Revision Tests ICS, General Science and I.Com', 'Revision Test Schedule for all sections of Intermediate Classes ICS, General Science & I.Com (1st yaer & 2nd year)', 'Vice Principal Office', '2020-02-06', 'upload/IMG-20200206-WA0012_1581002686.jpg', 1, '0000-00-00 00:00:00', '#'),
(29, '20200206_000029', 'Revision Tests Intermediate Arts Classes', 'Revision Test Schedule for all sections of Intermediate Arts Classes  (1st yaer & 2nd year)', 'Vice Principal Office', '2020-02-06', 'upload/IMG-20200206-WA0010_1581002944.jpg', 1, '0000-00-00 00:00:00', '#'),
(30, '20200206_000030', 'Important Notice', 'The following colleagues will collect the Award Lists of their respective sections.', 'Vice Principal Office', '2020-02-06', 'upload/IMG-20200206-WA0011_1581003037.jpg', 1, '0000-00-00 00:00:00', '#'),
(31, '20210602_000031', 'Editorial Board for College Magazine', 'Following editorial board has been setup for the College Magazine', 'M Sajjad', '2021-06-02', 'upload/scan0001_1622613381.jpg', 1, '0000-00-00 00:00:00', '#'),
(32, '20210608_000032', 'Notice For Intermediate classes', 'It is to inform all the students of Intermediate class that they should remain at home now and prepare for their upcoming exams of elective subjects.', 'M. Sajjad', '2021-06-08', 'upload/IMG-20210608-WA0046_1623167587.jpg', 1, '0000-00-00 00:00:00', '#'),
(36, '20210701_000036', 'Announcement for Inter Classes Teachers', 'It is informed to all inter classes teachers that please submit details of absent students to QAC before 02-07-2021 ', 'Principal Office', '2021-07-01', 'upload/2c9cb2df-fc71-46b7-bbf3-71dd8e669c4b_1625172787.jfif', 1, '0000-00-00 00:00:00', '#'),
(37, '20210925_000037', 'College Alumni Association Dinner', 'Get ready for annual dinner arranged by GC Alumni Association. Please bring yours passes and CNICs along with yourselves for verification purposes.', 'Principal Office', '2021-09-25', 'upload/poster-1_1632555645.png', 1, '0000-00-00 00:00:00', '#'),
(38, '20211018_000038', 'Important Notice', 'Notice for Class 2nd Year Session 2020-22 Absent Students', 'Admin Office', '2021-10-15', 'upload/1_1634524132.png', 1, '0000-00-00 00:00:00', '#'),
(39, '20211018_000039', 'Important Notice', 'Notice for Class 2nd Year Session 2020-22 Absent Students', 'Admin Office', '2021-10-18', 'upload/2_1634524259.png', 1, '0000-00-00 00:00:00', '#'),
(40, '20211020_000040', 'Admission Schedule for Intermediate Programs', 'Last date for admission is 30-10-2021. The schedule for displaying merit lists is mentioned on the notice.', 'Admin Office', '2021-10-20', 'upload/20211020_150700_1634724755.jpg', 1, '0000-00-00 00:00:00', '#'),
(41, '20220119_000041', 'Scholarships Announcement by College Alumni Association', 'It is informed to all BS students that the Alumni Association of the college has issued 25 scholarships for the talented/needy students. Please take a glance at the notice.', 'Director Alumni Operations', '2022-01-17', 'upload/WhatsApp Image 2022-01-15 at 13.42.49 (1)_1642566418.jpeg', 1, '0000-00-00 00:00:00', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `university_news`
--
ALTER TABLE `university_news`
  ADD PRIMARY KEY (`newsid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
