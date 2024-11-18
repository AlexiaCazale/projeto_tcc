-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/11/2024 às 02:05
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
-- Banco de dados: `dbcorujario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `kando`
--

CREATE TABLE `kando` (
  `idkando` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `descricao` varchar(191) NOT NULL,
  `data_entrega` date NOT NULL,
  `statusAtv` int(11) NOT NULL,
  `disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `kando`
--

INSERT INTO `kando` (`idkando`, `nome`, `descricao`, `data_entrega`, `statusAtv`, `disciplina`) VALUES
(1, 'testeeeeesdadasdsadas', 'aaaaaaaaa', '2024-11-05', 2, 2),
(5, 'tyitdyitd', 'tujldyjfgliu', '2024-11-16', 2, 1),
(6, 'alterando aaaa', 'xfvxcvgdfgvdsdsa', '2024-11-19', 0, 0),
(8, 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '2024-11-14', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(191) NOT NULL,
  `senha` varchar(191) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `perfil` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `senha`, `telefone`, `perfil`) VALUES
(12, 'Alexia Ravanelli Cazale', 'alexiacazale7@gmail.com', '202cb962ac59075b964b07152d234b70', '14991156582', ''),
(13, 'Geovana Valentim', 'geovanavalentim@gmail.com', '202cb962ac59075b964b07152d234b70', '123456789', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `kando`
--
ALTER TABLE `kando`
  ADD PRIMARY KEY (`idkando`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `kando`
--
ALTER TABLE `kando`
  MODIFY `idkando` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
