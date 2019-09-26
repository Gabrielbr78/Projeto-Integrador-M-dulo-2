<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD - PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Excluir Produto</h1>
    <?php
        include "conexao.php";

        $produto = $_GET["codproduto"];

        echo "Excluir o produto de código ".$produto."?<br/>";

        echo "<a href='deletar.php?codproduto=".$produto."'>Sim<a/><br/><br/>";
        echo "<a href='ver.php'>Não</a>";

    ?>
</body>
</html>