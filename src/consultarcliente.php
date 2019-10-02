<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta de Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/animate.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="../css/estiloprojeto.css" type="text/css">
</head>
            <body>
            <?php
                include "conexao.php";

                $buscacpf = $_POST["cpfcliente"];
                $buscanome = $_POST["nomecliente"];

                if(isset($_POST["buscarnome"])){
                    
                    $busca = mysqli_query($conexao, "select * from clientes where nome like '$buscanome%'");

                    if(!$busca){
                        echo "<script>
                                alert ('Dados não encontrados!')
                                location.href = 'consultarcliente.html'
                        </script>";
                    }else{
                        echo "<table class='table table-striped table-dark'>";
                        echo "<tr>
                                <th scope='col'>Código</th>
                                <th scope='col'>Nome</th>
                                <th scope='col'>CPF</th>
                                <th scope='col'>Sexo</th>
                                <th scope='col'>Data de Nascimento</th>
                                <th scope='col'>Endereço</th>
                                <th scope='col'>Número</th>
                                <th scope='col'>Bairro</th>
                                <th scope='col'>Cidade</th>
                                <th scope='col'>CEP</th>
                                <th scope='col'>UF</th>
                                <th scope='col'>Telefone</th>
                                <th scope='col'>Celular</th>
                                <th scope='col'>Email</th>
                                <th scope='col'>Como nos conheceu?</th>
                            </tr>";

                            while($linha = mysqli_fetch_array($busca)){
                                echo "<tr>";
                                echo "<td>".$linha["cod_cliente"]."</td>
                                <td>".$linha["nome"]."</td>
                                <td>".$linha["cpf"]."</td>
                                <td>".$linha["sexo"]."</td>
                                <td>".$linha["datanasc"]."</td>
                                <td>".$linha["endereco"]."</td>
                                <td>".$linha["numero"]."</td>
                                <td>".$linha["bairro"]."</td>
                                <td>".$linha["cidade"]."</td>
                                <td>".$linha["cep"]."</td>
                                <td>".$linha["uf"]."</td>
                                <td>".$linha["telefone"]."</td>
                                <td>".$linha["celular"]."</td>
                                <td>".$linha["email"]."</td>
                                <td>".$linha["como_conheceu"]."</td>";
                                echo "<tr>";
                            }
                            echo "</table>";
                    }
                }

                if(isset($_POST["buscarcpf"])){
                    
                    $busca = mysqli_query($conexao, "select * from clientes where cpf ='$buscacpf'"); 
                    
                    if(!$busca){
                        echo "<script>
                                alert ('Dados não encontrados!')
                                location.href = 'consultarcliente.html'
                        </script>";
                    }else{
                        echo "<table border = '1'>";
                        echo "<tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Sexo</th>
                                <th>Data de Nascimento</th>
                                <th>Endereço</th>
                                <th>Número</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                                <th>CEP</th>
                                <th>UF</th>
                                <th>Telefone</th>
                                <th>Celular</th>
                                <th>Email</th>
                                <th>Como nos conheceu?</th>
                            </tr>";

                            while($linha = mysqli_fetch_array($busca)){
                                echo "<tr>";
                                echo "<td>".$linha["cod_cliente"]."</td>
                                <td>".$linha["nome"]."</td>
                                <td>".$linha["cpf"]."</td>
                                <td>".$linha["sexo"]."</td>
                                <td>".$linha["datanasc"]."</td>
                                <td>".$linha["endereco"]."</td>
                                <td>".$linha["numero"]."</td>
                                <td>".$linha["bairro"]."</td>
                                <td>".$linha["cidade"]."</td>
                                <td>".$linha["cep"]."</td>
                                <td>".$linha["uf"]."</td>
                                <td>".$linha["telefone"]."</td>
                                <td>".$linha["celular"]."</td>
                                <td>".$linha["email"]."</td>
                                <td>".$linha["como_conheceu"]."</td>";
                                echo "<tr>";
                            }
                            echo "</table>";
                    }
                }
            ?>
            <!--Bootstrap JavaScript-->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                            <!--=========================================================================================================-->
            </body>
</html>