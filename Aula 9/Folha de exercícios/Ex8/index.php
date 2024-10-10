<?php
require_once 'funcoes.php';


$valorMoto = 8654.00;
$opcoesParcelas = [24, 36, 48, 60];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação de Parcelamento</title>
</head>
<body>

    <h1>Simulação de Parcelamento da Moto</h1>
    <p>Valor à vista da moto: R$ <?php echo number_format($valorMoto, 2, ',', '.'); ?></p>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Quantidade de Parcelas</th>
                <th>Taxa de Juros</th>
                <th>Valor da Parcela</th>
                <th>Valor Total a Pagar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($opcoesParcelas as $numParcelas) {
                
                $taxaJuros = exibirTaxaJuros($numParcelas);

                
                $valorParcela = calcularParcelas($valorMoto, $taxaJuros, $numParcelas);

                
                $valorTotal = $valorParcela * $numParcelas;
            ?>
                <tr>
                    <td><?php echo $numParcelas; ?> vezes</td>
                    <td><?php echo number_format($taxaJuros, 1, ',', '.'); ?> %</td>
                    <td>R$ <?php echo number_format($valorParcela, 2, ',', '.'); ?></td>
                    <td>R$ <?php echo number_format($valorTotal, 2, ',', '.'); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
