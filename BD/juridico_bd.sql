SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `juridico_bd` DEFAULT CHARACTER SET latin1 ;
USE `juridico_bd` ;

-- -----------------------------------------------------
-- Table `juridico_bd`.`abogado`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `juridico_bd`.`abogado` (
  `id_abogado` TINYINT(3) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `apellido` VARCHAR(45) NULL DEFAULT NULL ,
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  `dni` INT(10) UNSIGNED NOT NULL ,
  `matricula` VARCHAR(45) NOT NULL ,
  `telefono` VARCHAR(40) NULL DEFAULT NULL ,
  `mail` VARCHAR(45) NULL DEFAULT NULL ,
  `contrasenia` CHAR(8) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_abogado`) )
ENGINE = InnoDB
AUTO_INCREMENT = 32
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `juridico_bd`.`cliente`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `juridico_bd`.`cliente` (
  `id_cliente` SMALLINT(5) UNSIGNED NOT NULL ,
  `apellido` CHAR(50) CHARACTER SET 'latin1' NULL DEFAULT NULL ,
  `nombre` CHAR(50) CHARACTER SET 'latin1' NULL DEFAULT NULL ,
  `dni` INT(15) NULL DEFAULT NULL ,
  `domicilio_real` VARCHAR(45) CHARACTER SET 'latin1' NOT NULL ,
  `telefono` VARCHAR(20) CHARACTER SET 'latin1' NULL DEFAULT NULL ,
  `mail` VARCHAR(100) CHARACTER SET 'latin1' NULL DEFAULT NULL ,
  PRIMARY KEY (`id_cliente`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `juridico_bd`.`consulta_cliente_abogado`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `juridico_bd`.`consulta_cliente_abogado` (
  `id_consulta_cliente_abogado` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `id_cliente` SMALLINT(5) UNSIGNED NOT NULL ,
  PRIMARY KEY (`id_consulta_cliente_abogado`) ,
  INDEX `id_cliente` (`id_cliente` ASC) ,
  CONSTRAINT `consulta_cliente_abogado_ibfk_1`
    FOREIGN KEY (`id_cliente` )
    REFERENCES `juridico_bd`.`cliente` (`id_cliente` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `juridico_bd`.`consulta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `juridico_bd`.`consulta` (
  `id_consulta` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `fecha` DATE NOT NULL ,
  `descripcion` TEXT NOT NULL ,
  `consulta_cliente_abogado` INT(10) UNSIGNED NOT NULL ,
  PRIMARY KEY (`id_consulta`) ,
  INDEX `fk_consulta_consulta_cliente_abogado1_idx` (`consulta_cliente_abogado` ASC) ,
  CONSTRAINT `fk_consulta_consulta_cliente_abogado1`
    FOREIGN KEY (`consulta_cliente_abogado` )
    REFERENCES `juridico_bd`.`consulta_cliente_abogado` (`id_consulta_cliente_abogado` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `juridico_bd`.`expediente`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `juridico_bd`.`expediente` (
  `id_expediente` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `caratula` VARCHAR(90) NOT NULL ,
  `num_expte` INT(10) UNSIGNED NULL DEFAULT NULL ,
  `anio` YEAR NULL DEFAULT NULL ,
  `juzgado` VARCHAR(45) NULL DEFAULT NULL ,
  `tipo_de_parte` CHAR(1) NOT NULL ,
  `abogado_contraparte` VARCHAR(45) NULL DEFAULT NULL ,
  `nombre_contraparte` VARCHAR(45) NOT NULL ,
  `domicilio_const_contraparte` VARCHAR(45) NULL DEFAULT NULL ,
  `domicilio_real_contraparte` VARCHAR(45) NULL DEFAULT NULL ,
  `circunscripcion` VARCHAR(30) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_expediente`) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `juridico_bd`.`expediente_cliente_abogado`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `juridico_bd`.`expediente_cliente_abogado` (
  `id_relacion` INT(10) UNSIGNED NOT NULL ,
  `id_abogado` TINYINT(3) UNSIGNED NOT NULL ,
  `id_expediente` INT(10) UNSIGNED NOT NULL ,
  `id_cliente` SMALLINT(5) UNSIGNED NOT NULL ,
  PRIMARY KEY (`id_relacion`) ,
  INDEX `id_abogado` (`id_abogado` ASC) ,
  INDEX `id_expediente` (`id_expediente` ASC) ,
  INDEX `id_cliente` (`id_cliente` ASC) ,
  CONSTRAINT `expediente_cliente_abogado_ibfk_1`
    FOREIGN KEY (`id_abogado` )
    REFERENCES `juridico_bd`.`abogado` (`id_abogado` ),
  CONSTRAINT `expediente_cliente_abogado_ibfk_2`
    FOREIGN KEY (`id_expediente` )
    REFERENCES `juridico_bd`.`expediente` (`id_expediente` ),
  CONSTRAINT `expediente_cliente_abogado_ibfk_3`
    FOREIGN KEY (`id_cliente` )
    REFERENCES `juridico_bd`.`cliente` (`id_cliente` ))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `juridico_bd`.`ultimo_prov`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `juridico_bd`.`ultimo_prov` (
  `id_prov` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `id_expediente` INT(10) UNSIGNED NOT NULL ,
  `ultimo_movimiento` TEXT NOT NULL ,
  PRIMARY KEY (`id_prov`) ,
  INDEX `id_expediente` (`id_expediente` ASC) ,
  CONSTRAINT `ultimo_prov_ibfk_1`
    FOREIGN KEY (`id_expediente` )
    REFERENCES `juridico_bd`.`expediente` (`id_expediente` ))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

USE `juridico_bd` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
