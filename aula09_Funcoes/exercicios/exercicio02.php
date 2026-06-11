<!-- Exercício 2: Enviando um Comando (Com 1 parâmetro). Imagine que estamos programando o
painel de controle de um braço robótico. Crie uma função chamada
movimentarMotor($graus) que receba um número como parâmetro. A função deve
imprimir na tela a mensagem:
"Movendo o servo motor para [graus] graus.". Teste a função
passando o valor 90. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Funções</title>
</head>
<body>
    <h1>Aula de CNW | Exercicio 02 | 11/06/2026</h1>
</body>
</html>
<?php
    function movimentarMotor($graus){
        echo "Movendo o servo motor para ". $graus,"° graus.";
    }
    movimentarMotor(90)


?>