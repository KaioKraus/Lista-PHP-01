<?php

function analisarTexto($texto)
{
    $palavras = str_word_count($texto);
    
    $caracteres = strlen($texto);
    
    $vogais = 0;
    $consoantes = 0;
    $texto_lower = strtolower($texto);
    
    foreach (str_split($texto_lower) as $char) {
        if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
            $vogais++;
        } elseif (ctype_alpha($char)) {
            $consoantes++;
        }
    }
    
    return [
        'palavras' => $palavras,
        'caracteres' => $caracteres,
        'vogais' => $vogais,
        'consoantes' => $consoantes
    ];
}

$texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
$resultado = analisarTexto($texto);

echo "Texto: $texto <br><br>";
echo "Quantidade de palavras: " . $resultado['palavras'] . "<br>";
echo "Quantidade de caracteres: " . $resultado['caracteres'] . "<br>";
echo "Quantidade de vogais: " . $resultado['vogais'] . "<br>";
echo "Quantidade de consoantes: " . $resultado['consoantes'];
