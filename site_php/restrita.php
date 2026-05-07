<?php
    $nome = $_GET["nome"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página restrita</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
      <!-- Bootstrap icons-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="estilo.css" rel="stylesheet" />
</head>
<body>
    <main class="secreto grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-base font-semibold text-indigo-600 erros display-3 fw-bolder mb-5 text-gradient d-inline">PARABÉNS</p>
            <h1 class="mt-4 text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl"><?php echo$nome; ?> você conseguiu acessar a página secreta</h1>
            <h2 class="mt-6 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Essa página é para clientes especificos</h2>
            <div class="mt-10 flex items-center justify-center gap-x-6">
            <a class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
            <a class="text-sm font-semibold text-gray-900"><form action="http://localhost/SW-I-2026/aula06/formulario.php"><input type="submit" class="btn btn-primary botao" value="Voltar"></form>                     
            <img class= "img2 "src="img/img2.jpg" alt="erro"> 
            </div>
        </div>
    </main>    
</body>
</html>

