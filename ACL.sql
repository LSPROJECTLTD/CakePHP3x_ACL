-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.36-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para siged3
CREATE DATABASE IF NOT EXISTS `siged3` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `siged3`;

-- Copiando estrutura para tabela siged3.acos
CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `controller_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela siged3.acos: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT IGNORE INTO `acos` (`id`, `controller_id`, `action_id`, `created`, `modified`) VALUES
	(1, 1, 1, '2019-02-04 15:58:50', '2019-02-04 15:58:50'),
	(2, 1, 2, '2019-02-04 16:08:02', '2019-02-04 16:12:10'),
	(5, 1, 5, '2019-02-04 16:05:51', '2019-02-04 16:05:54'),
	(7, 2, 1, '2019-02-05 10:28:27', '2019-02-05 10:28:27'),
	(8, 2, 2, '2019-02-05 10:28:27', '2019-02-05 10:28:27');
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;

-- Copiando estrutura para tabela siged3.acosroles
CREATE TABLE IF NOT EXISTS `acosroles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aco_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `allowed` bit(1) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela siged3.acosroles: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `acosroles` DISABLE KEYS */;
INSERT IGNORE INTO `acosroles` (`id`, `aco_id`, `role_id`, `allowed`, `created`, `modified`) VALUES
	(1, 1, 1, b'1', '2019-02-04 15:58:57', '2019-02-04 15:58:57'),
	(2, 1, 2, b'1', '2019-02-04 15:58:57', '2019-02-04 15:58:57'),
	(5, 5, 1, b'1', '2019-02-04 16:06:07', '2019-02-04 16:06:07'),
	(6, 5, 2, b'1', '2019-02-04 16:06:07', '2019-02-04 16:06:07'),
	(7, 2, 1, b'1', '2019-02-04 15:58:57', '2019-02-04 15:58:57'),
	(10, 7, 1, b'1', '2019-02-05 10:28:50', '2019-02-05 10:28:50'),
	(11, 7, 2, b'1', '2019-02-05 10:28:50', '2019-02-05 10:28:50'),
	(15, 8, 2, b'1', '2019-02-05 10:28:50', '2019-02-05 10:28:50');
/*!40000 ALTER TABLE `acosroles` ENABLE KEYS */;

-- Copiando estrutura para tabela siged3.actions
CREATE TABLE IF NOT EXISTS `actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(50) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela siged3.actions: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `actions` DISABLE KEYS */;
INSERT IGNORE INTO `actions` (`id`, `action`, `nickname`, `created`, `modified`) VALUES
	(1, 'index', 'Index', '2019-02-01 17:26:38', '2019-02-01 17:26:38'),
	(2, 'add', 'Adicionar', '2019-02-04 11:50:15', '2019-02-04 11:50:15'),
	(3, 'view', 'Visualizar', '2019-02-04 14:46:41', '2019-02-04 14:46:41'),
	(4, 'delete', 'Deletar', '2019-02-04 14:47:36', '2019-02-04 14:47:36'),
	(5, 'logout', 'Sair', '2019-02-04 15:41:35', '2019-02-04 15:41:35'),
	(6, 'login', 'logar', '2019-02-04 15:52:19', '2019-02-04 15:52:19');
/*!40000 ALTER TABLE `actions` ENABLE KEYS */;

-- Copiando estrutura para tabela siged3.aros
CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela siged3.aros: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT IGNORE INTO `aros` (`id`, `user_id`, `role_id`, `created`, `modified`) VALUES
	(1, 45, 1, '2019-02-01 17:25:34', '2019-02-01 17:25:34'),
	(2, 46, 1, '2019-02-04 10:19:04', '2019-02-04 10:19:20'),
	(3, 47, 2, '2019-02-04 10:19:04', '2019-02-04 14:55:30'),
	(4, 46, 2, '2019-02-04 10:19:04', '2019-02-04 10:19:20');
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;

-- Copiando estrutura para tabela siged3.controllers
CREATE TABLE IF NOT EXISTS `controllers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `controller` varchar(50) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela siged3.controllers: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `controllers` DISABLE KEYS */;
INSERT IGNORE INTO `controllers` (`id`, `controller`, `nickname`, `created`, `modified`) VALUES
	(1, 'Users', 'Usuarios', '2019-02-01 17:27:00', '2019-02-01 17:27:00'),
	(2, 'Patrimonios', 'Patrimonio', '2019-02-04 14:39:26', '2019-02-05 10:28:17');
/*!40000 ALTER TABLE `controllers` ENABLE KEYS */;

-- Copiando estrutura para tabela siged3.patrimonios
CREATE TABLE IF NOT EXISTS `patrimonios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela siged3.patrimonios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `patrimonios` DISABLE KEYS */;
INSERT IGNORE INTO `patrimonios` (`id`, `numero`) VALUES
	(1, 56454545);
/*!40000 ALTER TABLE `patrimonios` ENABLE KEYS */;

-- Copiando estrutura para tabela siged3.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela siged3.roles: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT IGNORE INTO `roles` (`id`, `role`, `created`, `modified`) VALUES
	(1, 'Administrador', '2019-02-01 09:32:21', '2019-02-01 09:32:21'),
	(2, 'Usuarios', '2019-02-01 09:32:36', '2019-02-01 09:32:37');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Copiando estrutura para tabela siged3.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela siged3.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `username`, `password`, `created`, `modified`) VALUES
	(46, '222.222.222-22', '$2y$10$c7qwGtMDJBxi3KRtsbUGgeOvPluV5VOWd0k4cg.rtGM.o7RCoH0pa', '2019-01-31 16:48:32', '2019-02-01 09:36:54'),
	(47, '222.222.222-23', '$2y$10$c7qwGtMDJBxi3KRtsbUGgeOvPluV5VOWd0k4cg.rtGM.o7RCoH0pa', '2019-01-31 16:48:32', '2019-02-01 09:36:54');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
