<?php

$inicio1 = microtime(true);

$fp = fopen("novo.txt","wb");

for($i =0; $i <= 200; $i++){
    fwrite($fp,"Teste $i \n");
}
fclose($fp);

$total1 = (microtime(true) - $inicio1)*1000;
echo 'Resultado teste: ' . $total1;