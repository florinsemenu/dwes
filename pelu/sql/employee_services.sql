USE `pelu`;

DROP TABLE IF EXISTS `employee_services`;
CREATE TABLE `employee_services` (
  `employee_id` int NOT NULL,
  `services_id` int NOT NULL,
 PRIMARY KEY (employee_id, services_id),
 FOREIGN KEY (employee_id) REFERENCES employee(id),
 FOREIGN KEY (services_id) REFERENCES services(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `employee_services` VALUES
(1, 1),
(1, 2)
;
