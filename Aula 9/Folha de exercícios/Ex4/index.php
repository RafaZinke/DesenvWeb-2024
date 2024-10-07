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
        <label for="var1">Altura:</label>
        <input type="number" name="var1" id="var1" required><br><br>

        <label for="var2">Base:</label>
        <input type="number" name="var2" id="var2" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    
    <!-- Coloca os valores do post nas variaveis php e inicia a funçao area armazenando-a dentro da variavel $area -->
    
    <?php
    
    if (isset($_REQUEST['var1'])) {
    $var1 = $_REQUEST['var1'];
    }

    if (isset($_REQUEST['var2'])) {
        $var2 = $_REQUEST['var2'];
        }
    $area = Area($var1,$var2);
    ?>

    <h1>A área da altura é: <?php echo $var1;?> e sua base <?php echo $var2;?> para um total de:

    
    <?php 
    if (isset($_REQUEST['var1'])) 
    {
        echo $area;
    } 
    ?> 
    metros quadrados</h1>
    



</body>
</html>

