-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/04/2024 às 04:09
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.1.25

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
-- Estrutura para tabela `camisetas`
--

CREATE TABLE `camisetas` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `camisetas`
--

INSERT INTO `camisetas` (`id`, `imagem`, `modelo`, `quantidade`, `valor`) VALUES
(1, 'images/camiseta1.jpg', 'preta', 18, 100),
(2, 'images/camiseta2.jpg', 'branca', 80, 70),
(3, 'images/camiseta3.jpg', 'branca com detalhes', 50, 90),
(4, 'images/camiseta4.jpg', 'cinza', 20, 60),
(5, 'images/camiseta5.jpg', 'rosa', 30, 65),
(6, 'images/camiseta6.jpg', 'preta com detalhes', 20, 100),
(7, 'images/camiseta7.jpg', 'roxa', 45, 98),
(8, 'images/camiseta8.jpg', 'rosa simples', 90, 25),
(9, 'images/camiseta9.jpg', 'branca mesclado', 12, 125),
(10, 'images/camiseta10.jpg', 'marrom claro', 37, 180);

-- --------------------------------------------------------

--
-- Estrutura para tabela `esportivos`
--

CREATE TABLE `esportivos` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `esportivos`
--

INSERT INTO `esportivos` (`id`, `imagem`, `modelo`, `quantidade`, `valor`) VALUES
(1, 'images/calcas-adidas1.png', 'Calça adidas azul marinho com detalhes brancos ', 51, 40),
(2, 'images/calcas-adidas2.png', 'Calça adidas verde com detalhes brancos', 20, 50),
(3, 'images/calcas-adidas3.png', 'Calça adidas feminina rosa com detalhes brancos', 25, 80),
(4, 'images/camiseta-puma1.png', 'Camiseta puma preta com detalhes brancos', 35, 95),
(5, 'images/camiseta-puma2png.jfif', 'Camiseta puma preta', 15, 105),
(6, 'images/camiseta-puma3.png', 'Camiseta puma azul claro', 22, 120),
(7, 'images/shorts-nike1.jpg', 'Short nike preto', 4, 150),
(8, 'images/shorts-nike2.jpg', 'Short nike branco com azul', 3, 200),
(9, 'images/shorts-nike3.jpg', 'Short feminino nike rosa', 12, 210);

-- --------------------------------------------------------

--
-- Estrutura para tabela `infantis`
--

CREATE TABLE `infantis` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `infantis`
--

INSERT INTO `infantis` (`id`, `imagem`, `modelo`, `quantidade`, `valor`) VALUES
(1, 'images/infantis-adidas1.png', 'Conjunto infantil adidas azul marinho', 37, 40),
(2, 'images/infantis-adidas2.png', 'Conjunto infantil adidas azul e branco', 10, 50),
(3, 'images/infantis-nike1.png', 'Conjunto infantil nike branco com detalhes pretos', 12, 80),
(4, 'images/infantis-nike2.png', 'Conjunto infantil nike preto', 14, 95),
(5, 'images/infantis-nike3.png', 'Conjunto infantil nkde branco com detalhes dourados', 12, 105),
(6, 'images/tenis_infantil-adidas1.png', 'Tênis adidas azul com detalhes brancos', 37, 120),
(7, 'images/tenis_infantil-adidas2.png', 'Tênis adidas colorido', 52, 150),
(8, 'images/tenis_infantil-nike.png', 'Tênis nike rosa com detalhes brancos', 10, 200),
(9, 'images/tenis_infantil-nike2.png', 'Tênis nike preto ', 10, 210);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tenis`
--

CREATE TABLE `tenis` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tenis`
--

INSERT INTO `tenis` (`id`, `imagem`, `modelo`, `quantidade`, `valor`) VALUES
(1, 'images/tenis-nike-1.JPG', 'Tênis nike Branco ', 48, 40),
(2, 'images/tenis-nike2.jpeg', 'Tênis nike branco com detalhes preto', 56, 50),
(3, 'images/tenis-nike-3.jpg', 'Tênsi nike preto com detalhes brancos', 90, 80),
(4, 'images/tenis-nike-4.jpg', 'Tênis nike amarelho com detalhes brancos', 20, 95),
(5, 'images/tenis-adidas1.jpg', 'Tênis adidas branco com detalhes pretos', 50, 105),
(6, 'images/tenis-adidas2.jpeg', 'Tênis adidas preto com detalhes brancos', 25, 120),
(7, 'images/tenis-vans1.png', 'Tênis Vans preto com detalhes brancos', 32, 150),
(8, 'images/tenis-vans2.jpg', 'Tênis vans branco com detalhes coloridos', 36, 200),
(9, 'images/tenis-vans3.jpg', 'Tênis amarelo com detalhes brancos', 45, 210);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `foto`, `endereco`, `telefone`, `cidade`, `estado`, `cep`) VALUES
(1, 'usuario 1', 'usuario1@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '../fotos/users/usuario-1.png', 'América,Rua Venezuela', '(50)55055-0550', 'Barretos', 'SP', '14783183');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `camisetas`
--
ALTER TABLE `camisetas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `esportivos`
--
ALTER TABLE `esportivos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `infantis`
--
ALTER TABLE `infantis`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tenis`
--
ALTER TABLE `tenis`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `camisetas`
--
ALTER TABLE `camisetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `esportivos`
--
ALTER TABLE `esportivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `infantis`
--
ALTER TABLE `infantis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tenis`
--
ALTER TABLE `tenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
