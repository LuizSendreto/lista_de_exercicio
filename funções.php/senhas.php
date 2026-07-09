<?php

function validarSenha($senha){

    if(strlen($senha) >= 8){
        return "Senha forte.";
    }else{
        return "Senha fraca.";
    }

}

$senha = 12345678;

echo "Senha: $senha <br>";
echo validarSenha($senha);