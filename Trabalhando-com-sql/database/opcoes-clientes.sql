-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Jan-2023 às 23:03
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `opcoes-clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientesinfo`
--

CREATE TABLE `clientesinfo` (
  `id` int(11) NOT NULL,
  `nome` varchar(65) NOT NULL,
  `senha` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientesinfo`
--

INSERT INTO `clientesinfo` (`id`, `nome`, `senha`) VALUES
(2, 'Ana', 'ana123'),
(3, 'Lucas', 'lucas123'),
(4, 'Carlos', 'carlos123'),
(6, 'Pedoca', 'pedoca22'),
(8, 'Carlos', 'senhabul1212'),
(12, '', 'as12'),
(13, '', 'ssa1'),
(14, 'as', 'ssa1'),
(15, 'Galindo', 'galindo23');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientesinfo`
--
ALTER TABLE `clientesinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientesinfo`
--
ALTER TABLE `clientesinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
