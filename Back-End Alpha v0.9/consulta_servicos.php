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
            echo "<table border = '1'>";
            echo "<tr>
                    <th>Código do Pedido</th>
                    <th>Tipo de Pessoa</th>
                    <th>Nome</th>
                    <th>CPF/CNPJ</th>
                    <th>Telefone</th>
                    <th>Nome do Contato</th>
                    <th>Email</th>
                    <th>Serviço</th>
                    <th>Descrição</th>
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
                    <td><a href='editar.php?cod_pedido=".$linha["cod_pedido"]."' >Editar</a> 
                    <a href='excluir.php?cod_pedido=".$linha["cod_pedido"]."'>Excluir</a></td>";
                    echo "<tr>";
                }
                echo "</table>";
        }
    ?>