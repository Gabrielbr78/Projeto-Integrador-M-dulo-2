<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta de Ordens de Serviço</title>
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

        $nome_cliente = $_POST["nomecliente"];

        $busca = mysqli_query($conexao, "select * from pedidos where nome like '$nome_cliente%'");

        if(!$busca){
            echo "<script>
                    alert ('Dados não encontrados!')
                    location.href = 'ver.php'
            </script>";
        }else{
            echo "<table class='table table-striped table-dark'>";
            echo "<tr>
                    <th scope='col'>Código do Pedido</th>
                    <th scope='col'>Tipo de Pessoa</th>
                    <th scope='col'>Nome</th>
                    <th scope='col'>CPF/CNPJ</th>
                    <th scope='col'>Telefone</th>
                    <th scope='col'>Nome do Contato</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Serviço</th>
                    <th scope='col'>Descrição</th>
                </tr>";

                while($linha = mysqli_fetch_array($busca)){
                    echo "<tr>";
                    echo "<td>".$linha["cod_pedido"]."</td>
                    <td>".$linha["tipo_pessoa"]."</td>
                    <td>".$linha["nome"]."</td>
                    <td>".$linha["cpf_cnpj"]."</td>
                    <td>".$linha["telefone"]."</td>
                    <td>".$linha["nome_contato"]."</td>
                    <td>".$linha["email"]."</td>
                    <td>".$linha["servico"]."</td>
                    <td>".$linha["descricao"]."</td>
                    <td><a href='editar_servico.php?cod_pedido=".$linha["cod_pedido"]."' >Editar</a> 
                    <a href='excluir_servico.php?cod_pedido=".$linha["cod_pedido"]."'>Excluir</a></td>";
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