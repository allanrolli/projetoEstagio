-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 29-Abr-2019 às 19:55
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `datashow_reserva`
--

CREATE TABLE `datashow_reserva` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `nome` varchar(200) NOT NULL,
  `setor` varchar(200) NOT NULL,
  `ramal` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  `obs` longtext NOT NULL,
  `devolvido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `datashow_reserva`
--

INSERT INTO `datashow_reserva` (`id`, `data`, `hora`, `nome`, `setor`, `ramal`, `ativo`, `obs`, `devolvido`) VALUES
(1, '2019-04-24', '12:00:00', 'Mario', '2', 2, 1, '', 0),
(2, '2019-05-07', '15:00:00', 'Carlos', '2', 1, 1, '', 0),
(3, '2019-05-10', '14:00:00', 'Roberto', '1', 3, 1, '', 0),
(4, '2019-05-11', '17:00:00', 'Maria Helena', '2', 12, 1, '', 0),
(5, '2019-06-06', '12:00:00', 'Luiz', '4', 2, 1, '', 0),
(6, '2019-04-24', '12:00:00', 'Vanessa', '5', 14, 1, '', 0),
(7, '2019-05-08', '18:00:00', 'Marques', '3', 12, 1, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dvd`
--

CREATE TABLE `dvd` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `nome` varchar(200) NOT NULL,
  `setor` varchar(200) NOT NULL,
  `ramal` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  `obs` longtext NOT NULL,
  `devolvido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dvd`
--

INSERT INTO `dvd` (`id`, `data`, `hora`, `nome`, `setor`, `ramal`, `ativo`, `obs`, `devolvido`) VALUES
(1, '2019-05-08', '14:00:00', 'JoÃ£o', '3', 13, 1, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento_audio`
--

CREATE TABLE `equipamento_audio` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `nome` varchar(200) NOT NULL,
  `setor` varchar(200) NOT NULL,
  `ramal` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  `obs` longtext NOT NULL,
  `devolvido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento_video`
--

CREATE TABLE `equipamento_video` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `nome` varchar(200) NOT NULL,
  `setor` varchar(200) NOT NULL,
  `ramal` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  `obs` longtext NOT NULL,
  `devolvido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `extensao`
--

CREATE TABLE `extensao` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `nome` varchar(200) NOT NULL,
  `setor` varchar(200) NOT NULL,
  `ramal` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  `obs` longtext NOT NULL,
  `devolvido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `extensao`
--

INSERT INTO `extensao` (`id`, `data`, `hora`, `nome`, `setor`, `ramal`, `ativo`, `obs`, `devolvido`) VALUES
(1, '0000-00-00', '00:00:00', '', '', 0, 1, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fita_vhs`
--

CREATE TABLE `fita_vhs` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `nome` varchar(200) NOT NULL,
  `setor` varchar(200) NOT NULL,
  `ramal` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  `obs` longtext NOT NULL,
  `devolvido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fita_vhs`
--

INSERT INTO `fita_vhs` (`id`, `data`, `hora`, `nome`, `setor`, `ramal`, `ativo`, `obs`, `devolvido`) VALUES
(1, '2019-05-01', '15:00:00', 'Mario', '2', 12, 1, '', 0),
(2, '2019-05-07', '18:30:00', 'Caio', '2', 1, 1, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `radio`
--

CREATE TABLE `radio` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `nome` varchar(200) NOT NULL,
  `setor` varchar(200) NOT NULL,
  `ramal` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  `obs` longtext NOT NULL,
  `devolvido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala_de_aula`
--

CREATE TABLE `sala_de_aula` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `nome` varchar(200) NOT NULL,
  `ramal` int(11) NOT NULL,
  `recurso` int(11) NOT NULL,
  `turno` varchar(200) NOT NULL,
  `ativo` int(11) NOT NULL,
  `obs` longtext NOT NULL,
  `devolvido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sala_de_aula`
--

INSERT INTO `sala_de_aula` (`id`, `data`, `nome`, `ramal`, `recurso`, `turno`, `ativo`, `obs`, `devolvido`) VALUES
(1, '2019-05-08', 'Mario Celso', 22, 2, 'Matutino', 1, '', 0),
(2, '2019-05-09', 'Mario Celso', 4, 6, 'Tarde', 1, '', 0),
(3, '2019-05-10', 'Maria Helena', 2, 4, 'Noite', 1, '', 0),
(4, '2019-06-06', 'Bruno ', 3, 1, 'Manha', 1, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nivel` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `nivel`) VALUES
(1, 'Mario', '25d55ad283aa400af464c76d713c07ad', 1),
(2, 'Allan', '25d55ad283aa400af464c76d713c07ad', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datashow_reserva`
--
ALTER TABLE `datashow_reserva`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipamento_audio`
--
ALTER TABLE `equipamento_audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipamento_video`
--
ALTER TABLE `equipamento_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extensao`
--
ALTER TABLE `extensao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fita_vhs`
--
ALTER TABLE `fita_vhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio`
--
ALTER TABLE `radio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sala_de_aula`
--
ALTER TABLE `sala_de_aula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datashow_reserva`
--
ALTER TABLE `datashow_reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dvd`
--
ALTER TABLE `dvd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipamento_audio`
--
ALTER TABLE `equipamento_audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipamento_video`
--
ALTER TABLE `equipamento_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `extensao`
--
ALTER TABLE `extensao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fita_vhs`
--
ALTER TABLE `fita_vhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `radio`
--
ALTER TABLE `radio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sala_de_aula`
--
ALTER TABLE `sala_de_aula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
