<?php

function mascararCpf($cpf)
{
    $cpf_limpo = preg_replace('/\D/', '', $cpf);
    
    if (strlen($cpf_limpo) != 11) {
        return "CPF inválido";
    }
    
    $cpf_mascarado = "***.***.*-" . substr($cpf_limpo, -2);
    
    return $cpf_mascarado;
}

$cpfs = ["123.456.789-00", "98765432100", "111.222.333-44"];

foreach ($cpfs as $cpf) {
    echo "CPF: $cpf | Mascarado: " . mascararCpf($cpf) . "<br>";
}