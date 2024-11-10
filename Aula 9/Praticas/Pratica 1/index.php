<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 8</title>
</head>


<?php

$notas = array (10, 5, 4);
$faltas = array (1, 0, 1, 1 ,1 ,0 ,1, 0, 1,1);

function media ($notas){
  $total = count($notas);
  $media = (array_sum($notas)) / $total;
  return $media;
}

function frequencia($faltas){
return $aprovado = array_sum($faltas);
}

echo "A media é: ". number_format(media($notas), 2);
echo "<p>A frequencia do aluno é: " . frequencia($faltas) . "</p>"; 

if (frequencia($faltas) >= 7 && media($notas) >= 7) {
    echo "<h3>Aprovado </h3>";
}
else  {
    echo "<h3>Reprovado </h3>";
}


?>

</html>