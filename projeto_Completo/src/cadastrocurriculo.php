<?php
    include "conexao.php";

    $nome = $_POST["nome"];
    $email = $_POST["e-mail"];
    $area_interesse = $_POST["area_interesse"];
    
    $verifica = mysqli_query($conexao, "select * from curriculos where email_curriculo = '$email'");
    $linha = mysqli_num_rows($verifica);
    
    if($linha == 0){

        $inserir = mysqli_query($conexao, "insert into curriculos(nome_curriculo, email_curriculo, area_interesse)values('$nome','$email','$area_interesse')");

        if($inserir){
            echo "<script>
                alert('Dados enviados com sucesso!')
                location.href = 'home.html'
            </script>";
        }
    }else{
        echo "<script>
            alert('Já existe um cadastro com este email!')
            location.href = 'home.html'
        </script>"; 
    }
?>