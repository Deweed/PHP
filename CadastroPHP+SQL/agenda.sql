-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Set 13, 2021 as 10:10 PM
-- Versão do Servidor: 5.5.8
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `codigo_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cidade` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `pais` varchar(30) NOT NULL,
  PRIMARY KEY (`codigo_cidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`codigo_cidade`, `nome_cidade`, `estado`, `pais`) VALUES
(1, 'São Paulo', 'São Paulo', 'Brasil'),
(2, 'Rio de Janeiro', 'Rio de Janeiro', 'Brasil'),
(3, 'Porto Alegre ', 'Rio Grande do Sul', 'Brasil'),
(4, 'Recife ', 'Pernambuco ', 'Brasil'),
(5, 'Rio Pomba ', 'Minas Gerais', 'Brasil'),
(6, 'Barbacena', 'Minas Gerais', 'Brasil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `codigo_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome_contato` varchar(40) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `codigo_cidade` int(11) NOT NULL,
  PRIMARY KEY (`codigo_contato`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`codigo_contato`, `nome_contato`, `data_nascimento`, `telefone`, `celular`, `email`, `endereco`, `codigo_cidade`) VALUES
(1, 'Jonas Santos', '2001-09-27', '665214515', '998734567', 'emaildoorno@yahoo.com', 'Rua Vicente Dutra', 0),
(2, 'Juca Melo', '0000-00-00', '', '888734567', '', 'Rua Nastácia de Sá', 0),
(3, 'Juliana Lima', '0000-00-00', '', '998656788', '', 'Rua Treze de Maio', 0),
(4, 'Vanessa de Oliveira', '0000-00-00', '', '999934567', '', 'Praça Central', 0);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `contato_ibfk_1` FOREIGN KEY (`codigo_contato`) REFERENCES `cidade` (`codigo_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;
