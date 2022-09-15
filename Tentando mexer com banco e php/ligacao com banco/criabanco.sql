CREATE DATABASE IF NOT EXISTS `exemplo`;

CREATE TABLE `Pessoa`(
    `idPessoa` INTEGER NOT NULL AUTO_INCREMENT,
    `Nome` VARCHAR(50),
    `Idade` INTEGER,
    PRIMARY KEY(`idPessoa`)
);

INSERT INTO `Pessoa`(Nome, Idade) VALUES
('Vinicius', 18),
('Júlio', 32),
('Matheus', 25);

CREATE TABLE `Trabalho`(
    `idTrabalho` INTEGER NOT NULL AUTO_INCREMENT,
    `Pessoa_idPessoa` INTEGER NOT NULL,
    `Profissão` VARCHAR(100),
    `Salário` INTEGER,
    PRIMARY KEY(`idTrabalho`),
    FOREIGN KEY(`Pessoa_idPessoa`) REFERENCES Pessoa(idPessoa)
);

INSERT INTO `Trabalho`(Pessoa_idPessoa, Profissão, Salário) VALUES
(1, 'Programador', 5000),
(2, 'Pedreiro', 3600),
(3, 'Engenheiro', 7500);