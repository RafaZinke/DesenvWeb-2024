<?php
// Arquivo computador.php

class Computador {
    // Atributo privado para armazenar o estado do computador
    private $estado;

    // Construtor para iniciar o computador como desligado
    public function __construct() {
        $this->estado = "Desligado";  // O estado inicial é desligado
    }

    // Método privado para ligar o computador
    private function ligar() {
        $this->estado = "Ligado";
    }

    // Método privado para desligar o computador
    private function desligar() {
        $this->estado = "Desligado";
    }

    // Método público que chama o método privado de ligar
    public function acionarLigar() {
        $this->ligar();  // Chama o método privado
    }

    // Método público que chama o método privado de desligar
    public function acionarDesligar() {
        $this->desligar();  // Chama o método privado
    }

    // Método público para retornar o estado atual
    public function obterStatus() {
        return "O computador está " . $this->estado;
    }
}
?>
