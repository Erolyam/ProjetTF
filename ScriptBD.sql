SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `m2test5` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `m2test5` ;

-- -----------------------------------------------------
-- Table `m2test5`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m2test5`.`User` ;

CREATE TABLE IF NOT EXISTS `m2test5`.`User` (
  `idUser` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `email` VARCHAR(45) NULL COMMENT '',
  `username` VARCHAR(45) NOT NULL COMMENT '',
  `password` VARCHAR(256) NOT NULL COMMENT '',
  `name` VARCHAR(45) NOT NULL COMMENT '',
  `lastname` VARCHAR(45) NOT NULL COMMENT '',
  `rol` VARCHAR(30) NOT NULL DEFAULT 'USER' COMMENT '',
  `age` INT NULL COMMENT '',
  `profile_picture` BLOB NULL COMMENT 'Profile picture file directory (ex., \'/image/diego_image.jpg\')',
  PRIMARY KEY (`idUser`)  COMMENT '',
  UNIQUE INDEX `username_UNIQUE` (`username` ASC)  COMMENT '',
  UNIQUE INDEX `email_UNIQUE` (`email` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `m2test5`.`Category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m2test5`.`Category` ;

CREATE TABLE IF NOT EXISTS `m2test5`.`Category` (
  `idCategory` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`idCategory`)  COMMENT '',
  UNIQUE INDEX `name_UNIQUE` (`name` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `m2test5`.`Artwork`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m2test5`.`Artwork` ;

CREATE TABLE IF NOT EXISTS `m2test5`.`Artwork` (
  `idArtwork` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `title` VARCHAR(60) NOT NULL COMMENT '',
  `date` DATE NOT NULL COMMENT '',
  `description` VARCHAR(2000) NULL COMMENT '',
  `category_idCategory` INT NOT NULL COMMENT '',
  `owner_idUser` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idArtwork`)  COMMENT '',
  INDEX `fk_Artwork_Category_idx` (`category_idCategory` ASC)  COMMENT '',
  INDEX `fk_Artwork_User1_idx` (`owner_idUser` ASC)  COMMENT '',
  CONSTRAINT `fk_Artwork_Category`
    FOREIGN KEY (`category_idCategory`)
    REFERENCES `m2test5`.`Category` (`idCategory`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Artwork_User1`
    FOREIGN KEY (`owner_idUser`)
    REFERENCES `m2test5`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `m2test5`.`Vote`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m2test5`.`Vote` ;

CREATE TABLE IF NOT EXISTS `m2test5`.`Vote` (
  `User_idUser` INT NOT NULL COMMENT '',
  `Artwork_idArtwork` INT NOT NULL COMMENT '',
  `like` TINYINT(1) NOT NULL COMMENT '',
  `date` DATETIME NOT NULL COMMENT '',
  PRIMARY KEY (`User_idUser`, `Artwork_idArtwork`)  COMMENT '',
  INDEX `fk_User_has_Artwork_Artwork1_idx` (`Artwork_idArtwork` ASC)  COMMENT '',
  INDEX `fk_User_has_Artwork_User1_idx` (`User_idUser` ASC)  COMMENT '',
  CONSTRAINT `fk_User_has_Artwork_User1`
    FOREIGN KEY (`User_idUser`)
    REFERENCES `m2test5`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_Artwork_Artwork1`
    FOREIGN KEY (`Artwork_idArtwork`)
    REFERENCES `m2test5`.`Artwork` (`idArtwork`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `m2test5`.`Comment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m2test5`.`Comment` ;

CREATE TABLE IF NOT EXISTS `m2test5`.`Comment` (
  `idComment` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `User_idUser` INT NOT NULL COMMENT '',
  `Artwork_idArtwork` INT NOT NULL COMMENT '',
  `comment` VARCHAR(140) NOT NULL COMMENT '',
  `date` DATETIME NOT NULL COMMENT '',
  INDEX `fk_User_has_Artwork1_Artwork1_idx` (`Artwork_idArtwork` ASC)  COMMENT '',
  INDEX `fk_User_has_Artwork1_User1_idx` (`User_idUser` ASC)  COMMENT '',
  PRIMARY KEY (`idComment`)  COMMENT '',
  CONSTRAINT `fk_User_has_Artwork1_User1`
    FOREIGN KEY (`User_idUser`)
    REFERENCES `m2test5`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_Artwork1_Artwork1`
    FOREIGN KEY (`Artwork_idArtwork`)
    REFERENCES `m2test5`.`Artwork` (`idArtwork`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `m2test5`.`Attachment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m2test5`.`Attachment` ;

CREATE TABLE IF NOT EXISTS `m2test5`.`Attachment` (
  `idAttachment` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nom` VARCHAR(60) NOT NULL COMMENT '',
  `attachment` BLOB NOT NULL COMMENT 'Attachment file directory (ex., \'/image/diego_image.jpg\')',
  `Artwork_idArtwork` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idAttachment`)  COMMENT '',
  INDEX `fk_Attachment_Artwork1_idx` (`Artwork_idArtwork` ASC)  COMMENT '',
  CONSTRAINT `fk_Attachment_Artwork1`
    FOREIGN KEY (`Artwork_idArtwork`)
    REFERENCES `m2test5`.`Artwork` (`idArtwork`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
