<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "time";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("ERRO NA CONEXAO: " . $conn->connect_error);
} 

$codigo = $_POST['campo1'];

$sql = "DELETE FROM time WHERE codigo = $codigo"; 

if ($conn->query($sql) === TRUE) {
    echo "DADOS INCLUIDOS COM SUCESSO";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>