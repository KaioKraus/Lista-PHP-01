<?php

function calcularIMC($peso, $altura)
{
    if ($altura <= 0 || $peso <= 0) {
        return "Peso e altura devem ser maiores que zero";
    }
    
    $imc = $peso / ($altura * $altura);
    
    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc < 25) {
        $classificacao = "Peso normal";
    } elseif ($imc < 30) {
        $classificacao = "Sobrepeso";
    } else {
        $classificacao = "Obeso";
    }
    
    return [
        'imc' => round($imc, 2),
        'classificacao' => $classificacao
    ];
}

function validarEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function gerarSenhaSegura($tamanho = 12)
{
    $numeros = '0123456789';
    $letrasMaiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $letrasMinusculas = 'abcdefghijklmnopqrstuvwxyz';
    $caracteresEspeciais = '!@#$%^&*()_+-=[]{}|;:,.<>?';
    
    $senha = '';
    $senha .= $numeros[rand(0, strlen($numeros) - 1)];
    $senha .= $letrasMaiusculas[rand(0, strlen($letrasMaiusculas) - 1)];
    $senha .= $letrasMinusculas[rand(0, strlen($letrasMinusculas) - 1)];
    $senha .= $caracteresEspeciais[rand(0, strlen($caracteresEspeciais) - 1)];
    
    $todosCaracteres = $numeros . $letrasMaiusculas . $letrasMinusculas . $caracteresEspeciais;
    
    for ($i = 4; $i < $tamanho; $i++) {
        $senha .= $todosCaracteres[rand(0, strlen($todosCaracteres) - 1)];
    }
    
    return str_shuffle($senha);
}

function contarVogais($texto)
{
    $vogais = 0;
    $texto_lower = strtolower($texto);
    
    foreach (str_split($texto_lower) as $char) {
        if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
            $vogais++;
        }
    }
    
    return $vogais;
}

function inverterTexto($texto)
{
    return strrev($texto);
}

function calcularIdade($data_nascimento)
{
    $nascimento = new DateTime($data_nascimento);
    $hoje = new DateTime();
    $idade = $hoje->diff($nascimento);
    
    return $idade->y;
}

function converterMoeda($valor, $moeda_origem = 'USD', $moeda_destino = 'BRL')
{
    $taxas = [
        'USD' => 1,
        'BRL' => 5.15,
        'EUR' => 0.92,
        'GBP' => 0.79,
        'JPY' => 110.5
    ];
    
    if (!isset($taxas[$moeda_origem]) || !isset($taxas[$moeda_destino])) {
        return "Moeda inválida";
    }
    
    $valor_em_usd = $valor / $taxas[$moeda_origem];
    $valor_convertido = $valor_em_usd * $taxas[$moeda_destino];
    
    return round($valor_convertido, 2);
}

function formatarTelefone($telefone)
{
    $telefone = preg_replace('/\D/', '', $telefone);
    
    if (strlen($telefone) == 11) {
        return '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 5) . '-' . substr($telefone, 7);
    } elseif (strlen($telefone) == 10) {
        return '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 4) . '-' . substr($telefone, 6);
    }
    
    return "Número inválido";
}

function gerarSaudacao($nome, $hora = null)
{
    if ($hora === null) {
        $hora = date('H');
    }
    
    if ($hora >= 5 && $hora < 12) {
        $saudacao = "Bom dia";
    } elseif ($hora >= 12 && $hora < 18) {
        $saudacao = "Boa tarde";
    } else {
        $saudacao = "Boa noite";
    }
    
    return "$saudacao, $nome!";
}

function validarSenhaForte($senha)
{
    $erros = [];
    
    if (strlen($senha) < 8) {
        $erros[] = "A senha deve ter no mínimo 8 caracteres";
    }
    
    if (!preg_match('/[a-z]/', $senha)) {
        $erros[] = "A senha deve conter letras minúsculas";
    }
    
    if (!preg_match('/[A-Z]/', $senha)) {
        $erros[] = "A senha deve conter letras maiúsculas";
    }
    
    if (!preg_match('/[0-9]/', $senha)) {
        $erros[] = "A senha deve conter números";
    }
    
    if (!preg_match('/[!@#$%^&*()_+\-=\[\]{}|;:,.<>?]/', $senha)) {
        $erros[] = "A senha deve conter caracteres especiais";
    }
    
    if (empty($erros)) {
        return ['valida' => true, 'mensagem' => 'Senha forte!'];
    } else {
        return ['valida' => false, 'erros' => $erros];
    }
}
