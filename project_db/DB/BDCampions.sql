--
-- Base de datos (campions)
--
CREATE DATABASE IF NOT EXISTS `campions`
DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `campions`;

-- Tabla de jugadores
CREATE TABLE jugador(
    id varchar(2) NOT NULL,
    nombre varchar(10) NOT NULL,
    nivel int NULL,
    fecha varchar(10) NOT NULL,
    PRIMARY KEY (id)
);

-- Tabla campeones
CREATE TABLE campeon(
    id varchar (2) NOT NULL,
    nombre varchar(10) NOT NULL,
    tipo varchar(10) NOT NULL,
    precio int NULL,
    fecha varchar(10) NOT NULL,
    UNIQUE(nombre),
    PRIMARY KEY (id)
);

-- Tabla batallas
CREATE TABLE batalla(
    idJugador varchar(2) NOT NULL,
    idCampeon varchar(2) NOT NULL,
    cantidad int NOT NULL,
    FOREIGN KEY (idJugador) REFERENCES jugador(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (idCampeon) REFERENCES campeon(id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE,
    PRIMARY KEY (idJugador, idCampeon)
)