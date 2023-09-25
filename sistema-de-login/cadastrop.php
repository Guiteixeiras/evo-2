<?php

//conectando no servidor do mysql
include_once("conexao.php");

//as funções puxadas
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

//testar o mysql
// echo "nome: $email <br>";1
// echo "senha: $senha <br>";


//oque está jogando no mysql
$result_usuario = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

//jogar para o index
if (mysqli_insert_id($mysqli)) {
    header("Location: index.php");
} else {
    header("Location: index.php");
}
