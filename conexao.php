<?php

    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="ponto_eletronico0";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
    if(!$conexao){
        die("Erro de conexão:".mysqli_connect_error());
    }

?>