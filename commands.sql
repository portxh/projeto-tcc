create database loja_site;

use loja_site;

CREATE TABLE `produtos` (
  `id` int(11) primary key NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `produtos` (`id`, `nome`, `imagem`, `desc`, `preco`) VALUES
(1, 'Chocolate', 'cake-cream-choco.jpg', 'Teste 1', '100.00'),
(2, 'Morango', 'cake-cramberry.jpg', 'Teste 2', '200.00'),
(3, 'Creme','cake-mix.jpg', 'Teste 3', '150.00');

INSERT INTO `produtos` (`id`, `nome`, `imagem`, `desc`, `preco`) VALUES
(4, 'Bolo de Creme', 'cake-cream-choco.jpg', 'Teste de Bolo via Banco de dados.', '55.75'),
(5, 'Bolo de Chocolate', 'cake-cramberry.jpg', 'Teste de Bolo via Banco de dados.', '120.65'),
(6, 'Bolo de Frutas', 'cake-mix.jpg', 'Teste de Bolo via Banco de dados.', '100.00');

drop table produtos;

INSERT INTO produtos (IdProd,imagem,nomeProd,descProd,precoProd) VALUES ('4','cake-cream-choco.jpg', 'Bolo de Creme', 'Teste de Bolo via Banco de dados.', '55.75');
INSERT INTO produtos (IdProd,imagem,nomeProd,descProd,precoProd) VALUES ('5','cake-cramberry.jpg', 'Bolo de Chocolate', 'Teste de Bolo via Banco de dados.', '120.65');
INSERT INTO produtos (IdProd,imagem,nomeProd,descProd,precoProd) VALUES ('6','cake-mix.jpg', 'Bolo de Frutas', 'Teste de Bolo via Banco de dados.', '100.00');