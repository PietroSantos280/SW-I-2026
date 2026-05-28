<!-- Exercício 07 — Ordenar um vetor
Crie um vetor com 6 números desordenados e exiba-os em ordem crescente e em ordem
decrescente.
💡 Dica: Use sort($vetor) para crescente e rsort($vetor) para decrescente. -->
<?php
$vetor = [6,9,26,4,16,1];
echo "Crescente:<br>";
sort($vetor);
foreach ($vetor as $chave) {  
        echo"$chave <br>";
   }
  echo"<hr>";

echo "decrescente:<br>";
rsort($vetor);
foreach ($vetor as $chave) {  
        echo"$chave <br>";
   }
?>