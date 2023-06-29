CREATE DATABASE fakultet CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE `predmeti`(
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(25) NOT NULL,
    `smer` VARCHAR(25) NOT NULL
)   ENGINE = INNODB;

CREATE TABLE `studenti`(
    `indeks` VARCHAR(20) PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(60) NOT NULL
)   ENGINE = INNODB;

CREATE TABLE `ispiti`(
    `id` INT PRIMARY KEY,
    `datum` DATE NOT NULL,
    `ocena` TINYINT(2) NOT NULL,
    `student_indeks` VARCHAR(20) NOT NULL,
    `predmet_id` INT NOT NULL,
    `nastavnik_id` INT NOT NULL
)   ENGINE = INNODB;

CREATE TABLE `nastavnici`(
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(60) NOT NULL
)   ENGINE = INNODB;

ALTER TABLE `ispiti`
ADD CONSTRAINT `ispiti_studenti_fk`
FOREIGN KEY(`student_indeks`)
REFERENCES `studenti`(`id`)
ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `ispiti_predmeti_fk`
FOREIGN KEY(`predmet_id`)
REFERENCES `predmeti`(`id`)
ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `ispiti_nastavnik_fk`
FOREIGN KEY(`nastavnik_id`)
REFERENCES'nastavnici'(`id`)
ON DELETE NO ACTION ON UPDATE NO ACTION;



SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`, 
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks` = `studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` = `predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id` = `nastavnici`.`id`;

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`, 
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks` = `studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` = `predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id` = `nastavnici`.`id`
WHERE `ispiti`.`datum` = '2023-05-15';

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`, 
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks` = `studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` = `predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id` = `nastavnici`.`id`
WHERE `studenti`.`ime` = 'Nikola' AND `studenti`.`prezime` = 'Mitrovic';

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`, 
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks` = `studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` = `predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id` = `nastavnici`.`id`
WHERE `studenti`.`ime` = 'Nikola' AND `studenti`.`prezime` = 'Mitrovic' AND `ispiti`.`ocena` > 8;

-- Za dat naziv predmeta odrediti maksimalnu ocenu na nekom ispitu iz tog predmeta.
SELECT MAX(`ispiti`.`ocena`) AS `max_ocena`, `predmeti`.`naziv`
FROM `ispiti`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` = `predmeti`.`id`
WHERE `predmet`.`naziv` = 'Css' AND `ispiti`.`datum` = '2023-04-17';

-- Za dato ime i prezime studenta, odrediti njegovu prosecnu ocenu.
SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `studenti`, AVG(`ispiti`.`ocena`) AS `prosecna_ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks` = `studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` = `predmeti`.`id`
WHERE `studenti`.`ime` = 'Nikola' AND `studenti`.`prezime` = 'Devic' AND `ispiti`.`ocena` > 5;

-- Za dat datum i nastavnika odrediti prosecnu ocenu svih ispitia koji su se polagali tog dana a koje je ocenio taj nastavnik.
SELECT `ispiti`.`datum`, CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS `nastavnici`, AVG(`ispiti`.`ocena`) AS `prosecna_ocena`
FROM `ispiti`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id` = `nastavnici`.`id`
WHERE `nastavnici`.`ime` = 'Stefan' AND `nastavnici`.`prezime` =  'Stanimirovic' AND `ispiti`.`datum` = '2023-04-17' AND `ispiti`.`ocena` > 5;

-- Za dati datum ispisati imena i prezimena studenata koji nisu polagali ispit tog dana
-- SELECT `ispiti`.`datum`, CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`)
-- FROM `ispiti`
-- LEFT JOIN `studenti` ON `ispiti`.`student_indeks` = `studenti`.`indeks`
-- WHERE `ispiti`.`datum` = '2023-04-17' AND `studenti`.`indeks` != `ispiti`.`student_indeks`;

SELECT * 
FROM `studenti`
WHERE `studenti`.`indeks` NOT IN (SELECT `ispiti`.`student_indeks` FROM `ispiti` WHERE `ispiti`.`datum` = '2023-05-18');

SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`)
FROM `studenti`
LEFT JOIN `ispiti` ON `ispiti`.`student_indeks` = `studenti`.`indeks` AND `ispiti`.`datum` = '2023-05-18'
WHERE `ispiti`.`id` IS NULL;
