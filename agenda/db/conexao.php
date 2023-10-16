<?php

include("config.php");

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO)
    or die("Não conectou a conexão meu padrão " . mysqli_connect_error());
