<?php
    include "conexao.php";

    $tipo_pessoa = $_POST["tipopessoa"];
    $identificacao = $_POST["identificacao"];
    $registro = $_POST["registro"];
    $telefone = $_POST["telefone"];
    $nome_contato = $_POST["nome_contato"];
    $email = $_POST["email"];
    $servico = $_POST["servico"];
    $descricao = $_POST["descricao"];

    $enviar = mysqli_query($conexao, "insert into pedidos(tipo_pessoa,nome,cpf_cnpj,telefone,nome_contato,email,servico,descricao)values('$tipo_pessoa','$identificacao','$registro','$telefone','$nome_contato','$email','$servico','$descricao')");

    if($enviar){
        echo "<script>
            alert('Ordem de Serviço Cadastrada Com Sucesso!')
            location.href = 'contratar_servico.html'
        </script>";
    }else{
        echo "<script>
            alert('Erro ao cadastrar ordem de serviço!')
            location.href = 'contratar_servico.html'
        </script>"; 
    }
?>