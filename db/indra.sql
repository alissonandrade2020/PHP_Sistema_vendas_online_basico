-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Set-2021 às 16:06
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indra`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `cpf_cnpj`, `data`) VALUES
(1, 'Alberia Beatriz Germano de Oliveira Andrade', '3263423423', '2021-09-01 16:30:07'),
(2, 'Alisson de Andrade Araujo', '3234237423', '2021-09-01 16:30:07'),
(3, 'Carlos Augusto Bezerra', '3234213423', '2021-09-01 16:30:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes_produtos`
--

CREATE TABLE `clientes_produtos` (
  `id_cliente_produto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes_produtos`
--

INSERT INTO `clientes_produtos` (`id_cliente_produto`, `id_cliente`, `id_produto`, `data`) VALUES
(1, 1, 1, '2019-06-25 21:06:55'),
(2, 1, 2, '2019-06-25 21:06:55'),
(3, 2, 3, '2019-06-25 21:06:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `quantidade` varchar(255) NOT NULL,
  `preco` double(10,2) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `descricao`, `quantidade`, `preco`, `data`) VALUES
(1, 'TV SMART', '27', 515.00, '2021-09-01 21:40:00'),
(2, 'CELULAR', '30', 25.00, '2021-09-01 21:40:00'),
(3, 'NOTEBOOK', '84', 1478.00, '2021-09-01 21:40:00'),
(0, 'CALCULADORA', '15', 550.00, '2021-09-03 13:19:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `data`) VALUES
(1, 'admin', '25f9e794323b453885f5181f1b624d0b', '2019-06-25 21:07:29'),
(2, 'alisson', '25f9e794323b453885f5181f1b624d0b', '2019-06-25 21:07:29'),
(3, 'andrade2', '25f9e794323b453885f5181f1b624d0b', '2019-06-25 21:07:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `cpf_cnpj` (`cpf_cnpj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
