<?php
$produtos = [
    [
        "nome" => "Teclado",
        "preco" => 349.99,
        "categoria" => "Eletrônico"
    ],
    [
        "nome" => "Mouse",
        "preco" => 49.99,
        "categoria" => "Eletrônico"
    ],
    [
        "nome" => "Violão",
        "preco" => 2045.99,
        "categoria" => "Instrumento"
    ],
    [
        "nome" => "Pano",
        "preco" => 20.99,
        "categoria" => "Limpeza"
    ]
];

$cores_categorias = [
    "Eletrônico" => "#4400ff",
    "Instrumento" => "#ff0000",
    "Limpeza" => "#73ff00"
];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Tabela de produtos</title>
    <style>
        table {
            border: 1px solid black;
            background-color: black;
            border-radius: 5px;
        }

        table th,
        table td {
            border: 1px solid black;
            padding: 5px;
            border-radius: 5px;
        }

        table th{
            background-color: white;
        }
    </style>
</head>

<body>
    <h1>Exercício 03 - Tabela de produtos</h1>
    <table>
        <tr>
            <th>Produto</th>
            <th>Valor</th>
            <th>Categoria</th>
        </tr>
        <?php
        foreach ($produtos as $produto) {
            $categoriaAtual = $produto['categoria'];
            $corFundo = $cores_categorias[$categoriaAtual];
            echo "<tr style='background-color: $corFundo !important;'>";
            echo "<td>" . $produto['nome'] . "</td>";
            echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
            echo "<td>" . $produto['categoria'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>