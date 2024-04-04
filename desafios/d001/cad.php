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
    </header>
    <main>
        <h1>Resultado</h1>
        <?php 
            $n = $_GET["numero"] ?? 0;
            $antes = $n - 1;
            $depois = $n + 1;
            
            echo "<p>O número escolhido foi o $n</p>";
            echo "<p>O sucesso é $depois</p>";
            echo "<p>O antecessor é $antes</p>";
        ?>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </main>
</body>
</html>