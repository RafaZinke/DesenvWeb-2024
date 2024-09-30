<?php

$salario1 = 1000;
$salario2 = 1055;


++$salario2;
echo $salario1. " \n";
echo $salario2. " \n";

for ($x = 0; $x <= 100; $x++){
    ++$salario1;
    if ($x == 50) {
        break;
    }
}

echo $salario1 . " \n";
echo $salario2 . " \n";
if  ($salario1 < $salario2) {
    echo "O Valor da variável 1 é menor que o valor da variável 2";
    }

?>
