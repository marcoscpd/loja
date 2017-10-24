--
-- Fazendo dump de dados para tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`, `estado`) VALUES
(1, 'EletrÃ´nicos', 'Celulares e um monte de outras bugingangas...', 1),
(2, 'Hardware', 'Apenas equipamentos fÃ­sicos', 1),
(3, 'Software', 'Programas para computador', 1),
(4, 'Bolsa', 'Bolas para notebooks e tablets ', 0);

--
-- Fazendo dump de dados para tabela `marcas`
--

INSERT INTO `marcas` (`id`, `nome`, `descricao`, `estado`) VALUES
(1, 'HP', 'Empresa de computadores e perifÃ©ricos para informÃ¡tica', 1),
(2, 'Apple', 'Empresa Americana e com itens muito caros.', 1),
(3, 'DELL', 'Computadores e equipamentos para informÃ¡tica ', 1),
(4, 'Benq', 'Switch e moldens', 0);

-- --------------------------------------------------------

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `data_validade`, `data_cadastro`, `quantidade`, `valor`, `descricao`, `estado`, `imagem`, `marca_id`, `categoria_id`) VALUES
(1, 'PC Aylon X8965  ', '2017-10-25 03:00:00', '2017-10-21 15:17:01', 23, '3.00', '						MÃ¡quina incrÃ­vel.					', 1, '', 1, 2),
(2, 'Iphone 7', '2017-10-28 03:00:00', '2017-10-21 15:17:48', 44, '3.20', '						<p>Celular muito caro.</p>					', 1, '', 2, 1);

-- --------------------------------------------------------

--
-- Fazendo dump de dados para tabela `transportadoras`
--

INSERT INTO `transportadoras` (`id`, `nome`) VALUES
(1, 'Fedex'),
(2, 'Correios'),
(4, 'JoÃ£o da bike');

-- --------------------------------------------------------

