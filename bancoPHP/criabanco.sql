CREATE DATABASE IF NOT EXISTS `exemplo`;
USE `exemplo`;

CREATE TABLE Pessoa(
	idPessoa INTEGER NOT NULL AUTO_INCREMENT,
	Nome VARCHAR(100),
	Idade INTEGER,
	Altura FLOAT,
	Peso FLOAT,
	PRIMARY KEY (idPessoa)
);

INSERT INTO Pessoa (Nome, Idade, Altura, Peso) VALUES
('Vinicius', 18, 1.78, 64.5),
('Matheus', 18, 1.83, 112.3),
('Guilherme', 19, 1.76, 59.4);
