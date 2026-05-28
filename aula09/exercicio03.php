<!-- Exercício 03 — Somar todos os valores
Crie um vetor com 5 números inteiros e calcule a soma de todos eles usando um laço.
💡 Dica: Acumule a soma em uma variável $soma = 0 e some dentro do foreach. Ou use
array_sum(). -->
<?php
$vetor = [8,7,9,7,9];
$soma = array_sum($vetor);
echo $soma;
?>