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
        <label for="var1">Maça:</label>
        <input type="number" name="var1" id="var1" required><br><br>

        <label for="var2">Melancia:</label>
        <input type="number" name="var2" id="var2" required><br><br>
        
        <label for="var3">laranja:</label>
        <input type="number" name="var3" id="var3" required><br><br>

        <label for="var4">repolho:</label>
        <input type="number" name="var4" id="var4" required><br><br>

        <label for="var5">cenouro:</label>
        <input type="number" name="var5" id="var5" required><br><br>

        <label for="var6">batatinha:</label>
        <input type="number" name="var6" id="var6" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    
    <!-- Coloca os valores do post nas variaveis php e inicia a funçao area armazenando-a dentro da variavel $area -->
    
    <?php
    
    if (isset($_POST['var1'])) {
    $maca = $_POST['var1'];
    }

    if (isset($_POST['var2'])) {
    $melancia = $_POST['var2'];
    }

    if (isset($_POST['var3'])) {
    $laranja = $_POST['var3'];
    }

    if (isset($_POST['var4'])) {
    $repolho = $_POST['var4'];
    }

    if (isset($_POST['var5'])) {
    $cenoura = $_POST['var5'];
    }
    
    if (isset($_POST['var6'])) {
    $batatinha = $_POST['var6'];
    }
    ?>


    <?php 
    if(calculoCompra($maca, $melancia, $laranja, $repolho, $cenoura, $batatinha) > 50 ){
    ?>
    <h3 style="color: red"> valor ficou acima do disponível </h3>
    <?php
    }else if (calculoCompra($maca, $melancia, $laranja, $repolho, $cenoura, $batatinha) == 50){
    ?>
    <h3 style="color:green">o saldo para compras foi esgotado.</h3>
    <?php
    }else {
    ?>
    <h3 style="color:blue">o saldo disponivel para gasto é: <?php echo saldoRestante($maca, $melancia, $laranja, $repolho, $cenoura, $batatinha);?> </h3>   
    <?php
    } ?>
    
</body>
</html>

