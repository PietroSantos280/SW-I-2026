<!-- Exercício 4: Lógica e Condições dentro da Função. Vamos criar um validador de senhas simples
para uma fechadura inteligente. Crie uma função chamada
verificarAcesso($senhaDigitada).
• Se a senha recebida for igual a "123456", a função deve retornar a palavra "Acesso Liberado".
• Caso contrário, deve retornar "Acesso Negado".
Teste a função duas vezes, uma com a senha correta e outra com uma senha errada, imprimindo
os resultados na tela. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Funções</title>
</head>
<body>
    <h1>Aula de CNW | Exercicio 04 | 11/06/2026</h1>
</body>
</html>
<?php
    function verificarAcesso($senhaDigitada){
        switch ($senhaDigitada) {
            case '123456':
                echo "Acesso Liberado";
                break;
            default:
                echo "Acesso Negado";
                break;
        }
    }
    verificarAcesso("123456");
?>