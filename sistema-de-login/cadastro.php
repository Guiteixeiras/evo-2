<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Se cadastre</h1>

    <form class="teste" action="cadastrop.php" method="POST">
        <p>
            <label>Nome</label>
            <input type="text" name="nome" id="nome" placeholder="coloque seu nome">
        </p>
        <p>
            <label>Email</label>
            <input type="text" name="email" id="email" placeholder="coloque um email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" id="senha" placeholder="escolha uma senha">
        </p>
        <div class="arruma">
            <p>
                <button type="submit" href="index.php">Registrar</button>
            </p>
            <p>
                <a href="logout.php">Sair</a>
            </p>
        </div>
    </form>
</body>

</html>