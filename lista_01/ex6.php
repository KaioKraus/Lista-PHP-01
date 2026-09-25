<?php

function converterTemperatura($valor, $origem, $destino)
{
    $origem = strtoupper($origem);
    $destino = strtoupper($destino);
    
    if ($origem === 'FAHRENHEIT') {
        $celsius = ($valor - 32) * 5 / 9;
    } elseif ($origem === 'KELVIN') {
        $celsius = $valor - 273.15;
    } elseif ($origem === 'CELSIUS') {
        $celsius = $valor;
    } else {
        return "Escala de origem inválida";
    }
    
    if ($destino === 'CELSIUS') {
        return $celsius;
    } elseif ($destino === 'FAHRENHEIT') {
        return ($celsius * 9 / 5) + 32;
    } elseif ($destino === 'KELVIN') {
        return $celsius + 273.15;
    } else {
        return "Escala de destino inválida";
    }
}

$valor = 25;
$resultado_f = converterTemperatura($valor, 'Celsius', 'Fahrenheit');
$resultado_k = converterTemperatura($valor, 'Celsius', 'Kelvin');

echo "$valor°C = " . number_format($resultado_f, 2, ',', '.') . "°F <br>";
echo "$valor°C = " . number_format($resultado_k, 2, ',', '.') . "K <br>";
echo "32°F = " . number_format(converterTemperatura(32, 'Fahrenheit', 'Celsius'), 2, ',', '.') . "°C";
