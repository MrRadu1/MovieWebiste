-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2022 at 04:47 PM
-- Server version: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filme`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `schimb` (`mT` VARCHAR(3), `mU` VARCHAR(3), `vT` INT) RETURNS INT(11) BEGIN
RETURN (CASE WHEN mU='USD' THEN
   ( CASE WHEN mT='USD' THEN 
       vT
    WHEN mT='EUR' THEN
        vT*1.13
    WHEN mT='GBP' THEN
        vT*1.35
    END)
    WHEN mU='EUR' THEN (
    CASE WHEN mT='EUR' THEN 
       vT
    WHEN mT='USD' THEN
        vT*0.88
    WHEN mT='GBP' THEN
        vT*1.19
    END)
    WHEN mU='GBP' THEN (
    CASE WHEN mT='GBP' THEN 
       vT
    WHEN mT='EUR' THEN
        vT*0.84
    WHEN mT='USD' THEN
        vT*0.74
    END)
    END);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `distributie`
--

CREATE TABLE `distributie` (
  `TITLU_FILM` varchar(50) NOT NULL,
  `AN_FILM` int(11) NOT NULL,
  `ID_ACTOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributie`
--

INSERT INTO `distributie` (`TITLU_FILM`, `AN_FILM`, `ID_ACTOR`) VALUES
('Mickey Mouse', 2005, 22),
('Iron Man 3', 2010, 100),
('Friends', 2000, 101),
('Iron Man 2', 2009, 101),
('Iron Man 3', 2010, 101),
('Friends', 2000, 102),
('Iron Man 1', 1988, 102),
('Iron Man 3', 2010, 102),
('Friends', 2000, 103),
('Iron Man 1', 1988, 103),
('Iron Man 2', 2009, 103);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `TITLU` varchar(50) NOT NULL,
  `AN` int(11) NOT NULL,
  `DURATA` int(11) NOT NULL,
  `GEN` varchar(10) NOT NULL,
  `STUDIO` varchar(50) NOT NULL,
  `ID_PRODUCATOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`TITLU`, `AN`, `DURATA`, `GEN`, `STUDIO`, `ID_PRODUCATOR`) VALUES
('CAN', 1999, 100, 'SF', 'ABCCD', 22),
('Friends', 2000, 150, 'comedie', 'ABCCD', 22),
('Iron Man 1', 1988, 210, 'SF', 'EA', 100),
('Iron Man 2', 2009, 220, 'SF', 'EA', 101),
('Iron Man 3', 2010, 230, 'SF', 'EA', 100),
('Mickey Mouse', 2005, 130, 'copii', 'Disney', 105);

-- --------------------------------------------------------

--
-- Table structure for table `persoana`
--

CREATE TABLE `persoana` (
  `ID_PERSOANA` int(11) NOT NULL,
  `NUME` varchar(50) NOT NULL,
  `ADRESA` varchar(50) NOT NULL,
  `SEX` char(1) NOT NULL,
  `DATA_NASTERII` date NOT NULL,
  `CASTIG_NET` int(11) NOT NULL,
  `MONEDA` varchar(3) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persoana`
--

INSERT INTO `persoana` (`ID_PERSOANA`, `NUME`, `ADRESA`, `SEX`, `DATA_NASTERII`, `CASTIG_NET`, `MONEDA`, `email`) VALUES
(22, 'Humphrey Bogart', 'Principala 235', 'M', '1954-03-02', 5756243, 'EUR', NULL),
(100, 'Mirel', 'Principala 20', 'M', '1986-06-06', 43243, 'EUR', NULL),
(101, 'Florina', 'Principala 21', 'F', '1982-09-04', 214343, 'GBP', NULL),
(102, 'Florin', 'Principala 31', 'M', '1999-03-12', 111243, 'USD', NULL),
(103, 'Andreea', 'Principala 31', 'F', '1999-06-02', 12000243, 'USD', NULL),
(105, 'Alina', 'Zorilor 2', 'F', '2000-12-11', 2444, 'GBP', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `NUME` varchar(50) NOT NULL,
  `ADRESA` varchar(50) NOT NULL,
  `TARA` varchar(20) NOT NULL,
  `ID_PRESEDINTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`NUME`, `ADRESA`, `TARA`, `ID_PRESEDINTE`) VALUES
('ABCCD', '15 NY', 'USA', 100),
('Disney', '20 Colorado', 'USA', 105),
('EA', '32 Buftea Bucuresti', 'Romania', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distributie`
--
ALTER TABLE `distributie`
  ADD PRIMARY KEY (`TITLU_FILM`,`AN_FILM`,`ID_ACTOR`),
  ADD KEY `FK_Distributie1` (`ID_ACTOR`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`TITLU`,`AN`),
  ADD KEY `FK_Film1` (`ID_PRODUCATOR`),
  ADD KEY `FK_Film2` (`STUDIO`);

--
-- Indexes for table `persoana`
--
ALTER TABLE `persoana`
  ADD PRIMARY KEY (`ID_PERSOANA`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`NUME`),
  ADD KEY `FK_Studio` (`ID_PRESEDINTE`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `distributie`
--
ALTER TABLE `distributie`
  ADD CONSTRAINT `FK_Distributie1` FOREIGN KEY (`ID_ACTOR`) REFERENCES `persoana` (`ID_PERSOANA`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_Distributie2` FOREIGN KEY (`TITLU_FILM`,`AN_FILM`) REFERENCES `film` (`TITLU`, `AN`) ON DELETE CASCADE;

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `FK_Film1` FOREIGN KEY (`ID_PRODUCATOR`) REFERENCES `persoana` (`ID_PERSOANA`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_Film2` FOREIGN KEY (`STUDIO`) REFERENCES `studio` (`NUME`) ON DELETE CASCADE;

--
-- Constraints for table `studio`
--
ALTER TABLE `studio`
  ADD CONSTRAINT `FK_Studio` FOREIGN KEY (`ID_PRESEDINTE`) REFERENCES `persoana` (`ID_PERSOANA`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
