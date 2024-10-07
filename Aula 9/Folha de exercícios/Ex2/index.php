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
        <label for="var1">Digite o primeiro valor:</label>
        <input type="number" name="var1" id="var1" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    
    <?php
    if (isset($_POST['var1'])) 
    {
        $var1 = $_POST['var1'];
    }
    ?>

    <h1 style="color: blue">
        <?php
        if (isset($_POST['var1'])) 
        {
            echo retornaValor($var1); 
        }
        ?>
    </h1>



</body>
</html>

