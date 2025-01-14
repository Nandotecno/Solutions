-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jun-2019 às 03:37
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_caixa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `abertura_caixa`
--

CREATE TABLE `abertura_caixa` (
  `abertura_id` int(11) NOT NULL,
  `abertura_saldo` decimal(10,2) NOT NULL,
  `abertura_nome` varchar(255) NOT NULL,
  `abertura_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa_pagamento`
--

CREATE TABLE `caixa_pagamento` (
  `pagamento_id` int(11) NOT NULL,
  `pagamento_total` decimal(10,2) NOT NULL,
  `pagamento_desconto` int(11) NOT NULL,
  `pagamento_dinheiro` varchar(255) NOT NULL,
  `pagamento_troco` decimal(10,2) NOT NULL,
  `pagamento_usuario` varchar(255) NOT NULL,
  `pagamento_data` datetime NOT NULL,
  `pagamento_transacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_pagar`
--

CREATE TABLE `contas_pagar` (
  `pagar_id` int(11) NOT NULL,
  `pagar_descricao` varchar(2000) NOT NULL,
  `pagar_valor` decimal(10,2) NOT NULL,
  `pagar_data` datetime NOT NULL,
  `pagar_status` int(11) NOT NULL,
  `pagar_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_receber`
--

CREATE TABLE `contas_receber` (
  `receber_id` int(11) NOT NULL,
  `receber_descricao` varchar(2000) NOT NULL,
  `receber_valor` decimal(10,2) NOT NULL,
  `receber_data` datetime NOT NULL,
  `receber_status` int(11) NOT NULL,
  `receber_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abertura_caixa`
--
ALTER TABLE `abertura_caixa`
  ADD PRIMARY KEY (`abertura_id`);

--
-- Indexes for table `caixa_pagamento`
--
ALTER TABLE `caixa_pagamento`
  ADD PRIMARY KEY (`pagamento_id`);

--
-- Indexes for table `contas_pagar`
--
ALTER TABLE `contas_pagar`
  ADD PRIMARY KEY (`pagar_id`);

--
-- Indexes for table `contas_receber`
--
ALTER TABLE `contas_receber`
  ADD PRIMARY KEY (`receber_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abertura_caixa`
--
ALTER TABLE `abertura_caixa`
  MODIFY `abertura_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `caixa_pagamento`
--
ALTER TABLE `caixa_pagamento`
  MODIFY `pagamento_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contas_pagar`
--
ALTER TABLE `contas_pagar`
  MODIFY `pagar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contas_receber`
--
ALTER TABLE `contas_receber`
  MODIFY `receber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
