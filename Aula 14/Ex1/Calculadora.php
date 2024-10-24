<?php
// Arquivo calculadora.php

class Calculadora {
    // Método para somar dois números
    public function somar($a, $b) {
        return $a + $b;
    }

    // Método para subtrair dois números
    public function subtrair($a, $b) {
        return $a - $b;
    }

    // Método para multiplicar dois números
    public function multiplicar($a, $b) {
        return $a * $b;
    }

    // Método para dividir dois números
    public function dividir($a, $b) {
        if ($b == 0) {
            return "Erro: Divisão por zero.";
        }
        return $a / $b;
    }
}

class CalculadoraOR
    {
    private $operador;
    public function setOperador1($valor1){
        $this -> operador = $valor1;
    }
    public function getOperador1(){
        return $this->operador;
    }
}




?>