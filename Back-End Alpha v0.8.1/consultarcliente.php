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