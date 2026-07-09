<?php

function ordenarNomes($nomes){

$lista = explode(",", $nomes);

sort($lista);

return $lista;

}

$nomes = "Juana, Rafael, Luiz, Nicole";

$resultado = ordenarNomes($nomes);

echo "Nomes: $nomes <br> <br>";

foreach ($resultado as $nome) {
    echo $nome . "<br>";
}