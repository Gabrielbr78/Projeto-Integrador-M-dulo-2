<?php
        include "conexao.php";

        $servico = $_GET["cod_pedido"];

        echo "Editando o pedido ".$servico."<br/>";

        $consulta = "select * from pedidos where cod_pedido = $servico";

        $linha = $conexao->query($consulta);

        if($linha->num_rows > 0){
            echo "<form method='post' action='editar_s.php'>";
            while($row = $linha->fetch_assoc()){
                echo "<label>Código do Pedido</label>
                <input type='text' name='cod_pedido' value='".$row["cod_pedido"]."' readonly/><br/>";
                
                echo "<label>Tipo de Pessoa</label>
                <input type='text' name='tipo_pessoa' value='".$row["tipo_pessoa"]."'/><br/>";
                
                echo "<label>Nome</label>
                <input type='text' name='nome' value='".$row["nome"]."'/><br/>";
                
                echo "<label>CPF/CNPJ</label>
                <input type='text' name='cpf_cnpj' value='".$row["cpf_cnpj"]."'/><br/>";
                
                echo "<label>Telefone</label>
                <input type='text' name='telefone' value='".$row["telefone"]."'/><br/>";

                echo "<label>Nome do Contato</label>
                <input type='text' name='nome_contato' value='".$row["nome_contato"]."'/><br/>";

                echo "<label>Email</label>
                <input type='text' name='email' value='".$row["email"]."'/><br/>";
                
                echo "<label>Serviço</label>
                <input type='text' name='servico' value='".$row["servico"]."'/><br/><br/>";

                echo "<label>".$row["descricao"]."</label><br/><br/>
                <textarea name='descricao' cols='30' rows='10' style='resize: none;' maxlength='500'></textarea><br/>";
                
                echo "<input type='submit' value='Editar'/>";
            }
            echo "</form>";
        }else{
            echo "Informações não encontradas!";
        }
?>
