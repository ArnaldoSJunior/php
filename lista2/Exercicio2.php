<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
</head>

<body>
    <form action="" method="GET">
        <label for="">Digite um número!</label>
        <input name="num" type="text">
        <button>Verificar!</button>
    </form>
    <?php

    $num = $_GET["num"];

    if ($num > 0) {
        echo "Número POSITIVO!";
    } else {
        echo "Número NEGATIVO!";
    }



    ?>

</body>

</html>