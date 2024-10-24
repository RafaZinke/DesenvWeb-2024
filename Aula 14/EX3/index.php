<?php
// Inclui as classes
require_once 'futebol.php';
require_once 'jogador.php';

// Cria o time
$meuTime = new Time("Botafogo");

// Cadastra alguns jogadores
$meuTime->cadastrarJogador(new Jogador("João", "Atacante"));
$meuTime->cadastrarJogador(new Jogador("Pedro", "Goleiro"));
$meuTime->cadastrarJogador(new Jogador("Lucas", "Zagueiro"));

// Exibe os jogadores cadastrados
echo "<h1>Jogadores do " . $meuTime->getNome() . ":</h1>";
$meuTime->exibirJogadores();
?>
