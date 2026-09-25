<?php

function calcularMedia($notas)
{
    if (empty($notas)) {
        return null;
    }
    
    $maior = max($notas);
    $menor = min($notas);
    $media = array_sum($notas) / count($notas);
    
    if ($media >= 7) {
        $situacao = 'Aprovado';
    } elseif ($media >= 5) {
        $situacao = 'Recuperação';
    } else {
        $situacao = 'Reprovado';
    }
    
    return [
        'maior_nota' => $maior,
        'menor_nota' => $menor,
        'media' => $media,
        'situacao' => $situacao
    ];
}

$notas_aluno1 = [8.5, 9.0, 7.5, 8.0];
$notas_aluno2 = [6.0, 5.5, 6.5, 4.0];
$notas_aluno3 = [2.0, 3.5, 1.0, 4.5];

$alunos = ['Aluno 1' => $notas_aluno1, 'Aluno 2' => $notas_aluno2, 'Aluno 3' => $notas_aluno3];

foreach ($alunos as $nome => $notas) {
    $resultado = calcularMedia($notas);
    echo "<strong>$nome:</strong><br>";
    echo "Maior nota: " . $resultado['maior_nota'] . "<br>";
    echo "Menor nota: " . $resultado['menor_nota'] . "<br>";
    echo "Média: " . number_format($resultado['media'], 2, ',', '.') . "<br>";
    echo "Situação: " . $resultado['situacao'] . "<br><br>";
}
