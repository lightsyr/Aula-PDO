<?php 
include("connection.php");

// Consulta SQL para atualizar dados
$sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
    
// Preparando a consulta
$stmt = $pdo->prepare($sql);

// Definindo os valores dos parâmetros
$nome = "Carlos Silva";
$email = "carlos.silva@exemplo.com";
$id = 1; // Supondo que estamos atualizando o usuário com ID 1

// Vinculando os parâmetros aos valores
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':id', $id);

// Executando o comando
$stmt->execute();

echo "Dados do usuário atualizados com sucesso!";