<?php

// 2° passo 


// O arquivo config.php é considerado a base de informações para os demais arquivos

// Configurações do banco de dados
$host = 'localhost';   // Endereço do servidor MySQL
$db   = 'ludofashion'; // Nome do banco de dados
$user = 'root';        // Nome de usuário do MySQL
$pass = '';            // Senha do MySQL

// Conexão com o banco de dados usando PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    // Em caso de falha, exibe mensagem de erro.
    echo 'Conexão falhou: ' . $e->getMessage();
}
?>
