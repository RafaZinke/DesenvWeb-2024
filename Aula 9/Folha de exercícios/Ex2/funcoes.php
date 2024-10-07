<?php
/* Crie um programa para testar se um número é divisível por 2.
Caso for verdade escrever a frase “Valor divisível por 2”
Caso for falso escrever a frase “O valor não é divisível por 2” */ ?>


<?php
    function divisivel($v1 = 0) {
       if ($v1 % 2 == 0){
        return true;
       } else {
       return false;}
    }

    function retornaValor($v1){
      if (divisivel($v1)) {
            //echo "<p style='color:blue;'> $var1 é maior que 10</p>";
            echo "Valor divisivel por 2";
      } else {
            echo "Valor nao é divisivel por 2";
      }
    }
    
    
   
?>
