<?php

$dsn = "mysql:host=localhost;dbname=teste";
$username = "root";
$password = "123";

try{
    $pdo = new PDO($dsn, $username, $password);

    // Define o modo de eros como exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado ao banco com sucesso!";
} catch (PDOException $e) {
    echo "Falha na conexão com o banco de dados" . $e->getMessage();
}