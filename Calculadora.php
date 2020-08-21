<?php
class calculadora
{

 function soma()
 {  
 $num1 = 10;
 $num2 = 5;
 $resultado = $num1 + $num2;
 echo "Soma: ".$resultado."\n";
 }

 function divi()
 {  
 $num1 = 10;
 $num2 = 5;
 $resultado = $num1 / $num2;
 echo "Divisão: ".$resultado."\n";
 }

 function sub()
 {  
 $num1 = 10;
 $num2 = 5;
 $resultado = $num1 - $num2;
 echo "Subtração: ".$resultado."\n";
 }

 function multi()
 {  
 $num1 = 10;
 $num2 = 5;
 $resultado = $num1 * $num2;
 echo "Multiplicação: ".$resultado."\n";
 }

}

calculadora::soma();
calculadora::divi();
calculadora::sub();
calculadora::multi();
