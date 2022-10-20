-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: mysql
-- Čas generovania: Št 20.Okt 2022, 06:08
-- Verzia serveru: 5.7.30
-- Verzia PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `laravel`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Dokumenty`
--

CREATE TABLE `Dokumenty` (
  `idDokumenty` int(11) NOT NULL,
  ` Dohoda_o_odbornej_praxi_studenta` varchar(100) COLLATE utf8_slovak_ci DEFAULT NULL,
  ` Zaznamy_o_vykonani_praxe` varchar(100) COLLATE utf8_slovak_ci DEFAULT NULL,
  `Spatna_vazba_studenta` varchar(100) COLLATE utf8_slovak_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Dokumenty_has_Student`
--

CREATE TABLE `Dokumenty_has_Student` (
  `Dokumenty_idDokumenty` int(11) NOT NULL,
  `Student_idStudent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Firma`
--

CREATE TABLE `Firma` (
  `idFirma` int(11) NOT NULL,
  `Názov_firmy` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `Adresa` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `Mesto_idMesto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Kontaktna_osoba`
--

CREATE TABLE `Kontaktna_osoba` (
  `idKontaktna_osoba` int(11) NOT NULL,
  `Meno` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `Priezvisko` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `cislo` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `mail` varchar(45) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Mesto`
--

CREATE TABLE `Mesto` (
  `idMesto` int(11) NOT NULL,
  `Nazov` varchar(45) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Pracovník_FPVaI`
--

CREATE TABLE `Pracovník_FPVaI` (
  `idPracovník_FPVaI` int(11) NOT NULL,
  `Meno` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `Priezvisko` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `cislo` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `mail` varchar(45) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Prax`
--

CREATE TABLE `Prax` (
  `idPrax` int(11) NOT NULL,
  `Info_o_praxi` varchar(100) COLLATE utf8_slovak_ci NOT NULL,
  `Firma_idFirma` int(11) NOT NULL,
  `Student_idStudent` int(11) DEFAULT NULL,
  `Datum_start` date DEFAULT NULL,
  `Datum_end` date DEFAULT NULL,
  `Aktuálny_stav` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `Schválená` varchar(10) COLLATE utf8_slovak_ci NOT NULL,
  `Pracovník_FPVaI_idPracovník_FPVaI` int(11) NOT NULL,
  `Report` varchar(100) COLLATE utf8_slovak_ci DEFAULT NULL,
  `Kontaktna_osoba_idKontaktna_osoba` int(11) NOT NULL,
  `Spatna_vazba_k_praxi_studenta` varchar(100) COLLATE utf8_slovak_ci DEFAULT NULL,
  `Vykaz_o_vykonani_praxe` varchar(100) COLLATE utf8_slovak_ci DEFAULT NULL,
  `Osvedcenie_o_absolvovani_praxe` varchar(100) COLLATE utf8_slovak_ci DEFAULT NULL,
  `Predmety_idPredmety` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Predmety`
--

CREATE TABLE `Predmety` (
  `idPredmety` int(11) NOT NULL,
  `Nazov` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `Skratka` varchar(45) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Student`
--

CREATE TABLE `Student` (
  `idStudent` int(11) NOT NULL,
  `Meno` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `Priezvisko` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `Mail` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `Tel_Cislo` varchar(15) COLLATE utf8_slovak_ci NOT NULL,
  `Fakulty_idFakulty` int(11) NOT NULL,
  `Studijny_program_idStudijny_program` int(11) NOT NULL,
  `Hodnotenie` varchar(5) COLLATE utf8_slovak_ci DEFAULT NULL,
  `Akademicky_rok` varchar(5) COLLATE utf8_slovak_ci NOT NULL,
  `Typ_zmluvy_idTyp_zmluvy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Studijny_program`
--

CREATE TABLE `Studijny_program` (
  `idStudijny_program` int(11) NOT NULL,
  `Nazov` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `Skratka` varchar(45) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Typ_zmluvy`
--

CREATE TABLE `Typ_zmluvy` (
  `idTyp_zmluvy` int(11) NOT NULL,
  `Typ` varchar(45) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `Dokumenty`
--
ALTER TABLE `Dokumenty`
  ADD PRIMARY KEY (`idDokumenty`);

--
-- Indexy pre tabuľku `Dokumenty_has_Student`
--
ALTER TABLE `Dokumenty_has_Student`
  ADD PRIMARY KEY (`Dokumenty_idDokumenty`,`Student_idStudent`),
  ADD KEY `fk_Dokumenty_has_Student_Student1_idx` (`Student_idStudent`),
  ADD KEY `fk_Dokumenty_has_Student_Dokumenty1_idx` (`Dokumenty_idDokumenty`);

--
-- Indexy pre tabuľku `Firma`
--
ALTER TABLE `Firma`
  ADD PRIMARY KEY (`idFirma`),
  ADD KEY `fk_Firma_Mesto1_idx` (`Mesto_idMesto`);

--
-- Indexy pre tabuľku `Kontaktna_osoba`
--
ALTER TABLE `Kontaktna_osoba`
  ADD PRIMARY KEY (`idKontaktna_osoba`);

--
-- Indexy pre tabuľku `Mesto`
--
ALTER TABLE `Mesto`
  ADD PRIMARY KEY (`idMesto`);

--
-- Indexy pre tabuľku `Pracovník_FPVaI`
--
ALTER TABLE `Pracovník_FPVaI`
  ADD PRIMARY KEY (`idPracovník_FPVaI`);

--
-- Indexy pre tabuľku `Prax`
--
ALTER TABLE `Prax`
  ADD PRIMARY KEY (`idPrax`),
  ADD KEY `fk_Prax_Firma1_idx` (`Firma_idFirma`),
  ADD KEY `fk_Prax_Student1_idx` (`Student_idStudent`),
  ADD KEY `fk_Prax_Pracovník_FPVaI1_idx` (`Pracovník_FPVaI_idPracovník_FPVaI`),
  ADD KEY `fk_Prax_Kontaktna_osoba1_idx` (`Kontaktna_osoba_idKontaktna_osoba`),
  ADD KEY `fk_Prax_Predmety1_idx` (`Predmety_idPredmety`);

--
-- Indexy pre tabuľku `Predmety`
--
ALTER TABLE `Predmety`
  ADD PRIMARY KEY (`idPredmety`);

--
-- Indexy pre tabuľku `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`idStudent`),
  ADD KEY `fk_Student_Studijny_program1_idx` (`Studijny_program_idStudijny_program`),
  ADD KEY `fk_Student_Typ_zmluvy1_idx` (`Typ_zmluvy_idTyp_zmluvy`);

--
-- Indexy pre tabuľku `Studijny_program`
--
ALTER TABLE `Studijny_program`
  ADD PRIMARY KEY (`idStudijny_program`);

--
-- Indexy pre tabuľku `Typ_zmluvy`
--
ALTER TABLE `Typ_zmluvy`
  ADD PRIMARY KEY (`idTyp_zmluvy`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `Dokumenty`
--
ALTER TABLE `Dokumenty`
  MODIFY `idDokumenty` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `Firma`
--
ALTER TABLE `Firma`
  MODIFY `idFirma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `Kontaktna_osoba`
--
ALTER TABLE `Kontaktna_osoba`
  MODIFY `idKontaktna_osoba` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `Mesto`
--
ALTER TABLE `Mesto`
  MODIFY `idMesto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `Pracovník_FPVaI`
--
ALTER TABLE `Pracovník_FPVaI`
  MODIFY `idPracovník_FPVaI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `Prax`
--
ALTER TABLE `Prax`
  MODIFY `idPrax` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `Predmety`
--
ALTER TABLE `Predmety`
  MODIFY `idPredmety` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `Student`
--
ALTER TABLE `Student`
  MODIFY `idStudent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `Studijny_program`
--
ALTER TABLE `Studijny_program`
  MODIFY `idStudijny_program` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `Typ_zmluvy`
--
ALTER TABLE `Typ_zmluvy`
  MODIFY `idTyp_zmluvy` int(11) NOT NULL AUTO_INCREMENT;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `Dokumenty_has_Student`
--
ALTER TABLE `Dokumenty_has_Student`
  ADD CONSTRAINT `fk_Dokumenty_has_Student_Dokumenty1` FOREIGN KEY (`Dokumenty_idDokumenty`) REFERENCES `Dokumenty` (`idDokumenty`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Dokumenty_has_Student_Student1` FOREIGN KEY (`Student_idStudent`) REFERENCES `Student` (`idStudent`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Obmedzenie pre tabuľku `Firma`
--
ALTER TABLE `Firma`
  ADD CONSTRAINT `fk_Firma_Mesto1` FOREIGN KEY (`Mesto_idMesto`) REFERENCES `Mesto` (`idMesto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Obmedzenie pre tabuľku `Prax`
--
ALTER TABLE `Prax`
  ADD CONSTRAINT `fk_Prax_Firma1` FOREIGN KEY (`Firma_idFirma`) REFERENCES `Firma` (`idFirma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Prax_Kontaktna_osoba1` FOREIGN KEY (`Kontaktna_osoba_idKontaktna_osoba`) REFERENCES `Kontaktna_osoba` (`idKontaktna_osoba`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Prax_Pracovník_FPVaI1` FOREIGN KEY (`Pracovník_FPVaI_idPracovník_FPVaI`) REFERENCES `Pracovník_FPVaI` (`idPracovník_FPVaI`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Prax_Predmety1` FOREIGN KEY (`Predmety_idPredmety`) REFERENCES `Predmety` (`idPredmety`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Prax_Student1` FOREIGN KEY (`Student_idStudent`) REFERENCES `Student` (`idStudent`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Obmedzenie pre tabuľku `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `fk_Student_Studijny_program1` FOREIGN KEY (`Studijny_program_idStudijny_program`) REFERENCES `Studijny_program` (`idStudijny_program`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Student_Typ_zmluvy1` FOREIGN KEY (`Typ_zmluvy_idTyp_zmluvy`) REFERENCES `Typ_zmluvy` (`idTyp_zmluvy`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
