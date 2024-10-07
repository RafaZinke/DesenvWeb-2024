<?php
/* Joãozinho recebeu R$ 50,00 reais de seu pai para ir à feira comprar frutas e verduras.
Ele comprou maçã, melancia, laranja, repolho, cenoura, batatinha.
Crie um programa que calcule o valor gasto com cada produto comprado, sendo o
resultado do valor individual do produto em Kg multiplicado pela quantidade em Kg
comprada por Joãozinho.
Ao final escrever uma frase com o valor da compra, e uma previsão se o dinheiro será
o suficiente para pagar a conta, caso falte dinheiro escrever uma frase em vermelho
com o valor que ficou acima do disponível por Joãozinho, se não, escrever uma fase em
azul e o valor que Joãozinho ainda poderia gastar.
Caso o valor da compra seja exatamente igual ao R$ 50,00 disponível, escreva uma
frase em verde afirmando que o saldo para compras foi esgotado. */ ?>
<


<?php
/* 
Valor em KG dos alimentos
*/

    function calculoCompra($maca = 0, $melancia = 0, $laranja = 0, $repolho = 0, $cenoura = 0, $batatinha = 0 ) {
       return $maca * 3 + $melancia * 4 + $laranja * 2 + $repolho * 4 + $cenoura * 1 + $batatinha * 2;
    }
    function saldoRestante($var1,$var2,$var3,$var4,$var5,$var6){
       $saldo = calculoCompra($var1,$var2,$var3,$var4,$var5,$var6);
       $saldoFinal = 50 - $saldo;
       return $saldoFinal;
    }
    
    

    ?>
