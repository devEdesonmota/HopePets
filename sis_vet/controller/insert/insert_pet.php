<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_vet";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

$name_pet = $_POST['name_pet'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];
$idade = $_POST['idade'];
$genero = $_POST['genero'];
$cor = $_POST['cor'];
$foto = $_POST['foto'];
$description = $_POST['description'];

$sql = "INSERT INTO tabela_pet (name_pet, especie, raca, idade, genero, cor, foto, description)
VALUES ('$name_pet', '$especie', '$raca', '$idade', '$genero', '$cor', '$foto', '$description')";

if ($conn->query($sql) === TRUE) {
  echo "Novo registro criado com sucesso";
  header('Location: ../../view/home/home_view.php');
  exit;
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>