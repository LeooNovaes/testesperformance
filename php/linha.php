<?php

    $inicio1 = microtime(true);

    $servidor= "localhost";
    $usuario = "root";
    $senha = "";
    $bdnome= "teste_performance";

    //Conexão com o banco
    $conn = mysqli_connect($servidor,$usuario,$senha,$bdnome);

    for ($i =0; $i < 100; $i ++)
    {
        $sql = "INSERT INTO php_linha (nome, telefone) VALUES ('Leo $i', '123 $i')";
        mysqli_query($conn, $sql);
    }

    //Fechando a conexão com o banco
    mysqli_close($conn);

    $total1 = (microtime(true) - $inicio1) * 1000;
    echo 'Tempo: ' . $total1;
?>