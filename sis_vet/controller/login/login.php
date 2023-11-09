<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_vet";

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tabela_pessoa WHERE email = '$email' AND senha = '$senha'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    echo "Login bem-sucedido! Bem-vindo, $email.";
    header('Location: ../../view/home/home_view.php');
    exit;
} else {
    echo "Nome de usuário ou senha incorretos.";
}
$conexao->close();
?>