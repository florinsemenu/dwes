CREATE DATABASE IF NOT EXISTS `mvc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mvc`;

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) DEFAULT NULL,
  `detail` varchar(100) DEFAULT NULL,
  `price` int(3.2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `services` (`id`, `name`, `detail`, `price`) VALUES
(1, 'Corte', 'Corte y peinado corto', 20),
(2, 'Corte', 'Corte y peinado medio', 30),
(3, 'Corte', 'Corte y peinado largo', 40),
(4, 'Color', 'Color y baño en puntas corto', 25),
(5, 'Color', 'Color y baño en puntas medio', 35),
(6, 'Color', 'Color y baño en puntas largo', 45),
(7, 'Color', 'Baño de color', 30)
;
