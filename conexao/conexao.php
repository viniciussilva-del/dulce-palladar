<?php
// Configuracao via variaveis de ambiente, com padroes para XAMPP local.
// Defina DB_PASS no seu ambiente; nunca versione senhas.
try {
    $dbname = getenv('DB_NAME') ?: 'dulce_palladar';
    $port   = getenv('DB_PORT') ?: '3306';
    $host   = getenv('DB_HOST') ?: 'localhost';
    $user   = getenv('DB_USER') ?: 'root';
    $senha  = getenv('DB_PASS') ?: '';

    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $user, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log('Erro de conexao com o banco: ' . $e->getMessage());
    echo "Nao foi possivel conectar ao banco de dados.";
    exit();
}
