<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$soma = $num1 + $num2;
$sub = $num1 - $num2;
$multi = $num1 * $num2;
$divi = $num1 / $num2;

echo "<p>Soma dos números: $soma.</p>";
echo "<p>Subtração dos números: $sub.</p>";
echo "<p>Multiplicação dos números: $multi.</p>";
echo "<p>Divisão dos números: $divi.</p>";
