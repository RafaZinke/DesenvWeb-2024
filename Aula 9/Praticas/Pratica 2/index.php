<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 8</title>
</head>


<?php 

$pastas = array (
  "bsn" => array(
    "3a fase" => array(
      "web",
      "banco de dados",
      "engsoft"
    ),
    "4a fase" => array (
      "intro",
      "banco 2",
      "engsoft 2"
    )
  )
    );

function exibeArvore($array, $nivel = 0){
  foreach ($array as $chave => $valor) {
    if(!is_numeric($chave)){
      echo str_repeat("-", $nivel * 2) . " " . $chave . "<br>"; 
                            }
    if(is_array($valor)) {
      exibeArvore($valor, $nivel + 1);
    }
    else{
      echo str_repeat("-", ($nivel + 1) * 2) . " " . $valor . "<br>";
    }
  }

}

exibeArvore($pastas);

?>


</html>