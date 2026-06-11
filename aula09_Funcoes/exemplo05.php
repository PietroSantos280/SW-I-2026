<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Funções</title>
</head>
<body>
    <h1>Aula de CNW | Exemplo 05 | 11/06/2026</h1> 
</body>
</html>
<?php
function calcularDesconto($valorDaCompra) {
// Calculamos o desconto (10% do valor)
$desconto = $valorDaCompra * 0.10;
// Subtraímos o desconto do valor original
$valorFinal = $valorDaCompra - $desconto;
// Devolvemos o valor final pronto!
return $valorFinal;
}
// Usando a função na prática:
$totalCarrinho = 250.00;
$valorAPagar = calcularDesconto($totalCarrinho);
echo "Valor original: R$ " . $totalCarrinho . "<br>";
echo "Valor com desconto: R$ " . $valorAPagar;
?>