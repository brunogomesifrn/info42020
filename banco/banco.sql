CREATE TABLE Usuario (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
apelido VARCHAR(30) NOT NULL,
usuario VARCHAR(30) NOT NULL,
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

CREATE TABLE Categorias_Produtos (
id INT AUTO_INCREMENT PRIMARY KEY,
id_categorias int NOT NULL,
id_produtos int NOT NULL,
FOREIGN KEY (id_categorias) REFERENCES Fornecedores(id),
FOREIGN KEY (id_produtos) REFERENCES Produtos(id)
);