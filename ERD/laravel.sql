-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Oct 30, 2022 at 03:19 PM
-- Server version: 5.7.30
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `Dokumenty`
--

CREATE TABLE `Dokumenty` (
  `idDokumenty` int(11) NOT NULL,
  `Typ_doc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Firma`
--

CREATE TABLE `Firma` (
  `idFirma` int(11) NOT NULL,
  `Názov_firmy` varchar(45) NOT NULL,
  `Skratka` varchar(45) NOT NULL,
  `Adresa` varchar(45) NOT NULL,
  `Mesto_idMesto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Mesto`
--

CREATE TABLE `Mesto` (
  `idMesto` int(11) NOT NULL,
  `Nazov` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Pouzivatel`
--

CREATE TABLE `Pouzivatel` (
  `idPouzivatel` int(11) NOT NULL,
  `Meno` varchar(45) NOT NULL,
  `Priezvisko` varchar(45) NOT NULL,
  `Cislo` varchar(45) NOT NULL,
  `Mail` varchar(45) NOT NULL,
  `Rola_pouzivatela` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Prax`
--

CREATE TABLE `Prax` (
  `idPrax` int(11) NOT NULL,
  `Info_o_praxi` varchar(100) NOT NULL,
  `Student_idPouzivatel` int(11) DEFAULT NULL,
  `Datum_start` date DEFAULT NULL,
  `Datum_end` date DEFAULT NULL,
  `Firma_idFirma` int(11) NOT NULL,
  `Kontaktna_osoba_idPouzivatel` int(11) NOT NULL,
  `Aktuálny_stav` varchar(45) NOT NULL,
  `Report` varchar(100) DEFAULT NULL,
  `Spatna_vazba_k_praxi_studenta` varchar(100) DEFAULT NULL,
  `Studijny_program_idStudijny_program` int(11) NOT NULL,
  `Pracovnik_FPVaI_idPouzivatel1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Prax_has_Dokumenty`
--

CREATE TABLE `Prax_has_Dokumenty` (
  `Prax_idPrax` int(11) NOT NULL,
  `Dokumenty_idDokumenty` int(11) NOT NULL,
  `Datum_pridania` date DEFAULT NULL,
  `Nazov` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Predmety`
--

CREATE TABLE `Predmety` (
  `idPredmety` int(11) NOT NULL,
  `Nazov` varchar(45) NOT NULL,
  `Skratka` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Rola`
--

CREATE TABLE `Rola` (
  `idRola` int(11) NOT NULL,
  `Rola` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Studijny_program`
--

CREATE TABLE `Studijny_program` (
  `idStudijny_program` int(11) NOT NULL,
  `Nazov` varchar(45) NOT NULL,
  `Skratka` varchar(45) NOT NULL,
  `Predmety_idPredmety` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Zmluva`
--

CREATE TABLE `Zmluva` (
  `idZmluva` int(11) NOT NULL,
  `Typ_zmluvy` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Dokumenty`
--
ALTER TABLE `Dokumenty`
  ADD PRIMARY KEY (`idDokumenty`);

--
-- Indexes for table `Firma`
--
ALTER TABLE `Firma`
  ADD PRIMARY KEY (`idFirma`),
  ADD KEY `fk_Firma_Mesto1_idx` (`Mesto_idMesto`);

--
-- Indexes for table `Mesto`
--
ALTER TABLE `Mesto`
  ADD PRIMARY KEY (`idMesto`);

--
-- Indexes for table `Pouzivatel`
--
ALTER TABLE `Pouzivatel`
  ADD PRIMARY KEY (`idPouzivatel`);

--
-- Indexes for table `Prax`
--
ALTER TABLE `Prax`
  ADD PRIMARY KEY (`idPrax`),
  ADD KEY `fk_Prax_Firma1_idx` (`Firma_idFirma`),
  ADD KEY `fk_Prax_Pouzivatel1_idx` (`Student_idPouzivatel`),
  ADD KEY `fk_Prax_Studijny_program1_idx` (`Studijny_program_idStudijny_program`),
  ADD KEY `fk_Prax_Pouzivatel2_idx` (`Kontaktna_osoba_idPouzivatel`),
  ADD KEY `fk_Prax_Pouzivatel3_idx` (`Pracovnik_FPVaI_idPouzivatel1`);

--
-- Indexes for table `Prax_has_Dokumenty`
--
ALTER TABLE `Prax_has_Dokumenty`
  ADD PRIMARY KEY (`Prax_idPrax`,`Dokumenty_idDokumenty`),
  ADD KEY `fk_Prax_has_Dokumenty_Dokumenty1_idx` (`Dokumenty_idDokumenty`),
  ADD KEY `fk_Prax_has_Dokumenty_Prax1_idx` (`Prax_idPrax`);

--
-- Indexes for table `Predmety`
--
ALTER TABLE `Predmety`
  ADD PRIMARY KEY (`idPredmety`);

--
-- Indexes for table `Rola`
--
ALTER TABLE `Rola`
  ADD PRIMARY KEY (`idRola`);

--
-- Indexes for table `Studijny_program`
--
ALTER TABLE `Studijny_program`
  ADD PRIMARY KEY (`idStudijny_program`),
  ADD KEY `fk_Studijny_program_Predmety1_idx` (`Predmety_idPredmety`);

--
-- Indexes for table `Zmluva`
--
ALTER TABLE `Zmluva`
  ADD PRIMARY KEY (`idZmluva`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Dokumenty`
--
ALTER TABLE `Dokumenty`
  MODIFY `idDokumenty` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Firma`
--
ALTER TABLE `Firma`
  MODIFY `idFirma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Mesto`
--
ALTER TABLE `Mesto`
  MODIFY `idMesto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Pouzivatel`
--
ALTER TABLE `Pouzivatel`
  MODIFY `idPouzivatel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Prax`
--
ALTER TABLE `Prax`
  MODIFY `idPrax` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Predmety`
--
ALTER TABLE `Predmety`
  MODIFY `idPredmety` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Rola`
--
ALTER TABLE `Rola`
  MODIFY `idRola` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Studijny_program`
--
ALTER TABLE `Studijny_program`
  MODIFY `idStudijny_program` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Zmluva`
--
ALTER TABLE `Zmluva`
  MODIFY `idZmluva` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
