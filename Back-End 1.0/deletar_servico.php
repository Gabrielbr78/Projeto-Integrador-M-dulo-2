<?php
        include "conexao.php";

        $pedido = $_GET["cod_pedido"];

        $excluir = mysqli_query($conexao, "delete from pedidos where cod_pedido = $pedido");

        if($excluir){
            echo "<script>
                alert ('Produto excluído com sucesso!')
                location.href = 'consulta_servicos.html'
            </script>";
        }else{
            echo "<script>
                alert ('Erro ao excluir produto!')
                location.href = 'consulta_servicos.html'
            </script>";
        }
?>