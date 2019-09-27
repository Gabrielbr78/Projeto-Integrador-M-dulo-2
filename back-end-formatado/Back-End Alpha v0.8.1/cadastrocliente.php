<?php
    include "conexao.php";

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $sexo = $_POST["sexo"];
    $datanasc = $_POST["datanasc"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $cep = $_POST["cep"];
    $uf = $_POST["uf"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $email = $_POST["e-mail"];
    $como_conheceu = $_POST["comoconheceu"];

    $enviar = mysqli_query($conexao, "insert into clientes(nome, cpf, sexo, datanasc, endereco, numero, bairro, cidade, cep, uf, telefone, celular, email, como_conheceu)values('$nome','$cpf','$sexo','$datanasc','$endereco','$numero','$bairro','$cidade', '$cep','$uf','$telefone','$celular','$email','$como_conheceu')");

    if($enviar){
        echo "<script>
            alert('Cliente cadastrado com sucesso!')
            location.href = 'cadastrocliente.html'
        </script>";
    }else{
        echo "<script>
            alert('Erro ao cadastrar cliente!')
            location.href = 'cadastrocliente.html'
        </script>";
    }
?>