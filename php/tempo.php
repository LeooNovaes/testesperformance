<?php

$inicio1 = microtime(true);
for($i=0;$i< 100000;$i++){
    continue;
}
$total1 = (microtime(true) - $inicio1)*1000;
echo 'Resultado teste: ' . $total1;