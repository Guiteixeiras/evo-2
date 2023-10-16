<header>
    <h3>Inserir Contato</h3>
</header>

<?php

$nomeContato = /*esse função limpa a string de caracteres invalidos para irem para o banco de dados*/ mysqli_escape_string($conexao, $_POST["nomeContato"]);
$emailContato = mysqli_escape_string($conexao, $_POST["emailContato"]);
$telefoneContato = mysqli_escape_string($conexao, $_POST["telefoneContato"]);
$sexoContato = mysqli_escape_string($conexao, $_POST["sexoContato"]);
$dataNascContato = mysqli_escape_string($conexao, $_POST["dataNascContato"]);
$sql = "INSERT INTO tbcontatos (
    nomeContato,
    emailContato,
    telefoneContato,
    sexoContato,
    dataNascContato)
VALUES(
    '{$nomeContato}',
    '{$emailContato}', 
    '{$telefoneContato}', 
    '{$sexoContato}', 
    '{$dataNascContato}'
)
";
mysqli_query($conexao, $sql) or die("Não executou a consulta. " . mysqli_error($conexao));

echo "O registro deu certo.";

?>