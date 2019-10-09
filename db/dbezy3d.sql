-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 09/10/2019 às 12:15
-- Versão do servidor: 5.7.27-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbezy3d`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `senha` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `admin`
--

INSERT INTO `admin` (`idadmin`, `nome`, `email`, `senha`) VALUES
(0, 'Gabriel', 'email@email.com', 'abc');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `senha` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `email`, `senha`) VALUES
(1, 'Raquel', 'raquel@email.com', 'abc'),
(2, 'Gabriel', 'gabriel@email.com', 'abc'),
(3, 'Patrick', 'patrick@email.com', 'abc');

-- --------------------------------------------------------

--
-- Estrutura para tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `apelido` varchar(40) NOT NULL,
  `pagina` varchar(40) NOT NULL,
  `pt` text,
  `en` text,
  `es` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `conteudo`
--

INSERT INTO `conteudo` (`apelido`, `pagina`, `pt`, `en`, `es`) VALUES
('aplicacao1', 'menu', 'Odontologia', 'Dentistry', 'Odontología'),
('aplicacao2', 'menu', 'Manufatura', 'Manufacturing', 'Manufactura'),
('aplicacao3', 'menu', 'Educação', 'Education', 'Educación'),
('aplicacao4', 'menu', 'Joalheria', 'Jewelry', 'Joyas'),
('btnproduto1', 'home', 'Saiba mais', 'Learn more', 'Sepa mas'),
('btnproduto2', 'home', 'Saiba mais', 'Learn more', 'Sepa mas'),
('btnproduto3', 'home', 'Saiba mais', 'Learn more', 'Sepa mas'),
('btnproduto4', 'home', 'Saiba mais', 'Learn more', 'Sepa mas'),
('btnslide1', 'home', 'Impressora 3D E1260T', 'E1260T 3D Printer', 'Impresora 3D E1260T'),
('btnslide2', 'home', 'Impressora 3D E1260T', 'E1260T 3D Printer', 'Impresora 3D E1260T'),
('btnslide3', 'home', 'Impressora 3D E1260T', 'E1260T 3D Printer', 'Impresora 3D E1260T'),
('btn_especificacao1', 'impressora3d_e1260t', 'Mais informações', 'More information', 'Mas informaciones'),
('button1', 'camara_de_cura_ezycure', 'Contato', 'Contato', 'Contato'),
('button1', 'contato', 'Enviar', 'Submit', 'Enviar'),
('button1', 'engenharia3d', 'Contato', 'Contact', 'Contato'),
('button1', 'home', 'Saiba mais', 'Learn more', 'Sepa mas'),
('button1', 'impressora3d_coree3', 'Contato', 'Contact', 'Contato'),
('button1', 'impressora3d_e1260t', 'Orçamento', 'Budget', 'Presupuesto'),
('button1', 'impressora3d_phylos', 'Contato', 'Contact', 'Contato'),
('button1', 'joalheria3d', 'Contato', 'Contact', 'Contato'),
('button1', 'odontologia3d', 'Contato', 'Contact', 'Contacto'),
('button2', 'home', 'Saiba mais', 'Learn more', 'Sepa mas'),
('button2', 'impressora3d_e1260t', 'Contato', 'Contact', 'Contacto'),
('button3', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('button3', 'impressora3d_e1260t', 'Contato', 'EN - Do something bold', 'ES - Do something bold'),
('card_p1', 'impressora3d_coree3', 'Uma ótima decoração para o seu quarto.', 'Great decor for your room.', 'Una gran decoración para su habitación.'),
('card_p2', 'impressora3d_coree3', 'Um vaso bonito e moderno para decoração ou colocar suas plantas.', 'A beautiful and modern vase for decorating or placing your plants.', 'Un vaso hermoso y moderno para la decoración o colocar sus plantas.'),
('card_p3', 'impressora3d_coree3', 'Um brinquedo para seu filho, ou também pode ser usado para decorar o ambiente.', 'A toy for your child, or can also be used to decorate the environment.', 'Un juguete para su hijo, o también se puede utilizar para decorar el ambiente.'),
('card_p4', 'impressora3d_coree3', 'A decoração perfeita para a sua cozinha.', 'The perfect decoration for your kitchen.', 'La decoración perfecta para su cocina.'),
('card_titulo1', 'impressora3d_coree3', 'Crânio', 'Skull', 'Cráneo'),
('card_titulo2', 'impressora3d_coree3', 'Vaso', 'Vase', 'Florero'),
('card_titulo3', 'impressora3d_coree3', 'Elefante', 'Elephant', 'Elefante'),
('card_titulo4', 'impressora3d_coree3', 'Abacaxi', 'Pineapple', 'Piña'),
('descproduto1', 'home', 'Core E3', 'Core E3', 'Core E3'),
('descproduto2', 'home', 'Core E3', 'Core E3', 'Core E3'),
('descproduto3', 'home', 'Core E3', 'Core E3', 'Core E3'),
('descproduto4', 'home', 'EzyCure', 'EzyCure', 'EzyCure'),
('flashprint', 'faq', 'FlashPrint', 'FlashPrint', 'FlashPrint'),
('idiomas', 'menu', 'Português', 'English', 'Español'),
('impressao', 'faq', 'Impressao', 'Impressao', 'Impressao'),
('input1', 'contato', 'Nome', 'Name', 'Nombre'),
('input2', 'contato', 'E-mail', 'Email', 'Email'),
('input3', 'contato', 'Assunto', 'Subject matter', 'Sujeto'),
('input4', 'contato', 'Sua mensagem', 'Your message', 'Su mensaje'),
('item1', 'faq', 'Por que a impressão está atravessada na base de impressão?', 'Por que a impressão está atravessada na base de impressão?', 'Por que a impressão está atravessada na base de impressão?'),
('item1', 'menu', 'Impressoras 3D', '3D Printers', 'Impresoras 3D'),
('item2', 'faq', 'Por que o arquivo que abri está circulado em vermelho?', 'Por que o arquivo que abri está circulado em vermelho?', 'Por que o arquivo que abri está circulado em vermelho?'),
('item2', 'menu', 'Acessórios', 'Accessories', 'Accesorios'),
('item3', 'faq', 'Minha impressora não aparece na rede!!!', 'Minha impressora não aparece na rede!!!', 'Minha impressora não aparece na rede!!!'),
('item3', 'menu', 'Aplicações', 'Applications', 'Aplicaciones'),
('item4', 'menu', 'Contato', 'Contact', 'Contacto'),
('item5', 'menu', 'FAQ', 'FAQ', 'FAQ'),
('loginmodal_cadastrar', 'menu', 'Criar conta', 'Criar conta', 'Criar conta'),
('modal_item1', 'impressora3d_e1260t', 'Software exclusivo, intuitivo e fácil de utilizar.', 'Exclusive, intuitive and easy to use software.', 'Software exclusivo, intuitivo y fácil de usar.'),
('modal_item10', 'impressora3d_e1260t', 'Calibradas individualmente para camadas (layers) de 50 Mícrons.', 'Calibrated individually for layers of 50 Microns.', 'Calibradas individualmente para capas (capas) de 50 Mícrones.'),
('modal_item11', 'impressora3d_e1260t', 'Baixo custo de manutenção.', 'Low maintenance cost.', 'Bajo costo de mantenimiento.'),
('modal_item12', 'impressora3d_e1260t', 'Assistência técnica e garantia no Brasil.', 'Technical assistance and warranty in Brazil.', 'Asistencia técnica y garantía en Brasil.'),
('modal_item2', 'impressora3d_e1260t', 'Resolução em XY: 47 Mícrons (uma das melhores do mercado).', 'Resolution in XY: 47 Microns (one of the best in the market).', 'Resolución en XY: 47 Mícrones (una de las mejores del mercado).'),
('modal_item3', 'impressora3d_e1260t', 'Resolução em Z: 16 a 200 Mícrons (com resinas <a href=\'https://www.makertechlabs.com.br/\'>Makertech Labs</a>).', 'Z-Resolution: 16 to 200 Microns (with resins <a href=\'https://www.makertechlabs.com.br/\'> Makertech Labs</a>).', 'Resolución en Z: 16 a 200 Mícrones (con resinas <a href=\'https/www.makertechlabs.com.br/\'> Makertech Labs</a>).'),
('modal_item4', 'impressora3d_e1260t', 'Tela LCD 5.5\': 124 x 70 x 196 mm.', '5.5 \'LCD screen: 124 x 70 x 196 mm.', 'Pantalla LCD 5.5 \': 124 x 70 x 196 mm.'),
('modal_item5', 'impressora3d_e1260t', 'Compacta e Robusta: 6,5kg, 20x20x40cm (CLA).', 'Compact and Robust: 6.5kg, 20x20x40cm (CLA).', 'Compacta y Robusta: 6,5kg, 20x20x40cm (CLA).'),
('modal_item6', 'impressora3d_e1260t', 'Ethernet, Wi-Fi e USB.', 'Ethernet, Wi-Fi and USB.', 'Ethernet, Wi-Fi y USB.'),
('modal_item7', 'impressora3d_e1260t', 'Resinas nacionais, com ampla gama de aplicações. (<a href=\'https://www.makertechlabs.com.br/\'>Makertech Labs</a>)', 'National resins, with a wide range of applications. (<a href=\'https://www.makertechlabs.com.br/\'> Makertech Labs</a>)', 'Resinas nacionales, con amplia gama de aplicaciones. (<a href=\'https://www.eurotechlabs.com.br/\'> Makertech Labs</a>)'),
('modal_item8', 'impressora3d_e1260t', 'Arquivos STL, SLC, SVG, ZIP (PNG Arquivos).', 'STL, SLC, SVG, ZIP Files (PNG Files).', 'Archivos STL, SLC, SVG, ZIP (PNG Archivos).'),
('modal_item9', 'impressora3d_e1260t', 'Precisão e rapidez: 35 mm/hora (layers de 100 Mícrons).', 'Accuracy and speed: 35 mm / hour (100 micron layers).', 'Precisión y rapidez: 35 mm / hora (capas de 100 Mícrones).'),
('modal_titulo1', 'impressora3d_e1260t', 'Ezy3D E1260T', 'Ezy3D E1260T', 'Ezy3D E1260T'),
('produto1', 'home', 'E1260T', 'E1260T', 'E1260T'),
('produto2', 'home', 'Phylos', 'Phylos', 'Phylos'),
('produto3', 'home', 'Core E3', 'Core E3', 'Core E3'),
('produto4', 'home', 'EzyCure', 'EzyCure', 'EzyCure'),
('rdp_comocomprar', 'rodape', 'Como comprar', 'How to buy', 'Como comprar'),
('rdp_contato', 'rodape', 'Contato', 'Contact', 'Contacto'),
('rdp_copy', 'rodape', ' | EZY3D Printing', ' | EZY3D Printing', ' | EZY3D Printing'),
('rdp_faq', 'rodape', 'FAQ', 'FAQ', 'FAQ'),
('rdp_item1', 'rodape', '+246 - 542 550 5462', '+246 - 542 550 5462', '+246 - 542 550 5462'),
('rdp_item2', 'rodape', 'info@pingendo.com', 'info@pingendo.com', 'info@pingendo.com'),
('rdp_item3', 'rodape', '365 Park Street, NY', '365 Park Street, NY', '365 Park Street, NY'),
('rdp_titulo1', 'rodape', 'EZY 3D', 'EZY 3D', 'EZY 3D'),
('rdp_titulo2', 'rodape', 'Site', 'Site', 'Sitio'),
('rdp_titulo3', 'rodape', 'Contato', 'Contact', 'Contacto'),
('rdp_txt1', 'rodape', 'Uma empresa para o que você pode precisar, da prototipagem do website à publicação', 'A company for whatever you may need, from website prototyping to publishing', 'Una empresa para lo que necesite, desde prototipos de sitios web hasta publicaciones.'),
('rede', 'faq', 'Rede', 'Rede', 'Rede'),
('slide1', 'home', 'SOLUÇÕES DA PROTOTIPAGEM ATÉ A PRODUÇÃO, EM RESINAS FOTOPOLIMERIZÁVEIS. Dispondo de uma gama de tecnologias comerciais em impressão 3D, a EZY 3D oferece uma combinação custo / beneficio perfeita de impressão 3D, materiais e experiência em aplicações. Empresa 100% brasileira.', 'SOLUTIONS FOR PROTOTYPING TO PRODUCTION, IN PHOTOPOLYMERS RESINS. With a range of commercial 3D printing technologies, EZY 3D offers a perfect cost / benefit combination of 3D printing, materials and application experience.100% Brazilian company.', 'SOLUCIONES PARA PROTETIPAGE A LA PRODUCCIÓN, EN RESINAS DE FOTOPOLÍMEROS. Con una gama de tecnologías comerciales en impresión 3D, EZY 3D ofrece una combinación perfecta de costo / beneficio de impresión 3D, materiales y experiencia en aplicaciones. Empresa 100% brasileña.'),
('slide2', 'home', 'SOLUÇÕES DA PROTOTIPAGEM ATÉ A PRODUÇÃO, EM RESINAS FOTOPOLIMERIZÁVEIS. Dispondo de uma gama de tecnologias comerciais em impressão 3D, a EZY 3D oferece uma combinação custo / beneficio perfeita de impressão 3D, materiais e experiência em aplicações. Empresa 100% brasileira.', 'SOLUTIONS FOR PROTOTYPING TO PRODUCTION, IN PHOTOPOLYMERS RESINS. With a range of commercial 3D printing technologies, EZY 3D offers a perfect cost / benefit combination of 3D printing, materials and application experience.100% Brazilian company.', 'SOLUCIONES PARA PROTETIPAGE A LA PRODUCCIÓN, EN RESINAS DE FOTOPOLÍMEROS. Con una gama de tecnologías comerciales en impresión 3D, EZY 3D ofrece una combinación perfecta de costo / beneficio de impresión 3D, materiales y experiencia en aplicaciones. Empresa 100% brasileña.'),
('slide3', 'home', 'SOLUÇÕES DA PROTOTIPAGEM ATÉ A PRODUÇÃO, EM RESINAS FOTOPOLIMERIZÁVEIS. Dispondo de uma gama de tecnologias comerciais em impressão 3D, a EZY 3D oferece uma combinação custo / beneficio perfeita de impressão 3D, materiais e experiência em aplicações. Empresa 100% brasileira.', 'SOLUTIONS FOR PROTOTYPING TO PRODUCTION, IN PHOTOPOLYMERS RESINS. With a range of commercial 3D printing technologies, EZY 3D offers a perfect cost / benefit combination of 3D printing, materials and application experience.100% Brazilian company.', 'SOLUCIONES PARA PROTETIPAGE A LA PRODUCCIÓN, EN RESINAS DE FOTOPOLÍMEROS. Con una gama de tecnologías comerciales en impresión 3D, EZY 3D ofrece una combinación perfecta de costo / beneficio de impresión 3D, materiales y experiencia en aplicaciones. Empresa 100% brasileña.'),
('titulo1', 'camara_de_cura_ezycure', 'Câmara pós-cura', 'Post-cure camera', 'Cámara post-cura'),
('titulo1', 'contato', 'Contate-nos!', 'Contact us!', 'Fotos!'),
('titulo1', 'engenharia3d', 'Engenharia', 'Engineering', 'Ingeniería'),
('titulo1', 'home', 'Odontologia', 'Dentistry', 'Odontología'),
('titulo1', 'impressora3d_coree3', 'Impressora 3D FDM', 'FDM 3D Printer', 'Impresora 3D FDM'),
('titulo1', 'impressora3d_e1260t', '<span style=\'font-weight: bolder\'>Impressora 3D Desktop</span>', '<span style=\'font-weight: bolder\'>3D Desktop Printer</span>', '<span style=\'font-weight: bolder\'>Impresora 3D de escritorio</span>'),
('titulo1', 'impressora3d_phylos', 'Vem ai a Phylos', 'Come to Phylos', 'Viene a Phylos'),
('titulo1', 'joalheria3d', 'Joalheria', 'Jewelry', 'Joyas'),
('titulo1', 'odontologia3d', 'Odontologia', 'Dentistry', 'Odontología'),
('titulo1_educacao', 'impressora3d_e1260t', 'Educação', 'Education', 'Educación'),
('titulo1_joalheria', 'impressora3d_e1260t', 'Joalheria', 'Jewelry', 'Joyas'),
('titulo1_manufatura', 'impressora3d_e1260t', 'Manufatura', 'Manufacturing', 'Manufactura'),
('titulo1_odontologia', 'impressora3d_e1260t', 'Odontologia', 'Dentistry', 'Odontología'),
('titulo2', 'camara_de_cura_ezycure', 'EzyCure', 'EzyCure', 'EzyCure'),
('titulo2', 'engenharia3d', 'Estudo de novos conceitos', 'Study of new concepts', 'Estudio de nuevos conceptos'),
('titulo2', 'home', 'Joalheria', 'Jewelry', 'Joyas'),
('titulo2', 'impressora3d_coree3', 'Core E3', 'Core E3', 'Core E3'),
('titulo2', 'impressora3d_e1260t', 'E1260T', 'O my friend', 'O my friend'),
('titulo2', 'impressora3d_phylos', 'Phylos', 'Phylos', 'Phylos'),
('titulo2', 'joalheria3d', 'Melhore seu área de trabalho', 'Enhance your desktop', 'Mejore su área de trabajo'),
('titulo2', 'odontologia3d', 'Crescimento Escalável ', 'Scalable Growth', 'Crecimiento escalable'),
('titulo2_1', 'camara_de_cura_ezycure', 'PT - The trickling stream', 'EN - The trickling stream', 'ES - The trickling stream'),
('titulo2_1', 'joalheria3d', 'Torne mais dinâmica a forma de trabalhar assim melhorando a sua experiência.', 'Make your work more dynamic by improving your experience.', 'Haga más dinámica la forma de trabajar así mejorando su experiencia.'),
('titulo2_2', 'joalheria3d', 'PT - Two', 'EN - Two', 'ES - Two'),
('titulo2_3', 'joalheria3d', 'PT - Three', 'EN - Three', 'ES - Three'),
('titulo2_4', 'joalheria3d', 'PT - Four', 'EN - Four', 'ES - Four'),
('titulo2_5', 'joalheria3d', 'PT - Five', 'EN - Five', 'ES - Five'),
('titulo2_6', 'joalheria3d', 'PT - Six', 'EN - Six', 'ES - Six'),
('titulo3', 'camara_de_cura_ezycure', 'Informações técnicas', 'Technical information', 'Informaciones técnicas'),
('titulo3', 'engenharia3d', 'Da impressora para o acabamento final', 'From printer to final finish', 'De la impresora para el acabado final'),
('titulo3', 'home', 'Impressoras 3D', '3D Printers', 'Impresoras 3D'),
('titulo3', 'impressora3d_coree3', 'Algumas impressões', 'Some impressions', 'Algunas impresiones'),
('titulo3', 'impressora3d_e1260t', 'Impressões', 'Impressions', 'Impresiones'),
('titulo3', 'impressora3d_phylos', 'PT - I enjoy with my whole heart', 'EN - I enjoy with my whole heart', 'ES - I enjoy with my whole heart'),
('titulo3', 'joalheria3d', 'De sua imaginação, para a realidade de forma simples', 'From your imagination, to reality in a simple way', 'De su imaginación, a la realidad de forma sencilla'),
('titulo3', 'odontologia3d', 'Uma impressão, várias impressões', 'One print, various prints', 'Una impresión, varias impresiones'),
('titulo3_1', 'camara_de_cura_ezycure', 'Operação', 'Operation', 'Operación'),
('titulo3_1', 'engenharia3d', '#1', '#1', '#1'),
('titulo3_2', 'camara_de_cura_ezycure', 'Área útil', 'Useful area', 'Area util'),
('titulo3_2', 'engenharia3d', '#2', '#2', '#2'),
('titulo3_3', 'camara_de_cura_ezycure', 'Potência nominal', 'Rated power', 'Potencia nominal'),
('titulo3_3', 'engenharia3d', '#3', '#3', '#3'),
('titulo3_4', 'camara_de_cura_ezycure', 'Dimensões externas', 'External Dimensions', 'Dimensiones externas'),
('titulo4', 'camara_de_cura_ezycure', 'PT - Countless indescribable forms', 'EN - Countless indescribable forms', 'ES - Countless indescribable forms'),
('titulo4', 'engenharia3d', 'Peça finalizada', 'Peça finalizada', 'Peça finalizada'),
('titulo4', 'home', 'Acessórios', 'Acessórios', 'Acessórios'),
('titulo4', 'impressora3d_coree3', 'Informações técnicas', 'Technical information', 'Informaciones técnicas'),
('titulo4', 'impressora3d_e1260t', 'Informações técnicas', 'Technical information', 'Informaciones técnicas'),
('titulo4', 'impressora3d_phylos', 'Especificações', 'Specifications', 'Especificaciones'),
('titulo4', 'joalheria3d', 'Para mais informações entre em contato', 'For more information please contact us', 'For more information please contact us'),
('titulo4', 'odontologia3d', 'Complexidade nas impressões', 'Impression Complexity', 'Complejidad en las impresiones'),
('titulo4_1', 'impressora3d_coree3', 'Bonita e robusta', 'Beautiful and robust', 'Bonita y robusta'),
('titulo4_1', 'impressora3d_phylos', 'Operação', 'Operation', 'Operación'),
('titulo4_2', 'impressora3d_coree3', 'Facilidade', 'Facility', 'Facilidad'),
('titulo4_2', 'impressora3d_phylos', 'Conectividade', 'Connectivity', 'Conectividad'),
('titulo4_3', 'impressora3d_coree3', 'Segurança', 'Safety', 'Seguridad'),
('titulo4_3', 'impressora3d_phylos', 'Resolução', 'Resolution', 'Resolución'),
('titulo4_4', 'impressora3d_coree3', 'Melhor nivelamento', 'Better leveling', 'Mejor nivelación'),
('titulo4_4', 'impressora3d_phylos', 'Velocidade da impressão', 'Print Speed', 'Velocidad de impresión'),
('titulo4_5', 'impressora3d_coree3', 'Área de impressão', 'Print area', 'Área de impresión'),
('titulo4_5', 'impressora3d_phylos', 'Área útil', 'Useful area', 'Area util'),
('titulo4_6', 'impressora3d_coree3', 'Dimensões externas', 'External Dimensions', 'Dimensiones externas'),
('titulo4_6', 'impressora3d_phylos', 'Precisão do eixo Z', 'Z axis accuracy', 'Precisión del eje Z'),
('titulo5', 'camara_de_cura_ezycure', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('titulo5', 'engenharia3d', 'Guarda apetrechos', 'Wardrobe accessories', 'Guardería pernos'),
('titulo5', 'home', 'Areas de atuação', 'Areas of expertise', 'Áreas de actuación'),
('titulo5', 'impressora3d_coree3', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('titulo5', 'impressora3d_e1260t', 'Para  mais informações entre em contato.', 'EN - Do not procrastinate. Act', 'ES - Do not procrastinate. Act'),
('titulo5', 'impressora3d_phylos', 'Para mais informações entre em contato', 'Para mais informações entre em contato', 'Para mais informações entre em contato'),
('titulo5', 'odontologia3d', 'Uma impressão várias possibilidades.', 'One impression several possibilities.', 'Una impresión varias posibilidades.'),
('titulo5_1', 'engenharia3d', '#1', '#1', '#1'),
('titulo5_2', 'engenharia3d', '#2', '2', '#2'),
('titulo6', 'engenharia3d', 'Para mais informações entre em contato', 'For more information please contact us', 'For more information please contact us'),
('titulo6', 'odontologia3d', 'Para mais informações entre em contato', 'For more information please contact us', 'Para obtener más información, póngase en contacto con nosotros'),
('titulo_especificacao1', 'impressora3d_e1260t', '<b>Resolução de 47 Mícrons •</b>', '<b>47 Micron Resolution • </b>', '<b>Resolución de 47 Mícrones •</b>'),
('titulo_especificacao2', 'impressora3d_e1260t', '<b>Área de impressão •</b>', '<b>Printing area •</b>', '<b>Área de impresión •</b>'),
('titulo_especificacao3', 'impressora3d_e1260t', '<b>Autonomia •</b>', '<b>Autonomy •</b>', '<b>Autonomía •</b>'),
('titulo_especificacao4', 'impressora3d_e1260t', '<b>• Precisão dimensional</b>', '<b>• Dimensional accuracy</b>', '<b>• Precisión dimensional</b>'),
('titulo_especificacao5', 'impressora3d_e1260t', '<b>• Resolução de camada</b>', '<b>• Layer resolution</b>', '<b>• Resolución de capa</b>'),
('titulo_especificacao6', 'impressora3d_e1260t', '<b>• Comodidade</b>', '<b>• Convenience</b>', '<b>• Comodidad</b>'),
('titulo_slide1', 'home', 'IMPRESSORAS EZY 3D', 'EZY 3D PRINTERS', 'IMPRESORAS  EZY 3D'),
('titulo_slide2', 'home', 'IMPRESSORAS EZY 3D', 'EZY 3D PRINTERS', 'IMPRESORAS  EZY 3D'),
('titulo_slide3', 'home', 'IMPRESSORAS EZY 3D', 'EZY 3D PRINTERS', 'IMPRESORAS  EZY 3D'),
('txt1', 'camara_de_cura_ezycure', 'PT - Lead paragraph. A wonderful serenity has taken possession of my entire soul.', 'EN - Lead paragraph. A wonderful serenity has taken possession of my entire soul.', 'ES - Lead paragraph. A wonderful serenity has taken possession of my entire soul.'),
('txt1', 'contato', 'Se você gostaria de saber mais sobre nossos produtos ou tem alguma dúvida nos contate e logo responderemos.', 'If you would like to know more about our products or have any questions contact us and we will respond soon.', 'Si usted desea saber más sobre nuestros productos o tiene alguna duda nos contacte y luego responderemos.'),
('txt1', 'engenharia3d', 'Com uma impressora incorporado ao meio do fluxo de trabalho de um engenheiro, lhe dá poder e agilidade, pois é possível o rápido desenvolvimento de um protótipo para testes, o que demandava muito tempo mesmo sendo um protótipo.', 'Con una impresora incorporada al medio del flujo de trabajo de un ingeniero, le da poder y agilidad, pues es posible el rápido desarrollo de un prototipo para pruebas, lo que demandaba mucho tiempo incluso siendo un prototipo.', 'With a printer embedded in the middle of an engineer\'s workflow, it gives you power and agility, as it is possible to quickly develop a prototype for testing, which required a lot of time even being a prototype.'),
('txt1', 'home', 'A indústria odontológica vem passando por uma revolução digital...', 'The dental industry has been undergoing a digital revolution ...', 'La industria odontológica viene pasando por una revolución digital ...'),
('txt1', 'impressora3d_coree3', 'Conheça nossa impressora de filamento, Core E3!', 'Meet our filament printer, Core E3!', '¡Conozca nuestra impresora de filamento, Core E3!'),
('txt1', 'impressora3d_e1260t', '<b style=\'font-size:30px\'>MSLA DLP LCD UV</b><br>Leve | Profissional | Precisa | Wi-Fi', '<b style=\'font-size: 30px\'>MSLA DLP LCD UV</b><br>Lightweight | Professional | Precise | Wi-Fi', '<b style=\'font-size: 30px\'>MSLA DLP LCD UV </b><br>Leve | Profesional | Precisa | Wi-Fi'),
('txt1', 'impressora3d_phylos', 'Nossa mais nova impressora 3D está em fase de testes, logo estará disponível para comercialização, se é do seu desejo ser avisado quando estiver pronta para venda, insira seu e-mail abaixo e clique em \'Ok\'.', 'Our newest 3D printer is in the test phase, it will soon be available for commercialization, if it is your wish to be advised when it is ready for sale, enter your email below and click \'Ok\'.', 'Nuestra nueva impresora 3D está en fase de pruebas, pronto estará disponible para su comercialización, si es de su deseo de ser avisado cuando esté lista para la venta, introduzca su e-mail a continuación y haga clic en \'Ok\'.'),
('txt1', 'joalheria3d', 'Crie moldes em questão de algumas horas, reduzindo tempo e gastos. O processo de impressão tornou rápido e preciso tarefas que antes demandavam muito tempo e dinheiro.', 'Create molds in a matter of a few hours, reducing time and expense. The printing process made fast and precise tasks that once required a lot of time and money.', 'Cree moldes en cuestión de algunas horas, reduciendo el tiempo y los gastos. El proceso de impresión hizo rápido y preciso tareas que antes demandaban mucho tiempo y dinero.'),
('txt1', 'odontologia3d', 'A indústria odontológica vem passando por uma revolução digital, e a EZY 3D está vindo justamente para suprir essas necessidades. As soluções oferecidas por nós são acessíveis e marcantes deixam de forma fácil o início na impressão. ', 'The dental industry is undergoing a digital revolution, and EZY 3D is coming to meet those needs. The solutions offered by us are affordable and outstanding make it easy to start printing.', 'La industria dental está experimentando una revolución digital, y EZY 3D está llegando a satisfacer esas necesidades. Las soluciones que ofrecemos son asequibles y excepcionales y facilitan el inicio de la impresión.'),
('txt1_1', 'contato', '(11) 95245-3334 - (15) 4101-0014', '(11) 95245-3334 - (15) 4101-0014', '(11) 95245-3334 - (15) 4101-0014'),
('txt1_1', 'faq', 'Quando usamos o FlahsPrint para posicionar nossas peças que serão impressas, devemos primeiramente colocar todas em seus respectivos locais de impressão, após feito isso selecionamos todas os arquivos que estão para serem impressos, clicamos em “ROTATE”, na parte do “Z” clique em +90.', 'Quando usamos o FlahsPrint para posicionar nossas peças que serão impressas, devemos primeiramente colocar todas em seus respectivos locais de impressão, após feito isso selecionamos todas os arquivos que estão para serem impressos, clicamos em “ROTATE”, na parte do “Z” clique em +90.', 'Quando usamos o FlahsPrint para posicionar nossas peças que serão impressas, devemos primeiramente colocar todas em seus respectivos locais de impressão, após feito isso selecionamos todas os arquivos que estão para serem impressos, clicamos em “ROTATE”, na parte do “Z” clique em +90.'),
('txt1_1', 'joalheria3d', 'Aproveite a praticidade que nossas impressoras oferecem para criação de produtos personalizados e agradáveis.', 'Take advantage of the convenience our printers offer to create personalized and enjoyable products.', 'Aproveche la practicidad que nuestras impresoras ofrecen para crear productos personalizados y agradables.'),
('txt1_2', 'contato', 'contato@ezy3d.com.br', 'contato@ezy3d.com.br', 'contato@ezy3d.com.br'),
('txt1_2', 'faq', 'Aparentemente a impressão ficará para fora da base, mas quando subir o arquivo na impressora, ele estará centralizado.', 'Aparentemente a impressão ficará para fora da base, mas quando subir o arquivo na impressora, ele estará centralizado.', 'Aparentemente a impressão ficará para fora da base, mas quando subir o arquivo na impressora, ele estará centralizado.'),
('txt1_3', 'contato', 'R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010', 'R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010', 'R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010'),
('txt1_4', 'contato', 'Horário de atendimento: Segunda a Sexta das 08h15 às 17h45', 'Office hours: Monday to Friday from 08:15 to 17:45', 'Horario de atención: Lunes a Viernes de 08h15 a 17h45'),
('txt1_educacao', 'impressora3d_e1260t', 'Educação que transforma! Aplicada à educação a impressão 3D vem ganhando o mundo e revolucionando o aprendizado possibilitando a transformação de ideias para o mundo real.', 'Education that transforms! Applied to education 3D printing has been gaining the world and revolutionizing learning, enabling the transformation of ideas into the real world.', '¡Educación que transforma! Aplicada a la educación la impresión 3D viene ganando el mundo y revolucionando el aprendizaje posibilitando la transformación de ideas para el mundo real.'),
('txt1_joalheria', 'impressora3d_e1260t', 'Detalhes minuciosos e delicadeza fazem parte do cotidiano das nossas impressões para joias finas com acabamento de superfície invejável.', 'Fine details and delicacy are part of the everyday of our prints for fine jewelry with an enviable surface finish.', 'Detalles minuciosos y delicadeza forman parte del cotidiano de nuestras impresiones para joyas finas con acabado de superficie envidiable.'),
('txt1_manufatura', 'impressora3d_e1260t', 'Na vanguarda da indústria 4.0. a impressão 3D possibilita produzir protótipos e produtos acabados, com velocidade, qualidade e precisão.', 'At the forefront of industry 4.0. 3D printing makes it possible to produce finished prototypes and products with speed, quality and accuracy.', 'En la vanguardia de la industria 4.0. la impresión 3D permite producir prototipos y productos acabados, con velocidad, calidad y precisión.'),
('txt1_odontologia', 'impressora3d_e1260t', 'Precisão, alta definição e resolução de camada a partir de 16 Mícrons, permite impressões lisas e extremamente fiés aos modelos digitais, ideal para a utilização na Odontologia.', 'Accuracy, high definition and layer resolution from 16 microns, allows smooth and extremely fine prints to digital models, ideal for use in dentistry.', 'Precisión, alta definición y resolución de capa a partir de 16 Mícrones, permite impresiones lisas y extremadamente fieles a los modelos digitales, ideal para la utilización en la Odontología.'),
('txt2', 'camara_de_cura_ezycure', 'PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies', 'EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies', 'ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies'),
('txt2', 'engenharia3d', 'Explore conceitos iniciais feitos a partir de modelagem 3D e eleve-os para outros níveis através de testes e adaptações. ', 'Explore initial concepts made from 3D modeling and elevate them to other levels through testing and adaptations.', 'Explore conceptos iniciales hechos de modelado 3D y los eleve a otros niveles a través de pruebas y adaptaciones.'),
('txt2', 'home', 'De sua imaginação, para a realidade de forma simples!', 'From your imagination, to reality in a simple way!', 'De su imaginación, a la realidad de forma sencilla!'),
('txt2', 'impressora3d_coree3', 'Transforme seus projetos em realidade, com um custo beneficio incrível, a Core E3 é perfeita para dar vida aos seus pensamentos, tendo insumos de alta qualidade e baixo custo.', 'Turn your projects into reality, with an incredible cost benefit, Core E3 is perfect to give life to your thoughts, having high quality and low cost inputs.', 'Transforme sus proyectos en realidad, con un costo beneficio increíble, la Core E3 es perfecta para dar vida a sus pensamientos, teniendo insumos de alta calidad y bajo costo.'),
('txt2', 'impressora3d_e1260t', 'A impressora EZY3D E1260T vem para completar a gama de equipamentos que fazem parte da tecnologia CAD/CAM de alta qualidade e precisão. ', 'The EZY3D E1260T printer comes to complete the range of equipment that is part of the high quality and precision CAD / CAM technology.', 'La impresora EZY3D E1260T viene para completar la gama de equipos que forman parte de la tecnología CAD / CAM de alta calidad y precisión.'),
('txt2', 'impressora3d_phylos', 'Escale a prototipagem e a produção à medida com a Phylos, a mais nova impressora 3D da EZY3D, uma máquina acessível e de qualidade industrial exuberante.', 'School prototyping and tailor-made production with Phylos, a new 3D printer from the EZY3D, an affordable and industrial-grade lush machine.', 'Elegir el prototipado y la producción a medida con Phylos, una nueva impresora 3D de EZY3D, una máquina asequible y de calidad industrial exuberante.'),
('txt2', 'odontologia3d', 'Com nossas impressoras E1260T, Phylos e Core E3 conheça a oportunidade de um crescimento exponencial e simples em sua produção odontológica. De forma versátil aumente sua produção, com a adição de nossas impressoras juntamente a nossa câmara de cura, simples assim. Isso permite uma consolidação, escalabilidade e consistência aos seus meios de produção. ', 'With our E1260T, Phylos and Core E3 printers you know the opportunity for exponential and simple growth in your dental production. In a versatile way increase your production, with the addition of our printers together with our cure chamber, simple as well. This allows for consolidation, scalability, and consistency of your means of production.', 'Con nuestras impresoras E1260T, Phylos y Core E3 conozca la oportunidad de un crecimiento exponencial y simple en su producción odontológica. De forma versátil aumente su producción, con la adición de nuestras impresoras junto a nuestra cámara de curación, simple así. Esto permite una consolidación, escalabilidad y consistencia a sus medios de producción.'),
('txt2_1', 'faq', 'Isso ocorre pelo fato de haver algum problema em alguma parte da malha do arquivo. Quando isso ocorre, é recomendado que antes de se trabalhar o arquivo ele seja passado em algum software que faça a correção desses erros de malha (recomendamos o NETFABB da Autodesk).', 'Isso ocorre pelo fato de haver algum problema em alguma parte da malha do arquivo. Quando isso ocorre, é recomendado que antes de se trabalhar o arquivo ele seja passado em algum software que faça a correção desses erros de malha (recomendamos o NETFABB da Autodesk).', 'Isso ocorre pelo fato de haver algum problema em alguma parte da malha do arquivo. Quando isso ocorre, é recomendado que antes de se trabalhar o arquivo ele seja passado em algum software que faça a correção desses erros de malha (recomendamos o NETFABB da Autodesk).'),
('txt2_1', 'impressora3d_e1260t', 'Utiliza resinas fotocuráveis e permite obter resolução e precisão incríveis.', 'It uses photocurable resins and allows for incredible resolution and accuracy.', 'Utiliza resinas fotocuras y permite obtener una resolución y precisión increíbles.'),
('txt2_1', 'impressora3d_phylos', '', '', ''),
('txt2_2', 'impressora3d_e1260t', 'Atendendo com perfeição impressões 3D de hobistas e profissionais.', 'Attending to perfection 3D prints of hobbyists and professionals.', 'Atendiendo con perfección impresiones 3D de aficionados y profesionales.'),
('txt3', 'engenharia3d', 'Com o produto finalizado é fácil dar os toques finais e a customização desejada.', 'With the finished product it is easy to give the finishing touches and the desired customization.', 'Con el producto finalizado es fácil dar los toques finales y la personalización deseada.'),
('txt3', 'impressora3d_coree3', 'Confira algumas impressões feitas pela nossa máquina.', 'Check out some impressions made by our machine.', 'Compruebe algunas impresiones hechas por nuestra máquina.'),
('txt3', 'impressora3d_e1260t', 'Impressões realizadas pela E1260T.', 'Impressões realizadas pela E1260T.', 'Impressões realizadas pela E1260T.'),
('txt3', 'impressora3d_phylos', 'PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.', 'EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.', 'ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.'),
('txt3', 'joalheria3d', 'Uso de softwares de modelagem 3D para criação e adaptação de moldes de jóias que vieram de sua criatividade, converta-os para o formato de correto e imprima-o.', 'Use 3D modeling software to create and adapt jewelry molds that came from your creativity, convert them to the correct format and print it.', 'Uso de software de modelado 3D para la creación y adaptación de moldes de joyas que vinieron de su creatividad, convierten al formato correcto e imprima.'),
('txt3', 'odontologia3d', 'Com apenas um arquivo de impressão consiga fazer vários moldes odontológicos, basta ajustar o tamanho adequado para a plataforma da impressora.', 'With only one print file able to make multiple dental templates, simply adjust the size appropriate for the printer platform.', 'Con sólo un archivo de impresión puede hacer varios moldes dentales, basta con ajustar el tamaño adecuado para la plataforma de la impresora.'),
('txt3_1', 'camara_de_cura_ezycure', 'Touch Screen', 'Touch Screen', 'Touch Screen'),
('txt3_1', 'faq', 'Seguiremos alguns passos para achar sua impressora na rede:', 'Seguiremos alguns passos para achar sua impressora na rede:', 'PrimeroSeguiremos alguns passos para achar sua impressora na rede:'),
('txt3_10', 'faq', 'Clique no canto superior direito em DASHBOARD.', 'Clique no canto superior direito em DASHBOARD.', 'Clique no canto superior direito em DASHBOARD.'),
('txt3_11', 'faq', 'Caso sua impressora não apareça, segure a tecla SHIFT do teclado e clique na opção de atualizar a página.', 'Caso sua impressora não apareça, segure a tecla SHIFT do teclado e clique na opção de atualizar a página.', 'Caso sua impressora não apareça, segure a tecla SHIFT do teclado e clique na opção de atualizar a página.'),
('txt3_12', 'faq', 'Após a impressora aparecer, clique duas vezes na impressora desejada e ela abrirá a interface da impressora.', 'Após a impressora aparecer, clique duas vezes na impressora desejada e ela abrirá a interface da impressora.', 'Após a impressora aparecer, clique duas vezes na impressora desejada e ela abrirá a interface da impressora.'),
('txt3_13', 'faq', 'Metodo 3:', 'Metodo 3:', 'Metodo 3:'),
('txt3_14', 'faq', 'Entre no site https://advanced-ip-scanner.br.softonic.com.', 'Entre no site https://advanced-ip-scanner.br.softonic.com.', 'Entre no site https://advanced-ip-scanner.br.softonic.com.'),
('txt3_15', 'faq', 'Clique no botão referente aos downloads.', 'Clique no botão referente aos downloads.', 'Clique no botão referente aos downloads.'),
('txt3_16', 'faq', 'Após fazer o download, instale e abra o programa.', 'Após fazer o download, instale e abra o programa.', 'Após fazer o download, instale e abra o programa.'),
('txt3_17', 'faq', 'No canto superior esquerdo existe uma opção semelhante a um botão de PLAY, clique nele e ele irá escanear sua rede.', 'No canto superior esquerdo existe uma opção semelhante a um botão de PLAY, clique nele e ele irá escanear sua rede.', 'No canto superior esquerdo existe uma opção semelhante a um botão de PLAY, clique nele e ele irá escanear sua rede.'),
('txt3_18', 'faq', 'A impressora irá aparecer com o nome de RASPBERRY PI FUNDATION.', 'A impressora irá aparecer com o nome de RASPBERRY PI FUNDATION.', 'A impressora irá aparecer com o nome de RASPBERRY PI FUNDATION.'),
('txt3_19', 'faq', 'De dois cliques e abrirá uma aba suspensa, de dois cliques novamente e irá abrir a interface da impressora.', 'De dois cliques e abrirá uma aba suspensa, de dois cliques novamente e irá abrir a interface da impressora.', 'De dois cliques e abrirá uma aba suspensa, de dois cliques novamente e irá abrir a interface da impressora.'),
('txt3_2', 'camara_de_cura_ezycure', '250 x 200 mm', '250 x 200 mm', '250 x 200 mm'),
('txt3_2', 'faq', 'Primeiramente verifique se sua impressora de fato está com o cabo ligado direto no roteador e se a luz correspondente a porta que a impressora está ligada, está acesa assim indicando que há algo conectado na porta referida.', 'Primeiramente verifique se sua impressora de fato está com o cabo ligado direto no roteador e se a luz correspondente a porta que a impressora está ligada, está acesa assim indicando que há algo conectado na porta referida.', 'Primeiramente verifique se sua impressora de fato está com o cabo ligado direto no roteador e se a luz correspondente a porta que a impressora está ligada, está acesa assim indicando que há algo conectado na porta referida.'),
('txt3_3', 'camara_de_cura_ezycure', '144W', '144W', '144W'),
('txt3_3', 'faq', 'Caso use notebook, verifique se a rede WIFI da qual o notebook está conectado é a mesma rede na qual a impressora está ligada.', 'Caso use notebook, verifique se a rede WIFI da qual o notebook está conectado é a mesma rede na qual a impressora está ligada.', 'Caso use notebook, verifique se a rede WIFI da qual o notebook está conectado é a mesma rede na qual a impressora está ligada.'),
('txt3_4', 'camara_de_cura_ezycure', '270 x 270 x 340 mm', '270 x 270 x 340 mm', '270 x 270 x 340 mm'),
('txt3_4', 'faq', 'Metodo 1:', 'Metodo 1:', 'Metodo 1:'),
('txt3_5', 'faq', 'No menu INICIAR clique na opção MEU COMPUTADOR.', 'No menu INICIAR clique na opção MEU COMPUTADOR.', 'No menu INICIAR clique na opção MEU COMPUTADOR.'),
('txt3_6', 'faq', 'Em seguida clique em REDE, se houver uma mensagem em uma tarja amarela dizendo que o computador não pode ser visto na rede por estar oculto, clique nessa tarja e depois em DESCOBRIR COMPUTADOR.', 'Em seguida clique em REDE, se houver uma mensagem em uma tarja amarela dizendo que o computador não pode ser visto na rede por estar oculto, clique nessa tarja e depois em DESCOBRIR COMPUTADOR.', 'Em seguida clique em REDE, se houver uma mensagem em uma tarja amarela dizendo que o computador não pode ser visto na rede por estar oculto, clique nessa tarja e depois em DESCOBRIR COMPUTADOR.'),
('txt3_7', 'faq', 'Atualize a página e sua impressora aparecerá com o nome de KLD-XXXXXX, de dois cliques e ela irá abrir a interface da impressora.', 'Atualize a página e sua impressora aparecerá com o nome de KLD-XXXXXX, de dois cliques e ela irá abrir a interface da impressora.', 'Atualize a página e sua impressora aparecerá com o nome de KLD-XXXXXX, de dois cliques e ela irá abrir a interface da impressora.'),
('txt3_8', 'faq', 'Metodo 2:', 'Metodo 2:', 'Metodo 2:'),
('txt3_9', 'faq', 'Acesse o endereço: www.nanodlp.com.', 'Acesse o endereço: www.nanodlp.com.', 'Acesse o endereço: www.nanodlp.com.'),
('txt4', 'engenharia3d', 'Peça impressa em nossa <a href=\'impressora3d_coree3.php\'>impressora de filamento</a> e pintada.', 'Order printed on our <a href=\'impressora3d_coree3.php\'> filament printer </a> and painted.', 'Pieza impresa en nuestra <a href=\'impressora3d_coree3.php\'> impresora de filamento </a> y pintada.'),
('txt4', 'odontologia3d', 'Consiga fazer diferentes moldes, replicando arcadas dentarias de diferentes casos e complexidades.', 'Be able to make different molds by replicating dental arches of different cases and complexities.', 'Consiga hacer diferentes moldes, replicando arcadas dentales de diferentes casos y complejidades.'),
('txt4_1', 'impressora3d_coree3', 'Gabinete em Aço Carbono e pintura eletrostática.', 'Cabinet in Carbon Steel and electrostatic painting.', 'Gabinete en Acero Carbono y pintura electrostática.'),
('txt4_1', 'impressora3d_phylos', 'Touch Screen / Remoto', 'Touch Screen / Remote', 'Touch Screen / Remoto'),
('txt4_2', 'impressora3d_coree3', 'Detecção de falta de filamento, troca automática de filamento.', 'Detection of filaments, automatic filament exchange.', 'Detección de falta de filamento, cambio automático de filamento.'),
('txt4_2', 'impressora3d_phylos', 'Wi-Fi, LAN e USB', 'Wi-Fi, LAN and USB', 'Wi-Fi, LAN y USB'),
('txt4_3', 'impressora3d_coree3', 'Backup de calibração em arquivo.', 'Calibration backup to file.', 'Copia de seguridad de calibración en archivo.'),
('txt4_3', 'impressora3d_phylos', '51 Mícrons*', '51 Mícrons*', '51 Mícrons*'),
('txt4_4', 'impressora3d_coree3', 'Novo auto nivelamento, mais compacto e preciso.', 'New self leveling, more compact and precise.', 'Nuevo auto nivelación, más compacto y preciso.'),
('txt4_4', 'impressora3d_phylos', '18-20 mm/h (Mícrons)', '18-20 mm/h (Mícrons)', '18-20 mm/h (Mícrons)'),
('txt4_5', 'impressora3d_coree3', '300 x 300 x 300 mm.', '300 x 300 x 300 mm.', '300 x 300 x 300 mm.'),
('txt4_5', 'impressora3d_phylos', '132 x 75 x 200 mm', '132 x 75 x 200 mm', '132 x 75 x 200 mm'),
('txt4_6', 'impressora3d_coree3', '495 x 554 x 600 mm.', '495 x 554 x 600 mm.', '495 x 554 x 600 mm.'),
('txt4_6', 'impressora3d_phylos', '2 Mícrons', '2 Mícrons', '2 Mícrons'),
('txt5', 'camara_de_cura_ezycure', 'Para mais informações entre em contato', 'Para mais informações entre em contato', 'Para mais informações entre em contato'),
('txt5', 'engenharia3d', 'Porta apetrechos pronto para o uso, direto da impressora.', 'Port ready for use, straight from the printer.', 'Puerto portaequipajes listo para el uso, directo de la impresora.'),
('txt5', 'home', 'Conheça um pouco sobre algumas áreas em que a EZY 3D atua!', 'Get to know a little about some areas where EZY 3D works!', '¡Conoce un poco sobre algunas áreas en las que EZY 3D actúa!'),
('txt5', 'impressora3d_coree3', 'Para mais informações entre em contato', 'Para mais informações entre em contato', 'Para mais informações entre em contato'),
('txt5_1', 'engenharia3d', 'Use da impressora para impressão de itens de utilidade para o auxílio do dia a dia.', 'Use the printer to print utility items for day-to-day assistance.', 'Utilice la impresora para imprimir elementos de utilidad para el día.'),
('txt5_2', 'engenharia3d', 'Acrescente criatividade aos objetos cotidianos a sua volta, dando uma nova cara a algo monótomo.', 'Add creativity to the everyday objects around you, giving a new face to something monotome.', 'Añadir creatividad a los objetos cotidianos a su alrededor, dando una nueva cara a algo monótomo.'),
('txt_especificacao1', 'impressora3d_e1260t', 'Resolução XY de 47 Mícrons - Detalhes e acabamentos finos.', '47-micron XY resolution - Details and fine finishes.', 'Resolución XY de 47 Mícrones - Detalles y acabados finos.'),
('txt_especificacao2', 'impressora3d_e1260t', 'Área de 118 x 66 x 170 mm, possibilitando o uso profissional.', 'Area of 118 x 66 x 170 mm, allowing professional use.', 'Superficie de 118 x 66 x 170 mm, posibilitando el uso profesional.'),
('txt_especificacao3', 'impressora3d_e1260t', 'Wi-Fi, Ethernet e USB - Imprime sem precisar estar conectada a um computador.', 'Wi-Fi, Ethernet and USB - Prints without being connected to a computer.', 'Wi-Fi, Ethernet y USB - Imprime sin tener que estar conectada a un ordenador.'),
('txt_especificacao4', 'impressora3d_e1260t', 'Impressões precisas em todos os eixos (XYZ).', 'Accurate impressions on all axes (XYZ).', 'Impresiones precisas en todos los ejes (XYZ).'),
('txt_especificacao5', 'impressora3d_e1260t', 'A partir de 16 mícrons até 200 mícrons - Impressões lisas e detalhadas.', 'From 16 microns up to 200 microns - Smooth and detailed prints.', 'A partir de 16 micrones hasta 200 micrones - Impresiones lisas y detalladas.'),
('txt_especificacao6', 'impressora3d_e1260t', 'Você pode acessar a impressora pelo computador, tablet, ou celular.', 'You can access the printer from your computer, tablet, or mobile phone.', 'Puede acceder a la impresora desde el ordenador, la tablet o el teléfono móvil.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ticket`
--

CREATE TABLE `ticket` (
  `idticket` int(11) NOT NULL,
  `fk_cliente` int(11) NOT NULL,
  `produto` varchar(40) DEFAULT NULL,
  `numserie` varchar(40) DEFAULT NULL,
  `problema` varchar(40) DEFAULT NULL,
  `descricao` text,
  `status` varchar(20) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `ticket`
--

INSERT INTO `ticket` (`idticket`, `fk_cliente`, `produto`, `numserie`, `problema`, `descricao`, `status`, `datahora`) VALUES
(3, 3, 'CoreE3', '10843849', 'asdsadad', 'sad adkajdjakdj asdmaksdmka kasdkamdka kamdkmsakdmlansdad admamsdl akmdkdaska andsnsad adkajdjakdj asdmaksdmka kasdkamdka kamdkmsakdmlansdad admamsdl akmdkdaska andsnsad adkajdjakdj asdmaksdmka kasdkamdka kamdkmsakdmlansdad admamsdl akmdkdaska andsn', 'pendente', '2019-10-09 11:14:46');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices de tabela `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`idticket`),
  ADD KEY `fk_cliente` (`fk_cliente`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `ticket`
--
ALTER TABLE `ticket`
  MODIFY `idticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`fk_cliente`) REFERENCES `cliente` (`idcliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
