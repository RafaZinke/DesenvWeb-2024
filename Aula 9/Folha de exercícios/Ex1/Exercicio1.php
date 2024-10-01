<?php
require 'index.html';


    $var1 = ($_POST['var1']) ;
    $var2 = ($_POST['var2']) ;
    $var3 = ($_POST['var3']) ;

    function somar($v1 = 0, $v2 = 0, $v3 = 0) {
        return $v1 + $v2 + $v3;
    }

    $soma = somar($var1, $var2, $var3);

    echo "<p>Soma dos 3 valores: $soma</p>";

    if ($var1 > 10) {
        echo "<p style='color:blue;'> $var1 é maior que 10</p>";
    }

    if ($var2 < $var3) {
        echo "<p style='color:green;'> $var2 é menor que $var3</p>";
    }

    if ($var3 < $var1 && $var3 < $var2) {
        echo "<p style='color:red;'> $var3 é o menor dos três</p>";
    }

?>
