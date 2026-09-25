<?php

function analisarNumero($numero)
{
    $paridade = ($numero % 2 == 0) ? 'Par' : 'Ímpar';
    
    $primo = true;
    if ($numero < 2) {
        $primo = false;
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $primo = false;
                break;
            }
        }
    }
    $resultado_primo = $primo ? 'Primo' : 'Não é primo';
    
    $divisores_soma = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $divisores_soma += $i;
        }
    }
    $perfeito = ($divisores_soma == $numero) ? 'Perfeito' : 'Não é perfeito';
    
    return [
        'paridade' => $paridade,
        'primo' => $resultado_primo,
        'perfeito' => $perfeito
    ];
}

$numeros = [6, 7, 28, 15];

foreach ($numeros as $numero) {
    $resultado = analisarNumero($numero);
    echo "Número: $numero | ";
    echo $resultado['paridade'] . " | ";
    echo $resultado['primo'] . " | ";
    echo $resultado['perfeito'] . "<br>";
}
