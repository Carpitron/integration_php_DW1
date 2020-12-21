-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour sitesondages
CREATE DATABASE IF NOT EXISTS `sitesondages` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sitesondages`;

-- Listage de la structure de la table sitesondages. amis
CREATE TABLE IF NOT EXISTS `amis` (
  `Id_relation` int(11) NOT NULL AUTO_INCREMENT,
  `user_id1` int(11) DEFAULT NULL,
  `user_id2` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_relation`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Listage des données de la table sitesondages.amis : ~4 rows (environ)
/*!40000 ALTER TABLE `amis` DISABLE KEYS */;
INSERT INTO `amis` (`Id_relation`, `user_id1`, `user_id2`) VALUES
	(1, 13, 1),
	(2, 13, 2),
	(3, 13, 11),
	(4, 13, 12);
/*!40000 ALTER TABLE `amis` ENABLE KEYS */;

-- Listage de la structure de la table sitesondages. creation
CREATE TABLE IF NOT EXISTS `creation` (
  `id_sond` int(3) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) NOT NULL,
  `choixUn` varchar(50) NOT NULL,
  `choixDeux` varchar(50) NOT NULL,
  `dateDebut` datetime DEFAULT NULL,
  `dateFin` datetime DEFAULT NULL,
  PRIMARY KEY (`id_sond`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=latin1;

-- Listage des données de la table sitesondages.creation : ~6 rows (environ)
/*!40000 ALTER TABLE `creation` DISABLE KEYS */;
INSERT INTO `creation` (`id_sond`, `question`, `choixUn`, `choixDeux`, `dateDebut`, `dateFin`) VALUES
	(162, 'Vous en pensez quoi ?', 'oui', 'non', '2020-11-03 00:00:00', NULL),
	(164, 'Ouais Les anges', 'Vanessa', 'Julien', '2020-12-04 00:00:00', NULL),
	(165, 'test', 'lala', 'lolo', '2020-12-01 08:34:39', '2020-12-01 23:34:00'),
	(167, 'test 2', 'oui', 'non', '2020-12-01 08:36:55', '2020-12-01 10:02:00'),
	(168, 'TEst 2', 'haha', 'hehe', '2020-12-01 09:16:06', '2020-12-01 23:16:00'),
	(169, 'yo', 'azerty', 'querty', '2020-12-02 02:28:54', '2020-12-02 20:28:00');
/*!40000 ALTER TABLE `creation` ENABLE KEYS */;

-- Listage de la structure de la table sitesondages. membre
CREATE TABLE IF NOT EXISTS `membre` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `mdp` varchar(64) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `statut` int(3) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Listage des données de la table sitesondages.membre : ~7 rows (environ)
/*!40000 ALTER TABLE `membre` DISABLE KEYS */;
INSERT INTO `membre` (`id_user`, `pseudo`, `mdp`, `mail`, `statut`) VALUES
	(1, 'arthur', 'azerty', '', 1),
	(2, 'Son', 'Goku', '', 1),
	(10, 'Bonjour', 'bonjour', '', 1),
	(11, '', '', '', 1),
	(12, 'pablo', 'pabo', '', 2),
	(13, 'admin', 'soleil', '', 2),
	(14, 'test', '$2y$10$r1EvWObUSpprUzixYRy7bem8Oq1CYrqOg8yiG2h38/QqmwcyA3MRK', '', 1);
/*!40000 ALTER TABLE `membre` ENABLE KEYS */;

-- Listage de la structure de la table sitesondages. messages
CREATE TABLE IF NOT EXISTS `messages` (
  `sendAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` varchar(50) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sendAt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table sitesondages.messages : ~13 rows (environ)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`sendAt`, `content`, `user`) VALUES
	('2020-11-30 22:02:02', 'Salut, je trouve ce sondage trÃ¨s interressent', 'Son'),
	('2020-11-30 22:02:43', 'Hello,oui je suis d\'accord', 'arthur'),
	('2020-11-30 22:02:53', 'Tu as quel age ?', 'arthur'),
	('2020-11-30 22:03:46', 'EH ARRETEZ', 'pablo'),
	('2020-11-30 22:04:31', 'tais toi', 'arthur'),
	('2020-11-30 22:05:27', 'dacc', 'pablo'),
	('2020-11-30 22:39:11', 'Je crois que le problÃ¨me est rÃ©glÃ© ;)', 'Son'),
	('2020-11-30 23:03:44', 'Super', 'Son'),
	('2020-11-30 23:19:14', 'Re test', 'Son'),
	('2020-12-01 11:47:47', 'Message', 'Son'),
	('2020-12-01 11:49:10', 'trop bien', 'pablo'),
	('2020-12-01 11:59:51', 'azertyu', 'pablo'),
	('2020-12-01 22:12:16', 'azert', 'pablo'),
	('2020-12-02 15:28:05', 'mlkjh', 'admin');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Listage de la structure de la table sitesondages. reponses
CREATE TABLE IF NOT EXISTS `reponses` (
  `id_sondage` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `reponse` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table sitesondages.reponses : ~0 rows (environ)
/*!40000 ALTER TABLE `reponses` DISABLE KEYS */;
INSERT INTO `reponses` (`id_sondage`, `id_user`, `reponse`) VALUES
	(165, 10, 'A'),
	(165, 2, 'B'),
	(165, 13, 'A'),
	(165, 1, 'A'),
	(164, 48, 'B');
/*!40000 ALTER TABLE `reponses` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
