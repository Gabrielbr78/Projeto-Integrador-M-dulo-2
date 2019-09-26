<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD - PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        include "conexao.php";

        $produto = $_GET["codproduto"];

        $excluir = mysqli_query($conexao, "delete from produtos where codproduto = $produto");

        if($excluir){
            echo "<script>
                alert ('Produto excluído com sucesso!')
                
            </script>";
        }else{
            echo "<script>
                alert ('Erro ao excluir produto!')
                
            </script>";
        }
    ?>
</body>
</html>