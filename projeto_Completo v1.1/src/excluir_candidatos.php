<?php
        include "conexao.php";

        $candidato = $_GET["cod_curriculo"];

        echo "Excluir o candidato de código ".$candidato."?<br/>";

        echo "<a href='deletar_candidatos.php?cod_curriculo=".$candidato."'>Sim<a/><br/><br/>";
        echo "<a href='consulta_curriculo.html'>Não</a>";

    ?>
