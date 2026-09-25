<?php

function calcularDesconto($valor)
{
    $desconto = 0;
    
    if ($valor > 1000) {
        $desconto = $valor * 0.30;
    } elseif ($valor > 500) {
        $desconto = $valor * 0.20;
    } elseif ($valor > 100) {
        $desconto = $valor * 0.10;
    }
    
    $valor_final = $valor - $desconto;
    
    return [
        'valor_original' => $valor,
        'desconto' => $desconto,
        'valor_final' => $valor_final
    ];
}

$valores = [50, 150, 600, 1500];

foreach ($valores as $valor) {
    $resultado = calcularDesconto($valor);
    echo "Valor: R$ " . number_format($resultado['valor_original'], 2, ',', '.') . " | ";
    echo "Desconto: R$ " . number_format($resultado['desconto'], 2, ',', '.') . " | ";
    echo "Valor Final: R$ " . number_format($resultado['valor_final'], 2, ',', '.') . "<br>";
}
