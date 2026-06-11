<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Funções</title>
</head>

<body>
    <h1>Aula de CNW | Exemplo 04 | 11/06/2026</h1>
</body>

</html>
<?php
// function msg($periodo){
//     if ($periodo == "manhã") {
//         return "Bom Dia !!!<br>";
//     } else {
//         if ($periodo == "tarde") {
//             return "Boa Tarde !!!<br>";
//         } else {
//             if ($periodo == "noite") {
//                 return "Boa Noite !!!<br>";
//             } else {
//                 return "Periodo inválido";
//             }
//         }
//     }
// }

function msg($periodo){
    switch ($periodo) {
        case 'manhã' || "MANHÃ":
            echo "Bom Dia !!!<br>";
            break;
        case 'tarde':
            echo "Boa Tarde !!!<br>";
            break;
        case 'noite':
            echo "Boa Noite !!!<br>";
            break;
        default:
            echo "periodo inválido";
            break;
    }
}
$resultado = msg ("manhã");
echo $resultado;
?>