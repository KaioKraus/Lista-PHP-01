<?php

function analisarProdutos($produtos, $pesquisa = null)
{
    if (empty($produtos)) {
        return null;
    }
    
    $produto_mais_caro = $produtos[0];
    $produto_mais_barato = $produtos[0];
    $soma_precos = 0;
    $resultado_pesquisa = null;
    
    foreach ($produtos as $produto) {
        $soma_precos += $produto['preco'];
        
        if ($produto['preco'] > $produto_mais_caro['preco']) {
            $produto_mais_caro = $produto;
        }
        
        if ($produto['preco'] < $produto_mais_barato['preco']) {
            $produto_mais_barato = $produto;
        }
        
        if ($pesquisa && strtolower($produto['nome']) === strtolower($pesquisa)) {
            $resultado_pesquisa = $produto;
        }
    }
    
    $media = $soma_precos / count($produtos);
    
    return [
        'mais_caro' => $produto_mais_caro,
        'mais_barato' => $produto_mais_barato,
        'media' => $media,
        'pesquisa' => $resultado_pesquisa
    ];
}

$produtos = [
    ['nome' => 'Arroz', 'preco' => 5.50],
    ['nome' => 'Feijão', 'preco' => 8.00],
    ['nome' => 'Açúcar', 'preco' => 3.20],
    ['nome' => 'Leite', 'preco' => 4.50],
    ['nome' => 'Pão', 'preco' => 6.00]
];

$resultado = analisarProdutos($produtos, 'Feijão');

echo "Produto mais caro: " . $resultado['mais_caro']['nome'] . " - R$ " . number_format($resultado['mais_caro']['preco'], 2, ',', '.') . "<br>";
echo "Produto mais barato: " . $resultado['mais_barato']['nome'] . " - R$ " . number_format($resultado['mais_barato']['preco'], 2, ',', '.') . "<br>";
echo "Média de preços: R$ " . number_format($resultado['media'], 2, ',', '.') . "<br>";
if ($resultado['pesquisa']) {
    echo "Pesquisa (Feijão): R$ " . number_format($resultado['pesquisa']['preco'], 2, ',', '.') . "<br>";
}
