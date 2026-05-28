<!-- Exercício 05 — Adicionar e remover elementos
Comece com um vetor de 3 cores. Adicione uma nova cor ao final e remova a primeira cor.
Exiba o resultado.
💡 Dica: Use array_push() para adicionar ao final e array_shift() para remover o primeiro elemento. -->
<?php
$vetor = ["Preto", "Branco", "Vermelho"];
array_push($vetor, "Amarelo");
array_shift($vetor);
foreach ($vetor as $chave) {
       echo"$chave <br>";
  }

?>