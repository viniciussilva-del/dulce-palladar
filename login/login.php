<?php
session_start();
require_once "../conexao/conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);
    $senha = trim($_POST['password']);

    // Busca o usuário pelo email
    $stmt = $conn->prepare("SELECT id, email, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        // Verifica a senha
        if (password_verify($senha, $usuario['senha'])) {
            // Salva dados na sessão
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_email'] = $usuario['email'];

            // Redireciona para a home
            header("Location: home.php");
            exit;
        } else {
            echo "<script>alert('Senha incorreta!'); window.location.href='form.html';</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado!'); window.location.href='form.html';</script>";
    }
}