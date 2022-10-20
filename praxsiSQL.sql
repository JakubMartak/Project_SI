CREATE TABLE IF NOT EXISTS `Studijny_program` (
  `idStudijny_program` INT NOT NULL AUTO_INCREMENT,
  `Nazov` VARCHAR(45) NOT NULL,
  `Skratka` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idStudijny_program`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Typ_zmluvy`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Typ_zmluvy` (
  `idTyp_zmluvy` INT NOT NULL AUTO_INCREMENT,
  `Typ` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTyp_zmluvy`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Student` (
  `idStudent` INT NOT NULL AUTO_INCREMENT,
  `Meno` VARCHAR(45) NOT NULL,
  `Priezvisko` VARCHAR(45) NOT NULL,
  `Mail` VARCHAR(45) NOT NULL,
  `Tel_Cislo` VARCHAR(15) NOT NULL,
  `Fakulty_idFakulty` INT NOT NULL,
  `Studijny_program_idStudijny_program` INT NOT NULL,
  `Hodnotenie` VARCHAR(5) NULL,
  `Akademicky_rok` VARCHAR(5) NOT NULL,
  `Typ_zmluvy_idTyp_zmluvy` INT NOT NULL,
  PRIMARY KEY (`idStudent`),
  INDEX `fk_Student_Studijny_program1_idx` (`Studijny_program_idStudijny_program` ASC),
  INDEX `fk_Student_Typ_zmluvy1_idx` (`Typ_zmluvy_idTyp_zmluvy` ASC),
  CONSTRAINT `fk_Student_Studijny_program1`
    FOREIGN KEY (`Studijny_program_idStudijny_program`)
    REFERENCES `Studijny_program` (`idStudijny_program`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Student_Typ_zmluvy1`
    FOREIGN KEY (`Typ_zmluvy_idTyp_zmluvy`)
    REFERENCES `Typ_zmluvy` (`idTyp_zmluvy`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Mesto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Mesto` (
  `idMesto` INT NOT NULL AUTO_INCREMENT,
  `Nazov` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idMesto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Firma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Firma` (
  `idFirma` INT NOT NULL AUTO_INCREMENT,
  `Názov_firmy` VARCHAR(45) NOT NULL,
  `Adresa` VARCHAR(45) NOT NULL,
  `Mesto_idMesto` INT NOT NULL,
  PRIMARY KEY (`idFirma`),
  INDEX `fk_Firma_Mesto1_idx` (`Mesto_idMesto` ASC),
  CONSTRAINT `fk_Firma_Mesto1`
    FOREIGN KEY (`Mesto_idMesto`)
    REFERENCES `Mesto` (`idMesto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Pracovník_FPVaI`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pracovník_FPVaI` (
  `idPracovník_FPVaI` INT NOT NULL AUTO_INCREMENT,
  `Meno` VARCHAR(45) NOT NULL,
  `Priezvisko` VARCHAR(45) NOT NULL,
  `cislo` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPracovník_FPVaI`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Kontaktna_osoba`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Kontaktna_osoba` (
  `idKontaktna_osoba` INT NOT NULL AUTO_INCREMENT,
  `Meno` VARCHAR(45) NOT NULL,
  `Priezvisko` VARCHAR(45) NOT NULL,
  `cislo` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idKontaktna_osoba`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Predmety`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Predmety` (
  `idPredmety` INT NOT NULL AUTO_INCREMENT,
  `Nazov` VARCHAR(45) NOT NULL,
  `Skratka` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPredmety`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Prax`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Prax` (
  `idPrax` INT NOT NULL AUTO_INCREMENT,
  `Info_o_praxi` VARCHAR(100) NOT NULL,
  `Firma_idFirma` INT NOT NULL,
  `Student_idStudent` INT NULL,
  `Datum_start` DATE NULL,
  `Datum_end` DATE NULL,
  `Aktuálny_stav` VARCHAR(45) NOT NULL,
  `Schválená` VARCHAR(10) NOT NULL,
  `Pracovník_FPVaI_idPracovník_FPVaI` INT NOT NULL,
  `Report` VARCHAR(100) NULL,
  `Kontaktna_osoba_idKontaktna_osoba` INT NOT NULL,
  `Spatna_vazba_k_praxi_studenta` VARCHAR(100) NULL,
  `Vykaz_o_vykonani_praxe` VARCHAR(100) NULL,
  `Osvedcenie_o_absolvovani_praxe` VARCHAR(100) NULL,
  `Predmety_idPredmety` INT NOT NULL,
  PRIMARY KEY (`idPrax`),
  INDEX `fk_Prax_Firma1_idx` (`Firma_idFirma` ASC),
  INDEX `fk_Prax_Student1_idx` (`Student_idStudent` ASC),
  INDEX `fk_Prax_Pracovník_FPVaI1_idx` (`Pracovník_FPVaI_idPracovník_FPVaI` ASC),
  INDEX `fk_Prax_Kontaktna_osoba1_idx` (`Kontaktna_osoba_idKontaktna_osoba` ASC),
  INDEX `fk_Prax_Predmety1_idx` (`Predmety_idPredmety` ASC),
  CONSTRAINT `fk_Prax_Firma1`
    FOREIGN KEY (`Firma_idFirma`)
    REFERENCES `Firma` (`idFirma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prax_Student1`
    FOREIGN KEY (`Student_idStudent`)
    REFERENCES `Student` (`idStudent`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prax_Pracovník_FPVaI1`
    FOREIGN KEY (`Pracovník_FPVaI_idPracovník_FPVaI`)
    REFERENCES `Pracovník_FPVaI` (`idPracovník_FPVaI`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prax_Kontaktna_osoba1`
    FOREIGN KEY (`Kontaktna_osoba_idKontaktna_osoba`)
    REFERENCES `Kontaktna_osoba` (`idKontaktna_osoba`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prax_Predmety1`
    FOREIGN KEY (`Predmety_idPredmety`)
    REFERENCES `Predmety` (`idPredmety`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Dokumenty`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Dokumenty` (
  `idDokumenty` INT NOT NULL AUTO_INCREMENT,
  ` Dohoda_o_odbornej_praxi_studenta` VARCHAR(100) NULL,
  ` Zaznamy_o_vykonani_praxe` VARCHAR(100) NULL,
  `Spatna_vazba_studenta` VARCHAR(100) NULL,
  PRIMARY KEY (`idDokumenty`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Dokumenty_has_Student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Dokumenty_has_Student` (
  `Dokumenty_idDokumenty` INT NOT NULL,
  `Student_idStudent` INT NOT NULL,
  PRIMARY KEY (`Dokumenty_idDokumenty`, `Student_idStudent`),
  INDEX `fk_Dokumenty_has_Student_Student1_idx` (`Student_idStudent` ASC),
  INDEX `fk_Dokumenty_has_Student_Dokumenty1_idx` (`Dokumenty_idDokumenty` ASC),
  CONSTRAINT `fk_Dokumenty_has_Student_Dokumenty1`
    FOREIGN KEY (`Dokumenty_idDokumenty`)
    REFERENCES `Dokumenty` (`idDokumenty`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Dokumenty_has_Student_Student1`
    FOREIGN KEY (`Student_idStudent`)
    REFERENCES `Student` (`idStudent`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
