CREATE TABLE Usuario (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
apelido VARCHAR(30) NOT NULL,
usuario VARCHAR(30) NOT NULL UNIQUE,
senha VARCHAR(20)
);

CREATE TABLE Categorias (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL
);

CREATE TABLE Fornecedores (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL
);

CREATE TABLE Produtos (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
id_fornecedores int,
FOREIGN KEY (id_fornecedores) REFERENCES Fornecedores(id)
);

CREATE TABLE Produtos_Categorias (
id INT AUTO_INCREMENT PRIMARY KEY,
id_produtos int NOT NULL,
id_categorias int NOT NULL,
FOREIGN KEY (id_produtos) REFERENCES Produtos(id),
FOREIGN KEY (id_categorias) REFERENCES Categorias(id)
);


INSERT INTO Usuario (nome, apelido, usuario, senha) VALUES
('Administrador', 'Admin', 'admin', '123');

ALTER TABLE Usuario MODIFY COLUMN senha CHAR(32);

ALTER TABLE Produtos ADD imagem VARCHAR(500) DEFAULT 'sem_imagem.png';
ALTER TABLE Produtos ADD data_fabricacao DATE;
ALTER TABLE Produtos ADD data_registro DATETIME;







