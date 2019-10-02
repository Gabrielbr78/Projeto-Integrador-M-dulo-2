<?php
    include "conexao.php";

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    /*Verifica se o usuário já existe no banco*/

    $verifica = mysqli_query($conexao, "select * from usuarios where login = '$login'");
    $linha = mysqli_num_rows($verifica);

    /*Se não existir um usuário com esse login no banco, então é feito o cadastro*/
    
    if($linha == 0){
        $enviar = mysqli_query($conexao,"insert into usuarios(login, senha)values('$login', '$senha')");

        if($enviar){
        echo "<script>
            alert('Administrador cadastrado com sucesso!')
            location.href = 'cadastroadmin.html'
        </script>";
        }
    
    /*Caso contrário, será exibida uma mensagem de erro*/
    }else{
        echo "<script>
            alert('Já existe um administrador com esse nome!')
            location.href = 'cadastroadmin.html'
        </script>";
    }
?>