-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Abr-2023 às 15:14
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ordem_servico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`) VALUES
(1, 'cyhauihg', 'ghghgh', '10.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `endereco` int(200) NOT NULL,
  `logradouro` varchar(200) NOT NULL,
  `local` varchar(200) NOT NULL,
  `municipio` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `servi` varchar(50) NOT NULL,
  `descri` varchar(500) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `service`
--

INSERT INTO `service` (`id`, `name`, `mail`, `tel`, `endereco`, `logradouro`, `local`, `municipio`, `estado`, `servi`, `descri`, `data`) VALUES
(1, 'thaigo', 'asdasdasd@gmail.com', '7115656556', 0, '', '', '', '', 'manutencao', 'sdasdasdasdasdasd', '2023-04-15'),
(2, 'thaigo', 'asdasdasd@gmail.com', '7115656556', 0, '', '', '', '', 'manutencao', 'sdasdasdasdasdasd', '2023-04-15'),
(3, 'asdasd', 'thiago.almeida6@ba.estudante.senai.br', '77777777sadasdasd', 0, '', '', '', '', 'instalacao', 'dasdasdasdasdasd', '2023-04-15'),
(4, '', '', '', 0, '', '', '', '', '', '', '0000-00-00'),
(5, 'Thiago Oliveira', 'oliveirathiago384@gmail.com', '71987987107', 41320040, 'Rua Stuart Edgar Angel Jones', 'Castelo Branco', 'Salvador', 'BA', 'reparo', 'sgfgfdgdff', '2023-04-25'),
(6, 'Thiago Oliveira', 'oliveirathiago384@gmail.com', '71987987107', 41320040, 'Rua Stuart Edgar Angel Jones', 'Castelo Branco', 'Salvador', 'BA', 'instalacao', 'fdsfsdfdfsdf', '2023-04-25'),
(7, '', '', '', 0, '', '', '', '', '', '', '0000-00-00'),
(8, '', '', '', 0, '', '', '', '', '', '', '0000-00-00'),
(9, '', '', '', 0, '', '', '', '', '', '', '0000-00-00'),
(10, '', '', '', 0, '', '', '', '', '', '', '0000-00-00'),
(11, '', '', '', 0, '', '', '', '', '', '', '0000-00-00'),
(12, '', '', '', 0, '', '', '', '', '', '', '0000-00-00'),
(13, '', '', '', 0, '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  `cep` int(8) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `referencia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `cpf`, `telefone`, `cep`, `rua`, `bairro`, `referencia`) VALUES
(1, 'thiago', 2147483647, 2147483647, 41320040, '', '', ''),
(2, 'thiago', 2147483647, 2147483647, 41320040, 'Rua Stuart Edgar Angel Jones', 'Castelo Branco', '1 etapa'),
(3, 'thiago', 2147483647, 2147483647, 41320040, 'Rua Stuart Edgar Angel Jones', 'Castelo Branco', '1 etapa'),
(4, 'thiago', 0, 2147483647, 41320040, '', '', ''),
(5, 'thiago', 0, 2147483647, 41320040, '', '', ''),
(6, 'thiago', 2147483647, 2147483647, 41320040, '', '', ''),
(7, 'thiago', 2147483647, 2147483647, 41320040, 'Rua Stuart Edgar Angel Jones', 'Castelo Branco', '1 etapa'),
(8, '', 0, 0, 41320040, '', '', ''),
(9, 'oi', 2147483647, 2147483647, 41320040, 'rrrr', 'rr', 'rrrr'),
(10, 'css', 2147483647, 2147483647, 44444, 'ssss', 'sss', 'ssss'),
(11, '', 0, 0, 0, '', '', ''),
(12, '', 0, 0, 0, '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
