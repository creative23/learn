-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 12:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myxml`
--

-- --------------------------------------------------------

--
-- Table structure for table `xmltable`
--

CREATE TABLE `xmltable` (
  `ID` int(11) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Language` varchar(20) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Year` int(11) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Filename` varchar(20) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xmltable`
--

INSERT INTO `xmltable` (`ID`, `Category`, `Language`, `Title`, `Author`, `Year`, `Price`, `Filename`, `Date`) VALUES
(1, 'COOKING', 'en', 'Everyday Indian', 'Curry', 2005, '20', 'books1.xml', '2021-02-21 11:15:57'),
(2, 'COMPUTING', 'en', 'Python', 'Mr. Smith', 2005, '30', 'books1.xml', '2021-02-21 11:15:57'),
(3, 'Shop', 'en-us', 'XQuery Kick Start', 'James McGovern', 2003, '50', 'books1.xml', '2021-02-21 11:15:57'),
(4, 'Friend', 'en-us', 'Learning XML', 'Erik T. Ray', 2003, '40', 'books1.xml', '2021-02-21 11:15:57'),
(5, 'COOKING', 'en', 'Everyday Indian', 'Curry', 2005, '20', 'books2.xml', '2021-02-21 11:15:57'),
(6, 'COMPUTING', 'en', 'Python', 'Mr. Smith', 2005, '30', 'books2.xml', '2021-02-21 11:15:57'),
(7, 'Shop', 'en-us', 'XQuery Kick Start', 'James McGovern', 2003, '50', 'books2.xml', '2021-02-21 11:15:57'),
(8, 'Friend', 'en-us', 'Learning XML', 'Erik T. Ray', 2003, '40', 'books2.xml', '2021-02-21 11:15:57'),
(9, 'COOKING', 'en', 'Everyday English', 'Curry', 2005, '20', 'books3.xml', '2021-02-21 11:15:57'),
(10, 'COMPUTING', 'en', 'PHP', 'Mr. Smith', 2005, '30', 'books3.xml', '2021-02-21 11:15:57'),
(11, 'Shop', 'en-us', 'Ebay', 'James McGovern', 2003, '50', 'books3.xml', '2021-02-21 11:15:57'),
(12, 'Friend', 'en-us', 'Learning sql', 'Erik T. Ray', 2003, '40', 'books3.xml', '2021-02-21 11:15:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xmltable`
--
ALTER TABLE `xmltable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xmltable`
--
ALTER TABLE `xmltable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
