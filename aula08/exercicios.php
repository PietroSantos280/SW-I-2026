<!-- Exercícios
1.Crie um array com 5 nomes e exiba todos.
2.Adicione um novo nome ao array e exiba.
3.Modifique o segundo nome da lista.
4.Crie um array de 10 números e calcule a média.
5.Crie um array com os dias da semana e exiba os dias úteis. 

Funções:
• count() - Conta o número de elementos.
• array_push() -Adiciona um ou mais elementos no final.
• array_pop() - Remove o último elemento.
• array_shift() - Remove o primeiro elemento.
• array_unshift() - Adiciona um ou mais elementos no início.
• sort() - Ordena o array.
• array_slice() - Extrai uma parte do array. -->

<?php
//---------------------------------------------------------------------------------------------------
echo"1.Crie um array com 5 nomes e exiba todos. <br>";
  $nomes = ["Pietro", "Pablo", "Pedro", "Vitor", "Samir"];
  foreach ($nomes as $chave) {
       echo"$chave <br>";
  }
  echo"<hr>";
//---------------------------------------------------------------------------------------------------
echo"2.Adicione um novo nome ao array e exiba. <br>";
array_push($nomes,"Rafael");
    
foreach ($nomes as $chave) {
    echo "$chave <br>";
}
  echo"<hr>";
//---------------------------------------------------------------------------------------------------
echo"3.Modifique o segundo nome da lista. <br>";
$nomes[1]= "Robson";    
foreach ($nomes as $chave) {
    echo "$chave <br>";
}
  echo"<hr>";
//---------------------------------------------------------------------------------------------------
echo "4.Crie um array de 10 números e calcule a média. <br> ";
$numeros = [8,9,7,9,8,9,10,6,7,8];
$qtde = count($numeros);
$total = 0;
for ($i=0; $i <=$qtde -1 ; $i++) { 
    $total = $total + $numeros[$i];
}
$media = $total/$qtde;
echo "$media <br>";
echo"<hr>";
//---------------------------------------------------------------------------------------------------
echo "5.Crie um array com os dias da semana e exiba os dias úteis. <br>";
$dias = ["domingo","segunda","terça","quarta","quinta","sexta","sábado"];
foreach ($dias as $chave) {
    if ($chave == "domingo") || ($chave == "sábado") {
    }
}
?>