<?php
        include "conexao.php";

        $tipopessoa = $_POST["tipo_pessoa"];
        $nome = $_POST["nome"];
        $cpf_cnpj = $_POST["cpf_cnpj"];
        $telefone = $_POST["telefone"];
        $nome_contato = $_POST["nome_contato"];
        $email = $_POST["email"];
        $servico = $_POST["servico"];
        $descricao = $_POST["descricao"];
        $cod_pedido = $_POST["cod_pedido"];


        $editar = mysqli_query($conexao, "update pedidos set tipo_pessoa = '$tipopessoa',nome = '$nome',cpf_cnpj = '$cpf_cnpj', telefone = '$telefone', nome_contato = '$nome_contato', email = '$email', servico = '$servico', descricao = '$descricao' where cod_pedido = $cod_pedido");
        
        if($editar){
            echo "<script>
                alert ('Dados alterados com sucesso!')
                
               
            </script>";
        }else{
            echo "<script>
                alert ('Erro ao editar produto!')
                
            </script>";
        }

?>
