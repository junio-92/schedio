<?php 

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "Telefone: $telefone <br>";
//echo "Email: $email <br>";

$result_usuario = "INSERT INTO lenda(nome, telefone, email) VALUES ('$nome', '$telefone', '$email')";
$resultado_usuario = mysqli_query($conn, $result_usuario);
