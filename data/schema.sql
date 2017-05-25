DROP TABLE IF EXISTS `users` CASCADE;
CREATE TABLE `users` (
  `id`           INT(11)      NOT NULL AUTO_INCREMENT,
  `username`     VARCHAR(255) NOT NULL,
  `email`        VARCHAR(255) NOT NULL,
  `password`     VARCHAR(255) NOT NULL,
  `status`       INT(1)       NOT NULL DEFAULT 0,
  `date_created` TIMESTAMP             DEFAULT CURRENT_TIMESTAMP,
  `ts`           TIMESTAMP    NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY (`username`),
  UNIQUE KEY (`email`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

DROP TABLE IF EXISTS `profile` CASCADE;
CREATE TABLE `profile` (
  `id`      INT(11)      NOT NULL AUTO_INCREMENT,
  `user_id` INT(11)      NOT NULL,
  `name`    VARCHAR(255) NOT NULL,
  `surname` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

DROP TABLE IF EXISTS `events` CASCADE;
CREATE TABLE `events` (
  id            INT(11)      NOT NULL AUTO_INCREMENT,
  user_id       INT(11)      NOT NULL,
  lat           DECIMAL(12, 8)        DEFAULT NULL,
  lng           DECIMAL(12, 8)        DEFAULT NULL,
  `desc`          VARCHAR(255) NOT NULL,
  event_type_id INT(4)       NOT NULL,
  date_created  TIMESTAMP             DEFAULT current_timestamp,
  date          TIMESTAMP    NOT NULL,
  status        INT(4) DEFAULT 1,
  PRIMARY KEY (`id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

DROP TABLE IF EXISTS `events_type` CASCADE;
CREATE TABLE `events_type` (
  id          INT(4)       NOT NULL AUTO_INCREMENT,
  name        VARCHAR(255) NOT NULL,
  max_players INT(5)                DEFAULT 1,
  PRIMARY KEY (`id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

INSERT INTO events_type (name, max_players) VALUES ('pilka nozna', 22), ('siatkowka', 12), ('koszykowka', 12);