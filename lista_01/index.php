<?php

function calcularFormula($x, $y){

    if (($x + $y) = 0){
        return "Não é possivel realizar a divisão por zero";
    }

    $resultado = (pow($x, 2) + pow($y, 2)) / ($x + $y);

    return $resultado;

}

$x = 10;
