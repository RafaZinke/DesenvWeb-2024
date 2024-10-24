<?php
// Inclui a classe Calculadora
require_once 'calculadora.php';

// Lógica para processar o formulário se for enviado
$resultado = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = isset($_POST["numero1"]) ? $_POST["numero1"] : 0;
    $numero2 = isset($_POST["numero2"]) ? $_POST["numero2"] : 0;
    $operacao = isset($_POST["operacao"]) ? $_POST["operacao"] : '';

    // Instancia a calculadora
    $calc = new Calculadora();

    // Executa a operação de acordo com a seleção
    switch ($operacao) {
        case "somar":
            $resultado = $calc->somar($numero1, $numero2);
            break;
        case "subtrair":
            $resultado = $calc->subtrair($numero1, $numero2);
            break;
        case "multiplicar":
            $resultado = $calc->multiplicar($numero1, $numero2);
            break;
        case "dividir":
            $resultado = $calc->dividir($numero1, $numero2);
            break;
        default:
            $resultado = "Operação inválida.";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora em PHP</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form method="post" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" required><br><br>

        <label for="operacao">Operação:</label>
        <select name="operacao" id="operacao" required>
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <h2>Resultado: <?php echo $resultado; ?></h2>
    <?php endif; ?>
</body>
</html>
