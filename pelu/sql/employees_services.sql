USE `pelu`;

DROP TABLE IF EXISTS `employees_services`;
CREATE TABLE `employees_services` (
  `employees_id` int NOT NULL,
  `services_id` int NOT NULL,
 PRIMARY KEY (employees_id, services_id),
 FOREIGN KEY (employees_id) REFERENCES employees(id),
 FOREIGN KEY (services_id) REFERENCES services(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `employees_services` VALUES
(1, 1),
(1, 2)
;
