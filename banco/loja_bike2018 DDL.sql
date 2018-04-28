-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema loja_bike2018
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema loja_bike2018
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `loja_bike2018` DEFAULT CHARACTER SET utf8 ;
USE `loja_bike2018` ;

-- -----------------------------------------------------
-- Table `loja_bike2018`.`marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `loja_bike2018`.`marca` (
  `cod_marca` INT(10) NOT NULL AUTO_INCREMENT,
  `nome_marca` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cod_marca`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `loja_bike2018`.`bikes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `loja_bike2018`.`bikes` (
  `cod_bike` INT(10) NOT NULL AUTO_INCREMENT,
  `aro_bike` VARCHAR(30) NOT NULL,
  `ativo_bike` TINYINT(1) NOT NULL,
  `cor_bike` VARCHAR(45) NOT NULL,
  `marcha_bike` VARCHAR(30) NOT NULL,
  `modalidade_bike` VARCHAR(40) NOT NULL,
  `modelo_bike` VARCHAR(45) NOT NULL,
  `preco_bikke` DOUBLE NOT NULL,
  `suspensao_bike` VARCHAR(45) NOT NULL,
  `marca_cod_marca` INT(10) NOT NULL,
  PRIMARY KEY (`cod_bike`),
  INDEX `fk_bikes_marca1_idx` (`marca_cod_marca` ASC),
  CONSTRAINT `fk_bikes_marca1`
    FOREIGN KEY (`marca_cod_marca`)
    REFERENCES `loja_bike2018`.`marca` (`cod_marca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `loja_bike2018`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `loja_bike2018`.`funcionario` (
  `cod_fun` INT(10) NOT NULL AUTO_INCREMENT,
  `cpf_fun` VARCHAR(11) NOT NULL,
  `end_fun` VARCHAR(45) NOT NULL,
  `login_fun` VARCHAR(20) NOT NULL,
  `senha_fun` VARCHAR(20) NOT NULL,
  `nome_fun` VARCHAR(45) NOT NULL,
  `tel_fun` VARCHAR(11) NOT NULL,
  `acesso_fun` TINYINT(1) NOT NULL,
  `ativo_fun` TINYINT(1) NOT NULL,
  PRIMARY KEY (`cod_fun`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `loja_bike2018`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `loja_bike2018`.`cliente` (
  `cod_cli` INT(10) NOT NULL AUTO_INCREMENT,
  `cpf_cli` VARCHAR(11) NULL,
  `end_cli` VARCHAR(45) NOT NULL,
  `nome_cli` VARCHAR(45) NOT NULL,
  `tel_cli` VARCHAR(11) NULL,
  PRIMARY KEY (`cod_cli`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `loja_bike2018`.`vendas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `loja_bike2018`.`vendas` (
  `cod_venda` INT(10) NOT NULL,
  `horaedata_venda` DATETIME NOT NULL,
  `quant_prod_venda` INT NOT NULL,
  `valorrecebido_venda` DOUBLE NOT NULL,
  `valortotal_venda` DOUBLE NOT NULL,
  `funcionario_cod_fun` INT(10) NOT NULL,
  `cliente_cod_cli` INT(10) NOT NULL,
  `bikes_cod_bike` INT(10) NOT NULL,
  PRIMARY KEY (`cod_venda`),
  INDEX `fk_vendas_funcionario_idx` (`funcionario_cod_fun` ASC),
  INDEX `fk_vendas_cliente1_idx` (`cliente_cod_cli` ASC),
  INDEX `fk_vendas_bikes1_idx` (`bikes_cod_bike` ASC),
  CONSTRAINT `fk_vendas_funcionario`
    FOREIGN KEY (`funcionario_cod_fun`)
    REFERENCES `loja_bike2018`.`funcionario` (`cod_fun`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vendas_cliente1`
    FOREIGN KEY (`cliente_cod_cli`)
    REFERENCES `loja_bike2018`.`cliente` (`cod_cli`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vendas_bikes1`
    FOREIGN KEY (`bikes_cod_bike`)
    REFERENCES `loja_bike2018`.`bikes` (`cod_bike`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
