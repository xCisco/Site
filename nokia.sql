-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Ian 2018 la 20:15
-- Versiune server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nokia`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `conturi`
--

CREATE TABLE `conturi` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `conturi`
--

INSERT INTO `conturi` (`ID`, `username`, `pass`, `cod`) VALUES
(1, 'admin', 'password', 'administrator'),
(11, 'jimy', '12345678', 'FMI_IA_197'),
(12, 'andreasg', '12345678', 'FMI_IA_170'),
(13, 'nitar', '12345678', 'FEAA_MGM_250'),
(14, 'ramonika', '12345678', 'FMI_IA_169');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `general`
--

CREATE TABLE `general` (
  `ID` int(15) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `prenume` varchar(255) NOT NULL,
  `an` int(15) NOT NULL,
  `facultate` varchar(255) NOT NULL,
  `specializare` varchar(255) NOT NULL,
  `nr_mat` int(15) NOT NULL,
  `cod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `general`
--

INSERT INTO `general` (`ID`, `nume`, `prenume`, `an`, `facultate`, `specializare`, `nr_mat`, `cod`) VALUES
(7, 'Chirila', 'Dan-Andrei', 2, 'FMI', 'IA', 197, 'FMI_IA_197'),
(8, 'Andreascec', 'George', 2, 'FMI', 'IA', 170, 'FMI_IA_170'),
(9, 'Nita', 'Raul-Alexandru', 2, 'FEAA', 'MGM', 250, 'FEAA_MGM_250'),
(10, 'Tutu', 'Ramona-Diana', 3, 'FMI', 'IA', 169, 'FMI_IA_169');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `materii`
--

CREATE TABLE `materii` (
  `ID` int(10) NOT NULL,
  `nume_materie` varchar(255) NOT NULL,
  `specializare` varchar(255) NOT NULL,
  `an` int(10) NOT NULL,
  `sem` int(10) NOT NULL,
  `credite` int(10) NOT NULL,
  `codm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `materii`
--

INSERT INTO `materii` (`ID`, `nume_materie`, `specializare`, `an`, `sem`, `credite`, `codm`) VALUES
(2, 'Sisteme de Operare 1', 'IA', 2, 1, 5, ''),
(4, 'Sisteme de Operare 1', 'IA', 2, 1, 1, ''),
(5, 'Logica Computationala', 'IA', 1, 1, 4, ''),
(6, 'Proiect Individual', 'IA', 2, 1, 2, '');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `note`
--

CREATE TABLE `note` (
  `ID` int(10) NOT NULL,
  `cod_student` varchar(255) NOT NULL,
  `materie` varchar(255) NOT NULL,
  `nota` int(10) NOT NULL,
  `sem` int(10) NOT NULL,
  `an` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `note`
--

INSERT INTO `note` (`ID`, `cod_student`, `materie`, `nota`, `sem`, `an`) VALUES
(10, 'FMI_IA_170', 'Sisteme de Operare 1', 7, 1, 2),
(11, 'FMI_IA_170', 'Proiect Individual', 8, 1, 2),
(12, 'FMI_IA_170', 'Logica Computationala', 10, 1, 1),
(13, 'FMI_IA_197', 'Sisteme de Operare 1', 8, 1, 2),
(14, 'FMI_IA_197', 'Logica Computationala', 8, 1, 1),
(15, 'FMI_IA_169', 'Sisteme de Operare 1', 10, 1, 2),
(16, 'FMI_IA_169', 'Proiect Individual', 8, 1, 2),
(17, 'FMI_IA_169', 'Inginerie de Soft ', 5, 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conturi`
--
ALTER TABLE `conturi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `materii`
--
ALTER TABLE `materii`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conturi`
--
ALTER TABLE `conturi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `materii`
--
ALTER TABLE `materii`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
