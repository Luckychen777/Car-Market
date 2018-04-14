-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 08:57 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidpro`
--

CREATE TABLE `bidpro` (
  `id` int(13) NOT NULL,
  `price` int(13) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `status` varchar(13) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `cc` int(20) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `sms` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

CREATE TABLE `customerorder` (
  `id` int(19) NOT NULL,
  `name` varchar(130) DEFAULT NULL,
  `sname` varchar(120) NOT NULL,
  `email` varchar(120) DEFAULT NULL,
  `proname` varchar(90) NOT NULL,
  `proqty` varchar(20) NOT NULL,
  `city` varchar(70) DEFAULT NULL,
  `scity` varchar(70) NOT NULL,
  `address` varchar(150) NOT NULL,
  `saddress` varchar(150) NOT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `szip` varchar(20) NOT NULL,
  `country` varchar(120) DEFAULT NULL,
  `scountry` varchar(80) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oldcar`
--

CREATE TABLE `oldcar` (
  `id` int(13) NOT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `cc` int(13) DEFAULT NULL,
  `image` text,
  `randid` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `price` text NOT NULL,
  `status` text NOT NULL,
  `randid2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipaddress`
--

CREATE TABLE `shipaddress` (
  `id` int(19) NOT NULL,
  `name` varchar(130) DEFAULT NULL,
  `sname` varchar(120) NOT NULL,
  `email` varchar(120) DEFAULT NULL,
  `proname` text NOT NULL,
  `proqty` varchar(20) NOT NULL,
  `semail` varchar(110) NOT NULL,
  `city` varchar(70) DEFAULT NULL,
  `scity` varchar(20) NOT NULL,
  `address` varchar(140) NOT NULL,
  `saddress` varchar(200) NOT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `szip` varchar(20) NOT NULL,
  `country` varchar(120) DEFAULT NULL,
  `scountry` varchar(70) NOT NULL,
  `status` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subs`
--

CREATE TABLE `subs` (
  `id` int(12) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(17) NOT NULL,
  `name` varchar(130) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `pass` varchar(90) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidpro`
--
ALTER TABLE `bidpro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerorder`
--
ALTER TABLE `customerorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oldcar`
--
ALTER TABLE `oldcar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipaddress`
--
ALTER TABLE `shipaddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subs`
--
ALTER TABLE `subs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidpro`
--
ALTER TABLE `bidpro`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customerorder`
--
ALTER TABLE `customerorder`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oldcar`
--
ALTER TABLE `oldcar`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shipaddress`
--
ALTER TABLE `shipaddress`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subs`
--
ALTER TABLE `subs`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
