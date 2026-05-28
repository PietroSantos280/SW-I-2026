<!-- Exercício 06 — Verificar se um valor existe
Dado um vetor de nomes, verifique se o nome "Carlos" está na lista e exiba uma mensagem
de resultado.
💡 Dica: A função in_array("valor", $vetor) retorna true se o valor existir. -->
<?php
$vetor = ["Pietro", "Lucas", "Carlos", "Pablo"];
$confirma = in_array("Carlos", $vetor);
echo $confirma;
?>