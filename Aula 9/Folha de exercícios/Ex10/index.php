<?php
require_once 'funcoes.php';


$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb",
            "bancoDados 1",
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web",
            "bancoDados 2",
            "engSoft 2"
        )
    )
);

$pastaHelper = new PastaHelper();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árvore de Pastas Recursiva</title>
</head>
<body>

    <h1>Árvore de Pastas</h1>

    <pre>
        <?php
        $pastaHelper->imprimirArvore($pastas);
        ?>
    </pre>

</body>
</html>
