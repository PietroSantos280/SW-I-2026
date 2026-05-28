<!-- Exercício 08 — Vetor associativo
Crie um vetor associativo com os dados de uma pessoa (nome, idade, cidade) e exiba cada
informação com sua chave.
💡 Dica: Arrays associativos usam chaves: $arr = ["chave" => "valor"]. Use foreach ($arr as $k =>
$v). -->
<?php
$vetor = ["Nome" => "Pietro","Idade" => 16, "Cidade" => "Ribeirão Pires"];
foreach ($vetor as $chave => $valor) {
    echo"Indice: $chave == $valor <br>";
}
?>