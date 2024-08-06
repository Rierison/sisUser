<?php

// 3° Passo

session_start();
require 'config.php'; // Inclui o arquivo de configuração

// Verificar login dos clientes
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Prepara e executa a consulta para verificar o usuário
    $stmt = $pdo->prepare('SELECT perfil FROM clientes WHERE id = ?');
    $stmt->execute([$user_id]);
    $user = $stmt->fetch();

    // Com isso vai redirecionar para a página de dashboard conforme cada perfil
    if ($user['perfil'] === 'administrador') {
        header('Location: dashboard_admin.php');
    } else {
        header('Location: dashboard_normal.php');
    }
    exit();
} else {
    // Redirecionar para a página de login
    header('Location: login.php');
    exit();
}
?>



ola


