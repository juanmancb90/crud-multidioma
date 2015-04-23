
CREATE DATABASE IF NOT EXISTS `portal_gift` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `portal_gift`;


-- Volcando estructura para tabla portal_gift.gift_en
CREATE TABLE IF NOT EXISTS `gift_en` (
  `id_gift` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_gift`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla portal_gift.gift_en: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `gift_en` DISABLE KEYS */;
INSERT INTO `gift_en` (`id_gift`, `title`, `description`, `date_added`, `date_modified`) VALUES
	(1, 'dashboard', 'it is a form to crontrol', '2015-04-09 20:18:12', '2015-04-09 23:13:33'),
	(2, 'electricity', 'fenomel', '2015-04-09 21:38:52', '2015-04-09 23:13:33');
/*!40000 ALTER TABLE `gift_en` ENABLE KEYS */;


-- Volcando estructura para tabla portal_gift.gift_es
CREATE TABLE IF NOT EXISTS `gift_es` (
  `id_gift` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_gift`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla portal_gift.gift_es: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `gift_es` DISABLE KEYS */;
INSERT INTO `gift_es` (`id_gift`, `title`, `description`, `date_added`, `date_modified`) VALUES
	(1, 'libros', 'son fuente de conocimiento fabulosos', '2015-04-09 20:17:32', '2015-04-09 23:12:58'),
	(2, 'programcion', 'es un reto entretenido', '2015-04-09 21:40:55', '2015-04-09 23:12:58');
/*!40000 ALTER TABLE `gift_es` ENABLE KEYS */;


-- Volcando estructura para tabla portal_gift.gift_fr
CREATE TABLE IF NOT EXISTS `gift_fr` (
  `id_gift` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_gift`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla portal_gift.gift_fr: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `gift_fr` DISABLE KEYS */;
INSERT INTO `gift_fr` (`id_gift`, `title`, `description`, `date_added`, `date_modified`) VALUES
	(1, 'pomme', 'Ce est un fruit rouge', '2015-04-09 21:39:54', '2015-04-09 23:13:53'),
	(2, 'la femme', 'est le mot femmes', '2015-04-09 21:40:33', '2015-04-09 23:13:53');
/*!40000 ALTER TABLE `gift_fr` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
