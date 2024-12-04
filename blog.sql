CREATE SCHEMA IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 ;
USE `blog` ;

-- -----------------------------------------------------
-- Table `blog`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`usuario` (
  `id` INT NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(200) NOT NULL,
  `data_nascimento` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`postagens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`postagens` (
  `id` INT NOT NULL,
  `descricao_postagem` LONGTEXT NOT NULL,
  `data_postagem` DATE NOT NULL,
  `usuario_id_usuario` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_postagens_usuario1_idx` (`usuario_id_usuario` ASC) VISIBLE,
  CONSTRAINT `fk_postagens_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `blog`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`mensagens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`mensagens` (
  `id` INT NOT NULL,
  `descricao_mensagem` LONGTEXT NOT NULL,
  `data_mensagem` DATE NOT NULL,
  `postagens_id_postagem` INT NOT NULL,
  `usuario_id_usuario` INT NOT NULL,
  PRIMARY KEY (`id`, `postagens_id_postagem`),
  INDEX `fk_mensagens_postagens_idx` (`postagens_id_postagem` ASC) VISIBLE,
  INDEX `fk_mensagens_usuario1_idx` (`usuario_id_usuario` ASC) VISIBLE,
  CONSTRAINT `fk_mensagens_postagens`
    FOREIGN KEY (`postagens_id_postagem`)
    REFERENCES `blog`.`postagens` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_mensagens_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `blog`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;