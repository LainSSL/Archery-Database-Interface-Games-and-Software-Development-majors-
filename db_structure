-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: ictstu-db1.cc.swin.edu.au
-- Generation Time: Apr 28, 2026 at 12:51 PM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
SET FOREIGN_KEY_CHECKS = 0;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s105914423_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `championships`
--

DROP TABLE IF EXISTS `championships`;
CREATE TABLE championships (
    championshipID   INT PRIMARY KEY AUTO_INCREMENT,  -- or SERIAL / IDENTITY depending on DB
    championshipName VARCHAR(100),
    championshipYear INT
);

--
-- Dumping data for table `championships`
--

TRUNCATE TABLE `championships`;
INSERT INTO `championships` (`championshipName`, `championshipYear`) VALUES
('National Archery Championships', 2023),
('State Indoor Archery Championship', 2023),
('Regional Outdoor Target Championship', 2023),
('Club Field Archery Championship', 2024),
('Junior Archery National Championship', 2024),
('Masters Archery Tournament', 2024),
('3D Archery Championship', 2023),
('Olympic Round Archery Championship', 2024),
('Compound Bow National Championship', 2023),
('Recurve Bow State Championship', 2024),
('Archery Club League Championship', 2024),
('Collegiate Archery Championship', 2023),
('Youth Archery Development Championship', 2024),
('Para-Archery National Championship', 2023),
('Traditional Bow Championship', 2024);

--
-- Table structure for table `archers`
--

DROP TABLE IF EXISTS `archers`;
CREATE TABLE `archers` (
  `archeryAustraliaID` varchar(20) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `defaultDivision` enum('B','C','R','L') NOT NULL,
  PRIMARY KEY (`archeryAustraliaID`),
  KEY `idx_archer_name` (`lastName`,`firstName`),
  KEY `idx_archer_dob` (`dateOfBirth`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `archers`
--
TRUNCATE TABLE `archers`;
INSERT INTO `archers` (`archeryAustraliaID`, `firstName`, `lastName`, `dateOfBirth`, `gender`, `defaultDivision`) VALUES
('AA001', 'Spike', 'Gronw', '1998-04-12', 'Male', 'R'),
('AA002', 'Bridget', 'Toner', '2001-09-03', 'Female', 'C'),
('AA003', 'Lelia', 'Pringour', '2003-06-21', 'Female', 'R'),
('AA004', 'Jarred', 'Dorbin', '1995-11-15', 'Male', 'C'),
('AA005', 'Sherrie', 'Charlet', '1988-02-09', 'Female', 'B'),
('AA006', 'Dyanna', 'Hehnke', '1990-07-30', 'Female', 'R'),
('AA007', 'Wolfgang', 'Noore', '1985-01-18', 'Male', 'L'),
('AA008', 'Brandon', 'Guerin', '1999-12-05', 'Male', 'R'),
('AA009', 'Clareta', 'Barnsdall', '2004-03-27', 'Female', 'C'),
('AA010', 'Cherida', 'Veque', '1997-08-14', 'Female', 'R'),
('AA011', 'Tannie', 'Dunniom', '2002-05-19', 'Male', 'B'),
('AA012', 'Demetris', 'McNeil', '1996-10-22', 'Male', 'C'),
('AA013', 'Martie', 'Lumsdaine', '2000-06-11', 'Female', 'R'),
('AA014', 'Brocky', 'Gogay', '1993-03-08', 'Male', 'L'),
('AA015', 'Adolph', 'Frodsham', '1987-12-29', 'Male', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE `classes` (
  `classID` varchar(10) NOT NULL,
  `ageGroupMin` int(11) DEFAULT NULL,
  `ageGroupMax` int(11) DEFAULT NULL,
  `gender` enum('Male','Female') NOT NULL,
  PRIMARY KEY (`classID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--
TRUNCATE TABLE `classes`;
INSERT INTO `classes` (`classID`, `ageGroupMin`, `ageGroupMax`, `gender`) VALUES
('F50+', 50, 59, 'Female'),
('F60+', 60, 69, 'Female'),
('F70+', 70, NULL, 'Female'),
('FOPEN', 21, NULL, 'Female'),
('FU14', 0, 13, 'Female'),
('FU16', 14, 15, 'Female'),
('FU18', 16, 17, 'Female'),
('FU21', 18, 20, 'Female'),
('M50+', 50, 59, 'Male'),
('M60+', 60, 69, 'Male'),
('M70+', 70, NULL, 'Male'),
('MOPEN', 21, NULL, 'Male'),
('MU14', 0, 13, 'Male'),
('MU16', 14, 15, 'Male'),
('MU18', 16, 17, 'Male'),
('MU21', 18, 20, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `competitions`
--

DROP TABLE IF EXISTS `competitions`;
CREATE TABLE `competitions` (
  `competitionID` int(11) NOT NULL AUTO_INCREMENT,
  `competitionName` varchar(255) NOT NULL,
  `dateCompleted` date NOT NULL,
  `roundID` int(11) NOT NULL,
  `classID` varchar(10) NOT NULL,
  `championshipID` int(11) DEFAULT NULL,
  PRIMARY KEY (`competitionID`),
  KEY `roundID` (`roundID`),
  KEY `classID` (`classID`),
  CONSTRAINT `competitions_ibfk_championship` FOREIGN KEY (`championshipID`) REFERENCES `championships` (`championshipID`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competitions`
--
TRUNCATE TABLE `competitions`;
INSERT INTO `competitions` (`competitionName`, `dateCompleted`,`roundID`, `classID`, `championshipID`) VALUES
-- ChampionshipID 1 (2023)
('WA90 Open Championship', '2023-01-05',1, 'MOPEN', 1),
('WA70 Open Championship', '2023-01-12',2, 'FOPEN', 1),
('WA60 Invitational', '2023-01-20',3, 'MU21', 1),

-- ChampionshipID 2 (2023)
('AA50 Championship', '2023-02-01', 4, 'FU21', 2),
('AA40 Classic', '2023-02-10',5, 'M50+', 2),

-- ChampionshipID 3 (2023)
('Long Sydney Tournament', '2023-02-25', 6, 'F50+', 3),

-- ChampionshipID 4 (2024)
('Sydney Open', '2024-03-05', 7, 'M60+', 4),
('Long Brisbane Challenge', '2024-03-20', 8, 'F60+', 4),

-- ChampionshipID 5 (2024)
('Brisbane Ranking Event', '2024-04-01', 9, 'M70+', 5),
('Adelaide Cup', '2024-04-15', 10, 'F70+', 5),

-- ChampionshipID 6 (2024)
('Short Adelaide Shoot', '2024-05-01', 11, 'MU18', 6),

-- ChampionshipID 7 (2024)
('Hobart Junior Event', '2024-05-20', 12, 'FU18', 7),

-- ChampionshipID 8 (2024)
('Perth Championship', '2024-06-05',13, 'MU16', 8),

-- No championship (NULL)
('Darwin Classic', '2024-07-15', 1, 'MOPEN', NULL);

-- --------------------------------------------------------


--
-- Table structure for table `competitions_entry`
--

DROP TABLE IF EXISTS `competitions_entry`;
CREATE TABLE `competitions_entry` (
  `entryID` int(11) NOT NULL AUTO_INCREMENT,
  `archerID` varchar(20) NOT NULL,
  `competitionID` int(11) NOT NULL,
  `totalScore` int(11) NOT NULL DEFAULT '0',
  `status` enum('Pending','Approved','Rejected') DEFAULT 'Pending',
  `notes` text,
  PRIMARY KEY (`entryID`),
  UNIQUE KEY `uk_archer_comp` (`archerID`,`competitionID`),
  KEY `competitionID` (`competitionID`),
  KEY `idx_comp_entry_archer` (`archerID`,`competitionID`),
  KEY `idx_comp_entry_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competitions_entry`
--
TRUNCATE TABLE `competitions_entry`;
INSERT INTO `competitions_entry` (`archerID`, `competitionID`, `totalScore`, `status`, `notes`) VALUES
('AA001', 1, 1320, 'Approved', 'Strong finish'),
('AA002', 2, 1285, 'Approved', 'Great Consistency'),
('AA003', 3, 1340, 'Approved', 'Strong finish'),
('AA004', 4, 1295, 'Approved', 'Great start'),
('AA005', 5, 1250, 'Approved', 'Solid performance'),
('AA006', 6, 1310, 'Approved', 'Personal record'),
('AA007', 7, 870, 'Pending', 'Waiting for score confirmation'),
('AA008', 8, 1335, 'Approved', 'Quite consistent'),
('AA009', 9, 860, 'Approved', 'Consistant'),
('AA010', 10, 845, 'Approved', 'Great Performance'),
('AA011', 11, 690, 'Pending', 'Waiting for score confirmation'),
('AA012', 12, 710, 'Approved', 'Great performance'),
('AA013', 13, 880, 'Approved', 'Strong finish'),
('AA014', 1, 1290, 'Approved', 'Consistant'),
('AA015', 2, 1265, 'Approved', 'Stong finish'),
-- Additional approved entries for competition comparison and leaderboard queries
('AA004', 1, 1315, 'Approved', 'Additional comparison score'),
('AA007', 1, 1275, 'Approved', 'Additional comparison score'),
('AA008', 1, 1365, 'Approved', 'Additional comparison score'),
('AA012', 1, 1305, 'Approved', 'Additional comparison score'),
('AA015', 1, 1240, 'Approved', 'Additional comparison score');

-- --------------------------------------------------------

--
-- Table structure for table `competition_round_ranges`
--

DROP TABLE IF EXISTS `competition_round_ranges`;
CREATE TABLE `competition_round_ranges` (
  `competitionRecordedRangeID` int(11) NOT NULL AUTO_INCREMENT,
  `entryID` int(11) NOT NULL,
  `rangePositionNumber` int(11) NOT NULL,
  PRIMARY KEY (`competitionRecordedRangeID`),
  UNIQUE KEY `uk_comp_position` (`entryID`,`rangePositionNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competition_round_ranges`
--
TRUNCATE TABLE `competition_round_ranges`;
INSERT INTO `competition_round_ranges` (`entryID`, `rangePositionNumber`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `competition_range_ends`
--

DROP TABLE IF EXISTS `competition_range_ends`;
CREATE TABLE `competition_range_ends` (
  `competitionRecordedRangeID` int(11) NOT NULL,
  `endID` int(11) NOT NULL,
  `endPositionNumber` int(11) NOT NULL,
  `rangeID` int(11) NOT NULL,
  PRIMARY KEY (`competitionRecordedRangeID`,`endID`),
  UNIQUE KEY `uk_comp_range_end_position` (`competitionRecordedRangeID`,`endPositionNumber`),
  KEY `endID` (`endID`),
  KEY `rangeID` (`rangeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competition_range_ends`
--
TRUNCATE TABLE `competition_range_ends`;
INSERT INTO `competition_range_ends` (`competitionRecordedRangeID`, `endID`, `endPositionNumber`, `rangeID`) VALUES
(1, 1, 1, 1),
(1, 2, 2, 1),
(1, 3, 3, 1),
(2, 10, 4, 2),
(2, 11, 5, 2),
(2, 12, 6, 2),
(3, 13, 1, 3),
(3, 14, 2, 3),
(3, 15, 3, 3),
(4, 1, 1, 4),
(4, 2, 2, 4),
(4, 3, 3, 4),
(5, 4, 1, 5),
(5, 5, 2, 5),
(5, 6, 3, 5),
(6, 7, 1, 6),
(6, 8, 2, 6),
(6, 9, 3, 6),
(7, 10, 1, 7),
(7, 11, 2, 7),
(7, 12, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `ends`
--

DROP TABLE IF EXISTS `ends`;
CREATE TABLE `ends` (
  `endID` int(11) NOT NULL AUTO_INCREMENT,
  `arrow1` int(11) NOT NULL,
  `arrow2` int(11) NOT NULL,
  `arrow3` int(11) NOT NULL,
  `arrow4` int(11) NOT NULL,
  `arrow5` int(11) NOT NULL,
  `arrow6` int(11) NOT NULL,
  `bullseyeCount` int(11) DEFAULT '0',
  PRIMARY KEY (`endID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ends`
--
TRUNCATE TABLE `ends`;
INSERT INTO `ends` (`arrow1`, `arrow2`, `arrow3`, `arrow4`, `arrow5`, `arrow6`, `bullseyeCount`) VALUES
(8, 8, 9, 9, 10, 10, 2),
(10, 7, 9, 8, 8, 9, 1),
(9, 9, 8, 10, 10, 10, 3),
(9, 9, 8, 8, 7, 7, 0),
(10, 10, 9, 8, 8, 8, 2),
(9, 9, 9, 8, 7, 6, 0),
(10, 10, 10, 10, 9, 8, 4),
(8, 8, 8, 7, 7, 6, 0),
(10, 9, 9, 9, 8, 8, 1),
(10, 10, 9, 9, 9, 9, 2),
(9, 8, 8, 8, 7, 7, 0),
(10, 10, 10, 9, 8, 8, 3),
(7, 9, 8, 8, 8, 9, 0),
(10, 9, 9, 8, 8, 8, 1),
(7, 8, 9, 9, 10, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `individual_recorded_rounds`
--

DROP TABLE IF EXISTS `individual_recorded_rounds`;
CREATE TABLE `individual_recorded_rounds` (
  `recordedRoundID` int(11) NOT NULL AUTO_INCREMENT,
  `archerID` varchar(20) NOT NULL,
  `roundID` int(11) NOT NULL,
  `dateCompleted` date NOT NULL,
  `totalScore` int(11) NOT NULL DEFAULT '0',
  `status` enum('Pending','Approved','Rejected') DEFAULT 'Pending',
  `notes` text,
  PRIMARY KEY (`recordedRoundID`),
  KEY `roundID` (`roundID`),
  KEY `idx_individual_archer_date` (`archerID`,`dateCompleted`),
  KEY `idx_individual_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `individual_recorded_rounds`
--
TRUNCATE TABLE `individual_recorded_rounds`;
INSERT INTO `individual_recorded_rounds` (`archerID`, `roundID`, `dateCompleted`, `totalScore`, `status`, `notes`) VALUES
('AA001', 1, '2025-10-15', 1400, 'Approved', 'Great performance!'),
('AA002', 2, '2025-11-20', 1350, 'Approved', 'Well done!'),
('AA003', 3, '2025-12-05', 680, 'Pending', 'Score under review.'),
('AA004', 4, '2025-10-30', 850, 'Rejected', 'Score does not meet criteria.'),
('AA005', 5, '2025-11-10', 1420, 'Approved', 'Excellent shot placement.'),
('AA006', 6, '2025-12-01', 700, 'Pending', 'Awaiting further evaluation.'),
('AA007', 7, '2025-10-25', 880, 'Approved', 'Strong start but needs improvement.'),
('AA008', 8, '2025-11-15', 640, 'Approved', 'Strong start to the season.'),
('AA009', 9, '2025-12-10', 750, 'Pending', 'Awaiting score finalization.'),
('AA010', 10, '2025-10-20', 480, 'Pending', 'Needs improvement.'),
('AA011', 11, '2025-11-05', 860, 'Approved', 'Decent performance.'),
('AA012', 12, '2025-12-15', 600, 'Approved', 'Decent performance.'),
('AA013', 1, '2025-10-28', 1200, 'Pending', 'Awaiting further evaluation.'),
('AA014', 2, '2025-11-18', 1150, 'Approved', 'Consistent performance.'),
('AA015', 3, '2025-12-20', 420, 'Approved', 'Decent performance.');

-- --------------------------------------------------------

--
-- Table structure for table `individual_round_ranges`
--

DROP TABLE IF EXISTS `individual_round_ranges`;
CREATE TABLE `individual_round_ranges` (
  `individualRecordedRangeID` int(11) NOT NULL AUTO_INCREMENT,
  `recordedRoundID` int(11) NOT NULL,
  `rangePositionNumber` int(11) NOT NULL,
  PRIMARY KEY (`individualRecordedRangeID`),
  KEY `recordedRoundID` (`recordedRoundID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `individual_round_ranges`
--

TRUNCATE TABLE `individual_round_ranges`;
INSERT INTO `individual_round_ranges` (`recordedRoundID`, `rangePositionNumber`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `individual_range_ends`
--

DROP TABLE IF EXISTS `individual_range_ends`;
CREATE TABLE `individual_range_ends` (
  `individualRecordedRangeID` int(11) NOT NULL,
  `endID` int(11) NOT NULL,
  `endPositionNumber` int(11) NOT NULL,
  `rangeID` int(11) NOT NULL,
  PRIMARY KEY (`individualRecordedRangeID`,`endID`),
  UNIQUE KEY `uk_indiv_range_end_position` (`individualRecordedRangeID`,`endPositionNumber`),
  KEY `endID` (`endID`),
  KEY `rangeID` (`rangeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
/*INSERT INTO `individual_range_ends` (`individualRecordedRangeID`, `endID`, `endPositionNumber`, `rangeID`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 3, 1, 3),
(4, 4, 1, 4),
(5, 5, 1, 5),
(6, 6, 1, 6),
(7, 7, 1, 7),
(8, 8, 1, 8),
(9, 9, 1, 9),
(10, 10, 1, 10),
(11, 11, 1, 11),
(12, 12, 1, 12),
(13, 13, 1, 13),
(14, 14, 1, 14),
(15, 15, 2, 14);*/

INSERT INTO `individual_range_ends` (`individualRecordedRangeID`, `endID`, `endPositionNumber`, `rangeID`) VALUES
(1, 1, 1, 7),
(2, 2, 1, 6),
(3, 3, 1, 5),
(4, 4, 1, 4),
(5, 5, 1, 3),
(6, 6, 1, 7),
(7, 7, 1, 6),
(8, 8, 1, 5),
(9, 9, 1, 4),
(10, 10, 1, 3),
(11, 11, 1, 2),
(12, 12, 1, 1),
(13, 13, 1, 2),
(14, 14, 1, 1),
(15, 15, 1, 3);
--
-- Table structure for table `ranges`
--

DROP TABLE IF EXISTS `ranges`;
CREATE TABLE `ranges` (
  `rangeID` int(11) NOT NULL AUTO_INCREMENT,
  `distance` enum('20','30','40','50','60','70','90') NOT NULL,
  `endCount` int(11) NOT NULL,
  `targetFace` enum('80','122') NOT NULL,
  PRIMARY KEY (`rangeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ranges`
--
TRUNCATE TABLE `ranges`;
INSERT INTO `ranges` (`distance`, `endCount`, `targetFace`) VALUES
('20', 6, '80'),
('30', 6, '80'),
('40', 6, '122'),
('50', 6, '122'),
('60', 6, '122'),
('70', 6, '122'),
('90', 6, '122');

-- --------------------------------------------------------

--
-- Table structure for table `rounds`
--

DROP TABLE IF EXISTS `rounds`;
CREATE TABLE `rounds` (
  `roundID` int(11) NOT NULL AUTO_INCREMENT,
  `roundName` varchar(100) NOT NULL,
  `arrowCount` int(11) NOT NULL,
  `maxScore` int(11) NOT NULL,
  `activeStartDate` date NOT NULL,
  `activeEndDate` date DEFAULT NULL,
  PRIMARY KEY (`roundID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rounds`
--
TRUNCATE TABLE `rounds`;
INSERT INTO `rounds` (`roundName`, `arrowCount`, `maxScore`, `activeStartDate`, `activeEndDate`) VALUES
('WA90/1440', 144, 1440, '2025-01-01', NULL),
('WA70/1440', 144, 1440, '2025-01-01', NULL),
('WA60/1440', 144, 1440, '2025-01-01', NULL),
('AA50/1440', 144, 1440, '2025-01-01', NULL),
('AA40/1440', 144, 1440, '2025-01-01', NULL),
('Long Sydney', 120, 1200, '2025-01-01', NULL),
('Sydney', 120, 1200, '2025-01-01', NULL),
('Long Brisbane', 120, 1200, '2025-01-01', NULL),
('Brisbane', 120, 1200, '2025-01-01', NULL),
('Adelaide', 120, 1200, '2025-01-01', NULL),
('Short Adelaide', 120, 1200, '2025-01-01', NULL),
('Hobart', 90, 900, '2025-01-01', NULL),
('Perth', 90, 900, '2025-01-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `round_ranges`
--

DROP TABLE IF EXISTS `round_ranges`;
CREATE TABLE `round_ranges` (
  `roundID` int(11) NOT NULL,
  `rangeID` int(11) NOT NULL,
  `rangeSequence` int(11) NOT NULL,
  PRIMARY KEY (`roundID`,`rangeSequence`),
  KEY `rangeID` (`rangeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `round_ranges`
--
TRUNCATE TABLE `round_ranges`;
INSERT INTO `round_ranges` (`roundID`, `rangeID`, `rangeSequence`) VALUES
(1, 7, 1),
(1, 6, 2),
(1, 5, 3),
(2, 7, 1),
(2, 6, 2),
(2, 5, 3),
(3, 5, 1),
(3, 4, 2),
(3, 3, 3),
(4, 7, 1),
(4, 6, 2),
(4, 5, 3),
(5, 7, 1),
(5, 6, 2),
(5, 5, 3),
(6, 7, 1),
(6, 6, 2),
(6, 1, 3),
(7, 7, 1),
(7, 6, 2),
(7, 5, 3),
(8, 7, 1),
(8, 6, 2),
(8, 1, 3),
(9, 7, 1),
(9, 6, 2),
(9, 5, 3),
(10, 7, 1),
(10, 6, 2),
(10, 1, 3),
(11, 7, 1),
(11, 6, 2),
(11, 5, 3),
(12, 7, 1),
(12, 6, 2),
(12, 5, 3),
(13, 7, 1),
(13, 6, 2),
(13, 5, 3);

SET FOREIGN_KEY_CHECKS = 1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `competitions`
--
ALTER TABLE `competitions`
  ADD CONSTRAINT `competitions_ibfk_1` FOREIGN KEY (`roundID`) REFERENCES `rounds` (`roundID`),
  ADD CONSTRAINT `competitions_ibfk_2` FOREIGN KEY (`classID`) REFERENCES `classes` (`classID`);

--
-- Constraints for table `competitions_entry`
--
ALTER TABLE `competitions_entry`
  ADD CONSTRAINT `competitions_entry_ibfk_1` FOREIGN KEY (`archerID`) REFERENCES `archers` (`archeryAustraliaID`),
  ADD CONSTRAINT `competitions_entry_ibfk_2` FOREIGN KEY (`competitionID`) REFERENCES `competitions` (`competitionID`);

--
-- Constraints for table `competition_round_ranges`
--
ALTER TABLE `competition_round_ranges`
  ADD CONSTRAINT `competition_round_ranges_ibfk_1` FOREIGN KEY (`entryID`) REFERENCES `competitions_entry` (`entryID`);

--
-- Constraints for table `competition_range_ends`
--
ALTER TABLE `competition_range_ends`
  ADD CONSTRAINT `comp_range_ends_ibfk_1` FOREIGN KEY (`competitionRecordedRangeID`) REFERENCES `competition_round_ranges` (`competitionRecordedRangeID`),
  ADD CONSTRAINT `comp_range_ends_ibfk_2` FOREIGN KEY (`endID`) REFERENCES `ends` (`endID`),
  ADD CONSTRAINT `comp_range_ends_ibfk_3` FOREIGN KEY (`rangeID`) REFERENCES `ranges` (`rangeID`);

--
-- Constraints for table `individual_recorded_rounds`
--
ALTER TABLE `individual_recorded_rounds`
  ADD CONSTRAINT `individual_recorded_rounds_ibfk_1` FOREIGN KEY (`archerID`) REFERENCES `archers` (`archeryAustraliaID`),
  ADD CONSTRAINT `individual_recorded_rounds_ibfk_2` FOREIGN KEY (`roundID`) REFERENCES `rounds` (`roundID`);

--
-- Constraints for table `individual_round_ranges`
--
ALTER TABLE `individual_round_ranges`
  ADD CONSTRAINT `individual_round_ranges_ibfk_1` FOREIGN KEY (`recordedRoundID`) REFERENCES `individual_recorded_rounds` (`recordedRoundID`);

--
-- Constraints for table `individual_range_ends`
--
ALTER TABLE `individual_range_ends`
  ADD CONSTRAINT `indiv_range_ends_ibfk_1` FOREIGN KEY (`individualRecordedRangeID`) REFERENCES `individual_round_ranges` (`individualRecordedRangeID`),
  ADD CONSTRAINT `indiv_range_ends_ibfk_2` FOREIGN KEY (`endID`) REFERENCES `ends` (`endID`),
  ADD CONSTRAINT `indiv_range_ends_ibfk_3` FOREIGN KEY (`rangeID`) REFERENCES `ranges` (`rangeID`);

--
-- Constraints for table `round_ranges`
--
ALTER TABLE `round_ranges`
  ADD CONSTRAINT `round_ranges_ibfk_1` FOREIGN KEY (`roundID`) REFERENCES `rounds` (`roundID`),
  ADD CONSTRAINT `round_ranges_ibfk_2` FOREIGN KEY (`rangeID`) REFERENCES `ranges` (`rangeID`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
