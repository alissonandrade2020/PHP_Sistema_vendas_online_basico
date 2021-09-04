-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Set-2021 às 16:21
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `indra`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `cpf_cnpj`, `data`) VALUES
(1, 'Alberia Beatriz Germano', '3263423423', '2021-09-01 16:30:07'),
(2, 'Alisson de Andrade Araujo', '3234237423', '2021-09-01 16:30:07'),
(11, 'Gutenberg', '3232423432', '2021-09-04 14:01:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes_produtos`
--

CREATE TABLE `clientes_produtos` (
  `id_cliente_produto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes_produtos`
--

INSERT INTO `clientes_produtos` (`id_cliente_produto`, `id_cliente`, `id_produto`, `data`) VALUES
(0, 2, 1, '2021-09-04 14:15:17'),
(0, 1, 2, '2021-09-04 14:16:08'),
(0, 11, 1, '2021-09-04 14:18:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `quantidade` varchar(255) NOT NULL,
  `preco` double(10,2) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `descricao`, `quantidade`, `preco`, `data`) VALUES
(1, 'CELULAR', '37', 250.00, '2021-09-01 21:40:00'),
(2, 'NOTEBOOK', '84', 1470.00, '2021-09-01 21:40:00'),
(0, 'TV', '11', 258.00, '2021-09-03 22:00:21'),
(0, 'TECLADO', '67', 5820.00, '2021-09-04 14:20:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `data`) VALUES
(1, 'admin', '25f9e794323b453885f5181f1b624d0b', '2019-06-25 21:07:29'),
(2, 'alisson', '25f9e794323b453885f5181f1b624d0b', '2019-06-25 21:07:29'),
(3, 'andrade2', '25f9e794323b453885f5181f1b624d0b', '2019-06-25 21:07:29');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `cpf_cnpj` (`cpf_cnpj`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
