-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/11/2024 às 16:36
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdcorujario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `kando`
--

CREATE TABLE `kando` (
  `idkando` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `data_entrega` date NOT NULL,
  `statusAtv` enum('Fazer','Fazendo','Feito') NOT NULL,
  `disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `kando`
--

INSERT INTO `kando` (`idkando`, `nome`, `descricao`, `data_entrega`, `statusAtv`, `disciplina`) VALUES
(1, 'Entrega de projeto TCC', 'Tcc corujário', '2024-11-01', 'Fazendo', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `kando`
--
ALTER TABLE `kando`
  ADD PRIMARY KEY (`idkando`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `kando`
--
ALTER TABLE `kando`
  MODIFY `idkando` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
