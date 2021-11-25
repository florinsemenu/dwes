CREATE DATABASE IF NOT EXISTS `pelu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pelu`;

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `details` varchar(300) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` BOOLEAN DEFAULT false,
  `admin` BOOLEAN DEFAULT false,
  UNIQUE INDEX (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `employees` (`name`, `surname`, `email`, `details`, `birthdate`, `admin`) VALUES
('Ana', 'Navarro', 'ana@pelu.com', 'Ana es la responsable del centro desde sus inicios. Es creativa y emprendedora, le encanta aportar nuevas ideas.', '2001-4-1', 1)

;
