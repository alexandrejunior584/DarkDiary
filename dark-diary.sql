-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Mar-2021 às 23:47
-- Versão do servidor: 5.7.20-log
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dark-diary`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios`
--

DROP TABLE IF EXISTS `anuncios`;
CREATE TABLE IF NOT EXISTS `anuncios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(50) NOT NULL,
  `texto` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `anuncios`
--

INSERT INTO `anuncios` (`id`, `data`, `texto`) VALUES
(5, '26/02/2021', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur ducimus ad architecto molestias dignissimos rem illum dolorum soluta labore provident esse quasi neque quam voluptatum et natus, quisquam amet!'),
(7, '27/02/2021', 'OlÃ¡, tenho nada para falar!!!!!'),
(8, '28/02/2021', 'OlÃ¡, parte 3!!!!!!!!! s2'),
(9, '29/02/2021', 'hoje meu dia foi Ã³timo!!!!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios_texto`
--

DROP TABLE IF EXISTS `anuncios_texto`;
CREATE TABLE IF NOT EXISTS `anuncios_texto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anuncio` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Alexandre', 'alexandrejunior584@gmail.com', 'juninho123'),
(2, 'alejandro', 'alejandro22@gmail.com', 'alejandro123'),
(3, 'Rafael', 'rafael22@gmail.com', 'rafael123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
