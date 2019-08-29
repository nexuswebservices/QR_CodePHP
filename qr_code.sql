-- DROP TABLE IF EXISTS `cadastro`;

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
);

LOCK TABLES `cadastro` WRITE;

INSERT INTO `cadastro` VALUES (1,'649969'),(2,'345768'),(3,'677623');
UNLOCK TABLES;