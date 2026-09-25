<?php

require_once 'funcoes.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de Funções - Ex 15</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: #f5f5f5;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .funcao {
            background: white;
            padding: 20px;
            margin: 15px 0;
            border: 2px solid #333;
        }
        
        .funcao h2 {
            color: #333;
            margin-top: 0;
            font-size: 1.1em;
        }
        
        .resultado {
            background: #f9f9f9;
            padding: 10px;
            margin: 10px 0;
        }
        
        .resultado strong {
            color: #333;
        }
        
        code {
            background: #f0f0f0;
            padding: 2px 5px;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="funcao">
            <h2>1. Calcular IMC</h2>
            <?php
            $imc_resultado = calcularIMC(70, 1.80);
            ?>
            <div class="resultado">
                <strong>Entrada:</strong> Peso: 70kg, Altura: 1.80m<br>
                <strong>Resultado:</strong> IMC = <?php echo $imc_resultado['imc']; ?> (<?php echo $imc_resultado['classificacao']; ?>)
            </div>
        </div>

        <div class="funcao">
            <h2>2. Validar E-mail</h2>
            <?php
            $emails = ['usuario@email.com', 'email_invalido@', 'nome@dominio.com.br'];
            ?>
            <div class="resultado">
                <strong>Testes:</strong><br>
                <?php foreach ($emails as $email): ?>
                    <?php echo $email; ?>: <?php echo validarEmail($email) ? '✓ Válido' : '✗ Inválido'; ?><br>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="funcao">
            <h2>3. Gerar Senha Aleatória</h2>
            <?php
            $senhas_geradas = [gerarSenhaSegura(12), gerarSenhaSegura(16), gerarSenhaSegura(20)];
            ?>
            <div class="resultado">
                <strong>Senhas Geradas:</strong><br>
                Tamanho 12: <code><?php echo $senhas_geradas[0]; ?></code><br>
                Tamanho 16: <code><?php echo $senhas_geradas[1]; ?></code><br>
                Tamanho 20: <code><?php echo $senhas_geradas[2]; ?></code>
            </div>
        </div>

        <div class="funcao">
            <h2>4. Contar Vogais</h2>
            <?php
            $textos_vogais = ['Hello World', 'Programação PHP', 'Lorem ipsum dolor'];
            ?>
            <div class="resultado">
                <strong>Contagem de Vogais:</strong><br>
                <?php foreach ($textos_vogais as $texto): ?>
                    "<?php echo $texto; ?>": <?php echo contarVogais($texto); ?> vogais<br>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="funcao">
            <h2>5. Inverter Texto</h2>
            <?php
            $texto_inverter = "PHP é fantástico!";
            $invertido = inverterTexto($texto_inverter);
            ?>
            <div class="resultado">
                <strong>Original:</strong> <?php echo $texto_inverter; ?><br>
                <strong>Invertido:</strong> <?php echo $invertido; ?>
            </div>
        </div>

        <div class="funcao">
            <h2>6. Calcular Idade</h2>
            <?php
            $data_nasc = '1995-05-15';
            $idade = calcularIdade($data_nasc);
            ?>
            <div class="resultado">
                <strong>Data de Nascimento:</strong> <?php echo $data_nasc; ?><br>
                <strong>Idade Atual:</strong> <?php echo $idade; ?> anos
            </div>
        </div>

        <div class="funcao">
            <h2>7. Converter Moeda</h2>
            <?php
            $valor_usd = 100;
            $valor_brl = converterMoeda($valor_usd, 'USD', 'BRL');
            $valor_eur = converterMoeda($valor_usd, 'USD', 'EUR');
            ?>
            <div class="resultado">
                <strong>Conversões de USD 100:</strong><br>
                Para BRL: R$ <?php echo number_format($valor_brl, 2, ',', '.'); ?><br>
                Para EUR: € <?php echo number_format($valor_eur, 2, ',', '.'); ?>
            </div>
        </div>

        <div class="funcao">
            <h2>8. Formatar Telefone</h2>
            <?php
            $telefones = ['11987654321', '1133334444', '85999887766'];
            ?>
            <div class="resultado">
                <strong>Telefones Formatados:</strong><br>
                <?php foreach ($telefones as $tel): ?>
                    <?php echo formatarTelefone($tel); ?><br>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="funcao">
            <h2>9. Gerar Saudação Conforme Horário</h2>
            <?php
            $saudacao_manha = gerarSaudacao('João', 8);
            $saudacao_tarde = gerarSaudacao('Maria', 14);
            $saudacao_noite = gerarSaudacao('Pedro', 20);
            ?>
            <div class="resultado">
                <strong>Saudações:</strong><br>
                <?php echo $saudacao_manha; ?><br>
                <?php echo $saudacao_tarde; ?><br>
                <?php echo $saudacao_noite; ?>
            </div>
        </div>

        <div class="funcao">
            <h2>10. Validar Senha Forte</h2>
            <?php
            $senhas_teste = ['abc123', 'Abcd1234!', 'SenhaForte123@'];
            ?>
            <div class="resultado">
                <strong>Validações de Senha:</strong><br>
                <?php foreach ($senhas_teste as $senha): ?>
                    <strong>Senha:</strong> <code><?php echo $senha; ?></code><br>
                    <?php 
                    $validacao = validarSenhaForte($senha);
                    if ($validacao['valida']) {
                        echo '✓ ' . $validacao['mensagem'];
                    } else {
                        echo '✗ Erros:<br>';
                        foreach ($validacao['erros'] as $erro) {
                            echo '  - ' . $erro . '<br>';
                        }
                    }
                    ?>
                    <br>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>
