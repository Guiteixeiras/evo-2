<?php
//para não deixar passar sem fazer login
include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>

<body>
    Bem vindo ao Painel, <?php echo $_SESSION['nome'];
                            //puxa o nome do mysql e aparece no painel
                            ?>.

    <p>
        <a href="logout.php">Sair</a> <!-- volta para o index pelo link do logout -->
    </p>
</body>

</html>