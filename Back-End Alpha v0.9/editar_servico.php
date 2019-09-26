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

        echo "Editando o produto".$produto."<br/>";

        $consulta = "select * from produtos where codproduto = $produto";

        $linha = $conexao->query($consulta);

        if($linha->num_rows > 0){
            echo "<form method='post' action='editarproduto.php'>";
            while($row = $linha->fetch_assoc()){
                echo "<label>Código do Produto</label>
                <input type='text' name='codproduto' value='".$row["codproduto"]."' readonly/><br/>";
                
                echo "<label>Nome do Produto</label>
                <input type='text' name='nomeproduto' value='".$row["nomeproduto"]."'/><br/>";
                
                echo "<label>Cor do Produto</label>
                <input type='text' name='corproduto' value='".$row["corproduto"]."'/><br/>";
                
                echo "<label>Quantidade</label>
                <input type='text' name='quantidade' value='".$row["quantidade"]."'/><br/>";
                
                echo "<label>Valor Unitário</label>
                <input type='text' name='valor' value='".$row["valor"]."'/><br/>";
                
                echo "<input type='submit' value='Editar'/>";
            }
            echo "</form>";
        }else{
            echo "Informações não encontradas!";
        }
    ?>
</body>
</html>