<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Funções</title>
</head>
<body>
    <h1>Aula de CNW | Exemplo 06 | 11/06/2026</h1> 
</body>
</html>
<?php
// Função que recebe DOIS parâmetros
function calcularTotal($precoUnitario, $quantidade) {
$total = $precoUnitario * $quantidade;
// Se comprou mais de 5 itens,
// ganha frete grátis (desconto extra de R$20)
if ($quantidade > 5) {
$total = $total - 20;
}
return $total;
}
// Usando no sistema da loja:
$precoMouse = 50.00;
$qtdComprada = 6;
$valorFinalDaVenda = calcularTotal($precoMouse,
$qtdComprada);
echo "Você comprou " . $qtdComprada . " mouses.<br>";
echo "O total a pagar é: R$ " . $valorFinalDaVenda;
?>