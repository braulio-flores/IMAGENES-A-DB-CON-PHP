CREATE TABLE IF NOT EXISTS `imagen`.`subida` (
  `ImageID` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(30) NULL DEFAULT NULL,
  `Imagen` LONGBLOB NULL DEFAULT NULL,
  PRIMARY KEY (`ImageID`))
ENGINE = InnoDB
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci