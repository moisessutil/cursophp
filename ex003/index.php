<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php
        // 0x = hexadecimal, 0b = binario, 0 = octal
        // $num = 010;
        // echo "O valor da variavel é $num";

        // $v = true;
        // var_dump($v);

        // $num = (int)3e2;
        // var_dump($num);

        // $casado = false;
        // var_dump($casado);

        // $vet = [4, 8.89, false, "carlos"];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);

    ?>
</body>
</html>