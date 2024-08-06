
-- 1° passo


-- Criação do banco de dados
CREATE DATABASE ludofashion;

-- Seleção do banco de dados
USE ludofashion;

-- Criação da tabela de usuários
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    usuario VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    telefone INT(11) NOT NULL UNIQUE,
    data_de_nascimento(DATE) NOT NULL,
    perfil ENUM('normal', 'administrador') DEFAULT 'normal',
);

-- Inserção do administrador inicial
INSERT INTO clientes (nome, usuario, email, senha, telefone, perfil) VALUES 
('Administrador', 'admin@exemplo.com', SHA2('senha_admin', 256), 'administrador');
