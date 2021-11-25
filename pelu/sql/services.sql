USE `pelu`;

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `price` double not null,
  `time` int
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `services`(`name`, `gender`, `detail`, `price`, `time`) VALUES
('cortar', 'mujer', 'Cada corte es único y personal',  20, 30),
('cortar', 'hombre', 'Cada corte es único y personal',  16, 20),
('balayage', 'mujer', 'Nuestra técnica aporta lumnosidad y naturalidad',  45, 60)
;
