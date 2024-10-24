<?php
class Time {
    private $nome;
    private $jogadores = [];

    // Construtor para inicializar o nome do time
    public function __construct($nome) {
        $this->nome = $nome;
    }

    // Método para cadastrar um jogador no time
    public function cadastrarJogador(Jogador $jogador) {
        $this->jogadores[] = $jogador;
    }

    // Método para exibir todos os jogadores cadastrados
    public function exibirJogadores() {
        foreach ($this->jogadores as $jogador) {
            echo "Nome: " . $jogador->getNome() . ", Posição: " . $jogador->getPosicao() . "<br>";
        }
    }

    // Método para retornar o nome do time
    public function getNome() {
        return $this->nome;
    }
}
?>
