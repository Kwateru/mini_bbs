DROP TABLE IF EXISTS `academy_db`.`votes`;
CREATE TABLE `academy_db`.`votes` (
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `vote` ENUM('good', 'bad') NOT NULL,
    `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;