<?php

$inicio1 = microtime(true);
for($i=0;$i< 1000;$i++){
    echo $i . PHP_EOL;
    
}
$total1 = (microtime(true) - $inicio1)*1000;
echo 'Resultado teste: ' . $total1;