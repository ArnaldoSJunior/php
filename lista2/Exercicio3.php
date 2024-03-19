<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio3</title>
</head>


<body>
    <form action="" method="GET">
        <label for="">Sexo:</label>
        <input name="sexo" type="text">
        <button>Enviar!</button>
    </form>
    <?php

    $sexo = $_GET["sexo"];


    if ($sexo == 'm') {
        echo "M - Masculino!";
    } else if ($sexo == 'f') {
        echo "F - Feminino!";
    } else {
        echo "Sexo inválido!";
    }



    ?>
</body>

</html>