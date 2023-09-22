<?php

include_once("conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

// echo "nome: $email <br>";
// echo "senha: $senha <br>";

$result_usuario = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if (mysqli_insert_id($mysqli)) {
    header("Location: index.php");
} else {
    header("Location: index.php");
}
