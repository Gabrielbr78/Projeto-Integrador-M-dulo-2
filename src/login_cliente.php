<?php
    include "conexao.php";

    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $erro = 0;

    if(empty($login)){
        echo "<script>
            alert('Login em branco!')
        </script>";
        echo "<script>location.href = 'logincliente.html'</script>";
        $erro = 1;
    }

    if(empty($senha)){
        echo "<script>
                alert('Senha em branco!')
            </script>";
        echo "<script>location.href = 'logincliente.html'</script>";
        $erro = 1;
    }

    if($erro == 0){

    $logar = mysqli_query($conexao, "select * from logincliente where login_cliente = '$login' and senha_cliente = '$senha'");

    $linha = mysqli_fetch_array($logar);

    if($linha == 0){
        echo "<script>
            alert('Login ou senha incorretos!')
            location.href = 'logincliente.html'
        </script>";
    }else{
        echo "<script>
            alert('Bem vindo Sr.(a) $login!')
            location.href = 'menu_cliente.html'
        </script>"; 
    }
}
?>