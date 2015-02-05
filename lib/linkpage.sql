-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 05-Fev-2015 às 13:29
-- Versão do servidor: 5.5.41-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `linkpage`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL,
  `quantity` int(4) NOT NULL,
  `value` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `image`, `quantity`, `value`) VALUES
(1, 'Escudo Hylian', 'Escudo Hylian Ã© o escudo tradicional dos Cavaleiros de Hyrule e um escudo comumente usado por Link.', 'hylian-shield.png', 10, 25),
(2, 'Master Sword', 'A Master Sword foi \r\noriginalmente criado pela deusa Hylia como a Espada Deusa.', 'Master_Sword.png', 20, 200),
(3, 'Escudo Espelho', 'encontrado no Templo EspÃ­rito. Diz-se que sua superfÃ­cie nÃ£o sÃ³ reflete a luz, mas a intenÃ§Ã£o hostil tambÃ©m.', 'Mirror_Shield.png', 35, 98),
(4, 'Estilingue', 'O estilingue Ã© uma arma que atira sementes que tem aparecido em diferentes estilos e usado para muitas aÃ§Ãµes diferentes.', 'FairySlingshot.png', 12, 45),
(5, 'Capuz do Coelho', 'Que orelhas longa isso tem!\r\nSerÃ¡ o poder da luz  na primavera selvagem!?', 'Bunnyhood.png', 23, 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `user`, `pass`) VALUES
(1, 'Administrador', 'admin', '0192023a7bbd73250516f069df18b500'),
(2, 'Leonardo', 'LeoLpds', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
