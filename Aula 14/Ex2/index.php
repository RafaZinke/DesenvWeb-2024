<?php
// Inclui a classe Computador
require_once 'computador.php';

// Instancia o computador
$computador = new Computador();

// Verifica se algum botão foi pressionado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['ligar'])) {
        $computador->acionarLigar();  // Chama o método público para ligar
    } elseif (isset($_POST['desligar'])) {
        $computador->acionarDesligar();  // Chama o método público para desligar
    }
}

// Obtém o status atual do computador
$status = $computador->obterStatus();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status do Computador</title>
</head>
<body>
    <h1>Status do Computador</h1>

    <!-- Formulário com botões para ligar e desligar -->
    <form method="post" action="">
        <input type="submit" name="ligar" value="Ligar">
        <input type="submit" name="desligar" value="Desligar">
    </form>

    <!-- Exibe o status atual do computador -->
    <h2><?php echo $status; ?></h2>
</body>
</html>
