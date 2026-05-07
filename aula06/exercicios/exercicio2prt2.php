<?php
    $linha = $_POST["linha"];
    $coluna = $_POST["coluna"];
    if ($linha <= 0 || $coluna <= 0){
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Tabela dinâmica</title>
        <style>
        table, tr, th, td{
    border: 1px solid black;
    padding: 5px;
    border-radius: 5px;
    background-color: white;
        }
    </style>
</head>
<body>
    <h1>Exercício 02 - Tabela dinâmica</h1>
    <table>
        <?php
            for ($i = 1; $i <= $linha; $i++){
                echo "<tr>";
                for ($c = 1; $c <= $coluna; $c++){
                    echo "<td>Coluna $c</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>