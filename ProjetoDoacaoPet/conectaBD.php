<?php
// endereco
// nome do BD
// usuario
// senha
$endereco = 'localhost';
$banco = 'projetodoacaopet';
$usuario = 'postgres';
$senha = 'postgres';
//
// Comando para criar tabela no terminal:
// CREATE TABLE usuario(id_usuario SERIAL NOT NULL, nome VARCHAR(255) NOT NULL, data_nascimento VARCHAR(255) NOT NULL, telefone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, senha VARCHAR(255) NOT NULL, CONSTRAINT pk_id_usuario PRIMARY KEY(id_usuario));
//
try {
    // sgbd:host;port;dbname
    // usuario
    // senha
    // errmode
    $pdo = new PDO(
        "pgsql:host=$endereco;port=5432;dbname=$banco",
        $usuario,
        $senha,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo "Conectado no banco de dados!!!";
} catch (PDOException $e) {
    echo "Falha ao conectar ao banco de dados. <br/>";
    die($e->getMessage());
}

