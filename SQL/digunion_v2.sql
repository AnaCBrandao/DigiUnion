-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 19-Abr-2022 às 16:01
-- Versão do servidor: 5.6.34
-- PHP Version: 7.1.11
DELETE SCHEMA IF EXISTS digunion;
CREATE SCHEMA IF NOT EXISTS digunion;
USE digunion;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digunion`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `nome_pessoa` varchar(260) NOT NULL,
  `email_pessoa` varchar(100) NOT NULL,
  `cpf_pessoa` int(11) NOT NULL,
  `datanasc_pessoa` date NOT NULL,
  `senha_pessoa` varchar(8) NOT NULL,
  `csenha_pessoa` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`nome_pessoa`, `email_pessoa`, `cpf_pessoa`, `datanasc_pessoa`, `senha_pessoa`, `csenha_pessoa`) VALUES
('ana', 'ana@gmail.com', 123456, '2013-12-17', 'Ifsp1234', 'Ifsp1234'),
('maria eduarda', 'dudalua@gmail.com', 323979, '2002-12-20', 'Ifsp1234', 'Ifsp1234'),
('Mariani', 'mariani1@gmail.com', 2147483647, '6628-02-15', '12345678', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`cpf_pessoa`),
  ADD UNIQUE KEY `email_pessoa` (`email_pessoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `projetos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) NOT NULL,
  `local` varchar(500),
  `categoria` varchar(100),
  `descricao` varchar(5000) NOT NULL,
  `contribuicao` varchar(2000) NOT NULL,
  `capa` varchar(10000) NOT NULL,
  PRIMARY KEY (id)
)

CREATE TABLE `categorias` (
  `id_cat` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  PRIMARY KEY (id_cat)
)

INSERT INTO `categorias` (`nome`) VALUES
('Educação'),('Música'),('Teatro'),('Gastronomia'),('Desenho');