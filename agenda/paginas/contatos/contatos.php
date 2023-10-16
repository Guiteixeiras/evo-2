<header>
    <h3>aqui seria o contatos</h3>
</header>

<div>
    <a href="index.php?menuop=cadastro-contato">Novo Contato</a>
</div>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Sexo</th>
            <th>Dat de Nascimento</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM tbcontatos";
        $rs = mysqli_query($conexao, $sql) or die("Deu erro na consulta" . mysqli_error($conexao));
        while ($dados = mysqli_fetch_assoc($rs)) {


        ?>

            <tr>
                <td><?= $dados["idContato"] ?></td>
                <td><?= $dados["nomeContato"] ?></td>
                <td><?= $dados["emailContato"] ?></td>
                <td><?= $dados["telefoneContato"] ?></td>
                <td><?= $dados["sexoContato"] ?></td>
                <td><?= $dados["dataNascContato"] ?></td>
            </tr>

        <?php
        } //isso aq é top kkkkk usou a tag php só para fechar a chave
        ?>
    </tbody>
</table>