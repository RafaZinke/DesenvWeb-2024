<?php
/* Criar um programa que execute a soma de três valores.
Se a primeira variável for maior que 10, escrever o resultado da operação em azul
Se a segunda variável for menor que a terceira, escrever o resultado em verde
Se a terceira variável for menor que a primeira e a segunda variável escrever o
resultado em vermelho */ ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>FolhaExercicios</title>
    
</head>
<body>

<?php
$var1 = 12;
$var2 = 15;
$var3 = 20;

$soma = $var1 + $var2 + $var3;
echo "<p>Soma dos 3 valores:  $soma </p>";

if ($var1 > 10) {
echo "<p style = 'color:blue;'> $var1 </p>" ;
}  

if ($var2 < $var3) {
echo "<p style = 'color:green;'> $var2 </p>" ; 
}

if ($var3 < $var1 && $var3 < $var2)
echo "<p style = 'color:red;'> $var3 </p>" ; 
?>

</body>
</html>


