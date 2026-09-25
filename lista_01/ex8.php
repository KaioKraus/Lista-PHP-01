<?php

function ordenarNomes($nomes_string)
{
    $nomes = explode(',', $nomes_string);
    
    $nomes = array_map('trim', $nomes);
    
    $nomes = array_filter($nomes);
    
    sort($nomes);
    
    return $nomes;
}

$entrada = "Carlos, Ana, Bruno, Diana, Eva, Fernando";
$resultado = ordenarNomes($entrada);

echo "Entrada: $entrada <br><br>";
echo "Lista ordenada: <br>";
foreach ($resultado as $index => $nome) {
    echo ($index + 1) . ". $nome <br>";
}
