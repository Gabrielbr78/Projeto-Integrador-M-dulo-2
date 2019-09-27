<?php
    include "conexao.php";

    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $erro = 0;

    if(empty($login)){
        echo "<script>
            alert('Login em branco!')
        </script>";
        echo "<script>location.href = 'loginarearestrita.html'</script>";
        $erro = 1;
    }

    if(empty($senha)){
        echo "<script>
                alert('Senha em branco!')
            </script>";
        echo "<script>location.href = 'loginarearestrita.html'</script>";
        $erro = 1;
    }

    if($erro == 0){

    $logar = mysqli_query($conexao, "select * from usuarios where login = '$login' and senha = '$senha'");

    $linha = mysqli_fetch_array($logar);

    if($linha == 0){
        echo "<script>
            alert('Login ou senha incorretos!')
            location.href = 'loginarearestrita.html'
        </script>";
    }else{
        echo "<script>
            alert('Sucesso!')
            location.href = 'menu_admin.html'
        </script>"; 
    }
}
?>