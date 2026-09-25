<?php

function inverterTexto($texto)
{
    $quantidade_caracteres = strlen($texto);
    $texto_invertido = strrev($texto);
    
    return [
        'invertido' => $texto_invertido,
        'quantidade_caracteres' => $quantidade_caracteres
    ];
}

$texto = "Hello, World!";
$resultado = inverterTexto($texto);

echo "Texto original: $texto <br>";
echo "Texto invertido: " . $resultado['invertido'] . "<br>";
echo "Quantidade de caracteres: " . $resultado['quantidade_caracteres'];