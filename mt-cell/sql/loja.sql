-- MySQL Script generated by MySQL Workbench
-- Tue Oct 11 10:39:58 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema loja
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema loja
-- -----------------------------------------------------


-- -----------------------------------------------------
-- Table `loja`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT,
  `emailUsu` VARCHAR(180) NOT NULL,
  `senhaUsu` VARCHAR(32) NOT NULL,
  `nomeUsu` VARCHAR(50) NOT NULL,
  `cpfUsu` VARCHAR(45) NOT NULL,
  `telefoneUsu` VARCHAR(45) NOT NULL,
  `endeUsu` VARCHAR(200) NOT NULL,
  `cidadeUsu` VARCHAR(45) NOT NULL,
  `estadoUsu` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuarios`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
