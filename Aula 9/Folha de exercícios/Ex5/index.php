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
    
    if (isset($_POST['var1'])) {
    $v1 = $_POST['var1'];
    }

    if (isset($_POST['var2'])) {
        $v2 = $_POST['var2'];
        }

    $area = TrianguloRetangulo($v1,$v2);
    ?>

    <!-- Define se é maior ou menor que 10-->

            <h1>A área da altura é: <?php echo $v1; ?> e sua base <?php echo $v2; ?>
            para um total de: <?php echo $area; ?></h1>
            
       


</body>
</html>

