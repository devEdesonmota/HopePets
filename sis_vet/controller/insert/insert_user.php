<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_vet";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$estado_civil = $_POST['estado_civil'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO tabela_pessoa (nome, cpf, rg, estado_civil, cep, endereco, bairro, cidade, uf, telefone, email, senha)
VALUES ('$nome', '$cpf', '$rg', '$estado_civil', '$cep', '$endereco', '$bairro', '$cidade', '$uf', '$telefone', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
  echo "Novo registro criado com sucesso";
  header('Location: ../../view/home/home_view.php');
  exit;
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>