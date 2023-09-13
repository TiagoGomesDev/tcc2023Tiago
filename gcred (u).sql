-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/09/2023 às 16:59
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gcred`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `banco`
--

CREATE TABLE `banco` (
  `id_banco` int(10) NOT NULL,
  `nome_banco` varchar(40) DEFAULT NULL,
  `codigo` int(10) DEFAULT NULL,
  `ispb` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `banco`
--

INSERT INTO `banco` (`id_banco`, `nome_banco`, `codigo`, `ispb`) VALUES
(1, 'Acesso Soluções De Pagamento S.A.', 332, 13140088),
(2, 'Advanced Corretora De Câmbio Ltda', 117, 92856905),
(3, 'Avista S.A. Crédito', 280, 23862762),
(4, 'Agk Corretora De Cambio S.A.', 272, 250699),
(5, 'Al5 S.A. Crédito', 349, 27214112),
(6, 'Amazónia Corretora De Câmbio Ltda.', 313, 16927221),
(7, 'Ativa Investimentos S.A. Corretora De Tí', 188, 33775974),
(8, 'Avista S.A. Crédito', 280, 23862762),
(9, 'B&T Corretora De Cambio Ltda.', 80, 73622748),
(10, 'Banco Abc Brasil S.A.', 246, 28195667),
(11, 'Banco Abn Amro S.A.', 75, 3532415),
(12, 'Banco Agibank S.A.', 121, 10664513),
(13, 'Banco Alfa S.A.', 25, 3323840),
(14, 'Banco Andbank (Brasil) S.A.', 65, 48795256),
(15, 'Banco Arbi S.A.', 213, 54403563),
(16, 'Banco B3 S.A.', 96, 997185),
(17, 'Banco Bandepe S.A.', 24, 10866788),
(18, 'Banco Bari De Investimentos E Financiame', 330, 556603),
(19, 'Banco BMG S.A.', 318, 61186680),
(20, 'Banco Bnp Paribas Brasil S.A.', 752, 1522368),
(21, 'Banco Bocom Bbm S.A.', 107, 15114366),
(22, 'Banco Bradescard S.A.', 63, 4184779),
(23, 'Banco Bradesco BBI S.A.', 36, 6271464),
(24, 'Banco Bradesco Berj S.A.', 122, 33147315),
(25, 'Banco Bradesco Financiamentos S.A.', 394, 7207996),
(26, 'Banco Bradesco S.A.', 237, 60746948),
(27, 'Banco Bs2 S.A.', 218, 71027866),
(28, 'Banco BTG Pactual S.A.', 208, 30306294),
(29, 'Banco C6 Consignado S.A.', 626, 61348538),
(30, 'Banco C6 S.A.', 336, 31872495),
(31, 'Banco Caixa Geral - Brasil S.A.', 473, 33466988),
(32, 'Banco Capital S.A.', 412, 15173776),
(33, 'Banco Cargill S.A.', 40, 3609817),
(34, 'Banco Cedula S.A.', 266, 33132044),
(35, 'Banco Cetelem S.A.', 739, 558456),
(36, 'Banco Cetelem S.A.', 233, 62421979),
(37, 'Banco Citibank S.A.', 745, 33479023),
(38, 'Banco Classico S.A.', 241, 31597552),
(39, 'Banco Cooperativo Do Brasil S.A. - Banco', 756, 2038232),
(40, 'Banco Cooperativo Sicredi S.A.', 748, 1181521),
(41, 'Banco Crédit Agricole Brasil S.A.', 222, 75647891),
(42, 'Banco Credit Suisse (Brasil) S.A.', 505, 32062580),
(43, 'Banco Crefisa S.A.', 69, 61033106),
(44, 'Banco CSF S.A.', 368, 8357240),
(45, 'Banco da Amazonia S.A.', 3, 4902979),
(46, 'Banco da China Brasil S.A.', 83, 10690848),
(47, 'Banco Daycoval S.A.', 707, 62232889),
(48, 'Banco De La Nacion Argentina', 300, 33042151),
(49, 'Banco De La Provincia De Buenos Aires', 495, 44189447),
(50, 'Banco Digimais S.A.', 654, 92874270),
(51, 'Banco Digio S.A.', 335, 27098060),
(52, 'Banco do Brasil S.A.', 1, 0),
(53, 'Banco Do Estado De Sergipe S.A.', 47, 13009717),
(54, 'Banco Do Estado Do Pará S.A.', 37, 4913711),
(55, 'Banco Do Estado Do Rio Grande Do Sul S.A', 41, 92702067),
(56, 'Banco Do Nordeste Do Brasil S.A.', 4, 7237373),
(57, 'Banco Fator S.A.', 265, 33644196),
(58, 'Banco Fibra S.A.', 224, 58616418),
(59, 'Banco Finaxis S.A.', 94, 11758741),
(60, 'Banco Gm S.A.', 390, 59274605),
(61, 'Banco Guanabara S.A.', 612, 31880826),
(62, 'Banco HSBC S.A.', 269, 53518684),
(63, 'Banco Inbursa S.A.', 12, 4866275),
(64, 'Banco Industrial Do Brasil S.A.', 604, 31895683),
(65, 'Banco Indusval S.A.', 653, 61024352),
(66, 'Banco Inter S.A.', 77, 416968),
(67, 'Banco Investcred Unibanco S.A.', 249, 61182408),
(68, 'Banco Itaú BBA S.A.', 184, 17298092),
(69, 'Banco Itaú Consignado S.A.', 29, 33885724),
(70, 'Banco Itaubank S.A.', 479, 60394079),
(71, 'Banco J. Safra S.A.', 74, 3017677),
(72, 'Banco J.P. Morgan S.A.', 376, 33172537),
(73, 'Banco John Deere S.A.', 217, 91884981),
(74, 'Banco Kdb Do Brasil S.A.', 76, 7656500),
(75, 'Banco Keb Hana Do Brasil S.A.', 757, 2318507),
(76, 'Banco Luso Brasileiro S.A.', 600, 59118133),
(77, 'Banco Máxima S.A.', 243, 33923798),
(78, 'Banco Mercantil do Brasil S.A.', 389, 17184037),
(79, 'Banco Mercedes-Benz Do Brasil S.A.', 381, 60814191),
(80, 'Banco Mizuho Do Brasil S.A.', 370, 61088183),
(81, 'Banco Modal S.A.', 746, 30723886),
(82, 'Banco Morgan Stanley S.A.', 66, 2801938),
(83, 'Banco Mufg Brasil S.A.', 456, 60498557),
(84, 'Banco Nacional De Desenvolvimento Econom', 7, 33657248),
(85, 'Banco Olé Consignado S.A.', 169, 71371686),
(86, 'Banco Original Do Agronegócio S.A.', 79, 9516419),
(87, 'Banco Original S.A.', 212, 92894922),
(88, 'Banco Ourinvest S.A.', 712, 78632767),
(89, 'Banco Pan S.A.', 623, 59285411),
(90, 'Banco Paulista S.A.', 611, 61820817),
(91, 'Banco Pine S.A.', 643, 62144175),
(92, 'Banco Rabobank International Brasil S.A.', 747, 1023570),
(93, 'Banco Randon S.A.', 88, 11476673),
(94, 'Banco Rendimento S.A.', 633, 68900810),
(95, 'Banco Ribeirao Preto S.A.', 741, 517645),
(96, 'Banco Rodobens S.A.', 120, 33603457),
(97, 'Banco Safra S.A.', 422, 58160789),
(98, 'Banco Santander (Brasil) S.A.', 33, 90400888),
(99, 'Banco Semear S.A.', 743, 795423),
(100, 'Banco Sistema S.A.', 754, 76543115),
(101, 'Banco Smartbank S.A.', 630, 58497702),
(102, 'Banco Societe Generale Brasil S.A.', 366, 61533584),
(103, 'Banco Sofisa S.A.', 637, 60889128),
(104, 'Banco Sumitomo Mitsui Brasileiro S.A.', 464, 60518222),
(105, 'Banco Topázio S.A.', 82, 7679404),
(106, 'Banco Toyota Do Brasil S.A.', 387, 3215790),
(107, 'Banco Triangulo S.A.', 634, 17351180),
(108, 'Banco Tricury S.A.', 18, 57839805),
(109, 'Banco Volkswagen S.A.', 393, 59109165),
(110, 'Banco Votorantim S.A.', 655, 59588111),
(111, 'Banco Vr S.A.', 610, 78626983),
(112, 'Banco Western Union Do Brasil S.A.', 119, 13720915),
(113, 'Banco Woori Bank Do Brasil S.A.', 124, 15357060),
(114, 'Banco Xp S.A.', 348, 33264668),
(115, 'Bancoseguro S.A.', 81, 10264663),
(116, 'Banestes S.A. Banco Do Estado do Espirit', 21, 28127603),
(117, 'Bank of America Merrill Lynch Banco Múlt', 755, 62073200),
(118, 'Bari Companhia Hipotecária', 268, 14511781),
(119, 'Bbc Leasing S.A. - Arrendamento Mercanti', 378, 1852137),
(120, 'Bcv - Banco De Crédito E Varejo S.A.', 250, 50585090),
(121, 'Bexs Banco De Câmbio S/A', 144, 13059145),
(122, 'Bexs Corretora De Câmbio S/A', 253, 52937216),
(123, 'Bgc Liquidez Distribuidora De Títulos E ', 134, 33862244),
(124, 'Bny Mellon Banco S.A.', 17, 42272526),
(125, 'Bónuscred Sociedade De Crédito Direto S.', 408, 36586946),
(126, 'Bpp Instituição De Pagamento S.A.', 301, 13370835),
(127, 'Br Partners Banco De Investimento S.A.', 126, 13220493),
(128, 'BrB - Banco De Brasilia S.A.', 70, 208),
(129, 'Brk S.A. Crédito', 92, 12865507),
(130, 'Brl Trust Distribuidora De Títulos E Val', 173, 13486793),
(131, 'Broker Brasil Corretora De Câmbio Ltda.', 142, 16944141),
(132, 'Bs2 Distribuidora De Títulos E Valores M', 292, 28650236),
(133, 'Caixa Economica Federal', 104, 360305),
(134, 'Cambionet Corretora De Câmbio Ltda.', 309, 14190547),
(135, 'Carol Distribuidora De Titulos E Valores', 288, 62237649),
(136, 'Cartos Sociedade De Crédito Direto S.A.', 324, 21332862),
(137, 'Caruana S.A. - Sociedade De Crédito', 130, 9313766),
(138, 'Casa Do Crédito S.A. Sociedade De Crédit', 159, 5442029),
(139, 'Central Cooperativa De Crédito - Ailos', 85, 5463212),
(140, 'Cooperativa Central De Crédito - Ailos', 85, 5463212),
(141, 'Cooperativa de Crédito Mutuo dos Despach', 16, 4715685),
(142, 'Cooperativa De Crédito Rural Coopavel', 281, 76461557),
(143, 'Cooperativa De Crédito Rural De Abelardo', 322, 1073966),
(144, 'Cooperativa De Credito Rural De Ibiam - ', 391, 8240446),
(145, 'Cooperativa De Crédito Rural De Ouro Sul', 286, 7853842),
(146, 'Cooperativa De Credito Rural De Primaver', 279, 26563270),
(147, 'Cooperativa De Crédito Rural De São Migu', 273, 8253539),
(148, 'Cora Sociedade De Crédito Direto S.A.', 403, 37880206),
(149, 'Credialiança Cooperativa De Crédito Rura', 98, 78157146),
(150, 'Credicoamo Credito Rural Cooperativa', 10, 81723108),
(151, 'Credisan Cooperativa De Crédito', 89, 62109566),
(152, 'Credisis - Central De Cooperativas De Cr', 97, 4632856),
(153, 'Credit Suisse Hedging-Griffo Corretora D', 11, 61809182),
(154, 'Creditas Sociedade De Crédito Direto S.A', 342, 32997490),
(155, 'Crefaz Sociedade De Crédito Ao Microempr', 321, 18188384),
(156, 'Decyseo Corretora De Cambio Ltda.', 289, 94968518),
(157, 'Deutsche Bank S.A. - Banco Alemao', 487, 62331228),
(158, 'Easynvest - Título Corretora De Valores ', 140, 62169875),
(159, 'Facta Financeira S.A. - Crédito Financia', 149, 15581638),
(160, 'Fair Corretora De Cambio S.A.', 196, 32648370),
(161, 'Ffa Sociedade De Crédito Ao Microempreen', 343, 24537861),
(162, 'Fram Capital Distribuidora De Títulos E ', 331, 13673855),
(163, 'Frente Corretora De Câmbio Ltda.', 285, 71677850),
(164, 'Genial Investimentos Corretora De Valore', 278, 27652684),
(165, 'Gerencianet S.A.', 364, 9089356),
(166, 'Get Money Corretora De Câmbio S.A.', 138, 10853017),
(167, 'Global Financas - Sociedade De Credito A', 384, 11165756),
(168, 'Goldman Sachs Do Brasil Banco Multiplo S', 64, 4332281),
(169, 'Guide Investimentos S.A. Corretora De Va', 177, 65913436),
(170, 'Guitta Corretora De Cambio Ltda.', 146, 24074692),
(171, 'Haitong Banco De Investimento Do Brasil ', 78, 34111187),
(172, 'Hipercard Banco Múltiplo S.A.', 62, 3012230),
(173, 'HS Financeira S/A Credito', 189, 7512441),
(174, 'Hub Pagamentos S.A', 396, 13884775),
(175, 'Ib Corretora De Câmbio, Títulos E Valore', 271, 27842177),
(176, 'Icap Do Brasil Corretora De Títulos E Va', 157, 9105360),
(177, 'Icbc Do Brasil Banco Múltiplo S.A.', 132, 17453575),
(178, 'Ing Bank N.V.', 492, 49336860),
(179, 'Intesa Sanpaolo Brasil S.A. - Banco Múlt', 139, 55230916),
(180, 'Itaú Unibanco Holding S.A.', 652, 60872504),
(181, 'Itaú Unibanco S.A.', 341, 60701190),
(182, 'Jpmorgan Chase Bank', 488, 46518205),
(183, 'Kirton Bank S.A. - Banco Múltiplo', 399, 1701201),
(184, 'Lastro Rdv Distribuidora De Títulos E Va', 293, 71590442),
(185, 'Lecca Crédito', 105, 7652226),
(186, 'Levycam - Corretora De Cambio E Valores ', 145, 50579044),
(187, 'Listo Sociedade De Credito Direto S.A.', 397, 34088029),
(188, 'Magliano S.A. Corretora De Cambio E Valo', 113, 61723847),
(189, 'Mercadopago.Com Representacoes Ltda.', 323, 10573521),
(190, 'Money Plus Sociedade De Crédito ao Micro', 274, 11581339),
(191, 'Moneycorp Banco De Câmbio S.A.', 259, 8609934),
(192, 'Ms Bank S.A. Banco De Câmbio', 128, 19307785),
(193, 'Necton Investimentos S.A. Corretora de V', 354, 52904364),
(194, 'Nova Futura Corretora de Títulos e Valor', 191, 4257795),
(195, 'Novo Banco Continental S.A. - Banco Múlt', 753, 74828799),
(196, 'Nu Pagamentos S.A.', 260, 18236120),
(197, 'Oliveira Trust Distribuidora de Títulos ', 111, 36113876),
(198, 'Om Distribuidora de Títulos e Valores Mo', 319, 11495073),
(199, 'Omni Banco S.A.', 613, 60850229),
(200, 'Órama Distribuidora de Títulos e Valores', 325, 13293225),
(201, 'Ótimo Sociedade de Crédito Direto S.A.', 355, 34335592),
(202, 'Pagseguro Internet S.A.', 290, 8561701),
(203, 'Paraná Banco S.A.', 254, 14388334),
(204, 'Parati - Credito', 326, 3311443),
(205, 'Parmetal Distribuidora de Títulos e Valo', 194, 20155248),
(206, 'Pefisa S.A. - Crédito', 174, 43180355),
(207, 'Pi Distribuidora de Títulos e Valores Mo', 315, 3502968),
(208, 'Picpay Servicos S.A.', 380, 22896431),
(209, 'Planner Corretora de Valores S.A.', 100, 806535),
(210, 'Plural S.A. Banco Múltiplo', 125, 45246410),
(211, 'Portocred S.A. - Credito', 108, 1800019),
(212, 'Portopar Distribuidora de Titulos e Valo', 306, 40303299),
(213, 'Qi Sociedade de Crédito Direto S.A.', 306, 40303299),
(214, 'Qi Sociedade de Crédito Direto S.A.', 329, 32402502),
(215, 'Rb Capital Investimentos Distribuidora d', 283, 89960090),
(216, 'Realize Crédito', 374, 27351731),
(217, 'Renascenca Distribuidora de Títulos e Va', 101, 62287735),
(218, 'Sagitur Corretora De Câmbio Ltda.', 270, 61444949),
(219, 'Scotiabank Brasil S.A. Banco Múltiplo', 751, 29030467),
(220, 'Senff S.A. - Crédito', 276, 11970623),
(221, 'Senso Corretora De Cambio E Valores Mobi', 545, 17352220),
(222, 'Servicoop - Cooperativa De Crédito Dos S', 190, 3973814),
(223, 'Socopa Sociedade Corretora Paulista S.A.', 363, 62285390),
(224, 'Socred S.A. - Sociedade De Crédito Ao Mi', 183, 9210106),
(225, 'Solidus S.A. Corretora de Cambio e Valor', 365, 68757681),
(226, 'Sorocred Crédito', 299, 4814563),
(227, 'State Street Brasil S.A. - Banco Comerci', 14, 9274232),
(228, 'Stone Pagamentos S.A.', 197, 16501555),
(229, 'Sumup Sociedade De Crédito Direto S.A.', 404, 37241230),
(230, 'Super Pagamentos e Administração de Meio', 340, 9554480),
(231, 'Terra Investimentos Distribuidora de Tít', 370, 3751794),
(232, 'Toro Corretora De Títulos E Valores Mobi', 352, 29162769),
(233, 'Travelex Banco De Câmbio S.A.', 95, 11703662),
(234, 'Treviso Corretora De Câmbio S.A.', 143, 2992317),
(235, 'Tullett Prebon Brasil Corretora de Valor', 131, 61747085),
(236, 'Ubs Brasil Banco de Investimento S.A.', 129, 18520834),
(237, 'Ubs Brasil Corretora de Câmbio, Títulos ', 15, 2819125),
(238, 'Uniprime Central - Central Interestadual', 99, 3046391),
(239, 'Uniprime Norte Do Paraná - Coop de Econo', 84, 2398976),
(240, 'UP.P Sociedade de Empréstimo Entre Pesso', 373, 35977097),
(241, 'Vips Corretora de Câmbio Ltda.', 298, 17772370),
(242, 'Vision S.A. Corretora De Cambio', 296, 4062902),
(243, 'Vitreo Distribuidora de Títulos e Valore', 367, 34711571),
(244, 'Vortx Distribuidora de Titulos e Valores', 310, 22610500),
(245, 'Xp Investimentos Corretora de Câmbio,Tít', 102, 2332886),
(246, 'Zema Crédito', 359, 5351887);

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(300) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `rua` varchar(300) DEFAULT NULL,
  `numero` int(5) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `cidade` varchar(120) DEFAULT NULL,
  `uf` varchar(10) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `nascimento` varchar(10) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `ultima_alteracao` datetime DEFAULT NULL,
  `criado_por` varchar(200) DEFAULT NULL,
  `alterado_por` varchar(100) DEFAULT NULL,
  `situacao` varchar(20) NOT NULL DEFAULT 'Ativo',
  `loja` varchar(120) DEFAULT NULL,
  `estado` varchar(100) NOT NULL,
  `q_cliente` int(1) DEFAULT 1,
  `sexo` varchar(30) DEFAULT NULL,
  `profissao` varchar(100) DEFAULT 'Não Informado',
  `origem` varchar(35) NOT NULL,
  `fk_status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `telefone`, `celular`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `uf`, `cpf`, `rg`, `nascimento`, `data_cadastro`, `ultima_alteracao`, `criado_por`, `alterado_por`, `situacao`, `loja`, `estado`, `q_cliente`, `sexo`, `profissao`, `origem`, `fk_status`) VALUES
(1, 'Antonio De Melo Sousa', 'contato@juniormelo.dev.br', '(84) 98814-7799', '(84) 98814-9977', '59141655', 'Rua S�o Judas Tadeu', 92, 'Rosa dos Ventos', 'Casa', 'Parnamirim', 'RN', '123.456.789-00', '6543210', '1979-12-26', '2021-09-28 02:29:17', '2021-09-28 02:55:52', 'Antonio Junior', 'Administrador do sistema', 'Ativo', '5', '', 1, '', '', '', 0),
(2, 'Maria Jose', 'maria@hotmail.com', '(84) 98814-7788', '(84) 98814-7788', '59054600', 'Avenida Interventor M�rio C�mara', 1624, 'Dix-Sept Rosado', '', 'Natal', 'RN', '321.456.789-00', '1234566', '1950-01-13', '2021-09-28 02:39:54', '2021-09-28 02:46:10', 'Administrador do sistema', 'Administrador do sistema', 'Ativo', '5', '', 1, '', '', '', 0),
(49, 'n', NULL, NULL, '3', '4', 'r', 5, 'b', NULL, 'c', 'u', '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, 'masculino', 'p', '', 0),
(48, 'n', NULL, NULL, '3', '4', 'r', 5, 'b', NULL, 'c', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, 'masculino', 'p', '', 0),
(47, 't55', NULL, NULL, '3', '4', 'rua', 5, 'bairro', NULL, 'cidd', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, 'masculino', 'pp', '', 0),
(46, 'kk', NULL, NULL, '3', '4', 'rua', NULL, NULL, NULL, 'ccc', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, 'masculino', 'pp', '', 0),
(45, 't1', NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, '4', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, 'feminino', '5', '', 0),
(44, 'tis', NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, '4', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, 'masculino', '5', '', 0),
(43, 'ti', NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, 'ciid', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, 'masculino', 'ppo', '', 0),
(35, 'hh', 'cel@gmail.com', NULL, '4', NULL, NULL, NULL, NULL, NULL, '5', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, NULL, '6', '', 0),
(36, 'tt', NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, 'ci', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', '10', '', 1, NULL, 'pp', '', 0),
(39, 'iiii', NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, 'cd', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, NULL, 'pr', '', 0),
(34, 'test', '3', NULL, '4', NULL, NULL, NULL, NULL, NULL, 'ci', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, NULL, 'pp', '', 0),
(33, 'tt', 'tiago@', NULL, '3', NULL, NULL, NULL, NULL, NULL, '4', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', '10', '', 1, NULL, 'pp', '', 0),
(32, 'tiago', NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, 'cid', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, NULL, 'prof', '', 0),
(40, 'gg', NULL, NULL, '33', NULL, NULL, NULL, NULL, NULL, 'cid', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, NULL, 'Não Informado', '', 0),
(30, 'nome', 'email', NULL, '3', NULL, NULL, NULL, NULL, NULL, '4', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', '10', '', 1, NULL, 'pp', '', 0),
(38, 'tt', NULL, NULL, '33', NULL, NULL, NULL, NULL, NULL, 'cc', NULL, '11', '22', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, NULL, 'ppp', '', 0),
(41, 'userr', NULL, NULL, '33', NULL, NULL, NULL, NULL, NULL, 'cccc', NULL, '11', '22', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, NULL, 'Não Informado', '', 0),
(42, 'test', NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, 'ciid', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, NULL, 'proo', '', 0),
(50, 'n2', NULL, NULL, '3', '4', 'r', 5, 'b', NULL, 'c', 'u', '1', '2', '2222-02-22', NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, 'masculino', 'pp', '', 0),
(51, 'tt1', NULL, NULL, '1', '1', '1', 1, '1', NULL, '1', '1', '1', '1', '1111-01-01', NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, 'masculino', '1', '', 0),
(52, '1', NULL, NULL, '1', '1', '1', 1, '1', NULL, '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, 'masculino', '1', '', 0),
(53, 'tiago', NULL, NULL, '1', '1', '1', 1, '1', NULL, '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, 'masculino', '1', '', 0),
(54, '02', NULL, NULL, '2', '2', '2', 2, '2', NULL, '2', '2', '2', '2', '2222-02-22', NULL, NULL, NULL, NULL, 'Ativo', NULL, '', 1, 'masculino', '2', '', 0),
(55, '022', NULL, NULL, '1', '2', '1', 2, '1', NULL, '2', '2', '1', '2', '1212-12-12', NULL, NULL, NULL, NULL, 'Ativo', '31', '', 1, 'masculino', '1', 'g', 0),
(56, '0222', NULL, NULL, '2', '2', '2', 2, '2', NULL, '2', '2', '2', '2', '2222-02-22', NULL, NULL, NULL, NULL, 'Ativo', '2', '', 1, 'masculino', '2', '2', 0),
(70, '044', NULL, NULL, '4', '4', '4', 4, '4', '4', '4', '4', '4', '4', '4444-04-04', '2023-08-04 15:31:42', NULL, NULL, NULL, 'Ativo', '2', '', 1, '1', '4', '4', 0),
(58, 'nome', NULL, NULL, '3', '3', '3', 3, '3', '3', '3', '3', '3', '3', '3333-03-31', NULL, NULL, NULL, NULL, 'Ativo', '3', '', 1, '1', '3', '3', 0),
(69, '04', NULL, NULL, '4', '4', '4', 4, '4', '4', '4', '4', '4', '4', '4444-04-04', NULL, NULL, NULL, NULL, 'Ativo', '1', '', 1, '1', '4', '4', 0),
(60, 'nn', NULL, NULL, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1111-11-11', NULL, NULL, NULL, NULL, 'Ativo', '1', '', 1, '1', '1', '1', 0),
(61, 'j', NULL, NULL, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1111-11-11', NULL, NULL, NULL, NULL, 'Ativo', '1', '', 1, '1', '1', '1', 0),
(62, '2', NULL, NULL, '2', '2', '2', 2, '2', '2', '2', '2', '2', '2', '2222-02-22', NULL, NULL, NULL, NULL, 'Ativo', '2', '', 1, '1', '2', '2', 0),
(65, 'ga', NULL, NULL, '2', '5', '5', 5, '5', '5', '2', '5', '2', '2', '5555-05-05', NULL, NULL, NULL, NULL, 'Ativo', '36', '', 1, '1', '2', '5', 0),
(64, '20', NULL, NULL, '20', '20', '20', 20, '20', '20', '20', '20', '20', '20', '2020-02-20', NULL, NULL, NULL, NULL, 'Ativo', '33', '', 1, '2', '20', '20', 0),
(66, '03', NULL, NULL, '3', '3', '3', 3, '3', '3', '3', '3', '3', '3', '3333-03-31', NULL, NULL, NULL, NULL, 'Ativo', '20', '', 1, '1', '3', '3', 0),
(67, 'tiagott', NULL, NULL, '77', '22', 'sei', 33, 'ma', 'lo', 'salv', 'ba', '88', '99', '22', NULL, NULL, NULL, NULL, 'Ativo', '1', '', 1, 'masc', 'dev', 'adm', 0),
(68, '9', NULL, NULL, '9', '9', '9', 9, '9', '9', '9', '9', '9', '9', '9999-09-09', NULL, NULL, NULL, NULL, 'Ativo', '1', '', 1, '1', '9', '9', 0),
(71, 'qwe', NULL, NULL, '5', '5', '5', 5, '5', '5', '5', '5', '5', '5', '5555-05-05', '2023-08-04 15:41:24', NULL, NULL, NULL, 'Ativo', '1', '', 1, '1', '5', '5', 0),
(72, 'gg', NULL, NULL, '5', '5', '5', 5, '5', '5', '5', '5', '5', '5', '5555-05-05', '2023-08-04 16:24:38', NULL, NULL, NULL, 'Ativo', '1', '', 1, '1', '5', '5', 0),
(73, '07', NULL, NULL, '7', '7', '7', 7, '7', '7', '7', '7', '7', '7', '7777-07-07', '2023-08-07 19:02:21', NULL, NULL, NULL, 'Ativo', '16', '', 1, '1', '7', '7', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sigla` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `estados`
--

INSERT INTO `estados` (`id_estado`, `nome`, `sigla`) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amapá', 'AP'),
(4, 'Amazonas', 'AM'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Mato Grosso', 'MT'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Minas Gerais', 'MG'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Paraná', 'PR'),
(17, 'Pernambuco', 'PE'),
(18, 'Piauí', 'PI'),
(19, 'Rio de Janeiro', 'RJ'),
(20, 'Rio Grande do Norte', 'RN'),
(21, 'Rio Grande do Sul', 'RS'),
(22, 'Rondônia', 'RO'),
(23, 'Roraima', 'RR'),
(24, 'Santa Catarina', 'SC'),
(25, 'São Paulo', 'SP'),
(26, 'Sergipe', 'SE'),
(27, 'Tocantins', 'TO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagens`
--

CREATE TABLE `imagens` (
  `id_img` int(100) NOT NULL,
  `nome_img` varchar(30) NOT NULL,
  `numero_img` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `imagens`
--

INSERT INTO `imagens` (`id_img`, `nome_img`, `numero_img`) VALUES
(1, 'test.jpg', 1),
(2, 'BROTA L1.jpeg', 0),
(3, 'ESA.jpeg', 0),
(4, 'BROTA L1.jpeg', 0),
(5, 'crachá Let.jpeg', 0),
(6, 'ESA.jpeg', 0),
(7, 'crachá Let.jpeg', 0),
(8, 'ESA.jpeg', 0),
(9, 'BROTA L1.jpeg', 0),
(10, 'crachá Let.jpeg', 0),
(11, 'ESA.jpeg', 0),
(12, 'BROTA L1.jpeg', 0),
(13, 'BROTA L1.jpeg', 0),
(14, 'crachá Let.jpeg', 0),
(15, 'ESA.jpeg', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `loja`
--

CREATE TABLE `loja` (
  `id_lojas` int(11) NOT NULL,
  `nome_loja` varchar(220) NOT NULL,
  `localidade` varchar(50) NOT NULL,
  `fk_estado` varchar(3) NOT NULL,
  `quant_cliente` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `loja`
--

INSERT INTO `loja` (`id_lojas`, `nome_loja`, `localidade`, `fk_estado`, `quant_cliente`) VALUES
(1, 'COMPANY', 'BARRA', '5', '1'),
(2, 'DINCRED', 'BROTAS', '5', '1'),
(3, 'DINCRED', 'LIBERDADE', '5', '1'),
(4, 'GCRED', 'CALÇADA', '5', '1'),
(5, 'GCRED', 'LAURO DE FREITAS', '5', '1'),
(6, 'GCRED', 'PARIPE', '5', '1'),
(7, 'GCRED', 'PERIPERI', '5', '1'),
(8, 'GIRO CRED', 'IGUATEMI', '5', '1'),
(9, 'GCRED', 'SÃO MARCOS', '5', '1'),
(10, 'RV CRED', 'PLATAFORMA', '5', '1'),
(11, 'STOP CLUB EMPRESTIMO', 'NULL', '', '1'),
(12, 'G CRED', 'BOCA DO RIO', '5', '1'),
(13, 'EDICRED', 'SIMÕES FILHO', '5', '1'),
(14, 'GCRED', 'SUSSUARANA', '5', '1'),
(15, 'GCRED', 'PERNAMBUÉS', '5', '1'),
(16, 'VILAS CRED', 'LAURO DE FREITAS', '5', '1'),
(17, 'GCRED', 'PAULO AFONSO', '17', '1'),
(18, 'GCRED', 'ALAGOINHAS', '17', '1'),
(19, 'G Cred', 'SÃO SEBASTIÃO', '17', '1'),
(20, 'Platinum Cred', 'ARACAJU', '17', '1'),
(21, 'cred certo', 'JABOATÃO', '17', '1'),
(22, 'PLATINUM', 'BOA VIAGEM', '17', '1'),
(23, 'CREDITA', 'PAULISTA', '17', '1'),
(24, 'SIM CRED', 'SANTO ANTONIO', '17', '1'),
(25, 'FAZ CRED', 'BOA VISTA', '17', '1'),
(26, 'PLATINUM CRED', 'PRAZERES', '17', '1'),
(27, 'FACIL CRED', 'CAVALEIRO', '17', '1'),
(28, 'SB CRED', 'PRAZERES', '17', '1'),
(29, 'Super Cred', 'ABREU E LIMA', '17', '1'),
(30, 'GCRED', 'ALECRIM', '17', '1'),
(31, 'Gcred', 'PARNAMIRIM-RN', '17', '1'),
(32, 'FG CRED', 'NULL', '', '1'),
(33, 'PLATINUM CRED', 'MORENO', '17', '1'),
(34, 'Platinum Cred', 'CARPINA', '17', '1'),
(35, 'PLATINUM CRED', 'CAMARAGIBE', '17', '1'),
(36, 'PLATINUM CRED', 'SÃO LORENÇO DA MATA', '17', '1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `nomeimg`
--

CREATE TABLE `nomeimg` (
  `id_nomeimg` int(2) NOT NULL,
  `tipoimg` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `nomeimg`
--

INSERT INTO `nomeimg` (`id_nomeimg`, `tipoimg`) VALUES
(1, 'NCU(Comprovante da máquina)'),
(2, 'Contrato do cliente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `origem`
--

CREATE TABLE `origem` (
  `id_origem` int(11) NOT NULL,
  `produto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `origem`
--

INSERT INTO `origem` (`id_origem`, `produto`) VALUES
(1, 'Panfleto'),
(2, 'Cliente Recorrente'),
(3, 'Prospecção'),
(4, 'Indicação'),
(5, 'Indicação Cliente'),
(6, 'Marketing Digital'),
(7, 'Consultor Externo'),
(8, 'Instagram'),
(9, 'Google'),
(10, 'Fachada');

-- --------------------------------------------------------

--
-- Estrutura para tabela `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `permisos`
--

INSERT INTO `permisos` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Lector');

-- --------------------------------------------------------

--
-- Estrutura para tabela `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nome_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `status`
--

INSERT INTO `status` (`id_status`, `nome_status`) VALUES
(1, 'Pago'),
(2, 'Não Pago'),
(3, 'Concluído'),
(4, 'Pendente'),
(5, 'Ativo'),
(6, 'Inativo'),
(7, 'Aberto'),
(8, 'Fechado'),
(9, 'Em Andamento'),
(10, 'Encerrado'),
(11, 'Aprovado'),
(12, 'Reprovado'),
(13, 'Enviado'),
(14, 'Não Enviado'),
(15, 'Agendado'),
(16, 'Cancelado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipconta`
--

CREATE TABLE `tipconta` (
  `id_tipoC` int(1) NOT NULL,
  `nome_Conta` varchar(30) NOT NULL,
  `fk_banco` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipconta`
--

INSERT INTO `tipconta` (`id_tipoC`, `nome_Conta`, `fk_banco`) VALUES
(1, 'Corrente Fisica', 0),
(2, 'Poupança', 0),
(3, 'Caixa Fácil', 0),
(4, 'Corrente Juridica', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rol` int(11) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `cargo` varchar(70) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `nombre`, `edad`, `correo`, `telefono`, `password`, `fecha`, `rol`, `imagen`, `cargo`, `usuario`) VALUES
(1, 'Tiago Gomes', 80, 'tiago@gmail.com', '7100', '12345', '2023-08-17 13:10:38', 1, '', 'Dev', 'Tiago'),
(59, 'Emanuel', 21, 'mugarte5672@gmail.com', '9911165670', '12345', '2023-08-16 17:37:26', 1, 'user1.png', '', 'Emanuel'),
(66, 'Tommy Shelby', 1, 'Mafia@Irlandesa.com', '55825888', '12345', '2023-08-16 17:37:26', 2, 'qr.png', '', 'Tommt'),
(68, 'Maria', 14, 'jt615257@gmail.com', '9911165670', '12345', '2023-08-23 14:09:13', 2, 'bg.jpg', 'Atendente', 'Maria'),
(70, 'Shaggy', 20, 'Shaggy@Buu.net', '9911165670', '12345', '2023-08-16 17:37:26', 2, 'user.png', '', 'Shaggy'),
(72, 'gg', 20, 'jj@gmail.com', '11', '12345', '2023-08-17 15:44:49', 1, '', '', NULL),
(73, 'kk', 8, 'jj@gmail.com', '55', '12345', '2023-08-17 15:45:24', 1, '', '', NULL),
(74, 'tiagoooo', 0, 'o@gmail.com', '', '', '2023-09-01 16:44:26', 0, '', '', NULL),
(75, 'fa', 0, 'fa@gmail.com', '', '', '2023-09-01 16:46:42', 0, '', '', NULL),
(76, 'fa', 0, 'fa@gmail.com', '', '', '2023-09-01 16:50:11', 0, '', '', NULL),
(77, 'setembro', 0, 'set@unidompedro.com', '', '', '2023-09-01 16:53:17', 0, '', '', NULL),
(78, 'pp', 0, 'pp@gmail.com', '', '', '2023-09-01 17:45:13', 0, '', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_vendas` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `taxa` varchar(25) NOT NULL,
  `numNsu` varchar(20) DEFAULT NULL,
  `fotoNsu` varchar(20) NOT NULL,
  `valor` varchar(10) DEFAULT NULL,
  `valorR` varchar(300) DEFAULT NULL,
  `pix` varchar(20) NOT NULL,
  `operacao` varchar(100) NOT NULL,
  `conta` varchar(25) DEFAULT NULL,
  `agencia` varchar(25) DEFAULT NULL,
  `banco` varchar(25) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `tipConta` varchar(25) DEFAULT NULL,
  `data_cadastro` datetime NOT NULL,
  `ultima_alteracao` datetime DEFAULT NULL,
  `criado_por` varchar(200) NOT NULL,
  `alterado_por` varchar(100) DEFAULT NULL,
  `situacao` varchar(20) NOT NULL DEFAULT '4',
  `loja` int(2) DEFAULT NULL,
  `usuario` int(10) NOT NULL,
  `fotoVend` varchar(220) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`id_vendas`, `nome`, `taxa`, `numNsu`, `fotoNsu`, `valor`, `valorR`, `pix`, `operacao`, `conta`, `agencia`, `banco`, `cpf`, `tipConta`, `data_cadastro`, `ultima_alteracao`, `criado_por`, `alterado_por`, `situacao`, `loja`, `usuario`, `fotoVend`) VALUES
(3, 'tiago', 'taxa', 'numNnn', 'foto', 'val', 'valR', 'pix', 'op', 'cc', 'ag', 'bc', 'cpf', 'tipC', '0000-00-00 00:00:00', NULL, '1', NULL, '1', 1, 0, ''),
(4, 'tt', '4', '55', '', '1000', '500', '2000', '1', '85', '888', '55', '55', '555', '0000-00-00 00:00:00', NULL, '1', NULL, '7', 17, 0, ''),
(5, 'tiago', '55', '55', '', '55', '55', '55', '55', '55', '55', '55', '55', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '4', 3, 0, ''),
(6, 'adriele', 'hh', 'hh', '', 'hh', 'hhh', 'hhh', 'hhh', 'hhh', 'hhhh', 'asdasd', '333', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '10', 4, 0, ''),
(7, 'Jesus', 'asd', 'asd', '', 'asd', 'asd', 'sd', 'asd', 'dasd', 'sad', 'asd', 'asd', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '4', 5, 0, ''),
(26, 'mimimi', '15', '5', '', '500', '1000', '20', '12', '21', '21', '12', '123', '1', '0000-00-00 00:00:00', NULL, '59', NULL, '4', 11, 0, ''),
(9, 'nome', 'taxa', 'numero', '', 'valor', 'valor2', 'pix', 'operacao', 'conta', 'agencia', 'banco', 'cpf', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '5', 7, 0, ''),
(10, 'tiago', '5', '5', '', '5', '5', '5', '5', 'f', 'fff', '10', 'fff', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '5', 8, 0, ''),
(11, 'nome', 'taxa', 'numero', '', 'valor     ', 'valor2', 'pix', 'operacao                    ', 'Conta                    ', 'agencia                  ', 'banco                    ', 'cpf                 ', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '5', 9, 0, ''),
(12, 'carlos', 'carlos', 'carlos', '', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '5', 10, 0, ''),
(13, 'carlos', 'carlos', 'carlos', '', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', '70', 'carlos', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '5', 11, 0, ''),
(14, 'carlos', 'carlos', 'carlos', '', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', '200', 'carlos', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '5', 11, 0, ''),
(15, 'carlos', 'carlos', 'carlos', '', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', 'carlos', NULL, '0000-00-00 00:00:00', NULL, '59', NULL, '5', 10, 0, ''),
(16, 'bla', 't', 'num', '', 'v1', 'v2', 'pi', 'op', 'ct', 'ag', 'ba', 'cp', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '5', 11, 0, ''),
(17, 'bla222', 't', 'num', '', 'v1', 'v2', 'pi', 'op', 'ct', 'ag', 'ba', 'cp', NULL, '0000-00-00 00:00:00', NULL, '59', NULL, '5', 11, 0, ''),
(18, '23', '2', '2', '', '2', '2', '2', '2', '2', '2', '2', '2', NULL, '0000-00-00 00:00:00', NULL, '59', NULL, '5', 11, 0, ''),
(19, 'tiago', '88', '77', '', '88', '77', '55', '66', '52', '52', '45', '045', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '7', 11, 0, ''),
(20, 'S', '5', '5', '', '55', '5', '5', '5', '5', '5', '5', '5', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '7', 10, 0, ''),
(21, 'TIAGO1', '5', '555', '', '55', '55', '55', '5', '55', '55', '55', '555', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '7', 10, 0, ''),
(23, 'tiago luis', 'taxa', 'num', '', 'valor', 'valor 2', 'pix', 'ao', 'conta', 'agencia', 'banco', '50', NULL, '0000-00-00 00:00:00', NULL, '1', NULL, '7', 10, 0, ''),
(25, 'NovoNome', '14', 'n', '', '1000', '500', '220', '12', '55', '20', '100', '100', '1', '0000-00-00 00:00:00', NULL, '1', NULL, '7', 2, 0, ''),
(27, 'cava', '1', '1', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '1', NULL, '4', 10, 0, ''),
(28, 'nemsei', '12', '12', '', '1', '2', '1', '12', '12', '12', '12', '12', '2', '0000-00-00 00:00:00', NULL, '1', NULL, '4', 12, 0, ''),
(29, 'aaaa', '44', '44', '', '44', '444', '44', '44', '44', '44', '44', '44', '2', '0000-00-00 00:00:00', NULL, '1', NULL, '5', 10, 0, ''),
(30, '11', '11', '11', '', '11', '11', '11', '11', '11', '11', '11', '11', '4', '0000-00-00 00:00:00', NULL, '59', NULL, '4', 10, 0, ''),
(31, 'tiago', '11', '12', '', '12', '12', '12', '11', '22', '11', '22', '55', '1', '0000-00-00 00:00:00', NULL, '59', NULL, '4', 2, 0, ''),
(32, 'tiag', '5', '5', '', '5', '5', '5', '5', '5', '5', '5', '5', '1', '0000-00-00 00:00:00', NULL, '59', NULL, '4', 2, 0, ''),
(37, '55', '55', '55', '', '55', '55', '55', '55', '55', '55', '55', '555.555.555-55', '1', '0000-00-00 00:00:00', NULL, '1', NULL, '4', 2, 0, ''),
(39, 'vend', '5', '5', '', '5', '5', '5', '5', '5', '5', '5', '5', '1', '0000-00-00 00:00:00', NULL, '1', NULL, '4', 1, 0, ''),
(41, 'ttg', '3', '2', '', '3', '3', '3', '3', '3', '3', '3', '3', '1', '0000-00-00 00:00:00', NULL, '1', NULL, '4', 1, 0, ''),
(38, '1', '1', '1', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '1', NULL, '4', 8, 0, ''),
(40, 'ggggg', '7', '7', '', '7', '7', '7', '7', '7', '7', '7', '7', '1', '0000-00-00 00:00:00', NULL, '1', NULL, '4', 18, 0, 'NULL'),
(42, '31', '22', '2', '', '2', '2', '2', '5', '5', '2', '2', '5', '1', '0000-00-00 00:00:00', NULL, '1', NULL, '4', 1, 0, 'NULL'),
(43, 'f', '', 'f@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, 'BROTA L1.jpeg'),
(44, 'NEMG', '', 'G@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, 'ESA.jpeg'),
(45, 'tt01', '', 'tt@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, NULL),
(46, 'gg', '', 'gg@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, NULL),
(47, 'gg', '', 'gg@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, NULL),
(48, 'gg', '', 'gg@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, NULL),
(49, 'gg', '', 'gg@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, NULL),
(50, 'xx', '', 'xx@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, NULL),
(51, 'ff', '', 'ff@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, 'BROTA L1.jpeg'),
(52, 'gg', '', 'gg@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, NULL),
(53, '3131', '', 'fgg@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, NULL),
(54, '3131', '', 'fgg@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, NULL),
(55, 'tet', '', 'tt@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, 'Array'),
(56, '11111', '', '1111@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, 'crachá Let.jpeg'),
(57, '3131', '', 'fgg@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, NULL),
(58, 'd', '', 'd@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, NULL),
(59, 'tt01', '', 't01@gmail.com', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, '', NULL, '4', NULL, 0, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `banco`
--
ALTER TABLE `banco`
  ADD PRIMARY KEY (`id_banco`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Índices de tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id_img`);

--
-- Índices de tabela `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`id_lojas`);

--
-- Índices de tabela `nomeimg`
--
ALTER TABLE `nomeimg`
  ADD PRIMARY KEY (`id_nomeimg`);

--
-- Índices de tabela `origem`
--
ALTER TABLE `origem`
  ADD PRIMARY KEY (`id_origem`);

--
-- Índices de tabela `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Índices de tabela `tipconta`
--
ALTER TABLE `tipconta`
  ADD PRIMARY KEY (`id_tipoC`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permisos` (`rol`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_vendas`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `banco`
--
ALTER TABLE `banco`
  MODIFY `id_banco` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de tabela `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id_img` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `loja`
--
ALTER TABLE `loja`
  MODIFY `id_lojas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `nomeimg`
--
ALTER TABLE `nomeimg`
  MODIFY `id_nomeimg` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `origem`
--
ALTER TABLE `origem`
  MODIFY `id_origem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tipconta`
--
ALTER TABLE `tipconta`
  MODIFY `id_tipoC` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_vendas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
