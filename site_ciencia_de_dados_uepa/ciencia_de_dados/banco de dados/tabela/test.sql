-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/05/2024 às 15:20
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pwdados`
--

CREATE TABLE `pwdados` (
  `mensagem` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `assunto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `pwdados`
--

INSERT INTO `pwdados` (`mensagem`, `email`, `assunto`) VALUES
('meu pc parou de funcionar aqui no setor d', 'carlosbeltrano@gmail.com', ''),
('Diego', 'dithemang@gmail.com', ''),
('Diego', 'dithemang@gmail.com', ''),
('Diego', 'dithemang@gmail.com', ''),
('Diego', 'dithemang@gmail.com', ''),
('Diego', 'dithemang@gmail.com', ''),
('dsdsdiegoo auudghdd', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('ultimo teste', 'dithemang@gmail.com', ''),
('ultimo teste', 'dithemang@gmail.com', ''),
('eu, acredito que seja possivel melhorar tais quesitos..', 'dithemang@gmail.com', ''),
('Limpem a escada ela se encontra suja', 'carlosciclano@yahoo.com', ''),
('Limpem a escada ela se encontra suja', 'carlosciclano@yahoo.com', ''),
('boa tarde, melhorem.', 'douglasbeltrano@gmail.com', ''),
('Testando 1, 2, 3, 4.', 'joao.silva@teste.com.br', ''),
('boa tarde, melhorem.', 'carlosciclano@yahoo.com', '2'),
('boa tarde, melhorem.', 'douglasbeltrano@gmail.com', 'Documentação');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
