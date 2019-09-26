<?php
    include "conexao.php";

    $nome = $_POST["nome"];

    $busca = mysqli_query($conexao, "select * from curriculos where nome_curriculo = '$nome'");

    if(!$busca){
        echo "<script>
                alert ('Dados não encontrados!')
                location.href = 'consulta_curriculo.html'
        </script>";
    }else{
        echo "<table border = '1'>";
            echo "<tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Área de Interesse</th>
                </tr>";

                while($linha = mysqli_fetch_array($busca)){
                    echo "<tr>";
                    echo "<td>".$linha["cod_curriculo"]."</td>
                    <td>".$linha["nome_curriculo"]."</td>
                    <td>".$linha["email_curriculo"]."</td>
                    <td>".$linha["area_interesse"]."</td>";
                    echo "<tr>";
                }
                echo "</table>";
        }
    
    
?>