<?php
// Inicia a sessão
session_start();

// Definindo um usuário e time diretamente no código
$_SESSION['usuario'] = 'Rafael';
$_SESSION['time'] = 'Botafogo';

// Verifique se o usuário e o time foram definidos corretamente
if (isset($_SESSION['usuario']) && isset($_SESSION['time'])) {
    $usuario = $_SESSION['usuario'];
    $time = $_SESSION['time'];
    echo "Bem-vindo, $usuario! Você está no time: $time.";
} else {
    echo "Os dados da sessão foram perdidos";
    
}

session_destroy();


?>
