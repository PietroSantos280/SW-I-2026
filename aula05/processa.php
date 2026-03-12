<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Dados</title>
</head>
<body>

    <?php
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $idade = $_GET['idade'];
        
        $ano = date('Y');
        $calculo = $ano - $idade;
        //echo $ano;

        //echo "O nome é: $nome";
        
    ?>

    <p>O nome digitado é : <?php echo $nome; ?></p>
    <p>O email digitado é : <?php echo $email; ?></p>
    <p>O idade digitado é : <?php echo $idade; ?></p>
    <p>seu ano de nascimento é : <?php echo $calculo; ?></p>
</body>
</html>