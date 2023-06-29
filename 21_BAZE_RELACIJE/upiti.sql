-- pravimo novu bazu
CREATE DATABASE drustvena_mreza;

-- pravimo tabelu korisnici
CREATE TABLE `korisnici` (
    `id` INT PRIMARY KEY,
    `korisnicko_ime` VARCHAR(45),
    `lozinka` VARCHAR(45)
);

-- pravimo tabelu profili
CREATE TABLE `profili` (
    `id` INT PRIMARY KEY,
    `adresa` VARCHAR(45),
    `telefon` VARCHAR(45),
    `korisnik_id` INT -- ovde smo zaboravili UNIQUE
);

-- dodajemo strani kljuc
ALTER TABLE `profili`
ADD FOREIGN KEY(`korisnik_id`) -- polje iz tabele profili
REFERENCES `korisnici`(`id`); 

-- STRANI KLJUC SE NIJE DODAO !!!! PROBLEM JE EGNINE = MYISAM
-- promena engine na INNODB
ALTER TABLE `profili` ENGINE=INNODB;
ALTER TABLE `korisnici` ENGINE=INNODB;

ALTER TABLE `profili` ADD UNIQUE(`korisnik_id`); 

INSERT INTO `korisnici` (`id`, `korisnicko_ime`, `lozinka`)
VALUES
(1, 'pera_peric', '1234'),
(2, 'mika_mikic', '12345'),
(5, 'nikola_nikolic', '1212');

INSERT INTO `profili` (`id`, `korisnik_id`, `adresa`)
VALUES
(1, 5, 'adresa korisnika id=5'),
(10, 2, 'adresa korisnika id=2');

-- ovo nije moguce jer nemamo korisnika sa id = 50
INSERT INTO `profili` (`id`, `korisnik_id`, `adresa`)
VALUES
(2, 50, 'adresa korisnika id=50');

-- VEZA 1:N
CREATE TABLE `objave` (
    `id` INT PRIMARY KEY,
    `naslov_objave` VARCHAR(45) NOT NULL 
)   ENGINE = INNODB;

CREATE TABLE `komentari` (
    `id` INT PRIMARY KEY,
    `tekst_komentara` VARCHAR(255) NOT NULL,
    `objave_id` INT NOT NULL
)   ENGINE = INNODB;

ALTER TABLE `komentari`
ADD CONSTRAINT `komentari_objava_fk`
FOREIGN KEY (`objave_id`)
REFERENCES `objave` (`id`)
ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO `objave` (`id`, `naslov_objave`)
VALUES
(1, 'Moja prva obajava'),
(2, 'Moja druga objava'),
(3, 'Moja treca objava');

INSERT INTO `komentari` (`id`, `tekst_komentara`, `objave_id`)
VALUES
(1, 'Komentar 1 za objavu 1', 1),
(2, 'Komentar 2 za objavu 1', 1),
(3, 'Komentar 1 za objavu 3', 3);

-- veza N:m
CREATE TABLE `kategorije` (
    `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `naziv` VARCHAR(45) NOT NULL
)   ENGINE = INNODB;

INSERT INTO `kategorije` (`id`, `naziv`)
VALUES
(1, 'Ekonomija'),
(null, 'Crna hrnoika');

INSERT INTO `kategorije` (`naziv`)
VALUES
('Ljubav'),
('Drustvo')
('Zdravlje');

CREATE TABLE `kategorije_has_objave` (
    `kategorija_id` INT(10) UNSIGNED NOT NULL,
    `objava_id` INT NOT NULL
);

ALTER TABLE `kategorije_has_objave`
ADD CONSTRAINT `kat_obj_kategorija_fk`
FOREIGN KEY (`kategorija_id`)
REFERENCES `kategorije`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `kat_obj_objava_fk`
FOREIGN KEY (`objava_id`)
REFERENCES `objave`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `kategorije_has_objave` ENGINE=INNODB;

INSERT INTO `kategorije_has_objave` (`kategorija_id`, `objava_id`)
VALUES
(1, 1),
(5, 1),
(2, 2),
(4, 2),
(1, 3);
