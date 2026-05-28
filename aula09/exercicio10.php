<!-- Exercício 10 — Calcular a média
Crie um vetor com as notas de um aluno em 4 provas e calcule e exiba a média final.
💡 Dica: Divida a soma pelo número de elementos: $media = array_sum($notas) / count($notas). -->
<?php
$notas = [8,9,7,9];
$qtde = count($notas);
$total = 0;
for ($i=0; $i <=$qtde -1 ; $i++) { 
    $total = $total + $notas[$i];
}
$media = $total/$qtde;
echo "a media é: $media <br>";
?>