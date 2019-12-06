-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 08:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ifesokan`
--

-- --------------------------------------------------------

--
-- Table structure for table `minutes`
--

CREATE TABLE `minutes` (
  `Id` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Content` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minutes`
--

INSERT INTO `minutes` (`Id`, `Date`, `Content`) VALUES
(1, '2019-11-22', 'this is a test minute'),
(2, '2019-11-22', 'IFESOKAN COMMUNITY DEVELOPMENT ASSOCIATION MINUTES OF MEETING HELD ON THE 27th July, 2019\r\nAgenda\r\nâ€¢	Hand Over of Ifesokan CDAâ€™s properties from the defunct EXCOs to the newly elected EXCOs\r\nâ€¢	Any Other Business (AOB) \r\n\r\nDiscussions, Comments And Decisions\r\nThe meeting began by 9:12 with an opening prayer that was anchored by Mrs. Ashore. Then the chairman of the electoral committee, Mr. Akintunde opened the meeting officially. He tasked the general house on unity and harmony having conducted the just concluded general election\r\n\r\nChairmanâ€™s Opening Address/ Remark\r\nThe newly elected chairman, Mr. Adesanya officially welcomed all newly elected EXCOs and members of the Ifesoakan CDA to the inaugural CDA meeting under his stewardship.\r\n\r\nMatters Arising \r\nThe following major matters was discussed at the General House, they included:\r\nA.	Change of Signatories to the Ifesokan Bank Account\r\nThe letter of change of signatories was read  in the meeting by the secretary. It was decided that all properties, monies and documents in the possession of the defunct EXCO be handed over in accordance with the laid-down law\r\n\r\nB.	The Newly Proposed Committee\r\nThe chairman informed the General House of the newly proposed committee and the head of the various committees, they included:\r\nâ€¢	General Purpose Committee 				Engineer Korede	\r\nâ€¢	The Finance Committee 				Mr. Ogar\r\nâ€¢	The Welfare Committee 				Mrs. Ashore\r\nâ€¢	The Education Committee 				Mr. Adesanya\r\nâ€¢	The Health Committee 					Mrs Ashore\r\nâ€¢	Developmental Committee/Electrical Committee	Mr.Dada/Mr.Ahmed\r\nHaving highlighted the committee, the chairman requested members of the CDA to voluntary populate the various committee that has been proposed. The secretary highlighted the roles that the various committee will play.\r\nFurther committees were suggested by members of the house such as: quality and price control committee,  \r\n\r\nC.	 Outreach Health Centre\r\nMrs. Shodeke brought to the notice of the General House an outreach health centre that is into immunization of children below the age of five (5). She suggested that Ifesokan CDA work out modalities on how best to partner the outreach centre. The house agreed that the proposed health committee members be responsible for working out modalities on how best to the partner with the outreach centre.\r\nIt was also agreed that Mrs. Shodeke should be included as a member of the proposed health committee.\r\n\r\n\r\n\r\nD.	Financing of the CDA Projects\r\nThe need to address the current challenge of inadequate finance to support the numerous projects of the CDA was also up for discussion. Mrs. Ajuwapo suggested that the house design a card that will be given to every community member to ensure that we track their contribution to finance the CDA. The position was also supported by Mr. Ogar. Also discussed was the need to set up a task force that will enforce the compliance of members \r\ncontributing to financing the project.\r\n\r\nE.	Set-Up of Ifesokan  Co-operative Society \r\nThe need to set up a cooperative was also discussed in the General House. Mrs. Ashore explained the need to have a functional cooperative that is well funded by members of the CDA capable of disbursing loans to members who are in need of finance. The General House was yet to decide on the modalities of setting up of the cooperatives and how best it will function\r\n\r\nAny Other Business (AOB)\r\nâ€¢	Engineer Korede requested we change the time of the meeting of CDA to allow for convenience. He suggested we put it to a vote\r\nâ€¢	The General House observed a minute of silence for Alpha Adeosun who lost his dearly departed mother.\r\nFinance\r\nThe sum total of one thousand seven hundred naira (#1700) was realised from the last meeting as sitting allowance.\r\nAdjournment\r\nThe motion for adjournment was moved by Baba Akingbaso and seconded by Prince Kazeem. Closing Prayer was conducted by Alpha Adeosun\r\n\r\nTime: 11:07\r\n\r\n\r\n______________								_____________\r\nMr. Adesanya	O.E							Mr. Dada S.O\r\nChairman									Secretary\r\n08020304124									08022661381\r\n\r\n\r\n\r\n'),
(3, '2019-11-04', 'IFESOKAN COMMUNITY DEVELOPMENT ASSOCIATION MINUTES OF MEETING HELD ON THE 27th July, 2019\r\nAgenda\r\nâ€¢	Hand Over of Ifesokan CDAâ€™s properties from the defunct EXCOs to the newly elected EXCOs\r\nâ€¢	Any Other Business (AOB) \r\n\r\nDiscussions, Comments And Decisions\r\nThe meeting began by 9:12 with an opening prayer that was anchored by Mrs. Ashore. Then the chairman of the electoral committee, Mr. Akintunde opened the meeting officially. He tasked the general house on unity and harmony having conducted the just concluded general election\r\n\r\nChairmanâ€™s Opening Address/ Remark\r\nThe newly elected chairman, Mr. Adesanya officially welcomed all newly elected EXCOs and members of the Ifesoakan CDA to the inaugural CDA meeting under his stewardship.\r\n\r\nMatters Arising \r\nThe following major matters was discussed at the General House, they included:\r\nA.	Change of Signatories to the Ifesokan Bank Account\r\nThe letter of change of signatories was read  in the meeting by the secretary. It was decided that all properties, monies and documents in the possession of the defunct EXCO be handed over in accordance with the laid-down law\r\n\r\nB.	The Newly Proposed Committee\r\nThe chairman informed the General House of the newly proposed committee and the head of the various committees, they included:\r\nâ€¢	General Purpose Committee 				Engineer Korede	\r\nâ€¢	The Finance Committee 				Mr. Ogar\r\nâ€¢	The Welfare Committee 				Mrs. Ashore\r\nâ€¢	The Education Committee 				Mr. Adesanya\r\nâ€¢	The Health Committee 					Mrs Ashore\r\nâ€¢	Developmental Committee/Electrical Committee	Mr.Dada/Mr.Ahmed\r\nHaving highlighted the committee, the chairman requested members of the CDA to voluntary populate the various committee that has been proposed. The secretary highlighted the roles that the various committee will play.\r\nFurther committees were suggested by members of the house such as: quality and price control committee,  \r\n\r\nC.	 Outreach Health Centre\r\nMrs. Shodeke brought to the notice of the General House an outreach health centre that is into immunization of children below the age of five (5). She suggested that Ifesokan CDA work out modalities on how best to partner the outreach centre. The house agreed that the proposed health committee members be responsible for working out modalities on how best to the partner with the outreach centre.\r\nIt was also agreed that Mrs. Shodeke should be included as a member of the proposed health committee.\r\n\r\n\r\n\r\nD.	Financing of the CDA Projects\r\nThe need to address the current challenge of inadequate finance to support the numerous projects of the CDA was also up for discussion. Mrs. Ajuwapo suggested that the house design a card that will be given to every community member to ensure that we track their contribution to finance the CDA. The position was also supported by Mr. Ogar. Also discussed was the need to set up a task force that will enforce the compliance of members \r\ncontributing to financing the project.\r\n\r\nE.	Set-Up of Ifesokan  Co-operative Society \r\nThe need to set up a cooperative was also discussed in the General House. Mrs. Ashore explained the need to have a functional cooperative that is well funded by members of the CDA capable of disbursing loans to members who are in need of finance. The General House was yet to decide on the modalities of setting up of the cooperatives and how best it will function\r\n\r\nAny Other Business (AOB)\r\nâ€¢	Engineer Korede requested we change the time of the meeting of CDA to allow for convenience. He suggested we put it to a vote\r\nâ€¢	The General House observed a minute of silence for Alpha Adeosun who lost his dearly departed mother.\r\nFinance\r\nThe sum total of one thousand seven hundred naira (#1700) was realised from the last meeting as sitting allowance.\r\nAdjournment\r\nThe motion for adjournment was moved by Baba Akingbaso and seconded by Prince Kazeem. Closing Prayer was conducted by Alpha Adeosun\r\n\r\nTime: 11:07\r\n\r\n\r\n______________								_____________\r\nMr. Adesanya	O.E							Mr. Dada S.O\r\nChairman									Secretary\r\n08020304124									08022661381\r\n\r\n\r\n\r\n'),
(4, '2019-11-04', 'IFESOKAN COMMUNITY DEVELOPMENT ASSOCIATION MINUTES OF MEETING HELD ON THE 27th July, 2019\r\nAgenda\r\nâ€¢	Hand Over of Ifesokan CDAâ€™s properties from the defunct EXCOs to the newly elected EXCOs\r\nâ€¢	Any Other Business (AOB) \r\n\r\nDiscussions, Comments And Decisions\r\nThe meeting began by 9:12 with an opening prayer that was anchored by Mrs. Ashore. Then the chairman of the electoral committee, Mr. Akintunde opened the meeting officially. He tasked the general house on unity and harmony having conducted the just concluded general election\r\n\r\nChairmanâ€™s Opening Address/ Remark\r\nThe newly elected chairman, Mr. Adesanya officially welcomed all newly elected EXCOs and members of the Ifesoakan CDA to the inaugural CDA meeting under his stewardship.\r\n\r\nMatters Arising \r\nThe following major matters was discussed at the General House, they included:\r\nA.	Change of Signatories to the Ifesokan Bank Account\r\nThe letter of change of signatories was read  in the meeting by the secretary. It was decided that all properties, monies and documents in the possession of the defunct EXCO be handed over in accordance with the laid-down law\r\n\r\nB.	The Newly Proposed Committee\r\nThe chairman informed the General House of the newly proposed committee and the head of the various committees, they included:\r\nâ€¢	General Purpose Committee 				Engineer Korede	\r\nâ€¢	The Finance Committee 				Mr. Ogar\r\nâ€¢	The Welfare Committee 				Mrs. Ashore\r\nâ€¢	The Education Committee 				Mr. Adesanya\r\nâ€¢	The Health Committee 					Mrs Ashore\r\nâ€¢	Developmental Committee/Electrical Committee	Mr.Dada/Mr.Ahmed\r\nHaving highlighted the committee, the chairman requested members of the CDA to voluntary populate the various committee that has been proposed. The secretary highlighted the roles that the various committee will play.\r\nFurther committees were suggested by members of the house such as: quality and price control committee,  \r\n\r\nC.	 Outreach Health Centre\r\nMrs. Shodeke brought to the notice of the General House an outreach health centre that is into immunization of children below the age of five (5). She suggested that Ifesokan CDA work out modalities on how best to partner the outreach centre. The house agreed that the proposed health committee members be responsible for working out modalities on how best to the partner with the outreach centre.\r\nIt was also agreed that Mrs. Shodeke should be included as a member of the proposed health committee.\r\n\r\n\r\n\r\nD.	Financing of the CDA Projects\r\nThe need to address the current challenge of inadequate finance to support the numerous projects of the CDA was also up for discussion. Mrs. Ajuwapo suggested that the house design a card that will be given to every community member to ensure that we track their contribution to finance the CDA. The position was also supported by Mr. Ogar. Also discussed was the need to set up a task force that will enforce the compliance of members \r\ncontributing to financing the project.\r\n\r\nE.	Set-Up of Ifesokan  Co-operative Society \r\nThe need to set up a cooperative was also discussed in the General House. Mrs. Ashore explained the need to have a functional cooperative that is well funded by members of the CDA capable of disbursing loans to members who are in need of finance. The General House was yet to decide on the modalities of setting up of the cooperatives and how best it will function\r\n\r\nAny Other Business (AOB)\r\nâ€¢	Engineer Korede requested we change the time of the meeting of CDA to allow for convenience. He suggested we put it to a vote\r\nâ€¢	The General House observed a minute of silence for Alpha Adeosun who lost his dearly departed mother.\r\nFinance\r\nThe sum total of one thousand seven hundred naira (#1700) was realised from the last meeting as sitting allowance.\r\nAdjournment\r\nThe motion for adjournment was moved by Baba Akingbaso and seconded by Prince Kazeem. Closing Prayer was conducted by Alpha Adeosun\r\n\r\nTime: 11:07\r\n\r\n\r\n______________								_____________\r\nMr. Adesanya	O.E							Mr. Dada S.O\r\nChairman									Secretary\r\n08020304124									08022661381\r\n\r\n\r\n\r\n'),
(5, '2019-11-29', ''),
(6, '', ''),
(7, '2019-11-15', '3r422gg'),
(8, '2019-11-02', ''),
(9, '', ''),
(10, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(20) NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ZoneCode` varchar(2) NOT NULL,
  `NextofKin` varchar(200) NOT NULL,
  `Occupation` varchar(100) NOT NULL,
  `MaritalStatus` varchar(10) NOT NULL,
  `Membership` varchar(40) NOT NULL,
  `title` varchar(20) NOT NULL,
  `approval` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Firstname`, `Lastname`, `email`, `mobile`, `Username`, `Password`, `Gender`, `Address`, `ZoneCode`, `NextofKin`, `Occupation`, `MaritalStatus`, `Membership`, `title`, `approval`) VALUES
('10111', 'Tajudeen', 'Awoniyi', 'george@yahoo.com', '09088877271', 'Tajudeen', '123', 'Male', 'Plot 2 fodal road three ifesoakan', '1', 'Mrs. Chidinma Oramah', 'Electrician', 'Single', 'Vice Chairman', 'Alhaji', 1),
('1234', 'Daniel', 'Alome', 'george@yahoo.com', '09088877271', 'Daniel', '123', 'Male', 'Plot 2 fodal road three ifesoakan', '4', 'Mrs. Chidinma Oramah', 'IT Support', 'Single', 'Secretary', 'Barrister', 1),
('22345', 'Nkem', 'Oramah', 'chukky45@yahoo.com', '090753522', 'nkem', '123', 'Female', 'Plot 16 Fodal Road One Ifesokan', '3', 'Mrs. Chidinma Belonwu', 'Doctor', 'Married', 'Member', 'Dr.', 1),
('55454', 'Stanley', 'Modebe', 'loembardi@yahoo.com', '0907724141', 'dan', '123', 'Male', 'Plot 16 Fodal Road One Ifesokan', '4', 'Miss Temitope Muibat', 'Wholesaler', 'Single', 'Member', 'Engr', 1),
('8542', 'Henry', 'Igwebuike', 'george@yahoo.com', '09052528823', 'dan', '123456', 'Male', 'Plot 16 Fodal Road One Ifesokan', '4', 'Mrs. Chidinma Belonwu', 'Lecturer', 'Married', 'Member', 'Professor', 0),
('5453', 'Ebuka', 'Chukwueke', 'chukky45@yahoo.com', '09012525042', 'ebuka', '123', 'Male', 'Plot 16 Fodal Road One Ifesokan', '4', 'Mrs. Chidinma Oramah', 'Doctor', 'Married', 'Chairman', 'Barrister', 1),
('4343', 'Mayowa', 'Adebitan', 'omololo@yahoo.com', '0806264823', 'Mayowa', '123', 'Male', 'Plot 16 Fodal Road One Ifesokan', '2', 'Miss Charlie Wellignton', 'Wholesaler', 'Married', 'Member', 'Engr', 0),
('6544', 'Temitope', 'Amao', 'chukky45@yahoo.com', '0906752674', 'temitope', '123', 'Female', 'Plot 16 Fodal Road One Ifesokan', '3', 'Mrs. Chidinma Oramah', 'Electrician', 'Married', 'Member', 'Alhaja', 0),
('4566', 'Gbenga', 'Adegbenro', 'chukky45@yahoo.com', '0908756322', 'Gbenga', '123', 'Male', 'Plot 16 Fodal Road One Ifesokan', '1', 'Mrs. Chidinma Oramah', 'IT Support', 'Married', 'Member', 'Professor', 0),
('7777', 'Goffery', 'Schopp', 'eanetoh@gmail.com', '0908876543', 'Emeka', '123', 'Male', '12 abak road muminey street, lagos', '4', 'Mrs. Chidinma Oramah', 'Bus driver', 'Married', 'Member', 'Mr.', 0),
('5353', 'Dare', 'Emmanuel', 'dareosun@yahoo.com', '090754191210', 'dare04', '123', 'Male', '12 abak road muminey street, lagos', '4', 'Mrs. Chidinma Oramah', 'Clerk', 'Married', 'Member', 'Dr.', 0),
('1009', 'Amos', 'Azubuike', 'hive@yahoo.com', '0905562512', 'Amos', '123', 'Male', 'Plot 2 fodal road three ifesoakan', '1', 'Mrs. Chidinma Oramah', 'Police Officer', 'Married', 'Member', 'Sergeant', 1),
('', '', 'Gbenga', '', '', '', '123', '', '', '', '', '', '', '', '', 0),
('9090', 'Abdul', 'Idris', 'hive@yahoo.com', '08907765457', 'Abdul', '123', 'Male', 'no 15 ishola street, ', '3', 'Mrs. Abdul Idris', 'IT Support', 'Married', 'Member', 'Alhaji', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `minutes`
--
ALTER TABLE `minutes`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `minutes`
--
ALTER TABLE `minutes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

