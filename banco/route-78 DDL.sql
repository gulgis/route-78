-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema `route-78`
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema `route-78`
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `route-78` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `route-78` ;

-- DROP SCHEMA `route-78`

-- -----------------------------------------------------
-- Table `route-78`.cliente
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `route-78`.cliente (
  codigo_cliente INT(11) NOT NULL,
  nome_cliente VARCHAR(45) NOT NULL,
  tipo_cliente VARCHAR(45) NOT NULL,
  cpf_cliente VARCHAR(45) NOT NULL,
  endereco_cliente VARCHAR(45) NOT NULL,
  telefone1_cliente VARCHAR(45) NOT NULL,
  telefone2_cliente VARCHAR(45) NULL,
  email_cliente VARCHAR(45) NULL,
  PRIMARY KEY (codigo_cliente) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `route-78`.funcionario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `route-78`.funcionario (
  codigo_funcionario INT(11) NOT NULL AUTO_INCREMENT,
  nome_funcionario VARCHAR(45) NOT NULL,
  sexo_funcionario VARCHAR(45) NOT NULL,
  cpf_funcionario VARCHAR(45) NOT NULL,
  rg_funcionario VARCHAR(45) NULL,
  endereco_funcionario VARCHAR(45) NOT NULL,
  telefone1_funcionario VARCHAR(45) NOT NULL,
  telefone2_funcionario VARCHAR(45) NULL,
  email_funcionario VARCHAR(45) NOT NULL,
  login_funcionario VARCHAR(30) NOT NULL,
  senha_funcionario VARCHAR(20) NOT NULL,
  acesso_funcinario VARCHAR(1) NOT NULL,
  ativo_funcionario VARCHAR(1) NOT NULL,
  PRIMARY KEY (codigo_funcionario) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `route-78`.compra
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `route-78`.compra (
  codigo_compra INT(11) NOT NULL,
  data_compra DATE NOT NULL,
  hora_compra TIME NOT NULL,
  subtotal_compra VARCHAR(45) NOT NULL,
  total_compra VARCHAR(45) NOT NULL,
  forma_compra VARCHAR(45) NOT NULL,
  codigo_funcionario INT(11) NOT NULL,
  codigo_cliente INT(11) NOT NULL,
  PRIMARY KEY (codigo_compra) ,
  INDEX fk_compra_funcionario_idx (codigo_funcionario ASC) ,
  INDEX fk_compra_cliente1_idx (codigo_cliente ASC) ,
  CONSTRAINT fk_compra_funcionario
    FOREIGN KEY (codigo_funcionario)
    REFERENCES `route-78`.funcionario (codigo_funcionario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_compra_cliente1
    FOREIGN KEY (codigo_cliente)
    REFERENCES `route-78`.cliente (codigo_cliente)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `route-78`.produto
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `route-78`.produto (
  codigo_produto INT(11) NOT NULL AUTO_INCREMENT,
  nome_produto VARCHAR(45) NOT NULL,
  descricao_produrto VARCHAR(45) NOT NULL,
  quantidade_produto VARCHAR(45) NOT NULL,
  preco_produrto VARCHAR(45) NOT NULL,
  ativo_produto VARCHAR(45) NOT NULL,
  PRIMARY KEY (codigo_produto) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `route-78`.produto_da_compra
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `route-78`.produto_da_compra (
  codigo_compra INT(11) NOT NULL,
  codigo_produto INT(11) NOT NULL,
  INDEX index_produto_da_compra (codigo_compra ASC) ,
  INDEX index_compra_do_produto (codigo_produto ASC) ,
  CONSTRAINT fk_produto_da_compra
    FOREIGN KEY (codigo_compra)
    REFERENCES `route-78`.compra (codigo_compra)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_compra_do_produto
    FOREIGN KEY (codigo_produto)
    REFERENCES `route-78`.produto (codigo_produto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
