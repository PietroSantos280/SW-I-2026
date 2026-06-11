<!-- Exercício 3: Processando Dados (Com parâmetros e retorno). Você está desenvolvendo um
aplicativo para pilotos de drones DJI Mini. Crie uma função chamada
calcularAutonomia($capacidadeBateria, $consumoPorMinuto). A função deve
dividir a capacidade da bateria pelo consumo para descobrir quantos minutos o drone ainda pode
voar, e retornar esse valor. Ao final, guarde o retorno em uma variável e imprima na tela:
"Tempo
estimado de voo: [resultado] minutos." -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Funções</title>
</head>
<body>
    <h1>Aula de CNW | Exercicio 03 | 11/06/2026</h1>
</body>
</html>
<?php
    function calcularAutonomia($capacidadeBateria, $consumoPorMinuto){
        $tempoestimado = $capacidadeBateria/ $consumoPorMinuto;
        return $tempoestimado;
    }
    $resultado = calcularAutonomia(2590, 75);
    $fim = round($resultado, 2);
    echo "Tempo estimado de voo: $fim minutos." ;

?>