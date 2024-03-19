<?php
//1. Faça um script que peça um número e então mostre a mensagem “O númeroinformado foi [número]”
$num = 10;

echo "O número informado foi: " . $num;

//2. Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo. Obs. procure por M_PI.

$raio = 20;
$perimetro = 2 * 3.14 * $raio;

echo "<br>O perímetro é: " . $perimetro;

//3. Faça um script que peça dois números e imprima a soma.

$num1 = 2;
$num2 = 2;
$soma = $num1 + $num2;

echo "<br>A soma é: " . $soma;

//4. Faça um script que peça 3 notas de um aluno e mostre sua média.

$nota1 = 8;
$nota2 = 6;
$nota3 = 7;

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "<br>A média do aluno é :" . $media;

//5. Faça um script que converta metros para centímetros.

$metros = 100;
$centimetros = $metros * 100;

echo "<br> Conversão: " . $centimetros . "cm";

//6. Faça um script que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário.

$lado = 2;
$area = $lado * $lado;
$dobro = $area * $area;

echo "<br> O dobro da área é: " . $dobro;

//7. Faça um script que pergunte quanto você ganha por hora e o número dehoras trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês

$valorhr = 14;
$horas = 196;
$salario = $horas * $valorhr;

echo "<br> Salário do mês: " . $salario;

//8. Faça um script que peça a temperatura em graus Fahrenheit, transforme e mostre a temperatura em graus Celsius. C = (5 * (F-32) / 9).

$far = 85;
$celsius = 5 * ($far - 32) / 9;
$celsius = number_format($celsius, 2);

echo "<br>Temperatura: " . $celsius . "°c";

//9. Faça um script que peça a temperatura em graus Celsius, transforme e mostre em graus Fahrenheit.

$tempc = 24;
$farenheit = $tempc * 1.8 + 32;

echo "<br>Temperatura em Farenheit: " . $farenheit . "°";

//10. Faça um script que peça 2 números inteiros e um número real. Calcule e mostre:
//a. O produto do dobro do primeiro com metade do segundo.
//b. A soma do triplo do primeiro com o terceiro.
//c. O terceiro elevado ao cubo.

$int1 = 6;
$int2 = 4;
$numr = 2;

$a = ($int1 * 2) + ($int2 / 2);
$b = ($int1 * 3) + $numr;
$c = $numr * $numr * $numr;

echo "<br>A - resultado:" . $a;
echo "<br>B - resultado:" . $b;
echo "<br>C - resultado:" . $c;

//11. Tendo como dados de entrada a altura de uma pessoa, construa um script que calcule seu peso ideal, usando a seguinte fórmula:
//a. Para homens: (72.7*h) - 58
//b. Para mulheres: (62.1*h) - 44.7

$alturam = 1.80;
$alturaf = 1.70;

$homens = (72.7 * $alturam) - 58;
$mulheres = (62.1 * $alturaf) - 44.7;

echo "<br>A - Peso ideal masculino: " . $homens . "KG";
echo "<br>B - Peso ideal feminino: " . $mulheres . "KG";

//12. Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.

$number1 = 10;
$number2 = 5;
$result = ($number1 + $number2) * $number1;

echo "<br> Resultado: " . $result;

//13. Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media e exiba para o usuário oresultado

$val1 = 6;
$val2 = 12;
$val3 = 24;
$mediaval = ($val1 + $val2 + $val3) / 3;

echo "<br> Média dos valores: " . $mediaval;

//14. Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 15% deste valor.

$numb = 10;
$numbpercent = $numb * 0.85;

echo "<br> 15% do valor é : " . $numbpercent;

//15. Escreva um algoritmo que receba um valor, calcule e mostre para ousuário 5% e 50% deste valor.

$numero = 50;
$cinco = $numero * 0.95;
$cinquenta = $numero * 0.5;

echo "<br>5% do valor é: " . $cinco . " e 50% do valor é: " . $cinquenta;

//16. Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados e mostre o resultado.

$num1 = 6;
$num2 = 2;
$quad1 = $num1 * $num1 * $num1 * $num1;
$quad2 = $num2 * $num2 * $num2 * $num2;
$soma = $quad1 + $quad2;

echo "<br>A soma é: " . $soma;

//17. Escreva um algoritmo que leia a velocidade de um objeto em m/s(metros por segundo), calcule e exiba para o usuário a velocidade em km/h.

$velobj = 10;
$velkmh = $velobj * 3.6;

echo "<br>Velocidade: " . $velkmh . "Km/h";

//18. Escreva um algoritmo que leia a altura e o peso de uma pessoa,calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário.

$altura = 1.70;
$peso = 50;
$imc = $peso / ($altura * $altura);

echo "<br>IMC: " . $imc;

//19. Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 9%