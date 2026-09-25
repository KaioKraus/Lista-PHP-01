<?php

function estatisticasNumericas($numeros)
{
    if (empty($numeros)) {
        return null;
    }
    
    $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    $maior = max($numeros);
    $menor = min($numeros);
    
    sort($numeros);
    $quantidade = count($numeros);
    if ($quantidade % 2 == 0) {
        $mediana = ($numeros[$quantidade / 2 - 1] + $numeros[$quantidade / 2]) / 2;
    } else {
        $mediana = $numeros[floor($quantidade / 2)];
    }
    
    $pares = 0;
    $impares = 0;
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }
    
    return [
        'soma' => $soma,
        'media' => $media,
        'maior' => $maior,
        'menor' => $menor,
        'mediana' => $mediana,
        'pares' => $pares,
        'impares' => $impares
    ];
}

$numeros = [2, 5, 8, 12, 3, 9, 4, 7, 15, 6];
$resultado = estatisticasNumericas($numeros);

echo "Array: " . implode(', ', $numeros) . "<br><br>";
echo "Soma: " . $resultado['soma'] . "<br>";
echo "Média: " . number_format($resultado['media'], 2, ',', '.') . "<br>";
echo "Maior valor: " . $resultado['maior'] . "<br>";
echo "Menor valor: " . $resultado['menor'] . "<br>";
echo "Mediana: " . number_format($resultado['mediana'], 2, ',', '.') . "<br>";
echo "Números pares: " . $resultado['pares'] . "<br>";
echo "Números ímpares: " . $resultado['impares'];
