<!-- Exercício 09 — Filtrar números pares
Dado um vetor com os números de 1 a 10, crie um novo vetor contendo apenas os números
pares e exiba-os.
💡 Dica: Use o operador módulo %: se $n % 2 == 0 o número é par. Ou use array_filter(). -->
<?php
$vetor =[1,2,3,4,5,6,7,8,9,10];
foreach ($vetor as $chave) {
    if($chave %2 == 0 ){
        echo("$chave é par <br>");
    } else{
        echo("$chave é impar <br>");
    }
}
?>