<?php
$produtos = [
    [
        'nome' => 'TV',
        'preco' => 5600.00,
        'estoque' => 8
    ],
    [
        'nome' => 'Notebook',
        'preco' => 3500.00,
        'estoque' => 5
    ],
    [
        'nome' => 'Smartphone',
        'preco' => 2800.00,
        'estoque' => 15
    ],
    [
        'nome' => 'Câmera',
        'preco' => 1500.00,
        'estoque' => 10
    ],
    [
        'nome' => 'Fone de Ouvido',
        'preco' => 600.00,
        'estoque' => 25
    ]
];

//usada inteligência artificial para formatar os preços para estilo
function formatarPreco($preco) {
    return "R$ " . number_format($preco, 2, ',', '.');
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
    <h1>Lista de Produtos</h1>

    <h2>a, b) Produtos Originais:</h2>
    <ul>
        <?php
        foreach ($produtos as $produto) {
            echo "<li>";
            echo "Produto: " . $produto['nome'] . "<br>";
            echo "Preço: " . formatarPreco($produto['preco']) . "<br>";
            echo "Quantidade: " . $produto['estoque'];
            echo "</li><br>";
        }
        ?>
    </ul>

    <?php
    // c) Aplicar 10% de desconto
    foreach ($produtos as &$produto) {
        $produto['preco'] *= 0.9;
    }
    ?>

    <h2>c) Produtos com 10% de desconto:</h2>
    <ul>
        <?php
        foreach ($produtos as $produto) {
            echo "<li>";
            echo "Produto: " . $produto['nome'] . "<br>";
            echo "Preço com desconto: " . formatarPreco($produto['preco']) . "<br>";
            echo "Quantidade: " . $produto['estoque'];
            echo "</li><br>";
        }
        ?>
        
    <p><a href="../index.html">Voltar para a página inicial</a></p>
    </ul>
    </div>
</body>
</html>