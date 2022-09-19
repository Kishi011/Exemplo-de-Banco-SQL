CREATE DATABASE IF NOT EXISTS `sorveteria`;
USE `sorveteria`;

CREATE TABLE IF NOT EXISTS `Users`(
    id INTEGER NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(30),
    Email VARCHAR(50),
    Senha VARCHAR(16),
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS `Sorvetes`(
    id INTEGER NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(20),
    Descricao VARCHAR(100),
    Preco REAL,
    PRIMARY KEY (id)
);

