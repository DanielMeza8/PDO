-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema agenda
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema agenda
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `agenda` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `agenda` ;

-- -----------------------------------------------------
-- Table `agenda`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(200) NOT NULL,
  `descripcion` VARCHAR(300) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `agenda`.`contactos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`contactos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(150) NULL DEFAULT NULL,
  `email` VARCHAR(150) NULL DEFAULT NULL,
  `telefono` VARCHAR(15) NULL DEFAULT NULL,
  `idCategoria` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `idCategoria_idx` (`idCategoria` ASC) VISIBLE,
  CONSTRAINT `idCategoria`
    FOREIGN KEY (`idCategoria`)
    REFERENCES `agenda`.`categorias` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 26
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

USE `agenda` ;

-- -----------------------------------------------------
-- Placeholder table for view `agenda`.`dataagenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`dataagenda` (`idContacto` INT, `nombre` INT, `email` INT, `telefono` INT, `categoriaContacto` INT);

-- -----------------------------------------------------
-- View `agenda`.`dataagenda`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `agenda`.`dataagenda`;
USE `agenda`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `agenda`.`dataagenda` AS select `agenda`.`contactos`.`id` AS `idContacto`,`agenda`.`contactos`.`nombre` AS `nombre`,`agenda`.`contactos`.`email` AS `email`,`agenda`.`contactos`.`telefono` AS `telefono`,`agenda`.`categorias`.`nombre` AS `categoriaContacto` from (`agenda`.`categorias` join `agenda`.`contactos` on((`agenda`.`categorias`.`id` = `agenda`.`contactos`.`idCategoria`)));

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


ALTER TABLE `agenda`.`contactos` 
ADD INDEX `creadopo_idx` (`creadopor` ASC) VISIBLE;
;
ALTER TABLE `agenda`.`contactos` 
ADD CONSTRAINT `creadopor`
  FOREIGN KEY (`creadopor`)
  REFERENCES `agenda`.`registro_usuario` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
