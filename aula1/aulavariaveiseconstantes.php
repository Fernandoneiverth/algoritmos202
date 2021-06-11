<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>aula 02 variables</title>
</head>
<body>
<?php
/*
inteiros = int; numeros n decimais positivos && negativos
ponto flutuante = float, double, real; decimais
string = text
booleanos = verdadeiro && false
arrays = vetores e matrizes
objetos = instancias
recursos = variaveis especiais do php
nulo = 0;
*/
$idade = '18';
$altura = '1.81';
$nome = "fernando neiverth";
$solteiro = true; 
$numero = 40;
function calc(){
	global $numero;
	echo $numero;
}

define('CONFIG', 1500, true);
echo CONFIG;
//calc();
/*echo $idade;
echo gettype($idade);
echo $idade + $idade;
*/
//$cadastro = array(
//'cliente 1' => array(
//'nome' => 'fernando',
//'idade' => 20)
//'cliente 2' => array(
//'nome' => 'fernando neiverth',
//'idade' => 10)
//)
//);
echo "oi meu nome é $nome e tenho $altura metros";
?>
</body>
</html>