<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Funções</title>
</head>
<body>
    <h1>Aula de CNW | Exemplo 02 | 11/06/2026</h1> 
</body>
</html>
<?php
    $n = $_POST['nome'];    
    function msg($nome){
        echo "Bom Dia $nome!!!<br>";
    }
    msg($n);
    msg("Pablo");
?>