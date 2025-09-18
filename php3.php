<?php
$alunos = [
    ['nome' => 'Juca', 
    'idade' => 29,
    'notaFinal' => 9.5

    ],

    ['nome' => 'Paulo', 
    'idade' => 25, 
    'notaFinal' => 8.0
    ],

    ['nome' => 'Caio', 
    'idade' => 26, 
    'notaFinal' => 9.9
    ],

    ['nome' => 'Kiara', 
    'idade' => 21, 
    'notaFinal' => 7.1
    ],

    ['nome' => 'Rafaela', 
    'idade' => 20, 
    'notaFinal' => 8.7
    ],

    ['nome' => 'Eduardo', 
    'idade' => 23, 
    'notaFinal' => 7.2
    ],

    ['nome' => 'Didi', 
    'idade' => 24, 
    'notaFinal' => 9.5
    ],

    ['nome' => 'Vanessa', 
    'idade' => 32, 
    'notaFinal' => 8.3
    ],

    ['nome' => 'Miguel', 
    'idade' => 23, 
    'notaFinal' => 6.7
    ],

    ['nome' => 'James', 
    'idade' => 16, 
    'notaFinal' => 10.0
    ]
];


$totalNotas = 0;
foreach ($alunos as $aluno) {
    $totalNotas += $aluno['notaFinal'];
}
$media = $totalNotas / count($alunos);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <div class="container">
    <h1>Informações dos Alunos</h1>
    <ul>
    <?php foreach ($alunos as $aluno): ?>
        <li>
        <?= "Nome: " . $aluno['nome'] . "<br>"; ?>
        <?= "Idade: " . $aluno['idade'] . " anos<br>"; ?>
        <?= "Nota Final: " . number_format($aluno['notaFinal'], 1, ',', '.') . "<br><br>"; ?>
        </li>
    <?php endforeach; ?>
    </ul>

    <h2>Média das notas:</h2>
    <p>
        <?= "A média das notas finais é: " . number_format($media, 2, ',', '.') ?>
    </p>
    
    <p><a href="../index.html">Voltar para a página inicial</a></p>
    </div>
</body>
</html>