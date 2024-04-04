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
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $num = $_GET["valor"] ?? 0;
            

            $dolar = $num / 5.02;
            // $dolar = number_format($dolar,2,',',".");
            // $num = number_format($num,2,',',".");

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Os seus " . numfmt_format_currency($padrao, $num, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>