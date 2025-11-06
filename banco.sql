CREATE DATABASE sistema;
USE sistema;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    telefone VARCHAR(20)
);

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2),
    estoque INT,
    categoria VARCHAR(50)
);

INSERT INTO produtos (nome, preco, estoque, categoria) VALUES 
('Notebook Dell', 2500.00, 10, 'Informática'),
('Mouse Logitech', 45.90, 25, 'Periféricos'),
('Teclado Mecânico', 299.99, 15, 'Periféricos');