CREATE TABLE IF NOT EXISTS `resource`.`authors` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `desc` TEXT NULL,
  `name` VARCHAR(128) DEFAULT '',
  `phone` VARCHAR(45) DEFAULT '',
  `email` VARCHAR(45) DEFAULT '',
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `resource`.`books` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(128) DEFAULT '',
  `desc` TEXT NULL,
  `author_id` INT NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_books_authors_idx` (`author_id` ASC),
  CONSTRAINT `fk_books_authors`
    FOREIGN KEY (`author_id`)
    REFERENCES `resource`.`authors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `resource`.`questions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` TEXT NULL COMMENT '题目',
  `desc` TEXT NULL COMMENT '备注',
  `type` INT DEFAULT 1 COMMENT '类型，1判断、2单选、3多选、4不定项、5问答',
  `score` DECIMAL(4,2) DEFAULT 0.0,
  `options` TEXT NULL,
  `bit_answer` INT DEFAULT 1,
  `answer_desc` TEXT NULL,
  `books_id` INT NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_questions_books1_idx` (`books_id` ASC),
  CONSTRAINT `fk_questions_books1`
    FOREIGN KEY (`books_id`)
    REFERENCES `resource`.`books` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;