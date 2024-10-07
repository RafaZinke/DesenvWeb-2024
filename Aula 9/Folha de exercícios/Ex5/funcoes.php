<?php
/* Crie um programa que calcule a área de um triângulo retângulo, cuja fórmula segue
abaixo. Crie as variáveis apropriadas para o cálculo em PHP e por fim exiba uma frase
com o valor da operação.

Fórmula -> Resultado = (Base * Altura) / 2 */ ?>


<?php
    function TrianguloRetangulo($altura = 0, $base = 0) {
       return ($altura * $base) / 2;
    }