-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour wf3_php_intermediaire_florian
CREATE DATABASE IF NOT EXISTS `wf3_php_intermediaire_florian` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wf3_php_intermediaire_florian`;

-- Listage de la structure de la table wf3_php_intermediaire_florian. advert
CREATE TABLE IF NOT EXISTS `advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `postal_code` char(5) NOT NULL,
  `city` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `reservation_message` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Listage des données de la table wf3_php_intermediaire_florian.advert : ~0 rows (environ)
/*!40000 ALTER TABLE `advert` DISABLE KEYS */;
INSERT INTO `advert` (`id`, `title`, `description`, `postal_code`, `city`, `type`, `price`, `reservation_message`) VALUES
	(1, 'qsdfqs', 'Une piscine', '28000', 'Amiens', 'vente', 170.00, 'reservation de pierre'),
	(2, 'Immeuble', 'Comprenant une seule chambre', '28000', 'Amiens', 'location', 170.80, 'Salami'),
	(3, 'studio', 'Comprenant rien', '80000', 'Amiens', 'location', 560.30, NULL),
	(4, 'Piscine', 'De 100 metres de profondeur', '28000', 'Amiens', 'vente', 400000.60, NULL),
	(5, 'terrain', 'de pres du zoo', '28000', 'Amiens', 'vente', 2000.10, NULL),
	(6, 'Manoir', 'manoir de bruce wayne', '28000', 'Amiens', 'location', 45000.49, NULL),
	(7, 'Garage', 'garage de 10 metres', '28000', 'Amiens', 'vente', 170.10, NULL),
	(8, 'Appartement', 'Comprenant une 10 chambres', '28000', 'Amiens', 'vente', 400000.60, NULL),
	(9, 'Local commerce', 'Ancienne boulangerie', '28000', 'Amiens', 'vente', 560.30, NULL),
	(10, 'Box de rangement', 'box de 2 metres', '28000', 'Amiens', 'vente', 170.80, NULL),
	(11, 'Colocation', 'studio en coloc', '28000', 'Amiens', 'location', 170.80, NULL),
	(12, 'Rbnb', 'spa en rbnb', '28000', 'Amiens', 'location', 460.80, NULL),
	(13, 'Grange', 'Grange comprenant des outils', '28000', 'Amiens', 'vente', 170.80, NULL),
	(14, 'Appartement', 'Comprenant 19 pieces', '28000', 'Amiens', 'vente', 460.80, NULL),
	(15, 'Hangar a Avion', 'Hangar a avion de 400m', '28000', 'Amiens', 'vente', 2000.10, NULL),
	(16, 'Place au port', 'place de parking', '28000', 'Amiens', 'location', 2000.10, NULL);
/*!40000 ALTER TABLE `advert` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
