<?php

$salario1 = 1000;
$salario2 = 2000;

$salario2 = $salario1;
++$salario2;

$salario1 = $salario1 + ((10 * $salario1)/ 100);

echo "Valor Salario 1: ". $salario1 . ", " . "Valor salario 2: ". $salario2;

?>
