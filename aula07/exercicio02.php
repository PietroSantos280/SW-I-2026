<!-- Exercício 2: Tabela Dinâmica com Input do Usuário (WHILE)
• Permita que o usuário defina o número de linhas e colunas da tabela
através de um formulário HTML.
• Gere a tabela dinamicamente usando PHP e um laço while. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2: Tabela Dinâmica com Input do Usuário</title>
</head>
<body>
        <form action="exercicio2prt2.php" method="POST">
        <label for="linha">Quantidade de linha:</label>
        <br>
        <input type="number" name="linha">
        <br>
        <label for="coluna">Quantidade de coluna:</label>
        <br>
        <input type="number" name="coluna">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>