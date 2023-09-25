<?php
//inclue a conexão com o mysql
include('conexao.php');

//se existir o post email ou o post senha começa o processo de login. Em seguida verificar se o email esta em branco
if (isset($_POST['email']) || isset($_POST['senha'])) {

    /*se o email estiver em branco vai aparecer a frase do echo senão verificar se a senha está em branco, caso esteja
    vai aparecer a frase do echo senão vai logar*/
    //resulmindo vai ver primeiro os 2 espaços e depois vai logar, coloquei dessa forma para ter cuidado por conta (SQL injetion)
    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        //aqui que começa o processo de verificar o login 
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        //ele seleciona todos os campos da tabela usuarios onde email é = a email e senha é = a senha
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        //vai rodar aq, quase não de certo vai morrer 
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        //vai retornar quantas linhas a consulta vai retornar 
        $quantidade = $sql_query->num_rows;

        //aqui ele vai tentar achar 
        if ($quantidade == 1) {

            //vai pegar os dados e vai jogar dentro de usuario
            $usuario = $sql_query->fetch_assoc();

            //se não existir sessão
            if (!isset($_SESSION)) {
                //começamos uma nova sessão
                session_start();
            }

            //na parte de sessão escolher por onde pegar ela, por id ou nome
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            //onde vai redirecionar 
            header("Location: painel.php");

            //caso o sistema não ache, ele vai dar o erro
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:blanchedalmond;">
    <h1 style="padding-bottom:25px;">Acesse sua conta</h1>
    <form class="desespero" action="" method="POST">
        <p>
            <label>Email</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" id="senha">
        </p>
        <div class="arruma">
            <p>
                <button class="botao1" type="submit">Entrar</button>
            </p>
            <p>
                <a class="botao2" href="cadastro.php">Se cadastre aqui</a>
            </p>
        </div>
    </form>
</body>

</html>