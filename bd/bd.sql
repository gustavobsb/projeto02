DROP DATABASE IF EXISTS sisgafi;

CREATE DATABASE sisgafi;

USE sisgafi;

DROP TABLE IF EXISTS membro, receita, despesa, departamento, cargo, agenda;

SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE membro(
    id INTEGER AUTO_INCREMENT,
    nome VARCHAR (50) NOT NULL,
    nascimento DATE,
    sexo VARCHAR(30),
    celular VARCHAR(20),
    telefone VARCHAR(20),
    profissao VARCHAR(50),
    escolaridade VARCHAR(50),
    estado_civil VARCHAR(20),
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(65) NOT NULL,
    admin BOOLEAN DEFAULT FALSE NOT NULL,
    ativo BOOLEAN DEFAULT TRUE NOT NULL,
    id_departamento INT,
    id_cargo INT DEFAULT 1,
    CONSTRAINT pk_membro PRIMARY KEY(id),
    CONSTRAINT fk_departamento_membro FOREIGN KEY(id_departamento) REFERENCES departamento(id),
    CONSTRAINT fk_cargo_membro FOREIGN KEY(id_cargo) REFERENCES cargo(id)
);

CREATE TABLE receita(
    id INTEGER AUTO_INCREMENT,
    categoria VARCHAR(50),
    entrada DATE,
    valor FLOAT(10,2),
    origem VARCHAR(20),
    forma_pagamento VARCHAR(20),
    status VARCHAR(20),
    id_membro INT,
    CONSTRAINT pk_receita PRIMARY KEY(id),
    CONSTRAINT fk_membro_receita FOREIGN KEY(id_membro) REFERENCES membro(id)
);

CREATE TABLE despesa(
    id INTEGER AUTO_INCREMENT,
    categoria VARCHAR(50),
    entrada DATE,
    valor FLOAT(10,2),
    tipo VARCHAR(20),
    status VARCHAR(20),
    descricao VARCHAR(100),
    centro_custo VARCHAR(50),
    CONSTRAINT pk_despesa PRIMARY KEY(id)
);

CREATE TABLE departamento(
    id INTEGER AUTO_INCREMENT,
    nome_departamento VARCHAR(50),
    descricao VARCHAR(100),
    id_lider INT,
    CONSTRAINT pk_departamento PRIMARY KEY(id),
    CONSTRAINT fk_membro_departamento FOREIGN KEY(id_lider) REFERENCES membro(id)
);

CREATE TABLE cargo(
    id INTEGER AUTO_INCREMENT,
    nome_cargo VARCHAR(50),
    descricao VARCHAR(100),
    CONSTRAINT pk_cargo PRIMARY KEY(id)
);

INSERT INTO cargo (nome_cargo, descricao) VALUES ('Membro', 'Membro da Igreja');
INSERT INTO cargo (nome_cargo, descricao) VALUES ('Líder', 'Líder de Departamento');
INSERT INTO cargo (nome_cargo, descricao) VALUES ('Pastor', 'Pastor Presidente');

CREATE TABLE agenda (
  id INTEGER AUTO_INCREMENT,
  title VARCHAR(220) DEFAULT NULL,
  color VARCHAR(220) DEFAULT NULL,
  start DATETIME DEFAULT NULL,
  end DATETIME DEFAULT NULL,
  CONSTRAINT pk_agenda PRIMARY KEY(id)
);

-- Extrato
CREATE VIEW extrato
AS
SELECT d.categoria, d.entrada, d.valor, 'Despesa' AS tipo
FROM despesa d
UNION 
SELECT r.categoria, r.entrada, r.valor, 'Receita' AS tipo
FROM receita r
ORDER BY entrada desc;

CREATE TABLE recuperacao(
    email VARCHAR(100) NOT NULL,
    token VARCHAR(100) NOT NULL,
    CONSTRAINT pk_recuperacao PRIMARY KEY(email, token)
);

SET FOREIGN_KEY_CHECKS = 1;

-- Senha = a
INSERT INTO membro (id, nome, password, email, admin)
VALUES (1, 'Admin', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'admin@gmail.com', 1);



