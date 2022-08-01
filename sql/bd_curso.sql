-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Ago-2022 às 14:40
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_curso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `nmCategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcategoria`
--

INSERT INTO `tbcategoria` (`idCategoria`, `nmCategoria`) VALUES
(1, 'Alimentos'),
(2, 'Vestuário'),
(3, 'Tecnologia da Informação'),
(4, 'Cosméticos'),
(5, 'Eletrônicos'),
(6, 'Laticínios'),
(7, 'Perfumaria'),
(8, 'Brinquedos'),
(9, 'Limpeza'),
(10, 'Móveis'),
(11, 'Bebidas'),
(13, 'Marítimo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprodutos`
--

CREATE TABLE `tbprodutos` (
  `idProduto` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `nmProduto` varchar(50) NOT NULL,
  `descProduto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbprodutos`
--

INSERT INTO `tbprodutos` (`idProduto`, `idCategoria`, `nmProduto`, `descProduto`) VALUES
(21, 1, 'Arroz', '5kg da marca Tio João'),
(22, 1, 'Feijão', '1kg'),
(23, 11, 'Gatorade', '500ml'),
(24, 7, 'Malbec', 'Boticário - Masculino');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Índices para tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD CONSTRAINT `tbprodutos_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
