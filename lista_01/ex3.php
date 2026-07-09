<?php

function mascararCPF()
{
    $cpf = "123.456.789-00";
    $cpfMascarado = substr($cpf, 0, 3) . ".***.***-" . substr($cpf, -2);
    return $cpfMascarado;
}

echo mascararCPF();