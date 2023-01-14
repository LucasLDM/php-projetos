-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jan-2023 às 22:31
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
-- Banco de dados: `minhaloja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(14) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`) VALUES
(1, 'Bill', 'Gates', 'bill.gates@microsoft.com', '+100100100', 'Washington, USA'),
(2, 'Will', 'Smith', 'will@gmail.com', '+111222333', 'Arizona, USA'),
(3, 'Georgi', 'Facello', 'Georgi@gmail.com', '+123123123', 'New York, USA'),
(4, 'Bezalel', 'Simmel', 'Bezalel@gmail.com', '+122122122', 'California, USA'),
(5, 'Parto', 'Bamford', 'Parto@gmail.com', '+124124124', 'Chicago, USA'),
(6, 'Chirstian', 'Koblick', 'Chirstian@gmail.com', '+125125125', 'New York, USA'),
(7, 'Kyoichi', 'Maliniak', 'Kyoichi@gmail.com', '+126126126', 'California, USA'),
(8, 'Anneke', 'Preusig', 'Anneke@gmail.com', '+127127127', 'Chicago, USA'),
(9, 'Tzvetan', 'Zielinski', 'Tzvetan@gmail.com', '+128128128', 'New York, USA'),
(10, 'Saniya', 'Kalloufi', 'Saniya@gmail.com', '+129129129', 'California, USA'),
(11, 'Sumant', 'Peac', 'Sumant@gmail.com', '+130130130', 'Chicago, USA'),
(12, 'Duangkaew', 'Piveteau', 'Duangkaew@gmail.com', '+131131131', 'New York, USA'),
(13, 'Mary', 'Sluis', 'Mary@gmail.com', '+132132132', 'Chicago, USA');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
