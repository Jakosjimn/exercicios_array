<?php
$mensagem = "";
$numeros = range(1, 10);
$soma = array_sum($numeros); 
$numeros_invertidos = array_reverse($numeros);
// (comentário de revisão em memória), array range é uma função que cria um array com uma sequência de números, array_sum soma os valores do array, bem mais fácil que somar manualmente e array_reverse inverte a ordem dos elementos do array.
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de Números</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
    <h1>a) Lista de Números de 1 a 10</h1>
    <ul>
        <?php
        foreach ($numeros as $numero) {
            echo "<li>$numero</li>";
        }
        ?>
    </ul>

    <h2>b) Soma dos números:</h2>
    <p>A soma é: <?= $soma ?></p>

    <h2>c) Array invertido:</h2>
    <ul>
        <?php
        foreach ($numeros_invertidos as $numero) {
            echo "<li>$numero</li>";
        }
        ?>
    </ul>
    <p><a href="../index.html">Voltar para a página inicial</a></p>
    </div>
</body>
</html>