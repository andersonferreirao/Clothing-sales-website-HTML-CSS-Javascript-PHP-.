-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Jan-2024 às 01:49
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `web-site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `camisetas`
--

DROP TABLE IF EXISTS `camisetas`;
CREATE TABLE IF NOT EXISTS `camisetas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `quantidade` int NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `camisetas`
--

INSERT INTO `camisetas` (`id`, `imagem`, `modelo`, `quantidade`, `valor`) VALUES
(1, 'images/camiseta1.jpg', 'preta', 18, '100'),
(2, 'images/camiseta2.jpg', 'branca', 80, '70'),
(3, 'images/camiseta3.jpg', 'branca com detalhes', 50, '90'),
(4, 'images/camiseta4.jpg', 'cinza', 20, '60'),
(5, 'images/camiseta5.jpg', 'rosa', 30, '65'),
(6, 'images/camiseta6.jpg', 'preta com detalhes', 20, '100'),
(7, 'images/camiseta7.jpg', 'roxa', 45, '98'),
(8, 'images/camiseta8.jpg', 'rosa simples', 90, '25'),
(9, 'images/camiseta9.jpg', 'branca mesclado', 12, '125'),
(10, 'images/camiseta10.jpg', 'marrom claro', 37, '180');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
