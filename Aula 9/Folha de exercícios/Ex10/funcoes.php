<?php
class PastaHelper {

    public function imprimirArvore($array, $nivel = 0) {
        foreach ($array as $chave => $valor) {
            echo str_repeat("-", $nivel) . " ";

            if (is_string($chave)) {
                echo $chave . "\n";
            }

            if (is_array($valor)) {
                $this->imprimirArvore($valor, $nivel + 1); 
            } else {

                echo str_repeat("-", $nivel + 1) . " " . $valor . "\n";
            }
        }
    }
}
?>
