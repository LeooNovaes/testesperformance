<?php

  $inicio1 = microtime(true);

  $query = 'INSERT INTO php_bloco (nome, telefone) VALUES ';

  for ($i = 0; $i < 100; $i++) {
  $query .= "('Leo $i', '123 $i'),";
  }

  $query = substr($query, 0, -1);

  $mysqli = mysqli_connect("localhost", "root", "", "teste_performance");


  if (!mysqli_query($mysqli, $query)) {
    die("Falha na conexão: $query -> " . mysqli_errno($mysqli) . " => " . mysqli_error($mysqli));
  }

  mysqli_close($mysqli);

  $total1 = (microtime(true) - $inicio1) * 1000;

  echo 'Tempo: ' . $total1;

?>