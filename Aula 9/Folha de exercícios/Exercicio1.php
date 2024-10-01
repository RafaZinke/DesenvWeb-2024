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

<form method="post" action="">
    <label for="var1">Digite o primeiro valor:</label>
    <input type="number" name="var1" id="var1" required><br><br>
    
    <label for="var2">Digite o segundo valor:</label>
    <input type="number" name="var2" id="var2" required><br><br>
    
    <label for="var3">Digite o terceiro valor:</label>
    <input type="number" name="var3" id="var3" required><br><br>
    
    <input type="submit" value="Enviar">
</form>


<?php
$var1 = $_POST['var1'];
$var2 = $_POST['var2'];
$var3 = $_POST['var3'];
$soma = 0;

function somar($v1 = 0, $v2 = 0, $v3 = 0){
    $soma = $v1 + $v2 + $v3;
    return $soma;
}

$soma = somar($var1, $var2, $var3);
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


