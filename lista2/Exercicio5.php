<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio5</title>
</head>

<body>
    <form action="" method="GET">
        <label for="">Informe nota 1:</label>
        <input name="nota1" type="text"><br>
        <label for="">Informe nota 2:</label>
        <input name="nota2" type="text"><br>
        <button>Enviar</button>
    </form>
    <?php
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $media = ($nota1 + $nota2) / 2;

    if ($media == 100) {
        echo "Aprovado com Distinção!";
    } else if ($media >= 70) {
        echo "Aprovado! ";
    } else {
        echo "Reprovado!";
    }

    ?>
</body>

</html>