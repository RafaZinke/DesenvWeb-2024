<?php
/* Mariazinha foi comprar um carro novo esse carro custa R$ 22.500,00 a vista, mas como
ela não tem esse dinheiro para comprar a vista, resolveu fazer um financiamento, que
ficou em 60 parcelas de R$ 489,65.
Escreva um programa que calcule o valor gasto só dos juros que serão pagos por
Mariazinha em comparação ao valor a vista do carro. */ ?>

<?php 
function juros($valor = 0, $parcela = 0, $pagar = 0){
    $juros = $pagar * $parcela;

    $juros = $valor - $juros;

    $taxaJuros = $juros / ($pagar * $parcela);
    return $taxaJuros * -100;

}

?>