<?php
/* Juquinha seguindo o mesmo caminho que Paulinho foi comprar uma moto nova, mas
pena que ele não sabia da mesma chance que Paulinho.
A empresa que Juquinha foi comprar a moto utiliza juros compostos para calcular o
valor das parcelas.

As opções de compras estudadas por ele são as mesmas de Paulinho, ou seja 24, 36,
48 e 60 vezes o juro nesta empresa inicia em 2% para 24 vezes e aumenta 0,3% para
as opções de parcelamento seguintes.
Utilizando então a fórmula de juros composto que segue abaixo, calcule o valor da
parcela para cada uma das opções a ser estudada por Juquinha.
M = C * (1 + i)t , onde:
M = Montante
C = Capital Inicial
i = Taxa de juros
t = Tempo */ ?>

<?php
function calcularParcelasCompostas($valorMoto, $taxaJuros, $numParcelas) {
    $montante = $valorMoto * pow((1 + $taxaJuros / 100), $numParcelas);
    $valorParcela = $montante / $numParcelas;

    return $valorParcela;
}

function exibirTaxaJurosCompostos($numParcelas) {
    switch ($numParcelas) {
        case 24:
            return 2.0;
        case 36:
            return 2.3;
        case 48:
            return 2.6;
        case 60:
            return 2.9;
        default:
            return 0;
    }
}
?>

