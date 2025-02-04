<?php
session_start();
require 'config.php';


// Verificar login e perfil
// Painel do usuário normal
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare('SELECT perfil FROM clientes WHERE id = ?');
    $stmt->execute([$user_id]);
    $user = $stmt->fetch();

    if ($user['perfil'] !== 'normal') {
        header('Location: index.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Normal</title>
    <link rel="stylesheet" href="../sisUser/css/perfil.css">
</head>
<body>
    <h1>Olá Usuário Normal!</h1>
    <a href="logout.php">Sair</a>
</body>
</html>
