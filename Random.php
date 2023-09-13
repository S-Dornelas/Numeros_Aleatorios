<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Trabalhando com números aleatórios</title>
</head>
<body>
    <header>
        <h1>Sorteador de Números Aleatórios</h1>
    </header>

    <main>
        <?php 
        $menorNumero = $_GET["menorNumero"] ?? 0;
        $maiorNumero = $_GET["maiorNumero"] ?? 0;
        $numeroAleatorio = mt_rand($menorNumero, $maiorNumero); 
        //o mt_rand é a forma mais rápida de realizar o processamento.
        //o randm_int() gera números aleatórios criptograficamente seguros.

        echo "Gerando um múmero aleatório entre $menorNumero e $maiorNumero. <br>";
        echo "<h2>O numero gerado é $numeroAleatorio</h2>";
        ?>

        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>