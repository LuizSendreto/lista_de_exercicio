<?php

function converterTemperatura($valor, $origem, $destino){

    if($origem == "C"){
        $celsius = $valor;
    }
    elseif($origem == "F"){
        $celsius = ($valor - 32) * 5 / 9;
    }
    elseif($origem == "K"){
        $celsius = $valor - 273.15;
    }

    if($destino == "C"){
        return $celsius;
    }
    elseif($destino == "F"){
        return ($celsius * 9 / 5) + 32;
    }
    elseif($destino == "K"){
        return $celsius + 273.15;
    }

    return "Escala inválida!";
}

echo converterTemperatura(30, "C", "F") . "<br>";   
echo converterTemperatura(86, "F", "C") . "<br>";   
echo converterTemperatura(300, "K", "C") . "<br>"; 

?>