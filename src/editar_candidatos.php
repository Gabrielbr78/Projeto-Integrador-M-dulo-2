<?php
        include "conexao.php";

        $candidato = $_GET["cod_curriculo"];

        echo "Editando o candidato ".$candidato."<br/>";

        $consulta = "select * from curriculos where cod_curriculo = $candidato";

        $linha = $conexao->query($consulta);

        if($linha->num_rows > 0){
            echo "<form method='post' action='editar_c.php'>";
            while($row = $linha->fetch_assoc()){
                echo "<label>Código do Candidato</label>
                <input type='text' name='cod_curriculo' value='".$row["cod_curriculo"]."' readonly/><br/>";
                
                echo "<label>Nome do Candidato</label>
                <input type='text' name='nome_curriculo' value='".$row["nome_curriculo"]."'/><br/>";
                
                echo "<label>Email</label>
                <input type='text' name='email_curriculo' value='".$row["email_curriculo"]."'/><br/>";
                
                echo "<label>Área de Interesse</label>
                <input type='text' name='area_interesse' value='".$row["area_interesse"]."'/><br/>";
                
                echo "<input type='submit' value='Editar'/>";
            }
            echo "</form>";
        }else{
            echo "Informações não encontradas!";
        }
?>
