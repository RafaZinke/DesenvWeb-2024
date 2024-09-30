<?php

$disciplinas = array ("disc1","disc2", "disc3","disc4","disc5");
$professores = array ("Julian", "Marco", "Sandro", "Kleber", "Bastos");

for ($x = 0; $x < 5; $x++) {

    echo $disciplinas[$x] . " Tem o professor: ". $professores[$x] . "\n";
}

?>
