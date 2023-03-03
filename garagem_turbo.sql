-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2022 às 00:32
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `garagem_turbo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.automovel`
--

CREATE TABLE `tb_admin.automovel` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.automovel`
--

INSERT INTO `tb_admin.automovel` (`id`, `nome`, `tipo`, `imagem`, `slug`, `order_id`) VALUES
(3, 'Modelos Tesla ', 'carro', '6393b8afd1026.jpg', 'modelos-tesla-', 3),
(4, 'Modelos Audi ', 'carro', '6393b9814d309.jpg', 'modelos-audi-', 4),
(5, 'Modelos Toyota', 'caminhonete', '6393c1e35c7c7.jpg', 'modelos-toyota', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.clientes`
--

CREATE TABLE `tb_admin.clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.clientes`
--

INSERT INTO `tb_admin.clientes` (`id`, `nome`, `email`, `tipo`, `cpf_cnpj`, `imagem`) VALUES
(1, 'Norian Henrique', 'NorianHenrique2001@hotmail.com', 'fisico', '013.565.039-93', '6393a15b48adb.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.financeiro`
--

CREATE TABLE `tb_admin.financeiro` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `vencimento` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.financeiro`
--

INSERT INTO `tb_admin.financeiro` (`id`, `cliente_id`, `nome`, `valor`, `vencimento`, `status`) VALUES
(1, 1, 'Veiculo 1', '1.000,00', '2022-12-28', 0),
(2, 1, 'Veiculo 1', '1.000,00', '2023-01-07', 0),
(3, 1, 'Veiculo 1', '1.000,00', '2023-01-17', 0),
(4, 1, 'Veiculo 1', '1.000,00', '2023-01-27', 0),
(5, 1, 'Veiculo 1', '1.000,00', '2023-02-06', 0),
(6, 1, 'Veiculo 1', '1.000,00', '2023-02-16', 0),
(7, 1, 'Veiculo 1', '1.000,00', '2023-02-26', 0),
(8, 1, 'Veiculo 1', '1.000,00', '2023-03-08', 0),
(9, 1, 'Veiculo 1', '1.000,00', '2023-03-18', 0),
(10, 1, 'Veiculo 1', '1.000,00', '2023-03-28', 0),
(11, 1, 'Veiculo 1', '1.000,00', '2023-04-07', 0),
(12, 1, 'Veiculo 1', '1.000,00', '2023-04-17', 0),
(13, 1, 'Veiculo 1', '1.000,00', '2023-04-27', 0),
(14, 1, 'Veiculo 1', '1.000,00', '2023-05-07', 0),
(15, 1, 'Veiculo 1', '1.000,00', '2023-05-17', 0),
(16, 1, 'Veiculo 1', '1.000,00', '2023-05-27', 0),
(17, 1, 'Veiculo 1', '1.000,00', '2023-06-06', 0),
(18, 1, 'Veiculo 1', '1.000,00', '2023-06-16', 0),
(19, 1, 'Veiculo 1', '1.000,00', '2023-06-26', 0),
(20, 1, 'Veiculo 1', '1.000,00', '2023-07-06', 0),
(21, 1, 'Veiculo 1', '1.000,00', '2023-07-16', 0),
(22, 1, 'Veiculo 1', '1.000,00', '2023-07-26', 0),
(23, 1, 'Veiculo 1', '1.000,00', '2023-08-05', 0),
(24, 1, 'Veiculo 1', '1.000,00', '2023-08-15', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.imagens_veiculos`
--

CREATE TABLE `tb_admin.imagens_veiculos` (
  `id` int(11) NOT NULL,
  `veiculo_id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.imagens_veiculos`
--

INSERT INTO `tb_admin.imagens_veiculos` (`id`, `veiculo_id`, `imagem`) VALUES
(5, 5, '6393b8fc3cd19.jpg'),
(6, 6, '6393b9ae7e3fe.jpg'),
(7, 7, '6393c25ca88d6.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.online`
--

CREATE TABLE `tb_admin.online` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `ultima_acao` datetime NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.online`
--

INSERT INTO `tb_admin.online` (`id`, `ip`, `ultima_acao`, `token`) VALUES
(3, '::1', '2022-12-09 20:31:06', '63938736dbb75');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.usuarios`
--

CREATE TABLE `tb_admin.usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.usuarios`
--

INSERT INTO `tb_admin.usuarios` (`id`, `user`, `password`, `img`, `nome`, `cargo`) VALUES
(1, 'admin', 'admin', '', 'Norian Henrique', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.veiculos`
--

CREATE TABLE `tb_admin.veiculos` (
  `id` int(11) NOT NULL,
  `automovel_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.veiculos`
--

INSERT INTO `tb_admin.veiculos` (`id`, `automovel_id`, `nome`, `preco`, `descricao`, `order_id`) VALUES
(5, 3, 'TESLA MODEL 3', '60000.00', 'Este um modelo Tesla Model 3\r\n\r\n  - Possui quatro portas\r\n  - Ar condicionado\r\n   - Chave eletrica ', 0),
(6, 4, 'Audi A4', '50000.00', 'Modelo de carro Audi A4.', 0),
(7, 5, 'Toyota 2022', '44000.00', 'Modelo Toyota 2022 - 4 portas - Aéreo Dinâmico', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.visitas`
--

CREATE TABLE `tb_admin.visitas` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config`
--

CREATE TABLE `tb_site.config` (
  `titulo` varchar(255) NOT NULL,
  `servico_limpeza` text NOT NULL,
  `servico_recompra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.config`
--

INSERT INTO `tb_site.config` (`titulo`, `servico_limpeza`, `servico_recompra`) VALUES
('Garagem Turbo - Vendas de carros ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu sapien ac urna luctus iaculis. Sed non magna mattis, blandit odio vel, lobortis ante. Quisque a sodales diam. Suspendisse nisl eros, condimentum non elit vel, convallis luctus sem. Phasellus sodales sit amet ex non dapibus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu sapien ac urna luctus iaculis. Sed non magna mattis, blandit odio vel, lobortis ante. Quisque a sodales diam. Suspendisse nisl eros, condimentum non elit vel, convallis luctus sem. Phasellus sodales sit amet ex non dapibus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.depoimentos`
--

CREATE TABLE `tb_site.depoimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `depoimento` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.depoimentos`
--

INSERT INTO `tb_site.depoimentos` (`id`, `nome`, `depoimento`, `foto`, `order_id`) VALUES
(1, 'Norian Henrique', 'Este e meu depoimento ', '6393a135ccd25.png', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin.automovel`
--
ALTER TABLE `tb_admin.automovel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.clientes`
--
ALTER TABLE `tb_admin.clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.financeiro`
--
ALTER TABLE `tb_admin.financeiro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.imagens_veiculos`
--
ALTER TABLE `tb_admin.imagens_veiculos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.veiculos`
--
ALTER TABLE `tb_admin.veiculos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin.automovel`
--
ALTER TABLE `tb_admin.automovel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_admin.clientes`
--
ALTER TABLE `tb_admin.clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_admin.financeiro`
--
ALTER TABLE `tb_admin.financeiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `tb_admin.imagens_veiculos`
--
ALTER TABLE `tb_admin.imagens_veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_admin.veiculos`
--
ALTER TABLE `tb_admin.veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
