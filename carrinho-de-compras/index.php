<?php

if (isset($_GET['id'])) {
    $id = strip_tags($_GET['id']);
    var_dump($id);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
</head>

<body>
    <ul>
        <li>geladeira <a href="?add=1">Add</a>R$ 1000</li>
        <li>mouse <a href="?add=2">Add</a>R$ 100</li>
        <li>teclado <a href="?add=3">Add</a>R$ 190</li>
        <li>comoda <a href="?add=4">Add</a>R$ 300</li>
    </ul>
</body>

</html>