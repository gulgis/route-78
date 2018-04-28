-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema lojabike
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lojabike
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lojabike` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `lojabike` ;

-- -----------------------------------------------------
-- Table `lojabike`.`marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojabike`.`marca` (
  `cod_marca` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `nome_marca` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`cod_marca`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojabike`.`bikes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojabike`.`bikes` (
  `cod_bike` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `aro_bike` VARCHAR(30) NOT NULL COMMENT '',
  `ativo_bike` TINYINT(1) NOT NULL COMMENT '',
  `cor_bike` VARCHAR(45) NOT NULL COMMENT '',
  `marcha_bike` VARCHAR(30) NOT NULL COMMENT '',
  `modalidade_bike` VARCHAR(40) NOT NULL COMMENT '',
  `modelo_bike` VARCHAR(45) NOT NULL COMMENT '',
  `preco_bikke` DOUBLE NOT NULL COMMENT '',
  `suspensao_bike` VARCHAR(45) NOT NULL COMMENT '',
  `marca_cod_marca` INT(10) NOT NULL COMMENT '',
  PRIMARY KEY (`cod_bike`)  COMMENT '',
  INDEX `fk_bikes_marca1_idx` (`marca_cod_marca` ASC)  COMMENT '',
  CONSTRAINT `fk_bikes_marca1`
    FOREIGN KEY (`marca_cod_marca`)
    REFERENCES `lojabike`.`marca` (`cod_marca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojabike`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojabike`.`funcionario` (
  `cod_fun` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `cpf_fun` VARCHAR(11) NOT NULL COMMENT '',
  `end_fun` VARCHAR(45) NOT NULL COMMENT '',
  `login_fun` VARCHAR(20) NOT NULL COMMENT '',
  `senha_fun` VARCHAR(20) NOT NULL COMMENT '',
  `nome_fun` VARCHAR(45) NOT NULL COMMENT '',
  `tel_fun` VARCHAR(11) NOT NULL COMMENT '',
  `acesso_fun` TINYINT(1) NOT NULL COMMENT '',
  `ativo_fun` TINYINT(1) NOT NULL COMMENT '',
  PRIMARY KEY (`cod_fun`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojabike`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojabike`.`cliente` (
  `cod_cli` INT(10) NOT NULL COMMENT '',
  `cpf_cli` VARCHAR(11) NULL COMMENT '',
  `end_cli` VARCHAR(45) NOT NULL COMMENT '',
  `nome_cli` VARCHAR(45) NOT NULL COMMENT '',
  `tel_cli` VARCHAR(11) NULL COMMENT '',
  PRIMARY KEY (`cod_cli`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojabike`.`vendas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojabike`.`vendas` (
  `cod_venda` INT(10) NOT NULL COMMENT '',
  `horaedata_venda` DATETIME NOT NULL COMMENT '',
  `quant_prod_venda` INT NOT NULL COMMENT '',
  `valorrecebido_venda` DOUBLE NOT NULL COMMENT '',
  `valortotal_venda` DOUBLE NOT NULL COMMENT '',
  `funcionario_cod_fun` INT(10) NOT NULL COMMENT '',
  `cliente_cod_cli` INT(10) NOT NULL COMMENT '',
  `bikes_cod_bike` INT(10) NOT NULL COMMENT '',
  PRIMARY KEY (`cod_venda`)  COMMENT '',
  INDEX `fk_vendas_funcionario_idx` (`funcionario_cod_fun` ASC)  COMMENT '',
  INDEX `fk_vendas_cliente1_idx` (`cliente_cod_cli` ASC)  COMMENT '',
  INDEX `fk_vendas_bikes1_idx` (`bikes_cod_bike` ASC)  COMMENT '',
  CONSTRAINT `fk_vendas_funcionario`
    FOREIGN KEY (`funcionario_cod_fun`)
    REFERENCES `lojabike`.`funcionario` (`cod_fun`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vendas_cliente1`
    FOREIGN KEY (`cliente_cod_cli`)
    REFERENCES `lojabike`.`cliente` (`cod_cli`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vendas_bikes1`
    FOREIGN KEY (`bikes_cod_bike`)
    REFERENCES `lojabike`.`bikes` (`cod_bike`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
