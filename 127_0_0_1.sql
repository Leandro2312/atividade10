-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Mar-2023 às 02:15
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_cliente`
--
CREATE DATABASE IF NOT EXISTS `cadastro_cliente` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cadastro_cliente`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_clientes`
--

CREATE TABLE `cadastro_clientes` (
  `id` int(11) NOT NULL,
  `cpf` text NOT NULL,
  `nome` text NOT NULL,
  `rua` text NOT NULL,
  `numero` text NOT NULL,
  `bairro` int(100) NOT NULL,
  `cidade` text NOT NULL,
  `estado` text NOT NULL,
  `email` text NOT NULL,
  `telefone` text NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro_clientes`
--

INSERT INTO `cadastro_clientes` (`id`, `cpf`, `nome`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `telefone`, `senha`) VALUES
(1, '111.111.111-11', 'teste', 'teste', '11', 0, 'teste', 'teste', 'teste@gmail.com', '111111111111', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_clientes`
--
ALTER TABLE `cadastro_clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_clientes`
--
ALTER TABLE `cadastro_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
