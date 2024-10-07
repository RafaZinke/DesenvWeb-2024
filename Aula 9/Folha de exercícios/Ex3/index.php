<?php
require_once 'funcoes.php';
?>

<!DOCTYPE html >
<html lang="pt-BR">
    
<head>
    <meta charset="UTF-8">
    <title>FolhaExercicios</title>
</head>

<body>

    <form method="post" action="index.php">
        <label for="var1">Digite o tamanho em metros do lado de um quadrado:</label>
        <input type="number" name="var1" id="var1" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    
    <?php
    if (isset($_REQUEST['var1'])) {
    $var1 = $_REQUEST['var1'];
    }
    $quadrado = 0;
    ?>

    <h1>A área do
    quadrado de lado <?php $var1?> é: 

    <?php 
    if (isset($_REQUEST['var1'])) 
    {
        echo $quadrado = Area($var1);
    } 
    ?> 
    
    quadrados</h1>
    



</body>
</html>

