<?php
        include "conexao.php";

        $pedido = $_GET["cod_pedido"];

        echo "Excluir o pedido de código ".$pedido."?<br/>";

        echo "<a href='deletar_servico.php?cod_pedido=".$pedido."'>Sim<a/><br/><br/>";
        echo "<a href='consulta_servicos.html'>Não</a>";

?>