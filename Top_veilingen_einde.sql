-- -------------------------------------------------------------
-- TablePlus 4.1.0(376)
--
-- https://tableplus.com/
--
-- Database: top_veilingen
-- Generation Time: 2021-08-25 12:02:15.8140
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `auction`;
CREATE TABLE `auction` (
  `auction_id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) DEFAULT NULL,
  `description` text,
  `deadline` datetime DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`auction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `bid`;
CREATE TABLE `bid` (
  `bid_id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `auction_id` int DEFAULT NULL,
  PRIMARY KEY (`bid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(64) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `icon` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `auction` (`auction_id`, `title`, `description`, `deadline`, `image`, `category_id`) VALUES
(1, 'Weekend London', 'Londen is de hoofdstad en grootste stad van zowel Engeland als het Verenigd Koninkrijk. In de regio Groot-Londen, waarvan de begrenzing vaak gelijk wordt gesteld aan die van de stad Londen, wonen bijna 8,7 miljoen mensen.', '2021-07-25 13:00:00', 'london.jpg', 1),
(2, 'JBL Xtreme 2', 'JBL Xtreme 2 is the ultimate portable Bluetooth speaker that effortlessly delivers dynamic and immersive stereo sound. The speaker is armed with four drivers, two JBL Bass Radiators, a rechargeable 10,000mAh Li-ion battery supporting up to 15 hours of playtime. On top of these, the speaker carries a convenient USB charge out. The speaker is IPX7 rated, featuring a waterproof design, with rugged fabric in exclusive colors complementing the Xtreme 2. Together with JBL Connect+ it can wirelessly link more than 100 JBL Connect+ enabled speakers to elevate your listening experience and making the party even bigger. The speaker carries integrated hooks, a durable metal base, and an added bottle opener to the carrying strap adding to the consumer convenience level whilst on the go. Not to forget it\'s just as well a perfect audio solution for any home. Whether in the living room, poolside, or tailgating for the big game, the JBL Xtreme 2 brings bold sound, wherever!', '2021-07-05 18:00:00', 'jbl.webp', 3),
(3, '2 tickets voor Plopsa', 'Plopsaland De Panne is een themapark van Studio 100 in de Belgische plaats De Panne, aan de Noordzeekust en de Franse grens. De kusttram heeft een halte voor de ingang. Het themapark is genoemd naar de kinderprogramma\'s Kabouter Plop en Samson en Gert van Studio 100. \n', '2021-08-26 19:30:00', 'plopsa.jpg', 2),
(4, 'Weekendje Blankenberge', 'Een zalig weekend aan de belgische kust, lekker in de regen. Genieten van de gure wind! Vervelende kinderen en luidruchtige Duitse toeristen!!!!', '2021-08-28 18:00:00', 'depanne.jpg', 1),
(5, 'Macbook Air ', 'De Apple MacBook Air is een lichtgewicht 13 inch laptop geschikt voor dagelijks gebruik: internetten, e-mailen en tekstverwerking. Met een accuduur van 12 uur gaat de MacBook Air de hele dag mee. De MacBook Air is voorzien van een Intel Core i5 processor, 8 GB werkgeheugen en een 256 GB SSD. Dankzij deze eigenschappen werkt de MacBook Air vlot in je dagelijkse activiteiten, kun je er gelijk mee aan de slag en onderweg prettig mee werken.', '2021-08-25 18:00:00', 'air.jpg', 3);

INSERT INTO `bid` (`bid_id`, `name`, `email`, `price`, `created_on`, `auction_id`) VALUES
(2, 'Merla Stonebanks', 'mstonebanks1@gmpg.org', 20, '2021-04-15 11:38:49', 2),
(3, 'Wayne Dimond', 'wdimond2@slate.com', 16, '2021-09-30 23:33:21', 4),
(4, 'Darin Farrah', 'dfarrah3@google.com.br', 35, '2021-02-17 15:37:09', 3),
(5, 'Guillemette Littleton', 'glittleton4@artisteer.com', 14, '2021-01-23 04:01:46', 3),
(6, 'Ashla Hrinchenko', 'ahrinchenko5@umich.edu', 204, '2021-02-04 16:52:59', 1),
(7, 'Ronalda Waszczyk', 'rwaszczyk6@networkadvertising.org', 22, '2021-12-22 23:41:09', 2),
(8, 'Verena Halgarth', 'vhalgarth7@bandcamp.com', 32, '2021-02-16 14:01:04', 2),
(9, 'Donavon Garthland', 'dgarthland8@deliciousdays.com', 38, '2021-09-16 23:19:08', 3),
(10, 'Willi Hulance', 'whulance9@nydailynews.com', 11, '2021-11-28 10:35:33', 2),
(11, 'Letisha Tabary', 'ltabarya@illinois.edu', 29, '2021-10-11 14:23:20', 2),
(12, 'Rhona Hardes', 'rhardesb@samsung.com', 21, '2021-12-09 02:19:51', 4),
(13, 'Merline Borthe', 'mborthec@wikipedia.org', 4, '2021-08-07 20:34:50', 2),
(14, 'Dulci Bratchell', 'dbratchelld@nps.gov', 208, '2021-11-06 11:38:36', 1),
(15, 'Wilburt Carncross', 'wcarncrosse@ucoz.com', 27, '2021-04-24 05:08:02', 2),
(16, 'Elianore Drysdall', 'edrysdallf@unc.edu', 30, '2021-01-07 08:43:01', 3),
(17, 'Dante', 'dante@email.be', 40, '2021-08-25 11:43:45', 3),
(18, 'Test Tester', 'test@test.be', 42, '2021-08-25 11:45:12', 3),
(19, 'nog een test', 'test@testtt.be', 43, '2021-08-25 11:59:33', 3),
(20, 'Dante ', 'dante@email.com', 25, '2021-08-25 11:59:51', 4);

INSERT INTO `category` (`category_id`, `slug`, `name`, `icon`) VALUES
(1, 'travel', 'Reizen', 'plane-departure'),
(2, 'fun', 'Fun', 'gift-card'),
(3, 'gadgets', 'Gadgets', 'laptop');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;