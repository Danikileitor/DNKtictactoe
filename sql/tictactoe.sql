-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para jogodavelha
CREATE DATABASE IF NOT EXISTS `dnktictactoe` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `dnktictactoe`;

-- Copiando estrutura para tabela jogodavelha.fila
CREATE TABLE IF NOT EXISTS `fila` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `player1` varchar(50) NOT NULL,
  `player2` varchar(50) DEFAULT NULL,
  `stats` varchar(50) DEFAULT NULL,
  `hora` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela jogodavelha.jogadas
CREATE TABLE IF NOT EXISTS `jogadas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jogo` varchar(32) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `player` varchar(32) NOT NULL,
  `gameOver` varchar(5) NOT NULL,
  `hora` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela jogodavelha.jogos
CREATE TABLE IF NOT EXISTS `jogos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jogo` varchar(32) NOT NULL,
  `player1` varchar(32) NOT NULL,
  `player2` varchar(32) NOT NULL,
  `gameOver` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela jogodavelha.mensagem
CREATE TABLE IF NOT EXISTS `mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(51) NOT NULL,
  `hora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela jogodavelha.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(50) NOT NULL DEFAULT '0',
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
