<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 8</title>
</head>


<?php

$salario1 = 1000;
$salario2 = 2000;

$salario2 = $salario1;
++$salario2;

$salario1 = $salario1 + ((10 * $salario1)/ 100);

if ($salario1 > $salario2) {
  
  
  echo "<h1>O Valor da variável 1 é maior que o valor da variável 2 </h1>";
}else if  ($salario1 < $salario2) {
  echo "<h2>O Valor da variável 1 é menor que o valor da variável 2</h2>";
}
else {
  echo "<h3>Os valores sao iguais</h3>";
}

?>


</html>