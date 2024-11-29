<?php

function validarCookies() {
    if (empty($_COOKIE['usuario']) || empty($_COOKIE['time'])) {
        echo "<script>alert('Os dados dos cookies foram perdidos. Por favor, faça login novamente.');</script>";
       
        echo "<script>window.location.href = 'set_cookies.php';</script>";
        exit; 
    }
}


validarCookies();


echo "Bem-vindo, " . htmlspecialchars($_COOKIE['usuario']) . "!<br>";
echo "Seu time: " . htmlspecialchars($_COOKIE['time']) . ".";
?>
