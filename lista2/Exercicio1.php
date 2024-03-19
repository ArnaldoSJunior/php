<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1</title>
</head>

<body>
    <form action="" method="GET">
        <label>Digite primeiro número</label>
        <input type="text" name="num1"><br>
        <label>Digite segundo número</label>
        <input type="text" name="num2"><br>
        <button type="submit">Verificar!</button>
    </form>


    <?php

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    if ($num1 > $num2) {
        echo "O primeiro número é maior!";
    } else {
        echo "O segundo número é o maior!";
    }





    ?>





</body>

</html>