<?php
    $banco = "projetointegrador";
    $usuario = "root";
    $senha = "";

    $conexao = mysqli_connect('localhost',$usuario,$senha,$banco);

    mysqli_set_charset($conexao,"utf8");
?>