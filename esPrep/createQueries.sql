CREATE TABLE `attore` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(20) DEFAULT NULL,
    `cognome` varchar(20) DEFAULT NULL,
    PRIMARY KEY (`id`)
);
CREATE TABLE `film` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `titolo` varchar(20) DEFAULT NULL,
    `anno` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`)
);
CREATE TABLE `genere` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(20) DEFAULT NULL,
    PRIMARY KEY (`id`)
);
CREATE TABLE `recita` (
    `fkAttore` int(11) NOT NULL,
    `fkFilm` int(11) NOT NULL,
    PRIMARY KEY (`fkAttore`, `fkFilm`),
    FOREIGN KEY (`fkAttore`) REFERENCES `attore` (`id`),
    FOREIGN KEY (`fkFilm`) REFERENCES `film` (`id`)
);
CREATE TABLE `appartiene` (
    `fkFilm` int(11) NOT NULL,
    `fkGenere` int(11) NOT NULL,
    PRIMARY KEY (`fkFilm`, `fkGenere`),
    FOREIGN KEY (`fkGenere`) REFERENCES `genere` (`id`),
    FOREIGN KEY (`fkFilm`) REFERENCES `film` (`id`)
);