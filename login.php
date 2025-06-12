<?php
session_start();
include_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $stmt = $conexao->prepare("SELECT id, nome, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario'] = $usuario['nome'];
            header("Location: paginiuser.php");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberGram | Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.webp" type="image/x-icon">
</head>
<body>
    <h1>Entre na sua conta</h1>
    <form action="paginiuser.php" method="post">
        <label for="nome">Nome de Usuário ou Email</label>
        <input type="email" name="email" placeholder="ex:fulanodetal@email.com">
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha...">
        <input type="submit" placeholder="Entrar">
    </form>
    <h2>Não tem uma conta?</h2>
    <a href="cadastro.html" target="_blank">Cadastre-se</a>
</body>
</html>