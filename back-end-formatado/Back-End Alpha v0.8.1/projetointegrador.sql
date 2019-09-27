-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Set-2019 às 02:04
-- Versão do servidor: 10.1.39-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetointegrador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cod_cliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `datanasc` date NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `telefone` varchar(13) DEFAULT NULL,
  `celular` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `como_conheceu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cod_cliente`, `nome`, `cpf`, `sexo`, `datanasc`, `endereco`, `numero`, `bairro`, `cidade`, `cep`, `uf`, `telefone`, `celular`, `email`, `como_conheceu`) VALUES
(2, 'Gabriel Brandão Rodriguez', '151.269.227-18', 'Masculino', '1997-04-05', 'Rua Japurá', '450', 'Praça Seca', 'Rio de Janeiro', '21320-000', 'RJ', '', '(21)97026-8850', 'gabrielbr_21@outlook.com', 'Amigos'),
(3, 'Gabriel Marcos Cagão', '321.512.131-35', 'Masculino', '2019-09-10', 'Rua Sei La', '444', 'Pepecolandia', 'Pepecopolis', '42354-151', 'AC', '(21)4354-8125', '(21)94351-4684', 'gabriel_cagao@hotmail.com', 'Internet'),
(4, 'João Batata Batatão', '156.152.156-12', 'Masculino', '2019-09-27', 'Rua da Xereca', '69', 'Vem Transar', 'Pepecopolis', '85416-351', 'DF', '(21)5415-1858', '(21)91054-5418', 'joao_batata@batatao.com', 'Outros'),
(5, 'João das Neves', '031.545.102-02', 'Masculino', '2019-09-18', 'Westeros', '666', 'Muralha', 'Winterfell', '51541-510', 'BA', '(21)2415-8105', '(21)96263-1941', 'johnsnow@westeros.com', 'Amigos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curriculos`
--

CREATE TABLE `curriculos` (
  `cod_curriculo` int(11) NOT NULL,
  `nome_curriculo` varchar(100) NOT NULL,
  `email_curriculo` varchar(100) NOT NULL,
  `curriculo` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `login`, `senha`) VALUES
(1, 'admin', 'Am@4050497'),
(2, 'fabio', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cod_cliente`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `curriculos`
--
ALTER TABLE `curriculos`
  ADD PRIMARY KEY (`cod_curriculo`),
  ADD UNIQUE KEY `email_curriculo` (`email_curriculo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `curriculos`
--
ALTER TABLE `curriculos`
  MODIFY `cod_curriculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
