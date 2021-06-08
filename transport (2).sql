-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Out-2019 às 08:34
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Motociculo'),
(2, 'Ligeiros'),
(3, 'Pesados');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_ficheiros`
--

CREATE TABLE `tbl_ficheiros` (
  `idFicheiro` int(11) NOT NULL,
  `idVeiculo` int(11) NOT NULL,
  `livrete` varchar(200) NOT NULL,
  `tituloPropriedade` varchar(200) NOT NULL,
  `seguroRespo` varchar(200) NOT NULL,
  `inspecao` varchar(200) NOT NULL,
  `taxaCirculacao` varchar(200) NOT NULL,
  `biDono` varchar(200) NOT NULL,
  `financas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_licenca`
--

CREATE TABLE `tbl_licenca` (
  `idLicenca` int(11) NOT NULL,
  `idVeiculo` int(11) NOT NULL,
  `tipoLincenca` varchar(10) NOT NULL,
  `dataEmissao` date NOT NULL,
  `dataCaducidade` date NOT NULL,
  `estado` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_pessoa`
--

CREATE TABLE `tbl_pessoa` (
  `idPessoa` int(11) NOT NULL,
  `nomePessoa` varchar(50) NOT NULL,
  `genero` char(2) NOT NULL,
  `estadoCivil` varchar(10) NOT NULL,
  `numBI` varchar(16) NOT NULL,
  `dataNascimento` date NOT NULL,
  `dataCadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_pessoa`
--

INSERT INTO `tbl_pessoa` (`idPessoa`, `nomePessoa`, `genero`, `estadoCivil`, `numBI`, `dataNascimento`, `dataCadastro`) VALUES
(1, 'Marcos Candundo', 'M', 'solteiro', '389485999HA099', '2010-09-29', '2019-10-24'),
(2, 'Ana Maria', 'F', 'solteira', '038549896HA009', '2010-05-12', '2019-10-24'),
(3, 'Geraldo', 'M', 'solteiro', '038549896HA001', '2010-09-29', '2019-10-24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipotaxi`
--

CREATE TABLE `tbl_tipotaxi` (
  `idTaxi` int(11) NOT NULL,
  `idVeiculo` int(11) NOT NULL,
  `categoria` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_tipotaxi`
--

INSERT INTO `tbl_tipotaxi` (`idTaxi`, `idVeiculo`, `categoria`) VALUES
(1, 1, 'Azul-branco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `idUsuario` int(11) NOT NULL,
  `idPessoa` int(11) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `tipoUsuario` varchar(10) NOT NULL,
  `dataCadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`idUsuario`, `idPessoa`, `senha`, `tipoUsuario`, `dataCadastro`) VALUES
(1, 1, 'ola', 'normal', '2019-10-24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_veiculos`
--

CREATE TABLE `tbl_veiculos` (
  `idVeiculo` int(11) NOT NULL,
  `idPessoa` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `cor` varchar(10) NOT NULL,
  `modelo` varchar(10) NOT NULL,
  `anoFabrico` date NOT NULL,
  `matricula` varchar(7) NOT NULL,
  `numQuadro` int(10) NOT NULL,
  `numMotor` int(10) NOT NULL,
  `tara` int(10) NOT NULL,
  `pesoBruto` int(10) NOT NULL,
  `lotacao` int(10) NOT NULL,
  `cilindragem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_veiculos`
--

INSERT INTO `tbl_veiculos` (`idVeiculo`, `idPessoa`, `idCategoria`, `cor`, `modelo`, `anoFabrico`, `matricula`, `numQuadro`, `numMotor`, `tara`, `pesoBruto`, `lotacao`, `cilindragem`) VALUES
(1, 2, 2, 'Branco', 'Rav 4', '2012-02-11', 'LD-01-1', 33, 44, 40, 60, 9, 1341);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_licenca`
--
CREATE TABLE `view_licenca` (
`idLicenca` int(11)
,`nomePessoa` varchar(50)
,`genero` char(2)
,`numBI` varchar(16)
,`dataNascimento` date
,`cor` varchar(10)
,`modelo` varchar(10)
,`anoFabrico` date
,`matricula` varchar(7)
,`numQuadro` int(10)
,`numMotor` int(10)
,`tara` int(10)
,`pesoBruto` int(10)
,`lotacao` int(10)
,`cilindragem` int(10)
,`nomeCategoria` varchar(10)
,`tipoLincenca` varchar(10)
,`dataEmissao` date
,`dataCaducidade` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_taxi`
--
CREATE TABLE `view_taxi` (
`idTaxi` int(11)
,`nomePessoa` varchar(50)
,`genero` char(2)
,`numBI` varchar(16)
,`dataNascimento` date
,`cor` varchar(10)
,`modelo` varchar(10)
,`anoFabrico` date
,`matricula` varchar(7)
,`numQuadro` int(10)
,`numMotor` int(10)
,`tara` int(10)
,`pesoBruto` int(10)
,`lotacao` int(10)
,`cilindragem` int(10)
,`nomeCategoria` varchar(10)
,`categoria` varchar(15)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_usuarios`
--
CREATE TABLE `view_usuarios` (
`idUsuario` int(11)
,`nomePessoa` varchar(50)
,`senha` varchar(50)
,`genero` char(2)
,`tipoUsuario` varchar(10)
,`dataCadastro` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_veiculos`
--
CREATE TABLE `view_veiculos` (
`idVeiculo` int(11)
,`nomePessoa` varchar(50)
,`genero` char(2)
,`nomeCategoria` varchar(10)
,`cor` varchar(10)
,`modelo` varchar(10)
,`anoFabrico` date
,`matricula` varchar(7)
,`numQuadro` int(10)
,`numMotor` int(10)
,`tara` int(10)
,`pesoBruto` int(10)
,`lotacao` int(10)
,`cilindragem` int(10)
);

-- --------------------------------------------------------

--
-- Structure for view `view_licenca`
--
DROP TABLE IF EXISTS `view_licenca`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_licenca`  AS  select `l`.`idLicenca` AS `idLicenca`,`p`.`nomePessoa` AS `nomePessoa`,`p`.`genero` AS `genero`,`p`.`numBI` AS `numBI`,`p`.`dataNascimento` AS `dataNascimento`,`v`.`cor` AS `cor`,`v`.`modelo` AS `modelo`,`v`.`anoFabrico` AS `anoFabrico`,`v`.`matricula` AS `matricula`,`v`.`numQuadro` AS `numQuadro`,`v`.`numMotor` AS `numMotor`,`v`.`tara` AS `tara`,`v`.`pesoBruto` AS `pesoBruto`,`v`.`lotacao` AS `lotacao`,`v`.`cilindragem` AS `cilindragem`,`c`.`nomeCategoria` AS `nomeCategoria`,`l`.`tipoLincenca` AS `tipoLincenca`,`l`.`dataEmissao` AS `dataEmissao`,`l`.`dataCaducidade` AS `dataCaducidade` from (((`tbl_licenca` `l` join `tbl_veiculos` `v` on((`l`.`idVeiculo` = `v`.`idVeiculo`))) join `tbl_pessoa` `p` on((`v`.`idPessoa` = `p`.`idPessoa`))) join `tbl_categoria` `c` on((`v`.`idCategoria` = `c`.`idCategoria`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_taxi`
--
DROP TABLE IF EXISTS `view_taxi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_taxi`  AS  select `t`.`idTaxi` AS `idTaxi`,`p`.`nomePessoa` AS `nomePessoa`,`p`.`genero` AS `genero`,`p`.`numBI` AS `numBI`,`p`.`dataNascimento` AS `dataNascimento`,`v`.`cor` AS `cor`,`v`.`modelo` AS `modelo`,`v`.`anoFabrico` AS `anoFabrico`,`v`.`matricula` AS `matricula`,`v`.`numQuadro` AS `numQuadro`,`v`.`numMotor` AS `numMotor`,`v`.`tara` AS `tara`,`v`.`pesoBruto` AS `pesoBruto`,`v`.`lotacao` AS `lotacao`,`v`.`cilindragem` AS `cilindragem`,`c`.`nomeCategoria` AS `nomeCategoria`,`t`.`categoria` AS `categoria` from (((`tbl_tipotaxi` `t` join `tbl_veiculos` `v` on((`t`.`idVeiculo` = `v`.`idVeiculo`))) join `tbl_pessoa` `p` on((`v`.`idPessoa` = `p`.`idPessoa`))) join `tbl_categoria` `c` on((`v`.`idCategoria` = `c`.`idCategoria`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_usuarios`
--
DROP TABLE IF EXISTS `view_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_usuarios`  AS  select `u`.`idUsuario` AS `idUsuario`,`p`.`nomePessoa` AS `nomePessoa`,`u`.`senha` AS `senha`,`p`.`genero` AS `genero`,`u`.`tipoUsuario` AS `tipoUsuario`,`u`.`dataCadastro` AS `dataCadastro` from (`tbl_usuarios` `u` join `tbl_pessoa` `p` on((`u`.`idPessoa` = `p`.`idPessoa`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_veiculos`
--
DROP TABLE IF EXISTS `view_veiculos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_veiculos`  AS  select `v`.`idVeiculo` AS `idVeiculo`,`p`.`nomePessoa` AS `nomePessoa`,`p`.`genero` AS `genero`,`c`.`nomeCategoria` AS `nomeCategoria`,`v`.`cor` AS `cor`,`v`.`modelo` AS `modelo`,`v`.`anoFabrico` AS `anoFabrico`,`v`.`matricula` AS `matricula`,`v`.`numQuadro` AS `numQuadro`,`v`.`numMotor` AS `numMotor`,`v`.`tara` AS `tara`,`v`.`pesoBruto` AS `pesoBruto`,`v`.`lotacao` AS `lotacao`,`v`.`cilindragem` AS `cilindragem` from ((`tbl_veiculos` `v` join `tbl_pessoa` `p` on((`v`.`idPessoa` = `p`.`idPessoa`))) join `tbl_categoria` `c` on((`v`.`idCategoria` = `c`.`idCategoria`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `tbl_ficheiros`
--
ALTER TABLE `tbl_ficheiros`
  ADD PRIMARY KEY (`idFicheiro`),
  ADD KEY `idVeiculo` (`idVeiculo`);

--
-- Indexes for table `tbl_licenca`
--
ALTER TABLE `tbl_licenca`
  ADD PRIMARY KEY (`idLicenca`),
  ADD KEY `idVeiculo` (`idVeiculo`);

--
-- Indexes for table `tbl_pessoa`
--
ALTER TABLE `tbl_pessoa`
  ADD PRIMARY KEY (`idPessoa`);

--
-- Indexes for table `tbl_tipotaxi`
--
ALTER TABLE `tbl_tipotaxi`
  ADD PRIMARY KEY (`idTaxi`),
  ADD KEY `idVeiculo` (`idVeiculo`);

--
-- Indexes for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idPessoa` (`idPessoa`);

--
-- Indexes for table `tbl_veiculos`
--
ALTER TABLE `tbl_veiculos`
  ADD PRIMARY KEY (`idVeiculo`),
  ADD KEY `idPessoa` (`idPessoa`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_ficheiros`
--
ALTER TABLE `tbl_ficheiros`
  MODIFY `idFicheiro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_licenca`
--
ALTER TABLE `tbl_licenca`
  MODIFY `idLicenca` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pessoa`
--
ALTER TABLE `tbl_pessoa`
  MODIFY `idPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_tipotaxi`
--
ALTER TABLE `tbl_tipotaxi`
  MODIFY `idTaxi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_veiculos`
--
ALTER TABLE `tbl_veiculos`
  MODIFY `idVeiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbl_ficheiros`
--
ALTER TABLE `tbl_ficheiros`
  ADD CONSTRAINT `tbl_ficheiros_ibfk_2` FOREIGN KEY (`idVeiculo`) REFERENCES `tbl_veiculos` (`idVeiculo`);

--
-- Limitadores para a tabela `tbl_licenca`
--
ALTER TABLE `tbl_licenca`
  ADD CONSTRAINT `tbl_licenca_ibfk_1` FOREIGN KEY (`idVeiculo`) REFERENCES `tbl_veiculos` (`idVeiculo`);

--
-- Limitadores para a tabela `tbl_tipotaxi`
--
ALTER TABLE `tbl_tipotaxi`
  ADD CONSTRAINT `tbl_tipotaxi_ibfk_1` FOREIGN KEY (`idVeiculo`) REFERENCES `tbl_veiculos` (`idVeiculo`);

--
-- Limitadores para a tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `tbl_usuarios_ibfk_1` FOREIGN KEY (`idPessoa`) REFERENCES `tbl_pessoa` (`idPessoa`);

--
-- Limitadores para a tabela `tbl_veiculos`
--
ALTER TABLE `tbl_veiculos`
  ADD CONSTRAINT `tbl_veiculos_ibfk_1` FOREIGN KEY (`idPessoa`) REFERENCES `tbl_pessoa` (`idPessoa`),
  ADD CONSTRAINT `tbl_veiculos_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `tbl_categoria` (`idCategoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
