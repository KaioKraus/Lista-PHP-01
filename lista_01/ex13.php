<?php

function criptografarMensagem($texto, $deslocamento = 3)
{
    $resultado = '';
    
    foreach (str_split($texto) as $char) {
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            
            if ($char >= 'A' && $char <= 'Z') {
                $novo_char = chr((ord($char) - ord('A') + $deslocamento) % 26 + ord('A'));
            } elseif ($char >= 'a' && $char <= 'z') {
                $novo_char = chr((ord($char) - ord('a') + $deslocamento) % 26 + ord('a'));
            }
            $resultado .= $novo_char;
        } else {
            $resultado .= $char;
        }
    }
    
    return $resultado;
}

function descriptografarMensagem($texto, $deslocamento = 3)
{
    return criptografarMensagem($texto, 26 - $deslocamento);
}

$mensagem = "Ola, Mundo!";
$criptografada = criptografarMensagem($mensagem, 3);
$descriptografada = descriptografarMensagem($criptografada, 3);

echo "Mensagem original: $mensagem <br>";
echo "Mensagem criptografada: $criptografada <br>";
echo "Mensagem descriptografada: $descriptografada";
