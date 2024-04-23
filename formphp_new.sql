-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 07:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id_forn` int(11) NOT NULL,
  `nome_forn` varchar(200) CHARACTER SET utf8 NOT NULL,
  `tel_forn` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email_forn` varchar(25) CHARACTER SET utf8 NOT NULL,
  `rua_forn` varchar(200) CHARACTER SET utf8 NOT NULL,
  `num_rua` int(11) NOT NULL,
  `cid_forn` varchar(30) CHARACTER SET utf8 NOT NULL,
  `est_forn` varchar(30) CHARACTER SET utf8 NOT NULL,
  `cep_forn` varchar(20) CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fornecedores`
--

INSERT INTO `fornecedores` (`id_forn`, `nome_forn`, `tel_forn`, `email_forn`, `rua_forn`, `num_rua`, `cid_forn`, `est_forn`, `cep_forn`, `created`) VALUES
(103, 'ViaLog', '51995265987', 'vialog@hotmail.com', 'Rua Stanislau Inplinski', 316, 'Guaíba', 'Rio grande do Sul', '928700000', '2021-04-12 21:22:54'),
(104, 'Apple', '5199556549', 'apple@hotmail.com', 'Rua Otávio Rocha', 87, 'Porto Alegre', 'Rio grande do Sul', '928700000', '2021-04-12 21:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `pk_prod` int(11) NOT NULL,
  `marca_prod` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mod_prod` varchar(200) CHARACTER SET utf8 NOT NULL,
  `cor_prod` varchar(200) CHARACTER SET utf8 NOT NULL,
  `preco_prod` varchar(20) NOT NULL,
  `forn_id` int(11) NOT NULL,
  `dataFab` date DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`pk_prod`, `marca_prod`, `mod_prod`, `cor_prod`, `preco_prod`, `forn_id`, `dataFab`, `created`, `modified`) VALUES
(124, 'Samsung', 'A25', 'Preto', '34543', 103, '2021-04-13', '2021-04-12 21:23:39', '2021-04-12 21:36:03'),
(125, 'Samsung', 'A20', 'Branca', '3999', 104, '2021-04-13', '2021-04-12 21:24:07', '2021-04-12 21:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `_clientes`
--

CREATE TABLE `_clientes` (
  `CPF` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `celular` decimal(11,0) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `numero` int(5) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_pedidos`
--

CREATE TABLE `_pedidos` (
  `id` int(3) NOT NULL,
  `cliente` int(11) NOT NULL,
  `valor` decimal(9,2) NOT NULL,
  `linkPag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_prodpedidos`
--

CREATE TABLE `_prodpedidos` (
  `id` int(3) NOT NULL,
  `idPedido` int(3) NOT NULL,
  `idProduto` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_produtos`
--

CREATE TABLE `_produtos` (
  `id` int(3) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `valor` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_usuarios`
--

CREATE TABLE `_usuarios` (
  `login_nome` varchar(25) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_usuarios`
--

INSERT INTO `_usuarios` (`login_nome`, `senha`, `id_usuario`, `email`, `niveis_acesso_id`, `created`, `modified`) VALUES
('teste', '123456', 8, 'teste@hotmail.com', 0, '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id_forn`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`pk_prod`);

--
-- Indexes for table `_clientes`
--
ALTER TABLE `_clientes`
  ADD PRIMARY KEY (`CPF`);

--
-- Indexes for table `_pedidos`
--
ALTER TABLE `_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`);

--
-- Indexes for table `_prodpedidos`
--
ALTER TABLE `_prodpedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPedido` (`idPedido`),
  ADD KEY `idProduto` (`idProduto`);

--
-- Indexes for table `_produtos`
--
ALTER TABLE `_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_usuarios`
--
ALTER TABLE `_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id_forn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `pk_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `_pedidos`
--
ALTER TABLE `_pedidos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_prodpedidos`
--
ALTER TABLE `_prodpedidos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_produtos`
--
ALTER TABLE `_produtos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `_usuarios`
--
ALTER TABLE `_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `_pedidos`
--
ALTER TABLE `_pedidos`
  ADD CONSTRAINT `_pedidos_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `_clientes` (`CPF`);

--
-- Constraints for table `_prodpedidos`
--
ALTER TABLE `_prodpedidos`
  ADD CONSTRAINT `_prodpedidos_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `_pedidos` (`id`),
  ADD CONSTRAINT `_prodpedidos_ibfk_2` FOREIGN KEY (`idProduto`) REFERENCES `_produtos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
