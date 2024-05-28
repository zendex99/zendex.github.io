-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 28, 2024 at 11:13 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zendex`
--

-- --------------------------------------------------------

--
-- Table structure for table `late`
--

DROP TABLE IF EXISTS `late`;
CREATE TABLE IF NOT EXISTS `late` (
  `no_matrik` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `waktu` time(1) NOT NULL,
  `kelas` varchar(9) NOT NULL,
  PRIMARY KEY (`no_matrik`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `late`
--

INSERT INTO `late` (`no_matrik`, `nama`, `waktu`, `kelas`) VALUES
('K131LKRG001', 'DHIA BATRISYA BT. SALMAN', '00:00:08.3', '2S KRG'),
('K131LKPD013', 'NURIN ARDINA BT. HAMID', '00:00:09.0', '1S KPD'),
('K131LETN001', 'MUHAMMAD AIMAN B. HAMID', '00:00:08.3', '1S ETN1'),
('K131LKPD005', 'ANAS REZA DANISH BIN ANAS RAIS', '00:00:09.3', '2S KPD'),
('K176LMOE165', 'MUHD YAZID B. ADAM HAIKAL', '00:00:09.3', '1D ETE1'),
('K198LETE022', 'NURIN ZASLINA BT. FAHRUL', '00:00:08.5', '1D ETE2'),
('K131LKRG077', 'KIM YEOK YUNG', '00:00:09.0', '2S KRG'),
('K131LETE013', 'RAJESH A/L MUTUGAREM', '00:00:08.4', '3 DVM'),
('K131LKPD066', 'ARIANA BT. MAJID', '00:00:08.0', '2S KPD'),
('K141LKRG076', 'SABRINA CARPENTER', '00:00:10.4', '2D KRG');

-- --------------------------------------------------------

--
-- Table structure for table `lecturerduty`
--

DROP TABLE IF EXISTS `lecturerduty`;
CREATE TABLE IF NOT EXISTS `lecturerduty` (
  `no` int NOT NULL,
  `lec` varchar(50) NOT NULL,
  `date` varchar(9) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lecturerduty`
--

INSERT INTO `lecturerduty` (`no`, `lec`, `date`) VALUES
(1, 'NUR HABIBAH BT. ABDULLAH', '12/04/202'),
(4, 'MUHAMMAD SUFIAN B. ABDULLAH', '12/04/202'),
(3, 'NUR ARIANA BT. HAMID', '13/07/202'),
(5, 'NUR ARIANA BT. HAMIDUN', '13/06/202'),
(88, 'NUR HABIBAH BT. AHMAD ', '2022-04-1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
