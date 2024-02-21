<?php
// endereco
// nome do BD
// admin
// senha
$endereco = 'localhost';
$banco = 'projetodoacaopet';
$admin = 'postgres';
$senha = 'postgres';
//
// Comando para criar tabela no terminal:
// CREATE TABLE admin(id_usuario SERIAL NOT NULL, nome VARCHAR(255) NOT NULL, data_nascimento VARCHAR(255) NOT NULL, telefone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, senha VARCHAR(255) NOT NULL, CONSTRAINT pk_id_usuario PRIMARY KEY(id_usuario), CONSTRAINT uk_email UNIQUE KEY (email));
//
try {
    // sgbd:host;port;dbname
    // admin
    // senha
    // errmode
    $pdo = new PDO(
        "pgsql:host=$endereco;port=5432;dbname=$banco",
        $admin,
        $senha,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    echo "Falha ao conectar ao banco de dados. <br/>";
    die($e->getMessage());
}

