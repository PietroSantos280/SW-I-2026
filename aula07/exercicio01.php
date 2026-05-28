<!-- Exercício 1: Tabela Estilizada com Cores Alternadas (FOR)
• Crie uma tabela de 8 linhas e 4 colunas.
• Estilize para que as linhas ímpares e pares tenham cores de fundo
diferentes -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1: Tabela Estilizada com Cores Alternadas</title>
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
    <table>
        <?php
    for($linha=1; $linha<=8; $linha++){
                echo"<tr>";
                if ($linha % 2 == 0){
                    for ($coluna = 1; $coluna <= 4; $coluna++){
                        echo "<td style='background-color: red;'>Coluna $coluna</td>";
                    }
                } else {
                    for ($coluna = 1; $coluna <= 4; $coluna++){
                        echo "<td style='background-color: blue;'>Coluna $coluna</td>";
                    }
                }
                echo"</tr>";
            }
?>

    </table>    
</body>
</html>
