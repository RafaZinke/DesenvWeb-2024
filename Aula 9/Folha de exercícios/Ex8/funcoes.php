<?php
/* Paulinho foi comprar uma moto nova. A empresa vende motos muito baratas pois
utiliza Juros Simples para o cálculo das parcelas.
Sabendo então que o valor a vista do moto é R$ 8.654,00.
Crie um programa que calcule o valor das parcelas para as opções abaixo, sabendo que
a taxa de juros aumenta 0,5% em cada nível e inicia em 1,5% para 24 vezes:
24 ezes
36 vezes
48 vezes
60 vezes */ ?>

<?php
function calcularParcelas($valorMoto, $taxaJuros, $numParcelas) {
    // Juros total baseado na fórmula de juros simples: J = P * i * n
    $jurosTotal = $valorMoto * ($taxaJuros / 100) * $numParcelas;

    
    $valorFinal = $valorMoto + $jurosTotal;
    $valorParcela = $valorFinal / $numParcelas;

    return $valorParcela;
}


function exibirTaxaJuros($numParcelas) {
    switch ($numParcelas) {
        case 24:
            return 1.5;
        case 36:
            return 2.0;
        case 48:
            return 2.5;
        case 60:
            return 3.0;
        default:
            return 0;
    }
}
?>
