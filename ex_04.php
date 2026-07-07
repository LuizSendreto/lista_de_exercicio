<?php 

function gerarSenha($tamanho = 12) {
    $maiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $minusculas = 'abcdefghijklmnopqrstuvwxyz';
    $numeros = '0123456789';
    $especiais = '!@#$%^&*()-_=+[]{}<>~';

    $senha = '';
    $senha .= $maiusculas[random_int(0, strlen($maiusculas) - 1)];
    $senha .= $minusculas[random_int(0, strlen($minusculas) - 1)];
    $senha .= $numeros[random_int(0, strlen($numeros) - 1)];
    $senha .= $especiais[random_int(0, strlen($especiais) - 1)];

    $todosCaracteres = $maiusculas . $minusculas . $numeros . $especiais;
    $max = strlen($todosCaracteres) - 1;

    for ($i = strlen($senha); $i < $tamanho; $i++) {
        $senha .= $todosCaracteres[random_int(0, $max)];
    }

    return str_shuffle($senha);
}

echo $gerarSenha



?>