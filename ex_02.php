<?php

function inverterTexto($texto){

    $textoInvertido = strrev($texto);
    return $textoInvertido;
    $caracteres = strlen($texto);
}

$texto = "Oi";

echo "Texto original: $texto <br>";
echo "Caracteres: " . strlen($texto) . "<br>";

echo "Texto invertido:". inverterTexto($texto);