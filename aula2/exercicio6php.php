<html>
<head>
<title>Tabela
</title>
</head>
<body>
<h1>Tabela código, nome e sigla
</h1>
<br>
<table style="border: 1px solid black; ">
<tr>
<td>codigo</td>
<td>nome</td>
<td>sigla</td>
</tr>
<?php
//Aqui acabei usando um include, para nao ficar muito pesado, eu baixei o arquivo e coloquei na mesma pasta
include 'estados-e-municipios.php';
foreach($estados as $c => $a)
{
echo("<tr>");
echo('<td>');
echo($c);
echo("</td>");
echo("<td>");
echo($a["nome"]);
echo("</td>");
echo("<td>");
echo($a["sigla"]);
echo("</td>");
echo("</tr>");
}
?>
</table>
<table style="border: 1px solid black; ">
<br>
<h2>Tabela de cidades</h2>
<br>
<tr>
<td>Código</td>
<td>Nome</td>
</tr>
<?php
foreach($municipios as $c => $a)
{
echo("<tr>");
echo('<td>');
echo($c);
echo("</td>");
echo("<td>");
echo($a);
echo("</td>");
echo("</tr>");
}
\\ps: sdds python
\\ps2: a maioria dos algoritmos foram testados no site -> http://phptester.net
?>
</table>
</body>
</html>