-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2016 às 14:56
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lojabike`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bikes`
--

CREATE TABLE `bikes` (
  `cod_bike` int(10) NOT NULL,
  `aro_bike` varchar(30) NOT NULL,
  `ativo_bike` tinyint(1) NOT NULL,
  `cor_bike` varchar(45) NOT NULL,
  `marcha_bike` varchar(30) NOT NULL,
  `modalidade_bike` varchar(40) NOT NULL,
  `modelo_bike` varchar(45) NOT NULL,
  `preco_bike` double NOT NULL,
  `suspensao_bike` varchar(45) NOT NULL,
  `marca_cod_marca` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bikes`
--

INSERT INTO `bikes` (`cod_bike`, `aro_bike`, `ativo_bike`, `cor_bike`, `marcha_bike`, `modalidade_bike`, `modelo_bike`, `preco_bike`, `suspensao_bike`, `marca_cod_marca`) VALUES
(1, '26', 0, 'azul', 'nao possui', 'Speed Bike', 'HPTS 44', 1200, 'hidraulica', 1),
(2, '26', 1, 'metalica', '32', 'urban bike', 'shx4428', 1599.99, 'Ar', 2),
(3, '30', 1, 'Future White', '342', 'Fururism', 'Rbx6378', 9999.99, 'eletrica', 6),
(4, '25', 1, 'green', 'linuxrt 80', 'BMX', 'http8080', 425, 'proxy', 3),
(5, '20', 1, 'ferrugem', 'nao possue', 'bike de rua', 'Motion', 99.99, 'nao possue', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cli` int(10) NOT NULL,
  `cpf_cli` varchar(11) DEFAULT NULL,
  `end_cli` varchar(45) NOT NULL,
  `nome_cli` varchar(45) NOT NULL,
  `tel_cli` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cli`, `cpf_cli`, `end_cli`, `nome_cli`, `tel_cli`) VALUES
(1, '36547948571', 'rua 1 casa 2', 'Matheus', '98765478569'),
(2, '96854785462', 'casa 20 rua 90', 'Ryan', '859658568'),
(3, '96854785462', 'casa 30 rua 10', 'Michael', '744658568'),
(4, '96854785462', 'casa 15 rua 14', 'Michely', '658568987'),
(5, '12396854782', 'casa 1 rua 79', 'Angelo', '568987123'),
(6, '123456', '123456', 'marcos', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cod_fun` int(10) NOT NULL,
  `cpf_fun` varchar(11) NOT NULL,
  `end_fun` varchar(45) NOT NULL,
  `login_fun` varchar(20) NOT NULL,
  `senha_fun` varchar(20) NOT NULL,
  `nome_fun` varchar(45) NOT NULL,
  `tel_fun` varchar(11) NOT NULL,
  `acesso_fun` tinyint(1) NOT NULL,
  `ativo_fun` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cod_fun`, `cpf_fun`, `end_fun`, `login_fun`, `senha_fun`, `nome_fun`, `tel_fun`, `acesso_fun`, `ativo_fun`) VALUES
(1, '36547948571', 'rua 1 casa 2', 'rafael', 'moreira', 'rafael', '98765478569', 1, 1),
(2, '54865478523', 'rua 2 casa 2', 'tnt007', '786123459', 'thalismar', '968574569', 1, 1),
(3, '42547856325', 'rua 3 casa 2', 'pedro', 'pedro', 'pedro', '3654128569', 0, 0),
(4, '58745696324', 'rua 3 casa 1', 'caixa', 'box', 'xvaldo', '9689574569', 1, 0),
(5, '85479965851', 'rua 10 casa 1', 'multi', 'power', 'laser', '239685421', 0, 1),
(7, 'marcos', 'marcos', 'marcos', 'marcos', 'marcos', 'marcos', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `cod_marca` int(10) NOT NULL,
  `nome_marca` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`cod_marca`, `nome_marca`) VALUES
(1, 'bichiclo'),
(2, 'giant'),
(3, 'dahon'),
(4, 'kona'),
(5, 'nirve'),
(6, 'Konami');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `cod_venda` int(10) NOT NULL,
  `horaedata_venda` varchar(30) NOT NULL,
  `valorrecebido_venda` double NOT NULL,
  `valortotal_venda` double NOT NULL,
  `funcionario_cod_fun` int(10) NOT NULL,
  `cliente_cod_cli` int(10) NOT NULL,
  `bikes_cod_bike` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`cod_bike`),
  ADD KEY `fk_bikes_marca1_idx` (`marca_cod_marca`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cli`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cod_fun`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`cod_marca`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`cod_venda`),
  ADD KEY `fk_vendas_funcionario_idx` (`funcionario_cod_fun`),
  ADD KEY `fk_vendas_cliente1_idx` (`cliente_cod_cli`),
  ADD KEY `fk_vendas_bikes1_idx` (`bikes_cod_bike`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bikes`
--
ALTER TABLE `bikes`
  MODIFY `cod_bike` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cli` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `cod_fun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `cod_marca` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `cod_venda` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `bikes`
--
ALTER TABLE `bikes`
  ADD CONSTRAINT `fk_bikes_marca1` FOREIGN KEY (`marca_cod_marca`) REFERENCES `marca` (`cod_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `fk_vendas_bikes1` FOREIGN KEY (`bikes_cod_bike`) REFERENCES `bikes` (`cod_bike`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendas_cliente1` FOREIGN KEY (`cliente_cod_cli`) REFERENCES `cliente` (`cod_cli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendas_funcionario` FOREIGN KEY (`funcionario_cod_fun`) REFERENCES `funcionario` (`cod_fun`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
