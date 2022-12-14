-- MySQL Script generated by MySQL Workbench
-- Thu Oct 13 07:55:10 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Katedra`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Katedra` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Katedra` (
  `idKatedra` INT NOT NULL AUTO_INCREMENT,
  `Nazov` VARCHAR(45) NOT NULL,
  `Adresa` VARCHAR(45) NOT NULL,
  `Mail` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idKatedra`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Student`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Student` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Student` (
  `idStudent` INT NOT NULL AUTO_INCREMENT,
  `Meno` VARCHAR(45) NOT NULL,
  `Priezvisko` VARCHAR(45) NOT NULL,
  `Mail` VARCHAR(45) NOT NULL,
  `Tel_Cislo` VARCHAR(15) NOT NULL,
  `Katedra_idKatedra` INT NOT NULL,
  `Odbor` VARCHAR(45) NOT NULL,
  `Pocet_hodin` INT NOT NULL,
  PRIMARY KEY (`idStudent`),
  INDEX `fk_Student_Katedra_idx` (`Katedra_idKatedra` ASC),
  CONSTRAINT `fk_Student_Katedra`
    FOREIGN KEY (`Katedra_idKatedra`)
    REFERENCES `mydb`.`Katedra` (`idKatedra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Firma`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Firma` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Firma` (
  `idFirma` INT NOT NULL AUTO_INCREMENT,
  `N??zov_firmy` VARCHAR(45) NOT NULL,
  `Adresa` VARCHAR(45) NOT NULL,
  `Mesto` VARCHAR(45) NOT NULL,
  `Kontakt` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idFirma`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Ucitel`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Ucitel` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Ucitel` (
  `idUcitel` INT NOT NULL AUTO_INCREMENT,
  `Meno` VARCHAR(45) NOT NULL,
  `Priezvisko` VARCHAR(45) NOT NULL,
  `Mail` VARCHAR(45) NOT NULL,
  `Katedra_idKatedra` INT NOT NULL,
  PRIMARY KEY (`idUcitel`),
  INDEX `fk_Ucitel_Katedra1_idx` (`Katedra_idKatedra` ASC),
  CONSTRAINT `fk_Ucitel_Katedra1`
    FOREIGN KEY (`Katedra_idKatedra`)
    REFERENCES `mydb`.`Katedra` (`idKatedra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Prax`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Prax` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Prax` (
  `idPrax` INT NOT NULL AUTO_INCREMENT,
  `Firma_idFirma` INT NOT NULL,
  `Student_idStudent` INT NOT NULL,
  `Ucitel_idUcitel` INT NOT NULL,
  `Datum_start` DATE NOT NULL,
  `Datum_end` DATE NULL,
  `Status` VARCHAR(100) NULL,
  `Komentar` VARCHAR(45) NULL,
  PRIMARY KEY (`idPrax`),
  INDEX `fk_Prax_Firma1_idx` (`Firma_idFirma` ASC),
  INDEX `fk_Prax_Student1_idx` (`Student_idStudent` ASC),
  INDEX `fk_Prax_Ucitel1_idx` (`Ucitel_idUcitel` ASC),
  CONSTRAINT `fk_Prax_Firma1`
    FOREIGN KEY (`Firma_idFirma`)
    REFERENCES `mydb`.`Firma` (`idFirma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prax_Student1`
    FOREIGN KEY (`Student_idStudent`)
    REFERENCES `mydb`.`Student` (`idStudent`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prax_Ucitel1`
    FOREIGN KEY (`Ucitel_idUcitel`)
    REFERENCES `mydb`.`Ucitel` (`idUcitel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
