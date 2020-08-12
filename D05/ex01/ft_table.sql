DROP TABLE IF EXISTS `ft_table`;

CREATE TABLE `ft_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(9) DEFAULT 'toto' NOT NULL,
  `groupe` ENUM('staff', 'student', 'other') NOT NULL,
  `creation_date` DATE NOT NULL,
  PRIMARY KEY(`id`)
);
