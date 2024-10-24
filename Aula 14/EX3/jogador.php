<?php
class Jogador {
    private $nome;
    private $posicao;

    // Construtor para inicializar os atributos do jogador
    public function __construct($nome, $posicao) {
        $this->nome = $nome;
        $this->posicao = $posicao;
    }

    // Método para retornar o nome do jogador
    public function getNome() {
        return $this->nome;
    }

    // Método para retornar a posição do jogador
    public function getPosicao() {
        return $this->posicao;
    }
}
?>
