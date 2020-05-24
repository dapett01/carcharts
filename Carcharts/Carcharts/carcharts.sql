-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 19 maj 2020 kl 11:20
-- Serverversion: 10.4.11-MariaDB
-- PHP-version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `carcharts`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellstruktur `manufacturer`
--

CREATE TABLE `manufacturer` (
  `porsche` varchar(255) NOT NULL,
  `mclaren` varchar(255) NOT NULL,
  `lamborghini` varchar(255) NOT NULL,
  `ferrari` varchar(255) NOT NULL,
  `Mercedes-AMG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumpning av Data i tabell `manufacturer`
--

INSERT INTO `manufacturer` (`porsche`, `mclaren`, `lamborghini`, `ferrari`, `Mercedes-AMG`) VALUES
('1', '2', '3', '4', '5');

-- --------------------------------------------------------

--
-- Tabellstruktur `model`
--

CREATE TABLE `model` (
  `manufacturerID` int(255) NOT NULL,
  `vehicleID` int(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `0-100` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumpning av Data i tabell `model`
--

INSERT INTO `model` (`manufacturerID`, `vehicleID`, `model`, `engine`, `0-100`, `price`) VALUES
(1, 1, '911 GT3 RS', '4.0 H6', '3.4 seconds', '1700000 Kr'),
(1, 2, 'Carrera GT', '5.7 V10', '3.6 Seconds', '7500000 Kr'),
(1, 3, '997 Carrera', '3.6 H6', '5.0 Seconds', '400000 Kr'),
(2, 4, 'F1', '6.1 V12', '3.0 Seconds', '140000000 Kr'),
(2, 5, 'P1 GTR', '3.8 V8', '2.8 Seconds', '30000000 Kr'),
(2, 6, '720s', '4.0 V8', '2.9 Seconds', '2500000 Kr'),
(3, 7, 'Aventador SVJ', '6.5 V12', '2.8 Seconds', '6000000 Kr'),
(3, 8, 'Huracan Evo Spyder', '5.2 V10', '2.9 Seconds', '2750000 Kr'),
(3, 9, 'Gallardo Superleggera', '5.2 V10', '3.2 Seconds', '1800000 Kr'),
(4, 10, 'F12 TDF', '6.3 V12', '2.9 Seconds', '15000000 Kr'),
(4, 11, 'LaFerrari Aperta', '6.3 V12', '2.9 Seconds', '50000000 Kr'),
(4, 12, '488 Pista', '3.9 V8', '2.8 Seconds', '3500000 Kr'),
(5, 13, 'AMG GTR PRO', '4.0 V8', '3.5 Seconds', '2300000 Kr'),
(5, 14, 'AMG GT63S 4MATIC+', '4.0 V8', '3.2 Seconds', '1600000 Kr'),
(5, 15, 'AMG S63 4MATIC Coupe', '4.0 V8', '3.5 Seconds', '1700000 Kr');

-- --------------------------------------------------------

--
-- Tabellstruktur `user`
--

CREATE TABLE `user` (
  `userID` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `SSN` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Index för tabell `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`vehicleID`);

--
-- Index för tabell `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `model`
--
ALTER TABLE `model`
  MODIFY `vehicleID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT för tabell `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
