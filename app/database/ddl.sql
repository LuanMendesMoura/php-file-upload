CREATE DATABASE arquivosdb;
USE arquivosdb;

CREATE TABLE imagens (
    id  INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    nome_original VARCHAR(255) NOT NULL,
    data_envio DATETIME DEFAULT CURRENT_TIMESTAMP,
    caminho VARCHAR(255) NOT NULL
);

INSERT INTO imagens (nome, nome_original, caminho)
VALUES  ("TESTE 1", "TESTE 1", "pasta/teste/teste")

