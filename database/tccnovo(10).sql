-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2017 às 00:20
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tccnovo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eletrodomestico`
--

CREATE TABLE `eletrodomestico` (
  `ideletrodomestico` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `eletrodomestico`
--

INSERT INTO `eletrodomestico` (`ideletrodomestico`, `nome`) VALUES
(1, 'Fogão'),
(2, 'Batedeira'),
(3, 'Liquidificador'),
(4, 'Forno'),
(5, 'Micro-ondas'),
(6, 'Geladeira'),
(8, 'Freezer');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eletrodomestico_has_usuario`
--

CREATE TABLE `eletrodomestico_has_usuario` (
  `ideletrodomestico` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `eletrodomestico_has_usuario`
--

INSERT INTO `eletrodomestico_has_usuario` (`ideletrodomestico`, `idusuario`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 2),
(3, 3),
(4, 2),
(4, 3),
(5, 3),
(6, 3),
(8, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `etapas`
--

CREATE TABLE `etapas` (
  `idetapas` int(11) NOT NULL,
  `posicao` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `etapas`
--

INSERT INTO `etapas` (`idetapas`, `posicao`, `texto`) VALUES
(1, 1, 'Em uma panela adicione todos os ingredientes'),
(2, 2, 'Cozinhe em fogo médio e mexa'),
(3, 3, 'Deixe esfriar e enrole'),
(4, 1, 'Em um liquidificador, adicione a cenoura, os ovos e o óleo, depois misture'),
(5, 2, 'Acrescente o açúcar e bata novamente por 5 minutos'),
(6, 3, 'Em uma tigela ou na batedeira, adicione a farinha de trigo e depois misture novamente'),
(7, 4, 'Acrescente o fermento e misture lentamente com uma colher'),
(8, 5, 'Asse em um forno preaquecido a 180° C por aproximadamente 40 minutos'),
(11, 1, 'Bater até ficar as gemas e o açúcar virar um creme'),
(12, 2, 'Acrescentar aos poucos a farinha, o leite fervendo, o fermento e coloque as claras por último delicadamente'),
(13, 3, 'Leve para assar até dourar'),
(14, 4, 'Para o recheio : bata na batedeira 200g de manteiga sem sal com 1 lata de leite condensado, até engrossar e coloque aos poucos, sem parar de bater, as colheradas de leite ninho uma a uma'),
(15, 5, 'desligue a batedeira e coloque o creme de leite gelado, bem gelado'),
(16, 6, 'Não bata novamente, misture com uma colher'),
(17, 7, 'antes de cobrir e rechear o bolo, deixe esse creme por uns 30 min na geladeira'),
(18, 8, 'Recheie o bolo e cubra com o mesmo creme'),
(19, 9, 'Se quiser a versão chocolate, acrescente uma xícara de chocolate em pó na massa e 1/2 no recheio'),
(20, 1, 'Em uma batedeira, bata as claras em neve e acrescente o açúcar'),
(21, 2, 'Adicione as gemas, a margarina, o leite, a farinha de trigo, o fubá e continue batendo'),
(22, 3, 'Acrescente por último o fermento e misture com uma colher ou espátula'),
(23, 4, 'Despeje a massa em uma forma untada e deixe assar em forno médio (180° C), preaquecido, por aproximadamente 30 minutos'),
(24, 1, 'Coloque o leite ninho em uma vasilha e aos poucos coloque o açúcar, misturando'),
(25, 2, 'Após misturar coloque o leite de coco aos poucos também, veja quando a mistura estiver bem concentrada, para ficar um doce bem durinho não coloca toda a lata de leite de coco'),
(26, 3, 'Após misturar toda a massa, você faz bolinhas com as mãos, assim como fazer brigadeiro e coloca no açúcar'),
(27, 4, 'Se preferir coloque na geladeira'),
(28, 1, 'Bata as claras em neve e reserve'),
(29, 2, 'Misture as gemas, a margarina e o açúcar até obter uma massa homogênea'),
(30, 3, 'Acrescente o leite e a farinha de trigo aos poucos, sem parar de bater'),
(31, 4, 'Por último, adicione as claras em neve e o fermento'),
(32, 5, 'Despeje a massa em uma forma grande de furo central untada e enfarinhada'),
(33, 6, 'Asse em forno médio 180 °C, preaquecido, por aproximadamente 40 minutos ou ao furar o bolo com um garfo, este saia limpo'),
(34, 1, 'Cozinhe o peito de frango no caldo até ficar macio '),
(35, 2, 'Separe 1 xícara (chá) de caldo do cozimento e reserve'),
(36, 3, ' Refogue os demais ingredientes e acrescente as ervilhas por último'),
(37, 4, 'Desfie o frango, misture ao caldo e deixe cozinhar até secar'),
(38, 5, ' Bata o leite, o óleo e os ovos no liquidificador em velocidade baixa '),
(39, 6, ' Acrescente aos poucos a farinha, o sal e o fermento '),
(40, 7, ' Despeje metade da massa em uma forma untada e adicione o recheio sobre ela '),
(41, 8, ' Cubra com o restante de massa e o queijo ralado'),
(42, 9, ' Leve ao forno preaquecido (180° C) até dourar'),
(43, 1, ' Em uma panela com óleo, coloque a cebola e o alho para dourar'),
(44, 2, ' Acrescente o recheio escolhido e refogue'),
(45, 3, ' Coloque os demais ingredientes e deixe cozinhar por alguns minutos'),
(46, 4, ' Bata todos ingredientes da massa no liquidificador e adicione por último o fermento'),
(47, 5, ' Unte uma forma retangular com margarina e polvilhe com farinha de trigo'),
(48, 6, ' Despeje a massa e espalhe cuidadosamente o recheio'),
(49, 7, ' Se desejar, salpique queijo por cima'),
(50, 8, ' Leve ao forno preaquecido a 180º C e asse por aproximadamente 40 minutos'),
(51, 1, ' Misture todos os ingredientes até obter uma massa cremosa e homogênea'),
(52, 2, ' Deixe aquecer uma panela com bastante óleo para que os bolinhos possam boiar'),
(53, 3, ' Quando o óleo estiver bem quente (180º C), com uma colher, comece a colocar pequenas quantidades de massa, e frite até que dourem por inteiro'),
(54, 4, ' Coloque os bolinhos sobre papel absorvente e depois passe-os no açúcar com canela'),
(55, 1, 'Peneire a massa de tapioca em uma frigideira até preencher toda com a massa'),
(56, 2, 'Se quiser deixar a sua tapioca um pouco mais grossa, pode acrescentar mais que 4 colheres, não esquecendo de peneirar'),
(57, 3, 'Deixe no fogo por alguns segundos, após ver que a parte de baixo já está assada, vire e asse o outro lado'),
(58, 4, 'Não precisa deixar muito tempo no fogo, para que a sua tapioca fique seca'),
(59, 5, 'Corte as bananas em cubo, despeje em uma panela juntamente com o achocolatado em pó, o açúcar e o leite, misture e leve ao fogo'),
(60, 6, 'Vá mexendo até formar uma calda, desligue o fogo e recheie a tapioca'),
(61, 7, 'Pode acrescentar coco ralado para dar um pouco mais de sabor ao recheio'),
(62, 1, 'Em uma panela, misture o frango, o alho, a maionese, o sal e pimenta'),
(63, 2, 'Em uma frigideira grande, derreta a manteiga e doure a cebola'),
(64, 3, 'Junte o frango temperado até que esteja dourado'),
(65, 4, 'Adicione os cogumelos, o ketchup e a mostarda'),
(66, 5, 'Incorpore o creme de leite e retire do fogo antes de ferver'),
(67, 6, 'Sirva com arroz branco e batata palha'),
(68, 1, 'Limpe bem as carnes salgadas, tirando os pelos, e colocando-as de molho em água por 24 horas'),
(69, 2, 'Troque a água 3 vezes durante este período'),
(70, 3, 'Após o molho, ferva as carnes salgadas em peças inteiras, durante 15 minutos, em fogo forte, jogando a água fora, a fim de retirar o excesso de gordura'),
(71, 4, 'Ferva os pés e os rabos separadamente, colocando um limão, cortado em quatro, na água da fervura'),
(72, 5, 'Escolha e lave o feijão, colocando-o de molho por 2 horas'),
(73, 6, 'Providencie um caldeirão para ir colocando os ingredientes pré-cozidos (não devem ficar cozidos inicialmente)'),
(74, 7, 'Cozinhe o feijão na pressão por 10 minutos (após pegar pressão) com as folhas de louro e um fio de óleo'),
(75, 8, 'Após cozimento, coloque no caldeirão'),
(76, 9, 'Pique as carnes em pedaços médios'),
(77, 10, 'Coloque no caldeirão a orelha (sem pré-cozimento) e ponha a cozinhar com o feijão'),
(78, 11, 'Cozinhe na pressão por 5 minutos a língua'),
(79, 12, 'Coloque no caldeirão'),
(80, 13, 'Cozinhe na pressão por 10 minutos: os pés, os rabinhos e as costelinhas'),
(81, 14, 'Coloque no caldeirão'),
(82, 15, 'Acrescente a pimenta, o cominho e as laranjas, com casca, cortadas em metades'),
(83, 16, 'Coloque ½ litro de água no caldeirão'),
(84, 17, 'Acrescente água quente sempre que necessário, tendo o cuidado de manter as carnes sempre cobertas pelo caldo'),
(85, 18, 'Cozinhe até que tudo esteja macio, mexendo para não grudar no fundo da panela'),
(86, 19, 'Retire as metades das laranjas'),
(87, 20, 'Coloque as lingüiças cortadas em rodelas'),
(88, 21, 'Em uma frigideira, refogue a cebola e o alho no óleo'),
(89, 22, 'Despeje no caldeirão'),
(90, 23, 'Por último, o cheiro verde picado'),
(91, 24, 'Prove o sal e acerte se for necessário (normalmente não será preciso)'),
(92, 25, 'Se o caldo não ficou grosso o suficiente, retire duas conchas cheias de grãos e amasse com o garfo até obter uma pasta'),
(93, 26, 'Volte para a panela para que cozinhe tudo mais alguns minutos'),
(94, 27, 'Corte a couve em tiras bem fininhas'),
(95, 28, 'Leve ao fogo o bacon, depois a cebola picadinha, e por último o alho, para não queimar'),
(96, 29, 'Junte a couve e adicione sal'),
(97, 30, 'Cozinhe na própria água por 1 minuto'),
(98, 31, 'Misture um pouco do caldo do feijão com os outros ingredientes'),
(99, 1, 'Leve ao fogo a água, o leite e o óleo até começar a ferver'),
(100, 2, 'Em uma tigela coloque o polvilho e o sal'),
(101, 3, 'Depois de levantar fervura, coloque a mistura da panela na tigela do polvilho, escaldando-o'),
(102, 4, 'Quando a massa estiver menos quente, adicione o ovo e o queijo'),
(103, 5, 'Sove bem a massa até que ela fique uniforme e grudando pouco nas mãos'),
(104, 6, 'Leve a massa à geladeira por 30 minutos, para que a massa fique firme'),
(105, 7, 'Retire a massa da geladeira'),
(106, 8, 'Unte as mãos com óleo e forme bolinhas com a massa, dispondo-as em assadeira untada'),
(107, 9, 'Leve ao forno preaquecido até que os pães de queijo dourem'),
(108, 1, 'Coloque todos os ingredientes dentro de uma caneca de aproximadamente 300 ml ou mais'),
(109, 2, 'Mexa até obter uma massa homogênea e leve ao micro-ondas por 3 minutos'),
(110, 3, 'Coloque todos os ingredientes em uma panela, leve ao fogo médio e misture até obter uma consistência grossa'),
(111, 4, 'Despeje a calda sobre o bolo assim que retirá-lo do microondas'),
(112, 1, 'Leve ao fogo: leite, margarina, caldo'),
(113, 2, 'Quando ferver junte toda farinha'),
(114, 3, 'Mexa até cozinhar bem'),
(115, 4, 'Desligue'),
(116, 5, 'Misture a mandioca e sove para agregar'),
(117, 6, 'Modele as coxinhas colocando o recheio'),
(118, 7, 'Passe no ovo, farinha de rosca e frite'),
(119, 1, 'Prepare a gelatina com a água quente'),
(120, 2, 'Depois é só bater todos os ingredientes no liquidificador e colocar numa travessa para gelar'),
(121, 1, 'Misture tudo e passe generosamente entre os anéis do pão'),
(122, 2, 'Enrole o pão com uma folha de alumínio e leve ao forno pré - aquecido por uns 5 minutos'),
(123, 3, 'Sirva bem quente'),
(124, 4, 'Acompanha bem churrasco, carnes em geral e saladas'),
(125, 1, 'Faça a gelatina normalmente e não leve a geladeira'),
(126, 2, 'Depois que pronta, ainda quente, coloque no liquidificador junto com o leite condensado e o creme de leite'),
(127, 3, 'Bata bem'),
(128, 4, 'Depois leve ao congelador em um refratário tampado para não formar blocos de gelo'),
(129, 5, 'Depois de congelado, retire do congelador e bata na batedeira para ficar cremoso'),
(130, 6, 'Volte para o congelador'),
(131, 7, 'Está pronto, um sorvete fácil, prático e gostoso'),
(132, 1, 'Em uma panela, misture a água e o açúcar até formar uma calda'),
(133, 2, 'Unte uma forma com a calda e reserve'),
(134, 3, 'Bata todos os ingredientes no liquidificador e despeje na forma caramelizada'),
(135, 4, 'Leve para assar em banho-maria por 40 minutos'),
(136, 5, 'Desenforme e sirva'),
(137, 1, 'Cozinhe o macarrão e deixe separado'),
(138, 2, 'Em uma panela média, coloque o óleo'),
(139, 3, 'A cebola e o alho e mexa até dar uma douradinha'),
(140, 4, 'Depois acrescente o sal (bem pouco), o leite e o creme de leite e vá mexendo até ferver'),
(141, 5, 'Para servir coloque o macarrão no prato e o molho por cima, não despeje tudo na panela, senão o molho seca'),
(142, 6, 'Também fica bom colocar pedaços de presunto e queijo dentro do molho enquanto ele estiver cozinhando');

-- --------------------------------------------------------

--
-- Estrutura da tabela `etapas_has_eletrodomestico`
--

CREATE TABLE `etapas_has_eletrodomestico` (
  `etapas_idetapas` int(11) NOT NULL,
  `eletrodomestico_ideletrodomestico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `etapas_has_eletrodomestico`
--

INSERT INTO `etapas_has_eletrodomestico` (`etapas_idetapas`, `eletrodomestico_ideletrodomestico`) VALUES
(2, 1),
(4, 3),
(5, 3),
(6, 2),
(8, 1),
(8, 4),
(13, 1),
(13, 4),
(14, 2),
(20, 2),
(21, 2),
(23, 1),
(23, 4),
(33, 1),
(33, 4),
(34, 1),
(36, 1),
(37, 1),
(38, 3),
(42, 4),
(43, 1),
(45, 1),
(46, 3),
(50, 4),
(52, 1),
(53, 1),
(57, 1),
(59, 1),
(60, 1),
(63, 1),
(64, 1),
(66, 1),
(70, 1),
(71, 1),
(73, 1),
(74, 1),
(77, 1),
(78, 1),
(80, 1),
(85, 1),
(88, 1),
(93, 1),
(95, 1),
(97, 1),
(99, 1),
(101, 1),
(107, 1),
(109, 5),
(110, 1),
(112, 1),
(113, 1),
(114, 1),
(119, 1),
(120, 3),
(122, 4),
(125, 1),
(126, 3),
(128, 8),
(130, 8),
(132, 1),
(134, 3),
(135, 4),
(137, 1),
(138, 1),
(140, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes`
--

CREATE TABLE `ingredientes` (
  `idingredientes` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ingredientes`
--

INSERT INTO `ingredientes` (`idingredientes`, `nome`) VALUES
(1, 'leite condensado'),
(2, 'margarina'),
(3, 'achocolatado'),
(4, 'óleo'),
(5, 'cenoura'),
(6, 'açucar'),
(7, 'farinha de trigo'),
(8, 'fermento'),
(9, 'ovo'),
(10, 'manteiga'),
(11, 'chocolate em pó'),
(12, 'leite'),
(13, 'chá de baunilha'),
(14, 'chocolate branco'),
(15, 'cereja'),
(16, 'leite ninho'),
(17, 'creme de leite'),
(18, 'fubá'),
(19, 'leite coco'),
(20, 'peito de frango'),
(21, 'caldo de galinha'),
(22, 'dente de alho'),
(23, 'cebola '),
(24, 'tomates '),
(25, 'ervilhas'),
(26, 'pimenta do reino '),
(27, 'sal  '),
(28, 'fermento em pó '),
(29, 'queijo ralado'),
(31, 'alho '),
(32, 'pimentão '),
(33, 'orégano'),
(34, 'cheiro verde'),
(35, 'canela '),
(36, 'massa de tapioca'),
(37, 'bananas'),
(38, 'pimenta'),
(39, 'maionese'),
(40, 'ketchup'),
(41, 'mostarda'),
(42, 'cogumelos'),
(43, 'batata palha'),
(44, 'feijão preto'),
(45, 'orelha de porco'),
(46, 'rabos de porco'),
(47, 'pés de porco'),
(48, 'costelinha de porco'),
(49, 'língua'),
(50, 'paios'),
(51, 'linguiça portuguesa'),
(52, 'laranjas'),
(53, 'salsinha'),
(54, 'cebolinha'),
(55, 'folhas de louro'),
(56, 'couve'),
(57, 'bacon'),
(58, 'Azeite'),
(59, 'pimentas vermelhas'),
(60, 'óleo de soja'),
(62, 'água'),
(63, 'polvilho azedo'),
(64, 'mandioca'),
(65, 'gelatina de maracujá'),
(66, 'suco de maracujá'),
(67, 'agua quente'),
(68, 'gelatina'),
(69, 'macarrão penne');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes_has_etapas`
--

CREATE TABLE `ingredientes_has_etapas` (
  `ingredientes_idingredientes` int(11) NOT NULL,
  `etapas_idetapas` int(11) NOT NULL,
  `quantidade` varchar(10) NOT NULL,
  `unidade` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ingredientes_has_etapas`
--

INSERT INTO `ingredientes_has_etapas` (`ingredientes_idingredientes`, `etapas_idetapas`, `quantidade`, `unidade`) VALUES
(1, 1, '1', 'lata'),
(1, 14, '1', 'lata'),
(1, 120, '1', 'lata'),
(1, 126, '1', 'lata'),
(1, 134, '1', 'lata'),
(2, 1, '1', 'colher(sopa)'),
(2, 21, '3', 'colheres'),
(2, 29, '4', 'colheres'),
(2, 47, 'a gosto', ''),
(2, 110, '1', 'colher (sopa)'),
(2, 112, '2 ', 'colheres (sopa)'),
(2, 121, '1', 'colher (sopa)'),
(3, 1, '6', 'colheres(sopa)'),
(3, 59, '2', 'colheres(sopa)'),
(3, 108, '2', '2 colheres (sopa)'),
(3, 110, '2', 'colheres (sopa)'),
(4, 4, '1/2', 'xicaras de chá'),
(4, 43, '1/2 ', 'xícara'),
(4, 46, '1/2', ' xícara'),
(4, 52, 'a gosto', ''),
(4, 108, '1', 'colher (sopa)'),
(4, 138, '1', 'colher (sopa)'),
(5, 4, '3', 'medias raladas'),
(6, 5, '2', 'xícaras de chá'),
(6, 11, '2', 'xícara de chá'),
(6, 20, '2', 'xícaras de chá'),
(6, 24, 'a gosto', ''),
(6, 26, 'a gosto', ''),
(6, 29, '2', 'xícaras de chá'),
(6, 51, '2', 'colheres (sopa)'),
(6, 58, '1', 'colheres(sopa)'),
(6, 108, '3', 'colheres (sopa)'),
(6, 132, '1', 'xicara'),
(7, 6, '2 1/2', 'xícaras de chá'),
(7, 12, '2', 'xícaras de chá'),
(7, 21, '2', 'xícara de chá'),
(7, 30, '3', 'xícaras de chá'),
(7, 39, '1 e 1/2  ', 'xícara (chá)'),
(7, 46, '13', 'coheres'),
(7, 47, 'a gosto', ''),
(7, 51, '2 e 1/2 ', 'xícaras (chá)'),
(7, 108, '4', 'colheres (sopa)'),
(7, 113, '2 ', 'copos '),
(8, 7, '1', 'colher de sopa'),
(8, 12, '1', 'colher de sopa'),
(8, 22, '4', 'colheres'),
(8, 31, '1', 'colher de sopa'),
(8, 39, '1', 'colher(sopa)'),
(8, 46, '1', 'colher'),
(8, 51, '1 ', 'colher (sopa)'),
(8, 108, '1', 'colher'),
(9, 4, '4', 'unidades'),
(9, 11, '5', 'gemas'),
(9, 12, '5', 'claras'),
(9, 20, '4', 'unidades'),
(9, 21, '4', 'unidades'),
(9, 28, '3', 'unidades'),
(9, 29, '3', 'unidade'),
(9, 31, '3', 'unidade'),
(9, 46, '3', 'unidade'),
(9, 51, '2', 'unidade'),
(9, 102, '1', 'unidade'),
(9, 108, '1', 'unidade'),
(9, 134, '4', 'unidades'),
(10, 14, '200', 'g'),
(10, 63, '1', 'colheres (sopa)'),
(11, 19, '2', 'xícara de chá'),
(12, 12, '1', 'xícara de chá'),
(12, 21, '1', 'xícara de chá'),
(12, 30, '1 1/2', 'xícaras de chá'),
(12, 46, '1 e 1/2', 'xicara'),
(12, 51, '1', 'xícara (chá) '),
(12, 59, '2', 'colheres(sopa)'),
(12, 99, '1', 'xícara'),
(12, 108, '4', 'colheres (sopa)'),
(12, 110, '1/2', 'xicara'),
(12, 112, '2 ', 'copos'),
(12, 120, '2', 'xicara'),
(12, 134, '1', 'xicara'),
(12, 140, '1', 'lata'),
(16, 14, '8', 'colheres'),
(16, 24, '400', 'g'),
(17, 15, '2', 'latas geladas'),
(17, 66, '1', 'copo'),
(17, 120, '1', 'lata'),
(17, 126, '1', 'lata'),
(17, 140, '1', 'lata'),
(18, 21, '1', 'xícara de chá'),
(19, 25, '1', 'lata'),
(20, 34, '500', 'g'),
(20, 62, '3', 'unidade'),
(20, 64, '3', 'unidade'),
(21, 35, '1', 'xicara'),
(21, 112, '1 ', 'cubo'),
(22, 36, '1', 'unidade'),
(22, 88, '1', 'unidade'),
(22, 95, '1', 'unidade'),
(22, 121, '3', 'unidade'),
(23, 36, '1', 'unidade'),
(23, 43, '1', 'unidade'),
(23, 44, '1', 'unidade'),
(23, 63, '1', 'unidade'),
(23, 88, '1', 'unidade'),
(23, 95, '1', 'unidade'),
(23, 121, '1', 'colher (sopa)'),
(23, 139, 'a gosto', ''),
(24, 36, '3', 'unidade'),
(24, 44, '2', 'unidade'),
(25, 36, '1', 'xicara'),
(26, 36, 'a gosto', ''),
(26, 82, 'a gosto', ''),
(27, 39, 'a gosto', ''),
(27, 44, 'a gosto', ''),
(27, 46, 'a gosto', ''),
(27, 62, 'a gosto', ''),
(27, 91, 'a gosto', ''),
(27, 96, 'a gosto', ''),
(27, 100, '1/2', 'colher(sopa)'),
(27, 121, 'a gosto', ''),
(27, 140, 'a gosto', ''),
(29, 41, '', 'a gosto'),
(29, 46, '3 ', 'colheres'),
(29, 49, 'a gosto', ''),
(29, 102, '250', 'g'),
(31, 43, 'a gosto', ''),
(31, 62, '1', 'unidae'),
(31, 139, 'a gosto', ''),
(32, 44, '1', 'unidade'),
(33, 44, 'a gosto', ''),
(34, 44, 'a gosto', ''),
(34, 90, 'a gosto', ''),
(35, 51, '1', ' colher (chá) '),
(36, 55, '4', 'colheres(sopa)'),
(36, 56, '4', 'colheres(sopa)'),
(37, 59, '2', 'unidade'),
(38, 62, 'a gosto', ''),
(39, 62, '2', 'colheres (sopa)'),
(39, 121, '1/4', 'xicara'),
(40, 65, '1/2', 'copo'),
(41, 65, '1/3', 'copo'),
(42, 65, '1', 'copo'),
(43, 67, 'a gosto', ''),
(44, 72, '1', 'kg'),
(44, 74, '1', 'kg'),
(44, 77, '1', 'kg'),
(44, 98, '1', 'kg'),
(45, 68, '1', 'unidade'),
(45, 70, '1', 'unidade'),
(45, 76, '1', 'unidade'),
(45, 77, '1', 'unidade'),
(46, 68, '2', 'unidade'),
(46, 70, '2', 'unidade'),
(46, 71, '2', 'unidade'),
(46, 76, '2', 'unidade'),
(46, 80, '2', 'unidade'),
(47, 68, '2', 'unidade'),
(47, 70, '2', 'unidade'),
(47, 71, '2', 'unidade'),
(47, 76, '2', 'unidade'),
(47, 80, '2', 'unidade'),
(48, 68, '1', 'kg'),
(48, 70, '3', 'kg'),
(48, 76, '1', 'kg'),
(48, 80, '1', 'kg'),
(49, 68, '3', 'unidade'),
(49, 70, '3', 'unidade'),
(49, 76, '3', 'unides'),
(49, 78, '3', 'unidade'),
(51, 87, '1', 'unidade'),
(52, 82, '2', 'unidade'),
(52, 86, '2', 'unidade'),
(55, 74, '3', 'unidades'),
(56, 94, '2', 'maços'),
(56, 96, '2', 'macos'),
(57, 95, '50', 'g'),
(59, 82, '2', 'unidade'),
(60, 99, '50', 'ml'),
(60, 106, '50', 'ml'),
(62, 99, '50', 'ml'),
(62, 132, '1/3', 'xicara'),
(63, 100, '250', 'g'),
(63, 116, '1/2', 'kg '),
(65, 119, '2', 'caixa'),
(66, 120, '1/2', 'xicara'),
(67, 119, '2', 'xicara'),
(68, 125, '1', 'unidade'),
(69, 137, '300', 'g');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

CREATE TABLE `receita` (
  `idreceita` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `tempo` int(11) NOT NULL,
  `rendimento` int(11) NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`idreceita`, `nome`, `usuario_idusuario`, `tempo`, `rendimento`, `imagem`) VALUES
(1, 'Brigadeiro', 1, 25, 35, 'brigadeiro.jpg'),
(2, 'Bolo de Cenoura', 1, 50, 16, 'bolodecenoura.jpg'),
(3, 'Bolo de Leite Ninho', 1, 40, 8, 'bololeiteninho.jpg'),
(4, 'Bolo de Fuba', 1, 30, 30, 'bolodefuba.jpg'),
(5, 'Doce de Leite Ninho', 1, 25, 18, 'docedeleiteninho.jpg'),
(6, 'Bolo Simples', 1, 40, 12, 'bolosimples.jpg'),
(7, 'Torta de Frango', 1, 40, 15, 'tortadefrango.jpg'),
(8, ' Torta Salgada de Liquidificador', 1, 40, 8, 'tortadeliquidificador.jpg'),
(9, ' Bolinho de Chuva', 1, 30, 8, 'bolinhodechuva.jpg'),
(10, ' Tapioca de Banana com Chocolate', 1, 5, 1, 'tapiocadebananacomchocolate.jpg'),
(11, ' Strogonoff de Frango', 1, 60, 10, 'strogonoffdefrango.jpg'),
(12, ' Feijoada', 1, 180, 30, 'feijoada.jpg'),
(13, ' Pao de Queijo', 1, 100, 0, 'paodequeijo.jpg'),
(14, ' Bolo de Caneca Micro-ondas', 1, 10, 1, 'Bolodecanecamicroondas.jpg'),
(15, 'Coxinha de Mandioca', 1, 30, 20, 'coxinhademandioca.jpg'),
(16, 'Mousse de Maracuja', 1, 15, 6, 'moussedemaracuja.jpg'),
(17, 'Pao de Alho', 1, 10, 20, 'paodealho.jpg'),
(18, ' Sorvete', 1, 30, 20, 'sorvete.jpg'),
(19, ' Pudim de leite condesado', 1, 40, 20, 'pudimdeleitecondensado.jpg'),
(20, 'Macarrao com Molho Branco', 1, 20, 4, 'penneaomolhobranco.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita_has_etapas`
--

CREATE TABLE `receita_has_etapas` (
  `receita_idreceita` int(11) NOT NULL,
  `etapas_idetapas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `receita_has_etapas`
--

INSERT INTO `receita_has_etapas` (`receita_idreceita`, `etapas_idetapas`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(4, 20),
(4, 21),
(4, 22),
(4, 23),
(5, 24),
(5, 25),
(5, 26),
(5, 27),
(6, 28),
(6, 29),
(6, 30),
(6, 31),
(6, 32),
(6, 33),
(7, 34),
(7, 35),
(7, 36),
(7, 37),
(7, 38),
(7, 39),
(7, 40),
(7, 41),
(7, 42),
(8, 43),
(8, 44),
(8, 45),
(8, 46),
(8, 47),
(8, 48),
(8, 49),
(9, 51),
(9, 52),
(9, 53),
(9, 54),
(10, 55),
(10, 56),
(10, 57),
(10, 58),
(10, 59),
(10, 60),
(10, 61),
(11, 62),
(11, 63),
(11, 64),
(11, 65),
(11, 66),
(11, 67),
(12, 68),
(12, 69),
(12, 70),
(12, 71),
(12, 72),
(12, 73),
(12, 74),
(12, 75),
(12, 76),
(12, 77),
(12, 78),
(12, 79),
(12, 80),
(12, 81),
(12, 82),
(12, 83),
(12, 84),
(12, 85),
(12, 86),
(12, 87),
(12, 88),
(12, 89),
(12, 90),
(12, 91),
(12, 92),
(12, 93),
(12, 94),
(12, 95),
(12, 96),
(12, 97),
(12, 98),
(13, 99),
(13, 100),
(13, 101),
(13, 102),
(13, 103),
(13, 104),
(13, 105),
(13, 106),
(13, 107),
(14, 108),
(14, 109),
(14, 110),
(14, 111),
(15, 112),
(15, 113),
(15, 114),
(15, 115),
(15, 116),
(15, 117),
(15, 118),
(16, 119),
(16, 120),
(17, 121),
(17, 122),
(17, 123),
(17, 124),
(18, 125),
(18, 126),
(18, 127),
(18, 128),
(18, 129),
(18, 130),
(18, 131),
(19, 132),
(19, 133),
(19, 134),
(19, 135),
(19, 136),
(20, 137),
(20, 138),
(20, 139),
(20, 140),
(20, 141),
(20, 142);

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita_has_ingredientes`
--

CREATE TABLE `receita_has_ingredientes` (
  `receita_idreceita` int(11) NOT NULL,
  `ingredientes_idingredientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `receita_has_ingredientes`
--

INSERT INTO `receita_has_ingredientes` (`receita_idreceita`, `ingredientes_idingredientes`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(3, 1),
(3, 6),
(3, 8),
(3, 9),
(3, 10),
(3, 12),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(4, 2),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 12),
(4, 18),
(5, 6),
(5, 16),
(5, 19),
(6, 2),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 12),
(7, 20),
(7, 21),
(7, 22),
(7, 23),
(7, 24),
(7, 25),
(7, 26),
(7, 27),
(7, 29),
(9, 4),
(9, 6),
(9, 7),
(9, 8),
(9, 9),
(9, 12),
(9, 35),
(10, 3),
(10, 6),
(10, 12),
(10, 36),
(10, 37),
(11, 10),
(11, 17),
(11, 20),
(11, 23),
(11, 27),
(11, 31),
(11, 38),
(11, 39),
(11, 40),
(11, 41),
(11, 42),
(11, 43),
(12, 22),
(12, 23),
(12, 24),
(12, 26),
(12, 34),
(12, 44),
(12, 45),
(12, 46),
(12, 47),
(12, 48),
(12, 49),
(12, 50),
(12, 51),
(12, 52),
(12, 53),
(12, 54),
(12, 55),
(12, 56),
(12, 57),
(12, 58),
(12, 59),
(13, 9),
(13, 12),
(13, 27),
(13, 29),
(13, 60),
(13, 62),
(13, 63),
(14, 2),
(14, 3),
(14, 4),
(14, 6),
(14, 7),
(14, 8),
(14, 9),
(14, 12),
(15, 2),
(15, 7),
(15, 12),
(15, 21),
(15, 64),
(16, 1),
(16, 12),
(16, 17),
(16, 65),
(16, 66),
(16, 67),
(17, 2),
(17, 22),
(17, 23),
(17, 27),
(17, 39),
(18, 1),
(18, 17),
(18, 68),
(19, 1),
(19, 6),
(19, 9),
(19, 12),
(19, 62),
(20, 4),
(20, 12),
(20, 17),
(20, 23),
(20, 27),
(20, 31),
(20, 69);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `login` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `senha`, `estado`, `login`) VALUES
(1, '', 'usuario1@gmail.com', '123456', 'MG', 'Usuario1'),
(2, 'Usuario1', 'usuario1@gmail.com', '123456', 'MG', 'Usuario1'),
(3, 'UsuÃ¡rio', 'usuario@hotmail.com', 'usuario', 'MG', 'UsuÃ¡rio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eletrodomestico`
--
ALTER TABLE `eletrodomestico`
  ADD PRIMARY KEY (`ideletrodomestico`);

--
-- Indexes for table `eletrodomestico_has_usuario`
--
ALTER TABLE `eletrodomestico_has_usuario`
  ADD PRIMARY KEY (`ideletrodomestico`,`idusuario`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indexes for table `etapas`
--
ALTER TABLE `etapas`
  ADD PRIMARY KEY (`idetapas`);

--
-- Indexes for table `etapas_has_eletrodomestico`
--
ALTER TABLE `etapas_has_eletrodomestico`
  ADD PRIMARY KEY (`etapas_idetapas`,`eletrodomestico_ideletrodomestico`),
  ADD KEY `eletrodomestico_ideletrodomestico` (`eletrodomestico_ideletrodomestico`);

--
-- Indexes for table `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`idingredientes`);

--
-- Indexes for table `ingredientes_has_etapas`
--
ALTER TABLE `ingredientes_has_etapas`
  ADD PRIMARY KEY (`ingredientes_idingredientes`,`etapas_idetapas`),
  ADD KEY `etapas_idetapas` (`etapas_idetapas`);

--
-- Indexes for table `receita`
--
ALTER TABLE `receita`
  ADD PRIMARY KEY (`idreceita`),
  ADD KEY `usuario_idUsuario` (`usuario_idusuario`);

--
-- Indexes for table `receita_has_etapas`
--
ALTER TABLE `receita_has_etapas`
  ADD PRIMARY KEY (`receita_idreceita`,`etapas_idetapas`),
  ADD KEY `etapas_idetapas` (`etapas_idetapas`);

--
-- Indexes for table `receita_has_ingredientes`
--
ALTER TABLE `receita_has_ingredientes`
  ADD PRIMARY KEY (`receita_idreceita`,`ingredientes_idingredientes`),
  ADD KEY `receita_has_ingredientes_ibfk_2` (`ingredientes_idingredientes`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eletrodomestico`
--
ALTER TABLE `eletrodomestico`
  MODIFY `ideletrodomestico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `etapas`
--
ALTER TABLE `etapas`
  MODIFY `idetapas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `idingredientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `receita`
--
ALTER TABLE `receita`
  MODIFY `idreceita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `eletrodomestico_has_usuario`
--
ALTER TABLE `eletrodomestico_has_usuario`
  ADD CONSTRAINT `eletrodomestico_has_usuario_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`),
  ADD CONSTRAINT `eletrodomestico_has_usuario_ibfk_2` FOREIGN KEY (`ideletrodomestico`) REFERENCES `eletrodomestico` (`ideletrodomestico`);

--
-- Limitadores para a tabela `etapas_has_eletrodomestico`
--
ALTER TABLE `etapas_has_eletrodomestico`
  ADD CONSTRAINT `etapas_has_eletrodomestico_ibfk_1` FOREIGN KEY (`etapas_idetapas`) REFERENCES `etapas` (`idetapas`),
  ADD CONSTRAINT `etapas_has_eletrodomestico_ibfk_2` FOREIGN KEY (`eletrodomestico_ideletrodomestico`) REFERENCES `eletrodomestico` (`ideletrodomestico`);

--
-- Limitadores para a tabela `ingredientes_has_etapas`
--
ALTER TABLE `ingredientes_has_etapas`
  ADD CONSTRAINT `ingredientes_has_etapas_ibfk_1` FOREIGN KEY (`etapas_idetapas`) REFERENCES `etapas` (`idetapas`),
  ADD CONSTRAINT `ingredientes_has_etapas_ibfk_2` FOREIGN KEY (`ingredientes_idingredientes`) REFERENCES `ingredientes` (`idingredientes`);

--
-- Limitadores para a tabela `receita`
--
ALTER TABLE `receita`
  ADD CONSTRAINT `receita_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `receita_has_etapas`
--
ALTER TABLE `receita_has_etapas`
  ADD CONSTRAINT `receita_has_etapas_ibfk_1` FOREIGN KEY (`etapas_idetapas`) REFERENCES `etapas` (`idetapas`),
  ADD CONSTRAINT `receita_has_etapas_ibfk_2` FOREIGN KEY (`receita_idreceita`) REFERENCES `receita` (`idreceita`);

--
-- Limitadores para a tabela `receita_has_ingredientes`
--
ALTER TABLE `receita_has_ingredientes`
  ADD CONSTRAINT `receita_has_ingredientes_ibfk_1` FOREIGN KEY (`receita_idreceita`) REFERENCES `receita` (`idreceita`),
  ADD CONSTRAINT `receita_has_ingredientes_ibfk_2` FOREIGN KEY (`ingredientes_idingredientes`) REFERENCES `ingredientes` (`idingredientes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
