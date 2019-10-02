<?php
    include "conexao.php";

    $login_cliente = $_POST["login"];
    $senha_cliente = $_POST["senha"];

    $verifica = mysqli_query($conexao, "select * from logincliente where login_cliente = '$login_cliente'");
    $linha = mysqli_num_rows($verifica);

    if($linha == 0){
        $inserir = mysqli_query($conexao, "insert into logincliente(login_cliente,senha_cliente)values('$login_cliente','$senha_cliente')");

        if($inserir){
            echo "<script>
                alert('Usuário Criado com Sucesso!')
                location.href = 'logincliente.html'
            </script>";
        }else{
            echo "<script>
                alert('Ops! Houve um erro ao tentar efetuar o seu cadastro. Tente novamente.')
                location.href = 'cadastro_login_cliente.html'
            </script>";
        }
    }else{
        echo "<script>
                alert('Já existe um usuário cadastrado com esse nome! Tente Outro.')
                location.href = 'cadastro_login_cliente.html'
            </script>";
    }
?>