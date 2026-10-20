<?php
require_once 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

try {
    $sql = "SELECT * FROM usuario WHERE email = '$emai' AND senha = '$senha'";

    $stmt = $pdo->query($sql);
    $usuario = $stmt->fetch();

    if($usuario) {
        echo "<h2> Login efetuado com SUCESSO! Bem vido, " . $usuario['nome'] . "</h2>";
    } else {
        echo "<h2> E-mail ou senha incorretos!</h2>";
    }

} catch (Exception $e) {
    echo "Erro SQL: ". $e->getMessage();
}