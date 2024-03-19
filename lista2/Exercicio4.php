<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio4</title>
</head>

<body>
    <form action="" method="GET">
        <label for="">Informe a letra!</label>
        <input name="letra" type="text">
        <button>Enviar!</button>
    </form>
    <?php

    $letra = $_GET['letra'];

    if (strtolower($letra) == "a"  || strtolower($letra) == "e" || strtolower($letra) == "i" || strtolower($letra) == "o" || strtolower($letra) == "u") {
        echo "Letra informada é uma vogal!";
    } else {
        echo "Letra informada é uma consoante!";
    }







    ?>
</body>

</html>