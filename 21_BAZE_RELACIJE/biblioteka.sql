CREATE DATABASE biblioteka CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE `knjige`(
    `id` INT UNSIGNED PRIMARY KEY,
    `naslov` VARCHAR(45) NOT NULL,
    `pisac` VARCHAR(45) NOT NULL
)   ENGINE = INNODB;

CREATE TABLE `zanr`(
    `id` INT UNSIGNED PRIMARY KEY,
    `naziv` VARCHAR(45) NOT NULL
)   ENGINE = INNODB;

CREATE TABLE `clanovi`(
    `id` INT UNSIGNED PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL,
    `adresa` VARCHAR(45),
    `telefon` VARCHAR(45)
)   ENGINE = INNODB;

CREATE TABLE `pisac`(
    `id` INT UNSIGNED PRIMARY KEY,
    `ime_prezime` VARCHAR(45) NOT NULL,
    `bio` TEXT,
    `god_rodj` YEAR
)   ENGINE = INNODB;

CREATE TABLE `zaduzenje`(
    `id` INT UNSIGNED PRIMARY KEY,
    `datum` DATE NOT NULL,
    `vratio` BOOLEAN DEFAULT 0 NOT NULL
)   ENGINE = INNODB;

CREATE TABLE `knjige_has_zanr`(
    `knjiga_id` INT UNSIGNED NOT NULL,
    `zanr_id` INT UNSIGNED NOT NULL,
    CONSTRAINT `knjige_zanr_knjiga_fk`
    FOREIGN KEY(`knjiga_id`)
    REFERENCES `knjige`(`id`)
    ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `knjige_zanr_zanr_fk`
    FOREIGN KEY(`zanr_id`)
    REFERENCES `zanr`(`id`)
    ON DELETE NO ACTION ON UPDATE CASCADE
)   ENGINE = INNODB;

CREATE TABLE `knjige_has_pisac`(
    `knjiga_id` INT UNSIGNED,
    `pisac_id` INT UNSIGNED,
    CONSTRAINT `knjige_pisac_knjiga_fk`
    FOREIGN KEY(`knjiga_id`)
    REFERENCES `knjige`(`id`)
    ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `knjige_pisac_pisac_fk`
    FOREIGN KEY(`pisac_id`)
    REFERENCES `pisac`(`id`)
    ON DELETE NO ACTION ON UPDATE CASCADE
)   ENGINE = INNODB;

ALTER TABLE `knjige` DROP COLUMN `pisac`;

-- POGLEDATI OPET
-- ALTER TABLE `zaduzenje`
-- ADD `clan_id` INT UNSIGNED,
-- ADD `knjiga_id` INT UNSIGNED,
-- ADD CONSTRAINT `clanovi_knjige_clan_fk`
-- FOREIGN KEY(`clan_id`)
-- REFERENCES `clanovi`(`id`)
-- ON DELETE CASCADE ON UPDATE CASCADE,
-- ADD CONSTRAINT `clanovi_knjige_knjiga_fk`
-- FOREIGN KEY(`knjiga_id`)
-- REFERENCES `knjige`(`id`)
-- ON DELETE NO ACTION ON UPDATE CASCADE;

INSERT INTO `knjige`
VALUES
(1, 'Elementarne cestice'),
(2, 'Platforma'),
(3, 'Pokoravanje');

INSERT INTO `knjige`
VALUES
(6, 'Na Zapadu nista novo');


INSERT INTO `pisac` (`id`, `ime_prezime`, `god_rodj`)
VALUES
(5, 'Misel Uelbek', 1956);

ALTER TABLE `pisac` ADD `god_rodj` YEAR DEFAULT 1901;

INSERT INTO `pisac` (`id`, `ime_prezime`)
VALUES
(10, 'Erih Marija Remark');

INSERT INTO `clanovi`(`id`, `ime`, `prezime`)
VALUES
(2, 'Mika', 'Mikic'),
(5, 'Pera', 'Peric'),
(6, 'Nikola', 'Nikolic');

INSERT INTO `zanr`
VALUES
(1, 'novel'),
(2, 'war-novel'),
(3, 'romance'),
(5, 'mystery');

INSERT INTO `zaduzenje`
VALUES
(1, '2023-06-04', 0, 5, 2),
(3, '2023-01-08', 1, 5, 1),
(4, '2023-05-29', 0, 2, 1),
(7, '2023-04-12', 1, 6, 6),
(8, '2022-12-01', 0, 6, 3);

INSERT INTO `knjige_has_zanr`
VALUES
(6, 2),
(1, 1),
(2, 1),
(3, 1),
(3, 5);

ALTER TABLE `zaduzenje` MODIFY COLUMN `vratio` BOOLEAN DEFAULT 0 NOT NULL;

