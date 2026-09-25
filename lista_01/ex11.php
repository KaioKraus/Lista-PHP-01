<?php

function formatarTexto($texto)
{
    return [
        'maiusculas' => strtoupper($texto),
        'minusculas' => strtolower($texto),
        'primeira_maiuscula' => ucwords(strtolower($texto)),
        'quantidade_caracteres' => strlen($texto)
    ];
}

$texto = "exemplo de TEXTO para formatar";
$resultado = formatarTexto($texto);

echo "Texto original: $texto <br><br>";
echo "Maiúsculas: " . $resultado['maiusculas'] . "<br>";
echo "Minúsculas: " . $resultado['minusculas'] . "<br>";
echo "Primeira letra de cada palavra: " . $resultado['primeira_maiuscula'] . "<br>";
echo "Total de caracteres: " . $resultado['quantidade_caracteres'];
