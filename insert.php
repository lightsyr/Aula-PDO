<?php
include("connection.php");

 // Consulta SQL com parâmetros
 $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
    
 // Preparando a consulta
 $stmt = $pdo->prepare($sql);

 // Definindo os valores dos parâmetros
 $nome = "João Silva";
 $email = "joao.silva@exemplo.com";
 $senha = password_hash("senha123", PASSWORD_DEFAULT); // Criptografando a senha

 // Vinculando os parâmetros aos valores
 $stmt->bindParam(':nome', $nome);
 $stmt->bindParam(':email', $email);
 $stmt->bindParam(':senha', $senha);

 // Executando o comando
 $stmt->execute();