<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01 - Lista de Items</title>
</head>
<body>
    <h1>Lista de Items</h1>
    <ul>
        <!-- AQUI COMEÇA O LAÇO DE REPETIÇÃO -->
         <?php
            for($i=1; $i<=3; $i++){
                echo"<li> Item $i </li>";
            }
         ?>
        <!-- AQUI TERMINA O LAÇO DE REPETIÇÃO -->
</ul>
</body>
</html>