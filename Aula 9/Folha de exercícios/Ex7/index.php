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
        <label for="var1">Total:</label>
        <input type="number" name="var1" id="var1" required><br><br>

        <label for="var2">QuantidadeParcelas:</label>
        <input type="number" name="var2" id="var2" required><br><br>
        
        <label for="var3">ValorParcela:</label>
        <input type="number" name="var3" id="var3" required><br><br>
        
        <input type="submit" value="Enviar">

    </form>
    
    <!-- Coloca os valores do post nas variaveis php e inicia a funçao area armazenando-a dentro da variavel $area -->
    
    <?php
    
    if (isset($_POST['var1'])) {
    $total = $_POST['var1'];
    }

    if (isset($_POST['var2'])) {
    $qtdparcelas = $_POST['var2'];
    }

    if (isset($_POST['var3'])) {
    $vlrParcela = $_POST['var3'];
    }

?>

    <?php 
    echo "A taxa de juros simples é: ";
    echo juros($total, $qtdparcelas,$vlrParcela) . '%'
    ?>
    
    
</body>
</html>

