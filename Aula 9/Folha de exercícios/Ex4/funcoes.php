<?php
/* Crie um programa que calcule a área de um retângulo. Você deve configurar duas
variáveis que representam os lados a e bdesse quadrado em metros. Após o cálculo
escrever uma frase com o resultado da operação, exemplo: “A área do retângulo de
lados 3 e 2 metros é 6 metros quadrados.” Caso a área for maior que 10 escreva a frase
usando a tag h1, se não, escrever com h3. */ ?>

<?php
    function Area($lado = 0, $base = 0) {
       return $lado * $base;
    }