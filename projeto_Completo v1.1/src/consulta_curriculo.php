<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta de Candidatos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/animate.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/estiloprojeto.css" type="text/css">
    <link rel="stylesheet" href="../css/animate.css" type="text/css">
</head>
<body>
<?php
    include "conexao.php";

    $nome = $_POST["nome"];

    $busca = mysqli_query($conexao, "select * from curriculos where nome_curriculo like '$nome%'");

    if(!$busca){
        echo "<script>
                alert ('Dados não encontrados!')
                location.href = 'consulta_curriculo.html'
        </script>";
    }else{
        echo "<table class='table table-striped table-dark'>";
            echo "<tr>
                    <th scope='col'>Código</th>
                    <th scope='col'>Nome</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Área de Interesse</th>
                </tr>";

                while($linha = mysqli_fetch_array($busca)){
                    echo "<tr>";
                    echo "<td>".$linha["cod_curriculo"]."</td>
                    <td>".$linha["nome_curriculo"]."</td>
                    <td>".$linha["email_curriculo"]."</td>
                    <td>".$linha["area_interesse"]."</td>
                    <td><a href='editar_candidatos.html?cod_curriculo=".$linha["cod_curriculo"]."' >Editar</a> 
                    <a href='excluir_candidatos.php?cod_curriculo=".$linha["cod_curriculo"]."'>Excluir</a></td>";
                    echo "<tr>";
                }
                echo "</table>";
        }
    
    
?>
<!--Bootstrap JavaScript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!--=========================================================================================================-->
</body>
</html>