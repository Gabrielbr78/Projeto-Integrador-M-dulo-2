<?php
        include "conexao.php";

        $nome = $_POST["nome_curriculo"];
        $email = $_POST["email_curriculo"];
        $areainteresse = $_POST["area_interesse"];
        $codcurriculo = $_POST["cod_curriculo"];

        $editar = mysqli_query($conexao, "update curriculos set nome_curriculo = '$nome',email_curriculo = '$email',area_interesse = '$areainteresse' where cod_curriculo = $codcurriculo");
        
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
