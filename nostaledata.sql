-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 02:39 PM
-- Server version: 5.5.55-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nostaledata`
--
CREATE DATABASE IF NOT EXISTS `nostaledata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nostaledata`;

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
`ID` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `cardnumber` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  `upgrade` int(11) DEFAULT NULL,
  `reinforcement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE IF NOT EXISTS `characters` (
`ID` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `image_url` text,
  `metier` varchar(45) NOT NULL,
  `server` int(11) NOT NULL,
  `battlelv` int(11) NOT NULL,
  `battleprog` float NOT NULL,
  `joblv` int(11) NOT NULL,
  `jobprog` float NOT NULL,
  `herolv` int(11) NOT NULL,
  `heroprog` float NOT NULL,
  `gold` int(11) NOT NULL,
  `reput` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE IF NOT EXISTS `equipments` (
`ID` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `equiptype` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  `rare` varchar(45) NOT NULL,
  `upgrade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fairies`
--

CREATE TABLE IF NOT EXISTS `fairies` (
`ID` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `name` varchar(45) NOT NULL,
  `fireelem` int(11) DEFAULT NULL,
  `waterelem` int(11) DEFAULT NULL,
  `lightelem` int(11) DEFAULT NULL,
  `darkelem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jewelries`
--

CREATE TABLE IF NOT EXISTS `jewelries` (
`ID` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `jeweltype` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partnercards`
--

CREATE TABLE IF NOT EXISTS `partnercards` (
`ID` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `pcardtype` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `skillsrank` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partnerequipments`
--

CREATE TABLE IF NOT EXISTS `partnerequipments` (
`ID` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `pequiptype` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  `rare` int(11) DEFAULT NULL,
  `upgrade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
`ID` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `parttype` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE IF NOT EXISTS `pets` (
`ID` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  `atqlv` int(11) DEFAULT NULL,
  `deflv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resists`
--

CREATE TABLE IF NOT EXISTS `resists` (
`ID` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `restype` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  `fireres` int(11) DEFAULT NULL,
  `waterres` int(11) DEFAULT NULL,
  `lightres` int(11) DEFAULT NULL,
  `darkres` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fairies`
--
ALTER TABLE `fairies`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jewelries`
--
ALTER TABLE `jewelries`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `partnercards`
--
ALTER TABLE `partnercards`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `partnerequipments`
--
ALTER TABLE `partnerequipments`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `resists`
--
ALTER TABLE `resists`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fairies`
--
ALTER TABLE `fairies`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jewelries`
--
ALTER TABLE `jewelries`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `partnercards`
--
ALTER TABLE `partnercards`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `partnerequipments`
--
ALTER TABLE `partnerequipments`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resists`
--
ALTER TABLE `resists`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
