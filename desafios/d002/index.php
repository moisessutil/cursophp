<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Gerador de Números Aleatórios</h1>
    </header>
    <main>
    
        <?php 
            $max = 100;
            $min = 0;
            $num = mt_rand($min, $max);
            echo "<p>Gerando um número aleatório entre $min e $max... <br>O valor gerado foi $num</p>"
        ?>
        <button onclick="javascript:document.location.reload()">Gerar Outro</button>
    </main>
</body>
</html>