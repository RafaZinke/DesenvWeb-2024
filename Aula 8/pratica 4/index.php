<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 8</title>
</head>

<?php

$salario1 = 1000;
$salario2 = 1055;


++$salario2;

for ($x = 0; $x <= 100; $x++){
    ++$salario1;
    if ($x == 50) {
        break;
    }
}

if  ($salario1 < $salario2) {
    echo " <h1> O Valor da variável 1 é menor que o valor da variável 2 </h1>";
    }

?>

</html>