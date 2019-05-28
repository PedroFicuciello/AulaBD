<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "time";

$codigo = $_POST['campo1'];
$nome = $_POST['campo2'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("ERRO NA CONEXAO: " . $conn->connect_error);
} 

$sql = "INSERT INTO time (codigo, nome) VALUES ($codigo, '$nome')";

if ($conn->query($sql) === TRUE) {
    echo "DADOS INCLUIDOS COM SUCESSO";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>