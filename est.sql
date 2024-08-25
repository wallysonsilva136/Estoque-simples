-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Jul-2022 às 15:47
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `est`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `nome` text NOT NULL,
  `cpf` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`nome`, `cpf`) VALUES
('teste', 1014845130),
('sasasasadsdasd', 56251328010),
('ola', 69213049064),
('teste', 1014845130),
('corre', 40042280001),
('dada', 31843061007);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `codigo` int(10) NOT NULL,
  `nome` text NOT NULL,
  `qtd` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigo`, `nome`, `qtd`) VALUES
(123, 'sadsadsadasd', -4),
(456, 'lata', 8),
(789, 'rice', 15),
(357, 'batata', 7),
(222, 'mamacsa', 6),
(777, 'marca', 3),
(888, 'plastico', -3),
(999, 'sopa', 3),
(333, 'lagosta', -3),
(444, 'botao', 5),
(1111, 'cor', -6),
(159, 'teste02', -10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

DROP TABLE IF EXISTS `venda`;
CREATE TABLE IF NOT EXISTS `venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(10) NOT NULL,
  `qtd` int(10) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id`, `codigo`, `qtd`, `cpf`) VALUES
(1, 357, 3, 1014845130),
(2, 357, 1, 1014845130),
(3, 789, 3, 1103264520),
(4, 123, 1, 1014845130),
(5, 123, 2, 69213049064),
(6, 777, 2, 69213049064),
(7, 333, 2, 1014845130),
(8, 333, 3, 40042280001),
(9, 333, 3, 69213049064),
(10, 333, 3, 40042280001),
(11, 333, 3, 40042280001),
(12, 222, 1, 1014845130),
(13, 123, 3, 69213049064),
(14, 888, 4, 1014845130),
(15, 789, 3, 1014845130),
(16, 444, 5, 40042280001),
(17, 444, 5, 40042280001),
(18, 333, 4, 1014845130),
(19, 333, 5, 40042280001),
(20, 1111, 2, 40042280001),
(21, 444, 4, 40042280001),
(22, 444, 5, 40042280001),
(23, 444, 5, 40042280001),
(24, 444, 5, 40042280001),
(25, 444, 5, 40042280001),
(26, 444, 5, 40042280001),
(27, 789, 6, 40042280001),
(28, 357, 0, 1014845130);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
