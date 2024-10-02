<?php
require_once 'Exercicio2.php';

?>

<!DOCTYPE html >
<html lang="pt-BR">
    
<head>
    <meta charset="UTF-8">
    <title>FolhaExercicios</title>
</head>

<body>

    <form method="post" action="Exercicio2.php">
        <label for="var1">Digite o primeiro valor:</label>
        <input type="number" name="var1" id="var1" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    
    <?php
    $var1 = $_POST['var1'];
    ?>

    <h1 style = "color: blue"><?php retornaValor($var1); ?></h1>



</body>
</html>

