
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 11/07/2017 às 22:19:29
-- Versão do Servidor: 10.1.24-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u941296279_porta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(125) DEFAULT NULL,
  `imgPerfil` varchar(30) NOT NULL,
  `Email` varchar(125) DEFAULT NULL,
  `Usuario` varchar(10) DEFAULT NULL,
  `Senha` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`id`, `Nome`, `imgPerfil`, `Email`, `Usuario`, `Senha`) VALUES
(1, 'Wilson', 'wilson.png', 'flavio.danilo022@gmail.com', 'Wilson', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2'),
(2, 'Flavio', '', 'flavio.danilo022@gmail.com', 'bagao', 'cce08bba3f2e3c029cd257104b06d4b075772d5f514cf1b7789506f9a69d53c51464881d2c18445ab290553b302f67a24b1c69e3e737a46215deaf43517e4960'),
(3, 'Luruas', 'default.png', 'flavio.danilo022@gmail.com', 'baguss', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2'),
(4, '', 'default.png', '', '', '19fa61d75522a4669b44e39c1d2e1726c530232130d407f89afee0964997f7a73e83be698b288febcf88e3e03c4f0757ea8964e59b63d93708b138cc42a66eb3'),
(5, 'Flavio', 'wilson.png', 'wilson@gmail.com', 'bunds', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2'),
(6, 'Danilo', 'default.png', 'flavio.danilo022@gmail.com', 'dm2', 'cce08bba3f2e3c029cd257104b06d4b075772d5f514cf1b7789506f9a69d53c51464881d2c18445ab290553b302f67a24b1c69e3e737a46215deaf43517e4960'),
(7, 'Silva', 'default.png', 'flavio.danilo022@gmail.com', 'd2', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2'),
(8, 'Wilson', 'default.png', 'wilson@gmail.com', 'Wilson Bor', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2'),
(9, 'Aline ', 'default.png', 'aline.ming@gmail.com', 'pinga', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2'),
(10, 'Flavio', 'default.png', 'flavio.danilo022@gmail.com', 'flavin022', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2'),
(11, 'danilo', 'default.png', 'fla', '', '19fa61d75522a4669b44e39c1d2e1726c530232130d407f89afee0964997f7a73e83be698b288febcf88e3e03c4f0757ea8964e59b63d93708b138cc42a66eb3'),
(12, 'danilo', 'default.png', 'flavio.danilo022@gmail.com', 'flavio', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_noticia` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_categoria`,`categoria_noticia`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria_noticia`) VALUES
(3, 'futebol'),
(4, 'geral'),
(5, 'Ecônomia'),
(6, 'Ciência');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_leitorcom` int(11) DEFAULT NULL,
  `id_noticiacom` int(11) DEFAULT NULL,
  `comentario` text,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_comentario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `leitor`
--

CREATE TABLE IF NOT EXISTS `leitor` (
  `id_leitor` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` int(50) NOT NULL,
  PRIMARY KEY (`id_leitor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `leitor`
--

INSERT INTO `leitor` (`id_leitor`, `nome`, `email`, `senha`) VALUES
(0, 'flavio', 'flavio.danilo022@gmail.com', 123456),
(1, 'danilo', 'gfgfgh', 123456);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(125) NOT NULL,
  `conteudo` text NOT NULL,
  `dataPub` date DEFAULT NULL,
  `autorPub` varchar(50) NOT NULL,
  `id_autor` int(11) DEFAULT NULL,
  `tags` text,
  `categoria` varchar(11) NOT NULL,
  `imagem` varchar(125) DEFAULT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `conteudo`, `dataPub`, `autorPub`, `id_autor`, `tags`, `categoria`, `imagem`, `status`) VALUES
(8, 'Brasil x Colômbia: pelo fim do monopólio nas transmissões do futebol', '<p><span>Quem zapeou na televis&atilde;o na noite desta quarta-feira (25) percebeu que o jogo amistoso entre Brasil e Col&ocirc;mbia foi transmitido por mais de uma dezena de canais da TV aberta e da TV fechada.</span></p>\r\n<p><span>Para al&eacute;m da solidariedade com a tragedica da chapecoense&nbsp;&mdash; e da excessiva explora&ccedil;&atilde;o do tema pelos meios de comunica&ccedil;&atilde;o &mdash;, a transmiss&atilde;o do jogo chamou a aten&ccedil;&atilde;o de quem est&aacute; acostumado com o monop&oacute;lio da Rede Globo na veicula&ccedil;&atilde;o dos jogos da sele&ccedil;&atilde;o, do Campeonato Brasileiro e das disputas regionais. A novidade na televis&atilde;o brasileira &eacute; uma excelente oportunidade de retomar uma pauta ofuscada no pa&iacute;s: a necessidade de democratizar as transmiss&otilde;es de futebol.</span></p>\r\n<p><span>Vale lembrar, entretanto, que a visibilidade ampliada da partida n&atilde;o foi resultado dessa preocupa&ccedil;&atilde;o, mas sim fruto da negocia&ccedil;&atilde;o conflituosa dos direitos de transmiss&atilde;o entre aGlobo&nbsp;e a CBF.</span></p>\r\n<p><span>Enquanto negociava com a Globo a exclusividade dos pr&oacute;ximos amistosos, a CBF<a class="internal-link" title="" href="http://www.cartacapital.com.br/revista/809/quem-tem-medo-da-cbf-3603.html" target="_blank">&nbsp;</a>pediu uma grande bolada &ndash; fala-se em R$ 2 milh&otilde;es &ndash; pela transmiss&atilde;o da partida contra a Col&ocirc;mbia, que n&atilde;o estava inclusa no contrato vigente. O Grupo Globo n&atilde;o aceitou pagar e a CBF ent&atilde;o abriu o jogo a todas as emissoras &mdash; antecipando um futuro &ldquo;leil&atilde;o&rdquo; que a confedera&ccedil;&atilde;o promete fazer para os pr&oacute;ximos amistosos, como forma de pressionar a emissora a pagar mais.</span></p>\r\n<p><span>Apesar das inten&ccedil;&otilde;es nada nobres, a transmiss&atilde;o ampliada nos lembra que o televisionamento desse esporte, um patrim&ocirc;nio da cultura nacional, pode ser diferente e democr&aacute;tico, e mostra o quanto perdemos com o monop&oacute;lio hoje em pr&aacute;tica.</span></p>\r\n<p><span><span><strong>Quem perde com o monop&oacute;lio das transmiss&otilde;es</strong></span></span></p>\r\n<p><span>A exclusividade nas transmiss&otilde;es do futebol no Brasil<a class="internal-link" title="" href="http://www.cartacapital.com.br/cultura/o-negocio-futebol" target="_self">&nbsp;</a>traz in&uacute;meros danos aos torcedores, jogadores e ao esporte como um todo. Em primeiro lugar, o dinheiro pago pela Globo pelo monop&oacute;lio na transmiss&atilde;o das partidas &eacute;, para a maioria dos clubes da elite do futebol nacional, a principal fonte de receita. E isso causa muitas distor&ccedil;&otilde;es.</span></p>\r\n<p><span>A concentra&ccedil;&atilde;o dos repasses financeiros aos clubes com maior torcida e audi&ecirc;ncia televisiva fortalece desproporcionalmente as agremia&ccedil;&otilde;es maiores e aprofunda a crise dos clubes menores, do futebol regional e do interior.</span></p>\r\n<p><span>Como no futebol de rua, a Rede Globo tamb&eacute;m atua como uma p&eacute;ssima &ldquo;dona da bola&rdquo;: decide o hor&aacute;rio das partidas a partir de sua grade de programa&ccedil;&atilde;o e quais jogos, clubes e regi&otilde;es do pa&iacute;s ter&atilde;o ou n&atilde;o visibilidade.</span></p>\r\n<p><span>Assim, boa parte do futebol nacional fica invis&iacute;vel pela decis&atilde;o de uma &uacute;nica empresa. A &ldquo;dona do bola&rdquo; &mdash; nesse caso, da transmiss&atilde;o &mdash; decidiu, no ano passado, por exemplo, passar jogos do campeonato carioca em quatro estados da regi&atilde;o nordeste. Os torcedores dos clubes locais foram impedidos de assistir ao campeonato de seus times.</span></p>', '2017-01-29', 'Wilson', 1, 'Brasil,Colombia,chapecoense,futebol', '3', 'brasilcolombia.png', 1),
(10, 'PIB brasileiro deve voltar a crescer no 1º trimestre, diz relatório da FGV', '<p>A economia brasileira deve voltar a crescer no primeiro trimestre de 2017, de acordo com relat&oacute;rio do Ibre&nbsp;(Instituto Brasileiro de Economia), da FGV (Funda&ccedil;&atilde;o Getulio Vargas). Segundo o documento, o PIB (Produto Interno Bruto) do pa&iacute;s deve registrar leve alta de 0,1% entre janeiro e mar&ccedil;o deste ano em rela&ccedil;&atilde;o ao quarto trimestre de 2016.</p>\r\n<p>Para 2017, a perspectiva tamb&eacute;m &eacute; de leve crescimento: 0,3% em rela&ccedil;&atilde;o ao PIB de 2016 &ndash;que ainda n&atilde;o foi divulgado.&nbsp;</p>\r\n<p>A retomada do crescimento no primeiro trimestre deve ser puxada pelo setor agropecu&aacute;rio, segundo o relat&oacute;rio. A contribui&ccedil;&atilde;o do setor dever&aacute; atingir 0,5 ponto percentual para o PIB do primeiro trimestre, o que &eacute; "bastante expressivo", na avalia&ccedil;&atilde;o da FGV.</p>\r\n<h3>Contas inativas do FGTS</h3>\r\n<p>A partir do segundo trimestre, o relat&oacute;rio aponta para um poss&iacute;vel aumento no consumo das fam&iacute;lias por causa da libera&ccedil;&atilde;o do saque a fundos inativos do FGTS&nbsp;(Fundo de Garantia do Tempo de Servi&ccedil;o).&nbsp;</p>\r\n<p>"Tendo em vista a estrutura de prefer&ecirc;ncias dos consumidores,&nbsp;&eacute; prov&aacute;vel que parte dos recursos [sacados do FGTS], que poderiam ser direcionados para quitar d&iacute;vidas, seja alocada&nbsp;para consumo corrente", diz o documento.</p>\r\n<p>Assim, o consumo das fam&iacute;lias em 2017 deve apresentar alta de 0,4% em 2017 na compara&ccedil;&atilde;o com 2016. Sem a inje&ccedil;&atilde;o do dinheiro sacado do FGTS na economia, o relat&oacute;rio prev&ecirc; que o consumo permane&ccedil;a est&aacute;vel no ano.</p>', '2017-01-29', 'Wilson', 1, 'PIB,FGTS,contas inativas', '5', 'grafico.png', 1),
(14, 'Os astronautas que forem para Marte podem ficar malucos', '<p>Parece que conhecer Marte pode n&atilde;o ser uma ideia t&atilde;o boa assim.<strong>&nbsp;A isola&ccedil;&atilde;o, a radia&ccedil;&atilde;o e outros perigos podem representar um grande risco para sa&uacute;de mental e f&iacute;sica de quem se aventurar na longa miss&atilde;o espacial,</strong>&nbsp;de acordo com um estudo feito pelas Academias Nacionais de Ci&ecirc;ncia, Engenharia e Medicina dos Estados Unidos.</p>\r\n<p>As academias revisaram a pesquisa da Nasa (Ag&ecirc;ncia Espacial Norte-Americana) sobre como ficar no espa&ccedil;o pode afetar a sa&uacute;de de uma pessoa. Seu &uacute;ltimo relat&oacute;rio, divulgado pela New Scientist, analisa oito estudos recentes sobre os perigos de longas miss&otilde;es explorat&oacute;rias, como a viagem ao planeta vermelho.</p>\r\n<p><cite>Duas das quest&otilde;es mais cr&iacute;ticas s&atilde;o a exposi&ccedil;&atilde;o &agrave; radia&ccedil;&atilde;o e os efeitos psicol&oacute;gicos do confinamento e isolamento</cite></p>\r\n<p><strong>Carol Scott-Conner, da Universidade de Iowa, chefe do comit&ecirc; que divulgou o relat&oacute;rio.</strong></p>\r\n<p>Os astronautas que viajam para lugares&nbsp;distante s&atilde;o obrigados a dividir um pequeno espa&ccedil;o com os companheiros de tripula&ccedil;&atilde;o, por anos. Pense que j&aacute; &eacute; dif&iacute;cil dividir o quarto com um irm&atilde;o, imagine uma nave com v&aacute;rios colegas de trabalho.</p>\r\n<p>Al&eacute;m disso, os astronautas ficam sem contato com amigos e familiares por longos per&iacute;odos. Para piorar, eles tamb&eacute;m estar&atilde;o trabalhando muito, com os padr&otilde;es de sono sendo alterados e sem comunica&ccedil;&atilde;o em tempo real com a Terra, o que afeta a sa&uacute;de mental e f&iacute;sica. &Eacute; um teste de paci&ecirc;ncia e autocontrole.</p>\r\n<p>O relat&oacute;rio apontou que &eacute; dif&iacute;cil prever e estudar como esses e outros desafios podem ser agravados se acontecerem ao mesmo tempo. "Parece que todos os riscos t&ecirc;m potencial de agir em conjunto", diz Scott-Conner.</p>\r\n<p>N&atilde;o deve ser f&aacute;cil n&atilde;o ficar maluco com tamanha crise de saudade, falta de privacidade, sono e cansa&ccedil;o em um planeta nunca habitado antes. Ser&aacute; uma miss&atilde;o quase imposs&iacute;vel.</p>\r\n<p>A Nasa promete usar estudos gen&eacute;ticos para entender as necessidades de cada astronauta e com isso conseguir adaptar as viagens espaciais atendendo os pedidos dos indiv&iacute;duos.&nbsp;</p>', '2017-01-29', 'Wilson', 1, '', '6', 'marte.png', 1),
(15, 'Noticia', '<p>saygsaygsagsaygsagygsyaygsaygsaygsagysyagsgasgayygsay</p>', '2017-05-07', 'Wilson', 1, 'dassa', '3', 'Photo(1074).png', 1),
(16, 'Doria o prefeito', '<p>sadasdiuasuhduashduhsudhausduashudh</p>', '2017-06-16', 'Wilson', 1, '', '3', 'img.png', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
