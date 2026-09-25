<?php

function gerarSenha($tamanho = 8)
{
    UVWXYZ';
    $numeros = '0123456789';
    $letrasMaiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $letrasMinusculas = 'abcdefghijklmnopqrstuvwxyz';
    $caracteresEspeciais = '!@#$%^&*()_+-=[]{}|;:,.<>?';
    $senha = '';

    for ($i = 0; $i < $tamanho; $i++) {

        $senha .= $numeros[rand(0, strlen($numeros) - 1)];
        $senha .= $letrasMaiusculas[rand(0, strlen($letrasMaiusculas) - 1)];
        $senha .= $letrasMinusculas[rand(0, strlen($letrasMinusculas) - 1)];   
        $senha .= $caracteresEspeciais[rand(0, strlen($caracteresEspeciais) - 1)];

        $senha = str_shuffle($senha);
    }
    return $senha;
}

echo gerarSenha(8);