<?php
        include "conexao.php";

        $candidato = $_GET["cod_curriculo"];

        $excluir = mysqli_query($conexao, "delete from curriculos where cod_curriculo = $candidato");

        if($excluir){
            echo "<script>
                alert ('Candidato excluído com sucesso!')
                location.href = 'consulta_curriculo.html'
            </script>";
        }else{
            echo "<script>
                alert ('Erro ao excluir candidato!')
                location.href = 'consulta_curriculo.html'
            </script>";
        }
?>
