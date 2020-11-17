-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Out-2020 às 02:51
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `telalogincadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrousuarios`
--

DROP TABLE IF EXISTS `cadastrousuarios`;
CREATE TABLE IF NOT EXISTS `cadastrousuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imagem` varchar(250) ,
  `senha` char(32) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastrousuarios`
--

INSERT INTO `cadastrousuarios` (`id_usuario`, `nome`, `email`, `senha`) VALUES
(1, 'sjabdhsavd', 'rrrr@rr.com', '3333333'),
(2, 'sjabdhsavd', 'eeeeee@ee.com', '555555'),
(3, '3434', '4443@55.com', '444444'),
(4, '3434', '111@1.com', '444444'),
(5, 'sjabdhsavd55', '112@12.com', '888888'),
(6, '3434', '34032398324@1.com', '2a38a4a9316c49e5a833517c45d31070'),
(7, 'aaaa', '1237@68', 'ed3d2c21991e3bef5e069713af9fa6ca'),
(8, 'sjabdhsavd', '734934@55.com', '96e79218965eb72c92a549dd5a330112'),
(9, 'aaaa', 'aaa@aa.br', '0b4e7a0e5fe84ad35fb5f95b9ceeac79'),
(10, 'sandy', 'aromadasflores@yahoo.com.br', '8b247c08a774d01dad13fc699a473781'),
(11, 'sjabdhsavd', '33@33.com', '1a100d2c0dab19c4430e7d73762b3423');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
