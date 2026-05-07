<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Tabela colorida</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exercício 01 - Tabela colorida</h1>
    <table>
        <?php
            for ($linha = 1; $linha <= 8; $linha ++){
                echo "<tr>";
                if ($linha % 2 == 0){
                    for ($coluna = 1; $coluna <= 4; $coluna++){
                        echo "<td style='background-color: var(--impar);'>Coluna $coluna</td>";
                    }
                } else {
                    for ($coluna = 1; $coluna <= 4; $coluna++){
                        echo "<td style='background-color: var(--par);'>Coluna $coluna</td>";
                    }
                }
                echo "<tr>";
            }
        ?>
    </table>
</body>
</html>