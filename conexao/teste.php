<?php
require_once 'conexao.php';  // Inclui seu arquivo de conexão

try {
    // Executa uma query simples só pra testar a conexão
    $stmt = $pdo->query("SELECT 1");
    $resultado = $stmt->fetch();

    if ($resultado) {
        echo "Conexão com o banco de dados funcionando! Resultado: " . $resultado[0];
    } else {
        echo "Conexão estabelecida, mas não retornou resultado esperado.";
    }
} catch (PDOException $e) {
    echo "Erro ao executar teste no banco: " . $e->getMessage();
}
