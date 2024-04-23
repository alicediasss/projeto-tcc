-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Abr-2021 às 02:54
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formphp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
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
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id_forn`, `nome_forn`, `tel_forn`, `email_forn`, `rua_forn`, `num_rua`, `cid_forn`, `est_forn`, `cep_forn`, `created`) VALUES
(103, 'ViaLog', '51995265987', 'vialog@hotmail.com', 'Rua Stanislau Inplinski', 316, 'Guaíba', 'Rio grande do Sul', '928700000', '2021-04-12 21:22:54'),
(104, 'Apple', '5199556549', 'apple@hotmail.com', 'Rua Otávio Rocha', 87, 'Porto Alegre', 'Rio grande do Sul', '928700000', '2021-04-12 21:25:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
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
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`pk_prod`, `marca_prod`, `mod_prod`, `cor_prod`, `preco_prod`, `forn_id`, `dataFab`, `created`, `modified`) VALUES
(124, 'Samsung', 'A25', 'Preto', '34543', 103, '2021-04-13', '2021-04-12 21:23:39', '2021-04-12 21:36:03'),
(125, 'Samsung', 'A20', 'Branca', '3999 R$', 104, '2021-04-13', '2021-04-12 21:24:07', '2021-04-12 21:24:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `_usuarios`
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
-- Extraindo dados da tabela `_usuarios`
--

INSERT INTO `_usuarios` (`login_nome`, `senha`, `id_usuario`, `email`, `niveis_acesso_id`, `created`, `modified`) VALUES
('teste', '123456', 8, 'teste@hotmail.com', 0, '0000-00-00 00:00:00', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id_forn`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`pk_prod`);

--
-- Índices para tabela `_usuarios`
--
ALTER TABLE `_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id_forn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `pk_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT de tabela `_usuarios`
--
ALTER TABLE `_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
